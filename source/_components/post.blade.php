<section class="mb-4">
    <header>
        <time class="text-xs font-light text-grey-darker">{{ $post->postedAt() }}</time>

        <h4>
            <a class="no-underline text-black" href="{{ $post->getPath() }}">{{ $post->title }}</a>
        </h4>
    </header>

    @include('_components.tags', ['tags' => $post->getTags()])
</section>
