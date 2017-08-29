"use strict";

const truncator = function(selector, charLimit) {
  let l = charLimit,
  let e = document.querySelectorAll(selector);
  if (e) {
    for (let i = 0; i < e.length; i++) {
      let trunc = e[i].innerHTML;
      if (trunc.length > l) {
        trunc = trunc.substring(0, l);
        trunc = trunc.replace(/\w+$/, '');
        e[i].innerHTML = trunc + '...';
      }
    }
  }
}