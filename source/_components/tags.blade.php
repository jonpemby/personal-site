@if($tags->count())

<p class="text-xs">
    @foreach($tags as $tag)
        <span class="inline-block bg-blue text-white px-2 rounded">{{ $tag }}</span>
    @endforeach
</p>

@endif
