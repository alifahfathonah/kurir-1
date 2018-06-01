<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courier;


class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $kurir = Courier::All();
        $data = array(
            'title'     => 'Kurir FIX ExPRESS',
            'couriers'     => $kurir,
            'no'        => 1
        );
        return view('kurir.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title'   => 'Tambah Kurir Baru');
        return view('kurir.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
         Courier::create([
            'nama_kurir'       => request('nama_kurir'),
            'tlp_kurir'        => request('tlp_kurir'),
            'email_kurir'      => request('email_kurir'),
            'alamat_kurir'     => request('alamat_kurir')
        ]);
        return redirect('/kurir');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $kurir)
    {
        $data = array(
            'title'   => 'Edit Data Kurir',
            'couriers' => $kurir
        );
        return view('kurir.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Courier $kurir)
    {
        $kurir->update([
            'nama_kurir'       => request('nama_kurir'),
            'tlp_kurir'        => request('tlp_kurir'),
            'email_kurir'      => request('email_kurir'),
            'alamat_kurir'     => request('alamat_kurir')
        ]);
        // dd($room);
        return redirect('/kurir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courier $kurir)
    {
        $kurir->delete();
        return redirect()->route('kurir.index');
    }
}
