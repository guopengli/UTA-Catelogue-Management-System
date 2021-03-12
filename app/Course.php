<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = ['cnum','ctitle','ctype'];
    protected $primaryKey = 'cid';
    public $timestamps = false;

}
