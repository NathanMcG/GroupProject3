<div class="alchol-prod-section">
    <section class="alcohol-card">
                    <div class="alcohol-image">
                        <img src="images/bottle.png" alt="product image" class="img-product" width="172px" height="240px">
                    </div>
                    <div class="alcohol-reviews">
                        <h3>Reviewed:</h3>
                        <?php 
                            $totalStars = 5;
                            for($i=0;$i<$product['stars'];$i++){
                                echo '<img src="images/star.png" alt="star review" class="review-star" width="40px" height="40px">';
                                $totalStars--;
                            }
                            for($i=0;$i<$totalStars;$i++){
                                echo '<img src="images/emptystar.png" alt="star review" class="review-star"  width="40px" height="40px">';
                            } 
                        ?>
                    </div>
    </section>

                <section class="alcohol-info">
                    <h3><u><?=$product['brand']." - ".$product['product_name'].", ".$product['volume']?></u></h3>
                    <ul>
                        <?php //Description
                            $description = "<li>";
                            for($i=0;$i<strlen($product['product_description']);$i++){
                                if($product['product_description'][$i] == '^' ){
                                    $description.="</li><li>";
                                }
                                else{
                                    $description.=$product['product_description'][$i];
                                }
                            }
                            $description.="</li>";
                            echo $description;
                        ?>
                    </ul>
                    <table class="table">
                        <tr><th>Package Dimensions</th></tr>
                        <tr><td><?=$product['dimensions']?></td></tr>
                        <tr><th>Volume</th></tr>
                        <tr><td><?=$product['volume']?></td></tr>
                        <tr><th>Alcohol Content</th></tr>
                        <tr><td><?=$product['alcohol_content']?>37.5 % Vol</td></tr>
                        <tr><th>Brand</th></tr>
                        <tr><td><?=$product['brand']?></td></tr>
                        <tr><th>Offer</th></tr>
                        <tr><td><?=$product['product_discount'].'% OFF'?></td></tr>
                    </table>
                </section>

                <section class="add-to-order">
                    <div class="add-outer">
                        <h2><u>Add to Order</u></h2>
                        <div class="add-inner">
                            <li>Price: £16.00</li>
                            <li>Get it in 5 - 10 days free delivery.</li>
                            <li>Or next day delivery</li>
                        </div>
                            <div class="add-form">
                                <form>
                                    <input type="text" name="quantity" class="basket-no"  placeholder="1">
                                    <label>Quantity</label>
                                    <input type="checkbox"  name="gift" value="Gift"  class="check-box">
                                    <label>Add Gift Options</label>
                                    <input type="submit" name="add_to_basket" value="Add to Basket" class="btn-add" />
                                    <br>
                                    <input type="submit" name="buy_now" value="Buy Now" class="btn-add" />
                                </form>
                            </div>
                
                    </div>
                </section>
 </div>