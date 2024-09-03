<form class="p-5 rounded shadow bg-light" wire:submit="storeArticle">
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" id="title" class="form-control" wire:model="title">
    </div>
    <div class="mb-3">
        <label for="subtitle" class="form-label">Sottotitolo</label>
        <input type="text" id="subtitle" class="form-control" wire:model="subtitle">
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genere</label>
        <input type="text" wire:model="genre" id="genre" class="form-control">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Testo</label>
        <textarea id="body" wire:model="body" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="mt-3 text-center">
        <button class="btn btn-dark">Salva</button>
    </div>
</form>
