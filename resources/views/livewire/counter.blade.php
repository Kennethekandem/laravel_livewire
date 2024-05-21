<div>
    <button wire:click="increment">increase +</button>
    {{-- <button wire:keydown.enter="foo">Foo</button> --}}
    <button wire:class="foo">Foo</button>
    <h1>{{ $count }}</h1>
    <h1>{{ $word }}</h1>

    <h3 wire:model="count"></h3>
    <div x-data="{open:false}">
        <button @click="open = true">open</button>

        <div x-show="open" @click.outside="open = false">
            <button x-click="archive">archive</button>
            <button x-click="delete">delete</button>
        </div>
    </div>

    

    <hr>

    <div x-data>
        <button x-on:click="$wire.increment()">increment</button>
        <p x-text="$wire.count"></p>
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
