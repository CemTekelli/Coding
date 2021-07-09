<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Categorie;
use App\Commentaire;
use App\Contact;
use App\Footer;
use App\Google;
use App\Icon;
use App\Logo;
use App\Nav;
use App\Presentation;
use App\Ready;
use App\Service;
use App\Slogan;
use App\Tag;
use App\Team;
use App\Testimonial;
use App\Title;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){

        $nav = Nav::first();
        $logo = Logo::first();
        $footer = Footer::first();
        $slogan = Slogan::first();
        $banners = Banner::all();
        $services = Service::paginate(9)->fragment('servicee');
        $seervices = Service::all();
        $presentation = Presentation::first();
        $titre = Title::first();
        $testimonials = Testimonial::all();
        $ready = Ready::first();
        $contact = Contact::first();
        $teams = Team::where('post','Ceo')->first();
        $teaams = Team::where('post','!=','Ceo')->take(2)->inRandomOrder()->get();
        return view('index', compact('nav', 'banners','logo', 'slogan', 'services','seervices','presentation','titre', 'testimonials', 'ready','contact', 'teams','teaams', 'footer'));
    }
    public function service(){

        $nav = Nav::first();
        $logo = Logo::first();
        $footer = Footer::first();
        $titre = Title::first();
        $services = Service::paginate(9)->fragment('servicee');
        $contact = Contact::first();
        $servicePrime = Service::orderBy('created_at','DESC')->take(6)->get();
        $articles = Article::where('accepter', '=', 'check')->get();

        return view('service', compact('nav', 'logo','titre',"services",'contact', 'servicePrime','articles', 'footer'));
    }
    public function blog(Request $request){

        $nav = Nav::first();
        $logo = Logo::first();
        $footer = Footer::first();
        $articles = Article::where('accepter', '=', 'check')->orderBy('created_at','DESC')->paginate(3);
        $categories = Categorie::all();
        $tags = Tag::all();
        $search = $request->search;

        return view('blog', compact('nav', 'logo','articles','categories','tags',"search", 'footer'));
    }
    public function contact(){

        $nav = Nav::first();
        $logo = Logo::first();
        $footer = Footer::first();
        $titre = Title::first();
        $contact = Contact::first();
        $google = Google::first();
        return view('contact', compact('nav','logo','titre','contact','google', 'footer'));
    }
    public function post($id){
        $nav = Nav::first();
        $logo = Logo::first();
        $footer = Footer::first();
        $article = Article::find($id);
        $commentaires = Commentaire::all();

        return view('post', compact('nav', 'logo','article', 'commentaires', 'footer'));
    }

    public function search(Request $request){
        request()->validate([
            "search" => "required|min:2",
        ]);
        $nav = Nav::first();
        $logo = Logo::first();
        $footer = Footer::first();
        $commentaires = Commentaire::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        $search = $request->search;
       
        $articles = Article::where('titre', 'like', "%$search%")->get();
         return view('recheche', compact('nav','articles', 'logo','commentaires','categories','tags', 'search', 'footer')) ;
     }
}
