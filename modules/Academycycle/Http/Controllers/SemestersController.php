<?php namespace Modules\Academycycle\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academycycle\Http\Requests\Semester\validationRequest;
use Modules\Academycycle\Entities\Semester as Semester;
use Modules\Academycycle\Entities\AcademycycleYear as Year;

class SemestersController extends Controller {
	
	public function index(Semester $Semesters , $yid)
	{
        $semesters = $Semesters->where('academycycle_year_id', $yid)->get();
		
        return view('academycycle::semesters.index' ,compact('semesters' , 'yid'));
	}   
	
	public function create($yid)
    {
		return view('academycycle::semesters.create' ,compact('all_year' , 'yid'));
    }	
	
	public function store(Semester $Semester , validationRequest $request)
    {
		$yid = $request->academycycle_year_id;
		
		$input = $request->except('active');			
		$Semester->fill($input);
		$Semester->active = $request->has('active') ? request('active') : 0;
		
		$Semester->save();
		
		return redirect()->route('ac.semesters.index', [$yid]);
    }
	
	public function edit(Semester $Semesters , $sid)
	{
		$Semester = $Semesters->where("id" , $sid)->first();
		return view('academycycle::semesters.edit',compact('Semester' , 'sid'));
	}
	
	public function update(Semester $semesters , validationRequest $request , $sid)
	{	
		$Semester = $semesters->where("id" , $sid)->first();	
				
		$Semester->name = $request->input('name');
		$Semester->start_at = $request->input('start_at');
		$Semester->finish_at = $request->input('finish_at');
		$Semester->active = $request->has('active') ? request('active') : 0;
			
		$Semester->save();
		
		$yid = $Semester->academycycle_year_id;
		return redirect()->route('ac.semesters.index' ,compact('semester' , 'yid'));
	}
	public function delete(Semester $semesters, $sid)
	{
		$Semester = $semesters->where("id" , $sid)->first();
		$Semester->delete();
				
		$yid = $Semester->academycycle_year_id;
		return redirect()->route('ac.semesters.index' ,compact('semester' , 'yid'));
	}
	
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
	
}