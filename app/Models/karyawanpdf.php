<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawanpdf extends Model
{
    use HasFactory;
    protected $table = "tabel_karyawan";
 
    protected $fillable = ['id','nama','alamat','jabatan','no telepon','gaji'];

}
