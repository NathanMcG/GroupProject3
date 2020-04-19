
<li style="width: 99%; align-self: flex-start;min-height: 50px;display: flex;position: relative;"  >

    <h2 style="width: 30%;margin: 5px;"><?=$classification_name?></h2>

    <article style="margin: 5px;">
        <label><strong>Alcohol / Mixer:</strong><?=$class_type?></label>
    </article>

    <article style="width: 15%;height: 49px;margin-left: 20px;position: absolute;right: 10px;">
        <form action="?page=typeForm&CID=<?=$classification_id?>" method="POST" style="height: 100%;width: 100%;">

            <input type="submit" name="edit" value="Edit" style="width: 100%;height: 40%;margin-top: 3px;margin-bottom: 3px;color: #fff;border: 1px solid #f2b662;background-color: #c93d67;"/>

            <input type="submit" name="delete" value="Delete" style="width: 100%;height: 40%;margin-bottom: 3px;color: #fff;border: 1px solid #f2b662;background-color: #c93d67;"/>

        </form>
    </article>

</li>