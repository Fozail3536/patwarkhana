<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <link rel="icon" href="/images/logo/coming.png" type="image/gif" sizes="16x16">
    <title>Pathwarkhana.com</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><strong>Patwarkhana</strong>.com</a>
      </div>
      <!-- /.login-logo -->
        @if (Session::has('message'))
            <div class="alert alert-danger" style="text-align: center !important">{{ Session::get('message') }}</div>
         @endif
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to your Account</p>
          <form action="{{ url('admin_login') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                {{-- <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div> --}}
              </div>
            </div>
          <div class="social-auth-links text-center mb-3">
            
            <button type="submit" class="btn btn-block btn-primary">
              Sign in
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>