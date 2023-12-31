<x-layout>
	<article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
		<div class="col-span-4 lg:text-center lg:pt-14 mb-10">
			<img src="/images/illustration.png" alt="" class="rounded-xl">

			<p class="mt-4 block text-gray-400 text-xs">
				Published <time>{{ $post->created_at->diffForHumans() }}</time>
			</p>

			<x-author :author="$post->author" />
		</div>

		<div class="col-span-8">
			<div class="hidden lg:flex justify-between mb-6">
				<a href="/"
					class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
					<x-icon name="chevron-left" class="mr-2" />

					Back to Posts
				</a>

				<div class="space-x-2">
					<x-category-button :category="$post->category" />
				</div>
			</div>

			<h1 class="font-bold text-3xl lg:text-4xl mb-10">
				{{ $post->title }}
			</h1>

			<div class="space-y-4 lg:text-lg leading-loose">
				<p>{!! $post->body !!}</p>
			</div>
		</div>
	</article>
</x-layout>