<?php

namespace Fatkulnurk\PHPQbittorrentApi;

class Singleton
{
    private static $instance = null;
    private static $baseURI = 'http://localhost';
    private static $userAgent = 'Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1)';

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public function setBaseURI(string $uri): void
    {
        self::$baseURI = $uri;
    }

    public function getBaseUri(): string
    {
        return self::$baseURI;
    }

    public function getUserAgent():string
    {
        return self::$userAgent;
    }
}
