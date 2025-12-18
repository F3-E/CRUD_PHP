<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <header class="header">
        <img src="assets/logo.png" class="header__logo"/>
        <a href="index.php" class="header__link <?= @$_REQUEST["page"]==""?"header__link--active":"" ?>">Home</a>

        <a href="?page=create_user" class="header__link <?= @$_REQUEST["page"]==="create_user"?"header__link--active":"" ?>">Criar usuário</a>

        <a href="?page=show_users" class="header__link <?= @$_REQUEST["page"]==="show_users"?"header__link--active":"" ?>">Ver usuários</a>
    </header>
    
    <?php 
    include("config.php");
    switch(@$_REQUEST["page"]){
        case "create_user":
            include("new_user.php");
        break;
        case "show_users":
            include("show_users.php");
        break;

        case "delete":
            include("delete.php");
            break;
        case "deleted":
            include("deleted.php");
            break;
        case "update":
            include("update.php");
            break;
            case "updated":
            include("updated.php");
            break;

        default:
        break;
    }
    
    if(@$_REQUEST["created"]==true){
        include("saved_user.php");
    }


    ?>
    <img src="./assets/slug.png" class="slug">
</body>
</html>