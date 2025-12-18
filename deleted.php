<div class="pattern-container">
    <?php
    
    $userId = $_REQUEST["user"];


    $sql = "delete from User where userId={$userId} ";

    $res = $conn->query($sql);


    if ($res && $conn->affected_rows > 0) {
    

        echo "
        <p>Usuário deletado</p>
    
        ";

    }else{
        echo "
        <p>Usuário não encontrado ou erro ao deletar</p>
          
        
        ";
    }
    echo "<a href='?page=show_users' class='action-link action-link--primary button'>Voltar</a> "
    ?>
</div>