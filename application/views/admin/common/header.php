<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <script>
            var a = 0;

            function change() {
                if (a == 0) {
                    a = 1;
                    console.log(a);
                } else {
                    a = 0;
                    console.log(a);
                }
                if (a == 1) {
                    document.getElementById("bod").classList.add('sidebar-collapse');
                }
                if (a == 0) {
                    document.getElementById("bod").classList.remove('sidebar-collapse');
                }
            }

            window.onload = function(s) {
                patiya();
            }
            window.onresize = function(s) {
                patiya();
            }

            function patiya() {
                var screenSize = window.innerWidth;

                console.log(screenSize);
            }
        </script>

        <button style=" border: none;" class="btn btn-link" onclick="change()"><i style="color:black;" class="fas fa-bars"></i></button>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>admin/index" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/logout" role="button">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>

        </ul>



    </ul>
</nav>
<!-- /.navbar -->