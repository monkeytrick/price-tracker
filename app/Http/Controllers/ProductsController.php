<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Auth;

// View individual product
// View all products
// Display products on homepage
// Add product
// Delete product

// Need to get url and parse so that pic and other details can be saved as array before being sent to the view

class ProductsController extends Controller {
    function view_item(Request $request) {
        return('reached. Item is ' . $request->id);
    }
}



?>