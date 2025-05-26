<?php

namespace App\Models;

use FFMpeg\FFProbe;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class MaterialVideo extends Model
{
    protected $guarded = ['id'];
    protected $table = 'material_videos';

    public function getDuration()
    {
        $videoPath = Storage::disk('public')->path($this->video);
        $ffprobe = FFProbe::create();
        $duration = $ffprobe
            ->format($videoPath) // extracts file information
            ->get('duration');   // returns duration in seconds

        return $duration;
    }

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
