<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

<<<<<<< HEAD
        if ($request->hasFile('preview_image')) {
            $data['preview_image'] = $request->file('preview_image')->store('products', 'public');
        }


=======
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
>>>>>>> origin/main

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];

        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate([
            'title' => $data['title']
        ], $data);

        $product->tags()->sync($tagsIds);
        $product->colors()->sync($colorsIds);

<<<<<<< HEAD
        return redirect()->route('product.index');
=======
        return redirect()->route('admin.product.index');
>>>>>>> origin/main
    }
}
