function handleAjaxPixelLoaded() { dataLayer.push({ event: "AjaxPixelLoaded" }), $("#AddPreviousViewedAsyncForm").length > 0 && $("#AddPreviousViewedAsyncForm").submit() }

function AddToFavorites(n) {
    var t = document.title,
        i = document.location;
    return window.sidebar ? (window.sidebar.addPanel(t, i, ""), !1) : window.external ? (window.external.AddFavorite(i, t), !1) : window.opera && window.print ? (n.setAttribute("href", i), n.setAttribute("title", t), n.setAttribute("rel", "sidebar"), n.click(), !1) : !1
}

function productSliderClick() {
    for (prodImgs = [].slice.call($(".flex-product-slider")[0].getElementsByClassName("lazy-img")), lazyImgFound = !1, i = 0; i < prodImgs.length && i < 2; i++) {
        if (lazyImg = prodImgs[i], lazyImg.tagName.toLowerCase() === "picture") {
            var n = lazyImg.querySelector("img"),
                t = lazyImg.querySelector("source");
            n.src = n.dataset.src, t.srcset = t.dataset.srcset
        } else lazyImg.src = lazyImg.dataset.src;
        lazyImg.classList.remove("lazy-img"), io.unobserve(lazyImg), lazyImgFound = !0
    }
    lazyImgFound === !1 && (prodFlexBtn = $(".flex-next")[productLoc], $(prodFlexBtn).off("click", productSliderClick))
}

function brandSliderClick() {
    for (brandImgs = [].slice.call($(".brand").children().find(".lazy-img")), lazyImgFound = !1, i = 0; i < brandImgs.length && i < 2; i++) {
        if (lazyImg = brandImgs[i], lazyImg.tagName.toLowerCase() === "picture") {
            var n = lazyImg.querySelector("img"),
                t = lazyImg.querySelector("source");
            n.src = n.dataset.src, t.srcset = t.dataset.srcset
        } else lazyImg.src = lazyImg.dataset.src;
        lazyImg.classList.remove("lazy-img"), io.unobserve(lazyImg), lazyImgFound = !0
    }
    lazyImgFound === !1 && (brandNextBtn = $(".flex-next")[brandLoc], $(brandFlexBtn).off("click", brandSliderClick))
}

function imageLoaded(n) {
    var i = new Image,
        r, u, t;
    $(i).on("load", function() {
        var n = tmpImages.filter(function(n) { return n.tmpImage.src !== undefined && n.tmpImage.src === i.src })[0],
            t, r, u;
        n.lazyImage.tagName && n.lazyImage.tagName.toLowerCase() === "picture" ? (r = n.lazyImage.querySelector("img"), u = n.lazyImage.querySelector("source"), r.src = r.dataset.src, u.srcset = u.dataset.srcset, t = r) : (n.lazyImage.src = n.tmpImage.src, t = n.lazyImage), t.dataset.height !== undefined && t.dataset.width !== undefined && ($(t).attr("width", t.dataset.width), $(t).attr("height", t.dataset.height)), tmpImages = tmpImages.filter(function(t) { return t != n })
    });
    n.tagName.toLowerCase() === "picture" ? (r = n.querySelector("img"), u = n.querySelector("source"), (u.dataset.srcset && supportWebp || r.dataset.src) && (i.src = supportWebp ? u.dataset.srcset : r.dataset.src, t = {}, t.tmpImage = i, t.lazyImage = n, tmpImages.push(t))) : n.dataset.src && (i.src = n.dataset.src, t = {}, t.tmpImage = i, t.lazyImage = n, tmpImages.push(t))
}

function lazyLoadImages(n, t, r, u) {
    if ("IntersectionObserver" in window) io = new IntersectionObserver(function(t) { t.forEach(function(t) { t.isIntersecting ? (lazyImage = t.target, lazyImage.getAttribute("data-src") !== undefined || lazyImage.getAttribute("data-srcset") !== undefined ? (lazyImage.className.indexOf("bizrate-img") >= 0 && loadScript("/bundles/js/31501_medal?v=3", function() {}), imageLoaded(lazyImage)) : imageLoaded(lazyImage), lazyImage.classList.remove("lazy-img"), io.unobserve(lazyImage)) : typeof t.isIntersecting == "undefined" && n.forEach(function(n) { n.dataset.src && (n.src = n.dataset.src), n.dataset.srcset && (n.srcset = n.dataset.srcset), n.dataset.height !== undefined && n.dataset.width !== undefined && ($(n).attr("width", n.dataset.width), $(n).attr("height", n.dataset.height)), n.classList.remove("lazy-img") }) }) }), n.forEach(function(n) { io.observe(n) });
    else if (u)
        for (i = 0; i < n.length; i++) n[i].src = n[i].getAttribute("data-src"), n[i].srcset = n[i].getAttribute("data-srcset"), n[i].getAttribute("data-height") !== undefined && n[i].getAttribute("data-width") !== undefined && ($(n[i]).attr("width", n[i].getAttribute("data-width")), $(n[i]).attr("height", n[i].getAttribute("data-height"))), $(n[i]).parents(".lazy-img-container").length && $(n[i]).parents().removeClass("lazy-img-container"), n[i].className = n[i].className.replace(/\blazy-img\b/g, "");
    else loadScript("/Scripts/intersection-observer-polyfill.js", function() { lazyLoadImages(n, t, r, !0); for (var i = 0; i < n.length; i++) $(n[i]).parent().removeClass("lazy-img-container") })
}

function trackSliderInView(n) {
    var t = document.querySelector(n);
    trackSliderObserver.observe(t)
}

function reinitforfloatingcart() {
    var t = $("#AjaxTopCart"),
        n;
    t.length && (n = t.html(), n.length > 0 && $("#AjaxTopCartFixed").html(n))
}

function isEmail(n) { var t = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/; return t.test(n) }

function pushEmailSignUpEvent() { dataLayer.push({ event: "EmailSignUp" }) }

function pushEmailToBraze(n) { n && appboy && (appboy.changeUser(n), appboy.getUser().setEmail(n)) }

function pushCid(n) { dataLayer.push({ new_frgxCID: n, event: "CidChangeCheck" }) }

function insertBannerNotificationClose() { $("#notificationBanner").children("div.in").append($('<a href="#" class="banner_coupon_close"><svg class="banner_coupon_close__icon" width="12" height="12"><use xlink:href="/Images/general-icon.svg?v=1#cross-delete"></use></svg></a>').click(function(n) { n.preventDefault(), $("#notificationBanner").slideUp(200) })) }

function suppressCouponPop() { $("#CouponPopupAsyncSection").html("<span></span>") }

function getTrimItemName(n) { return n.replace("Eau De Toilette", "EDT").replace("Eau De Parfum", "EDP").replace("Eau De Cologne", "EDC").trim() }

// function pushGaEventsToLayer(n, t, i, r) {
//     var u = getGaItemModel(n, i, r);
//     u.length > 0 && (dataLayer.push({ ecommerce: null }), dataLayer.push({ event: t, ecommerce: { items: u } }))
// }

function getGaItemModel(n, t, i) { var o, s, f, r, e, u; try { if (!n || n.length <= 0) return []; if (o = $(n).find(".ga-item-model"), o.length <= 0) return []; for (t = t || 0, i = i || 999999, s = [], f = t; f < o.length && f <= i; f++) r = JSON.parse(o.eq(f).val()), e = "", r.Size && r.Size.length > 0 && r.Type && r.Type.length > 0 && (e = r.Size + " " + getTrimItemName(r.Type)), u = { item_name: r.NameShort + " " + r.Category, item_brand: r.Brand, item_category: r.Category, quantity: r.Qty, item_list_id: r.ParentCode }, r.AutoSku && r.AutoSku.length > 0 && (u.item_id = r.AutoSku), r.Size && r.Size.length > 0 && r.Type && r.Type.length > 0 && (e = r.Size + " " + getTrimItemName(r.Type), u.item_variant = e, u.item_category2 = r.NameShort + " " + r.Category + " " + e), r.UnitPrice && r.UnitPrice > 0 && (u.price = r.UnitPrice, u.currency = r.Currency), s.push(u); return s } catch (h) { console.error("ga build item data error", h) } return [] }

function trackCouponApplied(n, t) {
    var i = "fx15";
    t ? i = t : $("CartTableAsyncSection").length > 0 ? i = $("#name").val() : $("CheckoutCouponGiftCertAsyncSection").length > 0 && (i = $("#CoupongGiftCertCode").val(), n = "checkout-page"), window.dataLayer.push({ event: "coupon-applied", coupon: i, page_section: "location " + n })
}

function trackCouponRemoved(n, t) { window.dataLayer.push({ event: "coupon-removed", coupon: t, page_section: "location " + n }) }

// function trackSliders(n, t) { dataLayer.push({ event: n, slider_name: t }) }

// function trackSearchFilters(n, t, i) { dataLayer.push({ event: "search_refine", search_criteria: n, selected_search_criteria: t, search_term: i }) }

// function trackProductSliderInView(n, t, i) {
//     if (i = i || 999999, t = t || 0, i === 999999) {
//         var r = $(n).find(".slider-wrapper"),
//             u = r.find(".content-container").first();
//         r.length > 0 && u.length > 0 && (i = Math.floor(r.outerWidth() / u.outerWidth()) - 1, i < 1 && (i = 1))
//     }
//     pushGaEventsToLayer($(n), "view_item_list", t, i)
// }

function trackViewPromotion(n) { dataLayer && (dataLayer.push({ ecommerce: null }), dataLayer.push({ frgxEvent: "view_promotion", ecommerce: { items: [{ promotion_id: "FX15", promotion_name: "15 % off", location_id: n }] } })) }

function joinCouponListSignUpAfterSubmit(n, t) { t === "success" ? dataLayer.push({ event: "join_coupon_list_sign_up", page_section: "" }) : dataLayer.push({ event: "join_coupon_list_fail", page_section: "" }) }

function joinCouponListSignUpSubmitSuccessHandler() { dataLayer.push({ event: "join_coupon_list_sign_up", page_section: "footer" }) }

function joinCouponListSignUpSubmitErrorHandler() { dataLayer.push({ event: "join_coupon_list_fail", page_section: "footer", error_message: $(".msg.input-error").text().trim() }) }

function gaCartPageRecommendedAddToCart(n) { pushGaEventsToLayer(n, "add_to_cart") }

function gaRemoveFromCart(n) { pushGaEventsToLayer($(n.currentTarget).parents(".cart-product"), "remove_from_cart") }

function initProductListSliderGa(n) {
    try {
        function t(n) { return n.parents(".slider-wrapper").parent().parent().parent().find(".title").text() }
        n.parent().on("click", ".content-container a", function(n) {
            var i = getGaItemModel($(n.currentTarget).parents(".content-container"));
            i.length === 1 && (dataLayer.push({ event: "product_list_clicks", page_section: t($(n.currentTarget)), product_name: i[0].item_name }), dataLayer.push({ event: "select_item", ecommerce: { items: i } }))
        })
    } catch (i) { console.error("product list slider ga init error", i) }
}
var FORMALIZE, foolproof, supportWebp, trackSliderObserver, initOosEmailTrigger, initCouponControl;
! function(n, t) { "use strict"; "object" == typeof module && "object" == typeof module.exports ? module.exports = n.document ? t(n, !0) : function(n) { if (!n.document) throw new Error("jQuery requires a window with a document"); return t(n) } : t(n) }("undefined" != typeof window ? window : this, function(n, t) {
    "use strict";

    function ie(n, t, i) {
        var r, e, u = (i = i || f).createElement("script");
        if (u.text = n, t)
            for (r in se)(e = t[r] || t.getAttribute && t.getAttribute(r)) && u.setAttribute(r, e);
        i.head.appendChild(u).parentNode.removeChild(u)
    }

    function ct(n) { return null == n ? n + "" : "object" == typeof n || "function" == typeof n ? ii[bf.call(n)] || "object" : typeof n }

    function wi(n) {
        var t = !!n && "length" in n && n.length,
            i = ct(n);
        return !u(n) && !vt(n) && ("array" === i || 0 === t || "number" == typeof t && 0 < t && t - 1 in n)
    }

    function c(n, t) { return n.nodeName && n.nodeName.toLowerCase() === t.toLowerCase() }

    function tr(n, t, r) { return u(t) ? i.grep(n, function(n, i) { return !!t.call(n, i, n) !== r }) : t.nodeType ? i.grep(n, function(n) { return n === t !== r }) : "string" != typeof t ? i.grep(n, function(n) { return -1 < ui.call(t, n) !== r }) : i.filter(t, n, r) }

    function bu(n, t) { while ((n = n[t]) && 1 !== n.nodeType); return n }

    function ht(n) { return n }

    function ai(n) { throw n; }

    function ku(n, t, i, r) { var f; try { n && u(f = n.promise) ? f.call(n).done(t).fail(i) : n && u(f = n.then) ? f.call(n, t, i) : t.apply(void 0, [n].slice(r)) } catch (n) { i.apply(void 0, [n]) } }

    function ci() { f.removeEventListener("DOMContentLoaded", ci), n.removeEventListener("load", ci), i.ready() }

    function oo(n, t) { return t.toUpperCase() }

    function y(n) { return n.replace(so, "ms-").replace(ve, oo) }

    function kt() { this.expando = i.expando + kt.uid++ }

    function rf(n, t, i) {
        var u, r;
        if (void 0 === i && 1 === n.nodeType)
            if (u = "data-" + t.replace(fo, "-$&").toLowerCase(), "string" == typeof(i = n.getAttribute(u))) {
                try { i = "true" === (r = i) || "false" !== r && ("null" === r ? null : r === +r + "" ? +r : eo.test(r) ? JSON.parse(r) : r) } catch (n) {}
                s.set(n, t, i)
            } else i = void 0;
        return i
    }

    function ef(n, t, r, u) {
        var s, h, c = 20,
            l = u ? function() { return u.cur() } : function() { return i.css(n, t, "") },
            o = l(),
            e = r && r[3] || (i.cssNumber[t] ? "" : "px"),
            f = n.nodeType && (i.cssNumber[t] || "px" !== e && +o) && dt.exec(i.css(n, t));
        if (f && f[3] !== e) {
            for (o /= 2, e = e || f[3], f = +o || 1; c--;) i.style(n, t, f + e), (1 - h) * (1 - (h = l() / o || .5)) <= 0 && (c = 0), f /= h;
            f *= 2, i.style(n, t, f + e), r = r || []
        }
        return r && (f = +f || +o || 0, s = r[1] ? f + (r[1] + 1) * r[2] : +r[2], u && (u.unit = e, u.start = f, u.end = s)), s
    }

    function st(n, t) { for (var h, f, a, s, c, l, e, o = [], u = 0, v = n.length; u < v; u++)(f = n[u]).style && (h = f.style.display, t ? ("none" === h && (o[u] = r.get(f, "display") || null, o[u] || (f.style.display = "")), "" === f.style.display && ni(f) && (o[u] = (e = c = s = void 0, c = (a = f).ownerDocument, l = a.nodeName, (e = er[l]) || (s = c.body.appendChild(c.createElement(l)), e = i.css(s, "display"), s.parentNode.removeChild(s), "none" === e && (e = "block"), er[l] = e)))) : "none" !== h && (o[u] = "none", r.set(f, "display", h))); for (u = 0; u < v; u++) null != o[u] && (n[u].style.display = o[u]); return n }

    function o(n, t) { var r; return r = "undefined" != typeof n.getElementsByTagName ? n.getElementsByTagName(t || "*") : "undefined" != typeof n.querySelectorAll ? n.querySelectorAll(t || "*") : [], void 0 === t || t && c(n, t) ? i.merge([n], r) : r }

    function gi(n, t) { for (var i = 0, u = n.length; i < u; i++) r.set(n[i], "globalEval", !t || r.get(t[i], "globalEval")) }

    function af(n, t, r, u, f) {
        for (var e, s, p, a, w, v, c = t.createDocumentFragment(), y = [], l = 0, b = n.length; l < b; l++)
            if ((e = n[l]) || 0 === e)
                if ("object" === ct(e)) i.merge(y, e.nodeType ? [e] : e);
                else if (hf.test(e)) {
            for (s = s || c.appendChild(t.createElement("div")), p = (of.exec(e) || ["", ""])[1].toLowerCase(), a = h[p] || h._default, s.innerHTML = a[1] + i.htmlPrefilter(e) + a[2], v = a[0]; v--;) s = s.lastChild;
            i.merge(y, s.childNodes), (s = c.firstChild).textContent = ""
        } else y.push(t.createTextNode(e));
        for (c.textContent = "", l = 0; e = y[l++];)
            if (u && -1 < i.inArray(e, u)) f && f.push(e);
            else if (w = ft(e), s = o(c.appendChild(e), "script"), w && gi(s), r)
            for (v = 0; e = s[v++];) sf.test(e.type || "") && r.push(e);
        return c
    }

    function at() { return !0 }

    function lt() { return !1 }

    function ao(n, t) { return n === function() { try { return f.activeElement } catch (n) {} }() == ("focus" === t) }

    function sr(n, t, r, u, f, e) {
        var o, s;
        if ("object" == typeof t) { for (s in "string" != typeof r && (u = u || r, r = void 0), t) sr(n, s, r, u, t[s], e); return n }
        if (null == u && null == f ? (f = r, u = r = void 0) : null == f && ("string" == typeof r ? (f = u, u = void 0) : (f = u, u = r, r = void 0)), !1 === f) f = lt;
        else if (!f) return n;
        return 1 === e && (o = f, (f = function(n) { return i().off(n), o.apply(this, arguments) }).guid = o.guid || (o.guid = i.guid++)), n.each(function() { i.event.add(this, t, f, u, r) })
    }

    function hi(n, t, u) {
        u ? (r.set(n, t, !1), i.event.add(n, t, {
            namespace: !1,
            handler: function(n) {
                var o, e, f = r.get(this, t);
                if (1 & n.isTrigger && this[t]) {
                    if (f.length)(i.event.special[t] || {}).delegateType && n.stopPropagation();
                    else if (f = d.call(arguments), r.set(this, t, f), o = u(this, t), this[t](), f !== (e = r.get(this, t)) || o ? r.set(this, t, !1) : e = {}, f !== e) return n.stopImmediatePropagation(), n.preventDefault(), e.value
                } else f.length && (r.set(this, t, { value: i.event.trigger(i.extend(f[0], i.Event.prototype), f.slice(1), this) }), n.stopImmediatePropagation())
            }
        })) : void 0 === r.get(n, t) && i.event.add(n, t, at)
    }

    function te(n, t) { return c(n, "table") && c(11 !== t.nodeType ? t : t.firstChild, "tr") && i(n).children("tbody")[0] || n }

    function de(n) { return n.type = (null !== n.getAttribute("type")) + "/" + n.type, n }

    function ke(n) { return "true/" === (n.type || "").slice(0, 5) ? n.type = n.type.slice(5) : n.removeAttribute("type"), n }

    function gf(n, t) {
        var u, o, f, h, c, e;
        if (1 === t.nodeType) {
            if (r.hasData(n) && (e = r.get(n).events))
                for (f in r.remove(t, "handle events"), e)
                    for (u = 0, o = e[f].length; u < o; u++) i.event.add(t, f, e[f][u]);
            s.hasData(n) && (h = s.access(n), c = i.extend({}, h), s.set(t, c))
        }
    }

    function et(n, t, f, s) {
        t = wf(t);
        var a, b, l, v, h, y, c = 0,
            p = n.length,
            d = p - 1,
            w = t[0],
            k = u(w);
        if (k || 1 < p && "string" == typeof w && !e.checkClone && no.test(w)) return n.each(function(i) {
            var r = n.eq(i);
            k && (t[0] = w.call(this, i, r.html())), et(r, t, f, s)
        });
        if (p && (b = (a = af(t, n[0].ownerDocument, !1, n, s)).firstChild, 1 === a.childNodes.length && (a = b), b || s)) {
            for (v = (l = i.map(o(a, "script"), de)).length; c < p; c++) h = a, c !== d && (h = i.clone(h, !0, !0), v && i.merge(l, o(h, "script"))), f.call(n[c], h, c);
            if (v)
                for (y = l[l.length - 1].ownerDocument, i.map(l, ke), c = 0; c < v; c++) h = l[c], sf.test(h.type || "") && !r.access(h, "globalEval") && i.contains(y, h) && (h.src && "module" !== (h.type || "").toLowerCase() ? i._evalUrl && !h.noModule && i._evalUrl(h.src, { nonce: h.nonce || h.getAttribute("nonce") }, y) : ie(h.textContent.replace(ge, ""), h, y))
        }
        return n
    }

    function df(n, t, r) { for (var u, e = t ? i.filter(t, n) : n, f = 0; null != (u = e[f]); f++) r || 1 !== u.nodeType || i.cleanData(o(u)), u.parentNode && (r && ft(u) && gi(o(u, "script")), u.parentNode.removeChild(u)); return n }

    function gt(n, t, r) { var o, s, h, f, u = n.style; return (r = r || vi(n)) && ("" !== (f = r.getPropertyValue(t) || r[t]) || ft(n) || (f = i.style(n, t)), !e.pixelBoxStyles() && rr.test(f) && be.test(t) && (o = u.width, s = u.minWidth, h = u.maxWidth, u.minWidth = u.maxWidth = u.width = f, f = r.width, u.width = o, u.minWidth = s, u.maxWidth = h)), void 0 !== f ? f + "" : f }

    function pf(n, t) {
        return {
            get: function() {
                if (!n()) return (this.get = t).apply(this, arguments);
                delete this.get
            }
        }
    }

    function ar(n) {
        var t = i.cssProps[n] || yu[n];
        return t || (n in gu ? n : yu[n] = function(n) {
            for (var i = n[0].toUpperCase() + n.slice(1), t = wu.length; t--;)
                if ((n = wu[t] + i) in gu) return n
        }(n) || n)
    }

    function vr(n, t, i) { var r = dt.exec(t); return r ? Math.max(0, r[2] - (i || 0)) + (r[3] || "px") : t }

    function fr(n, t, r, u, f, e) {
        var o = "width" === t ? 1 : 0,
            h = 0,
            s = 0;
        if (r === (u ? "border" : "content")) return 0;
        for (; o < 4; o += 2) "margin" === r && (s += i.css(n, r + w[o], !0, f)), u ? ("content" === r && (s -= i.css(n, "padding" + w[o], !0, f)), "margin" !== r && (s -= i.css(n, "border" + w[o] + "Width", !0, f))) : (s += i.css(n, "padding" + w[o], !0, f), "padding" !== r ? s += i.css(n, "border" + w[o] + "Width", !0, f) : h += i.css(n, "border" + w[o] + "Width", !0, f));
        return !u && 0 <= e && (s += Math.max(0, Math.ceil(n["offset" + t[0].toUpperCase() + t.slice(1)] - e - s - h - .5)) || 0), s
    }

    function br(n, t, r) {
        var f = vi(n),
            o = (!e.boxSizingReliable() || r) && "border-box" === i.css(n, "boxSizing", !1, f),
            s = o,
            u = gt(n, t, f),
            h = "offset" + t[0].toUpperCase() + t.slice(1);
        if (rr.test(u)) {
            if (!r) return u;
            u = "auto"
        }
        return (!e.boxSizingReliable() && o || !e.reliableTrDimensions() && c(n, "tr") || "auto" === u || !parseFloat(u) && "inline" === i.css(n, "display", !1, f)) && n.getClientRects().length && (o = "border-box" === i.css(n, "boxSizing", !1, f), (s = h in n) && (u = n[h])), (u = parseFloat(u) || 0) + fr(n, t, r || (o ? "border" : "content"), s, f, u) + "px"
    }

    function a(n, t, i, r, u) { return new a.prototype.init(n, t, i, r, u) }

    function bi() { fi && (!1 === f.hidden && n.requestAnimationFrame ? n.requestAnimationFrame(bi) : n.setTimeout(bi, i.fx.interval), i.fx.tick()) }

    function gr() { return n.setTimeout(function() { ot = void 0 }), ot = Date.now() }

    function oi(n, t) {
        var u, r = 0,
            i = { height: n };
        for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (u = w[r])] = i["padding" + u] = n;
        return t && (i.opacity = i.width = n), i
    }

    function nu(n, t, i) {
        for (var u, f = (l.tweeners[t] || []).concat(l.tweeners["*"]), r = 0, e = f.length; r < e; r++)
            if (u = f[r].call(i, t, n)) return u
    }

    function l(n, t, r) {
        var o, s, h = 0,
            v = l.prefilters.length,
            e = i.Deferred().always(function() { delete a.elem }),
            a = function() { if (s) return !1; for (var o = ot || gr(), t = Math.max(0, f.startTime + f.duration - o), i = 1 - (t / f.duration || 0), r = 0, u = f.tweens.length; r < u; r++) f.tweens[r].run(i); return e.notifyWith(n, [f, i, t]), i < 1 && u ? t : (u || e.notifyWith(n, [f, 1, 0]), e.resolveWith(n, [f]), !1) },
            f = e.promise({
                elem: n,
                props: i.extend({}, t),
                opts: i.extend(!0, { specialEasing: {}, easing: i.easing._default }, r),
                originalProperties: t,
                originalOptions: r,
                startTime: ot || gr(),
                duration: r.duration,
                tweens: [],
                createTween: function(t, r) { var u = i.Tween(n, f.opts, t, r, f.opts.specialEasing[t] || f.opts.easing); return f.tweens.push(u), u },
                stop: function(t) {
                    var i = 0,
                        r = t ? f.tweens.length : 0;
                    if (s) return this;
                    for (s = !0; i < r; i++) f.tweens[i].run(1);
                    return t ? (e.notifyWith(n, [f, 1, 0]), e.resolveWith(n, [f, t])) : e.rejectWith(n, [f, t]), this
                }
            }),
            c = f.props;
        for (! function(n, t) {
                var r, f, e, u, o;
                for (r in n)
                    if (e = t[f = y(r)], u = n[r], Array.isArray(u) && (e = u[1], u = n[r] = u[0]), r !== f && (n[f] = u, delete n[r]), (o = i.cssHooks[f]) && "expand" in o)
                        for (r in u = o.expand(u), delete n[f], u) r in n || (n[r] = u[r], t[r] = e);
                    else t[f] = e
            }(c, f.opts.specialEasing); h < v; h++)
            if (o = l.prefilters[h].call(f, n, c, f.opts)) return u(o.stop) && (i._queueHooks(f.elem, f.opts.queue).stop = o.stop.bind(o)), o;
        return i.map(c, nu, f), u(f.opts.start) && f.opts.start.call(n, f), f.progress(f.opts.progress).done(f.opts.done, f.opts.complete).fail(f.opts.fail).always(f.opts.always), i.fx.timer(i.extend(a, { elem: n, anim: f, queue: f.opts.queue })), f
    }

    function g(n) { return (n.match(v) || []).join(" ") }

    function tt(n) { return n.getAttribute && n.getAttribute("class") || "" }

    function yi(n) { return Array.isArray(n) ? n : "string" == typeof n && n.match(v) || [] }

    function ur(n, t, r, u) {
        var f;
        if (Array.isArray(t)) i.each(t, function(t, i) { r || ho.test(n) ? u(n, i) : ur(n + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, r, u) });
        else if (r || "object" !== ct(t)) u(n, t);
        else
            for (f in t) ur(n + "[" + f + "]", t[f], r, u)
    }

    function hu(n) {
        return function(t, i) {
            "string" != typeof t && (i = t, t = "*");
            var r, f = 0,
                e = t.toLowerCase().match(v) || [];
            if (u(i))
                while (r = e[f++]) "+" === r[0] ? (r = r.slice(1) || "*", (n[r] = n[r] || []).unshift(i)) : (n[r] = n[r] || []).push(i)
        }
    }

    function cu(n, t, r, u) {
        function e(s) { var h; return f[s] = !0, i.each(n[s] || [], function(n, i) { var s = i(t, r, u); return "string" != typeof s || o || f[s] ? o ? !(h = s) : void 0 : (t.dataTypes.unshift(s), e(s), !1) }), h }
        var f = {},
            o = n === ir;
        return e(t.dataTypes[0]) || !f["*"] && e("*")
    }

    function pi(n, t) { var r, u, f = i.ajaxSettings.flatOptions || {}; for (r in t) void 0 !== t[r] && ((f[r] ? n : u || (u = {}))[r] = t[r]); return u && i.extend(!0, n, u), n }
    var b = [],
        yf = Object.getPrototypeOf,
        d = b.slice,
        wf = b.flat ? function(n) { return b.flat.call(n) } : function(n) { return b.concat.apply([], n) },
        nr = b.push,
        ui = b.indexOf,
        ii = {},
        bf = ii.toString,
        si = ii.hasOwnProperty,
        ue = si.toString,
        ee = ue.call(Object),
        e = {},
        u = function(n) { return "function" == typeof n && "number" != typeof n.nodeType },
        vt = function(n) { return null != n && n === n.window },
        f = n.document,
        se = { type: !0, src: !0, nonce: !0, noModule: !0 },
        re = "3.5.1",
        i = function(n, t) { return new i.fn.init(n, t) },
        k, di, ff, tf, nf, fe, v, du, li, ut, ni, er, h, hf, ot, fi, yt, yr, wr, vu, tu, pt, iu, ru, dr, lr, hr, lu, rt, au, cr, ri, uu, vf, pu;
    i.fn = i.prototype = {
        jquery: re,
        constructor: i,
        length: 0,
        toArray: function() { return d.call(this) },
        get: function(n) { return null == n ? d.call(this) : n < 0 ? this[n + this.length] : this[n] },
        pushStack: function(n) { var t = i.merge(this.constructor(), n); return t.prevObject = this, t },
        each: function(n) { return i.each(this, n) },
        map: function(n) { return this.pushStack(i.map(this, function(t, i) { return n.call(t, i, t) })) },
        slice: function() { return this.pushStack(d.apply(this, arguments)) },
        first: function() { return this.eq(0) },
        last: function() { return this.eq(-1) },
        even: function() { return this.pushStack(i.grep(this, function(n, t) { return (t + 1) % 2 })) },
        odd: function() { return this.pushStack(i.grep(this, function(n, t) { return t % 2 })) },
        eq: function(n) {
            var i = this.length,
                t = +n + (n < 0 ? i : 0);
            return this.pushStack(0 <= t && t < i ? [this[t]] : [])
        },
        end: function() { return this.prevObject || this.constructor() },
        push: nr,
        sort: b.sort,
        splice: b.splice
    }, i.extend = i.fn.extend = function() {
        var s, f, e, t, o, c, n = arguments[0] || {},
            r = 1,
            l = arguments.length,
            h = !1;
        for ("boolean" == typeof n && (h = n, n = arguments[r] || {}, r++), "object" == typeof n || u(n) || (n = {}), r === l && (n = this, r--); r < l; r++)
            if (null != (s = arguments[r]))
                for (f in s) t = s[f], "__proto__" !== f && n !== t && (h && t && (i.isPlainObject(t) || (o = Array.isArray(t))) ? (e = n[f], c = o && !Array.isArray(e) ? [] : o || i.isPlainObject(e) ? e : {}, o = !1, n[f] = i.extend(h, c, t)) : void 0 !== t && (n[f] = t));
        return n
    }, i.extend({
        expando: "jQuery" + (re + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(n) { throw new Error(n); },
        noop: function() {},
        isPlainObject: function(n) { var t, i; return !(!n || "[object Object]" !== bf.call(n)) && (!(t = yf(n)) || "function" == typeof(i = si.call(t, "constructor") && t.constructor) && ue.call(i) === ee) },
        isEmptyObject: function(n) { var t; for (t in n) return !1; return !0 },
        globalEval: function(n, t, i) { ie(n, { nonce: t && t.nonce }, i) },
        each: function(n, t) {
            var r, i = 0;
            if (wi(n)) {
                for (r = n.length; i < r; i++)
                    if (!1 === t.call(n[i], i, n[i])) break
            } else
                for (i in n)
                    if (!1 === t.call(n[i], i, n[i])) break; return n
        },
        makeArray: function(n, t) { var r = t || []; return null != n && (wi(Object(n)) ? i.merge(r, "string" == typeof n ? [n] : n) : nr.call(r, n)), r },
        inArray: function(n, t, i) { return null == t ? -1 : ui.call(t, n, i) },
        merge: function(n, t) { for (var u = +t.length, i = 0, r = n.length; i < u; i++) n[r++] = t[i]; return n.length = r, n },
        grep: function(n, t, i) { for (var u = [], r = 0, f = n.length, e = !i; r < f; r++) !t(n[r], r) !== e && u.push(n[r]); return u },
        map: function(n, t, i) {
            var e, u, r = 0,
                f = [];
            if (wi(n))
                for (e = n.length; r < e; r++) null != (u = t(n[r], r, i)) && f.push(u);
            else
                for (r in n) null != (u = t(n[r], r, i)) && f.push(u);
            return wf(f)
        },
        guid: 1,
        support: e
    }), "function" == typeof Symbol && (i.fn[Symbol.iterator] = b[Symbol.iterator]), i.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(n, t) { ii["[object " + t + "]"] = t.toLowerCase() }), k = function(n) {
        function u(n, t, i, u) {
            var s, y, c, l, p, w, d, v = t && t.ownerDocument,
                a = t ? t.nodeType : 9;
            if (i = i || [], "string" != typeof n || !n || 1 !== a && 9 !== a && 11 !== a) return i;
            if (!u && (b(t), t = t || r, h)) {
                if (11 !== a && (p = cr.exec(n)))
                    if (s = p[1]) { if (9 === a) { if (!(c = t.getElementById(s))) return i; if (c.id === s) return i.push(c), i } else if (v && (c = v.getElementById(s)) && ft(t, c) && c.id === s) return i.push(c), i } else { if (p[2]) return k.apply(i, t.getElementsByTagName(n)), i; if ((s = p[3]) && f.getElementsByClassName && t.getElementsByClassName) return k.apply(i, t.getElementsByClassName(s)), i }
                if (f.qsa && !ct[n + " "] && (!o || !o.test(n)) && (1 !== a || "object" !== t.nodeName.toLowerCase())) {
                    if (d = n, v = t, 1 === a && (tr.test(n) || oi.test(n))) {
                        for ((v = ni.test(n) && dt(t.parentNode) || t) === t && f.scope || ((l = t.getAttribute("id")) ? l = l.replace(ki, gi) : t.setAttribute("id", l = e)), y = (w = ot(n)).length; y--;) w[y] = (l ? "#" + l : ":scope") + " " + lt(w[y]);
                        d = w.join(",")
                    }
                    try { return k.apply(i, v.querySelectorAll(d)), i } catch (t) { ct(n, !0) } finally { l === e && t.removeAttribute("id") }
                }
            }
            return hi(n.replace(bt, "$1"), t, i, u)
        }

        function ht() { var n = []; return function i(r, u) { return n.push(r + " ") > t.cacheLength && delete i[n.shift()], i[r + " "] = u } }

        function c(n) { return n[e] = !0, n }

        function l(n) { var t = r.createElement("fieldset"); try { return !!n(t) } catch (n) { return !1 } finally { t.parentNode && t.parentNode.removeChild(t), t = null } }

        function kt(n, i) { for (var r = n.split("|"), u = r.length; u--;) t.attrHandle[r[u]] = i }

        function yi(n, t) {
            var i = t && n,
                r = i && 1 === n.nodeType && 1 === t.nodeType && n.sourceIndex - t.sourceIndex;
            if (r) return r;
            if (i)
                while (i = i.nextSibling)
                    if (i === t) return -1;
            return n ? 1 : -1
        }

        function hr(n) { return function(t) { return "input" === t.nodeName.toLowerCase() && t.type === n } }

        function sr(n) { return function(t) { var i = t.nodeName.toLowerCase(); return ("input" === i || "button" === i) && t.type === n } }

        function vi(n) { return function(t) { return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === n : t.disabled === n : t.isDisabled === n || t.isDisabled !== !n && nr(t) === n : t.disabled === n : "label" in t && t.disabled === n } }

        function g(n) { return c(function(t) { return t = +t, c(function(i, r) { for (var u, f = n([], i.length, t), e = f.length; e--;) i[u = f[e]] && (i[u] = !(r[u] = i[u])) }) }) }

        function dt(n) { return n && "undefined" != typeof n.getElementsByTagName && n }

        function ci() {}

        function lt(n) { for (var t = 0, r = n.length, i = ""; t < r; t++) i += n[t].value; return i }

        function yt(n, t, i) {
            var r = t.dir,
                u = t.next,
                f = u || r,
                o = i && "parentNode" === f,
                s = ur++;
            return t.first ? function(t, i, u) {
                while (t = t[r])
                    if (1 === t.nodeType || o) return n(t, i, u);
                return !1
            } : function(t, i, h) {
                var c, l, a, v = [y, s];
                if (h) {
                    while (t = t[r])
                        if ((1 === t.nodeType || o) && n(t, i, h)) return !0
                } else
                    while (t = t[r])
                        if (1 === t.nodeType || o)
                            if (l = (a = t[e] || (t[e] = {}))[t.uniqueID] || (a[t.uniqueID] = {}), u && u === t.nodeName.toLowerCase()) t = t[r] || t;
                            else { if ((c = l[f]) && c[0] === y && c[1] === s) return v[2] = c[2]; if ((l[f] = v)[2] = n(t, i, h)) return !0 } return !1
            }
        }

        function gt(n) {
            return 1 < n.length ? function(t, i, r) {
                for (var u = n.length; u--;)
                    if (!n[u](t, i, r)) return !1;
                return !0
            } : n[0]
        }

        function wt(n, t, i, r, u) { for (var e, o = [], f = 0, s = n.length, h = null != t; f < s; f++)(e = n[f]) && (i && !i(e, r, u) || (o.push(e), h && t.push(f))); return o }

        function ui(n, t, i, r, f, o) {
            return r && !r[e] && (r = ui(r)), f && !f[e] && (f = ui(f, o)), c(function(e, o, s, h) {
                var a, l, v, w = [],
                    p = [],
                    b = o.length,
                    g = e || function(n, t, i) { for (var r = 0, f = t.length; r < f; r++) u(n, t[r], i); return i }(t || "*", s.nodeType ? [s] : s, []),
                    y = !n || !e && t ? g : wt(g, w, n, s, h),
                    c = i ? f || (e ? n : b || r) ? [] : o : y;
                if (i && i(y, c, s, h), r)
                    for (a = wt(c, p), r(a, [], s, h), l = a.length; l--;)(v = a[l]) && (c[p[l]] = !(y[p[l]] = v));
                if (e) {
                    if (f || n) {
                        if (f) {
                            for (a = [], l = c.length; l--;)(v = c[l]) && a.push(y[l] = v);
                            f(null, c = [], a, h)
                        }
                        for (l = c.length; l--;)(v = c[l]) && -1 < (a = f ? d(e, v) : w[l]) && (e[a] = !(o[a] = v))
                    }
                } else c = wt(c === o ? c.splice(b, c.length) : c), f ? f(null, o, c, h) : k.apply(o, c)
            })
        }

        function ti(n) {
            for (var o, u, r, s = n.length, h = t.relative[n[0].type], c = h || t.relative[" "], i = h ? 1 : 0, l = yt(function(n) { return n === o }, c, !0), a = yt(function(n) { return -1 < d(o, n) }, c, !0), f = [function(n, t, i) { var r = !h && (i || t !== pt) || ((o = t).nodeType ? l(n, t, i) : a(n, t, i)); return o = null, r }]; i < s; i++)
                if (u = t.relative[n[i].type]) f = [yt(gt(f), u)];
                else {
                    if ((u = t.filter[n[i].type].apply(null, n[i].matches))[e]) {
                        for (r = ++i; r < s; r++)
                            if (t.relative[n[r].type]) break;
                        return ui(1 < i && gt(f), 1 < i && lt(n.slice(0, i - 1).concat({ value: " " === n[i - 2].type ? "*" : "" })).replace(bt, "$1"), u, i < r && ti(n.slice(i, r)), r < s && ti(n = n.slice(r)), r < s && lt(n))
                    }
                    f.push(u)
                }
            return gt(f)
        }
        var rt, f, t, st, si, ot, ii, hi, pt, w, ut, b, r, s, h, o, tt, vt, ft, e = "sizzle" + 1 * new Date,
            a = n.document,
            y = 0,
            ur = 0,
            li = ht(),
            ai = ht(),
            pi = ht(),
            ct = ht(),
            ei = function(n, t) { return n === t && (ut = !0), 0 },
            lr = {}.hasOwnProperty,
            nt = [],
            ar = nt.pop,
            pr = nt.push,
            k = nt.push,
            di = nt.slice,
            d = function(n, t) {
                for (var i = 0, r = n.length; i < r; i++)
                    if (n[i] === t) return i;
                return -1
            },
            fi = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            i = "[\\x20\\t\\r\\n\\f]",
            it = "(?:\\\\[\\da-fA-F]{1,6}" + i + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\x00-\\x7f])+",
            bi = "\\[" + i + "*(" + it + ")(?:" + i + "*([*^$|!~]?=)" + i + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + it + "))|)" + i + "*\\]",
            ri = ":(" + it + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + bi + ")*)|.*)\\)|)",
            fr = new RegExp(i + "+", "g"),
            bt = new RegExp("^" + i + "+|((?:^|[^\\\\])(?:\\\\.)*)" + i + "+$", "g"),
            vr = new RegExp("^" + i + "*," + i + "*"),
            oi = new RegExp("^" + i + "*([>+~]|" + i + ")" + i + "*"),
            tr = new RegExp(i + "|>"),
            ir = new RegExp(ri),
            rr = new RegExp("^" + it + "$"),
            at = { ID: new RegExp("^#(" + it + ")"), CLASS: new RegExp("^\\.(" + it + ")"), TAG: new RegExp("^(" + it + "|[*])"), ATTR: new RegExp("^" + bi), PSEUDO: new RegExp("^" + ri), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + i + "*(even|odd|(([+-]|)(\\d*)n|)" + i + "*(?:([+-]|)" + i + "*(\\d+)|))" + i + "*\\)|)", "i"), bool: new RegExp("^(?:" + fi + ")$", "i"), needsContext: new RegExp("^" + i + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + i + "*((?:-\\d)?\\d*)" + i + "*\\)|)(?=[^-]|$)", "i") },
            er = /HTML$/i,
            yr = /^(?:input|select|textarea|button)$/i,
            or = /^h\d$/i,
            et = /^[^{]+\{\s*\[native \w/,
            cr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            ni = /[+~]/,
            p = new RegExp("\\\\[\\da-fA-F]{1,6}" + i + "?|\\\\([^\\r\\n\\f])", "g"),
            v = function(n, t) { var i = "0x" + n.slice(1) - 65536; return t || (i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)) },
            ki = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            gi = function(n, t) { return t ? "\x00" === n ? "�" : n.slice(0, -1) + "\\" + n.charCodeAt(n.length - 1).toString(16) + " " : "\\" + n },
            wi = function() { b() },
            nr = yt(function(n) { return !0 === n.disabled && "fieldset" === n.nodeName.toLowerCase() }, { dir: "parentNode", next: "legend" });
        try { k.apply(nt = di.call(a.childNodes), a.childNodes), nt[a.childNodes.length].nodeType } catch (rt) {
            k = {
                apply: nt.length ? function(n, t) { pr.apply(n, di.call(t)) } : function(n, t) {
                    for (var i = n.length, r = 0; n[i++] = t[r++];);
                    n.length = i - 1
                }
            }
        }
        for (rt in f = u.support = {}, si = u.isXML = function(n) {
                var i = n.namespaceURI,
                    t = (n.ownerDocument || n).documentElement;
                return !er.test(i || t && t.nodeName || "HTML")
            }, b = u.setDocument = function(n) {
                var y, u, c = n ? n.ownerDocument || n : a;
                return c != r && 9 === c.nodeType && c.documentElement && (s = (r = c).documentElement, h = !si(r), a != r && (u = r.defaultView) && u.top !== u && (u.addEventListener ? u.addEventListener("unload", wi, !1) : u.attachEvent && u.attachEvent("onunload", wi)), f.scope = l(function(n) { return s.appendChild(n).appendChild(r.createElement("div")), "undefined" != typeof n.querySelectorAll && !n.querySelectorAll(":scope fieldset div").length }), f.attributes = l(function(n) { return n.className = "i", !n.getAttribute("className") }), f.getElementsByTagName = l(function(n) { return n.appendChild(r.createComment("")), !n.getElementsByTagName("*").length }), f.getElementsByClassName = et.test(r.getElementsByClassName), f.getById = l(function(n) { return s.appendChild(n).id = e, !r.getElementsByName || !r.getElementsByName(e).length }), f.getById ? (t.filter.ID = function(n) { var t = n.replace(p, v); return function(n) { return n.getAttribute("id") === t } }, t.find.ID = function(n, t) { if ("undefined" != typeof t.getElementById && h) { var i = t.getElementById(n); return i ? [i] : [] } }) : (t.filter.ID = function(n) { var t = n.replace(p, v); return function(n) { var i = "undefined" != typeof n.getAttributeNode && n.getAttributeNode("id"); return i && i.value === t } }, t.find.ID = function(n, t) {
                    if ("undefined" != typeof t.getElementById && h) {
                        var r, u, f, i = t.getElementById(n);
                        if (i) {
                            if ((r = i.getAttributeNode("id")) && r.value === n) return [i];
                            for (f = t.getElementsByName(n), u = 0; i = f[u++];)
                                if ((r = i.getAttributeNode("id")) && r.value === n) return [i]
                        }
                        return []
                    }
                }), t.find.TAG = f.getElementsByTagName ? function(n, t) { return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(n) : f.qsa ? t.querySelectorAll(n) : void 0 } : function(n, t) {
                    var i, r = [],
                        f = 0,
                        u = t.getElementsByTagName(n);
                    if ("*" === n) { while (i = u[f++]) 1 === i.nodeType && r.push(i); return r }
                    return u
                }, t.find.CLASS = f.getElementsByClassName && function(n, t) { if ("undefined" != typeof t.getElementsByClassName && h) return t.getElementsByClassName(n) }, tt = [], o = [], (f.qsa = et.test(r.querySelectorAll)) && (l(function(n) {
                    var t;
                    s.appendChild(n).innerHTML = "<a id='" + e + "'></a><select id='" + e + "-\r\\' msallowcapture=''><option selected=''></option></select>", n.querySelectorAll("[msallowcapture^='']").length && o.push("[*^$]=" + i + "*(?:''|\"\")"), n.querySelectorAll("[selected]").length || o.push("\\[" + i + "*(?:value|" + fi + ")"), n.querySelectorAll("[id~=" + e + "-]").length || o.push("~="), (t = r.createElement("input")).setAttribute("name", ""), n.appendChild(t), n.querySelectorAll("[name='']").length || o.push("\\[" + i + "*name" + i + "*=" + i + "*(?:''|\"\")"), n.querySelectorAll(":checked").length || o.push(":checked"), n.querySelectorAll("a#" + e + "+*").length || o.push(".#.+[+~]"), n.querySelectorAll("\\\f"), o.push("[\\r\\n\\f]")
                }), l(function(n) {
                    n.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                    var t = r.createElement("input");
                    t.setAttribute("type", "hidden"), n.appendChild(t).setAttribute("name", "D"), n.querySelectorAll("[name=d]").length && o.push("name" + i + "*[*^$|!~]?="), 2 !== n.querySelectorAll(":enabled").length && o.push(":enabled", ":disabled"), s.appendChild(n).disabled = !0, 2 !== n.querySelectorAll(":disabled").length && o.push(":enabled", ":disabled"), n.querySelectorAll("*,:x"), o.push(",.*:")
                })), (f.matchesSelector = et.test(vt = s.matches || s.webkitMatchesSelector || s.mozMatchesSelector || s.oMatchesSelector || s.msMatchesSelector)) && l(function(n) { f.disconnectedMatch = vt.call(n, "*"), vt.call(n, "[s!='']:x"), tt.push("!=", ri) }), o = o.length && new RegExp(o.join("|")), tt = tt.length && new RegExp(tt.join("|")), y = et.test(s.compareDocumentPosition), ft = y || et.test(s.contains) ? function(n, t) {
                    var r = 9 === n.nodeType ? n.documentElement : n,
                        i = t && t.parentNode;
                    return n === i || !(!i || 1 !== i.nodeType || !(r.contains ? r.contains(i) : n.compareDocumentPosition && 16 & n.compareDocumentPosition(i)))
                } : function(n, t) {
                    if (t)
                        while (t = t.parentNode)
                            if (t === n) return !0;
                    return !1
                }, ei = y ? function(n, t) { if (n === t) return ut = !0, 0; var i = !n.compareDocumentPosition - !t.compareDocumentPosition; return i || (1 & (i = (n.ownerDocument || n) == (t.ownerDocument || t) ? n.compareDocumentPosition(t) : 1) || !f.sortDetached && t.compareDocumentPosition(n) === i ? n == r || n.ownerDocument == a && ft(a, n) ? -1 : t == r || t.ownerDocument == a && ft(a, t) ? 1 : w ? d(w, n) - d(w, t) : 0 : 4 & i ? -1 : 1) } : function(n, t) {
                    if (n === t) return ut = !0, 0;
                    var i, u = 0,
                        o = n.parentNode,
                        s = t.parentNode,
                        f = [n],
                        e = [t];
                    if (!o || !s) return n == r ? -1 : t == r ? 1 : o ? -1 : s ? 1 : w ? d(w, n) - d(w, t) : 0;
                    if (o === s) return yi(n, t);
                    for (i = n; i = i.parentNode;) f.unshift(i);
                    for (i = t; i = i.parentNode;) e.unshift(i);
                    while (f[u] === e[u]) u++;
                    return u ? yi(f[u], e[u]) : f[u] == a ? -1 : e[u] == a ? 1 : 0
                }), r
            }, u.matches = function(n, t) { return u(n, null, null, t) }, u.matchesSelector = function(n, t) {
                if (b(n), f.matchesSelector && h && !ct[t + " "] && (!tt || !tt.test(t)) && (!o || !o.test(t))) try { var i = vt.call(n, t); if (i || f.disconnectedMatch || n.document && 11 !== n.document.nodeType) return i } catch (n) { ct(t, !0) }
                return 0 < u(t, r, null, [n]).length
            }, u.contains = function(n, t) { return (n.ownerDocument || n) != r && b(n), ft(n, t) }, u.attr = function(n, i) {
                (n.ownerDocument || n) != r && b(n);
                var e = t.attrHandle[i.toLowerCase()],
                    u = e && lr.call(t.attrHandle, i.toLowerCase()) ? e(n, i, !h) : void 0;
                return void 0 !== u ? u : f.attributes || !h ? n.getAttribute(i) : (u = n.getAttributeNode(i)) && u.specified ? u.value : null
            }, u.escape = function(n) { return (n + "").replace(ki, gi) }, u.error = function(n) { throw new Error("Syntax error, unrecognized expression: " + n); }, u.uniqueSort = function(n) {
                var r, u = [],
                    t = 0,
                    i = 0;
                if (ut = !f.detectDuplicates, w = !f.sortStable && n.slice(0), n.sort(ei), ut) { while (r = n[i++]) r === n[i] && (t = u.push(i)); while (t--) n.splice(u[t], 1) }
                return w = null, n
            }, st = u.getText = function(n) {
                var r, i = "",
                    u = 0,
                    t = n.nodeType;
                if (t) { if (1 === t || 9 === t || 11 === t) { if ("string" == typeof n.textContent) return n.textContent; for (n = n.firstChild; n; n = n.nextSibling) i += st(n) } else if (3 === t || 4 === t) return n.nodeValue } else
                    while (r = n[u++]) i += st(r);
                return i
            }, (t = u.selectors = {
                cacheLength: 50,
                createPseudo: c,
                match: at,
                attrHandle: {},
                find: {},
                relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } },
                preFilter: { ATTR: function(n) { return n[1] = n[1].replace(p, v), n[3] = (n[3] || n[4] || n[5] || "").replace(p, v), "~=" === n[2] && (n[3] = " " + n[3] + " "), n.slice(0, 4) }, CHILD: function(n) { return n[1] = n[1].toLowerCase(), "nth" === n[1].slice(0, 3) ? (n[3] || u.error(n[0]), n[4] = +(n[4] ? n[5] + (n[6] || 1) : 2 * ("even" === n[3] || "odd" === n[3])), n[5] = +(n[7] + n[8] || "odd" === n[3])) : n[3] && u.error(n[0]), n }, PSEUDO: function(n) { var i, t = !n[6] && n[2]; return at.CHILD.test(n[0]) ? null : (n[3] ? n[2] = n[4] || n[5] || "" : t && ir.test(t) && (i = ot(t, !0)) && (i = t.indexOf(")", t.length - i) - t.length) && (n[0] = n[0].slice(0, i), n[2] = t.slice(0, i)), n.slice(0, 3)) } },
                filter: {
                    TAG: function(n) { var t = n.replace(p, v).toLowerCase(); return "*" === n ? function() { return !0 } : function(n) { return n.nodeName && n.nodeName.toLowerCase() === t } },
                    CLASS: function(n) { var t = li[n + " "]; return t || (t = new RegExp("(^|" + i + ")" + n + "(" + i + "|$)")) && li(n, function(n) { return t.test("string" == typeof n.className && n.className || "undefined" != typeof n.getAttribute && n.getAttribute("class") || "") }) },
                    ATTR: function(n, t, i) { return function(r) { var f = u.attr(r, n); return null == f ? "!=" === t : !t || (f += "", "=" === t ? f === i : "!=" === t ? f !== i : "^=" === t ? i && 0 === f.indexOf(i) : "*=" === t ? i && -1 < f.indexOf(i) : "$=" === t ? i && f.slice(-i.length) === i : "~=" === t ? -1 < (" " + f.replace(fr, " ") + " ").indexOf(i) : "|=" === t && (f === i || f.slice(0, i.length + 1) === i + "-")) } },
                    CHILD: function(n, t, i, r, u) {
                        var s = "nth" !== n.slice(0, 3),
                            o = "last" !== n.slice(-4),
                            f = "of-type" === t;
                        return 1 === r && 0 === u ? function(n) { return !!n.parentNode } : function(t, i, h) {
                            var p, d, v, c, a, w, b = s !== o ? "nextSibling" : "previousSibling",
                                k = t.parentNode,
                                nt = f && t.nodeName.toLowerCase(),
                                g = !h && !f,
                                l = !1;
                            if (k) {
                                if (s) {
                                    while (b) {
                                        for (c = t; c = c[b];)
                                            if (f ? c.nodeName.toLowerCase() === nt : 1 === c.nodeType) return !1;
                                        w = b = "only" === n && !w && "nextSibling"
                                    }
                                    return !0
                                }
                                if (w = [o ? k.firstChild : k.lastChild], o && g) {
                                    for (l = (a = (p = (d = (v = (c = k)[e] || (c[e] = {}))[c.uniqueID] || (v[c.uniqueID] = {}))[n] || [])[0] === y && p[1]) && p[2], c = a && k.childNodes[a]; c = ++a && c && c[b] || (l = a = 0) || w.pop();)
                                        if (1 === c.nodeType && ++l && c === t) { d[n] = [y, a, l]; break }
                                } else if (g && (l = a = (p = (d = (v = (c = t)[e] || (c[e] = {}))[c.uniqueID] || (v[c.uniqueID] = {}))[n] || [])[0] === y && p[1]), !1 === l)
                                    while (c = ++a && c && c[b] || (l = a = 0) || w.pop())
                                        if ((f ? c.nodeName.toLowerCase() === nt : 1 === c.nodeType) && ++l && (g && ((d = (v = c[e] || (c[e] = {}))[c.uniqueID] || (v[c.uniqueID] = {}))[n] = [y, l]), c === t)) break;
                                return (l -= u) === r || l % r == 0 && 0 <= l / r
                            }
                        }
                    },
                    PSEUDO: function(n, i) { var f, r = t.pseudos[n] || t.setFilters[n.toLowerCase()] || u.error("unsupported pseudo: " + n); return r[e] ? r(i) : 1 < r.length ? (f = [n, n, "", i], t.setFilters.hasOwnProperty(n.toLowerCase()) ? c(function(n, t) { for (var e, u = r(n, i), f = u.length; f--;) n[e = d(n, u[f])] = !(t[e] = u[f]) }) : function(n) { return r(n, 0, f) }) : r }
                },
                pseudos: {
                    not: c(function(n) {
                        var t = [],
                            r = [],
                            i = ii(n.replace(bt, "$1"));
                        return i[e] ? c(function(n, t, r, u) { for (var e, o = i(n, null, u, []), f = n.length; f--;)(e = o[f]) && (n[f] = !(t[f] = e)) }) : function(n, u, f) { return t[0] = n, i(t, null, f, r), t[0] = null, !r.pop() }
                    }),
                    has: c(function(n) { return function(t) { return 0 < u(n, t).length } }),
                    contains: c(function(n) {
                        return n = n.replace(p, v),
                            function(t) { return -1 < (t.textContent || st(t)).indexOf(n) }
                    }),
                    lang: c(function(n) {
                        return rr.test(n || "") || u.error("unsupported lang: " + n), n = n.replace(p, v).toLowerCase(),
                            function(t) {
                                var i;
                                do
                                    if (i = h ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (i = i.toLowerCase()) === n || 0 === i.indexOf(n + "-");
                                while ((t = t.parentNode) && 1 === t.nodeType);
                                return !1
                            }
                    }),
                    target: function(t) { var i = n.location && n.location.hash; return i && i.slice(1) === t.id },
                    root: function(n) { return n === s },
                    focus: function(n) { return n === r.activeElement && (!r.hasFocus || r.hasFocus()) && !!(n.type || n.href || ~n.tabIndex) },
                    enabled: vi(!1),
                    disabled: vi(!0),
                    checked: function(n) { var t = n.nodeName.toLowerCase(); return "input" === t && !!n.checked || "option" === t && !!n.selected },
                    selected: function(n) { return n.parentNode && n.parentNode.selectedIndex, !0 === n.selected },
                    empty: function(n) {
                        for (n = n.firstChild; n; n = n.nextSibling)
                            if (n.nodeType < 6) return !1;
                        return !0
                    },
                    parent: function(n) { return !t.pseudos.empty(n) },
                    header: function(n) { return or.test(n.nodeName) },
                    input: function(n) { return yr.test(n.nodeName) },
                    button: function(n) { var t = n.nodeName.toLowerCase(); return "input" === t && "button" === n.type || "button" === t },
                    text: function(n) { var t; return "input" === n.nodeName.toLowerCase() && "text" === n.type && (null == (t = n.getAttribute("type")) || "text" === t.toLowerCase()) },
                    first: g(function() { return [0] }),
                    last: g(function(n, t) { return [t - 1] }),
                    eq: g(function(n, t, i) { return [i < 0 ? i + t : i] }),
                    even: g(function(n, t) { for (var i = 0; i < t; i += 2) n.push(i); return n }),
                    odd: g(function(n, t) { for (var i = 1; i < t; i += 2) n.push(i); return n }),
                    lt: g(function(n, t, i) { for (var r = i < 0 ? i + t : t < i ? t : i; 0 <= --r;) n.push(r); return n }),
                    gt: g(function(n, t, i) { for (var r = i < 0 ? i + t : i; ++r < t;) n.push(r); return n })
                }
            }).pseudos.nth = t.pseudos.eq, { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) t.pseudos[rt] = hr(rt);
        for (rt in { submit: !0, reset: !0 }) t.pseudos[rt] = sr(rt);
        return ci.prototype = t.filters = t.pseudos, t.setFilters = new ci, ot = u.tokenize = function(n, i) { var e, f, s, o, r, h, c, l = ai[n + " "]; if (l) return i ? 0 : l.slice(0); for (r = n, h = [], c = t.preFilter; r;) { for (o in e && !(f = vr.exec(r)) || (f && (r = r.slice(f[0].length) || r), h.push(s = [])), e = !1, (f = oi.exec(r)) && (e = f.shift(), s.push({ value: e, type: f[0].replace(bt, " ") }), r = r.slice(e.length)), t.filter) !(f = at[o].exec(r)) || c[o] && !(f = c[o](f)) || (e = f.shift(), s.push({ value: e, type: o, matches: f }), r = r.slice(e.length)); if (!e) break } return i ? r.length : r ? u.error(n) : ai(n, h).slice(0) }, ii = u.compile = function(n, i) {
            var s, l, a, o, v, p, w = [],
                d = [],
                f = pi[n + " "];
            if (!f) {
                for (i || (i = ot(n)), s = i.length; s--;)(f = ti(i[s]))[e] ? w.push(f) : d.push(f);
                (f = pi(n, (l = d, o = 0 < (a = w).length, v = 0 < l.length, p = function(n, i, f, e, s) {
                    var c, nt, d, g = 0,
                        p = "0",
                        tt = n && [],
                        w = [],
                        it = pt,
                        rt = n || v && t.find.TAG("*", s),
                        ut = y += null == it ? 1 : Math.random() || .1,
                        ft = rt.length;
                    for (s && (pt = i == r || i || s); p !== ft && null != (c = rt[p]); p++) {
                        if (v && c) {
                            for (nt = 0, i || c.ownerDocument == r || (b(c), f = !h); d = l[nt++];)
                                if (d(c, i || r, f)) { e.push(c); break }
                            s && (y = ut)
                        }
                        o && ((c = !d && c) && g--, n && tt.push(c))
                    }
                    if (g += p, o && p !== g) {
                        for (nt = 0; d = a[nt++];) d(tt, w, i, f);
                        if (n) {
                            if (0 < g)
                                while (p--) tt[p] || w[p] || (w[p] = ar.call(e));
                            w = wt(w)
                        }
                        k.apply(e, w), s && !n && 0 < w.length && 1 < g + a.length && u.uniqueSort(e)
                    }
                    return s && (y = ut, pt = it), tt
                }, o ? c(p) : p))).selector = n
            }
            return f
        }, hi = u.select = function(n, i, r, u) {
            var o, f, e, l, a, c = "function" == typeof n && n,
                s = !u && ot(n = c.selector || n);
            if (r = r || [], 1 === s.length) {
                if (2 < (f = s[0] = s[0].slice(0)).length && "ID" === (e = f[0]).type && 9 === i.nodeType && h && t.relative[f[1].type]) {
                    if (!(i = (t.find.ID(e.matches[0].replace(p, v), i) || [])[0])) return r;
                    c && (i = i.parentNode), n = n.slice(f.shift().value.length)
                }
                for (o = at.needsContext.test(n) ? 0 : f.length; o--;) { if (e = f[o], t.relative[l = e.type]) break; if ((a = t.find[l]) && (u = a(e.matches[0].replace(p, v), ni.test(f[0].type) && dt(i.parentNode) || i))) { if (f.splice(o, 1), !(n = u.length && lt(f))) return k.apply(r, u), r; break } }
            }
            return (c || ii(n, s))(u, i, !h, r, !i || ni.test(n) && dt(i.parentNode) || i), r
        }, f.sortStable = e.split("").sort(ei).join("") === e, f.detectDuplicates = !!ut, b(), f.sortDetached = l(function(n) { return 1 & n.compareDocumentPosition(r.createElement("fieldset")) }), l(function(n) { return n.innerHTML = "<a href='#'></a>", "#" === n.firstChild.getAttribute("href") }) || kt("type|href|height|width", function(n, t, i) { if (!i) return n.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2) }), f.attributes && l(function(n) { return n.innerHTML = "<input/>", n.firstChild.setAttribute("value", ""), "" === n.firstChild.getAttribute("value") }) || kt("value", function(n, t, i) { if (!i && "input" === n.nodeName.toLowerCase()) return n.defaultValue }), l(function(n) { return null == n.getAttribute("disabled") }) || kt(fi, function(n, t, i) { var r; if (!i) return !0 === n[t] ? t.toLowerCase() : (r = n.getAttributeNode(t)) && r.specified ? r.value : null }), u
    }(n), i.find = k, i.expr = k.selectors, i.expr[":"] = i.expr.pseudos, i.uniqueSort = i.unique = k.uniqueSort, i.text = k.getText, i.isXMLDoc = k.isXML, i.contains = k.contains, i.escapeSelector = k.escape;
    var wt = function(n, t, r) {
            for (var u = [], f = void 0 !== r;
                (n = n[t]) && 9 !== n.nodeType;)
                if (1 === n.nodeType) {
                    if (f && i(n).is(r)) break;
                    u.push(n)
                }
            return u
        },
        lf = function(n, t) { for (var i = []; n; n = n.nextSibling) 1 === n.nodeType && n !== t && i.push(n); return i },
        cf = i.expr.match.needsContext;
    di = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i, i.filter = function(n, t, r) { var u = t[0]; return r && (n = ":not(" + n + ")"), 1 === t.length && 1 === u.nodeType ? i.find.matchesSelector(u, n) ? [u] : [] : i.find.matches(n, i.grep(t, function(n) { return 1 === n.nodeType })) }, i.fn.extend({
        find: function(n) {
            var t, r, u = this.length,
                f = this;
            if ("string" != typeof n) return this.pushStack(i(n).filter(function() {
                for (t = 0; t < u; t++)
                    if (i.contains(f[t], this)) return !0
            }));
            for (r = this.pushStack([]), t = 0; t < u; t++) i.find(n, f[t], r);
            return 1 < u ? i.uniqueSort(r) : r
        },
        filter: function(n) { return this.pushStack(tr(this, n || [], !1)) },
        not: function(n) { return this.pushStack(tr(this, n || [], !0)) },
        is: function(n) { return !!tr(this, "string" == typeof n && cf.test(n) ? i(n) : n || [], !1).length }
    }), tf = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/, (i.fn.init = function(n, t, r) {
        var e, o;
        if (!n) return this;
        if (r = r || ff, "string" == typeof n) {
            if (!(e = "<" === n[0] && ">" === n[n.length - 1] && 3 <= n.length ? [null, n, null] : tf.exec(n)) || !e[1] && t) return !t || t.jquery ? (t || r).find(n) : this.constructor(t).find(n);
            if (e[1]) {
                if (t = t instanceof i ? t[0] : t, i.merge(this, i.parseHTML(e[1], t && t.nodeType ? t.ownerDocument || t : f, !0)), di.test(e[1]) && i.isPlainObject(t))
                    for (e in t) u(this[e]) ? this[e](t[e]) : this.attr(e, t[e]);
                return this
            }
            return (o = f.getElementById(e[2])) && (this[0] = o, this.length = 1), this
        }
        return n.nodeType ? (this[0] = n, this.length = 1, this) : u(n) ? void 0 !== r.ready ? r.ready(n) : n(i) : i.makeArray(n, this)
    }).prototype = i.fn, ff = i(f), nf = /^(?:parents|prev(?:Until|All))/, fe = { children: !0, contents: !0, next: !0, prev: !0 }, i.fn.extend({
        has: function(n) {
            var t = i(n, this),
                r = t.length;
            return this.filter(function() {
                for (var n = 0; n < r; n++)
                    if (i.contains(this, t[n])) return !0
            })
        },
        closest: function(n, t) {
            var r, f = 0,
                o = this.length,
                u = [],
                e = "string" != typeof n && i(n);
            if (!cf.test(n))
                for (; f < o; f++)
                    for (r = this[f]; r && r !== t; r = r.parentNode)
                        if (r.nodeType < 11 && (e ? -1 < e.index(r) : 1 === r.nodeType && i.find.matchesSelector(r, n))) { u.push(r); break }
            return this.pushStack(1 < u.length ? i.uniqueSort(u) : u)
        },
        index: function(n) { return n ? "string" == typeof n ? ui.call(i(n), this[0]) : ui.call(this, n.jquery ? n[0] : n) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1 },
        add: function(n, t) { return this.pushStack(i.uniqueSort(i.merge(this.get(), i(n, t)))) },
        addBack: function(n) { return this.add(null == n ? this.prevObject : this.prevObject.filter(n)) }
    }), i.each({ parent: function(n) { var t = n.parentNode; return t && 11 !== t.nodeType ? t : null }, parents: function(n) { return wt(n, "parentNode") }, parentsUntil: function(n, t, i) { return wt(n, "parentNode", i) }, next: function(n) { return bu(n, "nextSibling") }, prev: function(n) { return bu(n, "previousSibling") }, nextAll: function(n) { return wt(n, "nextSibling") }, prevAll: function(n) { return wt(n, "previousSibling") }, nextUntil: function(n, t, i) { return wt(n, "nextSibling", i) }, prevUntil: function(n, t, i) { return wt(n, "previousSibling", i) }, siblings: function(n) { return lf((n.parentNode || {}).firstChild, n) }, children: function(n) { return lf(n.firstChild) }, contents: function(n) { return null != n.contentDocument && yf(n.contentDocument) ? n.contentDocument : (c(n, "template") && (n = n.content || n), i.merge([], n.childNodes)) } }, function(n, t) { i.fn[n] = function(r, u) { var f = i.map(this, t, r); return "Until" !== n.slice(-5) && (u = r), u && "string" == typeof u && (f = i.filter(u, f)), 1 < this.length && (fe[n] || i.uniqueSort(f), nf.test(n) && f.reverse()), this.pushStack(f) } }), v = /[^\x20\t\r\n\f]+/g, i.Callbacks = function(n) {
        var l, h;
        n = "string" == typeof n ? (l = n, h = {}, i.each(l.match(v) || [], function(n, t) { h[t] = !0 }), h) : i.extend({}, n);
        var o, r, a, f, t = [],
            s = [],
            e = -1,
            y = function() {
                for (f = f || n.once, a = o = !0; s.length; e = -1)
                    for (r = s.shift(); ++e < t.length;) !1 === t[e].apply(r[0], r[1]) && n.stopOnFalse && (e = t.length, r = !1);
                n.memory || (r = !1), o = !1, f && (t = r ? [] : "")
            },
            c = { add: function() { return t && (r && !o && (e = t.length - 1, s.push(r)), function f(r) { i.each(r, function(i, r) { u(r) ? n.unique && c.has(r) || t.push(r) : r && r.length && "string" !== ct(r) && f(r) }) }(arguments), r && !o && y()), this }, remove: function() { return i.each(arguments, function(n, r) { for (var u; - 1 < (u = i.inArray(r, t, u));) t.splice(u, 1), u <= e && e-- }), this }, has: function(n) { return n ? -1 < i.inArray(n, t) : 0 < t.length }, empty: function() { return t && (t = []), this }, disable: function() { return f = s = [], t = r = "", this }, disabled: function() { return !t }, lock: function() { return f = s = [], r || o || (t = r = ""), this }, locked: function() { return !!f }, fireWith: function(n, t) { return f || (t = [n, (t = t || []).slice ? t.slice() : t], s.push(t), o || y()), this }, fire: function() { return c.fireWith(this, arguments), this }, fired: function() { return !!a } };
        return c
    }, i.extend({
        Deferred: function(t) {
            var f = [
                    ["notify", "progress", i.Callbacks("memory"), i.Callbacks("memory"), 2],
                    ["resolve", "done", i.Callbacks("once memory"), i.Callbacks("once memory"), 0, "resolved"],
                    ["reject", "fail", i.Callbacks("once memory"), i.Callbacks("once memory"), 1, "rejected"]
                ],
                o = "pending",
                e = {
                    state: function() { return o },
                    always: function() { return r.done(arguments).fail(arguments), this },
                    "catch": function(n) { return e.then(null, n) },
                    pipe: function() {
                        var n = arguments;
                        return i.Deferred(function(t) {
                            i.each(f, function(i, f) {
                                var e = u(n[f[4]]) && n[f[4]];
                                r[f[1]](function() {
                                    var n = e && e.apply(this, arguments);
                                    n && u(n.promise) ? n.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[f[0] + "With"](this, e ? [n] : arguments)
                                })
                            }), n = null
                        }).promise()
                    },
                    then: function(t, r, e) {
                        function s(t, r, f, e) {
                            return function() {
                                var h = this,
                                    c = arguments,
                                    a = function() {
                                        var n, i;
                                        if (!(t < o)) {
                                            if ((n = f.apply(h, c)) === r.promise()) throw new TypeError("Thenable self-resolution");
                                            i = n && ("object" == typeof n || "function" == typeof n) && n.then, u(i) ? e ? i.call(n, s(o, r, ht, e), s(o, r, ai, e)) : (o++, i.call(n, s(o, r, ht, e), s(o, r, ai, e), s(o, r, ht, r.notifyWith))) : (f !== ht && (h = void 0, c = [n]), (e || r.resolveWith)(h, c))
                                        }
                                    },
                                    l = e ? a : function() { try { a() } catch (a) { i.Deferred.exceptionHook && i.Deferred.exceptionHook(a, l.stackTrace), o <= t + 1 && (f !== ai && (h = void 0, c = [a]), r.rejectWith(h, c)) } };
                                t ? l() : (i.Deferred.getStackHook && (l.stackTrace = i.Deferred.getStackHook()), n.setTimeout(l))
                            }
                        }
                        var o = 0;
                        return i.Deferred(function(n) { f[0][3].add(s(0, n, u(e) ? e : ht, n.notifyWith)), f[1][3].add(s(0, n, u(t) ? t : ht)), f[2][3].add(s(0, n, u(r) ? r : ai)) }).promise()
                    },
                    promise: function(n) { return null != n ? i.extend(n, e) : e }
                },
                r = {};
            return i.each(f, function(n, t) {
                var i = t[2],
                    u = t[5];
                e[t[1]] = i.add, u && i.add(function() { o = u }, f[3 - n][2].disable, f[3 - n][3].disable, f[0][2].lock, f[0][3].lock), i.add(t[3].fire), r[t[0]] = function() { return r[t[0] + "With"](this === r ? void 0 : this, arguments), this }, r[t[0] + "With"] = i.fireWith
            }), e.promise(r), t && t.call(r, r), r
        },
        when: function(n) {
            var e = arguments.length,
                t = e,
                o = Array(t),
                f = d.call(arguments),
                r = i.Deferred(),
                s = function(n) { return function(t) { o[n] = this, f[n] = 1 < arguments.length ? d.call(arguments) : t, --e || r.resolveWith(o, f) } };
            if (e <= 1 && (ku(n, r.done(s(t)).resolve, r.reject, !e), "pending" === r.state() || u(f[t] && f[t].then))) return r.then();
            while (t--) ku(f[t], s(t), r.reject);
            return r.promise()
        }
    }), du = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/, i.Deferred.exceptionHook = function(t, i) { n.console && n.console.warn && t && du.test(t.name) && n.console.warn("jQuery.Deferred exception: " + t.message, t.stack, i) }, i.readyException = function(t) { n.setTimeout(function() { throw t; }) }, li = i.Deferred(), i.fn.ready = function(n) { return li.then(n)["catch"](function(n) { i.readyException(n) }), this }, i.extend({
        isReady: !1,
        readyWait: 1,
        ready: function(n) {
            (!0 === n ? --i.readyWait : i.isReady) || (i.isReady = !0) !== n && 0 < --i.readyWait || li.resolveWith(f, [i])
        }
    }), i.ready.then = li.then, "complete" === f.readyState || "loading" !== f.readyState && !f.documentElement.doScroll ? n.setTimeout(i.ready) : (f.addEventListener("DOMContentLoaded", ci), n.addEventListener("load", ci));
    var p = function(n, t, r, f, e, o, s) {
            var h = 0,
                l = n.length,
                c = null == r;
            if ("object" === ct(r))
                for (h in e = !0, r) p(n, t, h, r[h], !0, o, s);
            else if (void 0 !== f && (e = !0, u(f) || (s = !0), c && (s ? (t.call(n, f), t = null) : (c = t, t = function(n, t, r) { return c.call(i(n), r) })), t))
                for (; h < l; h++) t(n[h], r, s ? f : f.call(n[h], h, t(n[h], r)));
            return e ? n : c ? t.call(n) : l ? t(n[0], r) : o
        },
        so = /^-ms-/,
        ve = /-([a-z])/g;
    ut = function(n) { return 1 === n.nodeType || 9 === n.nodeType || !+n.nodeType }, kt.uid = 1, kt.prototype = {
        cache: function(n) { var t = n[this.expando]; return t || (t = {}, ut(n) && (n.nodeType ? n[this.expando] = t : Object.defineProperty(n, this.expando, { value: t, configurable: !0 }))), t },
        set: function(n, t, i) {
            var r, u = this.cache(n);
            if ("string" == typeof t) u[y(t)] = i;
            else
                for (r in t) u[y(r)] = t[r];
            return u
        },
        get: function(n, t) { return void 0 === t ? this.cache(n) : n[this.expando] && n[this.expando][y(t)] },
        access: function(n, t, i) { return void 0 === t || t && "string" == typeof t && void 0 === i ? this.get(n, t) : (this.set(n, t, i), void 0 !== i ? i : t) },
        remove: function(n, t) {
            var u, r = n[this.expando];
            if (void 0 !== r) {
                if (void 0 !== t)
                    for (u = (t = Array.isArray(t) ? t.map(y) : (t = y(t)) in r ? [t] : t.match(v) || []).length; u--;) delete r[t[u]];
                (void 0 === t || i.isEmptyObject(r)) && (n.nodeType ? n[this.expando] = void 0 : delete n[this.expando])
            }
        },
        hasData: function(n) { var t = n[this.expando]; return void 0 !== t && !i.isEmptyObject(t) }
    };
    var r = new kt,
        s = new kt,
        eo = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        fo = /[A-Z]/g;
    i.extend({ hasData: function(n) { return s.hasData(n) || r.hasData(n) }, data: function(n, t, i) { return s.access(n, t, i) }, removeData: function(n, t) { s.remove(n, t) }, _data: function(n, t, i) { return r.access(n, t, i) }, _removeData: function(n, t) { r.remove(n, t) } }), i.fn.extend({
        data: function(n, t) {
            var f, u, e, i = this[0],
                o = i && i.attributes;
            if (void 0 === n) {
                if (this.length && (e = s.get(i), 1 === i.nodeType && !r.get(i, "hasDataAttrs"))) {
                    for (f = o.length; f--;) o[f] && 0 === (u = o[f].name).indexOf("data-") && (u = y(u.slice(5)), rf(i, u, e[u]));
                    r.set(i, "hasDataAttrs", !0)
                }
                return e
            }
            return "object" == typeof n ? this.each(function() { s.set(this, n) }) : p(this, function(t) {
                var r;
                if (i && void 0 === t) return void 0 !== (r = s.get(i, n)) ? r : void 0 !== (r = rf(i, n)) ? r : void 0;
                this.each(function() { s.set(this, n, t) })
            }, null, t, 1 < arguments.length, null, !0)
        },
        removeData: function(n) { return this.each(function() { s.remove(this, n) }) }
    }), i.extend({
        queue: function(n, t, u) { var f; if (n) return t = (t || "fx") + "queue", f = r.get(n, t), u && (!f || Array.isArray(u) ? f = r.access(n, t, i.makeArray(u)) : f.push(u)), f || [] },
        dequeue: function(n, t) {
            t = t || "fx";
            var r = i.queue(n, t),
                e = r.length,
                u = r.shift(),
                f = i._queueHooks(n, t);
            "inprogress" === u && (u = r.shift(), e--), u && ("fx" === t && r.unshift("inprogress"), delete f.stop, u.call(n, function() { i.dequeue(n, t) }, f)), !e && f && f.empty.fire()
        },
        _queueHooks: function(n, t) { var u = t + "queueHooks"; return r.get(n, u) || r.access(n, u, { empty: i.Callbacks("once memory").add(function() { r.remove(n, [t + "queue", u]) }) }) }
    }), i.fn.extend({
        queue: function(n, t) {
            var r = 2;
            return "string" != typeof n && (t = n, n = "fx", r--), arguments.length < r ? i.queue(this[0], n) : void 0 === t ? this : this.each(function() {
                var r = i.queue(this, n, t);
                i._queueHooks(this, n), "fx" === n && "inprogress" !== r[0] && i.dequeue(this, n)
            })
        },
        dequeue: function(n) { return this.each(function() { i.dequeue(this, n) }) },
        clearQueue: function(n) { return this.queue(n || "fx", []) },
        promise: function(n, t) {
            var u, e = 1,
                o = i.Deferred(),
                f = this,
                s = this.length,
                h = function() {--e || o.resolveWith(f, [f]) };
            for ("string" != typeof n && (t = n, n = void 0), n = n || "fx"; s--;)(u = r.get(f[s], n + "queueHooks")) && u.empty && (e++, u.empty.add(h));
            return h(), o.promise(t)
        }
    });
    var uf = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        dt = new RegExp("^(?:([+-])=|)(" + uf + ")([a-z%]*)$", "i"),
        w = ["Top", "Right", "Bottom", "Left"],
        nt = f.documentElement,
        ft = function(n) { return i.contains(n.ownerDocument, n) },
        uo = { composed: !0 };
    nt.getRootNode && (ft = function(n) { return i.contains(n.ownerDocument, n) || n.getRootNode(uo) === n.ownerDocument }), ni = function(n, t) { return "none" === (n = t || n).style.display || "" === n.style.display && ft(n) && "none" === i.css(n, "display") }, er = {}, i.fn.extend({ show: function() { return st(this, !0) }, hide: function() { return st(this) }, toggle: function(n) { return "boolean" == typeof n ? n ? this.show() : this.hide() : this.each(function() { ni(this) ? i(this).show() : i(this).hide() }) } });
    var it, ei, bt = /^(?:checkbox|radio)$/i,
        of = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
        sf = /^$|^module$|\/(?:java|ecma)script/i;
    it = f.createDocumentFragment().appendChild(f.createElement("div")), (ei = f.createElement("input")).setAttribute("type", "radio"), ei.setAttribute("checked", "checked"), ei.setAttribute("name", "t"), it.appendChild(ei), e.checkClone = it.cloneNode(!0).cloneNode(!0).lastChild.checked, it.innerHTML = "<textarea>x</textarea>", e.noCloneChecked = !!it.cloneNode(!0).lastChild.defaultValue, it.innerHTML = "<option></option>", e.option = !!it.lastChild, h = { thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""] }, h.tbody = h.tfoot = h.colgroup = h.caption = h.thead, h.th = h.td, e.option || (h.optgroup = h.option = [1, "<select multiple='multiple'>", "</select>"]), hf = /<|&#?\w+;/;
    var ro = /^key/,
        io = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        kf = /^([^.]*)(?:\.(.+)|)/;
    i.event = {
        global: {},
        add: function(n, t, u, f, e) {
            var p, a, d, l, b, h, s, c, o, w, k, y = r.get(n);
            if (ut(n))
                for (u.handler && (u = (p = u).handler, e = p.selector), e && i.find.matchesSelector(nt, e), u.guid || (u.guid = i.guid++), (l = y.events) || (l = y.events = Object.create(null)), (a = y.handle) || (a = y.handle = function(t) { if ("undefined" != typeof i && i.event.triggered !== t.type) return i.event.dispatch.apply(n, arguments) }), b = (t = (t || "").match(v) || [""]).length; b--;) o = k = (d = kf.exec(t[b]) || [])[1], w = (d[2] || "").split(".").sort(), o && (s = i.event.special[o] || {}, o = (e ? s.delegateType : s.bindType) || o, s = i.event.special[o] || {}, h = i.extend({ type: o, origType: k, data: f, handler: u, guid: u.guid, selector: e, needsContext: e && i.expr.match.needsContext.test(e), namespace: w.join(".") }, p), (c = l[o]) || ((c = l[o] = []).delegateCount = 0, s.setup && !1 !== s.setup.call(n, f, w, a) || n.addEventListener && n.addEventListener(o, a)), s.add && (s.add.call(n, h), h.handler.guid || (h.handler.guid = u.guid)), e ? c.splice(c.delegateCount++, 0, h) : c.push(h), i.event.global[o] = !0)
        },
        remove: function(n, t, u, f, e) {
            var y, d, l, a, p, s, h, c, o, b, k, w = r.hasData(n) && r.get(n);
            if (w && (a = w.events)) {
                for (p = (t = (t || "").match(v) || [""]).length; p--;)
                    if (o = k = (l = kf.exec(t[p]) || [])[1], b = (l[2] || "").split(".").sort(), o) {
                        for (h = i.event.special[o] || {}, c = a[o = (f ? h.delegateType : h.bindType) || o] || [], l = l[2] && new RegExp("(^|\\.)" + b.join("\\.(?:.*\\.|)") + "(\\.|$)"), d = y = c.length; y--;) s = c[y], !e && k !== s.origType || u && u.guid !== s.guid || l && !l.test(s.namespace) || f && f !== s.selector && ("**" !== f || !s.selector) || (c.splice(y, 1), s.selector && c.delegateCount--, h.remove && h.remove.call(n, s));
                        d && !c.length && (h.teardown && !1 !== h.teardown.call(n, b, w.handle) || i.removeEvent(n, o, w.handle), delete a[o])
                    } else
                        for (o in a) i.event.remove(n, o + t[p], u, f, !0);
                i.isEmptyObject(a) && r.remove(n, "handle events")
            }
        },
        dispatch: function(n) {
            var u, h, c, e, f, l, s = new Array(arguments.length),
                t = i.event.fix(n),
                a = (r.get(this, "events") || Object.create(null))[t.type] || [],
                o = i.event.special[t.type] || {};
            for (s[0] = t, u = 1; u < arguments.length; u++) s[u] = arguments[u];
            if (t.delegateTarget = this, !o.preDispatch || !1 !== o.preDispatch.call(this, t)) {
                for (l = i.event.handlers.call(this, t, a), u = 0;
                    (e = l[u++]) && !t.isPropagationStopped();)
                    for (t.currentTarget = e.elem, h = 0;
                        (f = e.handlers[h++]) && !t.isImmediatePropagationStopped();) t.rnamespace && !1 !== f.namespace && !t.rnamespace.test(f.namespace) || (t.handleObj = f, t.data = f.data, void 0 !== (c = ((i.event.special[f.origType] || {}).handle || f.handler).apply(e.elem, s)) && !1 === (t.result = c) && (t.preventDefault(), t.stopPropagation()));
                return o.postDispatch && o.postDispatch.call(this, t), t.result
            }
        },
        handlers: function(n, t) {
            var f, h, u, e, o, c = [],
                s = t.delegateCount,
                r = n.target;
            if (s && r.nodeType && !("click" === n.type && 1 <= n.button))
                for (; r !== this; r = r.parentNode || this)
                    if (1 === r.nodeType && ("click" !== n.type || !0 !== r.disabled)) {
                        for (e = [], o = {}, f = 0; f < s; f++) void 0 === o[u = (h = t[f]).selector + " "] && (o[u] = h.needsContext ? -1 < i(u, this).index(r) : i.find(u, this, null, [r]).length), o[u] && e.push(h);
                        e.length && c.push({ elem: r, handlers: e })
                    }
            return r = this, s < t.length && c.push({ elem: r, handlers: t.slice(s) }), c
        },
        addProp: function(n, t) { Object.defineProperty(i.Event.prototype, n, { enumerable: !0, configurable: !0, get: u(t) ? function() { if (this.originalEvent) return t(this.originalEvent) } : function() { if (this.originalEvent) return this.originalEvent[n] }, set: function(t) { Object.defineProperty(this, n, { enumerable: !0, configurable: !0, writable: !0, value: t }) } }) },
        fix: function(n) { return n[i.expando] ? n : new i.Event(n) },
        special: { load: { noBubble: !0 }, click: { setup: function(n) { var t = this || n; return bt.test(t.type) && t.click && c(t, "input") && hi(t, "click", at), !1 }, trigger: function(n) { var t = this || n; return bt.test(t.type) && t.click && c(t, "input") && hi(t, "click"), !0 }, _default: function(n) { var t = n.target; return bt.test(t.type) && t.click && c(t, "input") && r.get(t, "click") || c(t, "a") } }, beforeunload: { postDispatch: function(n) { void 0 !== n.result && n.originalEvent && (n.originalEvent.returnValue = n.result) } } }
    }, i.removeEvent = function(n, t, i) { n.removeEventListener && n.removeEventListener(t, i) }, i.Event = function(n, t) {
        if (!(this instanceof i.Event)) return new i.Event(n, t);
        n && n.type ? (this.originalEvent = n, this.type = n.type, this.isDefaultPrevented = n.defaultPrevented || void 0 === n.defaultPrevented && !1 === n.returnValue ? at : lt, this.target = n.target && 3 === n.target.nodeType ? n.target.parentNode : n.target, this.currentTarget = n.currentTarget, this.relatedTarget = n.relatedTarget) : this.type = n, t && i.extend(this, t), this.timeStamp = n && n.timeStamp || Date.now(), this[i.expando] = !0
    }, i.Event.prototype = {
        constructor: i.Event,
        isDefaultPrevented: lt,
        isPropagationStopped: lt,
        isImmediatePropagationStopped: lt,
        isSimulated: !1,
        preventDefault: function() {
            var n = this.originalEvent;
            this.isDefaultPrevented = at, n && !this.isSimulated && n.preventDefault()
        },
        stopPropagation: function() {
            var n = this.originalEvent;
            this.isPropagationStopped = at, n && !this.isSimulated && n.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var n = this.originalEvent;
            this.isImmediatePropagationStopped = at, n && !this.isSimulated && n.stopImmediatePropagation(), this.stopPropagation()
        }
    }, i.each({ altKey: !0, bubbles: !0, cancelable: !0, changedTouches: !0, ctrlKey: !0, detail: !0, eventPhase: !0, metaKey: !0, pageX: !0, pageY: !0, shiftKey: !0, view: !0, char: !0, code: !0, charCode: !0, key: !0, keyCode: !0, button: !0, buttons: !0, clientX: !0, clientY: !0, offsetX: !0, offsetY: !0, pointerId: !0, pointerType: !0, screenX: !0, screenY: !0, targetTouches: !0, toElement: !0, touches: !0, which: function(n) { var t = n.button; return null == n.which && ro.test(n.type) ? null != n.charCode ? n.charCode : n.keyCode : !n.which && void 0 !== t && io.test(n.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : n.which } }, i.event.addProp), i.each({ focus: "focusin", blur: "focusout" }, function(n, t) { i.event.special[n] = { setup: function() { return hi(this, n, ao), !1 }, trigger: function() { return hi(this, n), !0 }, delegateType: t } }), i.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function(n, t) {
        i.event.special[n] = {
            delegateType: t,
            bindType: t,
            handle: function(n) {
                var u, r = n.relatedTarget,
                    f = n.handleObj;
                return r && (r === this || i.contains(this, r)) || (n.type = f.origType, u = f.handler.apply(this, arguments), n.type = t), u
            }
        }
    }), i.fn.extend({ on: function(n, t, i, r) { return sr(this, n, t, i, r) }, one: function(n, t, i, r) { return sr(this, n, t, i, r, 1) }, off: function(n, t, r) { var u, f; if (n && n.preventDefault && n.handleObj) return u = n.handleObj, i(n.delegateTarget).off(u.namespace ? u.origType + "." + u.namespace : u.origType, u.selector, u.handler), this; if ("object" == typeof n) { for (f in n) this.off(f, t, n[f]); return this } return !1 !== t && "function" != typeof t || (r = t, t = void 0), !1 === r && (r = lt), this.each(function() { i.event.remove(this, n, r, t) }) } });
    var to = /<script|<style|<link/i,
        no = /checked\s*(?:[^=]|=\s*.checked.)/i,
        ge = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
    i.extend({
        htmlPrefilter: function(n) { return n },
        clone: function(n, t, r) {
            var u, c, s, f, l, a, v, h = n.cloneNode(!0),
                y = ft(n);
            if (!(e.noCloneChecked || 1 !== n.nodeType && 11 !== n.nodeType || i.isXMLDoc(n)))
                for (f = o(h), u = 0, c = (s = o(n)).length; u < c; u++) l = s[u], a = f[u], void 0, "input" === (v = a.nodeName.toLowerCase()) && bt.test(l.type) ? a.checked = l.checked : "input" !== v && "textarea" !== v || (a.defaultValue = l.defaultValue);
            if (t)
                if (r)
                    for (s = s || o(n), f = f || o(h), u = 0, c = s.length; u < c; u++) gf(s[u], f[u]);
                else gf(n, h);
            return 0 < (f = o(h, "script")).length && gi(f, !y && o(n, "script")), h
        },
        cleanData: function(n) {
            for (var u, t, f, o = i.event.special, e = 0; void 0 !== (t = n[e]); e++)
                if (ut(t)) {
                    if (u = t[r.expando]) {
                        if (u.events)
                            for (f in u.events) o[f] ? i.event.remove(t, f) : i.removeEvent(t, f, u.handle);
                        t[r.expando] = void 0
                    }
                    t[s.expando] && (t[s.expando] = void 0)
                }
        }
    }), i.fn.extend({
        detach: function(n) { return df(this, n, !0) },
        remove: function(n) { return df(this, n) },
        text: function(n) { return p(this, function(n) { return void 0 === n ? i.text(this) : this.empty().each(function() { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = n) }) }, null, n, arguments.length) },
        append: function() { return et(this, arguments, function(n) { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || te(this, n).appendChild(n) }) },
        prepend: function() {
            return et(this, arguments, function(n) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = te(this, n);
                    t.insertBefore(n, t.firstChild)
                }
            })
        },
        before: function() { return et(this, arguments, function(n) { this.parentNode && this.parentNode.insertBefore(n, this) }) },
        after: function() { return et(this, arguments, function(n) { this.parentNode && this.parentNode.insertBefore(n, this.nextSibling) }) },
        empty: function() { for (var n, t = 0; null != (n = this[t]); t++) 1 === n.nodeType && (i.cleanData(o(n, !1)), n.textContent = ""); return this },
        clone: function(n, t) { return n = null != n && n, t = null == t ? n : t, this.map(function() { return i.clone(this, n, t) }) },
        html: function(n) {
            return p(this, function(n) {
                var t = this[0] || {},
                    r = 0,
                    u = this.length;
                if (void 0 === n && 1 === t.nodeType) return t.innerHTML;
                if ("string" == typeof n && !to.test(n) && !h[(of.exec(n) || ["", ""])[1].toLowerCase()]) {
                    n = i.htmlPrefilter(n);
                    try {
                        for (; r < u; r++) 1 === (t = this[r] || {}).nodeType && (i.cleanData(o(t, !1)), t.innerHTML = n);
                        t = 0
                    } catch (n) {}
                }
                t && this.empty().append(n)
            }, null, n, arguments.length)
        },
        replaceWith: function() {
            var n = [];
            return et(this, arguments, function(t) {
                var r = this.parentNode;
                i.inArray(this, n) < 0 && (i.cleanData(o(this)), r && r.replaceChild(t, this))
            }, n)
        }
    }), i.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function(n, t) { i.fn[n] = function(n) { for (var u, f = [], e = i(n), o = e.length - 1, r = 0; r <= o; r++) u = r === o ? this : this.clone(!0), i(e[r])[t](u), nr.apply(f, u.get()); return this.pushStack(f) } });
    var rr = new RegExp("^(" + uf + ")(?!px)[a-z%]+$", "i"),
        vi = function(t) { var i = t.ownerDocument.defaultView; return i && i.opener || (i = n), i.getComputedStyle(t) },
        ne = function(n, t, i) { var u, r, f = {}; for (r in t) f[r] = n.style[r], n.style[r] = t[r]; for (r in u = i.call(n), t) n.style[r] = f[r]; return u },
        be = new RegExp(w.join("|"), "i");
    ! function() {
        function r() {
            if (t) {
                s.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", t.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", nt.appendChild(s).appendChild(t);
                var i = n.getComputedStyle(t);
                h = "1%" !== i.top, v = 12 === u(i.marginLeft), t.style.right = "60%", a = 36 === u(i.right), c = 36 === u(i.width), t.style.position = "absolute", l = 12 === u(t.offsetWidth / 3), nt.removeChild(s), t = null
            }
        }

        function u(n) { return Math.round(parseFloat(n)) }
        var h, c, l, a, o, v, s = f.createElement("div"),
            t = f.createElement("div");
        t.style && (t.style.backgroundClip = "content-box", t.cloneNode(!0).style.backgroundClip = "", e.clearCloneStyle = "content-box" === t.style.backgroundClip, i.extend(e, { boxSizingReliable: function() { return r(), c }, pixelBoxStyles: function() { return r(), a }, pixelPosition: function() { return r(), h }, reliableMarginLeft: function() { return r(), v }, scrollboxSize: function() { return r(), l }, reliableTrDimensions: function() { var t, i, r, u; return null == o && (t = f.createElement("table"), i = f.createElement("tr"), r = f.createElement("div"), t.style.cssText = "position:absolute;left:-11111px", i.style.height = "1px", r.style.height = "9px", nt.appendChild(t).appendChild(i).appendChild(r), u = n.getComputedStyle(i), o = 3 < parseInt(u.height), nt.removeChild(t)), o } }))
    }();
    var wu = ["Webkit", "Moz", "ms"],
        gu = f.createElement("div").style,
        yu = {};
    var pe = /^(none|table(?!-c[ea]).+)/,
        pr = /^--/,
        we = { position: "absolute", visibility: "hidden", display: "block" },
        kr = { letterSpacing: "0", fontWeight: "400" };
    i.extend({
        cssHooks: { opacity: { get: function(n, t) { if (t) { var i = gt(n, "opacity"); return "" === i ? "1" : i } } } },
        cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, gridArea: !0, gridColumn: !0, gridColumnEnd: !0, gridColumnStart: !0, gridRow: !0, gridRowEnd: !0, gridRowStart: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 },
        cssProps: {},
        style: function(n, t, r, u) {
            if (n && 3 !== n.nodeType && 8 !== n.nodeType && n.style) {
                var f, h, o, c = y(t),
                    l = pr.test(t),
                    s = n.style;
                if (l || (t = ar(c)), o = i.cssHooks[t] || i.cssHooks[c], void 0 === r) return o && "get" in o && void 0 !== (f = o.get(n, !1, u)) ? f : s[t];
                "string" == (h = typeof r) && (f = dt.exec(r)) && f[1] && (r = ef(n, t, f), h = "number"), null != r && r == r && ("number" !== h || l || (r += f && f[3] || (i.cssNumber[c] ? "" : "px")), e.clearCloneStyle || "" !== r || 0 !== t.indexOf("background") || (s[t] = "inherit"), o && "set" in o && void 0 === (r = o.set(n, r, u)) || (l ? s.setProperty(t, r) : s[t] = r))
            }
        },
        css: function(n, t, r, u) { var f, e, o, s = y(t); return pr.test(t) || (t = ar(s)), (o = i.cssHooks[t] || i.cssHooks[s]) && "get" in o && (f = o.get(n, !0, r)), void 0 === f && (f = gt(n, t, u)), "normal" === f && t in kr && (f = kr[t]), "" === r || r ? (e = parseFloat(f), !0 === r || isFinite(e) ? e || 0 : f) : f }
    }), i.each(["height", "width"], function(n, t) {
        i.cssHooks[t] = {
            get: function(n, r, u) { if (r) return !pe.test(i.css(n, "display")) || n.getClientRects().length && n.getBoundingClientRect().width ? br(n, t, u) : ne(n, we, function() { return br(n, t, u) }) },
            set: function(n, r, u) {
                var s, f = vi(n),
                    h = !e.scrollboxSize() && "absolute" === f.position,
                    c = (h || u) && "border-box" === i.css(n, "boxSizing", !1, f),
                    o = u ? fr(n, t, u, c, f) : 0;
                return c && h && (o -= Math.ceil(n["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(f[t]) - fr(n, t, "border", !1, f) - .5)), o && (s = dt.exec(r)) && "px" !== (s[3] || "px") && (n.style[t] = r, r = i.css(n, t)), vr(0, r, o)
            }
        }
    }), i.cssHooks.marginLeft = pf(e.reliableMarginLeft, function(n, t) { if (t) return (parseFloat(gt(n, "marginLeft")) || n.getBoundingClientRect().left - ne(n, { marginLeft: 0 }, function() { return n.getBoundingClientRect().left })) + "px" }), i.each({ margin: "", padding: "", border: "Width" }, function(n, t) { i.cssHooks[n + t] = { expand: function(i) { for (var r = 0, f = {}, u = "string" == typeof i ? i.split(" ") : [i]; r < 4; r++) f[n + w[r] + t] = u[r] || u[r - 2] || u[0]; return f } }, "margin" !== n && (i.cssHooks[n + t].set = vr) }), i.fn.extend({
        css: function(n, t) {
            return p(this, function(n, t, r) {
                var f, e, o = {},
                    u = 0;
                if (Array.isArray(t)) { for (f = vi(n), e = t.length; u < e; u++) o[t[u]] = i.css(n, t[u], !1, f); return o }
                return void 0 !== r ? i.style(n, t, r) : i.css(n, t)
            }, n, t, 1 < arguments.length)
        }
    }), ((i.Tween = a).prototype = { constructor: a, init: function(n, t, r, u, f, e) { this.elem = n, this.prop = r, this.easing = f || i.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = u, this.unit = e || (i.cssNumber[r] ? "" : "px") }, cur: function() { var n = a.propHooks[this.prop]; return n && n.get ? n.get(this) : a.propHooks._default.get(this) }, run: function(n) { var t, r = a.propHooks[this.prop]; return this.pos = this.options.duration ? t = i.easing[this.easing](n, this.options.duration * n, 0, 1, this.options.duration) : t = n, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), r && r.set ? r.set(this) : a.propHooks._default.set(this), this } }).init.prototype = a.prototype, (a.propHooks = { _default: { get: function(n) { var t; return 1 !== n.elem.nodeType || null != n.elem[n.prop] && null == n.elem.style[n.prop] ? n.elem[n.prop] : (t = i.css(n.elem, n.prop, "")) && "auto" !== t ? t : 0 }, set: function(n) { i.fx.step[n.prop] ? i.fx.step[n.prop](n) : 1 !== n.elem.nodeType || !i.cssHooks[n.prop] && null == n.elem.style[ar(n.prop)] ? n.elem[n.prop] = n.now : i.style(n.elem, n.prop, n.now + n.unit) } } }).scrollTop = a.propHooks.scrollLeft = { set: function(n) { n.elem.nodeType && n.elem.parentNode && (n.elem[n.prop] = n.now) } }, i.easing = { linear: function(n) { return n }, swing: function(n) { return .5 - Math.cos(n * Math.PI) / 2 }, _default: "swing" }, i.fx = a.prototype.init, i.fx.step = {}, wr = /^(?:toggle|show|hide)$/, vu = /queueHooks$/, i.Animation = i.extend(l, {
        tweeners: { "*": [function(n, t) { var i = this.createTween(n, t); return ef(i.elem, n, dt.exec(t), i), i }] },
        tweener: function(n, t) { u(n) ? (t = n, n = ["*"]) : n = n.match(v); for (var i, r = 0, f = n.length; r < f; r++) i = n[r], l.tweeners[i] = l.tweeners[i] || [], l.tweeners[i].unshift(t) },
        prefilters: [function(n, t, u) {
            var f, p, w, c, b, h, o, a, k = "width" in t || "height" in t,
                v = this,
                y = {},
                s = n.style,
                l = n.nodeType && ni(n),
                e = r.get(n, "fxshow");
            for (f in u.queue || (null == (c = i._queueHooks(n, "fx")).unqueued && (c.unqueued = 0, b = c.empty.fire, c.empty.fire = function() { c.unqueued || b() }), c.unqueued++, v.always(function() { v.always(function() { c.unqueued--, i.queue(n, "fx").length || c.empty.fire() }) })), t)
                if (p = t[f], wr.test(p)) {
                    if (delete t[f], w = w || "toggle" === p, p === (l ? "hide" : "show")) {
                        if ("show" !== p || !e || void 0 === e[f]) continue;
                        l = !0
                    }
                    y[f] = e && e[f] || i.style(n, f)
                }
            if ((h = !i.isEmptyObject(t)) || !i.isEmptyObject(y))
                for (f in k && 1 === n.nodeType && (u.overflow = [s.overflow, s.overflowX, s.overflowY], null == (o = e && e.display) && (o = r.get(n, "display")), "none" === (a = i.css(n, "display")) && (o ? a = o : (st([n], !0), o = n.style.display || o, a = i.css(n, "display"), st([n]))), ("inline" === a || "inline-block" === a && null != o) && "none" === i.css(n, "float") && (h || (v.done(function() { s.display = o }), null == o && (a = s.display, o = "none" === a ? "" : a)), s.display = "inline-block")), u.overflow && (s.overflow = "hidden", v.always(function() { s.overflow = u.overflow[0], s.overflowX = u.overflow[1], s.overflowY = u.overflow[2] })), h = !1, y) h || (e ? "hidden" in e && (l = e.hidden) : e = r.access(n, "fxshow", { display: o }), w && (e.hidden = !l), l && st([n], !0), v.done(function() { for (f in l || st([n]), r.remove(n, "fxshow"), y) i.style(n, f, y[f]) })), h = nu(l ? e[f] : 0, f, v), f in e || (e[f] = h.start, l && (h.end = h.start, h.start = 0))
        }],
        prefilter: function(n, t) { t ? l.prefilters.unshift(n) : l.prefilters.push(n) }
    }), i.speed = function(n, t, r) { var f = n && "object" == typeof n ? i.extend({}, n) : { complete: r || !r && t || u(n) && n, duration: n, easing: r && t || t && !u(t) && t }; return i.fx.off ? f.duration = 0 : "number" != typeof f.duration && (f.duration = f.duration in i.fx.speeds ? i.fx.speeds[f.duration] : i.fx.speeds._default), null != f.queue && !0 !== f.queue || (f.queue = "fx"), f.old = f.complete, f.complete = function() { u(f.old) && f.old.call(this), f.queue && i.dequeue(this, f.queue) }, f }, i.fn.extend({
        fadeTo: function(n, t, i, r) { return this.filter(ni).css("opacity", 0).show().end().animate({ opacity: t }, n, i, r) },
        animate: function(n, t, u, f) {
            var s = i.isEmptyObject(n),
                o = i.speed(t, u, f),
                e = function() {
                    var t = l(this, i.extend({}, n), o);
                    (s || r.get(this, "finish")) && t.stop(!0)
                };
            return e.finish = e, s || !1 === o.queue ? this.each(e) : this.queue(o.queue, e)
        },
        stop: function(n, t, u) {
            var f = function(n) {
                var t = n.stop;
                delete n.stop, t(u)
            };
            return "string" != typeof n && (u = t, t = n, n = void 0), t && this.queue(n || "fx", []), this.each(function() {
                var s = !0,
                    t = null != n && n + "queueHooks",
                    o = i.timers,
                    e = r.get(this);
                if (t) e[t] && e[t].stop && f(e[t]);
                else
                    for (t in e) e[t] && e[t].stop && vu.test(t) && f(e[t]);
                for (t = o.length; t--;) o[t].elem !== this || null != n && o[t].queue !== n || (o[t].anim.stop(u), s = !1, o.splice(t, 1));
                !s && u || i.dequeue(this, n)
            })
        },
        finish: function(n) {
            return !1 !== n && (n = n || "fx"), this.each(function() {
                var t, e = r.get(this),
                    u = e[n + "queue"],
                    o = e[n + "queueHooks"],
                    f = i.timers,
                    s = u ? u.length : 0;
                for (e.finish = !0, i.queue(this, n, []), o && o.stop && o.stop.call(this, !0), t = f.length; t--;) f[t].elem === this && f[t].queue === n && (f[t].anim.stop(!0), f.splice(t, 1));
                for (t = 0; t < s; t++) u[t] && u[t].finish && u[t].finish.call(this);
                delete e.finish
            })
        }
    }), i.each(["toggle", "show", "hide"], function(n, t) {
        var r = i.fn[t];
        i.fn[t] = function(n, i, u) { return null == n || "boolean" == typeof n ? r.apply(this, arguments) : this.animate(oi(t, !0), n, i, u) }
    }), i.each({ slideDown: oi("show"), slideUp: oi("hide"), slideToggle: oi("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function(n, t) { i.fn[n] = function(n, i, r) { return this.animate(t, n, i, r) } }), i.timers = [], i.fx.tick = function() {
        var r, n = 0,
            t = i.timers;
        for (ot = Date.now(); n < t.length; n++)(r = t[n])() || t[n] !== r || t.splice(n--, 1);
        t.length || i.fx.stop(), ot = void 0
    }, i.fx.timer = function(n) { i.timers.push(n), i.fx.start() }, i.fx.interval = 13, i.fx.start = function() { fi || (fi = !0, bi()) }, i.fx.stop = function() { fi = null }, i.fx.speeds = { slow: 600, fast: 200, _default: 400 }, i.fn.delay = function(t, r) {
        return t = i.fx && i.fx.speeds[t] || t, r = r || "fx", this.queue(r, function(i, r) {
            var u = n.setTimeout(i, t);
            r.stop = function() { n.clearTimeout(u) }
        })
    }, yt = f.createElement("input"), yr = f.createElement("select").appendChild(f.createElement("option")), yt.type = "checkbox", e.checkOn = "" !== yt.value, e.optSelected = yr.selected, (yt = f.createElement("input")).value = "t", yt.type = "radio", e.radioValue = "t" === yt.value, pt = i.expr.attrHandle, i.fn.extend({ attr: function(n, t) { return p(this, i.attr, n, t, 1 < arguments.length) }, removeAttr: function(n) { return this.each(function() { i.removeAttr(this, n) }) } }), i.extend({
        attr: function(n, t, r) { var f, u, e = n.nodeType; if (3 !== e && 8 !== e && 2 !== e) return "undefined" == typeof n.getAttribute ? i.prop(n, t, r) : (1 === e && i.isXMLDoc(n) || (u = i.attrHooks[t.toLowerCase()] || (i.expr.match.bool.test(t) ? tu : void 0)), void 0 !== r ? null === r ? void i.removeAttr(n, t) : u && "set" in u && void 0 !== (f = u.set(n, r, t)) ? f : (n.setAttribute(t, r + ""), r) : u && "get" in u && null !== (f = u.get(n, t)) ? f : null == (f = i.find.attr(n, t)) ? void 0 : f) },
        attrHooks: { type: { set: function(n, t) { if (!e.radioValue && "radio" === t && c(n, "input")) { var i = n.value; return n.setAttribute("type", t), i && (n.value = i), t } } } },
        removeAttr: function(n, t) {
            var i, u = 0,
                r = t && t.match(v);
            if (r && 1 === n.nodeType)
                while (i = r[u++]) n.removeAttribute(i)
        }
    }), tu = { set: function(n, t, r) { return !1 === t ? i.removeAttr(n, r) : n.setAttribute(r, r), r } }, i.each(i.expr.match.bool.source.match(/\w+/g), function(n, t) {
        var r = pt[t] || i.find.attr;
        pt[t] = function(n, t, i) { var f, e, u = t.toLowerCase(); return i || (e = pt[u], pt[u] = f, f = null != r(n, t, i) ? u : null, pt[u] = e), f }
    }), iu = /^(?:input|select|textarea|button)$/i, ru = /^(?:a|area)$/i, i.fn.extend({ prop: function(n, t) { return p(this, i.prop, n, t, 1 < arguments.length) }, removeProp: function(n) { return this.each(function() { delete this[i.propFix[n] || n] }) } }), i.extend({ prop: function(n, t, r) { var f, u, e = n.nodeType; if (3 !== e && 8 !== e && 2 !== e) return 1 === e && i.isXMLDoc(n) || (t = i.propFix[t] || t, u = i.propHooks[t]), void 0 !== r ? u && "set" in u && void 0 !== (f = u.set(n, r, t)) ? f : n[t] = r : u && "get" in u && null !== (f = u.get(n, t)) ? f : n[t] }, propHooks: { tabIndex: { get: function(n) { var t = i.find.attr(n, "tabindex"); return t ? parseInt(t, 10) : iu.test(n.nodeName) || ru.test(n.nodeName) && n.href ? 0 : -1 } } }, propFix: { "for": "htmlFor", "class": "className" } }), e.optSelected || (i.propHooks.selected = {
        get: function(n) { var t = n.parentNode; return t && t.parentNode && t.parentNode.selectedIndex, null },
        set: function(n) {
            var t = n.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
        }
    }), i.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() { i.propFix[this.toLowerCase()] = this }), i.fn.extend({
        addClass: function(n) {
            var o, t, r, f, e, s, h, c = 0;
            if (u(n)) return this.each(function(t) { i(this).addClass(n.call(this, t, tt(this))) });
            if ((o = yi(n)).length)
                while (t = this[c++])
                    if (f = tt(t), r = 1 === t.nodeType && " " + g(f) + " ") {
                        for (s = 0; e = o[s++];) r.indexOf(" " + e + " ") < 0 && (r += e + " ");
                        f !== (h = g(r)) && t.setAttribute("class", h)
                    }
            return this
        },
        removeClass: function(n) {
            var o, r, t, f, e, s, h, c = 0;
            if (u(n)) return this.each(function(t) { i(this).removeClass(n.call(this, t, tt(this))) });
            if (!arguments.length) return this.attr("class", "");
            if ((o = yi(n)).length)
                while (r = this[c++])
                    if (f = tt(r), t = 1 === r.nodeType && " " + g(f) + " ") {
                        for (s = 0; e = o[s++];)
                            while (-1 < t.indexOf(" " + e + " ")) t = t.replace(" " + e + " ", " ");
                        f !== (h = g(t)) && r.setAttribute("class", h)
                    }
            return this
        },
        toggleClass: function(n, t) {
            var f = typeof n,
                e = "string" === f || Array.isArray(n);
            return "boolean" == typeof t && e ? t ? this.addClass(n) : this.removeClass(n) : u(n) ? this.each(function(r) { i(this).toggleClass(n.call(this, r, tt(this), t), t) }) : this.each(function() {
                var t, o, u, s;
                if (e)
                    for (o = 0, u = i(this), s = yi(n); t = s[o++];) u.hasClass(t) ? u.removeClass(t) : u.addClass(t);
                else void 0 !== n && "boolean" !== f || ((t = tt(this)) && r.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === n ? "" : r.get(this, "__className__") || ""))
            })
        },
        hasClass: function(n) {
            for (var t, r = 0, i = " " + n + " "; t = this[r++];)
                if (1 === t.nodeType && -1 < (" " + g(tt(t)) + " ").indexOf(i)) return !0;
            return !1
        }
    }), dr = /\r/g, i.fn.extend({
        val: function(n) {
            var t, r, e, f = this[0];
            return arguments.length ? (e = u(n), this.each(function(r) {
                var u;
                1 === this.nodeType && (null == (u = e ? n.call(this, r, i(this).val()) : n) ? u = "" : "number" == typeof u ? u += "" : Array.isArray(u) && (u = i.map(u, function(n) { return null == n ? "" : n + "" })), (t = i.valHooks[this.type] || i.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, u, "value") || (this.value = u))
            })) : f ? (t = i.valHooks[f.type] || i.valHooks[f.nodeName.toLowerCase()]) && "get" in t && void 0 !== (r = t.get(f, "value")) ? r : "string" == typeof(r = f.value) ? r.replace(dr, "") : null == r ? "" : r : void 0
        }
    }), i.extend({
        valHooks: {
            option: { get: function(n) { var t = i.find.attr(n, "value"); return null != t ? t : g(i.text(n)) } },
            select: {
                get: function(n) {
                    for (var e, t, o = n.options, u = n.selectedIndex, f = "select-one" === n.type, s = f ? null : [], h = f ? u + 1 : o.length, r = u < 0 ? h : f ? u : 0; r < h; r++)
                        if (((t = o[r]).selected || r === u) && !t.disabled && (!t.parentNode.disabled || !c(t.parentNode, "optgroup"))) {
                            if (e = i(t).val(), f) return e;
                            s.push(e)
                        }
                    return s
                },
                set: function(n, t) { for (var r, u, f = n.options, e = i.makeArray(t), o = f.length; o--;)((u = f[o]).selected = -1 < i.inArray(i.valHooks.option.get(u), e)) && (r = !0); return r || (n.selectedIndex = -1), e }
            }
        }
    }), i.each(["radio", "checkbox"], function() { i.valHooks[this] = { set: function(n, t) { if (Array.isArray(t)) return n.checked = -1 < i.inArray(i(n).val(), t) } }, e.checkOn || (i.valHooks[this].get = function(n) { return null === n.getAttribute("value") ? "on" : n.value }) }), e.focusin = "onfocusin" in n, lr = /^(?:focusinfocus|focusoutblur)$/, hr = function(n) { n.stopPropagation() }, i.extend(i.event, {
        trigger: function(t, e, o, s) {
            var k, c, l, d, v, y, a, p, w = [o || f],
                h = si.call(t, "type") ? t.type : t,
                b = si.call(t, "namespace") ? t.namespace.split(".") : [];
            if (c = p = l = o = o || f, 3 !== o.nodeType && 8 !== o.nodeType && !lr.test(h + i.event.triggered) && (-1 < h.indexOf(".") && (h = (b = h.split(".")).shift(), b.sort()), v = h.indexOf(":") < 0 && "on" + h, (t = t[i.expando] ? t : new i.Event(h, "object" == typeof t && t)).isTrigger = s ? 2 : 3, t.namespace = b.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + b.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = o), e = null == e ? [t] : i.makeArray(e, [t]), a = i.event.special[h] || {}, s || !a.trigger || !1 !== a.trigger.apply(o, e))) {
                if (!s && !a.noBubble && !vt(o)) {
                    for (d = a.delegateType || h, lr.test(d + h) || (c = c.parentNode); c; c = c.parentNode) w.push(c), l = c;
                    l === (o.ownerDocument || f) && w.push(l.defaultView || l.parentWindow || n)
                }
                for (k = 0;
                    (c = w[k++]) && !t.isPropagationStopped();) p = c, t.type = 1 < k ? d : a.bindType || h, (y = (r.get(c, "events") || Object.create(null))[t.type] && r.get(c, "handle")) && y.apply(c, e), (y = v && c[v]) && y.apply && ut(c) && (t.result = y.apply(c, e), !1 === t.result && t.preventDefault());
                return t.type = h, s || t.isDefaultPrevented() || a._default && !1 !== a._default.apply(w.pop(), e) || !ut(o) || v && u(o[h]) && !vt(o) && ((l = o[v]) && (o[v] = null), i.event.triggered = h, t.isPropagationStopped() && p.addEventListener(h, hr), o[h](), t.isPropagationStopped() && p.removeEventListener(h, hr), i.event.triggered = void 0, l && (o[v] = l)), t.result
            }
        },
        simulate: function(n, t, r) {
            var u = i.extend(new i.Event, r, { type: n, isSimulated: !0 });
            i.event.trigger(u, null, t)
        }
    }), i.fn.extend({ trigger: function(n, t) { return this.each(function() { i.event.trigger(n, t, this) }) }, triggerHandler: function(n, t) { var r = this[0]; if (r) return i.event.trigger(n, t, r, !0) } }), e.focusin || i.each({ focus: "focusin", blur: "focusout" }, function(n, t) {
        var u = function(n) { i.event.simulate(t, n.target, i.event.fix(n)) };
        i.event.special[t] = {
            setup: function() {
                var i = this.ownerDocument || this.document || this,
                    f = r.access(i, t);
                f || i.addEventListener(n, u, !0), r.access(i, t, (f || 0) + 1)
            },
            teardown: function() {
                var i = this.ownerDocument || this.document || this,
                    f = r.access(i, t) - 1;
                f ? r.access(i, t, f) : (i.removeEventListener(n, u, !0), r.remove(i, t))
            }
        }
    });
    var ti = n.location,
        fu = { guid: Date.now() },
        or = /\?/;
    i.parseXML = function(t) { var r; if (!t || "string" != typeof t) return null; try { r = (new n.DOMParser).parseFromString(t, "text/xml") } catch (t) { r = void 0 } return r && !r.getElementsByTagName("parsererror").length || i.error("Invalid XML: " + t), r };
    var ho = /\[\]$/,
        eu = /\r?\n/g,
        co = /^(?:submit|button|image|reset|file)$/i,
        ye = /^(?:input|select|textarea|keygen)/i;
    i.param = function(n, t) {
        var r, f = [],
            e = function(n, t) {
                var i = u(t) ? t() : t;
                f[f.length] = encodeURIComponent(n) + "=" + encodeURIComponent(null == i ? "" : i)
            };
        if (null == n) return "";
        if (Array.isArray(n) || n.jquery && !i.isPlainObject(n)) i.each(n, function() { e(this.name, this.value) });
        else
            for (r in n) ur(r, n[r], t, e);
        return f.join("&")
    }, i.fn.extend({ serialize: function() { return i.param(this.serializeArray()) }, serializeArray: function() { return this.map(function() { var n = i.prop(this, "elements"); return n ? i.makeArray(n) : this }).filter(function() { var n = this.type; return this.name && !i(this).is(":disabled") && ye.test(this.nodeName) && !co.test(n) && (this.checked || !bt.test(n)) }).map(function(n, t) { var r = i(this).val(); return null == r ? null : Array.isArray(r) ? i.map(r, function(n) { return { name: t.name, value: n.replace(eu, "\r\n") } }) : { name: t.name, value: r.replace(eu, "\r\n") } }).get() } });
    var lo = /%20/g,
        le = /#.*$/,
        ae = /([?&])_=[^&]*/,
        ce = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        he = /^(?:GET|HEAD)$/,
        oe = /^\/\//,
        ou = {},
        ir = {},
        su = "*/".concat("*"),
        ki = f.createElement("a");
    return ki.href = ti.href, i.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: { url: ti.href, type: "GET", isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(ti.protocol), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": su, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ }, responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" }, converters: { "* text": String, "text html": !0, "text json": JSON.parse, "text xml": i.parseXML }, flatOptions: { url: !0, context: !0 } },
        ajaxSetup: function(n, t) { return t ? pi(pi(n, i.ajaxSettings), t) : pi(i.ajaxSettings, n) },
        ajaxPrefilter: hu(ou),
        ajaxTransport: hu(ir),
        ajax: function(t, r) {
            function b(t, r, f, c) {
                var v, rt, b, p, tt, a = r;
                s || (s = !0, k && n.clearTimeout(k), l = void 0, nt = c || "", e.readyState = 0 < t ? 4 : 0, v = 200 <= t && t < 300 || 304 === t, f && (p = function(n, t, i) {
                    for (var e, u, f, o, s = n.contents, r = n.dataTypes;
                        "*" === r[0];) r.shift(), void 0 === e && (e = n.mimeType || t.getResponseHeader("Content-Type"));
                    if (e)
                        for (u in s)
                            if (s[u] && s[u].test(e)) { r.unshift(u); break }
                    if (r[0] in i) f = r[0];
                    else {
                        for (u in i) {
                            if (!r[0] || n.converters[u + " " + r[0]]) { f = u; break }
                            o || (o = u)
                        }
                        f = f || o
                    }
                    if (f) return f !== r[0] && r.unshift(f), i[f]
                }(u, e, f)), !v && -1 < i.inArray("script", u.dataTypes) && (u.converters["text script"] = function() {}), p = function(n, t, i, r) {
                    var h, u, f, s, e, o = {},
                        c = n.dataTypes.slice();
                    if (c[1])
                        for (f in n.converters) o[f.toLowerCase()] = n.converters[f];
                    for (u = c.shift(); u;)
                        if (n.responseFields[u] && (i[n.responseFields[u]] = t), !e && r && n.dataFilter && (t = n.dataFilter(t, n.dataType)), e = u, u = c.shift())
                            if ("*" === u) u = e;
                            else if ("*" !== e && e !== u) {
                        if (!(f = o[e + " " + u] || o["* " + u]))
                            for (h in o)
                                if ((s = h.split(" "))[1] === u && (f = o[e + " " + s[0]] || o["* " + s[0]])) {!0 === f ? f = o[h] : !0 !== o[h] && (u = s[0], c.unshift(s[1])); break }
                        if (!0 !== f)
                            if (f && n.throws) t = f(t);
                            else try { t = f(t) } catch (n) { return { state: "parsererror", error: f ? n : "No conversion from " + e + " to " + u } }
                    }
                    return { state: "success", data: t }
                }(u, p, e, v), v ? (u.ifModified && ((tt = e.getResponseHeader("Last-Modified")) && (i.lastModified[o] = tt), (tt = e.getResponseHeader("etag")) && (i.etag[o] = tt)), 204 === t || "HEAD" === u.type ? a = "nocontent" : 304 === t ? a = "notmodified" : (a = p.state, rt = p.data, v = !(b = p.error))) : (b = a, !t && a || (a = "error", t < 0 && (t = 0))), e.status = t, e.statusText = (r || a) + "", v ? g.resolveWith(h, [rt, a, e]) : g.rejectWith(h, [e, a, b]), e.statusCode(y), y = void 0, w && d.trigger(v ? "ajaxSuccess" : "ajaxError", [e, u, v ? rt : b]), it.fireWith(h, [e, a]), w && (d.trigger("ajaxComplete", [e, u]), --i.active || i.event.trigger("ajaxStop")))
            }
            "object" == typeof t && (r = t, t = void 0), r = r || {};
            var l, o, nt, a, k, c, s, w, tt, p, u = i.ajaxSetup({}, r),
                h = u.context || u,
                d = u.context && (h.nodeType || h.jquery) ? i(h) : i.event,
                g = i.Deferred(),
                it = i.Callbacks("once memory"),
                y = u.statusCode || {},
                rt = {},
                ut = {},
                ft = "canceled",
                e = {
                    readyState: 0,
                    getResponseHeader: function(n) {
                        var t;
                        if (s) {
                            if (!a)
                                for (a = {}; t = ce.exec(nt);) a[t[1].toLowerCase() + " "] = (a[t[1].toLowerCase() + " "] || []).concat(t[2]);
                            t = a[n.toLowerCase() + " "]
                        }
                        return null == t ? null : t.join(", ")
                    },
                    getAllResponseHeaders: function() { return s ? nt : null },
                    setRequestHeader: function(n, t) { return null == s && (n = ut[n.toLowerCase()] = ut[n.toLowerCase()] || n, rt[n] = t), this },
                    overrideMimeType: function(n) { return null == s && (u.mimeType = n), this },
                    statusCode: function(n) {
                        var t;
                        if (n)
                            if (s) e.always(n[e.status]);
                            else
                                for (t in n) y[t] = [y[t], n[t]];
                        return this
                    },
                    abort: function(n) { var t = n || ft; return l && l.abort(t), b(0, t), this }
                };
            if (g.promise(e), u.url = ((t || u.url || ti.href) + "").replace(oe, ti.protocol + "//"), u.type = r.method || r.type || u.method || u.type, u.dataTypes = (u.dataType || "*").toLowerCase().match(v) || [""], null == u.crossDomain) { c = f.createElement("a"); try { c.href = u.url, c.href = c.href, u.crossDomain = ki.protocol + "//" + ki.host != c.protocol + "//" + c.host } catch (t) { u.crossDomain = !0 } }
            if (u.data && u.processData && "string" != typeof u.data && (u.data = i.param(u.data, u.traditional)), cu(ou, u, r, e), s) return e;
            for (tt in (w = i.event && u.global) && 0 == i.active++ && i.event.trigger("ajaxStart"), u.type = u.type.toUpperCase(), u.hasContent = !he.test(u.type), o = u.url.replace(le, ""), u.hasContent ? u.data && u.processData && 0 === (u.contentType || "").indexOf("application/x-www-form-urlencoded") && (u.data = u.data.replace(lo, "+")) : (p = u.url.slice(o.length), u.data && (u.processData || "string" == typeof u.data) && (o += (or.test(o) ? "&" : "?") + u.data, delete u.data), !1 === u.cache && (o = o.replace(ae, "$1"), p = (or.test(o) ? "&" : "?") + "_=" + fu.guid++ + p), u.url = o + p), u.ifModified && (i.lastModified[o] && e.setRequestHeader("If-Modified-Since", i.lastModified[o]), i.etag[o] && e.setRequestHeader("If-None-Match", i.etag[o])), (u.data && u.hasContent && !1 !== u.contentType || r.contentType) && e.setRequestHeader("Content-Type", u.contentType), e.setRequestHeader("Accept", u.dataTypes[0] && u.accepts[u.dataTypes[0]] ? u.accepts[u.dataTypes[0]] + ("*" !== u.dataTypes[0] ? ", " + su + "; q=0.01" : "") : u.accepts["*"]), u.headers) e.setRequestHeader(tt, u.headers[tt]);
            if (u.beforeSend && (!1 === u.beforeSend.call(h, e, u) || s)) return e.abort();
            if (ft = "abort", it.add(u.complete), e.done(u.success), e.fail(u.error), l = cu(ir, u, r, e)) {
                if (e.readyState = 1, w && d.trigger("ajaxSend", [e, u]), s) return e;
                u.async && 0 < u.timeout && (k = n.setTimeout(function() { e.abort("timeout") }, u.timeout));
                try { s = !1, l.send(rt, b) } catch (t) {
                    if (s) throw t;
                    b(-1, t)
                }
            } else b(-1, "No Transport");
            return e
        },
        getJSON: function(n, t, r) { return i.get(n, t, r, "json") },
        getScript: function(n, t) { return i.get(n, void 0, t, "script") }
    }), i.each(["get", "post"], function(n, t) { i[t] = function(n, r, f, e) { return u(r) && (e = e || f, f = r, r = void 0), i.ajax(i.extend({ url: n, type: t, dataType: e, data: r, success: f }, i.isPlainObject(n) && n)) } }), i.ajaxPrefilter(function(n) { var t; for (t in n.headers) "content-type" === t.toLowerCase() && (n.contentType = n.headers[t] || "") }), i._evalUrl = function(n, t, r) { return i.ajax({ url: n, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, converters: { "text script": function() {} }, dataFilter: function(n) { i.globalEval(n, t, r) } }) }, i.fn.extend({
        wrapAll: function(n) { var t; return this[0] && (u(n) && (n = n.call(this[0])), t = i(n, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() { for (var n = this; n.firstElementChild;) n = n.firstElementChild; return n }).append(this)), this },
        wrapInner: function(n) {
            return u(n) ? this.each(function(t) { i(this).wrapInner(n.call(this, t)) }) : this.each(function() {
                var t = i(this),
                    r = t.contents();
                r.length ? r.wrapAll(n) : t.append(n)
            })
        },
        wrap: function(n) { var t = u(n); return this.each(function(r) { i(this).wrapAll(t ? n.call(this, r) : n) }) },
        unwrap: function(n) { return this.parent(n).not("body").each(function() { i(this).replaceWith(this.childNodes) }), this }
    }), i.expr.pseudos.hidden = function(n) { return !i.expr.pseudos.visible(n) }, i.expr.pseudos.visible = function(n) { return !!(n.offsetWidth || n.offsetHeight || n.getClientRects().length) }, i.ajaxSettings.xhr = function() { try { return new n.XMLHttpRequest } catch (t) {} }, lu = { 0: 200, 1223: 204 }, rt = i.ajaxSettings.xhr(), e.cors = !!rt && "withCredentials" in rt, e.ajax = rt = !!rt, i.ajaxTransport(function(t) {
        var i, r;
        if (e.cors || rt && !t.crossDomain) return {
            send: function(u, f) {
                var o, e = t.xhr();
                if (e.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
                    for (o in t.xhrFields) e[o] = t.xhrFields[o];
                for (o in t.mimeType && e.overrideMimeType && e.overrideMimeType(t.mimeType), t.crossDomain || u["X-Requested-With"] || (u["X-Requested-With"] = "XMLHttpRequest"), u) e.setRequestHeader(o, u[o]);
                i = function(n) { return function() { i && (i = r = e.onload = e.onerror = e.onabort = e.ontimeout = e.onreadystatechange = null, "abort" === n ? e.abort() : "error" === n ? "number" != typeof e.status ? f(0, "error") : f(e.status, e.statusText) : f(lu[e.status] || e.status, e.statusText, "text" !== (e.responseType || "text") || "string" != typeof e.responseText ? { binary: e.response } : { text: e.responseText }, e.getAllResponseHeaders())) } }, e.onload = i(), r = e.onerror = e.ontimeout = i("error"), void 0 !== e.onabort ? e.onabort = r : e.onreadystatechange = function() { 4 === e.readyState && n.setTimeout(function() { i && r() }) }, i = i("abort");
                try { e.send(t.hasContent && t.data || null) } catch (u) { if (i) throw u; }
            },
            abort: function() { i && i() }
        }
    }), i.ajaxPrefilter(function(n) { n.crossDomain && (n.contents.script = !1) }), i.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /\b(?:java|ecma)script\b/ }, converters: { "text script": function(n) { return i.globalEval(n), n } } }), i.ajaxPrefilter("script", function(n) { void 0 === n.cache && (n.cache = !1), n.crossDomain && (n.type = "GET") }), i.ajaxTransport("script", function(n) { var r, t; if (n.crossDomain || n.scriptAttrs) return { send: function(u, e) { r = i("<script>").attr(n.scriptAttrs || {}).prop({ charset: n.scriptCharset, src: n.url }).on("load error", t = function(n) { r.remove(), t = null, n && e("error" === n.type ? 404 : 200, n.type) }), f.head.appendChild(r[0]) }, abort: function() { t && t() } } }), cr = [], ri = /(=)\?(?=&|$)|\?\?/, i.ajaxSetup({ jsonp: "callback", jsonpCallback: function() { var n = cr.pop() || i.expando + "_" + fu.guid++; return this[n] = !0, n } }), i.ajaxPrefilter("json jsonp", function(t, r, f) { var e, o, s, h = !1 !== t.jsonp && (ri.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && ri.test(t.data) && "data"); if (h || "jsonp" === t.dataTypes[0]) return e = t.jsonpCallback = u(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, h ? t[h] = t[h].replace(ri, "$1" + e) : !1 !== t.jsonp && (t.url += (or.test(t.url) ? "&" : "?") + t.jsonp + "=" + e), t.converters["script json"] = function() { return s || i.error(e + " was not called"), s[0] }, t.dataTypes[0] = "json", o = n[e], n[e] = function() { s = arguments }, f.always(function() { void 0 === o ? i(n).removeProp(e) : n[e] = o, t[e] && (t.jsonpCallback = r.jsonpCallback, cr.push(e)), s && u(o) && o(s[0]), s = o = void 0 }), "script" }), e.createHTMLDocument = ((au = f.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === au.childNodes.length), i.parseHTML = function(n, t, r) { return "string" != typeof n ? [] : ("boolean" == typeof t && (r = t, t = !1), t || (e.createHTMLDocument ? ((s = (t = f.implementation.createHTMLDocument("")).createElement("base")).href = f.location.href, t.head.appendChild(s)) : t = f), u = !r && [], (o = di.exec(n)) ? [t.createElement(o[1])] : (o = af([n], t, u), u && u.length && i(u).remove(), i.merge([], o.childNodes))); var s, o, u }, i.fn.load = function(n, t, r) {
        var f, s, h, e = this,
            o = n.indexOf(" ");
        return -1 < o && (f = g(n.slice(o)), n = n.slice(0, o)), u(t) ? (r = t, t = void 0) : t && "object" == typeof t && (s = "POST"), 0 < e.length && i.ajax({ url: n, type: s || "GET", dataType: "html", data: t }).done(function(n) { h = arguments, e.html(f ? i("<div>").append(i.parseHTML(n)).find(f) : n) }).always(r && function(n, t) { e.each(function() { r.apply(this, h || [n.responseText, t, n]) }) }), this
    }, i.expr.pseudos.animated = function(n) { return i.grep(i.timers, function(t) { return n === t.elem }).length }, i.offset = {
        setOffset: function(n, t, r) {
            var v, o, s, h, e, c, l = i.css(n, "position"),
                a = i(n),
                f = {};
            "static" === l && (n.style.position = "relative"), e = a.offset(), s = i.css(n, "top"), c = i.css(n, "left"), ("absolute" === l || "fixed" === l) && -1 < (s + c).indexOf("auto") ? (h = (v = a.position()).top, o = v.left) : (h = parseFloat(s) || 0, o = parseFloat(c) || 0), u(t) && (t = t.call(n, r, i.extend({}, e))), null != t.top && (f.top = t.top - e.top + h), null != t.left && (f.left = t.left - e.left + o), "using" in t ? t.using.call(n, f) : ("number" == typeof f.top && (f.top += "px"), "number" == typeof f.left && (f.left += "px"), a.css(f))
        }
    }, i.fn.extend({
        offset: function(n) { if (arguments.length) return void 0 === n ? this : this.each(function(t) { i.offset.setOffset(this, n, t) }); var r, u, t = this[0]; if (t) return t.getClientRects().length ? (r = t.getBoundingClientRect(), u = t.ownerDocument.defaultView, { top: r.top + u.pageYOffset, left: r.left + u.pageXOffset }) : { top: 0, left: 0 } },
        position: function() {
            if (this[0]) {
                var n, r, u, t = this[0],
                    f = { top: 0, left: 0 };
                if ("fixed" === i.css(t, "position")) r = t.getBoundingClientRect();
                else {
                    for (r = this.offset(), u = t.ownerDocument, n = t.offsetParent || u.documentElement; n && (n === u.body || n === u.documentElement) && "static" === i.css(n, "position");) n = n.parentNode;
                    n && n !== t && 1 === n.nodeType && ((f = i(n).offset()).top += i.css(n, "borderTopWidth", !0), f.left += i.css(n, "borderLeftWidth", !0))
                }
                return { top: r.top - f.top - i.css(t, "marginTop", !0), left: r.left - f.left - i.css(t, "marginLeft", !0) }
            }
        },
        offsetParent: function() { return this.map(function() { for (var n = this.offsetParent; n && "static" === i.css(n, "position");) n = n.offsetParent; return n || nt }) }
    }), i.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function(n, t) {
        var r = "pageYOffset" === t;
        i.fn[n] = function(i) {
            return p(this, function(n, i, u) {
                var f;
                if (vt(n) ? f = n : 9 === n.nodeType && (f = n.defaultView), void 0 === u) return f ? f[t] : n[i];
                f ? f.scrollTo(r ? f.pageXOffset : u, r ? u : f.pageYOffset) : n[i] = u
            }, n, i, arguments.length)
        }
    }), i.each(["top", "left"], function(n, t) { i.cssHooks[t] = pf(e.pixelPosition, function(n, r) { if (r) return r = gt(n, t), rr.test(r) ? i(n).position()[t] + "px" : r }) }), i.each({ Height: "height", Width: "width" }, function(n, t) {
        i.each({ padding: "inner" + n, content: t, "": "outer" + n }, function(r, u) {
            i.fn[u] = function(f, e) {
                var o = arguments.length && (r || "boolean" != typeof f),
                    s = r || (!0 === f || !0 === e ? "margin" : "border");
                return p(this, function(t, r, f) { var e; return vt(t) ? 0 === u.indexOf("outer") ? t["inner" + n] : t.document.documentElement["client" + n] : 9 === t.nodeType ? (e = t.documentElement, Math.max(t.body["scroll" + n], e["scroll" + n], t.body["offset" + n], e["offset" + n], e["client" + n])) : void 0 === f ? i.css(t, r, s) : i.style(t, r, f, s) }, t, o ? f : void 0, o)
            }
        })
    }), i.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(n, t) { i.fn[t] = function(n) { return this.on(t, n) } }), i.fn.extend({ bind: function(n, t, i) { return this.on(n, null, t, i) }, unbind: function(n, t) { return this.off(n, null, t) }, delegate: function(n, t, i, r) { return this.on(t, n, i, r) }, undelegate: function(n, t, i) { return 1 === arguments.length ? this.off(n, "**") : this.off(t, n || "**", i) }, hover: function(n, t) { return this.mouseenter(n).mouseleave(t || n) } }), i.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(n, t) { i.fn[t] = function(n, i) { return 0 < arguments.length ? this.on(t, null, n, i) : this.trigger(t) } }), uu = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, i.proxy = function(n, t) { var r, f, e; if ("string" == typeof t && (r = n[t], t = n, n = r), u(n)) return f = d.call(arguments, 2), (e = function() { return n.apply(t || this, f.concat(d.call(arguments))) }).guid = n.guid = n.guid || i.guid++, e }, i.holdReady = function(n) { n ? i.readyWait++ : i.ready(!0) }, i.isArray = Array.isArray, i.parseJSON = JSON.parse, i.nodeName = c, i.isFunction = u, i.isWindow = vt, i.camelCase = y, i.type = ct, i.now = Date.now, i.isNumeric = function(n) { var t = i.type(n); return ("number" === t || "string" === t) && !isNaN(n - parseFloat(n)) }, i.trim = function(n) { return null == n ? "" : (n + "").replace(uu, "") }, "function" == typeof define && define.amd && define("jquery", [], function() { return i }), vf = n.jQuery, pu = n.$, i.noConflict = function(t) { return n.$ === i && (n.$ = pu), t && n.jQuery === i && (n.jQuery = vf), i }, "undefined" == typeof t && (n.jQuery = n.$ = i), i
}),
function(n) {
    function i(n, t) { for (var i = window, r = (n || "").split("."); i && r.length;) i = i[r.shift()]; return typeof i == "function" ? i : (t.push(n), Function.constructor.apply(null, t)) }

    function u(n) { return n === "GET" || n === "POST" }

    function o(n, t) {!u(t) && n.setRequestHeader("X-HTTP-Method-Override", t) }

    function s(t, i, r) {
        var u;
        r.indexOf("application/x-javascript") === -1 && (u = (t.getAttribute("data-ajax-mode") || "").toUpperCase(), n(t.getAttribute("data-ajax-update")).each(function(t, r) {
            var f;
            switch (u) {
                case "BEFORE":
                    f = r.firstChild, n("<div />").html(i).contents().each(function() { r.insertBefore(this, f) });
                    break;
                case "AFTER":
                    n("<div />").html(i).contents().each(function() { r.appendChild(this) });
                    break;
                case "REPLACE-WITH":
                    n(r).replaceWith(i);
                    break;
                default:
                    n(r).html(i)
            }
        }))
    }

    function f(t, r) {
        var e, h, f, c;
        (e = t.getAttribute("data-ajax-confirm"), !e || window.confirm(e)) && (h = n(t.getAttribute("data-ajax-loading")), c = parseInt(t.getAttribute("data-ajax-loading-duration"), 10) || 0, n.extend(r, { type: t.getAttribute("data-ajax-method") || undefined, url: t.getAttribute("data-ajax-url") || undefined, cache: !!t.getAttribute("data-ajax-cache"), beforeSend: function(n) { var r; return o(n, f), r = i(t.getAttribute("data-ajax-begin"), ["xhr"]).apply(t, arguments), r !== !1 && h.show(c), r }, complete: function() { h.hide(c), i(t.getAttribute("data-ajax-complete"), ["xhr", "status"]).apply(t, arguments) }, success: function(n, r, u) { s(t, n, u.getResponseHeader("Content-Type") || "text/html"), i(t.getAttribute("data-ajax-success"), ["data", "status", "xhr"]).apply(t, arguments) }, error: function() { i(t.getAttribute("data-ajax-failure"), ["xhr", "status", "error"]).apply(t, arguments) } }), r.data.push({ name: "X-Requested-With", value: "XMLHttpRequest" }), f = r.type.toUpperCase(), u(f) || (r.type = "POST", r.data.push({ name: "X-HTTP-Method-Override", value: f })), n.ajax(r))
    }

    function h(t) { var i = n(t).data(e); return !i || !i.validate || i.validate() }
    var t = "unobtrusiveAjaxClick",
        r = "unobtrusiveAjaxClickTarget",
        e = "unobtrusiveValidation";
    n(document).on("click", "a[data-ajax=true]", function(n) { n.preventDefault(), f(this, { url: this.href, type: "GET", data: [] }) });
    n(document).on("click", "form[data-ajax=true] input[type=image]", function(i) {
        var r = i.target.name,
            u = n(i.target),
            f = n(u.parents("form")[0]),
            e = u.offset();
        f.data(t, [{ name: r + ".x", value: Math.round(i.pageX - e.left) }, { name: r + ".y", value: Math.round(i.pageY - e.top) }]), setTimeout(function() { f.removeData(t) }, 0)
    });
    n(document).on("click", "form[data-ajax=true] :submit", function(i) {
        var f = i.currentTarget.name,
            e = n(i.target),
            u = n(e.parents("form")[0]);
        u.data(t, f ? [{ name: f, value: i.currentTarget.value }] : []), u.data(r, e), setTimeout(function() { u.removeData(t), u.removeData(r) }, 0)
    });
    n(document).on("submit", "form[data-ajax=true]", function(i) {
        var e = n(this).data(t) || [],
            u = n(this).data(r),
            o = u && u.hasClass("cancel");
        (i.preventDefault(), o || h(this)) && f(this, { url: this.action, type: this.method || "GET", data: e.concat(n(this).serializeArray()) })
    })
}(jQuery), ! function(n) { "function" == typeof define && define.amd ? define(["jquery"], n) : "object" == typeof module && module.exports ? module.exports = n(require("jquery")) : n(jQuery) }(function(n) {
    n.extend(n.fn, {
        validate: function(t) {
            if (!this.length) return void(t && t.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing."));
            var i = n.data(this[0], "validator");
            return i ? i : (this.attr("novalidate", "novalidate"), i = new n.validator(t, this[0]), n.data(this[0], "validator", i), i.settings.onsubmit && (this.on("click.validate", ":submit", function(t) { i.submitButton = t.currentTarget, n(this).hasClass("cancel") && (i.cancelSubmit = !0), void 0 !== n(this).attr("formnovalidate") && (i.cancelSubmit = !0) }), this.on("submit.validate", function(t) {
                function r() { var r, u; return i.submitButton && (i.settings.submitHandler || i.formSubmitted) && (r = n("<input type='hidden'/>").attr("name", i.submitButton.name).val(n(i.submitButton).val()).appendTo(i.currentForm)), !i.settings.submitHandler || (u = i.settings.submitHandler.call(i, i.currentForm, t), r && r.remove(), void 0 !== u && u) }
                return i.settings.debug && t.preventDefault(), i.cancelSubmit ? (i.cancelSubmit = !1, r()) : i.form() ? i.pendingRequest ? (i.formSubmitted = !0, !1) : r() : (i.focusInvalid(), !1)
            })), i)
        },
        valid: function() { var t, i, r; return n(this[0]).is("form") ? t = this.validate().form() : (r = [], t = !0, i = n(this[0].form).validate(), this.each(function() { t = i.element(this) && t, t || (r = r.concat(i.errorList)) }), i.errorList = r), t },
        rules: function(t, i) {
            var e, s, f, u, o, h, r = this[0];
            if (null != r && (!r.form && r.hasAttribute("contenteditable") && (r.form = this.closest("form")[0], r.name = this.attr("name")), null != r.form)) {
                if (t) switch (e = n.data(r.form, "validator").settings, s = e.rules, f = n.validator.staticRules(r), t) {
                    case "add":
                        n.extend(f, n.validator.normalizeRule(i)), delete f.messages, s[r.name] = f, i.messages && (e.messages[r.name] = n.extend(e.messages[r.name], i.messages));
                        break;
                    case "remove":
                        return i ? (h = {}, n.each(i.split(/\s/), function(n, t) { h[t] = f[t], delete f[t] }), h) : (delete s[r.name], f)
                }
                return u = n.validator.normalizeRules(n.extend({}, n.validator.classRules(r), n.validator.attributeRules(r), n.validator.dataRules(r), n.validator.staticRules(r)), r), u.required && (o = u.required, delete u.required, u = n.extend({ required: o }, u)), u.remote && (o = u.remote, delete u.remote, u = n.extend(u, { remote: o })), u
            }
        }
    }), n.extend(n.expr.pseudos || n.expr[":"], { blank: function(t) { return !n.trim("" + n(t).val()) }, filled: function(t) { var i = n(t).val(); return null !== i && !!n.trim("" + i) }, unchecked: function(t) { return !n(t).prop("checked") } }), n.validator = function(t, i) { this.settings = n.extend(!0, {}, n.validator.defaults, t), this.currentForm = i, this.init() }, n.validator.format = function(t, i) { return 1 === arguments.length ? function() { var i = n.makeArray(arguments); return i.unshift(t), n.validator.format.apply(this, i) } : void 0 === i ? t : (arguments.length > 2 && i.constructor !== Array && (i = n.makeArray(arguments).slice(1)), i.constructor !== Array && (i = [i]), n.each(i, function(n, i) { t = t.replace(new RegExp("\\{" + n + "\\}", "g"), function() { return i }) }), t) }, n.extend(n.validator, {
        defaults: {
            messages: {},
            groups: {},
            rules: {},
            errorClass: "error",
            pendingClass: "pending",
            validClass: "valid",
            errorElement: "label",
            focusCleanup: !1,
            focusInvalid: !0,
            errorContainer: n([]),
            errorLabelContainer: n([]),
            onsubmit: !0,
            ignore: ":hidden",
            ignoreTitle: !1,
            onfocusin: function(n) { this.lastActive = n, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, n, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(n))) },
            onfocusout: function(n) { this.checkable(n) || !(n.name in this.submitted) && this.optional(n) || this.element(n) },
            onkeyup: function(t, i) {
                var r = [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225];
                9 === i.which && "" === this.elementValue(t) || n.inArray(i.keyCode, r) !== -1 || (t.name in this.submitted || t.name in this.invalid) && this.element(t)
            },
            onclick: function(n) { n.name in this.submitted ? this.element(n) : n.parentNode.name in this.submitted && this.element(n.parentNode) },
            highlight: function(t, i, r) { "radio" === t.type ? this.findByName(t.name).addClass(i).removeClass(r) : n(t).addClass(i).removeClass(r) },
            unhighlight: function(t, i, r) { "radio" === t.type ? this.findByName(t.name).removeClass(i).addClass(r) : n(t).removeClass(i).addClass(r) }
        },
        setDefaults: function(t) { n.extend(n.validator.defaults, t) },
        messages: { required: "This field is required.", remote: "Please fix this field.", email: "Please enter a valid email address.", url: "Please enter a valid URL.", date: "Please enter a valid date.", dateISO: "Please enter a valid date (ISO).", number: "Please enter a valid number.", digits: "Please enter only digits.", equalTo: "Please enter the same value again.", maxlength: n.validator.format("Please enter no more than {0} characters."), minlength: n.validator.format("Please enter at least {0} characters."), rangelength: n.validator.format("Please enter a value between {0} and {1} characters long."), range: n.validator.format("Please enter a value between {0} and {1}."), max: n.validator.format("Please enter a value less than or equal to {0}."), min: n.validator.format("Please enter a value greater than or equal to {0}."), step: n.validator.format("Please enter a multiple of {0}.") },
        autoCreateRanges: !1,
        prototype: {
            init: function() {
                function i(t) {
                    !this.form && this.hasAttribute("contenteditable") && (this.form = n(this).closest("form")[0], this.name = n(this).attr("name"));
                    var r = n.data(this.form, "validator"),
                        u = "on" + t.type.replace(/^validate/, ""),
                        i = r.settings;
                    i[u] && !n(this).is(i.ignore) && i[u].call(r, this, t)
                }
                this.labelContainer = n(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || n(this.currentForm), this.containers = n(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
                var t, r = this.groups = {};
                n.each(this.settings.groups, function(t, i) { "string" == typeof i && (i = i.split(/\s/)), n.each(i, function(n, i) { r[i] = t }) }), t = this.settings.rules, n.each(t, function(i, r) { t[i] = n.validator.normalizeRule(r) }), n(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']", i).on("click.validate", "select, option, [type='radio'], [type='checkbox']", i), this.settings.invalidHandler && n(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler)
            },
            form: function() { return this.checkForm(), n.extend(this.submitted, this.errorMap), this.invalid = n.extend({}, this.errorMap), this.valid() || n(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid() },
            checkForm: function() { this.prepareForm(); for (var n = 0, t = this.currentElements = this.elements(); t[n]; n++) this.check(t[n]); return this.valid() },
            element: function(t) {
                var e, o, r = this.clean(t),
                    i = this.validationTargetFor(r),
                    u = this,
                    f = !0;
                return void 0 === i ? delete this.invalid[r.name] : (this.prepareElement(i), this.currentElements = n(i), o = this.groups[i.name], o && n.each(this.groups, function(n, t) { t === o && n !== i.name && (r = u.validationTargetFor(u.clean(u.findByName(n))), r && r.name in u.invalid && (u.currentElements.push(r), f = u.check(r) && f)) }), e = this.check(i) !== !1, f = f && e, this.invalid[i.name] = e ? !1 : !0, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), n(t).attr("aria-invalid", !e)), f
            },
            showErrors: function(t) {
                if (t) {
                    var i = this;
                    n.extend(this.errorMap, t), this.errorList = n.map(this.errorMap, function(n, t) { return { message: n, element: i.findByName(t)[0] } }), this.successList = n.grep(this.successList, function(n) { return !(n.name in t) })
                }
                this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
            },
            resetForm: function() {
                n.fn.resetForm && n(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors();
                var t = this.elements().removeData("previousValue").removeAttr("aria-invalid");
                this.resetElements(t)
            },
            resetElements: function(n) {
                var t;
                if (this.settings.unhighlight)
                    for (t = 0; n[t]; t++) this.settings.unhighlight.call(this, n[t], this.settings.errorClass, ""), this.findByName(n[t].name).removeClass(this.settings.validClass);
                else n.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)
            },
            numberOfInvalids: function() { return this.objectLength(this.invalid) },
            objectLength: function(n) { var t, i = 0; for (t in n) void 0 !== n[t] && null !== n[t] && n[t] !== !1 && i++; return i },
            hideErrors: function() { this.hideThese(this.toHide) },
            hideThese: function(n) { n.not(this.containers).text(""), this.addWrapper(n).hide() },
            valid: function() { return 0 === this.size() },
            size: function() { return this.errorList.length },
            focusInvalid: function() { if (this.settings.focusInvalid) try { n(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin") } catch (t) {} },
            findLastActive: function() { var t = this.lastActive; return t && 1 === n.grep(this.errorList, function(n) { return n.element.name === t.name }).length && t },
            elements: function() {
                var t = this,
                    i = {};
                return n(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function() { var r = this.name || n(this).attr("name"); return !r && t.settings.debug && window.console && console.error("%o has no name assigned", this), this.hasAttribute("contenteditable") && (this.form = n(this).closest("form")[0], this.name = r), !(r in i || !t.objectLength(n(this).rules())) && (i[r] = !0, !0) })
            },
            clean: function(t) { return n(t)[0] },
            errors: function() { var t = this.settings.errorClass.split(" ").join("."); return n(this.settings.errorElement + "." + t, this.errorContext) },
            resetInternals: function() { this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = n([]), this.toHide = n([]) },
            reset: function() { this.resetInternals(), this.currentElements = n([]) },
            prepareForm: function() { this.reset(), this.toHide = this.errors().add(this.containers) },
            prepareElement: function(n) { this.reset(), this.toHide = this.errorsFor(n) },
            elementValue: function(t) {
                var i, r, f = n(t),
                    u = t.type;
                return "radio" === u || "checkbox" === u ? this.findByName(t.name).filter(":checked").val() : "number" === u && "undefined" != typeof t.validity ? t.validity.badInput ? "NaN" : f.val() : (i = t.hasAttribute("contenteditable") ? f.text() : f.val(), "file" === u ? "C:\\fakepath\\" === i.substr(0, 12) ? i.substr(12) : (r = i.lastIndexOf("/"), r >= 0 ? i.substr(r + 1) : (r = i.lastIndexOf("\\"), r >= 0 ? i.substr(r + 1) : i)) : "string" == typeof i ? i.replace(/\r/g, "") : i)
            },
            check: function(t) {
                t = this.validationTargetFor(this.clean(t));
                var u, f, r, e, i = n(t).rules(),
                    h = n.map(i, function(n, t) { return t }).length,
                    s = !1,
                    o = this.elementValue(t);
                if ("function" == typeof i.normalizer ? e = i.normalizer : "function" == typeof this.settings.normalizer && (e = this.settings.normalizer), e) {
                    if (o = e.call(t, o), "string" != typeof o) throw new TypeError("The normalizer should return a string value.");
                    delete i.normalizer
                }
                for (f in i) { r = { method: f, parameters: i[f] }; try { if (u = n.validator.methods[f].call(this, o, t, r.parameters), "dependency-mismatch" === u && 1 === h) { s = !0; continue } if (s = !1, "pending" === u) return void(this.toHide = this.toHide.not(this.errorsFor(t))); if (!u) return this.formatAndAdd(t, r), !1 } catch (c) { throw this.settings.debug && window.console && console.log("Exception occurred when checking element " + t.id + ", check the '" + r.method + "' method.", c), c instanceof TypeError && (c.message += ".  Exception occurred when checking element " + t.id + ", check the '" + r.method + "' method."), c; } }
                if (!s) return this.objectLength(i) && this.successList.push(t), !0
            },
            customDataMessage: function(t, i) { return n(t).data("msg" + i.charAt(0).toUpperCase() + i.substring(1).toLowerCase()) || n(t).data("msg") },
            customMessage: function(n, t) { var i = this.settings.messages[n]; return i && (i.constructor === String ? i : i[t]) },
            findDefined: function() {
                for (var n = 0; n < arguments.length; n++)
                    if (void 0 !== arguments[n]) return arguments[n]
            },
            defaultMessage: function(t, i) {
                "string" == typeof i && (i = { method: i });
                var r = this.findDefined(this.customMessage(t.name, i.method), this.customDataMessage(t, i.method), !this.settings.ignoreTitle && t.title || void 0, n.validator.messages[i.method], "<strong>Warning: No message defined for " + t.name + "</strong>"),
                    u = /\$?\{(\d+)\}/g;
                return "function" == typeof r ? r = r.call(this, i.parameters, t) : u.test(r) && (r = n.validator.format(r.replace(u, "{$1}"), i.parameters)), r
            },
            formatAndAdd: function(n, t) {
                var i = this.defaultMessage(n, t);
                this.errorList.push({ message: i, element: n, method: t.method }), this.errorMap[n.name] = i, this.submitted[n.name] = i
            },
            addWrapper: function(n) { return this.settings.wrapper && (n = n.add(n.parent(this.settings.wrapper))), n },
            defaultShowErrors: function() {
                for (var i, t, n = 0; this.errorList[n]; n++) t = this.errorList[n], this.settings.highlight && this.settings.highlight.call(this, t.element, this.settings.errorClass, this.settings.validClass), this.showLabel(t.element, t.message);
                if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
                    for (n = 0; this.successList[n]; n++) this.showLabel(this.successList[n]);
                if (this.settings.unhighlight)
                    for (n = 0, i = this.validElements(); i[n]; n++) this.settings.unhighlight.call(this, i[n], this.settings.errorClass, this.settings.validClass);
                this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
            },
            validElements: function() { return this.currentElements.not(this.invalidElements()) },
            invalidElements: function() { return n(this.errorList).map(function() { return this.element }) },
            showLabel: function(t, i) {
                var u, s, e, o, r = this.errorsFor(t),
                    h = this.idOrName(t),
                    f = n(t).attr("aria-describedby");
                r.length ? (r.removeClass(this.settings.validClass).addClass(this.settings.errorClass), r.html(i)) : (r = n("<" + this.settings.errorElement + ">").attr("id", h + "-error").addClass(this.settings.errorClass).html(i || ""), u = r, this.settings.wrapper && (u = r.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(u) : this.settings.errorPlacement ? this.settings.errorPlacement.call(this, u, n(t)) : u.insertAfter(t), r.is("label") ? r.attr("for", h) : 0 === r.parents("label[for='" + this.escapeCssMeta(h) + "']").length && (e = r.attr("id"), f ? f.match(new RegExp("\\b" + this.escapeCssMeta(e) + "\\b")) || (f += " " + e) : f = e, n(t).attr("aria-describedby", f), s = this.groups[t.name], s && (o = this, n.each(o.groups, function(t, i) { i === s && n("[name='" + o.escapeCssMeta(t) + "']", o.currentForm).attr("aria-describedby", r.attr("id")) })))), !i && this.settings.success && (r.text(""), "string" == typeof this.settings.success ? r.addClass(this.settings.success) : this.settings.success(r, t)), this.toShow = this.toShow.add(r)
            },
            errorsFor: function(t) {
                var r = this.escapeCssMeta(this.idOrName(t)),
                    u = n(t).attr("aria-describedby"),
                    i = "label[for='" + r + "'], label[for='" + r + "'] *";
                return u && (i = i + ", #" + this.escapeCssMeta(u).replace(/\s+/g, ", #")), this.errors().filter(i)
            },
            escapeCssMeta: function(n) { return n.replace(/([\\!"#$%&'()*+,.\/:;<=>?@\[\]^`{|}~])/g, "\\$1") },
            idOrName: function(n) { return this.groups[n.name] || (this.checkable(n) ? n.name : n.id || n.name) },
            validationTargetFor: function(t) { return this.checkable(t) && (t = this.findByName(t.name)), n(t).not(this.settings.ignore)[0] },
            checkable: function(n) { return /radio|checkbox/i.test(n.type) },
            findByName: function(t) { return n(this.currentForm).find("[name='" + this.escapeCssMeta(t) + "']") },
            getLength: function(t, i) {
                switch (i.nodeName.toLowerCase()) {
                    case "select":
                        return n("option:selected", i).length;
                    case "input":
                        if (this.checkable(i)) return this.findByName(i.name).filter(":checked").length
                }
                return t.length
            },
            depend: function(n, t) { return !this.dependTypes[typeof n] || this.dependTypes[typeof n](n, t) },
            dependTypes: { boolean: function(n) { return n }, string: function(t, i) { return !!n(t, i.form).length }, "function": function(n, t) { return n(t) } },
            optional: function(t) { var i = this.elementValue(t); return !n.validator.methods.required.call(this, i, t) && "dependency-mismatch" },
            startRequest: function(t) { this.pending[t.name] || (this.pendingRequest++, n(t).addClass(this.settings.pendingClass), this.pending[t.name] = !0) },
            stopRequest: function(t, i) { this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[t.name], n(t).removeClass(this.settings.pendingClass), i && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (n(this.currentForm).submit(), this.submitButton && n("input:hidden[name='" + this.submitButton.name + "']", this.currentForm).remove(), this.formSubmitted = !1) : !i && 0 === this.pendingRequest && this.formSubmitted && (n(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1) },
            previousValue: function(t, i) { return i = "string" == typeof i && i || "remote", n.data(t, "previousValue") || n.data(t, "previousValue", { old: null, valid: !0, message: this.defaultMessage(t, { method: i }) }) },
            destroy: function() { this.resetForm(), n(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur") }
        },
        classRuleSettings: { required: { required: !0 }, email: { email: !0 }, url: { url: !0 }, date: { date: !0 }, dateISO: { dateISO: !0 }, number: { number: !0 }, digits: { digits: !0 }, creditcard: { creditcard: !0 } },
        addClassRules: function(t, i) { t.constructor === String ? this.classRuleSettings[t] = i : n.extend(this.classRuleSettings, t) },
        classRules: function(t) {
            var i = {},
                r = n(t).attr("class");
            return r && n.each(r.split(" "), function() { this in n.validator.classRuleSettings && n.extend(i, n.validator.classRuleSettings[this]) }), i
        },
        normalizeAttributeRule: function(n, t, i, r) { /min|max|step/.test(i) && (null === t || /number|range|text/.test(t)) && (r = Number(r), isNaN(r) && (r = void 0)), r || 0 === r ? n[i] = r : t === i && "range" !== t && (n[i] = !0) },
        attributeRules: function(t) {
            var r, i, u = {},
                f = n(t),
                e = t.getAttribute("type");
            for (r in n.validator.methods) "required" === r ? (i = t.getAttribute(r), "" === i && (i = !0), i = !!i) : i = f.attr(r), this.normalizeAttributeRule(u, e, r, i);
            return u.maxlength && /-1|2147483647|524288/.test(u.maxlength) && delete u.maxlength, u
        },
        dataRules: function(t) {
            var i, r, u = {},
                f = n(t),
                e = t.getAttribute("type");
            for (i in n.validator.methods) r = f.data("rule" + i.charAt(0).toUpperCase() + i.substring(1).toLowerCase()), this.normalizeAttributeRule(u, e, i, r);
            return u
        },
        staticRules: function(t) {
            var i = {},
                r = n.data(t.form, "validator");
            return r.settings.rules && (i = n.validator.normalizeRule(r.settings.rules[t.name]) || {}), i
        },
        normalizeRules: function(t, i) {
            return n.each(t, function(r, u) {
                if (u === !1) return void delete t[r];
                if (u.param || u.depends) {
                    var f = !0;
                    switch (typeof u.depends) {
                        case "string":
                            f = !!n(u.depends, i.form).length;
                            break;
                        case "function":
                            f = u.depends.call(i, i)
                    }
                    f ? t[r] = void 0 === u.param || u.param : (n.data(i.form, "validator").resetElements(n(i)), delete t[r])
                }
            }), n.each(t, function(r, u) { t[r] = n.isFunction(u) && "normalizer" !== r ? u(i) : u }), n.each(["minlength", "maxlength"], function() { t[this] && (t[this] = Number(t[this])) }), n.each(["rangelength", "range"], function() {
                var i;
                t[this] && (n.isArray(t[this]) ? t[this] = [Number(t[this][0]), Number(t[this][1])] : "string" == typeof t[this] && (i = t[this].replace(/[\[\]]/g, "").split(/[\s,]+/), t[this] = [Number(i[0]), Number(i[1])]))
            }), n.validator.autoCreateRanges && (null != t.min && null != t.max && (t.range = [t.min, t.max], delete t.min, delete t.max), null != t.minlength && null != t.maxlength && (t.rangelength = [t.minlength, t.maxlength], delete t.minlength, delete t.maxlength)), t
        },
        normalizeRule: function(t) {
            if ("string" == typeof t) {
                var i = {};
                n.each(t.split(/\s/), function() { i[this] = !0 }), t = i
            }
            return t
        },
        addMethod: function(t, i, r) { n.validator.methods[t] = i, n.validator.messages[t] = void 0 !== r ? r : n.validator.messages[t], i.length < 3 && n.validator.addClassRules(t, n.validator.normalizeRule(t)) },
        methods: {
            required: function(t, i, r) { if (!this.depend(r, i)) return "dependency-mismatch"; if ("select" === i.nodeName.toLowerCase()) { var u = n(i).val(); return u && u.length > 0 } return this.checkable(i) ? this.getLength(t, i) > 0 : t.length > 0 },
            email: function(n, t) { return this.optional(t) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(n) },
            url: function(n, t) { return this.optional(t) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[\/?#]\S*)?$/i.test(n) },
            date: function(n, t) { return this.optional(t) || !/Invalid|NaN/.test(new Date(n).toString()) },
            dateISO: function(n, t) { return this.optional(t) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(n) },
            number: function(n, t) { return this.optional(t) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(n) },
            digits: function(n, t) { return this.optional(t) || /^\d+$/.test(n) },
            minlength: function(t, i, r) { var u = n.isArray(t) ? t.length : this.getLength(t, i); return this.optional(i) || u >= r },
            maxlength: function(t, i, r) { var u = n.isArray(t) ? t.length : this.getLength(t, i); return this.optional(i) || u <= r },
            rangelength: function(t, i, r) { var u = n.isArray(t) ? t.length : this.getLength(t, i); return this.optional(i) || u >= r[0] && u <= r[1] },
            min: function(n, t, i) { return this.optional(t) || n >= i },
            max: function(n, t, i) { return this.optional(t) || n <= i },
            range: function(n, t, i) { return this.optional(t) || n >= i[0] && n <= i[1] },
            step: function(t, i, r) {
                var u, f = n(i).attr("type"),
                    h = "Step attribute on input type " + f + " is not supported.",
                    c = ["text", "number", "range"],
                    l = new RegExp("\\b" + f + "\\b"),
                    a = f && !l.test(c.join()),
                    e = function(n) { var t = ("" + n).match(/(?:\.(\d+))?$/); return t && t[1] ? t[1].length : 0 },
                    o = function(n) { return Math.round(n * Math.pow(10, u)) },
                    s = !0;
                if (a) throw new Error(h);
                return u = e(r), (e(t) > u || o(t) % o(r) != 0) && (s = !1), this.optional(i) || s
            },
            equalTo: function(t, i, r) { var u = n(r); return this.settings.onfocusout && u.not(".validate-equalTo-blur").length && u.addClass("validate-equalTo-blur").on("blur.validate-equalTo", function() { n(i).valid() }), t === u.val() },
            remote: function(t, i, r, u) {
                if (this.optional(i)) return "dependency-mismatch";
                u = "string" == typeof u && u || "remote";
                var f, o, s, e = this.previousValue(i, u);
                return this.settings.messages[i.name] || (this.settings.messages[i.name] = {}), e.originalMessage = e.originalMessage || this.settings.messages[i.name][u], this.settings.messages[i.name][u] = e.message, r = "string" == typeof r && { url: r } || r, s = n.param(n.extend({ data: t }, r.data)), e.old === s ? e.valid : (e.old = s, f = this, this.startRequest(i), o = {}, o[i.name] = t, n.ajax(n.extend(!0, {
                    mode: "abort",
                    port: "validate" + i.name,
                    dataType: "json",
                    data: o,
                    context: f.currentForm,
                    success: function(n) {
                        var r, s, h, o = n === !0 || "true" === n;
                        f.settings.messages[i.name][u] = e.originalMessage, o ? (h = f.formSubmitted, f.resetInternals(), f.toHide = f.errorsFor(i), f.formSubmitted = h, f.successList.push(i), f.invalid[i.name] = !1, f.showErrors()) : (r = {}, s = n || f.defaultMessage(i, { method: u, parameters: t }), r[i.name] = e.message = s, f.invalid[i.name] = !0, f.showErrors(r)), e.valid = o, f.stopRequest(i, o)
                    }
                }, r)), "pending")
            }
        }
    });
    var i, t = {};
    return n.ajaxPrefilter ? n.ajaxPrefilter(function(n, i, r) { var u = n.port; "abort" === n.mode && (t[u] && t[u].abort(), t[u] = r) }) : (i = n.ajax, n.ajax = function(r) {
        var f = ("mode" in r ? r : n.ajaxSettings).mode,
            u = ("port" in r ? r : n.ajaxSettings).port;
        return "abort" === f ? (t[u] && t[u].abort(), t[u] = i.apply(this, arguments), t[u]) : i.apply(this, arguments)
    }), n
}),
function(n) {
    function i(n, t, i) { n.rules[t] = i, n.message && (n.messages[t] = n.message) }

    function h(n) { return n.replace(/^\s+|\s+$/g, "").split(/\s*,\s*/g) }

    function f(n) { return n.replace(/([!"#$%&'()*+,./:;<=>?@\[\\\]^`{|}~])/g, "\\$1") }

    function e(n) { return n.substr(0, n.lastIndexOf(".") + 1) }

    function o(n, t) { return n.indexOf("*.") === 0 && (n = n.replace("*.", t)), n }

    function c(t, i) {
        var r = n(this).find("[data-valmsg-for='" + f(i[0].name) + "']"),
            u = r.attr("data-valmsg-replace"),
            e = u ? n.parseJSON(u) !== !1 : null;
        r.removeClass("field-validation-valid").addClass("field-validation-error"), t.data("unobtrusiveContainer", r), e ? (r.empty(), t.removeClass("input-validation-error").appendTo(r)) : t.hide()
    }

    function l(t, i) {
        var u = n(this).find("[data-valmsg-summary=true]"),
            r = u.find("ul");
        r && r.length && i.errorList.length && (r.empty(), u.addClass("validation-summary-errors").removeClass("validation-summary-valid"), n.each(i.errorList, function() { n("<li />").html(this.message).appendTo(r) }))
    }

    function a(t) {
        var i = t.data("unobtrusiveContainer"),
            r = i.attr("data-valmsg-replace"),
            u = r ? n.parseJSON(r) : null;
        i && (i.addClass("field-validation-valid").removeClass("field-validation-error"), t.removeData("unobtrusiveContainer"), u && i.empty())
    }

    function v() {
        var t = n(this),
            i = "__jquery_unobtrusive_validation_form_reset";
        if (!t.data(i)) {
            t.data(i, !0);
            try { t.data("validator").resetForm() } finally { t.removeData(i) }
            t.find(".validation-summary-errors").addClass("validation-summary-valid").removeClass("validation-summary-errors"), t.find(".field-validation-error").addClass("field-validation-valid").removeClass("field-validation-error").removeData("unobtrusiveContainer").find(">*").removeData("unobtrusiveContainer")
        }
    }

    function s(t) {
        var i = n(t),
            f = i.data(u),
            s = n.proxy(v, t),
            e = r.unobtrusive.options || {},
            o = function(i, r) {
                var u = e[i];
                u && n.isFunction(u) && u.apply(t, r)
            };
        return f || (f = { options: { errorClass: e.errorClass || "input-validation-error", errorElement: e.errorElement || "span", errorPlacement: function() { c.apply(t, arguments), o("errorPlacement", arguments) }, invalidHandler: function() { l.apply(t, arguments), o("invalidHandler", arguments) }, messages: {}, rules: {}, success: function() { a.apply(t, arguments), o("success", arguments) } }, attachValidation: function() { i.off("reset." + u, s).on("reset." + u, s).validate(this.options) }, validate: function() { return i.validate(), i.valid() } }, i.data(u, f)), f
    }
    var r = n.validator,
        t, u = "unobtrusiveValidation";
    r.unobtrusive = {
        adapters: [],
        parseElement: function(t, i) {
            var u = n(t),
                f = u.parents("form")[0],
                r, e, o;
            f && (r = s(f), r.options.rules[t.name] = e = {}, r.options.messages[t.name] = o = {}, n.each(this.adapters, function() {
                var i = "data-val-" + this.name,
                    r = u.attr(i),
                    s = {};
                r !== undefined && (i += "-", n.each(this.params, function() { s[this] = u.attr(i + this) }), this.adapt({ element: t, form: f, message: r, params: s, rules: e, messages: o }))
            }), n.extend(e, { __dummy__: !0 }), !i && r.attachValidation())
        },
        parse: function(t) {
            var i = n(t),
                u = i.parents().addBack().filter("form").add(i.find("form")).has("[data-val=true]");
            i.find("[data-val=true]").each(function() { r.unobtrusive.parseElement(this, !0) }), u.each(function() {
                var n = s(this);
                n && n.attachValidation()
            })
        }
    }, t = r.unobtrusive.adapters, t.add = function(n, t, i) { return i || (i = t, t = []), this.push({ name: n, params: t, adapt: i }), this }, t.addBool = function(n, t) { return this.add(n, function(r) { i(r, t || n, !0) }) }, t.addMinMax = function(n, t, r, u, f, e) {
        return this.add(n, [f || "min", e || "max"], function(n) {
            var f = n.params.min,
                e = n.params.max;
            f && e ? i(n, u, [f, e]) : f ? i(n, t, f) : e && i(n, r, e)
        })
    }, t.addSingleVal = function(n, t, r) { return this.add(n, [t || "val"], function(u) { i(u, r || n, u.params[t]) }) }, r.addMethod("__dummy__", function() { return !0 }), r.addMethod("regex", function(n, t, i) { var r; return this.optional(t) ? !0 : (r = new RegExp(i).exec(n), r && r.index === 0 && r[0].length === n.length) }), r.addMethod("nonalphamin", function(n, t, i) { var r; return i && (r = n.match(/\W/g), r = r && r.length >= i), r }), r.methods.extension ? (t.addSingleVal("accept", "mimtype"), t.addSingleVal("extension", "extension")) : t.addSingleVal("extension", "extension", "accept"), t.addSingleVal("regex", "pattern"), t.addBool("creditcard").addBool("date").addBool("digits").addBool("email").addBool("number").addBool("url"), t.addMinMax("length", "minlength", "maxlength", "rangelength").addMinMax("range", "min", "max", "range"), t.addMinMax("minlength", "minlength").addMinMax("maxlength", "minlength", "maxlength"), t.add("equalto", ["other"], function(t) {
        var r = e(t.element.name),
            u = t.params.other,
            s = o(u, r),
            h = n(t.form).find(":input").filter("[name='" + f(s) + "']")[0];
        i(t, "equalTo", h)
    }), t.add("required", function(n) {
        (n.element.tagName.toUpperCase() !== "INPUT" || n.element.type.toUpperCase() !== "CHECKBOX") && i(n, "required", !0)
    }), t.add("remote", ["url", "type", "additionalfields"], function(t) {
        var r = { url: t.params.url, type: t.params.type || "GET", data: {} },
            u = e(t.element.name);
        n.each(h(t.params.additionalfields || t.element.name), function(i, e) {
            var s = o(e, u);
            r.data[s] = function() { var i = n(t.form).find(":input").filter("[name='" + f(s) + "']"); return i.is(":checkbox") ? i.filter(":checked").val() || i.filter(":hidden").val() || "" : i.is(":radio") ? i.filter(":checked").val() || "" : i.val() }
        }), i(t, "remote", r)
    }), t.add("password", ["min", "nonalphamin", "regex"], function(n) { n.params.min && i(n, "minlength", n.params.min), n.params.nonalphamin && i(n, "nonalphamin", n.params.nonalphamin), n.params.regex && i(n, "regex", n.params.regex) }), n(function() { r.unobtrusive.parse(document) })
}(jQuery), window.matchMedia = window.matchMedia || function(n) {
        var r = n.documentElement,
            s = r.firstElementChild || r.firstChild,
            u = n.createElement("body"),
            i = n.createElement("div");
        i.id = "mq-test-1", i.style.cssText = "position:absolute;top:-100em", u.style.background = "none", u.appendChild(i);
        var e = function(n) { return i.innerHTML = '&shy;<style media="' + n + '"> #mq-test-1 { width: 42px; }</style>', r.insertBefore(u, s), bool = i.offsetWidth === 42, r.removeChild(u), { matches: bool, media: n } },
            o = function() {
                var u, t = r.body,
                    e = !1;
                return i.style.cssText = "position:absolute;font-size:1em;width:1em", t || (t = e = n.createElement("body"), t.style.background = "none"), t.appendChild(i), r.insertBefore(t, r.firstChild), e ? r.removeChild(t) : t.removeChild(i), u = f = parseFloat(i.offsetWidth)
            },
            f, h = e("(min-width: 0px)").matches;
        return function(n) {
            if (h) return e(n);
            var t = n.match(/\(min\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || ""),
                i = n.match(/\(max\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || ""),
                r = t === null,
                u = i === null,
                s = $(window).width(),
                c = "em";
            return !t || (t = parseFloat(t) * (t.indexOf(c) > -1 ? f || o() : 1)), !i || (i = parseFloat(i) * (i.indexOf(c) > -1 ? f || o() : 1)), bool = (!r || !u) && (r || s >= t) && (u || s <= i), { matches: bool, media: n }
        }
    }(document),
    function(n) {
        function d() { e(!0) }
        if (n.respond = {}, respond.update = function() {}, respond.mediaQueriesSupported = n.matchMedia && n.matchMedia("only all").matches, !respond.mediaQueriesSupported) {
            var t = n.document,
                i = t.documentElement,
                a = [],
                u = [],
                r = [],
                l = {},
                v = 30,
                f = t.getElementsByTagName("head")[0] || i,
                nt = t.getElementsByTagName("base")[0],
                c = f.getElementsByTagName("link"),
                h = [],
                y = function() {
                    for (var f = c, o = f.length, r = 0, t, i, u, e; r < o; r++) t = f[r], i = t.href, u = t.media, e = t.rel && t.rel.toLowerCase() === "stylesheet", !i || !e || l[i] || (t.styleSheet && t.styleSheet.rawCssText ? (w(t.styleSheet.rawCssText, i, u), l[i] = !0) : (!/^([a-zA-Z:]*\/\/)/.test(i) && !nt || i.replace(RegExp.$1, "").split("/")[0] === n.location.host) && h.push({ href: i, media: u }));
                    p()
                },
                p = function() {
                    if (h.length) {
                        var n = h.shift();
                        g(n.href, function(t) { w(t, n.href, n.media), l[n.href] = !0, p() })
                    }
                },
                w = function(n, t, i) {
                    var o = n.match(/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi),
                        s = o && o.length || 0,
                        t = t.substring(0, t.lastIndexOf("/")),
                        v = function(n) { return n.replace(/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g, "$1" + t + "$2$3") },
                        y = !s && i,
                        h = 0,
                        f, c, r, l, p;
                    for (t.length && (t += "/"), y && (s = 1); h < s; h++)
                        for (f = 0, y ? (c = i, u.push(v(n))) : (c = o[h].match(/@media *([^\{]+)\{([\S\s]+?)$/) && RegExp.$1, u.push(RegExp.$2 && v(RegExp.$2))), l = c.split(","), p = l.length; f < p; f++) r = l[f], a.push({ media: r.split("(")[0].match(/(only\s+)?([a-zA-Z]+)\s?/) && RegExp.$2 || "all", rules: u.length - 1, hasquery: r.indexOf("(") > -1, minw: r.match(/\(min\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || ""), maxw: r.match(/\(max\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || "") });
                    e()
                },
                s, b, k = function() {
                    var r, u = t.createElement("div"),
                        n = t.body,
                        f = !1;
                    return u.style.cssText = "position:absolute;font-size:1em;width:1em", n || (n = f = t.createElement("body"), n.style.background = "none"), n.appendChild(u), i.insertBefore(n, i.firstChild), r = u.offsetWidth, f ? i.removeChild(n) : n.removeChild(u), r = o = parseFloat(r)
                },
                o, e = function(n) {
                    var nt = "clientWidth",
                        tt = i[nt],
                        it = t.compatMode === "CSS1Compat" && tt || t.body[nt] || tt,
                        d = {},
                        ot = c[c.length - 1],
                        rt = +new Date,
                        h, l, g;
                    if (n && s && rt - s < v) { clearTimeout(b), b = setTimeout(e, v); return }
                    s = rt;
                    for (h in a) {
                        var y = a[h],
                            p = y.minw,
                            w = y.maxw,
                            ut = p === null,
                            ft = w === null,
                            et = "em";
                        !p || (p = parseFloat(p) * (p.indexOf(et) > -1 ? o || k() : 1)), !w || (w = parseFloat(w) * (w.indexOf(et) > -1 ? o || k() : 1)), (!y.hasquery || (!ut || !ft) && (ut || it >= p) && (ft || it <= w)) && (d[y.media] || (d[y.media] = []), d[y.media].push(u[y.rules]))
                    }
                    for (h in r) r[h] && r[h].parentNode === f && f.removeChild(r[h]);
                    for (h in d) l = t.createElement("style"), g = d[h].join("\n"), l.type = "text/css", l.media = h, f.insertBefore(l, ot.nextSibling), l.styleSheet ? l.styleSheet.cssText = g : l.appendChild(t.createTextNode(g)), r.push(l)
                },
                g = function(n, t) {
                    var i = tt();
                    i && (i.open("GET", n, !0), i.onreadystatechange = function() { i.readyState == 4 && (i.status == 200 || i.status == 304) && t(i.responseText) }, i.readyState != 4) && i.send(null)
                },
                tt = function() { var n = !1; try { n = new XMLHttpRequest } catch (t) { n = new ActiveXObject("Microsoft.XMLHTTP") } return function() { return n } }();
            y(), respond.update = y, n.addEventListener ? n.addEventListener("resize", d, !1) : n.attachEvent && n.attachEvent("onresize", d)
        }
    }(this),
    function(n, t, i) {
        "$:nomunge";

        function r(r, u) {
            function o(t) {
                n(f).each(function() {
                    var i = n(this);
                    this !== t.target && !i.has(t.target).length && i.triggerHandler(u, [t.target])
                })
            }
            u = u || r + i;
            var f = n(),
                e = r + "." + u + "-special-event";
            n.event.special[u] = {
                setup: function() { f = f.add(this), f.length === 1 && n(t).on(e, o) },
                teardown: function() { f = f.not(this), f.length === 0 && n(t).off(e) },
                add: function(n) {
                    var t = n.handler;
                    n.handler = function(n, i) { n.target = i, t.apply(this, arguments) }
                }
            }
        }
        n.map("click dblclick mousemove mousedown mouseup mouseover mouseout change select submit keydown keypress keyup".split(" "), function(n) { r(n) }), r("focusin", "focus" + i), r("focusout", "blur" + i), n.addOutsideEvent = r
    }(jQuery, document, "outside"),
    function(e) { return }(this), navigator.userAgent || navigator.vendor || window.opera,
    function(n) {
        n.fn.superfish = function(t) {
            var i = n.fn.superfish,
                r = i.c,
                o = n(['<span class="', r.arrowClass, '"></span>'].join("")),
                u = function() {
                    var t = n(this),
                        i = e(t);
                    clearTimeout(i.sfTimer), t.showSuperfishUl().siblings().hideSuperfishUl()
                },
                f = function() {
                    var r = n(this),
                        f = e(r),
                        t = i.op;
                    clearTimeout(f.sfTimer), f.sfTimer = setTimeout(function() { t.retainPath = n.inArray(r[0], t.$path) > -1, r.hideSuperfishUl(), t.$path.length && r.parents(["li.", t.hoverClass].join("")).length < 1 && u.call(t.$path) }, t.delay)
                },
                e = function(n) { var t = n.parents(["ul.", r.menuClass, ":first"].join(""))[0]; return i.op = i.o[t.serial], t },
                s = function(n) { n.addClass(r.anchorClass).append(o.clone()) };
            return this.each(function() {
                var h = this.serial = i.o.length,
                    e = n.extend({}, i.defaults, t),
                    o;
                e.$path = n("li." + e.pathClass, this).slice(0, e.pathLevels).each(function() { n(this).addClass([e.hoverClass, r.bcClass].join(" ")).filter("li:has(ul)").removeClass(e.pathClass) }), i.o[h] = i.op = e, n("li:has(ul)", this)[n.fn.hoverIntent && !e.disableHI ? "hoverIntent" : "hover"](u, f).each(function() { e.autoArrows && s(n(">a:first-child", this)) }).not("." + r.bcClass).hideSuperfishUl(), o = n("a", this), o.each(function(n) {
                    var t = o.eq(n).parents("li");
                    o.eq(n).focus(function() { u.call(t) }).blur(function() { f.call(t) })
                }), e.onInit.call(this)
            }).each(function() {
                var t = [r.menuClass];
                i.op.dropShadows && !(n.browser.msie && n.browser.version < 7) && t.push(r.shadowClass), n(this).addClass(t.join(" "))
            })
        };
        var t = n.fn.superfish;
        t.o = [], t.op = {}, t.IE7fix = function() {
            var i = t.op;
            n.browser.msie && n.browser.version > 6 && i.dropShadows && i.animation.opacity != undefined && this.toggleClass(t.c.shadowClass + "-off")
        }, t.c = { bcClass: "sf-breadcrumb", menuClass: "sf-js-enabled", anchorClass: "sf-with-ul", arrowClass: "sf-sub-indicator", shadowClass: "sf-shadow" }, t.defaults = { hoverClass: "sfHover", pathClass: "overideThisToUse", pathLevels: 1, delay: 800, animation: { opacity: "show" }, speed: "normal", autoArrows: !0, dropShadows: !0, disableHI: !1, onInit: function() {}, onBeforeShow: function() {}, onShow: function() {}, onHide: function() {} }, n.fn.extend({
            hideSuperfishUl: function() {
                var i = t.op,
                    u = i.retainPath === !0 ? i.$path : "",
                    r;
                return i.retainPath = !1, r = n(["li.", i.hoverClass].join(""), this).add(this).not(u).removeClass(i.hoverClass).find(">ul").hide().css("visibility", "hidden"), i.onHide.call(r), this
            },
            showSuperfishUl: function() {
                var n = t.op,
                    r = t.c.shadowClass + "-off",
                    i = this.addClass(n.hoverClass).find(">ul:hidden").css("visibility", "visible");
                return t.IE7fix.call(i), n.onBeforeShow.call(i), i.animate(n.animation, n.speed, function() { t.IE7fix.call(i), n.onShow.call(i) }), this
            }
        })
    }(jQuery), FORMALIZE = function(n, t, i) {
        function u(n) { var t = i.createElement("b"); return t.innerHTML = "<!--[if IE " + n + "]><br><![endif]-->", !!t.getElementsByTagName("br").length }
        var f = "placeholder" in i.createElement("input"),
            e = "autofocus" in i.createElement("input"),
            o = u(6),
            s = u(7);
        return {
            go: function() { var n, t = this.init; for (n in t) t.hasOwnProperty(n) && t[n]() },
            init: {
                disable_link_button: function() { n(i.documentElement).on("click", "a.button_disabled", function() { return !1 }) },
                full_input_size: function() { s && n("textarea, input.input_full").length && n("textarea, input.input_full").wrap('<span class="input_full_wrap"></span>') },
                ie6_skin_inputs: function() {
                    if (o && n("input, select, textarea").length) {
                        var t = /button|submit|reset/,
                            i = /date|datetime|datetime-local|email|month|number|password|range|search|tel|text|time|url|week/;
                        n("input").each(function() {
                            var r = n(this);
                            this.getAttribute("type").match(t) ? (r.addClass("ie6_button"), this.disabled && r.addClass("ie6_button_disabled")) : this.getAttribute("type").match(i) && (r.addClass("ie6_input"), this.disabled && r.addClass("ie6_input_disabled"))
                        }), n("textarea, select").each(function() { this.disabled && n(this).addClass("ie6_input_disabled") })
                    }
                },
                autofocus: function() {
                    if (!e && n(":input[autofocus]").length) {
                        var t = n("[autofocus]")[0];
                        t.disabled || t.focus()
                    }
                },
                placeholder: function() {
                    !f && n(":input[placeholder]").length && (FORMALIZE.misc.add_placeholder(), n(":input[placeholder]").each(function() {
                        if (this.type !== "password") {
                            var t = n(this),
                                i = t.attr("placeholder");
                            t.focus(function() { t.val() === i && t.val("").removeClass("placeholder_text") }).blur(function() { FORMALIZE.misc.add_placeholder() });
                            t.closest("form").submit(function() { t.val() === i && t.val("").removeClass("placeholder_text") }).on("reset", function() { setTimeout(FORMALIZE.misc.add_placeholder, 50) })
                        }
                    }))
                }
            },
            misc: {
                add_placeholder: function() {
                    !f && n(":input[placeholder]").length && n(":input[placeholder]").each(function() {
                        if (this.type !== "password") {
                            var t = n(this),
                                i = t.attr("placeholder");
                            (!t.val() || t.val() === i) && t.val(i).addClass("placeholder_text")
                        }
                    })
                }
            }
        }
    }(jQuery, this, this.document), jQuery(document).ready(function() { FORMALIZE.go() }),
    function() {
        var n, t = [].indexOf || function(n) {
            for (var t = 0, i = this.length; t < i; t++)
                if (t in this && this[t] === n) return t;
            return -1
        };
        n = jQuery, n.fn.validateCreditCard = function(i) {
            var u, f, e, o, s, r, h;
            u = [{ name: "amex", pattern: /^3[47]/, valid_length: [15] }, { name: "diners_club_carte_blanche", pattern: /^30[0-5]/, valid_length: [14] }, { name: "diners_club_international", pattern: /^36/, valid_length: [14] }, { name: "jcb", pattern: /^35(2[89]|[3-8][0-9])/, valid_length: [16] }, { name: "laser", pattern: /^(6304|670[69]|6771)/, valid_length: [16, 17, 18, 19] }, { name: "visa_electron", pattern: /^(4026|417500|4508|4844|491(3|7))/, valid_length: [16] }, { name: "visa", pattern: /^4/, valid_length: [16] }, { name: "mastercard", pattern: /^5[1-5]/, valid_length: [16] }, { name: "maestro", pattern: /^(5018|5020|5038|6304|6759|676[1-3])/, valid_length: [12, 13, 14, 15, 16, 17, 18, 19] }, { name: "discover", pattern: /^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)/, valid_length: [16] }], f = function(n) {
                for (var i, t = 0, r = u.length; t < r; t++)
                    if (i = u[t], n.match(i.pattern)) return i;
                return null
            }, o = function(n) { for (var t, u, i = 0, f = n.split("").reverse(), r = u = 0, e = f.length; u < e; r = ++u) t = f[r], t = +t, r % 2 ? (t *= 2, i += t < 10 ? t : t - 9) : i += t; return i % 10 == 0 }, e = function(n, i) { var r; return r = n.length, t.call(i.valid_length, r) >= 0 }, h = function(n) { var t, r, u; return t = f(n), u = !1, r = !1, t != null && (u = o(n), r = e(n, t)), i({ card_type: t, luhn_valid: u, length_valid: r }) }, r = function() { var t; return t = s(n(this).val()), h(t) }, s = function(n) { return n.replace(/[ -]/g, "") };
            this.on("input", function() { return n(this).off("keyup"), r.call(this) });
            this.on("keyup", function() { return r.call(this) });
            return this.length !== 0 && r.call(this), this
        }
    }.call(this),
    function(n) {
        "use strict";

        function i(n) { n.condition() || (typeof n.exit == "function" && n.exit(), n.is_active = !1) }

        function r(n) { n.condition() && (typeof n.first_enter == "function" && (n.first_enter(), delete n.first_enter), typeof n.enter == "function" && n.enter(), n.is_active = !0) }

        function u(n) { n.is_active ? i(n) : r(n) }

        function f() {
            var u = n.grep(t, function(n) { return n.is_active }),
                f = n.grep(t, function(n) { return !n.is_active });
            n.each(u, function(n, t) { i(t) }), n.each(f, function(n, t) { r(t) })
        }
        var t = [];
        n.breakpoint = function(i, r) { r = n.extend(!0, {}, n.breakpoint.defaults, r), t.push(i), t.length === 1 && n(window).on("resize orientationchange", function() { f() }), u(i) }, n.breakpoint.breakpoints = t, n.breakpoint.defaults = {}
    }(jQuery), jQuery.fn.customInput = function() {
        $(this).each(function() {
            var u;
            if ($(this).is("[type=checkbox],[type=radio]")) {
                var t = $(this),
                    i = $("label[for=" + t.attr("id") + "]"),
                    r = t.is("[type=checkbox]") ? "checkbox" : "radio";
                $('<div class="custom-' + r + '"></div>').insertBefore(t).append(t, i), u = $("input[name=" + t.attr("name") + "]"), i.hover(function() { $(this).addClass("hover"), r == "checkbox" && t.is(":checked") && $(this).addClass("checkedHover") }, function() { $(this).removeClass("hover checkedHover") }), t.on("updateState", function() { t.is(":checked") ? (t.is(":radio") && u.each(function() { $("label[for=" + $(this).attr("id") + "]").removeClass("checked") }), i.addClass("checked")) : i.removeClass("checked checkedHover checkedFocus") }).trigger("updateState").click(function() { $(this).trigger("updateState") }).focus(function() { i.addClass("focus"), r == "checkbox" && t.is(":checked") && $(this).addClass("checkedFocus") }).blur(function() { i.removeClass("focus checkedFocus") })
            }
        })
    },
    function(n) {
        var s = { topSpacing: 0, bottomSpacing: 0, className: "is-sticky", wrapperClassName: "sticky-wrapper" },
            r = n(window),
            h = n(document),
            t = [],
            e = r.height(),
            u = !1,
            i = function() {
                for (var f = r.scrollTop(), s = h.height(), l = s - e, a = f > l ? l - f : 0, i, o = 0; o < t.length; o++) {
                    var n = t[o],
                        v = n.stickyWrapper.offset().top,
                        y = v - n.topSpacing - a;
                    u || f <= y ? n.currentTop !== null && (n.stickyElement.css("position", "").css("top", "").removeClass(n.className), n.stickyElement.parent().removeClass(n.className), n.currentTop = null) : (i = s - n.stickyElement.outerHeight() - n.topSpacing - c(n) - f - a, i < 0 ? i += n.topSpacing : i = n.topSpacing, n.currentTop != i && (n.stickyElement.css("position", "fixed").css("top", i).addClass(n.className), n.stickyElement.parent().addClass(n.className), n.currentTop = i))
                }
            },
            o = function() { e = r.height() },
            c = function() { return n("section.summary").length ? n(window).width() < 950 ? n(document).height() - n("section.summary").position().top + 30 : n(document).height() - n("section.peripherals").position().top + 60 : n("#undefined-sticky-wrapper div.shop-by-dept") ? n(window).width() < 950 ? n(document).height() - n("#content").position().top + 30 : n(document).height() - n(".peripherals").position().top + 82 : void 0 },
            f = {
                init: function(i) {
                    var r = n.extend(s, i);
                    return this.each(function() {
                        var i = n(this),
                            u;
                        stickyId = i.attr("id"), wrapper = n("<div></div>").attr("id", stickyId + "-sticky-wrapper").addClass(r.wrapperClassName), i.wrapAll(wrapper), u = i.parent(), u.css("height", i.outerHeight()), t.push({ topSpacing: r.topSpacing, bottomSpacing: r.bottomSpacing, stickyElement: i, currentTop: null, stickyWrapper: u, className: r.className, breakPoint: null })
                    })
                },
                update: i,
                disable: function() { var i, n; for (u = !0, i = 0; i < t.length; i++) n = t[i], n.currentTop !== null && (n.stickyElement.css("position", "").css("top", "").removeClass(n.className), n.stickyElement.parent().removeClass(n.className), n.currentTop = null) },
                enable: function() { u = !1, i() },
                changeBottom: function(i) { n(t).each(function() { this.className == "sticky-summary-box" && (this.bottomSpacing = i) }) },
                changeBreak: function(r) { n(t).each(function() { this.className == "sticky-summary-box" && (this.breakPoint = r, i()) }) }
            };
        window.addEventListener ? (window.addEventListener("scroll", i, !1), window.addEventListener("resize", o, !1)) : window.attachEvent && (window.attachEvent("onscroll", i), window.attachEvent("onresize", o)), n.fn.sticky = function(t) {
            if (f[t]) return f[t].apply(this, Array.prototype.slice.call(arguments, 1));
            if (typeof t == "object" || !t) return f.init.apply(this, arguments);
            n.error("Method " + t + " does not exist on jQuery.sticky")
        }, n(function() { setTimeout(i, 0) })
    }(jQuery), foolproof = function() {}, foolproof.is = function(n, t, i, r) {
        if (r) {
            var u = function(n) { return n == null || n == undefined || n == "" },
                f = u(n),
                e = u(i);
            if (f && !e || e && !f) return !0
        }
        var o = function(n) { return +n == n && n.length > 0 },
            s = function(n) { var t = new RegExp(/(?=\d)^(?:(?!(?:10\D(?:0?[5-9]|1[0-4])\D(?:1582))|(?:0?9\D(?:0?[3-9]|1[0-3])\D(?:1752)))((?:0?[13578]|1[02])|(?:0?[469]|11)(?!\/31)(?!-31)(?!\.31)|(?:0?2(?=.?(?:(?:29.(?!000[04]|(?:(?:1[^0-6]|[2468][^048]|[3579][^26])00))(?:(?:(?:\d\d)(?:[02468][048]|[13579][26])(?!\x20BC))|(?:00(?:42|3[0369]|2[147]|1[258]|09)\x20BC))))))|(?:0?2(?=.(?:(?:\d\D)|(?:[01]\d)|(?:2[0-8])))))([-.\/])(0?[1-9]|[12]\d|3[01])\2(?!0000)((?=(?:00(?:4[0-5]|[0-3]?\d)\x20BC)|(?:\d{4}(?!\x20BC)))\d{4}(?:\x20BC)?)(?:$|(?=\x20\d)\x20))?((?:(?:0?[1-9]|1[012])(?::[0-5]\d){0,2}(?:\x20[aApP][mM]))|(?:[01]\d|2[0-3])(?::[0-5]\d){1,2})?$/); return t.test(n) },
            h = function(n) { return n === !0 || n === !1 || n === "true" || n === "false" };
        s(n) ? (n = Date.parse(n), i = Date.parse(i)) : h(n) ? (n == "false" && (n = !1), i == "false" && (i = !1), n = !!n, i = !!i) : o(n) && (n = parseFloat(n), i = parseFloat(i));
        switch (t) {
            case "EqualTo":
                if (n == i) return !0;
                break;
            case "NotEqualTo":
                if (n != i) return !0;
                break;
            case "GreaterThan":
                if (n > i) return !0;
                break;
            case "LessThan":
                if (n < i) return !0;
                break;
            case "GreaterThanOrEqualTo":
                if (n >= i) return !0;
                break;
            case "LessThanOrEqualTo":
                if (n <= i) return !0;
                break;
            case "RegExMatch":
                return new RegExp(i).test(n);
            case "NotRegExMatch":
                return !new RegExp(i).test(n)
        }
        return !1
    }, foolproof.getId = function(n, t) { var i = n.id.lastIndexOf("_") + 1; return n.id.substr(0, i) + t.replace(/\./g, "_") }, foolproof.getName = function(n, t) { var i = n.name.lastIndexOf(".") + 1; return n.name.substr(0, i) + t },
    function() {
        jQuery.validator.addMethod("is", function(n, t, i) {
            var r = foolproof.getId(t, i.dependentproperty),
                u = i.operator,
                f = i.passonnull,
                e = document.getElementById(r).value;
            return foolproof.is(n, u, e, f) ? !0 : !1
        }), jQuery.validator.addMethod("requiredif", function(n, t, i) {
            var o = foolproof.getName(t, i.dependentproperty),
                s = i.dependentvalue,
                h = i.operator,
                e = i.pattern,
                r = document.getElementsByName(o),
                u = null,
                f;
            if (r.length > 1) {
                for (f = 0; f != r.length; f++)
                    if (r[f].checked) { u = r[f].value; break }
                u == null && (u = !1)
            } else u = r[0].value;
            if (foolproof.is(u, h, s))
                if (e == null) { if (n != null && n.toString().replace(/^\s\s*/, "").replace(/\s\s*$/, "") != "") return !0 } else return new RegExp(e).test(n);
            else return !0;
            return !1
        }), jQuery.validator.addMethod("requiredifempty", function(n, t, i) {
            var u = foolproof.getId(t, i.dependentproperty),
                r = document.getElementById(u).value;
            if (r == null || r.toString().replace(/^\s\s*/, "").replace(/\s\s*$/, "") == "") { if (n != null && n.toString().replace(/^\s\s*/, "").replace(/\s\s*$/, "") != "") return !0 } else return !0;
            return !1
        }), jQuery.validator.addMethod("requiredifnotempty", function(n, t, i) {
            var u = foolproof.getId(t, i.dependentproperty),
                r = document.getElementById(u).value;
            if (r != null && r.toString().replace(/^\s\s*/, "").replace(/\s\s*$/, "") != "") { if (n != null && n.toString().replace(/^\s\s*/, "").replace(/\s\s*$/, "") != "") return !0 } else return !0;
            return !1
        });
        var n = function(n, t, i) { n.rules[t] = i, n.message && (n.messages[t] = n.message) },
            t = $.validator.unobtrusive;
        t.adapters.add("requiredif", ["dependentproperty", "dependentvalue", "operator", "pattern"], function(t) {
            var i = { dependentproperty: t.params.dependentproperty, dependentvalue: t.params.dependentvalue, operator: t.params.operator, pattern: t.params.pattern };
            n(t, "requiredif", i)
        }), t.adapters.add("is", ["dependentproperty", "operator", "passonnull"], function(t) { n(t, "is", { dependentproperty: t.params.dependentproperty, operator: t.params.operator, passonnull: t.params.passonnull }) }), t.adapters.add("requiredifempty", ["dependentproperty"], function(t) { n(t, "requiredifempty", { dependentproperty: t.params.dependentproperty }) }), t.adapters.add("requiredifnotempty", ["dependentproperty"], function(t) { n(t, "requiredifnotempty", { dependentproperty: t.params.dependentproperty }) })
    }(),
    function(n) {
        var t = {
            Config: { sImgPath: "/a/img/", sHTMLtag: "js", newShippingAddressURL: "https://www.a.com/", newBillingAddressURL: "https://www.a.com/", iOSTimerEnabled: !1 },
            init: function() {
                var r = t,
                    i = r.Project;
                n(document).ready(function() { i.tagIt(), i.raiseMobileToolbar(), i.custInputs(), i.initFooterCouponList() })
            },
            Project: {
                tagIt: function() {
                    var i = t;
                    n("html").addClass("js").removeClass("no-js")
                },
                raiseMobileToolbar: function() {
                    (function(n) {
                        var t = n.document;
                        if (!location.hash && n.addEventListener) {
                            window.scrollTo(0, 1);
                            var i = 1,
                                r = function() { return n.pageYOffset || t.compatMode === "CSS1Compat" && t.documentElement.scrollTop || t.body.scrollTop || 0 },
                                u = setInterval(function() { t.body && (clearInterval(u), i = r(), n.scrollTo(0, i === 1 ? 0 : 1)) }, 15);
                            n.addEventListener("load", function() { setTimeout(function() { n.scrollTo(0, i === 1 ? 0 : 1) }, 0) })
                        }
                    })(this)
                },
                custInputs: function() { n(".standard-form input").customInput() },
                initFooterCouponList: function(t) {
                    var i = this.initFooterCouponList.bind(this),
                        r = function(n) { n.forEach(function(n) { n.isIntersecting && loadScript("//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js", function() { footerObserver.unobserve(n.target) }) }) };
                    window.IntersectionObserver ? (footerObserver = new IntersectionObserver(r, { rootMargin: "0px 0px 0px 0px" }), n(".affiliates").each(function(n, t) { footerObserver.observe(t) })) : t || loadScript("/Scripts/intersection-observer-polyfill.js", function() { i(!0) })
                }
            }
        };
        t.init(), jQuery.event.special.touchstart = { setup: function(n, t, i) { this.addEventListener("touchstart", i, { passive: !t.includes("noPreventDefault") }) } }, jQuery.event.special.touchmove = { setup: function(n, t, i) { this.addEventListener("touchmove", i, { passive: !t.includes("noPreventDefault") }) } }, jQuery.event.special.wheel = { setup: function(n, t, i) { this.addEventListener("wheel", i, { passive: !0 }) } }, jQuery.event.special.mousewheel = { setup: function(n, t, i) { this.addEventListener("mousewheel", i, { passive: !0 }) } }
    }(jQuery);
var brandLoc = -1,
    productLoc = -1,
    tmpImages = [];
supportWebp = !1, $(function() {
        function e() { var n = document.createElement("canvas"); return n.getContext && n.getContext("2d") ? n.toDataURL("image/webp").indexOf("data:image/webp") == 0 : !1 }
        var t = window.location.pathname,
            n, f, r, u;
        if (t.indexOf("/products/") > -1 && (t.indexOf("category.html") || t.indexOf("products.html")) ? (brandLoc = -1, productLoc = 0) : t === "/" && (brandLoc = 0, productLoc = 1), brandLoc > -1) {
            brandFlexBtn = $(".flex-next")[brandLoc];
            $(brandFlexBtn).on("click", brandSliderClick)
        }
        if (productLoc > -1) {
            prodFlexBtn = $(".flex-next")[productLoc];
            $(prodFlexBtn).on("click", productSliderClick)
        }
        n = [].slice.call(document.querySelectorAll(".lazy-img")), f = !1, lazyLoadImages(n, f, tmpImages), r = [].slice.call(document.querySelectorAll(".lazy-form-trigger")), "IntersectionObserver" in window ? (u = new IntersectionObserver(function(n) {
            n.forEach(function(n) {
                var t, i;
                (n.isIntersecting || n.boundingClientRect.top < 0) && (u.unobserve(n.target), t = n.target.getAttribute("data-triggernames"), t !== null && t !== undefined && (i = t.split(" "), i.forEach(function(n) {
                    if (n !== null && n !== undefined && n.length > 0) {
                        var t = $(window).width() > 949;
                        n.indexOf("RecommendedAjaxForm") > -1 && t ? $("#" + n + "MQ4").submit() : $("#" + n).submit()
                    }
                })))
            })
        }), r.forEach(function(n) { u.observe(n) })) : r.forEach(function(n) {
            var t = n.getAttribute("data-triggernames"),
                i;
            t !== null && t !== undefined && (i = t.split(" "), i.forEach(function(n) { n !== null && n !== undefined && n.length > 0 && $("#" + n).submit() }))
        }), $(document).ajaxComplete(function() {
            if (n = [].slice.call(document.querySelectorAll(".lazy-img")), typeof io != "undefined") n.forEach(function(n) { io.observe(n) });
            else
                for (i = 0; i < n.length; i++) n[i].className = n[i].className.replace(/\blazy-img\b/g, ""), imageLoaded(n[i])
        }), supportWebp = e()
    }), "IntersectionObserver" in window && (trackSliderObserver = new IntersectionObserver(function(n) { n.forEach(function(n) { n.isIntersecting && (trackSliderObserver.unobserve(n.target), typeof trackProductSliderInView == "function" && trackProductSliderInView(n.target)) }) })),
    function(n) {
        function r() {
            if (n(".ham .pop-trigger").length) {
                n(document).on("keyup", ".txt-input-in-sync", function(t) {
                    t.preventDefault();
                    var i = n(this).val();
                    n(".txt-input-in-sync").val(i), i ? n("#searchAutoCompleteFixedTopNav").children().length && (document.getElementById("searchBoxFixedNav") === document.activeElement ? n("#searchAutoCompleteFixedTopNav").show() : n(".search-autocomplete").show()) : n(".search-autocomplete").hide()
                });
                n(document).on("change", ".ham .pop-trigger", function() { n(".pop-content").is(":visible") ? n("html").css("overflow-y", "hidden") : n("html").css("overflow-y", "initial") });
                n(document).on("click", ".ham .pop-content", function(t) { n(t.target).hasClass("pop-content") && (n(".ham .pop-trigger").prop("checked", !1), n("html").css("overflow-y", "initial")) })
            }
        }

        function u() { n("#TopCartAsyncForm").submit() }

        function f() {
            var r = function() {
                    var t = n("#sticky-nav"),
                        i = n("#searchBoxFixedNav");
                    i.focus(function() { t.show() })
                },
                i = function(t) {
                    var i = n("#sticky-nav");
                    t.forEach(function(t) { n("#searchAutoCompleteFixedTopNav").hide(), t.isIntersecting ? i.slideUp("fast") : i.slideDown("fast") })
                },
                t;
            !window.IntersectionObserver || (t = new IntersectionObserver(i, { rootMargin: "0px 0px 0px 0px" }), n("header#header").each(function(n, i) { t.observe(i) }), r())
        }

        function e() {
            var i = n("#searchBox, #searchBoxFixedNav"),
                t = n(".delete-keyword");
            i.click(function() { n(this).val() && t.length && (t.css("display", ""), n(this).parent("form").addClass("delete-active")) }), t.click(function(i) { i.preventDefault(), n(".txt-input-in-sync").val(""), n(this).siblings("input").focus(), t.hide(), n(this).parent("form").removeClass("delete-active"), n(".search-autocomplete").hide() });
            i.on("input", function() {!n(this).val() && t.length ? (t.css("display", "none"), n(this).parent("form").removeClass("delete-active")) : n(this).val() && t.length && (t.css("display", ""), n(this).parent("form").addClass("delete-active")) })
        }
        var t, i;
        r(), u(), f(), e(), t = function() {
            try {
                if (typeof localStorage == "undefined") return;
                var t = localStorage.getItem("stext");
                t && n(".client-search-text") && n(".client-search-text").val(t);
                n(".client-search-text").on("input", function() { localStorage.setItem("stext", n(".client-search-text").val()) })
            } catch (i) {}
        }, t(), i = function() {
            var t = n("#searchAutoCompleteFixedTopNav"),
                i = n("#searchBoxFixedNav");
            i.focus(function() { t.children().length > 0 && t.show() }), n(document).click(function(i) { n(i.target).closest(".frm-srch").length < 1 && n(i.target).closest(".frm-srch-mobile").length < 1 && n(i.target).closest(".nomqlshow.topsearch").length < 1 && n(i.target).closest("#searchAutoCompleteFixedTopNav").length < 1 && t.hide() })
        }, i(), n("#AjaxGetPixelForm") && setTimeout(function() { window.performance && window.performance.timing && document.getElementById("GaPerformance") && (document.getElementById("GaPerformance").value = JSON.stringify(window.performance.timing)), n("#AjaxGetPixelForm").submit() }, 1500)
    }(jQuery), $(function() { var n = 719 }),
    function(n) {
        var t, i;
        n(window).width() > 949 ? n(".footer-content .mq4none").remove() : n(".footer-content .mq4show").remove(), t = function() {
            if (n("#FooterCouponListAsyncForm").length) {
                n(document).on("click", "#FooterCouponListSubmit", function(n) { n.preventDefault(), t(!0), i() });
                n("#EmailAddressFooter").focusout(function() {
                    var r = n("#EmailAddressFooter").val();
                    r != "" && (t(!1), i())
                });

                function t(t) {
                    var i = n("#EmailAddressFooter").val();
                    if (!isEmail(i)) { joinCouponListSignUpSubmitErrorHandler(), r(); return }
                    t && (joinCouponListSignUpSubmitSuccessHandler(), n("#FooterCouponListAsyncForm").submit(), n("#CouponPopupAsyncSection").html("<span></span>"), u())
                }

                function i() {
                    n(document).on("keyup", "#EmailAddressFooter", function(t) {
                        t.preventDefault();
                        var i = n("#EmailAddressFooter").val();
                        isEmail(i) ? u() : r()
                    })
                }

                function r() { n("#EmailAddressFooter").addClass("input-error"), n("#FooterCouponListSubmit").addClass("input-error"), n(".submit-email .msg").addClass("input-error"), n(".submit-email .msg .field-validation-valid, .submit-email .msg .field-validation-error").html("Please enter a valid email address."), n(".deal-text").addClass("input-error") }

                function u() { n("#EmailAddressFooter").removeClass("input-error"), n("#FooterCouponListSubmit").removeClass("input-error"), n(".submit-email .msg").removeClass("input-error"), n(".submit-email .msg .field-validation-valid, .submit-email .msg .field-validation-error").html(""), n(".deal-text").removeClass("input-error") }
            }
        }, t(), i = function() {
            window.location.href.toLowerCase().indexOf("/fragrance-information/") > -1 && (window.bizrate = { small: "true" }, n("#header").load("/fragrance-information/header_ND.html"), n("#footer").load("/fragrance-information/footer_ND.html", function() {
                var t = new Date,
                    i = t.getFullYear();
                t = t.toLocaleDateString("default", { day: "numeric", month: "long", year: "numeric" }), n("#footerDateUpdated").html(t), n("#footerYearThrough").html(i)
            }), n("#footerFragranceSets").load("/fragrance-information/footerFragranceSets.html"))
        }, i()
    }(jQuery),
    function(n) {
        var t = function() {
            function f() { n("#AjaxSubmitEmailAsyncForm #EmailAddress").length && r("#AjaxSubmitEmailAsyncForm button[type=submit]", "#AjaxSubmitEmailAsyncForm #EmailAddress", "coupon page"), n("#CheckoutLoginForm #LoginEmail").length && t("#CheckoutLoginForm #LoginEmail", "account login", "checkout log in"), n("#OrderInfoForm #EmailAddress").length && t("#OrderInfoForm #EmailAddress", "checkout flow", "checkout flow"), n("#LoginForm #UserName").length && t("#LoginForm #UserName", "account login", "login page"), n("#RegisterForm #EmailAddress").length && t("#RegisterForm #EmailAddress", "account register", "register page"), n("#AllItemsOutOfStockAsyncSection #email-address").length && r("#AllItemsOutOfStockAsyncSection button[type=submit]", "#AllItemsOutOfStockAsyncSection #email-address", "oos parent"), n("#PopupSubmitForm #popup_email").length && r("#PopupSubmitForm .submit-email", "#PopupSubmitForm #popup_email", "email popup") }

            function t(t, r, f) {
                var o = n(t).val();
                o && isEmail(o) && (i(o), typeof geq != "undefined" && geq.suppress()), n(t).change(function() {
                    if (o = n(t).val(), isEmail(o)) {
                        i(o), typeof geq != "undefined" && geq.suppress();
                        var h = { email: o, source: r, source_detail: f },
                            s = 0,
                            c = setInterval(function() {
                                var n = u(e, h);
                                (n || s > 15) && clearInterval(c), s++
                            }, 1e3)
                    }
                })
            }

            function r(t, r, f) {
                var e = n(r).val();
                n(t).click(function() { i(e), typeof geq != "undefined" && geq.suppress() }), e && (i(e), typeof geq != "undefined" && geq.suppress());
                var h = { event_object: t, email: r, consent: !0, source: "EMAIL_SIGNUP", source_detail: f },
                    s = 0,
                    c = setInterval(function() {
                        var n = u(o, h);
                        (n || s > 15) && clearInterval(c), s++
                    }, 1e3)
            }

            function e(n) { triggermail.util.isValidEmail(n.email) && triggermail.anonymous_track("optin", n, n.email) }

            function o(n) { triggermail.util.emailListener(n) }

            function u(n, t) { return typeof triggermail == "undefined" || typeof triggermail.util == "undefined" ? !1 : (n(t), !0) }

            function i(t) {
                var i = n("input#abandonedCartSave").val() || !1;
                t && n.ajax({ url: "/Widgets/UpdateEmail/PostEmail", data: { email: t, abandonedCartSave: i }, type: "post", cache: !1 })
            }
            n("input[type=email]").length && f()
        };
        t(), window.addEventListener("_svdatalayer_ready", function(t) {
            var i = t.detail,
                r = n("#MerkuryForm");
            r.length > 0 && (document.getElementById("MerEId").value = i.email_base64, document.getElementById("MerConfidenceScore").value = i.confidence_score, r.submit())
        })
    }(jQuery), initOosEmailTrigger = function() {
        function i() {
            if (typeof triggermail == "undefined" || typeof triggermail.util == "undefined") { n++, n > 30 && clearInterval(t); return }
            $(".notify-of-stock").length && $(".notify-of-stock button[type=submit]").click(function(n) {
                var t = $(n.target).siblings("input[type=email]").val(),
                    i;
                triggermail.util.isValidEmail(t) && (i = { email: t, source: triggermail.identifySource.EMAIL_SIGNUP, source_detail: "oos product" }, triggermail.anonymous_track("optin", i, t))
            }), clearInterval(t)
        }
        var n = 0,
            t = setInterval(i, 1e3)
    },
    function(n) {
        var t = function() { n("<input/>").attr({ type: "hidden", name: "location" }).val(window.location.pathname).appendTo("#CouponPopupAsyncForm"), n("#CouponPopupAsyncForm").submit() };
        t()
    }(jQuery), initCouponControl = function() { $(".close-popup").click(function(n) { n.preventDefault(), $("#coupon-popup").css("display", "none"), $.ajax("/Widgets/CouponPopup/CouponPopupClose") }) };
var applyCouponSuccess = function(n) {
        function i() {
            insertBannerNotificationClose(), $(".bannerCouponDialogStart").removeClass("bannerCouponDialogStart");
            var n = window.location.pathname.toLowerCase();
            n.indexOf("cart") > -1 && $("#CardTableAsyncForm").length > 0 && $("#CardTableAsyncForm").submit()
        }
        $("#CouponPopupAsyncSection").html("<span></span>");
        var t = $(".add-coupon > button");
        t.text(n.appliedMsg), t.removeClass("get-coupon"), t.addClass("applied"), $("#notificationBanner").length > 0 ? $("#notificationBanner").replaceWith(n.bannerNotiMsg) : $("#TopBanner").prepend(n.bannerNotiMsg), n.topBannerMsg !== null && n.topBannerMsg !== undefined ? $("#topBannerDiv .banner-text").html(n.topBannerMsg) : $("#topBannerDiv .banner-text").html("<p class='sans'><b class='caps'>We are open and ship same day!</b></p>"), typeof geq != "undefined" && geq.suppress(), i()
    },
    attnScriptLoading = !1,
    attnScriptLoaded = !1,
    initMobilePopup = function() { window.__attentive && (attnScriptLoaded = !0), attnScriptLoaded || attnScriptLoading ? (dataLayer.push({ event: "popup-success-nd" }), $("#attentive_creative").show()) : loadScript("https://cdn.attn.tv/fragrancex/dtag.js", function() { attnScriptLoaded = !0, attnScriptLoading = !1, dataLayer.push({ event: "popup-success-nd" }), $("#attentive_creative").show() }) },
    couponPopupInit = function() {
        function p() {
            $(document).on("keyup", "#popup_email", function(n) {
                n.preventDefault();
                var t = $("#popup_email").val();
                isEmail(t) ? k() : r(t)
            })
        }

        function r(n) { n === "" ? $("#popup_errors").html("<label for='popup_email' generated='true' class='error'>Please enter your email address.</label>") : $("#popup_errors").html("<label for='popup_email' generated='true' class='error'>Please enter a valid email address.</label>"), $("#popup_email").addClass("input-validation-error") }

        function k() { $("#popup_errors").html(""), $("#popup_email").removeClass("input-validation-error") }

        function e(n) { $("#coupon-popup").css("display", "block"), t = !1, typeof trackViewPromotion == "function" && trackViewPromotion(n) }

        function i(n) { $.ajax({ url: "/Widgets/LightboxPopup/IsNewUser", data: {}, type: "post", cache: !1, success: function(t) { t === !0 && e("newUser_" + n) } }) }
        var a = window.location.href.indexOf("/search_results") > -1 || window.location.href.indexOf("/cart") > -1,
            w = $(window).height() > 550 && $(window).width() > 600,
            t = !0,
            h, s;
        $(document).on("mouseleave", function(n) {
            if ($("#coupon-popup").is(":visible")) return !1;
            var r = n.pageY;
            t && r - $(window).scrollTop() <= 1 && (i("mouseleave"), t = !1)
        });
        $(document).on("click", ".popup-response .submit-email", function(n) {
            if (n.preventDefault(), $("#popup_email").length > 0) {
                var t = $("#popup_email").val();
                if (!isEmail(t)) { r(t), p(); return }
                $("#PopupSubmitForm").submit()
            }
        });
        if ($("#popup_email").focusout(function() {
                var n = $("#popup_email").val();
                n != "" && (isEmail(n) || r(), p())
            }), $("#popup_email").focusin(function() { window.__attentive ? attnScriptLoaded = !0 : (attnScriptLoading = !0, loadScript("https://cdn.attn.tv/fragrancex/dtag.js", function() { attnScriptLoaded = !0, attnScriptLoading = !1 })) }), w || !a) {
            var u = 0,
                y = $(window).scrollTop(),
                v = setInterval(d, 1e3);
            window.addEventListener("keypress", n), window.addEventListener("click", n), window.onload = n();

            function n() { u = 0 }

            function d() {
                if (u += 1, t || (clearInterval(v), window.removeEventListener("keypress", n), window.removeEventListener("click", n)), y !== $(window).scrollTop()) { y = $(window).scrollTop(), n(); return }
                if (u >= 6) {
                    if (clearInterval(v), window.removeEventListener("keypress", n), window.removeEventListener("click", n), $("#coupon-popup").is(":visible")) return;
                    i("idle")
                }
            }
        }
        var o = 0,
            b, f = 0,
            g = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
        if (!w && !a) {
            if ($("#lightboxnonefirstclick").length > 0) { i("mobile_none_first_click"), t = !1; return }
            if (!t) return;
            window.addEventListener("touchstart", l), window.addEventListener("touchend", c);

            function l(n) { o = n.changedTouches[0].pageY, b = +new Date }

            function c(n) {
                if (f = n.changedTouches[0].pageY, f > o) {
                    var t = (f - o) / (+new Date - b);
                    if (t > .2) {
                        if (window.removeEventListener("touchstart", l), window.removeEventListener("touchend", c), $("#coupon-popup").is(":visible")) return;
                        i("scroll_fast")
                    }
                }
            }
            $(window).bind("pageshow", function(n) { n.originalEvent.persisted && $("#coupon-popup").is(":visible") && $("#coupon-popup").css("display", "none") })
        }
        h = function() { $(".bannerCouponDialogStart").click(function(n) { n.preventDefault(), $("#coupon-popup").length === 0 ? $.ajax({ url: "/widgets/CouponPopup/ajaxapplypagesuggestcoupon", type: "post", success: function(n) { n !== "" && applyCouponSuccess(n) } }) : e("bannerCouponDialogStart") }) }, s = function() {
            $(".hero-section:not(.wholesale-homeimage), .hero-section-slider:not(.wholesale-homeimage)").click(function(n) {
                n.preventDefault();
                var t = n.target.className;
                t !== "review-nav" && t !== "next" && t !== "prev" && ($("#coupon-popup").length === 0 ? window.location.href = "/products/top_selling_perfumes.html" : e("wholesale_homeimage"))
            })
        }, h(), s()
    };
(function() {
    function t() { return /Trident\/|MSIE/.test(window.navigator.userAgent) }
    t() && (loadScript("/Scripts/js/polyfill.min.js", function() {}), loadScript("/Scripts/js/svg4everybody.min.js", function() { svg4everybody && typeof svg4everybody == "function" && svg4everybody() }))
})(jQuery),
function(n) {
    function t(n, t) {
        var o = n.currentTarget,
            i = o,
            s = 0,
            u, r, f, e;
        if (i instanceof Node) {
            u = [];
            do i instanceof Element && (r = i.classList ? [].slice.call(i.classList).join(".") : "", f = (i.tagName ? i.tagName.toLowerCase() : "") + (r ? "." + r : "") + (i.id ? "#" + i.id : ""), (r || i.id) && u.unshift(f)), i = i.parentNode; while (i != null && ++s < t);
            return e = u.join(" > ")
        }
    }

    function i() {
        var t = n("#search-load-wrap");
        t.on("click", ".product-grid-cell .product-img a", function(t) { dataLayer.push({ event: "search_result_click", search_term: n("#searchBox").val(), link_text: "", link_url: n(t.currentTarget).attr("href") }) });
        t.on("click", ".product-grid-cell .product-desc-1 a", function(t) { dataLayer.push({ event: "search_result_click", search_term: n("#searchBox").val(), link_text: n(t.currentTarget).text().trim(), link_url: n(t.currentTarget).attr("href") }) });
        t.on("click", ".product-grid-cell .product-desc-2 a", function(t) { dataLayer.push({ event: "search_result_click", search_term: n("#searchBox").val(), link_text: n(t.currentTarget).text().trim(), link_url: n(t.currentTarget).attr("href") }) })
    }

    function r() { if (location.pathname.indexOf("/customerservice/faq") !== -1) n(".main-content h3~div").find("div:first-child a").on("click", function(i) { dataLayer.push({ event: "faq", link_text: n(i.currentTarget).text(), page_section: t(i, 5) }) }) }

    function u() {
        if (location.pathname.indexOf("/customeraccount/myaccount") !== -1) {
            n(".nav-wrapper .pop-content a").on("click", function(t) { dataLayer.push({ event: "my_account", page_section: "My Account Menu - " + n(t.currentTarget).parents("div.nav-list").parent().prev().text().trim(), my_account_label: n(t.currentTarget).text().trim() }) });
            n("#btn-edit-pencil").on("click", function() { dataLayer.push({ event: "my_account", page_section: "Edit Name", my_account_label: "edit name" }) });
            n(".logout-form button").one("click", function() { dataLayer.push({ event: "my_account", page_section: "Log Out", my_account_label: "log out" }) });
            var i = n(".wholesale-nav a");
            if (i.length) i.one("click", function(t) { dataLayer.push({ event: "my_account", page_section: "Wholesale Nav", my_account_label: n(t.currentTarget).text().trim() }) });
            n(".account-content .more-history").on("click", function(i) { dataLayer.push({ event: "my_account", page_section: t(i, 5), my_account_label: n(i.currentTarget).text().trim() }) });
            n(".cart-product a").on("click", function(t) { dataLayer.push({ event: "my_account", page_section: "Orders", my_account_label: n(t.currentTarget).text().trim() }) });
            n(".reorder_form").find(".mobile-reorder, .reorder").on("click", function() { dataLayer.push({ event: "my_account", page_section: "Orders", my_account_label: "Reorder" }) })
        }
    }

    function f() {
        function t() { return n(".product-header").parent().find(".product-information meta.ga-product-name").attr("content") }

        function i() { return n(".product-header").parent().find('meta[itemprop="productID"]').attr("content") }

        function r(n) { return t() + " " + n.parents(".is-out-of-stock").find(".listing-description").text().trim() }

        function u(n) { return n.parents(".is-out-of-stock").find(".product-sku").text().split("#")[1] }
        n("#ProductOOSAsyncForm").on("submit", function() { return dataLayer.push({ event: "notify_me", product_item_name: t(), product_item_id: i() }), !0 });
        n(".is-out-of-stock form").on("submit", function() { return dataLayer.push({ event: "notify_me", product_item_name: r(n(this)), product_item_id: u(n(this)) }), !0 })
    }

    function e() {
        function t(n) { var t = n.parent().find(".product-sku"); return t.text().split("#")[1] }

        function i(n) { var t = n.parent().find("img"); return t.attr("alt") }
        n(".product-listing-img > input").on("click", function() { n(this).parents(".product-grid-cell"), dataLayer.push({ event: "product_image_view_larger", product_item_name: i(n(this)), product_item_id: t(n(this)) }) })
    }

    function o() {
        if (location.pathname.indexOf("/orders/checkout") !== -1) n(".order-summary-container .cart-item-wrapper a").on("click", function(t) { pushGaEventsToLayer(n(t.currentTarget).parents(".cart-product"), "select_item") });
        if (location.pathname.indexOf("/orders/cart") !== -1) {
            n(document).on("click", ".product-grid-cell .product-img a, .product-grid-cell .product-desc-1 a", function(t) { pushGaEventsToLayer(n(t.currentTarget).parents(".product-grid-cell"), "select_item") });
            n("#CartTableAsyncSection").on("click", ".cart-item-wrapper .item-img a, .cart-item-wrapper .cart-item-name a", function(t) { pushGaEventsToLayer(n(t.currentTarget).parents(".cart-product"), "select_item") })
        }
        var t = n("#search-load-wrap");
        if (t.length) {
            t.on("click", ".product-grid-cell .product-img a", function(t) { pushGaEventsToLayer(n(t.currentTarget).parents(".product-grid-cell"), "select_item") });
            t.on("click", ".product-grid-cell .product-desc-1 a", function(t) { pushGaEventsToLayer(n(t.currentTarget).parents(".product-grid-cell"), "select_item") })
        }
    }

    function s() { if (location.pathname.indexOf("/products/") !== -1) n(".add-to-cart > form").one("submit", function(t) { pushGaEventsToLayer(n(t.currentTarget).parents(".product"), "add_to_cart") }) }

    function h() {
        n(".hero-section:not(.wholesale-homeimage), .hero-section-slider:not(.wholesale-homeimage)").on("click", function(n) {
            var t = n.target.className;
            t !== "review-nav" && t !== "next" && t !== "prev" && dataLayer.push({ event: "select_promotion" })
        });
        n(document).on("click", ".submit-email", function() { dataLayer.push({ event: "select_promotion" }) });
        n(".bannerCouponDialogStart").click(function() { dataLayer.push({ event: "select_promotion" }) })
    }

    function c() { n("#CartTableAsyncSection").on("click", ".checkout-button > a, div > a.paypal-checkout", function() { dataLayer.push({ event: "begin_checkout" }) }) }

    function l() { n("#AjaxSubmitEmailAsyncForm").on("submit", function(i) { n(this).valid() || dataLayer.push({ event: "join_coupon_list_fail", page_section: t(i, 5), error_message: n("#AjaxSubmitEmailAsyncForm .error-text").text().trim() }) }) }

    function a() {
        n("#RegisterForm").on("submit", function() {
            if (!n(this).valid()) {
                var i = "";
                n("#RegisterForm .validation-summary-errors li").each(function(n, t) { i += t.innerText + "\n" }), dataLayer.push({ frgxEvent: "sign_up", error_message: i, status: "fail" })
            }
        })
    }

    function v() { n('#LoginForm button[type="submit"]').click(function() { n("#LoginForm").valid() || dataLayer.push({ frgxEvent: "signup_start_fail", error_message: n("#LoginForm #UserName-error").text() }) }) }
    n(".topmenu a:not(.search-filter-link)").click(function(n) {
        if (this.href && this.href.length > 0 && this.href.indexOf(".fragrancex.com") > -1) {
            var i = n.currentTarget;
            window.dataLayer.push({ event: "navigation_click", link_url: i.href, link_text: i.innerText, nav_tree_text: t(n, 5) })
        }
    }), n(".ga-cta").click(function(n) {
        var t = n.currentTarget;
        dataLayer.push({ event: "cta", page_section: t.getAttribute("aria-label"), link_text: t.innerText })
    }), i(), r(), u(), f(), e(), o(), s(), h(), c(), l(), a(), v()
}(jQuery), $(function() {
    var t = {},
        i, e, r = 1,
        o = 1,
        c = 3,
        s = "",
        l = location.pathname.match(/^\/ar\//i) != null,
        n, h, u, f;
    $("<ul id='searchAutoComplete' class='search-autocomplete' style='display: none;'></ul>").appendTo("body"), n = function() { $("#searchAutoComplete").css("display", "none") }, $(document).click(function(t) { $(t.target).closest(".frm-srch").length < 1 && $(t.target).closest(".frm-srch-mobile").length < 1 && $(t.target).closest(".nomqlshow.topsearch").length < 1 && $(t.target).closest("#searchAutoComplete").length < 1 && n() }), h = function(n) {
        var t = {},
            r, u, i, f;
        if (this !== window && this !== null && (t = this), n = n || 0, n < -1 && (n = t.children("li").length - 1), n >= t.children("li").length && (n = -1), r = t.children("li.selected"), r.removeClass("selected"), n == -1) { u = $(that).attr("data-origin-term"), $(that).attr("value", u); return }
        i = t.children("li").eq(n), i.addClass("selected"), f = i.attr("data-term"), $(that).attr("value", f)
    }, u = function(n, t) {
        var i = -1,
            r = this,
            u, f;
        r.children("li.selected").length > 0 && (i = r.children("li").index(r.children("li.selected"))), i == -1 && (u = $(n).val(), $(n).attr("data-origin-term", u)), f = i + t, h.bind(this)(f)
    }, window.buildAutoComplete = function(t, i, r) {
        var u, f, o;
        if ($("#searchAutoComplete").length < 1 && $("<ul id='searchAutoComplete' class='search-autocomplete' style='display: none;'></ul>").appendTo("body"), $("#searchAutoComplete").empty(), u = $("#searchAutoCompleteFixedTopNav"), u.length && u.empty(), i.length < 1) { n(); return }
        if (r.id === "searchBoxFixedNav") $("#searchAutoComplete").css("display", "none");
        else {
            var s = $(r).offset(),
                h = s.top + $(r).outerHeight(),
                c = s.left;
            $("#searchAutoComplete").css("top", h), $("#searchAutoComplete").css("left", c), $("#searchAutoComplete").css("width", $(r).closest("form").outerWidth()), $("#searchAutoComplete").css("display", "block")
        }
        f = [], $.each(i, function(n, t) {
            var i;
            t.ExtraDesc && t.ExtraDesc.substring(3).toLowerCase() !== t.Name.toLowerCase() ? f.push({ Name: t.Name, QueryString: "stext=" + encodeURIComponent(t.Name), ExtraDesc: t.ExtraDesc }) : (i = t.Name, f.push({ Name: i, QueryString: "brands=" + encodeURIComponent(i) + "&instock=true", ExtraDesc: "See all by this brand" }))
        }), o = "", window.location.pathname.match(/^\/zh\//i) && (o = "/zh"), $.each(f, function(n, i) {
            var f = o + "/search/search_results?" + i.QueryString,
                e = new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + t.replace(/[.?*+^$[\]\\(){}|-]/g, "\\$&") + ")(?![^<>]*>)(?![^&;]+;)", "gi"),
                s = i.Name.replace(e, "<span style='font-weight:normal'>$1</span>"),
                h = i.sectionEnd ? "sans sectionEnd" : "sans",
                r = $("<li data-term='" + i.Name + "' class='" + h + "'><a href=\"" + f + "\"> <span style='font-weight:bold'>" + s + "</span> <span class='extraDesc'> " + i.ExtraDesc + "</span> </a></li>");
            $("#searchAutoComplete").append(r), $(r).mouseenter(function() { $(r).addClass("mouseenter"), $(r).addClass("hover") }), $(r).mouseleave(function() { $(r).removeClass("mouseenter"), $(r).removeClass("hover") }), u.length && (u.append(r.clone(!0)), u.children().mouseenter(function() { $(this).addClass("mouseenter"), $(this).addClass("hover") }), u.children().mouseleave(function() { $(this).removeClass("mouseenter"), $(this).removeClass("hover") }))
        }), $("#searchAutoComplete").mouseleave(function() { $("#searchAutoComplete .hover").removeClass("hover"), $("#searchAutoComplete .selected").removeClass("selected") }), u.mouseleave(function() { $("#searchAutoCompleteFixedTopNav .hover").removeClass("hover"), $("#searchAutoCompleteFixedTopNav .selected").removeClass("selected") }), e = r
    }, $(window).resize(function() {
        var n = e,
            i = [".frm-srch", ".frm-srch-mobile", ".nomqlshow.topsearch"];
        if (i.forEach(function(t) { $(t) && $(t).css("display") !== undefined && $(t).css("display") !== "none" && (n = $(t + ">input")) }), n) {
            var t = $(n).offset(),
                r = t.top + $(n).outerHeight(),
                u = t.left;
            $("#searchAutoComplete").css("top", r), $("#searchAutoComplete").css("left", u), $("#searchAutoComplete").css("width", $(n).closest("form").outerWidth())
        }
    }), f = function(t, i, r, u, f) {
        var s;
        if (!(u <= o)) {
            if (o = u, !i || i.length < 1) { n(); return }
            var h = f ? $("#searchBox") : $(r),
                c = h.offset(),
                l = c.top + h.outerHeight(),
                a = $(window).height(),
                e = parseInt((a - l) / 28);
            e > 20 && (e = 20), e < 4 && (e = 4), s = i, i.length > e && (s = i.slice(0, e - 1)), buildAutoComplete(t, s, r)
        }
    }, $(".frm-srch>input, .frm-srch-mobile>input, .nomqlshow.topsearch > input").keydown(function(n) { var t, r, i; return (that = this, t = $("#searchAutoComplete"), that.id === "searchBoxFixedNav" ? t = $("#searchAutoCompleteFixedTopNav") : that.id === "searchBox" && (t = $("#searchAutoComplete")), n.which == 38) ? ($("ul.search-autocomplete > li.hover").removeClass("hover"), u.bind(t)(that, -1), n.preventDefault(), !1) : n.which == 40 ? ($("ul.search-autocomplete > li.hover").removeClass("hover"), u.bind(t)(that, 1), n.preventDefault(), !1) : n.which == 13 ? (r = $("ul.search-autocomplete > li.selected > a"), $("ul.search-autocomplete > li.selected").hasClass("hover")) ? !0 : r.get(0) ? (r.get(0).click(), !1) : !0 : n.which == 27 ? ($("ul.search-autocomplete > li.selected").removeClass("selected"), $("ul.search-autocomplete > li.hover").removeClass("hover"), i = $(that).attr("data-origin-term"), i && i !== "" && $(that).attr("value", i), n.preventDefault(), !1) : void 0 }), $(".frm-srch>input, .frm-srch-mobile>input, .nomqlshow.topsearch>input").keyup(function(n) {
        var u = $(this).val().trim(),
            e, o;
        if (n.which == 38 || n.which == 40 || n.which == 27) return !1;
        if (e = this, !u) return !0;
        if (u == s) return !1;
        if (s = u, r = r + 1, o = e.id === "searchBoxFixedNav", u in t) return f(u, t[u], e, undefined, o), !0;
        i && i.abort(), i = $.ajax({ url: "/search/search_results/ajaxgetautocomplete", method: "GET", timeout: 1e4, data: { term: u }, success: function(n) { n.map && (n = n.map(function(n) { return { Name: n.n, ExtraDesc: n.e, Popularity: n.p } }), n.length && n.length > 0 && (t[u] = n, f(u, n, e, r, o))) } })
    })
})