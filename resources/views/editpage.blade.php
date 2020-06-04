@extends('layouts.editlayout')
@section('content')
    <hr>
        <h3>{{$page->name}} Content Configuration</h3>
        <b class="spaced">You can also use html tags directly in the text, but for convenience some particular tags are provided through btns </b>
        @foreach ($items as $item)

                <div class="spaced">

                    <div class="row">
                    <form method="POST" action="/item/update">
                        <input id="itemId" name="itemId" type="hidden" value="{{$item['id']}}">
                        <input id="pageId" name="pageId" type="hidden" value="{{$page->id}}">
                        @csrf
                        @if ($item['type_id'] == "1" )
                            <div class="row">
                                <div class="col-2"><b>Text Title:</b></div>
                                <div class="col-10">
                                    <input type="text" id="title" name="title" class="form-control" value="{{ $item['title'] }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"><b>Text Body:</b></div>
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
                                <div class="col-2"><b>Image Address:</b></div>
                                <div class="col-10">
                                    <input name="linkAddress" type="text" id="linkAddress" style="width: 100%" value="{{ $item['link'] }}">
                                </div>
                            </div>
                        @elseif ($item['type_id'] == "4")
                            <div class="row">
                                <div class="col-2"><b>Pure HTML:</b></div>
                                <div class="col-10">
                                    <textarea id="body" name="body" cols="100" rows="4" class="form-control">{{ $item['body'] }}</textarea>
                                </div>
                            </div>
                        @elseif ($item['type_id'] == "7")
                            <div class="row">
                                <div class="col-2"><b>Email Address:</b></div>
                                <div class="col-10">
                                    <input id="body" name="body"  class="form-control" value="{{ $item['body'] }}">
                                </div>
                            </div>
                        @elseif ($item['type_id'] == "8")
                            <div class="row">
                                <div class="col-2"><b>Form Action:</b></div>
                                <div class="col-10">
                                    <input id="linkAddress" name="linkAddress"  class="form-control" value="{{ $item['link'] }}">
                                </div>
                                <div class="col-2"><b>Form Content:</b></div>
                                <div class="col-10">
                                    <textarea id="body" name="body" cols="100" rows="4" class="form-control">{{ $item['body'] }}</textarea>
                                </div>
                            </div>






                        @endif
                        <div class="row">
                            <div class="col-2"><b>Style:</b></div>
                            <div class="col-10">
                                    @if ($item['type_id'] != "3" && $item['type_id'] != "4" && $item['type_id'] != "7" && $item['type_id'] != "8")
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
            </div>
                <hr>
        @endforeach
@endsection

