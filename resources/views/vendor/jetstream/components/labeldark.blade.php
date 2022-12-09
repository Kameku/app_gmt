@props(['value'])

<label {{ $attributes->merge(['class' => 'font-jose block font-medium text-sm text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>
