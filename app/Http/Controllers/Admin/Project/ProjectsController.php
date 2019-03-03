<?php

namespace App\Http\Controllers\Admin\Project;

use Auth;
use Session;
use App\Project;
use App\Category;
use App\ProjectImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{

    public function index()
    {
        return view('admin.project.index')
                ->with('projects', Project::latest()->get())
                ->with('categories', Category::all());
    }


    public function create()
    {
        return view('admin.project.create')
                ->with('categories', Category::all());
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required|min:3|max:50',
            'technologies_use' => 'required|min:3|max:191',
            'sort_desc' => 'required|min:3|max:500',
            'is_publish' => 'required',
        ]);

        $project = new Project();

        $project->category_id = $request->category_id;
        $project->title = $request->title;
        $project->slug = str_slug($request->title);
        $project->technologies_use = $request->technologies_use;
        $project->url_1 = $request->url_1;
        if ($request->url_2) {
            $project->url_2 = $request->url_2;
        }else{
            $project->url_2 = '';
        }
        $project->sort_desc = $request->sort_desc;
        $project->is_publish = $request->is_publish;

        if ($project->save()) {
            Session::flash('success', 'Successfully created project.');
        }
        return redirect()->back();
    }


    public function show($id)
    {
        $images = ProjectImage::where('project_id',$id)->get();

        return view('admin.project.show')
        ->with('project', Project::find($id))
        ->with('images', $images);
    }


    public function edit($id)
    {
        return view('admin.project.edit')
                ->with('project', Project::find($id))
                ->with('categories', Category::all());
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required|min:3|max:50',
            'technologies_use' => 'required|min:3|max:191',
            'sort_desc' => 'required|min:3|max:500',
            'is_publish' => 'required',
        ]);

        $project = Project::find($id);

        $project->category_id = $request->category_id;
        $project->title = $request->title;
        $project->slug = str_slug($request->title);
        $project->technologies_use = $request->technologies_use;
        $project->url_1 = $request->url_1;
        $project->url_2 = $request->url_2;
        $project->sort_desc = $request->sort_desc;
        $project->is_publish = $request->is_publish;

        if ($project->save()) {
            Session::flash('success', 'Successfully updated project.');
        }
        return redirect()->route('project.index');
    }


    public function destroy($id)
    {
       $project = Project::find($id);

        /**
         * Delete all images according to this project id
         */
        $images = ProjectImage::where('project_id', $id)->get();

        /**
         * Start deleting image
         */
        foreach ($images as $image) {
            //deleting images from file
            $image_path = 'public/uploads/projects/'.$image->image;
            unlink($image_path);

            $image->delete();
        }

        /**
         * End delete image
         */
        if ($project->delete()) {
            Session::flash('success', 'Successfully deleted project.');
        }
        return redirect()->route('project.index');
    }


    public function publish($id)
    {
        $project = Project::find($id);

        $project->is_publish = Project::PUBLISHED;

        if ($project->save()) {
            Session::flash('success', 'Successfully published project.');
        }
        return redirect()->route('project.index');
    }


    public function unpublish($id)
    {
        $project = Project::find($id);

        $project->is_publish = Project::UNPUBLISHED;

        if ($project->save()) {
            Session::flash('success', 'Successfully unpublished project.');
        }
        return redirect()->route('project.index');
    }
}
