<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['cat_name']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    public function product(){ // ten model cua bang product
    	return $this->belongsTo('App\category','cate_id','id'); // quan he 1 nhieu voi bang product
    }
}
