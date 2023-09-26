<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAiA</title>
  <link rel="stylesheet" href="views/css/style.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <?php include("models/conexao.php") ?>
</head>
<header>
  <nav class="fixed-top nav-header">
    <links id="links" class="links">
      <div class="line">
        <a href="#" class="px-5 a1">Sobre Nós</a>
      </div>
      <div>
        <a href="#" class="px-5 a2">INKonnect</a>
      </div>
      <div class="line2">
        <a href="#team" class="px-5 a3">Integrantes</a>
      </div>
    </links>
    <div id="divlogo">
      <img src="views/img/daialogo.png" class="logo" id="navbar-logo">
    </div>
  </nav>
</header>




<body>
  <main>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" id="img1">
        </div>
        <div class="carousel-item" id="img2">
        </div>
        <div class="carousel-item" id="img3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>








    <div class="group p-5">

      <div class="row justify-content-md-center">
        <div class="text col-lg-6 col-sm-4 col-md-5 bright-text">
          <h1>Sobre Nós</h1>
          <p class="h6" class="bright-text">
            Nós somos a DAiATech, um grupo de estudantes do curso de Desenvolvimento de Sistemas que está trabalhando
            duro em nosso projeto de TCC chamado INKonnect. Nosso objetivo é criar uma plataforma inovadora que
            promete
            revolucionar a forma como tatuadores e clientes se conectam. Composta pelos membros Diego Baltazar, Amanda
            Oliveira, Igor Leite e Arthur Fudali, todos do terceiro ano do ensino médio, nossa equipe está determinada
            a
            desenvolver uma solução tecnológica que simplifique o processo de encontrar o tatuador ideal e agendar uma
            sessão de tatuagem. Estamos mergulhados em pesquisas, estudando as necessidades dos usuários e explorando
            as
            melhores práticas de desenvolvimento para oferecer uma experiência excepcional. Acreditamos que nossa
            plataforma será um catalisador para a comunidade de tatuagens, conectando artistas talentosos e clientes
            apaixonados por tatuagens de maneira rápida, eficiente e confiável.
          </p>
        </div>
        <div class="img col-md-5 col-sm-5 align-self-center">
          <img src="views/img/kkk.jpeg" alt="q foto ruim kkkkk" class="img-fluid rounded-1">
        </div>
      </div>

    </div>

    <!-- Noticias -->
    <!-- teste -->
    <div id="blog">
      <div class="row pt-5 ps-5 pb-5">

        <h1 id="blogtt">Blog</h1>


        <div class="col-6 q1 rounded row ">
          <?php
          $query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN imagens on blog_blogimgs_codigo = id_imagem INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo group by blog_bloginfo_codigo desc limit 1;");

          while ($exibe = mysqli_fetch_array($query)) { ?>
            <div class="">

              <div class="row notiça" id=""> <!-- dentro da noticia -->
                <div class="card-image col-md-6 mb-2"> <!-- div imagem -->
                  <a href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                    <img src="cms/views/imgs/<?php echo $exibe[10] ?>" class="img-fluid rounded" id="imgblog">
                  </a>
                </div>
                <div class="card-corpo col-md-6 ">
                  <div class="card-title">
                    <a class="text-white text-decoration-none" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                      <?php echo $exibe[5] ?>
                    </a> <!-- titulo -->
                  </div>

                  <div class="card-sobre mb-2">
                    <a class="text-white" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                      <?php echo substr($exibe[6], 0, 50) . "..." ?>
                    </a> <!-- noticia -->
                  </div>
                </div>

              </div>
            </div>
          </div>
        <?php } ?>


        <div class="col-6 rounded-3 "> <!-- envolve -->
          <?php
          $query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN imagens on blog_blogimgs_codigo = id_imagem INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo group by blog_bloginfo_codigo desc limit 1,1;");


          while ($exibe = mysqli_fetch_array($query)) { ?>
            <div class="square q2 rounded mb-3  "> <!-- principal -->
              <div class="row m-3 mt-0"> <!-- dentro da noticia -->

                <div class="card-image col-md-6 mt-3 mb-2"> <!-- div imagem -->
                  <a href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>"><img
                      src="cms/views/imgs/<?php echo $exibe[10] ?>" class="img-fluid rounded" id="imgblog"></a>
                </div>

                <div class="card-corpo col-md-6 ">
                  <div class="card-title">
                    <a class="text-white text-decoration-none fw-bold"
                      href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                      <?php echo $exibe[5] ?>
                    </a> <!-- titulo -->
                  </div>

                  <div class="card-sobre mb-2">
                    <a class="text-white" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                      <?php echo substr($exibe[6], 0, 50) . "..." ?>
                    </a> <!-- noticia -->
                  </div>
                </div>

              </div>
            </div>
          <?php } ?>


          <div class="rounded-3 "> <!-- envolve -->
            <?php
            $query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN imagens on blog_blogimgs_codigo = id_imagem INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo group by blog_bloginfo_codigo desc limit 2,1;");
            while ($exibe = mysqli_fetch_array($query)) { ?>
              <div class="square q2 rounded mt-3  "><!-- principal -->
                <div class="row m-3 mt-0"> <!-- dentro da noticia -->

                  <div class="card-image col-md-6 mb-2"> <!-- div imagem -->
                    <a href="page.php?idb=<?php echo $exibe[0] ?>"><img src="cms/views/imgs/<?php echo $exibe[10] ?>"
                        class="img-fluid rounded" id="imgblog"></a>
                  </div>

                  <div class="card-corpo col-md-6 ">
                    <div class="card-title">
                      <a class="text-white text-decoration-none fw-bold" href="page.php?idb=<?php echo $exibe[0] ?>">
                        <?php echo $exibe[5] ?>
                      </a> <!-- titulo -->
                    </div>

                    <div class="card-sobre mb-2">
                      <a class="text-white" href="page.php?idb=<?php echo $exibe[0] ?>">
                        <?php echo substr($exibe[6], 0, 50) . "..." ?>
                      </a> <!-- noticia -->
                    </div>
                  </div>

                </div>
              </div>
            <?php } ?>
          </div>
        </div>

        <!-- 3a div -->


      </div>
    </div>


    <div id="INKonnect" class="p-5">
      <div class="row justify-content-md-center">
        <div class="img col-md-5 col-sm-5 align-self-center">
          <img src="views/img/logo.png" class="img-fluid logo">
        </div>
        <div class="text col-lg-6 col-sm-4 col-md-5 bright-text">
          <h1>INKonnect</h1>
          <p class="h6" class="bright-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora illum dolorum adipisci fugit, animi
            aspernatur ex sed veniam aliquam porro, cum ea dolor, voluptate distinctio reprehenderit omnis excepturi et
            veritatis architecto perspiciatis fugiat id! Veritatis debitis dignissimos consectetur exercitationem
            commodi vero quos minus mollitia voluptatibus doloribus quas, earum harum, aspernatur inventore officia
            facere praesentium architecto similique soluta natus beatae, maxime eum qui voluptate. Blanditiis, numquam
            non deleniti incidunt laudantium consequatur cumque perferendis ex qui sed alias nesciunt accusantium, culpa
            quasi sit delectus modi placeat! Odit corrupti, ut magnam qui magni reprehenderit, at quos provident
            officiis autem fuga quasi commodi, consectetur deserunt similique cupiditate laborum enim. Amet quos eius
            temporibus illo alias deserunt nobis impedit officiis at voluptatibus doloremque saepe a magnam quod,
            aperiam assumenda labore itaque reiciendis sequi sapiente. Perspiciatis voluptate laudantium nobis
            consectetur quidem, quisquam eaque beatae! Labore quis voluptatibus laboriosam unde reprehenderit voluptas
            mollitia suscipit aut deleniti sunt molestiae sint dolorem, sed omnis, aspernatur tenetur ducimus. Mollitia
            obcaecati unde corrupti, tempore officiis ducimus cupiditate id molestiae, deserunt maxime et iusto suscipit
            consequuntur doloremque vero. Perferendis eaque adipisci ipsam iure natus, minima excepturi ut placeat.
            Sequi ducimus minus sapiente corporis ea suscipit fugiat, quam error distinctio iste. Inventore, ipsam.
          </p>
        </div>

      </div>
    </div>
    <div id="team" class="integrantes">
      <div class="pt-5 ps-5 pb-5">
        <h1 class="ps-5" id="int">DAiA</h1>

        <div class="container col-6 col-xxl-12 px-4 py-4 text-center" id="caca">
          <div class="row" id="card-int">
            <div class="card me-5 ms-5 mt-3">
              <div class="card-info">
                <div class="card-avatar"><img src="views/img/dig.png" alt=""></div>
                <div class="card-title">Diego</div>
                <div class="card-subtitle">Back-end</div>
              </div>

              <ul class="card-social">
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://github.com/SouzaDiegoCl"><i class="bi bi-github icon"></i></a></li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.linkedin.com/in/diegosouzaperfil/"><i class="bi bi-linkedin icon"></i></a></li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.instagram.com/s0uza_diego/"><i class="bi bi-instagram icon"></i></a></li>
              </ul>
            </div>
            <div class="card me-5 ms-5 mt-3">
              <div class="card-info">
                <div class="card-avatar"><img src="views/img/amanda.png" alt=""></div>
                <div class="card-title">Amanda</div>
                <div class="card-subtitle">Web Developer</div>
              </div>

              <ul class="card-social">
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://github.com/amandazzoc"><i class="bi bi-github icon"></i></a></li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.linkedin.com/in/amanda-oliveira-970410232/"><i
                      class="bi bi-linkedin icon"></i></a>
                </li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.instagram.com/amandazzoc/?utm_medium=copy_link"><i
                      class="bi bi-instagram icon"></i></a></li>
              </ul>
            </div>
            <div class="card me-5 ms-5 mt-3">
              <div class="card-info">
                <div class="card-avatar"><img src="views/img/igor.png" alt=""></div>
                <div class="card-title">Igor</div>
                <div class="card-subtitle">Designer</div>
              </div>

              <ul class="card-social">
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://github.com/IgorLGomes"><i class="bi bi-github icon"></i></a></li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.linkedin.com/in/igor-gomes-ab581a214/"><i class="bi bi-linkedin icon"></i></a>
                </li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.instagram.com/igomsleit/"><i class="bi bi-instagram icon"></i></a></li>
              </ul>
            </div>
            <div class="card me-5 ms-5 mt-3">
              <div class="card-info">
                <div class="card-avatar"><img src="views/img/arthu.png" alt=""></div>
                <div class="card-title">Arthur</div>
                <div class="card-subtitle">Mobile Developer</div>
              </div>

              <ul class="card-social">
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://github.com/arthurfudali"><i class="bi bi-github icon"></i></a></li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.linkedin.com/in/arthurfudali/"><i class="bi bi-linkedin icon"></i></a></li>
                <li class="card-social__item"><a class="text-muted" target="_blank"
                    href="https://www.instagram.com/arthurfudali/"><i class="bi bi-instagram icon"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container" id="btn">
          <a  href="views/login.php">
            <button class="Btn mt-3 mb-3">

             <div class="sign"><svg viewBox="0 0 512 512">
                  <path
                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                  </path>
                </svg><span id="btnlogin">Login</span>
              </div> 
                
            </button>
          </a>
        </div>
      </div>
    </div>

  </main>
</body>
<footer>

</footer>
</div>
<script src="controllers/js/mobile-navbar.js"></script>
<!-- link bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></scSSript >
</html >