<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Tahun2022 extends Model
{
  protected $table = "tb_tahun2022";
  protected $fillable = ['nama','nik','alamat','jabatan','image','gaji'];
}
