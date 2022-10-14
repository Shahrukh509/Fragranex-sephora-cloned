function initAddCoupon() {
    $(".add-coupon > .get-coupon").click(function() {
        $("#coupon-popup").length ? ($("#coupon-popup").css("display", "block"), typeof trackViewPromotion == "function" && trackViewPromotion("pdp-apply-coupon")) : $.ajax({
            url: "/widgets/CouponPopup/ajaxapplypagesuggestcoupon",
            type: "post",
            success: function(n) {
                if (n !== "") {
                    var t = $(".add-coupon > button");
                    t.text(n.appliedMsg), t.removeClass("get-coupon"), t.addClass("applied"), applyCouponSuccess(n), t.off("click"), trackCouponApplied("product-known-email")
                }
            }
        })
    })
}

function initSlider(n) {
    function f() {
        var r = $(this);
        setTimeout(function() {
            var e = r.find(".slider-content .content-container").outerWidth(),
                v = Math.floor(r.outerWidth() / e),
                c = r.scrollLeft(),
                u = Math.round(c / e),
                l = r.siblings(".slider-circles"),
                o = l.find(".checked"),
                i, h;
            if (!(o.length < 1)) {
                o.removeClass("checked"), l.find(".slider-" + u).addClass("checked");
                var a = "slider_next",
                    s = o.attr("class").split(/\s+/),
                    f = u;
                for (i = 0; i < s.length; i++)
                    if (s[i].indexOf("slider-") >= 0) { f = s[i].substring(7), !isNaN(f) && f > u && (a = "slider_previous"); break }
                u != f && (trackSliders(a, n.substring(1)), h = Math.round(c / e), trackProductSliderInView(t, h, h + v - 1))
            }
        }, 500)
    }
    var t = $(n + " .slider"),
        r, u, i;
    if (t.length) {
        typeof initProductListSliderGa == "function" && initProductListSliderGa(t), $(window).width() >= 750 && $(window).width() <= 950 && $(t).find(".slider-circles").children().last().remove(), r = $(n + " button"), r.click(function() {
            var c = $(this).data("slide"),
                r = $(n).find(".slider-wrapper"),
                l = r.scrollLeft(),
                u = r.outerWidth(),
                o = r.find(".content-container").first().outerWidth(),
                t = Math.ceil(u * c + l),
                a = Math.floor(u / o),
                s = r[0].scrollWidth - u,
                f, e, h;
            (t >= s - 100 ? t = s : t - 100 < 0 && (t = 0), f = r.siblings(".slider-circles"), e = f.find(".checked"), e.length < 1) || (e.removeClass("checked"), $(n).find("button.review-nav").attr("disabled", "disabled"), r.animate({ scrollLeft: t }, 800, function() {
                var s, e;
                i(t, r[0].scrollWidth - u, $(n)), s = Math.round(t / u), f.find(".slider-" + s).addClass("checked"), e = Math.round(t / o), trackProductSliderInView(r, e, e + a - 1)
            }), h = t > 0 ? "slider_next" : "slider_previous", trackSliders(h, n.substring(1)))
        }), u = $(n + " .slider-wrapper");
        u.on("touchend", f);
        $(window).resize(function() {
            var t = $(n + " .slider-wrapper");
            i(t.scrollLeft(), t[0].scrollWidth - t.outerWidth(), $(n))
        }), i = function(n, t, i) { n > 0 ? i.find(".prev, .prev button").removeAttr("disabled") : i.find(".prev, .prev button").attr("disabled", "disabled"), n >= t - 100 ? i.find(".next, .next button").attr("disabled", "disabled") : i.find(".next, .next button").removeAttr("disabled") }, $(n + " .slider-wrapper").outerWidth() >= $(n + " .slider-wrapper")[0].scrollWidth - 100 && $(n).find(".next, .next button").attr("disabled", "disabled"), typeof trackSliderInView == "function" && trackSliderInView(n)
    }
}

function initOosNotifyValidation() {
    $(document).on("click", "#ExpandOos", function() {
        var n = $("#OutOfStockItemsAsyncSection").find("form");
        $(n).each(function() { $(this).removeData("validator").removeData("unobtrusiveValidation"), $.validator.unobtrusive.parse($(this)) })
    })
}

function syncProductInfo(n) {
    function u(n, i) {
        var u = f(),
            e = u,
            h;
        n.DefaultWishList && n.DefaultWishList.Id && (e = n.DefaultWishList.Id);
        var r = i.Code.toLowerCase(),
            o = i.SalePrice,
            c = '<div class="sans add"><a href="/customeraccount/wishlist/addtowishlist?id=' + e + "&amp;productCode=" + r + "&amp;price=" + o + '" wishlistid="' + e + '" style="text-decoration: none; display:block">' + n.ResourceAddToWishList + '</a></div><div id="listInShow_' + r + '" class="user_list"><svg class="wishlist_ico" width="15" height="15"><use xlink:href="/Images/general-icon.svg?v=3#wishlist"/></svg><div id="listIn_' + r + '" class="list_in" style="display: none;"><ul>',
            s = "";
        return $.each(t.WishLists, function(n, t) { s = s + '<a href="/customeraccount/wishlist/addtowishlist?id=' + t.Id + "&amp;productCode=" + r + "&amp;price=" + o + '" wishlistid="' + t.Id + '" style="display: block; text-decoration: none"><li>' + t.Description + "</li></a>" }), h = '<a href="/customeraccount/wishlist/addtowishlist?id=' + u + "&amp;productCode=" + r + "&amp;price=" + o + '&amp;newlist=True" newlist="true" wishlistid="' + u + '" style="text-decoration: none"><li>' + n.ResourceCreateAnotherWishList + "</li></a></ul></div></div>", c + s + h
    }

    function f() {
        return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(n) {
            var t = Math.random() * 16 | 0,
                i = n == "x" ? t : t & 3 | 8;
            return i.toString(16)
        })
    }
    var t, i, r;
    n && n.responseText && (t = JSON.parse(n.responseText), t && t.Success && (i = "", $("#PageCultureClass") && (i = $("#PageCultureClass").val()), $.each(t.Products, function(n, r) {
        var e = $("#listing-" + r.Code),
            s, f, h, o;
        e && (r.ShowFreeShippingMessage && !r.ShowFreeShippingOverPrice && (f = e.find(".product-free-shipping"), f && !f.hasClass("over-thld") && f.addClass("over-thld")), r.ShowAfterpayMessage && r.OverAfterpayThreshold && (f = e.find(".afterpay-msg"), f && !f.hasClass("over-thld") && f.addClass("over-thld")), r.ShowStockMessage && r.StockMessage ? (f = e.find(".stk-msg"), f.length > 0 && (s = f.find(".limited"), s && s.length !== 0 || (o = '<div class="msg h5 limited ' + i + '">' + r.StockMessage + "</div>", f.html(o)))) : (f = e.find(".stk-msg"), f.length > 0 && f.html().length > 0 && f.html("")), t.WishLists && t.WishLists.length > 0 && (h = e.find(".wishlist"), h && (o = u(t, r), h.html(o))))
    }), initforWishList(), t.OosProducts && $.each(t.OosProducts, function(n, t) {
        var r = $("#listing-" + t),
            u, f;
        r && (r.find(".in-stock").remove(), r.addClass("disabled-section"), u = r.find(".stk-msg"), u && (f = '<div class="msg h5 limited ' + i + '">out of stock</div>', u.html(f)))
    }), t.WaitingListEmail && ($.each($(".products-oos input[type=email]"), function(n, i) {
        var r = $(i);
        r && r.val().length === 0 && r.val(t.WaitingListEmail)
    }), r = $("#JoinParentWaitingListAsyncSection input[type=email]"), r && r.val(t.WaitingListEmail))))
}

function initAftpayPopup() {
    var t = document.getElementsByClassName("aftpay-more-info"),
        n;
    [].forEach.call(t, function(n) {
        n.addEventListener("click", function(n) {
            n.preventDefault();
            var t = document.getElementById("aftpay_popup_container");
            typeof t != "undefined" && t != null && (t.style.display = "block")
        })
    }), n = document.getElementById("afterpay-modal-close"), n !== null && n !== undefined && n.addEventListener("click", function() {
        var t = document.getElementById("aftpay_popup_container");
        t !== null && t !== undefined && (t.style.display = "none")
    })
}
var initFormError, initforWishList;
(function(n) {
    function r(t) {
        var u = n("#review-sort").find(":selected").val(),
            e = n("input[name='PageId']").val(),
            r = n("input[name='FilterScore']").val(),
            o = "&sort=" + u,
            s = r > 0 ? "&filters=rating:" + r : "",
            h = t >= 10 ? "&paging.from=" + t : "",
            c = "https://readservices-b2c.powerreviews.com",
            l = "/m/9816/l/en_US/product/" + e + "/reviews?apikey=f7284db1-d622-455b-a93c-9d58f0af6bd5&paging.size=10" + h + o + s;
        n.ajax({
            url: c + l,
            method: "get",
            success: function(t) {
                var e;
                if (t != null && t.results != null && t.results.length > 0) {
                    var r = n(".review")[0],
                        o = t.results[0].reviews,
                        u = [],
                        s = n(r).find(".thumbs-container button");
                    s.removeClass("review-vote-db").addClass("review-vote"), o.forEach(function(t) {
                        var i = c(n(r).clone(), t);
                        u.push(i)
                    }), n(".customer-reviews").html(""), u.forEach(function(t) { n(".customer-reviews").append(t) }), e = t.paging.total_results, n(".reviews-list .total-reviews").text(e), h(t.paging);

                    function h(t) {
                        var e = t.pages_total,
                            r = t.current_page_number,
                            s, u, o;
                        n(".reviews-list .max-page").text(e);
                        var y = e !== r,
                            p = r !== 1,
                            h = n(".reviews-list .next-pg"),
                            c = n(".reviews-list .prev-pg"),
                            a = n(".min-page"),
                            v = n(".max-page");
                        y ? (h.show(), h.data("pg", (r - 1) * 10 + 10)) : h.hide(), p ? (c.show(), c.data("pg", (r - 1) * 10 - 10)) : c.hide(), n(".reviews-link").removeClass("selected"), r === 1 ? a.addClass("selected") : r === e && v.addClass("selected"), s = document.createElement("span"), s.innerText = "...";
                        var w = r === 1 ? 3 : 2,
                            b = r === e ? -2 : -1,
                            l = document.createElement("a");
                        for (l.href = "#review-list", l.classList.add("reviews-link"), u = [], u.push(a), r - 3 >= 1 && u.push(n(s).clone()), i = b; i < w && r + i < e; i++) r + i > 1 && (o = n(l).clone(), o[0].setAttribute("data-pg", (r - 1) * 10 + i * 10), o[0].text = r + i, r === r + i && o[0].classList.add("selected"), u.push(o[0]));
                        r + 3 <= e && u.push(n(s).clone()), u.push(v), n(".page-number").html(""), n(".page-number").append(u), f()
                    }

                    function c(t, i) {
                        var f = i.metrics.rating,
                            e = f * 20 + "%",
                            o = i.metrics.helpful_votes,
                            s = i.metrics.not_helpful_votes,
                            h = i.details.headline,
                            c = i.details.comments,
                            l = i.details.bottom_line,
                            u = new Date(i.details.created_date),
                            a = u.getMonth() + 1 + "/" + u.getDate() + "/" + u.getFullYear(),
                            v = i.details.nickname,
                            y = i.details.location,
                            p = i.ugc_id,
                            r = n(t);
                        return n(r).find(".rating").text(f), n(r).find(".stars-total").css("width", e), n(r).find(".headline").text(h), n(r).find(".comment").text(c), n(r).find(".helpful-votes").text(o), n(r).find(".unhelpful-votes").text(s), n(r).find(".date").text(a), n(r).find(".author").text(v), n(r).find(".location").text(y), n(r).find("div[data-comment-id]").attr("data-comment-id", p), l === "Yes" ? n(r).find(".bottom-line").text(n("input[name='BottomLinePositive']").val()) : n(r).find(".bottom-line").text(n("input[name='BottomLineNegative']").val()), r
                    }
                }
            }
        })
    }
    var t = null,
        e = function() {
            n(".filter-by-score").click(function() {
                var e = n('input[name="PageId"]').val(),
                    o = n("#review-sort").val(),
                    u = n(this).data("filter"),
                    f = n(this).data("reviews");
                f > 0 && (t = u, n("input[name='FilterScore']").val(u), r(0)), n("html, body").animate({ scrollTop: n("#review-list").offset().top }, 1e3)
            }), n(".write-review").click(function(t) { n(".no-reviews").length || (t.preventDefault(), window.location.href = n("input[name='write-review-url']").val()) })
        },
        f, u;
    e(), f = function() {
        n(".page-number .reviews-link").click(function(t) {
            t.preventDefault();
            var i = n(this).data("pg");
            r(i), n("html, body").animate({ scrollTop: n("#review-list").offset().top - 70 }, 1e3)
        })
    }, u = function() {
        n(".reviews-link").click(function(t) {
            t.preventDefault();
            var i = n(this).data("pg");
            r(i), n("html, body").animate({ scrollTop: n("#review-list").offset().top - 70 }, 1e3)
        }), n("#review-sort").change(function(i) {
            i.preventDefault(), t = null;
            var u = n('input[name="PageId"]').val(),
                f = n("#review-sort").val();
            r(0), n("input[name='FilterScore']").val(0)
        }), n(".review-vote").click(function(t) {
            var i;
            if (t.preventDefault(), i = n(this).parent(), !i.hasClass("review-voted")) {
                var r = n(this).data("value"),
                    u = i.data("comment-id"),
                    f = parseInt(n(this).find("span").text()) + 1;
                n.ajax({ url: "https://writeservices.powerreviews.com/voteugc", method: "post", dataType: "json", contentType: "application/json", data: JSON.stringify({ ugc_id: u, vote_type: r, merchant_id: 9816 }) }), n(this).find("span").text(f), i.addClass("review-voted")
            }
        }), n(".review-vote-db").click(function(t) {
            var i;
            if (t.preventDefault(), i = n(this).parent(), !i.hasClass("review-voted")) {
                var u = n(this).data("value"),
                    r = i.data("comment-id"),
                    f = parseInt(n(this).find("span").text()) + 1,
                    e = n(this).find("span");
                n.ajax({ url: "/widgets/PowerReviews/CanVote", method: "post", dataType: "json", contentType: "application/json", data: JSON.stringify({ ugcId: r }), success: function(t) { t.success && (n.ajax({ url: "https://writeservices.powerreviews.com/voteugc", method: "post", dataType: "json", contentType: "application/json", data: JSON.stringify({ ugc_id: r, vote_type: u, merchant_id: 9816 }), success: function(t) { t.status_code == 200 && n.ajax({ url: "/widgets/PowerReviews/UpdateVotes", method: "post", dataType: "json", contentType: "application/json", data: JSON.stringify({ ugcId: r, isHelpful: u == "helpful" }) }) } }), e.text(f)) } }), i.addClass("review-voted")
            }
        })
    }, u()
})(jQuery),
function() { initAddCoupon() }(jQuery), initFormError = function(n) {
        var t = $(n + " input[type='email'].error");
        t.keydown(function() { t.removeClass("error"), $(n + " .error-msg").remove(), $(n + " button").removeAttr("disabled") })
    },
    function(n) { n("#OtherFragrancesAsyncSection").length && initSlider("#OtherFragrancesAsyncSection"), n("#AlsoBoughtAsyncSection").length && initSlider("#AlsoBoughtAsyncSection") }(jQuery),
    function(n) {
        function t() {
            var t = function(i) { n('script[src="/bundles_nd/zoommobile"]').length === 0 ? loadScript("/bundles_nd/zoommobile", function() { initZoomMobile(i.target), n(i.target).off("click", t) }) : (initZoomMobile(i.target), n(i.target).off("click", t)) };
            n(".product-listing-img > .pop-trigger").click(t);
            n("#OutOfStockItemsAsyncSection").on("click", ".product-listing-img > .pop-trigger", t)
        }
        n(".review-video").click(function() {
            var i = n(".product-video-async-html");
            i.length > 0 && n(".review-video").html(i.val())
        }), t(), n("#AfterpayPopupForm").length && n("#AfterpayPopupForm").submit(), n("#SyncProductInfoForm") && n("#SyncProductInfoForm").submit()
    }(jQuery), initOosNotifyValidation(), $(function() { var n = 139 }),
    function(n) {
        var s = function() { n("#RecommendedProductsAsyncForm").submit() },
            o, t, i, u, f, e;
        if (s(), o = n("#review-section"), o.length && (initSlider("#review-section"), setTimeout(function() { n('[aria-label="testimonial-0"]').prop("checked", !0) }, 0)), n("#top-sellers-slider-wrapper").length && initSlider("#top-sellers-slider-wrapper"), n("#new-arrivals-slider-wrapper").length && initSlider("#new-arrivals-slider-wrapper"), n("#notificationBanner").length && insertBannerNotificationClose(), n("#home-content").length) n(document).on("click", "#home-content .cta", function(t) { t.preventDefault(), n("#home-content-read-more-trigger").hide(), n("#home-content-read-more-content").css("display", "inline") });
        if (n("#home-hero-slider")) {
            t = n(".hero-section-slider .content-container .content"), i = 0;

            function r(f) { var e, o, s, h; try { e = i, e += f, e >= t.length ? e = 0 : e < 0 && (e = t.length - 1), o = n(t[e]).find("img"), !o.attr("src") && o.attr("data-src") && (o.attr("src", o.attr("data-src")), o.attr("srcset", o.attr("data-srcset")), n(t[e]).find("source").each(function() { n(this).attr("srcset", n(this).attr("data-srcset")) })), window.matchMedia("(min-width: 950px)").matches ? (s = n(t[i]).css("width"), h = i, n(t[h]).css("z-index", "-1"), f === -1 ? (n(t[h]).finish().animate({ left: s }, 300, function() { n(this).css({ opacity: "0", "z-index": "0", left: "0" }) }), n(t[e]).queue(function() { n(this).css({ opacity: "1", left: "-" + s }).dequeue() }).animate({ left: "0" }, 300)) : (n(t[h]).finish().animate({ left: "-" + s }, 300, function() { n(this).css({ opacity: "0", "z-index": "0", left: "0" }) }), n(t[e]).queue(function() { n(this).css({ opacity: "1", left: s }).dequeue() }).animate({ left: "0" }, 300))) : (n(t[e]).animate({ opacity: "1" }, 300), n(t[i]).animate({ opacity: "0" }, 500), i = e), i = e, clearTimeout(u), u = setTimeout(function() { r(1) }, 5e3) } catch (c) {} }

            function h(i) {
                var r, u;
                try {
                    if (r = n(t[i]).find("img"), r.attr("src")) return;
                    !r.attr("src") && r.attr("data-src") && (r.attr("src", r.attr("data-src")), r.attr("srcset", r.attr("data-srcset")), n(t[i]).find("source").each(function() { n(this).attr("srcset", n(this).attr("data-srcset")) })), u = n(t[i]).find("source"), u && u.length > 1 && u.each(function(t) {
                        var f = n(u[t]).attr("media");
                        if (window.matchMedia(f).matches) {
                            var i = n(u[t]).attr("srcset"),
                                e = window.devicePixelRatio > 1 ? i.substring(i.indexOf(" 1x") + 4, i.indexOf(" 2x")).trim() : i.substring(0, i.indexOf(" 1x")).trim(),
                                r = document.createElement("link");
                            return r.rel = "preload", r.as = "image", r.href = e, document.head.appendChild(r), !1
                        }
                    })
                } catch (f) {}
            }
            if (t.length > 1) {
                n(".hero-section-slider .home-slider-nav button").css("display", "inline-block"), u = setTimeout(function() { r(1) }, 5e3), t.each(function(n) {
                    var t = n === 1 ? 3e3 : 5e3;
                    n >= 1 && setTimeout(function() { h(n) }, t)
                });
                n(".hero-section-slider .home-slider-nav button").on("click", function() {
                    var i = n(this).data("slide");
                    r(i)
                });
                f = 0, e = 0;
                n("#home-hero-slider").on("touchstart", c).on("touchend", l);

                function c(n) { f = n.changedTouches[0].pageX }

                function l(n) {
                    var t, i;
                    e = n.changedTouches[0].pageX, t = e - f, Math.abs(t) > 10 && (i = t < 0 ? 1 : -1, r(i))
                }
            }
        }
    }(jQuery),
    function(n) {
        if (n(".wishlist-container").length) {
            var t = function() { n("#wishlist-btn-edit-pencil").click(function(n) { n.preventDefault(), r() }) },
                i = function() { n("#btn-cancel-name-edit").click(function(n) { n.preventDefault(), u() }) },
                r = function() { n("#account_name").css("display", "none"), n("#username_edit").css("display", "block") },
                u = function() { n("#account_name").css("display", "block"), n("#username_edit").css("display", "none") };
            t(), i()
        }
    }(jQuery), initforWishList = function() {
        if ($(".wishlist").length !== 0 || $(".wishlist-container").length !== 0) {
            $(document).on("click", function() { $(".list_in").hide() });
            $("#list_in li").click(function() { $(".list_in").hide(), $(".user_list").css("background", "#e6e6e6") });
            $("[id^=listInShow_]").on("click", function(n) { n.stopPropagation() });
            $("[id^=listInShow_]").click(function(n) {
                n.stopPropagation();
                var t = $(this).attr("id").replace("listInShow_", ""),
                    i = "listIn_" + t;
                $(this).find("#" + i).toggle()
            }), $("#lightbox-cancel").click(function(n) { n.preventDefault(), $("#lightbox").hide() }), $("#create_wishlist").click(function() { event.preventDefault(), $("#lightbox").show() }), $("#lightbox-manage-cancel").click(function(n) { n.preventDefault(), $("#lightbox-manage").hide() }), $("#manage_wishlist").click(function() { event.preventDefault(), $("#lightbox-manage").show() })
        }
    }, initforWishList()