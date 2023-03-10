<div class="flex w-10 justify-between items-center">
    <button wire:click="like({{$image->id}})" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-heart-fill @if($liked) fill-red-800 @else fill-slate-800 @endif" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>
</button>
{{$image->likes->count()}}
</div>
