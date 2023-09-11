<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Preguntas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <table class="table table-bordered">
                @php
                    //variable númerica n1 para mostrar en la tabla
                    $n = 1;
                    //variable x para mostrar las filas de la tabla
                    $x = 1;
                    //variable y para mostrar las columnas de la tabla
                    $y = 1;
                    $contador = 0;
                @endphp

                @for ($x; $x <= 10; $x++)
                    <tr>
                        @for ($y = 1; $y <= 10; $y++)
                        @if ($preguntas[$contador]->estatus == 0)
                        <td style="background-color: blueviolet;width: 160px; height: 35px; text-align: center;"><a href="{{ route('laPregunta', $preguntas[$n]->id) }}" style="color: white; font-weight: bold">{{ $n }}</a></td>
                            
                        @else
                        <td style="width: 160px; height: 35px;text-align: center"><a href="{{ route('laPregunta', $preguntas[$contador]->id) }}">{{ $n }}</a></td>
                            
                        @endif
                            @php
                                //asignar un contador que almacene el número y lo incremente en 1
                                $n = $n + 1;
                                 $contador = $contador + 1;
                            @endphp
                        @endfor
                    </tr>
                @endfor
            </table>



        </div>
    </div>
</x-app-layout>
