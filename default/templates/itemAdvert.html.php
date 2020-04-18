<li style="max-height: 100px;width: 70%;margin-bottom: 20px;position: relative;">

    <img src="images/adverts/<?=$file_name?>" alt="product image" class="img-product" style="max-height: 100px;">
    <h2 style="max-width: 30%;margin-left: 30px;margin-top: 15px;color: #ffff;margin-right: 30px;"><?=$file_name?></h2>

    <article style="padding-top: 10px;color: #ffff;">
        <label><strong>Start Date:</strong> <?=$start_date?></label>
        <label><strong>End Date:</strong> <?=$end_date?></label>
        <label><strong>Link:</strong> <a href="<?=$link?>" style="color: #f2b662;"><?=$link?></label></a>
    </article>

    <article style="width: 150px;height: 100%;margin-left: 20px; position: absolute;right: 10px;">
        <form action="" method="POST" style="height: 100%;width: 100%;">

                <input type="submit" name="submit" value="Edit" style="width: 100%;height: 40%;margin-top: 3.75%;margin-bottom: 2.5%;color: #fff;border: 1px solid #f2b662;background-color: #c93d67;"/>

                <input type="submit" name="submit" value="Delete" style="width: 100%;height: 40%;margin-bottom: 5%;margin-top: 2.5%;color: #fff;border: 1px solid #f2b662;background-color: #c93d67;"/>

        </form>
    </article>

</li>