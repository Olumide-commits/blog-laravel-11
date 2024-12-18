<?php

<<<<<<< HEAD

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UpdateController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        Log::info('Update Request Data: ', $request->all());

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'age' => 'required|integer',
            'address' => 'required|string|max:255',
            'gender' => 'required|integer',
            'role' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('users', 'public');
        }

        $user->update($data);

        Log::info('Updated User Data: ', $user->toArray());

        return redirect()->route('user.show', $user->id)->with('success', 'User updated successfully!');
=======
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return view('admin.user.show', compact('user'));
>>>>>>> origin/main
    }
}
