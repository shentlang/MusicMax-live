<?php

namespace MusicMax\Http\Controllers;

use MusicMax\artista;
use Illuminate\Http\Request;
use DB;
class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //

     //  return 'hola desde el controlador ';
$artistas = DB::table('artistas')
                ->where('name', 'like', '%%')
                ->get();
              return view('artistas.index',compact('artistas'));   
       
       
    }
     public function busqueda(Request $request)
    {
        //

     //  return 'hola desde el controlador ';
$artistas = DB::table('artistas')
                ->where('name', 'like', '%'.$request->input('busqueda').'%')
                ->get();

       // $artistas = Artista::all();
       return view('artistas.index',compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('artistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
if ($request->hasFile('avatar')) {
    $file = $request->file('avatar');
$name = time().$file->getClientOriginalName();
$file->move(public_path().'/images/', $name);
 
}
       $artista = new Artista();
        $artista->name = $request->input('name');
        $artista->genero = $request->input('genero');
        $artista->avatar = $name;
        $artista->descripcion = $request->input('descripcion');
     $artista->save();
     //return $request->input('name');
        //return $request;
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
       //return view('artistas.musica');
        //return 'asdasd'.$id;
        $artistas = Artista::find($id);
       return view('artistas.musica',compact('artistas'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
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
}
