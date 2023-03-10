<div class="rounded-md opacity-0 group-hover:transition-opacity group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-center items-center absolute inset-0 bg-black bg-opacity-70">
    <button wire:click="like({{$image->id}})" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" @if($liked) class="bi bi-heart-fill fill-red-500" @else class="bi bi-heart-fill fill-white" @endif viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>
</button>
<span class="text-white font-bold">{{$image->likes->count()}}</span>
</div>
