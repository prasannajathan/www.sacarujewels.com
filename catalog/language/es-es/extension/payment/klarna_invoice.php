<?php
// Text
$_['text_title']				= 'Factura Klarna - Pagar dentro de 14 días';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'La Factura Klarna requiere de Información Adicional antes de procesar el Pedido.';
$_['text_male']					= 'Masculino';
$_['text_female']				= 'Femenino';
$_['text_year']					= 'Año';
$_['text_month']				= 'Mes';
$_['text_day']					= 'Día';
$_['text_comment']				= 'Factura ID Klarna\'s : %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Género';
$_['entry_pno']					= 'Número Personal';
$_['entry_dob']					= 'Fecha de Nacimiento';
$_['entry_phone_no']			= 'Número de Teléfono';
$_['entry_street']				= 'Calle';
$_['entry_house_no']			= 'Casa N°.';
$_['entry_house_ext']			= 'Casa Ext.';
$_['entry_company']				= 'Número de Compañía de Registración';

// Help
$_['help_pno']					= 'Ingresar el Número del Código de Seguridad Social.';
$_['help_phone_no']				= 'Ingresar el Número de Teléfono.';
$_['help_street']				= 'Tener en cuenta que la entrega solo se puede realizar a la dirección registrada al pagar con Klarna.';
$_['help_house_no']				= 'Ingresar el Número de Casa.';
$_['help_house_ext']			= 'Enviar Extensión de la Casa. Ej. A, B, C, Rojo, Azul ect.';
$_['help_company']				= 'Ingrear el Número de Registración de la Empresa';

// Error
$_['error_deu_terms']			= 'Se debe Aceptar la Política de Privacidad de Klarna (Datenschutz)';
$_['error_address_match']		= 'Las direcciones de facturación y envío deben coincidir para utilizar los pagos de Klarna';
$_['error_network']				= 'Se encontraron errores al Conectar con Klarna. Intentar más tarde.';