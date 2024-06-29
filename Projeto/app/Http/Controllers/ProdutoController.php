<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view ();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('layouts.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        dd($request->nome);
        produto::create(['nome'->$request->nome,'Data_de_Validade'->$request->Data_de_Validade]);
        return "Sucesso";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        $produto= Produto::findOrFail($id);

        return view('layouts.show', [produto =>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
       
        edit ($id);
        
        $produto= Produto::findOrFail($id);

        return view('layouts.editar',['produto'=>$produto]);
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    }

    public function update(Request $request, Produto $produto)
    {
     update ($request, $id);

     $produto= Produto::findOrFail($id);

     Produto::update([ 'nome'-> $request->nome,'Data_de_Validade'->$request->Data_de_Validade]);

     return "Produto atualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        delete($id); 
        
        $produto= Produto::findOrFail($id);

        return view('layouts.deletar',['produto'=>$produto]);
    }
}
