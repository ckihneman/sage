import { $, on } from 'utils/dom';

import './Nav.scss';

/**
 * Mobile Navigation Handling
 *
 * - Handle nav toggles
 * - Handle closing nav on overlay click
 */

const target = document.querySelector('[data-target="navToggle"]');
const $navToggle = $('[data-plugin="navToggle"]');
const $navClose = $('[data-plugin="navClose"]');

const NAV_ACTIVE_CLASS = 'is-navActive';

const toggleNav = () => {
  target.classList.toggle(NAV_ACTIVE_CLASS);
};

const closeNav = () => {
  target.classList.remove(NAV_ACTIVE_CLASS);
};

if (target) {
  on($navToggle, 'click', toggleNav);
  on($navClose, 'click', closeNav);
}
