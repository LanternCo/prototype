@extends('layouts.app')

@section('content')
    <div class="typeform-widget" data-url="https://goodgriefco.typeform.com/to/YG2CwN" style="width: 100%; height: 500px;"></div>
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
