<?php namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Contact extends Model
{
     public $table = "contact";    
     protected $fillable = ['id', 'name', 'email'];
     
}
?>
