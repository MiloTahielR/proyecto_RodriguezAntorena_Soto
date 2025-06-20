<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
    class Venta_Model extends Model
    {
        protected $table      = 'ventas';
        protected $primaryKey = 'id_venta';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['fecha_venta','total_venta','forma_pago_venta','cliente_id','envio_venta'];
        
    }