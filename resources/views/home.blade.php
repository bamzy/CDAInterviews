@extends('layouts.layout')
@section('content')
    <div style="padding-top: 100px!important;"><br/><br/>
        @if (!Auth::check())
            <h2>Content Config</h2>
        @endif
        @foreach ($items as $item)
            @if (Auth::check())
                <br/>
                <hr>
                <form method="POST" action="/item/update">
                    <input id="itemId" name="itemId" type="hidden" value="{{$item['id']}}">
                    <input id="pageId" name="pageId" type="hidden" value="{{$page->id}}">
                    @csrf
                    @if ($item['type_id'] != "2" || $item['type_id'] != "3")
                        <div class="row">
                            <div class="col-3">Text:</div>
                            <div class="col-8">
                            <textarea id="body" name="body" cols="100">{{ $item['body'] }}</textarea>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-3">Text:</div>
                            <div class="col-8">
                                <textarea id="body" name="body" cols="100">{{ $item['body'] }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">Link Address::</div>
                            <div class="col-8">
                                <input name="linkAddress" type="text" id="linkAddress" style="width: 100%" value="{{ $item['link'] }}">
                            </div>
                        </div>



                    @endif
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-8">
                    Italic:<label class="switch">
                            <input id="italicFlag" name="italicFlag" type="checkbox"  @if ($item['italic'])checked @endif>
                            <span class="slider round"></span>
                        </label>
                    Bold:<label class="switch">
                        <input id="boldFlag" name="boldFlag" type="checkbox"  @if ($item['bold'])checked @endif>
                        <span class="slider round"></span>
                    </label>
                    Strike:<label class="switch">
                        <input id="strikeFlag" name="strikeFlag" type="checkbox"  @if ($item['striked'])checked @endif>
                        <span class="slider round"></span>
                    </label>
                    Center:<label class="switch">
                        <input id="centerFlag" name="centerFlag" type="checkbox"  @if ($item['centralized'])checked @endif>
                        <span class="slider round"></span>
                    </label>
                    Header: <select class="form-control" id="type" name="type">

                        <option value="" >None</option>
                        @foreach ($hsizes as $hsize)
                            <option value="{{ $hsize->id }}" @if ($item['hsize_id']== $hsize->id)selected @endif> {{ $hsize->start_tag }}</option>
                        @endforeach
                    </select>

                    Type: <select class="form-control" id="type" name="hsize">

                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" @if ($item['type_id']== $type->id)selected @endif> {{ $type->type_name }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>



                </form>
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

    <style>
        form div {
            padding-top: 1px!important;
            padding-bottom: 0px!important;
        }
        .switch {
            position: relative;
            display: inline-block;
            width: 35px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 13px;
            width: 13px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(16px);
            -ms-transform: translateX(16px);
            transform: translateX(16px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .btn-light {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }
        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>
@endsection
