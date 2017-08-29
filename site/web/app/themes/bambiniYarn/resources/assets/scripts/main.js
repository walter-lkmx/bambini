/** import external dependencies */
import 'jquery';
import 'unslider';
import 'lightbox2';
//import 'truncator-js';

/** import local dependencies */
import Router from './util/Router';
import common from './routes/common';
import niceMenu from './routes/nice-menu';
import home from './routes/home';
import products from './routes/products';
import aboutUs from './routes/about';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** nice menu */
  niceMenu,
  /** Home page */
  home,
  /** Products */
  products,
  /** About Us page, note the change from about-us to aboutUs. */
  aboutUs,
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());
