<div class="lastOrder-form">
  <?php
    // Allows notifying the user
    if(isset($notice)){
      echo '<p>' . $notice . '</p>';
    }
  ?>
   <form action="?page=newProduct" method="POST" enctype="multipart/form-data">

    <?php
      //Turns into edit form if set
      if(isset($_GET['PID'])){
        ?>
        <input type="hidden" name="product[product_id]" value="<?=$_GET['PID']?>" />
        <?php
      }
    ?>

     <div class="inner-form">
       <label for="product-name">Product Name: </label>
       <input type="text" name="product[product_name]" id="product-name" required value="<?php if(isset($product['product_name'])) echo $product['product_name'];?>" />
     </div>

     <div class="inner-form">
       <label for="product-descrip">Product Description: </label>
       <textarea id="product-descrip" rows="4" cols="17" name="product[product_description]" required ><?php if(isset($product['product_description'])) echo $product['product_description'];?></textarea>
     </div>

     <div class="inner-form">
        <label for="product-vol">Type: </label>
        <select id="product_tpe" name="product[type_name]" >
        <?php
          $typesTable = new DatabaseTable('types',null);
          $types = $typesTable->findAll();
          $classTable = new DatabaseTable('classifications',null);
          foreach($types as $type){
            if($product['type_name'] == $type['type_name'])
              echo '<option value="' . $type['type_name'] . '" selected >' . $type['classification_name'] . ': ' . $type['type_name'] . '</option>';
              else
              echo '<option value="' . $type['type_name'] . '" >' . $type['classification_name'] . ': ' . $type['type_name'] . '</option>';
          }
        ?>
        </select> 
     </div>

     <div class="inner-form">
      <label for="product-dim">Product Dimensions: </label>
      <input type="text" name="product[dimensions]" id="product-dim" value="<?php if(isset($product['dimensions'])) echo $product['dimensions'];?>" />
     </div>

     <div class="inner-form">
        <label for="product-vol">Volume: </label>
        <input type="text" name="volume" id="product-vol" value="<?php if(isset($volume)) echo $volume;?>"/>
        <select id="volume" name="unit" value="<?=$unit?>">
          <option value="L" <?php if(isset($unit)){if($unit == 'L') echo 'selected';}?> >L</option>
          <option value="ml" <?php if(isset($unit)){if($unit == 'ml') echo 'selected';}?>>ml</option>
        </select> 
     </div>

     <div class="inner-form">
       <label for="product-alc">Alcohol Content (%):</label>
       <input type="text" name="product[alcohol_content]" id="product-alc" value="<?php if(isset($product['alcohol_content'])) echo $product['alcohol_content'];?>"/>
     </div>

     <div class="inner-form">
       <label for="product-brand">Brand: </label>
       <input type="text" name="product[brand]" id="product-brand" value="<?php if(isset($product['brand'])) echo $product['brand'];?>"/>
     </div>

     <div class="inner-form">
      <label for="product-offer">Offer: </label>
      <input type="text" name="product[product_discount]" id="product-offer" value="<?php if(isset($product['product_discount'])) echo $product['product_discount'];?>"/>
     </div>

     <div class="inner-form">
      <label for="product-price">Price (£): </label>
      <input type="text" name="product[product_price]" id="product-price" required value="<?php if(isset($product['product_price'])) echo $product['product_price'];?>"/>
     </div>

     <div class="inner-form">
      <label for="productImage">Image: </label>
      <input type="file" name="productImage" id="productImage">
     </div>

     <div class="inner-formBtn">
     <input type="submit" name="submit" value="Submit" />
     </div>

   </form>
   </div>