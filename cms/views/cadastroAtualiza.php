<?php include("blades/header.php"); ?>
<?php include("../models/conexao.php"); ?>
<link rel="stylesheet" href="css/style.css">
<div class="container  pt-2 mt-5 p-3 rounded-2 shadow"  id="main">

<?php
$varIdPost = $_GET["bloginfo_codigo"];


$query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN imagens on blog_blogimgs_codigo = id_imagem INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo where blog_codigo = $varIdPost ORDER BY blog_codigo DESC"); 

while ($exibe = mysqli_fetch_array($query)) {
?>
    <h3 class="p-3 font" > Atualizar</h3>
    <form action="../controllers/atualizar.php?blogCodigo=<?php echo $exibe[1]?>" method="post">
        
      
        <label class="form-label font">Título Da Noticia</label>
        <input type="hidden" name="fk_codigoImagem" value="<?php echo $exibe[11] ?>">
        <input class="form-control" type="text" name="blogTitulo" value="<?php echo $exibe[5]?>"> 
        <label class="form-label font mt-3">Conteúdo</label>
        <textarea name="blogCorpo" class="form-control" cols="30" rows="10"><?php echo $exibe[6]?></textarea>
        <label class="form-date font mt-3" >Data</label> 
        <input type="date" name="blogData"><br> 
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
        <input  class="mt-3" type="file" name="arquivo[]" multiple="multiple" />
        <button type="submit" class="mt-3">Atualizar</button>
    </form>

<?php } ?>
</div>
<?php include("blades/footer.php"); ?>