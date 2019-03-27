<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectCategory;
use Image;

class ProjectController extends Controller
{
    public function getLatest()
    {
        $latests = Project::latest()->limit(4)->get();

        return response()->json($latests, 200);
    }

    public function getPopular()
    {
        $popular = Project::latest()->limit(3)->get();

        return response()->json($popular, 200);
    }

    public function getHappyEndings()
    {
        $happy = Project::latest()->limit(2)->get();

        return response()->json($happy, 200);
    }

    public function getCategs()
    {
       $categs = ProjectCategory::orderBy('category')->get();

       return response()->json($categs, 200);
    }

    // public function getCats()
    // {
    //     $cats = ProjectCategory::all();

    //     return response()->json($cats, 200);
    // }

    public function createFundRaising(Request $request)
    {
        // validate inputs
        $this->validate($request, [
            'title' => 'required|min:5|max:120',
            'details' => 'required|min:20|max:900',
            'categ' => 'required',
            'amount' => 'required|numeric|between:1,100000000000',
            'expiry' => 'required',
            'benef' => 'required|max:120',
            'file' => 'required|mimes:jpeg,jpg,bmp,png,gif,pdf,wav,avi,mpeg,mp4'
        ]); 
        
        $file = $request->file;
        $OriginalName = $file->getClientOriginalName();
        $exp_name = explode('.', $OriginalName); 
        $ext = $file->getClientOriginalExtension();
        $rand = mt_rand(010000, 999999);

        if(strlen($exp_name[0]) > 3){
            $subname = substr($exp_name[0], 0, 3);
        }else{
            $subname = $exp_name[0];
        }

        $filename = $subname.$rand.".".$ext;

        //store file in app public folder
        $file_loc = public_path('/images/proj/'.$filename);
        $thumbnail_loc = public_path('/images/proj-thumb/'.$filename);

        //  store normal images
        if(in_array($ext, ['jpeg', 'jpg', 'png', 'gif', 'pdf','wav','avi','mpeg','mp4'])){
            // $upload = Image::make($file)->resize(600, 450, function($constraint){
            //     $constraint->aspectRatio();
            // });
            $upload = Image::make($file)->resize(650, 370);
            

            $upload->sharpen(7)->save($file_loc);

            //store thumbnail
            Image::make($file)->resize(250, 200)->save($thumbnail_loc);
        }

        $project = new Project;
        $project->user_id = 1;
        $project->project_type_id = 1;
        $project->title = $request->title;
        $project->body = $request->details;
        $project->project_category_id = intval($request->categ);
        $project->benef = $request->benef;
        $project->campaign_goal = $request->amount;
        $project->raised = 0;
        $project->expiry = $request->expiry;
        $project->file = $filename;
        
        $project->save();

        return response()->json($project, 200);
    }

    public function getFundRaisingProject($id)
    {
        $project = Project::findOrFail($id);

        return response()->json($project, 200);
    }
    
}
