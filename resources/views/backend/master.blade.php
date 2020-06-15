<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <link rel="icon" href="/images/logo/coming.png" type="image/gif" sizes="16x16">
        <title>Pathwar Khana</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body class="hold-transition sidebar-mini">
        <div id="app"></div>

            <div class="wrapper">
            <!-- Navbar -->
            @include('backend.inc.header')      
            <!-- /.navbar -->
           

            <!-- Main Sidebar Container -->
             <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @include('backend.inc.sidebar')
            </aside>
            <!-- /Main Sidebar Container -->
            
            

            <!-- Main content -->
            <div class="content-wrapper">
                
            @yield('content')
            </div>
            <!-- /Main content -->



            <!-- Main Footer -->
           
            <!-- Main Footer -->

            
        </div>
        <!-- jQuery -->
        <script src="js/app.js"></script>
    </body>
</html>