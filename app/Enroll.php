<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $table = 'enroll';
    protected $fillable = ['cnum','email','sname'];
    protected $primaryKey = 'rid';
    public $timestamps = false;
}
