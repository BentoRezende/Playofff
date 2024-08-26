<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo "PAGINA INICIAL";
        break;

        case '/CADASTRO':
            echo "FAZER CADASTRO";
            break;

            case '/LIGAS':
                echo "LIGAS";
                break;

                case '/artilharia':
                    echo "lewandowski";
                      break;

                      case '/mata-mata':
                        echo "jogo unico";
                          break;

                          case '/assistencias':
                            echo "de bruyne";
                              break;

                              case '/jogos sem sofrer gols':
                                echo "tafarel";
                                  break;

    
    default:
        echo "ERROR 404";

        break;

                            }