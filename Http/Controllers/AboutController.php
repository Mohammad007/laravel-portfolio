// app/Http/Controllers/AboutController.php - Controller for About Us
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the About Us page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('about.index');
    }
}