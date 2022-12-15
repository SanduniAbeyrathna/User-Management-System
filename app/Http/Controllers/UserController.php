<?php

namespace App\Http\Controllers;
use app\Models\UserManagement;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'email'];

    public function index()
    {
        $user_details = user::all();
        return view ('user_details.index')->with('user_details', $user_details);
    }

    public function create()
    {
        return view('user_details.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        user::create($input);
        return redirect('user_details')->with('flash_message', 'Contact Addedd!');
    }

    public function show($id)
    {
        $user_details = user::find($id);
        return view('user_details.show')->with('user_details', $user_details);
    }

    public function edit($id)
    {
        $user_details = user::find($id);
        return view('user_details.edit')->with('user_details', $user_details);
    }

    public function update(Request $request, $id)
    {
        $user_details = user::find($id);
        $input = $request->all();
        $user_details->update($input);
        return redirect('user_details')->with('flash_message', 'Contact Updated!');
    }

    public function destroy($id)
    {
        user::destroy($id);
        return redirect('user_details')->with('flash_message', 'Contact deleted!');
    }
}
