@extends('frontend.layouts.master')
@section('title')
{{ $category->title?? 'No Title' }}
@endsection
@section('meta_title')
{{ $category->meta_title?? 'No MetaTitle' }}
@endsection
@section('meta_description')
{{ $category->meta_description?? 'No MetaDescription' }}
@endsection
@section('meta_keyword')
{{ $category->meta_keyword?? 'No MetaKeyword' }}
@endsection


@section('content')
<!-- main sec -->
<div role="main" id="content">
<section>
<input type="hidden" id="YandexSrc" value="https://api-maps.yandex.ru/2.1/?apikey=0dac45b1-0ab2-4177-821d-cf818c96686c&amp;lang=ru-RU">
<input type="hidden" id="EnableRuPost" value="true">
<input type="hidden" id="ppcid" value="AazZnwIJjFg5QvYjGciSC7grVqnh2lqSDgzw98XbUgPM7tU7nE_HOGQVqzQH52LRgXQVo39pvDFfxjUS">
<input type="hidden" id="venmo-eligible" value="True">
<div class="std-side-padding checkout">
<div class="ErrorMessageBox c4-8-of-12">
</div>
{{-- <section class="customer-login pop c4-8-of-12">
<div class="r">
<div style="display: flex; justify-content: space-between;align-items: center;">Sign Into Your Account <i class="fa fa-angle-down" aria-hidden="true"></i>
</div>
</div>
<input class="pop-trigger" type="checkbox" aria-label="Expand menu to sign into your account">
<div class="pop-content" id="CheckoutLoginAjaxSection">
<form action="/widgets/checkoutlogin/ajaxcheckoutloginnd" class="checkout-login" data-ajax="true" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#CheckoutLoginAjaxSection" id="CheckoutLoginForm" method="post" novalidate="novalidate">
<div>
<label for="LoginEmailAddress" id="LoginEmail">Email</label>
<input autocomplete="email" class="c-12-of-12 c4-6-of-12" data-val="true" data-val-regex="Please enter a valid email address" data-val-regex-pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?"
data-val-required="Please enter a valid email address" id="LoginEmailAddress" name="LoginEmailAddress" type="email" value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAmJJREFUWAntV7uKIkEUvbYGM4KID3wEIgjKRLLpKGLgFwiCfslGhkb7IbLgAzE1GhMxWxRRBEEwmEgDERWfW6fXuttq60a2wU6B1qlzb9U5fatsKROJVigUArvd7oeAyePx6Af3qGYymT7F2h8Wi+V7Pp+fmE7iv4Sw81GieusKIzNh4puCJzdaHIagCW1F4KSeQ4O4pPLoPb/3INBGBZ7avgz8fxWIxWIUCoX43Blegbe3NwoGg88zwMoncFUB8Yokj8dDdrv9MpfHVquV/H4/iVcpc1qgKAp5vV6y2WxaWhefreB0OimXy6kGkD0YDKhSqdB2u+XJqVSK4vE4QWS5XKrx0WjEcZ/PR9lslhwOh8p1Oh2q1Wp0OBw4RwvOKpBOp1kcSdivZPLvmxrjRCKhiiOOSmQyGXp5ecFQbRhLcRDRaJTe39//BHW+2cDr6ysFAoGrlEgkwpwWS1I7z+VykdvtliHuw+Ew40vABvb7Pf6hLuMk/rGY02ImBZC8dqv04lpOYjaw2WzUPZcB2WMPZet2u1cmZ7MZTSYTNWU+n9N4PJbp3GvXYPIE2ADG9Xqder2e+kTr9ZqazSa1222eA6FqtUoQwqHCuFgscgWQWC6XaTgcEiqKQ9poNOiegbNfwWq1olKppB6yW6cWVcDHbDarIuzuBBaLhWrqVvwy/6wCMnhLXMbR4wnvtX/F5VxdAzJoRH+2BUYItlotmk6nLGW4gX6/z+IAT9+CLwPPr8DprnZ2MIwaQBsV+DBKUEfnQ8EtFRdFneBDKWhCW8EVGbdUQfxESR6qKhaHBrSgCe3fbLTpPlS70M0AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
<div class="error-text">
<span class="field-validation-valid" data-valmsg-for="LoginEmailAddress" data-valmsg-replace="true"></span>
</div>
</div>
<div>
<label for="Password">Password</label>
<a href="/customeraccount/forgotpassword" class="link-1">Forgot your password?</a>
<input autocomplete="current-password" class="c-12-of-12 c4-6-of-12" data-val="true" data-val-required="Please enter your password" id="Password" name="Password" type="password" value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAmJJREFUWAntV7uKIkEUvbYGM4KID3wEIgjKRLLpKGLgFwiCfslGhkb7IbLgAzE1GhMxWxRRBEEwmEgDERWfW6fXuttq60a2wU6B1qlzb9U5fatsKROJVigUArvd7oeAyePx6Af3qGYymT7F2h8Wi+V7Pp+fmE7iv4Sw81GieusKIzNh4puCJzdaHIagCW1F4KSeQ4O4pPLoPb/3INBGBZ7avgz8fxWIxWIUCoX43Blegbe3NwoGg88zwMoncFUB8Yokj8dDdrv9MpfHVquV/H4/iVcpc1qgKAp5vV6y2WxaWhefreB0OimXy6kGkD0YDKhSqdB2u+XJqVSK4vE4QWS5XKrx0WjEcZ/PR9lslhwOh8p1Oh2q1Wp0OBw4RwvOKpBOp1kcSdivZPLvmxrjRCKhiiOOSmQyGXp5ecFQbRhLcRDRaJTe39//BHW+2cDr6ysFAoGrlEgkwpwWS1I7z+VykdvtliHuw+Ew40vABvb7Pf6hLuMk/rGY02ImBZC8dqv04lpOYjaw2WzUPZcB2WMPZet2u1cmZ7MZTSYTNWU+n9N4PJbp3GvXYPIE2ADG9Xqder2e+kTr9ZqazSa1222eA6FqtUoQwqHCuFgscgWQWC6XaTgcEiqKQ9poNOiegbNfwWq1olKppB6yW6cWVcDHbDarIuzuBBaLhWrqVvwy/6wCMnhLXMbR4wnvtX/F5VxdAzJoRH+2BUYItlotmk6nLGW4gX6/z+IAT9+CLwPPr8DprnZ2MIwaQBsV+DBKUEfnQ8EtFRdFneBDKWhCW8EVGbdUQfxESR6qKhaHBrSgCe3fbLTpPlS70M0AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
<div class="error-text">
<span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
</div>
</div>
<div class="c-12-of-12 c4-6-of-12 sign-in-container">
<div>
<button class="btn-type-2 r" id="CheckoutLogin">Sign In</button>
</div>
<div>
or
</div>
<div>
<a class="social-login facebook-login r" href="/widgets/externallogin/externallogin?provider=FacebookOAuth2&amp;reqLoc=CheckoutPage" rel="nofollow">
<svg class="" viewBox="2 -2 24 24">
<use xlink:href="/Images/general-icon.svg?v=3#sign-in-facebook"></use>
</svg>
<span class="">Sign in with Facebook</span>
</a>
</div>
<div>
<a class="social-login google-login r" href="/widgets/externallogin/externallogin?provider=GoogleSignin&amp;reqLoc=CheckoutPage" rel="nofollow">
<img src="https://img.fragrancex.com/images/assets/logo/google.svg" alt="">
<span class="">Sign in with Google</span>
</a>
</div>
</div>
</form>
</div>
<span></span>
</section> --}}

<form method="post" action="{{ route('front.save.order') }}">
@csrf
<section class="shipping-address c4-8-of-12 ">
<div>
<div class="h6">Step 1</div>
<div class="sub-header">
Enter Your Shipping Address
</div>
</div>
<div class="address-form" style="">
{{-- <div class="ru-addr" style="display: none">
Use map to automatically fill out fields or enter manually.
</div> --}}
{{-- <div class="ru-addr" style="display: none">
<div id="YandexMap" style="width: 100%; height: 400px"></div>
</div> --}}
<div>
<label for="EmailAddress">Email</label>
<input  class="c-12-of-12 c4-6-of-12"
name="email" type="email" value="{{ old('email')}}" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
<div class="error-text">
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">First Name</label>
<input class="c-12-of-12 c4-6-of-12"  name="first_name" type="text" value="{{ old('first_name')}}">
<div class="error-text">
@error('first_name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Last Name</label>
<input class="c-12-of-12 c4-6-of-12"  name="last_name" type="text" value="{{ old('last_name')}}">
<div class="error-text">
@error('last_name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Address 1</label>
<input class="c-12-of-12 c4-6-of-12"  name="address_1" type="text" value="{{ old('address_1')}}">
<div class="error-text">
@error('address_1')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Address 2 (optional)</label>
<input class="c-12-of-12 c4-6-of-12"  name="address_2" type="text" value="{{ old('address_2')}}">
<div class="error-text">
@error('address_2')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>

<div class="name-section">
<label for="ShippingFirstName">House No.</label>
<input class="c-12-of-12 c4-6-of-12"  name="house_no" type="text" value="{{ old('house_no')}}">
<div class="error-text">
@error('house_no')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Near Location</label>
<input class="c-12-of-12 c4-6-of-12"  name="near_location" type="text" value="{{ old('near_location')}}">
<div class="error-text">
@error('near_location')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">City</label>
<input class="c-12-of-12 c4-6-of-12"  name="city" type="text" value="{{ old('city')}}">
<div class="error-text">
@error('city')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">State or Prov.</label>
<input class="c-12-of-12 c4-6-of-12"  name="state_province" type="text" value="{{ old('state_province')}}">
<div class="error-text">
@error('state_province')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Zip/Postal Code</label>
<input class="c-12-of-12 c4-6-of-12"  name="zip_code" type="number" value="{{ old('zip_code')}}">
<div class="error-text">
@error('zip_code')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div>
<label for="ShippingCountry">Country</label>
<div class="c-12-of-12 c4-6-of-12">
<div class="select-container">
@php
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
@endphp
<select  name="country">
<option selected disabled="true">Please select country</option>
@foreach($countries as $country)
<option>{{ $country }}</option>
@endforeach
</select>
</div>
@error('country')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="error-text">
<span class="field-validation-valid" data-valmsg-for="ShippingCountry" data-valmsg-replace="true"></span>
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Phone</label>
<input class="c-12-of-12 c4-6-of-12"  name="phone" type="number" value="{{ old('phone')}}" pattern="[/(+92|03)\d{9}/]">
<div class="error-text">
@error('phone')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>

</div>
</section>
<section class="billing-address c4-8-of-12 ">
<div>
<div class="h6">Step 2</div>
<div class="sub-header">Select a Billing Address</div>
</div>
<div class="pop">
<div>
<input checked="checked" id="ship-to-billing" name="billing_type" type="radio" value="shipping_address"> 
<label for="ship-to-billing">
Bill to my shipping address
</label>
</div>
<div>
<input class="pop-trigger" id="ship-to-new-addr" name="billing_type" type="radio" value="different_address"> <label for="ship-to-new-addr">
Bill to a different address
</label>
<div class="pop-content">
<div class="address-form" style="">

{{-- <div class="ru-addr" style="display: none">
Use map to automatically fill out fields or enter manually.
</div> --}}
{{-- <div class="ru-addr" style="display: none">
<div id="YandexMap" style="width: 100%; height: 400px"></div>
</div> --}}
<div>
<label for="EmailAddress">Email</label>
<input  class="c-12-of-12 c4-6-of-12"
name="d_email" type="email" value="{{ old('d_email')}}" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
<div class="error-text">
@error('d_email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">First Name</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_first_name" type="text" value="{{ old('d_first_name')}}">
<div class="error-text">
@error('d_first_name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Last Name</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_last_name" type="text" value="{{ old('d_last_name')}}">
<div class="error-text">
@error('d_last_name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Address 1</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_address_1" type="text" value="{{ old('d_address_1')}}">
<div class="error-text">
@error('d_address_1')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Address 2 (optional)</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_address_2" type="text" value="{{ old('d_address_2')}}">
<div class="error-text">
@error('d_address_2')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>

<div class="name-section">
<label for="ShippingFirstName">House No.</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_house_no" type="text" value="{{ old('d_house_no')}}">
<div class="error-text">
@error('d_house_no')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Near Location</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_near_location" type="text" value="{{ old('d_near_location')}}">
<div class="error-text">
@error('d_near_location')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">City</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_city" type="text" value="{{ old('d_city')}}">
<div class="error-text">
@error('d_city')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">State or Prov.</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_state_province" type="text" value="{{ old('d_state_province')}}">
<div class="error-text">
@error('d_state_province')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Zip/Postal Code</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_zip_code" type="number" value="{{ old('d_zip_code')}}">
<div class="error-text">
@error('d_zip_code')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div>
<label for="ShippingCountry">Country</label>
<div class="c-12-of-12 c4-6-of-12">
<div class="select-container">
@php
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
@endphp
<select  name="d_country">
<option selected disabled="true">Please select country</option>
@foreach($countries as $country)
<option>{{ $country }}</option>
@endforeach
</select>
</div>
@error('country')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="error-text">
<span class="field-validation-valid" data-valmsg-for="ShippingCountry" data-valmsg-replace="true"></span>
</div>
</div>
<div class="name-section">
<label for="ShippingFirstName">Phone</label>
<input class="c-12-of-12 c4-6-of-12"  name="d_phone" type="text" value="{{ old('d_phone')}}" pattern="/(+92|03)\d{9}/">
<div class="error-text">
@error('d_phone')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>

</div>
</div>
</div>
</div>
</section>
{{-- <section id="checkout-shipping-method" class="shipping-section c4-8-of-12">
<div>
<div class="h6">Step 3</div>
<div class="sub-header">Select a Shipping Option</div>
</div>
<div id="CheckoutShippingAsyncSection">
<div class="shipping-options">
<div>
<input type="radio" name="ShippingMethod" id="shipping-0" value="be51bee9-f699-4451-87ea-fb1a1801a8bd" checked="">
<label for="shipping-0">
<span>Shipping (4 - 12 Business Days)</span>
<span>
- <bdo dir="ltr">ARS $&nbsp;48,427.82</bdo>
</span>
</label>
</div>
</div>
</div>
</section> --}}
{{-- <section class="coupon-section pop c4-8-of-12">
<div>
<div>
Apply a Coupon or Gift Certificate Code (Optional)
<span class="pull-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>
</div>
<input class="pop-trigger" type="checkbox" aria-label="Expand menu to apply a coupon code">
<div class="pop-content c4-6-of-12">
<div class="checkout-coupon-wrapper" id="CheckoutCouponGiftCertAsyncSection">
<div class="text-btn-combo">
<input type="text" class="input-text-1 " placeholder="Enter Code" name="CoupongGiftCertCode" id="CoupongGiftCertCode" value="" aria-label="Expand menu to apply a coupon code">
<button id="SubmitCoupon" class="btn btn-alt-2" formaction="/Widgets/CheckoutCouponGiftCert/AddCouponNoscript" form="">Apply</button>
</div>
</div>
</div>
<span></span>
</section> --}}
<section class="giftwrap-section pop c4-8-of-12">
<div>
<div>Make This Order a Gift <span class="pull-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
</div>
<input class="pop-trigger" type="checkbox" aria-label="Expand menu to add gift wrap options">
<div class="pop-content c4-6-of-12">
<input id="IsGiftWrapped" name="order_type" type="checkbox" value="true">
<div class="c0-7-of-12 c-8-of-12 c4-12-of-12">
<label for="IsGiftWrapped">
<span>Make this order a gift</span>
<span><bdo dir="ltr">RS <strong>{{ number_format(500) }}</strong></bdo> will be added to your order total</span>
<span>No pricing information appears on the packing slip</span>
</label>
</div>
<div class="c0-5-of-12 c-4-of-12">
<img src=https://media.istockphoto.com/photos/various-of-luxury-cosmetics-picture-id619749454?k=20&m=619749454&s=612x612&w=0&h=syVNQPVe_84K6x2_sldiuHDMgpwLQHXnaAA4S_n6PKU=" alt="Gift Wrap" height="115" width="115">
</div>
<div>
<textarea aria-label="Gift Wrap Message" cols="20" id="GiftWrapMessage" name="message" placeholder="Gift Message (Optional)" rows="2"></textarea>
</div>
</div>
<span></span>
<div class="pop-content c4-6-of-12">
<div class="express">
<img src="https://media.istockphoto.com/photos/various-of-luxury-cosmetics-picture-id619749454?k=20&m=619749454&s=612x612&w=0&h=syVNQPVe_84K6x2_sldiuHDMgpwLQHXnaAA4S_n6PKU=" alt="Gift Wrap" height="250" width="250">
</div>
</div>
</section>
<section class="payment-section c4-8-of-12" id="checkout-payment-method">
<div>
<div class="h6">Step 3</div>
<div class="sub-header">
Payment Method
<img class="padlock" src="https://img.fragrancex.com/images//assets/icons/padlock-icon.svg" alt="Padlock">
</div>
<div>

<input name="payment_method" type="radio" class="input-payment-method" value="COD">
<label>
Cash on Delivery
</label>
</div>
<div>

<input name="payment_method" type="radio" value="Bank Transfer">
<label>
Bank Transfer (After transfer send screenshot to this number : +92306511418)
</label>
</div>

@error('payment_method')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


</div>

</section>
<section class="order-summary c4-8-of-12">
<div class="safe-shop-partial">
<h2>Shop with Confidence</h2>
<p>
We offer a 30 day money-back guarantee.
<a target="_blank" href="/termsandconditions/default_en.html">
Terms &amp; Conditions
</a>
</p>
<h2>Safe Shopping Guarantee</h2>
<p>All information is encrypted and transmitted without risk and your information is kept 100% private.
</p>
</div>
<div class="order-summary-container">
<script>
var orderSummaryGrandTotal = 469.4300;
var orderConversionRate = 138.3652;
var orderCurrencySymbol = "ARS $ ";
</script>
<div class="cart-item-section">
<div class="cart-grid">
<div class="cart-col-header                                     show-mq-4
">
<div class="c3-3-of-12 c5-2-of-12 grey-header                                                           c4-3-of-12
">
Product Information
</div>
<div class="c3-9-of-12 c5-10-of-12                                                c4-9-of-12
">
<div class="c5-4-of-12 info-div                                                 c4-4-of-12
"></div>
<div class="c5-8-of-12 price-div                                                  c4-8-of-12
">
<div class="c5-5-of-12 price-wrapper-header                                                                 c4-5-of-12
">
<div class="grey-header price-header">Price</div>
</div>
<div class="c5-3-of-12 qty-container-header                                                                 c4-3-of-12
">
<div class="grey-header">Quantity</div>
</div>
<div class="c5-4-of-12 total-wrapper-header                                                                 c4-4-of-12
">
<div class="grey-header">Total</div>
</div>
</div>
</div>
</div>
<div class="cartitems-padding">
    @foreach(\Cart::getContent() as $value)
@php
$product = \App\Models\ProductVariation::where('id',$value->id)->first();
// dd($product);
$brand_slug = $product->product->brand->slug;
@endphp
    
<div class="cart-item-wrapper nonmessage cart-product">
<div class="c0-5-of-12 c-4-of-12 c3-3-of-12 c5-2-of-12 item-img">
<a href="{{ route('front.product.show', [$brand_slug, $product->product->slug]) }}" aria-label="Light Blue by Dolce &amp; Gabbana 24 ml Eau De Toilette Spray for Women">
<picture>
<source srcset="{{ $product->image->path??$product->product->image->path }}" type="image/webp">
<img src="{{ $product->image->path??$product->product->image->path }}" alt="" height="218" width="218">
</picture>
</a>
</div>

<div class="c0-7-of-12 c-8-of-12 c3-9-of-12 c5-10-of-12 item-content">
<div class="c2-6-of-12 c5-4-of-12 info-div  c4-4-of-12">
<h2 class="cart-item-name serif ">
<span>{{ $value->name??'' }}</span>
</h2>
<div class="cart-item-brand">by {{ $product->product->brand->name??'' }}</div>
<div class="cart-item-sku mtn">Item #{{ $value->id }}</div>
<div class="cart-item-size">
{{ $value->attributes->size }} {{ $product->type->name??'' }}
</div>
<div class="stock-msg">
{{ $value->attributes->instock?'InStock':'Out of stock' }} </div>
<div class="sharethis-inline-share-buttons" data-url="https://www.a.com/products/_cid_perfume-am-lid_l-am-pid_884w__products.html?sid=69036" data-title="Light Blue by Dolce &amp; Gabbana 24 ml Eau De Toilette Spray for Women" data-image="https://img.fragrancex.com/images/products/sku/small/69036.jpg">
</div>
</div>
<div class="c2-6-of-12 c5-8-of-12 price-div                                                         c4-8-of-12
">
<div class="c2-12-of-12 c5-7-of-12 column-wrapper mq2none price-wrapper">
<div class="price-section">
<div class="price-text c c2-3-of-12 c5-12-of-12">
    <span><bdo dir="ltr">Rs {{ $value->price??'' }}</bdo></span>
</div>
</div>
</div>
<div class="c2-12-of-12 c5-5-of-12 column-wrapper mq2show price-wrapper                                                                                         c4-5-of-12
">
<div class="price-section">
<div class="grey-label">Price</div>
<div class="price-text c c2-3-of-12 c5-12-of-12">
    <span><bdo dir="ltr">Rs {{ $value->price??'' }}</bdo></span>
</div>
</div>
</div>
<div class="c2-12-of-12 c5-3-of-12 column-wrapper qty-container                                                                                 c4-3-of-12
">
<div class="grey-label">Quantity<span class="mq4none">:&nbsp;</span>
</div>


<div>
{{ $value->quantity??'' }}
</div>
</div>
<div class="c5-4-of-12 column-wrapper mq4show total-wrapper                                                                             c4-4-of-12
">
<div class="price-section">
<div class="price-text c c2-3-of-12 c5-12-of-12">
    <span><bdo dir="ltr">Rs {{ number_format($value->price * $value->quantity) }}</bdo></span>
</div>
</div>
</div>
</div>
</div>

</div>
@endforeach
</div>
</div>
</div>
<div class="order-summary-wrapper bg-padding">
<div class="cart-tip-wrapper">
</div>
{{-- @php
$condition1 = new \Darryldecode\Cart\CartCondition(array(

'target' => 'subtotal',
'target' => 'shipping', // this condition will be applied to cart's subtotal when getSubTotal() is called.
'value' => '+500'
));

\Cart::condition($condition1);
@endphp --}}
<div class="subtotal-section">
<div class="c-6-of-12">Subtotal</div>
<div class="c-6-of-12"><bdo dir="ltr">Rs {{ \Cart::getSubTotal() }}</bdo></div>
</div>
{{-- <div class="shipping-section">
<div class="c-6-of-12">Shipping</div>
<div class="c-6-of-12"><bdo dir="ltr">ARS $&nbsp;48,427.82</bdo></div>
</div> --}}
<div class="line"></div>
<div class="total-section">
<div class="c-6-of-12">
Total </div>
<div class="c-6-of-12"><bdo dir="ltr">Rs {{ \Cart::getTotal() }}</bdo></div>
<div class="c-12-of-12 place-order-wrapper">
<button type="submit" class="btn-type-2 place-order r">Place
Order</button>
</div>
</div>
</div>
</div>
{{-- <div class="venmo-wrapper" style="display: none;">
<div class="venmo-container">
<div id="zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk" class="paypal-buttons paypal-buttons-context-iframe paypal-buttons-label-pay paypal-buttons-layout-vertical" data-paypal-smart-button-version="5.0.330" style="min-height: 50px; height: 0px; transition: all 0.2s ease-in-out 0s;">
<style nonce="">
#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk {
position: relative;
display: inline-block;
width: 100%;
min-height: 25px;
min-width: 150px;
max-width: 750px;
font-size: 0;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.component-frame {
z-index: 100;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.prerender-frame {
transition: opacity .2s linear;
z-index: 200;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.visible {
opacity: 1;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.invisible {
opacity: 0;
pointer-events: none;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>.smart-menu {
position: absolute;
z-index: 300;
top: 0;
left: 0;
width: 100%;
}
</style><iframe allowtransparency="true" name="__zoid__paypal_buttons__eyJzZW5kZXIiOnsiZG9tYWluIjoiaHR0cHM6Ly93d3cuZnJhZ3JhbmNleC5jb20ifSwibWV0YURhdGEiOnsid2luZG93UmVmIjp7InR5cGUiOiJwYXJlbnQiLCJkaXN0YW5jZSI6MH19LCJyZWZlcmVuY2UiOnsidHlwZSI6InJhdyIsInZhbCI6IntcInVpZFwiOlwiem9pZC1wYXlwYWwtYnV0dG9ucy11aWRfNjJlZTY3OTJjMV9tdGU2bWRpNm10a1wiLFwiY29udGV4dFwiOlwiaWZyYW1lXCIsXCJ0YWdcIjpcInBheXBhbC1idXR0b25zXCIsXCJjaGlsZERvbWFpbk1hdGNoXCI6e1wiX190eXBlX19cIjpcInJlZ2V4XCIsXCJfX3ZhbF9fXCI6XCJcXFxcLnBheXBhbFxcXFwuKGNvbXxjbikoOlxcXFxkKyk/JFwifSxcInZlcnNpb25cIjpcIjEwXzFfMFwiLFwicHJvcHNcIjp7XCJmdW5kaW5nU291cmNlXCI6XCJ2ZW5tb1wiLFwic3R5bGVcIjp7XCJjdXN0b21cIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwibGFiZWxcIjpcInBheVwiLFwibGF5b3V0XCI6XCJ2ZXJ0aWNhbFwiLFwiY29sb3JcIjpcImJsdWVcIixcInNoYXBlXCI6XCJyZWN0XCIsXCJ0YWdsaW5lXCI6ZmFsc2UsXCJoZWlnaHRcIjo1MCxcInBlcmlvZFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJtZW51UGxhY2VtZW50XCI6XCJiZWxvd1wifSxcImNyZWF0ZU9yZGVyXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfYjJjMDJjY2FiMl9tdGU2bWRpNm10a1wiLFwibmFtZVwiOlwiY3JlYXRlT3JkZXJcIn19LFwib25BcHByb3ZlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfMDk1YjE1ZTQ4ZV9tdGU2bWRpNm10a1wiLFwibmFtZVwiOlwib25BcHByb3ZlXCJ9fSxcImNzcE5vbmNlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInN0b3JhZ2VTdGF0ZVwiOntcImdldFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzEwNjIwZmEwMWFfbXRlNm1kaTZtdGtcIixcIm5hbWVcIjpcImdldFwifX0sXCJzZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF8yOTM4OTU3NDIyX210ZTZtZGk2bXRrXCIsXCJuYW1lXCI6XCJzZXRcIn19fSxcInNlc3Npb25TdGF0ZVwiOntcImdldFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2E3ZGZlOTNkNGZfbXRlNm1kaTZtdGtcIixcIm5hbWVcIjpcImdldFwifX0sXCJzZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF8xMzU2N2JmMDA0X210ZTZtZGk2bXRrXCIsXCJuYW1lXCI6XCJzZXRcIn19fSxcImNvbXBvbmVudHNcIjpbXCJidXR0b25zXCJdLFwibG9jYWxlXCI6e1wiY291bnRyeVwiOlwiVVNcIixcImxhbmdcIjpcImVuXCJ9LFwiY3JlYXRlQmlsbGluZ0FncmVlbWVudFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJjcmVhdGVTdWJzY3JpcHRpb25cIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwib25Db21wbGV0ZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJvblNoaXBwaW5nQ2hhbmdlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uU2hpcHBpbmdBZGRyZXNzQ2hhbmdlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uU2hpcHBpbmdPcHRpb25zQ2hhbmdlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uQ2FuY2VsXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uQ2xpY2tcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZ2V0UHJlcmVuZGVyRGV0YWlsc1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2U2ZDkzMGZkZWZfbXRlNm1kaTZtdGtcIixcIm5hbWVcIjpcImdldFByZXJlbmRlckRldGFpbHNcIn19LFwiZ2V0UG9wdXBCcmlkZ2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF80ZmQzMjYwYTEyX210ZTZtZGk2bXRrXCIsXCJuYW1lXCI6XCJnZXRQb3B1cEJyaWRnZVwifX0sXCJvbkluaXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9iMmM4ZjU1MDJkX210ZTZtZGk2bXRrXCIsXCJuYW1lXCI6XCJvbkluaXRcIn19LFwiZ2V0UXVlcmllZEVsaWdpYmxlRnVuZGluZ1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzM5MjdmMjU5YmNfbXRlNm1kaTZtdGtcIixcIm5hbWVcIjpcImdldFF1ZXJpZWRFbGlnaWJsZUZ1bmRpbmdcIn19LFwiY2xpZW50SURcIjpcIkFhelpud0lKakZnNVF2WWpHY2lTQzdnclZxbmgybHFTRGd6dzk4WGJVZ1BNN3RVN25FX0hPR1FWcXpRSDUyTFJnWFFWbzM5cHZERmZ4alVTXCIsXCJjbGllbnRBY2Nlc3NUb2tlblwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJwYXJ0bmVyQXR0cmlidXRpb25JRFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJtZXJjaGFudFJlcXVlc3RlZFBvcHVwc0Rpc2FibGVkXCI6ZmFsc2UsXCJlbmFibGVUaHJlZURvbWFpblNlY3VyZVwiOmZhbHNlLFwic2RrQ29ycmVsYXRpb25JRFwiOlwiZjYzOTE3NTEwMjhiNlwiLFwic3RvcmFnZUlEXCI6XCJ1aWRfNWE1ODdiZWE5OV9tdGE2bmR1Nm5kbVwiLFwic2Vzc2lvbklEXCI6XCJ1aWRfY2EwM2RkMjQ0Y19tdGE2bmR1Nm5kbVwiLFwiYnV0dG9uU2Vzc2lvbklEXCI6XCJ1aWRfOTk3ZDc5MDQwMF9tdGU2bWRpNm10a1wiLFwiZW5hYmxlVmF1bHRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZW52XCI6XCJwcm9kdWN0aW9uXCIsXCJhbW91bnRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwic3RhZ2VIb3N0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImJ1dHRvblNpemVcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYXBpU3RhZ2VIb3N0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImZ1bmRpbmdFbGlnaWJpbGl0eVwiOntcInBheXBhbFwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOmZhbHNlfSxcInBheWxhdGVyXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwicHJvZHVjdHNcIjp7XCJwYXlJbjNcIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwidmFyaWFudFwiOm51bGx9LFwicGF5SW40XCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhcmlhbnRcIjpudWxsfSxcInBheWxhdGVyXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmFyaWFudFwiOm51bGx9fX0sXCJjYXJkXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwiYnJhbmRlZFwiOnRydWUsXCJpbnN0YWxsbWVudHNcIjpmYWxzZSxcInZlbmRvcnNcIjp7XCJ2aXNhXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJtYXN0ZXJjYXJkXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJhbWV4XCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJkaXNjb3ZlclwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOnRydWV9LFwiaGlwZXJcIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwidmF1bHRhYmxlXCI6ZmFsc2V9LFwiZWxvXCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhdWx0YWJsZVwiOnRydWV9LFwiamNiXCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhdWx0YWJsZVwiOnRydWV9fSxcImd1ZXN0RW5hYmxlZFwiOmZhbHNlfSxcInZlbm1vXCI6e1wiZWxpZ2libGVcIjp0cnVlfSxcIml0YXVcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImNyZWRpdFwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiYXBwbGVwYXlcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInNlcGFcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImlkZWFsXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJiYW5jb250YWN0XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJnaXJvcGF5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJlcHNcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInNvZm9ydFwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibXliYW5rXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJwMjRcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInppbXBsZXJcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcIndlY2hhdHBheVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwicGF5dVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiYmxpa1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwidHJ1c3RseVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwib3h4b1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibWF4aW1hXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJib2xldG9cIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImJvbGV0b2JhbmNhcmlvXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJtZXJjYWRvcGFnb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibXVsdGliYW5jb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9fSxcInBsYXRmb3JtXCI6XCJtb2JpbGVcIixcInJlbWVtYmVyZWRcIjpbXCJ2ZW5tb1wiXSxcImV4cGVyaW1lbnRcIjp7XCJlbmFibGVWZW5tb1wiOnRydWUsXCJlbmFibGVWZW5tb0FwcExhYmVsXCI6ZmFsc2V9LFwicGF5bWVudFJlcXVlc3RcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZmxvd1wiOlwicHVyY2hhc2VcIixcInJlbWVtYmVyXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfZWNiNGI5YTEyMV9tdGU2bWRpNm10a1wiLFwibmFtZVwiOlwicmVtZW1iZXJcIn19LFwiY3VycmVuY3lcIjpcIlVTRFwiLFwiaW50ZW50XCI6XCJjYXB0dXJlXCIsXCJidXllckNvdW50cnlcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiY29tbWl0XCI6ZmFsc2UsXCJ2YXVsdFwiOmZhbHNlLFwiZW5hYmxlRnVuZGluZ1wiOltcInZlbm1vXCJdLFwiZGlzYWJsZUZ1bmRpbmdcIjpbXSxcImRpc2FibGVDYXJkXCI6W10sXCJtZXJjaGFudElEXCI6W10sXCJyZW5kZXJlZEJ1dHRvbnNcIjpbXCJ2ZW5tb1wiXSxcImNzcFwiOntcIm5vbmNlXCI6XCJcIn0sXCJub25jZVwiOlwiXCIsXCJnZXRQYWdlVXJsXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfNjM5OTM5MGM0ZF9tdGU2bWRpNm10a1wiLFwibmFtZVwiOlwiZ2V0UGFnZVVybFwifX0sXCJ1c2VySURUb2tlblwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJjbGllbnRNZXRhZGF0YUlEXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImRlYnVnXCI6ZmFsc2UsXCJ0ZXN0XCI6e1wiYWN0aW9uXCI6XCJjaGVja291dFwifSxcIndhbGxldFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJwYXltZW50TWV0aG9kTm9uY2VcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwicGF5bWVudE1ldGhvZFRva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImJyYW5kZWRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYXBwbGVQYXlTdXBwb3J0XCI6ZmFsc2UsXCJzdXBwb3J0c1BvcHVwc1wiOnRydWUsXCJzdXBwb3J0ZWROYXRpdmVCcm93c2VyXCI6dHJ1ZSxcInVzZXJFeHBlcmllbmNlRmxvd1wiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJhcHBsZVBheVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJleHBlcmllbmNlXCI6XCJcIixcImFsbG93QmlsbGluZ1BheW1lbnRzXCI6dHJ1ZX0sXCJleHBvcnRzXCI6e1wiaW5pdFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2E2NGI1YTQxNzZfbXRlNm1kaTZtdGtcIixcIm5hbWVcIjpcImluaXRcIn19LFwiY2xvc2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9kODk3MTYxNTdkX210ZTZtZGk2bXRrXCIsXCJuYW1lXCI6XCJjbG9zZTo6bWVtb2l6ZWRcIn19LFwiY2hlY2tDbG9zZVwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzA0Y2M1Nzg2ZGFfbXRlNm1kaTZtdGtcIixcIm5hbWVcIjpcImNoZWNrQ2xvc2VcIn19LFwicmVzaXplXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfMmRlY2FiZTJjNF9tdGU2bWRpNm10a1wiLFwibmFtZVwiOlwiUGVcIn19LFwib25FcnJvclwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2ZiOTNmMmZkOTBfbXRlNm1kaTZtdGtcIixcIm5hbWVcIjpcIkRlXCJ9fSxcInNob3dcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF85OGZlNTFkNzRkX210ZTZtZGk2bXRrXCIsXCJuYW1lXCI6XCJoZVwifX0sXCJoaWRlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfZDJlYTE5OWNmZF9tdGU2bWRpNm10a1wiLFwibmFtZVwiOlwibWVcIn19LFwiZXhwb3J0XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfN2FjM2U3NjdmMF9tdGU2bWRpNm10a1wiLFwibmFtZVwiOlwiSGVcIn19fX0ifX0__"
title="PayPal" allowpaymentrequest="allowpaymentrequest" scrolling="no" id="jsx-iframe-8d793eef75" class="component-frame visible" style="background-color: transparent; border: none;"></iframe>
<div id="smart-menu" class="smart-menu"></div>
<div id="installments-modal" class="installments-modal"></div><iframe name="__detect_close_uid_aaa264dc55_mte6mdi6mtk__" style="display: none;"></iframe>
</div>
</div>
</div> --}}
</section>


<section class="side-order-summary-wrapper c4-4-of-12">
<div class="safe-shop-partial">
<h2>Shop with Confidence</h2>
<p>
We offer a 30 day money-back guarantee.
<a target="_blank" href="/termsandconditions/default_en.html">
Terms &amp; Conditions
</a>
</p>
<h2>Safe Shopping Guarantee</h2>
<p>All information is encrypted and transmitted without risk and your information is kept 100% private.
</p>
</div>
<section class="side-order-summary-container">
<section class="side-order-summary">
<div class="order-summary-wrapper bg-padding">
<div class="cart-tip-wrapper">
</div>
<div class="subtotal-section">
<div class="c-6-of-12">Subtotal</div>
<div class="c-6-of-12"><bdo dir="ltr">Rs {{ \Cart::getTotal() }}</bdo></div>
</div>
<div class="shipping-section">
<div class="c-6-of-12">Shipping</div>
<div class="c-6-of-12"><bdo dir="ltr">Rs 500</bdo></div>
</div>
<div class="line"></div>
<div class="total-section">
<div class="c-6-of-12">
Total </div>
<div class="c-6-of-12"><bdo dir="ltr">Rs {{ \Cart::getTotal()+500 }}</bdo></div>
<div class="c-12-of-12 place-order-wrapper">
<button type="submit" class="btn-type-2 place-order r">Place
Order</button>
</div>
</div>
</div>
</section>
{{-- <div class="side-venmo-wrapper" style="display: none;"> --}}
<div class="venmo-container">
<div id="zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk" class="paypal-buttons paypal-buttons-context-iframe paypal-buttons-label-pay paypal-buttons-layout-vertical" data-paypal-smart-button-version="5.0.330" style="height: 0px; transition: all 0.2s ease-in-out 0s;">
<style nonce="">
#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk {
position: relative;
display: inline-block;
width: 100%;
min-height: 25px;
min-width: 150px;
max-width: 750px;
font-size: 0;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.component-frame {
z-index: 100;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.prerender-frame {
transition: opacity .2s linear;
z-index: 200;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.visible {
opacity: 1;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>iframe.invisible {
opacity: 0;
pointer-events: none;
}

#zoid-paypal-buttons-uid_62ee6792c1_mte6mdi6mtk>.smart-menu {
position: absolute;
z-index: 300;
top: 0;
left: 0;
width: 100%;
}
</style><iframe allowtransparency="true" name="__zoid__paypal_buttons__eyJzZW5kZXIiOnsiZG9tYWluIjoiaHR0cHM6Ly93d3cuZnJhZ3JhbmNleC5jb20ifSwibWV0YURhdGEiOnsid2luZG93UmVmIjp7InR5cGUiOiJwYXJlbnQiLCJkaXN0YW5jZSI6MH19LCJyZWZlcmVuY2UiOnsidHlwZSI6InJhdyIsInZhbCI6IntcInVpZFwiOlwiem9pZC1wYXlwYWwtYnV0dG9ucy11aWRfNjJlZTY3OTJjMV9tdGU2bWRpNm10a1wiLFwiY29udGV4dFwiOlwiaWZyYW1lXCIsXCJ0YWdcIjpcInBheXBhbC1idXR0b25zXCIsXCJjaGlsZERvbWFpbk1hdGNoXCI6e1wiX190eXBlX19cIjpcInJlZ2V4XCIsXCJfX3ZhbF9fXCI6XCJcXFxcLnBheXBhbFxcXFwuKGNvbXxjbikoOlxcXFxkKyk/JFwifSxcInZlcnNpb25cIjpcIjEwXzFfMFwiLFwicHJvcHNcIjp7XCJmdW5kaW5nU291cmNlXCI6XCJ2ZW5tb1wiLFwic3R5bGVcIjp7XCJjdXN0b21cIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwibGFiZWxcIjpcInBheVwiLFwibGF5b3V0XCI6XCJ2ZXJ0aWNhbFwiLFwiY29sb3JcIjpcImJsdWVcIixcInNoYXBlXCI6XCJyZWN0XCIsXCJ0YWdsaW5lXCI6ZmFsc2UsXCJoZWlnaHRcIjo1MCxcInBlcmlvZFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJtZW51UGxhY2VtZW50XCI6XCJiZWxvd1wifSxcImNyZWF0ZU9yZGVyXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfYTg0ZWI4OWEwZl9tdGU2bWRpNm1qYVwiLFwibmFtZVwiOlwiY3JlYXRlT3JkZXJcIn19LFwib25BcHByb3ZlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfNzgyNTRiMDJkOF9tdGU2bWRpNm1qYVwiLFwibmFtZVwiOlwib25BcHByb3ZlXCJ9fSxcImNzcE5vbmNlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInN0b3JhZ2VTdGF0ZVwiOntcImdldFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzZjYzA3YWVmMDhfbXRlNm1kaTZtamFcIixcIm5hbWVcIjpcImdldFwifX0sXCJzZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9mNzUxZmFjMjNhX210ZTZtZGk2bWphXCIsXCJuYW1lXCI6XCJzZXRcIn19fSxcInNlc3Npb25TdGF0ZVwiOntcImdldFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzE3ZGFjM2U0ZWFfbXRlNm1kaTZtamFcIixcIm5hbWVcIjpcImdldFwifX0sXCJzZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9lMzY3MDhjNjVhX210ZTZtZGk2bWphXCIsXCJuYW1lXCI6XCJzZXRcIn19fSxcImNvbXBvbmVudHNcIjpbXCJidXR0b25zXCJdLFwibG9jYWxlXCI6e1wiY291bnRyeVwiOlwiVVNcIixcImxhbmdcIjpcImVuXCJ9LFwiY3JlYXRlQmlsbGluZ0FncmVlbWVudFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJjcmVhdGVTdWJzY3JpcHRpb25cIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwib25Db21wbGV0ZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJvblNoaXBwaW5nQ2hhbmdlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uU2hpcHBpbmdBZGRyZXNzQ2hhbmdlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uU2hpcHBpbmdPcHRpb25zQ2hhbmdlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uQ2FuY2VsXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm9uQ2xpY2tcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZ2V0UHJlcmVuZGVyRGV0YWlsc1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2RjYjdmM2QxZDBfbXRlNm1kaTZtamFcIixcIm5hbWVcIjpcImdldFByZXJlbmRlckRldGFpbHNcIn19LFwiZ2V0UG9wdXBCcmlkZ2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9jMzZlNjc4OTExX210ZTZtZGk2bWphXCIsXCJuYW1lXCI6XCJnZXRQb3B1cEJyaWRnZVwifX0sXCJvbkluaXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF81Mjc5MzBhYTg4X210ZTZtZGk2bWphXCIsXCJuYW1lXCI6XCJvbkluaXRcIn19LFwiZ2V0UXVlcmllZEVsaWdpYmxlRnVuZGluZ1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2U4ZTU2Y2NmNDVfbXRlNm1kaTZtamFcIixcIm5hbWVcIjpcImdldFF1ZXJpZWRFbGlnaWJsZUZ1bmRpbmdcIn19LFwiY2xpZW50SURcIjpcIkFhelpud0lKakZnNVF2WWpHY2lTQzdnclZxbmgybHFTRGd6dzk4WGJVZ1BNN3RVN25FX0hPR1FWcXpRSDUyTFJnWFFWbzM5cHZERmZ4alVTXCIsXCJjbGllbnRBY2Nlc3NUb2tlblwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJwYXJ0bmVyQXR0cmlidXRpb25JRFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJtZXJjaGFudFJlcXVlc3RlZFBvcHVwc0Rpc2FibGVkXCI6ZmFsc2UsXCJlbmFibGVUaHJlZURvbWFpblNlY3VyZVwiOmZhbHNlLFwic2RrQ29ycmVsYXRpb25JRFwiOlwiZjYzOTE3NTEwMjhiNlwiLFwic3RvcmFnZUlEXCI6XCJ1aWRfNWE1ODdiZWE5OV9tdGE2bmR1Nm5kbVwiLFwic2Vzc2lvbklEXCI6XCJ1aWRfY2EwM2RkMjQ0Y19tdGE2bmR1Nm5kbVwiLFwiYnV0dG9uU2Vzc2lvbklEXCI6XCJ1aWRfOTRlMmExN2ZiZF9tdGU2bWRpNm1qYVwiLFwiZW5hYmxlVmF1bHRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZW52XCI6XCJwcm9kdWN0aW9uXCIsXCJhbW91bnRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwic3RhZ2VIb3N0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImJ1dHRvblNpemVcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYXBpU3RhZ2VIb3N0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImZ1bmRpbmdFbGlnaWJpbGl0eVwiOntcInBheXBhbFwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOmZhbHNlfSxcInBheWxhdGVyXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwicHJvZHVjdHNcIjp7XCJwYXlJbjNcIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwidmFyaWFudFwiOm51bGx9LFwicGF5SW40XCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhcmlhbnRcIjpudWxsfSxcInBheWxhdGVyXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmFyaWFudFwiOm51bGx9fX0sXCJjYXJkXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwiYnJhbmRlZFwiOnRydWUsXCJpbnN0YWxsbWVudHNcIjpmYWxzZSxcInZlbmRvcnNcIjp7XCJ2aXNhXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJtYXN0ZXJjYXJkXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJhbWV4XCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX0sXCJkaXNjb3ZlclwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOnRydWV9LFwiaGlwZXJcIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwidmF1bHRhYmxlXCI6ZmFsc2V9LFwiZWxvXCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhdWx0YWJsZVwiOnRydWV9LFwiamNiXCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhdWx0YWJsZVwiOnRydWV9fSxcImd1ZXN0RW5hYmxlZFwiOmZhbHNlfSxcInZlbm1vXCI6e1wiZWxpZ2libGVcIjp0cnVlfSxcIml0YXVcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImNyZWRpdFwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiYXBwbGVwYXlcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInNlcGFcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImlkZWFsXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJiYW5jb250YWN0XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJnaXJvcGF5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJlcHNcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInNvZm9ydFwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibXliYW5rXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJwMjRcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInppbXBsZXJcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcIndlY2hhdHBheVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwicGF5dVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiYmxpa1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwidHJ1c3RseVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwib3h4b1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibWF4aW1hXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJib2xldG9cIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImJvbGV0b2JhbmNhcmlvXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJtZXJjYWRvcGFnb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibXVsdGliYW5jb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9fSxcInBsYXRmb3JtXCI6XCJtb2JpbGVcIixcInJlbWVtYmVyZWRcIjpbXCJ2ZW5tb1wiXSxcImV4cGVyaW1lbnRcIjp7XCJlbmFibGVWZW5tb1wiOnRydWUsXCJlbmFibGVWZW5tb0FwcExhYmVsXCI6ZmFsc2V9LFwicGF5bWVudFJlcXVlc3RcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZmxvd1wiOlwicHVyY2hhc2VcIixcInJlbWVtYmVyXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfNmYxZTM0YzIwM19tdGU2bWRpNm1qYVwiLFwibmFtZVwiOlwicmVtZW1iZXJcIn19LFwiY3VycmVuY3lcIjpcIlVTRFwiLFwiaW50ZW50XCI6XCJjYXB0dXJlXCIsXCJidXllckNvdW50cnlcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiY29tbWl0XCI6ZmFsc2UsXCJ2YXVsdFwiOmZhbHNlLFwiZW5hYmxlRnVuZGluZ1wiOltcInZlbm1vXCJdLFwiZGlzYWJsZUZ1bmRpbmdcIjpbXSxcImRpc2FibGVDYXJkXCI6W10sXCJtZXJjaGFudElEXCI6W10sXCJyZW5kZXJlZEJ1dHRvbnNcIjpbXCJ2ZW5tb1wiXSxcImNzcFwiOntcIm5vbmNlXCI6XCJcIn0sXCJub25jZVwiOlwiXCIsXCJnZXRQYWdlVXJsXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfNjRkYzlmNDQxZl9tdGU2bWRpNm1qYVwiLFwibmFtZVwiOlwiZ2V0UGFnZVVybFwifX0sXCJ1c2VySURUb2tlblwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJjbGllbnRNZXRhZGF0YUlEXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImRlYnVnXCI6ZmFsc2UsXCJ0ZXN0XCI6e1wiYWN0aW9uXCI6XCJjaGVja291dFwifSxcIndhbGxldFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJwYXltZW50TWV0aG9kTm9uY2VcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwicGF5bWVudE1ldGhvZFRva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImJyYW5kZWRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYXBwbGVQYXlTdXBwb3J0XCI6ZmFsc2UsXCJzdXBwb3J0c1BvcHVwc1wiOnRydWUsXCJzdXBwb3J0ZWROYXRpdmVCcm93c2VyXCI6dHJ1ZSxcInVzZXJFeHBlcmllbmNlRmxvd1wiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJhcHBsZVBheVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJleHBlcmllbmNlXCI6XCJcIixcImFsbG93QmlsbGluZ1BheW1lbnRzXCI6dHJ1ZX0sXCJleHBvcnRzXCI6e1wiaW5pdFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzg3YTMyYTlhNjJfbXRlNm1kaTZtamFcIixcIm5hbWVcIjpcImluaXRcIn19LFwiY2xvc2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9lMjJkZDE3ZTcyX210ZTZtZGk2bWphXCIsXCJuYW1lXCI6XCJjbG9zZTo6bWVtb2l6ZWRcIn19LFwiY2hlY2tDbG9zZVwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzdhOTk1MTYyZDZfbXRlNm1kaTZtamFcIixcIm5hbWVcIjpcImNoZWNrQ2xvc2VcIn19LFwicmVzaXplXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfYmQzNTg5MDQwNl9tdGU2bWRpNm1qYVwiLFwibmFtZVwiOlwiUGVcIn19LFwib25FcnJvclwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2RjMGNiYzYxMTNfbXRlNm1kaTZtamFcIixcIm5hbWVcIjpcIkRlXCJ9fSxcInNob3dcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9iYzkyMmRmZDFlX210ZTZtZGk2bWphXCIsXCJuYW1lXCI6XCJoZVwifX0sXCJoaWRlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfZTA1MDcwZThlN19tdGU2bWRpNm1qYVwiLFwibmFtZVwiOlwibWVcIn19LFwiZXhwb3J0XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfYjBlNjM0NjAxZF9tdGU2bWRpNm1qYVwiLFwibmFtZVwiOlwiSGVcIn19fX0ifX0__"
title="PayPal" allowpaymentrequest="allowpaymentrequest" scrolling="no" id="jsx-iframe-da35f6f6c3" class="component-frame visible" style="background-color: transparent; border: none;"></iframe>
<div id="smart-menu" class="smart-menu"></div>
<div id="installments-modal" class="installments-modal"></div><iframe name="__detect_close_uid_3554ff8778_mte6mdi6mja__" style="display: none;"></iframe>
</div>
</div>
</div>
</section>
</form>
</section>
</div>

<div id="klarna-popup-content" style="display: none;">
<div>
<div class="popup_container">
<div class="popup" id="klarna-popup">
<div style="box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 0; min-height: 0px; min-width: 0px; visibility: visible; inset: 0px;">
<div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; width: 100%; height: 100%; top: 0px; left: 0px;">
<div class="popup-mobile-wrapper" style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 101; min-height: 0px; min-width: 0px; top: 0px;">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgb(234, 234, 234); justify-content: center; height: 60px; width: 97%;">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 0; min-height: 0px; min-width: 0px; justify-content: center; height: 60px; left: 0px; padding-left: 20px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: center; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; height: 60px; justify-content: center; opacity: 1;">
<svg focusable="false" width="81" height="20" aria-hidden="true">
<g transform="translate(0, 0) scale(1)">
<path
    d="M78.3352549,14.3292706 C77.0678017,14.3292706 76.0403439,15.3567284 76.0403439,16.6243597 C76.0403439,17.8916348 77.0678017,18.9192707 78.3352549,18.9192707 C79.6027081,18.9192707 80.630344,17.8916348 80.630344,16.6243597 C80.630344,15.3567284 79.6027081,14.3292706 78.3352549,14.3292706"
    fill="#0E0E0F"></path>
<path
    d="M70.7958568,7.22817345 L70.7958568,6.4467803 L74.4529833,6.4467803 L74.4529833,18.6618356 L70.7958568,18.6618356 L70.7958568,17.8811547 C69.7626656,18.5857975 68.5156063,19 67.1704277,19 C63.6107082,19 60.7250027,16.1142945 60.7250027,12.554575 C60.7250027,8.99485561 63.6107082,6.10915009 67.1704277,6.10915009 C68.5156063,6.10915009 69.7626656,6.52335256 70.7958568,7.22817345 Z M67.4697718,15.6974209 C69.3000267,15.6974209 70.7835696,14.2902722 70.7835696,12.554575 C70.7835696,10.8188779 69.3000267,9.41208536 67.4697718,9.41208536 C65.6395168,9.41208536 64.1559739,10.8188779 64.1559739,12.554575 C64.1559739,14.2902722 65.6395168,15.6974209 67.4697718,15.6974209 Z"
    fill="#0E0E0F"></path>
<path
    d="M54.2263333,6.11823191 C52.765406,6.11823191 51.3828316,6.57178896 50.4584442,7.82312205 L50.4584442,6.4474926 L46.8169884,6.4474926 L46.8169884,18.6618356 L50.503141,18.6618356 L50.503141,12.2427657 C50.503141,10.3852653 51.7487757,9.47565814 53.2485235,9.47565814 C54.8558285,9.47565814 55.7798597,10.4358386 55.7798597,12.2174791 L55.7798597,18.6618356 L59.4327124,18.6618356 L59.4327124,10.8940256 C59.4327124,8.05141421 57.1725844,6.11823191 54.2263333,6.11823191"
    fill="#0E0E0F"></path>
<path
    d="M41.5278044,8.03788051 L41.5278044,6.44695838 L37.7834212,6.44695838 L37.7834212,18.6618356 L41.536174,18.6618356 L41.536174,12.9588053 C41.536174,11.0347048 43.6216104,10.0004452 45.0686479,10.0004452 C45.0834281,10.0004452 45.097318,10.0018698 45.1120982,10.0020479 L45.1120982,6.44767068 C43.6269526,6.44767068 42.2609392,7.08357654 41.5278044,8.03788051"
    fill="#0E0E0F"></path>
<path
    d="M32.2128788,7.22817345 L32.2128788,6.4467803 L35.8701833,6.4467803 L35.8701833,18.6618356 L32.2128788,18.6618356 L32.2128788,17.8811547 C31.1796876,18.5857975 29.9326283,19 28.5876277,19 C25.0279083,19 22.1422028,16.1142945 22.1422028,12.554575 C22.1422028,8.99485561 25.0279083,6.10915009 28.5876277,6.10915009 C29.9326283,6.10915009 31.1796876,6.52335256 32.2128788,7.22817345 Z M28.8867938,15.6974209 C30.7170487,15.6974209 32.2007697,14.2902722 32.2007697,12.554575 C32.2007697,10.8188779 30.7170487,9.41208536 28.8867938,9.41208536 C27.0567169,9.41208536 25.5729959,10.8188779 25.5729959,12.554575 C25.5729959,14.2902722 27.0567169,15.6974209 28.8867938,15.6974209 Z"
    fill="#0E0E0F"></path>
<path
    d="M16.8150889 18.6618356 20.6429893 18.6618356 20.6429893 1.00338343 16.8150889 1.00338343z"
    fill="#0E0E0F"></path>
<path
    d="M14.1770857,1 L10.2104649,1 C10.2104649,4.25111544 8.71570325,7.23511837 6.10957549,9.1873547 L4.53806353,10.3642524 L10.6271604,18.6673559 L15.6335612,18.6673559 L10.0307872,11.0272257 C12.6865979,8.38263373 14.1770857,4.82469505 14.1770857,1"
    fill="#0E0E0F"></path>
<path d="M0 18.6666436 4.05334336 18.6666436 4.05334336 1 0 1z"
    fill="#0E0E0F"></path>
</g>
</svg>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 0; min-height: 0px; min-width: 0px; justify-content: center; height: 60px; padding-right: 20px; right: 0px;">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<button class="klarna-modal-close" aria-label="Close" title="Close" type="button" style="padding: 0px; margin: 0px; background-color: rgba(255, 255, 255, 0); border: none; cursor: pointer; display: block; position: relative; outline: none; overflow: visible; height: 20px; width: 20px;">
<div
    style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; height: 32px; width: 32px; margin: -6px;">
    <div
        style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; height: 20px; margin: 6px; width: 20px;">
        <svg focusable="false" height="20" width="20"
            id="information-dialog__nav-bar__right-icon__icon">
            <g transform="translate(0, 0) scale(1)">
                <path
                    d="M10.872 10.004c.449-.14.875-.373 1.23-.729l5.602-5.601L16.29 2.26l-5.602 5.601a.999.999 0 01-1.414 0l-5.57-5.57L2.29 3.705l5.57 5.57c.364.364.8.6 1.261.738a2.86 2.86 0 00-1.229.708L2.29 16.322l1.414 1.414 5.603-5.601a1.022 1.022 0 011.413 0l5.57 5.57 1.414-1.414-5.57-5.57a2.869 2.869 0 00-1.262-.717z"
                    fill="rgba(14, 14, 15, 1)"
                    style="transition: fill 0.2s ease 0s;">
                </path>
            </g>
        </svg>
    </div>
</div>
</button>
</div>
</div>
</div>
</div>
<div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 0; min-height: 0px; min-width: 0px; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden scroll;">
<div class="popup-mobile-wrapper" style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgb(234, 234, 234); box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 15px 6px; top: 0px;">
<div class="popup-mobile-padding" style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgb(234, 234, 234);">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<span>
<h1 role="heading" aria-level="1"
    style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: center; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 27px; font-weight: 700; line-height: 28px; letter-spacing: 0.3px; color: rgb(14, 14, 15); text-size-adjust: none;">
    Flexible payment options</h1>
<div
    style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div
    style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div
    style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgb(255, 255, 255); border-radius: 12px; padding: 0px 15px;">
    <div
        style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px 0px 1px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; border-bottom-color: rgb(234, 234, 234); padding: 12px 0px;">
        <div
            style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; padding-right: 15px;">
            <svg aria-hidden="true" fill="none" height="30"
                viewBox="0 0 30 30" width="30"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 10C0 7.79086 1.79086 6 4 6H22V14H0V10Z"
                    fill="url(#paint0_linear_8535_10760)">
                </path>
                <path
                    d="M18 18C22.9706 18 27 13.9706 27 9C27 4.02944 22.9706 0 18 0C13.0294 0 9 4.02944 9 9C9 13.9706 13.0294 18 18 18Z"
                    fill="#C6C100"></path>
                <path
                    d="M19.5 18C24.4706 18 28.5 13.9706 28.5 9C28.5 4.02944 24.4706 0 19.5 0C14.5294 0 10.5 4.02944 10.5 9C10.5 13.9706 14.5294 18 19.5 18Z"
                    fill="#FDFFAB"></path>
                <g style="mix-blend-mode: multiply;">
                    <path
                        d="M9.44727 12C10.0712 13.7986 11.2256 15.3556 12.7519 16.4569C14.2781 17.5582 16.1012 18.1497 17.9702 18.15C18.2239 18.15 18.4744 18.15 18.7217 18.1176C18.969 18.0853 19.2227 18.15 19.4763 18.15C21.3454 18.1497 23.1684 17.5582 24.6946 16.4569C26.2209 15.3556 27.3754 13.7986 27.9993 12H9.44727Z"
                        fill="#C7C03D"></path>
                </g>
                <path
                    d="M0 10V27C0 28.6569 1.34326 30 3 30H30V14H4C1.79077 14 0 12.2091 0 10Z"
                    fill="url(#paint1_linear_8535_10760)">
                </path>
                <path
                    d="M23.5 24C24.8807 24 26 22.8807 26 21.5C26 20.1193 24.8807 19 23.5 19C22.1193 19 21 20.1193 21 21.5C21 22.8807 22.1193 24 23.5 24Z"
                    fill="#383834"></path>
                <path clip-rule="evenodd"
                    d="M14 8.88298C14 8.54606 14.2731 8.34926 14.61 8.34926H23.3899C23.7268 8.34926 24 8.54606 24 8.88298C24 9.21989 23.7268 9.45535 23.3899 9.45535H14.61C14.2731 9.45535 14 9.21989 14 8.88298Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M19.2067 5.74393C19.4089 5.47445 19.7913 5.41992 20.0608 5.62214L23.7561 8.39504C24.0256 8.59726 24.0801 8.97964 23.8779 9.24912C23.6756 9.5186 23.2933 9.57313 23.0238 9.37091L19.3285 6.59801C19.059 6.3958 19.0045 6.01341 19.2067 5.74393Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M23.8779 8.51683C24.0801 8.78631 24.0256 9.1687 23.7561 9.37091L20.0608 12.1438C19.7913 12.346 19.4089 12.2915 19.2067 12.022C19.0045 11.7525 19.059 11.3702 19.3285 11.1679L23.0238 8.39504C23.2933 8.19282 23.6756 8.24735 23.8779 8.51683Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <defs>
                    <linearGradient
                        gradientUnits="userSpaceOnUse"
                        id="paint0_linear_8535_10760" x1="11"
                        x2="11" y1="6" y2="14">
                        <stop stop-color="#5C73F3"></stop>
                        <stop offset="1" stop-color="#3B3B3B">
                        </stop>
                    </linearGradient>
                    <linearGradient
                        gradientUnits="userSpaceOnUse"
                        id="paint1_linear_8535_10760"
                        x1="-4.19095e-09" x2="30" y1="21"
                        y2="21">
                        <stop stop-color="#5C73F3"></stop>
                        <stop offset="1" stop-color="#FFE4F9">
                        </stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div
            style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex: 1 1 0%; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
            <div
                style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
                <span
                    style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 500; line-height: 17px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">Pay
                    now</span>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-left: 8px; width: 100px;">
<div style="box-sizing: border-box; display: inline-flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgb(184, 255, 204); border-radius: 2px; padding: 4px 6px; top: -1px;">
    <span style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 10px; font-weight: 500; line-height: 11px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">New</span>
</div>
</div>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-top: 2px;">
<span style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 20px; letter-spacing: 0px; color: rgb(95, 97, 99); text-size-adjust: none;">Pay
                    in full with card.</span></div>
</div>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px 0px 1px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; border-bottom-color: rgb(234, 234, 234); padding: 12px 0px;">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; padding-right: 15px;">
<svg aria-hidden="true" fill="none" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 10C0 7.79086 1.79086 6 4 6H22V14H0V10Z"
                    fill="url(#paint0_linear_8535_10746)">
                </path>
                <path
                    d="M18 18C22.9706 18 27 13.9706 27 9C27 4.02944 22.9706 0 18 0C13.0294 0 9 4.02944 9 9C9 13.9706 13.0294 18 18 18Z"
                    fill="#C6C100"></path>
                <path
                    d="M19.5 18C24.4706 18 28.5 13.9706 28.5 9C28.5 4.02944 24.4706 0 19.5 0C14.5294 0 10.5 4.02944 10.5 9C10.5 13.9706 14.5294 18 19.5 18Z"
                    fill="#FDFFAB"></path>
                <g style="mix-blend-mode: multiply;">
                    <path
                        d="M9.44727 12C10.0712 13.7986 11.2256 15.3556 12.7519 16.4569C14.2781 17.5582 16.1012 18.1497 17.9702 18.15C18.2239 18.15 18.4744 18.15 18.7217 18.1176C18.969 18.0853 19.2227 18.15 19.4763 18.15C21.3454 18.1497 23.1684 17.5582 24.6946 16.4569C26.2209 15.3556 27.3754 13.7986 27.9993 12H9.44727Z"
                        fill="#C7C03D"></path>
                </g>
                <path clip-rule="evenodd"
                    d="M24.8532 5.84034C25.1816 5.95019 25.3587 6.30546 25.2489 6.63385L24.3909 9.19885C24.281 9.52725 23.9258 9.70442 23.5974 9.59457C23.269 9.48472 23.0918 9.12945 23.2017 8.80105L24.0597 6.23605C24.1695 5.90766 24.5248 5.73049 24.8532 5.84034Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M20.3556 5.44701C19.5549 5.25836 18.7139 5.34564 17.969 5.69472C17.2241 6.04379 16.619 6.63419 16.2516 7.37022C15.8842 8.10626 15.7762 8.94479 15.945 9.74991C16.1138 10.555 16.5495 11.2795 17.1816 11.806C17.8137 12.3325 18.6051 12.6301 19.4274 12.6506C20.2498 12.6711 21.055 12.4132 21.7125 11.9188C21.9892 11.7107 22.3823 11.7664 22.5904 12.0431C22.7985 12.3199 22.7429 12.713 22.4661 12.9211C21.5828 13.5853 20.501 13.9317 19.3962 13.9042C18.2914 13.8767 17.2282 13.4769 16.3791 12.7696C15.5299 12.0622 14.9445 11.0889 14.7177 10.0072C14.4909 8.92558 14.636 7.79904 15.1296 6.81021C15.6231 5.82137 16.4362 5.02818 17.4369 4.55922C18.4376 4.09025 19.5674 3.97298 20.6431 4.22643C21.7188 4.47987 22.6774 5.08917 23.3636 5.95556C24.0497 6.82196 24.4231 7.89467 24.4233 8.99984C24.4233 9.34613 24.1427 9.62689 23.7964 9.62695C23.4501 9.62701 23.1693 9.34635 23.1693 9.00006C23.1691 8.17744 22.8912 7.37897 22.3805 6.73408C21.8698 6.08918 21.1563 5.63566 20.3556 5.44701Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M19.5243 6.66295C19.8706 6.66295 20.1513 6.94367 20.1513 7.28995V8.74089L20.8204 9.41238C21.0648 9.65767 21.0641 10.0547 20.8189 10.2991C20.5736 10.5435 20.1766 10.5428 19.9322 10.2975L18.8973 9.25902V7.28995C18.8973 6.94367 19.178 6.66295 19.5243 6.66295Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path
                    d="M0 10V27C0 28.6569 1.34326 30 3 30H30V14H4C1.79077 14 0 12.2091 0 10Z"
                    fill="url(#paint1_linear_8535_10746)">
                </path>
                <path
                    d="M23.5 24C24.8807 24 26 22.8807 26 21.5C26 20.1193 24.8807 19 23.5 19C22.1193 19 21 20.1193 21 21.5C21 22.8807 22.1193 24 23.5 24Z"
                    fill="#383834"></path>
                <defs>
                    <linearGradient
                        gradientUnits="userSpaceOnUse"
                        id="paint0_linear_8535_10746" x1="11"
                        x2="11" y1="6" y2="14">
                        <stop stop-color="#5C73F3"></stop>
                        <stop offset="1" stop-color="#3B3B3B">
                        </stop>
                    </linearGradient>
                    <linearGradient
                        gradientUnits="userSpaceOnUse"
                        id="paint1_linear_8535_10746"
                        x1="-4.19095e-09" x2="30" y1="21"
                        y2="21">
                        <stop stop-color="#5C73F3"></stop>
                        <stop offset="1" stop-color="#FFE4F9">
                        </stop>
                    </linearGradient>
                </defs>
            </svg>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex: 1 1 0%; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<span style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 500; line-height: 17px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">Pay
                    in 30 days</span></div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-top: 2px;">
<span style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 20px; letter-spacing: 0px; color: rgb(95, 97, 99); text-size-adjust: none;">Get
                    it now. Pay it later.</span></div>
</div>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-top-style: solid; border-right-style: solid; border-bottom: 0px; border-left-style: solid; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; padding: 12px 0px;">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; padding-right: 15px;">
<svg aria-hidden="true" fill="none" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 10C0 7.79086 1.79086 6 4 6H22V14H0V10Z"
                    fill="url(#paint0_linear_8535_10733)">
                </path>
                <path
                    d="M18 18C22.9706 18 27 13.9706 27 9C27 4.02944 22.9706 0 18 0C13.0294 0 9 4.02944 9 9C9 13.9706 13.0294 18 18 18Z"
                    fill="#C6C100"></path>
                <path
                    d="M19.5 18C24.4706 18 28.5 13.9706 28.5 9C28.5 4.02944 24.4706 0 19.5 0C14.5294 0 10.5 4.02944 10.5 9C10.5 13.9706 14.5294 18 19.5 18Z"
                    fill="#FDFFAB"></path>
                <g style="mix-blend-mode: multiply;">
                    <path
                        d="M9.44727 12C10.0712 13.7986 11.2256 15.3556 12.7519 16.4569C14.2781 17.5582 16.1012 18.1497 17.9702 18.15C18.2239 18.15 18.4744 18.15 18.7217 18.1176C18.969 18.0853 19.2227 18.15 19.4763 18.15C21.3454 18.1497 23.1684 17.5582 24.6946 16.4569C26.2209 15.3556 27.3754 13.7986 27.9993 12H9.44727Z"
                        fill="#C7C03D"></path>
                </g>
                <path clip-rule="evenodd"
                    d="M17.8682 11.5651C17.8682 11.2189 18.149 10.9381 18.4952 10.9381H20.2052C20.5515 10.9381 20.8322 11.2189 20.8322 11.5651C20.8322 11.9114 20.5515 12.1921 20.2052 12.1921H18.4952C18.149 12.1921 17.8682 11.9114 17.8682 11.5651Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M16.7852 5.35214C16.1871 5.35214 15.7022 5.83702 15.7022 6.43514C15.7022 7.03327 16.1871 7.51814 16.7852 7.51814C17.3834 7.51814 17.8682 7.03327 17.8682 6.43514C17.8682 5.83702 17.3834 5.35214 16.7852 5.35214ZM14.4482 6.43514C14.4482 5.14446 15.4946 4.09814 16.7852 4.09814C18.0759 4.09814 19.1222 5.14446 19.1222 6.43514C19.1222 7.72583 18.0759 8.77214 16.7852 8.77214C15.4946 8.77214 14.4482 7.72583 14.4482 6.43514Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M21.9152 5.35214C21.3171 5.35214 20.8322 5.83702 20.8322 6.43514C20.8322 7.03327 21.3171 7.51814 21.9152 7.51814C22.5134 7.51814 22.9982 7.03327 22.9982 6.43514C22.9982 5.83702 22.5134 5.35214 21.9152 5.35214ZM19.5782 6.43514C19.5782 5.14445 20.6246 4.09814 21.9152 4.09814C23.2059 4.09814 24.2522 5.14446 24.2522 6.43514C24.2522 7.72583 23.2059 8.77214 21.9152 8.77214C20.6246 8.77214 19.5782 7.72584 19.5782 6.43514Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M16.7852 10.4821C16.1871 10.4821 15.7022 10.967 15.7022 11.5651C15.7022 12.1633 16.1871 12.6481 16.7852 12.6481C17.3834 12.6481 17.8682 12.1633 17.8682 11.5651C17.8682 10.967 17.3834 10.4821 16.7852 10.4821ZM14.4482 11.5651C14.4482 10.2745 15.4946 9.22814 16.7852 9.22814C18.0759 9.22814 19.1222 10.2745 19.1222 11.5651C19.1222 12.8558 18.0759 13.9021 16.7852 13.9021C15.4946 13.9021 14.4482 12.8558 14.4482 11.5651Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M21.9152 10.4821C21.3171 10.4821 20.8322 10.967 20.8322 11.5651C20.8322 12.1633 21.3171 12.6481 21.9152 12.6481C22.5134 12.6481 22.9982 12.1633 22.9982 11.5651C22.9982 10.967 22.5134 10.4821 21.9152 10.4821ZM19.5782 11.5651C19.5782 10.2745 20.6246 9.22814 21.9152 9.22814C23.2059 9.22814 24.2522 10.2745 24.2522 11.5651C24.2522 12.8558 23.2059 13.9021 21.9152 13.9021C20.6246 13.9021 19.5782 12.8558 19.5782 11.5651Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M17.8682 6.43514C17.8682 6.08886 18.149 5.80814 18.4952 5.80814H20.2052C20.5515 5.80814 20.8322 6.08886 20.8322 6.43514C20.8322 6.78143 20.5515 7.06214 20.2052 7.06214H18.4952C18.149 7.06214 17.8682 6.78143 17.8682 6.43514Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path clip-rule="evenodd"
                    d="M21.1496 7.20079C21.3945 7.44565 21.3945 7.84264 21.1496 8.0875L18.4376 10.7995C18.1927 11.0444 17.7957 11.0444 17.5509 10.7995C17.306 10.5546 17.306 10.1576 17.5509 9.91279L20.2629 7.20079C20.5077 6.95593 20.9047 6.95593 21.1496 7.20079Z"
                    fill="#383834" fill-rule="evenodd"></path>
                <path
                    d="M0 10V27C0 28.6569 1.34326 30 3 30H30V14H4C1.79077 14 0 12.2091 0 10Z"
                    fill="url(#paint1_linear_8535_10733)">
                </path>
                <path
                    d="M23.5 24C24.8807 24 26 22.8807 26 21.5C26 20.1193 24.8807 19 23.5 19C22.1193 19 21 20.1193 21 21.5C21 22.8807 22.1193 24 23.5 24Z"
                    fill="#383834"></path>
                <defs>
                    <linearGradient
                        gradientUnits="userSpaceOnUse"
                        id="paint0_linear_8535_10733" x1="11"
                        x2="11" y1="6" y2="14">
                        <stop stop-color="#5C73F3"></stop>
                        <stop offset="1" stop-color="#3B3B3B">
                        </stop>
                    </linearGradient>
                    <linearGradient
                        gradientUnits="userSpaceOnUse"
                        id="paint1_linear_8535_10733"
                        x1="-4.19095e-09" x2="30" y1="21"
                        y2="21">
                        <stop stop-color="#5C73F3"></stop>
                        <stop offset="1" stop-color="#FFE4F9">
                        </stop>
                    </linearGradient>
                </defs>
            </svg>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex: 1 1 0%; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<span style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 500; line-height: 17px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">Pay
                    over time</span></div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-top: 2px;">
<span style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 20px; letter-spacing: 0px; color: rgb(95, 97, 99); text-size-adjust: none;">Split
                    the cost into smaller payments.</span></div>
</div>
</div>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 15px;">
</div>
<p role="paragraph" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: center; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 16px; letter-spacing: 0px; color: rgb(95, 97, 99); text-size-adjust: none;">
The availability of payment options may differ depending on the merchant and purchase amount. Subject to approval. Additional terms may apply.<br><br>*Down payment may be required for Pay over time. Klarna Monthly
financing issued by WebBank, member FDIC, and subject to credit approval through a soft credit check. Interest may apply.</p>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 5px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 30px;">
</div>
<h1 role="heading" aria-level="1" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: center; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 27px; font-weight: 700; line-height: 28px; letter-spacing: 0.3px; color: rgb(14, 14, 15); text-size-adjust: none;">
Smoooth shopping</h1>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-bottom: 0px; padding: 0px;">
<svg focusable="false" height="20" width="20">
        <g transform="translate(0, 0) scale(1)">
            <path
                d="M14.2148,5 L8.2918,12.558 L5.4138,9.68 L3.9998,11.094 L7.6758,14.77 C7.8638,14.958 8.1178,15.063 8.3828,15.063 C8.4028,15.063 8.4228,15.062 8.4428,15.061 C8.7288,15.043 8.9928,14.904 9.1698,14.68 L15.7888,6.234 L14.2148,5 Z"
                fill="rgba(14, 14, 15, 1)"
                style="transition: fill 0.2s ease 0s;"></path>
        </g>
    </svg>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 10px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 15px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex: 1 1 0%; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<h3 role="heading" aria-level="3" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 500; line-height: 17px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
Shop with confidence</h3>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-top: 5px;">
<p role="paragraph" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 23px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
Get <a tabindex="0" aria-label="Buyer protection (Opens in a new window)" href="https://www.klarna.com/us/buyer-protection/" target="_blank" style="border-radius: 2px; color: rgb(14, 14, 15); cursor: pointer; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-weight: 400; outline: 0px; text-decoration: underline rgb(14, 14, 15); text-rendering: geometricprecision; transition: color 0.2s ease 0s; -webkit-font-smoothing: antialiased;">buyer
                    protection</a> every time you pay with Klarna. Get 24/7 support in the Klarna app.</p>
</div>
</div>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-bottom: 0px; padding: 0px;">
<svg focusable="false" height="20" width="20">
        <g transform="translate(0, 0) scale(1)">
            <path
                d="M14.2148,5 L8.2918,12.558 L5.4138,9.68 L3.9998,11.094 L7.6758,14.77 C7.8638,14.958 8.1178,15.063 8.3828,15.063 C8.4028,15.063 8.4228,15.062 8.4428,15.061 C8.7288,15.043 8.9928,14.904 9.1698,14.68 L15.7888,6.234 L14.2148,5 Z"
                fill="rgba(14, 14, 15, 1)"
                style="transition: fill 0.2s ease 0s;"></path>
        </g>
    </svg>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 10px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 15px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex: 1 1 0%; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<h3 role="heading" aria-level="3" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 500; line-height: 17px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
No start-up fees</h3>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-top: 5px;">
<p role="paragraph" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 23px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
Klarna gives you the flexibility to buy in your own terms.</p>
</div>
</div>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-bottom: 0px; padding: 0px;">
<svg focusable="false" height="20" width="20">
        <g transform="translate(0, 0) scale(1)">
            <path
                d="M14.2148,5 L8.2918,12.558 L5.4138,9.68 L3.9998,11.094 L7.6758,14.77 C7.8638,14.958 8.1178,15.063 8.3828,15.063 C8.4028,15.063 8.4228,15.062 8.4428,15.061 C8.7288,15.043 8.9928,14.904 9.1698,14.68 L15.7888,6.234 L14.2148,5 Z"
                fill="rgba(14, 14, 15, 1)"
                style="transition: fill 0.2s ease 0s;"></path>
        </g>
    </svg>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 10px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 15px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex: 1 1 0%; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<h3 role="heading" aria-level="3" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 500; line-height: 17px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
A smarter way to pay</h3>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; margin-top: 5px;">
<p role="paragraph" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: left; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 23px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
Payments can be automatically debited to your card so you never have to lift a finger.</p>
</div>
</div>
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 30px;">
</div>
<div aria-hidden="true" style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px;">
<div>
<div style="background-color: rgb(221, 221, 221); padding-bottom: 100%;">
</div>
</div>
<img alt="Download the app" src="https://js.klarna.com/kp/one-offering/v1/apps/js/../images/96bd4c339b958790a473.jpg" srcset="https://js.klarna.com/kp/one-offering/v1/apps/js/../images/6c2fc998441f56bd250a.jpg 2x, https://js.klarna.com/kp/one-offering/v1/apps/js/../images/01cbd8f8b29be844a326.jpg 3x"
style="width: 100%; opacity: 1; transition: opacity 0.2s linear 0s; position: absolute; top: 0px; left: 0px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 30px;">
</div>
<h2 role="heading" aria-level="2" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: center; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 18px; font-weight: 700; line-height: 19px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
The best way to buy</h2>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<p role="paragraph" style="max-width: 100%; margin: 0px; padding: 0px; box-sizing: border-box; flex-shrink: 0; text-rendering: geometricprecision; -webkit-font-smoothing: antialiased; word-break: break-word; text-align: center; direction: ltr; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 23px; letter-spacing: 0px; color: rgb(14, 14, 15); text-size-adjust: none;">
Download the Klarna app. Get access to exclusive deals, price drops, and manage your payments in one place.</p>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 10px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgba(255, 255, 255, 0); width: 100%; height: 30px;">
</div>
<div style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: sticky; z-index: 0; min-height: 0px; min-width: 0px; width: 100%; bottom: 20px;">
<div style="height: 18px; background: linear-gradient(rgba(234, 234, 234, 0) 0%, rgb(234, 234, 234) 100%); position: absolute; top: -15px; width: 100%;">
</div>
<button class="klarna-modal-close got-it" aria-label="Close" style="padding: 0px; margin: 0px; background-color: rgba(255, 255, 255, 0); border: none; cursor: pointer; outline: none; -webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
        <div
            style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: row; flex-shrink: 0; border-style: solid; border-width: 1px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; background-color: rgb(14, 14, 15); border-color: rgb(14, 14, 15); border-radius: 5px; height: 50px; justify-content: center; padding: 19px 24px; transition: background-color 0.2s ease 0s, border-color 0.2s ease 0s, color 0.2s ease 0s;">
            <div
                style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 2px; position: absolute; z-index: 1; min-height: 0px; min-width: 0px; border-radius: 9px; inset: -5px; transition: border-color 0.2s ease 0s; border-color: rgba(255, 255, 255, 0);">
            </div>
            <div
                style="box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: relative; z-index: 0; min-height: 0px; min-width: 0px; padding-top: 0px; margin-top: -5px; margin-bottom: -6px;">
                <span
                    style="max-width: 100%; color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Arial, sans-serif; font-weight: 500; font-size: 16px; opacity: 1; line-height: 20px; transition: color 0.2s ease 0s; visibility: visible; letter-spacing: 0px; -webkit-font-smoothing: antialiased; text-rendering: geometricprecision; text-size-adjust: none;">Got
                    it!</span></div>
        </div>
    </button>
</div>
</span>
</div>
</div>
</div>
</div>
<div class="popup-mobile-wrapper" style="width:500px; box-sizing: border-box; display: flex; align-items: stretch; flex-direction: column; flex-shrink: 0; border-style: solid; border-width: 0px; position: absolute; z-index: 101; min-height: 0px; min-width: 0px; padding-right: 20px; padding-left: 20px; padding-top: 20px; bottom: 0px; background-color: rgb(234, 234, 234);">
<span></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</section>
</div>
@push('child-scripts')
<script type="text/javascript">

$(document).on('change','.link-3',function(){

var check= 0;

var filteredValues = "{{ url('search?') }}";

// alert(filteredValues);

if($('input[name="GenderFilter[]"]:checked').serialize()){

// check=+1;

filteredValues+= $('input[name="GenderFilter[]"]:checked').serialize();


}

if($('input[name="BrandFilter[]"]:checked').serialize()){

filteredValues+='&';
filteredValues+= $('input[name="BrandFilter[]"]:checked').serialize();

}

if($('input[name="TypeFilter[]"]:checked').serialize()){

filteredValues+='&';
filteredValues+= $('input[name="TypeFilter[]"]:checked').serialize();   
}
if($('input[name="DepartmentFilter[]"]:checked').serialize()){

filteredValues+='&';
filteredValues+= $('input[name="DepartmentFilter[]"]:checked').serialize();

}

if($('input[name="ScentFilter[]"]:checked').serialize()){

filteredValues+='&';
filteredValues+= $('input[name="ScentFilter[]"]:checked').serialize();

}

if($('input[name="PriceFilter[]"]:checked').serialize()){

filteredValues+='&';
filteredValues+= $('input[name="PriceFilter[]"]:checked').serialize();

}

if($('#orderby').find(':selected').val()){

filteredValues+='&';
filteredValues+= 'orderby='+$('#orderby').find(':selected').val();


}

if($('input[name="InStockFilter"]:checked').serialize()){

filteredValues+='&';
filteredValues+= $('input[name="InStockFilter"]:checked').serialize();


}


$.ajax({

type: "get",

url:filteredValues,
beforeSend:function(){

$('.search-loader').append('<img class="lazy-img" src="https://i.pinimg.com/originals/d7/7b/ce/d77bce75b53ed81f656be3f4249b372b.gif"/>')

},
success: function(response){

// console.log(response.view);

if(response.view){

$(".put-content-here").html(response.view);

}else{

$(".put-content-here").html('No product found');  
}


}

});


if (window.history != 'undefined' && window.history.pushState != 'undefined') {
window.history.pushState({ path: filteredValues }, '', filteredValues);
}

});




</script>

@endpush

<!-- main sec  ends-->
@endsection