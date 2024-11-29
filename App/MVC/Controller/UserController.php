<?php

class UserController{

    public static function index(){

include 'App/MVC/View/Modules/PaginaInicial/Index.php';

    }

    public static function login(){

include 'App/MVC/View/Modules/Login/index.php';
        
    }

    public static function chaveamento(){

        include 'App/MVC/View/Modules/Chaveamento/index.php';
                
            }
            public static function sobreosite(){

                include 'App/MVC/View/Modules/SobreOsite/index.php';
                        
                    }
                    public static function sumario(){

                        include 'App/MVC/View/Modules/Sumario/index.php';
                                
                            }
}