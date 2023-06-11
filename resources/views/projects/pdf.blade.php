<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gobierno de El Salvador') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="mb-6">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
                Banco Central de Reserva de El Salvador
            </h1>
        </div>
        
        <div class="mb-6">
            <h3>
                San Salvador, {{ $fecha_formateada }}
            </h3>
        </div>

        <div class="block">
            @foreach ($projects as $project)
                <div>
                    <label for="">No. {{ $project->id }}</label>
                </div>
                <div>
                    <label for="">
                        <span class="font-semibold">Nombre del Proyecto:</span> {{ $project->nombreProyecto }}
                    </label>
                </div>
                <div>
                    <label for="">
                        <span class="font-semibold">Fuente de los Fondos:</span> {{ $project->fuenteFondos }}
                    </label>
                </div>
                <div>
                    <label for="">
                        <span class="font-semibold">Monto Planificdo:</span> ${{ $project->montoPlanificado }}
                    </label>
                </div>
                <div>
                    <label for="">
                        <span class="font-semibold">Monto Patrocinado:</span> ${{ $project->montoPatrocinado }}
                    </label>
                </div>
                <div class="mb-6">
                    <label for="">
                        <span class="font-semibold">Monto de los Fondos:</span> ${{ $project->montoFondos }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
