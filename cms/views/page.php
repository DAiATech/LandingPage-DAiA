<?php include("../models/conexao.php") ?>
<?php include("blades/header.php"); ?>
<link rel="stylesheet" href="css/style.css">


<div class="container pt-2 mt-5 p-3 rounded-2 shadow" id="main">
    <table class="table table-bordered table-striped" width="800">
        <?php
        $varblogCodigo = $_GET["blog_codigo"];

        $query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo 
            INNER JOIN imagens on blog_blogimgs_codigo = id_imagem 
            INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo 
            where blog_codigo = $varblogCodigo;");

        while ($exibe = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><img src="imgs/<?php echo $exibe[10] ?>" width="200px" alt=""></td>
                <td>
                    <h3>
                        <?php echo $exibe[5] ?>
                    </h3>
                    Criada por <b>
                        <?php echo $exibe[13] ?>
                    </b> em
                    <?php echo $exibe[7] ?>
                    <hr>
                    <?php echo ($exibe[6]) ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        <?php } ?>
        
    </table>
    <a class="m-3 col-3" id="btn" href="../index.php">
            <button class="full-rounded">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
</svg>
                    
                <span>Voltar</span>
            </button>
        </a>
</div>