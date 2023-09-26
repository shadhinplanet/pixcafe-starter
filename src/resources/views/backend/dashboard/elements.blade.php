@extends('backend.layouts.app')
@section('title', 'Elements')
@section('page-title', 'Elements')


@section('content')
    <h2 class="card-title">TinyMCE Editor</h2>
    <div class="row mb-3">
        <div class="col-8">
            <x-editor name="text" />
        </div>
        <div class="col-4">
            <h5>Compoent Name: editor</h5>
            <h6>Attributes:</h6>
            <ul>
                <li><b>name</b> - editor name</li>
                <li><b>class</b> - additional class</li>
            </ul>
        </div>
    </div>
    
    <h2 class="card-title">Filepond</h2>
    <div class="row mb-3">
        <div class="col-8">
            <x-filepond id="media" />
        </div>
        <div class="col-4">
            <h5>Compoent Name: filepond</h5>
            <h6>Attributes:</h6>
            <ul>
                <li><b>id</b> - filepond id ()</li>
                <li><b>class</b> - additional class ()</li>
                <li><b>name</b> - input name (filepond)</li>
                <li><b>accept</b> - validations (image/png, image/jpeg, image/gif)</li>
                <li><b>style</b> - integrated, compact, circle (compact)</li>
                <li><b>multiple</b> - true, false (false)</li>
            </ul>
        </div>
    </div>
    
    <h2 class="card-title">Nestable and Sortable</h2>
    <div class="row">
        <div class="col-8">
            <x-nestable-group id="check">
                <x-nestable-item title="Item 1">
                    <x-nestable-group id="">
                        <x-nestable-item title="Item 2" level="2" />
                        <x-nestable-item title="Item 3" level="2" />
                        <x-nestable-item title="Item 4" level="2" />
                        <x-nestable-item title="Level 2" level="2">
                            <x-nestable-group id="">
                                <x-nestable-item title="Level 3" level="3" />
                                <x-nestable-item title="Level 3" level="3" />
                                <x-nestable-item title="Level 3" level="3" />
                                <x-nestable-item title="Level 3" level="3" />
                                <x-nestable-item title="Level 3" level="3" />
                            </x-nestable-group>
                        </x-nestable-item>
                        <x-nestable-item title="Item 6" level="2" />
                    </x-nestable-group>
                </x-nestable-item>
            </x-nestable-group>
        </div>
        <div class="col-4">
            <h5>Compoent Name: nestable-group</h5>
            <h6>Attributes:</h6>
            <ul>
                <li><b>id</b> - nestable id</li>
            </ul>
            <h5>Compoent Name: nestable-item</h5>
            <h6>Attributes:</h6>
            <ul>
                <li><b>title</b> - item title</li>
                <li><b>level</b> - item level</li>
            </ul>
        </div>
    </div>
    
@endsection
