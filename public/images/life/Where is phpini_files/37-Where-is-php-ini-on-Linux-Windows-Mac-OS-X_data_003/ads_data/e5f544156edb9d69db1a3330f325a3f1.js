(function(){'use strict';var f="function"==typeof Object.create?Object.create:function(a){function b(){}b.prototype=a;return new b},g;if("function"==typeof Object.setPrototypeOf)g=Object.setPrototypeOf;else{var h;a:{var aa={h:!0},k={};try{k.__proto__=aa;h=k.h;break a}catch(a){}h=!1}g=h?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var l=g;
function m(a,b){a.prototype=f(b.prototype);a.prototype.constructor=a;if(l)l(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c]}var n=this||self;
function p(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b}var ba=Date.now||function(){return+new Date};function ca(a){var b=["mys","design","init"],c=n;b[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+b[0]);for(var d;b.length&&(d=b.shift());)b.length||void 0===a?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=a}function q(a,b){function c(){}c.prototype=b.prototype;a.prototype=new c;a.prototype.constructor=a};var da=Array.prototype.forEach?function(a,b){Array.prototype.forEach.call(a,b,void 0)}:function(a,b){for(var c=a.length,d="string"==typeof a?a.split(""):a,e=0;e<c;e++)e in d&&b.call(void 0,d[e],e,a)};function r(a){r[" "](a);return a}r[" "]=function(){};function t(){}var ea="function"==typeof Uint8Array;function u(a,b,c){a.b=null;b||(b=[]);a.j=void 0;a.f=-1;a.a=b;a:{if(b=a.a.length){--b;var d=a.a[b];if(null!==d&&"object"==typeof d&&"array"!=p(d)&&!(ea&&d instanceof Uint8Array)){a.g=b-a.f;a.c=d;break a}}a.g=Number.MAX_VALUE}a.i={};if(c)for(b=0;b<c.length;b++)if(d=c[b],d<a.g)d+=a.f,a.a[d]=a.a[d]||v;else{var e=a.g+a.f;a.a[e]||(a.c=a.a[e]={});a.c[d]=a.c[d]||v}}var v=[];
function w(a,b){if(b<a.g){b+=a.f;var c=a.a[b];return c===v?a.a[b]=[]:c}if(a.c)return c=a.c[b],c===v?a.c[b]=[]:c}function fa(a){a=w(a,2);return null==a?0:a}function ha(a){a=w(a,16);a=null==a?a:!!a;return null==a?!1:a}function x(a,b,c){a.b||(a.b={});if(!a.b[c]){var d=w(a,c);d&&(a.b[c]=new b(d))}return a.b[c]}function y(a){if(a.b)for(var b in a.b){var c=a.b[b];if("array"==p(c))for(var d=0;d<c.length;d++)c[d]&&z(c[d]);else c&&z(c)}}function z(a){y(a);return a.a}
t.prototype.toString=function(){y(this);return this.a.toString()};function A(a){u(this,a,ia)}q(A,t);var ia=[17];function B(a){u(this,a,ka)}q(B,t);var ka=[27];function C(a){u(this,a,la)}q(C,t);var la=[8];var D=document;function E(){var a=F;try{var b;if(b=!!a&&null!=a.location.href)a:{try{r(a.foo);b=!0;break a}catch(c){}b=!1}return b}catch(c){return!1}};var G=!!window.google_async_iframe_id,F=G&&window.parent||window;var H=null;function ma(a,b,c){this.label=a;this.type=b;this.value=c;this.duration=0;this.uniqueId=Math.random();this.slotId=void 0};var I=n.performance,na=!!(I&&I.mark&&I.measure&&I.clearMarks),J=function(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}(function(){var a;if(a=na){var b;if(null===H){H="";try{a="";try{a=n.top.location.hash}catch(c){a=n.location.hash}a&&(H=(b=a.match(/\bdeid=([\d,]+)/))?b[1]:"")}catch(c){}}b=H;a=!!b.indexOf&&0<=b.indexOf("1337")}return a});
function K(){var a=L;this.a=[];this.c=a||n;var b=null;a&&(a.google_js_reporting_queue=a.google_js_reporting_queue||[],this.a=a.google_js_reporting_queue,b=a.google_measure_js_timing);this.b=J()||(null!=b?b:1>Math.random())}function oa(a){a&&I&&J()&&(I.clearMarks("goog_"+a.label+"_"+a.uniqueId+"_start"),I.clearMarks("goog_"+a.label+"_"+a.uniqueId+"_end"))}
K.prototype.start=function(a,b){if(!this.b)return null;var c=void 0===c?n:c;c=c.performance;(c=c&&c.now?c.now():null)||(c=(c=n.performance)&&c.now&&c.timing?Math.floor(c.now()+c.timing.navigationStart):ba());a=new ma(a,b,c);b="goog_"+a.label+"_"+a.uniqueId+"_start";I&&J()&&I.mark(b);return a};if(G&&!E()){var M="."+D.domain;try{for(;2<M.split(".").length&&!E();)D.domain=M=M.substr(M.indexOf(".")+1),F=window.parent}catch(a){}E()||(F=window)}var L=F,N=new K;function O(){L.google_measure_js_timing||(N.b=!1,N.a!=N.c.google_js_reporting_queue&&(J()&&da(N.a,oa),N.a.length=0))}if("complete"==L.document.readyState)O();else if(N.b){var pa=function(){O()},P=L;P.addEventListener&&P.addEventListener("load",pa,!1)};function qa(){};function Q(a,b){a=a.getElementsByTagName("META");for(var c=0;c<a.length;++c)if(a[c].getAttribute("name")===b)return a[c].getAttribute("content");return""};function R(a,b){this.b=a;this.a=b;a=Q(b,"namespace");if(!a){a="ns-"+Math.random().toString(36).substr(2,5);a:{for(var c=b.getElementsByTagName("META"),d=0;d<c.length;++d)if("namespace"===c[d].getAttribute("name")){c[d].setAttribute("content",a);break a}c=document.createElement("META");c.setAttribute("name","namespace");c.setAttribute("content",a);b.appendChild(c)}}}R.prototype.dispatchEvent=function(a,b){a=null==b?new CustomEvent(a):new CustomEvent(a,{detail:b});this.a.dispatchEvent(a)};function S(){this.a={}}S.prototype.set=function(a,b){this.a[a]=b};S.prototype.get=function(a){return this.a[a]};function ra(a,b){if(b){b=JSON.parse(b);for(var c in b)a.set(c,b[c])}};function T(a){this.context=a;this.a=new S}m(T,qa);function sa(a,b){this.b=a;this.a=b}
function ta(a){if(!mys.Engine)throw Error("MysidiaJsError[2] ");var b=a.a.b,c=a.a.a;ra(a.b.a,Q(c,"runtime_data"));var d=Q(c,"render_config");if(!d)throw Error("MysidiaJsError[35] ");d=new C(d?JSON.parse(d):null);ua(a,d);var e=mys.Engine.create(b,c,z(d)),V=0;c.addEventListener("browserRender",function(){++V;if(1==V)a.a.dispatchEvent("overallStart"),e.enable().then(function(){a.a.dispatchEvent("overallQuiet")});else{var W=c.clientWidth,X=c.clientHeight;W&&X&&e.enable(W,X)}})}
function ua(a,b){2==fa(b)||x(x(b,B,1),A,10)&&ha(x(x(b,B,1),A,10))||(a=a.a.a,a.addEventListener("browserStart",function(){}),a.addEventListener("browserReady",function(){}),a.addEventListener("browserQuiet",function(){}))};function U(a){T.call(this,a)}m(U,T);function Y(){U.apply(this,arguments)}m(Y,U);function Z(){Y.apply(this,arguments)}m(Z,Y);(function(a){ca(function(b,c){b=new R(b,c);c=a(b);ta(new sa(c,b))})})(function(a){return new Z(a)});}).call(this);
