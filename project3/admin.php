<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
</head>
<body id="body-pd">
<?php
    require_once("./model/user.class.php");
    $recentBook = new book();
    $recent = $recentBook->getRecentBook();
    $totalbook = $recentBook->getTotalBook();

    $totalclient = new client();
    $client = $totalclient->getTotalClient();

    $totaluser = new users();
    $user = $totaluser->getTotalUsers();

    $totalslot = new parkingslot();
    $slot = $totalslot ->getTotalSlots();
    ?>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="d-flex flex-end gap-3">
        <div class="header_img"> <img src="https://www.w3schools.com/howto/img_avatar.png" alt=""></div>
        <h5 class="align-self-center"> Hi, Admin</h5>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo text-decoration-none"> <i class='bx bxs-car-garage nav_logo-icon'></i> <span class="nav_logo-name">Parkspace</span> </a>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active text text-decoration-none"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a href="./views/user.php" class="nav_link text-decoration-none"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                    <a href="./views/schedules.php" class="nav_link text-decoration-none"> <i class='bx bx-calendar-check nav_icon' ></i> <span class="nav_name">All Schedule</span> </a> 
                    <a href="./views/parkingowner.php" class="nav_link text-decoration-none"> <i class='bx bxs-parking nav_icon'></i><span class="nav_name">Parking Owners</span> </a> 
                    <a href="./views/payment.php" class="nav_link text-decoration-none"> <i class='bx bx-money nav_icon' ></i> <span class="nav_name">Payment Methods</span> </a> 
                    <a href="./views/parkingslot.php" class="nav_link text-decoration-none"> <i class='bx bxs-car-garage nav_icon'></i> <span class="nav_name">Parking Slot</span> </a>
            </div>
            </div> 
            <a href="#" class="nav_link text-decoration-none"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <section class="main-title">
        <div>
            <h2 class="">Admin Dashboard</h2>
        </div>
    </section>
    <section class="p-5">
        <div class="d-flex justify-content-evenly">
            <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                    <h5 class="card-title">Total Books:</h5>
                    <?php foreach($totalbook as $total){?>
                    <p class="card-text h1 text-center mt-4"><?= $total['totalbook']?></p>
                    <?php }?>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Parking Owner/s</h5>
                    <?php foreach($client as $totalclients){?>
                    <p class="card-text h1 text-center mt-4"><?= $totalclients['totalclient']?></p>
                    <?php }?>
                    
                    
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Users/Rentee</h5>
                    <?php foreach($user as $totalusers){?>
                    <p class="card-text h1 text-center mt-4"><?= $totalusers['totaluser']?></p>
                    <?php }?>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Available Parking Slots</h5>
                    <?php foreach($slot as $totalslots){?>
                    <p class="card-text h1 text-center mt-4"><?= $totalslots['totalslot']?></p>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="d-flex justify-content-between mb-3">
            <h4 class="">Recent Books</h4>
            <form class="d-flex gap-2" method="" action="">
                <input class="form-control" type="search" id="myInput" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class='bx bx-search-alt-2 '></i></button>
            </form>
        </div>
        <div class="card">
                <div class="card-body">
                    <table class="table" id='myTable'>
                        <thead>
                            <tr>
                            <th scope="col">Book ID</th>
                            <th scope="col">Full Name of Rentee</th>
                            <th scope="col">Plate Number</th>
                            <th scope="col">Car Description</th>
                            <th scope="col">Plan</th>
                            <th scope="col">Full Parking Owner</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if($recent == null){
                        echo '<script>alert("No Records")</script>';                   
                        } else{?>
                        <?php foreach($recent as $latest){?>
                            <tr>
                            <th scope="row"><?= $latest['BookID']?></th>
                            <td><?= $latest['userLastName']?> <?= $latest['userFirstname']?></td>
                            <td><?= $latest['PlateNumber']?></td>
                            <td><?= $latest['Description']?></td>
                            <td><?= $latest['Plan']?> Month/s</td>
                            <td><?= $latest['clientLastname']?> <?= $latest['clientFirstname']?></td>
                            </tr>
                            
                        </tbody>
                        <?php }}?>
                    </table>
                </div>
        </div>
    </section>
    
</body>
<script src="./public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>