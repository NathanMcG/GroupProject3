<div class="lastOrder-form">
  <?php
    if(isset($message)){
      echo '<p>' . $message . '</p>';
    }
  ?>

   <form action="" method="POST" enctype="multipart/form-data">

    <?php if(isset($product_id)){?>
        <input type="hidden" name="product[product_id]" value="<?=$product_id?>" />
    <?php } ?>

     <div class="inner-form">
       <label for="product-name">Product Name: </label>
       <input type="text" name="product[product_name]" id="product-name" required value="<?php if(isset($product_name)) echo $product_name;?>" />
     </div>

     <div class="inner-form">
       <label for="product-descrip">Product Description: </label>
       <textarea id="product-descrip" rows="4" cols="17" name="product[product_description]" required ><?php if(isset($product_description)) echo $product_description;?></textarea>
     </div>

     <div class="inner-form">
        <label for="product-type" id="product-type">Type: </label>
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

     <div class="inner-form">
      <label for="product-dim">Product Dimensions: </label>
      <input type="text" name="product[product_dimensions]" id="product-dim" value="<?php if(isset($product_dimensions)) echo $product_dimensions;?>" />
     </div>

     <div class="inner-form">
        <label for="product-vol">Volume: </label>
        <input type="text" name="product[product_volume]" id="product-vol" value="<?php if(isset($product_volume)) echo (0+ $product_volume);?>"/>
        <select id="volume" name="product[product_volume_unit]" >
          <option value="L" <?php if(isset($product_volume_unit)){if($product_volume_unit == 'L') echo 'selected';}?> >L</option>
          <option value="ml" <?php if(isset($product_volume_unit)){if($product_volume_unit == 'ml') echo 'selected';}?>>ml</option>
        </select> 
     </div>

     <div class="inner-form">
       <label for="product-alc">Alcohol Content (%):</label>
       <input type="text" name="product[product_alcohol_content]" id="product-alc" value="<?php if(isset($product_alcohol_content)) echo (0 + $product_alcohol_content);?>"/>
     </div>

     <div class="inner-form">
       <label for="product-brand">Brand: </label>
       <input type="text" name="product[product_brand]" id="product-brand" value="<?php if(isset($product_brand)) echo $product_brand;?>"/>
     </div>

     <div class="inner-form">
      <label for="product-offer">Offer: </label>
      <input type="text" name="product[product_discount]" id="product-offer" value="<?php if(isset($product_discount)) echo (0 + $product_discount);?>"/>
     </div>

     <div class="inner-form">
      <label for="product-price">Price (£): </label>
      <input type="text" name="product[product_price]" id="product-price" required value="<?php if(isset($product_price)) echo (0 + $product_price);?>"/>
     </div>

     <div class="inner-form">
      <label for="image">Image: </label>
      <input type="file" name="image" id="image" style="display:none;"/>
      <label for="image" style="width: 10.3em;"><?php 
      if(isset($product_id)){
        if(file_exists('images/products/' . $product_id . '.png'))
          echo $product_name . '.png';
        else
          echo 'Upload Image';
      }
      else{
        echo 'Upload Image';
      } ?>
      </label>
     </div>

     <div class="inner-formBtn">
     <input type="submit" name="submit" value="Submit" />
     </div>

   </form>
   </div>