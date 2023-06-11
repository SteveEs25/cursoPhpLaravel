<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="p-6 text-gray-900 dark:text-gray-100 font-bold">
                    {{ __("Modificar un Proyecto") }}
                </div>

                
                <form action="{{ route('projects.update', ['id' => $project->id]) }}" method="POST" class="grid">
                    @csrf
                    
                        <label for="" class="mt-3">Nombre del Proyecto</label>
                        <input type="text" name="proyecto" style="width: 25%;" value="{{ $project->nombreProyecto }}">
                    
                        <label for="" class="mt-3">Nombre de la Fuente</label>
                        <input type="text" name="fuente" style="width: 25%;" value="{{ $project->fuenteFondos }}">
                    
                        <label for="" class="mt-3">Monto Planificado</label>
                        <input type="text" name="mPlanificado" style="width: 25%;" value="{{ $project->montoPlanificado }}">
                    
                        <label for="" class="mt-3">Monto Patrocinado</label>
                        <input type="text" name="mPatrocinado" style="width: 25%;" value="{{ $project->montoPatrocinado }}">
                    
                        <label for="" class="mt-3">Monto de los Fondos</label>
                        <input type="text" name="mFondos" style="width: 25%;" value="{{ $project->montoFondos }}">
                    

                    <button type="submit" class="mt-4" style="background-color: skyblue; padding: 6px; font-weight: bold; width: 25%;">Guardar</button>
                    
                    <a href="{{ route('projects.index') }}" class="mt-2 text-center" style="background-color: red; color: white; padding: 6px; font-weight: bold; width: 25%;">
                        Regresar
                    </a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
