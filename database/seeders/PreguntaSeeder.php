<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pregunta::create(['pregunta' => '¿A qué reino de la naturaleza pertenecen los hongos? 
        ', 'respuestas' => 'Fungi', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Quién es el autor de la teoría “El origen de las especies”?
        ', 'respuestas' => 'Darwin', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la fórmula para calcular velocidad? 
        ', 'respuestas' => 'Distancia/Tiempo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué ley señala “la energía no se crea ni se destruye, solo se transforma”? 
        ', 'respuestas' => '1° Ley de la Termodinámica', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es un tipo de triángulo según la longitud de sus lados:
        ', 'respuestas' => 'Isósceles', 'estatus' => '1']);

        Pregunta::create(['pregunta' => '¿Cuál es el Océano más pequeño del planeta?
        ', 'respuestas' => 'Ártico', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuáles son los estados de la materia?
        ', 'respuestas' => 'Sólido, Líquido, Plasma y Gaseoso', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos anillos tiene Júpiter?
        ', 'respuestas' => '4', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es el planeta más cercano al sol?
        ', 'respuestas' => 'Mercurio', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la capital de Guerrero?
        ', 'respuestas' => 'Chilpancingo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Estado de la República con menos municipios:
        ', 'respuestas' => 'Baja California', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué tratado se reconoce la Independencia de México?
        ', 'respuestas' => 'Tratado de Córdoba', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué países integraron la Triple Alianza?
        ', 'respuestas' => 'Alemania, Italia, Austria Hungría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos pares de costillas tiene el ser humano?', 'respuestas' => '12', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué año inició la Primera Guerra Mundial?
        ', 'respuestas' => '1914', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se denominó el conflicto ideológico entre EUA Y URSS?
        ', 'respuestas' => 'Guerra Fría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se llamó el creador de las leyes de la herencia?
        ', 'respuestas' => 'Gregor Mendel ', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Nombre del último presidente militar de México:
        ', 'respuestas' => 'Manuel Ávila Camacho', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Elemento de la tabla periódica más electronegativo:
        ', 'respuestas' => 'Flúor', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es una función de los huesos:
        ', 'respuestas' => 'Hematopoyesis', 'estatus' => '1']);

        // 20
        Pregunta::create(['pregunta' => '¿A qué reino de la naturaleza pertenecen los hongos? 
        ', 'respuestas' => 'Fungi', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Quién es el autor de la teoría “El origen de las especies”?
        ', 'respuestas' => 'Darwin', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la fórmula para calcular velocidad? 
        ', 'respuestas' => 'Distancia/Tiempo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué ley señala “la energía no se crea ni se destruye, solo se transforma”? 
        ', 'respuestas' => '1° Ley de la Termodinámica', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es un tipo de triángulo según la longitud de sus lados:
        ', 'respuestas' => 'Isósceles', 'estatus' => '1']);

        Pregunta::create(['pregunta' => '¿Cuál es el Océano más pequeño del planeta?
        ', 'respuestas' => 'Ártico', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuáles son los estados de la materia?
        ', 'respuestas' => 'Sólido, Líquido, Plasma y Gaseoso', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos anillos tiene Júpiter?
        ', 'respuestas' => '4', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es el planeta más cercano al sol?
        ', 'respuestas' => 'Mercurio', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la capital de Guerrero?
        ', 'respuestas' => 'Chilpancingo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Estado de la República con menos municipios:
        ', 'respuestas' => 'Baja California', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué tratado se reconoce la Independencia de México?
        ', 'respuestas' => 'Tratado de Córdoba', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué países integraron la Triple Alianza?
        ', 'respuestas' => 'Alemania, Italia, Austria Hungría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos pares de costillas tiene el ser humano?', 'respuestas' => '12', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué año inició la Primera Guerra Mundial?
        ', 'respuestas' => '1914', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se denominó el conflicto ideológico entre EUA Y URSS?
        ', 'respuestas' => 'Guerra Fría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se llamó el creador de las leyes de la herencia?
        ', 'respuestas' => 'Gregor Mendel ', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Nombre del último presidente militar de México:
        ', 'respuestas' => 'Manuel Ávila Camacho', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Elemento de la tabla periódica más electronegativo:
        ', 'respuestas' => 'Flúor', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es una función de los huesos:
        ', 'respuestas' => 'Hematopoyesis', 'estatus' => '1']);
        // 20
        Pregunta::create(['pregunta' => '¿A qué reino de la naturaleza pertenecen los hongos? 
        ', 'respuestas' => 'Fungi', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Quién es el autor de la teoría “El origen de las especies”?
        ', 'respuestas' => 'Darwin', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la fórmula para calcular velocidad? 
        ', 'respuestas' => 'Distancia/Tiempo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué ley señala “la energía no se crea ni se destruye, solo se transforma”? 
        ', 'respuestas' => '1° Ley de la Termodinámica', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es un tipo de triángulo según la longitud de sus lados:
        ', 'respuestas' => 'Isósceles', 'estatus' => '1']);

        Pregunta::create(['pregunta' => '¿Cuál es el Océano más pequeño del planeta?
        ', 'respuestas' => 'Ártico', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuáles son los estados de la materia?
        ', 'respuestas' => 'Sólido, Líquido, Plasma y Gaseoso', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos anillos tiene Júpiter?
        ', 'respuestas' => '4', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es el planeta más cercano al sol?
        ', 'respuestas' => 'Mercurio', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la capital de Guerrero?
        ', 'respuestas' => 'Chilpancingo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Estado de la República con menos municipios:
        ', 'respuestas' => 'Baja California', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué tratado se reconoce la Independencia de México?
        ', 'respuestas' => 'Tratado de Córdoba', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué países integraron la Triple Alianza?
        ', 'respuestas' => 'Alemania, Italia, Austria Hungría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos pares de costillas tiene el ser humano?', 'respuestas' => '12', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué año inició la Primera Guerra Mundial?
        ', 'respuestas' => '1914', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se denominó el conflicto ideológico entre EUA Y URSS?
        ', 'respuestas' => 'Guerra Fría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se llamó el creador de las leyes de la herencia?
        ', 'respuestas' => 'Gregor Mendel ', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Nombre del último presidente militar de México:
        ', 'respuestas' => 'Manuel Ávila Camacho', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Elemento de la tabla periódica más electronegativo:
        ', 'respuestas' => 'Flúor', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es una función de los huesos:
        ', 'respuestas' => 'Hematopoyesis', 'estatus' => '1']);
        // 20
        Pregunta::create(['pregunta' => '¿A qué reino de la naturaleza pertenecen los hongos? 
        ', 'respuestas' => 'Fungi', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Quién es el autor de la teoría “El origen de las especies”?
        ', 'respuestas' => 'Darwin', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la fórmula para calcular velocidad? 
        ', 'respuestas' => 'Distancia/Tiempo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué ley señala “la energía no se crea ni se destruye, solo se transforma”? 
        ', 'respuestas' => '1° Ley de la Termodinámica', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es un tipo de triángulo según la longitud de sus lados:
        ', 'respuestas' => 'Isósceles', 'estatus' => '1']);

        Pregunta::create(['pregunta' => '¿Cuál es el Océano más pequeño del planeta?
        ', 'respuestas' => 'Ártico', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuáles son los estados de la materia?
        ', 'respuestas' => 'Sólido, Líquido, Plasma y Gaseoso', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos anillos tiene Júpiter?
        ', 'respuestas' => '4', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es el planeta más cercano al sol?
        ', 'respuestas' => 'Mercurio', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la capital de Guerrero?
        ', 'respuestas' => 'Chilpancingo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Estado de la República con menos municipios:
        ', 'respuestas' => 'Baja California', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué tratado se reconoce la Independencia de México?
        ', 'respuestas' => 'Tratado de Córdoba', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué países integraron la Triple Alianza?
        ', 'respuestas' => 'Alemania, Italia, Austria Hungría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos pares de costillas tiene el ser humano?', 'respuestas' => '12', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué año inició la Primera Guerra Mundial?
        ', 'respuestas' => '1914', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se denominó el conflicto ideológico entre EUA Y URSS?
        ', 'respuestas' => 'Guerra Fría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se llamó el creador de las leyes de la herencia?
        ', 'respuestas' => 'Gregor Mendel ', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Nombre del último presidente militar de México:
        ', 'respuestas' => 'Manuel Ávila Camacho', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Elemento de la tabla periódica más electronegativo:
        ', 'respuestas' => 'Flúor', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es una función de los huesos:
        ', 'respuestas' => 'Hematopoyesis', 'estatus' => '1']);
        // 20
        Pregunta::create(['pregunta' => '¿A qué reino de la naturaleza pertenecen los hongos? 
        ', 'respuestas' => 'Fungi', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Quién es el autor de la teoría “El origen de las especies”?
        ', 'respuestas' => 'Darwin', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la fórmula para calcular velocidad? 
        ', 'respuestas' => 'Distancia/Tiempo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué ley señala “la energía no se crea ni se destruye, solo se transforma”? 
        ', 'respuestas' => '1° Ley de la Termodinámica', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es un tipo de triángulo según la longitud de sus lados:
        ', 'respuestas' => 'Isósceles', 'estatus' => '1']);

        Pregunta::create(['pregunta' => '¿Cuál es el Océano más pequeño del planeta?
        ', 'respuestas' => 'Ártico', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuáles son los estados de la materia?
        ', 'respuestas' => 'Sólido, Líquido, Plasma y Gaseoso', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos anillos tiene Júpiter?
        ', 'respuestas' => '4', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es el planeta más cercano al sol?
        ', 'respuestas' => 'Mercurio', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuál es la capital de Guerrero?
        ', 'respuestas' => 'Chilpancingo', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Estado de la República con menos municipios:
        ', 'respuestas' => 'Baja California', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué tratado se reconoce la Independencia de México?
        ', 'respuestas' => 'Tratado de Córdoba', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Qué países integraron la Triple Alianza?
        ', 'respuestas' => 'Alemania, Italia, Austria Hungría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cuántos pares de costillas tiene el ser humano?', 'respuestas' => '12', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿En qué año inició la Primera Guerra Mundial?
        ', 'respuestas' => '1914', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se denominó el conflicto ideológico entre EUA Y URSS?
        ', 'respuestas' => 'Guerra Fría', 'estatus' => '1']);
        Pregunta::create(['pregunta' => '¿Cómo se llamó el creador de las leyes de la herencia?
        ', 'respuestas' => 'Gregor Mendel ', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Nombre del último presidente militar de México:
        ', 'respuestas' => 'Manuel Ávila Camacho', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Elemento de la tabla periódica más electronegativo:
        ', 'respuestas' => 'Flúor', 'estatus' => '1']);
        Pregunta::create(['pregunta' => 'Es una función de los huesos:
        ', 'respuestas' => 'Hematopoyesis', 'estatus' => '1']);
    }
}
