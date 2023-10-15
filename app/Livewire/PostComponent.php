<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class PostComponent extends Component
{
    #[Rule('required|min:3')]
    public $title;

    #[Rule('required|min:3')]
    public $body;
    
    public $isOpen = 0;

    public function create()
    {
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.post-component');
    }
}
