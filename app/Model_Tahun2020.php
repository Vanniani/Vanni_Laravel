<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Tahun2020 extends Model
{
  protected $table = "tb_tahun2020";
  protected $fillable = ['nama','nik','alamat','jabatan','image','gaji'];
}
