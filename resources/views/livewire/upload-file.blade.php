<div class="mb-3">
    @if (!$foto)
    <img src="https://placehold.co/200?text=Avatar" class="d-block mx-auto" width="200" alt="preview gambar">
    @else
    <img src="{{ $foto->temporaryUrl() }}" class="d-block mx-auto" width="200" alt="preview gambar">
    @endif
    <label for="avatar" class="form-label">Upload Foto Profil</label>
    <input wire:model='foto' type="file" name="avatar" id="avatar" class="form-control">
</div>