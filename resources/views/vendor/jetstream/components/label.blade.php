@props(['value'])

<label {{ $attributes->merge(['class' => 'font-jose block font-medium text-sm text-white']) }}>
    {{ $value ?? $slot }}
</label>
