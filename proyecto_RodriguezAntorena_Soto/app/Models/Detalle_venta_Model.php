<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
    class Detalle_venta_Model extends Model
    {
        protected $table      = 'detalle_ventas';
        protected $primaryKey = 'id_detalle';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['venta_id','productos_id','cantidad_detalle','precio_detalle'];
    
    }