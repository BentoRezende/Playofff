<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo "PAGINA INICIAL";
        break;

        case '/CADASTRO':
            echo "FAZER CADASTRO";
            break;

            case '/login':
                echo "LIGAS";
                break;

                case '/estatisticas':
                    echo "lewandowski";
                      break;

                      case '/mata-mata':
                        echo "jogo unico";
                          break;

                          case '/classificação':
                            echo "criar";
                              break;

                             

    
    default:
        echo "ERROR 404";

        break;

                            }