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
    protected $htmlBuilder;
    public function __construct(Builder $htmlBuilder)
    {
        $this->htmlBuilder = $htmlBuilder;
    }
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
        if ($req->file('gambar') && $req->file('gambar')->isValid()) {
            $path = storage_path('app/public/uploads/profil/');
            $filename = $req->file('gambar')->hashName();
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            Image::make($req->file('gambar'))->resize(300, 200, function ($cons) {
                $cons->upsize();
                $cons->aspectRatio();
            })->save($path . $filename);
        }
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
        return redirect()->back();
    }
    public function show($id)
    {
        dd(User::findOrFail($id));
    }
    public function edit($id)
    {
        dd(User::findOrFail($id));
    }
    public function update($id)
    {
        dd(User::findOrFail($id));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user_detail = UserDetail::firstWhere('user_id', $user->id);
        $user_detail != null ? $user_detail->delete() : '';
        $user->delete();
        return redirect()->back();
    }
}
