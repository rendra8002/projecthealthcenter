<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Adminpanel|HealthCenter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">

    {{-- totogelan --}}
    <style>
        /* Toggle Switch Custom */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 25px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 25px;
        }

        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 19px;
            width: 19px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        input:checked+.toggle-slider {
            background-color: #28a745;
            /* hijau success */
        }

        input:checked+.toggle-slider:before {
            transform: translateX(24px);
        }
    </style>


    <style>
        

        /* Sidebar tetap nempel */
        .main-sidebar {
            position: fixed !important;
            top: 0;
            left: 0;
            bottom: 0;
            height: 100vh !important;
            min-height: 100vh !important;
        }

        .sidebar {
            height: 100% !important;
            overflow-y: auto;
        }

        /* Content wrapper full height */
        .content-wrapper {
            min-height: 100vh !important;
            display: flex;
            justify-content: center;
            /* horizontal center */
            align-items: flex-start;
            /* bisa jadi center vertical kalau mau */
            padding: 20px;
            margin-left: 300px;
            /* lebar sidebar */
        }

        /* Card agar tidak terlalu lebar */
        .center-card {
            width: 100%;
            max-width: 1000px;
            /* atur sesuai kebutuhan */
        }

        /* Menambahkan CSS untuk footer */
        .main-footer {
            position: fixed;
            /* Membuat posisi footer tetap */
            bottom: 0;
            /* Menempatkan footer di bagian paling bawah */
            left: 0;
            /* Meratakan footer ke sisi kiri */
            width: 100%;
            /* Membuat footer memenuhi lebar layar */
            z-index: 1030;
            /* Menjaga footer di atas elemen lain, seperti sidebar */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini fixed-top">

    @include('layouts.backend.navbar')

    @include('layouts.backend.sidebar')

    @yield('content')

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
        function previewPhoto(input) {
            const file = input.files[0];
            const label = document.getElementById('photo-label');
            const preview = document.getElementById('photo-preview');

            if (file) {
                label.innerText = file.name;
                const reader = new FileReader();
                reader.onload = e => {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                label.innerText = "Choose file";
                preview.src = "";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>
