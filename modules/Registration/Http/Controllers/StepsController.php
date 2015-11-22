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

    public function store(CreateStepRequest $request, Step $Step)
    {
        $step = $Step->fill($request->all());

        $step->edit_form = $request->has('edit_form') ? 1 : 0;

        $step->upload_files = $request->has('upload_files') ? 1 : 0;

        $step->save();

        $this->processVerifyEmail($step);

        if(request('next_steps')) {

           $step->children()->attach(request('next_steps'));
        }

        return redirect()->route('registration.steps.index')->with('success', trans('registration::steps.create_success', ['name'=>$step->name]));
    }

    public function update(UpdateStepRequest $request, Step $step)
    {
        $step = $step->fill($request->all());

        $step->edit_form = $request->has('edit_form') ? 1 : 0;

        $step->upload_files = $request->has('upload_files') ? 1 : 0;

        $step->save();

        $this->processVerifyEmail($step);

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

    public function deleteBulk(Request $request, Step $Step)
    {
        if (!$request->has('table_records')) {
            return redirect()->route('cities.index');
        }
        
        $ids = $request->input('table_records');

        $Step->destroy($ids);
        
        return redirect()
        ->route('registration.steps.index')
        ->with('success', trans('registration::steps.delete_bulk_success'));
    }

    public function processVerifyEmail($step) 
    {
        $StepModel = new Step;

        if (request('verify_email')) {

          $StepModel->where('id' ,'!=' ,$step->id)->update(['verify_email'=>0]);
          $step->verify_email = 1;
          $step->save();
        }
    }
}
