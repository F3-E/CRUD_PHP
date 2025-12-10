<form class="form" action="?page=create_user&created=true" method="POST">
    <h1>Cadastro</h1>
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" required/>
    <label  for="email">Email</label>
       <input type="email" name="email" id="email" required/>
       <label>Sexo</label>
       <div>
        <input type="radio" name="sex" value="F" id="F" checked/>
        <label for="F">Feminino</label>
       </div>
          <div>
        <input type="radio" name="sex" value="M" id="M"/>
        <label for="M">Masculino</label>
       </div>
       <label for="date">Nascimento</label>
       <input type="date" name="date" id="date" required/>
        <input type="submit"/>
</form>