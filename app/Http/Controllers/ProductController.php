<?php

namespace App\Http\Controllers;

use PDF;

class ProductController extends Controller
{
    public function htmltopdfview(Request $request)
    {
        $products = Products::all();

        view()->share('products', $products);

        if ($request->has('download')) {
            $pdf = PDF::loadview('htmltopdfview');
            return $pdf->download('htmltopdfview');
        } //end of the if condition

        return view('htmltopdfview');
    } //end of the htmltopdfview method
}