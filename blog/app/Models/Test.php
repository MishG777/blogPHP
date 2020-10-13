<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    public function getTest(){
        return 'momaq Test.php-dan ---------> amitom test';
    }
}
