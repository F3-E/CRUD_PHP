<div class="users-list">
    
<?php

$sql = "SELECT * FROM User";
$res = $conn->query($sql);
if($res->num_rows ==0){
    echo "
    <div class='users'>
    Sem usuários cadastrados
    </div>";
}
else{


while ($row = $res->fetch_assoc()) {
    echo "<div class='users-list__user'>

    <label class='users-list__title'>Nome:</label>
    <label>{$row["name"]}</label>
    <label class='users-list__title'>Email:</label>
    <label>{$row["email"]}</label>
    <img class='users-list__image'src='" . ($row["sex"] === "F" ? "assets/female.png" : "assets/male.png") . "'>
    <label class='users-list__title'>Date:</label>
    <label>{$row["date"]}</label>
    <a href='?page=update&user={$row["userId"]}' class='action-link action-link--primary button'>Atualizar</a>
    <a href='?page=delete&user={$row["userId"]}' class='action-link action-link--danger button'>Deletar</a>
    </div>";
}
}
?>
</div>