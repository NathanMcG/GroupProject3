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

        <div class="div-button selected-button" onClick="switchButton();">

            <h2 style="text-align: center;">Set Offer</h2>

        </div>

        <div class="div-button" onClick="switchButton();">

            <h2 style="text-align: center;">Remove Offers</h2>

        </div>

    </div>

    <div class="lastOrder-form">

        <form action="" method="POST">

            <div class="inner-form">
                <label for="discount">Discount (%) : </label>
                <input type="text" name="offer[discount]" id="discount" value="<?php if(isset($user_firstname)) echo $user_firstname;?>" required />
            </div>

            <div class="inner-form">
                <label for="where">Where... </label>
                <input type="text" name="offer[where]" id="where" value="<?php if(isset($user_firstname)) echo $user_firstname;?>" required />
            </div>

            <div class="inner-form">
        <label for="product-vol">Type: </label>
        <select id="product_tpe" name="product[type_name]" >
        <?php
          $typesTable = new DatabaseTable('types',null);
          $types = $typesTable->findAll();
          foreach($types as $type){?>
            <option value="<?=$type['type_id']?>" <?php if(isset($type_id)){if($type_id == $type['type_id']) echo 'selected';}?> >
              <?php $classificationTable = new DatabaseTable('classifications',null);
                $class = $classificationTable->find('classification_id',$type['classification_id'])[0];
                echo $class['classification_name']; ?>: <?=$type['type_name']?>
            </option>
          <?php } ?>
        </select> 
     </div>



</div>

<script>
    function switchButton(){
        var buttons = document.getElementsByClassName("div-button");
        var field = document.getElementsByClassName("inner-form");
        console.log(field);
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
</script>