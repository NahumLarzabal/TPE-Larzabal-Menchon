<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylecss.css">

    <title>Login Libreria</title>
</head>

<body>
{* {include file='templates/header.tpl'} *}
<div class="contenedor-general-login">
<div class="container-login colorDiv">
<div class="logo-login">
    <img class="w-25" src="./img/logo.png" alt="logo">
    <div class="btns-login w-25 h-25">
        <a class="btn btn-outline-secondary btn-sm btn-create-user" href="createLogin" >Create User</a>
       <a class="btn btn-secondary btn-create-user  href="home">Invitado</a>
    </div>
</div>
<div class="top-title-page">
<div class="title-login">
<h2>{$titulo}</h2>
                </div>
            </div>
            
            <div class="form-login">
                <form class="form-alta" action="verify" method="post">
                    <div class="inputs-form">
                        <div class="input-email">
                            <label for="email">Email: </label>
                            <input placeholder="email" type="text" name="email" id="email" required>
                        </div>
                        <div class="input-password">
                            <label for="password">Contraseña: </label>
                            <input placeholder="password" type="password" name="password" id="password" required>
                        </div>
                    </div>
                    <div class="btn-form-login">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div   
                </form>
                <h4><span class="red-alert">{$error}</span></h4>
            </div> 
        </div>
    </div>

{* {include file='templates/footer.tpl'} *}
</body>

</html>