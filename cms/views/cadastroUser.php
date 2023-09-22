<?php include("blades/header.php"); 
include("../models/conexao.php"); ?>
<link rel="stylesheet" href="css/style.css">
<div class="container pt-2 mt-5 p-3 rounded-2 shadow" id="main">

<form action="../controllers/cadastrarUsuario.php" method="post">
<h3 class="p-3 font" > Cadastrar</h3>
    <!-- metodo: "post" serve para enviar as paginas desse formulario pro "cadastrar.php" -->
    <label class="form-label font">Nome</label>
    <input class="form-control" type="text" name="nomeUser"> 

    <label class="form-label font mt-3">Email</label>
    <input class="form-control" type="text" name="emailUser">

    <label class="form-label font mt-3">Senha</label>
    <input class="form-control" type="password" name="senhaUser">

    <button type="submit" class="mt-3"   >Cadastrar</button>

</form>
</div>
<?php include("blades/footer.php"); ?>