@props([
    'disabled' => false,
    'type' => null,
])
@if ($type === 'text' )
    <input type="text"
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge([ "class" => "mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md text-gray-700"]) }} />
@endif

@if ( $type === 'checkbox' )
    <input {{ $disabled ? 'disabled' : '' }}
           type="checkbox"
        {{ $attributes->merge(['class' => "focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded"]) }} />
@endif
