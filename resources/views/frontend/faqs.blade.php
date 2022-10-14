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
    $user = \App\Models\User::where('ip_address',request()->ip())->first();
    $order = \App\Models\Order::where('id',Session::get('order_id'))->first();
    // dd($order);
    @endphp

<div class="c4-9-of-12 c5-9-of-12 main-content float-right">
    <div class="block">
    <h3 class="header">Frequently Asked Questions</h3>
    <div class="separator"></div>
    <div>
    <div>
    <p><a class="link-2" href="#1">Do you ship internationally?</a></p><br>
    <p><a class="link-2" href="#2">Do you ship to APO / FPO?</a></p><br>
    <p><a class="link-2" href="#3">Eau de toilette vs eau de parfum: What's the difference?</a></p><br>
    <p><a class="link-2" href="#4">What is the difference between a splash and a spray?</a></p><br>
    <p><a class="link-2" href="#5">What is a tester?</a></p><br>
    <p><a class="link-2" href="#6">Why do some men wear Cologne, and others prefer to wear After Shave?</a></p><br>
    <p><a class="link-2" href="#7">What do fragrance notes refer to?</a></p><br>
    <p><a class="link-2" href="#8">How can i keep my fragrance from going bad?</a></p><br>
    <p><a class="link-2" href="#9">My fragrance has been discontinued, how do you still have it in stock?</a></p><br>
    <p><a class="link-2" href="#10">My perfume does not spray, nothing comes out, is it broken?</a></p><br>
    </div>
    <div>
    <h4><span id="1">Do you ship internationally?</span></h4>
    <p>Yes, we ship to over 220 countries. Please use our shipping calculator to see if we ship to your country. Your order may be subject to import duties and taxes, which are levied once a package reaches your country. We have no control over these charges and cannot predict what the costs may be. Customs policies vary from country to country; you should contact your local customs office for further information.</p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="2">Do you ship to APO / FPO?</span></h4>
    <p>Yes, we do. We can ship to international destinations via USPS Postal Service. This includes APO/FPO addresses. Customs duties and taxes may be collected at the time of delivery.</p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="3">Eau de toilette vs eau de parfum: What's the difference?</span></h4>
    <p>The difference is simply the amount or concentration of oils in the fragrance. Eau de parfum has a higher concentration than eau de toilette, making it a stronger fragrance. There is also pure perfume, which has the highest concentration, and eau de cologne, which has the lowest concentration of oils.</p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="4">What is the difference between a splash and a spray?</span></h4>
    <p>There is absolutely no difference in the fragrance. The
    difference is in the method of application only. However, a spray bottle, being
    sealed all the time, may actually have a longer shelf life. Making the decision
    between spray and splash is entirely a matter of personal preference.</p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="5">What is a tester?</span></h4>
    <p>Testers are even more discounted than the fancy boxed versions and are great if you don't have a need for the fancy box.
    Testers are 100% authentic, fresh and completely full just like the original fragrance, however they are meant for the counter in a department store.
    Testers often come in a plain white box but sometimes they do not have a cap or a box. The savings on the packaging means you save even more!</p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="6">Why do some men wear Cologne, and others prefer to wear After Shave?</span></h4>
    <p>After Shave Lotion will usually sting as well as help close
    the pores after shaving. After Shave Balm is actually soothing to the skin.
    After Shave Gel also soothes the skin, but cools the skin as well and relieves
    razor burn.</p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="7">What do fragrance notes refer to?</span></h4>
    <p>
    <a href="/blog/how-is-perfume-made/">Fragrances are comprised</a> of many <a href="/blog/how-to-smell-good/">different scents</a>, these scents are called "notes."
    <br><br>
    Top notes are very light and last just a few minutes (5-10
    minutes). Middle notes become apparent in about 15 minutes after application.
    These can last up to an hour or more. Bottom notes are the heavier ingredients.
    These last the longest, usually for several hours.
    </p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="8">How can i keep my fragrance from going bad?</span></h4>
    <p>
    <a href="/blog/how-to-store-perfume/">Keep all fragrances</a> in a cool, dry area, and away from
    windows as sunlight can unbalance the various ingredients. An opened bottle
    should be kept in its box to insure a longer shelf life.
    </p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="9">My fragrance has been discontinued, how do you still have it in stock?</span></h4>
    <p>We stock thousands of fragrances, many of these have been
    discontinued. Our buyers travel the globe purchasing entire inventories of hard
    to find or discontinued fragrances to store in our temperature and humidity
    controlled warehouse.</p>
    <a class="link-2" href="#top">(Back To Top)</a>
    <br><br>
    </div>
    <div>
    <h4><span id="10">My perfume does not spray, nothing comes out, is it broken?</span></h4>
    <p>
    To get your fragrance spraying again please follow these instructions below:
    </p>
    <ol>
    <li>Hold one finger against the spray nozzle.</li>
    <li>Use your other finger to pump the spray 10-15x.</li>
    <li>Remove your finger from the spray nozzle.</li>
    <li>Pump the spray another 10-15x as needed.</li>
    <li>Allow the fragrance bottle to settle for 5-10 minutes.</li>
    </ol>
    <br>&nbsp;
    <p>
    Your fragrance bottle should be fully functional now! If you are still having problems, you can repeat steps 1-5.
    <br>
    For further assistance, please email us at support@fragranceX.com.
    <br>
    <span id="ProductVideoFaq" style="display: inline;">
    <iframe title="Fragrance broken more assistance" src="//fast.wistia.net/embed/iframe/nh9swglle4?autoPlay=false&amp;endVideoBehavior=reset&amp;playerColor=21165e&amp;version=v1&amp;volumeControl=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" width="305" height="172"></iframe>
    </span>
    </p>
    <a class="link-2" href="#top">(Back To Top)</a>
    </div>
    </div>
    </div>
    </div>

@endsection

