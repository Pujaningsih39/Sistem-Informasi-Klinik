<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->PegawaiModel = new PegawaiModel();
    }

    public function index()
    {
        $data = [
            'pegawai' => $this->PegawaiModel->alldata(),
        ];
        return view('pegawai_klinik', $data);
    }
}
