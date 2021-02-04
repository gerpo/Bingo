<div>
    <p>Your name will be</p>
    <input type="text" wire:model.defer="username">
    <button wire:click="createPlayer">Continue</button>

    <p>You already played? then provide your code and continue.</p>
    <input type="text" wire:model.defer="player_code">

</div>