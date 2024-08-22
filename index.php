<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo "PAGINA INICIAL";
        break;

        case '/':
            echo "PAGINA INICIAL";
            break;

            case '/':
                echo "PAGINA INICIAL";
                break;
    
    default:
        # code...
        break;
}