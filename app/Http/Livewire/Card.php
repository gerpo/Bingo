<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Card as UserCard;

class Card extends Component
{
    public UserCard $card;

    public function mount(UserCard $card)
    {
        $this->card = $card;
    }

    public function render()
    {
        return view('livewire.card');
    }
}
