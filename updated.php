<div class="pattern-container">
<?php

$userId = $_REQUEST["user"];


$sql = "UPDATE User SET name='{$_POST["name"]}',email='{$_POST["email"]}',sex='{$_POST["sex"]}',date='{$_POST["date"]}' WHERE userId={$userId};";

$res = $conn->query($sql);

    if($conn->affected_rows>0){
        echo "
       
        <p>Usuário alterado</p>
  
      
        ";
    }
    else{
        echo "
       
        <p>Usuário ja foi alterado alterado</p>
      
    ";
    }

?>
<a href="?page=show_users" class='button'>Voltar</a>
</div>