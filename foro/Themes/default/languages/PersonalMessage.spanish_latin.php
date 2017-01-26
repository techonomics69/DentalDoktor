<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Índice de mensajes privados';
$txt['send_message'] = 'Enviar mensaje';
$txt['pm_add'] = 'Agregar';
$txt['make_bcc'] = 'Agregar BCC';
$txt['pm_to'] = 'Para';
$txt['pm_bcc'] = 'Cco';
$txt['inbox'] = 'Recibidos';
$txt['conversation'] = 'Conversation';
$txt['messages'] = 'Mensajes';
$txt['sent_items'] = 'Mensajes enviados';
$txt['new_message'] = 'Mensaje Nuevo';
$txt['delete_message'] = 'Borrar Mensajes';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Borrar todos los mensajes de tu PMBOX';
$txt['delete_all_confirm'] = '¿Estás seguro que deseas borrar todos los mensajes?';
$txt['recipient'] = 'Destinatario';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nuevo Mensaje Privado: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Acaban de enviarte un mensaje privado de parte de SENDER en ' . $context['forum_name'] . '.

IMPORTANTE: Recuerda que ESTO ES SÓLO UNA NOTIFICACIÓN. Por favor, no respondas a este email.

El mensaje privado que te enviaron fue:

MESSAGE';
$txt['pm_multiple'] = '(múltiples destinatarios como \'nombreusuario1, nombreusuario2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Responde a este mensaje privado aquí:';

$txt['delete_selected_confirm'] = '¿Deseas borrar todos los Mensajes Privados seleccionados?';

$txt['sent_to'] = 'Enviado a';
$txt['reply_to_all'] = 'Responder a Todos';
$txt['delete_conversation'] = 'Borrar conversación';

$txt['pm_capacity'] = 'Capacidad';
$txt['pm_currently_using'] = '%1$s mensajes, %2$s%% lleno.';
$txt['pm_sent'] = 'Tu mensaje ha sido enviado con éxito.';

$txt['pm_error_user_not_found'] = 'No se pudo encontrar al usuario \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'El usuario \'%1$s\' ha bloqueado tus mensajes privados.';
$txt['pm_error_data_limit_reached'] = 'El mensaje privado no se pudo enviar a \'%s\' porque su casilla está llena.';
$txt['pm_error_user_cannot_read'] = 'El usuario \'%1$s\' no puede recibir mensajes personales.';
$txt['pm_successfully_sent'] = 'El mensaje privado se envió satisfactoriamente a \'%s\'.';
$txt['pm_send_report'] = 'Enviar informe';
$txt['pm_save_outbox'] = 'Guardar una copia en mi buzón Enviados';
$txt['pm_undisclosed_recipients'] = 'Destinatario(s) sin revelar';
$txt['pm_too_many_recipients'] = 'No puedes enviar mensajes personales a mas de %1$d destinatario(s) al mismo tiempo.';

$txt['pm_read'] = 'Leer';
$txt['pm_replied'] = 'Respondido A';

// Message Pruning.
$txt['pm_prune'] = 'Purgar Mensajes';
$txt['pm_prune_desc1'] = 'Borrar todos tus mensajes privados más antiguos de ';
$txt['pm_prune_desc2'] = 'días.';
$txt['pm_prune_warning'] = '¿Estás seguro que deseas borrar tus mensajes privados?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Acciones adicionales';
$txt['pm_actions_delete_selected'] = 'Borrar seleccionados';
$txt['pm_actions_filter_by_label'] = 'Filtrar por etiqueta';
$txt['pm_actions_go'] = 'Ir';

// Manage Labels Screen.
$txt['pm_apply'] = 'Aplicar';
$txt['pm_manage_labels'] = 'Administrar Etiquetas';
$txt['pm_labels_delete'] = '¿Estás seguro que deseas borrar las etiquetas seleccionadas?';
$txt['pm_labels_desc'] = 'Aquí puedes agregar, editar y borrar etiquetas utilizadas en el centro de mensajes privados.';
$txt['pm_label_add_new'] = 'Agregar nueva etiqueta';
$txt['pm_label_name'] = 'Nombre de la etiqueta';
$txt['pm_labels_no_exist'] = '¡No tienes ninguna etiqueta dada de alta!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etiqueta';
$txt['pm_msg_label_title'] = 'Etiquetar Mensaje';
$txt['pm_msg_label_apply'] = 'Agregar etiqueta';
$txt['pm_msg_label_remove'] = 'Eliminar etiqueta';
$txt['pm_msg_label_inbox'] = 'Bandeja de Entrada';
$txt['pm_sel_label_title'] = 'Etiquetar seleccionados';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiquetas';
$txt['pm_messages'] = 'Mensajes';
$txt['pm_actions'] = 'Acciones';
$txt['pm_preferences'] = 'Configuración';

$txt['pm_is_replied_to'] = 'Has reenviado o respondido a este mensaje.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Informar al Administrador';
$txt['pm_report_title'] = 'Informar sobre Mensaje Privado';
$txt['pm_report_desc'] = 'Desde esta página puedes informar sobre un mensaje privado a los administradores del foro. Asegúrate de incluir una descripción de la razón por la que quieres informar a los administradores, que se enviará con el contenido del mensaje original.';
$txt['pm_report_admins'] = 'Administrador al que quieres informar';
$txt['pm_report_all_admins'] = 'Enviarlo a todos los administradores';
$txt['pm_report_reason'] = 'Razón por la que informas sobre este mensaje';
$txt['pm_report_message'] = 'Mensaje a Informar';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORTE] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} te informa sobre un mensaje privado, enviado por {SENDER}, por la siguiente razón:';
$txt['pm_report_pm_other_recipients'] = 'Otros destinatarios del mensaje:';
$txt['pm_report_pm_hidden'] = '%1$d destinatario(s) oculto(s)';
$txt['pm_report_pm_unedited_below'] = 'Debajo está el contenido original del mensaje privado:';
$txt['pm_report_pm_sent'] = 'Enviado:';

$txt['pm_report_done'] = 'Gracias por enviar este informe. Recibira una respuesta del equipo de administración en breve.';
$txt['pm_report_return'] = 'Volver a la Bandeja de Entrada';

$txt['pm_search_title'] = 'Buscar Mensajes Privados';
$txt['pm_search_bar_title'] = 'Buscar Mensajes';
$txt['pm_search_text'] = 'Buscar por:';
$txt['pm_search_go'] = 'Buscar';
$txt['pm_search_advanced'] = 'Búsqueda avanzada';
$txt['pm_search_user'] = 'por usuario';
$txt['pm_search_match_all'] = 'Coincidir todas las palabras';
$txt['pm_search_match_any'] = 'Coincidir con cualquier palabra';
$txt['pm_search_options'] = 'Opciones';
$txt['pm_search_post_age'] = 'Antigüedad';
$txt['pm_search_show_complete'] = 'Mostrar los resultados como mensajes.';
$txt['pm_search_subject_only'] = 'Asuntos y autores solamente.';
$txt['pm_search_between'] = 'entre';
$txt['pm_search_between_and'] = 'y';
$txt['pm_search_between_days'] = 'días';
$txt['pm_search_order'] = 'Ordenar resultados por';
$txt['pm_search_choose_label'] = 'Escoger dónde buscar, o buscar en todos';

$txt['pm_search_results'] = 'Resultados de la Búsqueda';
$txt['pm_search_none_found'] = 'Ningún mensaje encontrado';

$txt['pm_search_orderby_relevant_first'] = 'Más relevantes primero';
$txt['pm_search_orderby_recent_first'] = 'Más recientes primero';
$txt['pm_search_orderby_old_first'] = 'Más antiguos primero';

$txt['pm_visual_verification_label'] = 'Verificación';
$txt['pm_visual_verification_desc'] = 'Por favor introduzca el código de la imagen para enviar este mensaje personal.';

$txt['pm_settings'] = 'Cambiar configuraciones';
$txt['pm_change_view'] = 'Cambiar vista';

$txt['pm_manage_rules'] = 'Administrar Reglas';
$txt['pm_manage_rules_desc'] = 'Las reglas de mensaje te permiten ordenar automáticamente dependiendo del un conjunto de criterios que definas. Debajo aparecen todas las reglas que tienes configuradas actualmente. Para editar una regla simplemente presiona sobre el nombre.';
$txt['pm_rules_none'] = 'Todavía no has configurado ninguna regla de mensajes.';
$txt['pm_rule_title'] = 'Regla';
$txt['pm_add_rule'] = 'Agregar Nueva Regla';
$txt['pm_apply_rules'] = 'Aplicar reglas ahora';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = '¿Estás seguro que deseas aplicar las siguientes reglas a todos los mensajes personales?';
$txt['pm_edit_rule'] = 'Editar Regla';
$txt['pm_rule_save'] = 'Guardar Regla';
$txt['pm_delete_selected_rule'] = 'Eliminar Reglas Seleccionadas';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = '¿Estas seguro que quieres borrar las reglas seleccionadas0.?';
$txt['pm_rule_name'] = 'Nombre';
$txt['pm_rule_name_desc'] = 'Nombre por el cual recordar esta regla';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Descripción';
$txt['pm_rule_not_defined'] = 'Agrega algún criterio para comenzar a construir esta descripción de regla.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Nota:</strong> Aparentemente tienes el javascript desactivado. Te recomendamos lo actives para poder usar ésta característica.</span>';
$txt['pm_rule_criteria'] = 'Criterio';
$txt['pm_rule_criteria_add'] = 'Agregar criterio';
$txt['pm_rule_criteria_pick'] = 'Seleccionar criterio';
$txt['pm_rule_mid'] = 'Nombre del enviador';
$txt['pm_rule_gid'] = 'Grupo del enviador';
$txt['pm_rule_sub'] = 'El asunto del mensaje contiene';
$txt['pm_rule_msg'] = 'El cuerpo del mensaje contiene';
$txt['pm_rule_bud'] = 'El enviador es amigo';
$txt['pm_rule_sel_group'] = 'Seleccione el grupo';
$txt['pm_rule_logic'] = 'Cuando los criterios de comprobación';
$txt['pm_rule_logic_and'] = 'Todos los criterios deben aplicarse';
$txt['pm_rule_logic_or'] = 'Cualquier criterio debe aplicarse';
$txt['pm_rule_actions'] = 'Acciones';
$txt['pm_rule_sel_action'] = 'Seleccione una acción';
$txt['pm_rule_add_action'] = 'Agregar acción';
$txt['pm_rule_label'] = 'Etiquetar mensaje con';
$txt['pm_rule_sel_label'] = 'Seleccionar etiqueta';
$txt['pm_rule_delete'] = 'Eliminar mensaje';
$txt['pm_rule_no_name'] = 'Olvidaste ponerle un nombre a la regla.';
$txt['pm_rule_no_criteria'] = 'Una regla debe tener al menos un criterio y una acción configurados.';
$txt['pm_rule_too_complex'] = 'La regla que estás creando es demasiado larga para que SMF la guarde. Intenta partiendola en reglas menores.';

$txt['pm_readable_and'] = '<em>y</em>';
$txt['pm_readable_or'] = '<em>o</em>';
$txt['pm_readable_start'] = 'Si ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'mensaje proviene de "{MEMBER}"';
$txt['pm_readable_group'] = 'el enviador es del grupo "{GROUP}"';
$txt['pm_readable_subject'] = 'el asunto del mensaje contiene "{SUBJECT}"';
$txt['pm_readable_body'] = 'el contenido del mensaje contiene "{BODY}"';
$txt['pm_readable_buddy'] = 'el enviador es un amigo';
$txt['pm_readable_label'] = 'aplicar etiqueta "{LABEL}"';
$txt['pm_readable_delete'] = 'eliminar el mensaje';
$txt['pm_readable_then'] = '<strong>entonces</strong>  ';

?>