<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';// ten table trong database
    protected $fillable = ['name','code','image','price','oldprice','cate_id'];
    public $timestamps = True; //thiet lap
    public function product(){
    	return $this->hasMany('App\product','cate_id','id');// thiet lap quan he
    }
}
