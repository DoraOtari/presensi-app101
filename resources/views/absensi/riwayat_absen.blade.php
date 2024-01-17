<x-template>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Foto Masuk</th>
                        <th>Foto Pulang</th>
                        <th>Jam Masuk</th>
                        <th>Jam Pulang</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($kehadiran as $item)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ "$item->tgl/$item->bln/$item->thn" }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>
                                <img src="{{ asset($item->foto_presensi_masuk) }}" width="45">
                            </td>
                            <td>
                                <img src="{{ asset($item->foto_presensi_keluar) }}" width="45">
                            </td>
                            <td>{{ $item->waktu_presensi_masuk}}</td>
                            <td>{{ $item->waktu_presensi_keluar }}</td>
                            <td>{{ $item->lokasi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
    </div>
</x-template>