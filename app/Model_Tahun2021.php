<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Tahun2021 extends Model
{
  protected $table = "tb_tahun20211";
  protected $fillable = ['nama','nik','alamat','jabatan','image','gaji'];
}
