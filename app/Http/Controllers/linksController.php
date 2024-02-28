<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class linksController extends Controller
{
    public function index()
    {
        $manAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'homme')
                ->distinct()
                ->orderByDesc('a.created_at')
                ->limit(8)
                ->get();

                $womanAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'femme')
                ->distinct()
                ->orderByDesc('a.created_at')
                ->limit(8)
                ->get();

                $accessoireAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'accessoire')
                ->distinct()
                ->orderByDesc('a.created_at')
                ->limit(8)
                ->get();

        return view('index',compact('manAll','womanAll','accessoireAll'));
    }
    public function mens()
    {

        $manAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'homme')
                ->distinct()
                ->orderByDesc('a.created_at')
                ->get();


        return view('mens', compact('manAll'));
    }
    public function womens()
    {
        $womanAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'femme')
                ->distinct()
                ->orderByDesc('a.created_at')
                ->get();


        return view('womens',compact('womanAll'));
    }

    public function accessoires()
    {
        $accessoireAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'accessoire')
                ->distinct()
                ->orderByDesc('a.created_at')
                ->get();


        return view('accessoires',compact('accessoireAll'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function women()
    {
        return view('women');
    }
}
