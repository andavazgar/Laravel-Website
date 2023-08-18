@props(['author'])

<div class="flex items-center lg:justify-center text-sm mt-4">
	<img src="{{ $author->avatar }}" alt="avatar">
	<div class="ml-3 text-left">
		<h5 class="font-bold">
			<a href="/authors/{{ $author->username }}">
				{{ $author->name }}
			</a>
		</h5>
	</div>
</div>