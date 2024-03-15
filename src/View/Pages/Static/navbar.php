<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/archiweb_2024_projets_gr02-main/webapp/" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Yummy<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">

        <ul>
          <li class="dropdown"><a href="#"><span>Calendrier et suivi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/archiweb_2024_projets_gr02-main/webapp/consommations">Ma consommation</a></li>
              <li><a href="/archiweb_2024_projets_gr02-main/webapp/calendrier">Mon calendrier de repas</a></li>
              <li><a href="/archiweb_2024_projets_gr02-main/webapp/calendrier">Ma liste de course</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Recettes</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/archiweb_2024_projets_gr02-main/webapp/search">Rechercher recette</a></li>
              <li><a href="/archiweb_2024_projets_gr02-main/webapp/searchFrigo">Recettes à partir du frigo</a></li>
              <li><a href="/archiweb_2024_projets_gr02-main/webapp/tendance">Recettes tendances</a></li>
            </ul>
          </li>

          <li><a href="/archiweb_2024_projets_gr02-main/webapp/ajouterRecette">Publier recette</a></li>
          <li><a href="/archiweb_2024_projets_gr02-main/webapp/contact">Contact nutritionniste</a></li>
        </ul>
      </nav><!-- .navbar -->

      <?php if((isset($_SESSION['connexion']) && $_SESSION['connexion']==false) || !isset($_SESSION['connexion']))
              echo '<a class="btn-book-a-table" href="/archiweb_2024_projets_gr02-main/webapp/login"><i class="bi bi-box-arrow-in-right"></i> Log in</a>';
            else
              echo '<a class="btn-book-a-table" href="/archiweb_2024_projets_gr02-main/webapp/logout"><i class="bi bi-box-arrow-in-left"></i> Log out</a>';
      ?>
    
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->