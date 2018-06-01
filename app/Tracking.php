<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $fillable = ['id_pengiriman','alamat','kota','keterangan'];
}
