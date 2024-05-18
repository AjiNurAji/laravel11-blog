<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="w-full h-auto">
        <article
            class="flex max-w-full flex-col h-full items-start justify-between border border-gray-300 bg-white rounded-md py-4 px-5">
            <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                <a href="#"
                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post['author'] }}</a>
            </div>
            <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <span class="absolute inset-0"></span>
                    {{ $post['title'] }}
                </h3>
                <p class="mt-5 text-sm leading-6 text-gray-600">{{ $post['body'] }}</p>
            </div>
            <a href="/posts"
                class="rounded-md bg-blue-500 text-white hover:opacity-90 py-1 mt-3 px-3">&laquo; Back to posts</a>
        </article>
    </div>
</x-layout>
