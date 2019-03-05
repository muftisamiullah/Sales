<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Product;
/**
 * 
 */
class ProductComposer
{
	
	function __construct()
	{
		$this->products = Product::all();
	}
	public function compose(View $view)
    {
        $view->with('products', ($this->products));
    }
}