<?php namespace Modules\Academycycle\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academycycle\Http\Requests\Semestereventtype\validationRequest;
use Modules\Academycycle\Entities\Semester as Semester;
use Modules\Academycycle\Entities\SemesterEventType as SEtype; //SEtype = Semester Event Type

class SemestereventtypesController extends Controller {
	
	public function index(SEtype $SEtype)
	{
        $types = $SEtype->all();
		
        return view('academycycle::semestereventtypes.index' ,compact('types'));
	}   
	
	public function create()
    {
		return view('academycycle::semestereventtypes.create');
    }	
	
	public function store(SEtype $SEtype , validationRequest $request)
    {	
		$input = $request->all();
		$SEtype->fill($input)->save();
		
		return redirect()->route('ac.semestereventtypes.index');
    }
	
	public function edit(SEtype $SEtypes ,$tid)
	{
		$SEtype = $SEtypes->where("id" , $tid)->first();
		return view('academycycle::semestereventtypes.edit',compact('SEtype'));
	}
	
	public function update(SEtype $SEtypes , validationRequest $request , $tid)
	{	
		$SEtype = $SEtypes->where("id" , $tid)->first();	
				
		$SEtype->name = $request->input('name');
		$SEtype->category = $request->input('category');
		$SEtype->note = $request->input('note');
		$SEtype->show = $request->has('show') ? request('show') : 0;
			
		$SEtype->save();
		return redirect()->route('ac.semestereventtypes.index' );
	}
	public function delete(SEtype $SEtypes , $tid)
	{
		$SEtype = $SEtypes->where("id" , $tid)->first();
		$SEtype->delete();
				
		return redirect()->route('ac.semestereventtypes.index' );
	}
	/*
	public function deleteBulk(validationRequest $request, Semester $Semester ,$rr)
    {
		return("fd");
		dd($request);
        if (!$request->has('table_records')) {
			
            return redirect()->route('academycycle.years.index');
        }
        
        $ids = $request->input('table_records');
		dd($ids);
        $Semester->destroy($ids);
        
        return redirect()
        ->route('ac.semesters.index')
        ->with('success', trans('academycycle::semesters.delete_bulk_success'));
    }
	*/
	
}