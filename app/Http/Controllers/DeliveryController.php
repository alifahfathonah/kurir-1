<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use App\Courier;
use App\Sender;
use App\Tracking;
use DB;

class DeliveryController extends Controller
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
        $pengiriman = Delivery::All();
        // $pengiriman = DB::table('deliveries')
        //     ->join('trackings','trackings.id', '=','deliveries.id_tracking')
        //     ->join('senders','senders.id', '=','deliveries.id_pengirim')
        //     ->join('couriers','couriers.id', '=','deliveries.id_kurir')  
        //     ->get();

        $data = array(
            'title' => 'Data Pengiriman FIX ExPRESS',
            'deliveries'    => $pengiriman,
            'no'            => 1,
            'resi'          => 1765
        );
        return view('/pengiriman.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengirim   = Sender::All();
        $kurir      = Courier::All();
        $data   = array(
            'title' => 'Tambah Data Pengiriman',
            'pengirim'  => $pengirim,
            'kurir'  => $kurir
        );
        return view('pengiriman.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Delivery::create([
            'id_pengirim'       => request('id_pengirim'),
            'desk_barang'       => request('desk_barang'),
            'tgl_kirim'         => request('tgl_kirim'),
            'id_kurir'          => request('id_kurir'),
            'id_tracking'       => request('id_tracking')
        ]);
        return redirect('/pengiriman');
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
    public function edit(Delivery $pengiriman)
    {
        $data = array(
            'title'      => 'Edit Data Kurir',
            'deliveries' => $pengiriman
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
    public function update(Delivery $pengiriman)
    {
        $kurir->update([
            'id_pengirim'    => request('id_pengirim'),
            'desk_barang'    => request('desk_barang'),
            'tgl_kirim'      => request('tgl_kirim'),
            'id_kurir'       => request('id_kurir'),
            'id_tracking'    => request('id_tracking')
        ]);
        // dd($room);
        return redirect('/pengiriman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $pengiriman)
    {
        $pengiriman->delete();
        return redirect()->route('pengiriman.index');
    }
}
