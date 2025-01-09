<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rotacione
 * 
 * @property int $id
 * @property int|null $personal_id
 * @property int|null $tipo_movimiento
 * @property string|null $descripcion
 * @property string|null $oficina_o
 * @property string|null $oficina_d
 * @property string|null $cargo
 * @property Carbon|null $fecha_ini
 * @property Carbon|null $fecha_fin
 * @property Carbon|null $fechadoc
 * @property int|null $idtd
 * @property string|null $nrodoc
 * @property int|null $archivo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Personal|null $personal
 *
 * @package App\Models
 */
class Movimientos extends Model
{
	protected $table = 'movimientos';
    protected $dateFormat = 'd/m/Y H:i:s'; 

	protected $casts = [
		'personal_id' => 'int',
		'fecha_ini' => 'datetime',
		'fecha_fin' => 'datetime',
		'fechadoc' => 'datetime',
		'idtd' => 'int',
		'archivo' => 'int'
	];

	protected $fillable = [
		'personal_id',
		'unidad_organica',
		'unidad_organica_destino',
		'cargo',
		'fecha_ini',
		'fecha_fin',
		'fechadoc',
		'idtd',
		'nrodoc',
		'archivo'
	];

	public function personal()
	{
		return $this->belongsTo(Personal::class, 'personal_id');
	}
}
