<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Laki2020 extends Model
{
  protected $table = "tb_lakitahun2020";
  protected $fillable = ['nama','nik','alamat','jabatan','image','gaji'];
}
