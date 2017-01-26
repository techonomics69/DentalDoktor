<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Foros';
$txt['admin_users'] = 'Usuarios';
$txt['admin_newsletters'] = 'Boletines de Noticias';
$txt['admin_edit_news'] = 'Noticias';
$txt['admin_groups'] = 'Grupos de usuarios';
$txt['admin_members'] = 'Ver todos los usuarios';
$txt['admin_members_list'] = 'Debajo está el listado de todos los usuarios registrados actualmente en tu foro.';
$txt['admin_next'] = 'Siguiente';
$txt['admin_censored_words'] = 'Palabras censuradas';
$txt['admin_censored_where'] = 'Escribe la palabra a ser censurada en la izquierda, y la palabra por la que se cambiará en la derecha.';
$txt['admin_censored_desc'] = 'Debido a la naturaleza pública de los foros, puede que haya algunas palabras que desees prohibir que se publiquen por usuarios en tu foro. Puedes introducir cualquier palabra que desees que se censure cuando sea usada por algún usuario.<br />Para eliminar una palabra, limpia su cuadro de texto.';
$txt['admin_reserved_names'] = 'Nombres reservados';
$txt['admin_template_edit'] = 'Editar la plantilla del foro';
$txt['admin_modifications'] = 'Modificaciones';
$txt['admin_security_moderation'] = 'Seguridad y Moderación';
$txt['admin_server_settings'] = 'Configuración del Servidor';
$txt['admin_reserved_set'] = 'Establecer nombres reservados';
$txt['admin_reserved_line'] = 'Una palabra reservada por línea';
$txt['admin_basic_settings'] = 'Esta página te permite cambiar la configuración básica de tu foro.  Sé muy cuidadoso con estas configuraciones, ya que podrían dejar el foro sin funcionar.  Es importante mencionar que algunas de estas opciones (como, por ejemplo, el formato de la hora) son predeterminadas solamente para visitantes.';
$txt['admin_maintain'] = '¿Modo de Mantenimiento?';
$txt['admin_title'] = 'Título del Foro';
$txt['admin_url'] = 'URL del Foro';
$txt['cookie_name'] = 'Nombre de la Cookie';
$txt['admin_webmaster_email'] = 'Dirección email del Webmaster';
$txt['boarddir'] = 'Directorio SMF';
$txt['sourcesdir'] = 'Directorio de Fuentes';
$txt['cachedir'] = 'Directorio de Caché';
$txt['admin_news'] = '¿Activar Noticias?';
$txt['admin_guest_post'] = '¿Permitir publicar mensajes a los visitantes?';
$txt['admin_manage_members'] = 'Controles de los Usuarios';
$txt['admin_main'] = 'Controles del Foro';
$txt['admin_config'] = 'Configuración del Foro';
$txt['admin_version_check'] = 'Revisión detallada de la versión';
$txt['admin_smffile'] = 'Archivo SMF';
$txt['admin_smfpackage'] = 'Paquete SMF';
$txt['admin_maintenance'] = 'Mantenimiento';
$txt['admin_image_text'] = 'Mostrar botones como imágenes, en vez de texto';
$txt['admin_credits'] = 'Créditos';
$txt['admin_agreement'] = 'Mostrar y requerir carta de aceptación cuando se registren';
$txt['admin_agreement_default'] = 'En forma predeterminada';
$txt['admin_agreement_select_language'] = 'Idioma a editar';
$txt['admin_agreement_select_language_change'] = 'Cambiar';
$txt['admin_delete_members'] = 'Borrar usuarios seleccionados';
$txt['admin_repair'] = 'Reparar todos los Foros y Temas';
$txt['admin_main_welcome'] = 'Este es tu "%1$s". Aquí puedes modificar la configuración del foro, ver logs, instalar paquetes, configurar temas, y muchas otras cosas..<div style="margin-top: 1ex;">Si tienes algún problema, por favor revisa la página de "Soporte y Créditos". Si esa información no te sirve, puedes <a href="http://www.simplemachines.org/community/index.php?board=16.0" target="_blank">visitarnos para solicitar ayuda</a> acerca de tu problema.</div>También puedes encontrar respuestas a tus preguntas y problemas haciendo <i>clic</i> en los símbolos <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s"  title="%3$s" /> para obtener mayor información de las funciones en cuestión.';
$txt['admin_news_desc'] = 'Introduce solamente una noticia por cuadro. Están permitidos en las noticias: smileys, HTML y algunas etiquetas BBC; como por ejemplo <span title="¿Estás en negritas?">[b]</span>, <span title="¡Cursivas!">[i]</span> y <span title="Los corchetes son grandiosos, ¿no?">[u]</span>. Limpia el cuadro de cualquier elemento de las noticias para eliminarlo.';
$txt['administrators'] = 'Administradores del Foro';
$txt['admin_reserved_desc'] = 'Los Nombres Reservados impiden que los usuarios registren ciertos nombres de usuario o usen esas palabras en sus nombres a mostrar. Escoge las opciones que desees usar en la parte inferior antes de enviar el formulario.';
$txt['admin_activation_email'] = '¿Enviar email de activación a los nuevos usuarios, después de registrarse?';
$txt['admin_match_whole'] = 'Coincidir palabra completa solamente. Si no está seleccionada, buscará por palabras reservadas dentro del nombre.';
$txt['admin_match_case'] = 'Sensible a mayúsculas. Si no está seleccionada, la búsqueda NO será sensible a mayúsculas.';
$txt['admin_check_user'] = 'Revisar nombre de usuario.';
$txt['admin_check_display'] = 'Revisar nombre mostrado.';
$txt['admin_newsletter_send'] = 'Puedes enviar email a cualquiera desde esta página. La dirección email del grupo de usuarios seleccionado debe aparecer debajo, pero puedes agregar o eliminar cualquier dirección de email que desees. Cada dirección de email debe estar separada de esta manera: \\\'dirección1; dirección2\\\'.';
$txt['admin_fader_delay'] = 'Retardo del desvanecimiento entre elementos en el cuadro de noticias';
$txt['admin_bbc'] = 'Mostrar botones BBC en las páginas de Publicar Mensaje y envío de MP';

$txt['admin_backup_fail'] = 'No se pudo hacer un respaldo de Settings.php - por favor revisa que Settings_bak.php exista, y pueda escribirse en él.';
$txt['modSettings_info'] = 'Cambia o especifica las opciones de control con las que opera este foro.';
$txt['database_server'] = 'Servidor en que la base de datos se encuentra:';
$txt['database_user'] = 'Nombre de usuario de la base de datos:';
$txt['database_password'] = 'Contraseña de la base de datos:';
$txt['database_name'] = 'Nombre de la base de datos:';
$txt['registration_agreement'] = 'Carta de Aceptación';
$txt['registration_agreement_desc'] = 'Esta Carta de Aceptación se muestra cuando un usuario registra una cuenta en el foro y tiene que ser aceptada para que los usuarios puedan continuar registrándose.';
$txt['database_prefix'] = 'Prefijo de las Tablas de la Base de Datos';
$txt['errors_list'] = 'Listado de errores del foro';
$txt['errors_found'] = 'Los siguientes errores están presentes en tu foro';
$txt['errors_fix'] = '¿Deseas arreglar esos errores?';
$txt['errors_do_recount'] = 'Todos los errores han sido reparados, Por favor presiona el botón de abajo para recontar algunas estadísticas importantes.';
$txt['errors_recount_now'] = 'Volver a contar estadísticas.';
$txt['errors_fixing'] = 'Arreglando errores del foro';
$txt['errors_fixed'] = '¡Todos los errores han sido arreglados! Necesitarás revisar cualquier nueva categoría, foro, o temas para decidir qué harás con ellas.';
$txt['attachments_avatars'] = 'Archivos adjuntos y Avatares';
$txt['attachments_desc'] = 'Desde aquí puedes administrar los archivos adjuntos que se encuentran en tu sistema. Puedes borrar archivos adjuntos por tamaño y por fecha. Las estadísticas de los archivos adjuntos se muestran debajo.';
$txt['attachment_stats'] = 'Estadísticas de los Archivos adjuntos';
$txt['attachment_integrity_check'] = 'Revisar integridad de el adjunto.';
$txt['attachment_integrity_check_desc'] = 'Esta función revisará la integridad, el tamaño y los nombres de archivos listados en la base de datos y, ai es necesario, reparar los errores que encuentre.';
$txt['attachment_check_now'] = 'Revisar ahora.';
$txt['attachment_pruning'] = 'Limpieza de adjuntos';
$txt['attachment_pruning_message'] = 'Mensaje para agregar a el tema';
$txt['attachment_pruning_warning'] = '¿Estás seguro(a) de querer borrar estos adjuntos?  esta acción no se puede ser revertida.';
$txt['attachment_total'] = 'Total de Archivos adjuntos';
$txt['attachmentdir_size'] = 'Tamaño total del directorio de Archivos adjuntos';
$txt['attachmentdir_size_current'] = 'Espacio total para el directorio de adjuntos';
$txt['attachment_space'] = 'Espacio total disponible en el directorio de Archivos adjuntos';
$txt['attachment_space_current'] = 'Espacio total disponible en el directorio de adjuntos';
$txt['attachment_options'] = 'Opciones de los Archivos adjuntos';
$txt['attachment_log'] = 'Log de Archivos adjuntos';
$txt['attachment_remove_old'] = 'Eliminar archivos adjuntos más viejos que';
$txt['attachment_remove_size'] = 'Eliminar archivos adjuntos más grandes que';
$txt['attachment_name'] = 'Nombre del Archivo adjunto';
$txt['attachment_file_size'] = 'Tamaño';
$txt['attachmentdir_size_not_set'] = 'No se ha establecido un tamaño máximo del directorio de archivos adjuntos';
$txt['attachment_delete_admin'] = '[archivo adjunto borrado por el administrador]';
$txt['live'] = 'En vivo desde Simple Machines...';
$txt['remove_all'] = 'Eliminar todo';
$txt['approve_new_members'] = 'Un administrador debe aprobar todos los nuevos usuarios';
$txt['agreement_not_writable'] = 'Advertencia - NO se puede escribir en agreement.txt. Cualquier cambio que hagas NO se guardará';

$txt['version_check_desc'] = 'Esto te muestra las versiones de tus archivos instalados, comparados con las últimas versiones de éstos. Si alguno de estos archivos están desactualizados, debes descargar y actualizar a la última versión en <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(más detallado)';

$txt['lfyi'] = 'No puedes conectarte al último archivo de noticias de simplemachines.org.';

$txt['manage_calendar'] = 'Calendario';
$txt['manage_search'] = 'Búsquedas';

$txt['smileys_manage'] = 'Conjunto de Smileys e Iconos de Mensajes';
$txt['smileys_manage_info'] = 'Instalar nuevos conjuntos de smileys o agregar smileys a los conjuntos existentes, además de administrar los iconos de los mensajes.';
$txt['package_info'] = 'Instalar nuevas características o modificar las existentes con esta interfaz.';
$txt['theme_admin'] = 'Temas y Diseño';
$txt['theme_admin_info'] = 'Configurar y administrar tus temas, así como especificar o reinicializar las opciones del tema.';
$txt['registration_center'] = 'Registro de Usuarios';
$txt['member_center_info'] = 'Ver la lista de usuarios, buscar usuarios y administrar los usuarios pendientes de aprobación y que aún no han activado su cuenta.';

$txt['viewmembers_name'] = 'Nombre de usuario (nombre mostrado)';
$txt['viewmembers_online'] = 'Última vez en línea';
$txt['viewmembers_today'] = 'Hoy';
$txt['viewmembers_day_ago'] = 'día';
$txt['viewmembers_days_ago'] = 'días';

$txt['display_name'] = 'Nombre a mostrar';
$txt['email_address'] = 'Dirección Email';
$txt['ip_address'] = 'Dirección IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'desconocido';
$txt['security_wrong'] = '¡Intento de ingreso a administración!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Enviar en formato HTML.  (con esto, puedes poner HTML en el email.)';
$txt['email_parsed_html'] = 'Agregar &lt;br /&gt;s y &amp;nbsp;s a este mensaje.';
$txt['email_variables'] = 'En este mensaje puedes usar algunas "variables".  Haz <i>clic</i> <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">aquí</a> para más información.';
$txt['email_force'] = 'Enviar a estos usuarios aún si ellos eligieron no recibir anuncios.';
$txt['email_as_pms'] = 'Enviar esto a esos grupos usando mensajes personales.';
$txt['email_continue'] = 'Continuar';
$txt['email_done'] = 'finalizado.';

$txt['ban_title'] = 'Lista de accesos prohibidos';
$txt['ban_ip'] = 'IP con acceso prohibido: (ej. 192.168.12.213 o 128.0.*.*) - una por línea';
$txt['ban_email'] = 'Email con acceso prohibido: (ej. maldito@algunlugar.com) - uno por línea';
$txt['ban_username'] = 'Nombre de usuario con acceso prohibido: (ej. Webmaster) - uno por línea';

$txt['ban_description'] = 'Aquí puedes restringir el acceso a personas conflictivas ya sea por IP, nombre de servidor, nombre de usuario, o email.';
$txt['ban_add_new'] = 'Agregar nueva restricción de acceso';
$txt['ban_banned_entity'] = 'Elemento restringido';
$txt['ban_on_ip'] = 'Restingir por IP (ej. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Restringir por nombre de dominio (ej. *.mil)';
$txt['ban_on_email'] = 'Restringir por dirección de Email (ej. *@sitiomalo.com)';
$txt['ban_on_username'] = 'Restringir por nombre de usuario';
$txt['ban_notes'] = 'Notas';
$txt['ban_restriction'] = 'Restricción';
$txt['ban_full_ban'] = 'Restricción completa';
$txt['ban_partial_ban'] = 'Restricción parcial';
$txt['ban_cannot_post'] = 'No puede publicar';
$txt['ban_cannot_register'] = 'No puede registrarse';
$txt['ban_cannot_login'] = 'No puede ingresar';
$txt['ban_add'] = 'Agregar';
$txt['ban_edit_list'] = 'Editar lista de accesos prohibidos';
$txt['ban_type'] = 'Tipo de restricción';
$txt['ban_days'] = 'día(s)';
$txt['ban_will_expire_within'] = 'La restricción expirará en';
$txt['ban_added'] = 'Añadido';
$txt['ban_expires'] = 'Expira';
$txt['ban_hits'] = 'Intentos';
$txt['ban_actions'] = 'Acciones';
$txt['ban_expiration'] = 'Expiración';
$txt['ban_reason_desc'] = 'Motivo por el que se le restringió el acceso, para ser mostrado al usuario en cuestión.';
$txt['ban_notes_desc'] = 'Notas que puedan ayudar a otros miembros admins.';
$txt['ban_remove_selected'] = 'Eliminar seleccionados';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = '¿Estás seguro que deseas eliminar los accesos restringidos seleccionados?';
$txt['ban_modify'] = 'Modificar';
$txt['ban_name'] = 'Nombre';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Editar restricción';
$txt['ban_add_notes'] = '<b>Nota</b>: después de crear la restricción de arriba, puedes agregar datos adicionales que activen la restricción, como direcciones IP, nombres de dominios y direcciones email.';
$txt['ban_expired'] = 'Expirado / Desactivado';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Ninguna restricción seleccionada.';

$txt['ban_triggers'] = 'Restricciones';
$txt['ban_add_trigger'] = 'Añadir restricción';
$txt['ban_add_trigger_submit'] = 'Añadir';
$txt['ban_edit_trigger'] = 'Modificar';
$txt['ban_edit_trigger_title'] = 'Editar restricción';
$txt['ban_edit_trigger_submit'] = 'Modificar';
$txt['ban_remove_selected_triggers'] = 'Eliminar las restricciones seleccionadas';
$txt['ban_no_entries'] = 'No hay actualmente prohibiciones efectivas.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = '¿Estás seguro de que deseas eliminar las restricciones seleccionadas?';
$txt['ban_trigger_browse'] = 'Mostrar restricciones';
$txt['ban_trigger_browse_description'] = 'Esta pantalla permite mostrar todas las restricciones ordenadas por IP, nombre de dominio, dirección email o usuario.';

$txt['ban_log'] = 'Log de restricciones de acceso';
$txt['ban_log_description'] = 'El log de accesos prohibidos muestra todos los intentos de ingreso al foro por los usuarios a los que se les restringió el acceso. (\\\'restricción completa\\\' y \\\'no puede registrarse\\\' solamente).';
$txt['ban_log_no_entries'] = 'No hay entradas del log de restricciones de acceso';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Dirección Email';
$txt['ban_log_member'] = 'Usuario';
$txt['ban_log_date'] = 'Fecha';
$txt['ban_log_remove_all'] = 'Eliminar Todos';
$txt['ban_log_remove_all_confirm'] = '¿Estás seguro que deseas eliminar todas las entradas del log de accesos prohibidos?';
$txt['ban_log_remove_selected'] = 'Eliminar seleccionados';
$txt['ban_log_remove_selected_confirm'] = '¿Estás seguro que deseas eliminar todas las entradas seleccionadas del log de accesos prohibidos?';
$txt['ban_no_triggers'] = 'Ninguna restricción';

$txt['settings_not_writable'] = 'Esta configuración no puede guardarse, ya que Settings.php es de sólo lectura.';

$txt['maintain_title'] = 'Mantenimiento del Foro';
$txt['maintain_info'] = 'Con esas herramientas puedes optimizar tablas, hacer respaldos, revisar errores, y podar foros.';
$txt['maintain_sub_database'] = 'Base de Datos';
$txt['maintain_sub_routine'] = 'Rutina';
$txt['maintain_sub_members'] = 'Miembros';
$txt['maintain_sub_topics'] = 'Temas';
$txt['maintain_done'] = 'Completado el Mantenimiento satisfactoriamente.';
$txt['maintain_no_errors'] = '¡Felicidades, no se encontró ningún error!  Gracias por verificar.';

$txt['maintain_tasks'] = 'Tareas programadas';
$txt['maintain_tasks_desc'] = 'Administre todas las tareas programadas por SMF.';

$txt['scheduled_log'] = 'Registro de tareas';
$txt['scheduled_log_desc'] = 'Lista registros de las tareas realizadas.';
$txt['admin_log'] = 'Registro del administrador';
$txt['admin_log_desc'] = 'Lista tareas administrativas realizadas por administradores del foro.';
$txt['moderation_log'] = 'Registro de moderación';
$txt['moderation_log_desc'] = 'Lista actividades de moderación realizadas por moderadores del foro.';
$txt['spider_log_desc'] = 'Revisar las entradas relacionadas con la actividad de las arañas de los motores de búsqueda en tu foro.';
$txt['pruning_log_desc'] = 'Usa estas herramientas para purgar entradas antiguas en distintos Logs.';

$txt['mailqueue_title'] = 'Correo';

$txt['db_error_send'] = 'Enviar emails en errores de conexión de MySQL';
$txt['db_persist'] = 'Usar una conexión persistente';
$txt['ssi_db_user'] = 'Usuario de base de datos para usar en modo SSI';
$txt['ssi_db_passwd'] = 'Contraseña de la base de datos para usar en modo SSI';

$txt['default_language'] = 'Idioma predeterminado en el foro';

$txt['maintenance_subject'] = 'Asunto a mostrar:';
$txt['maintenance_message'] = 'Mensaje a mostrar:';

$txt['errlog_desc'] = 'El registro de errores registra cada error encontrado en tu foro.  Para eliminar cualquier error de la base de datos, selecciona la casilla, y haz <i>clic</i> en el botón  %s ubicado en la parte inferior de la página.';
$txt['errlog_no_entries'] = 'No hay entradas en el log de errores.';

$txt['theme_settings'] = 'Configuración del Tema';
$txt['theme_current_settings'] = 'Tema actual';

$txt['dvc_your'] = 'Tu versión';
$txt['dvc_current'] = 'Versión actual';
$txt['dvc_sources'] = 'Fuentes';
$txt['dvc_default'] = 'Plantillas predeterminadas';
$txt['dvc_templates'] = 'Plantillas actuales';
$txt['dvc_languages'] = 'Archivos de idioma';

$txt['smileys_default_set_for_theme'] = 'Selecciona la colección de smileys para este tema';
$txt['smileys_no_default'] = '(usar conjunto global predeterminado de smileys)';

$txt['censor_test'] = 'Probar palabras censuradas';
$txt['censor_test_save'] = 'Probar';
$txt['censor_case'] = 'Ignorar mayúsculas/minúsculas cuando se esté censurando';
$txt['censor_whole_words'] = 'Censurar sólo palabras completas';

$txt['admin_confirm_password'] = '(confirmar)';
$txt['admin_incorrect_password'] = 'Contraseña incorrecta';

$txt['date_format'] = '(DD-MM-AAAA)';
$txt['undefined_gender'] = 'No definido';
$txt['age'] = 'Edad del usuario';
$txt['activation_status'] = 'Estado de la activación';
$txt['activated'] = 'Activado';
$txt['not_activated'] = 'No activado';
$txt['primary'] = 'Primario';
$txt['additional'] = 'Adicional';
$txt['messenger_address'] = 'Dirección del Messenger';
$txt['wild_cards_allowed'] = 'Son permitidos los caracteres * y ?';
$txt['search_for'] = 'Buscar por';
$txt['member_part_of_these_membergroups'] = 'Usuario es parte de estos grupos';
$txt['membergroups'] = 'Grupos de usuario';
$txt['confirm_delete_members'] = '¿Estás seguro que deseas eliminar los usuarios seleccionados?';

$txt['support_credits_title'] = 'Soporte y Créditos';
$txt['support_credits_info'] = 'Obtén soporte de problemas comunes e información de la versión para proporcionar en caso que tengas problemas.';
$txt['support_title'] = 'Información de Soporte';
$txt['support_versions_current'] = 'Versión actual de SMF';
$txt['support_versions_forum'] = 'Versión del Foro';
$txt['support_versions_php'] = 'Versión de PHP';
$txt['support_versions_db'] = '%1$s versión';
$txt['support_versions_server'] = 'Versión del Servidor';
$txt['support_versions_gd'] = 'Versión de GD';
$txt['support_versions'] = 'Información de versiones';
$txt['support_resources'] = 'Recursos de Soporte';
$txt['support_resources_p1'] = 'Nuestro <a href="%1$s">Manual en línea</a> muestra la documantación principal para SMF. El manual en línea contiene muchos documentos que te ayudarán a resolver tus dudas asi como también a explicar las  <a href="%2$s">Características</a>, <a href="%3$s">Configuraciones</a>, <a href="%4$s">Themes</a>, <a href="%5$s">Packages (mods)</a> etc, El manual en línea documenta cada área de SMF.';
$txt['support_resources_p2'] = 'Si no pudiste encontrar las respuestas que necesitabas en el manual,  quizá debas buscar en nuestra <a href="%1$s">Comunidad</a> o pedir asistencia en los foros de soporte en <a href="%2$s">Inglés</a> o en uno de los muchos <a href="%3$s">foros de soporte internacional</a> (español incluido). ';

$txt['support_latest'] = 'Soporte y Asuntos comunes';
$txt['support_latest_fetch'] = 'Obteniendo información del soporte...';

$txt['edit_permissions_info'] = 'Cambiar restricciones y características disponibles globalmente o a foros específicos.';
$txt['membergroups_members'] = 'Usuarios regulares';
$txt['membergroups_guests'] = 'Visitantes';
$txt['membergroups_guests_na'] = 'n/d';
$txt['membergroups_add_group'] = 'Agregar grupo';
$txt['membergroups_permissions'] = 'Permisos';

$txt['permitgroups_restrict'] = 'Restrictivo';
$txt['permitgroups_standard'] = 'Estándar';
$txt['permitgroups_moderator'] = 'Moderador';
$txt['permitgroups_maintenance'] = 'Mantenimiento';
$txt['permitgroups_inherit'] = 'Heredar';

$txt['confirm_delete_attachments_all'] = '¿Estás seguro que deseas eliminar todos los archivos adjuntos?';
$txt['confirm_delete_attachments'] = '¿Estás seguro que deseas eliminar los archivos adjuntos seleccionados?';
$txt['attachment_manager_browse_files'] = 'Examinar Archivos';
$txt['attachment_manager_repair'] = 'Mantenimiento';
$txt['attachment_manager_avatars'] = 'Avatares';
$txt['attachment_manager_attachments'] = 'Archivos adjuntos';
$txt['attachment_manager_thumbs'] = 'Vistas miniaturas';
$txt['attachment_manager_last_active'] = 'Última vez activo';
$txt['attachment_manager_member'] = 'Usuario';
$txt['attachment_manager_avatars_older'] = 'Eliminar avatares de usuarios no activos por más de';
$txt['attachment_manager_total_avatars'] = 'Total de Avatares';

$txt['attachment_manager_avatars_no_entries'] = 'No hay actualmente avatares.';
$txt['attachment_manager_attachments_no_entries'] = 'No hay actualmente adjuntos.';
$txt['attachment_manager_thumbs_no_entries'] = 'No hay vistas previas.';

$txt['attachment_manager_settings'] = 'Configuración de los Archivos adjuntos';
$txt['attachment_manager_avatar_settings'] = 'Configuración de los Avatares';
$txt['attachment_manager_browse'] = 'Examinar archivos';
$txt['attachment_manager_maintenance'] = 'Mantenimiento de Archivos';
$txt['attachment_manager_save'] = 'Guardar';

$txt['attachmentEnable'] = 'Modo de adjuntos';
$txt['attachmentEnable_deactivate'] = 'Desactivar Archivos adjuntos';
$txt['attachmentEnable_enable_all'] = 'Activar todos los Archivos adjuntos';
$txt['attachmentEnable_disable_new'] = 'Desactivar nuevos Archivos adjuntos';
$txt['attachmentCheckExtensions'] = 'Revisar extensión del archivo adjunto';
$txt['attachmentExtensions'] = 'Extensiones permitidas de los archivos adjuntos';
$txt['attachmentRecodeLineEndings'] = 'Recodificar finales de líneas en archivos de texto adjuntados';
$txt['attachmentShowImages'] = 'Mostrar archivos adjuntos como imágenes debajo del mensaje';
$txt['attachmentEncryptFilenames'] = 'Encriptar los nombres de los archivos almacenados';
$txt['attachmentUploadDir'] = 'Ruta donde se guardarán los archivos adjuntos<div class="smalltext"><a href="\' . $scripturl . \'?action=admin;area=manageattachments;sa=attachpaths">Configurar múltiples directorios de adjuntos</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Directorio de adjuntos';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="\' . $scripturl . \'?action=admin;area=manageattachments;sa=attachpaths">[Configurar múltiples directorios de adjuntos]</a>';
$txt['attachmentDirSizeLimit'] = 'Tamaño máximo del directorio de archivos adjuntos';
$txt['attachmentPostLimit'] = 'Tamaño máximo del archivos adjunto por mensaje';
$txt['attachmentSizeLimit'] = 'Tamaño máximo del archivos adjunto';
$txt['attachmentNumPerPostLimit'] = 'Número máximo de archivos adjuntos en un mensaje';
$txt['attachment_gd_warning'] = 'El módulo de GD no está instalado. La re-codificación de la imagen no es posible.';
$txt['attachment_image_reencode'] = 'Re-codificar imágenes adjuntas potencialmente peligrosas';
$txt['attachment_image_reencode_note'] = '(Requiere el módulo GD)';
$txt['attachment_image_paranoid_warning'] = 'Los extensos controles de seguridad pueden resultar en un gran numero de adjuntos rechazados.';
$txt['attachment_image_paranoid'] = 'Realizar controles de seguridad extensivos sobre las imágenes adjuntas';
$txt['attachmentThumbnails'] = 'Ajustar imágenes mostradas bajo los mensajes';
$txt['attachment_thumb_png'] = 'Guardar imágenes en miniatura como PNG';
$txt['attachmentThumbWidth'] = 'Ancho máximo de las vistas miniatura';
$txt['attachmentThumbHeight'] = 'Alto máximo de las vistas miniatura';

$txt['attach_dir_does_not_exist'] = 'No existe';
$txt['attach_dir_not_writable'] = 'Escritura no permitida';
$txt['attach_dir_files_missing'] = 'Archivos no encontrados (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;sesc=%1$s">Reparar</a>)';
$txt['attach_dir_unused'] = 'Sin utilizar';
$txt['attach_dir_ok'] = 'Correcto';

$txt['attach_path_manage'] = 'Administrar rutas de adjuntos';
$txt['attach_paths'] = 'Rutas de adjuntos';
$txt['attach_current_dir'] = 'Directorio actual';
$txt['attach_path'] = 'Ruta';
$txt['attach_current_size'] = 'Tamaño actual (KB)';
$txt['attach_num_files'] = 'Archivos';
$txt['attach_dir_status'] = 'Estado';
$txt['attach_add_path'] = 'Agregar ruta';
$txt['attach_path_current_bad'] = 'Ruta de adjuntos actual inválida';

$txt['mods_cat_avatars'] = 'Avatares';
$txt['avatar_directory'] = 'Directorio de Avatares';
$txt['avatar_url'] = 'URL de los Avatars';
$txt['avatar_dimension_note'] = '(0 = sin límite)';
$txt['avatar_max_width_external'] = 'Ancho máximo del avatar externo';
$txt['avatar_max_height_external'] = 'Alto máximo de avatar externo';
$txt['avatar_action_too_large'] = 'Si el avatar es demasiado grande...';
$txt['option_refuse'] = 'Rechazarlo';
$txt['option_html_resize'] = 'Permitirle al HTML ajustar el tamaño';
$txt['option_js_resize'] = 'Redimensionarlo con JavaScript';
$txt['option_download_and_resize'] = 'Descargarlo y ajustar el tamaño (se necesita el módulo GD)';
$txt['avatar_max_width_upload'] = 'Ancho máximo del avatar subido';
$txt['avatar_max_height_upload'] = 'Alto máximo del avatar subido';
$txt['avatar_resize_upload'] = 'Ajustarle el tamaño a los avatares muy grandes';
$txt['avatar_resize_upload_note'] = '(se necesita el módulo GD)';
$txt['avatar_download_png'] = '¿Usar PNG para los avatares a los que se les ajustó el tamaño?';
$txt['avatar_gd_warning'] = 'El modulo de GD no se encuentra instalado. Algunas funciones para el manejo de avatares están desactivadas.';
$txt['avatar_external'] = 'Avatares externos';
$txt['avatar_upload'] = 'Se pueden subir avatares';
$txt['avatar_server_stored'] = 'Avatares almacenados en el servidor';
$txt['avatar_server_stored_groups'] = 'Grupos permitidos para seleccionar un avatar alojado en el servidor';
$txt['avatar_upload_groups'] = 'Grupos permitidos para subir un avatar al servidor';
$txt['avatar_external_url_groups'] = 'Grupos permitidos para seleccionar una URL externa';
$txt['avatar_select_permission'] = 'Selecciona los permisos de cada grupo';
$txt['avatar_download_external'] = 'Descargar un avatar del URL especificado';
$txt['custom_avatar_enabled'] = 'Subir avatares a...';
$txt['option_attachment_dir'] = 'Directorio de Archivos adjuntos';
$txt['option_specified_dir'] = 'Directorio específico...';
$txt['custom_avatar_dir'] = 'Directorio al que se subirán los archivos';
$txt['custom_avatar_dir_desc'] = 'No debe ser igual al directorio donde se almacenan los avatares en el servidor.';
$txt['custom_avatar_url'] = 'Subir avatar desde el URL';
$txt['custom_avatar_check_empty'] = 'El directorio para avatares que has especificado puede estar vacio o ser inválido. Por favor, asegúrate de que la configuración sea la correcta.';
$txt['avatar_reencode'] = 'Re-codificar los avatares potencialmente peligrosos';
$txt['avatar_reencode_note'] = '(Requiere el módulo GD)';
$txt['avatar_paranoid_warning'] = 'Los extensos controles de seguridad pueden resultar en un gran numero de avatares rechazados.';
$txt['avatar_paranoid'] = 'Realizar controles de seguridad extensivos sobre los avatares subidos';

$txt['repair_attachments'] = 'Mantenimiento de Archivos adjuntos';
$txt['repair_attachments_complete'] = 'Completado el Mantenimiento';
$txt['repair_attachments_complete_desc'] = 'Todos los errores seleccionados han sido corregidos';
$txt['repair_attachments_no_errors'] = '¡No se encontró ningún error!';
$txt['repair_attachments_error_desc'] = 'Se encontraron los siguientes errores durante el mantenimiento. Marca la casilla correspondiente al error que deseas corregir y pulsa en Continuar.';
$txt['repair_attachments_continue'] = 'Continuar';
$txt['repair_attachments_cancel'] = 'Cancelar';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d vistas miniatura no tienen un archivo adjunto padre';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d padres están marcados que tienen vista miniaturas, pero no los tienen';
$txt['attach_repair_file_missing_on_disk'] = '%1$d archivos adjuntos/avatares tienen una entrada, pero no existen en el disco';
$txt['attach_repair_file_wrong_size'] = '%1$d archivos adjuntos/avatares están registrados con un tamaño incorrecto';
$txt['attach_repair_file_size_of_zero'] = '%1$d archivos adjuntos/avatares tienen tamaño cero en el disco. (Serán eliminados)';
$txt['attach_repair_attachment_no_msg'] = '%1$d archivos adjuntos ya no tienen un mensaje asociado con ellos';
$txt['attach_repair_avatar_no_member'] = '%1$d avatares ya no tienen un usuario asociado con ellos';
$txt['attach_repair_wrong_folder'] = '%1$d adjuntos están en el directorio incorrecto';

$txt['news_title'] = 'Noticias y Boletines';
$txt['news_settings_desc'] = 'Aquí puedes cambiar la configuración y los permisos relacionados con las noticias y boletines.';
$txt['news_settings_submit'] = 'Guardar';
$txt['news_mailing_desc'] = 'Desde este menú puedes enviar mensajes a todos los usuarios que se han registrado, e introducido su dirección de email. Puedes editar la lista de distribución, o enviar mensajes a todos. útil para información de noticias o modificaciones.';
$txt['groups_edit_news'] = 'Grupos autorizados para editar elementos de noticias';
$txt['groups_send_mail'] = 'Grupos autorizados para publicar boletines';
$txt['xmlnews_enable'] = '¿Activar noticias XML/RSS?';
$txt['xmlnews_maxlen'] = 'Longitud máxima del mensaje:<div class="smalltext">(cero para deshabilitarlo, mala idea.)</div>';
$txt['editnews_clickadd'] = 'Haz <i>clic</i> aquí para agregar otro elemento.';
$txt['editnews_remove_selected'] = 'Eliminar seleccionados';
$txt['editnews_remove_confirm'] = '¿Estás seguro que deseas eliminar los elementos de notificas seleccionados?';
$txt['censor_clickadd'] = 'Haz <i>clic</i> aquí para agregar otra palabra.';

$txt['layout_controls'] = 'Controles de Temas y Diseño';
$txt['logs'] = 'Registros';
$txt['generate_reports'] = 'Generar Informes';

$txt['update_available'] = '¡Actualización Disponible!';
$txt['update_message'] = 'Estás usando una versión desactualizada de SMF, que contiene algunos errores ya solucionados.
	Te recomendamos que <a href="" id="update-link">actualices tu foro</a> a la última versión cuanto antes. ¡Sólo te llevará un minuto!';

$txt['manageposts'] = 'Mensajes y Temas';
$txt['manageposts_title'] = 'Administrar Mensajes y Temas';
$txt['manageposts_description'] = 'Aquí puedes administrar todo lo relacionado con los mensajes y temas.';

$txt['manageposts_seconds'] = 'segundos';
$txt['manageposts_minutes'] = 'minutos';
$txt['manageposts_characters'] = 'caracteres';
$txt['manageposts_days'] = 'días';
$txt['manageposts_posts'] = 'mensajes';
$txt['manageposts_topics'] = 'temas';

$txt['manageposts_settings'] = 'Configuración de Mensajes';
$txt['manageposts_settings_description'] = 'Aquí puedes configurar todo lo relacionado con los mensajes.';
$txt['manageposts_settings_submit'] = 'Guardar';

$txt['manageposts_bbc_settings'] = 'Códigos BBC';
$txt['manageposts_bbc_settings_description'] = 'Se pueden utilizar códigos BBC para cambiar la apariencia de los mensajes del foro. Por ejemplo, para <b>enfatizar</b> la palabra \\\'casa\\\' puedes teclear [b]casa[/b]. Todas las marcas de códigos BBC deben ir acompañadas de corchetes("[" y "]").';
$txt['manageposts_bbc_settings_title'] = 'Configuración de códigos BBC';
$txt['manageposts_bbc_settings_submit'] = 'Guardar';

$txt['manageposts_topic_settings'] = 'Configuración de Temas';
$txt['manageposts_topic_settings_description'] = 'Aquí puedes configurar todo lo relacionado con los temas.';
$txt['manageposts_topic_settings_submit'] = 'Guardar';

$txt['removeNestedQuotes'] = 'Activar Eliminar citas anidadas';
$txt['enableEmbeddedFlash'] = 'Incrustar flash? (de lo contrario, mostrarlo como un enlace)';
$txt['enableEmbeddedFlash_warning'] = '¡puede ser un riesgo de seguridad!';
$txt['enableSpellChecking'] = 'Activar la corrección ortográfica';
$txt['enableSpellChecking_warning'] = '¡esto no funciona en todos los servidores!';
$txt['disable_wysiwyg'] = 'Deshabilitar editor WYSIWYG';
$txt['max_messageLength'] = 'Caracteres máximos permitidos en los mensajes';
$txt['max_messageLength_zero'] = '<div class="smalltext">(0 para desactivar)</div>';
$txt['fixLongWords'] = 'Partir palabras que tengan más letras que';
$txt['fixLongWords_zero'] = '<div class="smalltext">(0 para desactivar)</div>';
$txt['fixLongWords_warning'] = '¡esto no funciona en todos los servidores!';
$txt['topicSummaryPosts'] = 'Mensajes a mostrar en el resumen del tema';
$txt['spamWaitTime'] = 'Tiempo mínimo entre post desde la misma IP';
$txt['edit_wait_time'] = 'Editar Tiempo de Espera';
$txt['edit_disable_time'] = 'Tiempo máximo después de publicar para editar';
$txt['edit_disable_time_zero'] = '<div class="smalltext">(0 para desactivar)</div>';

$txt['enableBBC'] = 'Activar códigos BBC';
$txt['enablePostHTML'] = 'Activar la publicación de etiquetas <em>básicas</em> de HTML en mensajes';
$txt['autoLinkUrls'] = 'Crear los enlaces cuando se escriben URLs';
$txt['disabledBBC'] = 'Etiquetas BBC habilitadas';
$txt['bbcTagsToUse'] = 'Activar Etiquetas BBC';
$txt['bbcTagsToUse_select'] = 'Selecciona las etiquetas permitidas';
$txt['bbcTagsToUse_select_all'] = 'Selecciona todas';

$txt['enableStickyTopics'] = 'Activar Temas Fijados';
$txt['enableParticipation'] = 'Activar Iconos de participación';
$txt['oldTopicDays'] = 'Días antes de advertir que un tema es viejo';
$txt['oldTopicDays_zero'] = '<div class="smalltext">(0 para desactivar)</div>';
$txt['defaultMaxTopics'] = 'Número máximo de temas a mostrar en el índice';
$txt['defaultMaxMessages'] = 'Número máximo de mensajes a mostrar en una página';
$txt['hotTopicPosts'] = '¿Número de mensajes para un tema caliente?';
$txt['hotTopicVeryPosts'] = '¿Número de mensajes para un tema muy caliente?';
$txt['enableAllMessages'] = 'Número máximo de respuestas en un tema para ver "Todos"';
$txt['enableAllMessages_zero'] = '<div class="smalltext">(0 para nunca mostrar "Todos")</div>';
$txt['disableCustomPerPage'] = 'Deshabilitar personalización de tema/mensaje por página';
$txt['enablePreviousNext'] = 'Activar el Mod Tema Anterior/Siguiente';

$txt['not_done_title'] = '¡No ha terminado todavía!';
$txt['not_done_reason'] = 'Para evitar la sobrecarga de tu servidor, el proceso ha sido temporalmente suspendido.  Debería continuará automáticamente en unos segundos.  Si no lo hace, por favor, pulse en continuar.';
$txt['not_done_continue'] = 'Continuar';

$txt['general_settings'] = 'General';
$txt['database_paths_settings'] = 'Base de datos y Rutas';
$txt['cookies_sessions_settings'] = 'Cookies y Sesiones';
$txt['caching_settings'] = 'Caché';
$txt['load_balancing_settings'] = 'Balanceo de Carga';

$txt['language_configuration'] = 'Idiomas';
$txt['language_description'] = 'Esta sección te permite editar los idiomas instalados en el foro o descargar nuevos desde el sitio de Simple Machines. También puedes editar configuraciones relacionadas con el idioma.';
$txt['language_edit'] = 'Editar idiomas';
$txt['language_add'] = 'Agregar idioma';
$txt['language_settings'] = 'Configuración';

$txt['advanced'] = 'Avanzado';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Selecciona quién debe recibir una copia del boletín';
$txt['admin_news_select_group'] = 'Grupos de miembros';
$txt['admin_news_select_group_desc'] = 'Selecciona los grupos que recibirán el boletín';
$txt['admin_news_select_members'] = 'Miembros';
$txt['admin_news_select_members_desc'] = 'Miembros adicionales que recibirán el boletín';
$txt['admin_news_select_excluded_members'] = 'Miembros excluídos';
$txt['admin_news_select_excluded_members_desc'] = 'Miembros que no recibirán el boletín';
$txt['admin_news_select_excluded_groups'] = 'Grupos excluídos';
$txt['admin_news_select_excluded_groups_desc'] = 'Selecciona grupos que definitivamente no recibirán el boletín.';
$txt['admin_news_select_email'] = 'Direcciones de correo';
$txt['admin_news_select_email_desc'] = 'Una lista separada por "punto y coma" de las direcciones que recibirán el boletín. (Ejemplo: dirección1; dirección2)';
$txt['admin_news_select_override_notify'] = 'Sobreescribir parámetros de notificación';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'No puedes enviar un mensaje personal a una dirección de correo. Si continúas, todas las direcciones de correo ingresadas serán ignoradas.\\n\\n¿Deseas continuar?';

$txt['mailqueue_browse'] = 'Explorar la cola';
$txt['mailqueue_settings'] = 'Parámetros de correo';

$txt['admin_search'] = 'Búsqueda rápida';
$txt['admin_search_type_internal'] = 'Tarea/Parámetro';
$txt['admin_search_type_member'] = 'Miembro';
$txt['admin_search_type_online'] = 'Manual en línea';
$txt['admin_search_go'] = 'Buscar';
$txt['admin_search_results'] = 'Resultados de búsqueda';
$txt['admin_search_results_desc'] = 'Resultados de búsqueda: "%1$s"';
$txt['admin_search_results_again'] = 'Buscar de nuevo';
$txt['admin_search_results_none'] = '¡No se encontraron resultados!';

$txt['admin_search_section_sections'] = 'Sección';
$txt['admin_search_section_settings'] = 'Parámetro';

$txt['core_settings_title'] = 'Características fundamentales';
$txt['mods_cat_features'] = 'General';
$txt['mods_cat_security_general'] = 'General';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Varios';
$txt['mods_cat_layout'] = 'Diseño';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderación';
$txt['signature_settings_short'] = 'Firmas';
$txt['custom_profile_shorttitle'] = 'Campos del perfil';
$txt['pruning_title'] = 'Registrar recorte';

$txt['boardsEdit'] = 'Modificar foro';
$txt['mboards_new_cat'] = 'Nueva Categoría';
$txt['manage_holidays'] = 'Administrar vacaciones';
$txt['calendar_settings'] = 'Parámetros del calendario';
$txt['search_weights'] = 'Pesos';
$txt['search_method'] = 'Buscar método';

$txt['smiley_sets'] = 'Juegos de smileys';
$txt['smileys_add'] = 'Agregar smiley';
$txt['smileys_edit'] = 'Editar smileys';
$txt['smileys_set_order'] = 'Conjunto para smiley';
$txt['icons_edit_message_icons'] = 'Editar íconos de mensaje';

$txt['membergroups_new_group'] = 'Agregar grupo de miembros';
$txt['membergroups_edit_groups'] = 'Editar grupo de miembros';
$txt['permissions_groups'] = 'Permisos grupo de usuarios';
$txt['permissions_boards'] = 'Permisos foro';
$txt['permissions_profiles'] = 'Editar perfiles';
$txt['permissions_post_moderation'] = 'Moderación de posts';

$txt['browse_packages'] = 'Explorar paquetes';
$txt['download_packages'] = 'Descargar paquetes';
$txt['installed_packages'] = 'Paquetes instalados';
$txt['package_file_perms'] = 'Permisos de archivo';
$txt['package_settings'] = 'Opciones';
$txt['themeadmin_admin_title'] = 'Administrar e instalar';
$txt['themeadmin_list_title'] = 'Parámetros de temas';
$txt['themeadmin_reset_title'] = 'Opciones de miembros';
$txt['themeadmin_edit_title'] = 'Modificar temas';
$txt['admin_browse_register_new'] = 'Crear nuevos miembros';

$txt['search_engines'] = 'Motores de búsqueda';
$txt['spiders'] = 'Buscadores';
$txt['spider_logs'] = 'Logs';
$txt['spider_stats'] = 'Estadísticas';

$txt['paid_subscriptions'] = 'Subscripciones pagas';
$txt['paid_subs_view'] = 'Ver subscripciones';

?>