<x-template>
    <div class="card col-lg-6 mx-auto my-2">
        <div class="card-body">
            <h4 class="card-title">Detail Karyawan</h4>
            <hr>
            <table class="table table-striped">
                <tr>
                    <td colspan="3">
                        <img src="{{ asset($karyawan->user->avatar) }}" width="150" class="rounded-5 d-block mx-auto">
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase">Nik</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->nik }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">nama</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->nama }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">email</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->user->email }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">tanggal lahir</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">jenis kelamin</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->kelamin}}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">jabatan</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->jabatan->nama_jabatan }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">provinsi</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->provinsi}}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">kota</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->kota }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">alamat</td>
                    <td class="text-uppercase">:</td>
                    <td class="text-uppercase">{{ $karyawan->alamat }}</td>
                </tr>
            </table>
        </div>
    </div>
</x-template>