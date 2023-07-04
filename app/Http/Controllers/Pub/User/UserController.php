<?php

namespace App\Http\Controllers\Pub\User;

use App\Facades\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pub\User\AccountDetailsRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $orders = UserService::getUserOrders();
        $countries = DB::table('country')->get();

        return view('Pub.my-account', compact('orders', 'countries'));
    }

    public function userDetails(AccountDetailsRequest $request)
    {
        $request->validated();
//        dd($request);
        $user = Auth::user();
        $user_address = DB::table('country')->where('id', $request->country)->first();

        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->address = $user_address->name;

        $user->save();

        return redirect()->back()->with('success', 'Details has been changed successfully');

    }


}
