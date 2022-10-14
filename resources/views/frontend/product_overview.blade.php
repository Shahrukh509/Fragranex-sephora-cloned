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
            <form action="/shopping/type/perfume" data-ajax="true" data-ajax-begin="QueueSearchAjax(xhr)" data-ajax-method="Post" data-ajax-mode="replace" data-ajax-success="refreshSearchCount('true');" data-ajax-update="#search-load-wrap" data-ajax-url="/search/search_results/ajaxsearchblocknew"
                id="SearchBlockAsyncForm" method="post">
                <div id="search-load-wrap">
                    <div class="search-panel" itemscope="" itemtype="https://schema.org/SearchResultsPage">
                        <div id="bread-crumb" class="std-side-padding-px">
                            <span itemscope="" itemtype="https://schema.org/BreadcrumbList">
                                <span class="h4" itemprop="itemListElement" itemscope=""
                                    itemtype="https://schema.org/ListItem">
                                    <meta itemprop="position" content="1">
                                    <a itemprop="item" href="https://www.a.com/" class="link-6">
                                        <span itemprop="name">Home</span>
                            </a>
                            </span>
                            @foreach($span as $span)
                            <span class="h4">
                                    &gt;
                                </span>
                            <span class="h4" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                    <meta itemprop="position" content="3">
                                    <a itemprop="item" href="https://www.a.com/shopping/type/perfume"
                                        class="link-6">
                                        <span itemprop="name">{{ $span??'Best' }}</span>
                            </a>
                            </span>
                            
                                @endforeach
                            </span>
                        </div>
                        <h1 class="search-term h1 std-side-padding-px">
                            Discount {{ $category->parent->name }} for {{ $category->name }}
                        </h1>

                        <div class="search-result-bar std-side-padding" id="result-count">
                            <div class="search-item-count">
                                <span class="resultsShown">
                                    Showing page {{ $products->currentPage() }} of 
                                </span>
                                <span class="totalResults">{{ $products->total() }}</span>
                            </div>
                            <div class="sort-by-desk select-container">
                                <label>Order by:</label>
                                <select name="orderby" class="link-3" id="orderby" aria-label="Sort search by">
                                    <option selected="disabled">Choose your filter</option>
                                    <option value="popular">
                                        Most Popular
                                    </option>
                                    <option value="relative">
                                        Relevance
                                    </option>
                                    <option value="all">
                                        A - Z
                                    </option>
                                    <option value="byreview">
                                        Review Rating
                                    </option>
                                    <option value="review-count">
                                        Review Count
                                    </option>
                                    <option value="asc">
                                        Price: Low to High
                                    </option>
                                    <option value="desc">
                                        Price: High to Low
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="search-filter-options c4-3-of-12 c5-2-of-12 std-side-padding">
                            <div id="mobile-filter-container">
                                <div class="pop mobile-filter-pop">
                                    <span class="filter-option-more">
                                        <span id="search-filter-count">
                                            1
                                        </span> Filter
                                    </span>
                                    <input class="pop-trigger link-3 mq4hide" name="show-search-filter" value="show" type="radio" aria-label="Show mobile filter">
                                    <div class="pop-content">
                                        <div class="std-side-padding">
                                            <div class="r filter-head block-padding">
                                                <div class="c-8-of-12">Filter &amp; Sort</div>
                                                <div class="c-4-of-12">
                                                    <span class="close">
                                                        <input class="pop-trigger" name="show-search-filter" value="hide"
                                                            type="radio" aria-label="Close mobile filter">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="r sort-by block-padding">
                                                <div>Sort by</div>
                                                <div>
                                                    <label class="link-3 block-padding">
                                                        <input type="radio" name="SearchSortExpressionMobile"
                                                            aria-label="Most Popular" value="0" id="MobileSort-0">
                                                        <span class="radio-circle"></span>
                                                        Most Popular
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="link-3 block-padding">
                                                        <input type="radio" name="SearchSortExpressionMobile"
                                                            aria-label="Relevance" value="1" id="MobileSort-1"
                                                            checked="checked">
                                                        <span class="radio-circle"></span>
                                                        Relevance
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="link-3 block-padding">
                                                        <input type="radio" name="SearchSortExpressionMobile"
                                                            aria-label="A - Z" value="2" id="MobileSort-2">
                                                        <span class="radio-circle"></span>
                                                        A - Z
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="link-3 block-padding">
                                                        <input type="radio" name="SearchSortExpressionMobile"
                                                            aria-label="Review Rating" value="3" id="MobileSort-3">
                                                        <span class="radio-circle"></span>
                                                        Review Rating
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="link-3 block-padding">
                                                        <input type="radio" name="SearchSortExpressionMobile"
                                                            aria-label="Review Count" value="4" id="MobileSort-4">
                                                        <span class="radio-circle"></span>
                                                        Review Count
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="link-3 block-padding">
                                                        <input type="radio" name="SearchSortExpressionMobile"
                                                            aria-label="Price: Low to High" value="5" id="MobileSort-5">
                                                        <span class="radio-circle"></span>
                                                        Price: Low to High
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="link-3 block-padding">
                                                        <input type="radio" name="SearchSortExpressionMobile"
                                                            aria-label="Price: High to Low" value="6" id="MobileSort-6">
                                                        <span class="radio-circle"></span>
                                                        Price: High to Low
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="filter-by block-padding">
                                                Filter By
                                            </div>
                                            <div class="r block-padding section-filter-block gender-filter-block">
                                                <div class="pop">
                                                    <div class="title c-8-of-12 has-select" name="GenderFilter">
                                                        Gender <span class="ext-text">
                                                            (1)
                                                        </span>
                                                        <a class="clear-filter" href="#" data-show="true">Clear</a>
                                                    </div>
                                                    <input class="pop-trigger c-4-of-12 link-3 expand-filter" type="checkbox" checked="checked" aria-label="Expand gender filter">
                                                    <span></span>
                                                    <div class="pop-content">
                                                        <div>
                                                            <label class="link-3 block-padding">
                                                                <input class="gender_1" type="checkbox" name="GenderFilter[]"
                                                                    value="Women" aria-label="Filter by: Women"
                                                                    {{ Request::segment(3) == 'perfume'? 'checked':'' }}>
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a class="gender_1 search-filter-link link-3"
                                                                    href="#">
                                                                    Women
                                                                </a>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="link-3 block-padding">
                                                                <input class="gender_2" type="checkbox" name="GenderFilter[]"
                                                                    value="Men" aria-label="Filter by: Men" {{ Request::segment(3) == 'cologne'? 'checked':'' }}>
                                                                <span class="checkbox-box">
                                                                    <img class="" src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a class="gender_2 search-filter-link link-3"
                                                                    href="#">
                                                                    Men
                                                                </a>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="link-3 block-padding">
                                                                <input class="gender_3" type="checkbox" name="GenderFilter[]"
                                                                    value="Unisex" aria-label="Filter by: Unisex">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a class="gender_3 search-filter-link link-3"
                                                                    href="#">
                                                                    Unisex
                                                                </a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="r section-filter-block block-padding scent-filter-block">
                                                <div class="pop link-3">
                                                    <div class="title " name="BrandFilter">
                                                        Brand <span class="ext-text">
                                                        </span>
                                                        <a class="clear-filter" href="#" data-show="false">Clear</a>
                                                    </div>
                                                    <input class="pop-trigger link-3 expand-filter" type="checkbox" checked="checked" name="BrandName" aria-label="Expand scent filter">
                                                    <span></span>
                                                    <div class="pop-content">
                                                        @php
                                                        $brand_part = array_chunk($brands, ceil(count($brands)/2));
                                                           
                                                        // dd($scent); 
                                                        @endphp
                                                        @foreach($brand_part[0] as $brand)
                                                     
                                                        <div>
                                                            <label class=" block-padding">
                                                                <input class="scent_1" type="checkbox" name="BrandFilter[]"
                                                                    value="{{  $brand['name']}}" aria-label="Filter by: {{  $brand['name']}}" {{ (Request::segment(2) == $brand['slug'])? 'checked':'' }}>
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/shopping/scent/bergamot/hers"
                                                                    class="scent_1 search-filter-link link-3 shopbyscent-filter-link">
                                                                    {{  $brand['name']}}
                                                                </a>
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                        
                                                        
                                                        <div class="pop">
                                                            <input class="pop-trigger link-1 trigger-show-more" type="checkbox" aria-label="Expand scent filter">
                                                            <div class="pop-content">
                                                                @foreach($brand_part[1] as $brand)
                                                                <div>
                                                                    <label class=" block-padding">
                                                                        <input class="scent_11" type="checkbox"
                                                                            name="BrandFilter[]" value="{{  $brand['name']}}"
                                                                            aria-label="Filter by: Patchouli" {{ (Request::segment(2) == $brand['slug'])? 'checked':'' }}>
                                                                        <span class="checkbox-box">
                                                                         <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                       </span>
                                                                        <a href="/shopping/scent/bergamot/hers"
                                                                    class="scent_1 search-filter-link link-3 shopbyscent-filter-link">
                                                                    {{  $brand['name']}}
                                                                </a>
                                                                    </label>
                                                                </div>
                                                                @endforeach
                                                                
                                                            </div>
                                                            <span class="link-1">
                                                                <span class="more-text">See More +</span><span class="less-text">See Less -</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="r section-filter-block block-padding scent-filter-block">
                                                <div class="pop link-3">
                                                    <div class="title " name="TypeFilter">
                                                        Type <span class="ext-text">
                                                        </span>
                                                        <a class="clear-filter" href="#" data-show="false">Clear</a>
                                                    </div>
                                                    <input class="pop-trigger  expand-filter" type="checkbox" checked="checked" aria-label="Expand scent filter">
                                                    <span></span>
                                                    <div class="pop-content">
                                                        @php
                                                        $type_part = array_chunk($types, ceil(count($types)/2));
                                                           
                                                        // dd($scent); 
                                                        @endphp
                                                        @foreach($type_part[0] as $type)
                                                     
                                                        <div>
                                                            <label class=" block-padding">
                                                                <input class="scent_1" type="checkbox" name="TypeFilter[]"
                                                                    value="{{ $type['name'] }}" aria-label="{{ $type['name'] }}" {{ (Request::segment(2) == $brand['slug'])? 'checked':'' }}>
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/shopping/scent/bergamot/hers"
                                                                    class="scent_1 search-filter-link link-3 shopbyscent-filter-link">
                                                                    {{  $type['name']}}
                                                                </a>
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                        
                                                        
                                                        <div class="pop">
                                                            <input class="pop-trigger link-1 trigger-show-more" type="checkbox" aria-label="Expand scent filter">
                                                            <div class="pop-content">
                                                                @foreach($type_part[1] as $type)
                                                                <div>
                                                                    <label class=" block-padding">
                                                                        <input class="scent_11" type="checkbox"
                                                                            name="TypeFilter[]" value="Patchouli"
                                                                            aria-label="Filter by: Patchouli">
                                                                        <span class="checkbox-box">
                                                                            <img class="lazy-img"
                                                                                src="https://img.fragrancex.com/images/ajax-loader-new.gif"
                                                                                data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                                width="16" height="16" alt="">
                                                                        </span>
                                                                        <a href="/shopping/scent/patchouli/hers"
                                                                            class="scent_11 search-filter-link link-3 shopbyscent-filter-link">
                                                                            {{ $type['name']??'' }}
                                                                        </a>
                                                                    </label>
                                                                </div>
                                                                @endforeach
                                                                
                                                            </div>
                                                            <span class="link-1">
                                                                <span class="more-text">See More +</span><span class="less-text">See Less -</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="r section-filter-block block-padding scent-filter-block">
                                                <div class="pop link-3">
                                                    <div class="title " name="DepartmentFilter">
                                                        Department <span class="ext-text">
                                                        </span>
                                                        <a class="clear-filter" href="#" data-show="false">Clear</a>
                                                    </div>
                                                    <input class="pop-trigger link-3 expand-filter" type="checkbox" checked="checked" aria-label="Expand scent filter">
                                                    <span></span>
                                                    <div class="pop-content">
                                                        @php
                                                        $department_part = array_chunk($departments, ceil(count($departments)/2));
                                                           
                                                        // dd($scent); 
                                                        @endphp
                                                        @foreach($department_part[0] as $dept)
                                                     
                                                        <div>
                                                            <label class=" block-padding">
                                                                <input class="scent_1" type="checkbox" name="DepartmentFilter[]"
                                                                    value="{{ $dept['name'] }}" aria-label="Filter by: Bergamot">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/shopping/scent/bergamot/hers"
                                                                    class="scent_1 search-filter-link link-3 shopbyscent-filter-link">
                                                                    {{  $dept['name']}}
                                                                </a>
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                        
                                                        
                                                        <div class="pop link-3">
                                                            <input class="pop-trigger link-1 trigger-show-more" type="checkbox" aria-label="Expand scent filter">
                                                            <div class="pop-content">
                                                                @foreach($department_part[1] as $dept)
                                                                <div>
                                                                    <label class=" block-padding">
                                                                        <input class="scent_11" type="checkbox"
                                                                            name="DepartmentFilter[]" value="{{ $dept['name'] }}"
                                                                            aria-label="Filter by: Patchouli">
                                                                        <span class="checkbox-box">
                                                                            <img class="lazy-img"
                                                                                src="https://img.fragrancex.com/images/ajax-loader-new.gif"
                                                                                data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                                width="16" height="16" alt="">
                                                                        </span>
                                                                        <a href="/shopping/scent/patchouli/hers"
                                                                            class="scent_11 search-filter-link link-3 shopbyscent-filter-link">
                                                                            {{ $dept['name']??'' }}
                                                                        </a>
                                                                    </label>
                                                                </div>
                                                                @endforeach
                                                                
                                                            </div>
                                                            <span class="link-1">
                                                                <span class="more-text">See More +</span><span class="less-text">See Less -</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="r section-filter-block block-padding scent-filter-block">
                                                <div class="pop link-3">
                                                    <div class="title " name="ScentFilter">
                                                        Scent Notes <span class="ext-text">
                                                        </span>
                                                        <a class="clear-filter" href="#" data-show="false">Clear</a>
                                                    </div>
                                                    <input class="pop-trigger link-3 expand-filter" type="checkbox" checked="checked" aria-label="Expand scent filter">
                                                    <span></span>
                                                    <div class="pop-content">
                                                        @php
                                                        $scent_part = array_chunk($scents, ceil(count($scents)/2));
                                                           
                                                        // dd($scent); 
                                                        @endphp
                                                        @foreach($scent_part[0] as $scent)
                                                     
                                                        <div>
                                                            <label class=" block-padding">
                                                                <input class="scent_1" type="checkbox" name="ScentFilter[]"
                                                                    value="{{ $scent['name'] }}" aria-label="Filter by: Bergamot">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/shopping/scent/bergamot/hers"
                                                                    class="scent_1 search-filter-link link-3 shopbyscent-filter-link">
                                                                    {{  $scent['name']}}
                                                                </a>
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                        
                                                        
                                                        <div class="pop">
                                                            <input class="pop-trigger link-1 trigger-show-more" name="" type="checkbox" aria-label="Expand scent filter">
                                                            <div class="pop-content">
                                                                @foreach($scent_part[1] as $scent)
                                                                <div>
                                                                    <label class=" block-padding">
                                                                        <input class="scent_11" type="checkbox"
                                                                            name="ScentFilter[]" value="{{ $scent['name'] }}"
                                                                            aria-label="Filter by: Patchouli">
                                                                        <span class="checkbox-box">
                                                                            <img class="lazy-img"
                                                                                src="https://img.fragrancex.com/images/ajax-loader-new.gif"
                                                                                data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                                width="16" height="16" alt="">
                                                                        </span>
                                                                        <a href="/shopping/scent/patchouli/hers"
                                                                            class="scent_11 search-filter-link link-3 shopbyscent-filter-link">
                                                                            {{ $scent['name']??'' }}
                                                                        </a>
                                                                    </label>
                                                                </div>
                                                                @endforeach
                                                                
                                                            </div>
                                                            <span class="link-1">
                                                                <span class="more-text">See More +</span><span class="less-text">See Less -</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r section-filter-block block-padding price-filter-block">
                                                <div class="pop link-3">
                                                    <div class="title " name="PriceFilter[]">
                                                        Price <span class="ext-text">
                                                        </span>
                                                        <a class="clear-filter" href="#" data-show="null">Clear</a>
                                                    </div>
                                                    <input class="pop-trigger link-3 expand-filter" type="checkbox" checked="checked" aria-label="Expand price filter">
                                                    <span></span>
                                                    <div class="pop-content">
                                                        <div>
                                                            <label class="block-padding">
                                                                <input class="price_1" type="checkbox" name="PriceFilter[]"
                                                                    value="10" aria-label="Filter by: Under $10">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/products/perfume-under-10.html"
                                                                    class="price_1 search-filter-link link-3 shopbyprice-filter-link">Under
                                                                    <bdo dir="ltr">Rs&nbsp;1500</bdo></a>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="block-padding">
                                                                <input class="price_2" type="checkbox" name="PriceFilter[]"
                                                                    value="1500" aria-label="Filter by: $10 - 25">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/products/perfume-10-25.html"
                                                                    class="price_2 search-filter-link link-3 shopbyprice-filter-link">Under<bdo
                                                                        dir="ltr"> Rs&nbsp;3000</bdo></a>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="block-padding">
                                                                <input class="price_3" type="checkbox" name="PriceFilter[]"
                                                                    value="3000" aria-label="Filter by: $25 - 50">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/products/perfume-25-50.html"
                                                                    class="price_3 search-filter-link link-3 shopbyprice-filter-link">Under <bdo
                                                                        dir="ltr">Rs&nbsp;5000</bdo></a>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="block-padding">
                                                                <input class="price_4" type="checkbox" name="PriceFilter[]"
                                                                    value="5000+" aria-label="Filter by: $50 +">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <a href="/products/perfume-over-50.html"
                                                                    class="price_4 search-filter-link link-3 shopbyprice-filter-link">Under<bdo
                                                                        dir="ltr">Rs&nbsp;5000 +</bdo></a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="r section-filter-block block-padding instock-filter-block link-3">
                                                <div class="pop">
                                                    <div class="title has-select" name="InStockFilter">
                                                        In Stock <span class="ext-text">
                                                            (1)
                                                        </span>
                                                    </div>
                                                    <input class="pop-trigger expand-filter" type="checkbox" checked="checked" value="1" aria-label="Expand in stock filter">
                                                    <span></span>
                                                    <div class="pop-content">
                                                        <div>
                                                            <label class=" block-padding">
                                                                <input id="instock_1" type="checkbox" name="InStockFilter"
                                                                    value="true" checked="checked" value="1" 
                                                                    aria-label="Filter by: In stock only">
                                                                <span class="checkbox-box">
                                                                    <img class=""
                                                                        src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        data-src="https://img.fragrancex.com/images/assets/ui/checkmark-white.svg"
                                                                        width="16" height="16" alt="">
                                                                </span>
                                                                <span class="link-3">In stock only</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r bottom-section block-padding">
                                                <div class="clear-filter-link c-4-of-12">
                                                    <a class="link-2" href="/search/search_results?currentPage=1&amp;searchSortExpression=1" style="">Clear Filters</a>
                                                </div>
                                                <div class="apply-filter c-6-of-12">
                                                    <span>
                                                        Show 4312 results
                                                    </span>
                                                    <input id="show-results" class="pop-trigger" name="show-search-filter" value="hide" type="radio" aria-label="Show results">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span id="mobile-search-filter-head" class=" section-filter-block">
                                <span class="search-term h1">Discount {{ $category->parent->name }} for {{ $category->name }}</span>
                            <span class="search-item-count">
                                    <span class="resultsShown">
                                       {{ $products->currentPage() }}  of
                                    </span>
                            <span class="totalResults">{{ $products->count() }}</span> Results
                            </span>
                            <span id="filter-mobile-label-tags"></span> <span id="mobile-tags-clear"></span>
                            </span>
                        </div>
                        <div id="brand-desc-mobile-section" class="std-side-padding">
                            <div class="brand-desc-mobile">
                                <div class="span">
                                    <h2>Buy Luxury Perfumes on Sale at a Discount</h2> <br>FragranceX offers an enormous inventory of
                                </div>
                                <span id="read-more-dots-mobile">...</span>
                                <span id="product-read-more-link">
                                    <a class="cta fs12" id="product-read-more-link-trigger" href="#"
                                        onclick="(function() { $('#chanelDisclaimerMobile').hide();$('#read-more-dots-mobile').hide(); })();">
                                        Read More
                                        <svg class="cta-_icon" width="12" height="12">
                                            <use xlink:href="/Images/general-icon.svg?v=1#arrow-cta"></use>
                                        </svg>
                                    </a>
                                </span>
                                <div class="span" id="product-read-more-text" style="display: none;">
                                    popular luxury perfume <a href="https://www.a.com/products/allbrands.html">brands</a> at prices up to 80% off of retail. FragranceX has been a trusted marketplace for online fragrance shopping for years, and our
                                    <a href="https://www.a.com/customerservice/testimonials.html">customer testimonials
                                        </a> will back that up. Stop spending too much money on women’s perfumes and start smelling great with the perfect scent you’ve been looking for. Whether you know exactly the
                                    brand you are looking for or are looking to try something new, you’re in the right place for the best perfume deals!<br><br>
                                    <h2>Things to Consider When Buying Perfumes Online</h2> <br>The perfume you wear can say a lot about you. Some scents are better for casual everyday use, while others may be bolder fragrances that can make an impression
                                    on a date or at any other type of social gathering. When you buy perfume online, you’ll want to choose the right type of product, the right fragrance, and the right place to make your purchase.<br><br>
                                    <h2>What Are the Different Types of Women’s Perfume?</h2> <br>Perfumes come in five main types, which are characterized by the concentration of fragrance oil they contain:
                                    <ul>
                                        <li> Parfums have the highest concentration of perfume oil, typically 20% to 30%. Parfum lasts the longest (usually six to eight hours) and smells the strongest.
                                        </li>
                                        <li> Eau de parfum is usually 15% to 20% fragrance oil. Eau de parfum is among the most common types of perfume, and it lasts for four to five hours. </li>
                                        <li> Eau de toilette is 5% to 15% perfume oil. It’s quite popular because of how inexpensive it is, and it usually lasts two or three hours. </li>
                                        <li> Eau de cologne is 2% to 4% fragrance oil. It only lasts for a couple of hours, and it’s often applied more heavily. </li>
                                        <li> Eau fraiche is only 1% to 3% perfume oil and will last for an hour or two. It has a very light, subtle fragrance. </li>
                                    </ul>Knowing how bold of a scent you are looking for and how long-lasting you want it to be can help you decide on which perfume to get.<br><br>
                                    <h2>Are Perfume and Cologne the Same?</h2> <br>No. In everyday language, people usually use “perfume” to refer to a fragrance for women and “cologne” to refer to a scent for men. But when you see those words on a fragrance
                                    bottle or box, they’re referring to the concentration of scented oil the product contains. The difference in perfume versus cologne is that a scent labeled “perfume” or “parfum” is around 20% to 30% perfume oil, while
                                    <a href="https://www.a.com/products/_cid_cologne__category.html">cologne</a> has a 2% to 4% concentration of oil. At FragranceX, we carry both designer cologne and luxury perfume.<br><br>
                                    <h2>Understanding Perfume Notes and Scent Families</h2> <br>Fragrances are grouped into four families: floral, oriental, woody, and fresh. Scents in these categories fall into subfamilies, such as mossy wood or soft floral.
                                    The <a href="https://www.a.com/blog/fragrance-wheel/">fragrance wheel</a> shows how these families and subfamilies are organized. Each family of fragrances will tend to incorporate certain notes, the base scents that
                                    go into a perfume or cologne. For instance, floral scents often include notes like jasmine and rose, while woody scents may include notes like sandalwood and vetiver. Most people have a favorite fragrance family or
                                    subfamily, and once you know what that is, you can use this information to find similar scents the person might like. At FragranceX, we have every kind of perfume for sale, from fruity to water to dry wood and beyond.
                                    Finding a signature scent that works for you at an unbeatable price has never been easier!<br><br>
                                    <h2>What Is the Right Perfume for Me?</h2> <br>With all of the different notes and fragrance families, it can be difficult to know which scent suits you, so we created a
                                    <a href="https://www.a.com/fragrance-information/perfume-quiz.html">perfume
                                        quiz</a> to help you decide. The right perfume will be different for everyone, but our quiz can be a great starting point to finding your new favorite fragrance. Once you have
                                    an idea of what you’re looking for, order a few of our perfume store’s low-cost branded <a href="https://www.a.com/products/perfume_samples.html">perfume
                                        samples</a> so you can see how they work with your unique body chemistry.<br><br>
                                    <h2>What Is the Best Perfume to Give as a Gift?</h2> <br>Choosing a designer fragrance for someone else can be a challenge, but there are a few clues that may help you make your choice. What types of scents do they usually
                                    wear? Can you recognize their usual cologne, or can you pick out a few notes of their perfume? If your mom always wears Red Door or your best friend often smells like vanilla, that’s a good place to start. One of our
                                    discount <a href="https://www.a.com/products/giftsets.html">perfume gift
                                        sets</a> in their signature scent or a similar fragrance is likely to be appreciated. If you’re truly stumped, check out our <a href="https://www.a.com/blog/">blog</a> to explore popular perfumes for women.
                                    <br><br>
                                    <h2>Are Perfume Samples Stronger?</h2> <br>No. Our perfume samples are just that: samples. They are small glass vials ranging from 0.03 oz. to 0.10 oz. that contain the same perfume brands for women you would normally get,
                                    just in smaller amounts. They are a perfect way to try out new scents and also make for a convenient travel-size perfume! If you’re someone who is looking for a way to order inexpensive perfume online without skimping
                                    on the quality of top perfumes, our genuine perfume samples may be the answer for you.<br><br>
                                    <h2>Does FragranceX Sell Fake Perfume?</h2> <br>Absolutely not! We guarantee that every designer perfume we sell is 100% authentic, and we back that up with a generous money-back return policy if you aren’t fully satisfied.<br><br>
                                    <h2>Is it Safe to Buy Fragrances Online?</h2> <br>At FragranceX, it’s absolutely safe to buy designer fragrances online. We take the privacy and security of your order very seriously. When you buy perfume online from us,
                                    we 100% guarantee that your information will be kept secure. Any personal information you share while making a purchase from our online perfume outlet will only be used to process your order. FragranceX will never share
                                    or exchange any personal information you give us online with a third party without your consent. And every transaction with our online perfume shop is encrypted and kept completely secure with Secure Socket Layer (SSL)
                                    technology by Verisign.<br><br>
                                    <h2>What Is the Best Online Perfume Store?</h2> <br>Thousands of loyal customers have recognized that FragranceX is the best place to buy perfume online, as you can see from our many glowing reviews. Unlike some other discount
                                    perfume websites, all of our products are 100% genuine, and we carry a wide range of high-quality products, including hard-to-find and discontinued fragrances. At FragranceX, we are also committed to excellent customer
                                    service. If you have any questions, please read our <a href="https://www.a.com/customerservice/faq.html/">FAQs</a>; if you need additional support while shopping, feel free to <a href="https://www.a.com/customerservice/contact.html">contact us</a>                                    so that our team can help you with your purchase promptly. We even offer a loyalty program: Sign up and you’ll be able to earn extra discounts on future orders. When you shop with FragranceX, you’ll soon see how easy
                                    it is to save big on your favorite perfume for women!
                                    <br><br>
                                    <h2>Frequently Asked Questions About Perfume</h2><br>
                                    <h2>Why Do You Apply Perfume to the Wrist?</h2> <br>Applying perfume to your wrist isn’t just a fancy gesture to go with your fancy perfume: There’s actually a scientific reason for doing so. Your body contains pulse points
                                    that are warmer than other parts of your body, including behind your knees, your neck, and your wrists. When designer perfume for ladies is sprayed on these sites, the warmth will actually help to radiate the scent
                                    from your skin.<br><br>
                                    <h2>How Does Perfume Affect the Brain?</h2> <br>Different scents can have a <a href="https://news.harvard.edu/gazette/story/2020/02/how-scent-emotion-and-memory-are-intertwined-and-exploited/" auto-tracked="true">strong effect</a>                                    on your behaviors and emotions. The area of the brain that controls smell, the limbic system, is also responsible for emotions, behavior, motivation, and long-term memory. This is why certain scents can bring back memories,
                                    and it’s also why people use aromatherapy to make themselves feel calmer or more energized.<br><br>
                                    <h2>When Was Perfume Invented?</h2> <br>The idea of using something to scent the air dates back to the Mesopotamians and their use of incense, but the chemistry behind modern perfumes is credited to a Babylonian woman named
                                    <a href="https://www.girlmuseum.org/tapputi-belatekallim/" auto-tracked="true">Tapputi-Belatekallim</a> who lived around 1200 B.C.E. Her work included the first recorded documentation of the process of distillation,
                                    a key part of perfume-making, as well as several original scent extraction methods. She is sometimes called the world’s first chemist. <br><br>Written by <a href="https://www.a.com/blog/author/leanna-serras/" target="_blank">Leanna
                                        Serras</a><br>
                                </div>
                            </div>
                        </div>
                        <div id="search-result-content" class="c4-9-of-12 c5-10-of-12">
                            <div id="brand-desc-section" class="std-side-padding">
                                <div class="brand-desc-desk">
                                    <span>
                                        <h2>Buy Luxury Perfumes on Sale at a Discount</h2> <br>FragranceX offers an enormous
                                        inventory of popular luxury perfume <a
                                            href="https://www.a.com/products/allbrands.html">brands</a> at prices
                                        up to 80% off of retail. FragranceX has been a trusted marketplace for online
                                        fragrance shopping for years, and our <a
                                            href="https://www.a.com/customerservice/testimonials.html">customer
                                            testimonials</a> will back that up. Stop spending too much money on women’s
                                        perfumes and start smelling great with the perfect scent you’ve been looking for.
                                        Whether you know exactly the brand you are
                                    </span>
                                    <span id="read-more-dots">...</span>
                                    <span id="product-read-more-link-m">
                                        <a class="cta fs12 link-2" id="product-read-more-link-trigger-m" href="#"
                                            onclick="(function() { $('#chanelDisclaimer').hide();$('#read-more-dots').hide(); })();">
                                            Read More
                                            <svg class="cta-icon" width="12" height="12">
                                                <use xlink:href="/Images/general-icon.svg?v=1#arrow-cta"></use>
                                            </svg>
                                        </a>
                                    </span>
                                    <span id="product-read-more-text-m" style="display: none;">
                                        looking for or are looking to try something new, you’re in the right place for the
                                        best perfume deals!<br><br>
                                        <h2>Things to Consider When Buying Perfumes Online</h2> <br>The perfume you wear can
                                        say a lot about you. Some scents are better for casual everyday use, while others
                                        may be bolder fragrances that can make an impression on a date or at any other type
                                        of social gathering. When you buy perfume online, you’ll want to choose the right
                                        type of product, the right fragrance, and the right place to make your
                                        purchase.<br><br>
                                        <h2>What Are the Different Types of Women’s Perfume?</h2> <br>Perfumes come in five
                                        main types, which are characterized by the concentration of fragrance oil they
                                        contain: <ul>
                                            <li> Parfums have the highest concentration of perfume oil, typically 20% to
                                                30%. Parfum lasts the longest (usually six to eight hours) and smells the
                                                strongest. </li>
                                            <li> Eau de parfum is usually 15% to 20% fragrance oil. Eau de parfum is among
                                                the most common types of perfume, and it lasts for four to five hours. </li>
                                            <li> Eau de toilette is 5% to 15% perfume oil. It’s quite popular because of how
                                                inexpensive it is, and it usually lasts two or three hours. </li>
                                            <li> Eau de cologne is 2% to 4% fragrance oil. It only lasts for a couple of
                                                hours, and it’s often applied more heavily. </li>
                                            <li> Eau fraiche is only 1% to 3% perfume oil and will last for an hour or two.
                                                It has a very light, subtle fragrance. </li>
                                        </ul>Knowing how bold of a scent you are looking for and how long-lasting you want
                                        it to be can help you decide on which perfume to get.<br><br>
                                        <h2>Are Perfume and Cologne the Same?</h2> <br>No. In everyday language, people
                                        usually use “perfume” to refer to a fragrance for women and “cologne” to refer to a
                                        scent for men. But when you see those words on a fragrance bottle or box, they’re
                                        referring to the concentration of scented oil the product contains. The difference
                                        in perfume versus cologne is that a scent labeled “perfume” or “parfum” is around
                                        20% to 30% perfume oil, while <a
                                            href="https://www.a.com/products/_cid_cologne__category.html">cologne</a>
                                        has a 2% to 4% concentration of oil. At FragranceX, we carry both designer cologne
                                        and luxury perfume.<br><br>
                                        <h2>Understanding Perfume Notes and Scent Families</h2> <br>Fragrances are grouped
                                        into four families: floral, oriental, woody, and fresh. Scents in these categories
                                        fall into subfamilies, such as mossy wood or soft floral. The <a
                                            href="https://www.a.com/blog/fragrance-wheel/">fragrance wheel</a>
                                        shows how these families and subfamilies are organized. Each family of fragrances
                                        will tend to incorporate certain notes, the base scents that go into a perfume or
                                        cologne. For instance, floral scents often include notes like jasmine and rose,
                                        while woody scents may include notes like sandalwood and vetiver. Most people have a
                                        favorite fragrance family or subfamily, and once you know what that is, you can use
                                        this information to find similar scents the person might like. At FragranceX, we
                                        have every kind of perfume for sale, from fruity to water to dry wood and beyond.
                                        Finding a signature scent that works for you at an unbeatable price has never been
                                        easier!<br><br>
                                        <h2>What Is the Right Perfume for Me?</h2> <br>With all of the different notes and
                                        fragrance families, it can be difficult to know which scent suits you, so we created
                                        a <a href="https://www.a.com/fragrance-information/perfume-quiz.html">perfume
                                            quiz</a> to help you decide. The right perfume will be different for everyone,
                                        but our quiz can be a great starting point to finding your new favorite fragrance.
                                        Once you have an idea of what you’re looking for, order a few of our perfume store’s
                                        low-cost branded <a
                                            href="https://www.a.com/products/perfume_samples.html">perfume
                                            samples</a> so you can see how they work with your unique body
                                        chemistry.<br><br>
                                        <h2>What Is the Best Perfume to Give as a Gift?</h2> <br>Choosing a designer
                                        fragrance for someone else can be a challenge, but there are a few clues that may
                                        help you make your choice. What types of scents do they usually wear? Can you
                                        recognize their usual cologne, or can you pick out a few notes of their perfume? If
                                        your mom always wears Red Door or your best friend often smells like vanilla, that’s
                                        a good place to start. One of our discount <a
                                            href="https://www.a.com/products/giftsets.html">perfume gift sets</a>
                                        in their signature scent or a similar fragrance is likely to be appreciated. If
                                        you’re truly stumped, check out our <a
                                            href="https://www.a.com/blog/">blog</a> to explore popular perfumes for
                                        women.<br><br>
                                        <h2>Are Perfume Samples Stronger?</h2> <br>No. Our perfume samples are just that:
                                        samples. They are small glass vials ranging from 0.03 oz. to 0.10 oz. that contain
                                        the same perfume brands for women you would normally get, just in smaller amounts.
                                        They are a perfect way to try out new scents and also make for a convenient
                                        travel-size perfume! If you’re someone who is looking for a way to order inexpensive
                                        perfume online without skimping on the quality of top perfumes, our genuine perfume
                                        samples may be the answer for you.<br><br>
                                        <h2>Does FragranceX Sell Fake Perfume?</h2> <br>Absolutely not! We guarantee that
                                        every designer perfume we sell is 100% authentic, and we back that up with a
                                        generous money-back return policy if you aren’t fully satisfied.<br><br>
                                        <h2>Is it Safe to Buy Fragrances Online?</h2> <br>At FragranceX, it’s absolutely
                                        safe to buy designer fragrances online. We take the privacy and security of your
                                        order very seriously. When you buy perfume online from us, we 100% guarantee that
                                        your information will be kept secure. Any personal information you share while
                                        making a purchase from our online perfume outlet will only be used to process your
                                        order. FragranceX will never share or exchange any personal information you give us
                                        online with a third party without your consent. And every transaction with our
                                        online perfume shop is encrypted and kept completely secure with Secure Socket Layer
                                        (SSL) technology by Verisign.<br><br>
                                        <h2>What Is the Best Online Perfume Store?</h2> <br>Thousands of loyal customers
                                        have recognized that FragranceX is the best place to buy perfume online, as you can
                                        see from our many glowing reviews. Unlike some other discount perfume websites, all
                                        of our products are 100% genuine, and we carry a wide range of high-quality
                                        products, including hard-to-find and discontinued fragrances. At FragranceX, we are
                                        also committed to excellent customer service. If you have any questions, please read
                                        our <a href="https://www.a.com/customerservice/faq.html/">FAQs</a>; if you
                                        need additional support while shopping, feel free to <a
                                            href="https://www.a.com/customerservice/contact.html">contact us</a> so
                                        that our team can help you with your purchase promptly. We even offer a loyalty
                                        program: Sign up and you’ll be able to earn extra discounts on future orders. When
                                        you shop with FragranceX, you’ll soon see how easy it is to save big on your
                                        favorite perfume for women!<br><br>
                                        <h2>Frequently Asked Questions About Perfume</h2><br>
                                        <h2>Why Do You Apply Perfume to the Wrist?</h2> <br>Applying perfume to your wrist
                                        isn’t just a fancy gesture to go with your fancy perfume: There’s actually a
                                        scientific reason for doing so. Your body contains pulse points that are warmer than
                                        other parts of your body, including behind your knees, your neck, and your wrists.
                                        When designer perfume for ladies is sprayed on these sites, the warmth will actually
                                        help to radiate the scent from your skin.<br><br>
                                        <h2>How Does Perfume Affect the Brain?</h2> <br>Different scents can have a <a
                                            href="https://news.harvard.edu/gazette/story/2020/02/how-scent-emotion-and-memory-are-intertwined-and-exploited/"
                                            auto-tracked="true">strong effect</a> on your behaviors and emotions. The area
                                        of the brain that controls smell, the limbic system, is also responsible for
                                        emotions, behavior, motivation, and long-term memory. This is why certain scents can
                                        bring back memories, and it’s also why people use aromatherapy to make themselves
                                        feel calmer or more energized.<br><br>
                                        <h2>When Was Perfume Invented?</h2> <br>The idea of using something to scent the air
                                        dates back to the Mesopotamians and their use of incense, but the chemistry behind
                                        modern perfumes is credited to a Babylonian woman named <a
                                            href="https://www.girlmuseum.org/tapputi-belatekallim/"
                                            auto-tracked="true">Tapputi-Belatekallim</a> who lived around 1200 B.C.E. Her
                                        work included the first recorded documentation of the process of distillation, a key
                                        part of perfume-making, as well as several original scent extraction methods. She is
                                        sometimes called the world’s first chemist. <br><br>Written by <a
                                            href="https://www.a.com/blog/author/leanna-serras/"
                                            target="_blank">Leanna Serras</a><br>
                                    </span>
                                </div>
                            </div>
                            <div class="search-loader">
                                {{-- put ajax loader here --}}
                            </div>
                            <div class="search-results std-side-padding put-content-here">
                                <div class="search-result-grid">
                                     @foreach($products as $product)
                                    
                                    <div class="c-6-of-12 c3-4-of-12 c5-3-of-12">
                                       

                                        <div class="product-grid-cell">
                                            <div class="product-img">
                                                <a href="{{ route('front.product.show',[$product->brand->slug,$product->slug]) }}">
                                                    <picture>
                                                        <source srcset="{{ $product->image->path??'' }}">
                                                        <img alt="Light Blue" height="191" width="191" src="{{ $product->image->path??'' }}">
                                                    </picture>
                                                    <noscript>
                                                        <img src="{{ $product->image->path??'' }}"
                                                            alt="Light Blue" />
                                                    </noscript>
                                                </a>
                                            </div>
                                            <div class="product-desc-1">
                                                <h3 class="h3 serif">
                                                    <a class="animate" href="/{{ route('front.product.show',[$product->brand->slug,$product->slug]) }}" aria-label="Light Blue"></a>
                                                    <a class="link-2" href="{{ route('front.product.show',[$product->brand->slug,$product->slug]) }}">
                                                        <span>{{ $product->name }}</span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="product-review " id="review-884W">
                                                <div class="p-w-r">
                                                    <div class="pr-stars">
                                                        <div class="stars-total" style="width: 92.00%;"></div>
                                                    </div>
                                                    <div class="review-count"><span>(1731)</span></div>
                                                </div>
                                            </div>
                                            <div class="product-desc-2">
                                                by <span>
                                                    <a class="link-3"
                                                        href="/products/_bid_dolce---am---gabbana-am-lid_d__brands.html">{{ $product->brand->name }}</a>
                                                </span>
                                            </div>
                                            <span class="category">{{ $product->category->name }}'s</span><br>
                                            <div class="product-desc-3">
                                                Up to 0% Off
                                            </div>
                                            <input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;Light Blue&quot;,&quot;UnitPrice&quot;:39.81,&quot;Brand&quot;:&quot;Dolce &amp; Gabbana&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Eau De Toilette Spray&quot;,&quot;Size&quot;:&quot;0.8 oz&quot;,&quot;AutoSku&quot;:&quot;418223&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;884W&quot;}">
                                        </div>
                                   
                                    </div>
                                     @endforeach
                            
                        
                                   
                                        {{$products->links('pagination::bootstrap-5')}}
                                    

                                </div>
                            </div>
                            
                        </div>
                    </div>
            
                </div>
            </form>
            
            <div class="xfactor-wrapper">
                <div class="limit-width">
                    <div>
                        <div class="serif title">The <span>x</span> Factor</div>
                        <div>The FragranceX Difference</div>
                        <div class="c3-6-of-12 c4-3-of-12 section-wrapper">
                            <div class="section">
                                <div class="img-block">
                                    <img src="https://img.fragrancex.com/images/assets/icons/fastfreeshipping.svg" data-src="https://img.fragrancex.com/images/assets/icons/fastfreeshipping.svg" alt="" class="" width="60" height="60">
                                </div>
                                <div class="text-block">
                                    <div>Same Day Free Shipping</div>
                                    <div>Orders ship on the day that you place them and arrive within days.</div>
                                </div>
                            </div>
                        </div>
                        <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                            <div class="section">
                                <div class="img-block">
                                    <img src="https://img.fragrancex.com/images/assets/icons/trusted.svg" data-src="https://img.fragrancex.com/images/assets/icons/trusted.svg" alt="" class="" width="60" height="60">
                                </div>
                                <div class="text-block">
                                    <div>Trusted since 2001</div>
                                    <div>100% authentic fragrances. You won't find knockoffs or imitations here.</div>
                                </div>
                            </div>
                        </div>
                        <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                            <div class="section">
                                <div class="img-block">
                                    <img src="https://img.fragrancex.com/images/assets/icons/safesecure.svg" data-src="https://img.fragrancex.com/images/assets/icons/safesecure.svg" alt="" class="" width="60" height="60">
                                </div>
                                <div class="text-block">
                                    <div>Safe &amp; Secure Checkout</div>
                                    <div>100% safe and secure checkout. Your information is protected.</div>
                                </div>
                            </div>
                        </div>
                        <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                            <div class="section">
                                <div class="img-block">
                                    <img src="https://img.fragrancex.com/images/assets/icons/fivestar.svg" data-src="https://img.fragrancex.com/images/assets/icons/fivestar.svg" alt="" class="" width="60" height="60">
                                </div>
                                <div class="text-block">
                                    <div>5 Star Customer Ratings</div>
                                    <div>Over 20 million satisfied customers.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

        $(document).on("click", ".pagination .page-item", function(e) {

            e.preventDefault();

                //get url and make final url for ajax 

                alert('hi');
                var url = $(this).attr("href");
                var append = url.indexOf("?") == -1 ? "?" : "&";
                var finalURL = url + append + $("#searchform").serialize();

                //set to current url
                window.history.pushState({}, null, finalURL);

                $.get(finalURL, function(data) {

                $("#pagination_data").html(data);

                });

return false;
})
   

        
    
    </script>

    @endpush

    <!-- main sec  ends-->
@endsection