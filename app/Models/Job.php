<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employer;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = ['employer_id', 'title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');
    }
}