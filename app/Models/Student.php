<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'name', 'class', 'departemen', 'phone_number'];
    
    public function kelas(){
        return $this->belongsTo(Kelas::class, 'class_id');
        
    }
    public function courses(){
        return $this->belongsToMany(Course::class)->withPivot('nilai');
    }   
}

// withPivot: agar data yang terletak di pivot dapat di ambil, jika kolom tersebut merupakan foreign key, maka tidak perlu menggunakan withPivot