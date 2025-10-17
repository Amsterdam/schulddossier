/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

import { registerReactControllerComponents } from '@symfony/ux-react';

// start the Stimulus application
import './bootstrap.js';

// other scripts
import './js/flashMessage.js'
import './js/scripts.js'

// scss
import './scss/screen.scss';

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css'

window.pdfjsLib = require("pdfjs-dist/webpack");
window.Sortable = require("sortablejs");
window.jsPDF = require("jspdf").jsPDF;

registerReactControllerComponents(
  require.context('./react/controllers', true, /\.[jt]sx?$/)
);
