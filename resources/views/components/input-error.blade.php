@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm space-y-1 error text-small text-light']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
