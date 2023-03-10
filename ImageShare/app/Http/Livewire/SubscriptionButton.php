<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Subscription;

class SubscriptionButton extends Component
{
    public $user;

    public function mount($user){
        $this->user = User::find($user->id);
    }

    public function subscribe($user){
        
            Subscription::create([
            'follower_id' => auth()->user()->id,
            'followed_id' => $user
        ]);
        

        $this->user = User::find($user);

}

public function unsubscribe($user){

    Subscription::where('follower_id', auth()->user()->id)->where('followed_id', $user)->delete();

    $this->user = User::find($user);

}


    public function render()
    {
        return view('livewire.subscription-button', ['user' => $this->user]);
    }
}
