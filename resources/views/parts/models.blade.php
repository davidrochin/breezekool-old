@component('components.model-card')

@slot('image_url')
./img/bk-19.png
@endslot

@slot('url')
{{ route('article', 1) }}
@endslot

@slot('model_name')
Modelo BK 19
@endslot

@slot('url')
{{ asset('manuals/bk-19-(1004).pdf') }}
@endslot

<p>Climatizador evaporativo
    de <strong>19.000 m3 / hora </strong>que
    permite climatizar <strong>150
        m2 </strong>con tan
    sólo <strong>1KW.</strong><span style="color: red;">(pendiente de revisión)</span></p>
@endcomponent

<!--====================================================-->

@component('components.model-card')

@slot('image_url')
./img/bk-50.png
@endslot

@slot('url')
{{ route('article', 1) }}
@endslot

@slot('model_name')
Modelo BK 50
@endslot

@slot('url')
{{ asset('manuals/bk-50.pdf') }}
@endslot

<p>Climatizador evaporativo
    de <strong>50.000 m3 / hora </strong>que
    permite climatizar <strong>150
        m2 </strong>con tan
    sólo <strong>1KW.</strong> <span style="color: red;">(pendiente de revisión)</span></p>
@endcomponent