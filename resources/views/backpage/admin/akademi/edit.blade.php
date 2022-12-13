<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Data Pengguna</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb"> Data Pengguna/Edit Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body shadow">

                <form action="{{ url('admin/user/store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="fullname" name="Nama_Lengkap"
                                placeholder="John Do" value="{{ $user->fullname }}" required autofocus>
                        </div>
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="johndo" value="{{ $user->username }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com" value="{{ $user->email }}" required>
                        </div>
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="name@example.com" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                        </div>
                        <div class="col">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" aria-label="role" id="role" name="role">
                                <option value="">--- Pilih Role ---</option>
                                <option value="1" {{ $user->role == true ? 'selected':'' }}>Admin</option>
                                <option value="0" {{ $user->role == false ? 'selected':'' }}>User</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    <button type="reset" class="btn btn-warning mt-2">Reset</button>
                </form>

            </div>
        </div>
    </div>
</div>
