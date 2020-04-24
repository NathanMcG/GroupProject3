<?php
    function sortProductsByName($a, $b)
    {

        $a = $a['product_brand'] . ' ' .$a['product_name'];
        $b = $b['product_brand'] . ' ' .$b['product_name'];

        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;

    }
?>



<div style="width: 100%;">

    <div style="margin:auto;margin-top:40px;margin-bottom:40px;width:50%;display:flex;">

        <div class="div-button<?php if(isset($_POST['form'])){if($_POST['form'] == 0){echo ' selected-button';}}else{echo ' selected-button';}?>" onClick="switchButton();">

            <h2 style="text-align: center;">Set Offer</h2>

        </div>

        <div class="div-button<?php if(isset($_POST['form'])){if($_POST['form'] == 1){echo ' selected-button';}}?>" onClick="switchButton();">

            <h2 style="text-align: center;">Remove Offers</h2>

        </div>

    </div>

    <div class="lastOrder-form">

        <?php
            if(isset($message)){
                echo '<p>' . $message . '</p>';
            }
        ?>

        <form action="" method="POST" id="offer_form">

            <input type="hidden" name="sub">
            <input type="hidden" name="form" value="<?php if(isset($_POST['form'])){echo $_POST['form'];}else{echo 0;}?>">

            <div class="inner-form">
                <label for="discount">Discount (%) : </label>
                <input type="text" name="offer[discount]" id="discount" value="<?php if(isset($discount)) echo $discount;?>" />
            </div>

            <div class="inner-form">
                <label for="where">Where... </label>
                <select id="where" name="offer[where]" onchange="this.form.submit()" >
                    <option value="product_name" <?php if(isset($_POST['offer']['where'])){if($_POST['offer']['where'] == 'product_name') echo 'selected';} ?> >Name</option>
                    <option value="type_id" <?php if(isset($_POST['offer']['where'])){if($_POST['offer']['where'] == 'type_id') echo 'selected';} ?> >Type</option>
                    <option value="classification_id" <?php if(isset($_POST['offer']['where'])){if($_POST['offer']['where'] == 'classification_id') echo 'selected';} ?> >Classification</option>
                    <option value="product_brand" <?php if(isset($_POST['offer']['where'])){if($_POST['offer']['where'] == 'product_brand') echo 'selected';} ?> >Brand</option>
                </select> 
            </div>

            <div class="inner-form">
                <label for="is">Is... </label>
                <select id="is" name="offer[is]" >
                    <?php
                        if(isset($_POST['offer']['where'])){

                            if($_POST['offer']['where'] == 'type_id'){
                                $typesTable = new DatabaseTable('types','type_id');
                                $classificationsTable = new DatabaseTable('classifications','classification_id');
                                $types = $typesTable->findAll();
                                foreach($types as $type){ 
                                    $classification = $classificationsTable->find('classification_id',$type['classification_id'])[0];?>
                                    <option value="<?=$type['type_id']?>" ><?=$type['type_name']?> <?=$classification['classification_name']?></option>
                                <?php }
                            }
                            elseif($_POST['offer']['where'] == 'classification_id'){
                                $classificationsTable = new DatabaseTable('classifications','classification_id');
                                $classifications = $classificationsTable->findAll();
                                foreach($classifications as $classification){ ?>
                                    <option value="<?=$classification['classification_id']?>"><?=$classification['classification_name']?></option>
                                <?php }
                            }
                            elseif($_POST['offer']['where'] == 'product_brand'){
                                $productsTable = new DatabaseTable('products','product_id');
                                $products = $productsTable->findAll();
                                foreach($products as $product){
                                    $brands[] = $product['product_brand'];
                                }
                                $brands = array_unique($brands);
                                foreach($brands as $brand){ ?>
                                    <option value="<?=$brand?>"><?=$brand?></option>
                                <?php }
                            }
                            else{
                                $productsTable = new DatabaseTable('products','product_id');
                                $products = $productsTable->findAll();
                                foreach($products as $product){ ?>
                                    <option value="<?=$product['product_name']?>"><?=$product['product_name']?></option>
                                <?php }
                            }
                        }
                        else{
                            $productsTable = new DatabaseTable('products','product_id');
                            $products = $productsTable->findAll();
                            usort($products,'sortProductsByName');
                            foreach($products as $product){ ?>
                                <option value="<?=$product['product_name']?>"><?=$product['product_brand']?> <?=$product['product_name']?></option>
                            <?php }
                        }
                    ?>
                </select>

            </div>

        </form>

        <button onClick="submit()">Submit</button>

    </div>

</div>

<script>

    var form = document.getElementsByName("form")[0];
    var field = document.getElementsByClassName("inner-form")[0];
    if(form.value == 1){
        field.style.display = "none";
    }

    function switchButton(){
        var buttons = document.getElementsByClassName("div-button");
        var field = document.getElementsByClassName("inner-form");
        var form = document.getElementsByName("form")[0];

        if(form.value == 0){
            form.value = 1;
        }
        else{
            form.value = 0;
        }

        for(i=0;i<2;i++){
            buttons[i].classList.toggle("selected-button");
        }

        if (field[0].style.display === "none") {
            field[0].style.display = "flex";
        }
        else {
            field[0].style.display = "none";
        }
    }
    function submit(){
        var field = document.getElementsByClassName("inner-form");
        var text = document.getElementsByName("offer[discount]")[0];
        var sub = document.getElementsByName("sub")[0];

        if(field[0].style.display == "none"){
            text.value = "remove";
        }

        sub.value = "sub";
        document.getElementById("offer_form").submit();
    }
</script>