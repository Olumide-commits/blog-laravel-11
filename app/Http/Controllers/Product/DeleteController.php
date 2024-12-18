<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->tags()->detach();
        $product->colors()->detach();
        $product->delete();

<<<<<<< HEAD
        return redirect()->route('product.index');
=======
        return redirect()->route('admin.product.index');
>>>>>>> origin/main
    }
}
