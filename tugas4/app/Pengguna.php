<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
protected $table = 'pengguna';
protected $filelable = ['username','password'];
}
