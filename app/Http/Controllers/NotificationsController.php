<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{

    /**
     * Get all notifications
     * @return [Notifications] notifications
     */
    public function index()
    {
        return Notification::all();
    }

    /**
     * Get a notification
     * @urlParam notification id required The ID of the notification
     *
     * @return [Notification] notification
     */
    public function show(Notification $notification)
    {

        return  response()->json($notification, 200);
    }

    public function save(Request $request)
    {
        $notification = Notification::create($request->all());

        return response()->json($notification, 201);
    }

    /**
     * Update a notification
     * @urlParam notification id required The ID of the notification
     *
     * @return [Notification] notification
     */
    public function update(Request $request, Notification $notification)
    {
        $notification->update($request->all());

        return response()->json($notification, 200);
    }

    /**
     * Delete a notification
     * @urlParam notification id required The ID of the notification
     */
    public function delete(Notification $notification)
    {
        $notification->delete();

        return response()->json(null, 204);
    }
}
