<?php
    require '../isAdmin.php';

    $classificationsTable = new DatabaseTable('classifications','classification_id');
    $typesTable = new DatabaseTable('types','type_id');
    $productsTable = new DatabaseTable('products','product_id');
    $variables = array('class' => array(),
    'type' => array());

    if(isset($_POST['delete'])){
        if(isset($_GET['CID'])){
            $types = $typesTable->find('classification_id',$_GET['CID']);
            foreach($types as $type){
                $products = $productsTable->find('type_id',$type['type_id']);
                foreach($products as $product){
                    $product['type_id'] = -1;
                    $productsTable->save($product);
                }
                $typesTable->delete($type['type_id']);
            }
            $classificationsTable->delete($_GET['CID']);
        }
        if(isset($_GET['TID'])){
            $products = $productsTable->find('type_id',$_GET['TID']);
            foreach($products as $product){
                $product['type_id'] = -1;
                $productsTable->save($product);
            }
            $typesTable->delete($_GET['TID']);
        }
        header("Location: ?page=typeForm");
    }

    if(isset($_POST['submit'])){
        if(isset($_POST['class'])){
            $classificationsTable->save($_POST['class']);
        }
        if(isset($_POST['type'])){
            $typesTable->save($_POST['type']);
        }
    }

    if(isset($_GET['CID'])){
        $class=$classificationsTable->find('classification_id',$_GET['CID']);
        if(count($class)>0)
            $variables['class']['message'] = 'You are editing ' . $class[0]['classification_name'];
    }
    if(isset($_GET['TID'])){
        $type = $typesTable->find('type_id',$_GET['TID']);
        if(count($type)>0)
            $variables['type']['message'] = 'You are editing ' . $type[0]['type_name'];
    }



    if(isset($_POST['class'])){
        $variables['class'] = $_POST['class'];
    }
    elseif(isset($_POST['type'])){
        $variables['type'] = $_POST['type'];
    }
    else{
        if(isset($_GET['CID'])){
            $class=$classificationsTable->find('classification_id',$_GET['CID']);
            if(count($class)>0)
                $variables['class'] = $class[0];
        }
        if(isset($_GET['TID'])){
            $type = $typesTable->find('type_id',$_GET['TID']);
            if(count($type)>0)
            $variables['type'] = $type[0];
        }
    }

    

    $title = 'Manage Types';
    $content = loadTemplate('../templates/pageFormType.html.php',$variables);