@section('meta')
    @component(phyxcms_component('meta'))
        @slot('url')
            {{ route('home') }}
        @endslot

        @slot('title')
            phyXCMS Bulma Base
        @endslot

        @slot('image')

        @endslot

        @slot('description')
            phyXCMS Base Template
        @endslot

        @slot('keywords')
            phyxcms
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="hello-there">
        Hello there
    </div>
@stop
