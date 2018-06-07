<!-- Footer -->
<footer id="page-footer" class="bg-blue text-white">
    <div class="content content-boxed">
        <!-- Footer Navigation -->
        <div class="row push-30-t items-push-2x">
            <div class="col-sm-4">
                <h3 class="h5 font-w600 text-uppercase push-20">Get In Touch</h3>
                <div class="font-s13 push">
                    <strong>Company, Inc.</strong>
                    <br> Dinus Open Source, Community 2018
                    <br> Cafeteria Udinus, Gedung D lt 1
                    <br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </div>
                <div class="font-s13">
                    <i class="si si-envelope-open"></i> sekretariat@doscom.com
                </div>
            </div>
            <div class="col-sm-4">
                <h3 class="h5 font-w600 text-uppercase push-20">Support</h3>
                <ul class="list list-simple-mini font-s13">
                    <li>
                        <a class="font-w600" href="login.html">Log In</a>
                    </li>
                    <li>
                        <a class="font-w600" href="register.html">Sign Up</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- END Footer Navigation -->

        <!-- Copyright Info -->
        <div class="font-s12 push-20 clearfix">
            <hr class="remove-margin-t">
            <div class="pull-right">
                Crafted with
                <i class="fa fa-heart text-city"></i> by
                <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">Gladiator</a>
            </div>
            <div class="pull-left">
                <a class="font-w600" href="http://doscom.org" target="_blank">DOSCOM</a> &copy;
                <span class="">2018</span>
            </div>
        </div>
        <!-- END Copyright Info -->
    </div>
</footer>
<!-- END Footer -->
@if(
    Route::current()->getName() != 'login' || 
    Route::current()->getName() != 'register' 
)
@endif
</div>
<!-- END Page Container -->

<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page JS Code -->
<script src="assets/js/plugins/jquery-vide/jquery.vide.min.js"></script>
<script>
    jQuery(function () {
        // Init page helpers (Appear plugin)
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
    });
</script>
</body>

</html>