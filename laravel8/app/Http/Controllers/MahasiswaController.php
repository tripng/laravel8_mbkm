<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function getMahasiswa(){
        return view('mahasiswa',[
            'mahasiswa' => Mahasiswa::all()
        ]);
    }
}