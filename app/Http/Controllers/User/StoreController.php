<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        // Check if an image is uploaded and handle the upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('users', 'public');
        }

        $user = User::firstOrCreate(
            [
                'email' => $data['email']
            ],
            $data
        );

        // If you want to update the user with the image path if they exist
        if (!$user->wasRecentlyCreated && isset($data['image'])) {
            $user->image = $data['image'];
            $user->save();
        }

        return redirect()->route('user.index')->with('success', 'User created/updated successfully!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }
}
