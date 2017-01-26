<?php
// Version: 2.0; Search

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['set_parameters'] = 'Establecer parámetros de búsqueda';
$txt['choose_board'] = 'Escoge un foro en el que se buscará, o buscar en todos';
$txt['all_words'] = 'Coincidir todas las palabras';
$txt['any_words'] = 'Coincidir con cualquier palabra';
$txt['by_user'] = 'Por usuario';

$txt['search_post_age'] = 'Antigüedad del mensaje';
$txt['search_between'] = 'entre';
$txt['search_and'] = 'y';
$txt['search_options'] = 'Opciones';
$txt['search_show_complete_messages'] = 'Mostrar los resultados como mensajes';
$txt['search_subject_only'] = 'Asuntos de temas solamente';
$txt['search_relevance'] = 'Relevancia';
$txt['search_date_posted'] = 'Fecha en que se publicó';
$txt['search_order'] = 'Orden de búsqueda ';
$txt['search_orderby_relevant_first'] = 'Resultados más importantes primero';
$txt['search_orderby_large_first'] = 'Temas más largos primero';
$txt['search_orderby_small_first'] = 'Temas más pequeños primero';
$txt['search_orderby_recent_first'] = 'Temas más recientes primero';
$txt['search_orderby_old_first'] = 'Temas más antiguos primero';
$txt['search_visual_verification_label'] = 'Verificación';
$txt['search_visual_verification_desc'] = 'Por favor ingresa el código de la imagen para usar la busqueda.';

$txt['search_specific_topic'] = 'Buscando solamente mensajes en el tema';

$txt['mods_cat_search'] = 'Buscar';
$txt['groups_search_posts'] = 'Grupos con acceso a las búsquedas';
$txt['simpleSearch'] = 'Activar búsqueda simple';
$txt['search_results_per_page'] = 'Número de resultados por página';
$txt['search_weight_frequency'] = 'Peso relativo de la búsqueda para el número de mensajes encontrados dentro de un tema';
$txt['search_weight_age'] = 'Peso relativo de la búsqueda para la edad del último mensaje encontrado';
$txt['search_weight_length'] = 'Peso relativo de la búsqueda para el tamaño del tema';
$txt['search_weight_subject'] = 'Peso relativo de la búsqueda para los resultados que se encuentren en el asunto';
$txt['search_weight_first_message'] = 'Peso relativo de la búsqueda para cuando el resultado se encuente en el primer mensaje';
$txt['search_weight_sticky'] = 'Peso relativo de la búsqueda para un tema fijado';

$txt['search_settings_desc'] = 'Aquí puedes cambiar la configuración básica de la función de búsqueda.';
$txt['search_settings_title'] = 'Función de búsqueda - configuración';

$txt['search_weights_desc'] = 'Aquí puedes cambiar los componentes individuales de la puntuación relevante. ';
$txt['search_weights_title'] = 'Búsqueda - pesos';
$txt['search_weights_total'] = 'Total';
$txt['search_weights_save'] = 'Guardar';

$txt['search_method_desc'] = 'Aquí puedes establecer el método en que la búsqueda es realizada.';
$txt['search_method_title'] = 'Búsqueda - método';
$txt['search_method_save'] = 'Guardar';
$txt['search_method_messages_table_space'] = 'Espacio usado por los mensajes del foro en la base de datos';
$txt['search_method_messages_index_space'] = 'Espacio usado para indexar los mensajes en la base de datos';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Índice Fulltext';
$txt['search_method_no_index_exists'] = 'no existe actualmente';
$txt['search_method_fulltext_create'] = 'crear un índice fulltext';
$txt['search_method_fulltext_cannot_create'] = 'no puede ser creado porque el tamaño máximo del mensaje excede 65,535';
$txt['search_method_index_already_exists'] = 'ya ha sido creado';
$txt['search_method_fulltext_remove'] = 'eliminar índice fulltext';
$txt['search_method_index_partial'] = 'parcialmente creado';
$txt['search_index_custom_resume'] = 'reanudar';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = '¡Para que puedas usar la búsqueda fulltext, debes crear primero un índice fulltext!';

$txt['search_index'] = 'Índice de búsqueda';
$txt['search_index_none'] = 'Sin índice';
$txt['search_index_custom'] = 'Índice personalizado';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'El panel de administración solo permite elegir entre índices de busqueda. Para ajustar la configuración de Sphinx usa la herramienta sphinx_config.php.';
$txt['search_index_label'] = 'Índice';
$txt['search_index_size'] = 'Tamaño';
$txt['search_index_create_custom'] = 'crear índice personalizado';
$txt['search_index_custom_remove'] = 'eliminar índice personalizado';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = '¡Para que puedas usar la búsqueda con índice personalizado, debes debes crear primero un índice personalizado!';

$txt['search_force_index'] = 'Forzar el uso de un índice de búsqueda';
$txt['search_match_words'] = 'Coincidir palabras completas solamente';
$txt['search_max_results'] = 'Máximo de resultados a mostrar';
$txt['search_max_results_disable'] = '(0: sin límite)';
$txt['search_floodcontrol_time'] = 'Time required between searches from same member';
$txt['search_floodcontrol_time_desc'] = '(tiempo en segundos, y 0 para desactivar)';

$txt['search_create_index'] = 'Crear índice';
$txt['search_create_index_why'] = '¿Por qué crear un índice de búsqueda?';
$txt['search_create_index_start'] = 'Crear';
$txt['search_predefined'] = 'Perfil predefinido';
$txt['search_predefined_small'] = 'Índice Pequeño';
$txt['search_predefined_moderate'] = 'Índice Moderado';
$txt['search_predefined_large'] = 'Índice Extenso';
$txt['search_create_index_continue'] = 'Continuar';
$txt['search_create_index_not_ready'] = 'SMF actualmente está creando un índice de búsqueda para tus mensajes. Para evitar la sobrecarga de tu servidor, el proceso ha sido temporalmente suspendido. Debe continuar automáticamente en unos segundos. De no hacerlo, haz click debajo.';
$txt['search_create_index_progress'] = 'Progreso';
$txt['search_create_index_done'] = '¡Ha sido creado el índice de búsqueda personalizado!';
$txt['search_create_index_done_link'] = 'Continuar';
$txt['search_double_index'] = 'Actualmente tienes dos índices en la tabla de mensajes. Para un mejor desempeño te recomendamos que elimines uno de los 2 índices.';

$txt['search_error_indexed_chars'] = 'El número de caracteres indexados es inválido. Se necesitan al menos 3 caracteres para que un índice sea útil.';
$txt['search_error_max_percentage'] = 'Porcentaje de palabras a omitir no válido. Utilice un valor de al menos un 5%.';
$txt['error_string_too_long'] = 'La cadena de busqueda debe ser menor de %1$d caracteres.';

$txt['search_adjust_query'] = 'Ajustar parámetros de búsqueda';
$txt['search_adjust_submit'] = 'Por favor, revisa la búsqueda';
$txt['search_did_you_mean'] = 'Puede que hayas intentado buscar por';

$txt['search_example'] = '<em>ej.</em> Neo "The Matrix" -pelicula';

$txt['search_engines_description'] = 'En esta sección puedes decidir el nivel de detalle del motor de busqueda al indexar tu foro como así también revisar los logs de busqueda.';
$txt['spider_mode'] = 'Nivel de Seguimiento del Motor de Busqueda<div class="smalltext">Niveles altos de seguimiento incrementan el requerimiento de recursos en el servidor.</div>';
$txt['spider_mode_off'] = 'Deshabilitar';
$txt['spider_mode_standard'] = 'Estándar - Registra minimamente la actividad de spiders';
$txt['spider_mode_high'] = 'Alto - Provee estadísticas mas acertadas.';
$txt['spider_mode_vhigh'] = 'Muy Alto - Igual que "Alto" pero con registro de datos acerca de cada página visitada.';
$txt['spider_settings_desc'] = 'Puedes cambiar los ajustes para el seguimiento de spiders para esta página. Si deseas activar el recorte automatico de registros de acceso puedes hacerlo desde <a href="%1$s">aquí</a>';

$txt['spider_group'] = 'Aplicar permisos restringidos a grupos<div class="smalltext">Para detener que los spiders indexen ciertas páginas.</div>';
$txt['spider_group_none'] = 'Deshabilitar';

$txt['show_spider_online'] = 'Mostrar spiders en la lista de usuarios en línea';
$txt['show_spider_online_no'] = 'Restricción completa';
$txt['show_spider_online_summary'] = 'Mostrar cantidad de spiders';
$txt['show_spider_online_detail'] = 'Mostrar detalles de spiders';
$txt['show_spider_online_detail_admin'] = 'Mostrar detalles de spiders - sólo administradores';

$txt['spider_name'] = 'Nombre de Spider';
$txt['spider_last_seen'] = 'Última vez visto';
$txt['spider_last_never'] = 'Nunca';
$txt['spider_agent'] = 'Agente de Usuario';
$txt['spider_ip_info'] = 'Direcciones IP';
$txt['spiders_add'] = 'Agregar Nuevo Spider';
$txt['spiders_edit'] = 'Editar Spider';
$txt['spiders_remove_selected'] = 'Remover Spiders Seleccionados';
$txt['spider_remove_selected_confirm'] = 'Estás seguro que deseas eliminar estos spiders?\\n\\nTodas las estadísticas asociadas se borrarán también!';
$txt['spiders_no_entries'] = 'No se han configurado los motores de búsqueda (spiders).';

$txt['add_spider_desc'] = 'Desde esta página puedes editar los parámetros con los cuales un spider es categorizado. Si la IP de un visitante coincide con la ingresada aquí será detectado como un spider y será tratado como tal.';
$txt['spider_name_desc'] = 'Nombre con el cual se referirá sobre un spider.';
$txt['spider_agent_desc'] = 'Agente asociado don este spider.';
$txt['spider_ip_info_desc'] = 'Lista de direcciones IP separadas con coma asociadas con este spider.';

$txt['spider'] = 'Spider';
$txt['spider_time'] = 'Tiempo';
$txt['spider_viewing'] = 'Viendo';
$txt['spider_logs_empty'] = 'No hay registros de los motores de busqueda (spiders) en este momento.';
$txt['spider_logs_info'] = 'Ten en cuenta que los registros de las acciones de cada spider solo se realizarán si el seguimiento está seleccionado en "alto" o "muy alto". Los detalles cada acción solo serán guardados si el seguimiento está en "muy alto". ';
$txt['spider_disabled'] = 'Deshabilitado';

$txt['spider_logs_delete'] = 'Borrar Entradas';
$txt['spider_logs_delete_older'] = 'Borrar todas las entradas de mas de';
$txt['spider_logs_delete_day'] = 'días.';
$txt['spider_logs_delete_submit'] = 'Eliminar';
// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Estás seguro que deseas vaciar todas las entradas?';

$txt['spider_stats_select_month'] = 'Saltar Al Mes';
$txt['spider_stats_page_hits'] = 'Visitas a las Páginas';
$txt['spider_stats_no_entries'] = 'Todavía no hay estadísticas de los motores de búsqueda (spiders).';

?>