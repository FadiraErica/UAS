<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students'; // Nama tabel
    protected $primaryKey = 'Students_Id'; // <-- Tambahkan ini
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['Course_Id', 'Name', 'Email', 'Phone_Number'];

    public function course()
    {
        return $this->belongsTo(Onlinecourse::class, 'Course_Id');
    }
}
