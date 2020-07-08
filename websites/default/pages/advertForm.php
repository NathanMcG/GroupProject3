<?php

    require '../isAdmin.php';
    require '../fileUpload.php';

    $title = "Manage Adverts";
    $content = '<div style="width: 100%;">';

    $advertTable = new DatabaseTable('adverts','advert_id');

    if(isset($_POST['advert'])){

        if(strpos($_POST['advert']['file_name'],'.')){
            $_POST['advert']['file_name'] = explode('.',$_POST['advert']['file_name']);
            $_POST['advert']['file_name'] = $_POST['advert']['file_name'][0];
        }

        if(isset($_POST['advert']['advert_id'])){
            $advert = $advertTable->find('advert_id',$_POST['advert']['advert_id'])[0];
            rename('images/adverts/' . $advert['file_name'] . '.png','images/adverts/' . $_POST['advert']['file_name'] . '.png');
        }

        $advertTable->save($_POST['advert']);
        if(isset($_FILES['image'])){
            if($_FILES['image']['name'] != '')
                uploadImage('adverts',$_POST['advert']['file_name']);
        }
    }


    if(isset($_POST['advert'])){
        //If form subbmitted load with those details
        $variables = $_POST['advert'];
    }
    else{
        if(isset($_POST['delete'])){
            $advertTable->delete($_GET['AID']);
            $variables = array('message' => 'Advert deleted');
        }
        elseif(isset($_GET['AID'])){
            //If from update details load with user details
            $variables = $advertTable->find('advert_id',$_GET['AID']);
            if(count($variables)>0)
                $variables = $variables[0];
            $variables['message'] = 'Changing \'Advert Name\' will create a new Advert';
        }
        else{
            //If from register load empty form
            $variables = array('message' => 'Add new Advert');
        }
    }

    $content .= loadTemplate('../templates/formAdvert.html.php',$variables);

    
    $variables = array('list' => $advertTable->findAll());
    $content .= loadTemplate('../templates/listAdverts.html.php',$variables);
    $content .= '</div>';