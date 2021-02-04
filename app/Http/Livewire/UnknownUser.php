<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class UnknownUser extends Component
{
    public string $username = "";
    public string $player_code = "";

    public array $rules = [
        'username'      => 'string|min:4|required',
        'player_code'   => 'string|size:8',
    ];

    public function createPlayer()
    {
        $this->validateOnly('username');

        $user = User::make();
        $user->name = $this->username;
        $user->player_code = bin2hex(random_bytes(4));
        $user->save();

        Cookie::queue('player', $user->id);

        redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.unknown-user');
    }
}
