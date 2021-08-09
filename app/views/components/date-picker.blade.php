@props([
'format' => 'YYYY-MM-DD',
'yearHigh' => date("Y") - 10,
'yearLow' => date("Y") - 50,
'default' => ''
])
<input {{ $attributes }}
       x-data="{ model: @entangle($attributes->wire('model')) }"
       x-ref="input"
       x-init="new Pikaday({
                field: $refs.input,
                format: '{{$format}}',
                yearRange:[{{$yearLow}},{{$yearHigh}}],
                setDefaultDate: '{{$default}}' ? true : false,
                defaultDate: moment('{{$default}}').toDate(),
                onSelect: function(date){
                            $el.value = this.getMoment(date.toString()).format('{{$format}}');
                            model = $el.value;
                        },
            })"
       type="text"
       {{ $attributes->merge(['class' => "mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md text-gray-700"]) }}
/>
@once
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    @endpush

    @push('head')
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    @endpush
@endonce
