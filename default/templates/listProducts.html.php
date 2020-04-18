
<div class="accordian">
    <div class="filter-name"><h2>Filter</h2></div>
    <!-- REFERENCE: https://www.youtube.com/watch?v=VTdSW57--yM -->
    <button class="filter-acc ">Types</button>
    <div class="filter-content">
        <input type="checkbox" id="type1" name="type1" value="Type1">
        <label for="type1"> Type 1</label><br>
        <input type="checkbox" id="type2" name="type2" value="Type2">
        <label for="type2"> Type 2</label><br>
    </div>
    <button class="filter-acc ">Price</button>
    <div class="filter-content">
        <a href="#">£0 - £15</a>
        <a href="#">£0 - £15</a>
        <a href="#">£0 - £15</a>
    </div>
    <button class="filter-acc ">Brands</button>
    <div class="filter-content">
        <input type="checkbox" id="type1" name="type1" value="Type1">
        <label for="type1"> Type 1</label><br>
        <input type="checkbox" id="type2" name="type2" value="Type2">
        <label for="type2"> Type 2</label><br>
    </div>
    <button class="filter-acc ">Volume</button>
    <div class="filter-content">
        <input type="checkbox" id="type1" name="type1" value="Type1">
        <label for="type1"> Type 1</label><br>
        <input type="checkbox" id="type2" name="type2" value="Type2">
        <label for="type2"> Type 2</label><br>
    </div>
</div>
<!-- Displays all the products -->
<div class="list-products">
    <ul class="all-products">
        <?php
            foreach($products as $product){
                $product['link'] = $link;
                echo loadTemplate('../templates/productMini.html.php',$product);
            }
        ?>
    </ul>
</div>

<script>
    // https://www.youtube.com/watch?v=VTdSW57--yM
//Listing all products
var filterAccordian = document.getElementsByClassName("filter-acc");
for (var i = 0; i < filterAccordian.length; i++) {
    filterAccordian[i].onclick = function() {
      this.classList.toggle('open-current');
  
      var filterContent = this.nextElementSibling;
      if (filterContent.style.maxHeight) {
        filterContent.style.maxHeight = null;
      } else {
        filterContent.style.maxHeight = filterContent.scrollHeight + "px";
      }
    }
  }
</script>