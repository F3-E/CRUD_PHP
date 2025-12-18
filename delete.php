
<div class="pattern-container">
    
<h1 class='pattern-container__title'>Deletar</h1>

<?php

    $userId = $_REQUEST["user"];

    $sql = "SELECT * from User where userId={$userId} ";

    $res = $conn->query($sql);

    if ($res && $res->num_rows > 0) {
    $row = $res->fetch_assoc();
    
    echo "<p>Usuário: {$row["name"]}</p>
    <a href='?page=deleted&user={$row["userId"]}' class='action-link action-link--danger button'>Deletar</a>
   
    ";

} else {
    echo "
    <p>Usuário não encontrado.</p>
    
    ";
}
    echo "<a href='?page=show_users' class='action-link action-link--primary button'>Voltar</a>"
?>




</div>