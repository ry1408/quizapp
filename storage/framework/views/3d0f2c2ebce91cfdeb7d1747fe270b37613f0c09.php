
    <!-- <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <?php if(!Auth::guest()): ?>
                                <li><a href="<?php echo e(route('user.logout')); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('user.login')); ?>"><i class="fa fa-user"></i> Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Arabic</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- End header area -->
    <div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
  <div data-elementor-type="wp-post" data-elementor-id="138" class="elementor elementor-138">
    <div class="elementor-inner">
      <div class="elementor-section-wrap">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-121863e2 elementor-section-content-middle nav-style-classic elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container" data-id="121863e2" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
              <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f9a007a" data-id="f9a007a" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-6edcff8 elementor-widget elementor-widget-turitor-logo" data-id="6edcff8" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="turitor-logo.default">
                      <div class="elementor-widget-container">
                        <div class="turitor-widget-logo">
                          <a href="index.html">
                            <img src="<?php echo e(asset('design/adminLte/dist/img/logo.png')); ?>" alt="Tutor Classic">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-56e28243" data-id="56e28243" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-78cb430f elementor-widget__width-auto ts-color-nav elementor-widget elementor-widget-ekit-nav-menu" data-id="78cb430f" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="ekit-nav-menu.default">
                      <div class="elementor-widget-container">
                        <div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon="" data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">
                          <button class="elementskit-menu-hamburger elementskit-menu-toggler">
                            <span class="elementskit-menu-hamburger-icon"></span>
                            <span class="elementskit-menu-hamburger-icon"></span>
                            <span class="elementskit-menu-hamburger-icon"></span>
                          </button>
                          <div id="ekit-megamenu-main-menu" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page- ekit-nav-dropdown-hover" ekit-dom-added="yes">
                            <ul id="menu-main-menu" class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon">
                              <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item menu-item-11 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                <a href="<?php echo e(route('home.Index')); ?>" class="ekit-menu-nav-link active" onclick="return true">Home</a>
                              </li>
                              <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                <a href="about/index.html" class="ekit-menu-nav-link" onclick="return true">About</a>
                              </li>
                              <li id="menu-item-1031" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1031 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content" data-vertical-menu="750px">
                                <a href="courses-2/index.html" class="ekit-menu-nav-link ekit-menu-dropdown-toggle" onclick="return true">Courses <i class="icon icon-down-arrow1 elementskit-submenu-indicator"></i>
                                </a>
                                <ul class="elementskit-dropdown elementskit-submenu-panel">
                                  <li id="menu-item-1322" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1322 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="courses/index.html" class=" dropdown-item" onclick="return true">Courses</a>
                                  </li>
                                  <li id="menu-item-1464" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1464 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="courses/index62cc.html?theme=advanced" class=" dropdown-item" onclick="return true">Course Style2</a>
                                  </li>
                                  <li id="menu-item-1421" class="menu-item menu-item-type-post_type menu-item-object-courses menu-item-1421 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="courses/wordpress-for-beginners-master-wordpress/index.html" class=" dropdown-item" onclick="return true">Course Single</a>
                                  </li>
                                </ul>
                              </li>
                              <li id="menu-item-1027" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1027 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content" data-vertical-menu="750px">
                                <a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle" onclick="return true">Pages <i class="icon icon-down-arrow1 elementskit-submenu-indicator"></i>
                                </a>
                                <ul class="elementskit-dropdown elementskit-submenu-panel">
                                  <li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-898 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="instructor/index.html" class=" dropdown-item" onclick="return true">Instructor</a>
                                  </li>
                                  <li id="menu-item-1208" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1208 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="profile/index.html" class=" dropdown-item" onclick="return true">Instructor Profile</a>
                                  </li>
                                  <li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="pricing/index.html" class=" dropdown-item" onclick="return true">Pricing</a>
                                  </li>
                                </ul>
                              </li>
                              <li id="menu-item-923" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-923 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content" data-vertical-menu="750px">
                                <a href="blog/index.html" class="ekit-menu-nav-link ekit-menu-dropdown-toggle" onclick="return true">News <i class="icon icon-down-arrow1 elementskit-submenu-indicator"></i>
                                </a>
                                <ul class="elementskit-dropdown elementskit-submenu-panel">
                                  <li id="menu-item-1359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1359 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="blog/index.html" class=" dropdown-item" onclick="return true">News</a>
                                  </li>
                                  <li id="menu-item-1358" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1358 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                    <a href="learn-by-doing-with-real-world-projects-done/index.html" class=" dropdown-item" onclick="return true">News Single</a>
                                  </li>
                                </ul>
                              </li>
                              <li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                <a href="contact/index.html" class="ekit-menu-nav-link" onclick="return true">Contact</a>
                              </li>
                            </ul>
                            <div class="elementskit-nav-identity-panel">
                              <div class="elementskit-site-title">
                                <a class="elementskit-nav-logo" href="https://demo.themewinter.com/wp/turitors/tutor-classic" target="_self" rel="">
                                  <img width="162" height="45" src="wp-content/uploads/sites/6/2020/02/logo.png" class="attachment-full size-full" alt="">
                                </a>
                              </div>
                              <button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button>
                            </div>
                          </div>
                          <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-425a6f7a elementor-hidden-tablet elementor-hidden-phone" data-id="425a6f7a" data-element_type="column">
                <div class="elementor-column-wrap">
                  <div class="elementor-widget-wrap"></div>
                </div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6a509e1f elementor-hidden-tablet elementor-hidden-phone" data-id="6a509e1f" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-159b7040 elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-elementskit-button" data-id="159b7040" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-button.default">
                      <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                          <div class="ekit-btn-wraper">
                          <?php if(!Auth::guest()): ?>
                                <a href="<?php echo e(route('user.logout')); ?>"  class="elementskit-btn  whitespace--normal"><i class="fa fa-sign-out tsicon tsicon-user"></i> Logout</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('user.login')); ?>"  class="elementskit-btn  whitespace--normal"><i class="fa fa-user  tsicon tsicon-user"></i> Login</a>
                            <?php endif; ?> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>


<?php /**PATH E:\xampp\htdocs\quizapp\resources\views/style/layouts/navbar.blade.php ENDPATH**/ ?>