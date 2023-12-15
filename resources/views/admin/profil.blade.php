<x-template>
    <div class="col-lg-6 mx-auto">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Foto Profil</h4>
                <form action="{{ url('/profil') }}" method="post">
                    @csrf
                    <livewire:upload-file />
                    <button type="submit" class="btn btn-dark float-end">
                       <i class="bi-upload"></i> Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-template>