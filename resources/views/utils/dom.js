/**
 * DOM Handling
 *
 * Add general use helpers as needed.
 * @link https://github.com/nefe/You-Dont-Need-jQuery
 */

export const $ = selector => Array.from(document.querySelectorAll(selector));

export const on = (els, event, handler) =>
  els.forEach(el => {
    el.addEventListener(event, handler);
  });
