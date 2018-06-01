<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sender;

class SenderController extends Controller
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
        $pengirim = Sender::All();
        $data = array(
            'title'      =>  'Pengirim FIX ExPRESS',
            'senders'    => $pengirim,
            'no'         => 1
        );
        return view('pengirim.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =array('title' => 'Tambah Data Pengirim');
        return view('pengirim.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sender $pengirim)
    {
        Sender::create([
            'nama_pengirim'     => request('nama_pengirim'),
            'tlp_pengirim'      => request('tlp_pengirim'),
            'email_pengirim'    => request('email_pengirim'),
            'alamat_pengirim'   => request('alamat_pengirim')
        ]);
        return redirect('/pengirim');
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
    public function edit(Sender $pengirim)
    {
        $data = array(
            'title'     => 'Edit Data Pengirim',
            'senders'   => $pengirim
        );
        return view('pengirim.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Sender $pengirim)
    {
        $pengirim->update([
            'nama_pengirim'     => request('nama_pengirim'),
            'tlp_pengirim'      => request('tlp_pengirim'),
            'email_pengirim'    => request('email_pengirim'),
            'alamat_pengirim'   => request('alamat_pengirim')
        ]);
        return redirect('/pengirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sender $pengirim)
    {
        $pengirim->delete();
        return redirect()->route('pengirim.index');
    }
}
