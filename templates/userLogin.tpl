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

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>{$titulo}</h2>
            <form class="form-alta" action="verify" method="post">
                <input placeholder="email" type="text" name="email" id="email" required>
                <input placeholder="password" type="password" name="password" id="password" required>
                <input type="submit" class="btn btn-primary" value="Login">
                <a class="btn btn-outline-secondary btn-sm" href="createLogin" >Create User</a>
            </form>
        </div>
    </div>
    <a class="btn btn-secondary btn-sm" href="home" >Invitado</a>
    <h4 class="alert-danger">{$error}</h4>

</div>
</body>

</html>
{* 
Falta hacer la base de datos del user ver clase del lunes 27/9
*}