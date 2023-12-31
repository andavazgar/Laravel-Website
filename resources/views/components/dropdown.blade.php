@props(['title', 'name', 'options', 'hiddenInputs' => []])


@push('scripts')
<script>
	let dropdownName = "{{ $name }}";
	let dropdown = document.getElementById(dropdownName);
	let dropdownForm = document.getElementById(dropdownName + "Form");
	let searchParameters = new URLSearchParams(location.search);

	if(searchParameters.get(dropdownName)) {
		dropdown.value = searchParameters.get(dropdownName);
	}

	function setDropdownValue() {
		dropdownForm.submit();
	}
</script>
@endpush


<form id="{{ $name . 'Form' }}">
	<select id="{{ $name }}" name="{{ $name }}" {{ $attributes }} onchange="setDropdownValue()">
		<option disabled selected>
			{{ $title }}
		</option>

		{{ $options }}
	</select>

	<x-hidden-query-inputs :fields="$hiddenInputs" />
</form>

<x-icon name="chevron-down" class="absolute pointer-events-none" style="right: 12px" />