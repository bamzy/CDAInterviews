@extends('layouts.viewlayout')
@section('content')
        @foreach ($items as $item)
{{--            {{json_encode($item,TRUE)}}--}}
            @if (! empty($item['type_id']))
                @if ($item['type_id'] == '1')
                    <p class="spaced"><b>{!!html_entity_decode($item['title'])!!}</b></p>
                    <p class="spaced" >{!!html_entity_decode($item['body'])!!}</p>
                @elseif ($item['type_id']== '2')
                    <p class="spaced">
                        <a href="{{$item['link']}}">{{$item['body']}}</a>
                    </p>
                @elseif ($item['type_id']== '3')
                    <p class="stick-left">
                        <img src="{{$item['link']}}" alt="{{$item['body']}}" width="100%" height="auto">
                        <a href="{{$item['link']}}">{{$item['body']}}</a>
                    </p>
                @elseif ($item['type_id']== '4')
                    <div class="row">
                        <div class="col-12">
                            {!!html_entity_decode($item['body'])!!}
                        </div>
                    </div>

                @endif
            @endif
        @endforeach
@endsection
@yield('layouts.footer')
