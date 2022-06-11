<?php

namespace App\Http\Controllers;

use App\Models\Produto as ModelsProduto;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model\Produto;
use Symfony\Component\Console\Input\Input;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $produtos = ModelsProduto::all();
        return view('list', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $produto = new ModelsProduto;
        $produto -> name = $request->input('name');
        $produto -> price = $request->input('price');
        $produto -> save();
        return redirect('/produtos/list');
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
    public function edit($id)
    {
        $produto = ModelsProduto::find($id);
        if(isset($produto)){
           return view('edit', compact('produto'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = ModelsProduto::find($id);
        if(isset($produto)){
          $produto->name = $request->input('name');
          $produto->price = $request->input('price');
          $produto->save();
        }
        return redirect('/produtos/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = ModelsProduto::find($id);
        if(isset($produto)){
            $produto->delete();
            return redirect('/produtos/list');
        }
    }
}
