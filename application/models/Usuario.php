<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once "abstractclassBasicModel.php";
class Usuario extends AbstractclassBasicModel
{
    public function __construct()
    {
        parent::__construct();
        $this->DB_TABLE='usuarios';
    }

    function login($email, $password)
    {
        $this -> db -> select('*');
        $this -> db -> from($this->DB_TABLE);
        $this -> db -> join('relacion_usuarios_tipos', $this->DB_TABLE.'.id = relacion_usuarios_tipos.usuarios_id', 'inner');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);
        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

}