<div class="x_title">
    <h2>Imagens Call Action<small>Imagem que deverá surgir em background</small></h2>
    <div class="clearfix"></div>
</div>



    @php
        $data = [];
        if(!empty($images_h))
        {
            $data = $images_h;
        }
        if(!empty(old('path')))
        {
            $data = old('path');
        }
    @endphp

    @component('admin.components.assets.manage_images', ['data'=>$data, 'path'=>'path'])

    @endcomponent


@push('stylesheets')
<link href="{{url('/')}}/packages/colorbox/example1/colorbox.css" rel="stylesheet">
@endpush
@push('scripts_lib')
<script type="text/javascript" src="{{url('/')}}/packages/colorbox/jquery.colorbox-min.js"></script>
@endpush
@push('scripts')
<script src="{{url('/')}}/vendor/laravel-filemanager/js/lfm.js"></script>
@endpush
