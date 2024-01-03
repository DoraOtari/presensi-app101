<x-template>
    <div class="col-lg-10 mx-auto mt-3">
        @if (session('pesan'))
            <div class="alert alert-primary" role="alert">
                <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
            </div>
        @endif
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
                    @foreach ($karyawan as $item)
                    <tr class="table-group-divider">
                        <td><img src="{{ asset($item->user->avatar) }}" width="45"></td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jabatan->nama_jabatan }}</td>
                        <td>{{ $item->user->email }}</td>
                        <td>
                            <a href="" class="btn btn-warning">
                                <i class="bi-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-info">
                                <i class="bi-pen"></i>
                            </a>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger"> <i class="bi-trash"></i></button>
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-ui.kartu>
    </div>
</x-template>