<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Area;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{
    public function index(){
        $areas = Area::all();
        return view('areas.index', ['areas'=>$areas]);
    }

    public function create(){
        return view('areas.create');
    }

    public function destroy($id){
        Area::find($id)->delete();
        return redirect('areas');
    }

    public function edit($id){
        $area = Area::find($id);
        return view('areas.edit', compact('area'));
    }

    public function update(AreaRequest $request, $id){
        $area = Area::find($id)->update($request->all());
        return redirect('areas');
    }

    public function store(AreaRequest $request){
        $nova_area = $request->all();
        Area::create($nova_area);
        return redirect('areas');
    }
}
