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

    <title>Time - nerkodex</title>
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

        <!-- ===== TEAM ===== -->
        <?php include ROOT_PATH . '/views/partials/team_nav.php';?>

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