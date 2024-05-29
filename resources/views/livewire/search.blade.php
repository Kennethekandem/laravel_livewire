<div>
    <div class="row">
        <div class="col-12 p-0 m-0">
            <input wire:model.live="search" class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
        {{-- <div class="col-4 p-0 m-0 justify-content-end">
            <button class="btn p-background my-sm-0" type="submit">Search</button>
        </div> --}}
    </div>

    {{-- {{ }} --}}
    @if($search)
        <div>

            @forelse($searched as $blog)
                {{ $blog->title}} <br>
            @empty
                {{ __($empty)}}
            @endforelse
        </div>
    @endif
    
</div>