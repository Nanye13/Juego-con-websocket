<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Equipo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('equipos.update', $equipo->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Equipos
                    </div>
                    <div class="card-body">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $equipo->nombre }}">
                        <label for="">Clave:</label>
                        <input type="text" class="form-control" id="clave" name="clave"
                            value="{{ $equipo->clave }}">
                        <br>
                        <button class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</x-app-layout>
