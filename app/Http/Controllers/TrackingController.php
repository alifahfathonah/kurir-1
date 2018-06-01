<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracking;
use App\Delivery;
use DB;

class TrackingController extends Controller
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
        $lokasi = Tracking::All();

        $data = array(
            'title' => 'Data Tracking Barang',
            'trackings' => $lokasi,
            'no' => 1,
            'resi' => 1765
        );
        return view('lokasi.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data = array('title'   => 'Tambah Data Tracking Baru');
        return view('lokasi.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tracking $lokasi)
    {
         Tracking::create([
            'id_pengiriman'       => request('id_pengiriman'),
            'alamat'              => request('alamat'),
            'kota'                => request('kota'),
            'keterangan'          => request('keterangan')
        ]);
        return redirect('/lokasi');
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
    public function edit(Tracking $lokasi)
    {
         $data = array(
            'title'   => 'Edit Data Kurir',
            'trackings' => $lokasi
        );
        return view('lokasi.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tracking $lokasi)
    {
        $lokasi->update([
            'id_pengiriman'       => request('id_pengiriman'),
            'alamat'              => request('alamat'),
            'kota'                => request('kota'),
            'keterangan'          => request('keterangan')
        ]);
        // dd($room);
        return redirect('/lokasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $lokasi)
    {
        $lokasi->delete();
        return redirect()->route('lokasi.index');
    }
}
