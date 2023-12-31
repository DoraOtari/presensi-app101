<div>
    {{-- bs5-form-input --}}
   <div class="mb-3">
    <label class="form-label badge bg-dark">NIK</label>
    <input value="{{ $nik }}" type="text" class="form-control-plaintext" name="nik" />
    <small class="form-text text-danger"></small>
   </div>
   <div class="row mb-3">
    <div class="col-lg-6">
        <label class="form-label">Email</label>
        <select wire:model='user_id' name="user_id" class="form-select">
            <option value="null" disabled selected>--pilih satu--</option>
            @foreach ($user as $item)
                <option value="{{ $item->id }}">{{ $item->email }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-6">
        <label class="form-label">Tanggal Lahir</label>
        <input wire:model='tgl' type="date" name="tanggal_lahir" class="form-control">
    </div>
   </div>
</div>
