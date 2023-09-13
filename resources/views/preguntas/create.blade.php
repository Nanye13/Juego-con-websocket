<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Preguntas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{route('preguntas.store')}}" method="post">
                @csrf
            <div class="card" >
                <div class="card-header">
                    Pregunta
                </div>
                <div class="card-body">
                    <label for="">Pregunta:</label>
                    <input type="text" class="form-control" id="pregunta" name="pregunta">
                    <label for="">Respuesta:</label>
                    <input type="text" class="form-control" id="respuesta" name="respuesta">
                    <br>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</x-app-layout>
