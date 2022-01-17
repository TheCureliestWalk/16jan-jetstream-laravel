<!-- Page Heading -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $header ?? 'Edit this Header'}}</h1>
    @isset($button) <!-- use for if $button have content will show, otherwise won't -->
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> {{ $button }}</a>
    @endisset
</div>
