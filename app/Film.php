<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //option1
    //protectd $fillable = ['title','description','thumb','price','series', 'sale_date', 'type'];
    
    //or option2
    //protected $guarded =[];
}
