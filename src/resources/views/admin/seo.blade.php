@php
    $permissions = [];
    if(auth()->user()->role?->permissions?->permissions) {
        $permissions = auth()->user()->role->permissions?->permissions;
    }
@endphp
@if(isset($post))
<div class="card mt-4">
    <div class="card-header">
        <h5 class="card-title">Настройки SEO</h5>
    </div>
    <div class="card-body">
        @if(in_array('edit_meta_title', $permissions))
        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $post->seo?->meta_title ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_meta_description', $permissions))
        <div class="form-group">
            <label for="meta_description">Meta Description</label>
            <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $post->seo?->meta_description ?? '' }}</textarea>
        </div>
        @endif
        @if(in_array('edit_meta_keywords', $permissions))
        <div class="form-group">
            <label for="meta_keywords">Meta Keywords</label>
            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $post->seo?->meta_keywords ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_canonical', $permissions))
        <div class="form-group">
            <label for="canonical">Canonical URL</label>
            <input type="text" class="form-control" id="canonical" name="canonical" value="{{ $post->seo?->canonical ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_title', $permissions))
        <div class="form-group">
            <label for="og_title">OG Title</label>
            <input type="text" class="form-control" id="og_title" name="og_title" value="{{ $post->seo?->og_title ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_description', $permissions))
        <div class="form-group">
            <label for="og_description">OG Description</label>
            <textarea class="form-control" id="og_description" name="og_description" rows="3">{{ $post->seo?->og_description ?? '' }}</textarea>
        </div>
        @endif
        @if(in_array('edit_og_url', $permissions))
        <div class="form-group">
            <label for="og_url">OG URL</label>
            <input type="text" class="form-control" id="og_url" name="og_url" value="{{ $post->seo?->og_url ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_type', $permissions))
        <div class="form-group">
            <label for="og_type">OG Type</label>
            <input type="text" class="form-control" id="og_type" name="og_type" value="{{ $post->seo?->og_type ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_site_name', $permissions))
        <div class="form-group">
            <label for="og_site_name">OG Site Name</label>
            <input type="text" class="form-control" id="og_site_name" name="og_site_name" value="{{ $post->seo?->og_site_name ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_image', $permissions))
        <div class="form-group">
            <label for="og_image">OG Image</label>
            <input type="text" class="form-control" id="og_image" name="og_image" value="{{ $post->seo?->og_image ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_image_type', $permissions))
        <div class="form-group">
            <label for="og_image_type">OG Image Type</label>
            <input type="text" class="form-control" id="og_image_type" name="og_image_type" value="{{ $post->seo?->og_image_type ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_image_width', $permissions))
        <div class="form-group">
            <label for="og_image_width">OG Image Width</label>
            <input type="number" class="form-control" id="og_image_width" name="og_image_width" value="{{ $post->seo?->og_image_width ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_og_image_height', $permissions))
        <div class="form-group">
            <label for="og_image_height">OG Image Height</label>
            <input type="number" class="form-control" id="og_image_height" name="og_image_height" value="{{ $post->seo?->og_image_height ?? '' }}">
        </div>
        @endif
        @if(in_array('edit_vk_image', $permissions))
        <div class="form-group">
            <label for="vk_image">VK Image</label>
            <input type="text" class="form-control" id="vk_image" name="vk_image" value="{{ $post->seo?->vk_image ?? '' }}">
        </div>
        @endif
    </div>
</div>
@else
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Настройки SEO</h5>
        </div>
        <div class="card-body">
            @if(in_array('edit_meta_title', $permissions))
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_meta_description', $permissions))
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ old('meta_description') ?? '' }}</textarea>
                </div>
            @endif
            @if(in_array('edit_meta_keywords', $permissions))
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_canonical', $permissions))
                <div class="form-group">
                    <label for="canonical">Canonical URL</label>
                    <input type="text" class="form-control" id="canonical" name="canonical" value="{{ old('canonical') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_title', $permissions))
                <div class="form-group">
                    <label for="og_title">OG Title</label>
                    <input type="text" class="form-control" id="og_title" name="og_title" value="{{ old('og_title') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_description', $permissions))
                <div class="form-group">
                    <label for="og_description">OG Description</label>
                    <textarea class="form-control" id="og_description" name="og_description" rows="3">{{ old('og_description') ?? '' }}</textarea>
                </div>
            @endif
            @if(in_array('edit_og_url', $permissions))
                <div class="form-group">
                    <label for="og_url">OG URL</label>
                    <input type="text" class="form-control" id="og_url" name="og_url" value="{{ old('og_url') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_type', $permissions))
                <div class="form-group">
                    <label for="og_type">OG Type</label>
                    <input type="text" class="form-control" id="og_type" name="og_type" value="{{ old('og_type') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_site_name', $permissions))
                <div class="form-group">
                    <label for="og_site_name">OG Site Name</label>
                    <input type="text" class="form-control" id="og_site_name" name="og_site_name" value="{{ old('og_site_name') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_image', $permissions))
                <div class="form-group">
                    <label for="og_image">OG Image</label>
                    <input type="text" class="form-control" id="og_image" name="og_image" value="{{ old('og_image') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_image_type', $permissions))
                <div class="form-group">
                    <label for="og_image_type">OG Image Type</label>
                    <input type="text" class="form-control" id="og_image_type" name="og_image_type" value="{{ old('og_image_type') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_image_width', $permissions))
                <div class="form-group">
                    <label for="og_image_width">OG Image Width</label>
                    <input type="number" class="form-control" id="og_image_width" name="og_image_width" value="{{ old('og_image_width') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_og_image_height', $permissions))
                <div class="form-group">
                    <label for="og_image_height">OG Image Height</label>
                    <input type="number" class="form-control" id="og_image_height" name="og_image_height" value="{{ old('og_image_height') ?? '' }}">
                </div>
            @endif
            @if(in_array('edit_vk_image', $permissions))
                <div class="form-group">
                    <label for="vk_image">VK Image</label>
                    <input type="text" class="form-control" id="vk_image" name="vk_image" value="{{ old('vk_image') ?? '' }}">
                </div>
            @endif
        </div>
    </div>
@endif
