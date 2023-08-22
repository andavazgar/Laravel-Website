@props(['title', 'action', 'submitLabel' => 'Submit'])

<div class="max-w-lg mx-auto bg-gray-100 p-6 rounded-xl border border-gray-200">
	<h1 class="text-center font-bold text-xl mb-10">{{ $title }}</h1>

	<form action="{{ $action }}" method="POST">
		@csrf

		{{ $slot }}

		<div class="mb-6">
			<button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
				{{ $submitLabel }}
			</button>
		</div>
	</form>
</div>