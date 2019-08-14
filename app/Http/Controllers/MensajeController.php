<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Mensaje;
use App\Events\MensajeRecibido;
use Mail;
use Illuminate\Support\Facades\Cache;
 


class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $key = "mensajes.pagina." . request('page', 1);

       $mensajes = Cache::remember($key, 600, function () {
           return Mensaje::with([
               'user',
               'nota',
               'etiquetas',
           ])->orderBy('created_at', request('orden', 'DESC'))
             ->paginate(10);
       });

       return view('mensajes.index', compact('mensajes'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mostrarCampos = auth()->guest();
        return view('mensajes.crear', 
                     compact('mostrarCampos', 'mostrarCampos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->check()) {
            $datosUsuario = auth()->user()->getAttributes();
            $request->request->add([
                'nombre' => $datosUsuario['name'],
                'email' => $datosUsuario['email'],
            ]);
        }
 
        $mensaje = Mensaje::create($request->all());
 
        if (auth()->check()) {
            auth()->user()->messages()->save($mensaje);
        }
        event(new MensajeRecibido($mensaje));
        Cache::flush();
 
        return redirect()->route('mensajes.crear')
               ->with('info', 'Hemos recibido tu mensaje');
 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje = Cache::remember("mensajes.{$id}", 600, function () use ($id) {
            return Mensaje::findOrFail($id);
        });
       return view('mensajes.show', compact('mensaje'));

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje = Cache::remember("mensajes.{$id}", 600, function () use ($id) {
            return Mensaje::findOrFail($id);
        });
       $mostrarCampos = !$mensaje->user_id;
       return view('mensajes.editar', 
                    compact('mensaje', 'mostrarCampos'));

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
        Mensaje::findOrFail($id)->update($request->all());
        Cache::flush();
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mensaje::findOrFail($id)->delete();
        Cache::flush();
        return redirect()->route('mensajes.index');
 
    }

    function __construct() {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }
 
}
