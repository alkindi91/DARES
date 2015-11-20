<?php namespace Modules\Registration\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Registration\Entities\RegistrationStep as Step;
use Modules\Registration\Http\Requests\Step\CreateStepRequest;
use Modules\Registration\Http\Requests\Step\UpdateStepRequest;
use Pingpong\Modules\Routing\Controller;

class StepsController extends Controller
{

    public function index(Step $Step)
    {
        $steps = $Step->all();

        return view('registration::steps.index' ,compact('steps'));
    }

    public function create(Step $Step)
    {
        $steps = $Step->lists('name', 'id')->toArray();

        return view('registration::steps.create', compact('steps'));
    }

    public function edit(Step $step)
    {
        $step->load('children');

        $StepModel = new Step;

        $steps = $StepModel->whereNotIn('id' ,[$step->id])->lists('name', 'id')->toArray();

        return view('registration::steps.edit', compact('step' ,'steps'));
    }

    public function store(CreateStepRequest $req, Step $Step)
    {
        $step = $Step->fill($req->all());

        $step->edit_form = $req->has('edit_form') ? 1 : 0;

        $step->upload_files = $req->has('upload_files') ? 1 : 0;

        $step->save();

        if(request('next_steps')) {

           $step->children()->attach(request('next_steps'));
        }

        return redirect()->route('registration.steps.index')->with('success', trans('registration::steps.create_success', ['name'=>$step->name]));
    }

    public function update(UpdateStepRequest $req, Step $step)
    {
        $step = $step->fill($req->all());

        $step->edit_form = $req->has('edit_form') ? 1 : 0;

        $step->upload_files = $req->has('upload_files') ? 1 : 0;

        $step->save();

        $step->children()->detach();

        if(request('next_steps')) {
           $step->children()->attach(request('next_steps'));
        }

        return redirect()
        ->route('registration.steps.index')
        ->with('success', trans('registration::steps.update_success', ['name'=>$step->name]));
    }

    public function delete(Step $step)
    {
        $step->delete();

        return redirect()
        ->route('registration.steps.index', trans('registration::steos.delete_success', ['name'=>$step->name]));
    }

    public function deleteBulk(Request $req, Step $Step)
    {
        if (!$req->has('table_records')) {
            return redirect()->route('cities.index');
        }
        
        $ids = $req->input('table_records');

        $Step->destroy($ids);
        
        return redirect()
        ->route('registration.steps.index')
        ->with('success', trans('registration::steps.delete_bulk_success'));
    }
}
