@extends('layouts.app')
@section('title', 'Data Falak Akademi | LFA')
@section('navbar')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none {{ Request::is('admin/akademi') ? 'text-primary' : 'text-dark' }}"
            href="{{ url('/admin/akademi') }}" id="topnav-dashboard" role="button">
            <i class='bx bx-list-ul me-2'></i>
            <span key="t-dashboards">Data Falak Akademi</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none {{ Request::is('admin/akademi/create') ? 'text-primary' : 'text-dark' }}"
            href="{{ url('/admin/akademi/create') }}" id="topnav-dashboard" role="button">
            <i class='bx bx-list-plus me-2'></i>
            <span key="t-dashboards">Tambah Falak Akademi</span>
        </a>
    </li>
@endsection
@section('dashboard')
    @if (Request::is('admin/akademi'))
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Data Falak Akademi</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb"> Data Falak Akademi</li>
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
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Speaker</th>
                                            <th>Sistem Kurus</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($akademiks as $akademik)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $akademik->title }}</td>
                                                <td>{{ $akademik->course_category->name }}</td>
                                                <td>{{ $akademik->speaker }}</td>
                                                <td>{{ $akademik->sistem == true ? 'Online' : 'Offline' }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ url('admin/akademi/detail') . '/' . $akademik->id }}"
                                                            type="button" role="button" class="btn btn-primary open_modal"
                                                            value="{{ $akademik->id }}">
                                                            <i class='bx bx-info-circle'></i>
                                                        </a>
                                                        <a href="{{ url('admin/akademi/edit') . '/' . $akademik->id }}"
                                                            role="button" class="btn btn-success">
                                                            <i class='bx bxs-edit-alt'></i>
                                                        </a>
                                                        <form
                                                            action="{{ url('admin/akademi/destroy') . '/' . $akademik->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger"
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
    @elseif (Request::Segment(3) == 'create')
        @include('backpage.admin.akademi.create')
    @elseif(Request::segment(3) == 'detail')
        @include('backpage.admin.akademi.detail')
    @else
        @include('backpage.admin.akademi.edit')
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
        });
    </script>
@endpush
