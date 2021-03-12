<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = ['cnum','ctitle','email','message'];
    protected $primaryKey = 'fid';
    public $timestamps = false;

}
