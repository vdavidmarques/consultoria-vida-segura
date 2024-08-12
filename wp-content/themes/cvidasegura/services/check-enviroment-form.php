<?php
    function checkEnvironment() {
        $serverUrl = $_SERVER['HTTP_HOST'];

        $productionUrl = 'consultoriavidasegura.com';
        $localhostUrl = 'localhost';

        if ($serverUrl === $productionUrl) {
            return do_shortcode('[contact-form-7 id="a3c5186" title="Formulário de contato 1"]');
        }
        
        if ($serverUrl === $localhostUrl) {
            return do_shortcode('[contact-form-7 id="d901c23" title="Contact form 1"]');
        }

        return 'Ambiente desconhecido';
    }

    $environment = checkEnvironment();
    echo $environment;