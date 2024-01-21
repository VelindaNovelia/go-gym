<nav id="bg" class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <div>
        <a href="home.php"><img id="logo" src="img/GO GYM.png"></a>
    </div>
    <a href="" class="navbar-brand p-0">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0" id="nav-item">
            <a href="home.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About Us</a>
            <a href="member.php" class="nav-item nav-link">Membership</a>
            <a href="facility.php" class="nav-item nav-link">Facility</a>
            <a href="merchan.php" class="nav-item nav-link">Mechandise</a>
            <a href="#footer" class="nav-item nav-link">Contact</a>
        </div>
        <?php
        session_start();
        if ($_SESSION['registered_user']) {
        ?>
            <a href="logout.php" class="btn btn-info rounded-pill py-2 px-40">Logout</a>
        <?php
        } else {
        ?>
            <a href="daftar.php" class="btn btn-info rounded-pill py-2 px-40">Sign In/Sign Up</a>
        <?php
        }
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get the current page file name
                var currentPage = window.location.pathname.split('/').pop();

                // Add the "active" class to the corresponding navigation link
                var navLinks = document.querySelectorAll('.nav-item');
                navLinks.forEach(function(link) {
                    if (link.getAttribute('href') === currentPage) {
                        link.classList.add('active');
                    }
                });
            });
        </script>
    </div>
</nav>