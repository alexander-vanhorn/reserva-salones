<?php
require_once ('./php/modelDB.php');

class provincia extends modeloCredencialesBD{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function cons_provincia(){
        parent::__construct();
        $instruccion = "CALL sp_provincia('B')";
        $consulta = $this->_db->query($instruccion);
        $realizado = $consulta->fetch_all(MYSQLI_ASSOC);
        if($realizado){
            return $realizado;
            $realizado->close();
            $this->$_db->close();
        }
    }
}

?>