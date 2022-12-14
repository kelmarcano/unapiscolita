<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTitles extends Model
{
    protected $fillable = ['service_title', 'service_text','service_url','pricing_title', 'pricing_text', 'portfolio_title', 'portfolio_text', 'testimonial_title', 'testimonial_text'];
    public $timestamps = false;
}
