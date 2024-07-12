<div>
    The current time is: {{ time() }}
    <button wire:click="$refresh">Refresh</button>
    <br />

    Count: {{ $count }}
    <button wire:click.throttle.1000ms="increment(2)">+</button>

    <form wire:submit="add">
        <input type="text" wire:model="todo">
        <button type="submit">add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
