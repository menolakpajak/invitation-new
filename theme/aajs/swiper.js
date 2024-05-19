function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}
function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
        var descriptor = props[i];
        descriptor.enumerable = descriptor.enumerable || false;
        descriptor.configurable = true;
        if ("value" in descriptor) descriptor.writable = true;
        Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor);
    }
}
function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    Object.defineProperty(Constructor, "prototype", { writable: false });
    return Constructor;
}
function _slicedToArray(arr, i) {
    return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest();
}
function _nonIterableRest() {
    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}
function _iterableToArrayLimit(arr, i) {
    var _i = null == arr ? null : ("undefined" != typeof Symbol && arr[Symbol.iterator]) || arr["@@iterator"];
    if (null != _i) {
        var _s,
            _e,
            _x,
            _r,
            _arr = [],
            _n = !0,
            _d = !1;
        try {
            if (((_x = (_i = _i.call(arr)).next), 0 === i)) {
                if (Object(_i) !== _i) return;
                _n = !1;
            } else for (; !(_n = (_s = _x.call(_i)).done) && (_arr.push(_s.value), _arr.length !== i); _n = !0);
        } catch (err) {
            (_d = !0), (_e = err);
        } finally {
            try {
                if (!_n && null != _i.return && ((_r = _i.return()), Object(_r) !== _r)) return;
            } finally {
                if (_d) throw _e;
            }
        }
        return _arr;
    }
}
function _arrayWithHoles(arr) {
    if (Array.isArray(arr)) return arr;
}
function _toConsumableArray(arr) {
    return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread();
}
function _nonIterableSpread() {
    throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}
function _unsupportedIterableToArray(o, minLen) {
    if (!o) return;
    if (typeof o === "string") return _arrayLikeToArray(o, minLen);
    var n = Object.prototype.toString.call(o).slice(8, -1);
    if (n === "Object" && o.constructor) n = o.constructor.name;
    if (n === "Map" || n === "Set") return Array.from(o);
    if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen);
}
function _iterableToArray(iter) {
    if ((typeof Symbol !== "undefined" && iter[Symbol.iterator] != null) || iter["@@iterator"] != null) return Array.from(iter);
}
function _arrayWithoutHoles(arr) {
    if (Array.isArray(arr)) return _arrayLikeToArray(arr);
}
function _arrayLikeToArray(arr, len) {
    if (len == null || len > arr.length) len = arr.length;
    for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i];
    return arr2;
}
function _defineProperty(obj, key, value) {
    key = _toPropertyKey(key);
    if (key in obj) {
        Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });
    } else {
        obj[key] = value;
    }
    return obj;
}
function _toPropertyKey(arg) {
    var key = _toPrimitive(arg, "string");
    return _typeof(key) === "symbol" ? key : String(key);
}
function _toPrimitive(input, hint) {
    if (_typeof(input) !== "object" || input === null) return input;
    var prim = input[Symbol.toPrimitive];
    if (prim !== undefined) {
        var res = prim.call(input, hint || "default");
        if (_typeof(res) !== "object") return res;
        throw new TypeError("@@toPrimitive must return a primitive value.");
    }
    return (hint === "string" ? String : Number)(input);
}
function _typeof(obj) {
    "@babel/helpers - typeof";
    return (
        (_typeof =
            "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                ? function (obj) {
                      return typeof obj;
                  }
                : function (obj) {
                      return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
                  }),
        _typeof(obj)
    );
}
/**
 * Swiper 9.0.0
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2023 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: February 1, 2023
 */

!(function (e, t) {
    "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) && "undefined" != typeof module
        ? (module.exports = t())
        : "function" == typeof define && define.amd
        ? define(t)
        : ((e = "undefined" != typeof globalThis ? globalThis : e || self).Swiper = t());
})(this, function () {
    "use strict";

    function e(e) {
        return null !== e && "object" == _typeof(e) && "constructor" in e && e.constructor === Object;
    }
    function t(s, a) {
        void 0 === s && (s = {}),
            void 0 === a && (a = {}),
            Object.keys(a).forEach(function (i) {
                void 0 === s[i] ? (s[i] = a[i]) : e(a[i]) && e(s[i]) && Object.keys(a[i]).length > 0 && t(s[i], a[i]);
            });
    }
    var s = {
        body: {},
        addEventListener: function addEventListener() {},
        removeEventListener: function removeEventListener() {},
        activeElement: {
            blur: function blur() {},
            nodeName: "",
        },
        querySelector: function querySelector() {
            return null;
        },
        querySelectorAll: function querySelectorAll() {
            return [];
        },
        getElementById: function getElementById() {
            return null;
        },
        createEvent: function createEvent() {
            return {
                initEvent: function initEvent() {},
            };
        },
        createElement: function createElement() {
            return {
                children: [],
                childNodes: [],
                style: {},
                setAttribute: function setAttribute() {},
                getElementsByTagName: function getElementsByTagName() {
                    return [];
                },
            };
        },
        createElementNS: function createElementNS() {
            return {};
        },
        importNode: function importNode() {
            return null;
        },
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: "",
        },
    };
    function a() {
        var e = "undefined" != typeof document ? document : {};
        return t(e, s), e;
    }
    var i = {
        document: s,
        navigator: {
            userAgent: "",
        },
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: "",
        },
        history: {
            replaceState: function replaceState() {},
            pushState: function pushState() {},
            go: function go() {},
            back: function back() {},
        },
        CustomEvent: function CustomEvent() {
            return this;
        },
        addEventListener: function addEventListener() {},
        removeEventListener: function removeEventListener() {},
        getComputedStyle: function getComputedStyle() {
            return {
                getPropertyValue: function getPropertyValue() {
                    return "";
                },
            };
        },
        Image: function Image() {},
        Date: function Date() {},
        screen: {},
        setTimeout: function setTimeout() {},
        clearTimeout: function clearTimeout() {},
        matchMedia: function matchMedia() {
            return {};
        },
        requestAnimationFrame: function requestAnimationFrame(e) {
            return "undefined" == typeof setTimeout ? (e(), null) : setTimeout(e, 0);
        },
        cancelAnimationFrame: function cancelAnimationFrame(e) {
            "undefined" != typeof setTimeout && clearTimeout(e);
        },
    };
    function r() {
        var e = "undefined" != typeof window ? window : {};
        return t(e, i), e;
    }
    function n(e, t) {
        return void 0 === t && (t = 0), setTimeout(e, t);
    }
    function l() {
        return Date.now();
    }
    function o(e, t) {
        void 0 === t && (t = "x");
        var s = r();
        var a, i, n;
        var l = (function (e) {
            var t = r();
            var s;
            return t.getComputedStyle && (s = t.getComputedStyle(e, null)), !s && e.currentStyle && (s = e.currentStyle), s || (s = e.style), s;
        })(e);
        return (
            s.WebKitCSSMatrix
                ? ((i = l.transform || l.webkitTransform),
                  i.split(",").length > 6 &&
                      (i = i
                          .split(", ")
                          .map(function (e) {
                              return e.replace(",", ".");
                          })
                          .join(", ")),
                  (n = new s.WebKitCSSMatrix("none" === i ? "" : i)))
                : ((n = l.MozTransform || l.OTransform || l.MsTransform || l.msTransform || l.transform || l.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,")), (a = n.toString().split(","))),
            "x" === t && (i = s.WebKitCSSMatrix ? n.m41 : 16 === a.length ? parseFloat(a[12]) : parseFloat(a[4])),
            "y" === t && (i = s.WebKitCSSMatrix ? n.m42 : 16 === a.length ? parseFloat(a[13]) : parseFloat(a[5])),
            i || 0
        );
    }
    function d(e) {
        return "object" == _typeof(e) && null !== e && e.constructor && "Object" === Object.prototype.toString.call(e).slice(8, -1);
    }
    function c(e) {
        return "undefined" != typeof window && void 0 !== window.HTMLElement ? e instanceof HTMLElement : e && (1 === e.nodeType || 11 === e.nodeType);
    }
    function p() {
        var e = Object(arguments.length <= 0 ? void 0 : arguments[0]),
            t = ["__proto__", "constructor", "prototype"];
        for (var _s = 1; _s < arguments.length; _s += 1) {
            var _a = _s < 0 || arguments.length <= _s ? void 0 : arguments[_s];
            if (null != _a && !c(_a)) {
                var _s2 = Object.keys(Object(_a)).filter(function (e) {
                    return t.indexOf(e) < 0;
                });
                for (var _t = 0, _i = _s2.length; _t < _i; _t += 1) {
                    var _i2 = _s2[_t],
                        _r = Object.getOwnPropertyDescriptor(_a, _i2);
                    void 0 !== _r &&
                        _r.enumerable &&
                        (d(e[_i2]) && d(_a[_i2])
                            ? _a[_i2].__swiper__
                                ? (e[_i2] = _a[_i2])
                                : p(e[_i2], _a[_i2])
                            : !d(e[_i2]) && d(_a[_i2])
                            ? ((e[_i2] = {}), _a[_i2].__swiper__ ? (e[_i2] = _a[_i2]) : p(e[_i2], _a[_i2]))
                            : (e[_i2] = _a[_i2]));
                }
            }
        }
        return e;
    }
    function u(e, t, s) {
        e.style.setProperty(t, s);
    }
    function m(e) {
        var t = e.swiper,
            s = e.targetPosition,
            a = e.side;
        var i = r(),
            n = -t.translate;
        var l,
            o = null;
        var d = t.params.speed;
        (t.wrapperEl.style.scrollSnapType = "none"), i.cancelAnimationFrame(t.cssModeFrameID);
        var c = s > n ? "next" : "prev",
            p = function p(e, t) {
                return ("next" === c && e >= t) || ("prev" === c && e <= t);
            },
            u = function u() {
                (l = new Date().getTime()), null === o && (o = l);
                var e = Math.max(Math.min((l - o) / d, 1), 0),
                    r = 0.5 - Math.cos(e * Math.PI) / 2;
                var c = n + r * (s - n);
                if ((p(c, s) && (c = s), t.wrapperEl.scrollTo(_defineProperty({}, a, c)), p(c, s)))
                    return (
                        (t.wrapperEl.style.overflow = "hidden"),
                        (t.wrapperEl.style.scrollSnapType = ""),
                        setTimeout(function () {
                            (t.wrapperEl.style.overflow = ""), t.wrapperEl.scrollTo(_defineProperty({}, a, c));
                        }),
                        void i.cancelAnimationFrame(t.cssModeFrameID)
                    );
                t.cssModeFrameID = i.requestAnimationFrame(u);
            };
        u();
    }
    function h(e) {
        return e.querySelector(".swiper-slide-transform") || (e.shadowEl && e.shadowEl.querySelector(".swiper-slide-transform")) || e;
    }
    function f(e, t) {
        return (
            void 0 === t && (t = ""),
            _toConsumableArray(e.children).filter(function (e) {
                return e.matches(t);
            })
        );
    }
    function g(e, t) {
        var _s$classList;
        void 0 === t && (t = []);
        var s = document.createElement(e);
        return (_s$classList = s.classList).add.apply(_s$classList, _toConsumableArray(Array.isArray(t) ? t : [t])), s;
    }
    function v(e) {
        var t = r(),
            s = a(),
            i = e.getBoundingClientRect(),
            n = s.body,
            l = e.clientTop || n.clientTop || 0,
            o = e.clientLeft || n.clientLeft || 0,
            d = e === t ? t.scrollY : e.scrollTop,
            c = e === t ? t.scrollX : e.scrollLeft;
        return {
            top: i.top + d - l,
            left: i.left + c - o,
        };
    }
    function w(e, t) {
        return r().getComputedStyle(e, null).getPropertyValue(t);
    }
    function b(e) {
        var t,
            s = e;
        if (s) {
            for (t = 0; null !== (s = s.previousSibling); ) 1 === s.nodeType && (t += 1);
            return t;
        }
    }
    function y(e, t) {
        var s = [];
        var a = e.parentElement;
        for (; a; ) t ? a.matches(t) && s.push(a) : s.push(a), (a = a.parentElement);
        return s;
    }
    function E(e, t) {
        t &&
            e.addEventListener("transitionend", function s(a) {
                a.target === e && (t.call(e, a), e.removeEventListener("transitionend", s));
            });
    }
    function x(e, t, s) {
        var a = r();
        return s
            ? e["width" === t ? "offsetWidth" : "offsetHeight"] +
                  parseFloat(a.getComputedStyle(e, null).getPropertyValue("width" === t ? "margin-right" : "margin-top")) +
                  parseFloat(a.getComputedStyle(e, null).getPropertyValue("width" === t ? "margin-left" : "margin-bottom"))
            : e.offsetWidth;
    }
    var S, T, M;
    function C() {
        return (
            S ||
                (S = (function () {
                    var e = r(),
                        t = a();
                    return {
                        smoothScroll: t.documentElement && "scrollBehavior" in t.documentElement.style,
                        touch: !!("ontouchstart" in e || (e.DocumentTouch && t instanceof e.DocumentTouch)),
                    };
                })()),
            S
        );
    }
    function P(e) {
        return (
            void 0 === e && (e = {}),
            T ||
                (T = (function (e) {
                    var _ref = void 0 === e ? {} : e,
                        t = _ref.userAgent;
                    var s = C(),
                        a = r(),
                        i = a.navigator.platform,
                        n = t || a.navigator.userAgent,
                        l = {
                            ios: !1,
                            android: !1,
                        },
                        o = a.screen.width,
                        d = a.screen.height,
                        c = n.match(/(Android);?[\s\/]+([\d.]+)?/);
                    var p = n.match(/(iPad).*OS\s([\d_]+)/);
                    var u = n.match(/(iPod)(.*OS\s([\d_]+))?/),
                        m = !p && n.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
                        h = "Win32" === i;
                    var f = "MacIntel" === i;
                    return (
                        !p &&
                            f &&
                            s.touch &&
                            ["1024x1366", "1366x1024", "834x1194", "1194x834", "834x1112", "1112x834", "768x1024", "1024x768", "820x1180", "1180x820", "810x1080", "1080x810"].indexOf("".concat(o, "x").concat(d)) >= 0 &&
                            ((p = n.match(/(Version)\/([\d.]+)/)), p || (p = [0, 1, "13_0_0"]), (f = !1)),
                        c && !h && ((l.os = "android"), (l.android = !0)),
                        (p || m || u) && ((l.os = "ios"), (l.ios = !0)),
                        l
                    );
                })(e)),
            T
        );
    }
    function L() {
        return (
            M ||
                (M = (function () {
                    var e = r();
                    var t = !1;
                    function s() {
                        var t = e.navigator.userAgent.toLowerCase();
                        return t.indexOf("safari") >= 0 && t.indexOf("chrome") < 0 && t.indexOf("android") < 0;
                    }
                    if (s()) {
                        var _s3 = String(e.navigator.userAgent);
                        if (_s3.includes("Version/")) {
                            var _s3$split$1$split$0$s = _s3
                                    .split("Version/")[1]
                                    .split(" ")[0]
                                    .split(".")
                                    .map(function (e) {
                                        return Number(e);
                                    }),
                                _s3$split$1$split$0$s2 = _slicedToArray(_s3$split$1$split$0$s, 2),
                                _e2 = _s3$split$1$split$0$s2[0],
                                _a2 = _s3$split$1$split$0$s2[1];
                            t = _e2 < 16 || (16 === _e2 && _a2 < 2);
                        }
                    }
                    return {
                        isSafari: t || s(),
                        needPerspectiveFix: t,
                        isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(e.navigator.userAgent),
                    };
                })()),
            M
        );
    }
    var A = {
        on: function on(e, t, s) {
            var a = this;
            if (!a.eventsListeners || a.destroyed) return a;
            if ("function" != typeof t) return a;
            var i = s ? "unshift" : "push";
            return (
                e.split(" ").forEach(function (e) {
                    a.eventsListeners[e] || (a.eventsListeners[e] = []), a.eventsListeners[e][i](t);
                }),
                a
            );
        },
        once: function once(e, t, s) {
            var a = this;
            if (!a.eventsListeners || a.destroyed) return a;
            if ("function" != typeof t) return a;
            function i() {
                a.off(e, i), i.__emitterProxy && delete i.__emitterProxy;
                for (var s = arguments.length, r = new Array(s), n = 0; n < s; n++) r[n] = arguments[n];
                t.apply(a, r);
            }
            return (i.__emitterProxy = t), a.on(e, i, s);
        },
        onAny: function onAny(e, t) {
            var s = this;
            if (!s.eventsListeners || s.destroyed) return s;
            if ("function" != typeof e) return s;
            var a = t ? "unshift" : "push";
            return s.eventsAnyListeners.indexOf(e) < 0 && s.eventsAnyListeners[a](e), s;
        },
        offAny: function offAny(e) {
            var t = this;
            if (!t.eventsListeners || t.destroyed) return t;
            if (!t.eventsAnyListeners) return t;
            var s = t.eventsAnyListeners.indexOf(e);
            return s >= 0 && t.eventsAnyListeners.splice(s, 1), t;
        },
        off: function off(e, t) {
            var s = this;
            return !s.eventsListeners || s.destroyed
                ? s
                : s.eventsListeners
                ? (e.split(" ").forEach(function (e) {
                      void 0 === t
                          ? (s.eventsListeners[e] = [])
                          : s.eventsListeners[e] &&
                            s.eventsListeners[e].forEach(function (a, i) {
                                (a === t || (a.__emitterProxy && a.__emitterProxy === t)) && s.eventsListeners[e].splice(i, 1);
                            });
                  }),
                  s)
                : s;
        },
        emit: function emit() {
            var e = this;
            if (!e.eventsListeners || e.destroyed) return e;
            if (!e.eventsListeners) return e;
            var t, s, a;
            for (var i = arguments.length, r = new Array(i), n = 0; n < i; n++) r[n] = arguments[n];
            "string" == typeof r[0] || Array.isArray(r[0]) ? ((t = r[0]), (s = r.slice(1, r.length)), (a = e)) : ((t = r[0].events), (s = r[0].data), (a = r[0].context || e)), s.unshift(a);
            return (
                (Array.isArray(t) ? t : t.split(" ")).forEach(function (t) {
                    e.eventsAnyListeners &&
                        e.eventsAnyListeners.length &&
                        e.eventsAnyListeners.forEach(function (e) {
                            e.apply(a, [t].concat(_toConsumableArray(s)));
                        }),
                        e.eventsListeners &&
                            e.eventsListeners[t] &&
                            e.eventsListeners[t].forEach(function (e) {
                                e.apply(a, s);
                            });
                }),
                e
            );
        },
    };
    var z = {
        updateSize: function updateSize() {
            var e = this;
            var t, s;
            var a = e.el;
            (t = void 0 !== e.params.width && null !== e.params.width ? e.params.width : a.clientWidth),
                (s = void 0 !== e.params.height && null !== e.params.height ? e.params.height : a.clientHeight),
                (0 === t && e.isHorizontal()) ||
                    (0 === s && e.isVertical()) ||
                    ((t = t - parseInt(w(a, "padding-left") || 0, 10) - parseInt(w(a, "padding-right") || 0, 10)),
                    (s = s - parseInt(w(a, "padding-top") || 0, 10) - parseInt(w(a, "padding-bottom") || 0, 10)),
                    Number.isNaN(t) && (t = 0),
                    Number.isNaN(s) && (s = 0),
                    Object.assign(e, {
                        width: t,
                        height: s,
                        size: e.isHorizontal() ? t : s,
                    }));
        },
        updateSlides: function updateSlides() {
            var e = this;
            function t(t) {
                return e.isHorizontal()
                    ? t
                    : {
                          width: "height",
                          "margin-top": "margin-left",
                          "margin-bottom ": "margin-right",
                          "margin-left": "margin-top",
                          "margin-right": "margin-bottom",
                          "padding-left": "padding-top",
                          "padding-right": "padding-bottom",
                          marginRight: "marginBottom",
                      }[t];
            }
            function s(e, s) {
                return parseFloat(e.getPropertyValue(t(s)) || 0);
            }
            var a = e.params,
                i = e.wrapperEl,
                r = e.slidesEl,
                n = e.size,
                l = e.rtlTranslate,
                o = e.wrongRTL,
                d = e.virtual && a.virtual.enabled,
                c = d ? e.virtual.slides.length : e.slides.length,
                p = f(r, ".".concat(e.params.slideClass, ", swiper-slide")),
                m = d ? e.virtual.slides.length : p.length;
            var h = [];
            var g = [],
                v = [];
            var b = a.slidesOffsetBefore;
            "function" == typeof b && (b = a.slidesOffsetBefore.call(e));
            var y = a.slidesOffsetAfter;
            "function" == typeof y && (y = a.slidesOffsetAfter.call(e));
            var E = e.snapGrid.length,
                S = e.slidesGrid.length;
            var T = a.spaceBetween,
                M = -b,
                C = 0,
                P = 0;
            if (void 0 === n) return;
            "string" == typeof T && T.indexOf("%") >= 0 && (T = (parseFloat(T.replace("%", "")) / 100) * n),
                (e.virtualSize = -T),
                p.forEach(function (e) {
                    l ? (e.style.marginLeft = "") : (e.style.marginRight = ""), (e.style.marginBottom = ""), (e.style.marginTop = "");
                }),
                a.centeredSlides && a.cssMode && (u(i, "--swiper-centered-offset-before", ""), u(i, "--swiper-centered-offset-after", ""));
            var L = a.grid && a.grid.rows > 1 && e.grid;
            var A;
            L && e.grid.initSlides(m);
            var z =
                "auto" === a.slidesPerView &&
                a.breakpoints &&
                Object.keys(a.breakpoints).filter(function (e) {
                    return void 0 !== a.breakpoints[e].slidesPerView;
                }).length > 0;
            for (var _i3 = 0; _i3 < m; _i3 += 1) {
                var _r2 = void 0;
                if (((A = 0), p[_i3] && (_r2 = p[_i3]), L && e.grid.updateSlide(_i3, _r2, m, t), !p[_i3] || "none" !== w(_r2, "display"))) {
                    if ("auto" === a.slidesPerView) {
                        z && (p[_i3].style[t("width")] = "");
                        var _n2 = getComputedStyle(_r2),
                            _l = _r2.style.transform,
                            _o = _r2.style.webkitTransform;
                        if ((_l && (_r2.style.transform = "none"), _o && (_r2.style.webkitTransform = "none"), a.roundLengths)) A = e.isHorizontal() ? x(_r2, "width", !0) : x(_r2, "height", !0);
                        else {
                            var _e3 = s(_n2, "width"),
                                _t2 = s(_n2, "padding-left"),
                                _a3 = s(_n2, "padding-right"),
                                _i4 = s(_n2, "margin-left"),
                                _l2 = s(_n2, "margin-right"),
                                _o2 = _n2.getPropertyValue("box-sizing");
                            if (_o2 && "border-box" === _o2) A = _e3 + _i4 + _l2;
                            else {
                                var _r3 = _r2,
                                    _s4 = _r3.clientWidth,
                                    _n3 = _r3.offsetWidth;
                                A = _e3 + _t2 + _a3 + _i4 + _l2 + (_n3 - _s4);
                            }
                        }
                        _l && (_r2.style.transform = _l), _o && (_r2.style.webkitTransform = _o), a.roundLengths && (A = Math.floor(A));
                    } else (A = (n - (a.slidesPerView - 1) * T) / a.slidesPerView), a.roundLengths && (A = Math.floor(A)), p[_i3] && (p[_i3].style[t("width")] = "".concat(A, "px"));
                    p[_i3] && (p[_i3].swiperSlideSize = A),
                        v.push(A),
                        a.centeredSlides
                            ? ((M = M + A / 2 + C / 2 + T),
                              0 === C && 0 !== _i3 && (M = M - n / 2 - T),
                              0 === _i3 && (M = M - n / 2 - T),
                              Math.abs(M) < 0.001 && (M = 0),
                              a.roundLengths && (M = Math.floor(M)),
                              P % a.slidesPerGroup == 0 && h.push(M),
                              g.push(M))
                            : (a.roundLengths && (M = Math.floor(M)), (P - Math.min(e.params.slidesPerGroupSkip, P)) % e.params.slidesPerGroup == 0 && h.push(M), g.push(M), (M = M + A + T)),
                        (e.virtualSize += A + T),
                        (C = A),
                        (P += 1);
                }
            }
            if (
                ((e.virtualSize = Math.max(e.virtualSize, n) + y),
                l && o && ("slide" === a.effect || "coverflow" === a.effect) && (i.style.width = "".concat(e.virtualSize + a.spaceBetween, "px")),
                a.setWrapperSize && (i.style[t("width")] = "".concat(e.virtualSize + a.spaceBetween, "px")),
                L && e.grid.updateWrapperSize(A, h, t),
                !a.centeredSlides)
            ) {
                var _t3 = [];
                for (var _s5 = 0; _s5 < h.length; _s5 += 1) {
                    var _i5 = h[_s5];
                    a.roundLengths && (_i5 = Math.floor(_i5)), h[_s5] <= e.virtualSize - n && _t3.push(_i5);
                }
                (h = _t3), Math.floor(e.virtualSize - n) - Math.floor(h[h.length - 1]) > 1 && h.push(e.virtualSize - n);
            }
            if (d && a.loop) {
                var _t4 = v[0] + T;
                if (a.slidesPerGroup > 1) {
                    var _s6 = Math.ceil((e.virtual.slidesBefore + e.virtual.slidesAfter) / a.slidesPerGroup),
                        _i6 = _t4 * a.slidesPerGroup;
                    for (var _e4 = 0; _e4 < _s6; _e4 += 1) h.push(h[h.length - 1] + _i6);
                }
                for (var _s7 = 0; _s7 < e.virtual.slidesBefore + e.virtual.slidesAfter; _s7 += 1) 1 === a.slidesPerGroup && h.push(h[h.length - 1] + _t4), g.push(g[g.length - 1] + _t4), (e.virtualSize += _t4);
            }
            if ((0 === h.length && (h = [0]), 0 !== a.spaceBetween)) {
                var _s8 = e.isHorizontal() && l ? "marginLeft" : t("marginRight");
                p.filter(function (e, t) {
                    return !(a.cssMode && !a.loop) || t !== p.length - 1;
                }).forEach(function (e) {
                    e.style[_s8] = "".concat(T, "px");
                });
            }
            if (a.centeredSlides && a.centeredSlidesBounds) {
                var _e5 = 0;
                v.forEach(function (t) {
                    _e5 += t + (a.spaceBetween ? a.spaceBetween : 0);
                }),
                    (_e5 -= a.spaceBetween);
                var _t5 = _e5 - n;
                h = h.map(function (e) {
                    return e < 0 ? -b : e > _t5 ? _t5 + y : e;
                });
            }
            if (a.centerInsufficientSlides) {
                var _e6 = 0;
                if (
                    (v.forEach(function (t) {
                        _e6 += t + (a.spaceBetween ? a.spaceBetween : 0);
                    }),
                    (_e6 -= a.spaceBetween),
                    _e6 < n)
                ) {
                    var _t6 = (n - _e6) / 2;
                    h.forEach(function (e, s) {
                        h[s] = e - _t6;
                    }),
                        g.forEach(function (e, s) {
                            g[s] = e + _t6;
                        });
                }
            }
            if (
                (Object.assign(e, {
                    slides: p,
                    snapGrid: h,
                    slidesGrid: g,
                    slidesSizesGrid: v,
                }),
                a.centeredSlides && a.cssMode && !a.centeredSlidesBounds)
            ) {
                u(i, "--swiper-centered-offset-before", -h[0] + "px"), u(i, "--swiper-centered-offset-after", e.size / 2 - v[v.length - 1] / 2 + "px");
                var _t7 = -e.snapGrid[0],
                    _s9 = -e.slidesGrid[0];
                (e.snapGrid = e.snapGrid.map(function (e) {
                    return e + _t7;
                })),
                    (e.slidesGrid = e.slidesGrid.map(function (e) {
                        return e + _s9;
                    }));
            }
            if (
                (m !== c && e.emit("slidesLengthChange"),
                h.length !== E && (e.params.watchOverflow && e.checkOverflow(), e.emit("snapGridLengthChange")),
                g.length !== S && e.emit("slidesGridLengthChange"),
                a.watchSlidesProgress && e.updateSlidesOffset(),
                !(d || a.cssMode || ("slide" !== a.effect && "fade" !== a.effect)))
            ) {
                var _t8 = "".concat(a.containerModifierClass, "backface-hidden"),
                    _s10 = e.el.classList.contains(_t8);
                m <= a.maxBackfaceHiddenSlides ? _s10 || e.el.classList.add(_t8) : _s10 && e.el.classList.remove(_t8);
            }
        },
        updateAutoHeight: function updateAutoHeight(e) {
            var t = this,
                s = [],
                a = t.virtual && t.params.virtual.enabled;
            var i,
                r = 0;
            "number" == typeof e ? t.setTransition(e) : !0 === e && t.setTransition(t.params.speed);
            var n = function n(e) {
                return a
                    ? t.slides.filter(function (t) {
                          return parseInt(t.getAttribute("data-swiper-slide-index"), 10) === e;
                      })[0]
                    : t.slides[e];
            };
            if ("auto" !== t.params.slidesPerView && t.params.slidesPerView > 1) {
                if (t.params.centeredSlides)
                    (t.visibleSlides || []).forEach(function (e) {
                        s.push(e);
                    });
                else
                    for (i = 0; i < Math.ceil(t.params.slidesPerView); i += 1) {
                        var _e7 = t.activeIndex + i;
                        if (_e7 > t.slides.length && !a) break;
                        s.push(n(_e7));
                    }
            } else s.push(n(t.activeIndex));
            for (i = 0; i < s.length; i += 1)
                if (void 0 !== s[i]) {
                    var _e8 = s[i].offsetHeight;
                    r = _e8 > r ? _e8 : r;
                }
            (r || 0 === r) && (t.wrapperEl.style.height = "".concat(r, "px"));
        },
        updateSlidesOffset: function updateSlidesOffset() {
            var e = this,
                t = e.slides,
                s = e.isElement ? (e.isHorizontal() ? e.wrapperEl.offsetLeft : e.wrapperEl.offsetTop) : 0;
            for (var _a4 = 0; _a4 < t.length; _a4 += 1) t[_a4].swiperSlideOffset = (e.isHorizontal() ? t[_a4].offsetLeft : t[_a4].offsetTop) - s;
        },
        updateSlidesProgress: function updateSlidesProgress(e) {
            void 0 === e && (e = (this && this.translate) || 0);
            var t = this,
                s = t.params,
                a = t.slides,
                i = t.rtlTranslate,
                r = t.snapGrid;
            if (0 === a.length) return;
            void 0 === a[0].swiperSlideOffset && t.updateSlidesOffset();
            var n = -e;
            i && (n = e),
                a.forEach(function (e) {
                    e.classList.remove(s.slideVisibleClass);
                }),
                (t.visibleSlidesIndexes = []),
                (t.visibleSlides = []);
            for (var _e9 = 0; _e9 < a.length; _e9 += 1) {
                var _l3 = a[_e9];
                var _o3 = _l3.swiperSlideOffset;
                s.cssMode && s.centeredSlides && (_o3 -= a[0].swiperSlideOffset);
                var _d2 = (n + (s.centeredSlides ? t.minTranslate() : 0) - _o3) / (_l3.swiperSlideSize + s.spaceBetween),
                    _c = (n - r[0] + (s.centeredSlides ? t.minTranslate() : 0) - _o3) / (_l3.swiperSlideSize + s.spaceBetween),
                    _p = -(n - _o3),
                    _u = _p + t.slidesSizesGrid[_e9];
                ((_p >= 0 && _p < t.size - 1) || (_u > 1 && _u <= t.size) || (_p <= 0 && _u >= t.size)) && (t.visibleSlides.push(_l3), t.visibleSlidesIndexes.push(_e9), a[_e9].classList.add(s.slideVisibleClass)),
                    (_l3.progress = i ? -_d2 : _d2),
                    (_l3.originalProgress = i ? -_c : _c);
            }
        },
        updateProgress: function updateProgress(e) {
            var t = this;
            if (void 0 === e) {
                var _s11 = t.rtlTranslate ? -1 : 1;
                e = (t && t.translate && t.translate * _s11) || 0;
            }
            var s = t.params,
                a = t.maxTranslate() - t.minTranslate();
            var i = t.progress,
                r = t.isBeginning,
                n = t.isEnd,
                l = t.progressLoop;
            var o = r,
                d = n;
            if (0 === a) (i = 0), (r = !0), (n = !0);
            else {
                i = (e - t.minTranslate()) / a;
                var _s12 = Math.abs(e - t.minTranslate()) < 1,
                    _l4 = Math.abs(e - t.maxTranslate()) < 1;
                (r = _s12 || i <= 0), (n = _l4 || i >= 1), _s12 && (i = 0), _l4 && (i = 1);
            }
            if (s.loop) {
                var _s13 = b(
                        t.slides.filter(function (e) {
                            return "0" === e.getAttribute("data-swiper-slide-index");
                        })[0]
                    ),
                    _a5 = b(
                        t.slides.filter(function (e) {
                            return 1 * e.getAttribute("data-swiper-slide-index") == t.slides.length - 1;
                        })[0]
                    ),
                    _i7 = t.slidesGrid[_s13],
                    _r4 = t.slidesGrid[_a5],
                    _n4 = t.slidesGrid[t.slidesGrid.length - 1],
                    _o4 = Math.abs(e);
                (l = _o4 >= _i7 ? (_o4 - _i7) / _n4 : (_o4 + _n4 - _r4) / _n4), l > 1 && (l -= 1);
            }
            Object.assign(t, {
                progress: i,
                progressLoop: l,
                isBeginning: r,
                isEnd: n,
            }),
                (s.watchSlidesProgress || (s.centeredSlides && s.autoHeight)) && t.updateSlidesProgress(e),
                r && !o && t.emit("reachBeginning toEdge"),
                n && !d && t.emit("reachEnd toEdge"),
                ((o && !r) || (d && !n)) && t.emit("fromEdge"),
                t.emit("progress", i);
        },
        updateSlidesClasses: function updateSlidesClasses() {
            var e = this,
                t = e.slides,
                s = e.params,
                a = e.slidesEl,
                i = e.activeIndex,
                r = e.virtual && s.virtual.enabled,
                n = function n(e) {
                    return f(a, ".".concat(s.slideClass).concat(e, ", swiper-slide").concat(e))[0];
                };
            var l;
            if (
                (t.forEach(function (e) {
                    e.classList.remove(s.slideActiveClass, s.slideNextClass, s.slidePrevClass);
                }),
                r)
            ) {
                if (s.loop) {
                    var _t9 = i - e.virtual.slidesBefore;
                    _t9 < 0 && (_t9 = e.virtual.slides.length + _t9), _t9 >= e.virtual.slides.length && (_t9 -= e.virtual.slides.length), (l = n('[data-swiper-slide-index="'.concat(_t9, '"]')));
                } else l = n('[data-swiper-slide-index="'.concat(i, '"]'));
            } else l = t[i];
            if (l) {
                l.classList.add(s.slideActiveClass);
                var _e10 = (function (e, t) {
                    var s = [];
                    for (; e.nextElementSibling; ) {
                        var _a6 = e.nextElementSibling;
                        t ? _a6.matches(t) && s.push(_a6) : s.push(_a6), (e = _a6);
                    }
                    return s;
                })(l, ".".concat(s.slideClass, ", swiper-slide"))[0];
                s.loop && !_e10 && (_e10 = t[0]), _e10 && _e10.classList.add(s.slideNextClass);
                var _a7 = (function (e, t) {
                    var s = [];
                    for (; e.previousElementSibling; ) {
                        var _a8 = e.previousElementSibling;
                        t ? _a8.matches(t) && s.push(_a8) : s.push(_a8), (e = _a8);
                    }
                    return s;
                })(l, ".".concat(s.slideClass, ", swiper-slide"))[0];
                s.loop && 0 === !_a7 && (_a7 = t[t.length - 1]), _a7 && _a7.classList.add(s.slidePrevClass);
            }
            e.emitSlidesClasses();
        },
        updateActiveIndex: function updateActiveIndex(e) {
            var t = this,
                s = t.rtlTranslate ? t.translate : -t.translate,
                a = t.snapGrid,
                i = t.params,
                r = t.activeIndex,
                n = t.realIndex,
                l = t.snapIndex;
            var o,
                d = e;
            var c = function c(e) {
                var s = e - t.virtual.slidesBefore;
                return s < 0 && (s = t.virtual.slides.length + s), s >= t.virtual.slides.length && (s -= t.virtual.slides.length), s;
            };
            if (
                (void 0 === d &&
                    (d = (function (e) {
                        var t = e.slidesGrid,
                            s = e.params,
                            a = e.rtlTranslate ? e.translate : -e.translate;
                        var i;
                        for (var _e11 = 0; _e11 < t.length; _e11 += 1)
                            void 0 !== t[_e11 + 1] ? (a >= t[_e11] && a < t[_e11 + 1] - (t[_e11 + 1] - t[_e11]) / 2 ? (i = _e11) : a >= t[_e11] && a < t[_e11 + 1] && (i = _e11 + 1)) : a >= t[_e11] && (i = _e11);
                        return s.normalizeSlideIndex && (i < 0 || void 0 === i) && (i = 0), i;
                    })(t)),
                a.indexOf(s) >= 0)
            )
                o = a.indexOf(s);
            else {
                var _e12 = Math.min(i.slidesPerGroupSkip, d);
                o = _e12 + Math.floor((d - _e12) / i.slidesPerGroup);
            }
            if ((o >= a.length && (o = a.length - 1), d === r)) return o !== l && ((t.snapIndex = o), t.emit("snapIndexChange")), void (t.params.loop && t.virtual && t.params.virtual.enabled && (t.realIndex = c(d)));
            var p;
            (p = t.virtual && i.virtual.enabled && i.loop ? c(d) : t.slides[d] ? parseInt(t.slides[d].getAttribute("data-swiper-slide-index") || d, 10) : d),
                Object.assign(t, {
                    snapIndex: o,
                    realIndex: p,
                    previousIndex: r,
                    activeIndex: d,
                }),
                t.emit("activeIndexChange"),
                t.emit("snapIndexChange"),
                n !== p && t.emit("realIndexChange"),
                (t.initialized || t.params.runCallbacksOnInit) && t.emit("slideChange");
        },
        updateClickedSlide: function updateClickedSlide(e) {
            var t = this,
                s = t.params,
                a = e.closest(".".concat(s.slideClass, ", swiper-slide"));
            var i,
                r = !1;
            if (a)
                for (var _e13 = 0; _e13 < t.slides.length; _e13 += 1)
                    if (t.slides[_e13] === a) {
                        (r = !0), (i = _e13);
                        break;
                    }
            if (!a || !r) return (t.clickedSlide = void 0), void (t.clickedIndex = void 0);
            (t.clickedSlide = a),
                t.virtual && t.params.virtual.enabled ? (t.clickedIndex = parseInt(a.getAttribute("data-swiper-slide-index"), 10)) : (t.clickedIndex = i),
                s.slideToClickedSlide && void 0 !== t.clickedIndex && t.clickedIndex !== t.activeIndex && t.slideToClickedSlide();
        },
    };
    var k = {
        getTranslate: function getTranslate(e) {
            void 0 === e && (e = this.isHorizontal() ? "x" : "y");
            var t = this.params,
                s = this.rtlTranslate,
                a = this.translate,
                i = this.wrapperEl;
            if (t.virtualTranslate) return s ? -a : a;
            if (t.cssMode) return a;
            var r = o(i, e);
            return s && (r = -r), r || 0;
        },
        setTranslate: function setTranslate(e, t) {
            var s = this,
                a = s.rtlTranslate,
                i = s.params,
                r = s.wrapperEl,
                n = s.progress;
            var l,
                o = 0,
                d = 0;
            s.isHorizontal() ? (o = a ? -e : e) : (d = e),
                i.roundLengths && ((o = Math.floor(o)), (d = Math.floor(d))),
                i.cssMode ? (r[s.isHorizontal() ? "scrollLeft" : "scrollTop"] = s.isHorizontal() ? -o : -d) : i.virtualTranslate || (r.style.transform = "translate3d(".concat(o, "px, ").concat(d, "px, 0px)")),
                (s.previousTranslate = s.translate),
                (s.translate = s.isHorizontal() ? o : d);
            var c = s.maxTranslate() - s.minTranslate();
            (l = 0 === c ? 0 : (e - s.minTranslate()) / c), l !== n && s.updateProgress(e), s.emit("setTranslate", s.translate, t);
        },
        minTranslate: function minTranslate() {
            return -this.snapGrid[0];
        },
        maxTranslate: function maxTranslate() {
            return -this.snapGrid[this.snapGrid.length - 1];
        },
        translateTo: function translateTo(e, t, s, a, i) {
            void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === s && (s = !0), void 0 === a && (a = !0);
            var r = this,
                n = r.params,
                l = r.wrapperEl;
            if (r.animating && n.preventInteractionOnTransition) return !1;
            var o = r.minTranslate(),
                d = r.maxTranslate();
            var c;
            if (((c = a && e > o ? o : a && e < d ? d : e), r.updateProgress(c), n.cssMode)) {
                var _e14 = r.isHorizontal();
                if (0 === t) l[_e14 ? "scrollLeft" : "scrollTop"] = -c;
                else {
                    var _l$scrollTo;
                    if (!r.support.smoothScroll)
                        return (
                            m({
                                swiper: r,
                                targetPosition: -c,
                                side: _e14 ? "left" : "top",
                            }),
                            !0
                        );
                    l.scrollTo(((_l$scrollTo = {}), _defineProperty(_l$scrollTo, _e14 ? "left" : "top", -c), _defineProperty(_l$scrollTo, "behavior", "smooth"), _l$scrollTo));
                }
                return !0;
            }
            return (
                0 === t
                    ? (r.setTransition(0), r.setTranslate(c), s && (r.emit("beforeTransitionStart", t, i), r.emit("transitionEnd")))
                    : (r.setTransition(t),
                      r.setTranslate(c),
                      s && (r.emit("beforeTransitionStart", t, i), r.emit("transitionStart")),
                      r.animating ||
                          ((r.animating = !0),
                          r.onTranslateToWrapperTransitionEnd ||
                              (r.onTranslateToWrapperTransitionEnd = function (e) {
                                  r &&
                                      !r.destroyed &&
                                      e.target === this &&
                                      (r.wrapperEl.removeEventListener("transitionend", r.onTranslateToWrapperTransitionEnd),
                                      (r.onTranslateToWrapperTransitionEnd = null),
                                      delete r.onTranslateToWrapperTransitionEnd,
                                      s && r.emit("transitionEnd"));
                              }),
                          r.wrapperEl.addEventListener("transitionend", r.onTranslateToWrapperTransitionEnd))),
                !0
            );
        },
    };
    function $(e) {
        var t = e.swiper,
            s = e.runCallbacks,
            a = e.direction,
            i = e.step;
        var r = t.activeIndex,
            n = t.previousIndex;
        var l = a;
        if ((l || (l = r > n ? "next" : r < n ? "prev" : "reset"), t.emit("transition".concat(i)), s && r !== n)) {
            if ("reset" === l) return void t.emit("slideResetTransition".concat(i));
            t.emit("slideChangeTransition".concat(i)), "next" === l ? t.emit("slideNextTransition".concat(i)) : t.emit("slidePrevTransition".concat(i));
        }
    }
    var I = {
        slideTo: function slideTo(e, t, s, a, i) {
            void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === s && (s = !0), "string" == typeof e && (e = parseInt(e, 10));
            var r = this;
            var n = e;
            n < 0 && (n = 0);
            var l = r.params,
                o = r.snapGrid,
                d = r.slidesGrid,
                c = r.previousIndex,
                p = r.activeIndex,
                u = r.rtlTranslate,
                h = r.wrapperEl,
                f = r.enabled;
            if ((r.animating && l.preventInteractionOnTransition) || (!f && !a && !i)) return !1;
            var g = Math.min(r.params.slidesPerGroupSkip, n);
            var v = g + Math.floor((n - g) / r.params.slidesPerGroup);
            v >= o.length && (v = o.length - 1);
            var w = -o[v];
            if (l.normalizeSlideIndex)
                for (var _e15 = 0; _e15 < d.length; _e15 += 1) {
                    var _t10 = -Math.floor(100 * w),
                        _s14 = Math.floor(100 * d[_e15]),
                        _a9 = Math.floor(100 * d[_e15 + 1]);
                    void 0 !== d[_e15 + 1] ? (_t10 >= _s14 && _t10 < _a9 - (_a9 - _s14) / 2 ? (n = _e15) : _t10 >= _s14 && _t10 < _a9 && (n = _e15 + 1)) : _t10 >= _s14 && (n = _e15);
                }
            if (r.initialized && n !== p) {
                if (!r.allowSlideNext && w < r.translate && w < r.minTranslate()) return !1;
                if (!r.allowSlidePrev && w > r.translate && w > r.maxTranslate() && (p || 0) !== n) return !1;
            }
            var b;
            if ((n !== (c || 0) && s && r.emit("beforeSlideChangeStart"), r.updateProgress(w), (b = n > p ? "next" : n < p ? "prev" : "reset"), (u && -w === r.translate) || (!u && w === r.translate)))
                return (
                    r.updateActiveIndex(n), l.autoHeight && r.updateAutoHeight(), r.updateSlidesClasses(), "slide" !== l.effect && r.setTranslate(w), "reset" !== b && (r.transitionStart(s, b), r.transitionEnd(s, b)), !1
                );
            if (l.cssMode) {
                var _e16 = r.isHorizontal(),
                    _s15 = u ? w : -w;
                if (0 === t) {
                    var _t11 = r.virtual && r.params.virtual.enabled;
                    _t11 && ((r.wrapperEl.style.scrollSnapType = "none"), (r._immediateVirtual = !0)),
                        _t11 && !r._cssModeVirtualInitialSet && r.params.initialSlide > 0
                            ? ((r._cssModeVirtualInitialSet = !0),
                              requestAnimationFrame(function () {
                                  h[_e16 ? "scrollLeft" : "scrollTop"] = _s15;
                              }))
                            : (h[_e16 ? "scrollLeft" : "scrollTop"] = _s15),
                        _t11 &&
                            requestAnimationFrame(function () {
                                (r.wrapperEl.style.scrollSnapType = ""), (r._immediateVirtual = !1);
                            });
                } else {
                    var _h$scrollTo;
                    if (!r.support.smoothScroll)
                        return (
                            m({
                                swiper: r,
                                targetPosition: _s15,
                                side: _e16 ? "left" : "top",
                            }),
                            !0
                        );
                    h.scrollTo(((_h$scrollTo = {}), _defineProperty(_h$scrollTo, _e16 ? "left" : "top", _s15), _defineProperty(_h$scrollTo, "behavior", "smooth"), _h$scrollTo));
                }
                return !0;
            }
            return (
                r.setTransition(t),
                r.setTranslate(w),
                r.updateActiveIndex(n),
                r.updateSlidesClasses(),
                r.emit("beforeTransitionStart", t, a),
                r.transitionStart(s, b),
                0 === t
                    ? r.transitionEnd(s, b)
                    : r.animating ||
                      ((r.animating = !0),
                      r.onSlideToWrapperTransitionEnd ||
                          (r.onSlideToWrapperTransitionEnd = function (e) {
                              r &&
                                  !r.destroyed &&
                                  e.target === this &&
                                  (r.wrapperEl.removeEventListener("transitionend", r.onSlideToWrapperTransitionEnd),
                                  (r.onSlideToWrapperTransitionEnd = null),
                                  delete r.onSlideToWrapperTransitionEnd,
                                  r.transitionEnd(s, b));
                          }),
                      r.wrapperEl.addEventListener("transitionend", r.onSlideToWrapperTransitionEnd)),
                !0
            );
        },
        slideToLoop: function slideToLoop(e, t, s, a) {
            if ((void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === s && (s = !0), "string" == typeof e)) {
                e = parseInt(e, 10);
            }
            var i = this;
            var r = e;
            return (
                i.params.loop &&
                    (i.virtual && i.params.virtual.enabled
                        ? (r += i.virtual.slidesBefore)
                        : (r = b(
                              i.slides.filter(function (e) {
                                  return 1 * e.getAttribute("data-swiper-slide-index") === r;
                              })[0]
                          ))),
                i.slideTo(r, t, s, a)
            );
        },
        slideNext: function slideNext(e, t, s) {
            void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
            var a = this,
                i = a.enabled,
                r = a.params,
                n = a.animating;
            if (!i) return a;
            var l = r.slidesPerGroup;
            "auto" === r.slidesPerView && 1 === r.slidesPerGroup && r.slidesPerGroupAuto && (l = Math.max(a.slidesPerViewDynamic("current", !0), 1));
            var o = a.activeIndex < r.slidesPerGroupSkip ? 1 : l,
                d = a.virtual && r.virtual.enabled;
            if (r.loop) {
                if (n && !d && r.loopPreventsSliding) return !1;
                a.loopFix({
                    direction: "next",
                }),
                    (a._clientLeft = a.wrapperEl.clientLeft);
            }
            return r.rewind && a.isEnd ? a.slideTo(0, e, t, s) : a.slideTo(a.activeIndex + o, e, t, s);
        },
        slidePrev: function slidePrev(e, t, s) {
            void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
            var a = this,
                i = a.params,
                r = a.snapGrid,
                n = a.slidesGrid,
                l = a.rtlTranslate,
                o = a.enabled,
                d = a.animating;
            if (!o) return a;
            var c = a.virtual && i.virtual.enabled;
            if (i.loop) {
                if (d && !c && i.loopPreventsSliding) return !1;
                a.loopFix({
                    direction: "prev",
                }),
                    (a._clientLeft = a.wrapperEl.clientLeft);
            }
            function p(e) {
                return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e);
            }
            var u = p(l ? a.translate : -a.translate),
                m = r.map(function (e) {
                    return p(e);
                });
            var h = r[m.indexOf(u) - 1];
            if (void 0 === h && i.cssMode) {
                var _e17;
                r.forEach(function (t, s) {
                    u >= t && (_e17 = s);
                }),
                    void 0 !== _e17 && (h = r[_e17 > 0 ? _e17 - 1 : _e17]);
            }
            var f = 0;
            if (
                (void 0 !== h &&
                    ((f = n.indexOf(h)),
                    f < 0 && (f = a.activeIndex - 1),
                    "auto" === i.slidesPerView && 1 === i.slidesPerGroup && i.slidesPerGroupAuto && ((f = f - a.slidesPerViewDynamic("previous", !0) + 1), (f = Math.max(f, 0)))),
                i.rewind && a.isBeginning)
            ) {
                var _i8 = a.params.virtual && a.params.virtual.enabled && a.virtual ? a.virtual.slides.length - 1 : a.slides.length - 1;
                return a.slideTo(_i8, e, t, s);
            }
            return a.slideTo(f, e, t, s);
        },
        slideReset: function slideReset(e, t, s) {
            return void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), this.slideTo(this.activeIndex, e, t, s);
        },
        slideToClosest: function slideToClosest(e, t, s, a) {
            void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), void 0 === a && (a = 0.5);
            var i = this;
            var r = i.activeIndex;
            var n = Math.min(i.params.slidesPerGroupSkip, r),
                l = n + Math.floor((r - n) / i.params.slidesPerGroup),
                o = i.rtlTranslate ? i.translate : -i.translate;
            if (o >= i.snapGrid[l]) {
                var _e18 = i.snapGrid[l];
                o - _e18 > (i.snapGrid[l + 1] - _e18) * a && (r += i.params.slidesPerGroup);
            } else {
                var _e19 = i.snapGrid[l - 1];
                o - _e19 <= (i.snapGrid[l] - _e19) * a && (r -= i.params.slidesPerGroup);
            }
            return (r = Math.max(r, 0)), (r = Math.min(r, i.slidesGrid.length - 1)), i.slideTo(r, e, t, s);
        },
        slideToClickedSlide: function slideToClickedSlide() {
            var e = this,
                t = e.params,
                s = e.slidesEl,
                a = "auto" === t.slidesPerView ? e.slidesPerViewDynamic() : t.slidesPerView;
            var i,
                r = e.clickedIndex;
            var l = e.isElement ? "swiper-slide" : ".".concat(t.slideClass);
            if (t.loop) {
                if (e.animating) return;
                (i = parseInt(e.clickedSlide.getAttribute("data-swiper-slide-index"), 10)),
                    t.centeredSlides
                        ? r < e.loopedSlides - a / 2 || r > e.slides.length - e.loopedSlides + a / 2
                            ? (e.loopFix(),
                              (r = b(f(s, "".concat(l, '[data-swiper-slide-index="').concat(i, '"]'))[0])),
                              n(function () {
                                  e.slideTo(r);
                              }))
                            : e.slideTo(r)
                        : r > e.slides.length - a
                        ? (e.loopFix(),
                          (r = b(f(s, "".concat(l, '[data-swiper-slide-index="').concat(i, '"]'))[0])),
                          n(function () {
                              e.slideTo(r);
                          }))
                        : e.slideTo(r);
            } else e.slideTo(r);
        },
    };
    var O = {
        loopCreate: function loopCreate(e) {
            var t = this,
                s = t.params,
                a = t.slidesEl;
            if (!s.loop || (t.virtual && t.params.virtual.enabled)) return;
            f(a, ".".concat(s.slideClass, ", swiper-slide")).forEach(function (e, t) {
                e.setAttribute("data-swiper-slide-index", t);
            }),
                t.loopFix({
                    slideRealIndex: e,
                    direction: s.centeredSlides ? void 0 : "next",
                });
        },
        loopFix: function loopFix(e) {
            var _ref2 = void 0 === e ? {} : e,
                t = _ref2.slideRealIndex,
                _ref2$slideTo = _ref2.slideTo,
                s = _ref2$slideTo === void 0 ? !0 : _ref2$slideTo,
                a = _ref2.direction,
                i = _ref2.setTranslate,
                r = _ref2.activeSlideIndex,
                n = _ref2.byController;
            var l = this;
            if (!l.params.loop) return;
            l.emit("beforeLoopFix");
            var o = l.slides,
                d = l.allowSlidePrev,
                c = l.allowSlideNext,
                p = l.slidesEl,
                u = l.params;
            if (((l.allowSlidePrev = !0), (l.allowSlideNext = !0), l.virtual && u.virtual.enabled))
                return (
                    s &&
                        (u.centeredSlides || 0 !== l.snapIndex
                            ? u.centeredSlides && l.snapIndex < u.slidesPerView
                                ? l.slideTo(l.virtual.slides.length + l.snapIndex, 0, !1, !0)
                                : l.snapIndex === l.snapGrid.length - 1 && l.slideTo(l.virtual.slidesBefore, 0, !1, !0)
                            : l.slideTo(l.virtual.slides.length, 0, !1, !0)),
                    (l.allowSlidePrev = d),
                    (l.allowSlideNext = c),
                    void l.emit("loopFix")
                );
            var m = "auto" === u.slidesPerView ? l.slidesPerViewDynamic() : Math.ceil(parseFloat(u.slidesPerView, 10));
            var h = u.loopedSlides || m;
            h % u.slidesPerGroup != 0 && (h += u.slidesPerGroup - (h % u.slidesPerGroup)), (l.loopedSlides = h);
            var f = [],
                g = [];
            var v = l.activeIndex;
            void 0 === r
                ? (r = b(
                      l.slides.filter(function (e) {
                          return e.classList.contains("swiper-slide-active");
                      })[0]
                  ))
                : (v = r);
            var w = "next" === a || !a,
                y = "prev" === a || !a;
            var E = 0,
                x = 0;
            if (r < h) {
                E = h - r;
                for (var _e20 = 0; _e20 < h - r; _e20 += 1) {
                    var _t12 = _e20 - Math.floor(_e20 / o.length) * o.length;
                    f.push(o.length - _t12 - 1);
                }
            } else if (r > l.slides.length - 2 * h) {
                x = r - (l.slides.length - 2 * h);
                for (var _e21 = 0; _e21 < x; _e21 += 1) {
                    var _t13 = _e21 - Math.floor(_e21 / o.length) * o.length;
                    g.push(_t13);
                }
            }
            if (
                (y &&
                    f.forEach(function (e) {
                        p.prepend(l.slides[e]);
                    }),
                w &&
                    g.forEach(function (e) {
                        p.append(l.slides[e]);
                    }),
                l.recalcSlides(),
                u.watchSlidesProgress && l.updateSlidesOffset(),
                s)
            )
                if (f.length > 0 && y) {
                    if (void 0 === t) {
                        var _e22 = l.slidesGrid[v],
                            _t14 = l.slidesGrid[v + E] - _e22;
                        l.slideTo(v + E, 0, !1, !0), i && (l.touches[l.isHorizontal() ? "startX" : "startY"] += _t14);
                    } else i && l.slideToLoop(t, 0, !1, !0);
                } else if (g.length > 0 && w)
                    if (void 0 === t) {
                        var _e23 = l.slidesGrid[v],
                            _t15 = l.slidesGrid[v - x] - _e23;
                        l.slideTo(v - x, 0, !1, !0), i && (l.touches[l.isHorizontal() ? "startX" : "startY"] += _t15);
                    } else l.slideToLoop(t, 0, !1, !0);
            if (((l.allowSlidePrev = d), (l.allowSlideNext = c), l.controller && l.controller.control && !n)) {
                var _e24 = {
                    slideRealIndex: t,
                    slideTo: !1,
                    direction: a,
                    setTranslate: i,
                    activeSlideIndex: r,
                    byController: !0,
                };
                Array.isArray(l.controller.control)
                    ? l.controller.control.forEach(function (t) {
                          t.params.loop && t.loopFix(_e24);
                      })
                    : l.controller.control instanceof l.constructor && l.controller.control.params.loop && l.controller.control.loopFix(_e24);
            }
            l.emit("loopFix");
        },
        loopDestroy: function loopDestroy() {
            var e = this,
                t = e.slides,
                s = e.params,
                a = e.slidesEl;
            if (!s.loop || (e.virtual && e.params.virtual.enabled)) return;
            e.recalcSlides();
            var i = [];
            t.forEach(function (e) {
                var t = void 0 === e.swiperSlideIndex ? 1 * e.getAttribute("data-swiper-slide-index") : e.swiperSlideIndex;
                i[t] = e;
            }),
                t.forEach(function (e) {
                    e.removeAttribute("data-swiper-slide-index");
                }),
                i.forEach(function (e) {
                    a.append(e);
                }),
                e.recalcSlides(),
                e.slideTo(e.realIndex, 0);
        },
    };
    function D(e) {
        var t = this,
            s = a(),
            i = r(),
            n = t.touchEventsData;
        n.evCache.push(e);
        var o = t.params,
            d = t.touches,
            c = t.enabled;
        if (!c) return;
        if (!o.simulateTouch && "mouse" === e.pointerType) return;
        if (t.animating && o.preventInteractionOnTransition) return;
        !t.animating && o.cssMode && o.loop && t.loopFix();
        var p = e;
        p.originalEvent && (p = p.originalEvent);
        var u = p.target;
        if ("wrapper" === o.touchEventsTarget && !t.wrapperEl.contains(u)) return;
        if ("which" in p && 3 === p.which) return;
        if ("button" in p && p.button > 0) return;
        if (n.isTouched && n.isMoved) return;
        var m = !!o.noSwipingClass && "" !== o.noSwipingClass,
            h = e.composedPath ? e.composedPath() : e.path;
        m && p.target && p.target.shadowRoot && h && (u = h[0]);
        var f = o.noSwipingSelector ? o.noSwipingSelector : ".".concat(o.noSwipingClass),
            g = !(!p.target || !p.target.shadowRoot);
        if (
            o.noSwiping &&
            (g
                ? (function (e, t) {
                      return (
                          void 0 === t && (t = this),
                          (function t(s) {
                              if (!s || s === a() || s === r()) return null;
                              s.assignedSlot && (s = s.assignedSlot);
                              var i = s.closest(e);
                              return i || s.getRootNode ? i || t(s.getRootNode().host) : null;
                          })(t)
                      );
                  })(f, u)
                : u.closest(f))
        )
            return void (t.allowClick = !0);
        if (o.swipeHandler && !u.closest(o.swipeHandler)) return;
        (d.currentX = p.pageX), (d.currentY = p.pageY);
        var v = d.currentX,
            w = d.currentY,
            b = o.edgeSwipeDetection || o.iOSEdgeSwipeDetection,
            y = o.edgeSwipeThreshold || o.iOSEdgeSwipeThreshold;
        if (b && (v <= y || v >= i.innerWidth - y)) {
            if ("prevent" !== b) return;
            e.preventDefault();
        }
        Object.assign(n, {
            isTouched: !0,
            isMoved: !1,
            allowTouchCallbacks: !0,
            isScrolling: void 0,
            startMoving: void 0,
        }),
            (d.startX = v),
            (d.startY = w),
            (n.touchStartTime = l()),
            (t.allowClick = !0),
            t.updateSize(),
            (t.swipeDirection = void 0),
            o.threshold > 0 && (n.allowThresholdMove = !1);
        var E = !0;
        u.matches(n.focusableElements) && ((E = !1), "SELECT" === u.nodeName && (n.isTouched = !1)), s.activeElement && s.activeElement.matches(n.focusableElements) && s.activeElement !== u && s.activeElement.blur();
        var x = E && t.allowTouchMove && o.touchStartPreventDefault;
        (!o.touchStartForcePreventDefault && !x) || u.isContentEditable || p.preventDefault(),
            t.params.freeMode && t.params.freeMode.enabled && t.freeMode && t.animating && !o.cssMode && t.freeMode.onTouchStart(),
            t.emit("touchStart", p);
    }
    function G(e) {
        var t = a(),
            s = this,
            i = s.touchEventsData,
            r = s.params,
            n = s.touches,
            o = s.rtlTranslate,
            d = s.enabled;
        if (!d) return;
        if (!r.simulateTouch && "mouse" === e.pointerType) return;
        var c = e;
        if ((c.originalEvent && (c = c.originalEvent), !i.isTouched)) return void (i.startMoving && i.isScrolling && s.emit("touchMoveOpposite", c));
        var p = i.evCache.findIndex(function (e) {
            return e.pointerId === c.pointerId;
        });
        p >= 0 && (i.evCache[p] = c);
        var u = i.evCache.length > 1 ? i.evCache[0] : c,
            m = u.pageX,
            h = u.pageY;
        if (c.preventedByNestedSwiper) return (n.startX = m), void (n.startY = h);
        if (!s.allowTouchMove)
            return (
                c.target.matches(i.focusableElements) || (s.allowClick = !1),
                void (
                    i.isTouched &&
                    (Object.assign(n, {
                        startX: m,
                        startY: h,
                        prevX: s.touches.currentX,
                        prevY: s.touches.currentY,
                        currentX: m,
                        currentY: h,
                    }),
                    (i.touchStartTime = l()))
                )
            );
        if (r.touchReleaseOnEdges && !r.loop)
            if (s.isVertical()) {
                if ((h < n.startY && s.translate <= s.maxTranslate()) || (h > n.startY && s.translate >= s.minTranslate())) return (i.isTouched = !1), void (i.isMoved = !1);
            } else if ((m < n.startX && s.translate <= s.maxTranslate()) || (m > n.startX && s.translate >= s.minTranslate())) return;
        if (t.activeElement && c.target === t.activeElement && c.target.matches(i.focusableElements)) return (i.isMoved = !0), void (s.allowClick = !1);
        if ((i.allowTouchCallbacks && s.emit("touchMove", c), c.targetTouches && c.targetTouches.length > 1)) return;
        (n.currentX = m), (n.currentY = h);
        var f = n.currentX - n.startX,
            g = n.currentY - n.startY;
        if (s.params.threshold && Math.sqrt(Math.pow(f, 2) + Math.pow(g, 2)) < s.params.threshold) return;
        if (void 0 === i.isScrolling) {
            var _e25;
            (s.isHorizontal() && n.currentY === n.startY) || (s.isVertical() && n.currentX === n.startX)
                ? (i.isScrolling = !1)
                : f * f + g * g >= 25 && ((_e25 = (180 * Math.atan2(Math.abs(g), Math.abs(f))) / Math.PI), (i.isScrolling = s.isHorizontal() ? _e25 > r.touchAngle : 90 - _e25 > r.touchAngle));
        }
        if (
            (i.isScrolling && s.emit("touchMoveOpposite", c),
            void 0 === i.startMoving && ((n.currentX === n.startX && n.currentY === n.startY) || (i.startMoving = !0)),
            i.isScrolling || (s.zoom && s.params.zoom && s.params.zoom.enabled && i.evCache.length > 1))
        )
            return void (i.isTouched = !1);
        if (!i.startMoving) return;
        (s.allowClick = !1), !r.cssMode && c.cancelable && c.preventDefault(), r.touchMoveStopPropagation && !r.nested && c.stopPropagation();
        var v = s.isHorizontal() ? f : g,
            w = s.isHorizontal() ? n.currentX - n.previousX : n.currentY - n.previousY;
        r.oneWayMovement && ((v = Math.abs(v) * (o ? 1 : -1)), (w = Math.abs(w) * (o ? 1 : -1))), (n.diff = v), (v *= r.touchRatio), o && ((v = -v), (w = -w));
        var b = s.touchesDirection;
        (s.swipeDirection = v > 0 ? "prev" : "next"), (s.touchesDirection = w > 0 ? "prev" : "next");
        var y = s.params.loop && !(s.virtual && s.params.virtual.enabled) && !r.cssMode;
        if (!i.isMoved) {
            if (
                (y &&
                    s.loopFix({
                        direction: s.swipeDirection,
                    }),
                (i.startTranslate = s.getTranslate()),
                s.setTransition(0),
                s.animating)
            ) {
                var _e26 = new window.CustomEvent("transitionend", {
                    bubbles: !0,
                    cancelable: !0,
                });
                s.wrapperEl.dispatchEvent(_e26);
            }
            (i.allowMomentumBounce = !1), !r.grabCursor || (!0 !== s.allowSlideNext && !0 !== s.allowSlidePrev) || s.setGrabCursor(!0), s.emit("sliderFirstMove", c);
        }
        var E;
        i.isMoved &&
            b !== s.touchesDirection &&
            y &&
            Math.abs(v) >= 1 &&
            (s.loopFix({
                direction: s.swipeDirection,
                setTranslate: !0,
            }),
            (E = !0)),
            s.emit("sliderMove", c),
            (i.isMoved = !0),
            (i.currentTranslate = v + i.startTranslate);
        var x = !0,
            S = r.resistanceRatio;
        if (
            (r.touchReleaseOnEdges && (S = 0),
            v > 0
                ? (y &&
                      !E &&
                      i.currentTranslate > (r.centeredSlides ? s.minTranslate() - s.size / 2 : s.minTranslate()) &&
                      s.loopFix({
                          direction: "prev",
                          setTranslate: !0,
                          activeSlideIndex: 0,
                      }),
                  i.currentTranslate > s.minTranslate() && ((x = !1), r.resistance && (i.currentTranslate = s.minTranslate() - 1 + Math.pow(-s.minTranslate() + i.startTranslate + v, S))))
                : v < 0 &&
                  (y &&
                      !E &&
                      i.currentTranslate < (r.centeredSlides ? s.maxTranslate() + s.size / 2 : s.maxTranslate()) &&
                      s.loopFix({
                          direction: "next",
                          setTranslate: !0,
                          activeSlideIndex: s.slides.length - ("auto" === r.slidesPerView ? s.slidesPerViewDynamic() : Math.ceil(parseFloat(r.slidesPerView, 10))),
                      }),
                  i.currentTranslate < s.maxTranslate() && ((x = !1), r.resistance && (i.currentTranslate = s.maxTranslate() + 1 - Math.pow(s.maxTranslate() - i.startTranslate - v, S)))),
            x && (c.preventedByNestedSwiper = !0),
            !s.allowSlideNext && "next" === s.swipeDirection && i.currentTranslate < i.startTranslate && (i.currentTranslate = i.startTranslate),
            !s.allowSlidePrev && "prev" === s.swipeDirection && i.currentTranslate > i.startTranslate && (i.currentTranslate = i.startTranslate),
            s.allowSlidePrev || s.allowSlideNext || (i.currentTranslate = i.startTranslate),
            r.threshold > 0)
        ) {
            if (!(Math.abs(v) > r.threshold || i.allowThresholdMove)) return void (i.currentTranslate = i.startTranslate);
            if (!i.allowThresholdMove)
                return (
                    (i.allowThresholdMove = !0), (n.startX = n.currentX), (n.startY = n.currentY), (i.currentTranslate = i.startTranslate), void (n.diff = s.isHorizontal() ? n.currentX - n.startX : n.currentY - n.startY)
                );
        }
        r.followFinger &&
            !r.cssMode &&
            (((r.freeMode && r.freeMode.enabled && s.freeMode) || r.watchSlidesProgress) && (s.updateActiveIndex(), s.updateSlidesClasses()),
            s.params.freeMode && r.freeMode.enabled && s.freeMode && s.freeMode.onTouchMove(),
            s.updateProgress(i.currentTranslate),
            s.setTranslate(i.currentTranslate));
    }
    function H(e) {
        var t = this,
            s = t.touchEventsData,
            a = s.evCache.findIndex(function (t) {
                return t.pointerId === e.pointerId;
            });
        if ((a >= 0 && s.evCache.splice(a, 1), ["pointercancel", "pointerout", "pointerleave"].includes(e.type))) return;
        var i = t.params,
            r = t.touches,
            o = t.rtlTranslate,
            d = t.slidesGrid,
            c = t.enabled;
        if (!c) return;
        if (!i.simulateTouch && "mouse" === e.pointerType) return;
        var p = e;
        if ((p.originalEvent && (p = p.originalEvent), s.allowTouchCallbacks && t.emit("touchEnd", p), (s.allowTouchCallbacks = !1), !s.isTouched))
            return s.isMoved && i.grabCursor && t.setGrabCursor(!1), (s.isMoved = !1), void (s.startMoving = !1);
        i.grabCursor && s.isMoved && s.isTouched && (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) && t.setGrabCursor(!1);
        var u = l(),
            m = u - s.touchStartTime;
        if (t.allowClick) {
            var _e27 = p.path || (p.composedPath && p.composedPath());
            t.updateClickedSlide((_e27 && _e27[0]) || p.target), t.emit("tap click", p), m < 300 && u - s.lastClickTime < 300 && t.emit("doubleTap doubleClick", p);
        }
        if (
            ((s.lastClickTime = l()),
            n(function () {
                t.destroyed || (t.allowClick = !0);
            }),
            !s.isTouched || !s.isMoved || !t.swipeDirection || 0 === r.diff || s.currentTranslate === s.startTranslate)
        )
            return (s.isTouched = !1), (s.isMoved = !1), void (s.startMoving = !1);
        var h;
        if (((s.isTouched = !1), (s.isMoved = !1), (s.startMoving = !1), (h = i.followFinger ? (o ? t.translate : -t.translate) : -s.currentTranslate), i.cssMode)) return;
        if (t.params.freeMode && i.freeMode.enabled)
            return void t.freeMode.onTouchEnd({
                currentPos: h,
            });
        var f = 0,
            g = t.slidesSizesGrid[0];
        for (var _e28 = 0; _e28 < d.length; _e28 += _e28 < i.slidesPerGroupSkip ? 1 : i.slidesPerGroup) {
            var _t16 = _e28 < i.slidesPerGroupSkip - 1 ? 1 : i.slidesPerGroup;
            void 0 !== d[_e28 + _t16] ? h >= d[_e28] && h < d[_e28 + _t16] && ((f = _e28), (g = d[_e28 + _t16] - d[_e28])) : h >= d[_e28] && ((f = _e28), (g = d[d.length - 1] - d[d.length - 2]));
        }
        var v = null,
            w = null;
        i.rewind && (t.isBeginning ? (w = t.params.virtual && t.params.virtual.enabled && t.virtual ? t.virtual.slides.length - 1 : t.slides.length - 1) : t.isEnd && (v = 0));
        var b = (h - d[f]) / g,
            y = f < i.slidesPerGroupSkip - 1 ? 1 : i.slidesPerGroup;
        if (m > i.longSwipesMs) {
            if (!i.longSwipes) return void t.slideTo(t.activeIndex);
            "next" === t.swipeDirection && (b >= i.longSwipesRatio ? t.slideTo(i.rewind && t.isEnd ? v : f + y) : t.slideTo(f)),
                "prev" === t.swipeDirection && (b > 1 - i.longSwipesRatio ? t.slideTo(f + y) : null !== w && b < 0 && Math.abs(b) > i.longSwipesRatio ? t.slideTo(w) : t.slideTo(f));
        } else {
            if (!i.shortSwipes) return void t.slideTo(t.activeIndex);
            t.navigation && (p.target === t.navigation.nextEl || p.target === t.navigation.prevEl)
                ? p.target === t.navigation.nextEl
                    ? t.slideTo(f + y)
                    : t.slideTo(f)
                : ("next" === t.swipeDirection && t.slideTo(null !== v ? v : f + y), "prev" === t.swipeDirection && t.slideTo(null !== w ? w : f));
        }
    }
    var B;
    function X() {
        var e = this,
            t = e.params,
            s = e.el;
        if (s && 0 === s.offsetWidth) return;
        t.breakpoints && e.setBreakpoint();
        var a = e.allowSlideNext,
            i = e.allowSlidePrev,
            r = e.snapGrid,
            n = e.virtual && e.params.virtual.enabled;
        (e.allowSlideNext = !0), (e.allowSlidePrev = !0), e.updateSize(), e.updateSlides(), e.updateSlidesClasses();
        var l = n && t.loop;
        !("auto" === t.slidesPerView || t.slidesPerView > 1) || !e.isEnd || e.isBeginning || e.params.centeredSlides || l
            ? e.params.loop && !n
                ? e.slideToLoop(e.realIndex, 0, !1, !0)
                : e.slideTo(e.activeIndex, 0, !1, !0)
            : e.slideTo(e.slides.length - 1, 0, !1, !0),
            e.autoplay &&
                e.autoplay.running &&
                e.autoplay.paused &&
                (clearTimeout(B),
                (B = setTimeout(function () {
                    e.autoplay.resume();
                }, 500))),
            (e.allowSlidePrev = i),
            (e.allowSlideNext = a),
            e.params.watchOverflow && r !== e.snapGrid && e.checkOverflow();
    }
    function Y(e) {
        var t = this;
        t.enabled && (t.allowClick || (t.params.preventClicks && e.preventDefault(), t.params.preventClicksPropagation && t.animating && (e.stopPropagation(), e.stopImmediatePropagation())));
    }
    function N() {
        var e = this,
            t = e.wrapperEl,
            s = e.rtlTranslate,
            a = e.enabled;
        if (!a) return;
        var i;
        (e.previousTranslate = e.translate), e.isHorizontal() ? (e.translate = -t.scrollLeft) : (e.translate = -t.scrollTop), 0 === e.translate && (e.translate = 0), e.updateActiveIndex(), e.updateSlidesClasses();
        var r = e.maxTranslate() - e.minTranslate();
        (i = 0 === r ? 0 : (e.translate - e.minTranslate()) / r), i !== e.progress && e.updateProgress(s ? -e.translate : e.translate), e.emit("setTranslate", e.translate, !1);
    }
    var q = function q(e, t) {
        var s = t.closest(e.isElement ? "swiper-slide" : ".".concat(e.params.slideClass));
        if (s) {
            var _t17 = s.querySelector(".".concat(e.params.lazyPreloaderClass));
            _t17 && _t17.remove();
        }
    };
    function R(e) {
        q(this, e.target), this.update();
    }
    var V = !1;
    function F() {}
    var W = function W(e, t) {
        var s = a(),
            i = e.params,
            r = e.el,
            n = e.wrapperEl,
            l = e.device,
            o = !!i.nested,
            d = "on" === t ? "addEventListener" : "removeEventListener",
            c = t;
        r[d]("pointerdown", e.onTouchStart, {
            passive: !1,
        }),
            s[d]("pointermove", e.onTouchMove, {
                passive: !1,
                capture: o,
            }),
            s[d]("pointerup", e.onTouchEnd, {
                passive: !0,
            }),
            s[d]("pointercancel", e.onTouchEnd, {
                passive: !0,
            }),
            s[d]("pointerout", e.onTouchEnd, {
                passive: !0,
            }),
            s[d]("pointerleave", e.onTouchEnd, {
                passive: !0,
            }),
            (i.preventClicks || i.preventClicksPropagation) && r[d]("click", e.onClick, !0),
            i.cssMode && n[d]("scroll", e.onScroll),
            i.updateOnWindowResize ? e[c](l.ios || l.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", X, !0) : e[c]("observerUpdate", X, !0),
            r[d]("load", e.onLoad, {
                capture: !0,
            });
    };
    var j = function j(e, t) {
        return e.grid && t.grid && t.grid.rows > 1;
    };
    var _ = {
        init: !0,
        direction: "horizontal",
        oneWayMovement: !1,
        touchEventsTarget: "wrapper",
        initialSlide: 0,
        speed: 300,
        cssMode: !1,
        updateOnWindowResize: !0,
        resizeObserver: !0,
        nested: !1,
        createElements: !1,
        enabled: !0,
        focusableElements: "input, select, option, textarea, button, video, label",
        width: null,
        height: null,
        preventInteractionOnTransition: !1,
        userAgent: null,
        url: null,
        edgeSwipeDetection: !1,
        edgeSwipeThreshold: 20,
        autoHeight: !1,
        setWrapperSize: !1,
        virtualTranslate: !1,
        effect: "slide",
        breakpoints: void 0,
        breakpointsBase: "window",
        spaceBetween: 0,
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerGroupSkip: 0,
        slidesPerGroupAuto: !1,
        centeredSlides: !1,
        centeredSlidesBounds: !1,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        normalizeSlideIndex: !0,
        centerInsufficientSlides: !1,
        watchOverflow: !0,
        roundLengths: !1,
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: !0,
        shortSwipes: !0,
        longSwipes: !0,
        longSwipesRatio: 0.5,
        longSwipesMs: 300,
        followFinger: !0,
        allowTouchMove: !0,
        threshold: 5,
        touchMoveStopPropagation: !1,
        touchStartPreventDefault: !0,
        touchStartForcePreventDefault: !1,
        touchReleaseOnEdges: !1,
        uniqueNavElements: !0,
        resistance: !0,
        resistanceRatio: 0.85,
        watchSlidesProgress: !1,
        grabCursor: !1,
        preventClicks: !0,
        preventClicksPropagation: !0,
        slideToClickedSlide: !1,
        loop: !1,
        loopedSlides: null,
        loopPreventsSliding: !0,
        rewind: !1,
        allowSlidePrev: !0,
        allowSlideNext: !0,
        swipeHandler: null,
        noSwiping: !0,
        noSwipingClass: "swiper-no-swiping",
        noSwipingSelector: null,
        passiveListeners: !0,
        maxBackfaceHiddenSlides: 10,
        containerModifierClass: "swiper-",
        slideClass: "swiper-slide",
        slideActiveClass: "swiper-slide-active",
        slideVisibleClass: "swiper-slide-visible",
        slideNextClass: "swiper-slide-next",
        slidePrevClass: "swiper-slide-prev",
        wrapperClass: "swiper-wrapper",
        lazyPreloaderClass: "swiper-lazy-preloader",
        runCallbacksOnInit: !0,
        _emitClasses: !1,
    };
    function U(e, t) {
        return function (s) {
            void 0 === s && (s = {});
            var a = Object.keys(s)[0],
                i = s[a];
            "object" == _typeof(i) && null !== i
                ? (["navigation", "pagination", "scrollbar"].indexOf(a) >= 0 &&
                      !0 === e[a] &&
                      (e[a] = {
                          auto: !0,
                      }),
                  a in e && "enabled" in i
                      ? (!0 === e[a] &&
                            (e[a] = {
                                enabled: !0,
                            }),
                        "object" != _typeof(e[a]) || "enabled" in e[a] || (e[a].enabled = !0),
                        e[a] ||
                            (e[a] = {
                                enabled: !1,
                            }),
                        p(t, s))
                      : p(t, s))
                : p(t, s);
        };
    }
    var K = {
            eventsEmitter: A,
            update: z,
            translate: k,
            transition: {
                setTransition: function setTransition(e, t) {
                    var s = this;
                    s.params.cssMode || (s.wrapperEl.style.transitionDuration = "".concat(e, "ms")), s.emit("setTransition", e, t);
                },
                transitionStart: function transitionStart(e, t) {
                    void 0 === e && (e = !0);
                    var s = this,
                        a = s.params;
                    a.cssMode ||
                        (a.autoHeight && s.updateAutoHeight(),
                        $({
                            swiper: s,
                            runCallbacks: e,
                            direction: t,
                            step: "Start",
                        }));
                },
                transitionEnd: function transitionEnd(e, t) {
                    void 0 === e && (e = !0);
                    var s = this,
                        a = s.params;
                    (s.animating = !1),
                        a.cssMode ||
                            (s.setTransition(0),
                            $({
                                swiper: s,
                                runCallbacks: e,
                                direction: t,
                                step: "End",
                            }));
                },
            },
            slide: I,
            loop: O,
            grabCursor: {
                setGrabCursor: function setGrabCursor(e) {
                    var t = this;
                    if (!t.params.simulateTouch || (t.params.watchOverflow && t.isLocked) || t.params.cssMode) return;
                    var s = "container" === t.params.touchEventsTarget ? t.el : t.wrapperEl;
                    (s.style.cursor = "move"), (s.style.cursor = e ? "grabbing" : "grab");
                },
                unsetGrabCursor: function unsetGrabCursor() {
                    var e = this;
                    (e.params.watchOverflow && e.isLocked) || e.params.cssMode || (e["container" === e.params.touchEventsTarget ? "el" : "wrapperEl"].style.cursor = "");
                },
            },
            events: {
                attachEvents: function attachEvents() {
                    var e = this,
                        t = a(),
                        s = e.params;
                    (e.onTouchStart = D.bind(e)),
                        (e.onTouchMove = G.bind(e)),
                        (e.onTouchEnd = H.bind(e)),
                        s.cssMode && (e.onScroll = N.bind(e)),
                        (e.onClick = Y.bind(e)),
                        (e.onLoad = R.bind(e)),
                        V || (t.addEventListener("touchstart", F), (V = !0)),
                        W(e, "on");
                },
                detachEvents: function detachEvents() {
                    W(this, "off");
                },
            },
            breakpoints: {
                setBreakpoint: function setBreakpoint() {
                    var e = this,
                        t = e.realIndex,
                        s = e.initialized,
                        a = e.params,
                        i = e.el,
                        r = a.breakpoints;
                    if (!r || (r && 0 === Object.keys(r).length)) return;
                    var n = e.getBreakpoint(r, e.params.breakpointsBase, e.el);
                    if (!n || e.currentBreakpoint === n) return;
                    var l = (n in r ? r[n] : void 0) || e.originalParams,
                        o = j(e, a),
                        d = j(e, l),
                        c = a.enabled;
                    o && !d
                        ? (i.classList.remove("".concat(a.containerModifierClass, "grid ").concat(a.containerModifierClass, "grid-column")), e.emitContainerClasses())
                        : !o &&
                          d &&
                          (i.classList.add("".concat(a.containerModifierClass, "grid")),
                          ((l.grid.fill && "column" === l.grid.fill) || (!l.grid.fill && "column" === a.grid.fill)) && i.classList.add("".concat(a.containerModifierClass, "grid-column")),
                          e.emitContainerClasses()),
                        ["navigation", "pagination", "scrollbar"].forEach(function (t) {
                            var s = a[t] && a[t].enabled,
                                i = l[t] && l[t].enabled;
                            s && !i && e[t].disable(), !s && i && e[t].enable();
                        });
                    var u = l.direction && l.direction !== a.direction,
                        m = a.loop && (l.slidesPerView !== a.slidesPerView || u);
                    u && s && e.changeDirection(), p(e.params, l);
                    var h = e.params.enabled;
                    Object.assign(e, {
                        allowTouchMove: e.params.allowTouchMove,
                        allowSlideNext: e.params.allowSlideNext,
                        allowSlidePrev: e.params.allowSlidePrev,
                    }),
                        c && !h ? e.disable() : !c && h && e.enable(),
                        (e.currentBreakpoint = n),
                        e.emit("_beforeBreakpoint", l),
                        m && s && (e.loopDestroy(), e.loopCreate(t), e.updateSlides()),
                        e.emit("breakpoint", l);
                },
                getBreakpoint: function getBreakpoint(e, t, s) {
                    if ((void 0 === t && (t = "window"), !e || ("container" === t && !s))) return;
                    var a = !1;
                    var i = r(),
                        n = "window" === t ? i.innerHeight : s.clientHeight,
                        l = Object.keys(e).map(function (e) {
                            if ("string" == typeof e && 0 === e.indexOf("@")) {
                                var _t18 = parseFloat(e.substr(1));
                                return {
                                    value: n * _t18,
                                    point: e,
                                };
                            }
                            return {
                                value: e,
                                point: e,
                            };
                        });
                    l.sort(function (e, t) {
                        return parseInt(e.value, 10) - parseInt(t.value, 10);
                    });
                    for (var _e29 = 0; _e29 < l.length; _e29 += 1) {
                        var _l$_e = l[_e29],
                            _r5 = _l$_e.point,
                            _n5 = _l$_e.value;
                        "window" === t ? i.matchMedia("(min-width: ".concat(_n5, "px)")).matches && (a = _r5) : _n5 <= s.clientWidth && (a = _r5);
                    }
                    return a || "max";
                },
            },
            checkOverflow: {
                checkOverflow: function checkOverflow() {
                    var e = this,
                        t = e.isLocked,
                        s = e.params,
                        a = s.slidesOffsetBefore;
                    if (a) {
                        var _t19 = e.slides.length - 1,
                            _s16 = e.slidesGrid[_t19] + e.slidesSizesGrid[_t19] + 2 * a;
                        e.isLocked = e.size > _s16;
                    } else e.isLocked = 1 === e.snapGrid.length;
                    !0 === s.allowSlideNext && (e.allowSlideNext = !e.isLocked),
                        !0 === s.allowSlidePrev && (e.allowSlidePrev = !e.isLocked),
                        t && t !== e.isLocked && (e.isEnd = !1),
                        t !== e.isLocked && e.emit(e.isLocked ? "lock" : "unlock");
                },
            },
            classes: {
                addClasses: function addClasses() {
                    var _i$classList;
                    var e = this,
                        t = e.classNames,
                        s = e.params,
                        a = e.rtl,
                        i = e.el,
                        r = e.device,
                        n = (function (e, t) {
                            var s = [];
                            return (
                                e.forEach(function (e) {
                                    "object" == _typeof(e)
                                        ? Object.keys(e).forEach(function (a) {
                                              e[a] && s.push(t + a);
                                          })
                                        : "string" == typeof e && s.push(t + e);
                                }),
                                s
                            );
                        })(
                            [
                                "initialized",
                                s.direction,
                                {
                                    "free-mode": e.params.freeMode && s.freeMode.enabled,
                                },
                                {
                                    autoheight: s.autoHeight,
                                },
                                {
                                    rtl: a,
                                },
                                {
                                    grid: s.grid && s.grid.rows > 1,
                                },
                                {
                                    "grid-column": s.grid && s.grid.rows > 1 && "column" === s.grid.fill,
                                },
                                {
                                    android: r.android,
                                },
                                {
                                    ios: r.ios,
                                },
                                {
                                    "css-mode": s.cssMode,
                                },
                                {
                                    centered: s.cssMode && s.centeredSlides,
                                },
                                {
                                    "watch-progress": s.watchSlidesProgress,
                                },
                            ],
                            s.containerModifierClass
                        );
                    t.push.apply(t, _toConsumableArray(n)), (_i$classList = i.classList).add.apply(_i$classList, _toConsumableArray(t)), e.emitContainerClasses();
                },
                removeClasses: function removeClasses() {
                    var _e$classList;
                    var e = this.el,
                        t = this.classNames;
                    (_e$classList = e.classList).remove.apply(_e$classList, _toConsumableArray(t)), this.emitContainerClasses();
                },
            },
        },
        Z = {};
    var Q = /*#__PURE__*/ (function () {
        function Q() {
            var _i9, _i10, _o$modules;
            _classCallCheck(this, Q);
            var e, t;
            for (var s = arguments.length, i = new Array(s), r = 0; r < s; r++) i[r] = arguments[r];
            1 === i.length && i[0].constructor && "Object" === Object.prototype.toString.call(i[0]).slice(8, -1) ? (t = i[0]) : ((_i9 = i), (_i10 = _slicedToArray(_i9, 2)), (e = _i10[0]), (t = _i10[1]), _i9),
                t || (t = {}),
                (t = p({}, t)),
                e && !t.el && (t.el = e);
            var n = a();
            if (t.el && "string" == typeof t.el && n.querySelectorAll(t.el).length > 1) {
                var _e30 = [];
                return (
                    n.querySelectorAll(t.el).forEach(function (s) {
                        var a = p({}, t, {
                            el: s,
                        });
                        _e30.push(new Q(a));
                    }),
                    _e30
                );
            }
            var o = this;
            (o.__swiper__ = !0),
                (o.support = C()),
                (o.device = P({
                    userAgent: t.userAgent,
                })),
                (o.browser = L()),
                (o.eventsListeners = {}),
                (o.eventsAnyListeners = []),
                (o.modules = _toConsumableArray(o.__modules__)),
                t.modules && Array.isArray(t.modules) && (_o$modules = o.modules).push.apply(_o$modules, _toConsumableArray(t.modules));
            var d = {};
            o.modules.forEach(function (e) {
                e({
                    params: t,
                    swiper: o,
                    extendParams: U(t, d),
                    on: o.on.bind(o),
                    once: o.once.bind(o),
                    off: o.off.bind(o),
                    emit: o.emit.bind(o),
                });
            });
            var c = p({}, _, d);
            return (
                (o.params = p({}, c, Z, t)),
                (o.originalParams = p({}, o.params)),
                (o.passedParams = p({}, t)),
                o.params &&
                    o.params.on &&
                    Object.keys(o.params.on).forEach(function (e) {
                        o.on(e, o.params.on[e]);
                    }),
                o.params && o.params.onAny && o.onAny(o.params.onAny),
                Object.assign(o, {
                    enabled: o.params.enabled,
                    el: e,
                    classNames: [],
                    slides: [],
                    slidesGrid: [],
                    snapGrid: [],
                    slidesSizesGrid: [],
                    isHorizontal: function isHorizontal() {
                        return "horizontal" === o.params.direction;
                    },
                    isVertical: function isVertical() {
                        return "vertical" === o.params.direction;
                    },
                    activeIndex: 0,
                    realIndex: 0,
                    isBeginning: !0,
                    isEnd: !1,
                    translate: 0,
                    previousTranslate: 0,
                    progress: 0,
                    velocity: 0,
                    animating: !1,
                    allowSlideNext: o.params.allowSlideNext,
                    allowSlidePrev: o.params.allowSlidePrev,
                    touchEventsData: {
                        isTouched: void 0,
                        isMoved: void 0,
                        allowTouchCallbacks: void 0,
                        touchStartTime: void 0,
                        isScrolling: void 0,
                        currentTranslate: void 0,
                        startTranslate: void 0,
                        allowThresholdMove: void 0,
                        focusableElements: o.params.focusableElements,
                        lastClickTime: l(),
                        clickTimeout: void 0,
                        velocities: [],
                        allowMomentumBounce: void 0,
                        startMoving: void 0,
                        evCache: [],
                    },
                    allowClick: !0,
                    allowTouchMove: o.params.allowTouchMove,
                    touches: {
                        startX: 0,
                        startY: 0,
                        currentX: 0,
                        currentY: 0,
                        diff: 0,
                    },
                    imagesToLoad: [],
                    imagesLoaded: 0,
                }),
                o.emit("_swiper"),
                o.params.init && o.init(),
                o
            );
        }
        _createClass(
            Q,
            [
                {
                    key: "recalcSlides",
                    value: function recalcSlides() {
                        var e = this.slidesEl,
                            t = this.params;
                        this.slides = f(e, ".".concat(t.slideClass, ", swiper-slide"));
                    },
                },
                {
                    key: "enable",
                    value: function enable() {
                        var e = this;
                        e.enabled || ((e.enabled = !0), e.params.grabCursor && e.setGrabCursor(), e.emit("enable"));
                    },
                },
                {
                    key: "disable",
                    value: function disable() {
                        var e = this;
                        e.enabled && ((e.enabled = !1), e.params.grabCursor && e.unsetGrabCursor(), e.emit("disable"));
                    },
                },
                {
                    key: "setProgress",
                    value: function setProgress(e, t) {
                        var s = this;
                        e = Math.min(Math.max(e, 0), 1);
                        var a = s.minTranslate(),
                            i = (s.maxTranslate() - a) * e + a;
                        s.translateTo(i, void 0 === t ? 0 : t), s.updateActiveIndex(), s.updateSlidesClasses();
                    },
                },
                {
                    key: "emitContainerClasses",
                    value: function emitContainerClasses() {
                        var e = this;
                        if (!e.params._emitClasses || !e.el) return;
                        var t = e.el.className.split(" ").filter(function (t) {
                            return 0 === t.indexOf("swiper") || 0 === t.indexOf(e.params.containerModifierClass);
                        });
                        e.emit("_containerClasses", t.join(" "));
                    },
                },
                {
                    key: "getSlideClasses",
                    value: function getSlideClasses(e) {
                        var t = this;
                        return t.destroyed
                            ? ""
                            : e.className
                                  .split(" ")
                                  .filter(function (e) {
                                      return 0 === e.indexOf("swiper-slide") || 0 === e.indexOf(t.params.slideClass);
                                  })
                                  .join(" ");
                    },
                },
                {
                    key: "emitSlidesClasses",
                    value: function emitSlidesClasses() {
                        var e = this;
                        if (!e.params._emitClasses || !e.el) return;
                        var t = [];
                        e.slides.forEach(function (s) {
                            var a = e.getSlideClasses(s);
                            t.push({
                                slideEl: s,
                                classNames: a,
                            }),
                                e.emit("_slideClass", s, a);
                        }),
                            e.emit("_slideClasses", t);
                    },
                },
                {
                    key: "slidesPerViewDynamic",
                    value: function slidesPerViewDynamic(e, t) {
                        void 0 === e && (e = "current"), void 0 === t && (t = !1);
                        var s = this.params,
                            a = this.slides,
                            i = this.slidesGrid,
                            r = this.slidesSizesGrid,
                            n = this.size,
                            l = this.activeIndex;
                        var o = 1;
                        if (s.centeredSlides) {
                            var _e31,
                                _t20 = a[l].swiperSlideSize;
                            for (var _s17 = l + 1; _s17 < a.length; _s17 += 1) a[_s17] && !_e31 && ((_t20 += a[_s17].swiperSlideSize), (o += 1), _t20 > n && (_e31 = !0));
                            for (var _s18 = l - 1; _s18 >= 0; _s18 -= 1) a[_s18] && !_e31 && ((_t20 += a[_s18].swiperSlideSize), (o += 1), _t20 > n && (_e31 = !0));
                        } else if ("current" === e)
                            for (var _e32 = l + 1; _e32 < a.length; _e32 += 1) {
                                (t ? i[_e32] + r[_e32] - i[l] < n : i[_e32] - i[l] < n) && (o += 1);
                            }
                        else
                            for (var _e33 = l - 1; _e33 >= 0; _e33 -= 1) {
                                i[l] - i[_e33] < n && (o += 1);
                            }
                        return o;
                    },
                },
                {
                    key: "update",
                    value: function update() {
                        var e = this;
                        if (!e || e.destroyed) return;
                        var t = e.snapGrid,
                            s = e.params;
                        function a() {
                            var t = e.rtlTranslate ? -1 * e.translate : e.translate,
                                s = Math.min(Math.max(t, e.maxTranslate()), e.minTranslate());
                            e.setTranslate(s), e.updateActiveIndex(), e.updateSlidesClasses();
                        }
                        var i;
                        s.breakpoints && e.setBreakpoint(),
                            _toConsumableArray(e.el.querySelectorAll('[loading="lazy"]')).forEach(function (t) {
                                t.complete && q(e, t);
                            }),
                            e.updateSize(),
                            e.updateSlides(),
                            e.updateProgress(),
                            e.updateSlidesClasses(),
                            e.params.freeMode && e.params.freeMode.enabled
                                ? (a(), e.params.autoHeight && e.updateAutoHeight())
                                : ((i =
                                      ("auto" === e.params.slidesPerView || e.params.slidesPerView > 1) && e.isEnd && !e.params.centeredSlides
                                          ? e.slideTo(e.slides.length - 1, 0, !1, !0)
                                          : e.slideTo(e.activeIndex, 0, !1, !0)),
                                  i || a()),
                            s.watchOverflow && t !== e.snapGrid && e.checkOverflow(),
                            e.emit("update");
                    },
                },
                {
                    key: "changeDirection",
                    value: function changeDirection(e, t) {
                        void 0 === t && (t = !0);
                        var s = this,
                            a = s.params.direction;
                        return (
                            e || (e = "horizontal" === a ? "vertical" : "horizontal"),
                            e === a ||
                                ("horizontal" !== e && "vertical" !== e) ||
                                (s.el.classList.remove("".concat(s.params.containerModifierClass).concat(a)),
                                s.el.classList.add("".concat(s.params.containerModifierClass).concat(e)),
                                s.emitContainerClasses(),
                                (s.params.direction = e),
                                s.slides.forEach(function (t) {
                                    "vertical" === e ? (t.style.width = "") : (t.style.height = "");
                                }),
                                s.emit("changeDirection"),
                                t && s.update()),
                            s
                        );
                    },
                },
                {
                    key: "changeLanguageDirection",
                    value: function changeLanguageDirection(e) {
                        var t = this;
                        (t.rtl && "rtl" === e) ||
                            (!t.rtl && "ltr" === e) ||
                            ((t.rtl = "rtl" === e),
                            (t.rtlTranslate = "horizontal" === t.params.direction && t.rtl),
                            t.rtl
                                ? (t.el.classList.add("".concat(t.params.containerModifierClass, "rtl")), (t.el.dir = "rtl"))
                                : (t.el.classList.remove("".concat(t.params.containerModifierClass, "rtl")), (t.el.dir = "ltr")),
                            t.update());
                    },
                },
                {
                    key: "mount",
                    value: function mount(e) {
                        var t = this;
                        if (t.mounted) return !0;
                        var s = e || t.params.el;
                        if (("string" == typeof s && (s = document.querySelector(s)), !s)) return !1;
                        (s.swiper = t), s.shadowEl && (t.isElement = !0);
                        var a = function a() {
                            return ".".concat((t.params.wrapperClass || "").trim().split(" ").join("."));
                        };
                        var i = (function () {
                            if (s && s.shadowRoot && s.shadowRoot.querySelector) {
                                return s.shadowRoot.querySelector(a());
                            }
                            return f(s, a())[0];
                        })();
                        return (
                            !i &&
                                t.params.createElements &&
                                ((i = g("div", t.params.wrapperClass)),
                                s.append(i),
                                f(s, ".".concat(t.params.slideClass)).forEach(function (e) {
                                    i.append(e);
                                })),
                            Object.assign(t, {
                                el: s,
                                wrapperEl: i,
                                slidesEl: t.isElement ? s : i,
                                mounted: !0,
                                rtl: "rtl" === s.dir.toLowerCase() || "rtl" === w(s, "direction"),
                                rtlTranslate: "horizontal" === t.params.direction && ("rtl" === s.dir.toLowerCase() || "rtl" === w(s, "direction")),
                                wrongRTL: "-webkit-box" === w(i, "display"),
                            }),
                            !0
                        );
                    },
                },
                {
                    key: "init",
                    value: function init(e) {
                        var t = this;
                        if (t.initialized) return t;
                        return (
                            !1 === t.mount(e) ||
                                (t.emit("beforeInit"),
                                t.params.breakpoints && t.setBreakpoint(),
                                t.addClasses(),
                                t.updateSize(),
                                t.updateSlides(),
                                t.params.watchOverflow && t.checkOverflow(),
                                t.params.grabCursor && t.enabled && t.setGrabCursor(),
                                t.params.loop && t.virtual && t.params.virtual.enabled
                                    ? t.slideTo(t.params.initialSlide + t.virtual.slidesBefore, 0, t.params.runCallbacksOnInit, !1, !0)
                                    : t.slideTo(t.params.initialSlide, 0, t.params.runCallbacksOnInit, !1, !0),
                                t.params.loop && t.loopCreate(),
                                t.attachEvents(),
                                _toConsumableArray(t.el.querySelectorAll('[loading="lazy"]')).forEach(function (e) {
                                    e.complete
                                        ? q(t, e)
                                        : e.addEventListener("load", function (e) {
                                              q(t, e.target);
                                          });
                                }),
                                (t.initialized = !0),
                                t.emit("init"),
                                t.emit("afterInit")),
                            t
                        );
                    },
                },
                {
                    key: "destroy",
                    value: function destroy(e, t) {
                        void 0 === e && (e = !0), void 0 === t && (t = !0);
                        var s = this,
                            a = s.params,
                            i = s.el,
                            r = s.wrapperEl,
                            n = s.slides;
                        return (
                            void 0 === s.params ||
                                s.destroyed ||
                                (s.emit("beforeDestroy"),
                                (s.initialized = !1),
                                s.detachEvents(),
                                a.loop && s.loopDestroy(),
                                t &&
                                    (s.removeClasses(),
                                    i.removeAttribute("style"),
                                    r.removeAttribute("style"),
                                    n &&
                                        n.length &&
                                        n.forEach(function (e) {
                                            e.classList.remove(a.slideVisibleClass, a.slideActiveClass, a.slideNextClass, a.slidePrevClass), e.removeAttribute("style"), e.removeAttribute("data-swiper-slide-index");
                                        })),
                                s.emit("destroy"),
                                Object.keys(s.eventsListeners).forEach(function (e) {
                                    s.off(e);
                                }),
                                !1 !== e &&
                                    ((s.el.swiper = null),
                                    (function (e) {
                                        var t = e;
                                        Object.keys(t).forEach(function (e) {
                                            try {
                                                t[e] = null;
                                            } catch (e) {}
                                            try {
                                                delete t[e];
                                            } catch (e) {}
                                        });
                                    })(s)),
                                (s.destroyed = !0)),
                            null
                        );
                    },
                },
            ],
            [
                {
                    key: "extendDefaults",
                    value: function extendDefaults(e) {
                        p(Z, e);
                    },
                },
                {
                    key: "extendedDefaults",
                    get: function get() {
                        return Z;
                    },
                },
                {
                    key: "defaults",
                    get: function get() {
                        return _;
                    },
                },
                {
                    key: "installModule",
                    value: function installModule(e) {
                        Q.prototype.__modules__ || (Q.prototype.__modules__ = []);
                        var t = Q.prototype.__modules__;
                        "function" == typeof e && t.indexOf(e) < 0 && t.push(e);
                    },
                },
                {
                    key: "use",
                    value: function use(e) {
                        return Array.isArray(e)
                            ? (e.forEach(function (e) {
                                  return Q.installModule(e);
                              }),
                              Q)
                            : (Q.installModule(e), Q);
                    },
                },
            ]
        );
        return Q;
    })();
    function J(e, t, s, a) {
        return (
            e.params.createElements &&
                Object.keys(a).forEach(function (i) {
                    if (!s[i] && !0 === s.auto) {
                        var _r6 = f(e.el, ".".concat(a[i]))[0];
                        _r6 || ((_r6 = g("div", a[i])), (_r6.className = a[i]), e.el.append(_r6)), (s[i] = _r6), (t[i] = _r6);
                    }
                }),
            s
        );
    }
    function ee(e) {
        return (
            void 0 === e && (e = ""),
            ".".concat(
                e
                    .trim()
                    .replace(/([\.:!\/])/g, "\\$1")
                    .replace(/ /g, ".")
            )
        );
    }
    function te(e) {
        var t = this,
            s = t.params,
            a = t.slidesEl;
        s.loop && t.loopDestroy();
        var i = function i(e) {
            if ("string" == typeof e) {
                var _t21 = document.createElement("div");
                (_t21.innerHTML = e), a.append(_t21.children[0]), (_t21.innerHTML = "");
            } else a.append(e);
        };
        if ("object" == _typeof(e) && "length" in e) for (var _t22 = 0; _t22 < e.length; _t22 += 1) e[_t22] && i(e[_t22]);
        else i(e);
        t.recalcSlides(), s.loop && t.loopCreate(), (s.observer && !t.isElement) || t.update();
    }
    function se(e) {
        var t = this,
            s = t.params,
            a = t.activeIndex,
            i = t.slidesEl;
        s.loop && t.loopDestroy();
        var r = a + 1;
        var n = function n(e) {
            if ("string" == typeof e) {
                var _t23 = document.createElement("div");
                (_t23.innerHTML = e), i.prepend(_t23.children[0]), (_t23.innerHTML = "");
            } else i.prepend(e);
        };
        if ("object" == _typeof(e) && "length" in e) {
            for (var _t24 = 0; _t24 < e.length; _t24 += 1) e[_t24] && n(e[_t24]);
            r = a + e.length;
        } else n(e);
        t.recalcSlides(), s.loop && t.loopCreate(), (s.observer && !t.isElement) || t.update(), t.slideTo(r, 0, !1);
    }
    function ae(e, t) {
        var s = this,
            a = s.params,
            i = s.activeIndex,
            r = s.slidesEl;
        var n = i;
        a.loop && ((n -= s.loopedSlides), s.loopDestroy(), s.recalcSlides());
        var l = s.slides.length;
        if (e <= 0) return void s.prependSlide(t);
        if (e >= l) return void s.appendSlide(t);
        var o = n > e ? n + 1 : n;
        var d = [];
        for (var _t25 = l - 1; _t25 >= e; _t25 -= 1) {
            var _e34 = s.slides[_t25];
            _e34.remove(), d.unshift(_e34);
        }
        if ("object" == _typeof(t) && "length" in t) {
            for (var _e35 = 0; _e35 < t.length; _e35 += 1) t[_e35] && r.append(t[_e35]);
            o = n > e ? n + t.length : n;
        } else r.append(t);
        for (var _e36 = 0; _e36 < d.length; _e36 += 1) r.append(d[_e36]);
        s.recalcSlides(), a.loop && s.loopCreate(), (a.observer && !s.isElement) || s.update(), a.loop ? s.slideTo(o + s.loopedSlides, 0, !1) : s.slideTo(o, 0, !1);
    }
    function ie(e) {
        var t = this,
            s = t.params,
            a = t.activeIndex;
        var i = a;
        s.loop && ((i -= t.loopedSlides), t.loopDestroy());
        var r,
            n = i;
        if ("object" == _typeof(e) && "length" in e) {
            for (var _s19 = 0; _s19 < e.length; _s19 += 1) (r = e[_s19]), t.slides[r] && t.slides[r].remove(), r < n && (n -= 1);
            n = Math.max(n, 0);
        } else (r = e), t.slides[r] && t.slides[r].remove(), r < n && (n -= 1), (n = Math.max(n, 0));
        t.recalcSlides(), s.loop && t.loopCreate(), (s.observer && !t.isElement) || t.update(), s.loop ? t.slideTo(n + t.loopedSlides, 0, !1) : t.slideTo(n, 0, !1);
    }
    function re() {
        var e = this,
            t = [];
        for (var _s20 = 0; _s20 < e.slides.length; _s20 += 1) t.push(_s20);
        e.removeSlide(t);
    }
    function ne(e) {
        var t = e.effect,
            s = e.swiper,
            a = e.on,
            i = e.setTranslate,
            r = e.setTransition,
            n = e.overwriteParams,
            l = e.perspective,
            o = e.recreateShadows,
            d = e.getEffectParams;
        var c;
        a("beforeInit", function () {
            if (s.params.effect !== t) return;
            s.classNames.push("".concat(s.params.containerModifierClass).concat(t)), l && l() && s.classNames.push("".concat(s.params.containerModifierClass, "3d"));
            var e = n ? n() : {};
            Object.assign(s.params, e), Object.assign(s.originalParams, e);
        }),
            a("setTranslate", function () {
                s.params.effect === t && i();
            }),
            a("setTransition", function (e, a) {
                s.params.effect === t && r(a);
            }),
            a("transitionEnd", function () {
                if (s.params.effect === t && o) {
                    if (!d || !d().slideShadows) return;
                    s.slides.forEach(function (e) {
                        e.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(function (e) {
                            return e.remove();
                        });
                    }),
                        o();
                }
            }),
            a("virtualUpdate", function () {
                s.params.effect === t &&
                    (s.slides.length || (c = !0),
                    requestAnimationFrame(function () {
                        c && s.slides && s.slides.length && (i(), (c = !1));
                    }));
            });
    }
    function le(e, t) {
        var s = h(t);
        return s !== t && ((s.style.backfaceVisibility = "hidden"), (s.style["-webkit-backface-visibility"] = "hidden")), s;
    }
    function oe(e) {
        var t = e.swiper,
            s = e.duration,
            a = e.transformElements,
            i = e.allSlides;
        var r = t.activeIndex;
        if (t.params.virtualTranslate && 0 !== s) {
            var _e37,
                _s21 = !1;
            (_e37 = i
                ? a
                : a.filter(function (e) {
                      return (
                          b(
                              e.classList.contains("swiper-slide-transform")
                                  ? (function (e) {
                                        if (!e.parentElement)
                                            return t.slides.filter(function (t) {
                                                return t.shadowEl && t.shadowEl === e.parentNode;
                                            })[0];
                                        return e.parentElement;
                                    })(e)
                                  : e
                          ) === r
                      );
                  })),
                _e37.forEach(function (e) {
                    E(e, function () {
                        if (_s21) return;
                        if (!t || t.destroyed) return;
                        (_s21 = !0), (t.animating = !1);
                        var e = new window.CustomEvent("transitionend", {
                            bubbles: !0,
                            cancelable: !0,
                        });
                        t.wrapperEl.dispatchEvent(e);
                    });
                });
        }
    }
    function de(e, t, s) {
        var a = "swiper-slide-shadow" + (s ? "-".concat(s) : ""),
            i = h(t);
        var r = i.querySelector(".".concat(a));
        return r || ((r = g("div", "swiper-slide-shadow" + (s ? "-".concat(s) : ""))), i.append(r)), r;
    }
    Object.keys(K).forEach(function (e) {
        Object.keys(K[e]).forEach(function (t) {
            Q.prototype[t] = K[e][t];
        });
    }),
        Q.use([
            function (e) {
                var t = e.swiper,
                    s = e.on,
                    a = e.emit;
                var i = r();
                var n = null,
                    l = null;
                var o = function o() {
                        t && !t.destroyed && t.initialized && (a("beforeResize"), a("resize"));
                    },
                    d = function d() {
                        t && !t.destroyed && t.initialized && a("orientationchange");
                    };
                s("init", function () {
                    t.params.resizeObserver && void 0 !== i.ResizeObserver
                        ? t &&
                          !t.destroyed &&
                          t.initialized &&
                          ((n = new ResizeObserver(function (e) {
                              l = i.requestAnimationFrame(function () {
                                  var s = t.width,
                                      a = t.height;
                                  var i = s,
                                      r = a;
                                  e.forEach(function (e) {
                                      var s = e.contentBoxSize,
                                          a = e.contentRect,
                                          n = e.target;
                                      (n && n !== t.el) || ((i = a ? a.width : (s[0] || s).inlineSize), (r = a ? a.height : (s[0] || s).blockSize));
                                  }),
                                      (i === s && r === a) || o();
                              });
                          })),
                          n.observe(t.el))
                        : (i.addEventListener("resize", o), i.addEventListener("orientationchange", d));
                }),
                    s("destroy", function () {
                        l && i.cancelAnimationFrame(l), n && n.unobserve && t.el && (n.unobserve(t.el), (n = null)), i.removeEventListener("resize", o), i.removeEventListener("orientationchange", d);
                    });
            },
            function (e) {
                var t = e.swiper,
                    s = e.extendParams,
                    a = e.on,
                    i = e.emit;
                var n = [],
                    l = r(),
                    o = function o(e, t) {
                        void 0 === t && (t = {});
                        var s = new (l.MutationObserver || l.WebkitMutationObserver)(function (e) {
                            if (1 === e.length) return void i("observerUpdate", e[0]);
                            var t = function t() {
                                i("observerUpdate", e[0]);
                            };
                            l.requestAnimationFrame ? l.requestAnimationFrame(t) : l.setTimeout(t, 0);
                        });
                        s.observe(e, {
                            attributes: void 0 === t.attributes || t.attributes,
                            childList: void 0 === t.childList || t.childList,
                            characterData: void 0 === t.characterData || t.characterData,
                        }),
                            n.push(s);
                    };
                s({
                    observer: !1,
                    observeParents: !1,
                    observeSlideChildren: !1,
                }),
                    a("init", function () {
                        if (t.params.observer) {
                            if (t.params.observeParents) {
                                var _e38 = y(t.el);
                                for (var _t26 = 0; _t26 < _e38.length; _t26 += 1) o(_e38[_t26]);
                            }
                            o(t.el, {
                                childList: t.params.observeSlideChildren,
                            }),
                                o(t.wrapperEl, {
                                    attributes: !1,
                                });
                        }
                    }),
                    a("destroy", function () {
                        n.forEach(function (e) {
                            e.disconnect();
                        }),
                            n.splice(0, n.length);
                    });
            },
        ]);
    var ce = [
        function (e) {
            var t,
                s = e.swiper,
                a = e.extendParams,
                i = e.on,
                r = e.emit;
            a({
                virtual: {
                    enabled: !1,
                    slides: [],
                    cache: !0,
                    renderSlide: null,
                    renderExternal: null,
                    renderExternalUpdate: !0,
                    addSlidesBefore: 0,
                    addSlidesAfter: 0,
                },
            }),
                (s.virtual = {
                    cache: {},
                    from: void 0,
                    to: void 0,
                    slides: [],
                    offset: 0,
                    slidesGrid: [],
                });
            var n = document.createElement("div");
            function l(e, t) {
                var a = s.params.virtual;
                if (a.cache && s.virtual.cache[t]) return s.virtual.cache[t];
                var i;
                return (
                    a.renderSlide ? ((i = a.renderSlide.call(s, e, t)), "string" == typeof i && ((n.innerHTML = i), (i = n.children[0]))) : (i = s.isElement ? g("swiper-slide") : g("div", s.params.slideClass)),
                    i.setAttribute("data-swiper-slide-index", t),
                    a.renderSlide || (i.textContent = e),
                    a.cache && (s.virtual.cache[t] = i),
                    i
                );
            }
            function o(e) {
                var _s$params = s.params,
                    t = _s$params.slidesPerView,
                    a = _s$params.slidesPerGroup,
                    i = _s$params.centeredSlides,
                    n = _s$params.loop,
                    _s$params$virtual = s.params.virtual,
                    o = _s$params$virtual.addSlidesBefore,
                    d = _s$params$virtual.addSlidesAfter,
                    _s$virtual = s.virtual,
                    c = _s$virtual.from,
                    p = _s$virtual.to,
                    u = _s$virtual.slides,
                    m = _s$virtual.slidesGrid,
                    h = _s$virtual.offset;
                s.params.cssMode || s.updateActiveIndex();
                var g = s.activeIndex || 0;
                var v, w, b;
                (v = s.rtlTranslate ? "right" : s.isHorizontal() ? "left" : "top"), i ? ((w = Math.floor(t / 2) + a + d), (b = Math.floor(t / 2) + a + o)) : ((w = t + (a - 1) + d), (b = (n ? t : a) + o));
                var y = g - b,
                    E = g + w;
                n || ((y = Math.max(y, 0)), (E = Math.min(E, u.length - 1)));
                var x = (s.slidesGrid[y] || 0) - (s.slidesGrid[0] || 0);
                function S() {
                    s.updateSlides(), s.updateProgress(), s.updateSlidesClasses(), r("virtualUpdate");
                }
                if (
                    (n && g >= b ? ((y -= b), i || (x += s.slidesGrid[0])) : n && g < b && ((y = -b), i && (x += s.slidesGrid[0])),
                    Object.assign(s.virtual, {
                        from: y,
                        to: E,
                        offset: x,
                        slidesGrid: s.slidesGrid,
                        slidesBefore: b,
                        slidesAfter: w,
                    }),
                    c === y && p === E && !e)
                )
                    return (
                        s.slidesGrid !== m &&
                            x !== h &&
                            s.slides.forEach(function (e) {
                                e.style[v] = "".concat(x, "px");
                            }),
                        s.updateProgress(),
                        void r("virtualUpdate")
                    );
                if (s.params.virtual.renderExternal)
                    return (
                        s.params.virtual.renderExternal.call(s, {
                            offset: x,
                            from: y,
                            to: E,
                            slides: (function () {
                                var e = [];
                                for (var _t27 = y; _t27 <= E; _t27 += 1) e.push(u[_t27]);
                                return e;
                            })(),
                        }),
                        void (s.params.virtual.renderExternalUpdate ? S() : r("virtualUpdate"))
                    );
                var T = [],
                    M = [],
                    C = function C(e) {
                        var t = e;
                        return e < 0 ? (t = u.length + e) : t >= u.length && (t -= u.length), t;
                    };
                if (e)
                    s.slidesEl.querySelectorAll(".".concat(s.params.slideClass, ", swiper-slide")).forEach(function (e) {
                        e.remove();
                    });
                else
                    for (var _e39 = c; _e39 <= p; _e39 += 1)
                        if (_e39 < y || _e39 > E) {
                            var _t28 = C(_e39);
                            s.slidesEl.querySelectorAll(".".concat(s.params.slideClass, '[data-swiper-slide-index="').concat(_t28, '"], swiper-slide[data-swiper-slide-index="').concat(_t28, '"]')).forEach(function (e) {
                                e.remove();
                            });
                        }
                var P = n ? -u.length : 0,
                    L = n ? 2 * u.length : u.length;
                for (var _t29 = P; _t29 < L; _t29 += 1)
                    if (_t29 >= y && _t29 <= E) {
                        var _s22 = C(_t29);
                        void 0 === p || e ? M.push(_s22) : (_t29 > p && M.push(_s22), _t29 < c && T.push(_s22));
                    }
                if (
                    (M.forEach(function (e) {
                        s.slidesEl.append(l(u[e], e));
                    }),
                    n)
                )
                    for (var _e40 = T.length - 1; _e40 >= 0; _e40 -= 1) {
                        var _t30 = T[_e40];
                        s.slidesEl.prepend(l(u[_t30], _t30));
                    }
                else
                    T.sort(function (e, t) {
                        return t - e;
                    }),
                        T.forEach(function (e) {
                            s.slidesEl.prepend(l(u[e], e));
                        });
                f(s.slidesEl, ".swiper-slide, swiper-slide").forEach(function (e) {
                    e.style[v] = "".concat(x, "px");
                }),
                    S();
            }
            i("beforeInit", function () {
                if (!s.params.virtual.enabled) return;
                var e;
                if (void 0 === s.passedParams.virtual.slides) {
                    var _t31 = s.slidesEl.querySelectorAll(".".concat(s.params.slideClass, ", swiper-slide"));
                    _t31 &&
                        _t31.length &&
                        ((s.virtual.slides = _toConsumableArray(_t31)),
                        (e = !0),
                        _t31.forEach(function (e, t) {
                            e.setAttribute("data-swiper-slide-index", t), (s.virtual.cache[t] = e), e.remove();
                        }));
                }
                e || (s.virtual.slides = s.params.virtual.slides),
                    s.classNames.push("".concat(s.params.containerModifierClass, "virtual")),
                    (s.params.watchSlidesProgress = !0),
                    (s.originalParams.watchSlidesProgress = !0),
                    s.params.initialSlide || o();
            }),
                i("setTranslate", function () {
                    s.params.virtual.enabled &&
                        (s.params.cssMode && !s._immediateVirtual
                            ? (clearTimeout(t),
                              (t = setTimeout(function () {
                                  o();
                              }, 100)))
                            : o());
                }),
                i("init update resize", function () {
                    s.params.virtual.enabled && s.params.cssMode && u(s.wrapperEl, "--swiper-virtual-size", "".concat(s.virtualSize, "px"));
                }),
                Object.assign(s.virtual, {
                    appendSlide: function appendSlide(e) {
                        if ("object" == _typeof(e) && "length" in e) for (var _t32 = 0; _t32 < e.length; _t32 += 1) e[_t32] && s.virtual.slides.push(e[_t32]);
                        else s.virtual.slides.push(e);
                        o(!0);
                    },
                    prependSlide: function prependSlide(e) {
                        var t = s.activeIndex;
                        var a = t + 1,
                            i = 1;
                        if (Array.isArray(e)) {
                            for (var _t33 = 0; _t33 < e.length; _t33 += 1) e[_t33] && s.virtual.slides.unshift(e[_t33]);
                            (a = t + e.length), (i = e.length);
                        } else s.virtual.slides.unshift(e);
                        if (s.params.virtual.cache) {
                            var _e41 = s.virtual.cache,
                                _t34 = {};
                            Object.keys(_e41).forEach(function (s) {
                                var a = _e41[s],
                                    r = a.getAttribute("data-swiper-slide-index");
                                r && a.setAttribute("data-swiper-slide-index", parseInt(r, 10) + i), (_t34[parseInt(s, 10) + i] = a);
                            }),
                                (s.virtual.cache = _t34);
                        }
                        o(!0), s.slideTo(a, 0);
                    },
                    removeSlide: function removeSlide(e) {
                        if (null == e) return;
                        var t = s.activeIndex;
                        if (Array.isArray(e))
                            for (var _a10 = e.length - 1; _a10 >= 0; _a10 -= 1)
                                s.virtual.slides.splice(e[_a10], 1), s.params.virtual.cache && delete s.virtual.cache[e[_a10]], e[_a10] < t && (t -= 1), (t = Math.max(t, 0));
                        else s.virtual.slides.splice(e, 1), s.params.virtual.cache && delete s.virtual.cache[e], e < t && (t -= 1), (t = Math.max(t, 0));
                        o(!0), s.slideTo(t, 0);
                    },
                    removeAllSlides: function removeAllSlides() {
                        (s.virtual.slides = []), s.params.virtual.cache && (s.virtual.cache = {}), o(!0), s.slideTo(0, 0);
                    },
                    update: o,
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                i = e.on,
                n = e.emit;
            var l = a(),
                o = r();
            function d(e) {
                if (!t.enabled) return;
                var s = t.rtlTranslate;
                var a = e;
                a.originalEvent && (a = a.originalEvent);
                var i = a.keyCode || a.charCode,
                    r = t.params.keyboard.pageUpDown,
                    d = r && 33 === i,
                    c = r && 34 === i,
                    p = 37 === i,
                    u = 39 === i,
                    m = 38 === i,
                    h = 40 === i;
                if (!t.allowSlideNext && ((t.isHorizontal() && u) || (t.isVertical() && h) || c)) return !1;
                if (!t.allowSlidePrev && ((t.isHorizontal() && p) || (t.isVertical() && m) || d)) return !1;
                if (
                    !(
                        a.shiftKey ||
                        a.altKey ||
                        a.ctrlKey ||
                        a.metaKey ||
                        (l.activeElement && l.activeElement.nodeName && ("input" === l.activeElement.nodeName.toLowerCase() || "textarea" === l.activeElement.nodeName.toLowerCase()))
                    )
                ) {
                    if (t.params.keyboard.onlyInViewport && (d || c || p || u || m || h)) {
                        var _e42 = !1;
                        if (y(t.el, ".".concat(t.params.slideClass, ", swiper-slide")).length > 0 && 0 === y(t.el, ".".concat(t.params.slideActiveClass)).length) return;
                        var _a11 = t.el,
                            _i11 = _a11.clientWidth,
                            _r7 = _a11.clientHeight,
                            _n6 = o.innerWidth,
                            _l5 = o.innerHeight,
                            _d3 = v(_a11);
                        s && (_d3.left -= _a11.scrollLeft);
                        var _c2 = [
                            [_d3.left, _d3.top],
                            [_d3.left + _i11, _d3.top],
                            [_d3.left, _d3.top + _r7],
                            [_d3.left + _i11, _d3.top + _r7],
                        ];
                        for (var _t35 = 0; _t35 < _c2.length; _t35 += 1) {
                            var _s23 = _c2[_t35];
                            if (_s23[0] >= 0 && _s23[0] <= _n6 && _s23[1] >= 0 && _s23[1] <= _l5) {
                                if (0 === _s23[0] && 0 === _s23[1]) continue;
                                _e42 = !0;
                            }
                        }
                        if (!_e42) return;
                    }
                    t.isHorizontal()
                        ? ((d || c || p || u) && (a.preventDefault ? a.preventDefault() : (a.returnValue = !1)),
                          (((c || u) && !s) || ((d || p) && s)) && t.slideNext(),
                          (((d || p) && !s) || ((c || u) && s)) && t.slidePrev())
                        : ((d || c || m || h) && (a.preventDefault ? a.preventDefault() : (a.returnValue = !1)), (c || h) && t.slideNext(), (d || m) && t.slidePrev()),
                        n("keyPress", i);
                }
            }
            function c() {
                t.keyboard.enabled || (l.addEventListener("keydown", d), (t.keyboard.enabled = !0));
            }
            function p() {
                t.keyboard.enabled && (l.removeEventListener("keydown", d), (t.keyboard.enabled = !1));
            }
            (t.keyboard = {
                enabled: !1,
            }),
                s({
                    keyboard: {
                        enabled: !1,
                        onlyInViewport: !0,
                        pageUpDown: !0,
                    },
                }),
                i("init", function () {
                    t.params.keyboard.enabled && c();
                }),
                i("destroy", function () {
                    t.keyboard.enabled && p();
                }),
                Object.assign(t.keyboard, {
                    enable: c,
                    disable: p,
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on,
                i = e.emit;
            var o = r();
            var d;
            s({
                mousewheel: {
                    enabled: !1,
                    releaseOnEdges: !1,
                    invert: !1,
                    forceToAxis: !1,
                    sensitivity: 1,
                    eventsTarget: "container",
                    thresholdDelta: null,
                    thresholdTime: null,
                },
            }),
                (t.mousewheel = {
                    enabled: !1,
                });
            var c,
                p = l();
            var u = [];
            function m() {
                t.enabled && (t.mouseEntered = !0);
            }
            function h() {
                t.enabled && (t.mouseEntered = !1);
            }
            function f(e) {
                return (
                    !(t.params.mousewheel.thresholdDelta && e.delta < t.params.mousewheel.thresholdDelta) &&
                    !(t.params.mousewheel.thresholdTime && l() - p < t.params.mousewheel.thresholdTime) &&
                    ((e.delta >= 6 && l() - p < 60) ||
                        (e.direction < 0 ? (t.isEnd && !t.params.loop) || t.animating || (t.slideNext(), i("scroll", e.raw)) : (t.isBeginning && !t.params.loop) || t.animating || (t.slidePrev(), i("scroll", e.raw)),
                        (p = new o.Date().getTime()),
                        !1))
                );
            }
            function g(e) {
                var s = e,
                    a = !0;
                if (!t.enabled) return;
                var r = t.params.mousewheel;
                t.params.cssMode && s.preventDefault();
                var o = t.el;
                "container" !== t.params.mousewheel.eventsTarget && (o = document.querySelector(t.params.mousewheel.eventsTarget));
                var p = o && o.contains(s.target);
                if (!t.mouseEntered && !p && !r.releaseOnEdges) return !0;
                s.originalEvent && (s = s.originalEvent);
                var m = 0;
                var h = t.rtlTranslate ? -1 : 1,
                    g = (function (e) {
                        var t = 0,
                            s = 0,
                            a = 0,
                            i = 0;
                        return (
                            "detail" in e && (s = e.detail),
                            "wheelDelta" in e && (s = -e.wheelDelta / 120),
                            "wheelDeltaY" in e && (s = -e.wheelDeltaY / 120),
                            "wheelDeltaX" in e && (t = -e.wheelDeltaX / 120),
                            "axis" in e && e.axis === e.HORIZONTAL_AXIS && ((t = s), (s = 0)),
                            (a = 10 * t),
                            (i = 10 * s),
                            "deltaY" in e && (i = e.deltaY),
                            "deltaX" in e && (a = e.deltaX),
                            e.shiftKey && !a && ((a = i), (i = 0)),
                            (a || i) && e.deltaMode && (1 === e.deltaMode ? ((a *= 40), (i *= 40)) : ((a *= 800), (i *= 800))),
                            a && !t && (t = a < 1 ? -1 : 1),
                            i && !s && (s = i < 1 ? -1 : 1),
                            {
                                spinX: t,
                                spinY: s,
                                pixelX: a,
                                pixelY: i,
                            }
                        );
                    })(s);
                if (r.forceToAxis) {
                    if (t.isHorizontal()) {
                        if (!(Math.abs(g.pixelX) > Math.abs(g.pixelY))) return !0;
                        m = -g.pixelX * h;
                    } else {
                        if (!(Math.abs(g.pixelY) > Math.abs(g.pixelX))) return !0;
                        m = -g.pixelY;
                    }
                } else m = Math.abs(g.pixelX) > Math.abs(g.pixelY) ? -g.pixelX * h : -g.pixelY;
                if (0 === m) return !0;
                r.invert && (m = -m);
                var v = t.getTranslate() + m * r.sensitivity;
                if (
                    (v >= t.minTranslate() && (v = t.minTranslate()),
                    v <= t.maxTranslate() && (v = t.maxTranslate()),
                    (a = !!t.params.loop || !(v === t.minTranslate() || v === t.maxTranslate())),
                    a && t.params.nested && s.stopPropagation(),
                    t.params.freeMode && t.params.freeMode.enabled)
                ) {
                    var _e43 = {
                            time: l(),
                            delta: Math.abs(m),
                            direction: Math.sign(m),
                        },
                        _a12 = c && _e43.time < c.time + 500 && _e43.delta <= c.delta && _e43.direction === c.direction;
                    if (!_a12) {
                        (c = void 0), t.params.loop && t.loopFix();
                        var _l6 = t.getTranslate() + m * r.sensitivity;
                        var _o5 = t.isBeginning,
                            _p2 = t.isEnd;
                        if (
                            (_l6 >= t.minTranslate() && (_l6 = t.minTranslate()),
                            _l6 <= t.maxTranslate() && (_l6 = t.maxTranslate()),
                            t.setTransition(0),
                            t.setTranslate(_l6),
                            t.updateProgress(),
                            t.updateActiveIndex(),
                            t.updateSlidesClasses(),
                            ((!_o5 && t.isBeginning) || (!_p2 && t.isEnd)) && t.updateSlidesClasses(),
                            t.params.freeMode.sticky)
                        ) {
                            clearTimeout(d), (d = void 0), u.length >= 15 && u.shift();
                            var _s24 = u.length ? u[u.length - 1] : void 0,
                                _a13 = u[0];
                            if ((u.push(_e43), _s24 && (_e43.delta > _s24.delta || _e43.direction !== _s24.direction))) u.splice(0);
                            else if (u.length >= 15 && _e43.time - _a13.time < 500 && _a13.delta - _e43.delta >= 1 && _e43.delta <= 6) {
                                var _s25 = m > 0 ? 0.8 : 0.2;
                                (c = _e43),
                                    u.splice(0),
                                    (d = n(function () {
                                        t.slideToClosest(t.params.speed, !0, void 0, _s25);
                                    }, 0));
                            }
                            d ||
                                (d = n(function () {
                                    (c = _e43), u.splice(0), t.slideToClosest(t.params.speed, !0, void 0, 0.5);
                                }, 500));
                        }
                        if ((_a12 || i("scroll", s), t.params.autoplay && t.params.autoplayDisableOnInteraction && t.autoplay.stop(), _l6 === t.minTranslate() || _l6 === t.maxTranslate())) return !0;
                    }
                } else {
                    var _s26 = {
                        time: l(),
                        delta: Math.abs(m),
                        direction: Math.sign(m),
                        raw: e,
                    };
                    u.length >= 2 && u.shift();
                    var _a14 = u.length ? u[u.length - 1] : void 0;
                    if (
                        (u.push(_s26),
                        _a14 ? (_s26.direction !== _a14.direction || _s26.delta > _a14.delta || _s26.time > _a14.time + 150) && f(_s26) : f(_s26),
                        (function (e) {
                            var s = t.params.mousewheel;
                            if (e.direction < 0) {
                                if (t.isEnd && !t.params.loop && s.releaseOnEdges) return !0;
                            } else if (t.isBeginning && !t.params.loop && s.releaseOnEdges) return !0;
                            return !1;
                        })(_s26))
                    )
                        return !0;
                }
                return s.preventDefault ? s.preventDefault() : (s.returnValue = !1), !1;
            }
            function v(e) {
                var s = t.el;
                "container" !== t.params.mousewheel.eventsTarget && (s = document.querySelector(t.params.mousewheel.eventsTarget)), s[e]("mouseenter", m), s[e]("mouseleave", h), s[e]("wheel", g);
            }
            function w() {
                return t.params.cssMode ? (t.wrapperEl.removeEventListener("wheel", g), !0) : !t.mousewheel.enabled && (v("addEventListener"), (t.mousewheel.enabled = !0), !0);
            }
            function b() {
                return t.params.cssMode ? (t.wrapperEl.addEventListener(event, g), !0) : !!t.mousewheel.enabled && (v("removeEventListener"), (t.mousewheel.enabled = !1), !0);
            }
            a("init", function () {
                !t.params.mousewheel.enabled && t.params.cssMode && b(), t.params.mousewheel.enabled && w();
            }),
                a("destroy", function () {
                    t.params.cssMode && w(), t.mousewheel.enabled && b();
                }),
                Object.assign(t.mousewheel, {
                    enable: w,
                    disable: b,
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on,
                i = e.emit;
            s({
                navigation: {
                    nextEl: null,
                    prevEl: null,
                    hideOnClick: !1,
                    disabledClass: "swiper-button-disabled",
                    hiddenClass: "swiper-button-hidden",
                    lockClass: "swiper-button-lock",
                    navigationDisabledClass: "swiper-navigation-disabled",
                },
            }),
                (t.navigation = {
                    nextEl: null,
                    prevEl: null,
                });
            var r = function r(e) {
                return (
                    Array.isArray(e) ||
                        (e = [e].filter(function (e) {
                            return !!e;
                        })),
                    e
                );
            };
            function n(e) {
                var s;
                return e && "string" == typeof e && t.isElement && ((s = t.el.shadowRoot.querySelector(e)), s)
                    ? s
                    : (e &&
                          ("string" == typeof e && (s = _toConsumableArray(document.querySelectorAll(e))),
                          t.params.uniqueNavElements && "string" == typeof e && s.length > 1 && 1 === t.el.querySelectorAll(e).length && (s = t.el.querySelector(e))),
                      e && !s ? e : s);
            }
            function l(e, s) {
                var a = t.params.navigation;
                (e = r(e)).forEach(function (e) {
                    e && (e.classList[s ? "add" : "remove"](a.disabledClass), "BUTTON" === e.tagName && (e.disabled = s), t.params.watchOverflow && t.enabled && e.classList[t.isLocked ? "add" : "remove"](a.lockClass));
                });
            }
            function o() {
                var _t$navigation = t.navigation,
                    e = _t$navigation.nextEl,
                    s = _t$navigation.prevEl;
                if (t.params.loop) return l(s, !1), void l(e, !1);
                l(s, t.isBeginning && !t.params.rewind), l(e, t.isEnd && !t.params.rewind);
            }
            function d(e) {
                e.preventDefault(), (!t.isBeginning || t.params.loop || t.params.rewind) && (t.slidePrev(), i("navigationPrev"));
            }
            function c(e) {
                e.preventDefault(), (!t.isEnd || t.params.loop || t.params.rewind) && (t.slideNext(), i("navigationNext"));
            }
            function p() {
                var e = t.params.navigation;
                if (
                    ((t.params.navigation = J(t, t.originalParams.navigation, t.params.navigation, {
                        nextEl: "swiper-button-next",
                        prevEl: "swiper-button-prev",
                    })),
                    !e.nextEl && !e.prevEl)
                )
                    return;
                var s = n(e.nextEl),
                    a = n(e.prevEl);
                Object.assign(t.navigation, {
                    nextEl: s,
                    prevEl: a,
                }),
                    (s = r(s)),
                    (a = r(a));
                var i = function i(s, a) {
                    s && s.addEventListener("click", "next" === a ? c : d), !t.enabled && s && s.classList.add(e.lockClass);
                };
                s.forEach(function (e) {
                    return i(e, "next");
                }),
                    a.forEach(function (e) {
                        return i(e, "prev");
                    });
            }
            function u() {
                var _t$navigation2 = t.navigation,
                    e = _t$navigation2.nextEl,
                    s = _t$navigation2.prevEl;
                (e = r(e)), (s = r(s));
                var a = function a(e, s) {
                    e.removeEventListener("click", "next" === s ? c : d), e.classList.remove(t.params.navigation.disabledClass);
                };
                e.forEach(function (e) {
                    return a(e, "next");
                }),
                    s.forEach(function (e) {
                        return a(e, "prev");
                    });
            }
            a("init", function () {
                !1 === t.params.navigation.enabled ? m() : (p(), o());
            }),
                a("toEdge fromEdge lock unlock", function () {
                    o();
                }),
                a("destroy", function () {
                    u();
                }),
                a("enable disable", function () {
                    var _t$navigation3 = t.navigation,
                        e = _t$navigation3.nextEl,
                        s = _t$navigation3.prevEl;
                    (e = r(e)),
                        (s = r(s)),
                        []
                            .concat(_toConsumableArray(e), _toConsumableArray(s))
                            .filter(function (e) {
                                return !!e;
                            })
                            .forEach(function (e) {
                                return e.classList[t.enabled ? "remove" : "add"](t.params.navigation.lockClass);
                            });
                }),
                a("click", function (e, s) {
                    var _t$navigation4 = t.navigation,
                        a = _t$navigation4.nextEl,
                        n = _t$navigation4.prevEl;
                    (a = r(a)), (n = r(n));
                    var l = s.target;
                    if (t.params.navigation.hideOnClick && !n.includes(l) && !a.includes(l)) {
                        if (t.pagination && t.params.pagination && t.params.pagination.clickable && (t.pagination.el === l || t.pagination.el.contains(l))) return;
                        var _e44;
                        a.length ? (_e44 = a[0].classList.contains(t.params.navigation.hiddenClass)) : n.length && (_e44 = n[0].classList.contains(t.params.navigation.hiddenClass)),
                            i(!0 === _e44 ? "navigationShow" : "navigationHide"),
                            []
                                .concat(_toConsumableArray(a), _toConsumableArray(n))
                                .filter(function (e) {
                                    return !!e;
                                })
                                .forEach(function (e) {
                                    return e.classList.toggle(t.params.navigation.hiddenClass);
                                });
                    }
                });
            var m = function m() {
                t.el.classList.add(t.params.navigation.navigationDisabledClass), u();
            };
            Object.assign(t.navigation, {
                enable: function enable() {
                    t.el.classList.remove(t.params.navigation.navigationDisabledClass), p(), o();
                },
                disable: m,
                update: o,
                init: p,
                destroy: u,
            });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on,
                i = e.emit;
            var r = "swiper-pagination";
            var n;
            s({
                pagination: {
                    el: null,
                    bulletElement: "span",
                    clickable: !1,
                    hideOnClick: !1,
                    renderBullet: null,
                    renderProgressbar: null,
                    renderFraction: null,
                    renderCustom: null,
                    progressbarOpposite: !1,
                    type: "bullets",
                    dynamicBullets: !1,
                    dynamicMainBullets: 1,
                    formatFractionCurrent: function formatFractionCurrent(e) {
                        return e;
                    },
                    formatFractionTotal: function formatFractionTotal(e) {
                        return e;
                    },
                    bulletClass: "".concat(r, "-bullet"),
                    bulletActiveClass: "".concat(r, "-bullet-active"),
                    modifierClass: "".concat(r, "-"),
                    currentClass: "".concat(r, "-current"),
                    totalClass: "".concat(r, "-total"),
                    hiddenClass: "".concat(r, "-hidden"),
                    progressbarFillClass: "".concat(r, "-progressbar-fill"),
                    progressbarOppositeClass: "".concat(r, "-progressbar-opposite"),
                    clickableClass: "".concat(r, "-clickable"),
                    lockClass: "".concat(r, "-lock"),
                    horizontalClass: "".concat(r, "-horizontal"),
                    verticalClass: "".concat(r, "-vertical"),
                    paginationDisabledClass: "".concat(r, "-disabled"),
                },
            }),
                (t.pagination = {
                    el: null,
                    bullets: [],
                });
            var l = 0;
            var o = function o(e) {
                return (
                    Array.isArray(e) ||
                        (e = [e].filter(function (e) {
                            return !!e;
                        })),
                    e
                );
            };
            function d() {
                return !t.params.pagination.el || !t.pagination.el || (Array.isArray(t.pagination.el) && 0 === t.pagination.el.length);
            }
            function c(e, s) {
                var a = t.params.pagination.bulletActiveClass;
                e &&
                    (e = e[("prev" === s ? "previous" : "next") + "ElementSibling"]) &&
                    (e.classList.add("".concat(a, "-").concat(s)), (e = e[("prev" === s ? "previous" : "next") + "ElementSibling"]) && e.classList.add("".concat(a, "-").concat(s, "-").concat(s)));
            }
            function p(e) {
                if (!e.target.matches(ee(t.params.pagination.bulletClass))) return;
                e.preventDefault();
                var s = b(e.target) * t.params.slidesPerGroup;
                t.params.loop ? t.slideToLoop(s) : t.slideTo(s);
            }
            function u() {
                var e = t.rtl,
                    s = t.params.pagination;
                if (d()) return;
                var a,
                    r = t.pagination.el;
                r = o(r);
                var p = t.virtual && t.params.virtual.enabled ? t.virtual.slides.length : t.slides.length,
                    u = t.params.loop ? Math.ceil(p / t.params.slidesPerGroup) : t.snapGrid.length;
                if (
                    ((a = t.params.loop ? (t.params.slidesPerGroup > 1 ? Math.floor(t.realIndex / t.params.slidesPerGroup) : t.realIndex) : void 0 !== t.snapIndex ? t.snapIndex : t.activeIndex || 0),
                    "bullets" === s.type && t.pagination.bullets && t.pagination.bullets.length > 0)
                ) {
                    var _i12 = t.pagination.bullets;
                    var _o6, _d4, _p3;
                    if (
                        (s.dynamicBullets &&
                            ((n = x(_i12[0], t.isHorizontal() ? "width" : "height", !0)),
                            r.forEach(function (e) {
                                e.style[t.isHorizontal() ? "width" : "height"] = n * (s.dynamicMainBullets + 4) + "px";
                            }),
                            s.dynamicMainBullets > 1 && void 0 !== t.previousIndex && ((l += a - (t.previousIndex || 0)), l > s.dynamicMainBullets - 1 ? (l = s.dynamicMainBullets - 1) : l < 0 && (l = 0)),
                            (_o6 = Math.max(a - l, 0)),
                            (_d4 = _o6 + (Math.min(_i12.length, s.dynamicMainBullets) - 1)),
                            (_p3 = (_d4 + _o6) / 2)),
                        _i12.forEach(function (e) {
                            var _e$classList2;
                            (_e$classList2 = e.classList).remove.apply(
                                _e$classList2,
                                _toConsumableArray(
                                    ["", "-next", "-next-next", "-prev", "-prev-prev", "-main"].map(function (e) {
                                        return "".concat(s.bulletActiveClass).concat(e);
                                    })
                                )
                            );
                        }),
                        r.length > 1)
                    )
                        _i12.forEach(function (e) {
                            var t = b(e);
                            t === a && e.classList.add(s.bulletActiveClass),
                                s.dynamicBullets && (t >= _o6 && t <= _d4 && e.classList.add("".concat(s.bulletActiveClass, "-main")), t === _o6 && c(e, "prev"), t === _d4 && c(e, "next"));
                        });
                    else {
                        var _e45 = _i12[a];
                        if ((_e45 && _e45.classList.add(s.bulletActiveClass), s.dynamicBullets)) {
                            var _e46 = _i12[_o6],
                                _t36 = _i12[_d4];
                            for (var _e47 = _o6; _e47 <= _d4; _e47 += 1) _i12[_e47].classList.add("".concat(s.bulletActiveClass, "-main"));
                            c(_e46, "prev"), c(_t36, "next");
                        }
                    }
                    if (s.dynamicBullets) {
                        var _a15 = Math.min(_i12.length, s.dynamicMainBullets + 4),
                            _r8 = (n * _a15 - n) / 2 - _p3 * n,
                            _l7 = e ? "right" : "left";
                        _i12.forEach(function (e) {
                            e.style[t.isHorizontal() ? _l7 : "top"] = "".concat(_r8, "px");
                        });
                    }
                }
                r.forEach(function (e, r) {
                    if (
                        ("fraction" === s.type &&
                            (e.querySelectorAll(ee(s.currentClass)).forEach(function (e) {
                                e.textContent = s.formatFractionCurrent(a + 1);
                            }),
                            e.querySelectorAll(ee(s.totalClass)).forEach(function (e) {
                                e.textContent = s.formatFractionTotal(u);
                            })),
                        "progressbar" === s.type)
                    ) {
                        var _i13;
                        _i13 = s.progressbarOpposite ? (t.isHorizontal() ? "vertical" : "horizontal") : t.isHorizontal() ? "horizontal" : "vertical";
                        var _r9 = (a + 1) / u;
                        var _n7 = 1,
                            _l8 = 1;
                        "horizontal" === _i13 ? (_n7 = _r9) : (_l8 = _r9),
                            e.querySelectorAll(ee(s.progressbarFillClass)).forEach(function (e) {
                                (e.style.transform = "translate3d(0,0,0) scaleX(".concat(_n7, ") scaleY(").concat(_l8, ")")), (e.style.transitionDuration = "".concat(t.params.speed, "ms"));
                            });
                    }
                    "custom" === s.type && s.renderCustom ? ((e.innerHTML = s.renderCustom(t, a + 1, u)), 0 === r && i("paginationRender", e)) : (0 === r && i("paginationRender", e), i("paginationUpdate", e)),
                        t.params.watchOverflow && t.enabled && e.classList[t.isLocked ? "add" : "remove"](s.lockClass);
                });
            }
            function m() {
                var e = t.params.pagination;
                if (d()) return;
                var s = t.virtual && t.params.virtual.enabled ? t.virtual.slides.length : t.slides.length;
                var a = t.pagination.el;
                a = o(a);
                var r = "";
                if ("bullets" === e.type) {
                    var _a16 = t.params.loop ? Math.ceil(s / t.params.slidesPerGroup) : t.snapGrid.length;
                    t.params.freeMode && t.params.freeMode.enabled && _a16 > s && (_a16 = s);
                    for (var _s27 = 0; _s27 < _a16; _s27 += 1)
                        e.renderBullet ? (r += e.renderBullet.call(t, _s27, e.bulletClass)) : (r += "<".concat(e.bulletElement, ' class="').concat(e.bulletClass, '"></').concat(e.bulletElement, ">"));
                }
                "fraction" === e.type &&
                    (r = e.renderFraction ? e.renderFraction.call(t, e.currentClass, e.totalClass) : '<span class="'.concat(e.currentClass, '"></span> / <span class="').concat(e.totalClass, '"></span>')),
                    "progressbar" === e.type && (r = e.renderProgressbar ? e.renderProgressbar.call(t, e.progressbarFillClass) : '<span class="'.concat(e.progressbarFillClass, '"></span>')),
                    a.forEach(function (s) {
                        "custom" !== e.type && (s.innerHTML = r || ""), "bullets" === e.type && (t.pagination.bullets = _toConsumableArray(s.querySelectorAll(ee(e.bulletClass))));
                    }),
                    "custom" !== e.type && i("paginationRender", a[0]);
            }
            function h() {
                t.params.pagination = J(t, t.originalParams.pagination, t.params.pagination, {
                    el: "swiper-pagination",
                });
                var e = t.params.pagination;
                if (!e.el) return;
                var s;
                "string" == typeof e.el && t.isElement && (s = t.el.shadowRoot.querySelector(e.el)),
                    s || "string" != typeof e.el || (s = _toConsumableArray(document.querySelectorAll(e.el))),
                    s || (s = e.el),
                    s &&
                        0 !== s.length &&
                        (t.params.uniqueNavElements &&
                            "string" == typeof e.el &&
                            Array.isArray(s) &&
                            s.length > 1 &&
                            ((s = _toConsumableArray(t.el.querySelectorAll(e.el))),
                            s.length > 1 &&
                                (s = s.filter(function (e) {
                                    return y(e, ".swiper")[0] === t.el;
                                })[0])),
                        Array.isArray(s) && 1 === s.length && (s = s[0]),
                        Object.assign(t.pagination, {
                            el: s,
                        }),
                        (s = o(s)),
                        s.forEach(function (s) {
                            "bullets" === e.type && e.clickable && s.classList.add(e.clickableClass),
                                s.classList.add(e.modifierClass + e.type),
                                s.classList.add(t.isHorizontal() ? e.horizontalClass : e.verticalClass),
                                "bullets" === e.type && e.dynamicBullets && (s.classList.add("".concat(e.modifierClass).concat(e.type, "-dynamic")), (l = 0), e.dynamicMainBullets < 1 && (e.dynamicMainBullets = 1)),
                                "progressbar" === e.type && e.progressbarOpposite && s.classList.add(e.progressbarOppositeClass),
                                e.clickable && s.addEventListener("click", p),
                                t.enabled || s.classList.add(e.lockClass);
                        }));
            }
            function f() {
                var e = t.params.pagination;
                if (d()) return;
                var s = t.pagination.el;
                s &&
                    ((s = o(s)),
                    s.forEach(function (s) {
                        s.classList.remove(e.hiddenClass),
                            s.classList.remove(e.modifierClass + e.type),
                            s.classList.remove(t.isHorizontal() ? e.horizontalClass : e.verticalClass),
                            e.clickable && s.removeEventListener("click", p);
                    })),
                    t.pagination.bullets &&
                        t.pagination.bullets.forEach(function (t) {
                            return t.classList.remove(e.bulletActiveClass);
                        });
            }
            a("init", function () {
                !1 === t.params.pagination.enabled ? g() : (h(), m(), u());
            }),
                a("activeIndexChange", function () {
                    void 0 === t.snapIndex && u();
                }),
                a("snapIndexChange", function () {
                    u();
                }),
                a("snapGridLengthChange", function () {
                    m(), u();
                }),
                a("destroy", function () {
                    f();
                }),
                a("enable disable", function () {
                    var e = t.pagination.el;
                    e &&
                        ((e = o(e)),
                        e.forEach(function (e) {
                            return e.classList[t.enabled ? "remove" : "add"](t.params.pagination.lockClass);
                        }));
                }),
                a("lock unlock", function () {
                    u();
                }),
                a("click", function (e, s) {
                    var a = s.target;
                    var r = t.pagination.el;
                    if (
                        (Array.isArray(r) ||
                            (r = [r].filter(function (e) {
                                return !!e;
                            })),
                        t.params.pagination.el && t.params.pagination.hideOnClick && r && r.length > 0 && !a.classList.contains(t.params.pagination.bulletClass))
                    ) {
                        if (t.navigation && ((t.navigation.nextEl && a === t.navigation.nextEl) || (t.navigation.prevEl && a === t.navigation.prevEl))) return;
                        var _e48 = r[0].classList.contains(t.params.pagination.hiddenClass);
                        i(!0 === _e48 ? "paginationShow" : "paginationHide"),
                            r.forEach(function (e) {
                                return e.classList.toggle(t.params.pagination.hiddenClass);
                            });
                    }
                });
            var g = function g() {
                t.el.classList.add(t.params.pagination.paginationDisabledClass);
                var e = t.pagination.el;
                e &&
                    ((e = o(e)),
                    e.forEach(function (e) {
                        return e.classList.add(t.params.pagination.paginationDisabledClass);
                    })),
                    f();
            };
            Object.assign(t.pagination, {
                enable: function enable() {
                    t.el.classList.remove(t.params.pagination.paginationDisabledClass);
                    var e = t.pagination.el;
                    e &&
                        ((e = o(e)),
                        e.forEach(function (e) {
                            return e.classList.remove(t.params.pagination.paginationDisabledClass);
                        })),
                        h(),
                        m(),
                        u();
                },
                disable: g,
                render: m,
                update: u,
                init: h,
                destroy: f,
            });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                i = e.on,
                r = e.emit;
            var l = a();
            var o,
                d,
                c,
                p,
                u = !1,
                m = null,
                h = null;
            function f() {
                if (!t.params.scrollbar.el || !t.scrollbar.el) return;
                var e = t.scrollbar,
                    s = t.rtlTranslate,
                    a = e.dragEl,
                    i = e.el,
                    r = t.params.scrollbar,
                    n = t.params.loop ? t.progressLoop : t.progress;
                var l = d,
                    o = (c - d) * n;
                s ? ((o = -o), o > 0 ? ((l = d - o), (o = 0)) : -o + d > c && (l = c + o)) : o < 0 ? ((l = d + o), (o = 0)) : o + d > c && (l = c - o),
                    t.isHorizontal()
                        ? ((a.style.transform = "translate3d(".concat(o, "px, 0, 0)")), (a.style.width = "".concat(l, "px")))
                        : ((a.style.transform = "translate3d(0px, ".concat(o, "px, 0)")), (a.style.height = "".concat(l, "px"))),
                    r.hide &&
                        (clearTimeout(m),
                        (i.style.opacity = 1),
                        (m = setTimeout(function () {
                            (i.style.opacity = 0), (i.style.transitionDuration = "400ms");
                        }, 1e3)));
            }
            function w() {
                if (!t.params.scrollbar.el || !t.scrollbar.el) return;
                var e = t.scrollbar,
                    s = e.dragEl,
                    a = e.el;
                (s.style.width = ""),
                    (s.style.height = ""),
                    (c = t.isHorizontal() ? a.offsetWidth : a.offsetHeight),
                    (p = t.size / (t.virtualSize + t.params.slidesOffsetBefore - (t.params.centeredSlides ? t.snapGrid[0] : 0))),
                    (d = "auto" === t.params.scrollbar.dragSize ? c * p : parseInt(t.params.scrollbar.dragSize, 10)),
                    t.isHorizontal() ? (s.style.width = "".concat(d, "px")) : (s.style.height = "".concat(d, "px")),
                    (a.style.display = p >= 1 ? "none" : ""),
                    t.params.scrollbar.hide && (a.style.opacity = 0),
                    t.params.watchOverflow && t.enabled && e.el.classList[t.isLocked ? "add" : "remove"](t.params.scrollbar.lockClass);
            }
            function b(e) {
                return t.isHorizontal() ? e.clientX : e.clientY;
            }
            function y(e) {
                var s = t.scrollbar,
                    a = t.rtlTranslate,
                    i = s.el;
                var r;
                (r = (b(e) - v(i)[t.isHorizontal() ? "left" : "top"] - (null !== o ? o : d / 2)) / (c - d)), (r = Math.max(Math.min(r, 1), 0)), a && (r = 1 - r);
                var n = t.minTranslate() + (t.maxTranslate() - t.minTranslate()) * r;
                t.updateProgress(n), t.setTranslate(n), t.updateActiveIndex(), t.updateSlidesClasses();
            }
            function E(e) {
                var s = t.params.scrollbar,
                    a = t.scrollbar,
                    i = t.wrapperEl,
                    n = a.el,
                    l = a.dragEl;
                (u = !0),
                    (o = e.target === l ? b(e) - e.target.getBoundingClientRect()[t.isHorizontal() ? "left" : "top"] : null),
                    e.preventDefault(),
                    e.stopPropagation(),
                    (i.style.transitionDuration = "100ms"),
                    (l.style.transitionDuration = "100ms"),
                    y(e),
                    clearTimeout(h),
                    (n.style.transitionDuration = "0ms"),
                    s.hide && (n.style.opacity = 1),
                    t.params.cssMode && (t.wrapperEl.style["scroll-snap-type"] = "none"),
                    r("scrollbarDragStart", e);
            }
            function x(e) {
                var s = t.scrollbar,
                    a = t.wrapperEl,
                    i = s.el,
                    n = s.dragEl;
                u &&
                    (e.preventDefault ? e.preventDefault() : (e.returnValue = !1),
                    y(e),
                    (a.style.transitionDuration = "0ms"),
                    (i.style.transitionDuration = "0ms"),
                    (n.style.transitionDuration = "0ms"),
                    r("scrollbarDragMove", e));
            }
            function S(e) {
                var s = t.params.scrollbar,
                    a = t.scrollbar,
                    i = t.wrapperEl,
                    l = a.el;
                u &&
                    ((u = !1),
                    t.params.cssMode && ((t.wrapperEl.style["scroll-snap-type"] = ""), (i.style.transitionDuration = "")),
                    s.hide &&
                        (clearTimeout(h),
                        (h = n(function () {
                            (l.style.opacity = 0), (l.style.transitionDuration = "400ms");
                        }, 1e3))),
                    r("scrollbarDragEnd", e),
                    s.snapOnRelease && t.slideToClosest());
            }
            function T(e) {
                var s = t.scrollbar,
                    a = t.params,
                    i = s.el;
                if (!i) return;
                var r = i,
                    n = !!a.passiveListeners && {
                        passive: !1,
                        capture: !1,
                    },
                    o = !!a.passiveListeners && {
                        passive: !0,
                        capture: !1,
                    };
                if (!r) return;
                var d = "on" === e ? "addEventListener" : "removeEventListener";
                r[d]("pointerdown", E, n), l[d]("pointermove", x, n), l[d]("pointerup", S, o);
            }
            function M() {
                var e = t.scrollbar,
                    s = t.el;
                t.params.scrollbar = J(t, t.originalParams.scrollbar, t.params.scrollbar, {
                    el: "swiper-scrollbar",
                });
                var a = t.params.scrollbar;
                if (!a.el) return;
                var i, r;
                "string" == typeof a.el && t.isElement && (i = t.el.shadowRoot.querySelector(a.el)),
                    i || "string" != typeof a.el ? i || (i = a.el) : (i = l.querySelectorAll(a.el)),
                    t.params.uniqueNavElements && "string" == typeof a.el && i.length > 1 && 1 === s.querySelectorAll(a.el).length && (i = s.querySelector(a.el)),
                    i.length > 0 && (i = i[0]),
                    i.classList.add(t.isHorizontal() ? a.horizontalClass : a.verticalClass),
                    i && (i.querySelector(".".concat(t.params.scrollbar.dragClass)), r || ((r = g("div", t.params.scrollbar.dragClass)), i.append(r))),
                    Object.assign(e, {
                        el: i,
                        dragEl: r,
                    }),
                    a.draggable && t.params.scrollbar.el && t.scrollbar.el && T("on"),
                    i && i.classList[t.enabled ? "remove" : "add"](t.params.scrollbar.lockClass);
            }
            function C() {
                var e = t.params.scrollbar,
                    s = t.scrollbar.el;
                s && s.classList.remove(t.isHorizontal() ? e.horizontalClass : e.verticalClass), t.params.scrollbar.el && t.scrollbar.el && T("off");
            }
            s({
                scrollbar: {
                    el: null,
                    dragSize: "auto",
                    hide: !1,
                    draggable: !1,
                    snapOnRelease: !0,
                    lockClass: "swiper-scrollbar-lock",
                    dragClass: "swiper-scrollbar-drag",
                    scrollbarDisabledClass: "swiper-scrollbar-disabled",
                    horizontalClass: "swiper-scrollbar-horizontal",
                    verticalClass: "swiper-scrollbar-vertical",
                },
            }),
                (t.scrollbar = {
                    el: null,
                    dragEl: null,
                }),
                i("init", function () {
                    !1 === t.params.scrollbar.enabled ? P() : (M(), w(), f());
                }),
                i("update resize observerUpdate lock unlock", function () {
                    w();
                }),
                i("setTranslate", function () {
                    f();
                }),
                i("setTransition", function (e, s) {
                    !(function (e) {
                        t.params.scrollbar.el && t.scrollbar.el && (t.scrollbar.dragEl.style.transitionDuration = "".concat(e, "ms"));
                    })(s);
                }),
                i("enable disable", function () {
                    var e = t.scrollbar.el;
                    e && e.classList[t.enabled ? "remove" : "add"](t.params.scrollbar.lockClass);
                }),
                i("destroy", function () {
                    C();
                });
            var P = function P() {
                t.el.classList.add(t.params.scrollbar.scrollbarDisabledClass), t.scrollbar.el && t.scrollbar.el.classList.add(t.params.scrollbar.scrollbarDisabledClass), C();
            };
            Object.assign(t.scrollbar, {
                enable: function enable() {
                    t.el.classList.remove(t.params.scrollbar.scrollbarDisabledClass), t.scrollbar.el && t.scrollbar.el.classList.remove(t.params.scrollbar.scrollbarDisabledClass), M(), w(), f();
                },
                disable: P,
                updateSize: w,
                setTranslate: f,
                init: M,
                destroy: C,
            });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                parallax: {
                    enabled: !1,
                },
            });
            var i = function i(e, s) {
                    var a = t.rtl,
                        i = a ? -1 : 1,
                        r = e.getAttribute("data-swiper-parallax") || "0";
                    var n = e.getAttribute("data-swiper-parallax-x"),
                        l = e.getAttribute("data-swiper-parallax-y");
                    var o = e.getAttribute("data-swiper-parallax-scale"),
                        d = e.getAttribute("data-swiper-parallax-opacity"),
                        c = e.getAttribute("data-swiper-parallax-rotate");
                    if (
                        (n || l ? ((n = n || "0"), (l = l || "0")) : t.isHorizontal() ? ((n = r), (l = "0")) : ((l = r), (n = "0")),
                        (n = n.indexOf("%") >= 0 ? parseInt(n, 10) * s * i + "%" : n * s * i + "px"),
                        (l = l.indexOf("%") >= 0 ? parseInt(l, 10) * s + "%" : l * s + "px"),
                        null != d)
                    ) {
                        var _t37 = d - (d - 1) * (1 - Math.abs(s));
                        e.style.opacity = _t37;
                    }
                    var p = "translate3d(".concat(n, ", ").concat(l, ", 0px)");
                    if (null != o) {
                        p += " scale(".concat(o - (o - 1) * (1 - Math.abs(s)), ")");
                    }
                    if (c && null != c) {
                        p += " rotate(".concat(c * s * -1, "deg)");
                    }
                    e.style.transform = p;
                },
                r = function r() {
                    var e = t.el,
                        s = t.slides,
                        a = t.progress,
                        r = t.snapGrid;
                    f(e, "[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").forEach(function (e) {
                        i(e, a);
                    }),
                        s.forEach(function (e, s) {
                            var n = e.progress;
                            t.params.slidesPerGroup > 1 && "auto" !== t.params.slidesPerView && (n += Math.ceil(s / 2) - a * (r.length - 1)),
                                (n = Math.min(Math.max(n, -1), 1)),
                                e
                                    .querySelectorAll(
                                        "[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale], [data-swiper-parallax-rotate]"
                                    )
                                    .forEach(function (e) {
                                        i(e, n);
                                    });
                        });
                };
            a("beforeInit", function () {
                t.params.parallax.enabled && ((t.params.watchSlidesProgress = !0), (t.originalParams.watchSlidesProgress = !0));
            }),
                a("init", function () {
                    t.params.parallax.enabled && r();
                }),
                a("setTranslate", function () {
                    t.params.parallax.enabled && r();
                }),
                a("setTransition", function (e, s) {
                    t.params.parallax.enabled &&
                        (function (e) {
                            void 0 === e && (e = t.params.speed);
                            var s = t.el;
                            s.querySelectorAll("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").forEach(function (t) {
                                var s = parseInt(t.getAttribute("data-swiper-parallax-duration"), 10) || e;
                                0 === e && (s = 0), (t.style.transitionDuration = "".concat(s, "ms"));
                            });
                        })(s);
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on,
                i = e.emit;
            var n = r();
            s({
                zoom: {
                    enabled: !1,
                    maxRatio: 3,
                    minRatio: 1,
                    toggle: !0,
                    containerClass: "swiper-zoom-container",
                    zoomedSlideClass: "swiper-slide-zoomed",
                },
            }),
                (t.zoom = {
                    enabled: !1,
                });
            var l,
                d,
                c = 1,
                p = !1;
            var u = [],
                m = {
                    slideEl: void 0,
                    slideWidth: void 0,
                    slideHeight: void 0,
                    imageEl: void 0,
                    imageWrapEl: void 0,
                    maxRatio: 3,
                },
                h = {
                    isTouched: void 0,
                    isMoved: void 0,
                    currentX: void 0,
                    currentY: void 0,
                    minX: void 0,
                    minY: void 0,
                    maxX: void 0,
                    maxY: void 0,
                    width: void 0,
                    height: void 0,
                    startX: void 0,
                    startY: void 0,
                    touchesStart: {},
                    touchesCurrent: {},
                },
                g = {
                    x: void 0,
                    y: void 0,
                    prevPositionX: void 0,
                    prevPositionY: void 0,
                    prevTime: void 0,
                };
            var w = 1;
            function b() {
                if (u.length < 2) return 1;
                var e = u[0].pageX,
                    t = u[0].pageY,
                    s = u[1].pageX,
                    a = u[1].pageY;
                return Math.sqrt(Math.pow(s - e, 2) + Math.pow(a - t, 2));
            }
            function E(e) {
                var s = t.isElement ? "swiper-slide" : ".".concat(t.params.slideClass);
                return (
                    !!e.target.matches(s) ||
                    t.slides.filter(function (t) {
                        return t.contains(e.target);
                    }).length > 0
                );
            }
            function x(e) {
                if (!E(e)) return;
                var s = t.params.zoom;
                if (((l = !1), (d = !1), u.push(e), !(u.length < 2))) {
                    if (((l = !0), (m.scaleStart = b()), !m.slideEl)) {
                        (m.slideEl = e.target.closest(".".concat(t.params.slideClass, ", swiper-slide"))), m.slideEl || (m.slideEl = t.slides[t.activeIndex]);
                        var _a17 = m.slideEl.querySelector(".".concat(s.containerClass));
                        if (
                            (_a17 && (_a17 = _a17.querySelectorAll("picture, img, svg, canvas, .swiper-zoom-target")[0]),
                            (m.imageEl = _a17),
                            (m.imageWrapEl = _a17 ? y(m.imageEl, ".".concat(s.containerClass))[0] : void 0),
                            !m.imageWrapEl)
                        )
                            return void (m.imageEl = void 0);
                        m.maxRatio = m.imageWrapEl.getAttribute("data-swiper-zoom") || s.maxRatio;
                    }
                    m.imageEl && (m.imageEl.style.transitionDuration = "0ms"), (p = !0);
                }
            }
            function S(e) {
                if (!E(e)) return;
                var s = t.params.zoom,
                    a = t.zoom,
                    i = u.findIndex(function (t) {
                        return t.pointerId === e.pointerId;
                    });
                i >= 0 && (u[i] = e),
                    u.length < 2 ||
                        ((d = !0),
                        (m.scaleMove = b()),
                        m.imageEl &&
                            ((a.scale = (m.scaleMove / m.scaleStart) * c),
                            a.scale > m.maxRatio && (a.scale = m.maxRatio - 1 + Math.pow(a.scale - m.maxRatio + 1, 0.5)),
                            a.scale < s.minRatio && (a.scale = s.minRatio + 1 - Math.pow(s.minRatio - a.scale + 1, 0.5)),
                            (m.imageEl.style.transform = "translate3d(0,0,0) scale(".concat(a.scale, ")"))));
            }
            function T(e) {
                if (!E(e)) return;
                var s = t.params.zoom,
                    a = t.zoom,
                    i = u.findIndex(function (t) {
                        return t.pointerId === e.pointerId;
                    });
                i >= 0 && u.splice(i, 1),
                    l &&
                        d &&
                        ((l = !1),
                        (d = !1),
                        m.imageE &&
                            ((a.scale = Math.max(Math.min(a.scale, m.maxRatio), s.minRatio)),
                            (m.imageEl.style.transitionDuration = "".concat(t.params.speed, "ms")),
                            (m.imageEl.style.transform = "translate3d(0,0,0) scale(".concat(a.scale, ")")),
                            (c = a.scale),
                            (p = !1),
                            1 === a.scale && (m.slideEl = void 0)));
            }
            function M(e) {
                if (
                    !E(e) ||
                    !(function (e) {
                        var s = ".".concat(t.params.zoom.containerClass);
                        return (
                            !!e.target.matches(s) ||
                            _toConsumableArray(t.el.querySelectorAll(s)).filter(function (t) {
                                return t.contains(e.target);
                            }).length > 0
                        );
                    })(e)
                )
                    return;
                var s = t.zoom;
                if (!m.imageEl) return;
                if (((t.allowClick = !1), !h.isTouched || !m.slideEl)) return;
                h.isMoved ||
                    ((h.width = m.imageEl.offsetWidth),
                    (h.height = m.imageEl.offsetHeight),
                    (h.startX = o(m.imageWrapEl, "x") || 0),
                    (h.startY = o(m.imageWrapEl, "y") || 0),
                    (m.slideWidth = m.slideEl.offsetWidth),
                    (m.slideHeight = m.slideEl.offsetHeight),
                    (m.imageWrapEl.style.transitionDuration = "0ms"));
                var a = h.width * s.scale,
                    i = h.height * s.scale;
                if (!(a < m.slideWidth && i < m.slideHeight)) {
                    if (
                        ((h.minX = Math.min(m.slideWidth / 2 - a / 2, 0)),
                        (h.maxX = -h.minX),
                        (h.minY = Math.min(m.slideHeight / 2 - i / 2, 0)),
                        (h.maxY = -h.minY),
                        (h.touchesCurrent.x = u.length > 0 ? u[0].pageX : e.pageX),
                        (h.touchesCurrent.y = u.length > 0 ? u[0].pageY : e.pageY),
                        !h.isMoved && !p)
                    ) {
                        if (
                            t.isHorizontal() &&
                            ((Math.floor(h.minX) === Math.floor(h.startX) && h.touchesCurrent.x < h.touchesStart.x) || (Math.floor(h.maxX) === Math.floor(h.startX) && h.touchesCurrent.x > h.touchesStart.x))
                        )
                            return void (h.isTouched = !1);
                        if (
                            !t.isHorizontal() &&
                            ((Math.floor(h.minY) === Math.floor(h.startY) && h.touchesCurrent.y < h.touchesStart.y) || (Math.floor(h.maxY) === Math.floor(h.startY) && h.touchesCurrent.y > h.touchesStart.y))
                        )
                            return void (h.isTouched = !1);
                    }
                    e.cancelable && e.preventDefault(),
                        e.stopPropagation(),
                        (h.isMoved = !0),
                        (h.currentX = h.touchesCurrent.x - h.touchesStart.x + h.startX),
                        (h.currentY = h.touchesCurrent.y - h.touchesStart.y + h.startY),
                        h.currentX < h.minX && (h.currentX = h.minX + 1 - Math.pow(h.minX - h.currentX + 1, 0.8)),
                        h.currentX > h.maxX && (h.currentX = h.maxX - 1 + Math.pow(h.currentX - h.maxX + 1, 0.8)),
                        h.currentY < h.minY && (h.currentY = h.minY + 1 - Math.pow(h.minY - h.currentY + 1, 0.8)),
                        h.currentY > h.maxY && (h.currentY = h.maxY - 1 + Math.pow(h.currentY - h.maxY + 1, 0.8)),
                        g.prevPositionX || (g.prevPositionX = h.touchesCurrent.x),
                        g.prevPositionY || (g.prevPositionY = h.touchesCurrent.y),
                        g.prevTime || (g.prevTime = Date.now()),
                        (g.x = (h.touchesCurrent.x - g.prevPositionX) / (Date.now() - g.prevTime) / 2),
                        (g.y = (h.touchesCurrent.y - g.prevPositionY) / (Date.now() - g.prevTime) / 2),
                        Math.abs(h.touchesCurrent.x - g.prevPositionX) < 2 && (g.x = 0),
                        Math.abs(h.touchesCurrent.y - g.prevPositionY) < 2 && (g.y = 0),
                        (g.prevPositionX = h.touchesCurrent.x),
                        (g.prevPositionY = h.touchesCurrent.y),
                        (g.prevTime = Date.now()),
                        (m.imageWrapEl.style.transform = "translate3d(".concat(h.currentX, "px, ").concat(h.currentY, "px,0)"));
                }
            }
            function C() {
                var e = t.zoom;
                m.slideEl &&
                    t.previousIndex !== t.activeIndex &&
                    (m.imageEl && (m.imageEl.style.transform = "translate3d(0,0,0) scale(1)"),
                    m.imageWrapEl && (m.imageWrapEl.style.transform = "translate3d(0,0,0)"),
                    (e.scale = 1),
                    (c = 1),
                    (m.slideEl = void 0),
                    (m.imageEl = void 0),
                    (m.imageWrapEl = void 0));
            }
            function P(e) {
                var s = t.zoom,
                    a = t.params.zoom;
                if (!m.slideEl) {
                    e && e.target && (m.slideEl = e.target.closest(".".concat(t.params.slideClass, ", swiper-slide"))),
                        m.slideEl || (t.params.virtual && t.params.virtual.enabled && t.virtual ? (m.slideEl = f(t.slidesEl, ".".concat(t.params.slideActiveClass))[0]) : (m.slideEl = t.slides[t.activeIndex]));
                    var _s28 = m.slideEl.querySelector(".".concat(a.containerClass));
                    _s28 && (_s28 = _s28.querySelectorAll("picture, img, svg, canvas, .swiper-zoom-target")[0]), (m.imageEl = _s28), (m.imageWrapEl = _s28 ? y(m.imageEl, ".".concat(a.containerClass))[0] : void 0);
                }
                if (!m.imageEl || !m.imageWrapEl) return;
                var i, r, l, o, d, p, u, g, w, b, E, x, S, T, M, C, P, L;
                t.params.cssMode && ((t.wrapperEl.style.overflow = "hidden"), (t.wrapperEl.style.touchAction = "none")),
                    m.slideEl.classList.add("".concat(a.zoomedSlideClass)),
                    void 0 === h.touchesStart.x && e ? ((i = e.pageX), (r = e.pageY)) : ((i = h.touchesStart.x), (r = h.touchesStart.y));
                var A = "number" == typeof e ? e : null;
                1 === c && A && ((i = void 0), (r = void 0)),
                    (s.scale = A || m.imageWrapEl.getAttribute("data-swiper-zoom") || a.maxRatio),
                    (c = A || m.imageWrapEl.getAttribute("data-swiper-zoom") || a.maxRatio),
                    !e || (1 === c && A)
                        ? ((u = 0), (g = 0))
                        : ((P = m.slideEl.offsetWidth),
                          (L = m.slideEl.offsetHeight),
                          (l = v(m.slideEl).left + n.scrollX),
                          (o = v(m.slideEl).top + n.scrollY),
                          (d = l + P / 2 - i),
                          (p = o + L / 2 - r),
                          (w = m.imageEl.offsetWidth),
                          (b = m.imageEl.offsetHeight),
                          (E = w * s.scale),
                          (x = b * s.scale),
                          (S = Math.min(P / 2 - E / 2, 0)),
                          (T = Math.min(L / 2 - x / 2, 0)),
                          (M = -S),
                          (C = -T),
                          (u = d * s.scale),
                          (g = p * s.scale),
                          u < S && (u = S),
                          u > M && (u = M),
                          g < T && (g = T),
                          g > C && (g = C)),
                    (m.imageWrapEl.style.transitionDuration = "300ms"),
                    (m.imageWrapEl.style.transform = "translate3d(".concat(u, "px, ").concat(g, "px,0)")),
                    (m.imageEl.style.transitionDuration = "300ms"),
                    (m.imageEl.style.transform = "translate3d(0,0,0) scale(".concat(s.scale, ")"));
            }
            function L() {
                var e = t.zoom,
                    s = t.params.zoom;
                if (!m.slideEl) {
                    t.params.virtual && t.params.virtual.enabled && t.virtual ? (m.slideEl = f(t.slidesEl, ".".concat(t.params.slideActiveClass))[0]) : (m.slideEl = t.slides[t.activeIndex]);
                    var _e49 = m.slideEl.querySelector(".".concat(s.containerClass));
                    _e49 && (_e49 = _e49.querySelectorAll("picture, img, svg, canvas, .swiper-zoom-target")[0]), (m.imageEl = _e49), (m.imageWrapEl = _e49 ? y(m.imageEl, ".".concat(s.containerClass))[0] : void 0);
                }
                m.imageEl &&
                    m.imageWrapEl &&
                    (t.params.cssMode && ((t.wrapperEl.style.overflow = ""), (t.wrapperEl.style.touchAction = "")),
                    (e.scale = 1),
                    (c = 1),
                    (m.imageWrapEl.style.transitionDuration = "300ms"),
                    (m.imageWrapEl.style.transform = "translate3d(0,0,0)"),
                    (m.imageEl.style.transitionDuration = "300ms"),
                    (m.imageEl.style.transform = "translate3d(0,0,0) scale(1)"),
                    m.slideEl.classList.remove("".concat(s.zoomedSlideClass)),
                    (m.slideEl = void 0));
            }
            function A(e) {
                var s = t.zoom;
                s.scale && 1 !== s.scale ? L() : P(e);
            }
            function z() {
                return {
                    passiveListener: !!t.params.passiveListeners && {
                        passive: !0,
                        capture: !1,
                    },
                    activeListenerWithCapture: !t.params.passiveListeners || {
                        passive: !1,
                        capture: !0,
                    },
                };
            }
            function k() {
                var e = t.zoom;
                if (e.enabled) return;
                e.enabled = !0;
                var _z = z(),
                    s = _z.passiveListener,
                    a = _z.activeListenerWithCapture;
                t.wrapperEl.addEventListener("pointerdown", x, s),
                    t.wrapperEl.addEventListener("pointermove", S, a),
                    ["pointerup", "pointercancel"].forEach(function (e) {
                        t.wrapperEl.addEventListener(e, T, s);
                    }),
                    t.wrapperEl.addEventListener("pointermove", M, a);
            }
            function $() {
                var e = t.zoom;
                if (!e.enabled) return;
                e.enabled = !1;
                var _z2 = z(),
                    s = _z2.passiveListener,
                    a = _z2.activeListenerWithCapture;
                t.wrapperEl.removeEventListener("pointerdown", x, s),
                    t.wrapperEl.removeEventListener("pointermove", S, a),
                    ["pointerup", "pointercancel"].forEach(function (e) {
                        t.wrapperEl.removeEventListener(e, T, s);
                    }),
                    t.wrapperEl.removeEventListener("pointermove", M, a);
            }
            Object.defineProperty(t.zoom, "scale", {
                get: function get() {
                    return w;
                },
                set: function set(e) {
                    if (w !== e) {
                        var _t38 = m.imageEl,
                            _s29 = m.slideEl;
                        i("zoomChange", e, _t38, _s29);
                    }
                    w = e;
                },
            }),
                a("init", function () {
                    t.params.zoom.enabled && k();
                }),
                a("destroy", function () {
                    $();
                }),
                a("touchStart", function (e, s) {
                    t.zoom.enabled &&
                        (function (e) {
                            var s = t.device;
                            m.imageEl && (h.isTouched || (s.android && e.cancelable && e.preventDefault(), (h.isTouched = !0), (h.touchesStart.x = e.pageX), (h.touchesStart.y = e.pageY)));
                        })(s);
                }),
                a("touchEnd", function (e, s) {
                    t.zoom.enabled &&
                        (function () {
                            var e = t.zoom;
                            if (!m.imageEl) return;
                            if (!h.isTouched || !h.isMoved) return (h.isTouched = !1), void (h.isMoved = !1);
                            (h.isTouched = !1), (h.isMoved = !1);
                            var s = 300,
                                a = 300;
                            var i = g.x * s,
                                r = h.currentX + i,
                                n = g.y * a,
                                l = h.currentY + n;
                            0 !== g.x && (s = Math.abs((r - h.currentX) / g.x)), 0 !== g.y && (a = Math.abs((l - h.currentY) / g.y));
                            var o = Math.max(s, a);
                            (h.currentX = r), (h.currentY = l);
                            var d = h.width * e.scale,
                                c = h.height * e.scale;
                            (h.minX = Math.min(m.slideWidth / 2 - d / 2, 0)),
                                (h.maxX = -h.minX),
                                (h.minY = Math.min(m.slideHeight / 2 - c / 2, 0)),
                                (h.maxY = -h.minY),
                                (h.currentX = Math.max(Math.min(h.currentX, h.maxX), h.minX)),
                                (h.currentY = Math.max(Math.min(h.currentY, h.maxY), h.minY)),
                                (m.imageWrapEl.style.transitionDuration = "".concat(o, "ms")),
                                (m.imageWrapEl.style.transform = "translate3d(".concat(h.currentX, "px, ").concat(h.currentY, "px,0)"));
                        })();
                }),
                a("doubleTap", function (e, s) {
                    !t.animating && t.params.zoom.enabled && t.zoom.enabled && t.params.zoom.toggle && A(s);
                }),
                a("transitionEnd", function () {
                    t.zoom.enabled && t.params.zoom.enabled && C();
                }),
                a("slideChange", function () {
                    t.zoom.enabled && t.params.zoom.enabled && t.params.cssMode && C();
                }),
                Object.assign(t.zoom, {
                    enable: k,
                    disable: $,
                    in: P,
                    out: L,
                    toggle: A,
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            function i(e, t) {
                var s = (function () {
                    var e, t, s;
                    return function (a, i) {
                        for (t = -1, e = a.length; e - t > 1; ) (s = (e + t) >> 1), a[s] <= i ? (t = s) : (e = s);
                        return e;
                    };
                })();
                var a, i;
                return (
                    (this.x = e),
                    (this.y = t),
                    (this.lastIndex = e.length - 1),
                    (this.interpolate = function (e) {
                        return e ? ((i = s(this.x, e)), (a = i - 1), ((e - this.x[a]) * (this.y[i] - this.y[a])) / (this.x[i] - this.x[a]) + this.y[a]) : 0;
                    }),
                    this
                );
            }
            function r() {
                t.controller.control && t.controller.spline && ((t.controller.spline = void 0), delete t.controller.spline);
            }
            s({
                controller: {
                    control: void 0,
                    inverse: !1,
                    by: "slide",
                },
            }),
                (t.controller = {
                    control: void 0,
                }),
                a("beforeInit", function () {
                    if ("undefined" != typeof window && ("string" == typeof t.params.controller.control || t.params.controller.control instanceof HTMLElement)) {
                        var _e50 = document.querySelector(t.params.controller.control);
                        if (_e50 && _e50.swiper) t.controller.control = _e50.swiper;
                        else if (_e50) {
                            var _s30 = function _s30(a) {
                                (t.controller.control = a.detail[0]), t.update(), _e50.removeEventListener("init", _s30);
                            };
                            _e50.addEventListener("init", _s30);
                        }
                    } else t.controller.control = t.params.controller.control;
                }),
                a("update", function () {
                    r();
                }),
                a("resize", function () {
                    r();
                }),
                a("observerUpdate", function () {
                    r();
                }),
                a("setTranslate", function (e, s, a) {
                    t.controller.control && t.controller.setTranslate(s, a);
                }),
                a("setTransition", function (e, s, a) {
                    t.controller.control && t.controller.setTransition(s, a);
                }),
                Object.assign(t.controller, {
                    setTranslate: function setTranslate(e, s) {
                        var a = t.controller.control;
                        var r, n;
                        var l = t.constructor;
                        function o(e) {
                            var s = t.rtlTranslate ? -t.translate : t.translate;
                            "slide" === t.params.controller.by &&
                                (!(function (e) {
                                    t.controller.spline || (t.controller.spline = t.params.loop ? new i(t.slidesGrid, e.slidesGrid) : new i(t.snapGrid, e.snapGrid));
                                })(e),
                                (n = -t.controller.spline.interpolate(-s))),
                                (n && "container" !== t.params.controller.by) || ((r = (e.maxTranslate() - e.minTranslate()) / (t.maxTranslate() - t.minTranslate())), (n = (s - t.minTranslate()) * r + e.minTranslate())),
                                t.params.controller.inverse && (n = e.maxTranslate() - n),
                                e.updateProgress(n),
                                e.setTranslate(n, t),
                                e.updateActiveIndex(),
                                e.updateSlidesClasses();
                        }
                        if (Array.isArray(a)) for (var _e51 = 0; _e51 < a.length; _e51 += 1) a[_e51] !== s && a[_e51] instanceof l && o(a[_e51]);
                        else a instanceof l && s !== a && o(a);
                    },
                    setTransition: function setTransition(e, s) {
                        var a = t.constructor,
                            i = t.controller.control;
                        var r;
                        function l(s) {
                            s.setTransition(e, t),
                                0 !== e &&
                                    (s.transitionStart(),
                                    s.params.autoHeight &&
                                        n(function () {
                                            s.updateAutoHeight();
                                        }),
                                    E(s.wrapperEl, function () {
                                        i && s.transitionEnd();
                                    }));
                        }
                        if (Array.isArray(i)) for (r = 0; r < i.length; r += 1) i[r] !== s && i[r] instanceof a && l(i[r]);
                        else i instanceof a && s !== i && l(i);
                    },
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                a11y: {
                    enabled: !0,
                    notificationClass: "swiper-notification",
                    prevSlideMessage: "Previous slide",
                    nextSlideMessage: "Next slide",
                    firstSlideMessage: "This is the first slide",
                    lastSlideMessage: "This is the last slide",
                    paginationBulletMessage: "Go to slide {{index}}",
                    slideLabelMessage: "{{index}} / {{slidesLength}}",
                    containerMessage: null,
                    containerRoleDescriptionMessage: null,
                    itemRoleDescriptionMessage: null,
                    slideRole: "group",
                    id: null,
                },
            }),
                (t.a11y = {
                    clicked: !1,
                });
            var i = null;
            function r(e) {
                var t = i;
                0 !== t.length && ((t.innerHTML = ""), (t.innerHTML = e));
            }
            var n = function n(e) {
                return (
                    Array.isArray(e) ||
                        (e = [e].filter(function (e) {
                            return !!e;
                        })),
                    e
                );
            };
            function l(e) {
                (e = n(e)).forEach(function (e) {
                    e.setAttribute("tabIndex", "0");
                });
            }
            function o(e) {
                (e = n(e)).forEach(function (e) {
                    e.setAttribute("tabIndex", "-1");
                });
            }
            function d(e, t) {
                (e = n(e)).forEach(function (e) {
                    e.setAttribute("role", t);
                });
            }
            function c(e, t) {
                (e = n(e)).forEach(function (e) {
                    e.setAttribute("aria-roledescription", t);
                });
            }
            function p(e, t) {
                (e = n(e)).forEach(function (e) {
                    e.setAttribute("aria-label", t);
                });
            }
            function u(e) {
                (e = n(e)).forEach(function (e) {
                    e.setAttribute("aria-disabled", !0);
                });
            }
            function m(e) {
                (e = n(e)).forEach(function (e) {
                    e.setAttribute("aria-disabled", !1);
                });
            }
            function h(e) {
                if (13 !== e.keyCode && 32 !== e.keyCode) return;
                var s = t.params.a11y,
                    a = e.target;
                (t.pagination && t.pagination.el && (a === t.pagination.el || t.pagination.el.contains(e.target)) && !e.target.matches(ee(t.params.pagination.bulletClass))) ||
                    (t.navigation && t.navigation.nextEl && a === t.navigation.nextEl && ((t.isEnd && !t.params.loop) || t.slideNext(), t.isEnd ? r(s.lastSlideMessage) : r(s.nextSlideMessage)),
                    t.navigation && t.navigation.prevEl && a === t.navigation.prevEl && ((t.isBeginning && !t.params.loop) || t.slidePrev(), t.isBeginning ? r(s.firstSlideMessage) : r(s.prevSlideMessage)),
                    t.pagination && a.matches(ee(t.params.pagination.bulletClass)) && a.click());
            }
            function f() {
                return t.pagination && t.pagination.bullets && t.pagination.bullets.length;
            }
            function v() {
                return f() && t.params.pagination.clickable;
            }
            var w = function w(e, t, s) {
                    l(e),
                        "BUTTON" !== e.tagName && (d(e, "button"), e.addEventListener("keydown", h)),
                        p(e, s),
                        (function (e, t) {
                            (e = n(e)).forEach(function (e) {
                                e.setAttribute("aria-controls", t);
                            });
                        })(e, t);
                },
                y = function y() {
                    t.a11y.clicked = !0;
                },
                E = function E() {
                    requestAnimationFrame(function () {
                        requestAnimationFrame(function () {
                            t.destroyed || (t.a11y.clicked = !1);
                        });
                    });
                },
                x = function x(e) {
                    if (t.a11y.clicked) return;
                    var s = e.target.closest(".".concat(t.params.slideClass, ", swiper-slide"));
                    if (!s || !t.slides.includes(s)) return;
                    var a = t.slides.indexOf(s) === t.activeIndex,
                        i = t.params.watchSlidesProgress && t.visibleSlides && t.visibleSlides.includes(s);
                    a || i || (e.sourceCapabilities && e.sourceCapabilities.firesTouchEvents) || (t.isHorizontal() ? (t.el.scrollLeft = 0) : (t.el.scrollTop = 0), t.slideTo(t.slides.indexOf(s), 0));
                },
                S = function S() {
                    var e = t.params.a11y;
                    e.itemRoleDescriptionMessage && c(t.slides, e.itemRoleDescriptionMessage), e.slideRole && d(t.slides, e.slideRole);
                    var s = t.slides.length;
                    e.slideLabelMessage &&
                        t.slides.forEach(function (a, i) {
                            var r = t.params.loop ? parseInt(a.getAttribute("data-swiper-slide-index"), 10) : i;
                            p(a, e.slideLabelMessage.replace(/\{\{index\}\}/, r + 1).replace(/\{\{slidesLength\}\}/, s));
                        });
                },
                T = function T() {
                    var e = t.params.a11y;
                    t.el.append(i);
                    var s = t.el;
                    e.containerRoleDescriptionMessage && c(s, e.containerRoleDescriptionMessage), e.containerMessage && p(s, e.containerMessage);
                    var a = t.wrapperEl,
                        r =
                            e.id ||
                            a.getAttribute("id") ||
                            "swiper-wrapper-".concat(
                                ((l = 16),
                                void 0 === l && (l = 16),
                                "x".repeat(l).replace(/x/g, function () {
                                    return Math.round(16 * Math.random()).toString(16);
                                }))
                            );
                    var l;
                    var o = t.params.autoplay && t.params.autoplay.enabled ? "off" : "polite";
                    var d;
                    (d = r),
                        n(a).forEach(function (e) {
                            e.setAttribute("id", d);
                        }),
                        (function (e, t) {
                            (e = n(e)).forEach(function (e) {
                                e.setAttribute("aria-live", t);
                            });
                        })(a, o),
                        S();
                    var _ref3 = t.navigation ? t.navigation : {},
                        u = _ref3.nextEl,
                        m = _ref3.prevEl;
                    if (
                        ((u = n(u)),
                        (m = n(m)),
                        u &&
                            u.forEach(function (t) {
                                return w(t, r, e.nextSlideMessage);
                            }),
                        m &&
                            m.forEach(function (t) {
                                return w(t, r, e.prevSlideMessage);
                            }),
                        v())
                    ) {
                        (Array.isArray(t.pagination.el) ? t.pagination.el : [t.pagination.el]).forEach(function (e) {
                            e.addEventListener("keydown", h);
                        });
                    }
                    t.el.addEventListener("focus", x, !0), t.el.addEventListener("pointerdown", y, !0), t.el.addEventListener("pointerup", E, !0);
                };
            a("beforeInit", function () {
                (i = g("span", t.params.a11y.notificationClass)), i.setAttribute("aria-live", "assertive"), i.setAttribute("aria-atomic", "true"), t.isElement && i.setAttribute("slot", "container-end");
            }),
                a("afterInit", function () {
                    t.params.a11y.enabled && T();
                }),
                a("slidesLengthChange snapGridLengthChange slidesGridLengthChange", function () {
                    t.params.a11y.enabled && S();
                }),
                a("fromEdge toEdge afterInit lock unlock", function () {
                    t.params.a11y.enabled &&
                        (function () {
                            if (t.params.loop || t.params.rewind || !t.navigation) return;
                            var _t$navigation5 = t.navigation,
                                e = _t$navigation5.nextEl,
                                s = _t$navigation5.prevEl;
                            s && (t.isBeginning ? (u(s), o(s)) : (m(s), l(s))), e && (t.isEnd ? (u(e), o(e)) : (m(e), l(e)));
                        })();
                }),
                a("paginationUpdate", function () {
                    t.params.a11y.enabled &&
                        (function () {
                            var e = t.params.a11y;
                            f() &&
                                t.pagination.bullets.forEach(function (s) {
                                    t.params.pagination.clickable && (l(s), t.params.pagination.renderBullet || (d(s, "button"), p(s, e.paginationBulletMessage.replace(/\{\{index\}\}/, b(s) + 1)))),
                                        s.matches(".".concat(t.params.pagination.bulletActiveClass)) ? s.setAttribute("aria-current", "true") : s.removeAttribute("aria-current");
                                });
                        })();
                }),
                a("destroy", function () {
                    t.params.a11y.enabled &&
                        (function () {
                            i && i.length > 0 && i.remove();
                            var _ref4 = t.navigation ? t.navigation : {},
                                e = _ref4.nextEl,
                                s = _ref4.prevEl;
                            (e = n(e)),
                                (s = n(s)),
                                e &&
                                    e.forEach(function (e) {
                                        return e.removeEventListener("keydown", h);
                                    }),
                                s &&
                                    s.forEach(function (e) {
                                        return e.removeEventListener("keydown", h);
                                    }),
                                v() &&
                                    (Array.isArray(t.pagination.el) ? t.pagination.el : [t.pagination.el]).forEach(function (e) {
                                        e.removeEventListener("keydown", h);
                                    });
                            t.el.removeEventListener("focus", x, !0), t.el.removeEventListener("pointerdown", y, !0), t.el.removeEventListener("pointerup", E, !0);
                        })();
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                history: {
                    enabled: !1,
                    root: "",
                    replaceState: !1,
                    key: "slides",
                    keepQuery: !1,
                },
            });
            var i = !1,
                n = {};
            var l = function l(e) {
                    return e
                        .toString()
                        .replace(/\s+/g, "-")
                        .replace(/[^\w-]+/g, "")
                        .replace(/--+/g, "-")
                        .replace(/^-+/, "")
                        .replace(/-+$/, "");
                },
                o = function o(e) {
                    var t = r();
                    var s;
                    s = e ? new URL(e) : t.location;
                    var a = s.pathname
                            .slice(1)
                            .split("/")
                            .filter(function (e) {
                                return "" !== e;
                            }),
                        i = a.length;
                    return {
                        key: a[i - 2],
                        value: a[i - 1],
                    };
                },
                d = function d(e, s) {
                    var a = r();
                    if (!i || !t.params.history.enabled) return;
                    var n;
                    n = t.params.url ? new URL(t.params.url) : a.location;
                    var o = t.slides[s];
                    var d = l(o.getAttribute("data-history"));
                    if (t.params.history.root.length > 0) {
                        var _s31 = t.params.history.root;
                        "/" === _s31[_s31.length - 1] && (_s31 = _s31.slice(0, _s31.length - 1)), (d = "".concat(_s31, "/").concat(e, "/").concat(d));
                    } else n.pathname.includes(e) || (d = "".concat(e, "/").concat(d));
                    t.params.history.keepQuery && (d += n.search);
                    var c = a.history.state;
                    (c && c.value === d) ||
                        (t.params.history.replaceState
                            ? a.history.replaceState(
                                  {
                                      value: d,
                                  },
                                  null,
                                  d
                              )
                            : a.history.pushState(
                                  {
                                      value: d,
                                  },
                                  null,
                                  d
                              ));
                },
                c = function c(e, s, a) {
                    if (s)
                        for (var _i14 = 0, _r10 = t.slides.length; _i14 < _r10; _i14 += 1) {
                            var _r11 = t.slides[_i14];
                            if (l(_r11.getAttribute("data-history")) === s) {
                                var _s32 = b(_r11);
                                t.slideTo(_s32, e, a);
                            }
                        }
                    else t.slideTo(0, e, a);
                },
                p = function p() {
                    (n = o(t.params.url)), c(t.params.speed, n.value, !1);
                };
            a("init", function () {
                t.params.history.enabled &&
                    (function () {
                        var e = r();
                        if (t.params.history) {
                            if (!e.history || !e.history.pushState) return (t.params.history.enabled = !1), void (t.params.hashNavigation.enabled = !0);
                            (i = !0),
                                (n = o(t.params.url)),
                                n.key || n.value
                                    ? (c(0, n.value, t.params.runCallbacksOnInit), t.params.history.replaceState || e.addEventListener("popstate", p))
                                    : t.params.history.replaceState || e.addEventListener("popstate", p);
                        }
                    })();
            }),
                a("destroy", function () {
                    t.params.history.enabled &&
                        (function () {
                            var e = r();
                            t.params.history.replaceState || e.removeEventListener("popstate", p);
                        })();
                }),
                a("transitionEnd _freeModeNoMomentumRelease", function () {
                    i && d(t.params.history.key, t.activeIndex);
                }),
                a("slideChange", function () {
                    i && t.params.cssMode && d(t.params.history.key, t.activeIndex);
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                i = e.emit,
                n = e.on,
                l = !1;
            var o = a(),
                d = r();
            s({
                hashNavigation: {
                    enabled: !1,
                    replaceState: !1,
                    watchState: !1,
                },
            });
            var c = function c() {
                    i("hashChange");
                    var e = o.location.hash.replace("#", "");
                    if (e !== t.slides[t.activeIndex].getAttribute("data-hash")) {
                        var _s33 = b(f(t.slidesEl, ".".concat(t.params.slideClass, '[data-hash="').concat(e, '"], swiper-slide[data-hash="').concat(e, '"]'))[0]);
                        if (void 0 === _s33) return;
                        t.slideTo(_s33);
                    }
                },
                p = function p() {
                    if (l && t.params.hashNavigation.enabled)
                        if (t.params.hashNavigation.replaceState && d.history && d.history.replaceState)
                            d.history.replaceState(null, null, "#".concat(t.slides[t.activeIndex].getAttribute("data-hash")) || ""), i("hashSet");
                        else {
                            var _e52 = t.slides[t.activeIndex],
                                _s34 = _e52.getAttribute("data-hash") || _e52.getAttribute("data-history");
                            (o.location.hash = _s34 || ""), i("hashSet");
                        }
                };
            n("init", function () {
                t.params.hashNavigation.enabled &&
                    (function () {
                        if (!t.params.hashNavigation.enabled || (t.params.history && t.params.history.enabled)) return;
                        l = !0;
                        var e = o.location.hash.replace("#", "");
                        if (e) {
                            var _s35 = 0;
                            for (var _a18 = 0, _i15 = t.slides.length; _a18 < _i15; _a18 += 1) {
                                var _i16 = t.slides[_a18];
                                if ((_i16.getAttribute("data-hash") || _i16.getAttribute("data-history")) === e) {
                                    var _e53 = b(_i16);
                                    t.slideTo(_e53, _s35, t.params.runCallbacksOnInit, !0);
                                }
                            }
                        }
                        t.params.hashNavigation.watchState && d.addEventListener("hashchange", c);
                    })();
            }),
                n("destroy", function () {
                    t.params.hashNavigation.enabled && t.params.hashNavigation.watchState && d.removeEventListener("hashchange", c);
                }),
                n("transitionEnd _freeModeNoMomentumRelease", function () {
                    l && p();
                }),
                n("slideChange", function () {
                    l && t.params.cssMode && p();
                });
        },
        function (e) {
            var t,
                s,
                i = e.swiper,
                r = e.extendParams,
                n = e.on,
                l = e.emit,
                o = e.params;
            (i.autoplay = {
                running: !1,
                paused: !1,
                timeLeft: 0,
            }),
                r({
                    autoplay: {
                        enabled: !1,
                        delay: 3e3,
                        waitForTransition: !0,
                        disableOnInteraction: !0,
                        stopOnLastSlide: !1,
                        reverseDirection: !1,
                        pauseOnMouseEnter: !1,
                    },
                });
            var d,
                c,
                p,
                u,
                m,
                h,
                f,
                g = o && o.autoplay ? o.autoplay.delay : 3e3,
                v = o && o.autoplay ? o.autoplay.delay : 3e3,
                w = new Date().getTime;
            function b(e) {
                i && !i.destroyed && i.wrapperEl && e.target === i.wrapperEl && (i.wrapperEl.removeEventListener("transitionend", b), M());
            }
            var y = function y() {
                    if (i.destroyed || !i.autoplay.running) return;
                    i.autoplay.paused ? (c = !0) : c && ((v = d), (c = !1));
                    var e = i.autoplay.paused ? d : w + v - new Date().getTime();
                    (i.autoplay.timeLeft = e),
                        l("autoplayTimeLeft", e, e / g),
                        (s = requestAnimationFrame(function () {
                            y();
                        }));
                },
                E = function E(e) {
                    if (i.destroyed || !i.autoplay.running) return;
                    cancelAnimationFrame(s), y();
                    var a = void 0 === e ? i.params.autoplay.delay : e;
                    (g = i.params.autoplay.delay), (v = i.params.autoplay.delay);
                    var r = (function () {
                        var e;
                        if (
                            ((e =
                                i.virtual && i.params.virtual.enabled
                                    ? i.slides.filter(function (e) {
                                          return e.classList.contains("swiper-slide-active");
                                      })[0]
                                    : i.slides[i.activeIndex]),
                            !e)
                        )
                            return;
                        return parseInt(e.getAttribute("data-swiper-autoplay"), 10);
                    })();
                    !Number.isNaN(r) && r > 0 && void 0 === e && ((a = r), (g = r), (v = r)), (d = a);
                    var n = i.params.speed,
                        o = function o() {
                            i.params.autoplay.reverseDirection
                                ? !i.isBeginning || i.params.loop || i.params.rewind
                                    ? (i.slidePrev(n, !0, !0), l("autoplay"))
                                    : i.params.autoplay.stopOnLastSlide || (i.slideTo(i.slides.length - 1, n, !0, !0), l("autoplay"))
                                : !i.isEnd || i.params.loop || i.params.rewind
                                ? (i.slideNext(n, !0, !0), l("autoplay"))
                                : i.params.autoplay.stopOnLastSlide || (i.slideTo(0, n, !0, !0), l("autoplay")),
                                i.params.cssMode &&
                                    ((w = new Date().getTime()),
                                    requestAnimationFrame(function () {
                                        E();
                                    }));
                        };
                    return (
                        a > 0
                            ? (clearTimeout(t),
                              (t = setTimeout(function () {
                                  o();
                              }, a)))
                            : requestAnimationFrame(function () {
                                  o();
                              }),
                        a
                    );
                },
                x = function x() {
                    (i.autoplay.running = !0), E(), l("autoplayStart");
                },
                S = function S() {
                    (i.autoplay.running = !1), clearTimeout(t), cancelAnimationFrame(s), l("autoplayStop");
                },
                T = function T(e, s) {
                    if (i.destroyed || !i.autoplay.running) return;
                    clearTimeout(t), e || (f = !0);
                    var a = function a() {
                        l("autoplayPause"), i.params.autoplay.waitForTransition ? i.wrapperEl.addEventListener("transitionend", b) : M();
                    };
                    if (((i.autoplay.paused = !0), s)) return h && (d = i.params.autoplay.delay), (h = !1), void a();
                    var r = d || i.params.autoplay.delay;
                    (d = r - (new Date().getTime() - w)), (i.isEnd && d < 0 && !i.params.loop) || (d < 0 && (d = 0), a());
                },
                M = function M() {
                    (i.isEnd && d < 0 && !i.params.loop) || i.destroyed || !i.autoplay.running || ((w = new Date().getTime()), f ? ((f = !1), E(d)) : E(), (i.autoplay.paused = !1), l("autoplayResume"));
                },
                C = function C() {
                    if (i.destroyed || !i.autoplay.running) return;
                    var e = a();
                    "hidden" === e.visibilityState && ((f = !0), T(!0)), "visible" === e.visibilityState && M();
                },
                P = function P(e) {
                    "mouse" === e.pointerType && ((f = !0), T(!0));
                },
                L = function L(e) {
                    "mouse" === e.pointerType && i.autoplay.paused && M();
                };
            n("init", function () {
                i.params.autoplay.enabled &&
                    (i.params.autoplay.pauseOnMouseEnter && (i.el.addEventListener("pointerenter", P), i.el.addEventListener("pointerleave", L)),
                    a().addEventListener("visibilitychange", C),
                    (w = new Date().getTime()),
                    x());
            }),
                n("destroy", function () {
                    i.el.removeEventListener("pointerenter", P), i.el.removeEventListener("pointerleave", L), a().removeEventListener("visibilitychange", C), i.autoplay.running && S();
                }),
                n("beforeTransitionStart", function (e, t, s) {
                    !i.destroyed && i.autoplay.running && (s || !i.params.autoplay.disableOnInteraction ? T(!0, !0) : S());
                }),
                n("sliderFirstMove", function () {
                    !i.destroyed &&
                        i.autoplay.running &&
                        (i.params.autoplay.disableOnInteraction
                            ? S()
                            : ((p = !0),
                              (u = !1),
                              (f = !1),
                              (m = setTimeout(function () {
                                  (f = !0), (u = !0), T(!0);
                              }, 200))));
                }),
                n("touchEnd", function () {
                    if (!i.destroyed && i.autoplay.running && p) {
                        if ((clearTimeout(m), clearTimeout(t), i.params.autoplay.disableOnInteraction)) return (u = !1), void (p = !1);
                        u && i.params.cssMode && M(), (u = !1), (p = !1);
                    }
                }),
                n("slideChange", function () {
                    !i.destroyed && i.autoplay.running && (h = !0);
                }),
                Object.assign(i.autoplay, {
                    start: x,
                    stop: S,
                    pause: T,
                    resume: M,
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                i = e.on;
            s({
                thumbs: {
                    swiper: null,
                    multipleActiveThumbs: !0,
                    autoScrollOffset: 0,
                    slideThumbActiveClass: "swiper-slide-thumb-active",
                    thumbsContainerClass: "swiper-thumbs",
                },
            });
            var r = !1,
                n = !1;
            function l() {
                var e = t.thumbs.swiper;
                if (!e || e.destroyed) return;
                var s = e.clickedIndex,
                    a = e.clickedSlide;
                if (a && a.classList.contains(t.params.thumbs.slideThumbActiveClass)) return;
                if (null == s) return;
                var i;
                (i = e.params.loop ? parseInt(e.clickedSlide.getAttribute("data-swiper-slide-index"), 10) : s), t.params.loop ? t.slideToLoop(i) : t.slideTo(i);
            }
            function o() {
                var e = t.params.thumbs;
                if (r) return !1;
                r = !0;
                var s = t.constructor;
                if (e.swiper instanceof s)
                    (t.thumbs.swiper = e.swiper),
                        Object.assign(t.thumbs.swiper.originalParams, {
                            watchSlidesProgress: !0,
                            slideToClickedSlide: !1,
                        }),
                        Object.assign(t.thumbs.swiper.params, {
                            watchSlidesProgress: !0,
                            slideToClickedSlide: !1,
                        }),
                        t.thumbs.swiper.update();
                else if (d(e.swiper)) {
                    var _a19 = Object.assign({}, e.swiper);
                    Object.assign(_a19, {
                        watchSlidesProgress: !0,
                        slideToClickedSlide: !1,
                    }),
                        (t.thumbs.swiper = new s(_a19)),
                        (n = !0);
                }
                return t.thumbs.swiper.el.classList.add(t.params.thumbs.thumbsContainerClass), t.thumbs.swiper.on("tap", l), !0;
            }
            function c(e) {
                var s = t.thumbs.swiper;
                if (!s || s.destroyed) return;
                var a = "auto" === s.params.slidesPerView ? s.slidesPerViewDynamic() : s.params.slidesPerView;
                var i = 1;
                var r = t.params.thumbs.slideThumbActiveClass;
                if (
                    (t.params.slidesPerView > 1 && !t.params.centeredSlides && (i = t.params.slidesPerView),
                    t.params.thumbs.multipleActiveThumbs || (i = 1),
                    (i = Math.floor(i)),
                    s.slides.forEach(function (e) {
                        return e.classList.remove(r);
                    }),
                    s.params.loop || (s.params.virtual && s.params.virtual.enabled))
                )
                    for (var _e54 = 0; _e54 < i; _e54 += 1)
                        f(s.slidesEl, '[data-swiper-slide-index="'.concat(t.realIndex + _e54, '"]')).forEach(function (e) {
                            e.classList.add(r);
                        });
                else for (var _e55 = 0; _e55 < i; _e55 += 1) s.slides[t.realIndex + _e55].classList.add(r);
                var n = t.params.thumbs.autoScrollOffset,
                    l = n && !s.params.loop;
                if (t.realIndex !== s.realIndex || l) {
                    var _i17 = s.activeIndex;
                    var _r12, _o7;
                    if (s.params.loop) {
                        var _e56 = s.slides.filter(function (e) {
                            return e.getAttribute("data-swiper-slide-index") === "".concat(t.realIndex);
                        })[0];
                        (_r12 = s.slides.indexOf(_e56)), (_o7 = t.activeIndex > t.previousIndex ? "next" : "prev");
                    } else (_r12 = t.realIndex), (_o7 = _r12 > t.previousIndex ? "next" : "prev");
                    l && (_r12 += "next" === _o7 ? n : -1 * n),
                        s.visibleSlidesIndexes &&
                            s.visibleSlidesIndexes.indexOf(_r12) < 0 &&
                            (s.params.centeredSlides ? (_r12 = _r12 > _i17 ? _r12 - Math.floor(a / 2) + 1 : _r12 + Math.floor(a / 2) - 1) : _r12 > _i17 && s.params.slidesPerGroup, s.slideTo(_r12, e ? 0 : void 0));
                }
            }
            (t.thumbs = {
                swiper: null,
            }),
                i("beforeInit", function () {
                    var e = t.params.thumbs;
                    if (e && e.swiper)
                        if ("string" == typeof e.swiper || e.swiper instanceof HTMLElement) {
                            var _s36 = a(),
                                _i18 = function _i18() {
                                    var a = "string" == typeof e.swiper ? _s36.querySelector(e.swiper) : e.swiper;
                                    if (a && a.swiper) (e.swiper = a.swiper), o(), c(!0);
                                    else if (a) {
                                        var _s37 = function _s37(i) {
                                            (e.swiper = i.detail[0]), a.removeEventListener("init", _s37), o(), c(!0), e.swiper.update(), t.update();
                                        };
                                        a.addEventListener("init", _s37);
                                    }
                                    return a;
                                },
                                _r13 = function _r13() {
                                    if (t.destroyed) return;
                                    _i18() || requestAnimationFrame(_r13);
                                };
                            requestAnimationFrame(_r13);
                        } else o(), c(!0);
                }),
                i("slideChange update resize observerUpdate", function () {
                    c();
                }),
                i("setTransition", function (e, s) {
                    var a = t.thumbs.swiper;
                    a && !a.destroyed && a.setTransition(s);
                }),
                i("beforeDestroy", function () {
                    var e = t.thumbs.swiper;
                    e && !e.destroyed && n && e.destroy();
                }),
                Object.assign(t.thumbs, {
                    init: o,
                    update: c,
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.emit,
                i = e.once;
            s({
                freeMode: {
                    enabled: !1,
                    momentum: !0,
                    momentumRatio: 1,
                    momentumBounce: !0,
                    momentumBounceRatio: 1,
                    momentumVelocityRatio: 1,
                    sticky: !1,
                    minimumVelocity: 0.02,
                },
            }),
                Object.assign(t, {
                    freeMode: {
                        onTouchStart: function onTouchStart() {
                            var e = t.getTranslate();
                            t.setTranslate(e),
                                t.setTransition(0),
                                (t.touchEventsData.velocities.length = 0),
                                t.freeMode.onTouchEnd({
                                    currentPos: t.rtl ? t.translate : -t.translate,
                                });
                        },
                        onTouchMove: function onTouchMove() {
                            var e = t.touchEventsData,
                                s = t.touches;
                            0 === e.velocities.length &&
                                e.velocities.push({
                                    position: s[t.isHorizontal() ? "startX" : "startY"],
                                    time: e.touchStartTime,
                                }),
                                e.velocities.push({
                                    position: s[t.isHorizontal() ? "currentX" : "currentY"],
                                    time: l(),
                                });
                        },
                        onTouchEnd: function onTouchEnd(e) {
                            var s = e.currentPos;
                            var r = t.params,
                                n = t.wrapperEl,
                                o = t.rtlTranslate,
                                d = t.snapGrid,
                                c = t.touchEventsData,
                                p = l() - c.touchStartTime;
                            if (s < -t.minTranslate()) t.slideTo(t.activeIndex);
                            else if (s > -t.maxTranslate()) t.slides.length < d.length ? t.slideTo(d.length - 1) : t.slideTo(t.slides.length - 1);
                            else {
                                if (r.freeMode.momentum) {
                                    if (c.velocities.length > 1) {
                                        var _e57 = c.velocities.pop(),
                                            _s38 = c.velocities.pop(),
                                            _a20 = _e57.position - _s38.position,
                                            _i19 = _e57.time - _s38.time;
                                        (t.velocity = _a20 / _i19), (t.velocity /= 2), Math.abs(t.velocity) < r.freeMode.minimumVelocity && (t.velocity = 0), (_i19 > 150 || l() - _e57.time > 300) && (t.velocity = 0);
                                    } else t.velocity = 0;
                                    (t.velocity *= r.freeMode.momentumVelocityRatio), (c.velocities.length = 0);
                                    var _e58 = 1e3 * r.freeMode.momentumRatio;
                                    var _s39 = t.velocity * _e58;
                                    var _p4 = t.translate + _s39;
                                    o && (_p4 = -_p4);
                                    var _u2,
                                        _m = !1;
                                    var _h = 20 * Math.abs(t.velocity) * r.freeMode.momentumBounceRatio;
                                    var _f;
                                    if (_p4 < t.maxTranslate())
                                        r.freeMode.momentumBounce
                                            ? (_p4 + t.maxTranslate() < -_h && (_p4 = t.maxTranslate() - _h), (_u2 = t.maxTranslate()), (_m = !0), (c.allowMomentumBounce = !0))
                                            : (_p4 = t.maxTranslate()),
                                            r.loop && r.centeredSlides && (_f = !0);
                                    else if (_p4 > t.minTranslate())
                                        r.freeMode.momentumBounce
                                            ? (_p4 - t.minTranslate() > _h && (_p4 = t.minTranslate() + _h), (_u2 = t.minTranslate()), (_m = !0), (c.allowMomentumBounce = !0))
                                            : (_p4 = t.minTranslate()),
                                            r.loop && r.centeredSlides && (_f = !0);
                                    else if (r.freeMode.sticky) {
                                        var _e59;
                                        for (var _t39 = 0; _t39 < d.length; _t39 += 1)
                                            if (d[_t39] > -_p4) {
                                                _e59 = _t39;
                                                break;
                                            }
                                        (_p4 = Math.abs(d[_e59] - _p4) < Math.abs(d[_e59 - 1] - _p4) || "next" === t.swipeDirection ? d[_e59] : d[_e59 - 1]), (_p4 = -_p4);
                                    }
                                    if (
                                        (_f &&
                                            i("transitionEnd", function () {
                                                t.loopFix();
                                            }),
                                        0 !== t.velocity)
                                    ) {
                                        if (((_e58 = o ? Math.abs((-_p4 - t.translate) / t.velocity) : Math.abs((_p4 - t.translate) / t.velocity)), r.freeMode.sticky)) {
                                            var _s40 = Math.abs((o ? -_p4 : _p4) - t.translate),
                                                _a21 = t.slidesSizesGrid[t.activeIndex];
                                            _e58 = _s40 < _a21 ? r.speed : _s40 < 2 * _a21 ? 1.5 * r.speed : 2.5 * r.speed;
                                        }
                                    } else if (r.freeMode.sticky) return void t.slideToClosest();
                                    r.freeMode.momentumBounce && _m
                                        ? (t.updateProgress(_u2),
                                          t.setTransition(_e58),
                                          t.setTranslate(_p4),
                                          t.transitionStart(!0, t.swipeDirection),
                                          (t.animating = !0),
                                          E(n, function () {
                                              t &&
                                                  !t.destroyed &&
                                                  c.allowMomentumBounce &&
                                                  (a("momentumBounce"),
                                                  t.setTransition(r.speed),
                                                  setTimeout(function () {
                                                      t.setTranslate(_u2),
                                                          E(n, function () {
                                                              t && !t.destroyed && t.transitionEnd();
                                                          });
                                                  }, 0));
                                          }))
                                        : t.velocity
                                        ? (a("_freeModeNoMomentumRelease"),
                                          t.updateProgress(_p4),
                                          t.setTransition(_e58),
                                          t.setTranslate(_p4),
                                          t.transitionStart(!0, t.swipeDirection),
                                          t.animating ||
                                              ((t.animating = !0),
                                              E(n, function () {
                                                  t && !t.destroyed && t.transitionEnd();
                                              })))
                                        : t.updateProgress(_p4),
                                        t.updateActiveIndex(),
                                        t.updateSlidesClasses();
                                } else {
                                    if (r.freeMode.sticky) return void t.slideToClosest();
                                    r.freeMode && a("_freeModeNoMomentumRelease");
                                }
                                (!r.freeMode.momentum || p >= r.longSwipesMs) && (t.updateProgress(), t.updateActiveIndex(), t.updateSlidesClasses());
                            }
                        },
                    },
                });
        },
        function (e) {
            var t,
                s,
                a,
                i = e.swiper,
                r = e.extendParams;
            r({
                grid: {
                    rows: 1,
                    fill: "column",
                },
            }),
                (i.grid = {
                    initSlides: function initSlides(e) {
                        var r = i.params.slidesPerView,
                            _i$params$grid = i.params.grid,
                            n = _i$params$grid.rows,
                            l = _i$params$grid.fill;
                        (s = t / n), (a = Math.floor(e / n)), (t = Math.floor(e / n) === e / n ? e : Math.ceil(e / n) * n), "auto" !== r && "row" === l && (t = Math.max(t, r * n));
                    },
                    updateSlide: function updateSlide(e, r, n, l) {
                        var _i$params = i.params,
                            o = _i$params.slidesPerGroup,
                            d = _i$params.spaceBetween,
                            _i$params$grid2 = i.params.grid,
                            c = _i$params$grid2.rows,
                            p = _i$params$grid2.fill;
                        var u, m, h;
                        if ("row" === p && o > 1) {
                            var _s41 = Math.floor(e / (o * c)),
                                _a22 = e - c * o * _s41,
                                _i20 = 0 === _s41 ? o : Math.min(Math.ceil((n - _s41 * c * o) / c), o);
                            (h = Math.floor(_a22 / _i20)), (m = _a22 - h * _i20 + _s41 * o), (u = m + (h * t) / c), (r.style.order = u);
                        } else "column" === p ? ((m = Math.floor(e / c)), (h = e - m * c), (m > a || (m === a && h === c - 1)) && ((h += 1), h >= c && ((h = 0), (m += 1)))) : ((h = Math.floor(e / s)), (m = e - h * s));
                        r.style[l("margin-top")] = 0 !== h ? d && "".concat(d, "px") : "";
                    },
                    updateWrapperSize: function updateWrapperSize(e, s, a) {
                        var _i$params2 = i.params,
                            r = _i$params2.spaceBetween,
                            n = _i$params2.centeredSlides,
                            l = _i$params2.roundLengths,
                            o = i.params.grid.rows;
                        if (((i.virtualSize = (e + r) * t), (i.virtualSize = Math.ceil(i.virtualSize / o) - r), (i.wrapperEl.style[a("width")] = "".concat(i.virtualSize + r, "px")), n)) {
                            var _e60 = [];
                            for (var _t40 = 0; _t40 < s.length; _t40 += 1) {
                                var _a23 = s[_t40];
                                l && (_a23 = Math.floor(_a23)), s[_t40] < i.virtualSize + s[0] && _e60.push(_a23);
                            }
                            s.splice(0, s.length), s.push.apply(s, _e60);
                        }
                    },
                });
        },
        function (e) {
            var t = e.swiper;
            Object.assign(t, {
                appendSlide: te.bind(t),
                prependSlide: se.bind(t),
                addSlide: ae.bind(t),
                removeSlide: ie.bind(t),
                removeAllSlides: re.bind(t),
            });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                fadeEffect: {
                    crossFade: !1,
                },
            }),
                ne({
                    effect: "fade",
                    swiper: t,
                    on: a,
                    setTranslate: function setTranslate() {
                        var e = t.slides;
                        t.params.fadeEffect;
                        for (var _s42 = 0; _s42 < e.length; _s42 += 1) {
                            var _e61 = t.slides[_s42];
                            var _a24 = -_e61.swiperSlideOffset;
                            t.params.virtualTranslate || (_a24 -= t.translate);
                            var _i21 = 0;
                            t.isHorizontal() || ((_i21 = _a24), (_a24 = 0));
                            var _r14 = t.params.fadeEffect.crossFade ? Math.max(1 - Math.abs(_e61.progress), 0) : 1 + Math.min(Math.max(_e61.progress, -1), 0),
                                _n8 = le(0, _e61);
                            (_n8.style.opacity = _r14), (_n8.style.transform = "translate3d(".concat(_a24, "px, ").concat(_i21, "px, 0px)"));
                        }
                    },
                    setTransition: function setTransition(e) {
                        var s = t.slides.map(function (e) {
                            return h(e);
                        });
                        s.forEach(function (t) {
                            t.style.transitionDuration = "".concat(e, "ms");
                        }),
                            oe({
                                swiper: t,
                                duration: e,
                                transformElements: s,
                                allSlides: !0,
                            });
                    },
                    overwriteParams: function overwriteParams() {
                        return {
                            slidesPerView: 1,
                            slidesPerGroup: 1,
                            watchSlidesProgress: !0,
                            spaceBetween: 0,
                            virtualTranslate: !t.params.cssMode,
                        };
                    },
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                cubeEffect: {
                    slideShadows: !0,
                    shadow: !0,
                    shadowOffset: 20,
                    shadowScale: 0.94,
                },
            });
            var i = function i(e, t, s) {
                var a = s ? e.querySelector(".swiper-slide-shadow-left") : e.querySelector(".swiper-slide-shadow-top"),
                    i = s ? e.querySelector(".swiper-slide-shadow-right") : e.querySelector(".swiper-slide-shadow-bottom");
                a || ((a = g("div", "swiper-slide-shadow-" + (s ? "left" : "top"))), e.append(a)),
                    i || ((i = g("div", "swiper-slide-shadow-" + (s ? "right" : "bottom"))), e.append(i)),
                    a && (a.style.opacity = Math.max(-t, 0)),
                    i && (i.style.opacity = Math.max(t, 0));
            };
            ne({
                effect: "cube",
                swiper: t,
                on: a,
                setTranslate: function setTranslate() {
                    var e = t.el,
                        s = t.wrapperEl,
                        a = t.slides,
                        r = t.width,
                        n = t.height,
                        l = t.rtlTranslate,
                        o = t.size,
                        d = t.browser,
                        c = t.params.cubeEffect,
                        p = t.isHorizontal(),
                        u = t.virtual && t.params.virtual.enabled;
                    var m,
                        h = 0;
                    c.shadow &&
                        (p
                            ? ((m = t.slidesEl.querySelector(".swiper-cube-shadow")), m || ((m = g("div", "swiper-cube-shadow")), t.slidesEl.append(m)), (m.style.height = "".concat(r, "px")))
                            : ((m = e.querySelector(".swiper-cube-shadow")), m || ((m = g("div", "swiper-cube-shadow")), e.append(m))));
                    for (var _e62 = 0; _e62 < a.length; _e62 += 1) {
                        var _t41 = a[_e62];
                        var _s43 = _e62;
                        u && (_s43 = parseInt(_t41.getAttribute("data-swiper-slide-index"), 10));
                        var _r15 = 90 * _s43,
                            _n9 = Math.floor(_r15 / 360);
                        l && ((_r15 = -_r15), (_n9 = Math.floor(-_r15 / 360)));
                        var _d5 = Math.max(Math.min(_t41.progress, 1), -1);
                        var _m2 = 0,
                            _f2 = 0,
                            _g = 0;
                        _s43 % 4 == 0
                            ? ((_m2 = 4 * -_n9 * o), (_g = 0))
                            : (_s43 - 1) % 4 == 0
                            ? ((_m2 = 0), (_g = 4 * -_n9 * o))
                            : (_s43 - 2) % 4 == 0
                            ? ((_m2 = o + 4 * _n9 * o), (_g = o))
                            : (_s43 - 3) % 4 == 0 && ((_m2 = -o), (_g = 3 * o + 4 * o * _n9)),
                            l && (_m2 = -_m2),
                            p || ((_f2 = _m2), (_m2 = 0));
                        var _v = "rotateX("
                            .concat(p ? 0 : -_r15, "deg) rotateY(")
                            .concat(p ? _r15 : 0, "deg) translate3d(")
                            .concat(_m2, "px, ")
                            .concat(_f2, "px, ")
                            .concat(_g, "px)");
                        _d5 <= 1 && _d5 > -1 && ((h = 90 * _s43 + 90 * _d5), l && (h = 90 * -_s43 - 90 * _d5)), (_t41.style.transform = _v), c.slideShadows && i(_t41, _d5, p);
                    }
                    if (((s.style.transformOrigin = "50% 50% -".concat(o / 2, "px")), (s.style["-webkit-transform-origin"] = "50% 50% -".concat(o / 2, "px")), c.shadow))
                        if (p)
                            m.style.transform = "translate3d(0px, "
                                .concat(r / 2 + c.shadowOffset, "px, ")
                                .concat(-r / 2, "px) rotateX(90deg) rotateZ(0deg) scale(")
                                .concat(c.shadowScale, ")");
                        else {
                            var _e63 = Math.abs(h) - 90 * Math.floor(Math.abs(h) / 90),
                                _t42 = 1.5 - (Math.sin((2 * _e63 * Math.PI) / 360) / 2 + Math.cos((2 * _e63 * Math.PI) / 360) / 2),
                                _s44 = c.shadowScale,
                                _a25 = c.shadowScale / _t42,
                                _i22 = c.shadowOffset;
                            m.style.transform = "scale3d("
                                .concat(_s44, ", 1, ")
                                .concat(_a25, ") translate3d(0px, ")
                                .concat(n / 2 + _i22, "px, ")
                                .concat(-n / 2 / _a25, "px) rotateX(-90deg)");
                        }
                    var f = (d.isSafari || d.isWebView) && d.needPerspectiveFix ? -o / 2 : 0;
                    (s.style.transform = "translate3d(0px,0,"
                        .concat(f, "px) rotateX(")
                        .concat(t.isHorizontal() ? 0 : h, "deg) rotateY(")
                        .concat(t.isHorizontal() ? -h : 0, "deg)")),
                        s.style.setProperty("--swiper-cube-translate-z", "".concat(f, "px"));
                },
                setTransition: function setTransition(e) {
                    var s = t.el,
                        a = t.slides;
                    if (
                        (a.forEach(function (t) {
                            (t.style.transitionDuration = "".concat(e, "ms")),
                                t.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(function (t) {
                                    t.style.transitionDuration = "".concat(e, "ms");
                                });
                        }),
                        t.params.cubeEffect.shadow && !t.isHorizontal())
                    ) {
                        var _t43 = s.querySelector(".swiper-cube-shadow");
                        _t43 && (_t43.style.transitionDuration = "".concat(e, "ms"));
                    }
                },
                recreateShadows: function recreateShadows() {
                    var e = t.isHorizontal();
                    t.slides.forEach(function (t) {
                        var s = Math.max(Math.min(t.progress, 1), -1);
                        i(t, s, e);
                    });
                },
                getEffectParams: function getEffectParams() {
                    return t.params.cubeEffect;
                },
                perspective: function perspective() {
                    return !0;
                },
                overwriteParams: function overwriteParams() {
                    return {
                        slidesPerView: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        resistanceRatio: 0,
                        spaceBetween: 0,
                        centeredSlides: !1,
                        virtualTranslate: !0,
                    };
                },
            });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                flipEffect: {
                    slideShadows: !0,
                    limitRotation: !0,
                },
            });
            var i = function i(e, s, a) {
                var i = t.isHorizontal() ? e.querySelector(".swiper-slide-shadow-left") : e.querySelector(".swiper-slide-shadow-top"),
                    r = t.isHorizontal() ? e.querySelector(".swiper-slide-shadow-right") : e.querySelector(".swiper-slide-shadow-bottom");
                i || (i = de(0, e, t.isHorizontal() ? "left" : "top")), r || (r = de(0, e, t.isHorizontal() ? "right" : "bottom")), i && (i.style.opacity = Math.max(-s, 0)), r && (r.style.opacity = Math.max(s, 0));
            };
            ne({
                effect: "flip",
                swiper: t,
                on: a,
                setTranslate: function setTranslate() {
                    var e = t.slides,
                        s = t.rtlTranslate,
                        a = t.params.flipEffect;
                    for (var _r16 = 0; _r16 < e.length; _r16 += 1) {
                        var _n10 = e[_r16];
                        var _l9 = _n10.progress;
                        t.params.flipEffect.limitRotation && (_l9 = Math.max(Math.min(_n10.progress, 1), -1));
                        var _o8 = _n10.swiperSlideOffset;
                        var _d6 = -180 * _l9,
                            _c3 = 0,
                            _p5 = t.params.cssMode ? -_o8 - t.translate : -_o8,
                            _u3 = 0;
                        t.isHorizontal() ? s && (_d6 = -_d6) : ((_u3 = _p5), (_p5 = 0), (_c3 = -_d6), (_d6 = 0)), (_n10.style.zIndex = -Math.abs(Math.round(_l9)) + e.length), a.slideShadows && i(_n10, _l9);
                        var _m3 = "translate3d(".concat(_p5, "px, ").concat(_u3, "px, 0px) rotateX(").concat(_c3, "deg) rotateY(").concat(_d6, "deg)");
                        le(0, _n10).style.transform = _m3;
                    }
                },
                setTransition: function setTransition(e) {
                    var s = t.slides.map(function (e) {
                        return h(e);
                    });
                    s.forEach(function (t) {
                        (t.style.transitionDuration = "".concat(e, "ms")),
                            t.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(function (t) {
                                t.style.transitionDuration = "".concat(e, "ms");
                            });
                    }),
                        oe({
                            swiper: t,
                            duration: e,
                            transformElements: s,
                        });
                },
                recreateShadows: function recreateShadows() {
                    t.params.flipEffect;
                    t.slides.forEach(function (e) {
                        var s = e.progress;
                        t.params.flipEffect.limitRotation && (s = Math.max(Math.min(e.progress, 1), -1)), i(e, s);
                    });
                },
                getEffectParams: function getEffectParams() {
                    return t.params.flipEffect;
                },
                perspective: function perspective() {
                    return !0;
                },
                overwriteParams: function overwriteParams() {
                    return {
                        slidesPerView: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        spaceBetween: 0,
                        virtualTranslate: !t.params.cssMode,
                    };
                },
            });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    scale: 1,
                    modifier: 1,
                    slideShadows: !0,
                },
            }),
                ne({
                    effect: "coverflow",
                    swiper: t,
                    on: a,
                    setTranslate: function setTranslate() {
                        var e = t.width,
                            s = t.height,
                            a = t.slides,
                            i = t.slidesSizesGrid,
                            r = t.params.coverflowEffect,
                            n = t.isHorizontal(),
                            l = t.translate,
                            o = n ? e / 2 - l : s / 2 - l,
                            d = n ? r.rotate : -r.rotate,
                            c = r.depth;
                        for (var _e64 = 0, _t44 = a.length; _e64 < _t44; _e64 += 1) {
                            var _t45 = a[_e64],
                                _s45 = i[_e64],
                                _l10 = (o - _t45.swiperSlideOffset - _s45 / 2) / _s45,
                                _p6 = "function" == typeof r.modifier ? r.modifier(_l10) : _l10 * r.modifier;
                            var _u4 = n ? d * _p6 : 0,
                                _m4 = n ? 0 : d * _p6,
                                _h2 = -c * Math.abs(_p6),
                                _f3 = r.stretch;
                            "string" == typeof _f3 && -1 !== _f3.indexOf("%") && (_f3 = (parseFloat(r.stretch) / 100) * _s45);
                            var _g2 = n ? 0 : _f3 * _p6,
                                _v2 = n ? _f3 * _p6 : 0,
                                _w = 1 - (1 - r.scale) * Math.abs(_p6);
                            Math.abs(_v2) < 0.001 && (_v2 = 0),
                                Math.abs(_g2) < 0.001 && (_g2 = 0),
                                Math.abs(_h2) < 0.001 && (_h2 = 0),
                                Math.abs(_u4) < 0.001 && (_u4 = 0),
                                Math.abs(_m4) < 0.001 && (_m4 = 0),
                                Math.abs(_w) < 0.001 && (_w = 0);
                            var _b = "translate3d(".concat(_v2, "px,").concat(_g2, "px,").concat(_h2, "px)  rotateX(").concat(_m4, "deg) rotateY(").concat(_u4, "deg) scale(").concat(_w, ")");
                            if (((le(0, _t45).style.transform = _b), (_t45.style.zIndex = 1 - Math.abs(Math.round(_p6))), r.slideShadows)) {
                                var _e65 = n ? _t45.querySelector(".swiper-slide-shadow-left") : _t45.querySelector(".swiper-slide-shadow-top"),
                                    _s46 = n ? _t45.querySelector(".swiper-slide-shadow-right") : _t45.querySelector(".swiper-slide-shadow-bottom");
                                _e65 || (_e65 = de(0, _t45, n ? "left" : "top")),
                                    _s46 || (_s46 = de(0, _t45, n ? "right" : "bottom")),
                                    _e65 && (_e65.style.opacity = _p6 > 0 ? _p6 : 0),
                                    _s46 && (_s46.style.opacity = -_p6 > 0 ? -_p6 : 0);
                            }
                        }
                    },
                    setTransition: function setTransition(e) {
                        t.slides
                            .map(function (e) {
                                return h(e);
                            })
                            .forEach(function (t) {
                                (t.style.transitionDuration = "".concat(e, "ms")),
                                    t.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(function (t) {
                                        t.style.transitionDuration = "".concat(e, "ms");
                                    });
                            });
                    },
                    perspective: function perspective() {
                        return !0;
                    },
                    overwriteParams: function overwriteParams() {
                        return {
                            watchSlidesProgress: !0,
                        };
                    },
                });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                creativeEffect: {
                    limitProgress: 1,
                    shadowPerProgress: !1,
                    progressMultiplier: 1,
                    perspective: !0,
                    prev: {
                        translate: [0, 0, 0],
                        rotate: [0, 0, 0],
                        opacity: 1,
                        scale: 1,
                    },
                    next: {
                        translate: [0, 0, 0],
                        rotate: [0, 0, 0],
                        opacity: 1,
                        scale: 1,
                    },
                },
            });
            var i = function i(e) {
                return "string" == typeof e ? e : "".concat(e, "px");
            };
            ne({
                effect: "creative",
                swiper: t,
                on: a,
                setTranslate: function setTranslate() {
                    var e = t.slides,
                        s = t.wrapperEl,
                        a = t.slidesSizesGrid,
                        r = t.params.creativeEffect,
                        n = r.progressMultiplier,
                        l = t.params.centeredSlides;
                    if (l) {
                        var _e66 = a[0] / 2 - t.params.slidesOffsetBefore || 0;
                        s.style.transform = "translateX(calc(50% - ".concat(_e66, "px))");
                    }
                    var _loop = function _loop() {
                        var a = e[_s47],
                            o = a.progress,
                            d = Math.min(Math.max(a.progress, -r.limitProgress), r.limitProgress);
                        var c = d;
                        l || (c = Math.min(Math.max(a.originalProgress, -r.limitProgress), r.limitProgress));
                        var p = a.swiperSlideOffset,
                            u = [t.params.cssMode ? -p - t.translate : -p, 0, 0],
                            m = [0, 0, 0];
                        var h = !1;
                        t.isHorizontal() || ((u[1] = u[0]), (u[0] = 0));
                        var f = {
                            translate: [0, 0, 0],
                            rotate: [0, 0, 0],
                            scale: 1,
                            opacity: 1,
                        };
                        d < 0 ? ((f = r.next), (h = !0)) : d > 0 && ((f = r.prev), (h = !0)),
                            u.forEach(function (e, t) {
                                u[t] = "calc("
                                    .concat(e, "px + (")
                                    .concat(i(f.translate[t]), " * ")
                                    .concat(Math.abs(d * n), "))");
                            }),
                            m.forEach(function (e, t) {
                                m[t] = f.rotate[t] * Math.abs(d * n);
                            }),
                            (a.style.zIndex = -Math.abs(Math.round(o)) + e.length);
                        var g = u.join(", "),
                            v = "rotateX(".concat(m[0], "deg) rotateY(").concat(m[1], "deg) rotateZ(").concat(m[2], "deg)"),
                            w = c < 0 ? "scale(".concat(1 + (1 - f.scale) * c * n, ")") : "scale(".concat(1 - (1 - f.scale) * c * n, ")"),
                            b = c < 0 ? 1 + (1 - f.opacity) * c * n : 1 - (1 - f.opacity) * c * n,
                            y = "translate3d(".concat(g, ") ").concat(v, " ").concat(w);
                        if ((h && f.shadow) || !h) {
                            var _e67 = a.querySelector(".swiper-slide-shadow");
                            if ((!_e67 && f.shadow && (_e67 = de(0, a)), _e67)) {
                                var _t46 = r.shadowPerProgress ? d * (1 / r.limitProgress) : d;
                                _e67.style.opacity = Math.min(Math.max(Math.abs(_t46), 0), 1);
                            }
                        }
                        var E = le(0, a);
                        (E.style.transform = y), (E.style.opacity = b), f.origin && (E.style.transformOrigin = b);
                    };
                    for (var _s47 = 0; _s47 < e.length; _s47 += 1) {
                        _loop();
                    }
                },
                setTransition: function setTransition(e) {
                    var s = t.slides.map(function (e) {
                        return h(e);
                    });
                    s.forEach(function (t) {
                        (t.style.transitionDuration = "".concat(e, "ms")),
                            t.querySelectorAll(".swiper-slide-shadow").forEach(function (t) {
                                t.style.transitionDuration = "".concat(e, "ms");
                            });
                    }),
                        oe({
                            swiper: t,
                            duration: e,
                            transformElements: s,
                            allSlides: !0,
                        });
                },
                perspective: function perspective() {
                    return t.params.creativeEffect.perspective;
                },
                overwriteParams: function overwriteParams() {
                    return {
                        watchSlidesProgress: !0,
                        virtualTranslate: !t.params.cssMode,
                    };
                },
            });
        },
        function (e) {
            var t = e.swiper,
                s = e.extendParams,
                a = e.on;
            s({
                cardsEffect: {
                    slideShadows: !0,
                    rotate: !0,
                    perSlideRotate: 2,
                    perSlideOffset: 8,
                },
            }),
                ne({
                    effect: "cards",
                    swiper: t,
                    on: a,
                    setTranslate: function setTranslate() {
                        var e = t.slides,
                            s = t.activeIndex,
                            a = t.params.cardsEffect,
                            _t$touchEventsData = t.touchEventsData,
                            i = _t$touchEventsData.startTranslate,
                            r = _t$touchEventsData.isTouched,
                            n = t.translate;
                        for (var _l11 = 0; _l11 < e.length; _l11 += 1) {
                            var _o9 = e[_l11],
                                _d7 = _o9.progress,
                                _c4 = Math.min(Math.max(_d7, -4), 4);
                            var _p7 = _o9.swiperSlideOffset;
                            t.params.centeredSlides && !t.params.cssMode && (t.wrapperEl.style.transform = "translateX(".concat(t.minTranslate(), "px)")),
                                t.params.centeredSlides && t.params.cssMode && (_p7 -= e[0].swiperSlideOffset);
                            var _u5 = t.params.cssMode ? -_p7 - t.translate : -_p7,
                                _m5 = 0;
                            var _h3 = -100 * Math.abs(_c4);
                            var _f4 = 1,
                                _g3 = -a.perSlideRotate * _c4,
                                _v3 = a.perSlideOffset - 0.75 * Math.abs(_c4);
                            var _w2 = t.virtual && t.params.virtual.enabled ? t.virtual.from + _l11 : _l11,
                                _b2 = (_w2 === s || _w2 === s - 1) && _c4 > 0 && _c4 < 1 && (r || t.params.cssMode) && n < i,
                                _y = (_w2 === s || _w2 === s + 1) && _c4 < 0 && _c4 > -1 && (r || t.params.cssMode) && n > i;
                            if (_b2 || _y) {
                                var _e68 = Math.pow(1 - Math.abs((Math.abs(_c4) - 0.5) / 0.5), 0.5);
                                (_g3 += -28 * _c4 * _e68), (_f4 += -0.5 * _e68), (_v3 += 96 * _e68), (_m5 = -25 * _e68 * Math.abs(_c4) + "%");
                            }
                            if (
                                ((_u5 = _c4 < 0 ? "calc(".concat(_u5, "px + (").concat(_v3 * Math.abs(_c4), "%))") : _c4 > 0 ? "calc(".concat(_u5, "px + (-").concat(_v3 * Math.abs(_c4), "%))") : "".concat(_u5, "px")),
                                !t.isHorizontal())
                            ) {
                                var _e69 = _m5;
                                (_m5 = _u5), (_u5 = _e69);
                            }
                            var _E = _c4 < 0 ? "" + (1 + (1 - _f4) * _c4) : "" + (1 - (1 - _f4) * _c4),
                                _x2 = "\n        translate3d("
                                    .concat(_u5, ", ")
                                    .concat(_m5, ", ")
                                    .concat(_h3, "px)\n        rotateZ(")
                                    .concat(a.rotate ? _g3 : 0, "deg)\n        scale(")
                                    .concat(_E, ")\n      ");
                            if (a.slideShadows) {
                                var _e70 = _o9.querySelector(".swiper-slide-shadow");
                                _e70 || (_e70 = de(0, _o9)), _e70 && (_e70.style.opacity = Math.min(Math.max((Math.abs(_c4) - 0.5) / 0.5, 0), 1));
                            }
                            _o9.style.zIndex = -Math.abs(Math.round(_d7)) + e.length;
                            le(0, _o9).style.transform = _x2;
                        }
                    },
                    setTransition: function setTransition(e) {
                        var s = t.slides.map(function (e) {
                            return h(e);
                        });
                        s.forEach(function (t) {
                            (t.style.transitionDuration = "".concat(e, "ms")),
                                t.querySelectorAll(".swiper-slide-shadow").forEach(function (t) {
                                    t.style.transitionDuration = "".concat(e, "ms");
                                });
                        }),
                            oe({
                                swiper: t,
                                duration: e,
                                transformElements: s,
                            });
                    },
                    perspective: function perspective() {
                        return !0;
                    },
                    overwriteParams: function overwriteParams() {
                        return {
                            watchSlidesProgress: !0,
                            virtualTranslate: !t.params.cssMode,
                        };
                    },
                });
        },
    ];
    return Q.use(ce), Q;
});
