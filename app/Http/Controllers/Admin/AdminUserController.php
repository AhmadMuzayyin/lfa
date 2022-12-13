<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Facades\Datatables;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('backpage.admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('backpage.admin.users.index');
    }
    public function store(Request $req)
    {
        $req->validate([
            'Nama_Lengkap' => 'required|min:5',
            'username' => 'required|unique:users,username|min:7',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'gambar' => 'required|mimes:png,jpg|max:4050',
            'role' => 'required'
        ]);
        $filename = $req->file('gambar')->hashName();
        $user = new User();
        $user->fullname = $req->Nama_Lengkap;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->image = $filename;
        $user->status = false;
        $user->type = false;
        $user->role = $req->role;
        $user->save();
        if ($req->file('gambar') && $req->file('gambar')->isValid()) {
            $path = storage_path('app/public/uploads/profil/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            Image::make($req->file('gambar'))->resize(300, 200, function ($cons) {
                $cons->upsize();
                $cons->aspectRatio();
            })->save($path . $filename);
        }
        return redirect()->back();
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user->load('user_detail'), 200);
    }
    public function edit($id)
    {
        $user = User::firstWhere('id', $id);
        return view('backpage.admin.users.index', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        try {
            $request->validate([
                'Nama_Lengkap' => 'required',
                'username' => 'required|unique:users,username,' . $id,
                'email' => 'required|unique:users,email,' . $id,
                'role' => 'required'
            ]);
            if ($request->file('gambar')) {
                $path = url('uploads/profil/') . $request->file('gambar');
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $user->fullname = $request->Nama_Lengkap;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->save();
            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function updateDetail(Request $request, $id)
    {
        $user_detail = UserDetail::findOrFail($id);
        try {
            //code...
        } catch (\Exception $e) {
            $e->getMessage();
        }
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user_detail = UserDetail::firstWhere('user_id', $user->id);
        $user_detail != null ? $user_detail->delete() : '';
        $user->delete();
        return redirect()->back();
    }
    public function statusUpdate(Request $req)
    {
        $user = User::find($req->id);
        $status = $user->status == 1 ? 0 : 1;
        $user->status = $status;
        $user->save();
        return redirect()->back();
    }
}
