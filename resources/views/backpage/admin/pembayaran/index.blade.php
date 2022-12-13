@extends('layouts.app')
@section('title', 'Data Pembayaran Pengguna | LFA')
@section('navbar')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none {{ Request::is('admin/user') ? 'text-primary' : 'text-dark' }}"
            href="{{ url('/admin/user') }}" id="topnav-dashboard" role="button">
            <i class='bx bx-user me-2'></i>
            <span key="t-dashboards">Data Pembayaran Pengguna</span>
        </a>
    </li>
@endsection
@section('dashboard')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Pembayaran Pengguna</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb"> Data Pembayaran Pengguna</li>
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
                                        <th>Status Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $payment)
                                        <tr class="{{ $payment->status == false ? 'table-warning' : '' }}">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $payment->user->fullname }}</td>
                                            <td>
                                                {{ $payment->status == true ? 'Selesai' : 'Panding' }}
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" role="button" class="btn btn-primary open_modal"
                                                        value="{{ $payment->id }}">
                                                        <i class='bx bx-info-circle'></i>
                                                    </button>
                                                    <form
                                                        action="{{ url('admin/pembayaran/destroy') . '/' . $payment->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
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
                                <td>Status Pembayaran</td>
                                <td id="status_show"></td>
                            </tr>
                            <tr>
                                <td>Bukti Pembayaran</td>
                                <td id="bukti_show"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    $('#status_show').html(data.username);
                    var urlImg = "{{ url('storage/uploads/bukti_bayar') }}" + '/' +
                        data.image;
                    $('#bukti_show').attr('src', urlImg);
                    $('#bukti_show').attr('alt', data.image);
                    $('#modalShow').modal('show');
                })
            })
        });
    </script>
@endpush
