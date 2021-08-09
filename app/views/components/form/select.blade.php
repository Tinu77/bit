@props([
    "values" => [],
    "useValuesAsKey" => true,
    "addSelectOne" => true,
    'sort' => null
])
@php
    if ( isset($sort) === true ){
        asort($values);
    }
@endphp
<select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
    <option value="">Select One</option>
    @foreach($values as $key => $value)
        @if ( !empty($value) )
            <option value="{{ !is_numeric($key) || $useValuesAsKey ? $value : $key }}">{{ ucwords($value) }}</option>
        @endif
    @endforeach
</select>
