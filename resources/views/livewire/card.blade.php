<div>
    <table class="w-3/4 max-w-screen-md mx-auto shadow-md">
        @foreach($card->items as $item)
        @if($loop->first || $loop->index % 3 == 0)
        <tr>
            @endif
            <livewire:card-item :cardItem="$item" />

            @if($loop->last || $loop->index + 1 % 3 == 0)
        </tr>
        @endif
        @endforeach
    </table>
</div>