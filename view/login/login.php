<!DOCTYPE html>
<html lang="en" class="login__BackGround">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>


    <link rel="stylesheet" href="/view/style/style.css">
    <link rel="stylesheet" href="/view/login/login-style.css">
</head>

<body>

    <main class="login">

        <div class="login__logo">
            <img src="/view//img//icons/Logo-Max-Blue.svg" alt="">
        </div>
        <form action="" method="POST" class="login__form">
            <div class="login__image">
                <img src="/view//img//icons//Login.svg" alt="">
            </div>
            <?php if ($userError) { ?>
                <div class="login__message error">
                    <p>Error: credentials do not match </p>
                </div>
            <?php } ?>
            <fieldset class="login__field">
                <div class="login__input">
                    <input id="userName" type="text" placeholder="User Name" name="userName">
                    <label for="userName">UserName</label>
                </div>
                <div class="login__input">
                    <input id="password" type="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                </div>

            </fieldset>

            <div class="submit">
                <input class="button-submit" type="submit" value="LogIn">
            </div>
        </form>


    </main>


</body>

</html>