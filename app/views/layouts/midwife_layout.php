<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->siteTitle(); ?></title>
    <link rel="icon" type="image/png" href="<?= PROOT ?>img/National.png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= PROOT ?>bootstrap/css/bootstrap.css">
    <!-- icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- main stylesheet -->
    <link rel="stylesheet" href="<?= PROOT ?>css/midwife.css">
    
    <link rel="stylesheet" href="<?= PROOT ?>css/reset-stylesheet.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        
    <!-- JS -->
    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>

    <?= $this->content('head'); ?>

</head>

<body       >   
    <!--navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= PROOT ?>img/National.png" width="40" height="40" class="d-inline-block align-top" alt="Sri Lanka National Symbol">
        </a>
        <a class="navbar-brand" href="#">Office Of The Medical Officer Of Health<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Kelaniya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <header>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav pl-4">
                    <li class="nav-item active pl-5">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link" href="#">
                            <img src="<?= PROOT ?>img/Language.png" width="40" height="40" class="d-inline-block align-top" alt="Sri Lanka National Flag">
                            සිංහල</a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <i class="fa fa-user-circle"></i>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello,<br>Prema Chandani
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Dashboard.html" style="color: black;">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link logout" href="#" style="color: black;"> &emsp;Sign Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
    </nav>
    <div class="container"></div>
    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <!--//navigation bar-->

    <?= $this->content('body'); ?>
    
    <!--footer-->
    <div class="footer">
        <div class=footer-content>
            <div class="footer-section about">

                <h4><img src="<?= PROOT ?>img/Midwife-icon.png" width="40" height="40" class="d-inline-block align-top" alt="Midwife">
                    Adversity is the midwife of genius</h4>
                <br>
                <p>Being a midwife is about much more than just holding babies – you’re an expert in caring for women during pregnancy,
                    labour and after birth.<br>
                    You’ll work with women, their families and other health professionals in a rewarding job where no two days will be
                    the same and through which you’ll become a highly-skilled and sought after professional.
                </p>
            </div>
            <div class="footer-section details">
                <h6>Medical Officer Contact Details</h6>
                <div class="contact">
                    <span><i class="fa fa-phone"></i> &nbsp; 123-456-789 &emsp; &emsp;</span><br>
                    <span><i class="fa fa-envelope"></i> &nbsp; info@healthcenterKelaniya.com</span>
                </div>
                <br> <br>
                <div class="socials">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section contact-form">
                <h2 id="contact" style="color: cornflowerblue;">Contact Medical Officer</h2>
                <br>
                <form action="index.html" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Enter Your Email" required>
                    <textarea name="message" class="text-input contact-input" placeholder="Enter Your Message........" required></textarea>
                    <button style="color:yellow;" type="submit" class="btn btn-big contact-btn">
                        <i class="fa fa-envelope"></i>
                        Send
                    </button>
                    <h2>&emsp;</h2>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            Created by <snap style="color: red;">University of Moratuwa</snap> | &copy; 2020 All Rights Reserved
        </div>
    </div>
    <!--//footer-->
   
</body>

</html>