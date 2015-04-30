<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model {

	protected $fillable = ['name','discription','color_id','manufacture_id','quantity','product_code','price'];

}
