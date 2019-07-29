<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductoRequest;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    
    public function index()
    {
        // $catalogo = [
        //     ['producto' => 'Harina de trigo'],
        //     ['producto' => 'Arroz parvorizado'],
        //     ['producto' => 'Chocolate en polvo'],
        //     ['producto' => 'Café liofilizado'],
        //     ['producto' => 'Queso campesino'],
        // ];
        // $catalogo = \DB::table('productos')->get();
        
 
        // return view('catalogo', compact('catalogo'));

        // $catalogo = Producto::get();
        // $catalogo = Producto::orderBy('created_at', 'DESC')->get();
        // 
        //$catalogo = Producto::latest()->get();
        // return view('catalogo', compact('catalogo'));
        // $catalogo = Producto::latest()->paginate(2); // 15 por página
    //    return view('catalogo', compact('catalogo'));

       // la vista referenciada: 'catalogo.blade.php'
    //    return view('catalogo', [
    //     // array asociativo procesado en 'catalogo.blade.php'
    //     'productos' => Producto::latest()->paginate(2)
    // ]);

    return view('productos.index', [
        'productos' => Producto::latest()->paginate(),
    ]);


 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Producto::create([
        //     'nombre' => request('nombre'),
        //     'precio' => request('precio'),
        //     'iva' => request('iva'),
        //     'cantidad_disponible' => request('cantidad_disponible'),
        //     'cantidad_minima' => request('cantidad_minima'),
        //     'cantidad_maxima' => request('cantidad_maxima'),
        //     'url' => request('url')
        // ]);
        Producto::create(request()->all());
 
        return redirect()->route('productos.index');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
        // return Producto::find($id);
        // return view('productos.show', [
        //     'producto' => Producto::find($id),
        // ]);
        return view('productos.show', [
            'producto' => $producto
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function create() {
        return view('productos.create');
    }
}
