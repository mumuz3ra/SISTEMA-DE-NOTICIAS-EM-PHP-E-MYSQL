<?php

use App\PostCollection;
$bestOfCollections = PostCollection::getBestCollections();
?>

<nav class="navbar navbar-chang navbar-expand-lg">
    <div class="container position-re">
        <div class="row">
            <div class="col-lg-3 col-6 order1">
                <div class="bord">
                    <!-- Logo -->
                    <a class="logo icon-img-70" href="<?php url('/'); ?>">
                        <img src="<?php echo ASSETS_URL . '/images/logo/_logo.png'; ?>" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order3">
                <div class="bg">
                    <!-- navbar links -->
                    <div class="full-width">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php url('/'); ?>"><span
                                        class="rolling-text">HOME</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php url("/about"); ?>"><span
                                        class="rolling-text">SOBRE</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php url("/team"); ?>"><span
                                        class="rolling-text">TIME-CS2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php url("/posts"); ?>"><span
                                        class="rolling-text">POSTS</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php url("/login"); ?>"><span
                                        class="rolling-text">LOGIN</span></a>
                            </li>

                            <?php if (isset($_SESSION['id'])): ?>


                              

                            <ul>
                              <?php if (isset($_SESSION['role_id']) && !empty($_SESSION['role_id'])): ?>
                                <li><a href="<?php url("/dashboard"); ?>">DASHBOARD</a></li>
                              <?php endif;?>
                                <li><a href="<?php url("/logout"); ?>">LOGOUT</a></li>
                                </ul>
                            <?php else: ?>
                            
                            <!-- 
                            <li class="nav-item">
                                <a class="nav-link" href="<?php url("/login"); ?>"><span
                                        class="rolling-text">LOGIN</span></a>
                            </li>
                            -->

                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 order2">
                <div class="bord d-flex justify-content-end">
                    <ul class="social d-flex rest">
                        <li>
                            <a target="_blank" href="https://www.instagram.com/nerkodex/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="#"><i class="fab fa-twitch"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="#"><i class="fab fa-tiktok"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://x.com/nerkodex"><i class="fab fa-twitter"></i></a>
                        </li>                
                    </ul>
                    <button class="navbar-toggler" type="button">
                        <span class="icon-bar"><i class="fas fa-bars"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>