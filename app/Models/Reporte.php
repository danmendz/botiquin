<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reporte
 *
 * @property $id
 * @property $usuario_id
 * @property $tipo_reporte
 * @property $fecha_generacion
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reporte extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['usuario_id', 'tipo_reporte', 'fecha_generacion', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id', 'id');
    }
    
}
