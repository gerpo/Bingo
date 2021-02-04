<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CardItem as UserCardItem;

class CardItem extends Component
{
    public UserCardItem $cardItem;

    public function mount(UserCardItem $cardItem)
    {
        $this->cardItem = $cardItem;
    }

    public function checkItem()
    {
        $this->cardItem->checked = !$this->cardItem->checked;
        $this->cardItem->save();
    }

    public function render()
    {
        return view('livewire.card-item');
    }
}
