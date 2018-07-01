<?php
$title = "MyMusic";
$currentDate=date( 'dMY');
$mainH1='<span id="slogan">Be MUSIC.</span><span>Live MUSIC.</span>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <? echo $title ?></title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
<div class="conteiner">
    <div class="flex1">
        <header>
            <a href="index.php">Home</a>
            <span>/</span>
            <a href="rock.php">Rock</a>
            <span>/</span>
            <a href="">Jazz</a>
        </header>

        <h1>
            <?php echo $mainH1 ?>
        </h1>
        <div class="content">
            <img src="img/main.png" alt="music">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore
                magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <footer>Copyright &copy; <?php echo $currentDate ?></footer>
    </div>
</div>
</body>

</html>
