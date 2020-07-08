<div class="lastOrder-form">
  <?php
    if(isset($message)){
      echo '<p>' . $message . '</p>';
    }
  ?>
  
   <form action="" method="POST">

    <?php if(isset($user_id)){?>
      <input type="hidden" name="user[user_id]" id="id" value="<?=$user_id?>" />
    <?php } ?>

     <div class="inner-form">
       <label for="firstname">First Name*: </label>
       <input type="text" name="user[user_firstname]" id="firstname" value="<?php if(isset($user_firstname)) echo $user_firstname;?>" required />
     </div>

     <div class="inner-form">
       <label for="surname">Last Name*: </label>
       <input type="text" name="user[user_lastname]" id="surname" value="<?php if(isset($user_lastname)) echo $user_lastname;?>" required />
     </div>

     <div class="inner-form">
      <label for="email">Email*: </label>
      <input type="text" name="user[user_email]" id="email" value="<?php if(isset($user_email)) echo $user_email;?>" required />
     </div>

     <div class="inner-form">
      <label for="password"> Password*: </label>
      <input type="password" name="user[user_password]" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
     </div>

     <div class="inner-form">
      <label for="confpassword"> Confirm Password: </label>
      <input type="password" name="confpassword" id="confpassword" />
     </div>

     <div class="inner-form">
       <label for="user_address_line_1">Address Line 1*: </label>
       <input type="text" name="user[user_address_line_1]" id="user_address_line_1" value="<?php if(isset($user_address_line_1)) echo $user_address_line_1;?>" required />
     </div>

     <div class="inner-form">
       <label for="user_address_line_2">Address Line 2: </label>
       <input type="text" name="user[user_address_line_2]" id="user_address_line_2" value="<?php if(isset($user_address_line_2)) echo $user_address_line_2;?>" />
     </div>

     <div class="inner-form">
       <label for="user_address_line_country">Country: </label>
       <input type="text" name="user[user_address_country]" id="user_address_line_country" value="<?php if(isset($user_address_country)) echo $user_address_country;?>" />
     </div>

     <div class="inner-form">
      <label for="user_postcode">Postcode*: </label>
      <input type="text" name="user[user_postcode]" id="user_address_line_postcode" value="<?php if(isset($user_postcode)) echo $user_postcode;?>" required />
     </div>

     <div class="inner-form">
      <label for="user_phone_no">Phone Number: </label>
      <input type="text" name="user[user_phone_no]" id="user_phone_no" value="<?php if(isset($user_phone_no)) echo $user_phone_no;?>" />
     </div>

     <div class="inner-form">
      <label for="user_gender">Gender: </label>
      <input type="text" name="user[user_gender]" id="user_gender" value="<?php if(isset($user_gender)) echo $user_gender;?>" />
    </div>

    <div class="inner-form">
      <label for="user_date_of_birth">Date of Birth*: </label>
      <input type="date" name="user[user_date_of_birth]" id="user_date_of_birth" value="<?php if(isset($user_date_of_birth)) echo $user_date_of_birth;?>" required />
    </div>

    <div class="inner-form">
       <label for="AcceptTerm">Do you agree to the terms and conditions? </label>
       <input type="checkbox" name="AcceptTerm" id="AcceptTerm" required />
     </div>

     <div class="inner-formBtn">
     <input type="submit" name="submit" value="Save Updated Details" />
     <input type="submit" name="submit" value="Register your account" />
     </div>

   </form>
   </div>