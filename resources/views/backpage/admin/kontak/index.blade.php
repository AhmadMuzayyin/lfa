@extends('layouts.app')
@section('title', 'Data Kontak | LFA')
@section('navbar')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none {{ Request::is('admin/user') ? 'text-primary' : 'text-dark' }}"
            href="{{ url('/admin/user') }}" id="topnav-dashboard" role="button">
            <i class='bx bx-user me-2'></i>
            <span key="t-dashboards">Data Kontak</span>
        </a>
    </li>
@endsection
@section('dashboard')
    @if (Request::is('admin/kontak'))
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Data Pengguna</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb"> Data Pengguna</li>
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

                            {{-- table --}}
                            <div class="table-responsive">
                                <table class="table table-striped" style="width: 100%;" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Subjek</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kontak as $kon)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kon->fullname }}</td>
                                                <td>{{ $kon->email }}</td>
                                                <td>{{ $kon->subjek }}</td>
                                                <td>{{ $kon->deskripsi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- End table --}}

                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- Modal Show --}}
        <div class="modal fade" id="modalShow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">User Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td id="nama_show"></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td id="username_show"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td id="email_show"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td id="status_show"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Akun</td>
                                    <td id="type_show"></td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td id="role_show"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="" alt="" class="img-fluid rounded-circle" id="img_show"
                                            width="100">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Request::Segment(3) == 'create')
        @include('backpage.admin.users.create')
        @else
        @include('backpage.admin.users.edit')
    @endif
@endsection
@push('script')
    <style>
        .modal {
            z-index: 999999999;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                select: true,
            });

            // Modal show
            $('.open_modal').click(function(e) {
                e.preventDefault();
                var url = "{{ url('admin/user/detail') }}";
                var id = $(this).val();
                $.get(url + '/' + id, function(data) {
                    $('#nama_show').html(data.fullname);
                    $('#username_show').html(data.username);
                    $('#email_show').html(data.email);
                    var status = data.status == 1 ? 'Aktif' : 'Tidak Aktif';
                    $('#status_show').html(status);
                    var type = data.type == 1 ? 'Premium' : 'Free';
                    $('#type_show').html(type);
                    var role = data.role == 1 ? 'Admin' : 'User';
                    $('#role_show').html(role);
                    var urlImg = "{{ url('storage/uploads/profil') }}" + '/' +
                        data.image;
                    $('#img_show').attr('src', urlImg);
                    $('#img_show').attr('alt', data.image);
                    $('#modalShow').modal('show');
                })
            })
        });
    </script>
@endpush
