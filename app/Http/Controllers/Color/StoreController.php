<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Color::firstOrCreate($data);

<<<<<<< HEAD
        return redirect()->route('color.index');
=======
        return redirect()->route('admin.color.index');
>>>>>>> origin/main
    }
}
