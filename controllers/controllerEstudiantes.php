<?php
class MvcControllerEstudiantes
{
    public function ConsultarCursos()
    {
        $cue = new MvcModelEstudiantes();
        $cons = $cue->consultarCursos();

        if (isset($cons)) {
            foreach ($cons as $item) { 
                    echo "<option value=" . $item['id'] . ">" . $item['id'] . " " . $item['nombre'] ."</option>";
            }
        } else {
            echo "No se han encontrado cursos";
        }
    }

    public function ConsultarTutor($id)
    {
        $cue = new MvcModelEstudiantes();
        $cons = $cue->consultarCursosExp($id);
    
        foreach ($cons as $item) { 
            echo "Curso: " . $item['id'] . "<br><br><br>";

            echo "Tutor: " . $item['Tutor'] . "";
        
        } 
    }

    public function ConsultarEstudiantes($id)
    {
        $cue = new MvcModelEstudiantes();
        $cons = $cue->ConsultarEstudiantes($id);
    
        if (isset($cons)) {
            foreach ($cons as $item) { 
                echo "<div class='student'>".$item['id'].".".$item['nombre']."</div>";
            
            }
        }else{
            echo "<div class='student'>No se encontraron estudiantes</div>";
        } 
    }
}