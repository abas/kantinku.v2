<!DOCTYPE html>
<html class="no-focus" lang="en">

<head>
  @include('container.asset._metadata') @include('container._style')
</head>

<body class="bg-success">
  <main class="main">
    <!-- Register Content -->
    <div class="bg-white pulldown">
      <div class="content content-boxed overflow-hidden">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4">
            <div class="push-30-t push-20 animated fadeIn">
              <!-- Register Title -->
              <div class="text-center">
                <a href="index.html">

                  <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                  <h3 class="text-muted push-15-t">KantinKU</h3>
                </a>
                <p class="text-muted push-15-t"> Register</p>
              </div>
              <!-- END Register Title -->

              <!-- Register Form -->
              <!-- jQuery Validation (.js-validation-register class is initialized in js/pages/base_pages_register.js) -->
              <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
              <form 
                class="js-validation-register form-horizontal push-50-t push-50" 
                action="{{route('register')}}" 
                method="POST">
                @csrf
                @if(Session('errors'))
                {{-- {{$errors}} --}}
                @else
                @endif
                <div class="form-group">
                  <div class="
                        col-xs-12
                        {{$errors->has('name')?' has-error':''}}
                      ">
                    <div class="form-material form-material-success">
                      <input 
                        class="form-control" 
                        type="text" 
                        id="register-username" 
                        name="name" placeholder="masukkan nama anda..">
                        @if($errors->has('name'))
                          <div class="help-block text-right">{{$errors->first('name')}}</div>
                        @endif
                      <label for="register-username">Nama</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                      col-xs-12
                      {{$errors->has('email')?' has-error':''}}
                      ">
                    <div class="form-material form-material-success">
                      <input 
                      class="form-control" 
                      type="email" 
                      id="register-email" 
                      name="email" 
                      placeholder="masukkan email aktif anda..">
                      @if($errors->has('email'))
                        <div class="help-block text-right">{{$errors->first('email')}}</div>
                      @endif
                      <label for="register-email">Email</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-xs-12
                    {{$errors->has('password')?' has-error':''}}
                    ">
                    <div class="form-material form-material-success">
                      <input 
                        class="form-control" 
                        type="password" 
                        id="register-password" 
                        name="password" 
                        placeholder="masukkan password akun anda">
                        @if($errors->has('password'))
                          <div class="help-block text-right">{{$errors->first('password')}}</div>
                        @endif
                      <label for="register-password">Kata Sandi</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-xs-12
                    {{$errors->has('password_confirmation')?' has-error':''}}
                    ">
                    <div class="form-material form-material-success">
                      <input 
                        class="form-control" 
                        type="password" 
                        id="register-password2" 
                        name="password_confirmation" 
                        placeholder="..konfirmasi password">
                        @if($errors->has('password_confirmation'))
                          <div class="help-block text-right">{{$errors->first('password_confirmation')}}</div>
                        @endif
                      <label for="register-password2">Ulangi Kata Sandi</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-xs-7 col-sm-8
                    {{$errors->has('register-terms')?' has-error':''}}
                    ">
                    <label class="css-input switch switch-sm switch-success">
                      <input type="checkbox" id="register-terms" name="register-terms">
                      {{-- @if($errors->has('password_confirmation'))
                        <div class="help-block text-right">{{$errors->first('register-terms')}}</div>
                      @endif --}}
                      <span></span> setujui peraturan
                    </label>
                  </div>
                  <div class="col-xs-5 col-sm-4">
                    <div class="font-s13 text-right push-5-t">
                      <a href="{{route('login')}}">sudah punya akun?</a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <button class="btn btn-sm btn-block btn-success" type="submit">Create Account</button>
                  </div>
                </div>
              </form>
              <!-- END Register Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Register Content -->
  </main>
  <!-- Login Footer -->
  <div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-white">
      <span></span> &copy;
      <b>Gladiator</b> Doscom 2018</small>
    <br>
    <br>
  </div>
  <!-- END Login Footer -->

  <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
  @include('container._script')
  <!-- Page JS Plugins -->
  <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
  <!-- Page JS Code -->
  <script src="assets/js/pages/base_pages_login.js"></script>
</body>

</html>