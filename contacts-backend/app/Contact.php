<?php

namespace App;

use App\Models\ContactGroup;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $fillable = ['first_name', 'last_name', 'email', 'contact_group_id'];

    public function group()
    {
        return $this->belongsTo(ContactGroup::class, 'contact_group_id');
    }
}
