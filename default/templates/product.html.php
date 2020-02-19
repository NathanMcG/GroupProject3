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
                    <?php
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
                    <li>Triple distilled vodka</li>
                    <li>Made using a traditional charcoal filtration method</li>
                    <li>Ten times filtered</li>
                    <li>Continuing tradition</li>
                </ul>
                <table class="table">
                    <tr><th>Package Dimensions</th></tr>
                    <tr><td>31.2 x 8.3 x 8.3 cm</td></tr>
                    <tr><th>Volume</th></tr>
                    <tr><td>1000 ml</td></tr>
                    <tr><th>Alcohol Content</th></tr>
                    <tr><td>37.5 % Vol</td></tr>
                    <tr><th>Brand</th></tr>
                    <tr><td>Smirnoff</td></tr>
                    <tr><th>Offer</th></tr>
                    <tr><td>10%</td></tr>
                </table>
            </section>

            <section class="add-to-order">
                <h2><u>Add to Order</u></h2>
                <div class="add-inner">
                    <li>Price: £16.00</li>
                    <li>Get it in 5 - 10 days free delivery.</li>
                    <li>Or next day delivery</li>
                    <form>
                        <input type="checkbox" name="gift" value="Gift"  class="check-box">
                        <label for="gift">Add Gift Options</label>
                        <br>
                        <br>
                        <input type="submit" name="add_to_basket" value="Add to Basket" class="btn-add" />
                        <br>
                        <input type="submit" name="buy_now" value="Buy Now" class="btn-add" />
                    </form>
                    
                </div>
            </section>