<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Math 'n' Stuff</title>
        <meta name="google-site-verification" content="RH3Bv5o_V8JebQAW85sqZPVhXLnTxwTKT4cCecUjGfE" />
        <meta name="viewport" content="width=device-width">
        <meta name="robots" content="noindex,nofollow">
        <meta name='language' content='English, EN'>
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <script>
            $('.like-btn').on('click', function() {
            $(this).toggleClass('is-active');
            });
            $('.minus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());
 
            if (value &amp;amp;gt; 1) {
            value = value - 1;
            } else {
            value = 0;
            }
 
            $input.val(value);
 
            });
 
            $('.plus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());
 
            if (value &amp;amp;lt; 100) {
            value = value + 1;
            } else {
            value =100;
            }
 
            $input.val(value);
            });
        </script>
        <link rel="stylesheet" type="text/css" href='css/index.css' />
        <link rel="stylesheet" type="font" href='font/farro/Farro-bold.ttf' />
        <link rel="stylesheet" type="font" href='font/farro/Farro-light.ttf' />
        <link rel="stylesheet" type="font" href='font/farro/Farro-medium.ttf' />
        <link rel="stylesheet" type="font" href='font/farro/Farro-Regular.ttf' />
        <link rel="stylesheet" type="text/css" href='includes/contact_include.php' />
    </head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <a href="index.php">
                    <img class="logo" src="images/header-logo.png" />
                </a>
            </div>
            <div>
                <ul class="nav">
                    <li><a href="index.php">
                            <div class="arial-bold-white14px">HOME</div>
                        </a>
                    </li>
                    <li><a href="shop.php">
                            <div class="arial-bold-white14px">SHOP</div>
                        </a>
                    </li>
                    <li><a href="calendar.php">
                            <div class="arial-bold-white14px">CALENDAR</div>
                        </a>
                    </li>
                    <li><a href="tutors.php">
                            <div class="arial-bold-white14px">TUTORS</div>
                        </a>
                    </li>
                    <li><a href="about.php">
                            <div class="arial-bold-white14px about">ABOUT</div>
                        </a>
                    </li>
                    <li><a href="contact.php">
                            <div class="arial-bold-white14px">CONTACT</div>
                        </a>
                    </li>
                    <li><a href="includes/cart.php">
                            <div class="arial-bold-white14px"><i class="fa fa-shopping-cart"></i></div>
                        </a>
                    </li>
                    <li><a href="sign-in.php">
                            <div class="arial-bold-white14px" id="sign-in">SIGN IN</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobile-container">
            <div class="topnav">
                <a href="index.php" class="active"><img class="mobile-logo" src="images/math-n-stuff-new_white.png"></a>
                <div id="myLinks">
                    <br>
                    <br>
                    <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <a href="index.php" class="arial-bold-white14px">HOME</a>
                    <a href="shop.php" class="arial-bold-white14px">SHOP</a>
                    <a href="calendar.php" class="arial-bold-white14px">CALENDAR</a>
                    <a href="tutors.php" class="arial-bold-white14px">TUTORS</a>
                    <a href="about.php" class="arial-bold-white14px">ABOUT</a>
                    <a href="contact.php" class="arial-bold-white14px">CONTACT</a>
                    <a href="signin.php" class="arial-bold-white14px">SIGN IN</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
        
    </header>