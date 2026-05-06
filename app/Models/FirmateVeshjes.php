<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class FirmateVeshjes extends Model
{
	public $timestamps = false;
    protected $table = 'crudapp_firmateveshjeve';
    protected $primaryKey = 'id';
    protected $fillable = ['FirmaVeshjes_umfv', 'ProduktiVeshjes_umfv', 'CmimiVeshjes_umfv'];
	
}
