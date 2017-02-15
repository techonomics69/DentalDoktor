<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2014 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
<head>
<?php osc_current_web_theme_path('common/head.php') ; ?>
</head>

<body <?php osclasswizards_body_class(); ?>>
<header id="header">
  <div class="top_links">
    <div class="container">
      <div class="row">
      <div class="language">
        <?php ?>
        <?php if ( osc_count_web_enabled_locales() > 1) { ?>
        <?php osc_goto_first_locale(); ?>
        <strong>
        <?php _e('Language:', OSCLASSWIZARDS_THEME_FOLDER); ?>
        </strong> <span>
        <?php $local = osc_get_current_user_locale(); echo $local['s_name']; ?>
        <i class="fa fa-caret-down"></i></span>
        <ul>
          <?php $i = 0;  ?>
          <?php while ( osc_has_web_enabled_locales() ) { ?>
          <li><a <?php if(osc_locale_code() == osc_current_user_locale() ) echo "class=active"; ?> id="<?php echo osc_locale_code(); ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ); ?>"><?php echo osc_locale_name(); ?></a></li>
          <?php if( $i == 0 ) { echo ""; } ?>
          <?php $i++; ?>
          <?php } ?>
        </ul>
        <?php } ?>
      </div>
      <?php if(osclasswizards_welcome_message()){ ?>
        <!-- p class="welcome-message"><?php echo osclasswizards_welcome_message(); ?></p -->
        <div class="col-lg-7 col-md-5 sl-header-text">
          <div class="offer-wrapper">
            <div class="offer-header">
              <ul id="offer-slider" class="owl-carousel2 owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1340px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 670px;"><li>
                      <span style="color:#003A69;"><i class="fa fa-phone"></i>&nbsp;</span>Bogotá: (+571) 6160257 - Linea Nacional: 01800 123433&nbsp;&nbsp;&nbsp;<span style="color:#003A69;"><i class="fa fa-whatsapp"></i>&nbsp;</span>(+57) 317 4355417&nbsp;&nbsp;&nbsp;<span style="color:#003A69;"><i class="fa fa-envelope"></i>&nbsp;</span>infodentaldoktor@bellefarma.com</li></div></div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
        <div class="col-lg-5 col-md-7 top-links-action">
        <?php if( osc_is_static_page() || osc_is_contact_page() ){ ?>
          <ul>
            <li class="search"><a class="ico-search icons" data-bclass-toggle="display-search"></a></li>
            <li class="cat"><a class="ico-menu icons" data-bclass-toggle="display-cat"></a></li>
          </ul>
        <?php } ?>
        <?php if( osc_users_enabled() ) { ?>
        <?php if( osc_is_web_user_logged_in() ) { ?>
            <div class="block-action-header top-link-account login-link">
              <ul>
                <li>
                  <a href="<?php echo osc_user_dashboard_url(); ?>"><?php _e('My account', OSCLASSWIZARDS_THEME_FOLDER); ?></a>
                </li>
              </ul>
            </div>
            <div class="block-action-header top-link-account login-link">
              <ul>
                <li>
                  <p class="hello"><span style="color:#444444;"><i class="fa fa-user"></i>&nbsp;</span><?php echo sprintf(__('Hi %s', OSCLASSWIZARDS_THEME_FOLDER), osc_logged_user_name()); ?> </p>
                </li>
                <li>
                  <a href="<?php echo osc_user_logout_url(); ?>"><span style="color:#444444;"><i class="fa fa-signout"></i>&nbsp;</span><?php _e('Logout', OSCLASSWIZARDS_THEME_FOLDER); ?></a>
                </li>
              </ul>
            </div>
        <?php } else { ?>
            <?php if(osc_user_registration_enabled()) { ?>
              <!-- REGISTER -->
              <div class="block-action-header top-link-account login-link">
                <ul>
                  <li>
                    <a href="/customer/account/create/" title="Registrarse"><?php _e('Register for a free account', OSCLASSWIZARDS_THEME_FOLDER); ?></a>
                  </li>
                </ul>
              </div>
              <!-- END REGISTER -->
            <?php } ?>
            <!-- MYLOGIN -->
            <div class="block-action-header top-link-account login-link">
              <ul>
                <li>
                  <a id="login_open" href="<?php echo osc_user_login_url(); ?>" title="Ingresar"><span style="color:#444444;"><i class="fa fa-lock"></i>&nbsp;</span><?php _e('Login', OSCLASSWIZARDS_THEME_FOLDER) ; ?></a>
                </li>
              </ul>
            </div>
            <!-- END LOGIN -->
        <?php } ?>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="main_header" id="main_header">
    <div class="container">
      <div id="logo">
        <a href="http://www.dentaldoktor.com/clasificados/">
          <img src="/skin/frontend/sm-shoppystore/default/images/blue/logo.png" alt="DentalDoktor - Clasificados">
        </a>
        <?php // echo logo_header(); ?>
        <span id="description"><?php echo osc_page_description(); ?></span> </div>
      <h2 class="pull-right toggle"><i class="fa fa-align-justify"></i></h2>
      <ul class="links">
        <?php
        osc_reset_static_pages();
        while( osc_has_static_pages() ) { ?>
        <li> <a href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a> </li>
        <?php
        }
		osc_reset_static_pages();
        ?>
        <?php
        $contact_link = 0;
        if($contact_link) {
        ?>
        <li> <a href="<?php echo osc_contact_url(); ?>">
          <?php _e('Contact', OSCLASSWIZARDS_THEME_FOLDER); ?>
          </a> </li>
        <?php } ?>
      </ul>
      <div class="publish">
        <?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>
        <a class="btn btn-success" href="<?php echo osc_item_post_url_in_category() ; ?>">
        <?php _e('Publish your ad for free', OSCLASSWIZARDS_THEME_FOLDER);?>
        </a>
        <?php } ?>
      </div>
      <!-- div class="publish">
        <?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>
          <a class="btn btn-success" href="/">
            <?php _e('Tienda Virtual', OSCLASSWIZARDS_THEME_FOLDER);?>
          </a>
        <?php } ?>
      </div -->
    </div>
    <div class="yt-header-under-2">
      <div class="container-menu">
        <div class="row yt-header-under-wrap">
          <div class="yt-main-menu col-md-12">
            <div class="header-under-2-wrapper">
              <div id="yt-responsivemenu" class="yt-responsivemenu">
                <button type="button" class="btn btn-navbar">
                </button>
              </div>
              <div class="yt-searchbox-vermenu">
                <div class="row">
                  <div class="col-lg-3 col-md-3">
                    <a href="/">
                      <div class="ver-megamenu-header">
                        <div class="mega-left-title">
                          <strong>VOLVER A LA TIENDA</strong>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-9 col-md-9">
                    <div class="yt-header-under">
                      <div class="yt-menu">
                        <div class="css_effect sm_megamenu_wrapper_horizontal_menu sambar"
                             id="sm_megamenu_menu584f58f8397e6" data-sam="19515247701481595128">
                          <div class="sambar-inner">
                            <a class="btn-sambar" data-sapi="collapse" href="#sm_megamenu_menu584f58f8397e6">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </a>
                            <ul class="sm-megamenu-hover sm_megamenu_menu sm_megamenu_menu_black" data-jsapi="on">
                              <li class="rw-url home-item-parent other-toggle
						sm_megamenu_lv1 sm_megamenu_nodrop   ">
                                <a class="sm_megamenu_head sm_megamenu_nodrop " href="/clasificados"
                                   id="sm_megamenu_35">
																										<span
                                                                                                            class="sm_megamenu_icon sm_megamenu_nodesc">
																												<span
                                                                                                                    class="sm_megamenu_title">Inicio</span>


													</span>
                                </a>
                              </li>
                              <li class="other-toggle
						sm_megamenu_lv1 sm_megamenu_nodrop   ">
                                <a class="sm_megamenu_head sm_megamenu_nodrop " href="http://blog.dentaldoktor.com/"
                                   target="_blank" id="sm_megamenu_32">
																										<span
                                                                                                            class="sm_megamenu_icon sm_megamenu_nodesc">
																												<span
                                                                                                                    class="sm_megamenu_title">Noticias</span>


													</span>
                                </a>
                              </li>
                              <li class="other-toggle
						sm_megamenu_lv1 sm_megamenu_nodrop   ">
                                <a class="sm_megamenu_head sm_megamenu_nodrop" href="http://www.dentaldoktor.com/nosotros.html" id="sm_megamenu_33">
                                    <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                      <span class="sm_megamenu_title">Nosotros</span>
                                    </span>
                                </a>
                              </li>
                              <li class="other-toggle
						sm_megamenu_lv1 sm_megamenu_nodrop   ">
                                <a class="sm_megamenu_head sm_megamenu_nodrop " href="http://www.dentaldoktor.com/contact-us.html" id="sm_megamenu_34">
                                    <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                      <span class="sm_megamenu_title">Contáctenos</span>
                                    </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  $header_active = 0;
	if( osc_is_home_page()) {
		if(osc_get_preference('show_banner', 'osclasswizards_theme')=='1' && $header_active){
			echo '<div id="header_map">';
			if(homepage_image()) { 
				echo homepage_image(); 
			} else {
			
				echo '<img src="'.osc_current_web_theme_url('images/banner.jpg').'" />';

			} 
			echo '</div>';
		}
      ?>

  <div class="banner_none" id="form_vh_map">
    <form action="<?php echo osc_base_url(true); ?>" id="main_search" method="get" class="search nocsrf" >
      <div class="container">
        <input type="hidden" name="page" value="search"/>
        <div class="main-search">
          <div class="form-filters">
            <div class="row">
              <?php $showCountry  = (osc_get_preference('show_search_country', 'osclasswizards_theme') == '1') ? true : false; ?>
              <div class="col-md-<?php echo ($showCountry)? '3' : '4'; ?>">
                <div class="cell">
                  <input type="text" name="sPattern" id="query" class="input-text" value="" placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'osclasswizards_theme'), OSCLASSWIZARDS_THEME_FOLDER)); ?>" />
                </div>
              </div>
              <div class="col-md-2">
                <?php  if ( osc_count_categories() ) { ?>
                <div class="cell selector">
                  <?php osc_categories_select('sCategory', null, osc_esc_html(__('Select a category', OSCLASSWIZARDS_THEME_FOLDER))) ; ?>
                </div>
                <?php  } ?>
              </div>
              <?php if($showCountry) { ?>
              <div class="col-md-2">
                <div class="cell selector">
                  <?php osclasswizards_countries_select('sCountry', 'sCountry', __('Select a country', OSCLASSWIZARDS_THEME_FOLDER));?>
                </div>
              </div>
              <?php } ?>
              <div class="col-md-2">
                <div class="cell selector">
                  <?php osclasswizards_regions_select('sRegion', 'sRegion', __('Select a region', OSCLASSWIZARDS_THEME_FOLDER)) ; ?>
                </div>
              </div>
              <div class="col-md-2">
                <div class="cell selector">
                  <?php osclasswizards_cities_select('sCity', 'sCity', __('Select a city', OSCLASSWIZARDS_THEME_FOLDER)) ; ?>
                </div>
              </div>
              <div class="col-md-<?php echo ($showCountry)? '1' : '2'; ?>">
                <div class="cell reset-padding">
                  <button  class="btn btn-success btn_search"><i class="fa fa-search"></i> <span <?php echo ($showCountry)? '' : 'class="showLabel"'; ?>><?php echo osc_esc_html(__("Search", OSCLASSWIZARDS_THEME_FOLDER));?></span> </button>
                </div>
              </div>
            </div>
          </div>
          <div id="message-seach"></div>
        </div>
      </div>
    </form>
  </div>
  <?php
	
	} 
?>
  <?php osc_show_widgets('header'); ?>
</header>
<div class="wrapper-flash">
  <?php
        $breadcrumb = osc_breadcrumb('&raquo;', false, get_breadcrumb_lang());
        if( $breadcrumb !== '') { ?>
  <div class="breadcrumb">
    <div class="container"> <?php echo $breadcrumb; ?> </div>
  </div>
  <?php
        }
    ?>
  <?php osc_show_flash_message(); ?>
</div>
<?php osc_run_hook('before-content'); ?>
<div class="wrapper" id="content">
<div class="container">
<?php if( osc_get_preference('header-728x90', 'osclasswizards_theme') !=""){ ?>
<div class="ads_header ads-headers"> <?php echo osc_get_preference('header-728x90', 'osclasswizards_theme'); ?> </div>
<?php } ?>
<div id="main">
