@props([
    'sortable' => null,
    'direction' => null
])

<th {{ $attributes->merge(['class' => 'px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'])->only('class') }} >
    @unless ($sortable)
        <span clsaa=" text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider"> {{ $slot }} </span>
    @else
        <button {{ $attributes->except('class') }} class="flex items-center space-x-1 text-left text-xs leading-4">
        <span> {{ $slot }}</span>

        <span>
            @id( $direction === 'asc')
                <svg class="w-3 h-3" fill="none"

        </button>

        </span>
    @endunless
