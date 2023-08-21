@props(['fields'])

@foreach ($fields as $hiddenField)
@if (request($hiddenField))
<input type="hidden" name="{{ $hiddenField }}" value="{{ request($hiddenField) }}">
@endif
@endforeach