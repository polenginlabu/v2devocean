<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $slug;
    public function render()
    {
        if($this->slug) return view("weddings.{$this->slug}.livewire.home-component");
        return view('livewire.home-component');
    }
}
