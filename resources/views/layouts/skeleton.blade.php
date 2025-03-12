<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Home') &mdash; {{ config('app.name') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
  @stack('stylesheet')
</head>

<body>
  <div id="app">
    @yield('app')
  </div>




  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script>
    $(document).ready(function() {
      $(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $(function() {
          $('#provinsi').on('change', function() {
            let selected_provinsi = $(this).find('option:selected');
            let id_provinsi = selected_provinsi.val();
            
            $.ajax({
              type : 'POST',
              url : "{{ route('getkabupaten') }}",
              data  : {id_provinsi:id_provinsi},
              cache : false,

              success:function($msg){
                $('#kabupaten').html($msg);
              },
              error: function(data){
                console.log('error:',data)
              },
            })
          })
        });
      });
    });
  </script>
  
  @stack('javascript')

</body>

</html>