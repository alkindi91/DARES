<?php namespace Modules\Registration\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Registration\Entities\RegistrationPeriod as Period;
use Modules\Registration\Entities\RegistrationYear as Year;
use Modules\Registration\Http\Requests\Period\CreatePeriodRequest;
use Modules\Registration\Http\Requests\Period\UpdatePeriodRequest;
use Pingpong\Modules\Routing\Controller;

class PeriodsController extends Controller
{

    public function index(Year $year ,Period $Period)
    {
        $periods = $Period->all();

        return view('registration::periods.index' ,compact('periods' ,'year'));
    }

    public function create(Period $Period ,Year $year)
    {
        $periods = $Period->lists('name', 'id')->toArray();

        return view('registration::periods.create', compact('periods' ,'year'));
    }

    public function edit(Period $period)
    {

        $PeriodModel = new Period;

        $periods = $PeriodModel->whereNotIn('id' ,[$period->id])->lists('name', 'id')->toArray();

        return view('registration::periods.edit', compact('period' ,'periods'));
    }

    public function store(CreatePeriodRequest $req, Period $Period)
    {
        $period = $Period->fill($req->all());

        $period->save();

        return redirect()->route('registration.periods.index')->with('success', trans('registration::periods.create_success', ['name'=>$period->name]));
    }

    public function update(UpdatePeriodRequest $req, Period $period)
    {
        $period = $period->fill($req->all());

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
        ->route('registration.periods.index', trans('registration::steos.delete_success', ['name'=>$period->name]));
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
}
