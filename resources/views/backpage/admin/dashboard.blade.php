@extends('layouts.app')
@section('title', 'Dashboard | LFA')
@section('dashboard')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Beranda</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb"> Beranda</li>
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
                        <div class="col-lg-3 col-sm-12">
                            <div class="d-grid">
                            </div>
                            <div class="row justify-content-center mt-5">
                                <img src="{{ url('/backend/images/verification-img.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-9">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
                                impedit laboriosam saepe eius! Voluptatem facilis voluptate
                                inventore assumenda incidunt. Neque voluptatibus labore animi rerum
                                esse optio accusantium eligendi accusamus dolorum!</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit
                                necessitatibus culpa nostrum temporibus ratione sint sapiente
                                eligendi, quasi repellat repellendus soluta nemo possimus veritatis
                                tenetur recusandae, aliquam mollitia expedita optio!</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
