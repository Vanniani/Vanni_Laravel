<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Laki2022 extends Model
{
  protected $table = "tb_lakitahun2022";
  protected $fillable = ['nama','nik','alamat','jabatan','image','gaji'];
}
