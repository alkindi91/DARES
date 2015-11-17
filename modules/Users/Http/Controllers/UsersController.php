<?php namespace Modules\Users\Http\Controllers;



use Illuminate\Http\Request;
use Modules\Academystructure\Http\Requests\CreateStructureRequest;
use Modules\Users\Entities\User;
use Modules\Users\Http\Requests\CreateUserRequest;
use Modules\Users\Http\Requests\UpdateUserRequest;
use Pingpong\Modules\Routing\Controller;

class UsersController extends Controller {
	
	/**
	 * Display All the users
	 * @param  User   $UserModel The user model
	 * @return \Illuminate\View\View            the users index view index.blade.php
	 */
	public function index(User $UserModel ,Request $req)
	{
		// get an instance of the user model and order the query by id desc
		$users = $UserModel->orderBy('id' ,'desc');

		// if theres any variables sent throught the request we use them as where arguments
		if($req->has('email'))
			$users->where('email' ,$req->input('email'));
		
		if($req->has('sex'))
			$users->where('sex' ,$req->input('sex'));
		
		// get our results with pagination with 20 user per page
		$users = $users->paginate(2);

		// return the index view of the users module with a collection of users objects
		return view('users::index' ,compact('users'));
	}

	/**
	 * Display the form to create new user
	 * @return \Illuminate\View\View the user create view create.blade.php
	 */
	public function create() {
		return view('users::create');
	}

	/**
	 * Display the view to edit a user
	 * @param  User   $user we receive an inject model of the user ( see method boot of UsersServiceProvider )
	 * @return \Illuminate\View\View       the user edit view edit.blade.php
	 */
	public function edit(User $user) {
		return view('users::edit' ,compact('user'));
	}

	/**
	 * Create a new user with data sent from the create form
	 * @param  CreateUserRequest $request we validate the data sent from the form in this class before we continue our logic
	 * @return \Illuminate\Support\Facades\Redirect redirect the user to the users index view
	 */
	public function store(CreateUserRequest $request ,User $UserModel) {
		// fill the model with the sent from the form
		$UserModel->fill($request->all());
		// add the password after encrypting it
		$UserModel->password = bcrypt($request->input('password'));
		// save the user
		$UserModel->save();
		// redirect back to the users index
		return redirect()->route('users.index')->with('success' ,trans('users::users.create_success' ,['name'=>$UserModel->name]));

	}

	/**
	 * Delete a single user
	 * @param  User    $user an ijnect instance of the user model
	 * @return \Illuminate\Support\Facades\Redirect        redirect to the users index page with a flash message
	 */
	public function delete(User $user) {
		// we make the user with id 1 undeletable
		if($user->id==1) return redirect()->route('users.index')->with('warning' ,trans('users::users.user_undeletable'));
		// we delete the user
		$user->delete();
		// redirect to the users index
		return redirect()->route('users.index')->with('message' ,trans('users::users.delete_success'));
	}

	public function deleteBulk(Request $req ,User $UserModel) {
		// if the table_records is empty we redirect to the users index
		if(!$req->has('table_records')) return redirect()->route('users.index');

		// we get all the ids and put them in a variable
		$ids = array_filter($req->input('table_records') ,function($id) { return $id!=1; });
		// we delete all the users with the ids $ids
		$UserModel->destroy($ids);
		// we redirect to the user index view with a success message
		return redirect()->route('users.index')->with('success' ,trans('users::users.delete_bulk_success'));
	}

	/**
	 * update a user with the data from the edit form
	 * @param  UpdateUserRequest $req  [description]
	 * @param  User              $user [description]
	 * @return \Illuminate\Support\Facades\Redirect                  [description]
	 */
	public function update(UpdateUserRequest $req ,User $user) {
		$user->fill($req->all());

		if($req->has('password'))
		$UserModel->password = bcrypt($request->input('password'));

		$user->save();

		return redirect()->rotue('users.index')->with('success' ,trans('users.update_success' ,['name'=>$user->name]));
	}
	
}