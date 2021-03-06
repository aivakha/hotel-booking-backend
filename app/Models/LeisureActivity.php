<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LeisureActivity extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function apartments()
    {
        return $this->belongsToMany(
            Apartment::class,
            'apartment_leisure_activities',
            'leisure_activity_id',
            'apartment_id',
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function add($fields)
    {
        $feature = new static;
        $feature->fill($fields);
        $feature->user_id = Auth::user()->id;
        $feature->save();

        return $feature;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->removeImage();

        $this->delete();
    }

    public function removeImage()
    {
        if ($this->image != null)
        {
            Storage::delete('/public/uploads/' . $this->image);
        }
    }

    public function uploadImage($image)
    {
        if ($image == null)
        {
            return;
        }

        $this->removeImage();
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('public/uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage(): string
    {
        if ($this->image != null)
        {
            return '/storage/uploads/' . $this->image;
        } else
        {
            return '';
        }
    }
}
