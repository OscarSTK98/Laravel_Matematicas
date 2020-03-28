<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profesor;

class Material extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Materials';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	
        
        //Consulta con la llave foranea "laboratorio_titular"
	public function Nombre()
	{	
		$Nombre = Profesor::find($this->idProfesor);

		return $Nombre->Nombre;
    }
}
