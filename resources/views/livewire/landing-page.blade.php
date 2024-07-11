<div>
    The current time is: {{ time() }}
    <button wire:click="$refresh">Refresh</button>
    <br />

    Count: {{ $count }}
    <button wire:click.throttle.1000ms="increment(2)">+</button>
</div>
