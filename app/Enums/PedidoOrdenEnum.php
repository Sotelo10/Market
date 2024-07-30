<?php

namespace App\Enums;

enum PedidoOrdenEnum : string {
    case PENDIENTE = 'pendiente';
    case PROCESADO = 'procesado';
    case COMPLETADO = 'completado';

}
