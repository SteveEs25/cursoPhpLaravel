<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Proyectos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">                
                <div class="grid grid-cols-1">
                    @if(session('success'))
                        <script>
                            window.addEventListener('DOMContentLoaded', (event) => {
                                alert('{{ session('success') }}');
                            });
                        </script>
                    @endif
                    <div class="mb-6 inline-flex">
                        <div class="inline-flex mr-6">
                            <a href="{{ route('projects.create') }}" style="background-color: green; padding: 6px; font-weight: bold; color: white;">
                                <span class="text-xl">+</span> Nuevo Proyecto
                            </a>
                        </div>

                        <div class="inline-flex ml-4">
                            <a href="{{ route('projects.pdf') }}" style="background-color: red; padding: 6px; font-weight: bold;">
                                <svg class="inline-flex" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z"/></svg>
                                Generar PDF
                            </a>
                        </div>
                    </div>

                    <table class="table-auto border border-black w-full">
                        <thead style="background-color: #09315e; color: #ffffff">
                            <tr class="text-lg font-extrabold">
                                <th class="p-3 border border-black">Nombre del Proyecto</th>
                                <th class="p-3 border border-black">Fuente</th>
                                <th class="p-3 border border-black">Monto Planificado</th>
                                <th class="p-3 border border-black">Monto Patrocinado</th>
                                <th class="p-3 border border-black">Monto Fondos</th>
                                <th class="p-3 border border-black">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr class="text-center">
                                    <td class="p-3 border border-black">{{ $project->nombreProyecto }}</td>
                                    <td class="p-3 border border-black">{{ $project->fuenteFondos }}</td>
                                    <td class="p-3 border border-black">${{ $project->montoPlanificado }}</td>
                                    <td class="p-3 border border-black">${{ $project->montoPatrocinado }}</td>
                                    <td class="p-3 border border-black">${{ $project->montoFondos }}</td>
                                    <td class="p-3 border border-black">
                                        <a href="{{ route('projects.edit', ['id' => $project->id]) }}" class="inline-flex">
                                            <svg style="color: skyblue" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
                                        </a>
                                        <a href="{{ route('projects.destroy', ['id' => $project->id]) }}" class="inline-flex ml-3" onclick="return confirm('¿Estás seguro de eliminar el proyecto?');" >
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
