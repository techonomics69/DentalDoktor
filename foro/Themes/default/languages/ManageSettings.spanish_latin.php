<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Esta página le permite cambiar la configuración de características, mods, y las opciones básicas en su foro. Por favor, consulte la <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s"> Configuración del tema </a> para más opciones. Haga clic en los iconos de ayuda para obtener más información acerca de un ajuste.';
$txt['security_settings_desc'] = 'Esta página le permite configurar opciones específicas relacionadas con la seguridad y la moderación de su foro, incluidas las opciones anti-spam.';
$txt['modification_settings_desc'] = 'Esta página contiene los valores agregados por cualquier modificación de su foro';

$txt['modification_no_misc_settings'] = 'No hay modificaciones instaladas';

$txt['pollMode'] = 'Modo de encuesta';
$txt['disable_polls'] = 'Desactivar encuentas';
$txt['enable_polls'] = 'Activar encuentas';
$txt['polls_as_topics'] = 'Mostrar las encuestas existentes como temas';
$txt['allow_guestAccess'] = 'Permitir a invitados navegar por el foro';
$txt['userLanguage'] = 'Habilitar seleccionar idioma por el usuario';
$txt['allow_editDisplayName'] = 'Permitir a los usuarios editar sus nombre';
$txt['allow_hideOnline'] = 'Permitir a los usuarios ocultar su Estado';
$txt['guest_hideContacts'] = 'No revele información a invitados';
$txt['titlesEnable'] = 'Habilitar títulos personalizados';
$txt['enable_buddylist'] = 'Habilitar listas amigo(a)s/ignorado(a)s ';
$txt['default_personal_text'] = 'Texto personal predeterminado<div class="smalltext">Texto personal asignado a los usuarios recién registrados.</div>';
$txt['number_format'] = 'Formato de número predeterminado';
$txt['time_format'] = 'Formato de hora predeterminado';
$txt['setting_time_offset'] = 'Tiempo total de desplazamiento<div class="smalltext">(Añadido a la opción de miembro específico.)</div>';
$txt['setting_default_timezone'] = 'Zona horaria del servidor';
$txt['failed_login_threshold'] = 'Error de entrada';
$txt['lastActive'] = 'Usuario en línea en tiempo límite';
$txt['trackStats'] = 'Pista de estadísticas diarias';
$txt['hitStats'] = 'Pista de páginas vistas al día <div class="smalltext">(debe tener activada las estadísticas)</div>';
$txt['enableCompressedOutput'] = 'Active la salida comprimida';
$txt['disableTemplateEval'] = 'Deshabilitar la evaluación de las plantillas';
$txt['databaseSession_enable'] = 'Usar base de datos para almacenar sesiones';
$txt['databaseSession_loose'] = 'Los navegadores dejan volver a las páginas caché';
$txt['databaseSession_lifetime'] = 'Segundos antes de que una sesión sin usar expire';
$txt['enableErrorLogging'] = 'Habilitar el registro de error';
$txt['enableErrorQueryLogging'] = 'Incluye consulta de registro de errores';
$txt['pruningOptions'] = 'Habilitar la poda de entradas de registro';
$txt['pruneErrorLog'] = 'Eliminar registro de errores de más de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneModLog'] = 'Eliminar registro de modereción de más de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneBanLog'] = 'Eliminar registro de Ban de más de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneReportLog'] = 'Eliminar registro de reporte de más de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneScheduledTaskLog'] = 'Eliminar registro de tareas programadas de más de<div class="smalltext">(0 para desactivar)</div>';
$txt['pruneSpiderHitLog'] = 'Eliminar registro de busqueda de más de<div class="smalltext">(0 para desactivar)</div>';
$txt['cookieTime'] = 'Duración predeterminada de "cookies" de ingreso (en minutos)';
$txt['localCookies'] = 'Activar el almacenamiento local de cookies<div class="smalltext">(SSI no funcionará bien con esto.)</div>';
$txt['globalCookies'] = 'Usar cookies independientes para subdominio<div class="smalltext">(desactivar las cookies primarias local!)</div>';
$txt['secureCookies'] = 'Forzar cookies para estar seguros<div class="smalltext">(Esto sólo se aplica si usted está usando HTTPS - no use otra cosa!)</div>';
$txt['securityDisable'] = 'Deshabilitar seguridad de la administración';
$txt['send_validation_onChange'] = 'Exigir la reactivación tras cambio de email';
$txt['approveAccountDeletion'] = 'Requerir aprobación de admin cuando un miembro elimina su cuenta';
$txt['autoOptMaxOnline'] = 'Cantidad de usuarios conectados al optimizar<div class="smalltext">(0 si no quiere max.)</div>';
$txt['autoFixDatabase'] = 'Corregir automáticamente las tablas rotas';
$txt['allow_disableAnnounce'] = 'Permitir a los usuarios deshabilitar los anuncios';
$txt['disallow_sendBody'] = 'No permitir Notificaciones';
$txt['queryless_urls'] = 'Usar URLs amigables para los motores de búsqueda<div class="smalltext">¡Apache/Lighttpd only!</div>';
$txt['max_image_width'] = 'Anchura máx de fotos publicadas <div class="smalltext">(0 = desactivadas)</div>';
$txt['max_image_height'] = 'Altura máx de fotos publicadas <div class="smalltext">(0 = desactivadas)</div>';
$txt['enableReportPM'] = 'Permitir reporte de mensajes personales';
$txt['max_pm_recipients'] = 'Número máximo de destinatarios en MP<div class="smalltext">(0 para no limitar, los administradores están exentos)</div>';
$txt['pm_posts_verification'] = 'Numero el que usuarios deben poner el código<div class="smalltext">(0 para no limitar, los administradores están exentos)</div>';
$txt['pm_posts_per_hour'] = 'Número de MP que un usuario puede enviar<div class="smalltext">(En 1 hora) (0 para no limitar, los moderadores están exentos)</div>';
$txt['compactTopicPagesEnable'] = 'Limitar numero mostrado de Links de páginas';
$txt['contiguous_page_display'] = 'páginas contiguas para mostrar';
$txt['to_display'] = 'para mostrar';
$txt['todayMod'] = 'Habilitar visualización de fecha';
$txt['today_disabled'] = 'Inhabilitado';
$txt['today_only'] = 'Sólo hoy';
$txt['yesterday_today'] = 'Ayer y Hoy';
$txt['topbottomEnable'] = 'Habilitar botones Ir arriba/Ir Abajo';
$txt['onlineEnable'] = 'Mostrar online/offline en posteos y MP';
$txt['enableVBStyleLogin'] = 'Mostrar una entrada rápida en cada página';
$txt['defaultMaxMembers'] = 'Miembros por página en la lista de miembros';
$txt['timeLoadPageEnable'] = 'Se visualiza el tiempo para crear las páginas';
$txt['disableHostnameLookup'] = 'Desactivar búsquedas de nombre de host';
$txt['who_enabled'] = 'Habilitar la lista de quién está en línea';
$txt['make_email_viewable'] = 'Permitir ver direcciones de correo electrónico';
$txt['meta_keywords'] = 'Meta palabras clave asociadas con el foro <div class="smalltext">Para los motores de búsqueda. Deja en blanco para usar las predeterminadas.</div>';

$txt['karmaMode'] = 'Modo Karma';
$txt['karma_options'] = 'Deshabilitar karma|Habilitar karma total|Habilitar karma positivo/negativo';
$txt['karmaMinPosts'] = 'Establecer posteos mínimos necesarios para modificar el karma';
$txt['karmaWaitTime'] = 'Establezca el tiempo de espera en horas';
$txt['karmaTimeRestrictAdmins'] = 'Restringir administradores de tiempo';
$txt['karmaLabel'] = 'Etiqueta Karma';
$txt['karmaApplaudLabel'] = 'Etiqueta aplaudir Karma';
$txt['karmaSmiteLabel'] = 'Etiqueta herir Karma';

$txt['caching_information'] = '<div align="center"><b><u>¡Importante! Lea primero antes de habilitar estas características.</b></u></div><br />
	SMF admite el almacenamiento en caché mediante el uso de aceleradores. Los aceleradores actualmente soportados incluyen:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (No Zend Optimizer)</li>
	</ul>
	El almacenamiento en caché funciona mejor si tiene PHP compilado con uno de los optimizadores de arriba, o memcache disponibles.
	Si usted no tiene instalado ningún optimizador hará caché de archivos basado en SMF.<br /><br />
	SMF realiza el almacenamiento en caché en una variedad de niveles. Cuanto mayor sea el nivel habilitado de almacenamiento en caché, más 
	tiempo tardara el CPU en recuperar información. Si la caché está disponible en su máquina, es recomendable que trates de almacenamiento en caché en el nivel 1 en primer lugar.
	<br /><br />
	Tenga en cuenta que si utiliza memcached tiene que proporcionar los detalles del servidor en el entorno de abajo. Esto debe contabilizarse con una lista separada por comas.
	Como muestra el ejemplo a continuación:<br />
	"server1,server2,server3:port,server4"<br /><br />
	Tenga en cuenta que si no se especifica el puerto SMF usará el puerto 11211. SMF intentará realizar en bruto/carga aleatoria el equilibrio entre los servidores.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<strong class="alert">SMF no ha sido capaz de detectar un acelerador compatible en su servidor.</strong>';
$txt['detected_APC'] = '<b style="color: green">SMF ha detectado QUE TÚ Servidor Instalado Tiene APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF ha detectado que el servidor tiene instalado eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF ha detectado que el servidor tiene instalado MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF ha detectado que el servidor tiene instalado Zend.';
$txt['detected_Memcached'] = '<strong style="color: green">SMF ha detectado que el servidor tiene instalado Memcached.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF ha detectado que el servidor tiene instalado XCache.</strong>';

$txt['cache_enable'] = 'Nivel de almacenamiento en caché';
$txt['cache_off'] = 'No caché';
$txt['cache_level1'] = 'Nivel 1 caché';
$txt['cache_level2'] = 'Nivel 2 caché (No Recomendado)';
$txt['cache_level3'] = 'Nivel 3 caché (No Recomendado)';
$txt['cache_memcached'] = 'Config Memcache';

$txt['loadavg_warning'] = '<span class="error">Nota: la siguiente configuración se pueden editar con cuidado. Cualquiera ajuste demasiado bajo puede hacer que su foro quede <strong>inservible</strong>!</span> La carga media actual del servidor es <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Habilitar equilibrio de carga con promedios de carga';
$txt['loadavg_auto_opt'] = 'Umbral para desactivar optimización de BD';
$txt['loadavg_search'] = 'Umbral para desactivar la búsqueda';
$txt['loadavg_allunread'] = 'Umbral para desactivar todos los temas no leídos';
$txt['loadavg_unreadreplies'] = 'Umbral para desactivar las respuestas no leídos';
$txt['loadavg_show_posts'] = 'Umbral para desactivar mostrando mensajes';
$txt['loadavg_forum'] = 'Umbral para desactivar el foro <strong>completamente</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">El soporte para balanceo de carga no está disponible en Windows.</span> ';
$txt['loadavg_disabled_conf'] = '<span class="error">El soporte para balanceo de carga está desactivado por la configuración de tu servidor.</span> ';

$txt['setting_password_strength'] = 'Fuerza requerida para contraseñas de usuario';
$txt['setting_password_strength_low'] = 'Baja - 4 caracteres mínimo';
$txt['setting_password_strength_medium'] = 'Media - no puede contener nombre de usuario';
$txt['setting_password_strength_high'] = 'Alto - mezcla de diferentes caracteres';

$txt['antispam_Settings'] = 'Verificación de Anti-Spam';
$txt['antispam_Settings_desc'] = 'Esta sección le permite a los controles de verificación de configuración asegurar que el usuario es un ser humano (y no un robot), y modificar cómo y dónde aplicarlas.';
$txt['setting_reg_verification'] = 'Requerir comprobación en la página de registro';
$txt['posts_require_captcha'] = 'Los usuarios deben verificar para posteart';
$txt['posts_require_captcha_desc'] = '(0 para no limitar, los moderadores están exentos)';
$txt['search_enable_captcha'] = 'Requerir comprobación en todas las búsquedas';
$txt['setting_guests_require_captcha'] = 'Los invitados deben verificar para incluir un anuncio';
$txt['setting_guests_require_captcha_desc'] = '(Establece automáticamente si se especifica una cifra mínima)';
$txt['guests_report_require_captcha'] = 'Los Invitados deben pasar una verificación cuando reporten un mensaje';

$txt['configure_verification_means'] = 'Configurar los métodos de verificación';
$txt['setting_qa_verification_number'] = 'Número de preguntas de verificación';
$txt['setting_qa_verification_number_desc'] = '(0 para desactivar, las preguntas se indican a continuación)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">A continuación puede determinar qué características de anti-spam desea tener activado para comprobar que el usuario es un ser humano. Tenga en cuenta que el usuario tendrá que pasar <em>todas</em> las verificaciones.</span>';
$txt['setting_visual_verification_type'] = 'Verificación visual de la imagen para mostrar';
$txt['setting_visual_verification_type_desc'] = 'Cuanto más compleja sea la imagen más difícil es para los robots';
$txt['setting_image_verification_off'] = 'Ninguna';
$txt['setting_image_verification_vsimple'] = 'Muy simple - Texto sin formato en la imagen';
$txt['setting_image_verification_simple'] = 'Simple - Acumulación letras de color, sin ruidos';
$txt['setting_image_verification_medium'] = 'Medio - letras superpuestas de color, con el ruido/líneas';
$txt['setting_image_verification_high'] = 'Alto - cartas en ángulo, el ruido considerable/líneas';
$txt['setting_image_verification_extreme'] = 'Extrema - cartas en ángulo, el ruido, las líneas y bloques';
$txt['setting_image_verification_sample'] = 'Muestra';
$txt['setting_image_verification_nogd'] = '<strong>Nota:</strong> Ya que este servidor no tiene la librería GD instalada la configuración de diferente complejidad no tendrá ningún efecto.';
$txt['setup_verification_questions'] = 'Preguntas de verificación';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si desea que los usuarios respondan a las preguntas de verificación para poner fin a robots de spam debe configurar un número de preguntas en el siguiente cuadro. Usted debe escoger preguntas relativamente sencillas. Usted puede usar la BBC en las cuestiones de formato, para eliminar una pregunta sólo tiene que borrar el contenido de esa línea.</span>';
$txt['setup_verification_question'] = 'Pregunta';
$txt['setup_verification_answer'] = 'Respuesta';
$txt['setup_verification_add_more'] = 'Añadir otra pregunta';

$txt['moderation_settings'] = 'Configuración Moderación';
$txt['setting_warning_enable'] = 'Permitir Sistema de Alerta al usuario';
$txt['setting_warning_watch'] = 'Nivel de advertencia para el usuario<div class="smalltext">(0 para desactivarlo).</div>';
$txt['setting_warning_moderate'] = 'Nivel de advertencia para la moderacion de post<div class="smalltext">(0 para desactivarlo).</div>';
$txt['setting_warning_mute'] = 'Nivel de advertencia para el usuario de muting<div class="smalltext">(0 para desactivarlo).</div>';
$txt['setting_user_limit'] = 'Puntos Máximas de alerta a usuario por día<div class="smalltext"> (0 sin limites).</div>';
$txt['setting_warning_decrement'] = 'Advertencia para disminuir los puntos de usuarios <div class="smalltext">(Cada 1 Día) (0 para desactivarlo).</div>';
$txt['setting_warning_show'] = 'Los usuarios que pueden ver el estado de alerta<div class="smalltext">Determina quién puede ver el nivel de alerta de los usuarios del foro.</div>';
$txt['setting_warning_show_mods'] = 'Sólo los moderadores';
$txt['setting_warning_show_user'] = 'Los moderadores y usuarios advertidos';
$txt['setting_warning_show_all'] = 'Todos los Usuarios';

$txt['signature_settings'] = 'Ajustes Firma';
$txt['signature_settings_desc'] = 'Utilice los parámetros de esta página para ajustar firma.';
$txt['signature_settings_warning'] = 'Tenga en cuenta que los ajustes no se aplican a las firmas existentes de forma predeterminada. Clic <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Aca</a> para aplicar las normas a todas las firmas existentes.';
$txt['signature_enable'] = 'Habilitar firmas';
$txt['signature_max_length'] = 'Caracteres máximo permitido<div class="smalltext">(0 sin max.)</div>';
$txt['signature_max_lines'] = 'Importe máximo de las líneas<div class="smalltext">(0 sin max)</div>';
$txt['signature_max_images'] = 'Máximo número de imagenes<div class="smalltext">(0 no max. - excluye emoticonos)</div>';
$txt['signature_allow_smileys'] = 'Permitir emoticons en firmas';
$txt['signature_max_smileys'] = 'Máximo smiley <div class="smalltext">(0 sin max)</div>';
$txt['signature_max_image_width'] = 'Anchura máxima de las imágenes de firma (pixels)<div class="smalltext">(0 sin max)</div>';
$txt['signature_max_image_height'] = 'Altura máxima de las imágenes de firma (pixels)<div class="smalltext">(0 sin max)</div>';
$txt['signature_max_font_size'] = 'Tamaño máximo de fuente permitido en firmas<div class="smalltext">(0 sin max)</div>';
$txt['signature_bbc'] = 'Habilitado etiquetas BBC ';

$txt['custom_profile_title'] = 'Campos de perfil personalizados';
$txt['custom_profile_desc'] = 'Desde esta página usted puede crear sus propios campos de perfil personalizados que encajan con los requisitos de su propios foros';
$txt['custom_profile_active'] = 'Activo';
$txt['custom_profile_fieldname'] = 'Nombre de campo';
$txt['custom_profile_fieldtype'] = 'Tipo de campo';
$txt['custom_profile_make_new'] = 'Nuevo campo';
$txt['custom_profile_none'] = 'No ha creado ningún campos de perfil personalizado aún!';
$txt['custom_profile_icon'] = 'Icono';

$txt['custom_profile_type_text'] = 'Texto';
$txt['custom_profile_type_textarea'] = 'Texto grandet';
$txt['custom_profile_type_select'] = 'Casilla de selección';
$txt['custom_profile_type_radio'] = 'Boton Radio';
$txt['custom_profile_type_check'] = 'Casilla de verificación';

$txt['custom_add_title'] = 'Agregar campo de perfil';
$txt['custom_edit_title'] = 'Editar campo de perfil';
$txt['custom_edit_general'] = 'Configuración de pantalla';
$txt['custom_edit_input'] = 'Ajustes de entrada';
$txt['custom_edit_advanced'] = 'Configuración avanzada';
$txt['custom_edit_name'] = 'Nombre';
$txt['custom_edit_desc'] = 'Descripción';
$txt['custom_edit_profile'] = 'Sección de perfil';
$txt['custom_edit_profile_desc'] = 'Esta seccion de perfil se edita';
$txt['custom_edit_profile_none'] = 'Ninguno';
$txt['custom_edit_registration'] = 'Mostrar en el Registro';
$txt['custom_edit_registration_disable'] = 'No ';
$txt['custom_edit_registration_allow'] = 'Si';
$txt['custom_edit_registration_require'] = 'sí, y requieren entrada';
$txt['custom_edit_display'] = 'Mostrar en el tema';
$txt['custom_edit_picktype'] = 'Tipo de campo';

$txt['custom_edit_max_length'] = 'Longitud máxima';
$txt['custom_edit_max_length_desc'] = '(0 sin limite)';
$txt['custom_edit_dimension'] = 'Dimensiones';
$txt['custom_edit_dimension_row'] = 'Filas';
$txt['custom_edit_dimension_col'] = 'Columnas';
$txt['custom_edit_bbc'] = 'Permitir BBC';
$txt['custom_edit_options'] = 'Opciones';
$txt['custom_edit_options_desc'] = 'Deja cuadro de opción en blanco para eliminarlo. botón de radio selecciona la opción por defecto';
$txt['custom_edit_options_more'] = 'Mas';
$txt['custom_edit_default'] = 'Estado predeterminado';
$txt['custom_edit_active'] = 'Activo';
$txt['custom_edit_active_desc'] = 'Si no se selecciona este campo no se mostrará a nadie';
$txt['custom_edit_privacy'] = 'Privacidad';
$txt['custom_edit_privacy_desc'] = 'Quién puede ver y editar este campo.';
$txt['custom_edit_privacy_all'] = 'Los usuarios pueden ver este campo; propietario puede editar.';
$txt['custom_edit_privacy_see'] = 'Los usuarios pueden ver este campo, solo los administradores pueden editarlo.';
$txt['custom_edit_privacy_owner'] = 'Los usuarios no pueden ver este campo; propietario y los administradores pueden editarlo.';
$txt['custom_edit_privacy_none'] = 'Este campo sólo está visible para los administradores';
$txt['custom_edit_can_search'] = 'Buscable';
$txt['custom_edit_can_search_desc'] = 'Este campo buscará en la lista de miembros.';
$txt['custom_edit_mask'] = 'Máscara de entrada';
$txt['custom_edit_mask_desc'] = 'Puede seleccionar una mascara de entrada para validar los datos del campo de texto.';
$txt['custom_edit_mask_email'] = 'Validar Email';
$txt['custom_edit_mask_number'] = 'Numérico';
$txt['custom_edit_mask_nohtml'] = 'No HTML ';
$txt['custom_edit_mask_regex'] = 'Regex (Avanzado)';
$txt['custom_edit_enclose'] = 'Mostrar dentro del texto (opcional)';
$txt['custom_edit_enclose_desc'] = 'Es <strong>muy</strong> recomendable usar una máscara para validar la entrada suministrada por el usuario.';

$txt['custom_edit_placement'] = 'Elija la colocación';
$txt['custom_edit_placement_standard'] = 'Estándar (con título)';
$txt['custom_edit_placement_withicons'] = 'Con Iconos';
$txt['custom_edit_placement_abovesignature'] = 'Encima de la Firma';
$txt['custom_profile_placement'] = 'Colocación';
$txt['custom_profile_placement_standard'] = 'Estándar';
$txt['custom_profile_placement_withicons'] = 'Con Iconos';
$txt['custom_profile_placement_abovesignature'] = 'Encima de la Firma';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '¿Está seguro que desea eliminar este campo? - todos los datos relacionados se perderán!';

$txt['standard_profile_title'] = 'Campo de perfil estándar';
$txt['standard_profile_field'] = 'Campo';

$txt['core_settings_welcome_msg'] = 'Bienvenido a tu nuevo foro';
$txt['core_settings_welcome_msg_desc'] = 'Para empezar te sugiero seleccionar cuales son las características que desea habilitar de SMF. Te recomendamos que permitas sólo las características que necesita!';
$txt['core_settings_item_cd'] = 'Calendario';
$txt['core_settings_item_cd_desc'] = 'Al habilitar esta función se abrirá una selección de opciones para permitirle a los usuarios ver el calendario, agregar y revisar los eventos, fechas de nacimiento de usuarios y mucho, mucho más.';
$txt['core_settings_item_cp'] = 'Campo de perfil avanzado';
$txt['core_settings_item_cp_desc'] = 'Esto le permite ocultar los campos estándar de perfil y crear nuevos campos de perfil de su foro.';
$txt['core_settings_item_k'] = 'Karma ';
$txt['core_settings_item_k_desc'] = 'Karma es una característica que demuestra la popularidad de un miembro. Los miembros, si lo permite, pueden \'aplaudir\' o \'castigar\' a otros miembros, que es como se calcula su popularidad.';
$txt['core_settings_item_ml'] = 'Moderación Log';
$txt['core_settings_item_ml_desc'] = 'Habilitar la moderación de Log para mantener registro de todas las acciones adoptadas por su moderadores.';
$txt['core_settings_item_pm'] = 'Moderación de Post';
$txt['core_settings_item_pm_desc'] = 'La moderación de Post le permite seleccionar los grupos y las tablas en el que los mensajes deben ser aprobados antes de que se haga pública. Al habilitar esta función, asegúrese de visitar la sección de permiso para establecer los permisos pertinentes.';
$txt['core_settings_item_ps'] = 'Suscripciones de pago';
$txt['core_settings_item_ps_desc'] = 'Suscripciones de pago le permitirá a los usuarios pagar por la suscripción a cambiar de Grupo en el foro y así cambiar sus derechos de acceso.';
$txt['core_settings_item_rg'] = 'Generación de Reportes';
$txt['core_settings_item_rg_desc'] = 'Esta característica de administración permite la generación de informes (que se puede imprimir) para presentar su configuración actual de una manera fácil para ver - especialmente útil para los grandes foros.';
$txt['core_settings_item_sp'] = 'Seguimiento del motor de búsqueda';
$txt['core_settings_item_sp_desc'] = 'Al habilitar esta función permitirá a los administradores rastrear los motores de búsqueda.';
$txt['core_settings_item_w'] = 'Sistema de Alerta';
$txt['core_settings_item_w_desc'] = 'Esta funcionalidad permite a los administradores y moderadores emitir advertencias a los usuarios, también incluye funciones avanzadas para eliminar automáticamente los derechos de usuario a medida que aumenta el nivel de alerta. Nota: para sacar el máximo provecho de esta función (moderación de Post) debe estar activado.';
$txt['core_settings_switch_on'] = 'Haga clic para activar ';
$txt['core_settings_switch_off'] = 'Haga clic para desactivar ';
$txt['core_settings_enabled'] = 'Activado';
$txt['core_settings_disabled'] = 'Desactivado';

$txt['languages_lang_name'] = 'Nombre del Idioma';
$txt['languages_locale'] = 'Lugar';
$txt['languages_default'] = 'Predeterminado';
$txt['languages_character_set'] = 'Conjunto de caracteres';
$txt['languages_users'] = 'Usuario';
$txt['language_settings_writable'] = '<strong>Advertencia:</strong> No se puede escribir el Settings.php por lo que la configuración de idioma predeterminada no se puede guardar.';
$txt['edit_languages'] = 'Editar idioma';
$txt['lang_file_not_writable'] = '<strong>Advertencia:</strong> El archivo de idioma primario (%1$s) no tiene permiso de escritura. Debe dar permisos de escritura antes de hacer cualquier cambio.';
$txt['lang_entries_not_writable'] = '<strong>Advertencia:</strong> El archivo de idioma que desea editar (%1$s) no tiene permiso de escritura. Debe dar permisos de escritura antes de hacer cualquier cambio.';
$txt['languages_ltr'] = 'De derecha a izquierda';

$txt['add_language'] = 'Agregar idioma';
$txt['add_language_smf'] = 'Descarga de Simple Machines';
$txt['add_language_smf_browse'] = 'Escriba el nombre del idioma a buscar o dejar en blanco para buscar todos.';
$txt['add_language_smf_install'] = 'Instalar';
$txt['add_language_smf_found'] = 'Se encontraron los siguientes idiomas. Haga clic en el enlace al lado del idioma que desea instalar, a continuación, se tomarán el paquetes a instalar.';
$txt['add_language_error_no_response'] = 'El sitio simple Machines no responde. Por favor, inténtelo más tarde.';
$txt['add_language_error_no_files'] = 'No se encontraron archivos.';
$txt['add_language_smf_desc'] = 'Descripción';
$txt['add_language_smf_utf8'] = 'UTF-8 ';
$txt['add_language_smf_version'] = 'Versión';

$txt['edit_language_entries_primary'] = 'A continuación se muestran los ajustes para este paquete de idioma.';
$txt['edit_language_entries'] = 'Modificar las entradas del idioma';
$txt['edit_language_entries_file'] = 'Seleccione para editar las entradas';
$txt['languages_dictionary'] = 'Diccionario';
$txt['languages_spelling'] = 'Ortografía';
$txt['languages_for_pspell'] = 'Esto es para <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - si está instalado';
$txt['languages_rtl'] = 'Activar modo (De derecha a izquierda)';

$txt['lang_file_desc_index'] = 'Strings General';
$txt['lang_file_desc_EmailTemplates'] = 'Plantillas de email';

$txt['languages_download'] = 'Descargar paquete de idioma';
$txt['languages_download_note'] = 'Esta página muestra todos los archivos que están contenidos dentro del paquete de idioma y algo de información útil acerca de cada uno. Todos los archivos que tienen su casilla de verificación asociada marcados se copiarán.';
$txt['languages_download_info'] = '<strong>Nota:</strong>
	<ul class="normallist">
		<li>Los archivos que tengan el estado (no puede ser escrito) significa que SMF no será capaz de copiar este archivo en el directorio y debe dar permisos de escritura, ya sea usando un cliente FTP o rellenando sus datos en la parte inferior de la página.</li>
		<li>La información de la versión de un archivo muestra la última versión que fue actualizado para SMF. El verde indica que esta es una versión más reciente de la que tenemos. El ámbar esto indica que es la misma versión que la que tenemos. El rojo indica que esta es una versión más vieja de la que tenemos.</li>
		<li>Cuando un archivo ya existe en el foro, la columna (ya existe) tendrá uno de dos valores. (Idénticos) indica que el archivo ya existe en una forma idéntica y no necesitan ser sobreescrito. (Diferentes) significa que el contenido varían de alguna manera y sobrescribir es probablemente la solución óptima.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Archivos primarios';
$txt['languages_download_theme_files'] = 'Archivos Temas-relacionados';
$txt['languages_download_filename'] = 'Nombre de Archivos';
$txt['languages_download_dest'] = 'Destino';
$txt['languages_download_writable'] = 'Grabables';
$txt['languages_download_version'] = 'Version ';
$txt['languages_download_older'] = 'Usted tiene una nueva versión de este archivo instalado, no se recomienda remplazarlo.';
$txt['languages_download_exists'] = 'ya existe';
$txt['languages_download_exists_same'] = 'Idéntico';
$txt['languages_download_exists_different'] = 'Diferente';
$txt['languages_download_copy'] = 'Copia';
$txt['languages_download_not_chmod'] = 'No se puede continuar con la instalación hasta que todos los archivos seleccionados para copiar sean de escritura.';
$txt['languages_download_illegal_paths'] = 'El paquete contiene caminos ilegales - por favor póngase en contacto con Simple Machines';
$txt['languages_download_complete'] = 'Instalación Completa';
$txt['languages_download_complete_desc'] = 'Paquete de idioma instalado con éxito. Por favor haga clic <a href="%1$s">aquí</a> para volver a la página de idiomas';
$txt['languages_delete_confirm'] = '¿Estás seguro que quieres eliminar este idioma?';

?>