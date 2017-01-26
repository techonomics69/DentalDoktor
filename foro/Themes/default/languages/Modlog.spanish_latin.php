<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Fecha';
$txt['modlog_member'] = 'Usuario';
$txt['modlog_position'] = 'Posición';
$txt['modlog_action'] = 'Acción';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Resultados de la búsqueda.';
$txt['modlog_total_entries'] = 'Entradas totales';
$txt['modlog_ac_approve_topic'] = 'Aprobó el tema "{topic}" por "{member}"';
$txt['modlog_ac_approve'] = 'Aprovó el mensaje  "{subject}" en el tema "{topic}" por "{member}"';
$txt['modlog_ac_lock'] = 'Bloqueo el tema "{topic}"';
$txt['modlog_ac_warning'] = 'Advertir a {member} por "{message}"';
$txt['modlog_ac_unlock'] = 'Desbloqueo el tema "{topic}"';
$txt['modlog_ac_sticky'] = 'Fijo el tema "{topic}"';
$txt['modlog_ac_unsticky'] = 'Desfijo el tema "{topic}"';
$txt['modlog_ac_delete'] = 'Borro el mensaje "{subject}"por "{member}" en "{topic}"';
$txt['modlog_ac_delete_member'] = 'borrar usuario "{name}"';
$txt['modlog_ac_remove'] = 'Elimino el tema "{topic}" de "{board}"';
$txt['modlog_ac_modify'] = 'Edito el mensaje "{message}" por "{member}"';
$txt['modlog_ac_merge'] = 'Unio temas para crear  "{topic}"';
$txt['modlog_ac_split'] = 'Dividio el tema "{topic}" para crear "{new_topic}"';
$txt['modlog_ac_move'] = 'Movio el tema "{topic}" de "{board_from}" a "{board_to}"';
$txt['modlog_ac_profile'] = 'Editar el perfil de "{member}"';
$txt['modlog_ac_pruned'] = 'Borrar algunos de los post de más de {days} días';
$txt['modlog_ac_news'] = 'Editar las noticias';
$txt['modlog_enter_comment'] = 'Introduzca comentadio de moderacion';
$txt['modlog_moderation_log'] = 'Moderacion Log';
$txt['modlog_moderation_log_desc'] = 'A continuación se muestra una lista de todas las acciones de moderación que se han llevado a cabo por los moderadores del foro.<br /><strong>Nota:</strong> Las entradas no se puede quitar de este registro hasta pasadas las 24 horas.';
$txt['modlog_no_entries_found'] = 'Actualmente no hay entradas de registro de la moderación.';
$txt['modlog_remove'] = 'Eliminar';
$txt['modlog_removeall'] = 'Eliminar todas';
$txt['modlog_go'] = 'Ir';
$txt['modlog_add'] = 'Agregar';
$txt['modlog_search'] = 'Busqueda rapida';
$txt['modlog_by'] = 'Por';
$txt['modlog_id'] = '<em>(ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = 'Plantila de alerta agregada: "{template}"';
$txt['modlog_ac_modify_warn_template'] = 'Plantilla de alerta editada: "{template}"';
$txt['modlog_ac_delete_warn_template'] = 'Plantilla de alerta borrada: "{template}"';

$txt['modlog_ac_ban'] = 'Agregar ban:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Miembro:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = ' <em>Email: </em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = ' <em>IP: </em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Host:</em> {hostname}';

$txt['modlog_admin_log'] = 'Administracion Log';
$txt['modlog_admin_log_desc'] = 'A continuación se muestra una lista de acciones de gestión que se han registrado en su foro.<br /><strong>Nota:</strong> Las entradas no se puede quitar de este registro hasta pasadas las 24 horas.';
$txt['modlog_admin_log_no_entries_found'] = 'Actualmente no hay entradas de registro de administración.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Versión mejorada del foro a la versión {version}';
$txt['modlog_ac_install'] = 'Versión instalada {version}';
$txt['modlog_ac_add_board'] = 'Se ha añadido una nuevo foro: "{board}"';
$txt['modlog_ac_edit_board'] = 'Editado el foro "{board}" ';
$txt['modlog_ac_delete_board'] = 'Se eliminó el foro "{boardname}" ';
$txt['modlog_ac_add_cat'] = 'Agregó una nueva categoría, "{catname}"';
$txt['modlog_ac_edit_cat'] = 'Editada la categoria "{catname}" ';
$txt['modlog_ac_delete_cat'] = 'Editada la categoria "{catname}" ';

$txt['modlog_ac_delete_group'] = 'Editado el grupo "{group}" ';
$txt['modlog_ac_add_group'] = 'Añadido el grupo "{group}" ';
$txt['modlog_ac_edited_group'] = 'Editado el grupo "{group}" ';
$txt['modlog_ac_added_to_group'] = 'Añadido "{member}" al grupo "{group}"';
$txt['modlog_ac_removed_from_group'] = 'Eliminado "{member}" del grupo "{group}" ';
$txt['modlog_ac_removed_all_groups'] = 'Eliminado "{member}" de todos los grupos';

$txt['modlog_ac_remind_member'] = 'Envió un recordatorio a "{member}" para activar su cuenta';
$txt['modlog_ac_approve_member'] = 'Aprobada/activada la cuenta de "{member}"';
$txt['modlog_ac_newsletter'] = 'Newsletter enviado';

$txt['modlog_ac_install_package'] = 'Instalado nuevo paquete: &quot;{package}&quot;, versión {version}';
$txt['modlog_ac_upgrade_package'] = 'Paquete actualizado: &quot;{package}&quot; a la versión {version}';
$txt['modlog_ac_uninstall_package'] = 'Paquete desinstalado: &quot;{package}&quot;, versión {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Tema restaurado "{topic}" de "{board}" a "{board_to}"';
$txt['modlog_ac_restore_posts'] = 'Post restaurado de "{subject}" con el tema "{topic}" en el foro "{board}" .';

$txt['modlog_parameter_guest'] = '<em>Invitado</em>';

?>