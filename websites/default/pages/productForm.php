<?php

    require '../isAdmin.php';
    require '../fileUpload.php';
    $productsTable = new DatabaseTable('products','product_id');

    if(isset($_GET['type'])){
        $title = 'New Product';
        $variables = array();
    }
    else{
        $title = 'Manage Product';

        if(isset($_POST['delete'])){
            $productsTable->delete($_GET['PID']);
            header("Location: /user");
        }
        elseif(isset($_GET['PID'])){
            $product = $productsTable->find('product_id',$_GET['PID'])[0];
            $variables = $product;
        }
    }


    if(isset($_POST['product'])){

        $variables = $_POST['product'];

        //Strip Symbols
        $_POST['product']['product_alcohol_content'] = str_replace('%','',$_POST['product']['product_alcohol_content']);
        $_POST['product']['product_discount'] = str_replace('%','',$_POST['product']['product_discount']);
        $_POST['product']['product_price'] = str_replace('£','',$_POST['product']['product_price']);

        if(is_numeric($_POST['product']['product_alcohol_content']) && is_numeric($_POST['product']['product_discount']) && is_numeric($_POST['product']['product_price'])){
            $productsTable->save($_POST['product']);
            $variables['message'] = 'Submission Successfull';
            if(isset($_FILES['image'])){
                if(isset($_POST['product']['product_id'])){
                    uploadImage('products',$_POST['product']['product_id']);
                }
                else{
                    $products = $productsTable->findAll();
                    uploadImage('products',$products[count($products)-1]['product_id']);
                }
            }
        }
        else{
            $variables['message'] = 'Validation Error';
        }
    }


    if( ( !isset($_GET['type']) ) && !( isset($_POST['edit']) || isset($_POST['product']) ) && ( !isset($_POST['delete']) ) && ( !isset($_GET['PID']) ) ){
        $products = $productsTable->findAll();
        $variables = array('products' => $products,
            'link' => 'productForm');
        $content = loadTemplate('../templates/listProducts.html.php',$variables);
    }
    else{
        $content = loadTemplate('../templates/formProducts.html.php',$variables);
    }

    

    /*$title = "New Product";

    if(isset($_POST['product'])){

        $_POST['product']['alcohol_content'] = str_replace('%','',$_POST['product']['alcohol_content']);
        $_POST['product']['product_discount'] = str_replace('%','',$_POST['product']['product_discount']);
        $_POST['product']['product_price'] = str_replace('£','',$_POST['product']['product_price']);
        $_POST['product']['volume'] = $_POST['volume'] . $_POST['unit'];

        if(is_numeric($_POST['product']['alcohol_content']) && is_numeric($_POST['product']['product_discount']) && is_numeric($_POST['product']['product_price'])){

            if(isset($_GET['PID'])){
                $productsTable = new DatabaseTable('products',$_GET['PID']);
            }
            else{
                $productsTable = new DatabaseTable('products',null);
            }

            //Uploads new product
            $productsTable->save($_POST['product']);

            if(isset($_FILES['productImage'])){
                if(isset($_GET['PID'])){
                    uploadImage('products',$_GET['PID']);
                }
                else{
                    $products = $productsTable->findAll();
                    uploadImage('products',$products[count($products)-1]['product_id']);
                }
            }

            $variables = array('message' => 'Submission Successful');

        }
        else{
            $variables = array('message' => 'Validation Error',
                                'product' => $_POST['product'],
                                'volume' => $_POST['volume'],
                                'unit' => $_POST['unit']);
        }
    }
    else{
        
        $variables = array('message' => 'Input Details',
                        'volume' => '');
    }

    
    
    $content = loadTemplate('../templates/formProducts.html.php',$variables);*/
    