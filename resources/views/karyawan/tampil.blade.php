<x-template>
    <div class="col-lg-10 mx-auto mt-3">
    <x-ui.kartu>
        <x-slot name='judul'>
        <i class="bi-people"></i> Data Karyawan
        </x-slot>
        <x-slot name='tombol'>
            <a href="{{ url('/karyawan/buat') }}" class="btn btn-primary"><i class="bi-plus"></i> Buat</a>
        </x-slot>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-group-divider"></tr>
                </tbody>
            </table>
        </div>
    </x-ui.kartu>
    </div>
</x-template>