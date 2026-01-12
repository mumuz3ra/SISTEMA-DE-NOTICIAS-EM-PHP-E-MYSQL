<?php use App\Utils; include 'path.php';

$firstCollection = isset($this->collections[0]) ? $this->collections[0] : null;
$secondCollection = isset($this->collections[1]) ? $this->collections[1] : null;
$thirdCollection = isset($this->collections[2]) ? $this->collections[2] : null;
$fourthCollection = isset($this->collections[3]) ? $this->collections[3] : null;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== LANG ===== -->
    <script>window.gtranslateSettings = {"default_language":"pt","languages":["pt","en","ja"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom","flag_style":"3d","alt_flags":{"en":"usa","pt":"brazil"}}</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/flags.js" defer></script>
    <!-- ===== LANG ===== -->
  
    <!-- ===== PLUGINS ===== -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/plugins.css'; ?>">
    <!-- ===== STYLE ===== -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/style.css'; ?>">

    <!-- ===== FAVICON ===== -->
    <link rel="shortcut icon" href="<?php echo ASSETS_URL . '/images/favicon/_favicon.png'; ?>" type="image/x-icon">

  <title>About - nerkodex</title>
</head>
<body>

    <!-- ===== LOADER ===== -->
    <?php include ROOT_PATH . '/views/partials/loader.php';?>
    <!-- ===== SCROLL ===== -->
    <?php include ROOT_PATH . '/views/partials/scroll.php';?>
    <!-- ===== HEADER ===== -->
    <?php include ROOT_PATH . '/views/partials/public_navbar.php';?>
    <!-- ===== MESSAGE ===== -->
    <?php include ROOT_PATH . '/views/partials/message.php';?>
    <!-- ===== CURSOR ===== -->
    <div class="cursor"></div>
    <!-- ===== LANG ===== -->
    <div class="gtranslate_wrapper gt_container--9uakgu"><div>

    <main class="pt-80">


        <!-- ==================== Start About ==================== -->

        <section class="about section-padding">
            <div class="container with-pad">
                <div class="row lg-marg">
                    <div class="col-lg-5 valign">
                        <div class="profile-img">
                            <div class="img">
                                <img src="<?php echo ASSETS_URL . '/images/logo/_logo_home.png'; ?>" alt="">
                            </div>
                            <span class="icon">
                                <img src="<?php echo ASSETS_URL . '/images/about/icon1.png'; ?>" alt="">
                            </span>
                            <span class="icon">
                                <img src="<?php echo ASSETS_URL . '/images/about/icon2.png'; ?>" alt="">
                            </span>
                            <span class="icon">
                                <img src="<?php echo ASSETS_URL . '/images/about/icon3.png'; ?>" alt="">
                            </span>
                            <span class="icon">
                                <img src="<?php echo ASSETS_URL . '/images/about/icon4.png'; ?>" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-7 valign">
                        <div class="cont">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-gleam"></span>
                                <h6>Sobre</h6>
                            </div>
                            <div class="text">
                                <h4 class="mb-30">Aqui conectamos a paixão pela <span class="main-color">tecnologia</span> e pelo mundo dos <span class="main-color">sports(FPS)</span>.                              
                                </h4>
                                <p>Nosso objetivo é entregar experiências digitais que atendem às necessidades de cada cliente, além de desenvolver projetos digitais incríveis. Contamos com nossos times em CS2 e Valorante, participando de campeonatos e eventos, trazendo o espírito competitivo e de excelência para o nosso trabalho.</p>

                                <div class="feat mt-30">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="item mb-15">
                                                <h6 class="sub-title ls1"><span class="fz-13 mr-10 main-color"><i
                                                            class="fas fa-check"></i></span> Web Design</h6>
                                            </div>
                                            <div class="item sm-mb15">
                                                <h6 class="sub-title ls1"><span class="fz-13 mr-10 main-color"><i
                                                            class="fas fa-check"></i></span> Web Developer</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="item mb-15">
                                                <h6 class="sub-title ls1"><span class="fz-13 mr-10 main-color"><i
                                                            class="fas fa-check"></i></span> Sports (FPS)
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="info mt-50">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="item d-flex align-items-center sm-mb30">
                                                <div class="mr-15">
                                                    <span class="icon pe-7s-mail"></span>
                                                </div>
                                                <div>
                                                    <span class="opacity-7 mb-5">Email</span>
                                                    <h6>gmail@gmail.com</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="item d-flex align-items-center">
                                                <div class="mr-15">
                                                    <span class="icon pe-7s-call"></span>
                                                </div>
                                                <div>
                                                    <span class="opacity-7 mb-5">Telefone</span>
                                                    <h6>+55 61 9xxxx-xxxx</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End About ==================== -->



        <!-- ==================== Start Skills ==================== -->

        <section class="skills section-padding pt-0">
            <div class="container with-pad">
                <div class="sec-head mb-80">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-gym"></span>
                                <h6>Skills</h6>
                            </div>
                            <h3>Habilidades da equipe.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="item mb-30">
                            <div class="d-flex align-items-center mb-30">
                                <div class="mr-30">
                                    <div class="img icon-img-40">
                                        <img src="<?php echo ASSETS_URL . '/images/about/s2.png'; ?>" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h6 class="fz-18">Development</h6>
                                </div>
                            </div>
                            <div class="skill-progress">
                                <span class="progres" data-value="90%"></span>
                            </div>
                            <span class="value">90%</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="item md-mb30">
                            <div class="d-flex align-items-center mb-30">
                                <div class="mr-30">
                                    <div class="img icon-img-40">
                                        <img src="<?php echo ASSETS_URL . '/images/about/s3.png'; ?>" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h6 class="fz-18">Graphic Design</h6>
                                </div>
                            </div>
                            <div class="skill-progress">
                                <span class="progres" data-value="85%"></span>
                            </div>
                            <span class="value">85%</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="item md-mb30">
                            <div class="d-flex align-items-center mb-30">
                                <div class="mr-30">
                                    <div class="img icon-img-40">
                                        <img src="<?php echo ASSETS_URL . '/images/about/s4.png'; ?>" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h6 class="fz-18">WordPress</h6>
                                </div>
                            </div>
                            <div class="skill-progress">
                                <span class="progres" data-value="78%"></span>
                            </div>
                            <span class="value">85%</span>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>

        <!-- ==================== End Skills ==================== -->


    </main>

    <!-- ===== Footer ===== -->
    <?php include 'partials/footer.php';?>
    <!-- ===== Footer ===== -->

   
    <!-- ===== JQUERY ===== -->
    <script src="<?php echo ASSETS_URL . '/js/jquery-3.6.0.min.js' ?>"></script>
    <!-- ===== JQUERY MIGRATE ===== -->
    <script src="<?php echo ASSETS_URL . '/js/jquery-migrate-3.4.0.min.js' ?>"></script> 
    <!-- ===== PLUGING ===== -->
    <script src="<?php echo ASSETS_URL . '/js/plugins.js' ?>"></script>
    <!-- ===== SCRIPTS ===== -->
    <script src="<?php echo ASSETS_URL . '/js/scripts.js' ?>"></script>

</body>
</html>