<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estado;
use App\Http\Requests\EstadoRequest;

class EstadosController extends Controller
{
    public function index(){
        $estados = Estado::all();
        return view('estados.index', ['estados'=>$estados]);
    }

    public function create(){
        return view('estados.create');
    }

    public function destroy($id){
        Estado::find($id)->delete();
        return redirect('estados');
    }

    public function edit($id){
        $estado = Estado::find($id);
        return view('estados.edit', compact('estado'));
    }

    public function update(EstadoRequest $request, $id){
        $estado = Estado::find($id)->update($request->all());
        return redirect('estados');
    }

    public function store(EstadoRequest $request){
        $novo_estado = $request->all();
        Estado::create($novo_estado);
        return redirect('estados');
    }
}
