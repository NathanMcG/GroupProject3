<div class="lastOrder-form">
  <?php
    if(isset($notice)){
      echo '<p>' . $notice . '</p>';
    }
      
    ?>
   <form action="" method="POST">
     <div class="inner-form">
       <label for="firstname">First Name: </label>
       <input type="text" name="details[user_firstname]" id="firstname" value="<?=$details['user_firstname']?>" />
     </div>
     <div class="inner-form">
       <label for="surname">Last Name: </label>
       <input type="text" name="details[user_lastname]" id="surname" value="<?=$details['user_lastname']?>" />
     </div>
     <div class="inner-form">
      <label for="email">Email: </label>
      <input type="text" name="details[user_email]" id="email" value="<?=$details['user_email']?>" />
     </div>
     <div class="inner-form">
      <label for="password"> Password: </label>
      <input type="password" name="details[user_password]" id="password" />
     </div>
     <div class="inner-form">
      <label for="confpassword"> Confirm Password: </label>
      <input type="password" name="confpassword" id="confpassword" />
     </div>
     <div class="inner-form">
       <label for="user_address_line_1">Address Line 1: </label>
       <input type="text" name="details[user_address_line_1]" id="user_address_line_1" value="<?=$details['user_address_line_1']?>" />
     </div>
     <div class="inner-form">
       <label for="user_address_line_2">Address Line 2: </label>
       <input type="text" name="details[user_address_line_2]" id="user_address_line_2" value="<?=$details['user_address_line_2']?>" />
     </div>
     <div class="inner-form">
       <label for="user_address_line_country">Country: </label>
       <input type="text" name="details[user_address_country]" id="user_address_line_country" value="<?=$details['user_address_country']?>" />
     </div>
     <div class="inner-form">
      <label for="user_postcode">Postcode: </label>
      <input type="text" name="details[user_postcode]" id="user_address_line_postcode" value="<?=$details['user_postcode']?>" />
     </div>
     <div class="inner-form">
      <label for="user_phone_no">Phone Number: </label>
      <input type="text" name="details[user_phone_no]" id="user_phone_no" value="<?=$details['user_phone_no']?>" />
     </div>
     <div class="inner-form">
      <label for="user_gender">Gender: </label>
      <input type="text" name="details[user_gender]" id="user_gender" value="<?=$details['user_gender']?>" />
    </div>
    <div class="inner-form">
      <label for="user_date_of_birth">Date of Birth: </label>
      <input type="date" name="details[user_date_of_birth]" id="user_date_of_birth" value="<?=$details['user_date_of_birth']?>" />
    </div>
    <div class="inner-form">
       <label for="AcceptTerm">Do you agree to the terms and conditions? </label>
       <input type="checkbox" name="AcceptTerm" id="AcceptTerm" required />
     </div>
     <div class="inner-formBtn">
     <input type="submit" name="submit" value="Register" />
     </div>
   </form>
   </div>