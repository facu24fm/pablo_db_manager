<?php
    class ConexionBD {
        const Servidor = 'localhost';
        const DBname = 'trabajoFinalProgII';
        const Usuario = 'root';
        const Password = '';
        const METHOD = 'AES-256-CBC';
        const KEY = '$2y$12$uP9KfVz7nX5bq8s0rHnX4e';
        
    }


    try {

        $optionsError = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::ERRMODE_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
        $link = new PDO("mysql:host=" . self::Servidor . ";dbname=" . self::DBname, self::Usuario,
        self::Password, $optionsError);
        $link->exec("set names utf8");
        return $link;
        // -----------------------------------------------------------------------//
        // ----------------- Manejo de errores de la base de datos ---------------//
        } catch (PDOException $e) {
        die("Error en la conexión a la base de datos: " . $e->getMessage(), 0);
        echo("Intenta de nuevo mas tarde");
    }

