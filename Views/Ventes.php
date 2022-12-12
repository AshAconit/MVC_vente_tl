<?php 
    include "Models/Database.php" ; 

    $db = new Database() ;
    $resImages = $db->select("images")
                    ->where("idimages","=")
                    ->execute([1]) ;

    $resProduits = $db->select("images")
                      ->where("typeimages", "=")
                      ->execute(["ventes"]) ;

?>

  <!-- header ici c'est l'entete du project -->
  <div class="header-bro">
    <div id="app">

      <notifications id="notificationsBar"> </notifications>
      <div class="loader">
        <div id="lottie" class="lottie"></div>
      </div>
      
      <div class="position-relative">
        <header id="header" class="only-header">
          
          <!-- navigation desktop -->
          
          <nav class="nav nav-desktop">
                
            <div class="left-menu-block d-inline-flex align-items-center">
                  <button class="toggle-menu mr-5">
                    <span></span>
                    <div class="menu-text">Menu</div>
                  </button>
                  <div class="px-2">
                    <div class="menu-sep-big mx-4"></div>
                  </div>
                  <div class="menu-lang position-relative d-none d-lg-flex align-items-center pt-1">
                    <span class="first-lang"><a href="#">EN</a></span>
                    <span class="menu-sep">|</span>
                    <span class="second-lang active"><a href="#">FR</a></span>
                  </div>
            </div>
                
            <div class="center-menu-block flex-grow-1">
              <a href="#" class="menu-logo">
                <img alt="logo-1" src="<?php echo URL ;?>Publics/Images/icones/logo-tranonjaka-label-rond-image.svg"/>
              </a>
            </div>
                
            <div class="right-menu-block d-inline-flex align-items-center">
              <a class="shop-text" href="#">
                <div class="img">
                  <img alt="logo-2" src="<?php echo URL ;?>Publics/Images/icones/shopping-bag.png"/>
                </div>
                  <span>Achat</span>
              </a>

            <div class="px-2">
              <div class="menu-sep-big mx-4"></div>
              </div>
                  
            <!-- utilisateur-menu -->
            <div class="user-cart-block d-inline-flex align-items-center">
                    <user-menu :user="null" :is-logged="true" :lang='"it"'></user-menu>
                    <span class="menu-sep pl-1 mt-1 mx-3">|</span>
                    <cart-menu-icon cart-link="#" shop-link="#" init-counter="1"></cart-menu-icon>
                </div>
            </div>
          </nav>
          <!-- fin-navigation-desktop -->

          <!-- debut-navigation-mobile -->
          <nav class="nav nav-mobile">
            
            <div class="d-flex align-items-center mobile-flex">
                
                <div class="left-menu-block d-inline-flex align-items-center">
                  <button class="toggle-menu mr-0 mr-md-5">
                    <span></span>
                    <div class="menu-text">Menu</div>
                  </button>
                
                <div class="menu-lang position-relative d-none d-md-flex align-items-center pt-0 mt-0 ml-md-3 pl-md-3 mb-0 pt-1">
                  <span class="first-lang"><a href="#">EN</a></span>
                  <span class="menu-sep mx-2">|</span>
                  <span class="second-lang active"><a href="#">FR</a></span>
                </div>
                
                <div class="d-flex d-md-none align-items-center">
                  <span class="menu-sep pl-0 mt-1 ml-1 mr-2 d-md-none">|</span>
                  <user-menu :user="null" class="mr-2" :is-logged="false" :lang='"it"'></user-menu>
                </div>
              </div>
              
              <div class="d-flex justify-content-center flex-grow-1">
                <a href="#" class="menu-logo d-inline-flex w-auto position-relative"></a>
              </div>
              <div class="right-menu-block d-inline-flex align-items-center mr-n2">
                <div class="d-flex">
                  <a class="shop-text" href="#">
                    <div class="img">
                      <img alt="icona" src="<?php echo URL ;?>Publics/Images/icones/bag.png" />
                    </div>
                    <span>Shop</span>
                  </a>
                  <span class="menu-sep pl-0 mt-1 ml-0 mr-2 pr-md-2 ml-sm-2 ml-md-4 pl-md-3 d-flex align-items-center">|</span>
                </div>
                <div class="user-cart-block d-inline-flex align-items-center pr-1">
                  <div class="d-none d-md-inline-flex">
                    <user-menu :user="null" :is-logged="false" :lang='"it"'></user-menu>
                  </div>
                  <span class="menu-sep pl-1 mt-1 mx-3 d-none d-md-inline-flex">|</span>
                  <cart-menu-icon cart-link="#" shop-link="#" init-counter="0"></cart-menu-icon>
                </div>
              </div>
            </div>

          </nav>
        </header>
      <!-- fin d'entete du project -->

        <!-- Menu -->
        <div id="menu" class="menu">
            <header id="header"></header>
                <div class="four-div row hide991 text-uppercase w-100">
                    <div class="four-div-element col-md-3 align-items-center d-flex">
                        <div class="four-div-element-inside w-100">
                            <div class="img-holder" style=" background: url(<?php echo URL ;?>Publics/Images/frontend/marchesi.jpg) center center no-repeat; background-size: cover;"></div>
                            <div class="img-text">
                                <a href="#">Photographie</a>
                            </div>
                        </div>
                    </div>

                    <div class="four-div-element col-md-3 align-items-center d-flex">
                        <div class="four-div-element-inside w-100">
                            <div class="img-holder" style=" background: url(<?php echo URL ;?>Publics/Images/frontend/m-d.jpg) right 29% center no-repeat; background-size: cover;"></div>
                            <div class="img-text">
                                <a href="#">Evenement</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="four-div-element col-md-3 align-items-center d-flex">
                        <div class="four-div-element-inside w-100">
                            <div class="img-holder" style=" background: url(<?php echo URL ;?>Publics/Images/frontend/estate.jpg) left 14% center no-repeat; background-size: cover;"></div>
                            <div class="img-text">
                                <a href="#">Video</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="four-div-element col-md-3 align-items-center d-flex">
                        <div class="four-div-element-inside w-100">
                            <div class="img-holder" style="background: url(<?php echo URL ;?>Publics/Images/frontend/vini.jpg) center center no-repeat; background-size: cover;"></div>
                            <div class="img-text">
                                <a href="#">Desing</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="menu-links d-none d-lg-block text-uppercase w-100">
                        <a class="ml-0" href="#">Contacte</a>
                        <a href="#">journal</a>
                        <a href="#">about</a>
                    </div>
                
                    <div class="text-uppercase book-visit form-submit mt-0">
                        <a href="#" class="prenota-text btn">
                            <span class="border-effect-one">
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                            </span>

                            <span class="border-effect-two">
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                            </span>
                            <span>Explorer</span>
                        </a>
                    </div>
                </div>
                
                <div class="four-div four-div-767 hide992 text-uppercase">
                    <div class="four-div-element">
                        <div class="img-text">
                            <a href="#">Photographie</a>
                        </div>
                        <div class="mobile-breaker"></div>
                    </div>
                    
                    <div class="four-div-element">
                        <div class="img-text">
                            <a href="#">Evenement</a>
                        </div>
                    
                        <div class="mobile-breaker"></div>
                    </div>
                    
                    <div class="four-div-element">
                        <div class="img-text">
                            <a href="#">Video</a>
                        </div>
                        <div class="mobile-breaker"></div>
                    </div>
                
                    <div class="four-div-element">
                        <div class="img-text">
                            <a href="#">Desing</a>
                        </div>
                    </div>
                
                <div class="menu-links menu-links-mt text-uppercase mt-4">
                    <div class="d-none">
                        <a href="#">Explorer</a>
                    </div>
                    <div class="text-center justify-content-center">
                        <a href="#">Contact</a>
                        <a href="#">Journal</a>
                    </div>
                    <div>
                        <a href="#">About</a>
                    </div>
                </div>

                <div class="text-uppercase book-visit form-submit mt-0">
                    <a href="#" class="prenota-text btn w-auto">
                        Explorer                
                        <span class="border-effect-one">
                            <span class="top"></span>
                            <span class="right"></span>
                            <span class="bottom"></span>
                            <span class="left"></span>
                        </span>
                    
                        <span class="border-effect-two">
                            <span class="top"></span>
                            <span class="right"></span>
                            <span class="bottom"></span>
                            <span class="left"></span>
                        </span>
                </a>
                </div>
                
                    <div class="menu-lang d-block d-lg-none mt-3 pt-2 mt-sm-4 mb-5">
                        <span class="first-lang">
                            <a href="#">EN</a></span>
                                <span class="menu-sep">|</span>
                                <span class="second-lang active">
                            <a href="#">FR</a>
                        </span>
                    </div>
                
                </div>
            </div>
        </div>

    <!-- Main--Menu -->
        <main>
            
            <section class="first-section first-section-2 first-section-terra">
            
                <div class="fullscreen-bg">
                    <video loop muted autoplay poster="<?php echo URL ;?>Publics/Images/frontend/video.png" class="fullscreen-bg__video">
                    <source src="<?php echo URL ;?><?php echo $resImages[0]->chemin ;?>" type="video/mp4" />
                    </video>
                </div>
                
                <div class="all-terra">
                
                    <div class="terra-logo" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1700" data-aos-anchor-placement="top-bottom">
                        <a href="#">
                            <img alt="icona" src="<?php echo URL ;?>publics/Images/icones/logo-tranonjaka-label-rond-image.png"/>
                        </a>
                    </div>
                
                    <div class="laterra-title text-uppercase" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1800" data-aos-anchor-placement="top-bottom">
                        <h1 class="inherit">“studio d'audio visuel”</h1>
                    </div>
                
                    <div class="laterra-text-logo" data-aos="fade" data-aos-duration="800" data-aos-delay="2200" data-aos-anchor-placement="top-bottom">
                        <img alt="icona" src="<?php echo URL ;?>Publics/Images/icones/Tranonjaka-label.svg" />
                    </div>
                </div>
            
                <div class="tabs text-uppercase home" data-aos="fade-up" data-aos-duration="800" data-aos-delay="2300" data-aos-anchor-placement="top-bottom">
                
                <div class="w-100 d-flex position-relative active-indicator-path">
                
                <div class="tab-2" data-url="#"data-aos="fade-up" data-aos-duration="800">
                    <label for="tab2-1">
                        <a href="#">Photographie</a>
                    </label>
                    <input id="tab2-1" name="tabs-two" type="radio" />
                </div>
                
                <div class="tab-2" data-url="#" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <label for="tab2-2">
                        <a href="#">Evenement</a>
                    </label>
                    <input id="tab2-2" name="tabs-two" type="radio" />
                </div>
                
                <div class="tab-2" data-url="#" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <label for="tab2-3">
                        <a href="#">Video</a>
                    </label>
                    <input id="tab2-3" name="tabs-two" type="radio" />
                </div>
                
                <div class="tab-2" data-url="#" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <label for="tab2-4">
                        <a href="#">Desing</a>
                    </label>
                    <input id="tab2-4" name="tabs-two" type="radio" />
                </div>

                <div class="active-indicator"></div>
                </div>
            
                </div>
            </section>
            
            <section class="after-terra-1 text-uppercase hide768">
                
                <div class="after-terra-1-1 after-terra-home position-relative" data-aos="fade-up" data-aos-duration="800">
                    <a href="#">Photographie</a>
                </div>
                <div class="after-terra-1-2 after-terra-home position-relative" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <a href="#">Evenement</a>
                </div>
                <div class="after-terra-1-3 after-terra-home position-relative" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <a href="#">Video</a>
                </div>
                <div class="after-terra-1-4 after-terra-home position-relative" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="#">Desing</a>
                </div>
            </section>
        </main>
    </div>

    <!-- section--produit -->
    <!-- section produit -->
    <div class="produit-tl">
        <section class="section collection">
          <div class="container">
  
            <ul class="collection-list has-scrollbar">
  
              <li>
                <div class="collection-card" style="background-image: url('<?php echo URL ;?>publics/images/collection-1.jpg')">
                  <h3 class="h4 card-title">Men Collections</h3>
  
                  <a href="#" class="btn btn-secondary">
                    <span>Explore All</span>
  
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </li>
  
              <li>
                <div class="collection-card" style="background-image: url('<?php echo URL ;?>publics/images/collection-2.jpg')">
                  <h3 class="h4 card-title">Women Collections</h3>
  
                  <a href="#" class="btn btn-secondary">
                    <span>Explore All</span>
  
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </li>
  
              <li>
                <div class="collection-card" style="background-image: url('<?php echo URL ;?>publics/images/collection-3.jpg')">
                  <h3 class="h4 card-title">Sports Collections</h3>
  
                  <a href="#" class="btn btn-secondary">
                    <span>Explore All</span>
  
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </li>
  
            </ul>
  
          </div>
        </section>
  
  
  
  
  
        <!-- 
          - #PRODUCT
        -->
  
        <section class="section product">
          <div class="container">
  
            <h2 class="h2 section-title">Bestsellers Products</h2>
            
<!-- mobile submit -->

            </div>
            <ul class="filter-list">
  
              <li>
                <button class="filter-btn  active">All</button>
              </li>
  
              <li>
                <button class="filter-btn">Nike</button>
              </li>
  
              <li>
                <button class="filter-btn">Adidas</button>
              </li>
  
              <li>
                <button class="filter-btn">Puma</button>
              </li>
  
              <li>
                <button class="filter-btn">Bata</button>
              </li>
  
              <li>
                <button class="filter-btn">Apex</button>
              </li>
  
            </ul>

            <ul class="product-list">
             <?php for($i = 0; $i < count($resProduits); $i++): ?>
              <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?><?php echo $resProduits[$i]->chemin ?>" width="312" height="350" loading="lazy"
                      alt="Running Sneaker Shoes" class="image-contain">
  
                    <div class="card-badge">New</div>
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Women</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Running Sneaker Shoes</a>
                    </h3>
  
                    <data class="card-price" value="180.85">$180.85</data>
  
                  </div>
  
                </div>
              </li>
          <?php endfor ; ?>
  
              <!-- <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?>publics/images/product-2.jpg" width="312" height="350" loading="lazy"
                      alt="Leather Mens Slipper" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Leather Mens Slipper</a>
                    </h3>
  
                    <data class="card-price" value="190.85">$190.85</data>
  
                  </div>
  
                </div>
              </li>
  
              <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?>publics/images/product-3.jpg" width="312" height="350" loading="lazy"
                      alt="Simple Fabric Shoe" class="image-contain">
  
                    <div class="card-badge">New</div>
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Women</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Simple Fabric Shoe</a>
                    </h3>
  
                    <data class="card-price" value="160.85">$160.85</data>
  
                  </div>
  
                </div>
              </li>
  
              <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?>publics/images/product-4.jpg" width="312" height="350" loading="lazy"
                      alt="Air Jordan 7 Retro " class="image-contain">
  
                    <div class="card-badge"> -25%</div>
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Air Jordan 7 Retro </a>
                    </h3>
  
                    <data class="card-price" value="170.85">$170.85 <del>$200.21</del></data>
  
                  </div>
  
                </div>
              </li>
  
              <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?>publics/images/product-5.jpg" width="312" height="350" loading="lazy"
                      alt="Nike Air Max 270 SE" class="image-contain">
  
                    <div class="card-badge">New</div>
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Women</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Nike Air Max 270 SE</a>
                    </h3>
  
                    <data class="card-price" value="120.85">$120.85</data>
  
                  </div>
  
                </div>
              </li>
  
              <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?>publics/images/product-6.jpg" width="312" height="350" loading="lazy"
                      alt="Adidas Sneakers Shoes" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Women</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Adidas Sneakers Shoes</a>
                    </h3>
  
                    <data class="card-price" value="100.85">$100.85</data>
  
                  </div>
  
                </div>
              </li>
  
              <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?>publics/images/product-7.jpg" width="312" height="350" loading="lazy"
                      alt="Nike Basketball shoes" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Nike Basketball shoes</a>
                    </h3>
  
                    <data class="card-price" value="120.85">$120.85</data>
  
                  </div>
  
                </div>
              </li>
  
              <li class="product-item">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="<?php echo URL ;?>publics/images/product-8.jpg" width="312" height="350" loading="lazy"
                      alt="Simple Fabric Shoe" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Women</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Simple Fabric Shoe</a>
                    </h3>
  
                    <data class="card-price" value="100.85">$100.85</data>
  
                  </div>
  
                </div>
              </li> -->
  
            </ul>
  
          </div>
        </section>
  
  
  
  
  
        <!-- 
          - #CTA
        -->
  
        <section class="section cta">
          <div class="container">
  
            <ul class="cta-list">
  
              <li>
                <div class="cta-card" style="background-image: url('<?php echo URL ;?>publics/images/cta-1.jpg')">
                  <p class="card-subtitle">Adidas Shoes</p>
  
                  <h3 class="h2 card-title">The Summer Sale Off 50%</h3>
  
                  <a href="#" class="btn btn-link">
                    <span>Shop Now</span>
  
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </li>
  
              <li>
                <div class="cta-card" style="background-image: url('<?php echo URL ;?>publics/images/cta-2.jpg')">
                  <p class="card-subtitle">Nike Shoes</p>
  
                  <h3 class="h2 card-title">Makes Yourself Keep Sporty</h3>
  
                  <a href="#" class="btn btn-link">
                    <span>Shop Now</span>
  
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </li>
  
            </ul>
  
          </div>
        </section>
  
  
  
  
  
        <!-- 
          - #SPECIAL
        -->
  
        <section class="section special">
          <div class="container">
  
            <div class="special-banner" style="background-image: url('<?php echo URL ;?>publics/images/special-banner.jpg')">
              <h2 class="h3 banner-title">New Trend Edition</h2>
  
              <a href="#" class="btn btn-link">
                <span>Explore All</span>
  
                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
              </a>
            </div>

            <div class="special-product">
  
              <h2 class="h2 section-title">
                <span class="text" style="color : black">Nike Special</span>
  
                <span class="line"></span>
              </h2>
  
              <ul class="has-scrollbar">
  
                <li class="product-item">
                  <div class="product-card" tabindex="0">
  
                    <figure class="card-banner">
                      <img src="<?php echo URL ;?>publics/images/product-1.jpg" width="312" height="350" loading="lazy"
                        alt="Running Sneaker Shoes" class="image-contain">
  
                      <div class="card-badge">New</div>
  
                      <ul class="card-action-list">
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-1">
                            <ion-icon name="cart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-2">
                            <ion-icon name="heart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-3">
                            <ion-icon name="eye-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-4">
                            <ion-icon name="repeat-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-4">Compare</div>
                        </li>
  
                      </ul>
                    </figure>
  
                    <div class="card-content">
  
                      <div class="card-cat">
                        <a href="#" class="card-cat-link">Men</a> /
                        <a href="#" class="card-cat-link">Women</a>
                      </div>
  
                      <h3 class="h3 card-title">
                        <a href="#">Running Sneaker Shoes</a>
                      </h3>
  
                      <data class="card-price" value="180.85">$180.85</data>
  
                    </div>
  
                  </div>
                </li>
  
                <li class="product-item">
                  <div class="product-card" tabindex="0">
  
                    <figure class="card-banner">
                      <img src="<?php echo URL ;?>publics/images/product-2.jpg" width="312" height="350" loading="lazy"
                        alt="Leather Mens Slipper" class="image-contain">
  
                      <ul class="card-action-list">
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-1">
                            <ion-icon name="cart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-2">
                            <ion-icon name="heart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-3">
                            <ion-icon name="eye-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-4">
                            <ion-icon name="repeat-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-4">Compare</div>
                        </li>
  
                      </ul>
                    </figure>
  
                    <div class="card-content">
  
                      <div class="card-cat">
                        <a href="#" class="card-cat-link">Men</a> /
                        <a href="#" class="card-cat-link">Sports</a>
                      </div>
  
                      <h3 class="h3 card-title">
                        <a href="#">Leather Mens Slipper</a>
                      </h3>
  
                      <data class="card-price" value="190.85">$190.85</data>
  
                    </div>
  
                  </div>
                </li>
  
                <li class="product-item">
                  <div class="product-card" tabindex="0">
  
                    <figure class="card-banner">
                      <img src="<?php echo URL ;?>publics/images/product-3.jpg" width="312" height="350" loading="lazy"
                        alt="Simple Fabric Shoe" class="image-contain">
  
                      <div class="card-badge">New</div>
  
                      <ul class="card-action-list">
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-1">
                            <ion-icon name="cart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-2">
                            <ion-icon name="heart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-3">
                            <ion-icon name="eye-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-4">
                            <ion-icon name="repeat-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-4">Compare</div>
                        </li>
  
                      </ul>
                    </figure>
  
                    <div class="card-content">
  
                      <div class="card-cat">
                        <a href="#" class="card-cat-link">Men</a> /
                        <a href="#" class="card-cat-link">Women</a>
                      </div>
  
                      <h3 class="h3 card-title">
                        <a href="#">Simple Fabric Shoe</a>
                      </h3>
  
                      <data class="card-price" value="160.85">$160.85</data>
  
                    </div>
  
                  </div>
                </li>
  
                <li class="product-item">
                  <div class="product-card" tabindex="0">
  
                    <figure class="card-banner">
                      <img src="<?php echo URL ;?>publics/images/product-4.jpg" width="312" height="350" loading="lazy"
                        alt="Air Jordan 7 Retro " class="image-contain">
  
                      <div class="card-badge"> -25%</div>
  
                      <ul class="card-action-list">
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-1">
                            <ion-icon name="cart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-2">
                            <ion-icon name="heart-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-3">
                            <ion-icon name="eye-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                        </li>
  
                        <li class="card-action-item">
                          <button class="card-action-btn" aria-labelledby="card-label-4">
                            <ion-icon name="repeat-outline"></ion-icon>
                          </button>
  
                          <div class="card-action-tooltip" id="card-label-4">Compare</div>
                        </li>
  
                      </ul>
                    </figure>
  
                    <div class="card-content">
  
                      <div class="card-cat">
                        <a href="#" class="card-cat-link">Men</a> /
                        <a href="#" class="card-cat-link">Sports</a>
                      </div>
  
                      <h3 class="h3 card-title">
                        <a href="#">Air Jordan 7 Retro </a>
                      </h3>
  
                      <data class="card-price" value="170.85">$170.85 <del>$200.21</del></data>
  
                    </div>
  
                  </div>
                </li>
  
              </ul>
  
            </div>
  
          </div>
        </section>
  
  
  
  
  
        <!-- 
          - #SERVICE
        -->
  
        <section class="section service">
          <div class="container">
  
            <ul class="service-list">
  
              <li class="service-item">
                <div class="service-card">
  
                  <div class="card-icon">
                    <img src="<?php echo URL ;?>publics/images/service-1.png" width="53" height="28" loading="lazy" alt="Service icon">
                  </div>
  
                  <div>
                    <h3 class="h4 card-title">Free Shiping</h3>
  
                    <p class="card-text">
                      All orders over <span>$150</span>
                    </p>
                  </div>
  
                </div>
              </li>
  
              <li class="service-item">
                <div class="service-card">
  
                  <div class="card-icon">
                    <img src="<?php echo URL ;?>publics/images/service-2.png" width="43" height="35" loading="lazy" alt="Service icon">
                  </div>
  
                  <div>
                    <h3 class="h4 card-title">Quick Payment</h3>
  
                    <p class="card-text">
                      100% secure payment
                    </p>
                  </div>
  
                </div>
              </li>
  
              <li class="service-item">
                <div class="service-card">
  
                  <div class="card-icon">
                    <img src="<?php echo URL ;?>publics/images/service-3.png" width="40" height="40" loading="lazy" alt="Service icon">
                  </div>
  
                  <div>
                    <h3 class="h4 card-title">Free Returns</h3>
  
                    <p class="card-text">
                      Money back in 30 days
                    </p>
                  </div>
  
                </div>
              </li>
  
              <li class="service-item">
                <div class="service-card">
  
                  <div class="card-icon">
                    <img src="<?php echo URL ;?>publics/images/service-4.png" width="40" height="40" loading="lazy" alt="Service icon">
                  </div>
  
                  <div>
                    <h3 class="h4 card-title">24/7 Support</h3>
  
                    <p class="card-text">
                      Get Quick Support
                    </p>
                  </div>
  
                </div>
              </li>
  
            </ul>
  
          </div>
        </section>
  
  
  
  
  
        <!-- 
          - #INSTA POST
        -->
  
        <section class="section insta-post">
  
          <ul class="insta-post-list has-scrollbar">
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-1.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-2.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-3.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-4.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-5.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-6.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-7.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li class="insta-post-item">
              <img src="<?php echo URL ;?>publics/images/insta-8.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
                class="insta-post-banner image-contain">
  
              <a href="#" class="insta-post-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
          </ul>
  
        </section>
  
      </article>
    </main>
  
  
  
  
  
    <!-- 
      - #FOOTER
    -->
  
    <footer class="footer">
  
      <div class="footer-top section">
        <div class="container">
  
          <div class="footer-brand">
  
            <a href="#" class="logo">
              <img src="<?php echo URL ;?>publics/images/logo.svg" width="160" height="50" alt="Footcap logo">
            </a>
  
            <ul class="social-list">
  
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
  
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
  
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-pinterest"></ion-icon>
                </a>
              </li>
  
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
  
            </ul>
  
          </div>
  
          <div class="footer-link-box">
  
            <ul class="footer-list">
  
              <li>
                <p class="footer-list-title">Contact Us</p>
              </li>
  
              <li>
                <address class="footer-link">
                  <ion-icon name="location"></ion-icon>
  
                  <span class="footer-link-text">
                    2751 S Parker Rd, Aurora, CO 80014, United States
                  </span>
                </address>
              </li>
  
              <li>
                <a href="tel:+557343673257" class="footer-link">
                  <ion-icon name="call"></ion-icon>
  
                  <span class="footer-link-text">+557343673257</span>
                </a>
              </li>
  
              <li>
                <a href="mailto:footcap@help.com" class="footer-link">
                  <ion-icon name="mail"></ion-icon>
  
                  <span class="footer-link-text">footcap@help.com</span>
                </a>
              </li>
  
            </ul>
  
            <ul class="footer-list">
  
              <li>
                <p class="footer-list-title">My Account</p>
              </li>
  
              <li>
                <a href="#" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
  
                  <span class="footer-link-text">My Account</span>
                </a>
              </li>
  
              <li>
                <a href="#" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
  
                  <span class="footer-link-text">View Cart</span>
                </a>
              </li>
  
              <li>
                <a href="#" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
  
                  <span class="footer-link-text">Wishlist</span>
                </a>
              </li>
  
              <li>
                <a href="#" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
  
                  <span class="footer-link-text">Compare</span>
                </a>
              </li>
  
              <li>
                <a href="#" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
  
                  <span class="footer-link-text">New Products</span>
                </a>
              </li>
  
            </ul>
  
            <div class="footer-list">
  
              <p class="footer-list-title">Opening Time</p>
  
              <table class="footer-table">
                <tbody>
  
                  <tr class="table-row">
                    <th class="table-head" scope="row">Mon - Tue:</th>
  
                    <td class="table-data">8AM - 10PM</td>
                  </tr>
  
                  <tr class="table-row">
                    <th class="table-head" scope="row">Wed:</th>
  
                    <td class="table-data">8AM - 7PM</td>
                  </tr>
  
                  <tr class="table-row">
                    <th class="table-head" scope="row">Fri:</th>
  
                    <td class="table-data">7AM - 12PM</td>
                  </tr>
  
                  <tr class="table-row">
                    <th class="table-head" scope="row">Sat:</th>
  
                    <td class="table-data">9AM - 8PM</td>
                  </tr>
  
                  <tr class="table-row">
                    <th class="table-head" scope="row">Sun:</th>
  
                    <td class="table-data">Closed</td>
                  </tr>
  
                </tbody>
              </table>
  
            </div>
  
            <div class="footer-list">
  
              <p class="footer-list-title">Newsletter</p>
  
              <p class="newsletter-text">
                Authoritatively morph 24/7 potentialities with error-free partnerships.
              </p>
  
              <form action="" class="newsletter-form">
                <input type="email" name="email" required placeholder="Email Address" class="newsletter-input">
  
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>
  
            </div>
  
          </div>
        </div>
      </div>
    </footer>

    <!-- section--footer -->

    
  
    <!-- 
      - #GO TO TOP
    -->
  
    <a href="#top" class="go-top-btn" data-go-top>
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
  
  
  
  
  
  
    