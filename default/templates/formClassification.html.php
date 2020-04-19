<div class="lastOrder-form" style="border-right: 2px dashed #c93d67;width:50%">

    <?php
        if(isset($message)){
          echo '<p>' . $message . '</p>';
        }
    ?>

    <form action="" method="POST" style="padding: 20px; border: 2px dashed #f2b662;">

        <?php if(isset($classification_id)){?>
            <input type="hidden" name="class[classification_id]" id="id" value="<?=$classification_id?>" />
        <?php } ?>

        <div class="inner-form">
            <label for="classification_name">Classification Name: </label>
            <input type="text" name="class[classification_name]" id="classification_name" value="<?php if(isset($classification_name)) echo $classification_name;?>" required />
        </div>

        <div class="inner-form">
            <label for="class_type">Alcohol / Mixer: </label>
            <select id="volume" name="class[class_type]" style="width: 11.7em;">
                <option value="Alcohol" <?php if(isset($class_type)){if($class_type == 'Alcohol') echo 'selected';}?> >Alcohol</option>
                <option value="Mixer" <?php if(isset($class_type)){if($class_type == 'Mixer') echo 'selected';}?>>Mixer</option>
            </select> 
        </div>

        <div class="inner-formBtn" style="display: flex;justify-content: flex-end;">
            <input type="submit" name="submit" value="Submit" />
        </div>

    </form>

</div>

