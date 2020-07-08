<li style="width:300px;height:300px;padding:0;color: #ffff;padding:10px" onClick="">
    
    <i class="fas fa-user fa-5x" style="margin:auto"></i>
    <article style="margin-top:15px;">
        <label><strong>Name: </strong><?=$user_firstname?> <?=$user_lastname?></label>
        <label style="word-wrap: break-word;"><strong>Email: </strong><?=$user_email?></label>
        <label><strong>Phone No:</strong><?=$user_phone_no?></label>
    </article>

    <form action="" method="POST" >
        <input type="hidden" name="UID" value="<?=$user_id?>">
        <input type="submit" name="submit" value="Toggle Admin Status" style="width: 100%;height:30px;">
    </form>

</li>