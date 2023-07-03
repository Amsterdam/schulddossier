/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
//import './styles/app.css';
import './scss/screen.scss';

window.pdfjsLib = require("pdfjs-dist/webpack");
window.Sortable = require("sortablejs");

var jsPDF = require("jspdf");
window.jsPDF = jsPDF.jsPDF

import { webpack } from "pdfjs-dist" ;


import './js/flashMessage.js'
import './js/scripts.js'


