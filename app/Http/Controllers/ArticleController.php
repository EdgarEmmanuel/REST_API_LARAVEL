<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAll(){
        return response()->json(Articles::all(),200);
    } 

    public function getOneArticle($id){
        return response()->json(Articles::find($id),200);
    }

    public function AddArticle(Request $request){
        return Articles::create([
            "title"=>$request->get("title"),
            "body" => $request->get("body")
        ]);
    }


    public function UpdateOneArticle(Request $request,$id){
        $article = Articles::findOrFail($id);

        $article->update([
            "title" => $request->get("title"),
            "body" => $request->get("body")
            ]);

        return response()->json($article,201);
    }


    public function DeleteOneArticle(Request $request,$id){
        $article = Articles::findOrFail($id);

        $article->delete();

        return response()->json(["success"=>"true"],204);
    }


}
