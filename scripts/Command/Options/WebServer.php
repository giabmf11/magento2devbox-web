<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoDevBox\Command\Options;

/**
 * Container for web server options
 */
class WebServer extends AbstractOptions
{
    const HOST = 'webserver-host';
    const PORT = 'webserver-port';
    const HOME_PORT = 'webserver-home-port';

    /**
     * {@inheritdoc}
     */
    protected static function getOptions()
    {
        return [
            static::HOST => [
                'default' => 'web',
                'description' => 'Web server host.',
                'question' => 'Please enter web server host %default%'
            ],
            static::PORT => [
                'default' => '80',
                'description' => 'Web server port.',
                'question' => 'Please enter web server port %default%'
            ],
            static::HOME_PORT => [
                'default' => 1748,
                'description' => 'Web server port for the home machine.',
                'question' => 'Please enter web server port for the home machine'
                    . '. Run docker-compose port web 80 %default%'
            ]
        ];
    }
}
