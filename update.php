<?php
    $userId = $_REQUEST["user"];

    $sql = "SELECT * FROM User where userId ={$userId}";

    $res = $conn->query($sql);

    $row = $res->fetch_assoc();
    if($row){

        echo "
      
        <form class='pattern-container' method='POST' action='?page=updated&user={$userId}'>
          <h1 class='pattern-container__title'>Atualizar</h1>
        <label for='name'>Nome</label>
        <input type='text' class='form__input--text' value={$row["name"]} name='name' id='name'>
        <label for='email'>Email</label>
        <input type='email' class='form__input--text' value={$row["email"]} name='email' id='email'>

        <label>Sexo</label>
        <div>
        <input type='radio' name='sex' value='F' id='F' ".($row["sex"] =="F"?"Checked":'').">
        <label for='F'>Feminino</label>
        </div>
        <div>
        <input type='radio' name='sex' value='M' id='M' ".($row["sex"] =="M"?"Checked":'').">
        <label for='M'>Masculino</label>
        </div>
        <label for='date'>Nascimento</label>
        <input type='date' class='form__input--date' value={$row["date"]} name='date' id='date'>
        <div>
        <input type='submit' value='Atualizar' class='action-link action-link--primary button'>
        <a href='?page=show_users' class='action-link action-link--primary button' >Voltar</a>
        </div>
        </form>
    
      
        ";
    }
    else{
        echo "
        <div class='update'>
        <p>Usuário não encontrado</p>
        <a href='?page=show_users' class='button'>Voltar</a>
        </div>";
    }

?>