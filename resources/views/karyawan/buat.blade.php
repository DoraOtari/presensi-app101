<x-template>
    {{-- kolom --}}
    <div class="col-lg-8 mx-auto">
        {{-- kartu --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <i class="bi-person-plus"></i> Buat Karyawan
                </h4>
                <p class="card-text">tambah data karyawan baru</p>
                {{-- formulir --}}
                <form action="{{ url('/karyawan') }}" method="post">
                    @csrf
                    <livewire:nik-otomatis />
                    <div class="mb-3">
                        <label for="" class="form-lable">Nama Karyawan</label>
                        <input type="text" name="nama" class="form-control" placeholder="masukan nama karyawan">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelmain</label>
                                <select class="form-select" name="kelamin" >
                                    <option selected disabled>--Pilih Satu--</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jabatan</label>
                                <select class="form-select" name="jabatan_id" >
                                    <option selected disabled>--Pilih Satu--</option>
                                    @foreach ($jabatan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <livewire:api-daerah />
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" placeholder="masukan alamat karyawan" class="form-control"></textarea>
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