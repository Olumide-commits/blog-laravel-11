<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(User $user)
    {
        $user->delete();

<<<<<<< HEAD
        return redirect()->route('user.index');

=======
        return redirect()->route('admin.user.index');
>>>>>>> origin/main
    }
}
