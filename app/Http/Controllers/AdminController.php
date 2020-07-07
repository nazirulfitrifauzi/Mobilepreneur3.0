<?php

namespace App\Http\Controllers;

use App\Models\Peribadi;
use App\User;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function semak(Request $request)
    {
        $input = $request->get('input');
        $data = User::where('ic_no', $input)
            ->orWhere('email', $input)
            ->first();

        if ($data == null) {
            Session::flash('error', 'No Kad Pengenalan @ emel yang dicari tidak wujud di dalam sistem');
            return view('admin', compact('data', 'input'));
        } else {
            $data2 = Peribadi::where('user_id', $data->id)->first();
            return view('admin', compact('data', 'data2', 'input'));
        }
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $ic = $request->get('ic_no');
        $email = $request->get('email');
        $birthdate = $request->get('birthdate');
        $age = $request->get('age');

        User::where('id', $id)->update(['name' => $name, 'ic_no' => $ic, 'email' => $email]);
        Peribadi::where('user_id', $id)->update(['birthdate' => $birthdate, 'age' => $age]);

        Session::flash('success');
        return redirect('admin');
    }

    public function deleteAcc($id)
    {
        User::where('id', $id)->delete();
        Session::flash('success', 'Akaun telah dipadam');
    }
}
