/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// SCSS
import './scss/screen.scss';

window.pdfjsLib = require("pdfjs-dist/webpack");
window.Sortable = require("sortablejs");
window.jsPDF = require("jspdf").jsPDF;

// Other scripts
import './js/flashMessage.js'
import './js/scripts.js'
