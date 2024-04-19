<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiteCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <style>
        /* .card {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        } */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .footer {
            margin-top: auto;
            text-align: center;
            padding: 20px;
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        .bite {
            color: blue;
            font-size: 18px;
        }
        .care {
            color: #33b34d;
            font-size: 18px;
        }
        /* Add the following style for the sidebar text color */
        .navbar-nav.sidebar .nav-link {
            color: black;
        }
        .sidebar-brand-text .bite,
            .sidebar-brand-text .care {
                font-size: 21px; /* Adjust the font size as needed */
            }

    </style>
</head>
<body>
    <div id="content-wrapper" class="flex-column">
        @include('navbar')
    </div>

    <div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-4 text-center mb-4"><span class="bite" style="text-transform: none; font-size: 70px;">Bite</span><span class="care" style="text-transform: none; font-size: 70px;">Care</span></h1>
            <p class="lead text-center">Animal Bite Clinics in Sorsogon and Legazpi City</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('image/cat-removebg.png') }}" alt="BiteCare Image" class="img-fluid">
        </div>
    </div>
</div>
       

<footer class="bg-body-tertiary flex-column footer">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Google -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>
      <!-- Github -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); width: 100%;">
     Copyright © 2024 <span class="bite" style="text-transform: none;">Bite</span><span class="care" style="text-transform: none;">Care</span>
  </div>
</footer>

