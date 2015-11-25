<<<<<<< HEAD:modules/Academystructure/Entities/AcademystructureFaculty.php
<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class AcademystructureFaculty extends Model {

    protected $fillable = ["name"];
	
	public function years() {
    	return $this->hasMany('\Modules\Academystructure\Entities\AcademystructureYear' ,'faculty_id');
    }
	
	

=======
<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model {

    protected $fillable = ["name"];
	protected $table = 'academystructure_faculties';
	
	public function years() {
    	return $this->hasMany('\Modules\Academystructure\Entities\Year' ,'faculty_id');
    }
	
	

>>>>>>> 2b6f9ef3aea52fb6c39c2df7ebd66a02e8ef6d15:modules/Academystructure/Entities/Faculty.php
}