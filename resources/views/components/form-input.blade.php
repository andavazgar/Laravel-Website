@props(['name', 'type' => 'text', 'required' => true])

@php
$inputLabel = ucwords($name);
$inputName = strtolower($name);
@endphp

<div class="mb-6">
	<label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $inputName }}">
		{{ $inputLabel }}
	</label>

	<input class="border border-gray-400 p-2 w-full" type="{{ $type }}" name="{{ $inputName }}" id="{{ $inputName }}"
		value="{{ old($inputName) }}" {{ $required ? 'required' : '' }}>

	@error($inputName)
	<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
	@enderror
</div>