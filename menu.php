<nav class="navbar navbar-default custombar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <a href="index.php"><img src="img/logo_steam.png"class="img-responsive customlogo" alt="Responsive image"></a>
            </ul>
            <ul class="nav navbar-nav navbar-right custommenu">
              <li><a href="index.php">ACCUEIL</a></li>
              <li><a href="shop.php">MAGASIN</a></li>
              <li><a href="#">COMMUNAUTÉ</a></li>
                <?php
                    if (isset($_SESSION["id_joueurs"])){
                        //éléments du menu seulement si on est connecté
                        ?>
                        <li><a href="profil.php">PROFIL</a></li>
                        <?php
                        
                    }
              ?>
              <li><a href="#">SUPPORT</a></li>
              <div class="nav navbar-nav customlog">
                  <?php
                    if (isset($_SESSION["id_joueurs"])){
                        //éléments du menu seulement si on est connecté
                        ?>
                        <li><a href="logout.php">LOG OUT</a></li>
                        <?php
                        
                    }
                    else{
                        //éléments du menu si on est pas connecté
                        ?>
                        <li><a href="login.php">LOG IN</a></li>
                        <li><a href="register.php">REGISTER</a></li>
                        <?php
                    }
                ?>
                
              </div>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>