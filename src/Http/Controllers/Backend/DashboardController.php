<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // Dashboard
    public function index()
    {
        return view('backend.dashboard.index');
    }

    // Elements
    public function elements()
    {
        return view('backend.dashboard.elements');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function imageUpload(Request $request)
    {
        $mainImage = $request->file('file');
        $filename = str_replace(' ', '-', time() . '--' . $mainImage->getClientOriginalName());
        $mainImage->move('tinymce_upload/', $filename);
        return json_encode(["location" => env('APP_URL') . '/tinymce_upload/' . $filename]);
    }
}
