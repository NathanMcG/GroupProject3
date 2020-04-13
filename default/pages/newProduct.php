<?php
    require '../fileUpload.php';
    $title = "New Product";

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

    
    
    $content = loadTemplate('../templates/formProducts.html.php',$variables);
    