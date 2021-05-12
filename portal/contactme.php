<?php include 'includes/header.php'?>

<section>
  <h2 class="pageID"><?=$PageID?></h2>

  <img src="images/desktop.jpg" class="desktop" alt="salon" />
  <img src="images/tablet.jpg" class="tablet" alt="shop" />
  <img src="images/phone.jpg" class="phone" alt="sunset" />
</section>

 <aside>
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "aknuckey@gmail.com";  //place your/your client's email address here
        $toName = "Alex Knuckey"; //place your client's name here
        $website = "keyportal.org";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
 </aside>
<?php include 'includes/footer.php'?>