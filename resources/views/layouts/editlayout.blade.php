@extends('layouts.header')

    <div class="row" style="padding-top: 100px;padding-left: 30px">
    <h1>Page Meta Configuration: {{$page->name}}</h1><hr>
    <form method="POST" action="/page/update">
        @csrf
        <input id="pageId" name="pageId" type="hidden" value="{{$page->id}}">
        <div class="row">
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

<footer>

    <div id="footer">©2013-2016 BeMo Academic Consulting Inc. All rights reserved.
        <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html" target="_blank">
            <span style="text-decoration:underline;">Disclaimer &amp; Privacy Policy</span>
        </a>
        <a href="mailto:info@bemoacademicconsulting.com" id="rw_email_contact" >
            <span style="text-decoration:underline;">Contact Us</span>
        </a>

    </div>

    <div id="socialicons">
        <div id="socialicons1"></div>
        <a class="social" href="https://www.facebook.com/bemoacademicconsulting">F</a><a class="social" href="https://twitter.com/BeMo_AC">L</a>
    </div>

</footer>
<a href="#" class="scrollup" style="display: inline;">Scroll</a>
</div>
</body>
<html>

