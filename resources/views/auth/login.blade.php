<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="/lte/plugins/fontawesome-free/css/all.min.css"
    />

    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />

    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <!-- Login Header -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="/lte/index2.html" class="h1"><b>Login</b></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Let's get started, shall we?</p>

          <!-- Login Error -->
          @error('loginError')
          <div class="alert alert-danger">
            <strong>Error</strong>
            <p>{{$message}}</p>
          </div>
          @enderror

          <!-- Form Email -->
          <form method="post">
            @csrf
            <div class="input-group mb-3">
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                name="email"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

            <!-- Email Error -->
            @error('email')
            <p style="color: red; font-size: small">{{$message}}</p>
            @enderror

            <!-- Form Password -->
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                name="password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>

            <!-- Password Error -->
            @error('password')
            <p style="color: red; font-size: small">{{$message}}</p>
            @enderror

            <!-- Login Button -->
            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">
                  Log in
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/lte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/lte/dist/js/adminlte.min.js"></script>
  </body>
</html>