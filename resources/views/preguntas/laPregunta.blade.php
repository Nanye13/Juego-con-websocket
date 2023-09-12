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
                    <div style="margin: 50px; text-align: center">
                        <h4 style="text-align: center">{{ $pregunta->pregunta }}</h4>
                        <a class="btn btn-success" href="{{ route('estatus', $pregunta->id) }}" >Siguiente</a>
    
                    </div>
                   

                    <fieldset class="border p-2" style="margin-bottom: 20px;margin: 80px">
                        <legend class="w-auto">Marcador</legend>
                            <div id="aqui">
                                <table class="table table-striped" >
                                    <thead>
                                        <th>Equipo</th>
                                    </thead>
                                   <tbody id="tabla">

                                   </tbody>
                                  </table>
                            </div>

                    </fieldset>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
    <script>
        //   Funcion para mostrar el boton cuando el organizador lee la pregunta
        var arreglo = [];

        window.onload = function() {
            Echo.channel('notificacion').listen('Notificar', (e) => {
                console.log(e);
                    $('#tabla').append(`
                   
                        <tr> 
                            <td>${e.notificacion} </td>
                        </tr>
                    
                    `)
              
            })

        }
    </script>


</x-app-layout>
