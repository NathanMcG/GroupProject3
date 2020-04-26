<li style="max-height: 100px;width: 70%;margin-bottom: 20px;position: relative;">

    <img src="/images/adverts/<?=$file_name?>.png" alt="advert image" class="img-product" style="max-height: 100px;">
    <h2 style="max-width: 30%;margin-left: 30px;margin-top: 15px;color: #ffff;margin-right: 30px;word-wrap: break-word;"><?=$file_name?></h2>

    <article style="padding-top: 10px;color: #ffff;max-width: 35%;">
        <label><strong>Start Date:</strong> <?=$start_date?></label>
        <label><strong>End Date:</strong> <?=$end_date?></label>
        <label style="max-width:100%;height: 20%;"><strong>Link:</strong> <a href="<?=$link?>" style="color: #f2b662;overflow: hidden;"><?=$link?></label></a>
    </article>

    <article style="width: 15%;height: 100%;margin-left: 20px; position: absolute;right: 10px;">
        <form action="/advertForm/?AID=<?=$advert_id?>" method="POST" style="height: 100%;width: 100%;">

                <input type="submit" name="edit" value="Edit" style="width: 100%;height: 40%;margin-top: 3.75%;margin-bottom: 2.5%;color: #fff;border: 1px solid #f2b662;background-color: #c93d67;"/>

                <input type="submit" name="delete" value="Delete" style="width: 100%;height: 40%;margin-bottom: 5%;margin-top: 2.5%;color: #fff;border: 1px solid #f2b662;background-color: #c93d67;"/>

        </form>
    </article>

</li>