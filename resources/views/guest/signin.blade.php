<x-template>
    {{-- bs5-card-default --}}
    <div class="card col-lg-6 mx-auto mt-3">
        <div class="card-body">
            <h4 class="card-title">Sign In</h4>
            <p class="card-text">masuk untuk dapat menggunakan aplikasi</p>
            <form action="" method="post">
                {{-- bs5-form-input --}}
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="masukan email anda">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="masukan password anda">
                </div>
                {{-- bs5-form-submit --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</x-template>