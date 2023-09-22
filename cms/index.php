<?php include("models/conexao.php") ?>
<?php include("views/blades/header.php");
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='../index.php';</script>";
}
?>
<link rel="stylesheet" href="views/css/style.css">
<div class="container pt-2 mt-5 p-3 rounded-2 shadow" id="main">
    <p class="h3 m-3 font" >Blog</p>
    <div class="row">
        <a class="m-3 col-2" id="btn" href="views/cadastro.php">
            <button class="full-rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125"
                        stroke="#fffffff" stroke-width="2"></path>
                    <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#fffffff" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span>Criar Post</span>
                <div class="full-rounded"></div>
            </button>
        </a>
        <a class="m-3 col-3" id="btn" href="views/cadastroUser.php">
            <button class="full-rounded">
                <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor"
                        height="24" fill="none" class="svg">
                        <line y2="19" y1="5" x2="12" x1="12"></line>
                        <line y2="12" y1="12" x2="19" x1="5"></line>
                    </svg></span>
                <span>Cadastrar Usuário</span>
            </button>
        </a>
        <a class="m-3 col-6 " id="btn" href="controllers/logoff.php">
            <button class="full-rounded buttonsair">
                <div class="sign"><svg viewBox="0 0 512 512">
                        <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                        </path>
                    </svg></div>
                <span>Sair</span>
                <div class=" full-rounded"></div>
            </button>
        </a>
    </div>
    <table class="table table-bordered table-striped table-hover mt-3" id="table" width="500px">
        <tr>
            <td>Imagens</td>
            <td>Noticia</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

        <?php

        $query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN imagens on blog_blogimgs_codigo = id_imagem INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo group by blog_bloginfo_codigo;");
        while ($exibe = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><img class="rounded mx-auto d-block " src="views/imgs/<?php echo $exibe[10] ?>" width="200px" alt="">
                </td>
                <td>
                    <a class="link-underline-opacity-0 click" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                    <h3 class="title">
                        <?php echo $exibe[5] ?>
                    </h3>
                    Criada por <b>
                        <?php echo $exibe[12] ?>
                    </b> em
                    <?php echo $exibe[7] ?>
                    <hr>
                    <?php echo substr($exibe[6], 0, 250) . "..." ?>
                    </a>
                </td>
                <td>
                <div class="row m-1">
                    <a class="btnedit" href="views/cadastroAtualiza.php?bloginfo_codigo=<?php echo $exibe[0] ?>">
                    <svg class="svg-icon col" fill="none" height="24" viewBox="0 0 24 24" width="24"xmlns="http://www.w3.org/2000/svg">
                            <g stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                <path d="m20 20h-16"></path>
                                <path clip-rule="evenodd"
                                    d="m14.5858 4.41422c.781-.78105 2.0474-.78105 2.8284 0 .7811.78105.7811 2.04738 0 2.82843l-8.28322 8.28325-3.03046.202.20203-3.0304z"
                                    fill-rule="evenodd"></path>
                            </g>
                    </svg>
                    <div class="col">Editar</div></a>
                </td>
                <td>
                    <input type="hidden" name="excluir_imagem" value="<?php echo $exibe[10]; ?>">
                    <div class="row m-1">
                    <a class="btn" name="deletar_imagem"
                        href="controllers/deletar.php?bloginfo_codigo=<?php echo $exibe[0]; ?>"> 
                        <div class=" col icon-wrapper">
                            <svg class="icon" width="25px" height="23px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="col">Excluir</div></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php include("views/blades/footer.php"); ?>