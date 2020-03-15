<div class="lastOrder-form">
   <form action="?page=newProduct" method="POST">
     <div class="inner-form">
       <label for="product-name">Product Name </label>
       <input type="text" name="product['product-name']" id="product-name" />
     </div>
     <div class="inner-form">
       <label for="product-descrip">Product Description </label>
       <textarea id="product-descrip" rows="4" cols="17" name="product['product_description']"></textarea>
     </div>
     <div class="inner-form">
      <label for="product-dim">Product Dimensions </label>
      <input type="text" name="product['product-dim']" id="product-dim" />
     </div>
     <div class="inner-form">
        <label for="product-vol">Volume </label>
        <input type="text" name="product['product-vol']" id="product-vol" />
        <select id="volume" name="volume">
            <option value="">L</option>
            <option value="">ML</option>
        </select> 
     </div>
     <div class="inner-form">
       <label for="product-alc">Alcohol Content </label>
       <input type="text" name="product['product-alc']" id="product-alc" />
     </div>
     <div class="inner-form">
       <label for="product-brand">Brand </label>
       <input type="text" required name="product['product-brand']" id="product-brand" />
     </div>
     <div class="inner-form">
      <label for="product-offer">Offer </label>
      <input type="text" name="product['product-offer']" id="product-offer" />
     </div>
     <div class="inner-form">
      <label for="product-price">Price </label>
      <input type="text" name="product['product-price']" id="product-price" />
     </div>
     <div class="inner-form">
      <label for="productImage">Image </label>
      <input type="file" name="product['productImage']" id="productImage">
     </div>
     <div class="inner-formBtn">
     <input type="submit" name="submit" value="Add" />
     </div>
   </form>
   </div>