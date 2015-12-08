<?php namespace Modules\Academycycle\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Modules\Academycycle\Entities\AcademycycleYear as Year;
use Modules\Academycycle\Http\Requests\Year\CreateYearRequest;
use Modules\Academycycle\Http\Requests\Year\UpdateYearRequest;
use Pingpong\Modules\Routing\Controller;

class YearsController extends Controller
{

    public function index(Year $Year)
    {
        $years = $Year->all();

        return view('academycycle::years.index' ,compact('years'));
    }

    public function create(Year $Year)
    {
        $years = $Year->lists('name', 'id')->toArray();

        return view('academycycle::years.create', compact('years'));
    }

    public function edit(Year $year)
    {

        $YearModel = new Year;

        $years = $YearModel->whereNotIn('id' ,[$year->id])->lists('name', 'id')->toArray();

        return view('academycycle::years.edit', compact('year' ,'years'));
    }

    public function store(CreateYearRequest $req, Year $Year)
    {
        $year = $Year->fill($req->all());

        $year->save();

        return redirect()->route('academycycle.years.index')->with('success', trans('academycycle::years.create_success', ['name'=>$year->name]));
    }

    public function update(UpdateYearRequest $req, Year $year)
    {
        $year = $year->fill($req->all());

        $year->save();

        if(request('next_years')) {
           $year->children()->attach(request('next_years'));
        }

        return redirect()
        ->route('academycycle.years.index')
        ->with('success', trans('academycycle::years.update_success', ['name'=>$year->name]));
    }

    public function delete(Year $year)
    {
        $year->delete();

        return redirect()
        ->route('academycycle.years.index', trans('academycycle::steos.delete_success', ['name'=>$year->name]));
    }

    public function deleteBulk(Request $req, Year $Year)
    {
        if (!$req->has('table_records')) {
            return redirect()->route('cities.index');
        }
        
        $ids = $req->input('table_records');

        $Year->destroy($ids);
        
        return redirect()
        ->route('academycycle.years.index')
        ->with('success', trans('academycycle::years.delete_bulk_success'));
    }
}
