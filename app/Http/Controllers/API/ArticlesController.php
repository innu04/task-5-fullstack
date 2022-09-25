<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use App\Helpers\ApiFormat;
use App\Models\Articles;
use Exception;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // $article=Articles::all();
        // return view('manage.index',compact('article'));
        return view('manage.index', ['articles' => Articles::all()]);
    }

    public function index()
    {
        $data = Articles::all();

        if ($data) {
            return ApiFormat::createApi(200, 'Success', $data);
        }else {
            return ApiFormat::createApi(400, 'Failed');
        }

        // $article=Articles::all();
        // return view('manage.index', ['data' => Articles::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesRequest $request)
    {
            $articles = Articles::create($request->all());
            return response()->json(['msg' => 'Data created', 'data' => $articles], 201);
            
    }


    public function show($id=null)
    {
            $articles = Articles::findOrFail($id);
            return response()->json(['msg' => 'Data retrieved', 'data' => $articles], 200);
    }

    public function edit($id, ArticlesRequest $request)
    {
        
    }

    public function update($id = null, Request $request)
    {
        $articles = Articles::findOrFail($id);
        $articles->update($request->all());
        return response()->json(['msg' => 'Data updated', 'data' => $articles], 200);
    }

    public function destroy($id)
    {
        $articles = Articles::findOrFail($id);
        $articles->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
