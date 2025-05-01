<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PegawaiModel extends Model
{
    public function alldata()
    {
        return DB::table('pegawai')->get();
    }
}
