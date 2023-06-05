<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\User;

use App\Models\Berita; // Update the import statement

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id()) {
            $beritas = Berita::all(); // Use the correct class name 'Berita'
            $role = Auth()->user()->role;

            if ($role == 'user') {
                return view('user.utama', compact('beritas'));
            } else if ($role == 'admin') {
                return view('admin.tampilan', compact('beritas'));
            } else {
                return redirect()->back();
            }
        }
    }


    public function post()
    {
        return view("post");
    }

    public function tambah()
    {
        return view("admin.tambah");
    }
    public function akun()
    {
        $users = user::select('id', 'name', 'email', 'password', 'role')->get();

        return view('admin.akun', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|min:5|max:100',
            'email'    => 'required|min:10|max:150|unique:users,email',
            'password' => 'required|min:8|max:30',
            'role'     => 'required|min:4|max:5'
        ]);

        $new_user = new User;
        $new_user->name     = $request->name;
        $new_user->email    = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->role     = $request->role;

        $new_user->save();

        return redirect("/akun")->with('status', 'User successfully added');
    }

    public function edit_page($id)
    {
        $user = user::find($id);

        return view('admin.edit_akun', compact('user'));
    }

    public function update_akun(Request $request, $id)
    {
        $user = user::find($id);
        $validated = $request->validate([
            'name'     => 'required|min:5|max:100',
            'email'    => 'required|min:10|',
            'role'     => 'required|min:4|max:5'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();


        $user->save();

        return redirect("/akun")->with('status', 'User berhasil diperbarui');
    }

    public function delete_post($id)
    {
        $user = user::find($id);
        $user->delete();

        return redirect('/akun')->with('status', "postingan berhasil dihapus");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store1(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
