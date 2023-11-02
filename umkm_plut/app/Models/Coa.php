<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Coa extends Model
{
    use HasFactory;
    protected $table = 'coa';
    protected $primaryKey = 'id_coa';

    protected $fillable = ['id_coa','perkiraan','deskripsi','tingkat','group','subgrub','detail','group1','group2','group3','group3',
    'saldo','kode','kode2','debet','kredit','saldo1','sald2','saldo3','debet1','debet2','debet3','b1','b2','b3','b4',
    'b5','b6','b7','b8','b9','b10','b11','b12','kredit1','kredit2','kredit3','tahun','link','sak'];

   
}
