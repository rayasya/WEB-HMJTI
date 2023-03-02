<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class AdminController extends Controller
{
  public function index()
  {
    $data = User::All();
    // dd($data);
    return view('admin.pages.admin.index', compact('data'));
  }
  public function create()
  {
    return view('admin.pages.admin.create');
  }
  //view edit
  public function edit($id)
  {
    $data = User::find($id);
    if (!$data) return view('error-404');

    return view('admin.pages.admin.edit', compact('data'));
  }
  //store admin
  public function store(Request $request)
  {
    //validasi form
    // dd($request);
    $this->validate($request, [
      'name' => 'required',
      'username' => 'required',
      'email' => 'required',
      'foto' => 'required',
      'role' => 'required',
    ]);

    if($request->role == 'admin')$sandi = 'admin12345';
    else $sandi = 'user12345';
    //store admin
    $admin = new User();
    $admin->name = $request->name;
    $admin->username = $request->username;
    $admin->email = $request->email;
    $admin->password =  Hash::make($sandi);
    $admin->role = $request->role;

    //store foto
    $imagePath = "";
    if ($request->hasFile('foto')) {
      $image = $request->foto;
      $imageName = uniqid() . time() . $image->getClientOriginalName();
      $image->move('foto/', $imageName);
      $imagePath = 'foto/' . $imageName;
    } else {
        $imagePath = 'foto/' . public_path('img/logo.png');
    }
    $admin->foto_user = $imagePath;

    $admin->save();

    return redirect()->route('list.user');
  }
  //edit admin
  public function update(Request $request, $id)
  {
    //validasi form
    // dd($request);

    $this->validate($request, [
        'name' => 'required',
        'username' => 'required',
        'email' => 'required',
        'role' => 'required',
    ]);

    //update admin
    $admin = User::find($id);
    $admin->name = $request->name;
    $admin->username = $request->username;
    $admin->password = Hash::make($request->password);
    $admin->email = $request->email;
    $admin->role = $request->role;
    //update foto
    if (!$request->hasFile('foto')) {
        $admin->foto_user = $admin->foto_user;
    }else{
        if (file_exists($admin->foto_user)) {
            unlink($admin->foto_user);
          }
          $image = $request->foto;
          $imageName = uniqid() . time() . $image->getClientOriginalName();
          $image->move('foto/', $imageName);
          $imagePath = 'foto/' . $imageName;
          $admin->foto_user = 'foto/' . $imageName;
    }


    $admin->save();

    return redirect()->route('list.user');
  }
//delete admin
  public function delete($id)
  {
    $user = User::where('id_users', $id)->first();
    if (file_exists($user->foto)) {
      unlink($user->foto);
    }
    $user->delete();
    return redirect()->route('list.user');
  }




    public function editProfile($id)
    {
    $data = User::find($id);
    if (!$data) return view('error-404');

    return view('admin.pages.editProfile.index', compact('data'));
    }


    public function updateProfile(Request $request, $id)
    {
        // dd($request);
      //validasi form
      // dd($request->password);

      $isPasswordExist = false;
      $this->validate($request, [
          'name' => 'required',
          'username' => 'required',
          'email' => 'required',
      ]);

      if($request->password){
          $this->validate($request, [
            'password' => 'required|required_with:password|confirmed',
            'password_confirmation' => 'required',
            ]);
            $isPasswordExist = true;
      }


      //update admin
      $admin = User::find($id);
      $admin->name = $request->name;
      $admin->username = $request->username;
      $admin->password = $isPasswordExist? Hash::make($request->password) :  $admin->password;
      $admin->email = $request->email;
      //update foto
      if ($request->hasFile('foto')) {
        if (file_exists($admin->foto_user)) {
            // dd($admin->foto_user);
          unlink($admin->foto_user);
        }
        $image = $request->foto;
        $imageName = uniqid() .  time() . $image->getClientOriginalName();
        $image->move('foto/', $imageName);
        $imagePath = 'foto/' . $imageName;
        if($request->hasFile('foto')){
            $admin->foto_user = $admin->foto_user;
        }else{
            $admin->foto_user = 'foto/' . $imageName;
        }
      }

      $admin->save();

      return redirect()->back();
    }
    public function resetPassword($id)
    {
        // dd($id);
        $user = User::find($id);
        if($user->role == 'admin'){
            $sandi = 'admin12345';
        }else{
            $sandi = 'user12345';
        }
        $user->password = Hash::make($sandi);
        $user->save();
        return redirect()->back();
    }

}
