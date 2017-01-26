<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'No estás autorizado a cambiar este perfil.';
$txt['website_title'] = 'Título de tu sitio Web';
$txt['website_url'] = 'URL de tu sitio Web';
$txt['signature'] = 'Firma';
$txt['profile_posts'] = 'Mensajes';
$txt['change_profile'] = 'Cambiar perfil';
$txt['delete_user'] = 'Borrar usuario';
$txt['current_status'] = 'Estado actual:';
$txt['personal_text'] = 'Texto personal';
$txt['personal_picture'] = 'Imagen personalizada';
$txt['no_avatar'] = 'Sin avatar';
$txt['choose_avatar_gallery'] = 'Escoge un avatar de la galería';
$txt['picture_text'] = 'Imagen/Texto';
$txt['reset_form'] = 'Reinicializar formulario';
$txt['preferred_language'] = 'Idioma preferido';
$txt['age'] = 'Edad';
$txt['no_pic'] = '(sin imagen)';
$txt['latest_posts'] = 'últimos mensajes de: ';
$txt['additional_info'] = 'Información Adicional';
$txt['avatar_by_url'] = 'Especifica tu propio avatar por URL. (ej: <em>http://www.HablaJapones.org/SSJ4.gif</em>)';
$txt['my_own_pic'] = 'Especificar avatar por URL';
$txt['date_format'] = 'Esta selección hará que las fechas en el foro se muestren en este formato.';
$txt['time_format'] = 'Formato de Hora';
$txt['display_name_desc'] = 'Este es el nombre a mostrar que la gente verá.';
$txt['personal_time_offset'] = 'Número de horas +/- para ajustarlo a tu hora local.';
$txt['dob'] = 'Fecha de nacimiento';
$txt['dob_month'] = 'Mes (MM)';
$txt['dob_day'] = 'Día (DD)';
$txt['dob_year'] = 'Año (AAAA)';
$txt['password_strength'] = 'Te sugerimos que utilices 6 o más caracteres combinando números y letras.';
$txt['include_website_url'] = 'Debe incluirse si abajo especificas una URL.';
$txt['complete_url'] = 'Debe ser un URL completo.';
$txt['your_icq'] = 'Este es tu número de ICQ.';
$txt['your_aim'] = 'Este es tu nickname de AOL Instant Messenger.';
$txt['your_yim'] = 'Este es tu nickname de Yahoo! Instant Messenger.';
$txt['sig_info'] = 'Las firmas se muestran en la parte inferior de cada mensaje o mensaje personal. En tu firma puedes utilizar códigos BBC o smileys.';
$txt['max_sig_characters'] = 'Máximo de caracteres: %1$d; caracteres restantes:';
$txt['send_member_pm'] = 'Enviar a este miembro un mensaje personal';
$txt['hidden'] = 'oculto';
$txt['current_time'] = 'Hora actual en el foro';
$txt['digits_only'] = 'El cuadro \'número de mensajes\' debe contener sólo dígitos.';

$txt['language'] = 'Idioma';
$txt['avatar_too_big'] = 'La imagen de tu avatar es demasiado grande, por favor cámbiale el tamaño e intenta nuevamente (máx';
$txt['invalid_registration'] = 'El valor de la Fecha de Registro es inválida, ejemplo válido:';
$txt['msn_email_address'] = 'Su dirección de correo del MSM messenger ';
$txt['current_password'] = 'Contraseña actual';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Por razones de seguridad, debes introducir tu contraseña actual para hacer cualquier cambio a tu perfil.';

$txt['timeoffset_autodetect'] = '(detectar automáticamente)';

$txt['secret_question'] = 'Pregunta secreta';
$txt['secret_desc'] = 'Para ayudarte en un futuro a obtener tu contraseña, introduce aquí una pregunta con una respuesta que <strong>solamente</strong> tú conozcas.';
$txt['secret_desc2'] = '¡Elígela cuidadosamente, no desearías que alguien adivine tu respuesta!';
$txt['secret_answer'] = 'Respuesta';
$txt['secret_ask'] = 'Pregúntame mi Pregunta secreta';
$txt['cant_retrieve'] = 'No puedes obtener tu contraseña, pero puedes especificar una nueva visitando el enlace que se te envió por email.  Tienes también la opción de especificar una nueva contraseña contestando tu pregunta secreta.';
$txt['incorrect_answer'] = 'Lo sentimos, pero tú no especificaste una combinación válida de Pregunta secreta y Respuesta en tu perfil.  Por favor haz clic en el botón Atrás, y usa el método predeterminado para obtener tu contraseña.';
$txt['enter_new_password'] = 'Por favor introduce la respuesta a tu pregunta secreta, así como la nueva contraseña que deseas usar.  Tu contraseña será cambiada al nuevo valor especificado en caso que contestes correctamente la pregunta secreta.';
$txt['password_success'] = 'Tu contraseña ha sido cambiada exitosamente. Haz <br />clic <a href="' . $scripturl . '?action=login">aquí</a> para ingresar.';
$txt['secret_why_blank'] = '¿porqué está en blanco?';

$txt['authentication_reminder'] = 'Recordatorio de autenticación';
$txt['password_reminder_desc'] = 'si olvidaste los detalles de tu contraseña, no te preocupes, pueden ser recuperados. Para empezar el proceso por favor escribe tu nombre de usuario o tu dirección de correo.';
$txt['authentication_options'] = 'Por favor seleccione una de las dos opciones abajo';
$txt['authentication_openid_email'] = 'Enviarme un recordatorio de mi cuenta OpenID';
$txt['authentication_openid_secret'] = 'Responde tu "regunta secreta" para mostrar tu identidad de OpenID.';
$txt['authentication_password_email'] = 'Enviarme un correo con la nueva contraseña';
$txt['authentication_password_secret'] = 'Déjame cambiar mi Contraseñ Respondiendo mi "Pregunta Secreta" ';
$txt['openid_secret_reminder'] = 'por favor, escribe tu respuesta a la pregunta, si la respuesta es correcta, tu identidad OpenID será mostrada.';
$txt['reminder_openid_is'] = 'La identidad OpenID asociada con tu cuenta es<br />&nbsp;&nbsp;&nbsp;&nbsp;<strong>%1$s</strong><br /><br />Por favor toma nota de esto para futuras referencias.';
$txt['reminder_continue'] = 'Continuar';

$txt['current_theme'] = 'Tema actual';
$txt['change'] = '(cambiar)';
$txt['theme_preferences'] = 'Configuración del Tema';
$txt['theme_forum_default'] = 'Predeterminado del foro local';
$txt['theme_forum_default_desc'] = 'Este es el tema predeterminado, lo que significa que tu tema cambiará de acuerdo a la configuración establecida por el administrador, y del foro que estés viendo.';

$txt['profileConfirm'] = '¿Realmente deseas borrar este usuario?';

$txt['custom_title'] = 'Título Personalizado';

$txt['lastLoggedIn'] = 'última vez activo';

$txt['notify_settings'] = 'Preferencias:';
$txt['notify_save'] = 'Guardar preferencias';
$txt['notify_important_email'] = 'Recibir boletín de noticias, anuncios y notificaciones importantes del foro por email.';
$txt['notify_regularity'] = 'Para temas y foros en los que he solicitado ser notificado, notificarme.';
$txt['notify_regularity_instant'] = 'Instantáneamente';
$txt['notify_regularity_first_only'] = 'Instantáneamente - pero solamente para la primera respuesta no leída';
$txt['notify_regularity_daily'] = 'Diariamente';
$txt['notify_regularity_weekly'] = 'Semanalmente';
$txt['auto_notify'] = 'Activar la notificación cuando publiques o respondas a un tema.';
$txt['notify_send_types'] = 'Para los temas y foros de los que he solicitado notificaciones, notifícame de';
$txt['notify_send_type_everything'] = 'Todo lo que suceda';
$txt['notify_send_type_everything_own'] = 'Todo, si yo creé el tema';
$txt['notify_send_type_only_replies'] = 'Sólo respuestas';
$txt['notify_send_type_nothing'] = 'Nada';
$txt['notify_send_body'] = 'Cuando se envíe notificación de una respuesta a un tema, enviar el mensaje en el email (pero por favor no respondas a esos emails.)';

$txt['notifications_topics'] = 'Notificaciones actuales de Temas';
$txt['notifications_topics_list'] = 'Estás siendo notificado al haber nuevas respuestas en los siguientes temas';
$txt['notifications_topics_none'] = 'No estás recibiendo por el momento, notificaciones de ningún tema.';
$txt['notifications_topics_howto'] = 'Para recibir notificaciones de un tema, haz clic en el botón "notificar" mientras estés viéndolo.';
$txt['notifications_boards'] = 'Notificaciones actuales de Foros';
$txt['notifications_boards_list'] = 'Estás siendo notificado al haber nuevos temas en los siguientes foros';
$txt['notifications_boards_none'] = 'No estás recibiendo por el momento, notificaciones de ningún foro.';
$txt['notifications_boards_howto'] = 'Para recibir notificaciones de un foro específico, haz clic en el botón "notificar" en el índice del foro.';
$txt['notifications_update'] = 'Suspender notificaciones';

$txt['statPanel_showStats'] = 'Estadísticas de usuario para: ';
$txt['statPanel_users_votes'] = 'Número de Votos emitidos';
$txt['statPanel_users_polls'] = 'Número de Encuestas creadas';
$txt['statPanel_total_time_online'] = 'Tiempo total en línea';
$txt['statPanel_noPosts'] = '¡No has publicado ningún mensaje!';
$txt['statPanel_generalStats'] = 'Estadísticas Generales';
$txt['statPanel_posts'] = 'mensajes';
$txt['statPanel_topics'] = 'temas';
$txt['statPanel_total_posts'] = 'Total de Mensajes';
$txt['statPanel_total_topics'] = 'Total de Temas creados';
$txt['statPanel_votes'] = 'votos';
$txt['statPanel_polls'] = 'encuestas';
$txt['statPanel_topBoards'] = 'Foros más populares por Mensajes';
$txt['statPanel_topBoards_posts'] = '%1$d mensajes de los foros %2$d mensajes (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d mensajes de %2$d mensajes del usuario (%3$01.2f%%)';
$txt['statPanel_topBoardsActivity'] = 'Foros más populares por Actividad';
$txt['statPanel_activityTime'] = 'Actividad de publicaciones por Hora';
$txt['statPanel_activityTime_posts'] = '%1$d mensajes (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Hora';

$txt['deleteAccount_warning'] = '¡Advertencia - Estas acciones son irreversibles!';
$txt['deleteAccount_desc'] = 'Desde esta pantalla, puedes borrar la cuenta y los mensajes de este usuario.';
$txt['deleteAccount_member'] = 'Borrar la cuenta de este usuario';
$txt['deleteAccount_posts'] = 'Mensajes del usuario que serán eliminados';
$txt['deleteAccount_none'] = 'Ninguno';
$txt['deleteAccount_all_posts'] = 'Todos los Mensajes';
$txt['deleteAccount_topics'] = 'Temas y Mensajes';
$txt['deleteAccount_confirm'] = '¿Estás completamente seguro de desear borrar esta cuenta?';
$txt['deleteAccount_approval'] = 'Es importante mencionar que los moderadores del foro tendrán que aprobar el borrado de esta cuenta para que pueda ser eliminada';

$txt['profile_of_username'] = 'Perfil de %1$s';
$txt['profileInfo'] = 'Información del Perfil';
$txt['showPosts'] = 'Mostrar Mensajes';
$txt['showPosts_help'] = 'Esta sección te permite ver todos los mensajes hechos por este usuario, recuerda que solo puedes ver los mensajes en áreas en donde tu tienes acceso.';
$txt['showMessages'] = 'Mensajes';
$txt['showTopics'] = 'Temas';
$txt['showAttachments'] = 'Adjuntos';
$txt['statPanel'] = 'Mostrar Estadísticas';
$txt['editBuddyIgnoreLists'] = 'Lista de usuarios Amigos/Ignorados';
$txt['editBuddies'] = 'Editar Amigos';
$txt['editIgnoreList'] = 'Editar lista de ignorados';
$txt['trackUser'] = 'Rastrear Usuario';
$txt['trackActivity'] = 'Actividad';
$txt['trackIP'] = 'Dirección IP';

$txt['authentication'] = 'Autenticación';
$txt['change_authentication'] = 'Desde esta sección puedes cambiar la forma en que entras a el foro. Puedes usar tu cuenta de OpenID para identificarte o puedes usar tu nombre de usuario/contraseña de el foro.';

$txt['profileEdit'] = 'Editar Perfil';
$txt['account_info'] = 'ésta es la configuración de tu cuenta. Esta página contiene toda la información crítica que te identifica en el foro. Por razones de seguridad, debes introducir tu contraseña (actual) para poder modificar esta información.';
$txt['forumProfile_info'] = 'Puedes cambiar tu información personal en esta página. Esta información será mostrada a través de ' . $context['forum_name_html_safe'] . '. Si no quieres compartir esta información , simplemente déjalo en blanco - nada aquí es obligatorio.';
$txt['theme'] = 'Configuración de Apariencia y Diseño';
$txt['theme_info'] = 'Esta sección te permite personalizar la apariencia y el diseño del foro.';
$txt['notification'] = 'Notificaciones y email';
$txt['notification_info'] = 'SMF permite que se te envíen notificaciones cuando haya respuestas a los mensajes, nuevos temas, y anuncios del foro. Puedes cambiar estos valores aquí, o revisar los temas y foros de los que actualmente estás recibiendo notificaciones.';
$txt['groupmembership'] = 'Membresía de grupos';
$txt['groupMembership_info'] = 'Desde esta sección puedes cambiar los grupos a los cuales perteneces.';
$txt['ignoreboards'] = 'Opciones para ignorar foros.';
$txt['ignoreboards_info'] = 'Esta página te permitirá ignorar foros en particular. Cuando un foro es ignorado el indicador de mensajes nuevos no será mostrado en el índice del foro.  Los mensajes nuevos no se mostrarán al usar el enlace de búsqueda "mensajes no leídos" (no se buscará en estos foros), de todos modos, los foros ignorados siguen apareciendo en el índice del foro y al ingresar se mostrarán los temas nuevos. Al utilizar el enlace "mostrar mensajes no leídos" los nuevos mensajes en foros ignorados continuarán apareciendo.';
$txt['pmprefs'] = 'Mensajes personales';

$txt['profileAction'] = 'Acciones';
$txt['deleteAccount'] = 'Borrar esta cuenta';
$txt['profileSendIm'] = 'Enviar Mensaje Personal';
$txt['profile_sendpm_short'] = 'Enviar MP';

$txt['profileBanUser'] = 'Prohibirle el acceso al usuario';

$txt['display_name'] = 'Mostrar Nombre';
$txt['enter_ip'] = 'Introduce IP (rango)';
$txt['errors_by'] = 'Mensajes de error por';
$txt['errors_desc'] = 'Debajo hay una lista con todos los errores recientes que este usuario ha generado/experimentado.';
$txt['errors_from_ip'] = 'Mensajes de error desde el IP (rango)';
$txt['errors_from_ip_desc'] = 'Debajo está la lista de todos los mensajes de error generados desde esta IP (rango)';
$txt['ip_address'] = 'Dirección IP';
$txt['ips_in_errors'] = 'IPs usadas en los mensajes de error';
$txt['ips_in_messages'] = 'IPs usadas en mensajes recientes';
$txt['members_from_ip'] = 'Usuarios desde el IP (rango)';
$txt['members_in_range'] = 'Usuarios probablemente en el mismo rango';
$txt['messages_from_ip'] = 'Mensajes enviados desde el IP (rango)';
$txt['messages_from_ip_desc'] = 'Debajo está la lista de todos los mensajes publicados desde esta IP (rango).';
$txt['most_recent_ip'] = 'Direcciones IP más recientes';
$txt['why_two_ip_address'] = '¿Por qué aparecen dos direcciones IP listadas?';
$txt['no_errors_from_ip'] = 'No se encontraron mensajes de error desde el IP especificado (rango)';
$txt['no_errors_from_user'] = 'No se encontraron mensajes de error del usuario especificado';
$txt['no_members_from_ip'] = 'No se encontraron usuarios desde el IP especificado (rango)';
$txt['no_messages_from_ip'] = 'No se encontraron mensajes desde el IP especificado (rango)';
$txt['none'] = 'Ninguno';
$txt['own_profile_confirm'] = '¿Realmente deseas borrar tu propio perfil?';
$txt['view_ips_by'] = 'Ver IPs usados por';

$txt['avatar_will_upload'] = 'Subir un avatar';

$txt['activate_changed_email_title'] = 'Dirección de email cambió';
$txt['activate_changed_email_desc'] = 'Has cambiado tu dirección de email. Con la finalidad de validar esa dirección recibirás un email. Haz clic en el enlace en ese email para reactivar tu cuenta.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'No se pudo enviar el email de recordatorio.';
$txt['send_email'] = 'Enviar email a';
$txt['to_ask_password'] = 'para preguntar por la contraseña';

$txt['user_email'] = 'Nombre de Usuario/Email';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Nueva contraseña para ' . $context['forum_name'];
$txt['reminder_mail'] = 'Se ha enviado este mensaje porque se ha aplicado la función \'contraseña olvidada\' en tu cuenta. Para establecer una nueva contraseña haz clic en el siguiente enlace';
$txt['reminder_sent'] = 'Se te ha enviado un mensaje a tu dirección email. Haz clic en el enlace de dicho mensaje para establecer una nueva contraseña.';
$txt['reminder_openid_sent'] = 'Tu identidad OpenID actual ha sido enviada a tu e-mail.';
$txt['reminder_set_password'] = 'Establecer Contraseña';
$txt['reminder_password_set'] = 'Contraseña establecida correctamente';
$txt['reminder_error'] = '%1$s no contestó su pregunta secreta correctamente cuando intentaba cambiar su contraseña olvidada.';

$txt['registration_not_approved'] = 'Lo sentimos, esta cuenta aún no ha sido aprobada. Si necesitas cambiar tu dirección email, por favor, haz clic en';
$txt['registration_not_activated'] = 'Lo sentimos, esta cuenta aún no ha sido activada. Si necesitas reenviar un mensaje de activación, por favor, haz clic en';

$txt['primary_membergroup'] = 'Grupo Primario';
$txt['additional_membergroups'] = 'Grupos Adicionales';
$txt['additional_membergroups_show'] = '[ mostrar grupos adicionales ]';
$txt['no_primary_membergroup'] = '(sin grupo primario)';
$txt['deadmin_confirm'] = '¿Estás seguro que deseas eliminar irrevocablemente tu estado de administrador?';

$txt['account_activate_method_2'] = 'La cuenta requiere reactivación después de un cambio de email';
$txt['account_activate_method_3'] = 'La cuenta no está aprobada';
$txt['account_activate_method_4'] = 'La cuenta está esperando aprobación para su eliminación';
$txt['account_activate_method_5'] = 'La cuenta es una cuenta "por debajo de la edad" esperando aprobación';
$txt['account_not_activated'] = 'La cuenta actualmente no está activa';
$txt['account_activate'] = 'activar';
$txt['account_approve'] = 'aprobar';
$txt['user_is_banned'] = 'El usuario está actualmente bloqueado/suspendido';
$txt['view_ban'] = 'Ver';
$txt['user_banned_by_following'] = 'Este usuario está actualmente afectado por los siguientes bloqueos';
$txt['user_cannot_due_to'] = 'El usuario no puede %1$s como resultado del ban: "%2$s" ';
$txt['ban_type_post'] = 'publicar';
$txt['ban_type_register'] = 'registrarse';
$txt['ban_type_login'] = 'ingresar';
$txt['ban_type_access'] = 'acceder al foro';

$txt['show_online'] = 'Mostrar a otros usuarios que estoy conectado';

$txt['return_to_post'] = 'En forma predeterminada, regresar a los temas después de publicar un mensaje.';
$txt['no_new_reply_warning'] = 'No advertir de nuevas respuestas mientras se está publicando un mensaje.';
$txt['posts_apply_ignore_list'] = 'Ocultar mensajes publicados por miembros en mi lista de ignorados.';
$txt['recent_posts_at_top'] = 'Mostrar los mensajes más recientes en la parte superior';
$txt['recent_pms_at_top'] = 'Mostrar los mensajes privados más recientes en la parte superior.';
$txt['wysiwyg_default'] = 'Mostrar en forma predeterminada el editor WYSIWYG en la página de publicación.';

$txt['timeformat_default'] = '(Predeterminado del Foro)';
$txt['timeformat_easy1'] = 'Mes Día, Año, HH:MM:SS am/pm';
$txt['timeformat_easy2'] = 'Mes Día, Año, HH:MM:SS (24 horas)';
$txt['timeformat_easy3'] = 'YYYY-MM-DD, HH:MM:SS';
$txt['timeformat_easy4'] = 'DD Mes YYYY, HH:MM:SS';
$txt['timeformat_easy5'] = 'DD-MM-YYYY, HH:MM:SS';

$txt['poster'] = 'Usuario que publica';

$txt['board_desc_inside'] = 'Mostrar las descripciones de los foros al estar dentro de ellos.';
$txt['show_children'] = 'Mostrar los subforos en cada página dentro del foro, no solamente en la primera.';
$txt['use_sidebar_menu'] = 'Utilizar menues al costado, en vez de desplegables, cuando esto sea posible.';
$txt['show_no_avatars'] = 'No mostrar los avatares de otros usuarios.';
$txt['show_no_signatures'] = 'No mostrar las firmas de otros usuarios.';
$txt['show_no_censored'] = 'Dejar las palabras sin censurar.';
$txt['topics_per_page'] = 'Temas a mostrar por página:';
$txt['messages_per_page'] = 'Mensajes a mostrar por página:';
$txt['per_page_default'] = 'predeterminado del foro';
$txt['calendar_start_day'] = 'Primer día de la semana en el calendario';
$txt['display_quick_reply'] = 'Usar la respuesta rápida al mostrar temas: ';
$txt['display_quick_reply1'] = 'no mostrarlo';
$txt['display_quick_reply2'] = 'mostrarlo, desactivado en forma predeterminada';
$txt['display_quick_reply3'] = 'mostrarlo, activado en forma predeterminada';
$txt['display_quick_mod'] = 'Mostrar la moderación rápida como ';
$txt['display_quick_mod_none'] = 'no mostrar.';
$txt['display_quick_mod_check'] = 'casillas de verificación.';
$txt['display_quick_mod_image'] = 'iconos.';

$txt['whois_title'] = 'Buscar IP en un servidor regional de whois';
$txt['whois_afrinic'] = 'AfriNIC (áfrica)';
$txt['whois_apnic'] = 'APNIC (Región Asia Pacifico)';
$txt['whois_arin'] = 'ARIN (Norteamérica, una porción del Caribe, y áfrica de sub-Sahara)';
$txt['whois_lacnic'] = 'LACNIC (América Latina y región del Caribe)';
$txt['whois_ripe'] = 'RIPE (Europa, Oriente Medio, y partes de áfrica y Asia)';

$txt['moderator_why_missing'] = '¿porqué no está moderador aquí?';
$txt['username_change'] = 'cambiar';
$txt['username_warning'] = 'Para cambiar el nombre de usuario de este usuario, el foro debe también resetear su contraseña, la cual se le enviará por email al usuario con su nuevo nombre de usuario.';

$txt['show_member_posts'] = 'Ver los mensajes de este miembro';
$txt['show_member_topics'] = 'Ver los temas de este miembro';
$txt['show_member_attachments'] = 'Ver los archivos adjuntos de este miembro';
$txt['show_posts_none'] = 'No ha publicado mensajes todavía.';
$txt['show_topics_none'] = 'No ha publicado temas todavía.';
$txt['show_attachments_none'] = 'No ha adjuntado archivos todavía.';
$txt['show_attach_filename'] = 'Nombre del archivo';
$txt['show_attach_downloads'] = 'Descargas';
$txt['show_attach_posted'] = 'Publicado';

$txt['showPermissions'] = 'Mostrar Permisos';
$txt['showPermissions_status'] = 'Estado del permiso';
$txt['showPermissions_help'] = 'Esta sección te permite ver todos los permisos para este usuario (los permisos denegados son <del>tachar</del>).';
$txt['showPermissions_given'] = 'Otorgados por';
$txt['showPermissions_denied'] = 'Denegados por';
$txt['showPermissions_permission'] = 'Permisos (los permisos denegados están <del>tachados</del>)';
$txt['showPermissions_none_general'] = 'Este usuario no tiene establecido ningún permiso general.';
$txt['showPermissions_none_board'] = 'Este usuario no tiene permisos específicos en algún foro.';
$txt['showPermissions_all'] = 'Como administrador, este usuario tiene todos los permisos posibles.';
$txt['showPermissions_select'] = 'Permisos específicos del foro para';
$txt['showPermissions_general'] = 'Permisos Generales';
$txt['showPermissions_global'] = 'Todos los foros';
$txt['showPermissions_restricted_boards'] = 'Foros restringidos';
$txt['showPermissions_restricted_boards_desc'] = 'Los siguientes foros no son accesibles para este usuario';

$txt['local_time'] = 'Hora Local';
$txt['posts_per_day'] = 'por día';

$txt['buddy_ignore_desc'] = 'Este área te permitirá mantener tus listas de amigos e ignorados para este foro. Agregar miembros a estas listas ayuda, entre otras cosas, a controlar el tráfico de emails y mensajes privados, dependiendo de tus preferencias.';

$txt['buddy_add'] = 'Agregar a lista de amigos';
$txt['buddy_remove'] = 'Eliminar de lista de amigos';
$txt['buddy_add_button'] = 'Añadir';
$txt['no_buddies'] = 'Tu lista de amigos actualmente está vacía';

$txt['ignore_add'] = 'Agregar a la lista de ignorados';
$txt['ignore_remove'] = 'Remover de la lista de ignorados';
$txt['ignore_add_button'] = 'Agregar';
$txt['no_ignore'] = 'Tu lista de ignorados está vacía';

$txt['regular_members'] = 'Miembros registrados';
$txt['regular_members_desc'] = 'Todos los miembros del foro son miembros de este grupo.';
$txt['group_membership_msg_free'] = 'Tu membresía de grupo ha sido actualizada correctamente';
$txt['group_membership_msg_request'] = 'Tu petición fue enviada, por favor sea paciente mientras su petición es revisada.';
$txt['group_membership_msg_primary'] = 'Tu grupo primario fue cambiado.';
$txt['current_membergroups'] = 'Grupos De Usuarios Actuales';
$txt['available_groups'] = 'Grupos disponibles';
$txt['join_group'] = 'Unirse al Grupo';
$txt['leave_group'] = 'Abandonar Grupo';
$txt['request_group'] = 'Solicitud de membresía';
$txt['approval_pending'] = 'Aprovación pendiente';
$txt['make_primary'] = 'Hacer grupo primario';

$txt['request_group_membership'] = 'Request Group Membership';
$txt['request_group_membership_desc'] = 'Antes de unirte a este grupo tu membresía debe ser aprobada por un moderador. Por favor, da la razón para unirte a este grupo';
$txt['submit_request'] = 'Enviar Solicitud';

$txt['profile_updated_own'] = 'Tu perfil fue actualizado correctamente.';
$txt['profile_updated_else'] = 'El perfil de %1$s ha sido actualizado correctamente.';

$txt['profile_error_signature_max_length'] = 'Tu firma no puede contener más de %1$d  caracteres';
$txt['profile_error_signature_max_lines'] = 'Tu firma no puede tener más de %1$d líneas';
$txt['profile_error_signature_max_image_size'] = 'Las imagenes en tu firma no pueden ser mayores de %1$dx%2$d pixeles';
$txt['profile_error_signature_max_image_width'] = 'Las imagenes de tu firma no pueden ser mayores %1$d pixels de ancho';
$txt['profile_error_signature_max_image_height'] = 'Las imagenes en tu firma no pueden ser mayores que %1$d pixels de alto';
$txt['profile_error_signature_max_image_count'] = 'No puede tener más de %1$d imagene/es en tu firma';
$txt['profile_error_signature_max_font_size'] = 'El texto en tu firma no puede tener mayor tamaño que %1$s';
$txt['profile_error_signature_allow_smileys'] = 'No se te permite usar emoticons en tu firma';
$txt['profile_error_signature_max_smileys'] = 'No te está permitido usar más de %1$d emoticones en tu firma';
$txt['profile_error_signature_disabled_bbc'] = 'El siguiente código BBC no está permitido en tu firma: %1$s';

$txt['profile_view_warnings'] = 'Ver advertencias';
$txt['profile_issue_warning'] = 'Expedir advertencia';
$txt['profile_warning_level'] = 'Nivel de advertencia';
$txt['profile_warning_desc'] = 'Desde esta sección puede ajustar el nivel de advertencia al usuario y hacerle una advertencia escrita de ser necesario. También puede seguir su historial de advertencias y ver los efectos de su nivel de advertencia actual determinados por el administrador.';
$txt['profile_warning_name'] = 'Nombre Real';
$txt['profile_warning_impact'] = 'Resultado';
$txt['profile_warning_reason'] = 'Razón de advertencia';
$txt['profile_warning_reason_desc'] = 'Esto se requiere, y será registrado.';
$txt['profile_warning_effect_none'] = 'Ninguno';
$txt['profile_warning_effect_watch'] = 'El usuario será agregado a la lista de observación del moderador.';
$txt['profile_warning_effect_own_watched'] = 'Estás en la lista de observación de los moderadores';
$txt['profile_warning_is_watch'] = 'vigilado';
$txt['profile_warning_effect_moderation'] = 'todos los mensajes del usuario serán moderados';
$txt['profile_warning_effect_own_moderated'] = 'Todos tus mensajes serán moderados.';
$txt['profile_warning_is_moderation'] = 'mensajes moderados';
$txt['profile_warning_effect_mute'] = 'El usuario no será capaz de publicar.';
$txt['profile_warning_effect_own_muted'] = 'No podrás publicar.';
$txt['profile_warning_is_muted'] = 'no puedes publicar';
$txt['profile_warning_effect_text'] = 'Nivel >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Enviar una Notificación';
$txt['profile_warning_notify_template'] = 'Seleccionar plantilla:';
$txt['profile_warning_notify_subject'] = 'Asunto de notificación';
$txt['profile_warning_notify_body'] = 'Mensaje de notificación';
$txt['profile_warning_notify_template_subject'] = 'Usted ha recibido una advertencia';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '%1$s,' . "\n\n" . 'Ha recibido una advertencia por %2$s. Por favor, deten tal actividad y atente a las reglas del foro, en caso contrario deberemos tomar más acciones.' . "\n\n" . $txt['regards_team'];
$txt['profile_warning_notify_template_outline_post'] = '%1$s,' . "\n\n" . 'Ha recibido una advertencia por %2$s con respecto a su mensaje enviado [url=' . $scripturl . '?msg=%3$s]aquí[/url]. Por favor, deten tal actividad y atente a las reglas del foro, de otro modo deberemos tomar más acciones.' . "\n\n" . $txt['regards_team'];
$txt['profile_warning_notify_for_spamming'] = 'hacer publicidad no deseada (spam)';
$txt['profile_warning_notify_title_spamming'] = 'Hacer publicidad no deseada (spam)';
$txt['profile_warning_notify_for_offence'] = 'enviar material ofensivo';
$txt['profile_warning_notify_title_offence'] = 'Enviar material ofensivo';
$txt['profile_warning_notify_for_insulting'] = 'insultar otros usuarios y/o miembros del staff';
$txt['profile_warning_notify_title_insulting'] = 'Insultar a Usuarios/Staff';
$txt['profile_warning_issue'] = 'Razón de advertencia';
$txt['profile_warning_max'] = '(Max 100)';
$txt['profile_warning_limit_attribute'] = 'Nota: no puede cambiar el nivel de este usuario más de %1$d%% veces en un periodo de 24hs.';
$txt['profile_warning_errors_occured'] = 'La advertencia no se ha enviado por los siguientes errores';
$txt['profile_warning_success'] = 'Advertencia expedida con éxito';
$txt['profile_warning_new_template'] = 'Nueva plantilla';

$txt['profile_warning_previous'] = 'Advertencias Previas';
$txt['profile_warning_previous_none'] = 'este usuario no ha recibido advertencias.';
$txt['profile_warning_previous_issued'] = 'Expedida por';
$txt['profile_warning_previous_time'] = 'Tiempo';
$txt['profile_warning_previous_level'] = 'Puntos';
$txt['profile_warning_previous_reason'] = 'Razón';
$txt['profile_warning_previous_notice'] = 'Ver la noticia enviada al miembro';

$txt['viewwarning'] = 'Ver advertencias';
$txt['profile_viewwarning_for_user'] = 'Advertencias para %1$s';
$txt['profile_viewwarning_no_warnings'] = 'No se han expedido advertencias todavía.';
$txt['profile_viewwarning_desc'] = 'Aquí debajo un sumario de todas las advertencias que se han expedido por el equipo de moderación del foro.';
$txt['profile_viewwarning_previous_warnings'] = 'Advertencias Previas';
$txt['profile_viewwarning_impact'] = 'Impacto de Advertencias';

$txt['subscriptions'] = 'Suscripciones pagas';

$txt['pm_settings_desc'] = 'Desde ésta página puedes cambiar una variedad de opciones de mensajes personales, incluyendo cómo se mostrarán los mensajes y quién puede enviartelos.';
$txt['email_notify'] = 'Notificar por email cada vez que recibas un mensaje personal:';
$txt['email_notify_never'] = 'Nunca';
$txt['email_notify_buddies'] = 'De amigos solamente';
$txt['email_notify_always'] = 'Siempre';

$txt['pm_receive_from'] = 'Recibir mensajes personales de:';
$txt['pm_receive_from_everyone'] = 'Todos los miembros';
$txt['pm_receive_from_ignore'] = 'Todos los miembros, excepto los que estén en mi lista de ignorados';
$txt['pm_receive_from_admins'] = 'Administradores solamente';
$txt['pm_receive_from_buddies'] = 'Amigos y administradores solamente';

$txt['copy_to_outbox'] = 'Guardar copia de todo mensaje personal saliente en forma predeterminada.';
$txt['popup_messages'] = 'Mostrar una ventana emergente cuando reciba nuevos mensajes.';
$txt['pm_remove_inbox_label'] = 'Remover la etiqueta inbox cuando apliques otra';
$txt['pm_display_mode'] = 'Mostrar mensajes personales';
$txt['pm_display_mode_all'] = 'Todos juntos';
$txt['pm_display_mode_one'] = 'Uno a uno';
$txt['pm_display_mode_linked'] = 'Como una conversacion';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'Te recomendamos activar la opción &quot;Guardar copia de todo mensaje saliente en forma predeterminada&quot;\\n\\nEsto ayudará a una mejor conversación ya que podrás ver ambas partes de la misma.';

$txt['tracking'] = 'Rastreo';
$txt['tracking_description'] = 'Esta sección te permite revisar ciertas acciones de perfil realizadas en este perfil de miembro, así como registrar su dirección IP.';

$txt['trackEdits'] = 'Ediciones de perfil';
$txt['trackEdit_deleted_member'] = 'Miembro borrado';
$txt['trackEdit_no_edits'] = 'Hasta el momento no se han registrado ediciones para este miembro.';
$txt['trackEdit_action'] = 'Campo';
$txt['trackEdit_before'] = 'Valor previo';
$txt['trackEdit_after'] = 'Valor posterior';
$txt['trackEdit_applicator'] = 'Cambiado Por';

$txt['trackEdit_action_real_name'] = 'Nombre Real';
$txt['trackEdit_action_usertitle'] = 'Título personalizado';
$txt['trackEdit_action_member_name'] = 'Nombre de Usuario';
$txt['trackEdit_action_email_address'] = 'Dirección Email ';
$txt['trackEdit_action_id_group'] = 'Grupo de usuario Primario';
$txt['trackEdit_action_additional_groups'] = 'Grupos de usuarios Adicionales';

?>