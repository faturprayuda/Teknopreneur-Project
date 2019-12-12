<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['id_siswa','pass_siswa','nama_siswa'];
    public $timestamps = false;
}
