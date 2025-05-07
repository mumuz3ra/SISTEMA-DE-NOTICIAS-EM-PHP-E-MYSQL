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

  <title>Registrar - nerkodex</title>
</head>
<body>

    <!-- ===== LANG ===== -->
    <div class="gtranslate_wrapper gt_container--9uakgu"><div>
      
    <!-- CADASTRO -->
    <form action="<?php url("/register"); ?>" method="post" enctype="multipart/form-data">
        <div class="linha"></div>
        <h1>
          <a href="<?php url('/'); ?>" class="logo">
            <img src="<?php echo ASSETS_URL . '/images/logo/_logo.png'; ?>" class="image_logo">
          </a>
        </h1>

        <?php include ROOT_PATH . '/views/partials/form_errors.php';?>

        <div class="input-group">

            <div class="input-group avatar-input-group center">
              <input type="file" name="avatar" onChange="displayImage(this)" id="avatar-input" class="hide avatar-input" style="display:none;">
              <button type="button" class="change-avatar-btn" style="display:none;">
                <span>change</span>
              </button>
              <label for="avatar-input"></label>
            </div>
            
            <!-- USERNAME -->
                <input type="text" name="username" id="username" value="<?php echo $this->username; ?>" placeholder="Username"/>
            <!-- USERNAME -->

            <!-- EMAIL -->
                <input type="email" name="email" id="email" value="<?php echo $this->email; ?>" placeholder="E-mail"/>
            <!-- EMAIL -->   

            <!-- SENHA -->
                <input type="password" name="password" id="password" value="<?php echo $this->password; ?>" placeholder="Senha"/>
            <!-- SENHA -->

            <!-- SENHA REPETE-->
                <input type="password" name="passwordConf" id="passwordConf" value="<?php echo $this->passwordConf; ?>" placeholder="Senha confirmar"/>
            <!-- SENHA REPETE-->

            <!-- CHECK BOX / TERMOS POLÍTICA -->
                <input type="checkbox" name="checkbox" id="checkbox" checked/>
                <label for="checkbox">Ao se inscrever você concorda com nossos <a href="#" class="underline">Termos</a> e a nossa <a href="#" class="underline">Política de Privacidade.</a></label>
            <!-- CHECK BOX / TERMOS POLÍTICA -->

            <input type="submit" value="ENVIAR" class="input-btn">
            
        </div>  

        <p>já tem uma conta?<a href="<?php url('/login') ?>"> Entrar!</a></p>

    </form>
    <!-- CADASTRO -->

  <script>
    const changeAvatarButton = document.querySelector('.change-avatar-btn');
    const avatarInput = document.querySelector('.avatar-input');
    changeAvatarButton.addEventListener('click', function(e) {
      avatarInput.click();
    });

    function displayImage(e) {
      if (e.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          changeAvatarButton.style.backgroundImage = `url(${e.target.result})`;
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>

</body>

</html>