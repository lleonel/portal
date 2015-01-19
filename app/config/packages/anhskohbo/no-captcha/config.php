<?php

return array(

	'secret'  => getenv('NOCAPTCHA_SECRET') ?: '6LdU2P4SAAAAACEvWHLOA1IbOaNKdAJ1iv_N3eeD',
	'sitekey' => getenv('NOCAPTCHA_SITEKEY') ?: '6LdU2P4SAAAAAKPMRUBnubiCcDtACYtf1w0uYPOb',

	'lang'    => app()->getLocale(),

);
