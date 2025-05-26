<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
    class Consulta_Model extends Model
    {
        protected $table      = 'consultas';
        protected $primaryKey = 'id_consultas';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['nombre_consultas','correo_consultas','motivo_consultas','texto_consultas'];
    
    }

