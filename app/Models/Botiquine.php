<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Botiquine
 *
 * @property $id
 * @property $nombre
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Inventario[] $inventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Botiquine extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'ubicacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany(\App\Models\Inventario::class, 'id', 'botiquin_id');
    }
    
}
