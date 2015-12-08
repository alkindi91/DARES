<?php namespace Modules\Registration\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Registration\Entities\RegistrationPeriod as Period;
use Modules\Academycycle\Entities\AcademycycleYear as Year;
use Modules\Registration\Http\Requests\Period\CreatePeriodRequest;
use Modules\Registration\Http\Requests\Period\UpdatePeriodRequest;
use Pingpong\Modules\Routing\Controller;

class PeriodsController extends Controller
{

    public function index(Year $year ,Period $Period)
    {
        $periods = $Period->orderBy('id' ,'desc');

        if($yearId = request('academycycle_year_id')) {
            $periods->where('academycycle_year_id' ,$yearId);
        }

        if(request('running')) {
            $periods->current();
        }

        $periods = $periods->get();

        $years = $year->lists('name' ,'id')->toArray();


        return view('registration::periods.index' ,compact('periods', 'years'));
    }

    public function create(Year $year)
    {
        $years = $year->notFinished()->lists('name' ,'id')->toArray();
        return view('registration::periods.create', compact('periods' ,'years'));
    }

    public function edit(Period $period ,Year $year)
    {
       
        $years = $year->notFinished()->lists('name' ,'id')->toArray();
       
       
        return view('registration::periods.edit', compact('period' ,'years'));
    }

    public function store(CreatePeriodRequest $request)
    {
        
        if($this->checkOverlapingPeriods()) {
            return redirect()->back()->withInput()->with('warning' ,trans('registration::periods.overlaping'));
        }

        $period = new Period;

        $period = $period->fill($request->all());

        $period->save();

        return redirect()->route('registration.periods.index')->with('success', trans('registration::periods.create_success', ['name'=>$period->name]));
    }

    public function update(UpdatePeriodRequest $request, Period $period)
    {
        $period = $period->fill($request->all());

        $period->save();

        if(request('next_periods')) {
           $period->children()->attach(request('next_periods'));
        }

        return redirect()
        ->route('registration.periods.index')
        ->with('success', trans('registration::periods.update_success', ['name'=>$period->name]));
    }

    public function delete(Period $period)
    {
        $period->delete();

        return redirect()
        ->route('registration.periods.index')->with('success', trans('registration::periods.delete_success', ['name'=>$period->name]));
    }

    public function deleteBulk(Request $req, Period $Period)
    {
        if (!$req->has('table_records')) {
            return redirect()->route('cities.index');
        }
        
        $ids = $req->input('table_records');

        $Period->destroy($ids);
        
        return redirect()
        ->route('registration.periods.index')
        ->with('success', trans('registration::periods.delete_bulk_success'));
    }

    public function checkOverlapingPeriods($period=null) {

        $periods = Period::where(function($sql) {
                $sql->where('start_at' ,'<=' ,request('finish_at'))
                    ->where('finish_at' ,'>=' ,request('start_at'));
        });
        
        if($period) {
            $periods->whereNotIn('id' ,$period->id);
        }

        return $periods->count();
    }
}
