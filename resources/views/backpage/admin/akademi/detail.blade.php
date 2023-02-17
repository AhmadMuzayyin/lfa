<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Data Kursus</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb"> Data Kursus/Detail Kursus</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body shadow">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <td>Tema Kursus</td>
                                <td>{{ $kursus->title }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>{{ $kursus->course_category->name }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Speaker</td>
                                <td>
                                    Nama: {{ $kursus->speaker }} <br>
                                    Telepon: {{ $kursus->telepon_speaker }}
                                </td>
                                <td>
                                    <img src="{{ Storage::url('uploads/kursus/') . 'RMYvw6u3QMjpYLsJG3ActZN0Ci0rJio96jN0sme4.jpg' }}" alt="kursus" class="img-fluid">
                                </td>
                            </tr>
                            <tr>
                                <td>Sistem Kursus</td>
                                <td>{{ $kursus->sistem }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>harga</td>
                                <td>Rp. {{ number_format($kursus->price, 2) }}</td>
                                <td></td>
                            </tr>
                        </table>
                        <a href="{{ url('admin/akademi') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
