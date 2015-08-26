<!DOCTYPE html>
<html lang="en">
    <head>        
         <!-- META SECTION -->
        <title>Blaffer</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <meta name="description" content="IIT Madras Alumni Connect">
        <meta name="keywords" content="IIT,Madras,Alumni,Connect">
        <meta name="author" content="Yash Murty">

        <link rel="icon" href="{{ URL::asset('img/logo_30x30.jpg') }}" type="image/x-icon" />
        <!-- END META SECTION -->
        {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'); }}             
        <!-- CSS INCLUDE -->  
        <!-- Loading Bootstrap -->
            </head>                                        
    <body id="page-top">
       
        @include('layout.js.sdkanalytics')

            @yield('content')


            @yield('jscontent')
        

    <!-- START SCRIPTS -->

        <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
        {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'); }}        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'); }}

        <!-- Plugin JavaScript -->
        {{ HTML::script('js/notify.min.js'); }} 
        
        @if(Session::has('globalalertmessage'))
            <script type="text/javascript">
                $.notify("{{ Session::get('globalalertmessage') }}", "{{ Session::get('globalalertclass') }}");
            </script>
        @endif

     
    </body>
</html><!-- Yash Murty -->