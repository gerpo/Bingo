<div class="flex flex-col mx-auto lg:prose-xl">
    <h2 class="text-xl text-right">{{ $user->name }} <small class="text-sm">({{ $user->player_code }})</small></h2>

    <div class="w-3/4 mx-auto my-10">
        <h3 class="text-2xl ">Hier ist deine Bingo Karte</h3>
        <p>Du kannst die durch tippen / klicken einfach abhaken.</p>
    </div>
    <div class="flex-grow p-5">
        <livewire:card :card="$user->card" : />
    </div>
    <div class="w-3/4 py-5 mx-auto">
        <h2 class="text-2xl">Die Regeln:</h2>
        <p>
            Beim Bingo geht es darum als erster eine Spielreihe zu vervollständigen.
            Eine Reihe kann dabei sowohl vertikal, horizontal als auch diagonal gebildet werden. Der Sieger ist derjeniger der zuerst nach dem Vervollständigen einer Reihe BINGO ruft.
        </p>
    </div>
</div>