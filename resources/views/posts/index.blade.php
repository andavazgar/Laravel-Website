@section('header')
@include('posts._header')
@endsection

<x-layout>
	@if ($posts->count())
	<x-posts-grid :posts="$posts" />

	{{ $posts->links() }}
	@else
	<p class="text-center">No posts yet. Please check back later.</p>
	@endif
</x-layout>