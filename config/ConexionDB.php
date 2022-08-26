<?php

class ConexionDB {

    public function conectar() {
        $__servername = "localhost";
        $__username = "root";
        $__password = "";
        $__dbname = "sistema_control_de_actividades";
        $__conexion = mysqli_connect($__servername, $__username, $__password, $__dbname);
        if (!$__conexion) {
            die("La conexión falló: " . mysqli_connect_error());
        }

        return $__conexion;
    }

    public function obtenerData($SQL) {
        $__conn = $this->conectar();
        $__resultado = mysqli_query($__conn, $SQL) or die(mysqli_error());
        $__data = array();
        if ($__resultado) {
            $num_resultado = mysqli_num_rows($__resultado);
            for ($i=0; $i < $num_resultado; $i++) { 
                $__data[] = mysqli_fetch_array($__resultado);
            }
        }
        return $__data;
    }

    public function grabaData($tabla, $data) {
        $columnas = array_keys($data);
        $sql = "INSERT INTO {$tabla} (";
        for ($i=0; $i < count($columnas); $i++) { 
            $sql .= $columnas[$i] . ",";
        }
        $sql .= "fechacreacion) VALUES (";
        for ($i=0; $i < count($data); $i++) { 
            $sql .= "'" . str_replace("'", "&#39", $data[$columnas[$i]]) . "',";
        }
        $sql .= "NOW())";
        $conn = $this->conectar();
        $resultado = mysqli_query($conn, $sql) or die(mysqli_error());
        $data = $resultado ? mysqli_insert_id($conn) : false;
        return $data; 
    }

    public function actualizarData($tabla, $data, $filtro) {
        $columnas = array_keys($data);
        $sql = "UPDATE {$tabla} SET ";
        for ($i=0; $i < count($columnas); $i++) { 
            $sql .= $columnas[$i] . "='" . htmlentities($data[$columnas[$i]], ENT_QUOTES, 'UTF-8') . "',";
        }
        $sql .= "fechamodificacion=NOW()";
        $sql .= " WHERE " . $filtro;
        $conn = $this->conectar();
        $resultado = mysqli_query($conn, $sql) or die(mysqli_error());
        $data = $resultado ? true : false;
        return $data;
    }
}