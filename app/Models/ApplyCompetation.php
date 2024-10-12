<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyCompetation extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "mobile_number",
        "title",
        "papers_present_name",
        "occupation",
        "expertise",
        "organization",
        "nationality",
        "papers_present",
        "status"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
