<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articleController extends Controller
{
    
    public function manAll(){
        
        $manAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'homme')
                ->distinct()
                ->get();

        return view('',compact('manAll'));

    }

    public function womanAll(){
        
        $womanAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'femme')
                ->distinct()
                ->get();

        return view('',compact('womanAll'));

    }

    public function accessoireAll(){
        
        $accessoireAll = DB::table('articles as a')
                ->select('a.*','ai.nom_image','c.nom_categorie')
                ->leftJoin(DB::raw('(SELECT *, ROW_NUMBER() OVER (PARTITION BY id ORDER BY id_image) AS rn FROM image_articles) AS ai'), 'a.id', '=', 'ai.id')
                ->join('article_categories AS c', 'a.id_categorie', '=', 'c.id_categorie')
                ->where('ai.rn', '=', 1)
                ->where('c.nom_categorie', '=', 'accessoire')
                ->distinct()
                ->get();

        return view('',compact('accessoireAll'));

    }

}
