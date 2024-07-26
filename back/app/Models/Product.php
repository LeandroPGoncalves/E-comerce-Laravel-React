<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'tb_e-comerce_product';
    protected $fillable = ['pd_id','pd_name','pd_brand','pd_category','pd_description','pd_price','pd_stock_quantity','pd_image']; #put images?
    public $timestamps = true;
    protected $cast = [
            'pd_id' => 'string'
    ];

}
