<?php include 'path.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ===== LANG ===== -->
  <script>window.gtranslateSettings = {"default_language":"pt","languages":["pt","en","ja"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom","flag_style":"3d","alt_flags":{"en":"usa","pt":"brazil"}}</script>
  <script src="https://cdn.gtranslate.net/widgets/latest/flags.js" defer></script>
  <!-- ===== LANG ===== -->
  
  <!-- ===== STYLE ===== -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/login.css'; ?>">

  <!-- ===== FAVICON ===== -->
  <link rel="shortcut icon" href="<?php echo ASSETS_URL . '/images/favicon/_favicon.png'; ?>" type="image/x-icon">

  <title>Login - nerkodex</title>
</head>
<body>

  <!-- ===== LANG ===== -->
  <div class="gtranslate_wrapper gt_container--9uakgu"><div>
    
<!-- RECUPERAR SENHA -->
    <form action="<?php url("/send-reset-link") ?>" method="post">
        
        <div class="linha"></div>
        <h1>
          <a href="<?php url('/'); ?>" class="logo">
            <img src="<?php echo ASSETS_URL . '/images/logo/_logo.png'; ?>" class="image_logo">
          </a>
        </h1>

        <?php include ROOT_PATH . '/views/partials/form_errors.php';?>
        
        <div class="input-group">
            <!-- EMAIL -->
            <input type="email" name="email" id="email" placeholder="E-mail"/>
            <!-- EMAIL -->

            <!-- CHECK BOX / TERMOS POLÍTICA -->
            <input type="checkbox" name="checkbox" id="checkbox" checked/>
            <label for="checkbox">Ao recuperar a senha você concorda com nossos <a href="#" class="underline">Termos</a> e <a href="#" class="underline">Política de Privacidade.</a></label>
            <!-- CHECK BOX / TERMOS POLÍTICA -->

            <input type="submit" value="RECUPERAR" class="input-btn">
        </div>

        <p>Lembrou sua senha?<a href="<?php url('/login') ?>"> Login!</a><br></p>

    </form>
    <!-- RECUPERAR SENHA -->

</body>
</html>
