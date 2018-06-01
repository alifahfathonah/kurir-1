<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $fillable = ['nama_pengirim','tlp_pengirim','email_pengirim','alamat_pengirim'];
}
