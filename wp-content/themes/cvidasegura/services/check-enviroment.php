<?php
    function checkEnvironment()
    {
        $serverUrl = $_SERVER['HTTP_HOST'];

        $productionUrl = 'consultoriavidasegura.com';
        $localhostUrl = 'localhost';

        $production = '115';
        $local = '63';

        if ($serverUrl === $productionUrl) {
            return $production;         
        }elseif($serverUrl === $localhostUrl) {
            return $local;
        }else{
            return 'Ambiente desconhecido';
        }

    }
    $environment = checkEnvironment();
    $id = $environment;