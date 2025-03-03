<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function view($id)
    {
        $user = User::find($id); 
        return view('view', compact('user'));
    }

    public function admin($id)
    {
        $user = User::find($id); 
        return view('admin', compact('user'));
    }
}
