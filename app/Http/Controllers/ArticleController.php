<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $countries = Country::all();
        return view('article.create', compact('categories', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img = 'public/default.jpg';
        if($request->file('img')){
            $img = $request->file('img')->store('public/article');
        }

        try{
            $article = Auth::user()->articles()->create([
                'title' => $request->title,
                'category_id' => $request->category,
                'content' => $request->content,
                'img' => $img
            ]);

            // metodo attach inserisce nella tabella pivot la relazione tra i due modelli
            $article->countries()->attach($request->countries);
    
            return redirect(route('homepage'))->with('message', 'articolo aggiungo con successo');
        } catch (Exception $e) {
            return redirect(route('homepage'))->with('alert', "$e");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $countries = Country::all();
        if(Auth::id() === $article->user->id){
            return view('article.edit', compact('article', 'categories', 'countries'));
        } else {
            return redirect(route('homepage'))->with('alert', 'volevi modificare qualcosa di non tuo brutto infame');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $img = $article->img;
        if($request->file('img')){
            $img = $request->file('img')->store('img');
        }

        try{
            $article->update([
                'category_id' => $request->category, 
                'title' => $request->title,
                'content' => $request->content,
                'img' => $img
            ]);

            $article->countries()->sync($request->countries);
    
            return redirect(route('article.index'))->with('message', 'articolo modificato con successo');
        } catch (Exception $e){
            return redirect(route('article.index'))->with('alert', "problemi con la modifica dell'articolo");
        }
    }

    public function my_article(){
        $articles = Article::where('user_id', Auth::id())->get();

        return view('article.my_article', compact('articles'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->countries()->detach();
        $article->delete();

        return redirect(route('article.index'))->with('message', 'Articolo cancellato con successo');
    }
}
