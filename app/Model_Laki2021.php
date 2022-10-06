<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Laki2021 extends Model
{
  protected $table = "tb_lakitahun2021";
  protected $fillable = ['nama','nik','alamat','jabatan','image','gaji'];
}
