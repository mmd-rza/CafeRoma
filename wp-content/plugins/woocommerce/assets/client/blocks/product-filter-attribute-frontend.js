(()=>{"use strict";var e={1287:(e,t,r)=>{r.d(t,{c:()=>l});var a=r(5133);const n=window.wc.wcSettings,o=(0,n.getSetting)("isBlockTheme"),i=(0,n.getSetting)("isProductArchive"),c=(0,n.getSetting)("needsRefreshForInteractivityAPI",!1);function l(e,t={}){const r=new URL(e);return r.pathname=r.pathname.replace(/\/page\/[0-9]+/i,""),r.searchParams.delete("paged"),r.searchParams.forEach(((e,t)=>{t.match(/^query(?:-[0-9]+)?-page$/)&&r.searchParams.delete(t)})),e=r.href,c||!o&&i?window.location.href=e:(0,a.navigate)(e,t)}},5133:e=>{e.exports=window.wc.__experimentalInteractivity}},t={};function r(a){var n=t[a];if(void 0!==n)return n.exports;var o=t[a]={exports:{}};return e[a](o,o.exports,r),o.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var a in t)r.o(t,a)&&!r.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:t[a]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e=r(5133),t=r(1287);function a(e){return null!=e}function n(e,t,r){const a=new URL(window.location.href),{searchParams:n}=a;return e.length>0?(n.set(`filter_${t}`,e.join(",")),n.set(`query_type_${t}`,r)):(n.delete(`filter_${t}`),n.delete(`query_type_${t}`)),a.href}function o(e){return(new URL(window.location.href).searchParams.get(`filter_${e}`)||"").split(",").filter(Boolean)}(0,e.store)("woocommerce/product-filter-attribute",{actions:{navigate:()=>{const r=(0,e.getContext)("woocommerce/interactivity-dropdown"),o=(0,e.getContext)(),i=r.selectedItems.map((e=>e.value)).filter(a);(0,t.c)(n(i,o.attributeSlug,o.queryType))},updateProducts:r=>{if(!r.target.value)return;const a=(0,e.getContext)();let i=o(a.attributeSlug);r.target.checked&&!i.includes(r.target.value)?("multiple"===a.selectType&&i.push(r.target.value),"single"===a.selectType&&(i=[r.target.value])):i=i.filter((e=>e!==r.target.value)),(0,t.c)(n(i,a.attributeSlug,a.queryType))},removeFilter:()=>{const{attributeSlug:r,queryType:a,value:i}=(0,e.getContext)();let c=o(r);c=c.filter((e=>e!==i)),(0,t.c)(n(c,r,a))}}})})()})();