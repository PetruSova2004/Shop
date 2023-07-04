<?php

namespace App\Http\Services\Pub;

use App\Http\Controllers\Controller;
use App\Mail\Mailing;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class CommandService extends Controller
{
    public function mailUsers()
    {
        $currentDay = Carbon::now()->dayOfWeek;
        $users = User::all();
        if ($currentDay !== Carbon::SATURDAY) {
            die();
        } else {
            if (session('stopMailing') === null) {
                foreach ($users as $user) {
                    Mail::to($user->email)->send(new Mailing());
                }
                session(['stopMailing' => 'Stop']);
            } else {
                die();
            }
        }
    }

    public function reportOrder($path)
    {
        $time = Carbon::now();
        $currentDateTime = $time->format('Y-m-d');

        $orders = Order::whereDate('created_at', today())->get();
        $structuredOrders = json_encode($orders);

        if ($orders->isEmpty()) {
            die();
        } else {
            $path = $path . "/order-{$currentDateTime}.json";
            if (File::exists($path)) {
                File::delete($path);
                file_put_contents($path, $structuredOrders);
            } else {
                file_put_contents($path, $structuredOrders);
            }

        }

    }

}
