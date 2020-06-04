@extends('layouts.header')

    <div class="row" style="padding-top: 100px;padding-left: 30px">
        <form method="POST" action="/item/update">
            @csrf
            <input id="pageId" name="pageId" type="hidden" value="{{$page->id}}">
            <input id="type" name="type" type="hidden" value="{{$gtag->type_id}}">
            <input id="itemId" name="itemId" type="hidden" value="{{$gtag->id}}">
                 <h3>Site's Google Ads:  </h3>
            <div class="row spaced">

                <div class="col-2">gtag.js Content:</div>
                <div class="col-8">
                    <textarea id="body" name="body" cols="100" rows="10">{!! html_entity_decode($gtag->body) !!}</textarea>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/item/update">
            @csrf
            <input id="pageId" name="pageId" type="hidden" value="{{$page->id}}">
            <input id="type" name="type" type="hidden" value="{{$fpixel->type_id}}">
            <input id="itemId" name="itemId" type="hidden" value="{{$fpixel->id}}">
           <h3>Site's Facebook Pixels:  </h3>
            <div class="row spaced">

                <div class="col-2">Facebook Snippet:</div>
                <div class="col-8">
                    <textarea id="body" name="body" cols="100" rows="10">{{ $fpixel->body }}</textarea>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
        <hr>
        <h3>{{$page->name}} Meta Configuration: </h3>
        <form method="POST" action="/page/update">
            @csrf
            <input id="pageId" name="pageId" type="hidden" value="{{$page->id}}">
            <div class="row spaced">
                    <div class="col-3-sm">Meta Name:</div>
                    <div class="col-9-sm">
                        <input type="text" id="metaName" name="metaName" value="{{ $page->meta_name }}" >
                    </div>
                    <div class="col-3">Meta Description:</div>
                    <div class="col-8">
                        <textarea id="metaDescription" name="metaDescription" cols="100">{{ $page->meta_description }}</textarea>
                    </div>
                <div class="col-3">
                    Indexed (current page):
                </div>
                <div class="col-9">
                    <label class="switch">
                        <input id="indexedFlag" name="indexedFlag" type="checkbox"  @if ($page->indexed)checked @endif>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>

    @yield('content')

    @include('layouts.footer')

</body>
<html>

