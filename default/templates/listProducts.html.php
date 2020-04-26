<?php function forms($form){
    if($form != 'class_type'){
        if(isset($_POST['filter']['classification'])){
            foreach($_POST['filter']['classification'] as $stored){?>
                <input type="hidden" name="filter[classification][]" value="<?=$stored?>"/>
            <?php }
        }
        if(isset($_POST['filter']['type'])){
            foreach($_POST['filter']['type'] as $stored){?>
                <input type="hidden" name="filter[type][]" value="<?=$stored?>"/>
            <?php }
        }
    }
    if($form != 'price'){
        if(isset($_POST['filter']['price'])){
            foreach($_POST['filter']['price'] as $stored){?>
                <input type="hidden" name="filter[price][]" value="<?=$stored?>"/>
            <?php }
        }
    }
    if($form != 'brand'){
        if(isset($_POST['filter']['brand'])){
            foreach($_POST['filter']['brand'] as $stored){?>
                <input type="hidden" name="filter[brand][]" value="<?=$stored?>"/>
            <?php }
        }
    }
    if($form != 'volume'){
        if(isset($_POST['filter']['volume'])){
            foreach($_POST['filter']['volume'] as $stored){?>
                <input type="hidden" name="filter[volume][]" value="<?=$stored?>"/>
            <?php }
        }
    }
}?>


<div class="accordian">
    <div class="filter-name"><h2>Filter</h2></div>
    <!-- REFERENCE: https://www.youtube.com/watch?v=VTdSW57--yM -->
    
    <button class="filter-acc ">Type</button>
    <div class="filter-content">
        <form action="" method="POST">

            <?php 

                forms('class_type');

                $classifications = (new DatabaseTable('classifications',null))->findAll();
                foreach($classifications as $key => $classification){
                    if($key == 0)
                        continue;?>

                    <input id="class<?=$classification['classification_id']?>" onClick="this.form.submit();" type="checkbox" name="filter[classification][]" value="<?=$classification['classification_id']?>" <?php
                        if(isset($_POST['filter']['classification']) && in_array($classification['classification_id'],$_POST['filter']['classification'])){
                            echo 'checked';
                        }?>>
                    <label for="class<?=$classification['classification_id']?>"><strong><?=$classification['classification_name']?></strong></label><br>
                    
                    <?php 
                        $types = (new DatabaseTable('types',null))->find('classification_id',$classification['classification_id']);
                        foreach($types as $type){?>

                            <input id="type<?=$type['type_id']?>" onClick="this.form.submit();" type="checkbox" name="filter[type][]" value="<?=$type['type_id']?>" <?php
                                if(isset($_POST['filter']['classification']) && in_array($classification['classification_id'],$_POST['filter']['classification'])){
                                    echo 'checked';
                                }
                                elseif(isset($_POST['filter']['type']) && in_array($type['type_id'],$_POST['filter']['type'])){
                                    echo 'checked';
                                }?>>
                            <label for="type<?=$type['type_id']?>"> - <?=$type['type_name']?></label><br>
                        <?php }
                }?>
        </form>
            
    </div>

    
    <button class="filter-acc ">Price</button>
    <div class="filter-content">
        <form action="" method="POST">

            <?php forms('price'); ?>

            <input id="0_10" onClick="this.form.submit();" type="checkbox" name="filter[price][]" value="0,10" <?php
                if(isset($_POST['filter']['price']) && in_array('0,10',$_POST['filter']['price'])){
                    echo 'checked';
                }?>>
            <label for="0_10"><strong>£0 - £10</strong></label><br>

            <input id="10_20" onClick="this.form.submit();" type="checkbox" name="filter[price][]" value="10,20" <?php
                if(isset($_POST['filter']['price']) && in_array('10,20',$_POST['filter']['price'])){
                    echo 'checked';
                }?>>
            <label for="10_20"><strong>£10 - £20</strong></label><br>

            <input id="20_30" onClick="this.form.submit();" type="checkbox" name="filter[price][]" value="20,30" <?php
                if(isset($_POST['filter']['price']) && in_array('20,30',$_POST['filter']['price'])){
                    echo 'checked';
                }?>>
            <label for="20_30"><strong>£20 - £30</strong></label><br>

            <input id="30_50" onClick="this.form.submit();" type="checkbox" name="filter[price][]" value="30,50" <?php
                if(isset($_POST['filter']['price']) && in_array('30,50',$_POST['filter']['price'])){
                    echo 'checked';
                }?>>
            <label for="30_50"><strong>£30 - £50</strong></label><br>

            <input id="50_70" onClick="this.form.submit();" type="checkbox" name="filter[price][]" value="50,70" <?php
                if(isset($_POST['filter']['price']) && in_array('50,70',$_POST['filter']['price'])){
                    echo 'checked';
                }?>>
            <label for="50_70"><strong>£50 - £70</strong></label><br>

            <input id="70_100" onClick="this.form.submit();" type="checkbox" name="filter[price][]" value="70,100" <?php
                if(isset($_POST['filter']['price']) && in_array('70,100',$_POST['filter']['price'])){
                    echo 'checked';
                }?>>
            <label for="70_100"><strong>£70 - £100</strong></label><br>

            <input id="100" onClick="this.form.submit();" type="checkbox" name="filter[price][]" value="100,INF" <?php
                if(isset($_POST['filter']['price']) && in_array('100,INF',$_POST['filter']['price'])){
                    echo 'checked';
                }?>>
            <label for="100"><strong>£100+</strong></label><br>
            
        </form>
    </div>


    <button class="filter-acc ">Brand</button>
    <div class="filter-content">
        <form action="" method="POST">

            <?php 
                forms('brand');
            
            $products_brands = (new DatabaseTable('products',null))->findAll();
            foreach($products_brands as $product){
                $brands[] = $product['product_brand'];
            }

            $brands = array_unique($brands);

            foreach($brands as $brand){?>
                <input id="<?=$brand?>" onClick="this.form.submit();" type="checkbox" name="filter[brand][]" value="<?=$brand?>" <?php
                    if(isset($_POST['filter']['brand']) && in_array($brand,$_POST['filter']['brand'])){
                        echo 'checked';
                    }?>>
                <label for="<?=$brand?>"><strong><?=$brand?></strong></label><br><?php
            }?>

        </form>
    </div>


    <button class="filter-acc ">Volume</button>
    <div class="filter-content">
        <form action="" method="POST">

            <?php forms('volume'); ?>

            <input id="0_400" onClick="this.form.submit();" type="checkbox" name="filter[volume][]" value="0,400" <?php
                if(isset($_POST['filter']['volume']) && in_array('0,400',$_POST['filter']['volume'])){
                    echo 'checked';
                }?>>
            <label for="0_400"><strong>0ml - 400ml</strong></label><br>

            <input id="400_1" onClick="this.form.submit();" type="checkbox" name="filter[volume][]" value="400,1000" <?php
                if(isset($_POST['filter']['volume']) && in_array('400,1000',$_POST['filter']['volume'])){
                    echo 'checked';
                }?>>
            <label for="400_1"><strong>400ml - 1L</strong></label><br>

            <input id="1_1.5" onClick="this.form.submit();" type="checkbox" name="filter[volume][]" value="1000,1500" <?php
                if(isset($_POST['filter']['volume']) && in_array('1000,1500',$_POST['filter']['volume'])){
                    echo 'checked';
                }?>>
            <label for="1_1.5"><strong>1L - 1.5L</strong></label><br>

            <input id="1.5_2" onClick="this.form.submit();" type="checkbox" name="filter[volume][]" value="1500,2000" <?php
                if(isset($_POST['filter']['volume']) && in_array('1500,2000',$_POST['filter']['volume'])){
                    echo 'checked';
                }?>>
            <label for="1.5_2"><strong>1.5L - 2L</strong></label><br>

            <input id="2" onClick="this.form.submit();" type="checkbox" name="filter[volume][]" value="2000,INF" <?php
                if(isset($_POST['filter']['volume']) && in_array('2000,INF',$_POST['filter']['volume'])){
                    echo 'checked';
                }?>>
            <label for="2"><strong>2L+</strong></label><br>

        </form>
    </div>
</div>



<!-- Displays all the products -->
<div class="list-products">
    <ul class="all-products">
        <?php
            if(count($products) == 0){
                echo '<h1 style="margin:20%;">No products to display</h1>';
            }
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