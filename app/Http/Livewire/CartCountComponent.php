<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCountComponent extends Component
{   
    //This is function for cart count eps 31
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.cart-count-component');
    }
}
