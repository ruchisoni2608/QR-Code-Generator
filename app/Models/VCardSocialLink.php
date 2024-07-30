<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VCardSocialLink extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function socialMediaLink()
    {
        return $this->belongsTo(SocialMediaLink::class);
    }
}
