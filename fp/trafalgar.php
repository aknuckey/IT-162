<?php include 'includes/header.php'?>
<section>
      <div class="lego-header">
        <img class="lego-banner" src="images/lego-banner.png"/>
      </div>
        <div class="trafalgar-square">
            <div class="row"> 
                <div class="column">
                    <div class="w3-content w3-display-container" style="max-height:800px">
                        <img class="mySlides" src="images/trafalgar-square/ts-main.png" />
                        <img class="mySlides" src="images/trafalgar-square/ts-front.png" />
                        <img class="mySlides" src="images/trafalgar-square/ts-back.png" />
                        <img class="mySlides" src="images/trafalgar-square/ts-top.png" />
                        <img class="mySlides" src="images/trafalgar-square/ts-lights.png" />
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                        </div>
                    </div>
                    <br>
                    <div class="trafalgar">
                        <h1>Trafalgar Square</h1>
                        <br>
                        <p class="trafalgar-info">
                            Description:
                            <br> 
                            Recommended for ages 12+, this 1197 piece set depicts the real-world London landmark, Trafalgar Square. 
                            This set features the National Gallery, Nelson’s Column flanked by 4 lions, 2 fountains, 4 sculpture plinths, 10 trees, 6 lampposts, and a tiled baseplate depicting the square and road areas complete with 2 London buses and 2 black cabs.
                            The included booklet contains information about the architecture and history of each structure, as well as historical facts about Trafalgar Square and its architectural heritage. 
                            <br>
                            <br>
                            (English language only. Other languages available for download at LEGO.com/architecture. ***LIGHTING NOT INCLUDED***)
                            <br>
                            <br>
                            Price: $80.00
                            <p class="stock">
                            <b>IN STOCK</b>
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<?php include 'includes/footer.php'?>