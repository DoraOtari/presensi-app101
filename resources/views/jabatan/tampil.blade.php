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
                        <tr class="table-group-divider">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
       </x-ui.kartu>
    </div>
</x-template>