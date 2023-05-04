<form action="index.php" method="POST">
    <p>Username: <input name="UserName" type="text" required="true" /></p>
    <p>Password: <input name="Password" type="password" required="true" /></p>
    <p><button type="submit">Login</button></p>
</form>
<p>Don't have an account? <button onclick="createAjax('forms', 'registerForm.php', '');">Register Here!</button></p>