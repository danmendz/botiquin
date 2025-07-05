<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesAcademico
 *
 * @property $id
 * @property $paciente_id
 * @property $tipo_academico
 * @property $matricula
 * @property $carrera
 * @property $grupo
 * @property $semestre
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesAcademico extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['paciente_id', 'tipo_academico', 'matricula', 'carrera', 'grupo', 'semestre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente()
    {
        return $this->belongsTo(\App\Models\Paciente::class, 'paciente_id', 'id');
    }
    
}
