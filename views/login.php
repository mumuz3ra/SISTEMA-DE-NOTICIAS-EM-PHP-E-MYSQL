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

      <!-- LOGIN -->
      <form action="<?php url('/login'); ?>" method="post">
        
        <div class="linha"></div>
        <h1>
          <a href="<?php url('/'); ?>" class="logo">
            <img src="<?php echo ASSETS_URL . '/images/logo/_logo.png'; ?>" class="image_logo">
          </a>
        </h1>

        <?php include ROOT_PATH . '/views/partials/form_errors.php';?>

        <div class="input-group">

            <!-- EMAIL -->
            <input type="text" name="username" id="username" value="<?php echo $this->username; ?>" placeholder="E-mail ou Username"/>
            <!-- EMAIL -->

            <!-- SENHA -->
            <input type="password" name="password" id="password" value="<?php echo $this->password; ?>" placeholder="Senha"/>
            <!-- SENHA -->

            <!-- CHECK BOX / TERMOS POLÍTICA -->
            <input type="checkbox" name="remember-me" id="remember-me" checked/>
            <label for="checkbox">Lembrar-me</label>
            <!-- CHECK BOX / TERMOS POLÍTICA -->

            <input type="submit" value="ENTRAR" class="input-btn">

        </div>

        <p>Somente usuários autorizados.<a href="<?php url("/"); ?>"> Voltar!</a><br></p>

      </form>
      <!-- LOGIN -->

</body>
</html>