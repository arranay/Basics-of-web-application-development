<?php

namespace App;

class Cart
{
   public $items;
   public $totalPrice=0;
   public $quantity=0;

      public function __construct($oldCart){
   	   	if ($oldCart){
   	   		$this->items = $oldCart->items;
   	   		$this->totalPrice = $oldCart->totalPrice;
               $this->quantity = $oldCart->quantity;
            }
      }

   	public function add($item){
         $this->items[$item->id] = $item;
         $this->totalPrice+=$item->price;
         $this->quantity++;
   	}

      public function delete($id, $item){
         $array = $this->items;
         unset($array[$id]);
         $this->items = $array;
         $this->totalPrice-=$item->price;
      }
}

