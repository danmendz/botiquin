<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $tipo_paciente
 * @property $nombre
 * @property $fecha_nacimiento
 * @property $genero
 * @property $created_at
 * @property $updated_at
 *
 * @property TipoPaciente $tipoPaciente
 * @property DetallesAcademico[] $detallesAcademicos
 * @property ExpedientesMedico[] $expedientesMedicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   protected $fillable = ['nombre', 'tipo_paciente', 'fecha_nacimiento', 'genero'];


    public function tipoPaciente()
{
    return $this->belongsTo(TipoPaciente::class, 'tipo_paciente');
}



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesAcademicos()
    {
        return $this->hasMany(\App\Models\DetallesAcademico::class, 'id', 'paciente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedientesMedicos()
{
    return $this->hasMany(\App\Models\ExpedientesMedico::class, 'paciente_id', 'id');
}

    
}
