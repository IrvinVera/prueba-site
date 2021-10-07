<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    
    protected $table ='tc_dispositivos';
    protected $primaryKey = 'id_dispositivo';

    protected $fillable =[
        'id_dispositivo',
        's_marca',
        's_modelo',
        's_version_sistema_operativo',
        's_numero_serie',
        's_mac_address',
        's_observaciones',
        'b_activo',
    ];
    

}
