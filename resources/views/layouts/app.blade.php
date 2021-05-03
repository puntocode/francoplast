<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRM</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" rel="stylesheet">
    @yield('style')
</head>
<body class="animate__animated animate__fadeIn">
    <div class="d-flex" id="wrapper">
        <x-aside></x-aside>
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <x-nav></x-nav>
          @yield('content')
        </div>
        <!-- /#page-content-wrapper -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script>
        @if(Session::has('message'))
        let msgok = "{{ Session::get('message') }}";
            iziToast.success({
                title: msgok,
                theme: 'dark',
                position: 'topRight',
                timeout: 3500,
                progressBar: true,
                backgroundColor: '#4FCD64',
            });
        @endif

        @if(Session::has('error'))
        let msg = "{{ Session::get('error') }}";
            iziToast.error({
                title: msg,
                theme: 'dark',
                position: 'topRight',
                timeout: 3500,
                progressBar: true
            });
        @endif
    </script>
    @yield('script')
</body>
</html>
