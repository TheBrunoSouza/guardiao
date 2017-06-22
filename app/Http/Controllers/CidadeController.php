<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cidade;
use App\Http\Requests\CidadeRequest;

class CidadeController extends Controller
{
    public function index(){
        $cidades = Cidade::all();
        return view('cidades.index', ['cidades'=>$cidades]);
    }

    public function create(){
        return view('cidades.create');
    }

    public function destroy($id){
        Cidade::find($id)->delete();
        return redirect('cidades');
    }

    public function edit($id){
        $cidade = Cidade::find($id);
        return view('cidades.edit', compact('cidade'));
    }

    public function update(CidadeRequest $request, $id){
        $cidade = Cidade::find($id)->update($request->all());
        return redirect('cidades');
    }

    public function store(CidadeRequest $request){
        $novo_cidade = $request->all();
        Cidade::create($novo_cidade);
        return redirect('cidades');
    }
}
