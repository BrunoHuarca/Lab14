<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;
use Illuminate\Support\Facades\Http;

class modificarproductoscontroller extends Controller
{
    public function index()
    {
        $productos = productos::with('categorias')->get();
        //dd($productos[0]);
        return view('admin.producto.productos')->with('productos',$productos);

    }
    public function create()
    {
        $categoria =categorias::All();
        return view('admin.producto.create')->with('categorias',$categoria);

    }
    public function insert(Request $request)
    {
        $producto = new productos();
        $producto ->nombre = $request->get('nombre');
        $producto ->categoria_id = $request->get('categoria_id');
        $producto ->descripcion = $request->get('descripcion');
        $producto ->stock = $request->get('stock');
        $producto ->precio = $request->get('precio');
        if ($request->hasFile('imagen')){
            $nameimage = $request->file('imagen');
            $url = 'image/imagenes/';
            $filename = time().'-'.$nameimage->getClientOriginalName();
            $namecompleto = $request->file('imagen')->move($url,$filename);
            $producto -> imagen = $url.$filename;
        }
        $producto -> save();
        return redirect('/admin/producto');
    }
    public function modify($id)
    {
        $productos = productos::find($id);
        return view('admin.producto.editar')->with('producto',$productos);
    }
    public function update(request $request , $id)
    {
        $productos = productos::find($id);
        $productos -> nombre =  $request->nombre;
        $productos -> descripcion =  $request->descripcion;
        $productos -> stock =  $request->stock;
        $productos -> precio =  $request->precio;
        $productos -> save();
        return redirect('/admin/producto');
    }
    public function delete( $id)
    {
        $productos = productos::find($id);
        $productos->delete();
        return redirect('/admin/producto');
    }
    public function api()
    {
        $usuarios = HTTP::get('http://127.0.0.1:5000/app/v1/users/9');
        $usuariosarray = $usuarios->body();
        dd($usuariosarray);
        return view('prueba')->with('usuariosarray',$usuariosarray);
    }
}
