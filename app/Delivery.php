<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = ['id_pengirim','desk_barang','tgl_kirim','id_kurir','id_tracking'];
}
