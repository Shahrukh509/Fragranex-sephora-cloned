@extends('frontend.layouts.master')
@section('title')
    Home
@endsection
@section('meta_title')
    Home
@endsection
@section('meta_description')
    This is our perfume shop.......
@endsection
@section('meta_keyword')
    Perfume-shop
@endsection

@section('content')
    <!-- main sec -->
    @php
    $user = \App\Models\User::where('role_id',1)->first();
    @endphp
    <div class="c4-9-of-12 c5-9-of-12 main-content float-right">
<div class="block">
<h3 class="header">Contact us or click a help section <span class="mq4none">in the menu above</span> <span class="mq4show">to the left</span> for assistance.</h3>
<div class="separator"></div>
<div>
<div class="c-12-of-12">
<h4><strong>By Mail:</strong></h4>
<a href="mailto:support@fragranceX.com" auto-tracked="true">Support@FragranceX.com</a> or <a>{{ $user->email??'' }}</a>
<br><br><br>
</div>
<div class="c2-12-of-12">
<div class="c2-8-of-12">
<h4><strong>By Phone:</strong></h4>
Customer service is open from 7am to 4pm eastern time:
<br>
call at: {{ $user->phone??'' }}

<br><br>
<h4><strong>Outside the Pakistan Dial:</strong></h4>
call at: {{ $user->phone??'' }}
<br><br>
</div>
<div class="c2-4-of-12">
<h4><strong>By Mail:</strong></h4>
FragranceX.com
<br>
bufferzone
<br>
karachi
<br><br>
<h4><strong>By Fax:</strong></h4>
{{ $user->phone??'' }}
<br><br>
</div>
</div>
</div>
</div>
<div class="block">
<h3 class="header">
Shop with confidence, we offer a 30-day money back guarantee.
</h3>
<div class="separator"></div>
<div>
<iframe title="FragranceX.com map" src="https://www.google.com/maps/d/viewer?mid=1E8T9MaTR0sXSmSEpwiTcaV0pzZk&hl=en_US&ll=24.961950500000903%2C67.07001100000001&z=22" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<picture>
<source srcset="https://img.fragrancex.com/images/5plant.webp" type="image/webp">
<img src="https://img.fragrancex.com/images/5plant.jpg" alt="contact us">
</picture>
</div>
</div>
</div>

@endsection
