<?php
/*learning2*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //use these when storing data to table
    //which column needs to be filled //mass assignable
    protected $fillable = ['name', 'email', 'phone_no' ];

    //which column need not to be filled //mass blockable
    //protected $guarded = ['id'];
}
