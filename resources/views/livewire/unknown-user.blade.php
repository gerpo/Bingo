<div class="h-full">
    <p class="text-xl text-center">Herzlich Willkommen beim</p>
    <h1 class="text-center text-9xl font-pacifico">Bingo!</h1>
    <div class="flex items-center justify-center w-auto mt-10 ">
        <div class="flex flex-col flex-wrap p-5 text-center bg-gray-400 bg-opacity-50 border-2 border-gray-300 rounded shadow-md">
            <p class="mb-1 text-lg text-white opacity-100">Bitte gebe deinen Namen an:</p>
            <div class="flex flex-wrap sm:flex-nowrap">
                <input type="text" wire:model.defer="username" class="flex-grow px-5 mb-2 leading-10 border rounded sm:mr-2 sm:mb-0">
                <button wire:click="createPlayer" class="w-full px-5 leading-10 bg-gray-100 border-2 border-gray-300 rounded shadow-sm sm:mt-0 sm:w-auto hover:text-white hover:bg-green-100 hover:bg-opacity-20 hover:border-green-500 hover:shadow-inner">Los Gehts!</button>
            </div>
        </div>
    </div>
    <div class="hidden">
        <p>You already played? then provide your code and continue.</p>
        <input type="text" wire:model.defer="player_code">
    </div>
</div>