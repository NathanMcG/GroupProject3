<?php
    $classificationsTable = new DatabaseTable('classifications',null);
    $typesTable = new DatabaseTable('types',null);
    $classifications = $classificationsTable->findAll();
?>


<div class="user-order-details" style="width: 100%;">
        <div class="orders-list">
            <?php foreach($classifications as $classification){ 
                
                if($classification['classification_id'] != -1){
                ?>
                    <div style="width:60%;display: flex;margin-left: auto;margin-right: auto;">
                        <ul class="orders-list" style="width:50%; margin: 5px;">
                            <?=loadTemplate('../templates/itemClassification.html.php',$classification)?>
                        </ul>

                        <ul style="width:50%; margin: 5px;">
                            <?php $types = $typesTable->find('classification_id',$classification['classification_id']);
                                foreach($types as $type){ 
                                    $type['classification_name'] = $classification['classification_name'];?>
                                    <?=loadTemplate('../templates/itemType.html.php',$type);?>
                                <?php }
                            ?>
                        </ul>
                    </div>
                <?php } 
            } ?>
        </div>
</div>
                            
    