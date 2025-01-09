<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reconocimiento
 * 
 * @property int $id
 * @property int|null $personal_id
 * @property int|null $idtd
 * @property string|null $nrodoc
 * @property string|null $descripcion
 * @property Carbon|null $fechadoc
 * @property string|null $archivo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Personal|null $personal
 *
 * @package App\Models
 */
class Reconocimientos extends Model
{
	protected $table = 'reconocimientos';
	protected $primaryKey = 'id';
    protected $dateFormat = 'd/m/Y H:i:s'; 

	protected $casts = [
		'personal_id' => 'int',
		'idtd' => 'int',
		'fechadoc' => 'datetime'
	];

	protected $fillable = [
		'personal_id',
		'institucion',
		'idtd',
		'nrodoc',
		'descripcion',
		'fechadoc',
		'archivo'
	];

	public function personal()
	{
		return $this->belongsTo(Personal::class, 'personal_id');
	}
}
