<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .form-box {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #f8f9fa;
        }

    </style>
</head>
<body>
    <div id="content-wrapper" class="d-flex flex-column">
        @include('navbar')
        <div class="container mt-2">
            <h2 class="mb-4">Register Your Animal Bite Clinic</h2>
            <p class="lead mb-4">Please fill out the form below to register.</p>
        <!-- <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x" role="alert" style="display: none;" id="successAlert">
        <strong>Success!</strong> Your registration has been sent successfully.
        <br>
        Please wait for admin approval. An email will be sent to you shortly.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->
            <div class="card form-box">
                <div class="card-body">
                <form id="clinicRegistrationForm" action="{{ route('sendEmail') }}" class="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="clinicName" class="form-label">Clinic Name</label>
                        <input type="text" class="form-control" id="clinicName" name="clinicName" placeholder="Enter clinic name" required>
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Province</label>
                        <select class="form-select" id="province" name="province" placeholder="Select province" required>
                            <option>Sorsogon</option>
                            <option>Albay</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <select class="form-select" id="city" name="city" placeholder="Select city" required>
                            <option>Sorsogon</option>
                            <option>Legazpi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="barangay" class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter barangay" required>
                    </div>
                    <div class="mb-3">
                        <label for="postalCode" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Enter postal code" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter contact number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Clinic Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="clinicType" id="publicClinic" value="Public" required>
                            <label class="form-check-label" for="governmentClinic">Public</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="clinicType" id="privateClinic" value="Private" required>
                            <label class="form-check-label" for="privateClinic">Private</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="clinicPicture" class="form-label">Clinic Image</label>
                        <input type="file" class="form-control" id="clinicPicture" name="clinicPicture" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="text-center"> <!-- Add this div to center the button -->
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
<!-- 
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("clinicRegistrationForm");
            const successAlert = document.getElementById("successAlert");

            form.addEventListener("submit", function (event) {
                event.preventDefault();
                successAlert.style.display = "block";

                setTimeout(function () {
                    form.reset();
                    successAlert.style.display = "none";
                }, 3000); 
            });
        });
    </script> -->
</body>
</html>
