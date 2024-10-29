<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmit extends Model
{
    protected $table = 'contact_submit';

    protected $fillable = ['id', 'name', 'phone', 'email', 'subject', 'message'];
}
