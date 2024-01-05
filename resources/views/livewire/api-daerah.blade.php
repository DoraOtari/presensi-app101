<div>
    {{-- bs5-form-input --}}
   <div class="row mb-3">
    <div class="col-lg-6">
        <label class="form-label">Provinsi</label>
        <select wire:model='provinsi_id' wire:change="kota" name="provinsi" class="form-select">
            <option value="null" disabled selected>--pilih satu--</option>
            @foreach ($provinsi as $item)
                <option value="{{ $item->id.'/'.$item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-6">
        <label class="form-label">Kota</label>
        <select name="kota" class="form-select">
            <option value="null" disabled selected>--pilih satu--</option>
            @foreach ($kota as $item)
                <option value="{{ $item->id.'/'.$item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
   </div>
</div>
