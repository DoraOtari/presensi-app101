<x-template>
    <div class="col-lg-6 mx-auto">
       <x-ui.kartu>
            <x-slot name='judul'>
                <i class="bi-diagram-2"></i> Data Jabatan
            </x-slot>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama Jabatan</td>
                            <td>Gaji Jabatan</td>
                            <td>Status Jabatan</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $item)
                        <tr class="table-group-divider">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_jabatan }}</td>
                            <td>{{ $item->gaji_jabatan }}</td>
                            <td>{{ $item->status_jabatan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
       </x-ui.kartu>
    </div>
</x-template>