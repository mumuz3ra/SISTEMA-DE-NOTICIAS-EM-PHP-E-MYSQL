<?php use App\Utils; include 'path.php';

$firstCollection = isset($this->collections[0]) ? $this->collections[0] : null;
$secondCollection = isset($this->collections[1]) ? $this->collections[1] : null;
$thirdCollection = isset($this->collections[2]) ? $this->collections[2] : null;
$fourthCollection = isset($this->collections[3]) ? $this->collections[3] : null;

?>
<?php
function displayPostCollection($collection) {
  if (!isset($collection)) {
      return null;
  }
  ?>

    <!-- ===== POST ALL ===== -->
    <section class="blog section-padding">
      <div class="container with-pad">  
        
        <!-- ===== TITLE COLLECTION ===== -->
        <div class="sec-head text-center mb-80 wow fadeIn">
          <div class="d-inline-block">
            <div class="sub-title-icon d-flex align-items-center">
              <span class="icon pe-7s-note"></span>
              <h6><a href="<?php url("/collection/" . $collection['slug']); ?>">Ver Mais</a></h6>
            </div>
          </div>
          <h3><?php echo $collection['title']; ?></h3>
        </div>
        <!-- ===== TITLE COLLECTION ===== -->

        <!-- ===== POSTS ===== -->
        <div class="row justify-content-center">
          <?php foreach ($collection['posts'] as $post): ?>   
            <div class="col-12 col-sm-12 col-lg-4 wow fadeIn" data-wow-delay=".2s">
              <div class="item mb-50 bord">
                
                <div class="img">
                  <a href="<?php url("/posts/" . $post['slug']); ?>">
                    <img src="<?php echo ASSETS_URL . '/images/featured_images/' . $post['post_image']; ?>" alt="">
                  </a>
                </div>

                <div class="cont">
                  <span class="date mb-10">
                    <?php if (isset($post['topic_name'])): ?>
                      <a href="<?php url("/topics/" . $post['topic_slug']); ?>"><?php echo $post['topic_name']; ?></a>
                    <?php else: ?>
                    <?php endif;?>
                  </span>
                  <span class="date mb-10"><?php echo Utils::estimateReadTime($post['body']); ?></span>
                  <h4>
                    <a class="title-justify" href="<?php url("/posts/" . $post['slug']); ?>"><?php echo $post['title']; ?></a>
                  </h4>
                  <p><?php echo Utils::getPostBodyPreview($post['body']); ?></p>
                  <a href="<?php url("/posts/" . $post['slug']); ?>" class="mt-30 underline sub-title ls1">
                    <span>ler Mais</span>
                  </a>
                </div>

              </div>
            </div>
          <?php endforeach;?>
        </div>
        <!-- ===== POSTS ===== -->
        
      </div>
    </section>
    <!-- ===== POST ALL ===== -->

  <?php
}
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

  <title><?php echo $this->pageTitle; ?></title>
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

  <!-- ===== SECTION ===== -->
  <section class="header-crev bord-thin-bottom" data-scroll-index="0">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 valign">
          <div class="content">
            <h6 class="sub-title mb-30 fz-14 opacity-7">Hacking, Programação & Esports(FPS)</h6>
            <h1><br> <span class="main-color">Nerkodex</span></h1>
            <div class="text mt-30">
              <p>Aqui você vai ver tudo relacionado a hacking, programação, como desenvolver 
                um sistema ou utilizar uma ferramenta, além de alguns projetos desenvolvidos
                 por mim. Também vai achar conteúdos sobre o nosso time de Counter-Strike, com dicas,
                  estratégias e momentos dos bastidores das nossas competições. Sinta-se em casa :
              </p>
            </div>
           <div class="mt-50">
               <!--<a href="#0" class="butn butn-md butn-bg bg-white text-dark radius-5">
                <span>.</span>
              </a>
              <a href="#0" class="butn butn-md butn-bord radius-5 ml-15" data-scroll-nav="5">
                <span>.</span>
              </a> -->
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="img-author">
            <img src="<?php echo ASSETS_URL . '/images/logo/_logo_home.png'; ?>" alt="">                           
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ===== SECTION ===== -->

  <!-- ===== SECTION ===== -->
  <section class="blog section-padding">
    <div class="container with-pad">
      
      <div class="sec-head mb-50">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="d-inline-block">
              <div class="sub-title-icon d-flex align-items-center">
                <span class="icon pe-7s-note"></span>
                <h6>Posts</h6>
              </div>
            </div>
            <h3></h3>
          </div>
        </div>
      </div>
      
      <!-- ===== POST DESTAQUE ===== -->
      <div class="row lg-marg justify-content-center">
        <div class="col-lg-8">
          <div class="md-mb80">
            <div class="item pb-50 mb-50 bord-thin-bottom">
              
              <div class="img">
                <a href="<?php url("/posts/" . $this->featuredPost['slug']); ?>">
                  <img src="<?php echo ASSETS_URL . '/images/featured_images/' . $this->featuredPost['post_image']; ?>" alt="">
                </a>
              </div>
              
              <div class="cont mt-30">                                                    
                <?php if (isset($this->featuredPost['topic_name'])): ?>
                  <a href="<?php url("/topics/" . $this->featuredPost['topic_slug']); ?>">
                    <span class="date mb-10">
                      <?php echo $this->featuredPost['topic_name']; ?>
                    </span>
                  </a>
                <?php else: ?>
                <span></span>
                <?php endif;?>
                <span class="date mb-10"><?php echo $this->featuredPost['read_time']; ?></span>
                <h4 class="mb-15">
                    <a class="title-justify" href="<?php url("/posts/" . $this->featuredPost['slug']); ?>"><?php echo $this->featuredPost['title']; ?></a>
                </h4>
                <p><?php echo $this->featuredPost['preview']; ?></p>
                
                <a href="<?php url("/posts/" . $this->featuredPost['slug']); ?>" class="mt-30 underline sub-title ls1">
                  <span>ler Mais</span>
                </a>

              </div>

            </div>                           
          </div>
        </div>
      </div>
      <!-- ===== POST DESTAQUE ===== -->

    </div>
  </section>
  <!-- ===== SECTION ===== -->






  <!-- ===== POSTS COLLECTION CAROUSEL ===== -->
  <?php echo displayPostCollection($firstCollection); ?>

  <!-- ===== TEAM ===== -->
  <?php include ROOT_PATH . '/views/partials/team_nav.php';?>

  <!-- ===== POSTS COLLECTION CAROUSEL ===== -->
  <?php echo displayPostCollection($secondCollection); ?>

  <!-- ===== SIDEBAR ===== -->
  <?php include 'partials/public_sidebar.php';?>

  <!-- ===== POSTS COLLECTION CAROUSEL ===== -->
  <?php echo displayPostCollection($thirdCollection); ?>

  <!-- ===== POSTS COLLECTION CAROUSEL ===== -->
  <?php echo displayPostCollection($fourthCollection); ?>

  <!-- ===== BRANDS ===== -->
  <?php include 'partials/tools.php';?>
        
  </main>


  <!-- ===== FOOTER ===== -->
  <?php include 'partials/footer.php';?>


  <!-- ===== JQUERY ===== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- ===== JQUERY ===== -->
  <script src="<?php echo ASSETS_URL . '/js/jquery-3.6.0.min.js' ?>"></script>
  <!-- ===== JQUERY MIGRATE ===== -->
  <script src="<?php echo ASSETS_URL . '/js/jquery-migrate-3.4.0.min.js' ?>"></script> 
  <!-- ===== PLUGING ===== -->
  <script src="<?php echo ASSETS_URL . '/js/plugins.js' ?>"></script>
  <!-- ===== SCRIPTS ===== -->
  <script src="<?php echo ASSETS_URL . '/js/scripts.js' ?>"></script>
  <!-- ===== PUBLIC ===== -->
  <script src="<?php echo ASSETS_URL . '/js/public.js' ?>"></script>

</body>
</html>