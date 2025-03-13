<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaidoGSM</title>
    <link rel="icon" href="#" type="../images/logo.ico">
</head>

<body>
    

<nav class="navbar navbar-expand-lg border-bottom bg-color">
    <div class="container-fluid">
        <a class="navbar-brand  text-white" href="#">
            <img src="images/logo.ico" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            KaidoGSM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="icloud-bypass.php"><i class="fa-solid fa-cloud"></i> iCloud Bypass </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="samsung.php"><i class="fa-solid fa-mobile"></i> Samsung FRP </a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="account.php"><i class="fa-solid fa-user"></i> Account </a> -->
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<style>
    .login-button-cotainer {
        background-color: red;
        display: flex;
        width: 100%;
    }

    .navbar-nav .nav-link {
        color: #bdbdbd;
        margin-left: 1vh;
    }

    .navbar-nav .nav-link:focus {
        color: #ffffff;
    }

    .navbar-nav .nav-link:hover {
        color: #ffffff;
    }

    .navbar-toggler {
        color: white;
    }

    .bg-color {
        background-color: #414359;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the current URL path
        const currentPath = window.location.pathname;

        // Select all nav-link elements
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            // Check if the link href matches the current URL path
            if (link.getAttribute('href') === currentPath) {
                // Add active class to the matching link
                link.classList.add('active');
                link.setAttribute('aria-current', 'page');
            } else {
                link.classList.remove('active');
                link.removeAttribute('aria-current');
            }
        });
    });
</script><link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/all.min_1.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<link href="css/bootstrap.min_1.css" rel="stylesheet">
<!-- Modal -->
<div class="modal fade " id="iBypassSignalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">iBypass Hello Bypass with Signal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span><strong>Supported Models:</strong></span><br>
                <span>iPhone 6s - X</span><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="iCHello" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">iC Hello Bypass</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span><strong>Supported Models for bypass with signal:</strong></span><br>
                <span>iPhone 6s</span><br>
                <span>iPhone 6s/6s Plus/SE 1st Gen</span><br>
                <span>iPhone 7/7 Plus</span><br>
                <span>iPhone 8/8 Plus</span><br>
                <span>iPhone X</span><br><br>

                <span><strong>Supported Models for bypass no signal:</strong></span><br>
                <span>iPhone XR/XS/XS Max</span><br>
                <span>iPhone 11</span><br>
                <span>iPhone 11 Pro</span><br>
                <span>iPhone 11 Pro Max</span><br>
                <span>iPhone SE 2nd Gen</span><br>
                <span>iPhone 12 Mini</span><br>
                <span>iPhone 12</span><br>
                <span>iPhone 12 Pro</span><br>
                <span>iPhone 12 Pro Max</span><br>
                <span>iPhone SE 3rd Gen</span><br>
                <span>iPhone 13 Mini</span><br>
                <span>iPhone 13</span><br>
                <span>iPhone 13 Pro</span><br>
                <span>iPhone 13 Pro Max</span><br>
                <span>iPhone 14</span><br>
                <span>iPhone 14 Pro</span><br>
                <span>iPhone 14 Plus</span><br>
                <span>iPhone 14 Pro Max</span><br>
                <span>iPhone 15</span><br>
                <span>iPhone 15 Plus</span><br>
                <span>iPhone 15 Pro</span><br>
                <span>iPhone 15 Pro Max</span><br><br>

                <span><strong>Supported iPad Models for bypass no signal:</strong></span><br>
                <span>iPad 10.2" 8th Gen (Wi-Fi)</span><br>
                <span>iPad 10.2" 9th Gen (Wi-Fi)</span><br>
                <span>iPad 10.9" 10th Gen (Wi-Fi)</span><br>
                <span>iPad Air 3rd Gen (Wi-Fi)</span><br>
                <span>iPad Air 4th Gen (Wi-Fi)</span><br>
                <span>iPad Air 5th Gen (Wi-Fi)</span><br>
                <span>iPad Air M2 11" (Wi-Fi)</span><br>
                <span>iPad Air M2 13" (Wi-Fi)</span><br>
                <span>iPad Mini 5th Gen (Wi-Fi)</span><br>
                <span>iPad Mini 6th Gen (Wi-Fi)</span><br>
                <span>iPad Pro M4 13" 6TH GEN (Wi-Fi)</span><br>
                <span>iPad Pro 11" 3rd Gen (Wi-Fi)</span><br>
                <span>iPad Pro 11" (Wi-Fi)</span><br>
                <span>iPad Pro 11" 2nd Gen (Wi-Fi)</span><br>
                <span>iPad Pro 11" 4th Gen (Wi-Fi)</span><br>
                <span>iPad Pro 12.9" 3rd Gen (Wi-Fi)</span><br>
                <span>iPad Pro 12.9" 4th Gen (Wi-Fi)</span><br>
                <span>iPad Pro 12.9" 5th Gen (Wi-Fi)</span><br>
                <span>iPad Pro 12.9" 6th Gen (Wi-Fi)</span><br>
                <span>iPad Pro M4 11" 5TH GEN (Wi-Fi)</span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="iHelloHFZ" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">iHello HFZ Hello Bypass with Signal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class=""><b>Supported Models for bypass with signal:</b></span><br>
                <span><b>Need Change Serial</b></span><br>
                <span>iPhone 6s</span><br>
                <span>iPhone 6s/6s Plus/SE 1st Gen</span><br>
                <span>iPhone 7/7 Plus</span><br>
                <span>iPhone 8/8 Plus</span><br>
                <span>iPhone X</span><br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="iHelloHFZPremium" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">iHello HFZ Hello Bypass with Signal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class=""><b>Supported Models for bypass with signal:</b></span><br>
                <span><b>No Need Change Serial</b></span><br>
                <span>iPhone 6s</span><br>
                <span>iPhone 6s/6s Plus/SE 1st Gen</span><br>
                <span>iPhone 7/7 Plus</span><br>
                <span>iPhone 8/8 Plus</span><br>
                <span>iPhone X</span><br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- <div class="container">
        <div class="row d-flex justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">

        <div class="col px-2">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><i class="fa-solid fa-cloud"></i> iPH Bypass Tool</h5>
                        </p>Bypass Passcode/Disabled/Unavailable iPhone 5s-X</p>
                        <a href="https://www.mediafire.com/file/twupcscbg1nx9j0/iPHBypass+Tool+2024+password=123.zip/file" target="_blank" class="btn btn-outline-primary w-100">Download</a>
                    </div>
                </div>
            </div>

            <div class="col px-2">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><i class="fa-solid fa-cloud"></i> iBypassSignal Hello Bypass with Signal</h5>
                        <p class="card-text">Supported iPhone 5s/6/6 Plus. Device
                            must be factory unlocked or locked on smart.
                        </p>
                        <a href="" target="_blank" class="btn btn-outline-primary w-100">Download</a>
                    </div>
                </div>
            </div>

            <div class="col px-2">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><i class="fa-solid fa-cloud"></i> iC Hello Bypass With Signal</h5>
                        <p class="card-text">Supported Device <br>
                        iPhone 5s<br>
                        iPhone 6/6 Plus<br>
                        iPhone 6s/6s Plus/SE <br>
                        iPhone 7/7 Plus<br>
                        iPhone 8/8 Plus<br>
                        iPhone X
                        </p>
                        <a href="" target="_blank" class="btn btn-outline-primary w-100">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container">
        <div class="row d-flex justify-content-left row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="card fixed-height-card card-custom-gap" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-primary mb-3">
                        <i class="fa-solid fa-cloud"></i>
                        <span class="ms-2">iBypass Lpro</span>
                    </h5>
                   
                    <a href="https://kaidogsm.blog/downloads/LPro Max V1.1 MacOS.zip" target="_blank" class="btn btn-outline-primary w-100 mb-3">Download Mac OS</a>
                    <a href="https://kaidogsm.blog/downloads/LPro Max V1.1 Windows.zip" target="_blank" class="btn btn-outline-primary w-100 mb-3">Download Windows</a>
                </div>
                <div class="card-body">
                    
                </div>
            </div>

            <!-- <div class="card fixed-height-card card-custom-gap" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        <i class="fa-solid fa-cloud"></i>
                        <span class="ms-2">iC Bypass Tool</span>
                    </h5>
                    <a href="" target="_blank" class="btn btn-outline-primary w-100">Download</a>
                    <button type="button" class="btn btn-outline-primary w-100 mt-2" data-bs-toggle="modal" data-bs-target="#iCHello"> Show Supported</button>
                </div>
            </div>

            <div class="card fixed-height-card card-custom-gap" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        <i class="fa-solid fa-cloud"></i>
                        <span class="ms-2">iHello HFZ</span>
                    </h5>
                    <a href="" target="_blank" class="btn btn-outline-primary w-100">Download</a>
                    <button type="button" class="btn btn-outline-primary w-100 mt-2" data-bs-toggle="modal" data-bs-target="#iHelloHFZ"> Show Supported</button>
                </div>
            </div>

            <div class="card fixed-height-card card-custom-gap" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        <i class="fa-solid fa-cloud"></i>
                        <span class="ms-2">iHello HFZ Premium</span>
                    </h5>
                    <a href="" target="_blank" class="btn btn-outline-primary w-100">Download</a>
                    <button type="button" class="btn btn-outline-primary w-100 mt-2" data-bs-toggle="modal" data-bs-target="#iHelloHFZPremium"> Show Supported</button>
                </div>
            </div> -->

        </div>
    </div>






<style>
    .card-custom-gap {
        margin: 10px;
    }

    .card-title {
        height: 25px;
        display: flex;
        justify-content: start;
        align-items: center;

    }

    .container {
        margin-top: 5vh;
        padding: 20px;
        width: auto;
    }

    .card {
        box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
        transition: box-shadow 0.1s ease-in-out;
        /* Smooth transition for box-shadow */
    }

    .card:hover {
        box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
    }
</style></body></html>