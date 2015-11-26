<?php
    static $array;
    require_once '../model/Db.class.php';
    require_once '/contruct/Conf.class.php';
    require_once 'clockConfig.php';
    $call = new fun_resize();
    if (isset($_POST["parametro2"]) && !empty($_POST["parametro2"])) {
        $code = isset($_POST["parametro1"]) ? $_POST["parametro1"] : "";
        $sub = isset($_POST["parametro2"]) ? $_POST["parametro2"] : "";
        $call->UPdateMail($code, $sub);
    } elseif (isset($_POST["dt0"]) && !empty($_POST["dt1"])) {
        $array = array
            (
            array("domingo", (is_numeric($_POST['dt0']) ? (int) $_POST['dt0'] : 0), (is_numeric($_POST['dt1']) ? (int) $_POST['dt1'] : 0)
                , (is_numeric($_POST['dt2']) ? (int) $_POST['dt2'] : 0), (is_numeric($_POST['dt3']) ? (int) $_POST['dt3'] : 0)
                , (is_numeric($_POST['dt4']) ? (int) $_POST['dt4'] : 0), (is_numeric($_POST['dt5']) ? (int) $_POST['dt5'] : 0)
                , (is_numeric($_POST['dt6']) ? (int) $_POST['dt6'] : 0)),
            array("lunes", (is_numeric($_POST['lt0']) ? (int) $_POST['lt0'] : 0), (is_numeric($_POST['lt1']) ? (int) $_POST['lt1'] : 0)
                , (is_numeric($_POST['lt2']) ? (int) $_POST['lt2'] : 0), (is_numeric($_POST['lt3']) ? (int) $_POST['lt3'] : 0)
                , (is_numeric($_POST['lt4']) ? (int) $_POST['lt4'] : 0), (is_numeric($_POST['lt5']) ? (int) $_POST['lt5'] : 0)
                , (is_numeric($_POST['lt6']) ? (int) $_POST['lt6'] : 0)),
            array("martes", (is_numeric($_POST['mt0']) ? (int) $_POST['mt0'] : 0), (is_numeric($_POST['mt1']) ? (int) $_POST['mt1'] : 0)
                , (is_numeric($_POST['mt2']) ? (int) $_POST['mt2'] : 0), (is_numeric($_POST['mt3']) ? (int) $_POST['mt3'] : 0)
                , (is_numeric($_POST['mt4']) ? (int) $_POST['mt4'] : 0), (is_numeric($_POST['mt5']) ? (int) $_POST['mt5'] : 0)
                , (is_numeric($_POST['mt6']) ? (int) $_POST['mt6'] : 0)),
            array("miercoles", (is_numeric($_POST['mit0']) ? (int) $_POST['mit0'] : 0), (is_numeric($_POST['mit1']) ? (int) $_POST['mit1'] : 0)
                , (is_numeric($_POST['mit2']) ? (int) $_POST['mit2'] : 0), (is_numeric($_POST['mit3']) ? (int) $_POST['mit3'] : 0)
                , (is_numeric($_POST['mit4']) ? (int) $_POST['mit4'] : 0), (is_numeric($_POST['mit5']) ? (int) $_POST['mit5'] : 0)
                , (is_numeric($_POST['mit6']) ? (int) $_POST['mit6'] : 0)),
            array("jueves", (is_numeric($_POST['jt0']) ? (int) $_POST['jt0'] : 0), (is_numeric($_POST['jt1']) ? (int) $_POST['jt1'] : 0)
                , (is_numeric($_POST['jt2']) ? (int) $_POST['jt2'] : 0), (is_numeric($_POST['jt3']) ? (int) $_POST['jt3'] : 0)
                , (is_numeric($_POST['jt4']) ? (int) $_POST['jt4'] : 0), (is_numeric($_POST['jt5']) ? (int) $_POST['jt5'] : 0)
                , (is_numeric($_POST['jt6']) ? (int) $_POST['jt6'] : 0)),
            array("viernes", (is_numeric($_POST['vt0']) ? (int) $_POST['vt0'] : 0), (is_numeric($_POST['vt1']) ? (int) $_POST['vt1'] : 0)
                , (is_numeric($_POST['vt2']) ? (int) $_POST['vt2'] : 0), (is_numeric($_POST['vt3']) ? (int) $_POST['vt3'] : 0)
                , (is_numeric($_POST['vt4']) ? (int) $_POST['vt4'] : 0), (is_numeric($_POST['vt5']) ? (int) $_POST['vt5'] : 0)
                , (is_numeric($_POST['vt6']) ? (int) $_POST['vt6'] : 0)),
            array("sabado", (is_numeric($_POST['st0']) ? (int) $_POST['st0'] : 0), (is_numeric($_POST['st1']) ? (int) $_POST['st1'] : 0)
                , (is_numeric($_POST['st2']) ? (int) $_POST['st2'] : 0), (is_numeric($_POST['st3']) ? (int) $_POST['st3'] : 0)
                , (is_numeric($_POST['st4']) ? (int) $_POST['st4'] : 0), (is_numeric($_POST['st5']) ? (int) $_POST['st5'] : 0)
                , (is_numeric($_POST['st6']) ? (int) $_POST['st6'] : 0))
        );
           $call->UPdate($array);
    }
/**
 * Description of fun_resize
 *
 * @author dxint
 */
class fun_resize {
//put your code here
    private $sql;
    private $bd;
    private $stmt;
    private $rawdata;
    private $rawdata2;
    private $iddias = 399;
    private $id;
    private  $result_array = array();
    public function buscarid() {
        try {
            $this->id = $this->bd->lastID("idplanilla", "planilla");
            return $this->id;
        } catch (Exception $ex) {
            echo $ex;
            return FALSE;
        }
    }
    public function createTAble() {
        try {
            $this->bd = Db::getInstance();
            $this->sql = "select count(idplanilla) as total from  planilla;";
            $this->stmt = $this->bd->ejecutar($this->sql);
            $this->rawdata = $this->bd->obtener_fila($this->stmt, 0);
            $mum = (int) $this->rawdata[0];
// echo gettype($mum);
            if ($mum === 0) {
                $this->sql = " call install();";
                $this->stmt = $this->bd->ejecutar($this->sql);
                return FALSE;
            } elseif ($mum > 1) {
                //echo gettype($mum);
                $this->sql = "UPDATE `queryjumbo`.`planilla` SET `stado`='0' WHERE `idplanilla`='" . ($this->buscarid() - 1) . "';";
                $this->stmt = $this->bd->ejecutar($this->sql);
            }
            return TRUE;
        } catch (Exception $ex) {
            echo $ex;
            return FALSE;
        }
    }
    public function UPdate($array) {
        set_time_limit(0);
        if ($this->createTAble()) {
            try {
                for ($index = 0; $index < \count($array); $index++) {
//echo $array[$index][0] . ":<dia : " . $array[$index][1] . "--" . $array[$index][2] . "--" . $array[$index][3] . "--" . $array[$index][4] . "--" . $array[$index][5] . "--" . $array[$index][6] . "--" . $array[$index][7] . ".\n";
                    $id = $this->iddias + $index;
                    /* @var $array type */
                    if ($array[$index][0] === "domingo") {
                        $this->sql = "UPDATE `queryjumbo`.`dia` SET `9:00`='" . $array[$index][1] . "', `10:30`='" . $array[$index][2] . "', `12:30`='" . $array[$index][3] . "', `14:00`='" . $array[$index][4] . "', `15:30`='" . $array[$index][5] . "', `17:30`='" . $array[$index][6] . "', `19:00`='" . $array[$index][7] . "' WHERE `iddias`='406';";
                    } else {
                        $this->sql = "UPDATE `queryjumbo`.`dia` SET `8:00`='" . $array[$index][1] . "', `10:30`='" . $array[$index][2] . "', `12:00`='" . $array[$index][3] . "', `14:00`='" . $array[$index][4] . "', `15:30`='" . $array[$index][5] . "', `17:30`='" . $array[$index][6] . "', `19:00`='" . $array[$index][7] . "' WHERE `iddias`='" . $id . "';";
                    }
                        $this->bd->ejecutar($this->sql);
                }
            } catch (Exception $ex) {
                echo $ex;
            }
        }
    }
    public function UPdateMail($code, $sub) {//2015-12-30'
        set_time_limit(0);
        list ($seman, $star, $end) = Week();
        try {
           $html = mysql_real_escape_string($code);
            $this->bd = Db::getInstance();
            $this->sql = "UPDATE `queryjumbo`.`planilla` SET `fechainicio`='" . $star . "', `fechafinal`='" . $end . "', `asunto`='" . $sub . "', `comntario`='" . $html . "' WHERE `idplanilla`='" . $this->buscarid() . "';";
           $this->bd->ejecutar($this->sql);
        } catch (Exception $ex) {
            echo $ex;
        }
    }
    public  function getSelect() {
        try {
            $this->bd = Db::getInstance();
            $this->sql = "SELECT * FROM queryjumbo.dia where dia.planilla_idplanilla='" .$this->buscarid(). "';";
            $result = $this->bd->ejecutar($this->sql);
            while($row = mysql_fetch_array($result)){
                $this->result_array[] = $row;  }
               return $this->result_array ;          
        } catch (Exception $ex) {
            echo $ex;
             return $this->result_array ;
        }
    }
    public  function getSelectMail() {
        try {
            $this->bd = Db::getInstance();
            $this->sql = "SELECT * FROM queryjumbo.planilla where planilla.idplanilla='" .$this->buscarid(). "';";
            $result = $this->bd->ejecutar($this->sql);
               $this->rawdata2=$this->bd->obtener_fila($result,0);  
                 return $this->rawdata2 ;
        } catch (Exception $ex) {
            echo $ex;
             return $this->rawdata2 ;
        }
    }
}