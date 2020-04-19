    <!--Review Section-->
<?php
    $reviewsTable = new DatabaseTable('reviews','revie_id');
    $reviews = $reviewsTable->find('user_id',$_SESSION['id']);
    foreach($reviews as $check){
        if($check['product_id'] == $product_id){
            $review = $check;
        }
    }
?>


  <div class="reviews" style="padding: 0; margin-left: 30px;">
    <div class="inner-reviews">
            <form action="" method="POST" style="width: 100%;">
            <h3 style="color: #fff; font-weight: 700; padding-left: 2%;">Review</h3>

            <?php if(isset($review)){?>
            <input type="hidden" name="review[review_id]" value="<?=$review['review_id']?>">
            <?php } ?>

            <input type="hidden" name="review[product_id]" value="<?=$product_id?>">
            <input type="hidden" name="review[user_id]" value="<?=$_SESSION['id']?>">

            <div style="display: flex;justify-content: flex-start;">
                <div class="inner-form">
                    <label for="reviewtitle">Title</label>
                    <input type="text" name="review[review_title]" id="reviewtitle" value="<?php if(isset($review)) echo $review['review_title'];?>" style="height: 25px;margin: 0;"/>
                </div>
            
                <div class="inner-formBtn" >
                    <input type="submit" name="submit" value="Submit Review" />
                </div>
            </div>
            <div class="inner-form"style="width: 100%;">
                <label>Stars</label>
                <div class="inner-radioBtn">
                    <label for="1">1</label>
                    <input type="radio"  name="review[stars]" value="1" <?php if(isset($review)){if($review['stars'] == 1) echo 'checked';}?> />
                    <label for="2">2</label>
                    <input type="radio" name="review[stars]" value="2" <?php if(isset($review)){if($review['stars'] == 2) echo 'checked';}?> />
                    <label for="3">3</label>
                    <input type="radio" name="review[stars]" value="3" <?php if(isset($review)){if($review['stars'] == 3) echo 'checked';}?> />
                    <label for="4">4</label>
                    <input type="radio" name="review[stars]" value="4" <?php if(isset($review)){if($review['stars'] == 4) echo 'checked';}?> />
                    <label for="5">5</label>
                    <input type="radio" name="review[stars]" value="5" <?php if(isset($review)){if($review['stars'] == 5) echo 'checked';}?> />
                </div>
            </div>
            <div class="inner-form" style="width: 100%;">
                <label for="reviewtext">Text </label>
                <textarea name="review[review_text]"  rows="5" cols="40" id="reviewtext" style="height: 30px;width: 90%;word-wrap: normal;overflow-x: hidden;overflow-y:scroll;"><?php if(isset($review)) echo $review['review_text']?></textarea>
            </div>
            </form>
        </div>
  </div>