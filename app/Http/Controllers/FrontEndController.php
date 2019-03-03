<?php

namespace App\Http\Controllers;

use Auth;
use App\Project;
use App\Category;
use App\ProjectImage;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $project = Project::where('is_publish', 1)->orderBy('created_at', 'desc')->get();

        return view('index')
                ->with('projects', $project)
                ->with('images', ProjectImage::all())
                ->with('categories', Category::get());
    }
}
