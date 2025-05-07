<?php include 'path.php'; use App\Utils; ?>
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

  <title><?php echo $this->pageTitle; ?> - nerkodex</title>
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


  <main>

  <!-- ===== SECTION ===== -->
  <section class="main-post section-padding">
    <div class="container with-pad">
      
      <!-- ===== ABOUT TITLE ===== -->
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="caption text-center">
            <div class="gat">
              <a href="<?php url("/topics/" . $this->post['topic_slug']); ?>"><span><?php echo $this->post['topic_name']; ?></span></a>
            </div>

            <h1 class="fz-55 mt-30"><?php echo $this->post['title']; ?></h1>
            <p class="sub-title mt-15"><?php echo date_format(date_create($this->post['created_at']), 'M j') ?> &middot; <?php echo Utils::estimateReadTime($this->post['body']); ?> - Por Admin</p>
          </div>        
          <div class="main-img mb-80 mt-40">
              <img src="<?php echo BASE_URL . '/assets/images/featured_images/' . $this->post['post_image'] ?>" alt="" class="radius-5">
          </div>
        </div>
      </div>
      <!-- ===== ABOUT TITLE ===== -->


      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="cont">
            <div class="text mb-20">
              
              <!-- ===== BODY ===== -->
              <div class="d-flex align-items-center mb-20">
                <span class="fz-60 fw-500 main-color line-height-1 mr-10"></span>
                <div>
                  <?php echo html_entity_decode($this->post['body']); ?>
                </div>
              </div>
              <!-- ===== BODY ===== -->              

              <div class="info-area flex mt-20 pb-20 pt-20 bord-thin-top bord-thin-bottom">
                <!-- ===== TAGS ===== -->
                <div>
                  <div class="tags flex">
                    <div class="valign">
                        <span>Tags :</span>
                    </div>
                    <div>
                        <a href="#">Hacking</a>
                        <a href="#">Programação</a>
                    </div>
                  </div>
                </div>
                <!-- ===== TAGS ===== -->

                <!-- ===== SHARE ===== -->
                <div class="ml-auto">
                  <div class="share-icon flex">
                    <div class="valign">
                        <span>Share :</span>
                    </div>                      
                    <div>
                        <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                  </div>
                </div>
                <!-- ===== SHARE ===== -->
              </div>
              
              <!-- ===== AUTHOR ===== -->
              <div class="author-area mt-50">
                <div class="flex">
                  <div class="author-img mr-30">
                    <div class="img">
                      <img src="<?php echo BASE_URL . '/assets/images/avatar/' . $this->post['user_image']; ?>" alt="" class="circle-img">
                    </div>
                  </div>
                  <div class="cont valign">
                    <div class="full-width">
                      <h6 class="fw-500 mb-10"><?php echo $this->post['username']; ?></h6>
                      <p><?php echo $this->post['bio']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ===== AUTHOR ===== -->



              <br><br><br>
              <!-- ===== COMENTARIO ===== -->
              <div id="disqus_thread"></div>
              <script>
                  /**
                  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                  /*
                  var disqus_config = function () {
                  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                  };
                  */
                  (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.src = 'https://nerkodex-com.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <!-- ===== COMENTARIO ===== -->

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ===== SECTION ===== -->
  
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