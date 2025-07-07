<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// app/Models/DetallesAcademico.php

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
    
    use HasFactory;

    protected $table = 'detalles_academicos'; // o el nombre correcto de tu tabla


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'paciente_id',
        'tipo_academico',
        'matricula',
        'carrera',
        'grupo',
        'semestre',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente()
{
    return $this->belongsTo(Paciente::class, 'paciente_id');
}
    
}
