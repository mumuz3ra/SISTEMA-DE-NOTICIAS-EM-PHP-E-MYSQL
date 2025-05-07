<?php use App\Utils; include 'path.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ===== LANG ===== -->
  <script>window.gtranslateSettings = {"default_language":"pt","languages":["pt","en","ja"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom","flag_style":"3d","alt_flags":{"en":"usa","pt":"brazil"}}</script>
  <script src="https://cdn.gtranslate.net/widgets/latest/flags.js"></script>
  <!-- ===== LANG ===== -->
  
  <!-- ===== PLUGINS ===== -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/plugins.css'; ?>">
  <!-- ===== STYLE ===== -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/style.css'; ?>">

  <!-- ===== FAVICON ===== -->
  <link rel="shortcut icon" href="<?php echo ASSETS_URL . '/images/favicon/_favicon.png'; ?>" type="image/x-icon">

  <title><?php echo $this->topic['name'] ?> - nerkodex</title>
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
  <section class="blog section-padding">
    <div class="container with-pad">

      <!-- ===== ABOUT TITLE TOPIC ===== -->
      <?php if (!$this->showingSearchResults): ?>
        <div class="sec-head mb-80">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <div class="d-inline-block">
                <div class="sub-title-icon d-flex align-items-center">
                  <span class="icon pe-7s-note"></span>       
                  <h6><?php echo $this->topic['name'] ?></h6>
                </div>
              </div>
              <p><?php echo $this->topic['description']; ?></p>      
            </div>
          </div>
        </div>
      <?php endif;?>
      <!-- ===== ABOUT TITLE TOPIC ===== -->

      <!-- ===== SEARCH ===== -->
      <div class="col-lg-12">
        <div class="sidebar">
          <div class="search-box">
            <form action="<?php url("/posts"); ?>" method="GET">
              <input type="text" name="search" placeholder="Buscasr...">
              <span class="icon pe-7s-search"></span>
            </form>
          </div>
        </div>
      </div>
      <!-- ===== SEARCH ===== -->

      <!-- ===== SEARCH RESULTS ===== -->
      <?php if ($this->showingSearchResults): ?>
        <h2><span style="font-weight: 400;">Resultados da pesquisa: </span><?php echo $_GET['search']; ?></h2>
      <?php endif;?>
      <!-- ===== SEARCH RESULTS ===== -->

      <div class="row lg-marg justify-content-center">  
          <?php foreach ($this->posts as $key => $post): ?>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="md-mb80">
                <div class="item pb-50 mb-50 bord-thin-bottom">
                  <div class="img">
                    <?php if ($post['post_image']): ?>
                      <a href="<?php url("/posts/" . $post['slug']); ?>">
                        <img src="<?php echo ASSETS_URL . '/images/featured_images/' . $post['post_image']; ?>" alt="">
                      </a>
                    <?php endif;?>
                  </div>
                  <div class="cont mt-30">
                    
                    <span class="date mb-10">
                      <?php if (isset($post['topic_name'])): ?>
                      <a href="<?php url("/topics/" . $post['topic_slug']); ?>"><?php echo $post['topic_name']; ?></a>
                      <?php else: ?>
                      <?php endif;?>
                    </span>

                    <span class="date mb-10"><?php echo Utils::estimateReadTime($post['body']); ?></span>
                    
                      <h4 class="mb-15">
                        <a class="title-justify" href="<?php url("/posts/" . $post['slug']); ?>"><?php echo $post['title']; ?></a>
                      </h4>
                  
                    <p class='text-respon'><?php echo Utils::getPostBodyPreview($post['body']); ?></p>
                  </div>
                </div>                           
              </div>
            </div>
          <?php endforeach;?>

        <!-- ===== LOAD MORE ===== -->
        <input type="hidden" class="topic-slug" value="<?php echo $this->topic['slug']; ?>" >
        <button class="input-btn load-more-btn">Carregar Mais!</button>
        <!-- ===== LOAD MORE ===== -->

      </div>

      <!-- ===== SIDEBAR ===== -->
      <?php include 'partials/public_sidebar.php';?>

    </div>
  </section>
  <!-- ===== SECTION ===== -->

  </main>


  <!-- ===== FOOTER ===== -->
  <?php include 'partials/footer.php';?>

  <!-- ===== PUBLIC ===== -->
  <script src="<?php echo ASSETS_URL . '/js/public.js' ?>"></script>

  <!-- ===== SCRIPTS ===== -->
  <script>
    let currentPage = 2;
    const topicSlug = document.querySelector('.topic-slug').value;
    loadMoreButton.addEventListener('click', function() {
      const morePostsUrl = `${baseUrl}/topics/${topicSlug}?page=${currentPage}`;
      fetchMorePosts(morePostsUrl);
      currentPage = currentPage + 1;
    });
  </script>
  <!-- ===== SCRIPTS ===== -->

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