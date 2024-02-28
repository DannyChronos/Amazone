<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function loginAdmin(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {

            $user = Auth::guard('admin')->user();

            session()->put('admin_info', $user->nom_complet);

            return redirect()->route('admin-home');
        } else {
            return redirect()->back()->with('error', 'Identifiant ou mot de passe incorrect');
        }
    }

    public function logoutAdmin(Request $request)
    {
        Auth::guard('admin')->logout();

        session()->forget('admin_info');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin');
    }

    public function menArticle()
    {

        $menArticle = DB::table('articles as a')
            ->select('a.*', 'ai.nom_image', 'c.nom_categorie')
            ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
            ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
            ->where('ai.rn', '=', 1)
            ->where('c.nom_categorie', '=', 'homme')
            ->distinct()
            ->get();

        return view('admin.produitsHommes', compact('menArticle'));
    }

    public function womenArticle()
    {

        $womenArticle = DB::table('articles as a')
        ->select('a.*','ai.nom_image','c.nom_categorie')
        ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
        ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
        ->where('ai.rn', '=', 1)
        ->where('c.nom_categorie', '=', 'femme')
        ->distinct()
        ->get();

        return view('admin.produitsFemmes', compact('womenArticle'));
    }

    public function accessoireArticle()
    {

        $accessoireArticle = DB::table('articles as a')
        ->select('a.*','ai.nom_image','c.nom_categorie')
        ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
        ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
        ->where('ai.rn', '=', 1)
        ->where('c.nom_categorie', '=', 'accessoire')
        ->distinct()
        ->get();

        return view('admin.produitsAccessoires', compact('accessoireArticle'));
    }

    public function createArticle(Request $request)
    {

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

        return redirect()->back()->with('success', 'Article Enregistré avec succès');
    }

    public function deleteArticle($id)
    {

        DB::table('articles')->where('id', '=', $id)->delete();

        return redirect()->back()->with('success', 'Article supprimer avec succès.');
    }

    public function homeAdmin(){

        $men = DB::table('articles as a')
        ->select('a.*')
        ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
        ->where('c.nom_categorie', '=', 'homme')
        ->count();

        $women = DB::table('articles as a')
        ->select('a.*')
        ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
        ->where('c.nom_categorie', '=', 'femme')
        ->count();

        $accessoire = DB::table('articles as a')
        ->select('a.*')
        ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
        ->where('c.nom_categorie', '=', 'accessoire')
        ->count();

        $total = $men + $women + $accessoire;

        return view('admin.home', compact('men','women','accessoire','total'));

    } 
}
