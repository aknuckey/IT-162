<?php include 'includes/header.php'?>
<section class="contact-section">
    <div class="contact-img"></div>
        <div class="section">
            <div class="row"> 
                <div class="column">
                    <div class="contact-us">
                        <div class="background">
                        <div class="arial-bold-white">
                            <h2 class="pageID">Contact Us</h2>
                            <br>
                            <?php include 'includes/contact_include.php'; 
                                $toAddress = "alexcknuckey@gmail.com";
                                $toName = "Math 'n' Stuff";
                                $website = "http://aleknu2.dreamhosters.com/index-2/index.php";
                                echo loadContact('includes/simple.php');?>
                            <br>
                            <p class="contact-info">
                                <b>Address:</b> 
                                <div class="arial-bold-white14px"><a href="https://goo.gl/maps/mzsGm3sw8gLa6A4t7">8926 Roosevelt Way NE, Seattle, WA 98115</a></div>
                                <br>
                                <b>Phone:</b>  
                                <div class="arial-bold-white14px"><a href="12065228891">+1 (206) 522-8891</a></div>
                                <br>
                                <b>Fax:</b>  
                                <div class="arial-bold-white14px"><a href="12065221235">+1 (206) 522-1235</a></div>
                            </p>
                        </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
</section>
<?php include 'includes/footer.php'?>