<?php
require_once ('./php/modelDB.php');

class usuario extends modeloCredencialesBD{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function crear_usuario($Nombre, $Apellido, $Correo, $Pass, $Foto, $Nivel, $Distrito){
        parent::__construct();
        $instruccion = "CALL sp_usuario('I','".$Nombre."', '".$Apellido."', '".$Correo."', '".$Pass."', '".$Foto."', '".$Nivel."', '".$Distrito."')";
        $realizado=$this->_db->query($instruccion);
     if($realizado){return "ok";}
        else {return "error";}
        $realizado->close();
        $this->$_db->close();            
    }

    public function login_usuario($Correo, $Pass){
        parent::__construct();
        $instruccion = "CALL sp_usuario('L','NULL', 'NULL', '".$Correo."', '".$Pass."', 'NULL', 'NULL', 'NULL')";
        $consulta = $this->_db->query($instruccion);
        $realizado = $consulta->fetch_all(MYSQLI_ASSOC);
        if($realizado){
            return $realizado;
            $realizado->close();
            $this->$_db->close();
        }
        
    }

    public function ver_usuarios(){
        parent::__construct();
        $instruccion = "CALL sp_usuario('V','NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL')";
        $consulta = $this->_db->query($instruccion);
        $realizado = $consulta->fetch_all(MYSQLI_ASSOC);
        if($realizado){
            return $realizado;
            $realizado->close();
            $this->$_db->close();
        }
        
    }
    
    public function editar_usuario($Nombre, $Apellido, $Correo, $Foto){
        parent::__construct();
        $instruccion = "CALL sp_usuario('U','".$Nombre."', '".$Apellido."', '".$Correo."', NULL, '".$Foto."', NULL, NULL)";
        $realizado=$this->_db->query($instruccion);
        if($realizado){return "ok";}
        else {return "error";}
        $realizado->close();
        $this->$_db->close();
    }
}

?>