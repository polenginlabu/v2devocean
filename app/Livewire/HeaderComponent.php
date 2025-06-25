<?php

namespace App\Livewire;

use Livewire\Component;

class HeaderComponent extends Component
{
    public $slug;
    public function render()
    {
        if($this->slug) return view("weddings.{$this->slug}.livewire.header-component");
        return view('livewire.header-component');
    }
}
