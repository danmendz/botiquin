<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExpedientesMedico
 *
 * @property $id
 * @property $paciente_id
 * @property $usuario_id
 * @property $fecha_evento
 * @property $descripcion
 * @property $producto_utilizado
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ExpedientesMedico extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['paciente_id', 'usuario_id', 'fecha_evento', 'descripcion', 'producto_utilizado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente()
    {
        return $this->belongsTo(\App\Models\Paciente::class, 'paciente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id', 'id');
    }
    
}
