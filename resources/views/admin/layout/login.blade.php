<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Theme Styles -->
    <link href="{{asset('admin/css/connect.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/admin.css')}}" rel="stylesheet" />
  </head>
  <body class="auth-page sign-in">
    <div class="loader">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only"></span>
      </div>
    </div>

        @yield('content')

    <script src="{{asset('admin/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('admin/js/connect.js')}}"></script>
  </body>
</html>
