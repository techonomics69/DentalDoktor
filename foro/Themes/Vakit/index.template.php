<?php
/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

/*	This template is, perhaps, the most important template in the theme. It
	contains the main template layer that displays the header and footer of
	the forum, namely with main_above and main_below. It also contains the
	menu sub template, which appropriately displays the menu; the init sub
	template, which is there to set the theme up; (init can be missing.) and
	the linktree sub template, which sorts out the link tree.

	The init sub template should load any data and set any hardcoded options.

	The main_above sub template is what is shown above the main content, and
	should contain anything that should be shown up there.

	The main_below sub template, conversely, is shown after the main content.
	It should probably contain the copyright statement and some other things.

	The linktree sub template should display the link tree, using the data
	in the $context['linktree'] variable.

	The menu sub template should display all the relevant buttons the user
	wants and or needs.

	For more information on the templating system, please see the site at:
	http://www.simplemachines.org/
*/

// Initialize the template... mainly little settings.
function template_init()
{
	global $context, $settings, $options, $txt;

	/* Use images from default theme when using templates from the default theme?
		if this is 'always', images from the default theme will be used.
		if this is 'defaults', images from the default theme will only be used with default templates.
		if this is 'never' or isn't set at all, images from the default theme will not be used. */
	$settings['use_default_images'] = 'never';

	/* What document type definition is being used? (for font size and other issues.)
		'xhtml' for an XHTML 1.0 document type definition.
		'html' for an HTML 4.01 document type definition. */
	$settings['doctype'] = 'xhtml';

	/* The version this template/theme is for.
		This should probably be the version of SMF it was created for. */
	$settings['theme_version'] = '2.0';

	/* Set a setting that tells the theme that it can render the tabs. */
	$settings['use_tabs'] = true;

	/* Use plain buttons - as opposed to text buttons? */
	$settings['use_buttons'] = true;

	/* Show sticky and lock status separate from topic icons? */
	$settings['separate_sticky_lock'] = true;

	/* Does this theme use the strict doctype? */
	$settings['strict_doctype'] = false;

	/* Does this theme use post previews on the message index? */
	$settings['message_index_preview'] = false;

	/* Set the following variable to true if this theme requires the optional theme strings file to be loaded. */
	$settings['require_theme_strings'] = true;
}

// The main sub template above the content.
function template_html_above()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	// Show right to left and the character set for ease of translating.
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"', $context['right_to_left'] ? ' dir="rtl"' : '', '>
<head>';

	// The ?fin20 part of this link is just here to make sure browsers don't cache it wrongly.
	echo '
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/css/index', $context['theme_variant'], '.css?fin20" />
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/css/responsive', $context['theme_variant'], '.css?fin20" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"/>';

	// Some browsers need an extra stylesheet due to bugs/compatibility issues.
	foreach (array('ie7', 'ie6', 'webkit') as $cssfix)
		if ($context['browser']['is_' . $cssfix])
			echo '
	<link rel="stylesheet" type="text/css" href="', $settings['default_theme_url'], '/css/', $cssfix, '.css" />';

	// RTL languages require an additional stylesheet.
	if ($context['right_to_left'])
		echo '
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/css/rtl.css" />';

	echo '
	<link href="/clasificados/oc-content/themes/osclasswizards/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/clasificados/oc-content/themes/osclasswizards/css/dentaldoktor.css"/>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">';

	// Here comes the JavaScript bits!
	echo '
	<script type="text/javascript" src="', $settings['default_theme_url'], '/scripts/script.js?fin20"></script>
	<script type="text/javascript" src="', $settings['theme_url'], '/scripts/theme.js?fin20"></script>
	<script type="text/javascript"><!-- // --><![CDATA[
		var smf_theme_url = "', $settings['theme_url'], '";
		var smf_default_theme_url = "', $settings['default_theme_url'], '";
		var smf_images_url = "', $settings['images_url'], '";
		var smf_scripturl = "', $scripturl, '";
		var smf_iso_case_folding = ', $context['server']['iso_case_folding'] ? 'true' : 'false', ';
		var smf_charset = "', $context['character_set'], '";', $context['show_pm_popup'] ? '
		var fPmPopup = function ()
		{
			if (confirm("' . $txt['show_personal_messages'] . '"))
				window.open(smf_prepareScriptUrl(smf_scripturl) + "action=pm");
		}
		addLoadEvent(fPmPopup);' : '', '
		var ajax_notification_text = "', $txt['ajax_in_progress'], '";
		var ajax_notification_cancel_text = "', $txt['modify_cancel'], '";
	// ]]></script>';

	echo '
	<meta http-equiv="Content-Type" content="text/html; charset=', $context['character_set'], '" />
	<meta name="description" content="', $context['page_title_html_safe'], '" />', !empty($context['meta_keywords']) ? '
	<meta name="keywords" content="' . $context['meta_keywords'] . '" />' : '', '
	<title>', $context['page_title_html_safe'], '</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />';

	// Please don't index these Mr Robot.
	if (!empty($context['robot_no_index']))
		echo '
	<meta name="robots" content="noindex" />';

	// Present a canonical url for search engines to prevent duplicate content in their indices.
	if (!empty($context['canonical_url']))
		echo '
	<link rel="canonical" href="', $context['canonical_url'], '" />';

	// Show all the relative links, such as help, search, contents, and the like.
	echo '
	<link rel="help" href="', $scripturl, '?action=help" />
	<link rel="search" href="', $scripturl, '?action=search" />
	<link rel="contents" href="', $scripturl, '" />';

	// If RSS feeds are enabled, advertise the presence of one.
	if (!empty($modSettings['xmlnews_enable']) && (!empty($modSettings['allow_guestAccess']) || $context['user']['is_logged']))
		echo '
	<link rel="alternate" type="application/rss+xml" title="', $context['forum_name_html_safe'], ' - ', $txt['rss'], '" href="', $scripturl, '?type=rss;action=.xml" />';

	// If we're viewing a topic, these should be the previous and next topics, respectively.
	if (!empty($context['current_topic']))
		echo '
	<link rel="prev" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=prev" />
	<link rel="next" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=next" />';

	// If we're in a board, or a topic for that matter, the index will be the board's index.
	if (!empty($context['current_board']))
		echo '
	<link rel="index" href="', $scripturl, '?board=', $context['current_board'], '.0" />';

	// Output any remaining HTML headers. (from mods, maybe?)
	echo $context['html_headers'];

	echo '
</head>
<body>';
}

function template_body_above()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo'
	<div class="user_bar">
	<div class="wrapper">
	<div class="welcome">',/* ,$txt['welcome'], */ '</div>
			 <div class="uye_0l">';

		if ($context['user']['is_logged'])
	{
		if (!empty($context['user']['avatar']))
			echo '
						<li><a href="', $scripturl, '?action=profile"><img src="', $context['user']['avatar']['href'], '" alt="" id="topavatar" class="floatright" />
		
		<a href="', $scripturl, '?action=profile">', $context['user']['name'], '</a>
					<ul class="pngbg">
					<li><a href="', $scripturl, '?action=unread">' , $txt['show_unread'], '</a></li>
					<li><a href="', $scripturl, '?action=unreadreplies">' , $txt['show_replies'], '</a></li>
					<li><a class="logout" href="', $scripturl, '?action=logout;sesc=', $context['session_id'], '">' , $txt['logout'], '</a></li>
				</ul></a></li>';
		}
		else
		{
			echo '
				<ul>
					<li><a class="icon_login" href="#login_form" id="login_pop"> ', $txt['login'], '</a></li>
					<li><a class="icon_register" href="', $scripturl, '?action=register"> ', $txt['register'], '</a></li>
				</ul>';
				echo'
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
		<div class="modal-header">
		<a class="close" href="#close"></a>
            <p>', $txt['login'], '</p></div>
                        <form id="guest_form" action="', $scripturl, '?action=login2" method="post" accept-charset="', $context['character_set'], '" ', empty($context['disable_login_hashing']) ? ' onsubmit="hashLoginPassword(this, \'' . $context['session_id'] . '\');"' : '', '>
                            <div class="form-group">
							<input type="text" name="user" class="form-control"/>', $txt['user'] ,'
							</div>
							<div class="form-group">
                            <input type="password" name="passwrd" class="form-control"/>', $txt['password'] ,'
							</div>
							<div class="modal-footer">
                            <input type="submit" value="', $txt['login'], '" class="button_submit"/>
							</div>
                        </form>
       </div>';
		}
		echo '
		 </div>
	  </div>
	</div>
<div class="wrapper">
   <div id="subwrapper">   
	<div class="header">';
	echo '	
		<div id="top_section">
			<h1 class="forumtitle">
				<a href="', $scripturl, '">', empty($context['header_logo_url_html_safe']) ? '<img src="'. $settings['images_url']. '/theme/mylogo.png" alt="' . $context['forum_name'] . '" title="' . $context['forum_name'] . '" />' : '<img src="' . $context['header_logo_url_html_safe'] . '" alt="' . $context['forum_name'] . '" title="' . $context['forum_name'] . '" />', '</a>
			</h1>
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
                                <a class="sm_megamenu_head sm_megamenu_nodrop " href="/foro"
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
                                      <span class="sm_megamenu_title">Cont&Aacutectenos</span>
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
    </div>';

	// Define the upper_section toggle in JavaScript.
	echo '
		<script type="text/javascript"><!-- // --><![CDATA[
			var oMainHeaderToggle = new smc_Toggle({
				bToggleEnabled: true,
				bCurrentlyCollapsed: ', empty($options['collapse_header']) ? 'false' : 'true', ',
				aSwappableContainers: [
					\'upper_section\'
				],
				aSwapImages: [
					{
						sId: \'upshrink\',
						srcExpanded: smf_images_url + \'/upshrink.png\',
						altExpanded: ', JavaScriptEscape($txt['upshrink_description']), ',
						srcCollapsed: smf_images_url + \'/upshrink2.png\',
						altCollapsed: ', JavaScriptEscape($txt['upshrink_description']), '
					}
				],
				oThemeOptions: {
					bUseThemeSettings: ', $context['user']['is_guest'] ? 'false' : 'true', ',
					sOptionName: \'collapse_header\',
					sSessionVar: ', JavaScriptEscape($context['session_var']), ',
					sSessionId: ', JavaScriptEscape($context['session_id']), '
				},
				oCookieOptions: {
					bUseCookie: ', $context['user']['is_guest'] ? 'true' : 'false', ',
					sCookieName: \'upshrink\'
				}
			});
		// ]]></script>
		<div class="search_block">
				<form id="search_form" action="', $scripturl, '?action=search2" method="post" accept-charset="', $context['character_set'], '">
					<input class="searchinput" type="text" name="search" value="', $txt['forum_search'], '" onfocus="this.value = \'\';" onblur="if(this.value==\'\') this.value=\'', $txt['forum_search'], '\';" />
					<button type="submit" class="button2"><i class="fa fa-search"></i></button>
					<input type="hidden" name="advanced" value="0" />';

	// Search within current topic?
	if (!empty($context['current_topic']))
		echo '
					<input type="hidden" name="topic" value="', $context['current_topic'], '" />';
	// If we're on a certain board, limit it to this board ;).
	elseif (!empty($context['current_board']))
		echo '
					<input type="hidden" name="brd[', $context['current_board'], ']" value="', $context['current_board'], '" />';

	echo '</form>
	   </div>

				<div id="navbar">
					', template_menu(), '
		</div>';

	// The main content should go here.
	echo '
	<div id="content_section"><div class="frame">
		<div id="main_content_section" ',!empty($settings['width_boards']) ? 'style="width: '.$settings['width_boards'].'"':'','>';

	// Custom banners and shoutboxes should be placed here, before the linktree.

	// Show the navigation tree.
	theme_linktree();
}

function template_body_below()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '<br class="clear" />
		</div>
	</div></div>';

	// Show the "Powered by" and "Valid" logos, as well as the copyright. Remember, the copyright must be somewhere!
	echo '
<div id="footer">
  <div id="yt_footer" class="yt-footer wrap">
    <div class="yt-footer-wrap">
      <div class="footer-middle">
        <div class="container">
          <div class="sn-middle account-block">
            <div class="col-footer">
              <div class="footer-title">
                <h2>Mi Cuenta</h2>
              </div>
              <div class="content-block-footer">
                <ul>
                  <li><a href="/customer/account/create/"><span class="fa icon-caret-right">&nbsp;</i></span>Registrarse</a></li>
                  <li><a href="/customer/account/edit/"><span class="fa icon-caret-right">&nbsp;</span>Actualizar datos</a></li>
                  <li><a href="/customer/account/edit/"><span class="fa icon-caret-right">&nbsp;</span>Cambiar clave</a></li>
                  <li><a href="/customer/account/forgotpassword/"><span class="fa icon-caret-right">&nbsp;</span>Recuperar Clave</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="sn-middle infomation-block">
            <div class="col-footer">
              <div class="footer-title">
                <h2>Servicio al Cliente</h2>
              </div>
              <div class="content-block-footer">
                <ul>
                  <li><a href="/formas-de-pago"><span class="fa icon-caret-right">&nbsp;</span>Formas de pago</a></li>
                  <li><a href="/terminos-y-condiciones"><span class="fa icon-caret-right">&nbsp;</span>T&eacuterminos y condiciones</a></li>
                  <li><a href="/politica-cambios-devoluciones"><span class="fa icon-caret-right">&nbsp;</span>Pol&iacutetica de cambios y devoluciones</a></li>
                  <li><a href="/politica-de-privacidad"><span class="fa icon-caret-right">&nbsp;</span>Pol&iacutetica de privacidad</a></li>
                </ul>
              </div>					</div>
          </div>
          <div class="sn-middle corporate-block">
            <div class="col-footer">
              <div class="footer-title">
                <h2>DentalDoktor</h2>
              </div>
              <div class="content-block-footer">
                <ul>
                  <li><a href="/nosotros.html"><span class="fa icon-caret-right">&nbsp;</span>Nosotros</a></li>
                  <li><a href="/nosotros.html#beneficios"><span class="fa icon-caret-right">&nbsp;</span>Beneficios</a></li>
                  <li><a href="/nosotros.html#aliados"><span class="fa icon-caret-right">&nbsp;</span>Nuestros Aliados</a></li>
                  <li><a target="_blank" href="http://blog.dentaldoktor.com/"><span class="fa icon-caret-right">&nbsp;</span>&Uacute;ltimas Noticias</a></li>
                </ul>
              </div>					</div>
          </div>
          <div class="sn-middle choose-block">
            <div class="col-footer">
            </div>
          </div>

          <div class="sn-middle contact-block">
            <div class="col-footer">
              <div class="footer-title">
                <h2>Cont&aacutectenos</h2>
              </div>
              <div class="content-block-footer">
                <!-- span style="display:inline-block; padding-bottom:10px;" >Atención de Lunes a Viernes<br />De 8:00 a.m. a 5:00 p.m.</span -->
                <ul class="redes-sociales">
                  <li><a class="fa fa-f" target="_blank" title="Facebook" href="https://www.facebook.com/dentaldoktor1/"></a></li>
                  <li><a class="fa fa-l" target="_blank" title="LinkedIn" href="https://www.linkedin.com/company/10906662?trk=tyah&amp;trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_10906662%2Cidx%3A1"></a></li>
                  <li><a class="fa fa-t" target="_blank" title="Twitter" href="https://twitter.com/Dental_Doktor"></a></li>
                  <li><a class="fa fa-y" target="_blank" title="YouTube" href="https://www.youtube.com/channel/UCz2t5I7L5f2sY_ftKRfdpOQ"></a></li>
                  <li><a class="fa fa-i" target="_blank" title="Instagram" href="https://www.instagram.com/dentaldoktor/"></a></li>
                </ul>
                <ul class="clear">
                  <li style="margin-top: -4px;"><span class="sp-ic fa icon-mobile-phone" style="font-size: 22px; position: relative; top: 4px;">&nbsp;</span><a title="Tel:6160257" href="tel:6160257">Bogot&aacute: 6160257 Ext. 113</a></li>
                  <li style="margin-top: -4px;"><span class="sp-ic fa icon-mobile-phone" style="font-size: 22px; position: relative; top: 4px;">&nbsp;</span><a title="Tel:01800123433" href="tel:01800123433">Linea Nacional: 01800 123433</a></li>
                  <li><span class="sp-ic fa icon-envelope" style="font-size: 13px; position: relative;">&nbsp;</span><a title="infodentaldoktor@bellefarma.com" href="mailto:infodentaldoktor@bellefarma.com">infodentaldoktor@bellefarma.com</a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- FOOTER SEVICER -->
      <div class="footer-bottom-sevicer">
        <div class="container">
          <div class="box-sevicer">
            <div class="sn-sevirce sn-put1">
              <div class="img-sevirce img-sevirce1"></div>
              <div class="content-service">
                <a href="#" rel="nofollow" class="sn-title">Alta Calidad</a>
                <span>&nbsp;</span>
              </div>
            </div>

            <div class="sn-sevirce sn-put2">
              <div class="img-sevirce img-sevirce2"></div>
              <div class="content-service">
                <a href="#" rel="nofollow" class="sn-title">Soporte En Linea</a>
                <span>&nbsp;</span>
              </div>
            </div>

            <div class="sn-sevirce sn-put3">
              <div class="img-sevirce img-sevirce3"></div>
              <div class="content-service">
                <a href="#" rel="nofollow" class="sn-title">Entrega R&aacutepida</a>
                <span>&nbsp;</span>
              </div>
            </div>

            <div class="sn-sevirce sn-put4">
              <div class="img-sevirce img-sevirce4"></div>
              <div class="content-service">
                <a href="#" rel="nofollow" class="sn-title">Devoluciones</a>
                <span>&nbsp;</span>
              </div>
            </div>

            <div class="sn-sevirce sn-put5">
              <div class="img-sevirce img-sevirce5"></div>
              <div class="content-service">
                <a href="#" rel="nofollow" class="sn-title">Pago Seguro</a>
                <span>&nbsp;</span>
              </div>
            </div>
          </div>		</div>
      </div>
      <!-- FOOTER BOTTOM -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
              <div class="copyright-footer">
                &copy; 2016 DentalDoktor. Todos Los Derechos Reservados.											</div>
            </div>
            <div class="payment col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <ul class="payment-method">
                <li><a class="payment1" title="Payment Method" href="#"></a></li>
                <li><a class="payment2" title="Payment Method" href="#"></a></li>
                <li><a class="payment3" title="Payment Method" href="#"></a></li>
                <li><a class="payment4" title="Payment Method" href="#"></a></li>
                <li><a class="payment5" title="Payment Method" href="#"></a></li>
              </ul>				</div>
          </div>
        </div>
      </div>
    </div>
  </div>	
</div>';
	echo '
	</div></div></div>';
}

function template_html_below()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '
</body></html>';
}

// Show a linktree. This is that thing that shows "My Community | General Category | General Discussion"..
function theme_linktree($force_show = false)
{
	global $context, $settings, $options, $shown_linktree, $scripturl, $link_num;

	// If linktree is empty, just return - also allow an override.
	if (empty($context['linktree']) || (!empty($context['dont_default_linktree']) && !$force_show))
		return;

	echo '
	<div class="navigate_section">
		<ul>
		<li class="link_home">', ($link_num == count($context['linktree']) < 1) ? '
		<a href="'.$scripturl.'" title="Home"><img class="link_home" src="'.$settings['images_url'].'/home.png" alt="*" /></a>' : '', '</li>';

	// Each tree item has a URL and name. Some may have extra_before and extra_after.
	foreach ($context['linktree'] as $link_num => $tree)
	{
		echo '
			<li', ($link_num == count($context['linktree']) - 1) ? ' class="last"' : '', '>';
			
		// Show something before the link?
		if (isset($tree['extra_before']))
			echo $tree['extra_before'];

		// Show the link, including a URL if it should have one.
		echo $settings['linktree_link'] && isset($tree['url']) ? '
				<a href="' . $tree['url'] . '">' . $tree['name'] . '</a>' : '' . $tree['name'] . '';

		// Show something after the link...?
		if (isset($tree['extra_after']))
			echo $tree['extra_after'];

		// Don't show a separator for the last one.
		if ($link_num != count($context['linktree']) - 1)
			echo '';

		echo '
			</li>';
	}
	echo '
		</ul>
	</div>';

	$shown_linktree = true;
}

// Show the menu up top. Something like [home] [help] [profile] [logout]...
function template_menu()
{
	global $context, $settings, $options, $scripturl, $txt;

	echo '
	<div class="main_menu">
		<label class="showMenu" for="nav"></label>
        <input id="nav" type="checkbox" value="0"  />
		<ul id="topnav">';

	foreach ($context['menu_buttons'] as $act => $button)
	{
		echo '
				<li id="button_', $act, '">
					<a class="', $button['active_button'] ? 'active ' : '', 'firstlevel" href="', $button['href'], '"', isset($button['target']) ? ' target="' . $button['target'] . '"' : '', '>
						<span class="', isset($button['is_last']) ? 'last ' : '', 'firstlevel">', $button['title'], '</span>
					</a>';
		if (!empty($button['sub_buttons']))
		{
			echo '
					<ul>';

			foreach ($button['sub_buttons'] as $childbutton)
			{
				echo '
						<li>
							<a href="', $childbutton['href'], '"', isset($childbutton['target']) ? ' target="' . $childbutton['target'] . '"' : '', '>
								<span', isset($childbutton['is_last']) ? ' class="last"' : '', '>', $childbutton['title'], !empty($childbutton['sub_buttons']) ? '...' : '', '</span>
							</a>';
				// 3rd level menus :)
				if (!empty($childbutton['sub_buttons']))
				{
					echo '
							<ul>';

					foreach ($childbutton['sub_buttons'] as $grandchildbutton)
						echo '
								<li>
									<a href="', $grandchildbutton['href'], '"', isset($grandchildbutton['target']) ? ' target="' . $grandchildbutton['target'] . '"' : '', '>
										<span', isset($grandchildbutton['is_last']) ? ' class="last"' : '', '>', $grandchildbutton['title'], '</span>
									</a>
								</li>';

					echo '
							</ul>';
				}

				echo '
						</li>';
			}
				echo '
					</ul>';
		}
		echo '
				</li>';
	}

	echo '
			</ul></div>';
}

// Generate a strip of buttons.
function template_button_strip($button_strip, $direction = 'top', $strip_options = array())
{
	global $settings, $context, $txt, $scripturl;

	if (!is_array($strip_options))
		$strip_options = array();

	// List the buttons in reverse order for RTL languages.
	if ($context['right_to_left'])
		$button_strip = array_reverse($button_strip, true);

	// Create the buttons...
	$buttons = array();
	foreach ($button_strip as $key => $value)
	{
		if (!isset($value['test']) || !empty($context[$value['test']]))
			$buttons[] = '
				<li><a' . (isset($value['id']) ? ' id="button_strip_' . $value['id'] . '"' : '') . ' class="button_strip_' . $key . (isset($value['active']) ? ' active' : '') . '" href="' . $value['url'] . '"' . (isset($value['custom']) ? ' ' . $value['custom'] : '') . '><i class="fa fa-'.$key.' fa-fw"></i><span>' . $txt[$value['text']] . '</span></a></li>';
	}

	// No buttons? No button strip either.
	if (empty($buttons))
		return;

	// Make the last one, as easy as possible.
	$buttons[count($buttons) - 1] = str_replace('<span>', '<span class="last">', $buttons[count($buttons) - 1]);

	echo '
		<div class="buttonlist', !empty($direction) ? ' float' . $direction : '', '"', (empty($buttons) ? ' style="display: none;"' : ''), (!empty($strip_options['id']) ? ' id="' . $strip_options['id'] . '"': ''), '>
			<ul class="nav nav-pills">',
				implode('', $buttons), '
			</ul>
		</div>';
}
?>
