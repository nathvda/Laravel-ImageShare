<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Like extends Component
{

    public $image;
    public $image_id;
    public $user_id;
    public $liked;

    public function mount($image){
        $this->image = \App\Models\Image::find($image);

        if(\App\Models\Like::where('user_id', auth()->user()->id)->where('image_id', $image)->count() == 0){
        
            $this->liked = false;

        } else {

            $this->liked = true;
        }
    }

    public function like($image){

        $this->image_id = $image;
        $this->user_id = auth()->user()->id;

        if(\App\Models\Like::where('user_id', auth()->user()->id)->where('image_id', $this->image_id)->count() == 0){

        \App\Models\Like::create([
            'image_id' => $this->image_id,
            'user_id' => $this->user_id
        ]);

        $this->liked = true;

    } else { 

        \App\Models\Like::where('user_id', auth()->user()->id)->where('image_id', $this->image_id)->delete();

        $this->liked = false;

    }

    $this->image = \App\Models\Image::find($this->image_id);

    }


    public function render()
    {
        return view('livewire.like', ['image' => $this->image->likes, 'liked' => $this->liked ]);
    }
}
