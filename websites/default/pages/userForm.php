<?php
  if (isset($_GET['UID'])) {
    $title = 'Update Details';
  } else{
    $title = 'Register';
  }
  $usersTable = new DatabaseTable('users','user_id');

//LOADING CONTENT
if(isset($_POST['user'])){
    //If form subbmitted load with those details
    $variables = $_POST['user'];
}
else{
    if(isset($_GET['UID'])){
        //If from update details load with user details
        $variables = $usersTable->find('user_id',$_SESSION['id'])[0];
        $variables['message'] = 'Leaving password field blank will keep it the same';
    }
    else{
        //If from register load empty form
        $variables = array();
    }
}


//SUBMISSION
function validate(){
    $flag = true;

    //Email
    if(!filter_var($_POST['user']['user_email'], FILTER_VALIDATE_EMAIL)){
      $flag = false;
    }

    return $flag;

}

if(isset($_POST['user']) && validate()){
    if(isset($_GET['UID']) && $_POST['user']['user_password'] == ''){
        unset($_POST['user']['user_password']);
    }
    else{
        $_POST['user']['user_password'] = password_hash($_POST['user']['user_password'],PASSWORD_DEFAULT);
    }

    $variables['message'] = 'Details Uploaded';
    $usersTable->save($_POST['user']);
    if(!isset($_GET['UID']))
      header("Location: /");
}


//SETS CONTENT
$content = loadTemplate('../templates/formUsers.html.php',$variables);



?>