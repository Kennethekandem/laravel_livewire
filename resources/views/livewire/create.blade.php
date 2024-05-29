<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h3 class="offcanvas-title p-color" id="offcanvasExampleLabel">Share your thoughts...</h3>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form wire:submit.prevent="create">
        <div class="mb-3">
            <label for="create-title" class="form-label">What's the title?</label>
            <input type="text" wire:model="title" wire:dirty.class="border border-success" class="form-control" id="create-title">
            @error('title') 
            <div class="alert alert-primary" role="alert">
              <span class="error">{{ $message }}</span> 
            </div>
            @enderror
            {{-- @error('title') <span class="error">{{ $message }}</span> @enderror --}}
        </div>
        <div class="mb-3">
            <label for="create-description" class="form-label">Share thoughts</label>
            <textarea name="" id="" wire:model="description" cols="10" rows="5" id="create-description" class="form-control form-textarea"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="d-grid">
            <button type="submit" class="btn p-background btn-block">Post <span wire:loading></span></button>
        </div>
    </form>
  </div>
</div>