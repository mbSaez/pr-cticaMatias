<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Almacenamiento de vista de rutas.
    |--------------------------------------------------------------------------
    |

    | La mayoría de los sistemas de plantillas cargan plantillas desde el disco. Aquí usted puede especificar
    | una serie de rutas que se deben comprobar para sus vistas. Por supuesto
    | La ruta habitual de la vista de Laravel ya se ha registrado para usted.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compilacion de vista de rutas.
    |--------------------------------------------------------------------------
    |
    |
      Esta opción determina dónde estarán todas las plantillas Blade compiladas.
    | almacenado para su aplicación. Típicamente, esto está dentro del almacenamiento.
    | directorio.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
