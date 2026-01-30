<a href="{{ $href ?? '#' }}" {{ $attributes->merge(['class' => 'action-btn']) }}>
    {{ $slot ?? 'View' }}
</a>
