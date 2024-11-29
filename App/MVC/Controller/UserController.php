<?php

class UserController{

    public static function index(){

include 'View/Modules/PaginaInicial/Index.php';

    }

    public static function login(){

include 'View/Modules/Login/index.php';
        
    }

    public static function chaveamento(){

        include 'View/Modules/Chaveamento/index.php';
                
            }
            public static function sobreosite(){

                include 'View/Modules/SobreOsite/index.php';
                        
                    }
                    public static function sumario(){

                        include 'View/Modules/Sumario/index.php';
                                
                            }
}