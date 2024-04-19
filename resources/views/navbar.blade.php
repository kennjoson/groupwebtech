<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #007bff;
            color: #fff;
            padding-left: 0;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-sep > li > a::after {
            content: "|";
            align-items: center;
            padding: 1px;
            margin-left: 40px;
        }
        .jumbotron {
            background-color: #fff;
            padding: 3rem 1rem;
            text-align: center;
        }
        .card {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        /* Updated styling for the navbar */
        .navbar .navbar-brand .bite {
            color: blue;
        }
        .navbar .navbar-brand .care {
            color: #33b34d;
        }
        .nav-item {
            margin-left: 35px; /* Adjust spacing between nav items */
        }
        .navbar-nav .nav-link {
            color: black;
            font-family:inter
        }
        .nav-link.btn.btn-primary {
        color: #fff;
        font-family:inter

        }
        .navbar .navbar-brand .bite,
        .navbar .navbar-brand .care {
            font-size: 21px; /* Adjust the font size as needed */
        }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white topbar mb-4 static-top shadow">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/bc_icon.png') }}" alt="BiteCare Icon" class="navbar-brand-icon img-fluid" style="max-width: 50px; height: auto;">
            <span class="bite" style="text-transform: none;">Bite</span><span class="care" style="text-transform: none;">Care</span>
        </a>            
        <form class="d-none d-sm-inline-block form-inline navbar-search" style="margin-left: 200px">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-sep ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Set Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Available Clinics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Find Nearby Clinic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" target="_blank">Login</a>
                    </li>
                    <span class="nav-item">
                        <a class="nav-link btn btn-primary" href="{{ route('registerClinic') }}">Register Clinic</a>
                    </span>
                </ul>
            </div>
        </div>
    </nav>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach(link => {
            link.addEventListener("click", function (event) {
                navLinks.forEach(navLink => {
                    navLink.classList.remove("active");
                    navLink.style.fontWeight = "normal"; // Reset font weight for all links
                });
                this.classList.add("active");
                this.style.fontWeight = "bold";

            });
        });
    });
</script>



