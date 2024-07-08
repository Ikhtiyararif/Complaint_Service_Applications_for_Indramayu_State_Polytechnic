<!doctype html>
<html>

<head>
  @include('includes.head')
  {{-- <link rel="icon" type="image/png" href="{{url('images/logolaporin.ico')}}"> --}}
  <link rel="shortcut icon" type="image/png" href="{{ asset('/images/logolaporin.ico') }}" />
  {{-- <link rel="shortcut icon" href="{{ asset('/images/logolaporin.png') }}" /> --}}
  <title>@yield('page-title')</title>
</head>

<body>
  <div id="main">
    @yield('content')
  </div>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"> --}}

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}

  {{-- <script>
    $('.recommended-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  </script> --}}

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="{{url('/js/app.min.js')}}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- <script>
      $(document).ready(function(){
        $("#selectprov, #selectregen, #selectdis, #selectvill").select2({
          // ajax: {
          //   url: "{{ route('pages.property.index') }}",
          //   processResults: function({data}){
          //     return {
          //       results: $.map(data, function(item){
          //         return {
          //           id: item.id,
          //           text: item.name
          //         }
          //       })
          //     }
          //   }
          // }
        });
      });
    </script> --}}

</body>

</html>