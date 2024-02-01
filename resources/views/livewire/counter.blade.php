<div style="text-align: center">
    <h1>Counter Component</h1>
    <pre>Clicked <span>{{ $count }}</span> times!</pre>
    <div>
        <button wire:click="increment">
            Increment
        </button>

        <button wire:click="decrement">
            Decrement
        </button>
    </div>
</div>
