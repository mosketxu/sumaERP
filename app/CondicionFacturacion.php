<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondicionFacturacion extends Model
{
    protected $fillable = ['name','empresa_id', 'diafactura', 'diavencimiento','condicionpago_id', 'periodopago_id'];
    
    public function empresa(){
        return $this->belongsTo(Empresa::class)->select('id','name');
    }

    public function modoPagos () {
		return $this->hasMany(ModoPago::class);
    }
    
    public function periodoPagos () {
		return $this->hasMany(PeriodoPago::class);
	}

}
