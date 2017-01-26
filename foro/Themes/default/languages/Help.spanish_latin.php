<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Cerrar ventana';

$helptxt['manage_boards'] = '
	<b>Editar foros</b><br />
	En este menú puedes crear/reordenar/eliminar foros, y las categorías
	arriba de ellos. Por ejemplo, si tienes un amplio sitio web
	que ofrece información acerca de "Anime", "Carros" y "Música",
	éstos deben ser las categorías a mayor nivel que debes crear. Debajo de esas
	categorías probablemente desees crear "sub-categorias" jerárquicas,
	o "Foros" para contener temas dentro de cada uno. Es una jerarquía simple, con esta estructura: <br />
	<ul>
		<li>
			<b>Anime</b>
			&nbsp;- Una "categoría"
		</li>
		<ul>
			<li>
				<b>Dragon Ball</b>
				&nbsp;- Un foro en la categoría de "Anime"
			</li>
			<ul>
				<li>
					<b>Dragon Ball Z</b>
					&nbsp;- Un subforo dentro del foro de "Dragon Ball"
				</li>
			</ul>
			<li><b>Aa! Megami-sama</b>
			&nbsp;- Un foro dentro de la categoría de "Anime"</li>
		</ul>
	</ul>
	Las Categorías te permiten organizar el foro de mensajes en temas ("Anime, Carros"),
	y los "Foros" dentro de ellas son los temas en los cuales los usuarios pueden
	publicar mensajes. En el ejemplo anterior, un usuario interesado en un Audi,
	publicaría un mensaje en el foro "Carros->Audi". Las Categorías permiten
	encontrar rápidamente cuales son sus intereses: En vez de "Tienda" se tienen
	tiendas de "Hardware" y "Electrodomesticos" a las que puedes ir.
	Esto simplifica tu búsqueda por "Pantalla", ya que puedes ir a la "categoría" de
	tienda de Hardware en vez de la tienda de Electrodomésticos (donde encontrarías televisiones de pantalla
	plana en vez de, probablemente, protectores de pantalla para la computadora).<br />

	Como se puede percibir arriba, un foro es una pieza importante dentro de la categoría.
	Si quieres discutir acerca de "Audi", debes ir a la categoría "Autos" e ir al foro
	"Audi" para publicar tus mensajes acerca de lo que opinas en ese foro.<br />
	Las funciones administrativas en este menú son para crear nuevos foros en cada
	categoría, reordenarlas (poner "Audi" abajo de "Ferrari"), o borrar un
	foro completamente.';

$helptxt['edit_news'] = '<ul class="normallist"> <li> <b>Noticias</b><br /> Esta sección te permite seleccionar el texto para las noticias que se mostrarán en el indice del foro. Agrega las noticias que quieras (ej., &quot;No te pierdas la conferencia este Jueves&quot;). Cada noticia será mostrada de forma aleatoria y se deberá ingresar en cuadros separados. </li> <li> <b>Boletines</b><br /> Esta sección te permite enviar boletines a los miembros del foro a través de mensajes personales o email. Primero selecciona los grupos que recibirán el boletín, y aquellos que no quieres que lo reciban. Si deseas, puedes agregar miembros adicionales y direcciones de email que recibirán el boletín. Finalmente ingresa el mensaje que quieres enviar y elige si se enviará por mensaje privado o por email. </li> <li> <b>Configuración</b><br /> Esta sección contiene algunas configuraciones relativas a las noticias y los boletines, incluyendo la opción de que grupos podrán editar y enviar boletines. Tambié puedes configurar si se habilitaran los news feeds en el foro y su longitud (cuantos caracteres se mostrarán) de cada nuevo mensaje en un news feed. </li> </ul> ';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Ver todos los usuarios</b><br />
			Ver todos los usuarios en el foro de mensajes. Se te presenta una lista con hipervínculo, de todos
			los nombres de los usuarios. Puedes hacer clic en cualquiera de los nombres para obtener mayores
			detalles de un usuario en especial (sitio web, edad, sexo, etc), y como Administrador, puedes modificar
			cualquiera de esos datos. Tienes un total control sobre los usuarios, incluyendo la posibilidad de
			borrarlos del foro de mensajes.<br /><br />
		</li>
		<li>
			<b>Esperando aprobación</b><br />
			Esta sección se muestra solamente si tienes activado que los administradores aprueben todos los nuevos registros de usuarios. Cualquiera que se registre para unirse a tu
			foro se volverá un usuario completo cuando haya sido aprobado por un administrador. La sección muestra todos aquellos usuarios que
			estén esperando aprobación, junto con su email y dirección IP. Tu puedes escoger ya sea aceptar y rechazar (borrar)
			cualquier usuario en la lista al seleccionar el cuadro al lado del usuario, y seleccionando la acción del cuadro colapsable al final
			de la pantalla. Cuando rechaces un usuario, puedes escoger borrar el usuario con o sin notificarle de tu decisión.<br /><br />
		</li>
		<li>
			<b>Esperando activación</b><br />
			Esta sección será visible solamente si tienes activado en el foro el que los usuarios activen sus cuentas. Esta sección listará todos los
			usuarios que no han activado sus nuevas cuentas. Desde esta pantalla puedes escoger aceptar, rechazar o recordarles a los
			usuarios con registros pendientes. Como en la opción anterior, puedes escoger enviarle email al usuario para informarle de la
			acción que hayas tomado.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Usuarios con acceso prohibido</b><br />
	SMF permite "banear" o "restringir el acceso" a usuarios, para prevenir el acceso a personas que han violado
	la confianza del foro de mensajes, al hacer spam, ser groseros, etc. Esto te permite restringirles el
	acceso a los usuarios que no desees mas en tu foro de mensajes. Como administrador, cuando ves los mensajes,
	puedes ver el IP de cada usuario que utilizó cuando publicó el mensaje. En la lista de accesos prohibidos,
	simplemente introduce la dirección IP, guarda los cambios, y ellos no podrán accesar el foro desde ese IP.<br />
	También puedes restringir el acceso de usuarios usando su dirección de email, o su nombre de usuario.';

$helptxt['featuresettings'] = '<b>Características y opciones</b><br /> Hay varias características en esta sección que pueden ser modificadas como prefieras.';

$helptxt['securitysettings'] = '<b>Seguridad y moderación</b><br /> Esta sección contiene parámetros para la seguridad y moderación de tu foro.';

$helptxt['modsettings'] = '<b>Config. y Opciones de \'Mods\' instalados</b><br />
	SMF tiene algunos mods preinstalados, puedes activarlos o desactivarlos desde este menú.';

$helptxt['number_format'] = '<b>Formato de Números</b><br />
	Puedes ajustar cómo los números serán mostrados al usuario.  El formato es:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Donde \',\' es el carácter utilizado para dividir los grupos de miles, \'.\' es el caracter utilizado como el punto decimal y el número de ceros indica la exactitúd de los redondeos.';

$helptxt['time_format'] = '<b>Formato de Hora</b><br />
	Puedes ajustar como visualizarás la hora y la fecha. Hay muchas palabras, pero es relativamente fácil.
	El formato sigue las especificaciones de la funcion strftime de PHP, y se describen a continuación (más detalles pueden encontrarse en <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Los siguientes caracteres se reconocen en la cadena del formato:<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nombre abreviado del día de la semana <br />
	&nbsp;&nbsp;%A - nombre completo del día de la semana <br />
	&nbsp;&nbsp;%b - nombre abreviado del mes <br />
	&nbsp;&nbsp;%B - nombre completo del mes <br />
	&nbsp;&nbsp;%d - día del mes (01 a 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - lo mismo que %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - día del mes (1 a 31) <br />
	&nbsp;&nbsp;%H - hora usando formato de 24 horas (rango 00 a 23) <br />
	&nbsp;&nbsp;%I - hora usando formato de 12 horas (rango 01 a 12) <br />
	&nbsp;&nbsp;%m - mes como número (01 a 12) <br />
	&nbsp;&nbsp;%M - minuto como número <br />
	&nbsp;&nbsp;%p - "am" o "pm" de acuerdo a la hora actual<br />
	&nbsp;&nbsp;%R<b>*</b> - hora en formato de 24 horas <br />
	&nbsp;&nbsp;%S - segundos como número decimal <br />
	&nbsp;&nbsp;%T<b>*</b> - hora actual, de la misma manera que %H:%M:%S <br />
	&nbsp;&nbsp;%y - año en formato de 2 dígitos (00 a 99) <br />
	&nbsp;&nbsp;%Y - año en formato de 4 dígitos <br />
	&nbsp;&nbsp;%Z - zona horaria o nombre o abreviación <br />
	&nbsp;&nbsp;%% - carácter \'%\'  <br />
	<br />
	<i>* No funciona en servidores Windows.</i></span>';

$helptxt['live_news'] = '<b>Anuncios en vivo</b><br />
	Este cuadro muestra los anuncios recientemente actualizados desde <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
	Debes revisar aquí de vez en cuando por actualizaciones, nuevas versiones, e información importante del equipo de Simple Machines.';

$helptxt['registrations'] = '<b>Manejo del Registro de Usuarios</b><br />
	Esta sección contiene todas las funciones que pueden ser necesarias para manejar nuevos registros de usuarios en el foro. Contiene hasta tres
	secciones que son visibles dependiendo de la configuración de tu foro. Éstas son:<br /><br />
	<ul>
		<li>
			<b>Registrar Nuevo usuario</b><br />
			Desde esta pantalla puedes escoger registrar nuevas cuentas en nombre de los nuevos usuarios. Esto puede ser útil en foros donde el registro está cerrado
			para nuevos usuarios, o en casos donde el administrador desea crear una cuenta de prueba. Si la opción de requerir activación de la cuenta
			está seleccionada, se le enviará un email al usuario, con un enlace al que se le deberá hacer clic antes de que puedan usar la cuenta. Asimismo, puedes
			seleccionar el enviar por email al usuario una nueva contraseña a su dirección de email.<br /><br />
		</li>
		<li>
			<b>Editar Carta de Aceptación al registrarse</b><br />
			Esto te permite establecer el texto para la carta de aceptación mostrada a los usuarios cuando están en
			el proceso de registro para obtener una cuenta en tu foro de mensajes.
			Puedes cambiar cualquier texto de la carta de aceptación original que se incluye en SMF.
		</li>
		<li>
			<b>Configuración</b><br />
			Esta sección será visible solamente si tienes permisos para administrar el foro. Desde esta pantalla puedes decidir el método de registro
			que será usado en tu foro, así como algunas otras configuraciones.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Log de Moderación</b><br />
	Esta sección le permite a los administradores mantenerse al tanto de todas las acciones de moderación que los moderadores del foro han realizado. Para asegurarse que
	los moderadores no puedan eliminar las referencias a las acciones que ellos han realizado, las entradas no pueden eliminarse hasta 24 horas después de que la acción se haya realizado.
	La columna \'objetos\' lista cualquier variable asociada con la acción.';
$helptxt['adminlog'] = '<b>Registro de acciones de administración</b><br /> Esta sección permite a los miembros del equipo de administración revisar acciones administrativas del foro. Para asegurar que los administradores no borren sus propias acciones, el registro no podrá borrarse hasta después de 24 horas.';
$helptxt['warning_enable'] = '<b>Usuario del Sistema de Alerta</b><br />
	Esta característica le permite a los miembros del equipo de administración y moderación emitir advertencias a los usuarios - y utilizar un nivel de advertencia para determinar las
acciones disponibles para ellos en el foro. Al activar esta función el permiso estará disponible dentro de la sección de permisos para definir
que los grupos pueden asignar las advertencias a los usuarios. los niveles de alerta se puede ajustar desde un perfil de usuarios. Las siguientes opciones adicionales están disponibles:
	<ul>
		<li>
			<b>Nivel de Alerta de Vigilancia del usuario</b><br />
			Este ajuste define el porcentaje de advertencia que un usuario debe alcanzar para automáticamente asignar "un reloj" al usuario.
			Cualquier usuario que está siendo "vigilados" aparecerá en la zona correspondiente del centro de moderación.
		</li>
		<li>
			<b>Nivel de Alerta de Vigilancia para moderacion de Post</b><br />
			Cualquier usuario que pasa el valor de este ajuste encontrará que todos sus postes requieren la aprobación de Moderador antes de que ellos aparezcan a la comunidad de foro. 
			Esto anulará cualquier permiso de tabla local que puede existir relacionado para fijar la moderación.
		</li>
		<li>
			<b>Nivel de Alerta de Vigilancia del usuario multi</b><br />
			Si este nivel de advertencia es pasado por un usuario ellos se encontrarán en una prohibición de post. El usuario perderá todos los derechos de Postear.
		</li>
		<li>
			<b>Nivel de Alerta de Vigilancia Maximo usuarios por dia</b><br />
      Esta configuración limita la cantidad de puntos que un moderador puede agregar o quitar a cualquier usuario en particular en un período de veinticuatro horas.
			Esto se puede utilizar para limitar lo que un moderador puede hacer en un corto período de tiempo. Esta configuración se puede desactivar el ajuste a un valor de cero.
			Tenga en cuenta que cualquier usuario con permisos de administrador no se ven afectados por este valor.
		</li>
	</ul>';
$helptxt['error_log'] = '<b>Registro de Errores</b><br />
	El Registro de errores rastrea cualquier error grave encontrado por usuarios al usar tu foro. Lista todos esos errores por fecha, que puede ser usada para ordenar
	al hacer clic en la flecha negra al lado de cada fecha. Asimismo, puedes filtrar los errores al hacer clic en la imagen al lado de cada estadística de error. Esto
	te permite filtrar, por ejemplo, por usuario. Cuando un filtro está activo, solamente los resultados que concuerden con el filtro, serán mostrados.';
$helptxt['theme_settings'] = '<b>Configuración del Tema</b><br />
	La pantalla de configuración te permite cambiar las configuración específica de un tema. Esta configuración incluye opciones tales como el directorio de los temas e información de URLs pero también
	opciones que afectan el diseño de un tema en tu foro. La mayoría de los temas tendrán una variedad de opciones configurables por el usuario, permitiéndote adaptar un tema
	para satisfacer las necesidades individuales de tu foro.';
$helptxt['smileys'] = '<b>Centro de Smileys</b><br />
	Aquí puedes agregar y eliminar smileys así como conjuntos de smileys. Es importante mencionar que si un smiley está en un conjunto, debe estar en todos los conjuntos - de otra manera, podría
	ser confuso para tus usuarios cuando utilicen diferentes conjuntos.';
$helptxt['calendar'] = '<b>Administrar Calendario</b><br />
	Aquí puedes modificar la configuración del calendario, asi como agregar y eliminar los días festivos que aparecen en el calendario.';

$helptxt['serversettings'] = '<b>Configuración del Servidor</b><br />
	Aquí puedes realizar la configuración principal de tu foro. Esta sección incluye la configuración de la base de datos y URLs, así como otros elementos importantes de la configuración como la configuración del correo y el cachés. Sé cuidadoso al editar estas configuraciones porque un error podría dejar inaccesible el foro';
$helptxt['manage_files'] = '<ul class="normallist">  <li>  <b>Navegar Archivos</b><br />  Navega en el directorio de adjuntos, avatares y thumbnails almacenados por SMF.<br /><br />  </li><li>  <b>Configuración de Adjuntos</b><br />  Configura donde serán almacenados los adjuntos y establece restriciones en el tipo de archivo.<br /><br />  </li><li>  <b>Configuración de Avatares</b><br />  Configura donde serán almacenados los avatares y maneja el tamaño de los mismos.<br /><br />  </li><li>  <b>Mantenimiento de Archivos</b><br />  Comprueba y repara cualquier error en el directorio de adjuntos y borra los adjuntos seleccionados.<br /><br />  </li>  </ul>  ';

$helptxt['topicSummaryPosts'] = 'Esto te permite especificar el número de mensajes anteriores mostrados en el sumario de temas, en la pantalla de responder.';
$helptxt['enableAllMessages'] = 'Establece esto al número <em>máximo</em> de mensajes que un tema puede tener para mostrar el enlace <i>todos</i>.  Si estableces este valor menor al de "Máximo número de mensajes a mostrar en una página de Tema" lo unico que conseguirás es que nunca se muestre, y si lo estableces muy alto, puede alentar tu foro.';
$helptxt['enableStickyTopics'] = 'Mensajes fijados son temas que permanecen en la parte superior de la lista de mensajes.
	Son usados generalmente para mensajes importantes. Solamente moderadores y administradores pueden fijar un tema.';
$helptxt['allow_guestAccess'] = 'El desseleccionar esta opción limitará a los visitantes a hacer solamente las funciones mas básicas - ingresar, registrarse, recordar contraseña, etc - en tu foro.  Esto NO es lo mismo que deshabilitar el acceso de los visitantes a los foros.';
$helptxt['userLanguage'] = 'Al activar esta opción, los usuarios pueden seleccionar el archivo de idioma que usarán.
	Esto no afectará la selección predeterminada.';
$helptxt['trackStats'] = 'Estadísticas:<br />Esto permite a los usuarios ver los últimos mensajes, y los temas mas populares de tu foro de mensajes.
	También muestra varias estadísticas, como el máximo de usuarios conectados al mismo tiempo, nuevos usuarios, y nuevos temas.<hr />
	Páginas vistas:<br />Agrega otra columna a la página de estadísticas con el numero de páginas vistas en tu foro.';
$helptxt['titlesEnable'] = 'Activando los Títulos Personalizados le permitirá a los usuarios que cuenten con el permiso respectivo, el especificar un título especial por ellos mismos.
	éste se mostrará debajo del nombre.<br /><i>ej.:</i><br />Omar<br />Saiya-jin';
$helptxt['topbottomEnable'] = 'Esto agregará los botones ir arriba y abajo, para que los usuarios puedan ir a la parte superior e inferior de la página sin
	hacer scroll.';
$helptxt['onlineEnable'] = 'Est mostrá una imagen indicando si el usuario está conectado o no.';
$helptxt['todayMod'] = 'Esto mostrará \'Hoy\' o \'Ayer\' en vez de la fecha.';
$helptxt['disableCustomPerPage'] = 'Marca esta opción para impedir que los usuarios personalicen la cantidad de mensajes y temas por página en el índice de mensajes y el despliegue de temas respectivamente.';
$helptxt['enablePreviousNext'] = 'Esto mostrará un enlace al tema anterior y al siguiente.';
$helptxt['pollMode'] = 'Esto especifica si las encuestas están activadas o no: Si las encuestas están desactivadas, cualquier encuesta ya existente será oculta
		del listado de temas. Puedes escoger el continuar mostrando los temas sin su encuesta asociada a ellos seleccionando
		"Mostrar Encuestas existentes como Temas".Para seleccionar quién puede publicar encuestas, ver encuestas, y otras cosas, puedes
		permitir o restringir sus permisos. Recuerda esto si las encuestas no están funcionando.';
$helptxt['enableVBStyleLogin'] = 'Esto mostrará un cuadro para ingresar tu usuario/contraseña en la parte inferior del foro de mensajes.';
$helptxt['enableCompressedOutput'] = 'Esta opción compactará la salida para reducir el consumo de ancho de banda,
	pero necesita que zlib esté instalado en el servidor.';
$helptxt['disableTemplateEval'] = 'En forma predeterminada, los templates son evaluados en lugar de ser incluidos. Esto se hace para mostrar información que pueda ayudar a solucionar ciertos problemas en caso de que el template contenga un error.<br /><br /> En foros muy grandes, esta acción puede alentarse significativamente, por lo tanto, usuarios con experiencia quizá quieran desactivarla.';
$helptxt['databaseSession_enable'] = 'Esta opción hace uso de la base de datos para guardar información de sesiones - es mejor para servidores con la carga balanceada, pero ayuda con todos los problemas de timeout y puede hacer más rápido al foro.  No funciona si session.auto_start está activado.';
$helptxt['databaseSession_loose'] = 'Activando esta opción decrementará el ancho de banda que consume tu foro, y hace que al hacer <i>clic</i> en atrás no recargue la página - lo malo de esto es que los (nuevos) iconos no se actualizarán, entre otras cosas. (a menos que hagas <i>clic</i> en esa página en vez de regresar a ella.)';
$helptxt['databaseSession_lifetime'] = 'Este es el número de segundos que durarán las sesiones después que no hayan sido accesadas.  Si una sesión no es accesada por mucho tiempo, se dice que ha "expirado".  Se recomienda cualquier valor arriba de 2400.';
$helptxt['enableErrorLogging'] = 'Esto registrará (log) cualquier error, como un ingreso de usuario inválido, para que puedas ver que salió mal.';
$helptxt['enableErrorQueryLogging'] = 'Esto incluirá la consulta completa enviada a la base de datos. Requiere la activación del registro de errores
<br /><br /><strong>Nota: esto afectará la capacidad de filtrar el registro de errores por errores de mensaje.</strong>';
$helptxt['allow_disableAnnounce'] = 'Permite a los usuarios desactivar la notificación de temas que anuncies marcando "anunciar tema" al publicar.';
$helptxt['disallow_sendBody'] = 'Esta opción elimina la posibilidad de recibir el texto de las respuestas y los mensajes en los emails de notificación.<br /><br />Es común que los usuarios, por error, respondan a los emails de notificación, lo que significa en la mayoría de las veces que el webmaster recibe la respuesta.';
$helptxt['compactTopicPagesEnable'] = 'Esto mostrará como se mostrará la selección de las páginas.<br /><i>Ej.:</i>
		"3" para mostrar: 1 ... 4 [5] 6 ... 9 <br />
		"5" para mostrar: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Esto mostrará en la parte inferior del foro, el tiempo en segundos que SMF necesitó para crear la página.';
$helptxt['removeNestedQuotes'] = 'Esto mostrará solamente una cita del mensaje en cuestión, pero no cualquier otro que haya estado presente de otros mensajes.';
$helptxt['simpleSearch'] = 'Esto mostrará una forma de búsqueda simple, con un enlace a una forma para búsquedas avanzadas.';
$helptxt['max_image_width'] = 'Esto te permitirá establecer el máximo de una imagen publicada. Imágenes mas pequeñas que el máximo no son afectadas.';
$helptxt['mail_type'] = 'Esta opción te permite escoger entre usar las opciones por defecto de PHP, o sobreescribirlas con SMTP.  PHP no soporta el usar autentificación con SMTP (que en la actualidad, muchos servidores lo requieren) asi que, de necesitarlo, selecciona SMTP.  Recuerda que SMTP puede ser más lento, y algunos servidores no toman nombres de usuarios y contraseñas.<br /><br />No necesitas llenar los valores de SMTP, si esta opción está utilizando los valores por defecto de PHP.';
$helptxt['attachment_manager_settings'] = 'Los adjuntos son archivos que los usuarios pueden subir junto a los mensajes.<br /><br /> <b>Revisar extensión del adjunto.</b>:<br /> ¿Deseas revisar la extensión de los archivos?<br /> <b>Extensiones de archivo permitidas</b>:<br /> Puedes determinar las extensiones de archivo válidas para subir.<br /> <b>Directorio de adjuntos</b>:<br /> La ruta de la carpeta de adjuntos <br />(ejemplo: /home/sites/yoursite/www/forum/adjuntos)<br /> <b>Tamaño máximo de la carpeta de adjuntos</b> (en KB):<br /> Selecciona cuán grande puede ser la carpeta de adjuntos, incluyendo los archivos en ella.<br /> <b>Tamñano máximo de adjunto por mensaje</b> (en KB):<br /> Selecciona el tamaño máximo que pueden tener los archivos subidos. Si es menor que el límite por adjunto, se usará este límite.<br /> <b>Tamaño máximo por adjunto</b> (en KB):<br /> Selecciona el tamaño máximo que puede tener cada archivo adjunto.<br /> <b>Límite de adjuntos por mensaje</b>:<br /> Selecciona la cantidad de adjuntos por mensaje que un usuario puede subir.<br /> <b>Mostrar adjunto como imagen en los mensajes</b>:<br /> Si el archivo subido es una imagen, esta opción lo mostrará al final del mensaje.<br /> <b>Redimensionar imágenes cuando se muestran debajo del mensaje</b>:<br /> Si la opción anterior es habilitada, esto generará y mostrará una imagen más pequeña para ahorrar ancho de banda.<br /> <b>Dimensiones máximas para la imagen miniatura</b>:<br /> Sólo utilizable con la opción "Redimensionar imágenes cuando se muestran debajo del mensaje", indica cuáles son las dimensiones máximas de ancho y alto. Se mantendrá la relación de aspecto.';
$helptxt['attachment_image_paranoid'] = 'Seleccionar esta opción habilitará revisiones muy estrictas de seguridad en los archivos adjuntos que sean imágenes. Advertencia! Estas revisiones extensivas pueden fallar aún en imágenes válidas. Se recomienda ampliamente solamente usar esta opción junto con la funcionalidad de recodificado de imágenes, para que SMF intente muestrear nuevamente las imágenes que fallen la revisión de seguridad: en caso de pasar la prueba, ellas serán desinfectadas y subidas al servidor. Caso contrario, si la funcionalidad de recodificado de imágenes no está habilitada, todos los archivos adjuntos que sean imágenes que fallen la revisión serán rechazados.';
$helptxt['attachment_image_reencode'] = 'Seleccionar esta opción habilitará la funcionalidad de recodificar los archivos adjuntos que sean imágenes. La recodificación de imágenes ofrece una mejor seguridad. Es importante mencionar que la recodificación también afectará las imágenes animadas, convirtiéndolas en estáticas. <br /> Esta funcionalidad solo es posible si el módulo GD está instalado en tu servidor.';
$helptxt['avatar_paranoid'] = 'Seleccionar esta opción habilitará revisiones muy estrictas de seguridad en los avatares. Advertencia! Estas revisiones extensivas pueden fallar aún en imágenes válidas. Se recomienda ampliamente solamente usar esta opción junto con la funcionalidad de recodificado de avatares, para que SMF intente muestrear nuevamente las imágenes que fallen la revisión de seguridad: en caso de pasar la prueba, ellas serán desinfectadas y subidas al servidor. Caso contrario, si la funcionalidad de recodificado de avatares no está habilitada, todos los avatares que fallen la revisión serán rechazados.';
$helptxt['avatar_reencode'] = 'Seleccionar esta opción habilitará la funcionalidad de recodificar los avatares.  La recodificación de imágenes ofrece una mejor seguridad. Es importante mencionar que la recodificación también afectará las imágenes animadas, convirtiéndolas en estáticas. <br /> Esta funcionalidad solo es posible si el módulo GD está instalado en tu servidor.';
$helptxt['karmaMode'] = 'Karma es una función que muestra la popularidad de un usuario Los usuarios, si tienen el permiso correspondiente, pueden
		\'aplaudir\' or \'castigar\' a otros usuarios, que es como su popularidad es calculada. Puedes cambiar el
		número de mensajes necesarios para tener "karma", el tiempo entre castigos o aplausos, y si los administradores
		tienen que esperar este tiempo también.<br /><br />El que grupos de usuarios puedan castigar a otros se contola a través
		de un permiso. Si tienes problemas al tratar de hacer funcionar esta opción para todo mundo, deberías revisar nuevamente tus permisos.';
$helptxt['cal_enabled'] = 'El calendario puede ser usado para mostrar cumpleaños, o momentos importantes en tu foro.<br /><br />
		<strong>Mostrar días como enlaces a \'Publicar evento\'</strong>:<br />Esto le permite a los usuarios publicar eventos para ese día, cuando ellos hagan <i>clic en esa fecha</i><br />
		<strong>Mostrar números de semana</strong>:<br />Mostrar cual semana del año es.<br />
		<strong>Máximo de días adelantados en el índice del foro</strong>:<br />Si le pones 7, todos los eventos de la próxima semana se mostrarán.<br />
		<strong>Mostrar días festivos en el índice del foro</strong>:<br />Muestra los dias festivos del día de hoy en una barra del calendario en el índice del foro.<br />
		<strong>Mostrar cumpleaños en el índice del foro</strong>:<br />Muestra los cumpleaños del día de hoy en una barra del calendario en el índice del foro.<br />
		<strong>Mostrar eventos en el índice del foro</strong>:<br />Muestra los eventos del día de hoy en una barra del calendario en el índice del foro.<br />
		<strong>Foro predeterminado donde se publicarán</strong>:<br />¿Cuál es el foro predeterminado en el que se publicarán los eventos?<br />
		<strong>Año mínimo</strong>:<br />Selecciona el "primer" año en la lista del calendario.<br />
		<strong>Año máximo</strong>:<br />Selecciona el "último" año en la lista del calendario<br />
		<strong>Color para los cumpleaños</strong>:<br />Selecciona el color del texto cuando se muestren cumpleaños<br />
		<strong>Color para los eventos</strong>:<br />Selecciona el color del texto cuando se muestren eventos<br />
		<strong>Color para días festivos</strong>:<br />Selecciona el color del texto cuando se muestren días festivos<br />
		<strong>Permitir que los eventos se extiendan varios días</strong>:<br />Seleccionalo para permitir que los eventos se expandan múltiples días.<br />
		<strong>Número máximo de días que un evento puede expandirse</strong>:<br />Selecciona el máximo número de días que un evento puede expandirse.<br /><br />
		Recuerda que el uso del calendario (publicar eventos, ver eventos, etc.) está controlado por los permisos especificados en la pantalla de permisos.';
$helptxt['localCookies'] = 'SMF usa cookies para guardar información al ingresar, en la computadora del usuario.
	Las cookies pueden guardarse globalmente (<i>tusitio.com</i>) o localmente (<i>tusitio.com/ruta/al/foro</i>).<br />
	Selecciona esta opción si estas teniendo problemas con usarios que están siento sacados de tu foro de mensajes automaticamente.<hr />
	Cookoes almacenadas globalmente son menos seguras cuando se usan en un servidor web compartido (como Tripod).<hr />
	Cookies locales no funcionan afuera del directorio del foro, asi que si tu foro está almacenado en <i>www.tusitio.com/foro</i>, páginas como <i>www.tusitio.com/index.php</i> no pueden accesar la información de la cuenta.
	Especialmente cuando se usa SSI.php, se recomienda el uso de cookies globales.';
$helptxt['enableBBC'] = 'El seleccionar esta opción le permitirá a tus usuarios el poder utilizar Bulletin Board Code (BBC) en el foro, permitiendoles darle formato a sus mensajes con imágenes, estilos de texto, y más.';
$helptxt['time_offset'] = 'No todos los administradores de los foros necesitan que el foro use la misma zona horaria que el servidor en el que está hospedado. Usa esta opción para especificar una diferencia horaria (en horas) en la que el foro debe operar, comparada con la hora del servidor. Son permitidos valores negativos y decimales.';
$helptxt['default_timezone'] = 'La zona horaria del servidor le dice al PHP donde está localizado tu servidor. Asegúrate que esté bien configurado, preferiblemente ajustado al país o ciudad donde está alojado el servidor. Puedes encontrar más información en <a href="http://uk.php.net/manual/en/timezones.php" target="_blank">el sitio PHP</a> (en inglés).';
$helptxt['spamWaitTime'] = 'Aquí puedes seleccionar el tiempo de debe transcurrir entre publicación de mensajes. Esto puede utilizarse para evitar que las personas hagan spam en tu foro, al limitarles qué tan seguido pueden publicar mensajes.';

$helptxt['enablePostHTML'] = 'Esto permitirá el publicar mensajes tags básicos de HTML:
	&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;blockquote&gt;, &lt;img src="" /&gt;, &lt;a href=""&gt;, y &lt;br /&gt;.';

$helptxt['themes'] = 'Aquí puedes escoger si el usuario puede seleccionar temas, qué tema será usado por los invitados,
	entre varias opciones. Haz <i>clic</i> en cualquiera de los temas de la derecha para cambiar su configuración.';
$helptxt['theme_install'] = 'Esto te permite instalar nuevos temas.  Puedes hacerlo desde un directorio previamente creado, subiendo el archivo para el tema, o copiando el tema predeterminado.<br /><br />Toma en cuenta que el archivo o directorio debe tener el archivo de definición <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Esta opción le permitirá a tus usuarios usar Flash dentro de sus mensajes,
	como si fueran imágenes.  Esto es un posible riesgo de seguridad, aunque pocos han podido explorarlo.
	¡USALO
	 BAJO TU PROPIO RIESGO!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permite crear un enlace a las <a href="%s?action=.xml;sa=news">Noticas Recientes</a>
	y datos similares.  Se recomienda que limites el tamaño de los mensajes/noticias porque cuando los datos rss se muestran
	en algunos clientes como Trillian, se trunca la información.';
$helptxt['hotTopicPosts'] = 'Cambia el número de mensajes en un tema necesarios para alcanzar el estado de "caliente" o
	"muy caliente".';
$helptxt['globalCookies'] = 'Permite el uso de cookies independientes de subdominio.  Por ejemplo, si...<br />
	Tu sitio está en http://www.simplemachines.org/,<br />
	Y tu foro está en http://foro.simplemachines.org/,<br />
	Usando esta modificación, te permitirá accesar las cookies del foro en tu sitio.';
$helptxt['secureCookies'] = 'Activando esta opción forzarás las cookies creadas por los usuarios de tu foro a ser marcadas como seguras. Solo activa esta opción si estás usando HTTPS en tu sitio, de lo contrario corromperás el manejo de cookies!';
$helptxt['securityDisable'] = 'Esto <i>desactiva</i> la revisión adicional de contraseña para acceder la sección de administración. ¡NO es recomendable!';
$helptxt['securityDisable_why'] = 'Esta es tu contraseña actual. (la misma que usas para ingresar.)<br /><br />El que tengas que escribirla ayuda a asegurarnos que realmente desees realizar la tarea administrativa que estés realizando,y que eres <b>tú</b> realmente.';
$helptxt['emailmembers'] = 'En este mensaje puedes usar algunas "variables".  éstas son:<br />
	{\\$board_url} - El URL de tu foro.<br />
	{\\$current_time} - La hora actual.<br />
	{\\$member.email} - El correo electrónico del usuario destino.<br />
	{\\$member.link} - El enlace del usuario destino.<br />
	{\\$member.id} - El ID del usuario destino.<br />
	{\\$member.name} - El nombre del usuario destino.  (mayor personalización)<br />
	{\\$latest_member.link} - El enlace al último usuario registrado.<br />
	{\\$latest_member.id} - El ID del último usuario registrado.<br />
	{\\$latest_member.name} - El nombre del último usuario registrado.';
$helptxt['attachmentEncryptFilenames'] = 'Encriptar los nombres de los attachments te permite tener más de un archivo subido como attachment
	con el mismo nombre. Para mayor seguridad usa archivos .php para bajar los archivos adjuntos.  Sin embargo, hace más difícil reconstruir
	la base de datos si algo drástico sucede.';

$helptxt['failed_login_threshold'] = 'Especifica el número de intentos fallidos de ingreso, antes de redireccionarlos a la pantalla de recordatorio de contraseñas.';
$helptxt['oldTopicDays'] = 'Si esta opción está activada se le mostrará al usuario una advertencia cuando intente responder a un tema que no ha tenido nuevas respuestas por el tiempo especificado, en días, en esta opción. Pon 0 para desactivar esta función.';
$helptxt['edit_wait_time'] = 'Número de segundos que deben transcurrir después de la publicación de un mensaje, para que se registre la fecha de la última modificación.';
$helptxt['edit_disable_time'] = 'Número de minutos transcurridos permitidos antes de que un usuario no pueda continuar editando un mensaje que ellos han publicado. Pon 0 para desactivarlo. <br /><br /><i>Note: Esto no tendrá efecto en los usuarios que tengan el permiso para editar los mensajes de otros usuarios.</i>';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['enableSpellChecking'] = 'Activar la revisión de ortografía. DEBES tener la librería pspell instalada en tu servidor y configurado PHP para la utilice. Tu servidor ' . (function_exists('pspell_new') == 1 ? 'SI' : 'NO') . ' parece que tenga esta opción configurada.';
$helptxt['disable_wysiwyg'] = 'Esta opción impide a los usuarios usar el editor WYSIWYG ("What You See Is What You Get", Lo que ves es lo que obtienes) en la página de mensajes.';
$helptxt['lastActive'] = 'Especifica el número de minutos en los que, antes de ese tiempo, un usuario se sigue mostrando activo en el índice del foro. El predeterminado son 15 minutos.';

$helptxt['customoptions'] = 'Esta sección define las opciones que un usuario puede elegir de una lista desplegable. Hay algunos puntos clave que deben tenerse en esta sección:
	<ul>
		<li><b>Opcion Predeterminada:</b> Sea cual sea el cuadro de opción tiene el botón de radio "junto a él, seleccionada será la selección predeterminada para el usuario al entrar en su perfil.</li>
		<li><b>Extracción de Opciones:</b> Para eliminar una opción simplemente vaciar el cuadro de texto para esa opción - a todos los usuarios que han seleccionado su opción desactivada.</li>
		<li><b>Reordenación de Opciones:</b> Puede reordenar las opciones. Sin embargo - una nota importante - debe asegurarse de <b>no</b> cambiar las opciones de reordenamiento como datos de usuario de otro modo se perderá.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Esta opción optimiza automaticamente la base de datos cada X días.  Especifica 1 para realizar una optimización diaria.  Asimismo, puedes especificar un máximo número de usuarios en línea, para que no sobrecargues tu servidor o incomodes a muchos usuarios.';
$helptxt['autoFixDatabase'] = 'Esto arreglará automáticamente tablas en la base de datos con problemas, y continuará como si nada hubiera sucedido.  Esto puede ser útil, ya que la única manera de arreglar este tipo de problemas, es REPARANDO la tabla, y tu foro no estará caído hasta que te des cuenta.  Se te enviará un email cuando esto suceda.';

$helptxt['enableParticipation'] = 'Esto muestra un pequeño icono en los temas en que el usuario ha publicado mensajes.';

$helptxt['db_persist'] = 'Mantiene la conexión activa para incrementar el rendimiento.  Si tu NO estás en un servidor dedicado, esto puede causarte problemas con tu proveedor de hospedaje.';
$helptxt['ssi_db_user'] = 'Parámetro opcional para usar un nombre de usuario y contraseña de la base de datos diferente cuando se use SSI.php.';

$helptxt['queryless_urls'] = 'Esto cambia el formato de los URLs un poco, para que sean más agradables para los servicios de búsqueda (google, por ejemplo).  Estos URLs se verán por ejemplo: index.php/topic,1.0.html.<br /><br />Esta característica \' . (isset($_SERVER[\'SERVER_SOFTWARE\']) && (strpos($_SERVER[\'SERVER_SOFTWARE\'], \'Apache\') !== false || strpos($_SERVER[\'SERVER_SOFTWARE\'], \'lighttpd\') !== false) ? \'\' : \'NO\') . \' funciona en su servidor.';
$helptxt['countChildPosts'] = 'Al marcar esta opción, todos los mensajes y temas de un subforo contarán en los totales del foro.<br /><br />Esto hará las cosas considerablemente más lentas, pero significa que un foro sin mensajes no mostrará \'0\'.';
$helptxt['fixLongWords'] = 'Esta opción divide las palabras que sean mas largas de cierta longitud, en partes, para que no destruyan la apariencia del foro. (en lo posible...)';
$helptxt['allow_ignore_boards'] = 'Marcando esta opción se permitirá a los usuarios seleccionar foros que deseen ignorar.';

$helptxt['who_enabled'] = 'Esta opción te permite activar o desactivar la posibilidad de que los usuarios vean quién está en linea navegando el foro, así como lo que están haciendo.';

$helptxt['recycle_enable'] = '"Recicla" temas y mensajes eliminados al foro especificado.';

$helptxt['enableReportPM'] = 'Esta opción permite a tus usuarios informar a los administradores sobre mensajes privados que hayan recibido. Puede ser útil para controlar cualquier abuso de los mensajes privados.';
$helptxt['max_pm_recipients'] = 'Esta opción te permite especificar el máximo de destinatarios permitidos en un un mensaje privado enviado por un usuario. Esto puede ser usado para ayudar a evitar el abuso por spam de tu sistema de mensajes privados. Toma en cuenta que los usuarios con permiso para enviar boletines de noticias están exentos de esta restricción. Establece el valor en cero para que no haya límite.';
$helptxt['pm_posts_verification'] = 'Esta opción forzará a los usuarios a introducir un código que será mostrado en una imagen de verificación cada vez que ellos envíen un mensaje privado. Solamente los usuarios con un numero de mensajes publicados menor al número especificado tendrán que introducir el código - esto debe ayudar para combatir los scripts automáticos de spam.';
$helptxt['pm_posts_per_hour'] = 'Esta opción limitará el número de mensajes privados que pueden ser enviados por un usuario en una hora. Esto no afecta a los administradores o moderadores.';

$helptxt['default_personal_text'] = 'Inidica el texto predeterminado que los nuevos usuarios tendrán como "Titulo personal." ';

$helptxt['modlog_enabled'] = 'Guardar logs de todas las acciones de los moderadores.';

$helptxt['guest_hideContacts'] = 'Si esta opción está seleccionada las direcciones de email y los detalles de los mensajeros (ICQ, Y!, MSN)
	de todos tus usuarios se le ocultarán a los visitantes de tu foro';

$helptxt['registration_method'] = 'Esta opción determina que método de registro es usada para las personas que deseen unirse a tu foro. Puedes seleccionarlo entre:<br /><br />
	<ul class="normallist">
		<li>
			<b>Registro Desactivado:</b><br />
				Desactiva el proceso de registro, con este método nadie puede registrarse en tu foro.<br />
		</li><li>
			<b>Registro Inmediato</b><br />
				Los nuevos usuarios pueden ingresar y publicar inmediatamente después de registrarse en tu foro.<br />
		</li><li>
			<b>Activación de Usuario</b><br />
				Cuando esta opción está activada cualquier usuario que se registre en tu foro tendrá un enlace de activación, que se le enviará por email, que tendrá que visitar antes de que pueda convertirse en usuario válido.<br />
		</li><li>
			<b>Aprobación de Usuarios</b><br />
				Esta opción hará que todos los nuevos usuarios que se registren en tu foro necesiten ser aprobados por un administrador para que se puedan volver usuarios válidos.
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Autenticar con OpenID</b><br /> OpenID es una plataforma que permite usar un usuario en varios sitios de internet, para simplificar la experiencia online. Para usar OpenID, primero necesitas crear una cuenta OpenID. Una lista de los proveedores del servicio puede encontrarse en <a href="http://openid.net/" target="_blank">El sitio oficial de OpenID</a><br /><br /> Cuando hayas conseguido un cuenta en OpenID, simplemente escribe tu identificador URL. Luego serás llevado a tu proveedor para verificar tu identidad antes de ser devuelto a nuestro sitio.<br /><br /> En la primera visita, deberás confirmar varios detalles antes de ser reconocido. Una vez hecho esto, podrás cambiar las opciones OpenID en tu perfil.<br /><br /> Para más información visita <a href="http://openid.net/" target="_blank">El sitio oficial de OpenID</a>.';

$helptxt['send_validation_onChange'] = 'Cuando esta opción está seleccionada todos los usuarios que cambien su dirección de email en su perfil tendrán que reactivar sus cuenta desde el email enviado a la nueva dirección';
$helptxt['send_welcomeEmail'] = 'Cuando esta opción está seleccionada a todos los nuevos usuarios se les enviará un email de bienvenida a tu foro';
$helptxt['password_strength'] = 'Esta opción determina el grado de robustez requerida para las contraseñas seleccionadas por los usuarios de tu foro. Cuanto más "robusta" sea la contraseña, más difícil es comprometer las cuentas de los usuarios.
	Las posibles opciones son:
	<ul>
		<li><b>Baja:</b> La contraseña debe ser contener al menos cuatro caracteres.</li>
		<li><b>Media:</b> La contraseña debe contener al menos ocho caracteres, y no puede ser parte del nombre o dirección email del usuario.</li>
		<li><b>Alta:</b> Como la Media, excepto que la contraseña debe contener también una mezcla de mayúsculas, minúsculas y al menos un número.</li>
	</ul>';

$helptxt['coppaAge'] = 'El valor especificado en este cuadro determinará la edad mínima que los nuevos usuarios deben tener para que se les conceda acceso inmediato a los foros.
	Durante el proceso de registro se les pedirá que confirmen si son mayores a esa edad, y de no serlo, puede o negársele su solicitud, o suspendarla esperando por la aprobación de los padres - dependiendo del tipo de restricción escogida.
	Si se pone 0 en este valor, entonces todas las restricciones de edad se ignorarán.';
$helptxt['coppaType'] = 'Si las restricciones de edad están activas, entonces este valor determinará qué pasará cuando un usuario más joven de la edad mínima intenta registrarse en tu foro. Hay dos posibilidades:
	<ul>
		<li>
			<b>Rechazar su solicitud de registro:</b><br />
				A cualquier nuevo usuario que no cumpla con la edad mínima se le rechazaráa su solicitud de registro inmediatamente.<br />
		</li><li>
			<b>Requerir aprobación del Padre o Tutor</b><br />
				A cualquier nuevo usuario que no cumpla con la edad mínima su cuentra se marcará como esperando autorización, y se le mostrará una forma en la que sus padres o tutores deben dar el permiso para que se convierta en un usuario del foro.
				A ellos también se les mostrará una forma con los datos de contacto que se especificaron en la pantalla de configuración, para que puedan enviar la forma al administrador por correo o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Los cuadros de contacto son requeridos para que las formas que otorgan el permiso a los usuarios por debajo de la edad mínima pueda ser enviada al administador del foro. Estos detalles serán mostrados a todos los usuarios debajo de la edad mínima, y son necesarios para la aprobación del padre o tutor. Por lo menos se debe proveer una dirección postal o un número de fax.';

$helptxt['allow_hideOnline'] = 'Cuando esta opción está seleccionada todos los usuarios podrán ocultarle a los demás usuarios si están conectados (excepto a los administradores). Si está desactivado, solamente los usuarios que pueden moderar el foro pueden ocultar su presencia. Es importante mencionar que deshabilitando esta opción no cambia el estado de ningún usuario existente - simplemente les impide ocultarse en el futuro.';
$helptxt['make_email_viewable'] = 'Activando esta opción se mostrará la dirección de correo de los miembros de la comunidad a los usuarios registrados y a los invitados. Si habilitas esta opción, los usuarios serán vulnerables al SPAM debido a los recolectores de correo que visiten tu foro. Este parámetro no prevalecerá si el usuario ha indicado esconder su dirección. Activar esta opción <b>no</b> es recomendable.';
$helptxt['meta_keywords'] = 'Estas palabras clave son enviadas en cada página para indicar a los motores de búsqueda (y demás) el contenido clave de tu sitio. Una coma deberá separar cada palabra de la lista, y no debes utilizar HTML. Si esta opción permanece en blanco, se enviará el conjunto predeterminado. Como ejemplo, el conjunto predeterminado es: <br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_support'] = 'Este panel te muestra algunos de problemas y preguntas más comunes de la configuración de tu servidor. No te preocupes, esta información no se registra en ningún momento.<br /><br />Si permanece como "Obteniendo información de soporte...", tu computadora muy probablemente no se puede conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Aquí puedes ver algunos de los más populares mods, así como algunos paquetes o mods aleatorios, con instalaciones rápidas y sencillas.<br /><br />Si esta sección no se puede mostrar, probablemente tu computadora no se puede conectar a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Esta área muestra algunos de los últimos y más populares temas de <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Puede que no se muestre correctamente si tu computadora no puede encontrar <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Por tu seguridad, la respuesta a tu pregunta (así como tu contraseña) está encriptada de una manera en la que SMF puede decirte solamente si está correcta, así, jamás podrá decirte (¡o a alguien más, que es lo importante!) cual es tu respuesta o tu contraseña.';
$helptxt['moderator_why_missing'] = 'Debido a que la moderación se realiza en cada foro, debes hacer a un usuario moderador desde la <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">interface de manejo de foros</a>.';

$helptxt['permissions'] = 'A través de los permisos les permites o impides a los grupos hacer cosas específicas.<br /><br />Puedes modificar varios foros al mismo tiempo usando las casillas, o busca en los permisos por un grupo específico al hacer clic en \'Modificar.\'';
$helptxt['permissions_board'] = 'Si un foro se especifica como \'Global,\' significa que el foro no tendrá permisos especiales.  \'Local\' significa que tendrá sus propios permisos - separados de los globales.  Esto te permite tener un foro que tiene más (o menos) permisos que otro, sin que sea necesario que los especifiques para cada uno de los foros.';
$helptxt['permissions_quickgroups'] = 'Estos te permiten usar la configuración "predeterminada" de permisos - estándar significa \'nada especial\', restrictivo significa \'como visitante\', moderador significa \'que un moderador tiene\', y por último \'mantenimiento\' significa permisos muy cercanos a los de un administrador.';
$helptxt['permissions_deny'] = 'Denegar permisos puede ser útil cuando quieres quitar permisos de algunos usuarios. Puedes añadir un grupo con permiso \'denegado\' a los usuarios que deseas denegar un permiso.<br /><br />Utilízalos con cuidado, un permiso denegado prevalece, no importa a que otros grupos pertenezca el usuario.';
$helptxt['permissions_postgroups'] = 'Al activar permisos para grupos basados en el número de mensajes podrás asignar permisos a usuarios que han publicado una cierta cantidad de mensajes. Los permisos de grupos basados en el número de mensajes se <em>añden</em> a los permisos de los grupos convencionales.';
$helptxt['membergroup_guests'] = 'El grupo de invitados son todos los usuarios que no están conectados.';
$helptxt['membergroup_regular_members'] = 'Los usuarios regulares son todos aquellos que están conectados, pero que no tienen asignado un grupo primario.';
$helptxt['membergroup_administrator'] = 'El administrador puede, por definición, ver y realizar cualquier cosa en el foro. No se establecen permisos para el administrador.';
$helptxt['membergroup_moderator'] = 'El grupo Moderador es un grupo especial. Los permisos y opciones asignadas a este grupo son aplicables a los moderadores pero solamente <em>en los foros que moderan</em>. Fuera de ellos son como cualquier otro usuario.';
$helptxt['membergroups'] = 'En SMF hay dos tipos de grupos a los que tus usuarios pueden pertenecer. Estos son:
	<ul>
		<li><b>Grupos Regulares:</b> Un grupo regular es un grupo en el que los usuarios no se les ingresa automáticamente. Para ingresar a un usuario al grupo simplemente ve a su perfil y haz <i>clic</i> en "Configuración de la cuenta". Ahí puedes asignarle todos los grupos regulares a los que deseas que pertenezca.</li>
		<li><b>Grupos de Mensajes:</b> A diferencia de los grupos regulares, este tipo de grupos no pueden ser asignados. En vez de eso, los usuarios son asignados automáticamente a un grupo, cuando alcanzan el mínimo de mensajes publicados necesarios para pertenecer a dicho grupo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Puedes editar esos eventos haciendo clic en el asterisco rojo (*) al lado de sus nombres.';

$helptxt['maintenance_backup'] = 'Esta área te permite guardar una copia de todos los mensajes, configuraciones, usuarios, y otra información de tu foro en un archivo muy grande.<br /><br />Es recomendado hacerlo a menudo, probablemente semanalmete, por seguridad.';
$helptxt['maintenance_rot'] = 'Esto te permite <b>completa</b> e <b>irrevocablemente</b> borrar temas viejos. Es recomendable que intentes hacer un respaldo primero, en caso que accidentalmente borres algo que no deseabas.<br /><br />Usa esta opción con cuidado.';
$helptxt['maintenance_members'] = 'Esto permite eliminar a un usuario del foro <b>completamente</b> e <b>irrevocablemente</b>. Es <b>extremadamente</b> recomendable que realices una copia de seguridad, en caso de que elimines algo de forma accidental. Utiliza esta opción con cuidado.';

$helptxt['avatar_server_stored'] = 'Esta opción permite a los miembros elegir imágenes almacenadas en tu servidor. Generalmente se encuentran en la carpeta Avatars del foro SMF. <br />Un consejo: puedes crear directorios en esa carpeta y hacer &quot;categorías&quot; de imágenes.';
$helptxt['avatar_external'] = 'Si esta opción está habilitada, los usuarios pueden escribir la dirección de internet de su imagen para mostrar. La desventaja es que pueden usar imágenes muy grandes o algunas que no quieres ver en tu foro.';
$helptxt['avatar_download_external'] = 'Con esta opción activada, se descargará el avatar del URL especificado por el usuario. Si el proceso fue realizado con éxito, el avatar se tratará como un avatar subido por el usuario.';
$helptxt['avatar_upload'] = 'Esta opción es similar a "Permitir a los miembros seleccionar una imagen externa", exceptuando que tienes mejor control sobre las imágenes, con la opción de redimensionarlas y tus usuarios no deben tener un lugar aparte para almacenarlas. <br /><br /> La desventaja es que puede tomar mucho espacio en tu servidor.';
$helptxt['avatar_download_png'] = 'Los PNG son más grandes, pero ofrecen una mejor calidad de compresión. De no estar seleccionado, se usaráa en su lugar JPEG - que generalmente es de menor tamaño, pero con menor calidad.';

$helptxt['disableHostnameLookup'] = 'Esto desactiva la búsqueda de nombres de servidores, que en algunos servidores es muy lento.  Es importante mencionar que ésto hará la restricción de accesos menos eficaz.';

$helptxt['search_weight_frequency'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor cuenta la cantidad de mensajes que coincidieron y los divide por el número total de mensajes dentro del tema.';
$helptxt['search_weight_age'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor califica la antigüedad del último mensaje dentro de un tema. Entre más reciente es, mayor su puntuación.';
$helptxt['search_weight_length'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor está basado en el tamaño del tema. Entre más mensajes tenga un tema, mayor su puntuación.';
$helptxt['search_weight_subject'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el asunto del tema.';
$helptxt['search_weight_first_message'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del útimo mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el primer mensaje del tema.';
$helptxt['search_weight_sticky'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor revisa si un tema ha sido fijado, y de ser así incrementa la puntuación.';
$helptxt['search'] = 'Aquí puedes ajustar la configuración de la función de búsqueda. Es importante mencionar que aquí no puedes especificar quien tiene acceso a la función de búsqueda. Usa la pantalla de \'manejar permisos\' en el panel administrativo para eso.';
$helptxt['search_why_use_index'] = 'Un índice de búsqueda puede mejorar considerablemente el desempeño de las búsquedas en tu foro. Especialmente cuando el número de mensajes en tu foro crece considerablemente, el buscar sin un índice puede tomar mucho tiempo e incrementar la carga en tu servidor. Si tu foro tiene más de 50,000 mensajes, debes considerar el crear el índice de búsqueda para asegurar un desempeño óptimo de tu foro.<br /><br />Es importante mencionar que un índice de búsqueda puede tomar algún espacio extra de la base de datos. Un índice fulltext es un tipo de índice dentro de MySQL. Es relativamente compacto (aproximadamente el mismo tamaño de la tabla de mensajes), pero muchas palabras no son indexadas y puede, en algunas búsquedas, ser muy lento. El índice personalizado usualmente necesita mayor espacio (dependiendo de tu configuración puede ser hasta 3 veces mayor a tu tabla de mensajes) pero su desempeño es mejor que fulltext y mucho mas estable.';

$helptxt['see_admin_ip'] = 'A los administradores y moderadores se les muestran las IPs para facilitar la moderación y para hacer más fácil el rastreo de personas indeseables. Recuerda que las direcciones IP no siempre son identificatorias, y que las IPs cambian periódicamente.<br /><br />También se les permite a los usuarios ver su propia IP.';
$helptxt['see_member_ip'] = 'Tu dirección IP es mostrada solamente a tí y a los moderadores. Recuerda que esta información no es identificatoria y muchas IPs cambian periódicamente.<br /><br />No puedes ver las IPs de otros usuarios y ellos no pueden ver la tuya.';
$helptxt['whytwoip'] = 'SMF utiliza varios métodos para detectar la dirección IP del usuario. Casi siempre estos dos métodos dan como resultado la misma dirección, pero pueden detectarse más de una. En este caso, SMF registra todas las direcciones para revisar las suspensiones de cuentas. Puedes clickear en cualquier dirección para seguirla y suspender el acceso si es necesario.';

$helptxt['ban_cannot_post'] = 'La restricción \'no puede publicar\' establece el modo sólo-lectura para el usuario restringido. El usuario no puede crear nuevos temas, ni responder a temas ya existentes, ni enviar mensajes privados ni votar en encuestas. Los usuarios restringidos, sin embargo, pueden leer mensajes privados y temas.<br /><br />Se muestra un mensaje de advertencia a usuarios que tiene restringido el acceso de esta manera.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Configuración de Mensajes</b><br />
			Modifica la configuración relacionada con la publicación de mensajes y la manera en la que se muestran. Puedes también activar la comprobación ortográfica aquí.
		</li><li>
			<b>Códigos BBC</b><br />
			Activa los códigos que se muestran en los mensajes del foro. También se ajusta qué códigos se permiten y cuáles no.
		</li><li>
			<b>Palabras Censuradas</b>
			Para controlar el lenguaje de tu foro, puedes censurar ciertas palabras. Esta función te permite convertir palabras prohibidas en versiones adecuadas.
		</li><li>
			<b>Configuración de Temas</b>
			Modifica la configuración relacionada con temas. El número de temas por página, dónde están activados o no los mensajes pegados, el número de mensajes necesarios para ser un tema candente, etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Seleccionando un grupo restrictivo, cuando un invitado sea identificado como un spider de un motor de búsqueda y se le impedirá el acceso. Puedes denegar el acceso además de los permisos normales de los invitados. Puede utilizar esta opción para que los motores de búsqueda tengan menos acceso a tu comunidad. Por ejemplo, puede crear un nuevo grupo llamado "Spiders&quot;, y seleccionarlo aquí. Luego podrías denegar permisos a ese grupo e impedir que registren los perfiles de los usuarios <br />Advertencia: la detección de Spiders no es perfecta y puede ser simulada por los usuarios, por lo que esta característica no garantiza que se restrinja el acceso a los motores de búsqueda que has indicado.';
$helptxt['show_spider_online'] = 'Esta opción te permite elegír si los spiders deberán ser listados tanto en la lista en el indice del foro como en la página de usuarios conectados. Las opciones son: <ul class="normallist"> <li> <b>Nunca</b><br /> Los spiders aparecerán como visitantes para todos los usuarios. </li><li> <b>Mostrar cantidad de spiders</b><br /> Se mostrará en el índice del foro la cantidad de spiders conectados. </li><li> <b>Mostrar nombres de Spiders</b><br /> Cada nombre será mostrado, los usuarios podrán ver cuantos spiders están actualmente visitando el foro - esto afectará tanto al índice del foro como a la página de miembros conectados. </li><li> <b>Mostrar nombres de spiders - Administradores solamente</b><br /> Igual que el caso anterior, pero solo para los administradores - para los demas usuarios aparecerán como invitados. </li> </ul>';

$helptxt['birthday_email'] = 'Elige el índice del email de cumpleaños a usar. Una previsualización se mostrará en el asunto y el cuerpo del email.<br /><strong>Nota:</strong> Elegir esta opción no habilitará automáticamente los emails. Para hacerlo usa la página de <a href="%1$s?action=admin;area=maintain;sa=tasks;sesc=%2$s" target="_blank" class="new_win">Tareas Programadas</a> y habilita la tarea de email de cumpleaños.';
$helptxt['pm_bcc'] = 'Cuando envíes un Mensaje Personal podrás añadir direcciones a BCC (Blind Carbon Copy) "Copias Oculta". Los destinatarios añadidos a BCC no serán mostrados por los demás receptores del Mensaje.';

$helptxt['move_topics_maintenance'] = 'Esto le permitirá mover todos los mensajes de un Foro a otro Foro.';
$helptxt['maintain_reattribute_posts'] = 'Puedes usar esta función para asignar los "mensajes de Invitado" a un usuario registrado. Esto es útil si, por ejemplo, un usuario suprimiera su cuenta y luego cambiara de opinión y deseara recuperar sus viejos mensajes pero en su nueva cuenta de usuario.';
$helptxt['chmod_flags'] = 'Usted puede ajustar manualmente los permisos a los archivos seleccionados. Para hacerlo introduzca el valor chmod como un valor numérica octal. Nota: Estos ajustes no tendrán ningún efecto en servidores basados sistemas operativos Microsoft Windows.\';';

$helptxt['postmod'] = 'Esta sección permite a miembros del grupo de moderación (con suficientes permisos) el aprovar cualquier tema o mensaje antes de que sean mostrados a el publico.';

$helptxt['field_show_enclosed'] = 'Encierra el campo del usuario dentro de algún código html o texto. Esto te permite agregar, por ejemplo, más iconos de mensajería instantánea, imágenes, etc. Por ejemplo: <br /><br /> &lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br /> ten en cuenta que puedes usar las siguientes variables:<br /> <ul class="normallist"> <li>{INPUT} - el campo especificado por el usuario.</li> <li>{SCRIPTURL} - la dirección del foro.</li> <li>{IMAGES_URL} - dirección a la carpeta de imágenes en el theme que estás usando actualmente.</li> <li>{DEFAULT_IMAGES_URL} - dirección a la carpeta de imágenes de el theme predeterminado.</li> </ul> ';

$helptxt['custom_mask'] = 'La máscara de entrada es importante para la seguridad de su foro. Validar la entrada de un usuario puede ayudar a asegurar que los datos no se utiliza de una manera que no esperamos. Hemos proporcionado algunas expresiones regulares simples como sugerencias.<br /><br />
	<div class="smalltext" style="margin: 0 2em">
		"[A-Za-z]+" - Empareje todos los carácteres de alfabeto de caso superiores e inferiores.<br />
		"[0-9]+" - Empareje todos los carácteres numéricos.<br />
		"[A-Za-z0-9]{7}" - Empareje todo el alfabeto de caso superior e inferior y carácteres numéricos siete veces.<br />
		"[^0-9]?" - Prohibir cualquier número del que se iguala.<br />
		"^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$" - Sólo permiten 3 o 6 caracteres Hexa.<br />
	</div><br /><br />
	Además, metacaracteres especiales ?+*^$ y {xx} se puede definir.
	<div class="smalltext" style="margin: 0 2em">
		? - Ninguna o un parte de la expresión anterior.<br />
		+ - Uno o más de la expresión anterior.<br />
		* - Ninguno o más de expresión anterior.<br />
		{xx} - Un número exacto de la expresión anterior.<br />
		{xx,} - Un número exacto o más de la expresión anterior.<br />
		{,xx} - Un número exacto o menos de la expresión anterior.<br />
		{xx,yy} - Una coincidencia exacta entre los dos números de la expresión anterior.<br />
		^ - Inicio de la cadena.<br />
		$ - Fin de la cadena.<br />
		\\ - Escapa el siguiente carácter.<br />
	</div><br /><br />
	Se pueden encontrar más información y técnicas avanzadas en Internet.';

?>