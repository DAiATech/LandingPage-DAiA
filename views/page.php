<?php
include("../models/conexao.php")
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog</title>
</head>

<body class="bgbody">
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
                    <td><img src="../cms/views/imgs/<?php echo $exibe[10] ?>" width="200px" alt=""></td>
                    <td>
                        <h3>
                            <?php echo $exibe[5] ?>
                        </h3>
                        Criada por <b>
                            <?php echo $exibe[12] ?>
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
            <button class="full-rounded btnpage">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75">
                    </path>
                </svg>

                <span>Voltar</span>
            </button>
        </a>
    </div>
</body>

</html>