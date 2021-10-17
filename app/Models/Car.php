<?php 
namespace App\Models;

use CodeIgniter\Model;

class Car extends Model{
    protected $table      = 'cars';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['marca', 'modelo', 'matricula', 'cilindrada', 'potencia', 'color', 'motor', 'precio', 'foto'];
}