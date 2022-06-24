<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;
use App\Models\productos;

class categoriaController extends Controller
{
    public function index(){
        $categorias = categorias::All();
        //dd($categorias);
        return view('admin.categorias.index')->with('categorias',$categorias);
    }
    public function create()
    {
        return view('admin.categorias.create');
    }
    public function insert(Request $request)
    {
        $categoria = new categorias();
        $categoria ->nombre = $request->get('nombre');
        $categoria ->descripcion = $request->get('descripcion');
        $categoria ->save();
        return redirect('/admin/categorias');
    }
    public function edit($id){
        $categorias = categorias::find($id);
        //dd($categorias);
        return view('admin.categorias.edit')->with('categorias',$categorias);
    }
    public function update(Request $request ,$id)
    {
        $categoria = categorias::find($id);
        $categoria ->nombre = $request->get('nombre');
        $categoria ->descripcion = $request->get('descripcion');
        $categoria ->save();
        return redirect('/admin/categorias');
    }

    public function delete($id){
        $categoria = productos::all()->where('categoria_id',':',$id);
        //dd(count($categoria));
        if (count($categoria) == 0) {
            $categoria = categorias::find($id);
            $categoria->delete();
            return redirect('/admin/categorias');
        }
        else{
            return view('admin.categorias.alerta');
        }
    }

}
