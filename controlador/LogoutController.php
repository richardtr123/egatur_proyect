<?php

session_start();
header('location:../?cerrar_sesion=1');
die();
session_destroy();
