<?php

namespace App\Http\Controllers;

use App\Article;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = DB::table('Articles')->get();
        return view('Artikel.read', ['article' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Kategori = Kategori::all();
        return view('Artikel.create', compact('Kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([

            'judul' => $request->title,
            'Article' => $request->Article,
            'id_Kategori' => $request->select

        ]);
        return redirect('/article')->with('status', 'Article has added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('Artikel.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('Artikel.update', ['article' => $article]);
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
        Article::where('id', $article->id)
            ->update([
                'judul' => $request->title,
                'Article' => $request->Article
            ]);
            return redirect('/article')->with('status', 'Article has updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect('/article')->with('status', 'Article has deleted');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $hasil = DB::table('Articles')->where('judul', 'LIKE', '%' . $search . '%')->paginate();

        return view('Artikel.search', compact('hasil'));
    }
}
