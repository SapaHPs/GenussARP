<?php


class MvcControllerReportes {
    

    public function Añadirreporte($cur, $idm, $id)
    {
        $cons = new ReporteModel();
        $clie=$cons->Añadirreporte($cur, $idm, $id);
            if (isset($clie)) {
                echo "<script>window.location.href = 'admin.php?action=pdf'</script>;";
               }
    }
  
}
?>
