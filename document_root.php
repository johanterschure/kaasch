<?php
    define('RUN_MODE_PRODUCTION', false);

    function get_document_root() {
        if(RUN_MODE_PRODUCTION === true) {
            return $_SERVER["DOCUMENT_ROOT"];
        }
        return '/var/www/htdocs';
    }
    function get_relative_root() {
        if(RUN_MODE_PRODUCTION === true) {
            return "";
        }
        return "/htdocs";
    }
?>
