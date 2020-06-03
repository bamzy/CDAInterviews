@extends('layouts.viewlayout')
@section('content')
        @foreach ($items as $item)
                @if ($item['type_id'] == '1')
                    <p class="spaced"><b>{!!html_entity_decode($item['title'])!!}</b></p>
                    <p class="spaced" >
                        @if ($item['hsize_id'] == '1')<h1> @endif
                        @if ($item['hsize_id'] == '2')<h2> @endif
                        @if ($item['hsize_id'] == '3')<h3> @endif
                        @if ($item['striked'])<del> @endif
                        @if ($item['centralized'])<center> @endif
                        @if ($item['bold'])<b> @endif
                        @if ($item['italic'])<i> @endif
                                        {!!html_entity_decode($item['body'])!!}
                        @if ($item['italic'])</i>
                        @endif @if ($item['bold'])</b> @endif
                        @if ($item['centralized'])</center> @endif
                        @if ($item['striked'])</del> @endif
                        @if ($item['hsize_id'] == '1')</h3> @endif
                        @if ($item['hsize_id'] == '2')</h2> @endif
                        @if ($item['hsize_id'] == '3')</h1> @endif
                    </p>
                @elseif ($item['type_id']== '2')
                    <p class="spaced">
                        <a href="{{$item['link']}}">{{$item['body']}}</a>
                    </p>
                @elseif ($item['type_id']== '3')
                    <p class="stick-left">
                        <img src="{{$item['link']}}" alt="{{$item['body']}}" width="100%" height="600">
                        <a href="{{$item['link']}}">{{$item['body']}}</a>
                    </p>
                @elseif ($item['type_id']== '4')
                    <div class="row">
                        <div class="col-sm-12">
                            {!!html_entity_decode($item['body'])!!}
                        </div>
                    </div>

                @endif
        @endforeach
@endsection
