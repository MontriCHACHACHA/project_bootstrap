<?php 
session_start(); // เรียกใช้ session_start() ที่จุดเริ่มต้นของไฟล์
$message = ''; // ตัวแปรเก็บข้อความ

// ตรวจสอบว่ามีค่า username ใน session หรือไม่
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    // แสดงข้อความต้อนรับ
    $message = '<p style="color: #08C2FF; font-size: 18px; font-weight: bold;">Welcome ' . htmlspecialchars($username) . '</p>';
    
    // ทำลาย session เพื่อรีเซ็ต
    session_unset();
    session_destroy();

}

include('db_connect.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <!-- <script>
    // ฟังก์ชันเพื่อแสดง alert ตามสถานะ
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        if (status === 'success') {
            alert('Registration Successful!');
        } else if (status === 'error') {
            alert('Registration Failed. Please try again.');
        }
    };
    </script> -->

</head>

<body class="color4">
    <div class="container-lg">

        <nav class="navbar navbar-expand-lg navbar-light py-3  px-4 fixed-top bg-light">
            <a class="navbar-brand color5 fs-3 fw-bold" href="index.php"><img src="./image2/logo (1).png" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-link">
                        <div class="py-1" style="position: relative">
                            <i class="fa-solid fa-magnifying-glass"
                                style="color: #666; position: absolute; top: 18px; left: 25px"></i>
                            <input type="text" class="py-2 ps-5" style="
                            background-color: #27292a;
                            border: none;
                            border-radius: 30px;
                          " placeholder=" Type Someting" />
                        </div>
                    </li>
                    <li class="py-2">
                        <a class="nav-link color3 texthv" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="py-2">
                        <a class="nav-link color3 texthv" href="browse.html">Browse</a>
                    </li>
                    <li class="py-2">
                        <a class="nav-link color3 texthv" href="details.html">Details</a>
                    </li>
                    <li class="py-2">
                        <a class="nav-link color3 texthv" href="streams.html">Stream</a>
                    </li>
                    <li class="py-2 pe-0">
                        <a class="nav-link text-light btn-profile px-3  d-flex align-items-center"
                            style="border-radius: 25px; background-color: #E75E8D;" href="profile.html"><span
                                class="pe-2">Profile</span>
                            <img src="./image2/profile-header.jpg" style="border-radius: 20px" alt="" /></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->


        <main class="container mt-4"
            style="background-color: #27292a; height: auto; border-radius: 30px; overflow: hidden;">
            <div class="child p-3 mx-sm-3 mx-md-5 mx-3 mt-5 d-flex align-items-center"
                style="border-radius: 30px; background-image: url('./image2/banner-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <div class="m-3 m-md-2 py-md-4 text-center col-md-12">
                    <p class="text-light fs-4 ">Welcome To Cyborg</p>
                    <p><?php echo $message ?></p>

                    <h4 class="fw-bold text-uppercase text-light" style="font-size: 40px;"><span
                            style="color: #E75E8D;">Browse</span> Our Popular Games Here</h4>
                    <button class=" px-4 py-2 border-0 mt-3 btnhv2" type="button" data-bs-toggle="modal"
                        data-bs-target="#LoginModal"
                        style="background-color: #E75E8D; color: #fff; border-radius: 30px;">Login Now</button>
                    <button class=" px-4 py-2 border-0 mt-3 btnhv2" type="button" data-bs-toggle="modal"
                        data-bs-target="#RegisterModal"
                        style="background-color: #E75E8D; color: #fff; border-radius: 30px;">Register Now</button>
                    <?php include('modal.php') ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class=" m-md-5 m-3 mt-5" style="background-color:#1f2122; height: auto; border-radius: 30px;">

                        <div class="container px-md-4 pb-5 color4" style=" border-radius: 30px;">
                            <div class="ps-4 py-4">
                                <h2 class="child text-light fw-bold"><span class=" text-decoration-underline"> Most
                                        Popular</span>&nbsp;<span class="color5 text-decoration-none">Right Now</span>
                                </h2>
                            </div>
                            <div class="row gy-4 ">
                                <div class="child col-lg-3 col-sm-6 ps-sm-4 pe-sm-2 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/02.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child col-lg-3 col-sm-6 ps-sm-2 pe-sm-4 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/02.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child col-lg-3 col-sm-6 ps-sm-4 pe-sm-2 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/03.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child col-lg-3 col-sm-6 ps-sm-4 pe-sm-2 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/03.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child col-lg-3 col-sm-6 ps-sm-4 pe-sm-2 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/03.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child col-lg-3 col-sm-6 ps-sm-4 pe-sm-2 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/03.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child col-lg-3 col-sm-6 ps-sm-4 pe-sm-2 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/02.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="child col-lg-3 col-sm-6 ps-sm-4 pe-sm-2 px-4 p-lg-3">
                                    <div class="px-3 py-4 color1" style="border-radius: 25px;">
                                        <img src="./image2/02.jpg" style=" width: 100%; border-radius: 25px;" alt="">
                                        <div class="text-light py-3">
                                            <div class="d-flex justify-content-between fw-bold pb-1">
                                                <span>Fortnite</span><span><i
                                                        class="fa-solid fa-star text-warning pe-1"></i>4.8</span>
                                            </div>
                                            <div class="d-flex justify-content-between"><span
                                                    class="text-secondary">Sandbox</span><span class="text-light"> <i
                                                        class="fa-solid fa-download color5 pe-1"></i>2.3M</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button
                            class="child text-light btnhv2 position-absolute start-50 translate-middle px-md-5 py-md-3 px-4 py-2 border-0 rounded-pill"
                            style="background-color: #E75E8D;">Discover Popular</button>
                    </div>


                    <div class="container">
                        <div class="row px-md-5 px-3 py-5">
                            <div class="col-12"
                                style="background-color:#1f2122; height: auto; border-radius: 30px; position: relative;">
                                <div class="pb-5"
                                    style="background-color:#1f2122; height: auto; border-radius: 30px; position: relative;">
                                    <div class="child py-4 ps-4">
                                        <h2 class="text-light fw-bold"><span class=" text-decoration-underline"> Your
                                                Gaming</span>&nbsp;<span
                                                class="color5 text-decoration-none">Library</span></h2>
                                    </div>

                                    <div class="container">
                                        <div class="row gy-4">
                                            <div
                                                class="child col-12 py-2 d-flex align-items-center justify-content-sm-center flex-wrap">
                                                <figure
                                                    class="col-lg-2 col-md-3 col-sm-6 m-0 col-12 px-4 col-sm-10 px-sm-2">
                                                    <img class=" " src="./image2/01.jpg"
                                                        style="border-radius: 20px;  width: 100%;" alt="">
                                                </figure>
                                                <div class="col-sm-9 col-12 text-center ">
                                                    <div class="d-flex flex-wrap align-items-start  px-4 py-4 p-sm-3 col-12 "
                                                        style="font-size: 15px;">
                                                        <div class="col-lg-2 col-md-3 col-sm-6   text-light col-6"><span
                                                                class="fw-bold">Dota
                                                                2</span><br><span class="text-secondary">Sandbox</span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-6  col-6"><span
                                                                class="fw-bold text-light">Date
                                                                Added</span><br><span
                                                                class="text-secondary">24/08/2036</span></div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><span
                                                                class="fw-bold text-light">Hours
                                                                Played</span><br><span class="text-secondary">63H
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-6  col-6"><span
                                                                class="fw-bold text-light">Currently</span><br><span
                                                                class="text-secondary">Downloaded</span></div>

                                                        <div
                                                            class="col-lg-3 col-md-12 col-sm-12 pt-lg-0 pt-4 col-12 text-center text-lg-end">
                                                            <button
                                                                class="  text-secondary py-2 px-4 border border-secondary color4"
                                                                style="border-radius: 25px;">Donwloaded</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="child col-12 py-2 d-flex align-items-center justify-content-sm-center flex-wrap">
                                                <figure
                                                    class="col-lg-2 col-md-3 col-sm-6 m-0 col-12 px-4 col-sm-10 px-sm-2">
                                                    <img class=" " src="./image2/01.jpg"
                                                        style="border-radius: 20px;  width: 100%;" alt="">
                                                </figure>
                                                <div class="col-sm-9 col-12 text-center ">
                                                    <div class="d-flex flex-wrap align-items-start  px-4 py-4 p-sm-3 col-12 "
                                                        style="font-size: 15px;">
                                                        <div class="col-lg-2 col-md-3 col-sm-6   text-light col-6"><span
                                                                class="fw-bold">Dota
                                                                2</span><br><span class="text-secondary">Sandbox</span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-6  col-6"><span
                                                                class="fw-bold text-light">Date
                                                                Added</span><br><span
                                                                class="text-secondary">24/08/2036</span></div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><span
                                                                class="fw-bold text-light">Hours
                                                                Played</span><br><span class="text-secondary">63H
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-6  col-6"><span
                                                                class="fw-bold text-light">Currently</span><br><span
                                                                class="text-secondary">Downloaded</span></div>

                                                        <div
                                                            class="col-lg-3 col-md-12 col-sm-12 pt-lg-0 pt-4 col-12 text-center text-lg-end">
                                                            <button
                                                                class="  text-secondary py-2 px-4 border border-secondary color4"
                                                                style="border-radius: 25px;">Donwloaded</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="child col-12 py-2 d-flex align-items-center justify-content-sm-center flex-wrap">
                                                <figure
                                                    class="col-lg-2 col-md-3 col-sm-6 m-0 col-12 px-4 col-sm-10 px-sm-2">
                                                    <img class=" " src="./image2/01.jpg"
                                                        style="border-radius: 20px;  width: 100%;" alt="">
                                                </figure>
                                                <div class="col-sm-9 col-12 text-center ">
                                                    <div class="d-flex flex-wrap align-items-start  px-4 py-4 p-sm-3 col-12 "
                                                        style="font-size: 15px;">
                                                        <div class="col-lg-2 col-md-3 col-sm-6   text-light col-6"><span
                                                                class="fw-bold">Dota
                                                                2</span><br><span class="text-secondary">Sandbox</span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-6  col-6"><span
                                                                class="fw-bold text-light">Date
                                                                Added</span><br><span
                                                                class="text-secondary">24/08/2036</span></div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><span
                                                                class="fw-bold text-light">Hours
                                                                Played</span><br><span class="text-secondary">63H
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-6  col-6"><span
                                                                class="fw-bold text-light">Currently</span><br><span
                                                                class="text-secondary">Downloaded</span></div>

                                                        <div
                                                            class="col-lg-3 col-md-12 col-sm-12 pt-lg-0 pt-4 col-12 text-center text-lg-end">
                                                            <button
                                                                class="  text-secondary py-2 px-4 border border-secondary color4"
                                                                style="border-radius: 25px;">Donwloaded</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button
                                        class="child text-light btnhv2 px-md-5 py-md-3  px-4 py-2 border-0 rounded-pill"
                                        style="background-color: #E75E8D; position: absolute; left: 50%; top: 100%; transform: translate(-50%, -50%);">Discover
                                        Popular</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>



        <footer class="child color4 text-center text-light pt-4" style="height: 100px;">
            <p>&copy; Montree Chanuanklang. 2024
        </footer>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>