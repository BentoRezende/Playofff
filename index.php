<?php
include 'App/MVC/Controller/UserController.php';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
       UserController::index();
        break;

        case '/CADASTRO':
            echo "FAZER CADASTRO";
            break;

            case '/login':
                UserController::login();
                break;

                case '/sumario':
                    UserController::sumario();
                      break;


                          case '/classificação':
                            UserController::chaveamento();
                              break;

                             

    
    default:
        echo "ERROR 404";

        break;

                            }