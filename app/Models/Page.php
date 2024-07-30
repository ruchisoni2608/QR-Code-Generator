<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Page extends Model
{
    use HasFactory;
    protected $guarded = [];

    const ABOUT = 'about-us';
    const VISION_MISSION = 'vision-mission';
    const RESEARCH = 'research';
    const WHY_BIOPESTICIDES = 'why-biopesticides';
    const WHY_BIO_FERTILIZERS = 'why-bio-fertilizers';
    const INFORMATION = 'information';
    const REVOLUTION = 'revolution';

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function subPages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Page::class, 'parent_id');
    }

    public function items(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PageItem::class, 'page_id')->orderBy('priority');
    }
}
