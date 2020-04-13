<div class="lastOrder-form">
  <?php
    if(isset($notice)){
      echo '<p>' . $notice . '</p>';
    }
      
    ?>

    <!-- User review form -->
   <form action="" method="POST">
     <div class="inner-form">
       <label for="reviewtitle">Review Title: </label>
       <input type="text" name="details[review_title]" id="reviewtitle" value="<?=$details['review_title']?>" />
     </div>
     <div class="inner-form">
       <label for="reviewtext">Review Text: </label>
       <input type="text" name="details[review_text]" id="reviewtext" value="<?=$details['review_text']?>" />
     </div>
     <div class="inner-form">
       <label for="starRating">Star rating: </label>
        <input type="radio" name="1star" value="1 star rating" />
        <input type="radio" name="2star" value="2 star rating" />
        <input type="radio" name="3star" value="3 star rating" />
        <input type="radio" name="4star" value="4 star rating" />
        <input type="radio" name="5star" value="5 star rating" />
        <input type="submit" value="Submit" name="submit" />
     </div>
    <div class="inner-form">
       <label for="AcceptTerm">Submit Review? </label>
       <input type="checkbox" name="AcceptTerm" id="AcceptTerm" required />
     </div>
     <div class="inner-formBtn">
     <input type="submit" name="submit" value="Register" />
     </div>
   </form>
   </div>
