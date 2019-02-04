<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $page->site_title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <main class="container">
            <header class="flex justify-center items-center mb-4 md:justify-start">
                <a href="/">
                    <img src="https://www.gravatar.com/avatar/{{ md5($page->site_email) }}?s=150"
                        class="rounded-full mr-4 w-16 h-16 md:w-24 md:h-24"
                    />
                </a>
                
                <div>
                    <h1 class="text-lg md:text-2xl">
                        <a href="/" class="text-black no-underline">{{ $page->site_author }}</a>
                    </h1>

                    <h2 class="font-normal text-base md:text-lg">
                        {{ $page->site_job_title }}
                    </h2>
                </div>
            </header>

            <article class="content">
                @yield('body')
            </article>
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
