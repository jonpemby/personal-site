<footer>
    @if($page->getNext())

    <section class="mb-4">
        <strong>Next post:</strong>
        <p>
            <a class="no-underline text-black font-medium" href="{{ $page->getNext()->getPath() }}">
                {{ $page->getNext()->title }}
            </a>
        </p>
    </section>

    @endif

    @if($page->getPrevious())

    <section class="mb-4">
        <strong>Previous post:</strong>
        <p>
            <a class="no-underline text-black font-medium" href="{{ $page->getPrevious()->getPath() }}">
                {{ $page->getPrevious()->title }}
            </a>
        </p>
    </section>

    @endif

    <section>
        <a class="no-underline text-black font-bold" href="/">Back Home</a>
    </section>
</footer>
