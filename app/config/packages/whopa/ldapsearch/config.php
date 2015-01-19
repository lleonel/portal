<?php

return [
    /**
     * Servidor LDAP
     */
    'server' => '100.10.50.11',

    /**
     * Puerto para conectar al servidor LDAP
     */
    'port' => '389',

    /**
     * Dominio
     */
    'domain' => 'sds_domain_1.local',

    /**
     * Base DN
     */
    'basedn' => 'DC=sds_domain_1,DC=local',

    /**
     * Versión del Protocolo
     */
    'protocol_version' => 3,

    /**
     * Nombre de usuario del administrador LDAP
     */
    'admin_user' => 'ldapauth',

    /**
     * Contraseña del administrador de LDAP
     */
    'admin_pass' => 'Yk6H8V8ZfW',

    'anonimo' => false,
 
    /**
     * Atributos que se desea obtener de las búsquedas
     */
    'attributes' => [
        'cn',
        'displayname',
        'mail',
        'sAMAccountName',
        'givenName',
        'sn'
    ],
];