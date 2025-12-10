<div class="saved-user">
    <h2>Usuário salvo</h2>
     <div class="saved-user__field">
    <label class="saved-user__title">Nome:</label><label><?= $_POST["name"] ?></label>
    </div>
     <div class="saved-user__field">
    <label class="saved-user__title">Email:</label><label><?= $_POST["email"] ?></label>
    </div>
     <div class="saved-user__field">
    <label class="saved-user__title">Sexo:</label><label><?= $_POST["sex"]=="F"?"Feminino":"Masculino" ?></label>
    </div>
    <div class="saved-user__field">
    <label class="saved-user__title">Nascimento</label><label><?= $_POST["date"] ?></label>
    </div>
    <button> Ver usuarios</button>

    <?php
    if($_POST["name"]!=""){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $date = $_POST["date"];

    $sql = "INSERT INTO User(name,email,sex,date) VALUES ('$name','$email','$sex','$date');";

    $_POST = "";

    $req = $conn->query($sql);
    
    }

    ?>
</div>