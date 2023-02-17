<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Data Falak Akademi</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb"> Data Falak Akademi/Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body shadow">

                <form action="{{ url('admin/akademi/store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori"
                                class="form-select @error('kategori')
                                is-invalid
                            @enderror">
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                @foreach ($category as $kategori)
                                    <option value="{{ $kategori->id }}" {{ old('kategori') !== null ?? old('kategori') == $kategori->id ? 'selected' :'' }}>{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="judul" class="form-label">Judul Kursus</label>
                            <input type="text"
                                class="form-control @error('judul')
                                is-invalid
                            @enderror"
                                id="judul" name="judul" placeholder="johndo" required value="{{ old('judul') }}">
                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="speaker" class="form-label">Nama Speaker</label>
                            <input type="text"
                                class="form-control @error('speaker')
                                is-invalid
                            @enderror"
                                id="speaker" name="speaker" placeholder="John Do" required value="{{ old('speaker') }}">
                            @error('speaker')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="telepon" class="form-label">Telepon Speaker</label>
                            <input type="text"
                                class="form-control @error('telepon')
                                is-invalid
                            @enderror"
                                id="telepon" name="telepon" placeholder="+6283xxxx" required value="{{ old('telepon') }}">
                            @error('telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="foto_speaker" class="form-label">Foto</label>
                            <input type="file" class="form-control @error('foto_speaker')
                                is-invalid
                            @enderror" id="foto_speaker" name="foto_speaker" required>
                            @error('foto_speaker')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    <button type="reset" class="btn btn-warning mt-2">Reset</button>
                </form>

            </div>
        </div>
    </div>
</div>
