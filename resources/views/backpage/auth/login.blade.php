@extends('layouts.app')
@section('title', 'Login atau Daftar | LFA')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7 d-none d-lg-inline-block">
                                <img src="{{ url('/backend/img/gambar.jpg') }}" alt="" width="720px">
                            </div>
                            <div class="col-sm-5 px-lg-5 py-lg-5 px-4 py-4">
                                <h2 class="fw-medium">E-LEARNING</h2>
                                <h5 class="mb-5 text-muted">Lajnah Falakiyah Annuqayah</h5>
                                <form action="{{ url('login') }}" method="POST" style="font-family: 'IBM Plex Sans', sans-serif;">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control form-control"
                                            placeholder="john@example.com" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label font-size-">PASSWORD</label>
                                        <input type="password" class="form-control" placeholder="PASSWORD" name="password"
                                            required>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary" name="tryLogin">
                                            Masuk Sekarang
                                        </button>
                                    </div>
                                </form>
                                <p class="mt-2 text-center">
                                    <a href="#">Lupa kata sandi?</a>
                                </p>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ url('/') }}" class="btn btn-success mt-2" role="button">
                                        Buat Akun Baru
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end col --}}
                <div class="text-center">
                    <p class="mb-0 text-white">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="{{ url('/') }}" class="text-white">Lajnah Falakiyah Annuqayah</a> <i class="mdi mdi-heart text-danger"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
