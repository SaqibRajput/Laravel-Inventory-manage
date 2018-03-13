<?php

namespace laravelInventory;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
	
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id','sku','name','description','price','mrp','stock','image','packing','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
	
	protected $table = 'products';
}
