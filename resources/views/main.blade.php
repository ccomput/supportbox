<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav>
          <div class="nav-wrapper white">
            <a href="/" class="brand-logo red-text lighten-1">SupportBox</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="red-text lighten-1" href="/signin">Sign In</a></li>
            <li><a class="red-text lighten-1" href="/login">Log In</a></li>
           </ul>
          </div>
        </nav>
        <div class="container">

        @yield('content');

        </div>
      <footer class="page-footer red lighten-3">
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Outbox360
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
