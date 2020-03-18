
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
            $productTable = new DatabaseTable('products',null);
            $products = $productTable->findAll();
            for($i=0;$i<6;$i++){
                echo loadTemplate('../templates/miniProduct.html.php',$products[0] );
            }
        ?>
    </ul>
</div>