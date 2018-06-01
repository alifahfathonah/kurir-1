<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = ['nama_kurir','tlp_kurir','email_kurir','alamat_kurir'];
}
