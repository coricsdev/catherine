!function(n){var a={};function o(e){if(a[e])return a[e].exports;var t=a[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=n,o.c=a,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)o.d(n,a,function(e){return t[e]}.bind(null,a));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=14)}([function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){!function(){e.exports=this.wp.blockEditor}()},function(e,t){!function(){e.exports=this.wp.blocks}()},function(e,t){!function(){e.exports=this.React}()},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){!function(){e.exports=this.lodash}()},,,,,,,,function(e,t,n){},function(e,t,n){"use strict";n.r(t);n(13);var a=n(3);function o(){return(o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var a in n)Object.prototype.hasOwnProperty.call(n,a)&&(e[a]=n[a])}return e}).apply(this,arguments)}function c(e){return a.createElement("svg",o({width:20,height:20,viewBox:"0 0 417.813 417"},e),a.createElement("path",{xmlns:"http://www.w3.org/2000/svg",d:"M159.988 318.582c-3.988 4.012-9.43 6.25-15.082 6.25s-11.094-2.238-15.082-6.25L9.375 198.113c-12.5-12.5-12.5-32.77 0-45.246l15.082-15.086c12.504-12.5 32.75-12.5 45.25 0l75.2 75.203L348.104 9.781c12.504-12.5 32.77-12.5 45.25 0l15.082 15.086c12.5 12.5 12.5 32.766 0 45.246zm0 0",fill:"#06ab1c","data-original":"#2196f3"}))}function l(){return(l=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var a in n)Object.prototype.hasOwnProperty.call(n,a)&&(e[a]=n[a])}return e}).apply(this,arguments)}function r(e){return a.createElement("svg",l({width:20,height:20,viewBox:"0 0 123.05 123.05"},e),a.createElement("path",{d:"M121.325 10.925l-8.5-8.399c-2.3-2.3-6.1-2.3-8.5 0l-42.4 42.399L18.726 1.726c-2.301-2.301-6.101-2.301-8.5 0l-8.5 8.5c-2.301 2.3-2.301 6.1 0 8.5l43.1 43.1-42.3 42.5c-2.3 2.3-2.3 6.1 0 8.5l8.5 8.5c2.3 2.3 6.1 2.3 8.5 0l42.399-42.4 42.4 42.4c2.3 2.3 6.1 2.3 8.5 0l8.5-8.5c2.3-2.3 2.3-6.1 0-8.5l-42.5-42.4 42.4-42.399a6.13 6.13 0 00.1-8.602z",fill:"#e30101","data-original":"#000000",xmlns:"http://www.w3.org/2000/svg"}))}function i(e){var t={dos:c,donts:r};return!Object(s.isEmpty)(e)&&e in t?t[e]:t.dos}function u(e){var t=e.className,n=e.attributes,a=e.setAttributes,o=n.option,c=n.content,l=i(o);return React.createElement("div",{className:"CATHERINE-icon-heading"},React.createElement("span",{className:"CATHERINE-icon-heading__heading"},React.createElement(l,null)),React.createElement(p.RichText,{tagName:"h4",className:t,value:c,onChange:function(e){return a({contentVal:e})},placeholder:Object(f.__)("Heading…","CATHERINE")}),React.createElement(p.InspectorControls,null,React.createElement(d.PanelBody,{title:Object(f.__)("Block Settings","CATHERINE")},React.createElement(d.RadioControl,{label:Object(f.__)("Select the icon","CATHERINE"),help:Object(f.__)("Controls icon selection","CATHERINE"),selected:o,options:[{label:"Dos",value:"dos"},{label:"Dont's",value:"donts"}],onChange:function(e){a({optionVal:e})}}))))}var s=n(5),d=n(4),f=n(0),p=n(1),b=n(2);Object(b.registerBlockType)("CATHERINE-blocks/heading",{title:Object(f.__)("Heading with Icon","CATHERINE"),icon:"admin-customizer",description:Object(f.__)("Add Heading and select Icons","CATHERINE"),category:"CATHERINE",attributes:{option:{type:"string",default:"dos"},content:{type:"string",source:"html",selector:"h4",default:Object(f.__)("Dos","CATHERINE")}},edit:u,save:function(e){var t=e.attributes,n=t.option,a=t.content,o=i(n);return React.createElement("div",{className:"CATHERINE-icon-heading"},React.createElement("span",{className:"CATHERINE-icon-heading__heading"},React.createElement(o,null)),React.createElement(p.RichText.Content,{tagName:"h4",value:a}))}});function g(e,t,n){return["core/column",{className:t},[["CATHERINE-blocks/heading",{className:"CATHERINE-dos-and-donts__heading",option:e,content:"<strong><span>".concat(n,"</span></strong>")}],["core/list",{className:"CATHERINE-dos-and-donts__list"}]]]}function m(){return React.createElement("div",{className:"CATHERINE-dos-and-donts"},React.createElement(p.InnerBlocks,{template:h,allowedBlocks:_,templateLock:!0}))}var h=[["core/group",{className:"CATHERINE-dos-and-donts__group",backgroundColor:"pale-cyan-blue"},[["core/columns",{className:"CATHERINE-dos-and-donts__cols"},[g("dos","CATHERINE-dos-and-donts__col-one","Dos"),g("donts","CATHERINE-dos-and-donts__col-two","Dont's")]]]]],_=["core/group"];Object(b.registerBlockType)("CATHERINE-blocks/dos-and-donts",{title:Object(f.__)("Dos and dont's","CATHERINE"),icon:"editor-table",description:Object(f.__)("Add headings and text","CATHERINE"),category:"CATHERINE",edit:m,save:function(){return React.createElement("div",{className:"CATHERINE-dos-and-donts"},React.createElement(p.InnerBlocks.Content,null))}});var v=[{name:"layout-dark-background",label:Object(f.__)("Layout style dark background","CATHERINE")}],y=[{name:"layout-border-blue-fill",label:Object(f.__)("Blue outline","CATHERINE")},{name:"layout-border-white-no-fill",label:Object(f.__)("White outline - to be used with dark background","CATHERINE")}];wp.domReady(function(){Object(b.unregisterBlockStyle)("core/quote","large"),Object(b.unregisterBlockStyle)("core/button","outline"),v.forEach(function(e){return Object(b.registerBlockStyle)("core/quote",e)}),y.forEach(function(e){return Object(b.registerBlockStyle)("core/button",e)})})}]);