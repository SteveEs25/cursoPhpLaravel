<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function index(): Renderable
    {
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $project = Project::create([
            'nombreProyecto' => $request->input('proyecto'),
            'fuenteFondos' => $request->input('fuente'),
            'montoPlanificado' => $request->input('mPlanificado'),
            'montoPatrocinado' => $request->input('mPatrocinado'),
            'montoFondos' => $request->input('mFondos'),
        ]);

        if ($project) {
            return Redirect::route('projects.index')->with('success', 'Proyecto almacenado correctamente');;
        }

    }

    public function edit($id): View
    {
        $project = Project::findOrFail($id);
        
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $project = Project::findOrFail($id);
        
        $project->nombreProyecto = $request->input('proyecto');
        $project->fuenteFondos = $request->input('fuente');
        $project->montoPlanificado = $request->input('mPlanificado');
        $project->montoPatrocinado = $request->input('mPatrocinado');
        $project->montoFondos = $request->input('mFondos');

        $project->save();

        return Redirect::route('projects.index')->with('success', 'Los datos fueron actualizados');
    }

    public function destroy($id): RedirectResponse
    {
        $project = Project::findOrFail($id);
        
        $project->delete();

        return Redirect::route('projects.index')->with('success', 'El proyecto fue eliminado');
    }

    public function getPDF()
    {
        $projects = Project::get();

        setlocale(LC_TIME, 'es_ES');
        $fecha = date('j \d\e F \d\e\l Y');
        $fecha_formateada = strftime($fecha);

        $pdf = PDF::loadView('projects.pdf', compact('projects', 'fecha_formateada'));
        return $pdf->stream('prueba.pdf');
    }
}
