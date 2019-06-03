@extends('layouts.app')

@section('content')
{{-- @TODO - form id should NOT be hardcoded in url --}}
    <div class="typeform-widget" data-url={{'https://goodgriefco.typeform.com/to/YG2CwN?user='.$userId}} data-user-id={{$userId}} style="width: 100%; height: 500px;"></div>
    <script>
        (function() {
            var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/";
            if(!gi.call(d,id)) {
                js=ce.call(d,"script");
                js.id=id;
                js.src=b+"embed.js";
                q=gt.call(d,"script")[0];
                q.parentNode.insertBefore(js,q)
            }
        })()
    </script>
@endsection

