<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $Name = "Aplikasi Payroll";
        $Desc = "Aplikasi untuk olah data karyawan";

        return view ('datamaster',compact('Name', 'Desc'));
    }
}
