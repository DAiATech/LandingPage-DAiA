<?php include("blades/header.php"); 
include("../models/conexao.php"); ?>
<link rel="stylesheet" href="css/style.css">


<div class="container pt-2 mt-5 p-3 rounded-2 shadow" id="main">

<form action="../controllers/cadastrar.php"  enctype="multipart/form-data" method="post">
<h3 class="p-3 font" >Cadastrar</h3>
    <!-- metodo: "post" serve para enviar as paginas desse formulario pro "cadastrar.php" -->
    <label class="form-label font">Título Da Noticia</label>
    <input class="form-control" type="text" name="blogTitulo"> <br>

    <label class="form-label font">Conteúdo</label>
    <textarea name="blogCorpo" class="form-control" cols="30" rows="10"></textarea>

    <label class="form-date mt-3 font" >Data</label> <br>
    <input type="date" name="blogData"> <br>


     
     <!-- Se tirar enctype ele para de funcionar, ele mostra o tipo de form -->
    <input type="hidden" name="MAX_FILE_SIZE" value="99999999"">
    <input type="file" name="arquivo[]" multiple="multiple"/>
    <br>
    <button type="submit" class="mt-3"   >Cadastrar</button>

</form>
</div>
<?php include("blades/footer.php"); ?>