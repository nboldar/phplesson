<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    var_dump($_POST);
    /*$user = $_POST['user_name'];
    $comment = $_POST['comment'];
    var_dump($user, $comment);*/
}
?>

<form action="" method="post">
    Имя: <input type="text" name="user_name"/>
    Комментарий: <br>
    <textarea name="comment" id="" cols="30" rows="10"></textarea> <br>
    <input  type="submit" value="Отправить"/>
</form>


