@props(['keys'])

@if (session()->has($keys))

@push('scripts')
<script>
	window.addEventListener('load', () => {
		const flashMessages = document.getElementById('flashMessages');

		// Fade in
		fade(flashMessages, 0, 0.1);

		// fade out after 5 seconds
		setTimeout(() => {
			fade(flashMessages, 1, -0.1);
		}, 5000);
	});

	function fade(element, initialOpacity, multiplier) {
		const newOpacity = initialOpacity + 1 * multiplier;
		element.style.opacity = newOpacity;

		if(newOpacity > 0 && newOpacity < 1) {
			setTimeout(() => fade(element, newOpacity, multiplier), 50);
		}
	}
</script>
@endpush


<div id="flashMessages" class="fixed bottom-3 right-3 flex flex-col gap-y-2 text-sm text-white" style="opacity: 0">
	@foreach ($keys as $index => $key)
	@if (session()->has($key))
	<p id="{{ 'flash_' . $key }}" class="bg-blue-500 py-2 px-4 rounded-xl">{{ session($key) }}</p>
	@endif
	@endforeach
</div>
@endif