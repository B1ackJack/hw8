<?php
/*
 * This is the initial login page landing
 *
 */
?>
<html>
    <head>
        <title>WAPT HW 8 - Simple Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <form name="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
    </body>
</html>
