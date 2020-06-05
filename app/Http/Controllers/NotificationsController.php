<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index()
    {
        return Notification::all();
    }

    public function show(Notification $notification)
    {

        return  response()->json($notification, 200);
    }

    public function save(Request $request)
    {
        $notification = Notification::create($request->all());

        return response()->json($notification, 201);
    }

    public function update(Request $request, Notification $notification)
    {
        $notification->update($request->all());

        return response()->json($notification, 200);
    }

    public function delete(Notification $notification)
    {
        $notification->delete();

        return response()->json(null, 204);
    }
}
