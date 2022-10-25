<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Waze: Reservation</title>

    <!-- BS -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8fe3227aac.js" crossorigin="anonymous"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- custom google font -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

<!-- bootsrap modal  -->
<div class="b-example-divider"></div>

<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
<div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
    <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0">Sign up for free</h2>
        <a type="button" class="btn-close"  href="../index.php"></a>
    </div>

    <div class="modal-body p-5 pt-0">
        <form class="">
        <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Phone number</label>
        </div>
          <!-- tentaticve -->
        <div class="form-floating mb-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>
        <!-- tentative -->
        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        <hr class="my-4">
        <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
        <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
            Sign up with Twitter
        </button>
        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
            Sign up with Facebook
        </button>
        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
            Sign up with GitHub
        </button>
        </form>
    </div>
    </div>
</div>
</div>

<div class="b-example-divider"></div>


<!-- end of bootsrap modal -->

</body>
</html>