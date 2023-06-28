<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}">
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ $selected == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
</div>
