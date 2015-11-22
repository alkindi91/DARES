<?php namespace Modules\Registration\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Registration\Entities\RegistrationYear as Year;
use Modules\Registration\Http\Requests\Year\CreateYearRequest;
use Modules\Registration\Http\Requests\Year\UpdateYearRequest;
use Pingpong\Modules\Routing\Controller;

class YearsController extends Controller
{

    public function index(Year $Year)
    {
        $years = $Year->all();

        return view('registration::years.index' ,compact('years'));
    }

    public function create(Year $Year)
    {
        $years = $Year->lists('name', 'id')->toArray();

        return view('registration::years.create', compact('years'));
    }

    public function edit(Year $year)
    {

        $YearModel = new Year;

        $years = $YearModel->whereNotIn('id' ,[$year->id])->lists('name', 'id')->toArray();

        return view('registration::years.edit', compact('year' ,'years'));
    }

    public function store(CreateYearRequest $req, Year $Year)
    {
        $year = $Year->fill($req->all());

        $year->save();

        return redirect()->route('registration.years.index')->with('success', trans('registration::years.create_success', ['name'=>$year->name]));
    }

    public function update(UpdateYearRequest $req, Year $year)
    {
        $year = $year->fill($req->all());

        $year->save();

        if(request('next_years')) {
           $year->children()->attach(request('next_years'));
        }

        return redirect()
        ->route('registration.years.index')
        ->with('success', trans('registration::years.update_success', ['name'=>$year->name]));
    }

    public function delete(Year $year)
    {
        $year->delete();

        return redirect()
        ->route('registration.years.index', trans('registration::steos.delete_success', ['name'=>$year->name]));
    }

    public function deleteBulk(Request $req, Year $Year)
    {
        if (!$req->has('table_records')) {
            return redirect()->route('cities.index');
        }
        
        $ids = $req->input('table_records');

        $Year->destroy($ids);
        
        return redirect()
        ->route('registration.years.index')
        ->with('success', trans('registration::years.delete_bulk_success'));
    }
}
