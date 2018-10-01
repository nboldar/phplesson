<a href="/">back to the main page</a>
<form action="/user/verify" method="post">
    <input type="text" placeholder="input your login" name="login">
    <input type="password" placeholder="input your password" name="password">
    <button type="submit" name="enter" value="1">Log In</button>
    <button type="submit" name="sighin" value="1">Sigh In</button>
</form>
<p><?= $message ?></p>