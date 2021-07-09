<?php

namespace App\Http\Controllers;

use App\Article;
use App\Article_Tag;
use App\Auteur;
use App\Categorie;
use App\Commentaire;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Events\ArticlePublierEvent;
use App\Newsletter;
use App\User;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('accepter', 'DESC')->get();
        return view('back_office.article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('create.article', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);
        request()->validate([
            "titre"=>"required",
            "text"=>"required",
            "date"=>"required",
            "img_path"=>"required",
            "tag_id"=>"required",
            "categorie_id"=>"required",
        ]);
        $article = new Article();

        $article->titre = $request->titre;
        $article->text = $request->text;
        $article->date = $request->date;
        $article->user_id  = Auth::id();
        $img = $request->file('img_path');
        $newName= Storage::disk('public')->put('', $img);
        $article->img_article= $newName;
        $article->accepter = 'nocheck';

        //  if ( Auth::user()->role_id == 2 ) {
        //     if (isset( $_POST['check'])){
        //         $article->accepter = 'check';
        //     } else {
        //         $article->accepter = 'nocheck';
        //     }
        // } else {
        //     $article->accepter = 'nocheck';
        // }

        $article->save();
        $article->tags()->attach($request->tag_id);
        $article->categories()->attach($request->categorie_id);

        // if ($article->accepter == "check") {
        //     event(new ArticlePublierEvent($article));
        // };
        
        
        return redirect()->route('article.index')->with('success', "Un nouveau article a été crée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $this->authorize('update', User::class);
        $tags = Tag::all();
        $categories = Categorie::all();
        // $article__tags = Article_Tag::all();
        // dd($article__tags);
        return view('edit.article', compact('article', 'categories','tags', ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->authorize('update', User::class);
        request()->validate([
            "tag_id"=>"required",
            "categorie_id"=>"required",
        ],[
            "tag_id.required" => "Tags obligatoire !",
            "categorie_id.required" => "Categories obligatoire !",
        ]);

        $article->titre = $request->titre;
        $article->text = $request->text;
        $article->tags()->sync($request->tag_id);
        $article->categories()->sync($request->categorie_id);

        if ($request->hasFile('img_path')) {
            Storage::disk('public')->delete($article->img_article);
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            $article->img_article = $newName;
        }
        if (isset($_POST["check"])) {
            $article->accepter = "check";      
        } else {
            $article->accepter = "nocheck";   
        };

        $article->save();
   

        if ($article->accepter == "check" && isset( $_POST['news']) ) {
               event(new ArticlePublierEvent($article));
        };
        return redirect()->route('article.index')->with('success', 'Vos modifications on bien été mis à jour !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->img_article);
        // dd($article);
        $article->delete();
        return redirect()->back();
    }

    public function comment(Request $request, $id)
    {
        $article = Article::find($id);
        $commentaire =  new Commentaire();
        $commentaire->text = $request->message;
        $commentaire->user_id = Auth::id();
        $commentaire->name = $request->name;
        $commentaire->email = $request->email;
        $commentaire->article_id = $article->id;
        $commentaire->save();
        return redirect()->back()->with('success', 'Votre commentaire a bien été envoyé');
    }
}
