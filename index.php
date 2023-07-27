<?php

use Kirby\Cms\App as Kirby;

class Webhook {
    static public function trigger( string $url = '' ){
        file_get_contents($url, false, stream_context_create([
            'http' => [
                'method'  => 'POST'
            ]
        ]));
    }
}

Kirby::plugin('moritzebeling/kirby-buildhook', [

	'options' => [
		'url' => false // set option in config.php moritzebeling.kirby-buildhook.url
	],

    'hooks' => [
        'page.*:after' => function( $page ){
            if( $url = option('moritzebeling.kirby-buildhook.url', false) ){
                Webhook::trigger( $url );
            }
        },
        'site.*:after' => function( $page ){
            if( $url = option('moritzebeling.kirby-buildhook.url', false) ){
                Webhook::trigger( $url );
            }
        },
    ]

]);