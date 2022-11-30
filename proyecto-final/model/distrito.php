<?php
require_once ('../php/modelDB.php');

class distrito extends modeloCredencialesBD{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function cons_dist($provincia){
        parent::__construct();
        $instruccion = "CALL sp_distrito('B','".$provincia."')";
        $consulta = $this->_db->query($instruccion);

        $json = array();

        while($row = mysqli_fetch_array($consulta)) {
            $json[] = array(
                'id_distrito' => $row['id_distrito'],
                'nom_distrito' => $row['nom_distrito'],
                'id_provincia' => $row['id_provincia'],
            );
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
}
if( isset($_POST['codigoProv']) ) {
    $provincia = $_POST['codigoProv'];
    $dst = new distrito();
    $dst->cons_dist($provincia);
}

?>