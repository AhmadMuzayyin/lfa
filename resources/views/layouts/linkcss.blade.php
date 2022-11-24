<link href="{{ url('/backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ url('/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('/backend/css/app.min2.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ url('backend/css/preeloader.min.css') }}" />
@if (Auth()->user())
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ url('/backend/css/scroll.bar.min.css') }}">

    <link rel="stylesheet" href="{{ url('/backend/css/app.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        body {
            background-color: #F8F8FB;
        }
    </style>
    <style>
        #page-topbar {
            height: 112px;
        }

        @media only screen and (max-width: 576px) {
            #page-topbar {
                height: 70px;
            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 9% 2%;
            }
        }

        @media only screen and (max-width: 576px) {
            #page-topbar {
                height: 70px;
            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 9% 2%;
            }
        }

        @media only screen and (min-width: 768px) {
            #page-topbar {
                height: 70px;
            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 9% 8%;
                display: none;
            }
        }

        @media only screen and (min-width: 992px) {
            #page-topbar {
                height: 120px;
            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 80px 116px;
                display: block;
                border-radius: 3px;
                box-shadow: inset;
            }

            #layar {
                padding: 5px 0;
                margin-left: 0;
            }
        }

        @media only screen and (min-width: 1200px) {
            #page-topbar {
                height: 120px;
            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 80px 149px;
                display: block;
                border-radius: 3px;
                box-shadow: inset;
            }

            #layar {
                padding: 5px 0;
                margin-left: 0;
            }
        }

        @media only screen and (min-width: 1280px) {
            #page-topbar {
                height: 120px;
            }

            #tombolPilih {
                margin-left: 35px;

            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 80px 117px;
                display: block;
                border-radius: 3px;
                box-shadow: inset;
            }

            #layar {
                padding: 5px 0;
                margin-left: 0;
            }
        }

        @media only screen and (min-width: 1366px) {
            #page-topbar {
                height: 120px;
            }

            #tombolPilih {
                margin-left: 44px;

            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 90px 125px;
                display: block;
                border-radius: 3px;
                box-shadow: inset;
            }

            #layar {
                padding: 2px 0;
                margin-left: 0;
            }
        }

        @media only screen and (min-width: 1920px) {
            #page-topbar {
                height: 120px;
            }

            #tombolPilih {
                margin-left: 87px;

            }

            #navbarHead {
                z-index: 10000 !important;
                margin: 85px 167px;
                display: block;
                border-radius: 3px;
                box-shadow: inset;
            }

            #layar {
                padding: 5px 0;
                margin-left: 0;
            }
        }

        #pengaturan {
            display: none;
        }

        .swal2-container {
            z-index: 100000000;
        }
    </style>
@endif
