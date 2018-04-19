@extends('layouts.app') @section('content')

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
                    <form class="js-validation-register form-horizontal push-50-t push-50" action="login.html" method="">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="text" id="register-username" name="register-username" placeholder="Please enter a username">
                                    <label for="register-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="email" id="register-email" name="register-email" placeholder="Please provide your email">
                                    <label for="register-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="password" id="register-password" name="register-password" placeholder="Choose a strong password..">
                                    <label for="register-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="password" id="register-password2" name="register-password2" placeholder="..and confirm it">
                                    <label for="register-password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-7 col-sm-8">
                                <label class="css-input switch switch-sm switch-success">
                                    <input type="checkbox" id="register-terms" name="register-terms">
                                    <span></span> I agree with terms &amp; conditions
                                </label>
                            </div>
                            <div class="col-xs-5 col-sm-4">
                                <div class="font-s13 text-right push-5-t">
                                    <a href="login.html">sudah punya akun?</a>
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

<!-- Register Footer -->
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-muted">
        <span class="js-year-copy"></span> &copy; Gladiator</small>
</div>
<!-- END Register Footer -->

@endsection