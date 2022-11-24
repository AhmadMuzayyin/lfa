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
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="flexSwitchCheckDefault"
                                                            {{ $user->status == true ? 'checked' : '' }}
                                                            {{ $user->role == true ? 'disabled' : '' }}>
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                                            {{ $user->status == true ? 'Aktif' : 'Tidak Aktif' }}
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $user->type == true ? 'Premium' : 'Free' }}
                                                </td>
                                                <td>
                                                    {{ $user->role == true ? 'Admin' : 'User' }}
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ url('admin/user/detail') . '/' . $user->id }}"
                                                            role="button" class="btn btn-primary">
                                                            <i class='bx bx-info-circle'></i>
                                                        </a>
                                                        <a href="{{ url('admin/user/edit') . '/' . $user->id }}"
                                                            role="button" class="btn btn-success">
                                                            <i class='bx bxs-edit-alt'></i>
                                                        </a>
                                                        <form action="{{ url('admin/user/destroy') . '/' . $user->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger {{ $user->role == true ? 'disabled' : '' }}"
                                                                onclick="alert('Yakin untuk menghapus data ini?')">
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
    @else
        @include('backpage.admin.users.create')
    @endif
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endpush
