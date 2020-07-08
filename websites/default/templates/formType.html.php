<div class="lastOrder-form" style="width:50%;">

    <?php
        if(isset($message)){
          echo '<p>' . $message . '</p>';
        }
    ?>

    <form action="" method="POST" style="padding: 20px; border: 2px dashed #f2b662;">

        <?php if(isset($type_id)){?>
            <input type="hidden" name="type[type_id]" id="id" value="<?=$type_id?>" />
        <?php } ?>

        <div class="inner-form">
            <label for="type_name">Type Name: </label>
            <input type="text" name="type[type_name]" id="type_name" value="<?php if(isset($type_name)) echo $type_name;?>" required />
        </div>

        <div class="inner-form">
            <label for="class_type">Classification: </label>
            <select id="volume" name="type[classification_id]" style="width: 11.7em;">
                <?php
                    $classificationTable = new DatabaseTable('classifications',null);
                    $classifications = $classificationTable->findAll();
                    foreach($classifications as $classification){
                        if($classification['classification_id'] != -1){?>
                        <option value="<?=$classification['classification_id']?>" <?php if(isset($classification_id)){if($classification_id == $classification['classification_id']) echo 'selected';}?>><?=$classification['classification_name']?></option>
                        <?php } 
                    }
                ?>
            </select> 
        </div>

        <div class="inner-formBtn" style="display: flex;justify-content: flex-end;">
            <input type="submit" name="submit" value="Submit" />
        </div>

    </form>

</div>