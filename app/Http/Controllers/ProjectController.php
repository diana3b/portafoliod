<?php

namespace App\Http\Controllers;


use App\Proyect;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
   
    public function index()
    {
        //
        $projects = Proyect::orderBy('id','DESC')->paginate(10);
        //
        return view('projects.index',compact('projects'));
    }
    
    public function show(Proyect $project)
    {
        //
        return view('projects.show',['project' => $project]);
    }

    public function create(){
        return view('projects.create',[
            'project' => new Proyect
        ]);
    }
    public function store(SaveProjectRequest $request){
        Proyect::create( $request->validated() );
        return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');

    }
    public function edit(Proyect $project)
    {
        //
        return view('projects.edit',['project' => $project]);

    }

    
    public function update(Proyect $project,SaveProjectRequest $request)
    {
        //
        $project->update($request->validated());
        return redirect()->route('projects.show',$project)->with('status','El proyecto fue actualizado con exito');
    }

    
    public function destroy(Proyect $project)
    {
        //
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado.');
    }
}
