<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? "ERRO" }}</span>
    {{-- <span>{{ $input }}</span> --}}
        {!! Form::text($input, $value ?? null, $atributes) !!}
</label>