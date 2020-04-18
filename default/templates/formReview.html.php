    <!--Review Section-->
  <div class="reviews" style="padding: 0;">
    <div class="inner-reviews">
            <form action="" method="POST">
            <h3 style="color: #fff; font-weight: 700; padding-left: 2%;">Reviews</h3>
            <div class="inner-form">
                <label for="reviewtitle">Title</label>
                <input type="text" name="review_title" id="reviewtitle" value="" style="height: 25px;margin: 0;"/>
            </div>
            <div class="inner-form"style="width: 100%;">
                <label>Stars</label>
                <div class="inner-radioBtn">
                    <label for="1">1</label>
                    <input type="radio"  name="stars" value=""  />
                    <label for="2">2</label>
                    <input type="radio" name="stars" value="" />
                    <label for="3">3</label>
                    <input type="radio" name="stars" value=""  />
                    <label for="4">4</label>
                    <input type="radio" name="stars" value="" />
                    <label for="5">5</label>
                    <input type="radio" name="stars" value="" />
                </div>
            </div>
            <div class="inner-form" style="width: 100%;">
                <label for="reviewtext">Text </label>
                <textarea name="review_text"  rows="5" cols="40" id="reviewtext" value="review_text" style="height: 25px;overflow: scroll;"></textarea>
            </div>
            <div class="inner-formBtn">
                <input type="submit" name="submit" value="Submit" />
            </div>
            </form>
        </div>
  </div>