<?php

namespace App\Http\Controllers\MANAGE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class ManageCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.categoriesindex', ['categorie' => Categories::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.categoriescreate');
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
            'name' => 'required|max:255',
            'user_id' => 'required'
        ]);
     
        Categories::create($validatedData);
        return redirect('/categories')->with('success', 'New categories Has ben added!');
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
    public function edit(Categories $categories, $id)
    {
        return view('manage.categoriesedit', ['categories' => Categories::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories, $id)
    {
        $rules =[
            'name' => 'required',
        ];

        $categories = Categories::findOrFail($id);
        $categories->update($request->validate($rules));

        return redirect('/categories')->with('succes','Categories Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories, $id)
    {
        $categories = Categories::findOrFail($id);
        $categories->delete();;
        return redirect('/categories')->with('success', 'Categories Has ben deleted!');

    }
}
