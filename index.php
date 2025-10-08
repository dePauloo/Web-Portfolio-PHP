<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deogratsias Jevon</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/16b2a527f8.js" crossorigin="anonymous"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="img/Coba_Baru.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#Contact">Contact</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Mechatronics Engineer</p>
                <h1> Hi, I'm Deogratsias<br><span>Jevon</span> From Indonesia</h1>
            </div>
        </div>
    </div>

    <!-- -------------------- about -------------------- -->
    <?php include 'about.php'; ?>
    <!-- -------------------- services -------------------- -->
    <?php include 'service.php'; ?>

    <!-- -------------------- portfolio -------------------- -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="img/Work 1.jpg" alt="work1">
                    <div class="layer">
                        <h3>Tool Box Design</h3>
                        <p>A container for holding, organizing, and carrying tools, though the term can also refer to a
                            collection of specialized tools for a particular task.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="img/CAM.jpg" alt="work2">
                    <div class="layer">
                        <h3>Computer Aided Manufacturing</h3>
                        <p>Instructions for automated machinery like CNC machines to produce physical parts.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="img/EWiring.jpg" alt="work3">
                    <div class="layer">
                        <h3>Electrical Wiring</h3>
                        <p>Installation of insulated conductive cables and devices like switches, outlets, and
                            distribution boards.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>

    <!-- -------------------- contact -------------------- -->
    <?php include 'contact.php'; ?>
        <div class="copyright">
            <p>Copyright © Deogratsias Jevon 2025</p>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>