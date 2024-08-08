<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $permissions = Permission::paginate();

        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        //
        return view('permissions.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->all();
        Permission::create($data);

        return to_route('permissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //
        $permission = Permission::findOrFail($id);
        return view('permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //
        $permission = Permission::findOrFail($id);
        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        //
        $data = $request->all();
        $permission = Permission::findOrFail($id);
        $permission->update($data);

        return to_route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $permission = Permission::findOrFail($id);
        $permission->destroy();
        return to_route('permissions.index');
    }


    public function addPermissionToUser(string $id) : View
    {
        $user = User::findOrFail($id);
        $permissions = Permission::all();

        $permissionsuser = DB::table('model_has_permissions')->where('model_id', $user->id)->pluck('permission_id')->all();
        return view('users.permissions.edit', compact('permissions','user','permissionsuser'));
    }

    public function storePermissionToUser(string $id , Request $request) : RedirectResponse
    {
        $request->validate([
            'permission' =>'required',
        ]);

        $data = $request->all();
        $user = User::findOrFail($id);

        $user->syncPermissions($data['permission']);

        return redirect()->back();
    }
}
