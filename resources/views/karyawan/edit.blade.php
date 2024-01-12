<x-template>
    {{-- kolom --}}
    <div class="col-lg-8 mx-auto">
        {{-- kartu --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <i class="bi-person-plus"></i> Edit Karyawan
                </h4>
                <p class="card-text">update data karyawan baru</p>
                {{-- formulir --}}
                <form action='{{ url("/karyawan/$karyawan->id") }}' method="post">
                    @csrf
                    @method('put')
                    <livewire:nik-otomatis :karyawan="$karyawan" />
                    <div class="mb-3">
                        <label for="" class="form-lable">Nama Karyawan</label>
                        <input value="{{ $karyawan->nama }}" type="text" name="nama" class="form-control" placeholder="masukan nama karyawan">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelmain</label>
                                <select class="form-select" name="kelamin" >
                                    <option selected disabled>--Pilih Satu--</option>
                                    <option @selected($karyawan->kelamin == 'laki-laki') value="laki-laki">Laki-laki</option>
                                    <option @selected($karyawan->kelamin == 'perempuan') value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jabatan</label>
                                <select class="form-select" name="jabatan_id" >
                                    <option selected disabled>--Pilih Satu--</option>
                                    @foreach ($jabatan as $item)
                                        <option  @selected($karyawan->jabatan_id == $item->id) value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <livewire:api-daerah :karyawan="$karyawan" />
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" placeholder="masukan alamat karyawan" class="form-control">{{ $karyawan->alamat }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end"> Submit </button>
                </form>
                {{-- tutup formulir --}}
            </div>
        </div>
        {{-- tutup kartu --}}
    </div> 
    {{-- tutup kolom --}}
</x-template>