<?php namespace Modules\Registration\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Registration\Entities\RegistrationStep as Step;
use Modules\Registration\Entities\RegistrationStepNote as Note;
use Modules\Registration\Http\Requests\Note\CreateRequest;
use Modules\Registration\Http\Requests\Note\UpdateRequest;
use Pingpong\Modules\Routing\Controller;

class NotesController extends Controller
{

    public function index(Step $step ,Note $Note)
    {

        $notes = $Note->all();

        return view('registration::notes.index' ,compact('notes' ,'step'));
    }

    public function create(Step $step)
    {

        return view('registration::notes.create', compact('step'));
    }

    public function edit(Note $note)
    {

        $note->load('step');

        $step = $note->step;
       
        return view('registration::notes.edit', compact('note' ,'step'));
    }

    public function store(Step $step,CreateRequest $request)
    {
       
        $note = new Note;

        $note = $note->fill($request->all());

        $note->registration_step_id = $step->id;

        $note->save();

        return redirect()->route('registration.notes.index' ,$step->id)->with('success', trans('registration::notes.create_success', ['name'=>$note->name]));
    }

    public function update(UpdateRequest $request, Note $note)
    {
        $note = $note->fill($request->all());

        $note->save();

        return redirect()
        ->route('registration.notes.index' ,$note->registration_step_id)
        ->with('success', trans('registration::notes.update_success', ['name'=>$note->name]));
    }

    public function delete(Note $note)
    {
        $note->delete();

        return redirect()
        ->route('registration.notes.index' ,$note->registration_step_id)->with('success', trans('registration::notes.delete_success', ['name'=>$note->name]));
    }

    public function deleteBulk(Request $req, Note $Note ,Step $step)
    {
        if (!$req->has('table_records')) {
            return redirect()->route('cities.index');
        }
        
        $ids = $req->input('table_records');

        $Note->destroy($ids);
        
        return redirect()
        ->route('registration.notes.index' ,$step->id)
        ->with('success', trans('registration::notes.delete_bulk_success'));
    }

}
