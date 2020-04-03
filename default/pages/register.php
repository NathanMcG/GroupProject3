<?php
$title = 'Register';
$content = '';
//var_dump($details);
if(isset($_POST['details'])){
  
  if(validate())
  {
    $_POST['details']['user_password'] = password_hash($_POST['details']['user_password'],PASSWORD_DEFAULT);
    $users = new DatabaseTable('users',null);
    $users->insert($_POST['details']);
    $variables = array('details' => $_POST['details'],'notice' => 'Account Created');
  }
  else{
    $variables = array('details' => $_POST['details'],'notice' => 'Validation Error');
  }
  $content.= loadTemplate('../templates/formRegister.html.php',$variables);

}
else{
  $content = emptyDisplay();
}

function emptyDisplay(){
  $details = array('user_firstname' => '',
  'user_lastname' => '',
  'user_email' => '',
  'user_address_line_1' => '',
  'user_address_line_2' => '',
  'user_address_country' => '',
  'user_postcode' => '',
  'user_phone_no' => '',
  'user_gender' => '',
  'user_date_of_birth' => '');  

  $variables = array('details' => $details);
  $content = loadTemplate('../templates/formRegister.html.php',$variables);
  return $content;
}

function validate(){
  require '../classes/Validate.php';
  $validate = new Validate;
  $valid=true;
  $names = array('user_firstname','user_lastname','user_email','user_address_line_1','user_address_country','user_postcode','user_phone_no','user_gender','user_date_of_birth');
  if(!$validate->allSet($_POST['details'],$names)){
    $valid=false;
  }
  if(!$validate->confirmPassword($_POST['details']['user_password'],$_POST['confpassword'])){
    $valid = false;
  }
  return $valid;
}
?>