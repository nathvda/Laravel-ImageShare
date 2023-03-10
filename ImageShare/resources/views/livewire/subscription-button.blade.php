<div>
<form @if(auth()->user()->isSubscribed($user->id))wire:submit.prevent="unsubscribe({{$user->id}})" @else wire:submit.prevent="subscribe({{$user->id}})" @endif)>
<button  class="bg-slate-800 p-4 rounded-md text-white">@if(auth()->user()->isSubscribed($user->id))Unfollow @else Follow @endif</button>
</form>
</div>
