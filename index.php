<?php

    require_once "./Config/App.php";
    require_once "./controladores/plantillaControlador.php";

    $plantilla = new PlantillaControlador();
    $plantilla->get_plantilla_controlador();

