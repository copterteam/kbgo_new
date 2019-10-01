<?	$file = $_SERVER['SCRIPT_FILENAME']; ?>

      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" class="rd-navbar">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><img src="images/header_logo.png" ><a href="index.html" class="brand-name">КБ Горбунова</a></div>
                <aside class="rd-navbar-aside">
                  <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
                  <div class="rd-navbar-aside-content">
                    <address class="rd-navbar-aside-contact-info rd-navbar-aside-contact-info-variant-1">
                      <p>196140 Санкт-Петербург,<br>ООО "БВС СИСТЕМЫ"</p>
                    </address>
                    <address class="rd-navbar-aside-contact-info rd-navbar-aside-contact-info-variant-2">
                      <p><a href="callto:#">+7 812 309 7415</a></p>
                      <p><a href="callto:#">+7 901 310 3767</a></p>
                    </address>
                  </div>
                </aside>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li <?if(substr($file,-9) == 'index.php'){?>	class="active"<?}?> ><a href="/">Главная</a></li>
                  <li <?if(substr($file,-9) == 'about.php'){?>	class="active"<?}?>><a href="/about">О нас</a>
                    <!-- 
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">History</a></li>
                      <li><a href="#">Features</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#">Archive</a></li>
                          <li><a href="#">Events</a></li>
                          <li><a href="./404.html">404 page</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Basic Service</a></li>
                      <li><a href="#">Products</a></li>
                    </ul>RD Navbar Dropdown-->
                  </li>
                  <li <?if(substr($file,-10) == 'uslugi.php'){?>	class="active"<?}?> ><a href="/uslugi">Услуги</a></li>
                  <li <?if(substr($file,-12) == 'products.php'){?>	class="active"<?}?>><a href="/products">Продукция</a></li>
                  <li <?if(substr($file,-8) == 'news.php'){?>	class="active"<?}?>><a href="/news">Новости</a></li>
                  <li <?if(substr($file,-12) == 'contacts.php'){?>	class="active"<?}?>><a href="/contacts">Контакты</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

	<?	if(substr($file,-9) == 'index.php'){?>	
  <!-- Swiper-->
        <div class="page-head-body">
          <div class="swiper-wrap">
            <div class="swiper-container swiper-slider">
              <div class="swiper-wrapper">			  
                <div data-slide-bg="images/DSC07424.jpg" class="swiper-slide"></div>
                <div data-slide-bg="images/DSC08088.jpg" class="swiper-slide"></div>
                <div data-slide-bg="images/DJI0663.JPG" class="swiper-slide"></div>
              </div>
              <!-- Swiper Pagination-->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="page-head-content bg-context-dark text-center">
            <div class="section-bottom-80 section-md-bottom-100 section-sh2-bottom-204 bg-context-dark block-top-level">
              <div class="section-35 section-sm-89">
                <div class="shell text-center">
                  <ul class="list-inline-separated">
                    <li><a href="#">facebook</a></li>
                    <li><a href="#">youtube</a></li>
                    <li><a href="#">instagram</a></li>
                  </ul>
                </div>
              </div>
              <div class="section-35 section-md-100 section-lg-35 section-sh2-189">
                <div class="shell">
                  <div class="range range-condensed range-md-center text-center">
                    <div class="cell-xs-12 cell-md-10">
                      <h2>
                        Разработка летательных аппаратов
                        промышленного назначения
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	<?}?>	
		
      </header>