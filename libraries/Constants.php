<?php
class Constants {
    public function base_url($path = '') {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        $baseUrl = $protocol . $host . $baseDir;
        
        if ($path) {
            $baseUrl .= ltrim($path, '/');
        }
        
        return $baseUrl;
    }
}