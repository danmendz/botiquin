<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 *
 * @property $id
 * @property $inventario_id
 * @property $usuario_id
 * @property $tipo
 * @property $cantidad
 * @property $fecha_movimiento
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Inventario $inventario
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimiento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['inventario_id', 'usuario_id', 'tipo', 'cantidad', 'fecha_movimiento', 'observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventario()
    {
        return $this->belongsTo(\App\Models\Inventario::class, 'inventario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id', 'id');
    }
    
}
