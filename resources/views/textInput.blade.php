<div class="form-group">
    <label for="{{ $name }}">{{ $lable }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
        class="form-control @error('{{ $name }}') is-invalid @enderror">
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
