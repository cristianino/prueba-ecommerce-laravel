<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'name', 'description', 'price','img', 'popular'
  ];

  public function Order()
  {
    return $this->hasOne('App\Order');
  }
}
