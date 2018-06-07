<!DOCTYPE html>
<html class="no-focus" lang="en">

<head>
  @include('container.asset._metadata') @include('container._style')
</head>

<body class="bg-default">
<main class="main">
  <!-- Login Content -->
  <div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
          <div class="push-30-t push-50 animated fadeIn">
            <!-- Login Title -->
            <div class="text-center">
              <a href="{{url('/')}}">
                <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                <h3 class="text-muted push-15-t">KantinKU</h3>
              </a>
              <p class="text-muted push-15-t"> Login</p>
            </div>
            <!-- END Login Title -->
            <form 
              id="form-login" 
              class="js-validation-login form-horizontal push-30-t" 
              action="{{route('login')}}" 
              method="post">
              @csrf
              <div class="form-group">
                <div class="
                  col-xs-12
                  {{$errors->has('email')?' has-error':''}}
                  ">
                  <div class="form-material form-material-primary floating">
                    <input 
                      class="form-control" 
                      type="text" 
                      id="login-username" 
                      name="email">
                      @if($errors->has('email'))
                        <div class="help-block text-right">{{$errors->first('email')}}</div>
                      @endif
                    <label for="login-username">Email</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="
                  col-xs-12
                  {{$errors->has('password') ? ' has-error':''}}
                  ">
                  <div class="form-material form-material-primary floating">
                    <input 
                      class="form-control" 
                      type="password" 
                      id="login-password" 
                      name="password">
                      @if($errors->has('password'))
                        <div class="help-block text-right">{{$errors->first('password')}}</div>
                      @endif
                    <label for="login-password">Password</label>
                    <script>
                    </script>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label class="css-input switch switch-sm switch-primary">
                    <input  
                      type="checkbox" 
                      id="login-remember-me" 
                      name="remember">
                    <span></span> Remember Me?
                    <p id="rememberme"></p>
                  </label>
                </div>
                <div class="col-xs-6">
                  <div class="font-s13 text-right push-5-t">
                    <a href="{{route('register')}}">tidak punya akun?</a>
                  </div>
                </div>
              </div>
              <div class="form-group has-error text-red" style="text-align: center">
                <label for="input-error" id="user-or-pass-error"></label>
              </div>
              <div class="form-group push-30-t">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                  <button  
                    id="button-login" 
                    class="btn btn-sm btn-block btn-primary" 
                    type="submit">
                      Log in
                  </button>
                </div>
              </div>
            </form>
            <!-- END Login Form -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Login Content -->
</main>
  <!-- Login Footer -->
  <div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-white">
      <span></span> &copy; <b>Gladiator</b> Doscom 2018</small>
      <br><br>
  </div>
  <!-- END Login Footer -->

  <!-- native script -->
  <script>
    function for_login() {
      var username = document.getElementById("login-username").value
      var password = document.getElementById("login-password").value

      if (
        (username == "abas" && password == "xavier") ||
        (username == "hafidz" && password == "nganu") ||
        (username == "dwidian" && password == "nganu") ||
        (username == "hermawan" && password == "nganu")
      ) {
        document.getElementById("form-login").setAttribute("action",
          "dashboard.html")
      } else {
        document.getElementById("form-login").setAttribute("action", "")
      }

      var check_url = document.getElementById("form-login").action
      if (check_url.includes("dashboard")) {
        document.getElementById("button-login").type = "submit"
      } else {
        document.getElementById("button-login").type = "button"
      }
    }

    function login() {
      var check_url = document.getElementById("form-login").action
      if (check_url.includes("dashboard")) {
        document.getElementById("user-or-pass-error").innerHTML = ""
      } else {
        document.getElementById("user-or-pass-error").innerHTML = "Username or Password Incorrect"
      }
    }
  </script>

  <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
  @include('container._script')
  <!-- Page JS Plugins -->
  <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
  <!-- Page JS Code -->
  <script src="assets/js/pages/base_pages_login.js"></script>
</body>

</html>