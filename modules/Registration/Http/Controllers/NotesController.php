<?php namespace Modules\Registration\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Registration\Entities\RegistrationNote as Note;
use Modules\Registration\Entities\RegistrationStep as Step;
use Modules\Registration\Http\Requests\Note\CreateNoteRequest;
use Modules\Registration\Http\Requests\Note\UpdateNoteRequest;
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

        return view('registration::notes.create', compact('notes' ,'step'));
    }

    public function edit(Note $note)
    {
        $note->load('step');

        $step = $note->step;
       
        return view('registration::notes.edit', compact('note' ,'step'));
    }

    public function store(Step $step,CreateNoteRequest $request)
    {
        
        if($this->checkOverlapingNotes()) {
            return redirect()->back()->withInput()->with('warning' ,trans('registration::notes.overlaping'));
        }

        $note = new Note;

        $note = $note->fill($request->all());

        $note->registration_step_id = $step->id;

        $note->save();

        return redirect()->route('registration.notes.index' ,$step->id)->with('success', trans('registration::notes.create_success', ['name'=>$note->name]));
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {
        $note = $note->fill($request->all());

        $note->save();

        if(request('next_notes')) {
           $note->children()->attach(request('next_notes'));
        }

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

    public function checkOverlapingNotes($note=null) {

        $notes = Note::where(function($sql) {
                $sql->where('start_at' ,'<=' ,request('finish_at'))
                    ->where('finish_at' ,'>=' ,request('start_at'));
        });
        
        if($note) {
            $notes->whereNotIn('id' ,$note->id);
        }

        return $notes->count();
    }
}
