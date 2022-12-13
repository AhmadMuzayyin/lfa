@extends('layouts.app')
@section('title', 'Data Pengguna | LFA')
@section('navbar')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none {{ Request::is('admin/user') ? 'text-primary' : 'text-dark' }}"
            href="{{ url('/admin/user') }}" id="topnav-dashboard" role="button">
            <i class='bx bx-user me-2'></i>
            <span key="t-dashboards">Data Pengguna</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none {{ Request::is('admin/user/create') ? 'text-primary' : 'text-dark' }}"
            href="{{ url('/admin/user/create') }}" id="topnav-dashboard" role="button">
            <i class='bx bx-user-plus me-2'></i>
            <span key="t-dashboards">Tambah Pengguna</span>
        </a>
    </li>
@endsection
@section('dashboard')
    @if (Request::is('admin/user'))
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
                                <table class="table" style="width: 100%;" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Status Akun</th>
                                            <th>Jenis Akun</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr
                                                class="{{ $user->role == true ? 'table-warning' : ($user->type == true ? 'table-info' : '') }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->fullname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <form action="{{ url('admin/user/status') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                        <button
                                                            class="btn btn-sm btn-{{ $user->status == true ? 'primary' : 'danger' }}"
                                                            {{ $user->role == true ? 'disabled' : '' }}>
                                                            @if ($user->status == true)
                                                                <i class='bx bx-user-check'></i>
                                                            @else
                                                                <i class='bx bx-user-x'></i>
                                                            @endif
                                                        </button>
                                                        {{ $user->status == true ? 'Aktif' : 'Tidak Aktif' }}
                                                    </form>
                                                </td>
                                                <td>
                                                    {{ $user->type == true ? 'Premium' : 'Free' }}
                                                </td>
                                                <td>
                                                    {{ $user->role == true ? 'Admin' : 'User' }}
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" role="button"
                                                            class="btn btn-primary open_modal" value="{{ $user->id }}">
                                                            <i class='bx bx-info-circle'></i>
                                                        </button>
                                                        <a href="{{ url('admin/user/edit') . '/' . $user->id }}"
                                                            role="button" class="btn btn-success">
                                                            <i class='bx bxs-edit-alt'></i>
                                                        </a>
                                                        <form action="{{ url('admin/user/destroy') . '/' . $user->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger {{ $user->role == true ? 'disabled' : '' }}"
                                                                onclick="alert('Yakin untuk menghapus data ini?')"
                                                                style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                                                <i class='bx bx-trash'></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
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
