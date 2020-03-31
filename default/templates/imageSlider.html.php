<div class="imageSlider">
    <img class="mySlides" src="images/adverts/default.png" style="width:100%">
    <?php
        $advertsTable = new DatabaseTable('adverts',null);
        $adverts = $advertsTable->findAll();
        foreach($adverts as $advert){
            echo '<img class="mySlides" src="images/adverts/' . $advert['file_name'] . '" style="width:100%">';
        }
    ?>
</div>
<?php
    $productsTable = new DatabaseTable('products',null);
    $products = $productsTable->findAll();
    $products = array_reverse($products);
    for($i=0;$i<5;$i++){
        if(isset($products[$i])){
            //echo mini product template
            echo $products[$i]['product_name'];
        }
    }
?>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
