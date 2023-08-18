@section('header')
@include('_posts-header')
@endsection

<x-layout>
	@if ($posts->count())
	<x-posts-grid :posts="$posts" />

	@else
	<p class="text-center">No posts yet. Please check back later.</p>
	@endif
</x-layout>