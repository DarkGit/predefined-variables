<?php

namespace G4\PredefinedVariables;

final class Server
{
    public function has($key)
    {
        return isset($_SERVER[$key])
            && $_SERVER[$key] !== '';
    }

    public function httpHost()
    {
        return $_SERVER['HTTP_HOST'];
    }

    public function httpReferer()
    {
        return $_SERVER["HTTP_REFERER"];
    }

    public function httpUserAgent()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function remoteAddr()
    {
        $remoteAddr = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $remoteAddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $remoteAddr = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        return $remoteAddr;
    }

    public function serverAddr()
    {
        return $_SERVER['SERVER_ADDR'];
    }

    public function serverName()
    {
        return $_SERVER['SERVER_NAME'];
    }

    public function requestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}