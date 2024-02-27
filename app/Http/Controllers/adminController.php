<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function loginAdmin(Request $request){
        
        $credentials = $request->only('id','password');

        if(Auth::guard('admin')->attempt($credentials)){
            
            $user = Auth::guard('admin')->user();

            session()->put('admin_info', $user->nom_complet);

            return redirect()->route('');
        }
    }

    public function logoutAdmin(Request $request){
        Auth::guard('admin')->logout();

        session()->forget('admin_info');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('');
    }

    public function menArticle(){

        $menArticle = DB::table('articles as a')
                    ->join('article_categories as ac','ac.id_categorie', '=', 'a.id_categorie')
                    ->select('a.*')
                    ->where('ac.id_categorie', '=', 'homme')
                    ->get();
        
        return view('',compact('menArticle'));

    }

    public function womenArticle(){

        $womenArticle = DB::table('articles as a')
                    ->join('article_categories as ac','ac.id_categorie', '=', 'a.id_categorie')
                    ->select('a.*')
                    ->where('ac.id_categorie', '=', 'femme')
                    ->get();
        
        return view('',compact('womenArticle'));

    }

    public function accessoireArticle(){

        $accessoireArticle = DB::table('articles as a')
                    ->join('article_categories as ac','ac.id_categorie', '=', 'a.id_categorie')
                    ->select('a.*')
                    ->where('ac.id_categorie', '=', 'accessoire')
                    ->get();
        
        return view('',compact('accessoireArticle'));

    }

    public function createArticle(Request $request){

        $id = strval(time());

        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        DB::table('articles')->insert([
            'id' => $id,
            'nom' => $request->nom,
            'prix' => $request->prix,
            'lien' => $request->lien,
            'description' => $request->description,
            'id_categorie' => $request->id_categorie
        ]);

        $image1 = $request->file('image1');
        $fileName = $image1->getClientOriginalName();
        $filePath1 = $image1->storeAs('images', $fileName, 'public');


        DB::table('image_articles')->insert([
            'nom_image' => $filePath1,
            'id' => $id
        ]);


        $image2 = $request->file('image2');
        $fileName = $image2->getClientOriginalName();
        $filePath2 = $image2->storeAs('images', $fileName, 'public');


        DB::table('image_articles')->insert([
            'nom_image' => $filePath2,
            'id' => $id
        ]);

    }
}
