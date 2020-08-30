<?php

namespace App\Http\Controllers;

use App\tabla2;
use Illuminate\Http\Request;

class controlCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  return 'entraste al resouce controller wey';
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
      //  return $nombre = $request->input('txt2');
        $var = new tabla2();
        $var->campo1 =  $request->input('txt1');
        $var->campo2 =  $request->input('txt2');
        $var->campo3 =  $request->input('txt3');
        $var->save();

       // return route::get('rutaControlCrud/{perrito}');
        return $this->show(2);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = 0;
        $trainers  = tabla2::all();
//        $var = new tabla2();
//        $var->campo1 =  $request->input('txt1');
//        $var->campo2 =  $request->input('txt2');
//        $var->campo3 =  $request->input('txt3');
//        $var->save();
//
        return view('inicio', compact ('trainers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
    public function update(Request $request, $id)
    {

        $contact = tabla2::find($id);

        $contact->campo1 =  $request->input('txt4');
        $contact->campo2 =  $request->input('txt5');
        $contact->campo3 =  $request->input('txt6');
        $contact->save();
        return 'saved';


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // return $id;
//        return 'entra a funcion delete';
        $contact = tabla2::find($id);
        $contact->delete();
        return 'deleted';


    }
}
