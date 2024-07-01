<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="w-full h-auto">
        <article
            class="flex max-w-full flex-col h-full items-start justify-start border border-gray-300 bg-white rounded-md py-4 px-5">
            <div class="flex items-center gap-x-4 text-xs">
                <a href="/category/{{ $post->category->slug }}"
                    class="relative z-10 rounded-full bg-gray-100 p-1.5 font-normal text-gray-600 hover:bg-gray-300">{{ $post->category->name }}</a>
            </div>
            <div class="group relative">
                <h3 class="mt-2 text-lg font-semibold leading-6 text-gray-900">
                    {{ $post->title }}
                </h3>
                <div class="mt-2 text-xs">
                    <span
                        class="text-gray-500 border-r border-gray-500 pr-2 mr-2">{{ $post->created_at->diffForHumans() }}</span>
                    By <a href="/author/{{ $post->author->username }}"
                        class="font-medium hover:underline">{{ $post->author->name }}</a>
                </div>
                <p class="mt-5 text-sm leading-6 text-gray-600">{{ $post->body }}</p>
            </div>
            <a href="/posts" class="rounded-md bg-blue-500 text-white hover:opacity-90 py-1 mt-3 px-3">&laquo; Back to
                posts</a>
        </article>
    </div>
</x-layout>
