<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Preguntas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="body-card">
                    <h4 style="text-align: center">{{ $pregunta->pregunta }}</h4>
                    <a class="btn btn-success" href="{{ route('estatus', $pregunta->id) }}">Siguiente</a>


                    <fieldset>
                        <div>
                            <label for="">Puntuación</label>


                            <div id="aqui">

                            </div>

                        </div>
                    </fieldset>

                </div>

            </div>



        </div>
    </div>

    <script>
        //   Funcion para mostrar el boton cuando el organizador lee la pregunta
        var arreglo = [];

        window.onload = function() {
            Echo.channel('notificacion').listen('Notificar', (e) => {
                console.log(e);
                arreglo.push(e.notificacion)
                console.log(arreglo);
                document.getElementById('aqui').textContent = arreglo;

            })

        }
    </script>


</x-app-layout>
