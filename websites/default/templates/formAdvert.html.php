<div class="lastOrder-form" style="padding-top: 20px;">

    <?php
        if(isset($message)){
            echo '<p>' . $message . '</p>';
        }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">

        <?php if(isset($advert_id)){ ?>
            <input type="hidden" name="advert[advert_id]" value="<?=$advert_id?>" />
        <?php } ?>

        <div class="inner-form">
            <label for="file_name">Advert Name: </label>
            <input type="text" name="advert[file_name]" id="file_name" required value="<?php if(isset($file_name)) echo $file_name;?>" />
        </div>

        <div class="inner-form">
            <label for="start_date">Start Date: </label>
            <input type="date" name="advert[start_date]" id="start_date" required value="<?php if(isset($start_date)) echo $start_date;?>" />
        </div>

        <div class="inner-form">
            <label for="end_date">End Date: </label>
            <input type="date" name="advert[end_date]" id="end_date" required value="<?php if(isset($end_date)) echo $end_date;?>" />
        </div>

        <div class="inner-form">
            <label for="link">Advert Link: </label>
            <input type="text" name="advert[link]" id="link" required value="<?php if(isset($link)) echo $link;?>" />
        </div>

        <div class="inner-form">
            <label for="image">Advert Image: </label>
                <input type="file" name="image" id="image" style="display:none;" />
                <label for="image" style="width: 10em;"><?php 
                if(isset($file_name)){
                    if(file_exists('images/adverts/' . $file_name))
                        echo $file_name;
                    else
                        echo 'Upload Image';
                }
                else{
                    echo 'Upload Image';
                } ?>
            </label>
        </div>

        <div class="inner-formBtn">
            <input type="submit" name="submit" value="Submit" />
        </div>

    </form>
</div>