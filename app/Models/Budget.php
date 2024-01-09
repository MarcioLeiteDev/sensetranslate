<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "email",
        "phone",
        "cep",
        "street",
        "number",
        "complement",
        "country",
        "city",
        "name_project",
        "description",
        "value",
        "payment_method",
        "delivery_time",
        "status"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
