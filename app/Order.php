<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  // Pertama adalah model User, kita akan membuat 2 relationship di sini, yaitu user merefensikan model User dan books merepresentasikan banyak model Book yang masuk dalam sebuah `Order.
  public function user(){
    return $this->belongsTo('App\User');
  }

  public function books(){
    return $this->belongsToMany('App\Book')->withPivot('quantity');;
  }

  // Dynamic properti untuk $order->totalQuantity di orders/index.blade.php
  public function getTotalQuantityAttribute(){
		$total_quantity = 0;

		foreach($this->books as $book){
			$total_quantity += $book->pivot->quantity;
		}

		return $total_quantity;
  }
}
