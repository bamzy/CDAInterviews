@extends('layouts.layout')
@section('content')
    <div style="padding: 70px!important;"><br/><br/>
        @if (Auth::check())
            <h2>Content Configuration</h2>
        @endif
        @foreach ($items as $item)
            @if (Auth::check())

                <hr>
                <div class="row">
                <form method="POST" action="/item/update">
                    <input id="itemId" name="itemId" type="hidden" value="{{$item['id']}}">
                    <input id="pageId" name="pageId" type="hidden" value="{{$page->id}}">
                    @csrf
                    @if ($item['type_id'] == "1" )
                        <div class="row">
                            <div class="col-2"><b>Paragraph Text:</b></div>
                            <div class="col-10">
                            <textarea id="body" name="body" cols="100" rows="4" class="form-control">{{ $item['body'] }}</textarea>
                            </div>
                        </div>
                    @elseif ($item['type_id'] == "2")
                        <div class="row">
                            <div class="col-2"><b>Link Text:</b></div>
                            <div class="col-10">
                                <textarea id="body" name="body" cols="100" rows="4" class="form-control">{{ $item['body'] }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"><b>Link Address:</b></div>
                            <div class="col-10">
                                <input name="linkAddress" type="text" id="linkAddress" style="width: 100%" value="{{ $item['link'] }}">
                            </div>
                        </div>
                    @elseif ($item['type_id'] == "3")
                        <div class="row">
                            <div class="col-2"><b>Image Hint:</b></div>
                            <div class="col-10">
                                <textarea id="body" name="body" cols="100" rows="4" class="form-control">{{ $item['body'] }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"><b>Image Address:</b></div>
                            <div class="col-10">
                                <input name="linkAddress" type="text" id="linkAddress" style="width: 100%" value="{{ $item['link'] }}">
                            </div>
                        </div>



                    @endif
                    <div class="row">
                        <div class="col-2"><b>Style:</b></div>
                        <div class="col-10">
                                @if ($item['type_id'] != "3" )
                                    <div class="col-sm-1">Italic:<label class="switch">
                                <input id="italicFlag" name="italicFlag" type="checkbox"  @if ($item['italic'])checked @endif>
                                <span class="slider round"></span>
                            </label></div>
                                    <div class="col-sm-1">Bold:<label class="switch">
                            <input id="boldFlag" name="boldFlag" type="checkbox"  @if ($item['bold'])checked @endif>
                            <span class="slider round"></span>
                                        </label></div>
                                    <div class="col-sm-1">Strike:<label class="switch">
                            <input id="strikeFlag" name="strikeFlag" type="checkbox"  @if ($item['striked'])checked @endif>
                            <span class="slider round"></span>
                                        </label></div>
                                    <div class="col-sm-1">Center:<label class="switch">
                            <input id="centerFlag" name="centerFlag" type="checkbox"  @if ($item['centralized'])checked @endif>
                            <span class="slider round"></span>
                                        </label></div>


                                    <div class="col-3">Header:
                                        @foreach ($hsizes as $hsize)
                                            <input type="radio" id="{{$item['hsize_id']}}" name="hsize" value="{{ $hsize->id }}" @if ($item['hsize_id']== $hsize->id)checked @endif> {{ $hsize->start_tag }}</option>
                                        @endforeach

                                    </div>
{{--                                    <div class="col-2">Header: <select class="form-control" id="type" name="hsize">--}}

{{--                            <option value="" >None</option>--}}
{{--                            @foreach ($hsizes as $hsize)--}}
{{--                                <option value="{{ $hsize->id }}" @if ($item['hsize_id']== $hsize->id)selected @endif> {{ $hsize->start_tag }}</option>--}}
{{--                            @endforeach--}}
{{--                                        </select></div>--}}
                                @endif
                                    <div class="col-2">&nbsp;&nbsp;Type: <select class="form-control" id="type" name="type">

                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @if ($item['type_id']== $type->id)selected @endif> {{ $type->type_name }}</option>
                            @endforeach
                                        </select></div>
                                <div class="col-4">
                                <button type="submit" class="btn btn-success">Save</button>
                                </div>
                        </div>
                </div>



                </form>
            </div>
            @else
                @if ($item['type_id'] == '1')
                    <p>
                        @if ($item['hsize_id'] == '1')<h1> @endif
                        @if ($item['hsize_id'] == '2')<h2> @endif
                        @if ($item['hsize_id'] == '3')<h1> @endif
                        @if ($item['striked'])<del> @endif
                        @if ($item['centralized'])<center> @endif
                        @if ($item['bold'])<b> @endif
                        @if ($item['italic'])<i> @endif
                                    {{ $item['body'] }}
                        @if ($item['italic'])</i>
                        @endif @if ($item['bold'])</b> @endif
                        @if ($item['centralized'])</center> @endif
                        @if ($item['striked'])</del> @endif
                        @if ($item['hsize_id'] == '1')</h1> @endif
                        @if ($item['hsize_id'] == '2')</h2> @endif
                        @if ($item['hsize_id'] == '3')</h3> @endif
                    </p>
                @elseif ($item['type_id']== '2')
                    <p>
                        <a href="{{$item['link']}}">{{$item['body']}}</a>
                    </p>
                @elseif ($item['type_id']== '3')
                    <p>
                        <img src="{{$item['link']}}" alt="{{$item['body']}}" width="900" height="600">
                        <a href="{{$item['link']}}">{{$item['body']}}</a>
                    </p>
                @endif

            @endif


            @endforeach

  </div>


@endsection
