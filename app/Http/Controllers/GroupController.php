<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Exception;

class GroupController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:group-list|group-create|group-edit|group-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:group-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:group-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:group-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        // $groups = $user->groups()->get();
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $group = Group::create([
            'name' => $request->name,
        ]);

        $group->users()->attach(auth()->user());

        return redirect()->route('groups.index')->with('success', 'Group created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $users = User::all();
        return view('groups.show', compact('group', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $group->update([
            'name' => $request->name,
        ]);

        return redirect()->route('groups.index')->with('success', 'Group updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index')->with('success', 'Group deleted successfully.');
    }

    public function addUser(Request $request, Group $group)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $user = User::findOrFail($request->user_id);

        try {
            // Verificar si el usuario ya está en el grupo actual
            if ($group->users()->where('users.id', $user->id)->exists()) {
                throw new Exception('El usuario ya está en este grupo.');
            }

            // Verificar si el usuario ya está en otro grupo
            if ($user->groups()->exists()) {
                throw new Exception('El usuario ya está en otro grupo.');
            }

            $group->users()->attach($user);

            return redirect()->back()->with('success', 'Usuario agregado al grupo exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al agregar usuario al grupo: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function removeUser(Request $request, Group $group)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $user = User::findOrFail($request->user_id);
        $group->users()->detach($user);

        return redirect()->back()->with('success', 'User removed from group successfully.');
    }
}
