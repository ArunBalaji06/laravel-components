<div class="form-floating mb-3">
    <input {{ $attributes->merge(['class' =>"form-control $id" ]) }} {{ $attributes->merge(['placeholder' =>"$id" ]) }} id="{{ $id }}" name="{{ $name }}" type="{{ $type }}">
    <label for="{{ $id }}"> {{ Str::ucfirst($name) }}</label>
</div>
