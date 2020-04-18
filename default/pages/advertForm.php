<?php
    $title = "Manage Adverts";

    $advertTable = new DatabaseTable('adverts','field_name');
    $variables = array('list' => $advertTable->findAll());
    $content = loadTemplate('../templates/listAdverts.html.php',$variables);