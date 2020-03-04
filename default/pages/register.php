<?php
$title = 'Register';

if(isset($_POST['submit'])){
  $content = loadTemplate('../templates/register.html.php',$_POST);


  $users = new DatabaseTable('users',null);
  $users->insert($_POST['details']);

}
else{
  $details['firstname'] = '';
  $details['surname'] = '';
  $details['email'] = '';
  $details['user_address_line_1'] = '';
  $details['user_address_line_2'] = '';
  $details['user_address_line_country'] = '';
  $details['user_address_line_postcode'] = '';
  $details['user_address_line_phone_no'] = '';
  $details['user_gender'] = '';
  $details['user_date_of_birth'] = '';

  $variables = array('details' => $details);
  $content = loadTemplate('../templates/register.html.php',$variables);
}
?>