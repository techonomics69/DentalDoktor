<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Carta de aceptación';
$txt['agreement_agree'] = 'Acepto los terminos y condiciones';
$txt['agreement_agree_coppa_above'] = 'Acepto los terminos y condiciones y tengo al menos %1$d de edad.';
$txt['agreement_agree_coppa_below'] = 'Acepto los terminos y condiciones y tengo menos de %1$d de edad.';

// Registration form.
$txt['registration_form'] = 'Formulario de registro';
$txt['need_username'] = 'Debes escribir un nombre de usuario.';
$txt['no_password'] = 'No proporcionaste tu contraseña.';
$txt['incorrect_password'] = 'Contraseña incorrecta';
$txt['choose_username'] = 'Escoge un nombre de usuario';
$txt['maintain_mode'] = 'Modo de Mantenimiento';
$txt['registration_successful'] = 'Registro realizado con éxito';
$txt['now_a_member'] = '¡Felicidades! Ahora eres miembro del foro.';
// Use numeric entities in the below string.
$txt['your_password'] = 'y tu contraseña es';
$txt['valid_email_needed'] = 'Por favor introduce una dirección de correo válida, %1$s';
$txt['required_info'] = 'Información Requerida';
$txt['identification_by_smf'] = 'Usado sólo para identificación por SMF. Puedes usar caracteres especiales después de haber ingresado, cambiando tu nombre a mostrar en tu perfil.';
$txt['additional_information'] = 'Información adicional';
$txt['warning'] = '¡Advertencia!';
$txt['only_members_can_access'] = 'Solamente usuarios registrados tienen acceso a esta sección.';
$txt['login_below'] = 'Por favor ingresa abajo o haz clic';
$txt['register_an_account'] = 'registrar una cuenta';
$txt['login_with_forum'] = 'para registrar una cuenta en %1$s';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Lo puedes cambiar después de ingresar en la página de perfil, o visitando esta página después de que ingreses:';
$txt['your_username_is'] = 'Tu nombre de usuario es: ';

$txt['login_hash_error'] = 'El esquema para la seguridad de las contraseñas ha sido actualizado recientemente.  Por favor, introduce tu contraseña nuevamente.';

$txt['ban_register_prohibited'] = 'Lo siento, no estás autorizado para registrarte en este foro';
$txt['under_age_registration_prohibited'] = 'Lo sentimos, pero no se permite el registro en este foro a personas menores de %1$d años de edad';

$txt['activate_account'] = 'Activación de la cuenta';
$txt['activate_success'] = 'Tu cuenta ha sido activada satisfactoriamente. Ahora puedes proceder a ingresar al foro.';
$txt['activate_not_completed1'] = 'Tu cuenta de email necesita ser validada antes de que puedas ingresar.';
$txt['activate_not_completed2'] = '¿Necesitas otro email de activación?';
$txt['activate_after_registration'] = 'Gracias por registrarte. Recibirás en breve un email con un enlace para activar tu cuenta.  Si despues de algunos minutos no recibes un email, revisa tu carpeta de correo no deseado (spam).';
$txt['invalid_userid'] = 'El usuario no existe';
$txt['invalid_activation_code'] = 'Código de activación inválido';
$txt['invalid_activation_username'] = 'Nombre de usuario o email';
$txt['invalid_activation_new'] = 'Si te registraste con una dirección de email incorrecta, escribe aquí una nueva junto con tu contraseña.';
$txt['invalid_activation_new_email'] = 'Nueva dirección de email';
$txt['invalid_activation_password'] = 'Contraseña anterior';
$txt['invalid_activation_resend'] = 'Reenviar código de activación';
$txt['invalid_activation_known'] = 'Si ya conoces tu código de activación, escríbelo aquí.';
$txt['invalid_activation_retry'] = 'Código de activación';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_no_concent'] = 'El administrador no ha recibido aún el consentimiento de tus padres/tutor para tu cuenta.';
$txt['coppa_need_more_details'] = '¿Necesitas más detalles?';

$txt['awaiting_delete_account'] = '¡Tu cuenta ha sido marcada para borrarse!<br />Si deseas restaurar tu cuenta, por favor selecciona la casilla "Reactivar mi cuenta", e ingresa nuevamente.';
$txt['undelete_account'] = 'Reactivar mi cuenta';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalles de la nueva contraseña';
$txt['change_password_login'] = 'Tus datos para ingresar en';
$txt['change_password_new'] = 'han sido cambiados y tu contraseña ha sido reinicializada. Debajo están tus nuevos datos para ingresar.';

$txt['in_maintain_mode'] = 'Este foro está en modo de mantenimiento.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Por favor, lee/acepta los términos para poder enviar el formulario.';
$txt['register_passwords_differ_js'] = 'No coinciden las contraseñas.';

$txt['approval_after_registration'] = 'Gracias por registrarte. El administrador debe aprobar tu registro antes de que puedas empezar a usar tu cuenta, recibirás un email a la brevedad posible notificándote de la decisión del administrador.';

$txt['admin_settings_desc'] = 'Aquí puedes cambiar varios parámetros relacionados con el registro de nuevos usuarios.';

$txt['setting_enableOpenID'] = 'Permitir a los usuarios registrarse usando OpenID';

$txt['setting_registration_method'] = 'Metodo de registro empleado para miembros nuevos.';
$txt['setting_registration_disabled'] = 'Registro deshabilitado';
$txt['setting_registration_standard'] = 'Registro inmediato';
$txt['setting_registration_activate'] = 'Correo de activación';
$txt['setting_registration_approval'] = 'Aprobación de Miembro';
$txt['setting_notify_new_registration'] = 'Notificar a los administradores cuando un nuevo miembro se suscriba';
$txt['setting_send_welcomeEmail'] = 'Enviar email de bienvenida a los nuevos miembros';

$txt['setting_coppaAge'] = 'Limite de edad al cual aplicar restriciones de registro';
$txt['setting_coppaAge_desc'] = 'Poner en 0 para deshabilitar)';
$txt['setting_coppaType'] = 'Acción a seguir cuando se registre un miembro por debajo de la edad mínima';
$txt['setting_coppaType_reject'] = 'Rechazar registro';
$txt['setting_coppaType_approval'] = 'Requerír aprobación de los padres/tutores';
$txt['setting_coppaPost'] = 'Dirección postal a donde se enviarán los formularios de aprobación';
$txt['setting_coppaPost_desc'] = 'Solo se aplica si la restricción de edad se cumple';
$txt['setting_coppaFax'] = 'Numero de fax a donde se enviarán los formularios de aprobación';
$txt['setting_coppaPhone'] = 'Número de contacto de los padres para consultar sobre la restricción de edad';

$txt['admin_register'] = 'Registro de un nuevo usuario';
$txt['admin_register_desc'] = 'Desde aquí puedes registrar en el foro nuevos usuarios y, de así desearlo, enviarles sus detalles por email.';
$txt['admin_register_username'] = 'Nuevo Nombre de usuario';
$txt['admin_register_email'] = 'Nueva Dirección de email';
$txt['admin_register_password'] = 'Contraseña';
$txt['admin_register_username_desc'] = 'Nombre de usuario para el nuevo usuario';
$txt['admin_register_email_desc'] = 'Dirección email del usuario<br />(requerida si seleccionaste la opción de enviarles por email sus detalles)';
$txt['admin_register_password_desc'] = 'Nueva contraseña para el usuario';
$txt['admin_register_email_detail'] = 'Enviar por email la nueva contraseña al usuario';
$txt['admin_register_email_detail_desc'] = 'Es necesaria la dirección email, aún si no está seleccionado';
$txt['admin_register_email_activate'] = 'Pedirle al usuario que active la cuenta';
$txt['admin_register_group'] = 'Grupo primario';
$txt['admin_register_group_desc'] = 'Grupo de usuario primario al que el nuevo usuario pertenecerá';
$txt['admin_register_group_none'] = '(sin grupo primario)';
$txt['admin_register_done'] = '¡El usuario %1$s se ha registrado con éxito!';

$txt['coppa_title'] = 'Foro con restricción de edad';
$txt['coppa_after_registration'] = 'Gracias por registrarte con ' . $context['forum_name_html_safe'] . '.<br /><br />Debido a que estás por debajo de la edad de {MINIMUM_AGE}, hay un requerimiento legal
	para obtener el permiso de tus padres/tutor antes de que puedas empezar a usar tu cuenta. Para continuar con la activación de la cuenta por favor imprime el formulario que a continuación se muestra:';
$txt['coppa_form_link_popup'] = 'Cargar la forma en una ventana nueva';
$txt['coppa_form_link_download'] = 'Descargar forma';
$txt['coppa_send_to_one_option'] = 'Entonces solicítale a tus padres/tutor que envíen la forma propiamente llenada por:';
$txt['coppa_send_to_two_options'] = 'Entonces solicítale a tus padres/tutor que envíen la forma propiamente llenada por cualquiera de estas dos opciones:';
$txt['coppa_send_by_post'] = 'Correo, a la siguiente dirección:';
$txt['coppa_send_by_fax'] = 'Fax, al siguiente número:';
$txt['coppa_send_by_phone'] = 'Alternativamente, haz que le hablen al administrador al número {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Forma de permiso para registrarse en ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Dirección';
$txt['coppa_form_date'] = 'Fecha';
$txt['coppa_form_body'] = 'Yo {PARENT_NAME},<br /><br />doy el permiso para que {CHILD_NAME} (child name) se convierta en un usuario registrado del foro: ' . $context['forum_name_html_safe'] . ', con el nombre de usuario: {USER_NAME}.<br /><br />Entiendo que cierta información personal proporcionada por {USER_NAME} puede que sea mostrada a otros usuarios del foro.<br /><br />Firmado por:<br />{PARENT_NAME} (Padre/Tutor).';

$txt['visual_verification_sound_again'] = 'Volver a escuchar';
$txt['visual_verification_sound_close'] = 'Cerrar ventana';
$txt['visual_verification_sound_direct'] = '¿Tienes problemas para oírlo?  Intenta un enlace directo.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Nombre de usuario disponible';
$txt['registration_username_unavailable'] = 'Nombre de usuario no disponible';
$txt['registration_username_check'] = 'Comprobar si el nombre de usuario está disponible';
$txt['registration_password_short'] = 'La contraseña es muy corta';
$txt['registration_password_reserved'] = 'La contraseña contiene tu nombre de usuario/email';
$txt['registration_password_numbercase'] = 'La contraseña debe contener minúsculas y mayúsculas, y números';
$txt['registration_password_no_match'] = 'Las contraseñas no concuerdan';
$txt['registration_password_valid'] = 'La contraseña es válida';

$txt['registration_errors_occurred'] = 'Los siguientes errores fueron detectados en tu registro. Por favor corrígelos y luego continúa:';

$txt['authenticate_label'] = 'Método para autentificarse';
$txt['authenticate_password'] = 'Contraseña';
$txt['authenticate_openid'] = '';
$txt['authenticate_openid_url'] = 'URL de autenticación para OpenID';

?>