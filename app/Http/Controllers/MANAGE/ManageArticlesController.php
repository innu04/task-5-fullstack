<?php

namespace App\Http\Controllers\MANAGE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;

class ManageArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.Articlesindex', ['article' => Articles::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.articlescreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'image' => 'required|max:255',
            'user_id' => 'required',
            'category_id' => 'required'
        ]);
     
        Articles::create($validatedData);
        return redirect('/articles')->with('success', 'New categories Has ben added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles, $id)
    {
        return view('manage.articlesedit', ['articles' => Articles::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles, $id)
    {
        $rules =[
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ];

        $articles = Articles::findOrFail($id);
        $articles->update($request->validate($rules));

        return redirect('/articles')->with('succes','articles Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles, $id)
    {
        $articles = Articles::findOrFail($id);
        $articles->delete();;
        return redirect('/articles')->with('success', 'articles Has ben deleted!');

    }
}
