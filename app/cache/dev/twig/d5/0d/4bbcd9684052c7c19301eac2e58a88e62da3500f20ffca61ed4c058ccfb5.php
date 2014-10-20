<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_d50d4bbcd9684052c7c19301eac2e58a88e62da3500f20ffca61ed4c058ccfb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  62 => 24,  50 => 15,  42 => 12,  26 => 3,  241 => 152,  201 => 115,  182 => 105,  174 => 103,  160 => 95,  148 => 92,  144 => 91,  132 => 82,  123 => 79,  109 => 68,  88 => 53,  55 => 29,  46 => 14,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  294 => 116,  285 => 113,  281 => 112,  277 => 111,  273 => 110,  270 => 109,  254 => 103,  240 => 96,  235 => 94,  231 => 93,  228 => 92,  223 => 90,  221 => 89,  194 => 67,  187 => 66,  180 => 64,  169 => 57,  167 => 56,  155 => 50,  147 => 48,  145 => 47,  138 => 46,  134 => 44,  131 => 43,  128 => 81,  125 => 41,  122 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  93 => 30,  84 => 27,  81 => 26,  78 => 25,  72 => 23,  69 => 22,  67 => 21,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  36 => 16,  32 => 6,  22 => 2,  19 => 1,  683 => 508,  680 => 507,  675 => 97,  664 => 87,  648 => 10,  642 => 510,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  243 => 128,  237 => 95,  233 => 124,  229 => 123,  224 => 121,  216 => 119,  212 => 118,  206 => 115,  198 => 113,  186 => 106,  179 => 99,  177 => 96,  170 => 102,  163 => 87,  161 => 84,  154 => 80,  117 => 46,  111 => 43,  105 => 67,  101 => 33,  95 => 31,  91 => 35,  87 => 28,  83 => 30,  79 => 29,  75 => 28,  71 => 30,  64 => 35,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  37 => 13,  35 => 10,  24 => 2,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  685 => 326,  678 => 323,  674 => 321,  672 => 96,  669 => 319,  667 => 88,  659 => 85,  656 => 84,  653 => 312,  651 => 11,  646 => 308,  643 => 307,  640 => 507,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  480 => 229,  474 => 227,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  444 => 217,  442 => 216,  434 => 210,  430 => 209,  423 => 204,  413 => 200,  407 => 197,  403 => 196,  397 => 193,  393 => 192,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  355 => 175,  349 => 173,  343 => 148,  337 => 169,  331 => 167,  325 => 165,  319 => 163,  313 => 161,  307 => 159,  305 => 158,  297 => 152,  293 => 151,  282 => 142,  272 => 138,  266 => 108,  262 => 134,  256 => 131,  252 => 130,  242 => 123,  239 => 122,  232 => 119,  226 => 91,  220 => 120,  214 => 113,  208 => 111,  202 => 114,  196 => 107,  190 => 107,  184 => 102,  178 => 104,  172 => 93,  166 => 90,  164 => 96,  156 => 94,  152 => 93,  98 => 32,  90 => 29,  80 => 32,  70 => 26,  60 => 22,  43 => 7,  40 => 9,  33 => 4,  30 => 5,);
    }
}
