<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 23:04
 */
?>
<div class="comment" data-id="<?=$id?>">
    <p class="user-name" data-id="<?=$id?>"><?=$user_name?></p>
    <p class="textcomment" data-id="<?=$id?>">
        <?=$comment?>
    </p>
    <p class="status">Comment in process of moderation</p>
    <button type="submit" class="approve" data-id="<?=$id?>">Approve</button>
    <button type="submit" class="reject" data-id="<?=$id?>">Reject</button>
</div>