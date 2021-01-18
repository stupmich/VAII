<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();

        $grid = new Datagrid($users, $request->get('f', []));
        $grid->setColumn('name', 'Username')->setColumn('email', 'Email address')->setActionColumn([
            'wrapper' => function ($value, $row) {
                return '<a href="' . route('user.delete', $row->id) . '" title="Delete" data-method="DELETE" class="btn btn-sm btn-danger" data-confirm="Are you sure?" style="width: 100%">Delete</a>';
            }
        ]);

        return view('user.users', [
            'grid' => $grid
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
            'action' => route('user.store'),
            'method' => 'post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create($request->all());
        $user->save();
        $request->session()->flash('success', 'User was created successfully.');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (Auth::user()) {
            return view('/user/editProfile')->with('user', auth()->user());
        } else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->about = $request['about'];
        $user->faction = $request['faction'];
        $user->realm = $request['realm'];
        $user->save();


        $request->session()->flash('success', 'Profile updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Request $request,User $user)
    {
        $user->delete();
        $request->session()->flash('success', 'User was removed successfully.');
        return redirect()->route('user.index');
    }

    public function profile()
    {
        return view('/user/profile', array('user' => Auth::user()));
    }
}
