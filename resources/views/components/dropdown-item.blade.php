@props(['route'])

@php
$routeWithoutLeadingSlash = preg_replace('/^\//', '', $route);
$isSelected = request()->is($routeWithoutLeadingSlash) ? 'selected' : '';
@endphp

<option value="{{ $route }}" {{ $isSelected }}>
	{{ $slot }}
</option>