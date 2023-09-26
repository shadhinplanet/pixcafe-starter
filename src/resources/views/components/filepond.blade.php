@props(['name' => 'filepond', 'class' => '', 'id' => '', 'accept' => 'image/png, image/jpeg, image/gif', 'style' => 'compact', 'multiple' => false])

<input class="form-control filepond {{ $class }}" type="file" id="{{ $id }}" name="{{ $name }}"
    accept="{{ $accept }}" {{ $multiple ? 'multiple' : '' }}>


@push('js')
    <script>
        $('#{{ $id }}').filepond({
            storeAsFile: true,
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: '{{ $style }}',
        });
    </script>
@endpush
