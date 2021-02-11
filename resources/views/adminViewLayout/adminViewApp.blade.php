<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    
    <!-- Fontfaces CSS-->
    <link href="{{ asset('vendor/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/vector-map/jqvmap.min.css') }}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{ asset('vendor/theme.css') }}" rel="stylesheet" media="all">
    <style>
         .progress { position:relative; width:100%; }
         .bar { background-color: #008000; width:0%; height:20px; }
         .percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}
   </style>
   
</head>
<body class="animsition">
@include('adminViewInc.navBar') 
 <center>
    @include('adminViewInc.messages')
</center>
@yield('adminContent')
@include('adminViewInc.footer')
</body>

    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/vector-map/jquery.vmap.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('vendor/main.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    {{-- <script type="text/javascript">
      $(document).ready(function () {
          $('.ckeditor').ckeditor();
      });
    </script> --}}
    <script type="text/javascript">
        //     $(function() {
        //          $(document).ready(function()
        //          {
        //             var bar = $('.bar');
        //             var percent = $('.percent');
        
        //       $('form').ajaxForm({
        //         beforeSend: function() {
        //             var percentVal = '0%';
        //             bar.width(percentVal)
        //             percent.html(percentVal);
        //         },
        //         uploadProgress: function(event, position, total, percentComplete) {
        //             var percentVal = percentComplete + '%';
        //             bar.width(percentVal)
        //             percent.html(percentVal);
        //         },
        //         complete: function(xhr) {
        //             // alert('File Uploaded Successfully');
        //             window.location.href = "/admin/posts";
        //         }
        //       });
        //    }); 
        //  });
    //  file uppload script progress bar
 
    </script>
</html>
