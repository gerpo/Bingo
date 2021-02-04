<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;

class GameBoard extends Component
{
    public User $user;

    protected array $rules = [
        'user' => 'string|min:6'
    ];

    public function mount(Request $request)
    {
        $this->user = User::find($request->player);
    }

    public function render()
    {
        return view('livewire.game-board');
    }
}
