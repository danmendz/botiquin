{{-- Define component properties: 
     $for is used to specify the name of the input field for error handling,
     $messages is an array of error messages to display --}}
@props(['for' => null, 'messages' => []])

@if (request()->is('user/profile'))
    {{-- Versión antigua para input @error --}}
    @error($for)
        <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
    @enderror
@else
    {{-- Versión moderna con :messages --}}
    @if ($messages)
        <ul {{ $attributes->merge(['class' => 'mt-2 text-sm text-red-600']) }}>
            @foreach ((array) $messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @endif
@endif