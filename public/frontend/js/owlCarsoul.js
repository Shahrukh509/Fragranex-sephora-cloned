! function(t, e) { "object" == typeof exports ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.Spinner = e() }(this, function() {
    "use strict";

    function t(t, e) { var o, i = document.createElement(t || "div"); for (o in e) i[o] = e[o]; return i }

    function e(t) { for (var e = 1, o = arguments.length; o > e; e++) t.appendChild(arguments[e]); return t }

    function o(t, e, o, i) {
        var n = ["opacity", e, ~~(100 * t), o, i].join("-"),
            r = .01 + o / i * 100,
            a = Math.max(1 - (1 - t) / e * (100 - r), t),
            s = c.substring(0, c.indexOf("Animation")).toLowerCase(),
            l = s && "-" + s + "-" || "";
        return h[n] || (p.insertRule("@" + l + "keyframes " + n + "{0%{opacity:" + a + "}" + r + "%{opacity:" + t + "}" + (r + .01) + "%{opacity:1}" + (r + e) % 100 + "%{opacity:" + t + "}100%{opacity:" + a + "}}", p.cssRules.length), h[n] = 1), n
    }

    function i(t, e) {
        var o, i, n = t.style;
        for (e = e.charAt(0).toUpperCase() + e.slice(1), i = 0; i < d.length; i++)
            if (o = d[i] + e, void 0 !== n[o]) return o;
        return void 0 !== n[e] ? e : void 0
    }

    function n(t, e) { for (var o in e) t.style[i(t, o) || o] = e[o]; return t }

    function r(t) { for (var e = 1; e < arguments.length; e++) { var o = arguments[e]; for (var i in o) void 0 === t[i] && (t[i] = o[i]) } return t }

    function a(t, e) { return "string" == typeof t ? t : t[e % t.length] }

    function s(t) { this.opts = r(t || {}, s.defaults, u) }

    function l() {
        function o(e, o) { return t("<" + e + ' xmlns="urn:schemas-microsoft.com:vml" class="spin-vml">', o) }
        p.addRule(".spin-vml", "behavior:url(#default#VML)"), s.prototype.lines = function(t, i) {
            function r() { return n(o("group", { coordsize: d + " " + d, coordorigin: -c + " " + -c }), { width: d, height: d }) }

            function s(t, s, l) { e(p, e(n(r(), { rotation: 360 / i.lines * t + "deg", left: ~~s }), e(n(o("roundrect", { arcsize: i.corners }), { width: c, height: i.width, left: i.radius, top: -i.width >> 1, filter: l }), o("fill", { color: a(i.color, t), opacity: i.opacity }), o("stroke", { opacity: 0 })))) }
            var l, c = i.length + i.width,
                d = 2 * c,
                h = 2 * -(i.width + i.length) + "px",
                p = n(r(), { position: "absolute", top: h, left: h });
            if (i.shadow)
                for (l = 1; l <= i.lines; l++) s(l, -2, "progid:DXImageTransform.Microsoft.Blur(pixelradius=2,makeshadow=1,shadowopacity=.3)");
            for (l = 1; l <= i.lines; l++) s(l);
            return e(t, p)
        }, s.prototype.opacity = function(t, e, o, i) {
            var n = t.firstChild;
            i = i.shadow && i.lines || 0, n && e + i < n.childNodes.length && (n = n.childNodes[e + i], n = n && n.firstChild, n = n && n.firstChild, n && (n.opacity = o))
        }
    }
    var c, d = ["webkit", "Moz", "ms", "O"],
        h = {},
        p = function() { var o = t("style", { type: "text/css" }); return e(document.getElementsByTagName("head")[0], o), o.sheet || o.styleSheet }(),
        u = { lines: 12, length: 7, width: 5, radius: 10, rotate: 0, corners: 1, color: "#000", direction: 1, speed: 1, trail: 100, opacity: .25, fps: 20, zIndex: 2e9, className: "spinner", top: "50%", left: "50%", position: "absolute" };
    s.defaults = {}, r(s.prototype, {
        spin: function(e) {
            this.stop(); {
                var o = this,
                    i = o.opts,
                    r = o.el = n(t(0, { className: i.className }), { position: i.position, width: 0, zIndex: i.zIndex });
                i.radius + i.length + i.width
            }
            if (n(r, { left: i.left, top: i.top }), e && e.insertBefore(r, e.firstChild || null), r.setAttribute("role", "progressbar"), o.lines(r, o.opts), !c) {
                var a, s = 0,
                    l = (i.lines - 1) * (1 - i.direction) / 2,
                    d = i.fps,
                    h = d / i.speed,
                    p = (1 - i.opacity) / (h * i.trail / 100),
                    u = h / i.lines;
                ! function f() {
                    s++;
                    for (var t = 0; t < i.lines; t++) a = Math.max(1 - (s + (i.lines - t) * u) % h * p, i.opacity), o.opacity(r, t * i.direction + l, a, i);
                    o.timeout = o.el && setTimeout(f, ~~(1e3 / d))
                }()
            }
            return o
        },
        stop: function() { var t = this.el; return t && (clearTimeout(this.timeout), t.parentNode && t.parentNode.removeChild(t), this.el = void 0), this },
        lines: function(i, r) {
            function s(e, o) { return n(t(), { position: "absolute", width: r.length + r.width + "px", height: r.width + "px", background: e, boxShadow: o, transformOrigin: "left", transform: "rotate(" + ~~(360 / r.lines * d + r.rotate) + "deg) translate(" + r.radius + "px,0)", borderRadius: (r.corners * r.width >> 1) + "px" }) }
            for (var l, d = 0, h = (r.lines - 1) * (1 - r.direction) / 2; d < r.lines; d++) l = n(t(), { position: "absolute", top: 1 + ~(r.width / 2) + "px", transform: r.hwaccel ? "translate3d(0,0,0)" : "", opacity: r.opacity, animation: c && o(r.opacity, r.trail, h + d * r.direction, r.lines) + " " + 1 / r.speed + "s linear infinite" }), r.shadow && e(l, n(s("#000", "0 0 4px #000"), { top: "2px" })), e(i, e(l, s(a(r.color, d), "0 0 1px rgba(0,0,0,.1)")));
            return i
        },
        opacity: function(t, e, o) { e < t.childNodes.length && (t.childNodes[e].style.opacity = o) }
    });
    var f = n(t("group"), { behavior: "url(#default#VML)" });
    return !i(f, "transform") && f.adj ? l() : c = i(f, "animation"), s
}),
function(t) {
    if ("object" == typeof exports) t(require("jquery"), require("spin"));
    else if ("function" == typeof define && define.amd) define(["jquery", "spin"], t);
    else {
        if (!window.Spinner) throw new Error("Spin.js not present");
        t(window.jQuery, window.Spinner)
    }
}(function(t, e) {
    t.fn.spin = function(o, i) {
        return this.each(function() {
            var n = t(this),
                r = n.data();
            r.spinner && (r.spinner.stop(), delete r.spinner), o !== !1 && (o = t.extend({ color: i || n.css("color") }, t.fn.spin.presets[o] || o), r.spinner = new e(o).spin(this))
        })
    }, t.fn.spin.presets = { tiny: { lines: 8, length: 2, width: 2, radius: 3 }, small: { lines: 8, length: 4, width: 3, radius: 5 }, large: { lines: 10, length: 8, width: 4, radius: 8 } }
}),
function(t, e) { "object" == typeof exports ? module.exports = e(require("spin.js")) : "function" == typeof define && define.amd ? define(["spin"], e) : t.Ladda = e(t.Spinner) }(this, function(t) {
    "use strict";

    function e(t) {
        if (void 0 === t) return void console.warn("Ladda button target must be defined.");
        t.querySelector(".ladda-label") || (t.innerHTML = '<span class="ladda-label">' + t.innerHTML + "</span>");
        var e, o = document.createElement("span");
        o.className = "ladda-spinner", t.appendChild(o);
        var i, n = {
            start: function() { return e || (e = a(t)), t.setAttribute("disabled", ""), t.setAttribute("data-loading", ""), clearTimeout(i), e.spin(o), this.setProgress(0), this },
            startAfter: function(t) { return clearTimeout(i), i = setTimeout(function() { n.start() }, t), this },
            stop: function() { return t.removeAttribute("disabled"), t.removeAttribute("data-loading"), clearTimeout(i), e && (i = setTimeout(function() { e.stop() }, 1e3)), this },
            toggle: function() { return this.isLoading() ? this.stop() : this.start(), this },
            setProgress: function(e) {
                e = Math.max(Math.min(e, 1), 0);
                var o = t.querySelector(".ladda-progress");
                0 === e && o && o.parentNode ? o.parentNode.removeChild(o) : (o || (o = document.createElement("div"), o.className = "ladda-progress", t.appendChild(o)), o.style.width = (e || 0) * t.offsetWidth + "px")
            },
            enable: function() { return this.stop(), this },
            disable: function() { return this.stop(), t.setAttribute("disabled", ""), this },
            isLoading: function() { return t.hasAttribute("data-loading") },
            remove: function() {
                clearTimeout(i), t.removeAttribute("disabled", ""), t.removeAttribute("data-loading", ""), e && (e.stop(), e = null);
                for (var o = 0, r = l.length; r > o; o++)
                    if (n === l[o]) { l.splice(o, 1); break }
            }
        };
        return l.push(n), n
    }

    function o(t, e) { for (; t.parentNode && t.tagName !== e;) t = t.parentNode; return e === t.tagName ? t : void 0 }

    function i(t) {
        for (var e = ["input", "textarea"], o = [], i = 0; e.length > i; i++)
            for (var n = t.getElementsByTagName(e[i]), r = 0; n.length > r; r++) n[r].hasAttribute("required") && o.push(n[r]);
        return o
    }

    function n(t, n) {
        n = n || {};
        var r = [];
        "string" == typeof t ? r = s(document.querySelectorAll(t)) : "object" == typeof t && "string" == typeof t.nodeName && (r = [t]);
        for (var a = 0, l = r.length; l > a; a++)(function() {
            var t = r[a];
            if ("function" == typeof t.addEventListener) {
                var s = e(t),
                    l = -1;
                t.addEventListener("click", function() {
                    var e = !0,
                        r = o(t, "FORM");
                    if (void 0 !== r)
                        for (var a = i(r), c = 0; a.length > c; c++) "" === a[c].value.replace(/^\s+|\s+$/g, "") && (e = !1);
                    e && (s.startAfter(1), "number" == typeof n.timeout && (clearTimeout(l), l = setTimeout(s.stop, n.timeout)), "function" == typeof n.callback && n.callback.apply(null, [s]))
                }, !1)
            }
        })()
    }

    function r() { for (var t = 0, e = l.length; e > t; t++) l[t].stop() }

    function a(e) {
        var o, i = e.offsetHeight;
        0 === i && (i = parseFloat(window.getComputedStyle(e).height)), i > 32 && (i *= .8), e.hasAttribute("data-spinner-size") && (i = parseInt(e.getAttribute("data-spinner-size"), 10)), e.hasAttribute("data-spinner-color") && (o = e.getAttribute("data-spinner-color"));
        var n = 12,
            r = .2 * i,
            a = .6 * r,
            s = 7 > r ? 2 : 3;
        return new t({ color: o || "#fff", lines: n, radius: r, length: a, width: s, zIndex: "auto", top: "auto", left: "auto", className: "" })
    }

    function s(t) { for (var e = [], o = 0; t.length > o; o++) e.push(t[o]); return e }
    var l = [];
    return { bind: n, create: e, stopAll: r }
}),
function(t) {
    var e, o = "zoomer",
        i = { width: "auto", height: "auto", zoom: .4, tranformOrigin: "0 0", loadingType: "message", loadingMessage: "Generating preview...", spinnerURL: "http://oi46.tinypic.com/6y375z.jpg", message: "Open Page", ieMessageButtonClass: "btn btn-secondary", messageURL: !1, onComplete: function() {} },
        n = { visibility: "visible" },
        r = { visibility: "hidden" },
        a = { "-webkit-user-select": "none", "-khtml-user-select": "none", "-moz-user-select": "none", "-o-user-select": "none", "user-select": "none", overflow: "hidden" },
        s = { top: 0, position: "absolute" },
        l = { position: "relative" },
        c = navigator.userAgent.match(/MSIE/),
        d = navigator.userAgent.match(/MSIE (\d\.\d+)/) ? parseInt(RegExp.$1, 10) : null;
    e = {
        init: function(e) {
            return this.each(function() {
                var n = t(this),
                    r = t.extend({}, i, e);
                r.src = n.attr("src"), n.data(o, r), n[o]("zoomer")
            })
        },
        zoomer: function() {
            var e = t(this),
                i = e.data(o);
            if (e.css(r).css(a), "auto" === i.zoom) {
                if ("auto" === i.width && "auto" === i.height) return void t.error("jQuery.zoomer: You must set either zoom or height and width.");
                i.zoom = i.width / t(window).width()
            }
            "auto" === i.width && (i.width = t(window).height() * i.zoom), "auto" === i.height && (i.height = t(window).height() * i.zoom), "spinner" === i.loadingType && (i.loadingMessage = '<img style="padding: ' + parseInt((i.height - 17) / 2, 10) + 'px 0" src="' + i.spinnerURL + '" />'), navigator.userAgent.indexOf("Chrome/10.0.648") > -1 && (i.zoom = Math.sqrt(1 / i.zoom)), i.externalSrc = !0;
            try { e.get(0).contentWindow.document && (i.externalSrc = !1) } catch (n) {}
            return e[o]("setUpWrapper"), e[o]("zoom"), e
        },
        setUpWrapper: function() {
            var e = t(this),
                i = e.data(o);
            return e.parents(".zoomer-wrapper").length || e.wrap(t("<div/>").addClass("zoomer-wrapper").css(a).css(l)).wrap(t("<div/>").addClass("zoomer-small").css(r).css(a)), i.zoomerWrapper = e.parents(".zoomer-wrapper"), i.zoomerSmall = e.parents(".zoomer-small"), i.zoomerCover = t("<div/>").addClass("zoomer-cover").css(a).css(s).css({ textAlign: "center", fontSize: "15px" }), i.zoomerLink = t("<a/>").html(i.message).css({ height: i.height, width: i.width, color: "#444", display: "block", lineHeight: parseInt(i.height, 10) - parseInt((i.height - 80) / 10, 10) + "px", textDecoration: "none" }).css("background", "-moz-radial-gradient(center center, circle farthest-corner, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 100%) repeat scroll 0 0 transparent").css("background-image", "-webkit-gradient(radial, center center, 0, center center, " + parseInt(i.width, 10) + ", from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0)))").mousedown(function() { t(this).css("box-shadow", "inset 0px 2px 8px rgba(100, 100, 100, 0.4)") }).bind("mouseout mouseup", function() { t(this).css("box-shadow", "none") }).hide(), c && i.zoomerLink.css({ backgroundColor: "rgba(255, 255, 255, 0.5)" }), i.click ? i.zoomerLink.attr("href", i.messageURL || i.src || "#").unbind("click").bind("click", i.click) : i.zoomerLink.attr("href", i.messageURL || i.src), i.zoomerCover.append(i.zoomerLink).hover(function() { i.zoomerLink.show(), t(this).css("box-shadow", "inset 2px 2px " + 2 * parseInt(i.width, 10) + "px rgba(255, 255, 255, 0.2)") }, function() { i.zoomerLink.hide(), t(this).css("box-shadow", "none") }).mousedown(function() {}).bind("mouseout mouseup", function() { t(this).css("box-shadow", "none") }), i.zoomerLoader = t("<div/>").addClass("zoomer-loader").css(r).css(a).css(s).css({ textAlign: "center", fontSize: "15px", lineHeight: parseInt(i.height, 10) - parseInt((i.height - 80) / 10, 10) + "px", background: "#fff" }).html(i.loadingMessage), i.zoomerWrapper.append(i.zoomerCover).append(i.zoomerLoader), c && i.zoomerLoader.css(r), e[o]("updateWrapper")[o]("fadeOut")
        },
        updateWrapper: function() {
            var e = t(this),
                i = e.data(o);
            return t.each([i.zoomerWrapper.get(0), i.zoomerCover.get(0), i.zoomerLoader.get(0), i.zoomerSmall.get(0)], function() { t(this).css({ height: i.height, width: i.width }) }), e
        },
        fadeIn: function() {
            var e = t(this),
                i = e.data(o);
            return c ? e : (e.css(r), i.zoomerSmall.stop().css("opacity", 0).css(n).animate({ opacity: 1 }, 150, function() { e.css(n).css("opacity", 0).animate({ opacity: 1 }, 500) }), i.zoomerLoader.show().animate({ opacity: 0 }, 300, function() { t(this).hide() }), e)
        },
        fadeOut: function() {
            var e = t(this),
                i = e.data(o);
            return c ? e : (i.zoomerSmall.stop().animate({ opacity: 0 }, 300, function() { t(this).css("visibility", "hidden") }), i.zoomerLoader.css("opacity", 0).css(n).show().animate({ opacity: 1 }, 100), e)
        },
        zoom: function() {
            var e = t(this),
                i = e.data(o);
            return c ? (setTimeout(function() { e.css({ zoom: i.zoom, height: parseInt(i.height / i.zoom * (1 / (d >= 9 ? 1 : i.zoom)), 10), width: parseInt(i.width / i.zoom * (1 / (d >= 9 ? 1 : i.zoom)), 10) }).css(n), i.zoomerLink.remove(), i.zoomerCover.unbind("hover mouseover mouseout").addClass(i.ieMessageButtonClass).html(i.message).css({ width: 94, height: 14, fontSize: 12, padding: "6px 18px 6px 18px", top: parseInt(i.height - 36, 10), left: parseInt((i.width - 130) / 2, 10) }).show(), i.click || (i.click = function() { location.href = i.messageURL || i.src }), i.zoomerCover.unbind("click").bind("click", i.click), i.onComplete(e) }, 1e3), e) : i.externalSrc ? (e.css({ height: i.height / i.zoom, width: i.width / i.zoom, "transform-origin": i.tranformOrigin, "-webkit-transform-origin": i.tranformOrigin, "-moz-transform-origin": i.tranformOrigin, "-o-transform-origin": i.tranformOrigin, transform: "scale(" + i.zoom + ")", "-webkit-transform": "scale(" + i.zoom + ")", "-moz-transform": "scale(" + i.zoom + ")", "-o-transform": "scale(" + i.zoom + ")" }).css(n), e[o]("fadeIn"), i.onComplete(e), e) : (e.css({ height: i.height / i.zoom, width: i.width / i.zoom }).load(function() { e[o]("fadeIn"), i.onComplete(e) }), e)
        },
        src: function(e) {
            var i = t(this),
                n = i.data(o);
            return n.src = e, i[o]("fadeOut").attr("src", e), i
        },
        refresh: function() {
            var e = t(this),
                i = e.data(o);
            return e[o]("src", i.src)
        },
        zoomedBodyHeight: function() {
            var e = t(this),
                i = e.data(o);
            return i.externalSrc ? t.error("jQuery.zoomer: cannot access bodyHeight of an external iFrame") : i.zoom * t(e.get(0).contentWindow.document).height()
        }
    }, t.fn[o] = function(i) { return e[i] ? e[i].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof i && i ? void t.error("jQuery." + o + ": Method " + i + " does not exist") : e.init.apply(this, arguments) }
}(jQuery),
function(t, e, o) {
    function i(t) {
        var e = {},
            i = /^jQuery\d+$/;
        return o.each(t.attributes, function(t, o) { o.specified && !i.test(o.name) && (e[o.name] = o.value) }), e
    }

    function n(t, e) {
        var i = this,
            n = o(i);
        if (i.value == n.attr("placeholder") && n.hasClass("placeholder"))
            if (n.data("placeholder-password")) {
                if (n = n.hide().next().show().attr("id", n.removeAttr("id").data("placeholder-id")), t === !0) return n[0].value = e;
                n.focus()
            } else i.value = "", n.removeClass("placeholder"), i == a() && i.select()
    }

    function r() {
        var t, e = this,
            r = o(e),
            a = this.id;
        if ("" == e.value) {
            if ("password" == e.type) {
                if (!r.data("placeholder-textinput")) {
                    try { t = r.clone().attr({ type: "text" }) } catch (s) { t = o("<input>").attr(o.extend(i(this), { type: "text" })) }
                    t.removeAttr("name").data({ "placeholder-password": r, "placeholder-id": a }).bind("focus.placeholder", n), r.data({ "placeholder-textinput": t, "placeholder-id": a }).before(t)
                }
                r = r.removeAttr("id").hide().prev().attr("id", a).show()
            }
            r.addClass("placeholder"), r[0].value = r.attr("placeholder")
        } else r.removeClass("placeholder")
    }

    function a() { try { return e.activeElement } catch (t) {} }
    var s, l, c = "[object OperaMini]" == Object.prototype.toString.call(t.operamini),
        d = "placeholder" in e.createElement("input") && !c,
        h = "placeholder" in e.createElement("textarea") && !c,
        p = o.fn,
        u = o.valHooks,
        f = o.propHooks;
    d && h ? (l = p.placeholder = function() { return this }, l.input = l.textarea = !0) : (l = p.placeholder = function() { var t = this; return t.filter((d ? "textarea" : ":input") + "[placeholder]").not(".placeholder").bind({ "focus.placeholder": n, "blur.placeholder": r }).data("placeholder-enabled", !0).trigger("blur.placeholder"), t }, l.input = d, l.textarea = h, s = {
        get: function(t) {
            var e = o(t),
                i = e.data("placeholder-password");
            return i ? i[0].value : e.data("placeholder-enabled") && e.hasClass("placeholder") ? "" : t.value
        },
        set: function(t, e) {
            var i = o(t),
                s = i.data("placeholder-password");
            return s ? s[0].value = e : i.data("placeholder-enabled") ? ("" == e ? (t.value = e, t != a() && r.call(t)) : i.hasClass("placeholder") ? n.call(t, !0, e) || (t.value = e) : t.value = e, i) : t.value = e
        }
    }, d || (u.input = s, f.value = s), h || (u.textarea = s, f.value = s), o(function() {
        o(e).delegate("form", "submit.placeholder", function() {
            var t = o(".placeholder", this).each(n);
            setTimeout(function() { t.each(r) }, 10)
        })
    }), o(t).bind("beforeunload.placeholder", function() { o(".placeholder").each(function() { this.value = "" }) }))
}(this, document, jQuery),
function(t, e, o, i) {
    var n = t(e);
    t.fn.lazyload = function(r) {
        function a() {
            var e = 0;
            l.each(function() {
                var o = t(this);
                if (!c.skip_invisible || o.is(":visible"))
                    if (t.abovethetop(this, c) || t.leftofbegin(this, c));
                    else if (t.belowthefold(this, c) || t.rightoffold(this, c)) { if (++e > c.failure_limit) return !1 } else o.trigger("appear"), e = 0
            })
        }
        var s, l = this,
            c = { threshold: 0, failure_limit: 0, event: "scroll", effect: "show", container: e, data_attribute: "original", skip_invisible: !0, appear: null, load: null, placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" };
        return r && (i !== r.failurelimit && (r.failure_limit = r.failurelimit, delete r.failurelimit), i !== r.effectspeed && (r.effect_speed = r.effectspeed, delete r.effectspeed), t.extend(c, r)), s = c.container === i || c.container === e ? n : t(c.container), 0 === c.event.indexOf("scroll") && s.bind(c.event, function() { return a() }), this.each(function() {
            var e = this,
                o = t(e);
            e.loaded = !1, (o.attr("src") === i || o.attr("src") === !1) && o.is("img") && o.attr("src", c.placeholder), o.one("appear", function() {
                if (!this.loaded) {
                    if (c.appear) {
                        var i = l.length;
                        c.appear.call(e, i, c)
                    }
                    t("<img />").bind("load", function() {
                        var i = o.attr("data-" + c.data_attribute);
                        o.hide(), o.is("img") ? o.attr("src", i) : o.css("background-image", "url('" + i + "')"), o[c.effect](c.effect_speed), e.loaded = !0;
                        var n = t.grep(l, function(t) { return !t.loaded });
                        if (l = t(n), c.load) {
                            var r = l.length;
                            c.load.call(e, r, c)
                        }
                    }).attr("src", o.attr("data-" + c.data_attribute))
                }
            }), 0 !== c.event.indexOf("scroll") && o.bind(c.event, function() { e.loaded || o.trigger("appear") })
        }), n.bind("resize", function() { a() }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && n.bind("pageshow", function(e) { e.originalEvent && e.originalEvent.persisted && l.each(function() { t(this).trigger("appear") }) }), t(o).ready(function() { a() }), this
    }, t.belowthefold = function(o, r) { var a; return a = r.container === i || r.container === e ? (e.innerHeight ? e.innerHeight : n.height()) + n.scrollTop() : t(r.container).offset().top + t(r.container).height(), a <= t(o).offset().top - r.threshold }, t.rightoffold = function(o, r) { var a; return a = r.container === i || r.container === e ? n.width() + n.scrollLeft() : t(r.container).offset().left + t(r.container).width(), a <= t(o).offset().left - r.threshold }, t.abovethetop = function(o, r) { var a; return a = r.container === i || r.container === e ? n.scrollTop() : t(r.container).offset().top, a >= t(o).offset().top + r.threshold + t(o).height() }, t.leftofbegin = function(o, r) { var a; return a = r.container === i || r.container === e ? n.scrollLeft() : t(r.container).offset().left, a >= t(o).offset().left + r.threshold + t(o).width() }, t.inviewport = function(e, o) { return !(t.rightoffold(e, o) || t.leftofbegin(e, o) || t.belowthefold(e, o) || t.abovethetop(e, o)) }, t.extend(t.expr[":"], { "below-the-fold": function(e) { return t.belowthefold(e, { threshold: 0 }) }, "above-the-top": function(e) { return !t.belowthefold(e, { threshold: 0 }) }, "right-of-screen": function(e) { return t.rightoffold(e, { threshold: 0 }) }, "left-of-screen": function(e) { return !t.rightoffold(e, { threshold: 0 }) }, "in-viewport": function(e) { return t.inviewport(e, { threshold: 0 }) }, "above-the-fold": function(e) { return !t.belowthefold(e, { threshold: 0 }) }, "right-of-fold": function(e) { return t.rightoffold(e, { threshold: 0 }) }, "left-of-fold": function(e) { return !t.rightoffold(e, { threshold: 0 }) } })
}(jQuery, window, document),
function() {
    "use strict";

    function t(i) {
        if (!i) throw new Error("No options passed to Waypoint constructor");
        if (!i.element) throw new Error("No element option passed to Waypoint constructor");
        if (!i.handler) throw new Error("No handler option passed to Waypoint constructor");
        this.key = "waypoint-" + e, this.options = t.Adapter.extend({}, t.defaults, i), this.element = this.options.element, this.adapter = new t.Adapter(this.element), this.callback = i.handler, this.axis = this.options.horizontal ? "horizontal" : "vertical", this.enabled = this.options.enabled, this.triggerPoint = null, this.group = t.Group.findOrCreate({ name: this.options.group, axis: this.axis }), this.context = t.Context.findOrCreateByElement(this.options.context), t.offsetAliases[this.options.offset] && (this.options.offset = t.offsetAliases[this.options.offset]), this.group.add(this), this.context.add(this), o[this.key] = this, e += 1
    }
    var e = 0,
        o = {};
    t.prototype.queueTrigger = function(t) { this.group.queueTrigger(this, t) }, t.prototype.trigger = function(t) { this.enabled && this.callback && this.callback.apply(this, t) }, t.prototype.destroy = function() { this.context.remove(this), this.group.remove(this), delete o[this.key] }, t.prototype.disable = function() { return this.enabled = !1, this }, t.prototype.enable = function() { return this.context.refresh(), this.enabled = !0, this }, t.prototype.next = function() { return this.group.next(this) }, t.prototype.previous = function() { return this.group.previous(this) }, t.invokeAll = function(t) { var e = []; for (var i in o) e.push(o[i]); for (var n = 0, r = e.length; r > n; n++) e[n][t]() }, t.destroyAll = function() { t.invokeAll("destroy") }, t.disableAll = function() { t.invokeAll("disable") }, t.enableAll = function() { t.invokeAll("enable") }, t.refreshAll = function() { t.Context.refreshAll() }, t.viewportHeight = function() { return window.innerHeight || document.documentElement.clientHeight }, t.viewportWidth = function() { return document.documentElement.clientWidth }, t.adapters = [], t.defaults = { context: window, continuous: !0, enabled: !0, group: "default", horizontal: !1, offset: 0 }, t.offsetAliases = { "bottom-in-view": function() { return this.context.innerHeight() - this.adapter.outerHeight() }, "right-in-view": function() { return this.context.innerWidth() - this.adapter.outerWidth() } }, window.Waypoint = t
}(),
function() {
    "use strict";

    function t(t) { window.setTimeout(t, 1e3 / 60) }

    function e(t) { this.element = t, this.Adapter = n.Adapter, this.adapter = new this.Adapter(t), this.key = "waypoint-context-" + o, this.didScroll = !1, this.didResize = !1, this.oldScroll = { x: this.adapter.scrollLeft(), y: this.adapter.scrollTop() }, this.waypoints = { vertical: {}, horizontal: {} }, t.waypointContextKey = this.key, i[t.waypointContextKey] = this, o += 1, this.createThrottledScrollHandler(), this.createThrottledResizeHandler() }
    var o = 0,
        i = {},
        n = window.Waypoint,
        r = window.onload;
    e.prototype.add = function(t) {
        var e = t.options.horizontal ? "horizontal" : "vertical";
        this.waypoints[e][t.key] = t, this.refresh()
    }, e.prototype.checkEmpty = function() {
        var t = this.Adapter.isEmptyObject(this.waypoints.horizontal),
            e = this.Adapter.isEmptyObject(this.waypoints.vertical);
        t && e && (this.adapter.off(".waypoints"), delete i[this.key])
    }, e.prototype.createThrottledResizeHandler = function() {
        function t() { e.handleResize(), e.didResize = !1 }
        var e = this;
        this.adapter.on("resize.waypoints", function() { e.didResize || (e.didResize = !0, n.requestAnimationFrame(t)) })
    }, e.prototype.createThrottledScrollHandler = function() {
        function t() { e.handleScroll(), e.didScroll = !1 }
        var e = this;
        this.adapter.on("scroll.waypoints", function() {
            (!e.didScroll || n.isTouch) && (e.didScroll = !0, n.requestAnimationFrame(t))
        })
    }, e.prototype.handleResize = function() { n.Context.refreshAll() }, e.prototype.handleScroll = function() {
        var t = {},
            e = { horizontal: { newScroll: this.adapter.scrollLeft(), oldScroll: this.oldScroll.x, forward: "right", backward: "left" }, vertical: { newScroll: this.adapter.scrollTop(), oldScroll: this.oldScroll.y, forward: "down", backward: "up" } };
        for (var o in e) {
            var i = e[o],
                n = i.newScroll > i.oldScroll,
                r = n ? i.forward : i.backward;
            for (var a in this.waypoints[o]) {
                var s = this.waypoints[o][a],
                    l = i.oldScroll < s.triggerPoint,
                    c = i.newScroll >= s.triggerPoint,
                    d = l && c,
                    h = !l && !c;
                (d || h) && (s.queueTrigger(r), t[s.group.id] = s.group)
            }
        }
        for (var p in t) t[p].flushTriggers();
        this.oldScroll = { x: e.horizontal.newScroll, y: e.vertical.newScroll }
    }, e.prototype.innerHeight = function() { return this.element == this.element.window ? n.viewportHeight() : this.adapter.innerHeight() }, e.prototype.remove = function(t) { delete this.waypoints[t.axis][t.key], this.checkEmpty() }, e.prototype.innerWidth = function() { return this.element == this.element.window ? n.viewportWidth() : this.adapter.innerWidth() }, e.prototype.destroy = function() {
        var t = [];
        for (var e in this.waypoints)
            for (var o in this.waypoints[e]) t.push(this.waypoints[e][o]);
        for (var i = 0, n = t.length; n > i; i++) t[i].destroy()
    }, e.prototype.refresh = function() {
        var t, e = this.element == this.element.window,
            o = e ? void 0 : this.adapter.offset(),
            i = {};
        this.handleScroll(), t = { horizontal: { contextOffset: e ? 0 : o.left, contextScroll: e ? 0 : this.oldScroll.x, contextDimension: this.innerWidth(), oldScroll: this.oldScroll.x, forward: "right", backward: "left", offsetProp: "left" }, vertical: { contextOffset: e ? 0 : o.top, contextScroll: e ? 0 : this.oldScroll.y, contextDimension: this.innerHeight(), oldScroll: this.oldScroll.y, forward: "down", backward: "up", offsetProp: "top" } };
        for (var r in t) {
            var a = t[r];
            for (var s in this.waypoints[r]) {
                var l, c, d, h, p, u = this.waypoints[r][s],
                    f = u.options.offset,
                    g = u.triggerPoint,
                    m = 0,
                    w = null == g;
                u.element !== u.element.window && (m = u.adapter.offset()[a.offsetProp]), "function" == typeof f ? f = f.apply(u) : "string" == typeof f && (f = parseFloat(f), u.options.offset.indexOf("%") > -1 && (f = Math.ceil(a.contextDimension * f / 100))), l = a.contextScroll - a.contextOffset, u.triggerPoint = m + l - f, c = g < a.oldScroll, d = u.triggerPoint >= a.oldScroll, h = c && d, p = !c && !d, !w && h ? (u.queueTrigger(a.backward), i[u.group.id] = u.group) : !w && p ? (u.queueTrigger(a.forward), i[u.group.id] = u.group) : w && a.oldScroll >= u.triggerPoint && (u.queueTrigger(a.forward), i[u.group.id] = u.group)
            }
        }
        return n.requestAnimationFrame(function() { for (var t in i) i[t].flushTriggers() }), this
    }, e.findOrCreateByElement = function(t) { return e.findByElement(t) || new e(t) }, e.refreshAll = function() { for (var t in i) i[t].refresh() }, e.findByElement = function(t) { return i[t.waypointContextKey] }, window.onload = function() { r && r(), e.refreshAll() }, n.requestAnimationFrame = function(e) {
        var o = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || t;
        o.call(window, e)
    }, n.Context = e
}(),
function() {
    "use strict";

    function t(t, e) { return t.triggerPoint - e.triggerPoint }

    function e(t, e) { return e.triggerPoint - t.triggerPoint }

    function o(t) { this.name = t.name, this.axis = t.axis, this.id = this.name + "-" + this.axis, this.waypoints = [], this.clearTriggerQueues(), i[this.axis][this.name] = this }
    var i = { vertical: {}, horizontal: {} },
        n = window.Waypoint;
    o.prototype.add = function(t) { this.waypoints.push(t) }, o.prototype.clearTriggerQueues = function() { this.triggerQueues = { up: [], down: [], left: [], right: [] } }, o.prototype.flushTriggers = function() {
        for (var o in this.triggerQueues) {
            var i = this.triggerQueues[o],
                n = "up" === o || "left" === o;
            i.sort(n ? e : t);
            for (var r = 0, a = i.length; a > r; r += 1) {
                var s = i[r];
                (s.options.continuous || r === i.length - 1) && s.trigger([o])
            }
        }
        this.clearTriggerQueues()
    }, o.prototype.next = function(e) {
        this.waypoints.sort(t);
        var o = n.Adapter.inArray(e, this.waypoints),
            i = o === this.waypoints.length - 1;
        return i ? null : this.waypoints[o + 1]
    }, o.prototype.previous = function(e) { this.waypoints.sort(t); var o = n.Adapter.inArray(e, this.waypoints); return o ? this.waypoints[o - 1] : null }, o.prototype.queueTrigger = function(t, e) { this.triggerQueues[e].push(t) }, o.prototype.remove = function(t) {
        var e = n.Adapter.inArray(t, this.waypoints);
        e > -1 && this.waypoints.splice(e, 1)
    }, o.prototype.first = function() { return this.waypoints[0] }, o.prototype.last = function() { return this.waypoints[this.waypoints.length - 1] }, o.findOrCreate = function(t) { return i[t.axis][t.name] || new o(t) }, n.Group = o
}(),
function() {
    "use strict";

    function t(t) { this.$element = e(t) }
    var e = window.jQuery,
        o = window.Waypoint;
    e.each(["innerHeight", "innerWidth", "off", "offset", "on", "outerHeight", "outerWidth", "scrollLeft", "scrollTop"], function(e, o) { t.prototype[o] = function() { var t = Array.prototype.slice.call(arguments); return this.$element[o].apply(this.$element, t) } }), e.each(["extend", "inArray", "isEmptyObject"], function(o, i) { t[i] = e[i] }), o.adapters.push({ name: "jquery", Adapter: t }), o.Adapter = t
}(),
function() {
    "use strict";

    function t(t) {
        return function() {
            var o = [],
                i = arguments[0];
            return t.isFunction(arguments[0]) && (i = t.extend({}, arguments[1]), i.handler = arguments[0]), this.each(function() { var n = t.extend({}, i, { element: this }); "string" == typeof n.context && (n.context = t(this).closest(n.context)[0]), o.push(new e(n)) }), o
        }
    }
    var e = window.Waypoint;
    window.jQuery && (window.jQuery.fn.waypoint = t(window.jQuery)), window.Zepto && (window.Zepto.fn.waypoint = t(window.Zepto))
}(), $(function() {
    $(".tip").tooltip(), $("input, textarea").placeholder(), $("img.lazy").lazyload({ effect: "fadeIn" }), $(".navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li.active").closest("li.dropdown").addClass("active"), $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on("click", function(t) { t.preventDefault(), $(".navbar-bootsnipp .bootsnipp-search .input-group > input").val(""), $(".navbar-bootsnipp .bootsnipp-search").toggleClass("open"), $('a[href="#toggle-search"]').closest("li").toggleClass("active"), $(".navbar-bootsnipp .bootsnipp-search").hasClass("open") && setTimeout(function() { $(".navbar-bootsnipp .bootsnipp-search .form-control").focus() }, 100) });
    var t = function() { "undefined" != typeof twttr && twttr ? twttr.widgets.load() : $.getScript("//platform.twitter.com/widgets.js") };
    $("#js-twitter-follow").length > 0 && $("#js-twitter-follow").waypoint(function() { t(), this.destroy() }, { offset: "bottom-in-view" }), $("#js-twitter-share").length > 0 && $("#js-twitter-share").waypoint(function() { t(), this.destroy() }, { offset: "bottom-in-view" }), $("#js-facebook-share").length > 0 && $("#js-facebook-share").waypoint(function() {
        if ("undefined" == typeof FB) {
            var t, e = document.getElementsByTagName("script")[0];
            document.getElementById("facebook-jssdk") || (t = document.createElement("script"), t.id = "facebook-jssdk", t.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=112989545392380", e.parentNode.insertBefore(t, e))
        }
        this.destroy()
    }, { offset: "bottom-in-view" })
});