<?php namespace Modules\Users\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Bican\Roles\Models\Role;
use Modules\Users\Http\Requests\CreateRoleRequest;
use Modules\Users\Http\Requests\UpdateRoleRequest;

class RolesController extends Controller {
	
	public function index(Role $RoleModel)
	{
		$roles = $RoleModel->get();
		return view('users::roles.index',compact('roles'));
	}

	public function create() {
		return view('users::roles.create');
	}

	public function store(CreateRoleRequest $req ,Role $RoleModel) {
		$role = $RoleModel;
		$RoleModel->name = $req->input('name');
		$role->save();
		return redirect()->route('roles.index')->with('success' ,'تم اضافة المجموعة بنجاح');
	}

	public function update(UpdateRoleRequest $req ,Role $role) {
		$role->name = $req->input('name');
		$role->save();
		return redirect()->route('roles.index')->with('success' ,'تم تحديث بيانات المجموعة بنجاح');
	}

	public function edit(Role $role) {
		return view('users::roles.edit' ,compact('role'));
	}

	/**
	 * Delete a single user
	 * @param  Role    $user an ijnect instance of the user model
	 * @return \Illuminate\Support\Facades\Redirect        redirect to the users index page with a flash message
	 */
	public function delete(Role $role) {
		// we delete the role
		$role->delete();
		// redirect to the roles index
		return redirect()->route('roles.index')->with('success' ,trans('roles::roles.delete_success'));
	}

	public function deleteBulk(Request $req ,Role $RoleModel) {
		// if the table_records is empty we redirect to the roles index
		if(!$req->has('table_records')) return redirect()->route('roles.index');
		// we delete all the roles with the ids $ids
		$RoleModel->destroy($ids);
		// we redirect to the role index view with a success message
		return redirect()->route('roles.index')->with('success' ,trans('users::roles.delete_bulk_success'));
	}
	
}