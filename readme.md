# Laravel LDAP Auth

Simple Laravel auth driver for LDAP.

Allows to connect into a LDAPv3.0 server to check user's credentials.

## Install

Add service provider to file `config/app.php`

    LSV\LDAP\ServiceProvider::class,

Change your `config/auth.php` to work with 'ldap' driver:

    'providers' => [

        'users' => [
            'driver' => 'ldap',
            'model' => App\User::class,
            'host' => '0.0.0.0',
            'domain' => 'yourdomain.com.br',
        ],
    ],
