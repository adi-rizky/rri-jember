<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.pages.datauser', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('admin.pages.adminedit', compact('user'));
    }
    public function editUser()
    {
        $user = Auth::user();
        return view('rri.edituser', compact('user')); // Pastikan path view benar
    }

    public function update(Request $request)
    {
        
        $user = Auth::user();
    
        if (!$user) {
        return redirect()->route('user.edit')->with('error', 'User not found.');
        }
    
           
        $request->validate([
            'name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'birth_date' => 'nullable|date',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        if ($request->filled('address')) {
            $user->address = $request->input('address');
        }
        if ($request->filled('phone')) {
            $user->phone = $request->input('phone');
        }
        if ($request->filled('birth_date')) {
            $user->birth_date = $request->input('birth_date');
        }
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
}
}