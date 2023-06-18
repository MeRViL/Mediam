@props(['initialValue' => ''])
<div 
    class="form-group row" {{ $attributes }} 
    wire:ignore 
    x-data="{ value: @entangle('post.description') }"
    x-init="$refs.ckeditor.loadHTML(value)"
    >
    <input id="x" x-bind:value="value" type="hidden">
    <textarea input='x' x-ref="ckeditor" id="editor" class="form-control required"></textarea>
    
</div>
