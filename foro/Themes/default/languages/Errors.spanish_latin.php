<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'No estás autorizado para entrar a esta sección';
$txt['wireless_error_notyet'] = 'Disculpa, pero esta sección no esta disponible para usuarios \'wireless\' en este momento.';

$txt['mods_only'] = 'Sólo Moderadores pueden usar la función de eliminado directo, por favor elimina este mensaje a través de la función modificar.';
$txt['no_name'] = 'No llenaste el campo nombre. Es requerido.';
$txt['no_email'] = 'No llenaste el campo email. Es requerido';
$txt['topic_locked'] = 'Este tema está bloqueado, no estás autorizado para publicar o modificar mensajes...';
$txt['no_password'] = 'Campo contraseña vacío';
$txt['already_a_user'] = 'El nombre de usuario que trataste de registrar ya existe.';
$txt['cant_move'] = 'No estás autorizado para mover temas...';
$txt['login_to_post'] = 'Para publicar debes haber ingresado. Si no tienes todavía una cuenta, <a href="' . $scripturl . '?action=register">regístrate</a>.';
$txt['passwords_dont_match'] = 'No coinciden las contraseñas.';
$txt['register_to_use'] = 'Lo siento, debes estar registrado antes de usar esta función.';
$txt['password_invalid_character'] = 'Carácter inválido en la contraseña';
$txt['name_invalid_character'] = 'Carácter inválido en el nombre.';
$txt['email_invalid_character'] = 'Carácter inválido en el Email.';
$txt['username_reserved'] = 'El nombre de usuario que trataste de registrar contiene el nombre reservado \'%1$s\'. Por favor intenta otro nombre de usuario.';
$txt['numbers_one_to_nine'] = 'Este campo sólo acepta números del 0-9';
$txt['not_a_user'] = 'El usuario cuyo perfil estás tratando de ver no existe.';
$txt['not_a_topic'] = 'Este tema no existe en el foro.';
$txt['not_approved_topic'] = 'Este tema todavía no a estado aprobado.';
$txt['email_in_use'] = 'Esa dirección de correo (%1$s) está siendo usada por un miembro registrado. Si crees que es un error, dirígete a la página de ingreso y escribe tu dirección en el recordatorio de contraseña.';

$txt['didnt_select_vote'] = 'No seleccionaste una opción del voto.';
$txt['poll_error'] = 'Esa encuesta no existe, o ha sido bloqueada, o intentaste votar más de una vez.';
$txt['members_only'] = 'Este servicio es solo para usuarios...';
$txt['locked_by_admin'] = 'Fue bloqueada por un administrador.  No la puedes desbloquear.';
$txt['not_enough_posts_karma'] = 'Lo sentimos, no tienes suficientes mensajes como para modificar el karma. Necesitas al menos %1$d.';
$txt['cant_change_own_karma'] = 'Lo siento, no estás autorizado para modificar tu propio karma.';
$txt['karma_wait_time'] = 'Lo sentimos, no puedes modificar el karma nuevamente hasta dentro de %1$s %2$s.';
$txt['feature_disabled'] = 'Lo siento, esta función ha sido desactivada.';
$txt['cant_access_upload_path'] = '¡No se puede accesar al directorio de los archivos adjuntos!';
$txt['file_too_big'] = 'Tu archivo es demasiado grande. El tamaño máximo permitido para archivos adjuntos es %1$d KB.';
$txt['attach_timeout'] = 'Hubo un error al intentar guardar tu archivo adjunto, por favor intenta nuevamente.';
$txt['filename_exists'] = 'Lo sentimos, ya existe un adjunto con el mismo nombre archivo. Cambia su nombre e inténtalo nuevamente.';
$txt['bad_attachment'] = 'Su archivo adjunto ha fallado los controles de seguridad y no se puede cargar. Por favor, consulte con el administrador del foro.';
$txt['ran_out_of_space'] = 'El directorio de uploads está lleno. Por favor intenta un archivo más pequeño o contacta al <a href="mailto:%s">administrador</a>.';
$txt['couldnt_connect'] = 'No se pudo conectar al servidor o no se encontró el archivo';
$txt['no_board'] = 'El foro que especificaste no existe';
$txt['cant_split'] = 'No estás autorizado para dividir temas';
$txt['cant_merge'] = 'No estás autorizado para combinar temas';
$txt['no_topic_id'] = 'Especificaste un ID de tema inválido.';
$txt['split_first_post'] = 'No puedes dividir un tema desde el primer mensaje.';
$txt['topic_one_post'] = 'Este tema sólo contiene un mensaje y no puede ser dividido';
$txt['no_posts_selected'] = 'no se seleccionaron mensajes';
$txt['selected_all_posts'] = 'Imposible dividir. Has seleccionado todos los mensajes.';
$txt['cant_find_messages'] = 'No se encontraron los mensajes';
$txt['cant_find_user_email'] = 'No se encontró la dirección de correo del usuario.';
$txt['cant_insert_topic'] = 'No se pudo insertar el tema';
$txt['already_a_mod'] = 'Has seleccionado el nombre de usuario de un moderador. Por favor selecciona otro nombre de usuario';
$txt['session_timeout'] = 'Falla al enviar el formulario. La sesión ha expirado.';
$txt['session_verify_fail'] = 'Falló la verificación de sesión. Por favor intenta salir y volver a ingresar, e inténtalo nuevamente.';
$txt['verify_url_fail'] = 'Sitio de referencia inválido.';
$txt['guest_vote_disabled'] = 'Los invitados no pueden votar en esta encuesta.';

$txt['cannot_access_mod_center'] = 'No tienes permiso para ingresar al centro de moderación.';
$txt['cannot_admin_forum'] = 'No estás autorizado para administrar este foro.';
$txt['cannot_announce_topic'] = 'No estás autorizado para publicar anuncios en este foro.';
$txt['cannot_approve_posts'] = 'No tienes permiso para aprobar artículos.';
$txt['cannot_post_unapproved_attachments'] = 'No tienes permiso para publicar adjuntos sin aprobación.';
$txt['cannot_post_unapproved_topics'] = 'No tienes permiso para publicar temas sin aprobación.';
$txt['cannot_post_unapproved_replies_own'] = 'No tienes permiso para publicar respuestas en tus temas sin aprobación.';
$txt['cannot_post_unapproved_replies_any'] = 'No tienes permiso para publicar respuestas a temas de otros usuarios sin autorización.';
$txt['cannot_calendar_edit_any'] = 'No puedes editar los eventos del calendario.';
$txt['cannot_calendar_edit_own'] = 'No tienes los privilegios necesarios para editar tus propios eventos.';
$txt['cannot_calendar_post'] = 'La edición de eventos no está permitida - Lo sentimos.';
$txt['cannot_calendar_view'] = 'Lo sentimos, pero no estás autorizado para ver el calendario.';
$txt['cannot_remove_any'] = 'Lo sentimos, pero no tienes los privilegios para eliminar temas.';
$txt['cannot_remove_own'] = 'No puedes eliminar tus propios temas en este foro.';
$txt['cannot_edit_news'] = 'No estás autorizado para editar los elementos de las noticias en este foro.';
$txt['cannot_pm_read'] = 'Lo sentimos, no estás autorizado para leer tus mensajes personales.';
$txt['cannot_pm_send'] = 'No estás autorizado para enviar mensajes personales.';
$txt['cannot_karma_edit'] = 'No estas autorizado para modificar el karma de otras personas.';
$txt['cannot_lock_any'] = 'No estás autorizado para bloquear temas aquí.';
$txt['cannot_lock_own'] = 'Lo sentimos, pero no puedes bloquear tus propios temas aquí.';
$txt['cannot_make_sticky'] = 'No estás autorizado para fijar este tema.';
$txt['cannot_manage_attachments'] = 'No estás autorizado para administrar archivos adjuntos o avatares.';
$txt['cannot_manage_bans'] = 'No estás autorizado para cambiar la lista de accesos prohibidos.';
$txt['cannot_manage_boards'] = 'No estás autorizado para administrar foros y categorís.';
$txt['cannot_manage_membergroups'] = 'No tienes los permisos necesarios para modificar o asignar grupos de usuarios.';
$txt['cannot_manage_permissions'] = 'No tienes los permisos necesarios para administrar los permisos.';
$txt['cannot_manage_smileys'] = 'No estás autorizado para administrar smileys e iconos de mensaje.';
$txt['cannot_mark_any_notify'] = 'No tienes los permisos necesarios para obtener notificaciones de este tema.';
$txt['cannot_mark_notify'] = 'Lo sentimos, pero no puedes solicitar notificaciones desde este foro.';
$txt['cannot_merge_any'] = 'No estás autorizado para combinar temas en este foro.';
$txt['cannot_moderate_forum'] = 'No estás autorizado para moderar este foro.';
$txt['cannot_moderate_board'] = 'No te está permitido moderar este foro.';
$txt['cannot_modify_any'] = 'No estás autorizado para modificar mensajes.';
$txt['cannot_modify_own'] = 'Lo sentimos, pero no estás autorizado para editar tus propios mensajes.';
$txt['cannot_modify_replies'] = 'A pesar que este mensaje es en respuesta a tu tema, no lo puedes editar.';
$txt['cannot_move_own'] = 'No estás autorizado para mover tus propios temas en este foro.';
$txt['cannot_move_any'] = 'No estás autorizado para mover temas en este foro.';
$txt['cannot_poll_add_own'] = 'Lo sentimos, pero no estás autorizado para agregarle encuestas a tus temas en este foro.';
$txt['cannot_poll_add_any'] = 'No puedes agregarle encuestas a este tema.';
$txt['cannot_poll_edit_own'] = 'No puedes editar esta encuesta, aunque sea tuya.';
$txt['cannot_poll_edit_any'] = 'Se te ha denegado el acceso para editar encuestas en este foro.';
$txt['cannot_poll_lock_own'] = 'No estás autorizado para bloquear tus propias encuestas en este foro.';
$txt['cannot_poll_lock_any'] = 'Lo sentimos, pero no estás autorizado para bloquear cualquier encuesta.';
$txt['cannot_poll_post'] = 'No estás autorizado para publicar encuestas en el foro actual.';
$txt['cannot_poll_remove_own'] = 'No tienes los permisos para eliminar esta encuesta de tu tema.';
$txt['cannot_poll_remove_any'] = 'No puedes eliminar encuestas en este foro.';
$txt['cannot_poll_view'] = 'No estás autorizado para ver encuestas en este foro.';
$txt['cannot_poll_vote'] = 'Lo sentimos, pero no puedes votar en las encuestas de este foro.';
$txt['cannot_post_attachment'] = 'No tienes los permisos necesarios para subir archivos adjuntos aquí.';
$txt['cannot_post_new'] = 'Lo sentimos, pero no puedes publicar nuevos temas en este foro.';
$txt['cannot_post_reply_any'] = 'No tienes los permisos necesarios para publicar respuestas a temas en este foro.';
$txt['cannot_post_reply_own'] = 'No estás autorizado para publicar respuestas aún para tus propios temas en este foro.';
$txt['cannot_profile_remove_own'] = 'Lo sentimos, pero no estás autorizado para borrar tu cuenta.';
$txt['cannot_profile_remove_any'] = '¿No tienes los permisos necesarios para eliminar las cuentas de otras personas!';
$txt['cannot_profile_extra_any'] = 'No tienes los permisos necesarios modificar la configuración de otros perfiles.';
$txt['cannot_profile_identity_any'] = 'No estás autorizado para modificar la configuración de otras cuentas.';
$txt['cannot_profile_title_any'] = 'No puedes editar los títulos personalizados de otras personas.';
$txt['cannot_profile_extra_own'] = 'Lo sentimos, pero no tienes los permisos necesarios para editar los datos de tu perfil.';
$txt['cannot_profile_identity_own'] = 'Por el momento, no puedes cambiar tu identidad.';
$txt['cannot_profile_title_own'] = 'No estás autorizado para cambiar tu título personalizado.';
$txt['cannot_profile_server_avatar'] = 'No estás autorizado para utilizar un avatar alojado en el servidor.';
$txt['cannot_profile_upload_avatar'] = 'No tienes permiso para subir un avatar.';
$txt['cannot_profile_remote_avatar'] = 'No tienes el privilegio de usar un avatar remoto.';
$txt['cannot_profile_view_own'] = 'Lo sentimos, pero no puedes ver tu propio perfil.';
$txt['cannot_profile_view_any'] = 'Lo sentimos, pero no puedes ver el perfil de otras personas.';
$txt['cannot_delete_own'] = 'No estás, en este foro, autorizado para borrar tus propios mensajes.';
$txt['cannot_delete_replies'] = 'Lo sentimos, pero no puedes eliminar estos mensajes, aún cuando son respuestas a tu tema.';
$txt['cannot_delete_any'] = 'No está permitido borrar mensajes en este foro.';
$txt['cannot_report_any'] = 'No estás autorizado para reportar mensajes en este foro.';
$txt['cannot_search_posts'] = 'No estás autorizado a buscar mensajes en este foro.';
$txt['cannot_send_mail'] = 'No tienes el privilegio de enviar mails.';
$txt['cannot_issue_warning'] = 'Lo sentimos, no tienes permiso para enviar alertas a usuarios.';
$txt['cannot_send_topic'] = 'Lo sentimos, pero el administrador ha desactivado la opción de enviar temas en este foro.';
$txt['cannot_split_any'] = 'No está permitido dividir temas en este foro.';
$txt['cannot_view_attachments'] = 'Parece que no estás autorizado para descargar o ver archivos adjuntos en este foro.';
$txt['cannot_view_mlist'] = 'No puedes ver la lista de usuarios, ya que no tienes permisos para ello.';
$txt['cannot_view_stats'] = 'No estás autorizado para ver las estadísticas del foro.';
$txt['cannot_who_view'] = 'Lo sentimos - no tienes los permisos necesarios para ver la lista de usuarios en línea.';

$txt['no_theme'] = 'Ese tema no existe.';
$txt['theme_dir_wrong'] = 'El directorio predeterminado de los temas es incorrecto, favor de corregirlo haciendo <i>clic</i> en este texto.';
$txt['registration_disabled'] = 'Lo sentimos, el registro de usuarios está actualmente deshabilitado.';
$txt['registration_no_secret_question'] = 'Lo sentimos, no se ha especificado pregunta secreta para este usuario.';
$txt['poll_range_error'] = 'Lo sentimos, la encuesta debe durar más de 0 días.';
$txt['delFirstPost'] = 'No estás autorizado para borrar el primer post de este tema.<p>Si deseas borrar este tema, haz clic en \'Eliminar Tema\', o pídele a un Administrador/Moderador para que lo borre por tí.</p>';
$txt['parent_error'] = '¡No se pudo crear el foro!';
$txt['login_cookie_error'] = 'No pudiste ingresar.  Por favor revisa la configuración de tus cookies.';
$txt['incorrect_answer'] = 'Lo sentimos, pero no contestaste correctamente tu pregunta secreta.  Haz clic en el botón Atrás para intentar nuevamente, o haz clic en el botón Atrás 2 veces para usar el método predeterminado para obtener tu contraseña.';
$txt['no_mods'] = '¡No se encontraron moderadores!';
$txt['parent_not_found'] = 'Estructura corrupta del foro: no se pudo encontrar el foro padre';
$txt['modify_post_time_passed'] = 'No puedes modificar este mensaje ya que el tiempo límite permitido para editar mensajes ha transcurrido.';

$txt['calendar_off'] = 'El calendario está deshabilitado, no puedes accesarlo en este momento.';
$txt['invalid_month'] = 'Mes inválido.';
$txt['invalid_year'] = 'Año inválido.';
$txt['invalid_day'] = 'Día inválido.';
$txt['event_month_missing'] = 'Falta el mes del evento.';
$txt['event_year_missing'] = 'Falta el año del evento.';
$txt['event_day_missing'] = 'Falta el día del evento.';
$txt['event_title_missing'] = 'Falta el título del evento.';
$txt['invalid_date'] = 'Fecha inválida.';
$txt['no_event_title'] = 'No se especificó el título del evento.';
$txt['missing_event_id'] = 'Falta el ID del evento.';
$txt['cant_edit_event'] = 'No estas autorizado para modificar este evento.';
$txt['missing_board_id'] = 'Falta ID del foro.';
$txt['missing_topic_id'] = 'Falta ID del tema.';
$txt['topic_doesnt_exist'] = 'No existe el tema.';
$txt['not_your_topic'] = 'No eres el dueño de este tema.';
$txt['board_doesnt_exist'] = 'El foro no existe.';
$txt['no_span'] = 'La característica de expansión está deshabilitada.';
$txt['invalid_days_numb'] = 'Número inválido de días para expandirse.';

$txt['moveto_noboards'] = '¡No hay foros a donde mover este tema!';

$txt['already_activated'] = 'Tu cuenta ya ha sido previamente activada.';
$txt['still_awaiting_approval'] = 'Tu cuenta está todavía en espera de la aprobación de un administrador.';

$txt['invalid_email'] = 'Email inválido / rango del email.<br />Ejemplo de una dirección de email válida: webmaster@HablaJapones.org.<br />Ejemplo de un rango de dirección email válido: *@*.HablaJapones.org';
$txt['invalid_expiration_date'] = 'La fecha de expiración no es válida';
$txt['invalid_hostname'] = 'Nombre del dominio inválido/ rango del dominio.<br />Ejemplo de un nombre de dominio válido: proxy4.HablaJapones.org<br />Ejemplo de un rango de dominio válido: *.HablaJapones.org';
$txt['invalid_ip'] = 'IP inválido / rango de IPs.<br />Ejemplo de una dirección IP válida: 127.0.0.1<br />Ejemplo de un rango válido de direcciones IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Dirección IP/rango inválido.<br />Ejemplo de una IP válida: 127.0.0.1<br />Ejemplo de un rango válido: 127.0.0.*';
$txt['invalid_username'] = 'Nombre del usuario no encontrado';
$txt['no_ban_admin'] = '¡No puedes prohibirle el acceso a un administrador - Debes degradarlo primero!';
$txt['no_bantype_selected'] = 'No se seleccionó el tipo prohibición de acceso';
$txt['ban_not_found'] = 'No se encontró esta restricción de acceso';
$txt['ban_unknown_restriction_type'] = 'Tipo de restricción desconocida';
$txt['ban_name_empty'] = 'El nombre del usuario para restringir acceso está en blanco.';
$txt['ban_name_exists'] = 'El nombre de esta restricción (%1$s) ya existe. Seleccione un nombre diferente.';
$txt['ban_trigger_already_exists'] = 'Esta prohibición (%1$s) ya existe en %2$s.';

$txt['recycle_no_valid_board'] = 'No se ha seleccionado un foro válido para reciclar temas';

$txt['login_threshold_fail'] = 'Lo sentimos, por el momento no cuentas con intentos para ingresar.  Por favor, inténtalo nuevamente más tarde.';
$txt['login_threshold_brute_fail'] = 'Lo sentimos, has alcanzado el máximo de intentos de ingreso. Espera 30 segundos e inténtalo de nuevo.';

$txt['who_off'] = 'No puedes accesar la lista de usuarios en línea por el momento, ya que está deshabilitada.';

$txt['merge_create_topic_failed'] = 'Error al intentar crear un nuevo tema.';
$txt['merge_need_more_topics'] = 'El combinar temas necesita de al menos 2 temas para combinar.';

$txt['postWaitTime_broken'] = 'El último mensaje desde tu dirección IP fue hace %1$d segundos. Inténtalo nuevamente más tarde.';
$txt['registerWaitTime_broken'] = 'Te has registrado hace apenas %1$d segundos!';
$txt['loginWaitTime_broken'] = 'Tendrás que esperar aproximadamente %1$d segundos para ingresar nuevamente.';
$txt['pmWaitTime_broken'] = 'El último mensaje personal desde tu dirección IP fue hace %1$d segundos. Inténtalo nuevamente más tarde.';
$txt['reporttmWaitTime_broken'] = 'El último reporte desde esta dirección IP fue hace menos de %1$d segundos. Inténtalo nuevamente más tarde.';
$txt['sendtopcWaitTime_broken'] = 'El último tema enviado desde esta dirección IP fue hace menos de %1$d. Inténtalo nuevamente más tarde.';
$txt['sendmailWaitTime_broken'] = 'El último correo electrónico enviado desde esta dirección IP fue hace menos de %1$d segundos. Inténtalo nuevamente más tarde.';
$txt['searchWaitTime_broken'] = 'Tu última busqueda fue hace menos de %1$d segundos. Intenta nuevamente más tarde.';

$txt['email_missing_data'] = 'Debes ingresar algún texto en el asunto y el cuerpo del mensaje. ';

$txt['topic_gone'] = 'El tema o foro que estás buscando parece que no existe, o fuera de tus límites.';
$txt['theme_edit_missing'] = '¡El archivo que intentas editar... no puede encontrarse!';

$txt['attachments_no_write'] = 'No puede escribirse en el directorio para subir archivos adjuntos.  Tu archivo adjunto o avatar no se pudo guardar.';
$txt['attachments_limit_per_post'] = 'No puedes subír más de %1$d archivos adjuntos por mensaje';

$txt['no_dump_database'] = 'iexcl;Solamente los administradores pueden hacer respaldos de la base de datos!';
$txt['pm_not_yours'] = 'El mensaje personal que estás tratando de citar no es tuyo o no existe, por favor regresa e intenta nuevamente.';
$txt['mangled_post'] = 'Datos de la forma destrozados - por favor regresa e intenta nuevamente.';
$txt['quoted_post_deleted'] = 'El mensaje que estás intentando citar no existe, fue eliminado, o ya no lo puedes ver.';
$txt['pm_too_many_per_hour'] = 'Has excedido el límite de %1$d mensajes personales por hora.';
$txt['labels_too_many'] = 'Lo sentimos, %1$s mensajes tienen el máximo de etiquetas permitido.';

$txt['register_only_once'] = 'Lo sentimos, pero no tienes permitido el registrar múltiples cuentas al mismo tiempo desde la misma computadora.';
$txt['admin_setting_coppa_require_contact'] = 'Debes ingresar un contacto posta o por fax si la aprobación de padres o tutores es necesaria.';

$txt['error_long_name'] = 'El nombre que utilizaste fue muy largo.';
$txt['error_no_name'] = 'No se proporcionó ningún nombre.';
$txt['error_bad_name'] = 'El nombre que enviaste no se pudo utilizar, ya que es un nombre reservado.';
$txt['error_no_email'] = 'No se proporcionó ninguna dirección de email.';
$txt['error_bad_email'] = 'Se proporcionó una dirección de email inválida.';
$txt['error_no_event'] = 'No se proporcionó un nombre de evento.';
$txt['error_no_subject'] = 'No se especificó el asunto.';
$txt['error_no_question'] = '¡La encuesta debe tener una pregunta!';
$txt['error_no_message'] = 'El cuerpo del mensaje se dejó vacío.';
$txt['error_long_message'] = 'El mensaje excede la longitúd máxima permitida (%s caracteres).';
$txt['error_no_comment'] = 'El campo de comentarios quedó vacío.';
$txt['error_session_timeout'] = 'Tu sesión ha expirado. Por favor, reenvía tu mensaje.';
$txt['error_no_to'] = 'No se especificaron destinatarios.';
$txt['error_bad_to'] = 'No se encontraron uno o mas destinatarios-\'para\'.';
$txt['error_bad_bcc'] = 'No se encontraron uno o mas destinatarios-\'bcc\'.';
$txt['error_form_already_submitted'] = 'Ya has enviado previamente este mensaje!  Probablemente hiciste doble-clic, o intentaste actualizar la página en el navegador.';
$txt['error_poll_few'] = '¡Debes tener al menos dos opciones!';
$txt['error_need_qr_verification'] = 'Completa el formulario de verificación para confirmar tu mensaje.';
$txt['error_wrong_verification_code'] = 'Las letras que has escrito no coinciden con las del dibujo.';
$txt['error_wrong_verification_answer'] = 'No has contestado las preguntas de verificación correctamente.';
$txt['error_need_verification_code'] = 'Ingresa el código de verificación para continuar a los resultados.';
$txt['error_bad_file'] = 'Lo sentimos, el archivo especificado no se puede abrir: %1$s';
$txt['error_bad_line'] = 'La linea especificada es inválida.';

$txt['smiley_not_found'] = 'No se encontró el smiley.';
$txt['smiley_has_no_code'] = 'No se proporcionó código para este smiley.';
$txt['smiley_has_no_filename'] = 'No se proporcionó el nombre del archivo para este smiley.';
$txt['smiley_not_unique'] = 'Un smiley con ese código ya existe previamente.';
$txt['smiley_set_already_exists'] = 'Un smiley con ese URL ya existe previamente';
$txt['smiley_set_not_found'] = 'No se encontró esa colección de smileys';
$txt['smiley_set_path_already_used'] = 'El URL para esa colección de smileys esta siendo utilizado actualmente por otra colección de smileys.';
$txt['smiley_set_unable_to_import'] = 'No se pudo importar la colección de smileys. El directorio es inválido o no pudo ser accesado.';

$txt['smileys_upload_error'] = 'No se pudo subir el archivo.';
$txt['smileys_upload_error_blank'] = '¡Todos los conjuntos de smileys deben tener una imagen!';
$txt['smileys_upload_error_name'] = '¡Todos los smileys deben tener el mismo nombre de archivo!';
$txt['smileys_upload_error_illegal'] = 'Tipo Ilegal.';

$txt['search_invalid_weights'] = 'Buscar pesos que no estén configurados adecuadamente. Al menos un peso debe estar configurado para que sea diferente de cero. Por favor, informa sobre este error a un administrador.';
$txt['unable_to_create_temporary'] = 'La función de búsqueda no pudo crear tablas temporales.  Por favor, inténtalo nuevamente.';

$txt['package_no_file'] = '¡No se pudo encontrar el archivo!';
$txt['packageget_unable'] = 'No fue posible conectarse al servidor.  Por favor, inténtalo usando <a href="%1$s" target="_blank" class="new_win">esta URL</a>.';
$txt['not_on_simplemachines'] = 'Lo sentimos, los paquetes solo pueden ser descargados de esta manera del servidor de simplemachines.org.';
$txt['package_cant_uninstall'] = 'Este paquete o nunca fue instalado, o ya ha sido desinstalado previamente - no puedes desinstalarlo ahora.';
$txt['package_cant_download'] = '¡No puedes descargar o instalar nuevos paquetes ya que no se puede escribir en el directorio "Packages"!';
$txt['package_upload_error_nofile'] = 'Usted no seleccionó un paquete para subir al servidor.';
$txt['package_upload_error_failed'] = 'No se pudo subir el paquete al servidor, por favor revise sus permisos en la dirección de paquetes.';
$txt['package_upload_error_exists'] = 'El archivo que estás subiendo ya existe en el servidor. Por favor, bórralo e inténtalo nuevamente.';
$txt['package_upload_error_supports'] = 'El administrador de paquetes sólo permite estos tipos de archivos: %1$s.';
$txt['package_upload_error_broken'] = 'El paquete que has intentado subir falló por el siguiente error:<br />"%1$s" ';

$txt['package_get_error_not_found'] = 'El paquete que estás intentando instalar no se encontró. Puedes subir el paquete manualmente al directorio de paquetes.';
$txt['package_get_error_missing_xml'] = 'El paquete que estás intentando instalar no contiene el archivo package-info.xml, que debe estar en la raíz del directorio de paquetes.';
$txt['package_get_error_is_zero'] = 'Aunque el paquete ha sido descargado al servidor, parece que está vacío. Revisa si el directorio de paquetes y el subdirectorio "temp" pueden escribirse. Si continúas teniendo este problema, intenta descomprimir el paquete en tu computadora y luego subiendo los archivos a una subcarpeta del directorio de paquetes. Por ejemplo, si el paquete tiene de nombre shout.tar.gz, deberías:<br />1) Descargar el paquete a tu computadora y descomprimir los archivos.<br />2) Usando un cliente FTP, crear una subcarpeta en el directorio de paquetes. En este caso, "shout".<br />3) Subir todos los archivos del paquete descomprimido a la carpeta shout recién creada.<br />4) Volver al administrador de paquetes, y buscar el paquete en la lista (SMF se encarga automáticamente de listarlo).';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF no pudo encontrar información válida en el archivo package-info.xml inluido en el paquete. Puede haber un error en la modificación, o el paquete puede estar dañado.';

$txt['no_membergroup_selected'] = 'No se seleccionó ningún grupo de usuarios';
$txt['membergroup_does_not_exist'] = 'El grupo no existe o no es válido.';

$txt['at_least_one_admin'] = '¡Debe haber por lo menos un administrador en el foro!';

$txt['error_functionality_not_windows'] = 'Disculpe, pero esta funcionalidad no esta disponible para servidores usando \'Windows\' en este momento.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'No se encontró el archivo adjunto';

$txt['error_no_boards_selected'] = '¡No se seleccionó ningún foro válido!';
$txt['error_invalid_search_string'] = '¿Olvidaste escribir lo que se buscará?';
$txt['error_invalid_search_string_blacklist'] = 'Tu búsqueda contiene palabras demasiado triviales. Por favor, intenta con una búsqueda diferente.';
$txt['error_search_string_small_words'] = 'Cada palabra debe tener al menos dos caracteres.';
$txt['error_query_not_specific_enough'] = 'La consulta no es lo suficientemente específica. Por favor, utiliza palabras más largas.';
$txt['error_no_messages_in_time_frame'] = 'No se encontraron mensajes en el tiempo que se especificó';
$txt['error_no_labels_selected'] = '¡Ninguna etiqueta fue seleccionada!';
$txt['error_no_search_daemon'] = 'Imposible acceder al motor de búsqueda.';

$txt['profile_errors_occurred'] = 'Han ocurrido los siguientes errores al intentar guardar tu perfil';
$txt['profile_error_bad_offset'] = 'La diferencia horaria está fuera de rango';
$txt['profile_error_no_name'] = 'El campo del nombre se dejó en blanco';
$txt['profile_error_name_taken'] = 'El nombre de usuario/nombre para mostrar seleccionado ya está siendo utilizado por alguien más';
$txt['profile_error_name_too_long'] = 'El nombre seleccionado es demasiado largo. Debe ser menor de 60 caracteres de largo';
$txt['profile_error_no_email'] = 'El campo de email se dejó en blanco';
$txt['profile_error_bad_email'] = 'No has proporcionado una dirección de email válida';
$txt['profile_error_email_taken'] = 'Otro usuario ya se encuentra registrado con esa dirección de email';
$txt['profile_error_no_password'] = 'No especificaste tu contraseña';
$txt['profile_error_bad_new_password'] = 'Las nuevas contraseñas que especificaste no coinciden';
$txt['profile_error_bad_password'] = 'La contraseña que proporcionaste es incorrecta';
$txt['profile_error_bad_avatar'] = 'El avatar que has seleccionado es muy grande';
$txt['profile_error_password_short'] = 'Tu contraseña debe contener un mínimo de ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' caracteres.';
$txt['profile_error_password_restricted_words'] = 'Tu contraseñ no debe contener tu usuario, dirección email u otras palabras usuales.';
$txt['profile_error_password_chars'] = 'Tu contraseñ debe contener una mezcla de letras mayúsculas y minúsculas, así como números.';
$txt['profile_error_already_requested_group'] = '¡Ya tienes un pedido pendiente para este grupo!';
$txt['profile_error_openid_in_use'] = 'Otro usuario ya esta usando esa autentificación de \'OpenID URL\'.';

$txt['mysql_error_space'] = ' - revisa el espacio disponible de la base de datos.';

$txt['icon_not_found'] = 'El icono no se pudo encontrar en el tema predeterminado - por favor revisa que la imagen ha sido subida a su respectivo directorio e intenta nuevamente.';
$txt['icon_after_itself'] = '¡El icono no puede colocarse después de sí mismo!';
$txt['icon_name_too_long'] = 'Los nombres de iconos no pueden contener más de 16 caracteres';

$txt['name_censored'] = 'Lo sentimos, el nombre que intentaste usar, %1$s, contiene palabras que han sido censuradas.  Por favor intenta con otro nombre.';

$txt['poll_already_exists'] = '¡Un tema solamente puede contener una encuesta asociada!';
$txt['poll_not_found'] = '¡No hay ninguna encuesta asociada a este tema!';

$txt['error_while_adding_poll'] = 'Ocurrieron los siguientes errores al añadir esta encuesta';
$txt['error_while_editing_poll'] = 'Ocurrieron los siguientes errores al editar esta encuesta';

$txt['loadavg_search_disabled'] = 'Debido a la sobrecarga del servidor, la función de búsquedas no está disponible actualmente.';
$txt['loadavg_generic_disabled'] = 'Lo sentimos, debido a la sobrecarga del servidor, esta funciín no está disponible actualmente.';
$txt['loadavg_allunread_disabled'] = 'Los recursos del servidor están sobrecargados como para encontrar todos los temas que no has leído.';
$txt['loadavg_unreadreplies_disabled'] = 'El servidor está sobrecargado. Por favor, inténtalo de nuevo más tarde.';
$txt['loadavg_show_posts_disabled'] = 'Por favor, inténtalo de nuevo más tarde.  Los mensajes de este usuario no están disponibles debido a la sobrecarga del servidor.';
$txt['loadavg_unread_disabled'] = 'El servidor está demasiado ocupado por el momento como para listar los temas que no has leído.';

$txt['cannot_edit_permissions_inherited'] = 'No puedes editar permisos heredados directamente, debes editar el grupo o la herencia de los miembros del grupo.';

$txt['mc_no_modreport_specified'] = 'Debes especificar qué reporte quieres ver.';
$txt['mc_no_modreport_found'] = 'El reporte especificado no existe o está fuera de tus límites.';

$txt['st_cannot_retrieve_file'] = 'No es posible extraer el archivo %1$s.';
$txt['admin_file_not_found'] = 'Imposible cargar el siguiente archivo: %1$s.';

$txt['themes_none_selectable'] = 'Al menos un tema debe ser seleccionable.';
$txt['themes_default_selectable'] = 'El tema predeterminado del foro debe ser un tema seleccionable.';
$txt['ignoreboards_disallowed'] = 'La opción de ignorar foros no está disponible.';

$txt['mboards_delete_error'] = '¡No has seleccionado una categoría!';
$txt['mboards_delete_board_error'] = '¡No has seleccionado un foro!';

$txt['mboards_parent_own_child_error'] = 'No puedes hacer un foro como subforo del mismo.';
$txt['mboards_board_own_child_error'] = 'No puedes hacer un foro como subforo del mismo.';

$txt['smileys_upload_error_notwritable'] = 'Los siguientes directorios de smileys no se pueden escribir: %1$s';
$txt['smileys_upload_error_types'] = 'Las imágenes de los smileys solo pueden tener la siguiente extensión: %1$s.';

$txt['change_email_success'] = 'Tu dirección de correo ha cambiado, y un nuevo correo de activación ha sido enviado.';
$txt['resend_email_success'] = 'Un nuevo correo de activación ha sido enviado satisfactoriamente.';

$txt['custom_option_need_name'] = '¡La opción del perfil debe tener un nombre!';
$txt['custom_option_not_unique'] = '¡El nombre del campo no es único!';

$txt['warning_no_reason'] = 'Es necesario que entre una razón por cual estas alterando el estatus de alerta para un miembro.';
$txt['warning_notify_blank'] = 'Usted seleccionó notificar el usuario pero no lleno la área del sujeto, o del mensaje.';

$txt['cannot_connect_doc_site'] = 'No se pudo conectar al manual de Simple Machines. Por favor revise su configuración de su servidor que permita conexiones al Internet y trate otra ves después.';

$txt['movetopic_no_reason'] = 'Es necesario que entre una razón por cual estas moviendo esta tema, oh desmarque la opción de \'enviar un tema de re-direcció\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'El identificador solicitado no devolvió la información correcta.';
$txt['openid_return_no_mode'] = 'El proveedor de identidad no respondió con el modo Open ID.';
$txt['openid_not_resolved'] = 'El proveedor de identidad no aprobó tu solicitud.';
$txt['openid_no_assoc'] = 'No se pudo encontrar la asociación solicitada con el proveedor de identidad.';
$txt['openid_sig_invalid'] = 'La firma del proveedor de identidad es inválida.';
$txt['openid_load_data'] = 'No se pueden cargar los datos de tu solicitud de ingreso. Intenta más tarde.';
$txt['openid_not_verified'] = 'La dirección OpenID no ha sido verificada todavía. Ingresa para verificarla.';

$txt['error_custom_field_too_long'] = 'El campo "%1$s" no puede ser mayor de %2$d caracteres.';
$txt['error_custom_field_invalid_email'] = '"%1$s" debe contener una dirección de correo válida.';
$txt['error_custom_field_not_number'] = 'El campo "%1$s" debe ser numérico.';
$txt['error_custom_field_inproper_format'] = 'El campo "%1$s" tiene un formato inválido.';
$txt['error_custom_field_empty'] = 'El campo "%1$s" no puede quedar en blanco.';

$txt['email_no_template'] = 'La plantilla de correo "%1$s" no se pudo encontrar.';

$txt['search_api_missing'] = '¡La búsqueda API no pudo encontrarse! Contacta al administrador para revisar que los archivos correctos han sido subidos.';
$txt['search_api_not_compatible'] = 'La búsqueda API del foro seleccionada es muy antigua - volviendo a la búsqueda común. Revisa el archivo %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'No puedes restaurar el primer mensaje de un tema.';
$txt['parent_topic_missing'] = 'El tema padre del mensaje que estás intentando restaurar ha sido eliminado.';
$txt['restored_disabled'] = 'La restauración de temas ha sido deshabilitada.';
$txt['restore_not_found'] = 'Los siguientes mensajes no pueden ser restaurados, el tema original puede haber sido eliminado:<ul style="margin-top: 0px;">%1$s</ul>Debes moverlos manualmente.';

$txt['error_invalid_dir'] = 'El directorio especificado es inválido.';

$txt['error_sqlite_optimizing'] = 'Sqlite esta optimizando la base de datos, el foro no se esta accesible mientras tanto. Por favor trate refrescando la pagina en un momento.';

?>