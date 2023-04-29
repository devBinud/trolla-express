<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Admin extends Model
{
    use HasFactory;

    protected $admin = "admin";

    /*
    -----------------------------------
    CHECK
    -----------------------------------
    */
    public function getUserDataByUsername(string $username)
    {
        return DB::table($this->admin)->where('user_name', $username)->first();
    }

    public function isUserNameValid(string $username)
    {
        return DB::table($this->admin)->where('user_name', $username)->count() > 0;
    }

}
