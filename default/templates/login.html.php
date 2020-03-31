<div class="lastOrder-form">
  <form action="" method="POST">
      <div class="login-form">
        <label for="username" class="login-label">Username</label>
        <input type="text" id="username" class="login-textbox" placeholder="Enter your username" name="details[user_email]" value="<?=$user_email?>" />
      </div>
      <div class="login-form">
        <label for="password" class="login-label">Password</label>
        <input type="password" class="login-textbox" placeholder="Enter your password" name="details[user_password]" />
      </div>
      <div class="inner-formBtn">
        <input type="submit" name="login" value="LOGIN" class="login-btn" />
      </div>
  </form>
</div>