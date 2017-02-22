<?php

namespace LSV\LDAP;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * @author   Lucas Vasconcelos <lucas@vscn.co>
 * @package  LSV\LDAP
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Registra novo user provider para a aplicação.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['auth']->provider('ldap', function($app, array $config) {
            return new UserProvider(
                $app['hash'],
                $config['model'],
                $config['host'],
                $config['domain']
            );
        });
    }
}