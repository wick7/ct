
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code Penne</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Vibur" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        {{-- <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.14.1/lodash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>
        <!-- Styles --> --}}


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .title{
              padding: 2rem;
              font-size: 3em;
              text-decoration: none;
              font-family: 'Vibur', cursive;
            }
            .waitL {
              margin-top: -3em;
              text-decoration: underline;
              font-family: 'Vibur', cursive;
            }
            .list-item {
              margin-right: 10px;
            }
            .list-enter-active, .list-leave-active {
              transition: all 1s;
            }
            .list-enter, .list-leave-to {
              opacity: 0;
              transform: translateX(30px);
            }
            .list-complete-leave-active {
              transition: all 1s;
              transform: translateY(-30px);
            }
            .main {
              font-family: 'Raleway', sans-serif;
              font-weight: bold;
            }
            .bold {
              font-weight: bold;
            }
            .form-group {
              margin:.5em;
            }

            .marg {
              margin-top: 2em;
            }
        </style>
    </head>




<body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 text-center title main">Coalition Tech</div>
      </div>



    <div id="app">


        <product-list></product-list>

    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>


  <body>
</html>
