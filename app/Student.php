<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // fillable untuk melindungi dari malicious attacker, kebalikan dari guarded
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
    use SoftDeletes;
}
