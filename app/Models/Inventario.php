<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $botiquin_id
 * @property $producto_id
 * @property $cantidad
 * @property $fecha_caducidad
 * @property $fecha_registro
 * @property $created_at
 * @property $updated_at
 *
 * @property Botiquine $botiquine
 * @property Producto $producto
 * @property Movimiento[] $movimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['botiquin_id', 'producto_id', 'cantidad', 'fecha_caducidad', 'fecha_registro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function botiquine()
    {
        return $this->belongsTo(\App\Models\Botiquine::class, 'botiquin_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany(\App\Models\Movimiento::class, 'id', 'inventario_id');
    }
    
}
