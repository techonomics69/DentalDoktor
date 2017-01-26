<?php
// Version: 2.0; ManageBoards

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['boards_and_cats'] = 'Manejar Foros y Categorías';
$txt['order'] = 'Orden';
$txt['full_name'] = 'Nombre completo';
$txt['name_on_display'] = 'Este es el nombre que será mostrado.';
$txt['boards_and_cats_desc'] = 'Edita tus categorías y foros aquí. Lista múltiples moderadores como <i>"nombredeusuario", "nombredeusuario"</i>. (éstos deben ser nombres de usuarios, no los nombres que se muestran)<br />Para crear un nuevo foro, haz <i>clic</i> en el boton Nuevo Foro. Para hacer al nuevo foro un subforo del foro actual, selecciona "Subforo de..." en el menú del combo de Orden cuando estés creando el foro.';
$txt['parent_members_only'] = 'Usuarios no agrupados';
$txt['parent_guests_only'] = 'Visitantes';
$txt['catConfirm'] = '¿Realmente deseas borrar esta categoría?';
$txt['boardConfirm'] = '¿Realmente deseas borrar este foro?';

$txt['catEdit'] = 'Editar Categoría';
$txt['collapse_enable'] = 'Colapsable';
$txt['collapse_desc'] = '¿Permitir a los usuarios colapsar esta categoría?';
$txt['catModify'] = '(modificar)';

$txt['mboards_order_after'] = 'Después ';
$txt['mboards_order_inside'] = 'Dentro ';
$txt['mboards_order_first'] = 'En primer lugar';

$txt['mboards_new_board'] = 'Agregar foro';
$txt['mboards_new_cat_name'] = 'Nueva Categoría';
$txt['mboards_add_cat_button'] = 'Agregar Categoría';
$txt['mboards_new_board_name'] = 'Nuevo Foro';

$txt['mboards_name'] = 'Nombre';
$txt['mboards_modify'] = 'modificar';
$txt['mboards_permissions'] = 'permisos';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = '¿Estás seguro que deseas cambiar este foro a que use permisos locales?';

$txt['mboards_delete_cat'] = 'Borrar Categoría';
$txt['mboards_delete_board'] = 'Borrar Foro';

$txt['mboards_delete_cat_contains'] = 'Al borrar esta categoría también borrarás los siguientes foros, incluyendo todos los temas, mensajes y archivos adjuntos que contenga cada foro.';
$txt['mboards_delete_option1'] = 'Borrar categoría con todos los foros que contiene.';
$txt['mboards_delete_option2'] = 'Borrar categoría y mover todos los foros que contiene a';
$txt['mboards_delete_board_contains'] = 'Borrando este foro moverá también sus subforos, incluyendo todos los temas, mensajes y archivos adjuntos dentro de cada foro';
$txt['mboards_delete_board_option1'] = 'Borrar foro y mover todos sus subforos al nivel de categoría.';
$txt['mboards_delete_board_option2'] = 'Borrar foro y mover todos sus subforos a';
$txt['mboards_delete_what_do'] = 'Por favor, selecciona qué te gustaría hacer con esos foros';
$txt['mboards_delete_confirm'] = 'Confirmar';
$txt['mboards_delete_cancel'] = 'Cancelar';

$txt['mboards_category'] = 'Categoría';
$txt['mboards_description'] = 'Descripción';
$txt['mboards_description_desc'] = 'Una breve descripción de tu foro.';
$txt['mboards_groups'] = 'Grupos permitidos';
$txt['mboards_groups_desc'] = 'Grupos de usuarios a los que se les permite accesar este foro.<br /><em>Nota: si el usuario es un grupo, ellos tendrán acceso a este foro.</em>';
$txt['mboards_groups_regular_members'] = 'Este grupo contiene todos los miembros que no tienen grupo primario conjunto.';
$txt['mboards_groups_post_group'] = 'Este grupo es un grupo basado en el número de mensajes.';
$txt['mboards_moderators'] = 'Moderadores';
$txt['mboards_moderators_desc'] = 'Usuarios con privilegios especiales en este foro. Los administradores no están listados aquí';
$txt['mboards_count_posts'] = 'Contar Mensajes';
$txt['mboards_count_posts_desc'] = 'Cuando se publique un nuevo tema o mensaje, se incrementa el conteo de mensajes publicados de los usuarios.';
$txt['mboards_unchanged'] = 'Sin Cambiar';
$txt['mboards_theme'] = 'Tema del foro';
$txt['mboards_theme_desc'] = 'Esto te permite cambiar la apariencia, al estar dentro de este foro.';
$txt['mboards_theme_default'] = '(utilizar el tema default global.)';
$txt['mboards_override_theme'] = 'Hacer caso omiso de los temas de los usuarios';
$txt['mboards_override_theme_desc'] = 'Usar este tema del foro aún si el usuario no escogió usar los valores default';

$txt['mboards_redirect'] = 'Redireccionar a una web';
$txt['mboards_redirect_desc'] = 'Activar esta opción para redireccionar  a otra URL a cualquiera que haga click en este foro.';
$txt['mboards_redirect_url'] = 'Activar esta opción para redireccionar a otra URL a cualquiera que haga click en este foro.';
$txt['mboards_redirect_url_desc'] = 'Por ejemplo: "http://www.simplemachines.org".';
$txt['mboards_redirect_reset'] = 'Resetear el conteo de redirecciones';
$txt['mboards_redirect_reset_desc'] = 'Seleccionando esto se reseteará el conteo de redirecciones para este foro a cero.';
$txt['mboards_current_redirects'] = 'Actualmente: %1$s';
$txt['mboards_redirect_disabled'] = 'Nota: El foro debe estar vacío de Temas para activar esta opción.';
$txt['mboards_redirect_disabled_recycle'] = 'Nota: No puedes configurar el foro de reciclaje como un foro de redirección.';

$txt['mboards_order_before'] = 'Antes';
$txt['mboards_order_child_of'] = 'Subforo de';
$txt['mboards_order_in_category'] = 'En categoria';
$txt['mboards_current_position'] = 'Posición actual';
$txt['no_valid_parent'] = 'El foro %s no tiene un padre válido. Por favor usa la función \'buscar y reparar errores\' para solucionar este problema.';

$txt['mboards_recycle_disabled_delete'] = 'Nota: Debe seleccionar una alternativa de reciclaje antes de eliminar esta placa.';

$txt['mboards_settings_desc'] = 'Editar configuración general de foros y categorís.';
$txt['groups_manage_boards'] = 'Grupos autorizados para administrar foros y categorías';
$txt['mboards_settings_submit'] = 'Guardar';
$txt['recycle_enable'] = 'Activar el reciclado de temas borrados';
$txt['recycle_board'] = 'Foro para guardar los temas reciclados';
$txt['recycle_board_unselected_notice'] = 'Has habilitado el reciclaje de mensajes sin especificar un foro en donde ubicarlos. Esta función no funcionará hasta que especifiques un foro en donde colocar los mensajes borrados.';
$txt['countChildPosts'] = 'Contar mensajes de subforos en foros';
$txt['allow_ignore_boards'] = 'Permitir foros a ser ignorados';

$txt['mboards_select_destination'] = 'Selecciona el foro destino para \'<b>%1$s</b>\'';
$txt['mboards_cancel_moving'] = 'Cancelar traslado';
$txt['mboards_move'] = 'mover';

$txt['mboards_no_cats'] = 'Actualmente no hay categorías o tablas configuradas.';

?>