<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UsersModel extends Model
{
    public function alldata()
    {
        return DB::table('users_klinik')->get();
    }

    // ------------------ CREATE ------------------
    public function tambahdata($data)
    {
        DB::table('users_klinik')->insert($data);
    }


    // ------------------ DETAIL ------------------
    public function detailuser($id)
    {
        return DB::table('users_klinik')->where('id', $id)->first();
    }


    // ------------------ UPDATE ------------------
    public function updatedata($id, $data)
    {
        return DB::table('users_klinik')
            ->where('id', $id)
            ->update($data);
    }

    // ------------------ DELETE ------------------
    public function hapusdata($id)
    {
        DB::table('users_klinik')->where('id', $id)->delete();
    }
}
