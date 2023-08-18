@props(['name', 'options'])


@section('js')
<script>
	function gotoRoute() {
		let dropdown = document.getElementById("{{ $name . '_id' }}");
		let destination = dropdown.value.startsWith('/') ? dropdown.value : '/' + dropdown.value;
		location.href = destination;
	}
</script>
@endsection


<select id={{ $name . '_id' }} {{ $attributes }} onchange="gotoRoute()">
	<option disabled selected>
		{{ $name }}
	</option>

	{{ $options }}
</select>

<x-icon name="dropdown-arrow" class="absolute pointer-events-none" style="right: 12px" />