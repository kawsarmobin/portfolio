<?php

namespace App\Http\Controllers\Admin\Project;

use Session;
use App\Project;
use App\ProjectImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ImagesController extends Controller
{
    public function index($id)
    {
        $images = ProjectImage::where('project_id', $id)->get();

        return view('admin.image.index')
                ->with('project_id', $id)
                ->with('images', $images)
                ->with('project', Project::find($id));
    }


    public function create($project_id)
    {
        return view('admin.image.create')
                ->with('project_id', $project_id)
                ->with('project', Project::find($project_id));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'project_id' => 'required|numeric',
            'image' => 'required|image',
        ],[
            'project_id.required' =>'The project field is required.',
        ]);

        $p_image = new ProjectImage();

        $p_image->project_id = $request->project_id;

        if ($image = $request->file('image')) {
            $new_name = time() . $image->getClientOriginalName();
            $image->move('public/uploads/projects', $new_name);
            $p_image->image = $new_name;

            $p_image->save();

            Session::flash('success', 'Successfully uploaded image.');
        }
        return redirect()->back();
    }


    public function destroy($id)
    {
        $image = ProjectImage::find($id);
        if ($image->delete()) {
            $image_path = public_path().'uploads/projects/'.$image->image;
            unlink($image_path);

            Session::flash('success','Delete Succesfull');
        }
        return redirect()->back();
    }
}
