<form name="data-input" action="login.php" method="POST">
    <p>E-mail: <input name="USER_EMAIL" type="text" required="true" /></p>
    <p>Password: <input name="USER_PASSWORD" type="text" required="true" /></p>
    <p>First Name: <input name="USER_FNAME" type="text" required="true" /></p>
    <p>Last Name: <input name="USER_LNAME" type="text" required="true" /></p>
    <p>Address: <input name="USER_ADDRESS" type="text" required="true" /></p>
    <p>City: <input name="USER_CITY" type="text" required="true" /></p>
    <p>State: <input name="USER_STATE" type="text" required="true" /></p>
    <p>Zip: <input name="USER_ZIP" type="text" required="true" /></p>
    <p><button type="submit" onclick="createAjax(null, 'user-insert.php', '');">Create Account</button></p>
</form>