<?php
    require '../fileUpload.php';
    $title = "New Product";

    if(isset($_POST['product'])){

        $_POST['product']['alcohol_content'] = str_replace('%','',$_POST['product']['alcohol_content']);
        $_POST['product']['product_discount'] = str_replace('%','',$_POST['product']['product_discount']);
        $_POST['product']['product_price'] = str_replace('%','',$_POST['product']['product_price']);

        //var_dump($_POST);

        if(is_double($_POST['product']['product_price']) && is_double($_POST['product']['product_discount']) && is_int($_POST['product']['alcohol_content'])){
            $_POST['product']['volume'] = $_POST['volume'] . $_POST['unit'];

            if(isset($_GET['PID'])){
                $productsTable = new DatabaseTable('products',$_GET['PID']);
            }
            else{
                $productsTable = new DatabaseTable('products',null);
            }

            echo 1;
            var_dump($_POST['product']);
            $productsTable->save($_POST['product']);

            echo 2;
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
        $product = array('product_name' => '',
                        'product_description' => '',
                        'dimensions' => '',
                        'alcohol_content' => '',
                        'brand' => '',
                        'product_discount' => '',
                        'product_price' => '');
        $variables = array('product' => $product,
                        'volume' => '');
    }

    
    
    $content = loadTemplate('../templates/formProducts.html.php',$variables);
    