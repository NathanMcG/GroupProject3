<div class="lastOrder-form">
   <form action="?page=newProduct" method="POST" enctype="multipart/form-data">
     <div class="inner-form">
       <label for="product-name">Product Name </label>
       <input type="text" name="product['product_name']" id="product-name" required />
     </div>
     <div class="inner-form">
       <label for="product-descrip">Product Description </label>
       <textarea id="product-descrip" rows="4" cols="17" name="product['product_description']" required ></textarea>
     </div>
     <div class="inner-form">
        <label for="product-vol">Type </label>
        <select id="product_tpe" name="product['type_name']">
        <?php
          $typesTable = new DatabaseTable('types',null);
          $types = $typesTable->findAll();
          $classTable = new DatabaseTable('classifications',null);
          foreach($types as $type){
            echo '<option value="' . $type['type_name'] . '">' . $type['classification_name'] . ': ' . $type['type_name'] . '</option>';
          }
        ?>
        </select> 
     </div>
     <div class="inner-form">
      <label for="product-dim">Product Dimensions </label>
      <input type="text" name="product['dimensions']" id="product-dim" />
     </div>
     <div class="inner-form">
        <label for="product-vol">Volume </label>
        <input type="text" name="volume" id="product-vol" />
        <select id="volume" name="unit">
            <option value="L">L</option>
            <option value="ml">ml</option>
        </select> 
     </div>
     <div class="inner-form">
       <label for="product-alc">Alcohol Content </label>
       <input type="text" name="product['alcohol_content']" id="product-alc" />
     </div>
     <div class="inner-form">
       <label for="product-brand">Brand </label>
       <input type="text" name="product['brand']" id="product-brand" />
     </div>
     <div class="inner-form">
      <label for="product-offer">Offer </label>
      <input type="text" name="product['product_discount']" id="product-offer" />
     </div>
     <div class="inner-form">
      <label for="product-price">Price </label>
      <input type="text" name="product['product_price']" id="product-price" required />
     </div>
     <div class="inner-form">
      <label for="productImage">Image </label>
      <input type="file" name="productImage" id="productImage">
     </div>
     <div class="inner-formBtn">
     <input type="submit" name="submit" value="Add" />
     </div>
   </form>
   </div>