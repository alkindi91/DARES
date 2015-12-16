<?php namespace Modules\Questionbank\Http\Controllers;


use Illuminate\Http\Request;
use Modules\Questionbank\Entities\choice;
use Pingpong\Modules\Routing\Controller;

class choiceeController extends Controller {
	
	public function index($qid)
	{
		$choices = choice::paginate(20)->where('question_id', $qid);
		
		return view('questionbank::choice.index', compact('choices'));
	}

	public function create($qid){
		
		return view('questionbank::choice.create',compact('qid'));
	}

	public function store($qid, Request $req, choice $choice){
		
		$choice->fill($req->all())->save();

		$message = 'تم اضافة الاجابة بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('choice.index',array('qid'=>$qid))->with('success' ,$message);
	}

	public function edit(){

	}
	
	public function update(){
		
	}

	public function delete($chid,Choice $choices){
		$message = 'تم حذف العنصر بنجاح';

		$choice = $choices->findOrFail($chid);
    	
    	$choice->delete();
    	
    	return redirect()->route('choice.index',$choice->question_id)->with('success' ,$message);
	}
}