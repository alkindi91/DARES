<?php namespace Modules\Users\Http\Controllers;


use Bican\Roles\Models\Permission;
use Illuminate\Http\Request;
use Modules\Academystructure\Http\Requests\CreateStructureRequest;
use Modules\Users\Entities\User;
use Modules\Users\Http\Requests\CreateUserRequest;
use Modules\Users\Http\Requests\UpdateUserRequest;
use Pingpong\Modules\Routing\Controller;
use Bican\Roles\Models\Role;

class UsersController extends Controller {
	
	/**
	 * Display All the users
	 * @param  User   $UserModel The user model
	 * @return \Illuminate\View\View            the users index view index.blade.php
	 */
	public function index(User $UserModel ,Request $req)
	{
		// get an instance of the user model and order the query by id desc
		$users = $UserModel->admin()->orderBy('id' ,'desc');

		// if theres any variables sent throught the request we use them as where arguments
		if($req->has('email'))
			$users->where('email' ,$req->input('email'));
		
		if($req->has('sex'))
			$users->where('sex' ,$req->input('sex'));
		
		// get our results with pagination with 20 user per page
		$users = $users->paginate(20);

		// return the index view of the users module with a collection of users objects
		return view('users::users.index' ,compact('users'));
	}

	/**
	 * Display the form to create new user
	 * @return \Illuminate\View\View the user create view create.blade.php
	 */
	public function create() {
		$roles = Role::lists('name' ,'id')->toArray();
		return view('users::users.create' ,compact('roles'));
	}

	/**
	 * Display the view to edit a user
	 * @param  User   $user we receive an inject model of the user ( see method boot of UsersServiceProvider )
	 * @return \Illuminate\View\View       the user edit view edit.blade.php
	 */
	public function edit(User $user) {
		if($user->type!='admin') {
			return redirect()->route('welcome');
		}
		$roles = Role::lists('name' ,'id')->toArray();
		return view('users::users.edit' ,compact('user' ,'roles'));
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
		$this->processPermissions($UserModel);
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
		if($user->id==1 || $user->type!='admin') {
			return redirect()->route('users.index')->with('warning' ,trans('users::users.user_undeletable'));
		}
		// we delete the user
		$user->delete();
		// redirect to the users index
		return redirect()->route('users.index')->with('success' ,trans('users::users.delete_success'));
	}

	public function deleteBulk(Request $req ,User $UserModel) {
		// if the table_records is empty we redirect to the users index
		if(!$req->has('table_records')) return redirect()->route('users.index');

		// we get all the ids and put them in a variable
		$ids = array_filter($req->input('table_records') ,function($id) { return $id!=1; });
		// we delete all the users with the ids $ids
		$UserModel->where('type' ,'admin')->destroy($ids);
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

		if($user->type!='admin') {
			return redirect()->route('welcome');
		}

		if(!empty($req->input('password')))
		$user->password = bcrypt($req->input('password'));

		$user->save();

		$this->processPermissions($user);

		return redirect()->route('users.index')->with('success' ,trans('users::users.update_success' ,['name'=>$user->name]));
	}

	public function show(User $user) {
		if($user->type!='admin') {
			return redirect()->route('welcome');
		}
		return view('users::users.show' ,compact('user'));
	}

	public function processPermissions($user) {
		$permissions = request('permissions');
		
		$user->detachAllPermissions();

		if(is_array($permissions)) {
		foreach($permissions as $permission) {
			$permission = Permission::where("slug" ,$permission)->first();
			$user->attachPermission($permission);
		}
		}
	}
	
}