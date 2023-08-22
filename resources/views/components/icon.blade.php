@props(['name', 'width' => 22])

@php
$chevron = '<g fill="none" fill-rule="evenodd">
	<path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
	</path>
	<path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
	</path>
</g>';
@endphp


@if ($name === 'chevron-down')
<svg {{ $attributes([ 'class'=>'transform -rotate-90' ]) }} width="{{ $width }}" viewBox="0 0 22 22">
	{!! $chevron !!}
</svg>


@elseif ($name === 'chevron-left')
<svg {{ $attributes }} width="{{ $width }}" viewBox="0 0 22 22">
	{!! $chevron !!}
</svg>


@elseif ($name === 'home')
<svg width="{{ $width }}" viewBox="0 0 32 32">
	<g>
		<path
			d="M29.707,17.293l-13-13c-0.3906-0.3906-1.0234-0.3906-1.4141,0l-13,13c-0.2861,0.2861-0.3716,0.7158-0.2168,1.0898   C2.231,18.7563,2.5957,19,3,19h3v8c0,0.5522,0.4478,1,1,1h6.208H19h6c0.5527,0,1-0.4478,1-1v-8h3   c0.4043,0,0.7695-0.2437,0.9238-0.6172C30.0791,18.0088,29.9932,17.5791,29.707,17.293z M14,26v-5c0-1.103,0.897-2,2-2   c1.1025,0,2,0.897,2,2v5H14z M25,17c-0.5527,0-1,0.4478-1,1v8h-4v-5c0-2.2056-1.7939-4-4-4c-2.2056,0-4,1.7944-4,4v5H8v-8   c0-0.5522-0.4478-1-1-1H5.4141L16,6.4141L26.5859,17H25z" />
	</g>
</svg>
@endif