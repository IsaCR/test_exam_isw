<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .form-control{
          min-width: 0;
          width: 80%;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Home
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/professor') }}">Professors</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/course') }}">Courses</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/group') }}">Groups</a></li>
                    </ul>
                <!-- Right Side Of Navbar -->
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script> -->
    <script src="/js/bootstrap-datepicker.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/datepicker.css" media="screen" charset="utf-8">
    <script>
      $('#category_unhide').change(function() {
        opt = $(this).val();
        var x = document.getElementById('hide_select');
        if (opt === "") {
            x.disabled = false;
        }else{
            x.disabled = true;
        }
      });

      $('#category_transaction').change(function() {
        opt = $(this).children(":selected").attr('id');
        var x = document.getElementById('account_2');
        if (opt == 3) {
            x.disabled = false;
        }else{
            x.disabled = true;
        }
      });
      $('#report_options').change(function(){
        opt = $(this).val();
        if (opt == 1) {
            disable_inputs();
        }else if(opt == 2){
            disable_inputs();
        }else if(opt == 3){
            disable_inputs();
            document.getElementById('datepicker_months').disabled = false;
        }else if(opt == 4){
            disable_inputs();
            document.getElementById('datepicker_years').disabled = false;
        }else if (true) {
            disable_inputs();
            document.getElementById('rage_input_from').disabled = false;
            document.getElementById('rage_input_to').disabled = false;
        }
      });
      $(function () {
        $('#datepicker_years').datepicker({
            format: ' yyyy',
            viewMode: "years",
            minViewMode: "years"
        });
        $('#datepicker_months').datepicker({
            format: ' mm-yyyy',
            viewMode: "months",
            minViewMode: "months"
        });
      });
      function disable_inputs(){
        document.getElementById('datepicker_months').disabled = true;
        document.getElementById('datepicker_years').disabled = true;
        document.getElementById('rage_input_from').disabled = true;
        document.getElementById('rage_input_to').disabled = true;
      }
    </script>
</body>
</html>
