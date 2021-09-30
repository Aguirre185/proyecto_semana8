<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Citas
 * @package App\Models
 * @version September 30, 2021, 12:43 am UTC
 *
 * @property integer $idpaciente
 * @property string $fecha_cita
 * @property string $citascol
 * @property integer $iddoctor
 */
class Citas extends Model
{
   // use SoftDeletes;

    use HasFactory;
    

    public $table = 'citas';
    public $primaryKey='idcitas';
    public $timestamps =false;
    
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idpaciente',
        'fecha_cita',
        'citascol',
        'iddoctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas' => 'integer',
        'idpaciente' => 'integer',
        'fecha_cita' => 'string',
        'citascol' => 'string',
        'iddoctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpaciente' => 'nullable|integer',
        'fecha_cita' => 'nullable|string|max:45',
        'citascol' => 'nullable|string|max:45',
        'iddoctor' => 'nullable|integer'
    ];

    
}
