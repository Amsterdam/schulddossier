<?php
declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use const PHP_INT_MAX;


class KernelRequestSubscriber implements EventSubscriberInterface
{
    /**
     * @param string $applicationName
     * @param bool $isMaintenance
     *
     * IMPORTANT: If there are any automated tests in the pipeline, they need to be disabled.
     * Failing to do so will result in failed tests and prohibit deployment
     */
    public function __construct(
        private string $applicationName = 'Schulddossier',
        private bool $isMaintenance = true
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => [
                ['onMaintenance', PHP_INT_MAX - 1000],
            ],
        ];
    }

    public function onMaintenance(RequestEvent $event): void
    {
        if ($this->isMaintenance) {

            $content = <<<EOF
<!DOCTYPE html>
<html lang="nl" data-commit=""  data-branch="" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADUS - Onderhoud</title>

    <link rel="icon" href="https://www.amsterdam.nl/favicon.ico" type="image/x-icon">
    <style>
        .no-js .modal,
        .no-js .modal-inner,
        .no-js .js-spinner {
                opacity: 0;
                display: none;
            }
            
        @font-face {
  font-family: amsterdam sans;
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Light.eot?#iefix);
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Light.eot?#iefix) format("eot"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff2/AmsterdamSans-Light.woff2) format("woff2"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff/AmsterdamSans-Light.woff) format("woff"); }

@font-face {
  font-family: amsterdam sans;
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Regular.eot?#iefix);
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Regular.eot?#iefix) format("eot"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff2/AmsterdamSans-Regular.woff2) format("woff2"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff/AmsterdamSans-Regular.woff) format("woff"); }

@font-face {
  font-family: amsterdam sans;
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Italic.eot?#iefix);
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Italic.eot?#iefix) format("eot"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff2/AmsterdamSans-Italic.woff2) format("woff2"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff/AmsterdamSans-Italic.woff) format("woff"); }

@font-face {
  font-family: amsterdam sans;
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Bold.eot?#iefix);
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-Bold.eot?#iefix) format("eot"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff2/AmsterdamSans-Bold.woff2) format("woff2"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff/AmsterdamSans-Bold.woff) format("woff"); }

@font-face {
  font-family: amsterdam sans;
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-BoldItalic.eot?#iefix);
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-BoldItalic.eot?#iefix) format("eot"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff2/AmsterdamSans-BoldItalic.woff2) format("woff2"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff/AmsterdamSans-BoldItalic.woff) format("woff"); }

@font-face {
  font-family: amsterdam sans;
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-ExtraBold.eot?#iefix);
  src: url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/eot/AmsterdamSans-ExtraBold.eot?#iefix) format("eot"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff2/AmsterdamSans-ExtraBold.woff2) format("woff2"), url(https://www.amsterdam.nl/views/core/fonts/AmsterdamSans/woff/AmsterdamSans-ExtraBold.woff) format("woff"); }

body {
  font-family: amsterdam sans, arial, sans-serif; }

@supports (font-display: swap) {
  body {
    font-display: swap; } }

@media all and (max-width: 33.75rem) {
  html .navigation-container li:first-child ul,
  html .navigation-container .admin-settings,
  html .section--timeline .details-admin,
  html .document__info ul,
  html .document--add,
  html .section--mijn-clienten .form-field--buttons {
    display: none; } }

.svg-sprite {
  display: none; }

.sr-only {
  border: 0;
  clip: rect(0.063rem 0.063rem 0.063rem 0.063rem);
  /* IE6, IE7 */
  clip: rect(0.063rem, 0.063rem, 0.063rem, 0.063rem);
  height: .063rem;
  margin: -0.063rem;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: .063rem; }

.hide-on-mobile {
  display: none; }
  @media screen and (min-width: 33.75rem) {
    .hide-on-mobile {
      display: inherit; } }

.hide {
  display: none !important; }

.hide {
  display: none !important; }

.hide-animated {
  max-height: 0 !important;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
  padding-top: 0 !important;
  padding-bottom: 0 !important;
  border: 0 !important;
  overflow: hidden;
  transition: all .5s; }

.show-animated {
  max-height: 1000px;
  overflow: hidden;
  transition: all .5s; }

.show-on-mobile {
  display: block;
  font-weight: 500; }
  @media screen and (min-width: 33.75rem) {
    .show-on-mobile {
      display: none; } }

.show-mobile-only {
  display: block; }
  @media screen and (min-width: 33.75rem) {
    .show-mobile-only {
      display: none; } }

.print-only {
  display: none; }

@media print {
  .print-only {
    display: block; }
  body .screen-only {
    display: none !important; } }

.u-clearfix:after {
  content: "";
  display: table;
  clear: both; }

.u-width-50 {
  width: 50%; }

.u-width-60 {
  width: 60%; }

.u-width-75 {
  width: 75%; }

.u-border-bottom {
  border-bottom: 2px solid #e6e6e6; }

.u-border-top {
  border-top: 2px solid #e6e6e6; }

.u-border-top-none {
  border-top: 0; }

.u-no-wrap {
  white-space: nowrap; }

.u-ellipsis {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis; }

.u-float-right {
  float: right; }

.u-float-left {
  float: left; }

.u-text-color-grey4 {
  color: #767676; }

.u-font-size-small {
  font-size: .9rem; }

.u-break-word {
  word-break: break-word; }

.u-font-weight-normal {
  font-weight: normal; }

.u-margin-none {
  margin: 0 !important; }

.u-margin-top {
  display: block;
  margin-top: 1rem !important; }

.u-margin-top-half {
  display: block;
  margin-top: .5rem !important; }

.u-margin-top-none {
  margin-top: 0 !important; }

.u-margin-right {
  margin-right: 1rem !important; }

.u-margin-right-half {
  margin-right: .5rem !important; }

.u-margin-top-2x {
  display: block;
  margin-top: 2rem !important; }

.u-margin-top-3x {
  display: block;
  margin-top: 3rem !important; }

.u-margin-top-4x {
  display: block;
  margin-top: 4rem !important; }

.u-margin-bottom {
  display: block;
  margin-bottom: 1rem !important; }

.u-margin-bottom-half {
  display: block;
  margin-bottom: .5rem !important; }

.u-margin-bottom-2x {
  display: block;
  margin-bottom: 2rem !important; }

.u-margin-bottom-3x {
  display: block;
  margin-bottom: 3rem !important; }

.u-margin-bottom-4x {
  display: block;
  margin-bottom: 4rem !important; }

.u-margin-bottom-none {
  margin-bottom: 0 !important; }

.u-padding-top {
  display: block;
  padding-top: 1rem !important; }

.u-padding-bottom {
  display: block;
  padding-bottom: 1rem !important; }

.u-padding-bottom-2x {
  display: block;
  padding-bottom: 2rem !important; }

.u-padding-right-2x {
  display: block;
  padding-right: 2rem !important; }

.u-padding-bottom-4x {
  display: block;
  padding-bottom: 4rem !important; }

.u-margin-bottom-sticky {
  margin-bottom: 4rem; }

.u-padding-right {
  padding-right: 1rem; }

.u-padding-right-3x {
  padding-right: 3rem; }

.u-padding-none {
  padding: 0; }

.u-padding-vertical-half {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.flex-container {
  display: flex; }
  .flex-container .flex-item {
    flex: 1; }

.u-list-style-none {
  list-style: none;
  padding-left: 0 !important;
  margin-left: 0 !important; }

.list-as-table {
  list-style: none;
  padding-left: 18px; }
  .list-as-table li {
    list-style-type: disc;
    margin-bottom: .475rem;
    position: relative; }
    @media all and (-ms-high-contrast: none) {
      .list-as-table li {
        display: block; }
        .list-as-table li:before {
          content: "\2022";
          position: absolute;
          top: 0;
          left: -18px; } }
    .list-as-table li div {
      display: flex;
      justify-content: space-between; }
      .list-as-table li div > *:first-child {
        width: 50%; }

.u-list-columns--3ul,
.u-list-columns--3 > ul {
  column-count: 2; }
  @media screen and (min-width: 64rem) {
    .u-list-columns--3ul,
    .u-list-columns--3 > ul {
      column-count: 3; } }

.scroll-list-container {
  max-height: 12rem;
  overflow-y: auto;
  margin-bottom: 1rem; }
  .scroll-list-container li {
    margin-bottom: .5rem; }

.u-underline {
  text-decoration: underline; }
  .u-underline--none {
    text-decoration: none; }
    .u-underline--none:hover {
      text-decoration: none; }

.u-text-align--right {
  text-align: right; }

.u-text-align--left {
  text-align: left !important; }

.u-indent-no-icon a:first-child {
  padding-left: 33px; }

.u-text-inherit {
  color: inherit;
  font-weight: inherit; }
  .u-text-inherit:hover {
    color: inherit; }

.u-color-black {
  color: #000000; }

.u-color-neutralgrey4 {
  color: #767676; }

.skip-main {
  height: .063rem;
  transform: translateY(-6.25rem);
  transition: transform .36s ease-in;
  overflow: hidden;
  position: absolute;
  width: .063rem;
  z-index: -5; }
  .skip-main:focus, .skip-main:active {
    background-color: #ffffff;
    border-radius: .938rem;
    border: 0.25rem solid #000000;
    height: auto;
    left: auto;
    margin: .625rem 35%;
    overflow: auto;
    padding: 1.25rem;
    text-align: center;
    top: 1.875rem;
    width: 30%; }
  .skip-main:focus {
    transform: translateY(0);
    opacity: 1;
    transition: transform .36s ease-out; }

.section--lightgrey {
  background-color: #f5f5f5;
  padding: 1rem; }

#target_generic-form-errors {
  height: 30px; }

html {
  font-size: 100%; }

body {
  font-family: amsterdam sans, Arial, Helvetica, sans-serif;
  font-size: 1rem;
  font-style: normal;
  font-weight: 400;
  color: #000000;
  -webkit-text-size-adjust: auto; }

a {
  color: red;
  text-decoration-skip: ink; }
  a:hover, a:focus {
    text-decoration: underline; }

h1,
h2,
h3,
h4,
h5 {
  font-family: inherit;
  font-style: inherit;
  font-weight: 500; }

h1,
.h1 {
  font-size: 1.4125rem;
  font-weight: bold;
  line-height: 1.47931rem;
  margin-top: 0;
  margin-bottom: 0; }
  h1 a,
  .h1 a {
    color: #000000;
    text-decoration: none; }
    h1 a:hover,
    .h1 a:hover {
      color: #000000;
      text-decoration: none; }

h2,
.h2 {
  font-size: 1.5rem;
  font-weight: bold; }
  h2:first-child,
  .h2:first-child {
    margin-top: 0; }
    @media screen and (min-width: 33.75rem) {
      h2:first-child,
      .h2:first-child {
        margin-top: 2rem; } }

h3,
.h3 {
  font-size: 1.25rem;
  line-height: 1.75rem; }

h4,
.h4 {
  font-size: 1.25rem;
  line-height: 1.75rem;
  margin-bottom: 1rem; }

h5,
.h5 {
  font-size: 1rem;
  line-height: 1.25rem;
  margin-bottom: .75rem; }

@media screen and (min-width: 33.75rem) {
  h2,
  .h2 {
    font-size: 1.5rem;
    line-height: 1.875rem;
    font-weight: bold; }
  h3,
  .h3 {
    font-size: 1.25rem;
    line-height: 1.75rem; }
  h4,
  .h4 {
    font-size: 1.125rem;
    line-height: 1.563rem;
    margin-bottom: 1rem; } }

p,
ul,
ol {
  margin-top: 0;
  margin-bottom: 1rem; }

ol {
  padding-left: 17px; }

.list-vertical li {
  padding-bottom: 0.5rem; }

ul {
  padding-left: 1rem; }

b,
strong,
em,
small,
code {
  line-height: 1rem; }

time {
  color: #323232;
  font-size: 0.8rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }
  p:empty {
    margin-bottom: 0; }

.section p {
  max-width: 40.625rem;
  line-height: 1.4; }

a {
  color: #004699; }

a:active,
a:hover {
  color: #ec0000; }

hr {
  min-height: 0.063rem;
  height: 0.063rem;
  background-color: #e6e6e6;
  color: #e6e6e6;
  border-style: solid;
  border: 0;
  margin-bottom: 2rem;
  margin-top: 2.5rem; }

input[name] {
  scroll-margin-top: 4.375rem; }

* {
  box-sizing: border-box; }

html, body {
  height: 100%;
  scroll-behavior: smooth; }

body {
  background-color: #e6e6e6;
  margin: 0; }
  @media screen and (min-width: 33.75rem) {
    body {
      margin: inherit; } }

.site-container {
  background: #ffffff;
  width: 100%;
  margin: 0 auto;
  min-height: 100%; }
  @media screen and (min-width: 33.75rem) {
    .site-container {
      max-width: 87.5rem;
      padding: 0 .938rem; } }

.site-navigation {
  display: block;
  padding: 0 .938rem;
  background-color: #f5f5f5;
  min-height: 2.75rem;
  margin-bottom: .938rem;
  position: relative; }
  @media screen and (min-width: 33.75rem) {
    .site-navigation {
      margin: 0 -0.938rem; } }

.site-header,
.site-main,
.site-footer {
  display: block;
  padding: .938rem; }
  @media screen and (min-width: 33.75rem) {
    .site-header,
    .site-main,
    .site-footer {
      padding: 0; } }

.site-header {
  background-color: #ffffff;
  margin: 0 auto;
  max-width: 60rem; }

.site-header-wrapper {
  -ms-flex-line-pack: start;
  align-content: flex-start;
  display: -ms-flexbox;
  display: grid;
  grid-gap: 0 1.687rem;
  grid-template-columns: auto  1fr;
  -ms-flex-pack: start;
  justify-content: space-between; }
  .site-header-wrapper .logo {
    width: 6.25rem;
    height: auto; }
  @media all and (min-width: 33.75rem) {
    .site-header-wrapper {
      grid-template-columns: auto 2fr 1fr;
      height: 6.75rem;
      padding-top: 1.125rem; }
      .site-header-wrapper .logo {
        width: auto; } }

.site-userinfo {
  margin-top: 1rem;
  grid-column: span 2;
  max-width: 260px; }
  .site-userinfo p {
    margin-bottom: 0; }
  .site-userinfo a {
    color: #767676; }
  @media all and (min-width: 33.75rem) {
    .site-userinfo {
      grid-column: span 1;
      margin-top: 0;
      margin-left: auto; } }

@media all and (-ms-high-contrast: none) {
  .site-title {
    margin-left: 2.5rem; } }

@media all and (min-width: 33.75rem) {
  .site-userinfo {
    text-align: right; } }

.site-userinfo__username {
  font-weight: bold; }

.site-main {
  max-width: 60rem;
  margin: 0 auto;
  padding-bottom: 2rem; }

footer {
  width: 100%;
  margin: 4rem 0 0; }
  @media all and (min-width: 33.75rem) {
    footer {
      width: calc(100% + 1.876rem);
      margin: 4rem -.938rem 0; } }
  footer .section-wrapper {
    width: 100%; }
  footer section {
    max-width: 60rem;
    margin: 0 auto; }

.grid__wrapper {
  display: flex; }

.grid__main {
  flex-basis: 100%; }

.grid__aside {
  display: none;
  order: -1;
  flex-basis: 25%;
  flex-shrink: 0;
  flex-grow: 0;
  margin-right: 2rem; }
  @media screen and (min-width: 64rem) {
    .grid__aside {
      display: block; } }

.grid__aside--sticky {
  position: relative;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
  transition: margin-top .3s ease-in-out; }

.form--limited-width {
  max-width: 43rem; }

legend {
  padding: 0;
  display: table;
  margin-bottom: 1rem; }

fieldset {
  margin: 0;
  box-shadow: none;
  border: 0;
  padding: .01em 0 0 0;
  min-width: 0; }

summary {
  cursor: pointer; }

.summary--textlink {
  outline: 0;
  color: #004699;
  text-decoration: underline;
  font-weight: bold;
  cursor: pointer; }
  .summary--textlink svg {
    margin-left: 0.5rem;
    color: #000000; }

body:not(:-moz-handler-blocked) fieldset {
  display: table-cell; }

.form-title-wrapper {
  margin-bottom: 1rem;
  position: relative;
  z-index: 20;
  background-color: #ffffff; }
  .form-title-wrapper h1 + .text-link {
    margin: 2rem 0 0; }
  .form-title-wrapper h2 + .text-link {
    margin: 1rem 0 0; }
  @media all and (min-width: 33.75rem) {
    .form-title-wrapper {
      display: flex; }
      .form-title-wrapper h1,
      .form-title-wrapper h2 {
        flex-grow: 1;
        padding-right: 30px; }
      .form-title-wrapper .text-link {
        flex-grow: 0;
        padding: 5px 0 0; } }

.section--step__title {
  font-size: 1.25rem;
  margin-bottom: 0; }

.sub-section {
  padding: 1rem;
  margin-bottom: 4rem;
  border: 0.063rem solid #b4b4b4; }
  .sub-section .form-field:first-child {
    margin-top: 0; }
  .sub-section > .form-field:last-child {
    margin-bottom: 0; }
  .sub-section--readonly {
    padding: 1rem 0;
    margin-bottom: 1rem;
    border: 0; }

.sub-section__title {
  margin-top: 0; }
  @media print {
    .sub-section__title {
      padding-left: .938rem; } }

.section--step__description,
.sub-section__description {
  max-width: 40.625rem; }

.next-previous {
  padding: 1rem;
  background-color: #e6e6e6;
  display: flex;
  justify-content: space-between; }

.section--form form {
  position: relative; }

.form-field__help {
  font-size: .9rem;
  color: #767676;
  line-height: 1.4;
  margin: .313rem 0 0 1rem; }
  .form-field__help table {
    border: none;
    width: auto; }
  .form-field__help caption {
    text-align: left;
    font-weight: 700; }
  .form-field__help td, .form-field__help th {
    font-weight: normal;
    padding: .125rem 1rem .125rem 0;
    text-align: left;
    border: none; }
  .form-field__help thead th {
    font-weight: 500; }
  .form-field__help tr:not(:last-of-type) th,
  .form-field__help tr:not(:last-of-type) td {
    border: none; }
  .form-field__help tbody td:first-child {
    font-weight: normal; }
  .form-field__help tbody tr {
    background-color: transparent; }
  .form-field__help ul, .form-field__help ol {
    padding-left: 0;
    margin: 0;
    list-style-position: inside; }
  .form-field__help td * {
    margin: 0; }

.section--form__navigation {
  margin-top: 5.75rem;
  padding-top: 1rem; }
  .section--form__navigation ul {
    position: relative;
    list-style: none;
    padding: 0;
    margin: 0; }
  .section--form__navigation a {
    position: relative;
    padding: .5rem 0 .5rem 2rem;
    display: block;
    font-weight: 500;
    color: #000000;
    text-decoration: none; }
    .section--form__navigation a:hover {
      text-decoration: underline; }
    .section--form__navigation a:before {
      content: '';
      position: absolute;
      z-index: 1;
      left: .75rem;
      margin-left: -1px;
      top: 1rem;
      bottom: -1rem;
      width: 2px;
      margin-left: -1px;
      background-color: #767676; }
  .section--form__navigation .section--form__navigation-item-complete:before {
    background-color: #004699; }
  .section--form__navigation > ul > li:last-child > ul > li:last-child > a:last-child:before,
  .section--form__navigation > ul > li:last-child > a:last-child:before {
    display: none; }
  .section--form__navigation ul ul a {
    font-weight: 400;
    font-size: .875em; }
  .section--form__navigation .dot {
    position: absolute;
    z-index: 2;
    left: 0;
    top: .375rem; }
  .section--form__navigation .dot--small {
    left: .25rem;
    top: .5rem; }

@media all and (min-width: 33.75rem) {
  .section__grid {
    display: grid;
    grid-template-columns: 240px auto; } }

@media all and (min-width: 33.75rem) {
  .section__main {
    grid-column-start: 2; } }

@media all and (min-width: 33.75rem) {
  .section__aside {
    grid-column-start: 1; } }

.form-field {
  margin-top: .9375rem;
  margin-bottom: 1.875rem; }
  .details__header .form-field {
    margin-top: 0;
    margin-bottom: 0; }
  .form-field:last-child {
    margin-bottom: 0; }

.form-field--buttons {
  display: block; }
  .form-field--buttons .button {
    margin-bottom: .5rem;
    margin-right: 1rem; }
    .form-field--buttons .button:after {
      display: table;
      content: ' ';
      width: 100%; }

.form-field--buttons-vertical > .button {
  display: block;
  text-align: center;
  margin-bottom: .5rem; }

.form-field--buttons-sticky {
  position: fixed;
  bottom: 0;
  background-color: #ffffff;
  padding: 2rem;
  width: 100%;
  display: block;
  left: 50%;
  transform: translateX(-50%); }
  .form-field--buttons-sticky:before {
    content: ' ';
    display: block;
    position: absolute;
    top: -3rem;
    left: 0;
    right: 0;
    bottom: 100%;
    background: rgba(255, 255, 255, 0);
    background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, white 100%);
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, white 100%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, white 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); }
  .form-field--buttons-sticky .button-wrapper {
    max-width: 680px;
    margin: 0 auto;
    transform: translateX(133px); }
  @media all and (min-width: 64rem) {
    .form-field--buttons-sticky {
      max-width: 87.5rem; } }
  .footer .form-field--buttons-sticky {
    position: absolute;
    bottom: -80px; }

.help-text,
.helptext {
  font-size: .9rem;
  color: #767676;
  margin-top: .313rem;
  margin-bottom: 0;
  max-width: 37.5rem; }
  .help-text ul,
  .helptext ul {
    margin: .625rem 0;
    padding-left: 1rem;
    list-style-position: outside; }
  .help-text li,
  .helptext li {
    padding-bottom: .5rem; }

input + .helptext,
textarea + .helptext {
  display: block; }

.error-text,
.errorlist {
  list-style-type: none;
  padding: 0 .25rem;
  color: #ec0000;
  font-weight: bold;
  margin-bottom: 0;
  margin-top: .625rem; }

input[required]:valid {
  border: 0.063rem solid #000000; }

input[required] {
  border: 0.063rem solid #004699; }

label {
  display: block;
  font-weight: bold; }

[type="password"],
[type="text"],
[type="email"],
[type="number"],
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  border: 0.063rem solid #767676;
  border-radius: 0;
  color: #000000;
  padding: .75rem .938rem;
  min-width: 4.375rem;
  max-width: 38.75rem;
  margin-top: .625rem;
  width: 100%; }
  [type="password"]:hover,
  [type="text"]:hover,
  [type="email"]:hover,
  [type="number"]:hover,
  select:hover,
  textarea:hover {
    color: #000000; }
  [type="password"][disabled],
  [type="text"][disabled],
  [type="email"][disabled],
  [type="number"][disabled],
  select[disabled],
  textarea[disabled] {
    color: #b4b4b4; }
  .section--form--control .form-field--step-required.form-field--empty [type="password"], .section--form--control .form-field--step-required.form-field--empty
  [type="text"], .section--form--control .form-field--step-required.form-field--empty
  [type="email"], .section--form--control .form-field--step-required.form-field--empty
  [type="number"], .section--form--control .form-field--step-required.form-field--empty
  select, .section--form--control .form-field--step-required.form-field--empty
  textarea {
    border: 2px solid #ec0000; }
  .flex-item [type="password"], .flex-item
  [type="text"], .flex-item
  [type="email"], .flex-item
  [type="number"], .flex-item
  select, .flex-item
  textarea {
    max-width: 18.375rem; }

textarea {
  line-height: 1.4; }

[type="text"][required]:valid,
[type="email"][required]:valid,
[type="number"][required]:valid,
select[required]:valid,
textarea[required]:valid {
  border: 0.063rem solid #000000; }

[type="text"]:valid + .error-text,
[type="email"]:valid + .error-text,
[type="number"]:valid + .error-text,
select:valid + .error-text,
textarea:valid + .error-text {
  display: none; }

[type="text"][required].invalid:not(:focus):not(:placeholder-shown),
[type="email"][required].invalid:not(:focus):not(:placeholder-shown),
[type="number"][required].invalid:not(:focus):not(:placeholder-shown),
select[required].invalid:not(:focus):not(:placeholder-shown),
textarea[required].invalid:not(:focus):not(:placeholder-shown) {
  border: 0.063rem solid #ec0000;
  box-shadow: inset 0 0 0 0.063rem #ec0000; }
  [type="text"][required].invalid:not(:focus):not(:placeholder-shown) + error-text,
  [type="email"][required].invalid:not(:focus):not(:placeholder-shown) + error-text,
  [type="number"][required].invalid:not(:focus):not(:placeholder-shown) + error-text,
  select[required].invalid:not(:focus):not(:placeholder-shown) + error-text,
  textarea[required].invalid:not(:focus):not(:placeholder-shown) + error-text {
    display: block; }
  [type="text"][required].invalid:not(:focus):not(:placeholder-shown)[name="username"], [type="text"][required].invalid:not(:focus):not(:placeholder-shown)[name="feedback"],
  [type="email"][required].invalid:not(:focus):not(:placeholder-shown)[name="username"],
  [type="email"][required].invalid:not(:focus):not(:placeholder-shown)[name="feedback"],
  [type="number"][required].invalid:not(:focus):not(:placeholder-shown)[name="username"],
  [type="number"][required].invalid:not(:focus):not(:placeholder-shown)[name="feedback"],
  select[required].invalid:not(:focus):not(:placeholder-shown)[name="username"],
  select[required].invalid:not(:focus):not(:placeholder-shown)[name="feedback"],
  textarea[required].invalid:not(:focus):not(:placeholder-shown)[name="username"],
  textarea[required].invalid:not(:focus):not(:placeholder-shown)[name="feedback"] {
    border: 0.063rem solid #000000;
    box-shadow: none; }

[type="text"].invalid + .error-text,
[type="text"][data-error-message] + .error-text,
[type="email"].invalid + .error-text,
[type="email"][data-error-message] + .error-text,
[type="number"].invalid + .error-text,
[type="number"][data-error-message] + .error-text,
select.invalid + .error-text,
select[data-error-message] + .error-text,
textarea.invalid + .error-text,
textarea[data-error-message] + .error-text {
  display: block; }

input[data-error-message] {
  outline: 0.063rem #ec0000 solid;
  border: 0.063rem #ec0000 solid; }

[type="file"] {
  opacity: 0;
  height: 0;
  float: left;
  width: 0; }
  [type="file"]:focus {
    outline: 0; }
  [type="file"]::-webkit-file-upload-button {
    visibility: hidden; }
  [type="file"]:hover + label,
  [type="file"]:focus + label {
    border: 0.063rem solid #ec0000; }
  [type="file"]:focus + label {
    outline: .063rem dotted #212121;
    outline: .313rem auto -webkit-focus-ring-color; }
  [type="file"][required].invalid + label {
    border: 0.063rem solid #ec0000;
    box-shadow: inset 0 0 0 0.063rem #ec0000; }
  [type="file"][required].invalid + label + .error-text {
    display: block; }

[type="file"] + label {
  background-color: #f5f5f5;
  margin-top: .625rem;
  min-width: 4.375rem;
  max-width: 38.75rem;
  height: 6.25rem;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: normal;
  position: relative;
  text-decoration: underline;
  color: #004699;
  cursor: pointer; }
  [type="file"] + label:hover {
    color: #ec0000; }

.file-upload__icon {
  margin-left: .938rem; }

.form-field__uploaded {
  margin: .9375rem 0 1.875rem; }

ul.form-field__checkboxgroup,
ul.form-field__radiogroup,
.form-field--radioselect ul,
.form-field--checkboxselectmultiple ul,
.form-field--delete {
  list-style-type: none;
  padding: 0;
  min-width: 4.375rem;
  max-width: 38.75rem; }
  ul.form-field__checkboxgroup label,
  ul.form-field__radiogroup label,
  .form-field--radioselect ul label,
  .form-field--checkboxselectmultiple ul label,
  .form-field--delete label {
    font-weight: normal; }
  ul.form-field__checkboxgroup li,
  ul.form-field__radiogroup li,
  .form-field--radioselect ul li,
  .form-field--checkboxselectmultiple ul li,
  .form-field--delete li {
    margin-top: .625rem; }

.form-field--checkboxselectmultiple.u-width-100 ul {
  max-width: none; }

.form-field--radioselect ul,
.form-field--checkboxselectmultiple ul {
  margin-top: .625rem; }
  .form-field--radioselect ul li,
  .form-field--checkboxselectmultiple ul li {
    margin-top: 0;
    margin-bottom: .625rem; }

.form-field__checkbox,
.form-field__radio,
[type="radio"],
[type="checkbox"] {
  float: left; }
  @media screen {
    .form-field__checkbox,
    .form-field__radio,
    [type="radio"],
    [type="checkbox"] {
      opacity: 0;
      height: 0;
      width: 0;
      margin: 0; }
      .form-field__checkbox:checked + .form-field__radiolabel::before,
      .form-field__checkbox:checked + .form-field__checkboxlabel::before,
      .form-field__radio:checked + .form-field__radiolabel::before,
      .form-field__radio:checked + .form-field__checkboxlabel::before,
      [type="radio"]:checked + .form-field__radiolabel::before,
      [type="radio"]:checked + .form-field__checkboxlabel::before,
      [type="checkbox"]:checked + .form-field__radiolabel::before,
      [type="checkbox"]:checked + .form-field__checkboxlabel::before {
        border-color: #000000;
        border-radius: 50%;
        box-shadow: inset 0 0 0 0.3125em #ffffff;
        background-color: #000000; }
      .form-field__checkbox:checked + .form-field__checkboxlabel::before,
      .form-field__radio:checked + .form-field__checkboxlabel::before,
      [type="radio"]:checked + .form-field__checkboxlabel::before,
      [type="checkbox"]:checked + .form-field__checkboxlabel::before {
        border-radius: 0;
        box-shadow: none;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAeCAYAAACv1gdQAAAAAXNSR0IArs4c6QAAAhRJREFUWAnNl7FOAkEQhrkgCQUFDZWVHXaUWooltlJLDw+AD8ADSE+vhY3aGVpLSzsrKxsLTUyMgt8YFpZldziO82CSPzs3M/vPjxy7Yy63BTYej3fBvaxbIGcmAUEV8ATEZK3Mshv0EFIGj8A2eS5vUFYuh4ASeLBVWb7ESxsRSOMiGFpifO5d5uJQUQC3PjVW7Au/kak4GubBlSXC534TbGYtLKLpwKfGio3wW5kKk2Y07VsiQm5HFcauY7UgQRLOXkiNFe+q1BR2J8V6ocoyn4Tv3BIQcnvzu5wndrWdnW2nZOVH+DoOp+/xQiVmxxmQl9G2tV5OiFrA5bT5xR+AKCiO5CmQn6/PEv2sIWqCHx+hFbvEzweFSYKCa2uDz13pQITgBMgezW5IFlRhE3FxrpJPyI6WkVFTB1Kr2ZBkcRnXNE+xdgmbRu84B9NNjkPuEHyY4sCa7EKHzDe+uD3eCNQcXfJq1IDkNFtvFILZHvxCjV5JVI1A/H0gMc3SGSLpICPzs9aJ3AvYm0B8zYQrvfEbMmkcp2msD2H+yqmtiKuCZV8XJUGb+/pTE2aIaBvnRfep8/5wDG9qK53liJBjJK6pR05qwgwRquIcriJeDuC62ZfZStMG0K6lla651IUjTi5035CQaED4D4HuKDRCcPZzf+iTIcYeIvW5P0QSI74To2ahJIqiPgL//iMXf6EgpcAvXpvfk0q44kUAAAAASUVORK5CYII=);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: 12px 9px;
        background-color: #000000;
        border-color: #000000; }
      .form-field__checkbox:checked:focus + .form-field__radiolabel::before,
      .form-field__checkbox:checked:focus + .form-field__checkboxlabel::before,
      .form-field__radio:checked:focus + .form-field__radiolabel::before,
      .form-field__radio:checked:focus + .form-field__checkboxlabel::before,
      [type="radio"]:checked:focus + .form-field__radiolabel::before,
      [type="radio"]:checked:focus + .form-field__checkboxlabel::before,
      [type="checkbox"]:checked:focus + .form-field__radiolabel::before,
      [type="checkbox"]:checked:focus + .form-field__checkboxlabel::before {
        border: 0.063rem solid #000000; }
      .form-field__checkbox:disabled + .form-field__radiolabel,
      .form-field__checkbox:disabled + .form-field__checkboxlabel,
      .form-field__radio:disabled + .form-field__radiolabel,
      .form-field__radio:disabled + .form-field__checkboxlabel,
      [type="radio"]:disabled + .form-field__radiolabel,
      [type="radio"]:disabled + .form-field__checkboxlabel,
      [type="checkbox"]:disabled + .form-field__radiolabel,
      [type="checkbox"]:disabled + .form-field__checkboxlabel {
        color: #b4b4b4; }
        .form-field__checkbox:disabled + .form-field__radiolabel::before,
        .form-field__checkbox:disabled + .form-field__checkboxlabel::before,
        .form-field__radio:disabled + .form-field__radiolabel::before,
        .form-field__radio:disabled + .form-field__checkboxlabel::before,
        [type="radio"]:disabled + .form-field__radiolabel::before,
        [type="radio"]:disabled + .form-field__checkboxlabel::before,
        [type="checkbox"]:disabled + .form-field__radiolabel::before,
        [type="checkbox"]:disabled + .form-field__checkboxlabel::before {
          border-color: #b4b4b4; }
        .form-field__checkbox:disabled + .form-field__radiolabel:hover::before, .form-field__checkbox:disabled + .form-field__radiolabel:focus::before,
        .form-field__checkbox:disabled + .form-field__checkboxlabel:hover::before,
        .form-field__checkbox:disabled + .form-field__checkboxlabel:focus::before,
        .form-field__radio:disabled + .form-field__radiolabel:hover::before,
        .form-field__radio:disabled + .form-field__radiolabel:focus::before,
        .form-field__radio:disabled + .form-field__checkboxlabel:hover::before,
        .form-field__radio:disabled + .form-field__checkboxlabel:focus::before,
        [type="radio"]:disabled + .form-field__radiolabel:hover::before,
        [type="radio"]:disabled + .form-field__radiolabel:focus::before,
        [type="radio"]:disabled + .form-field__checkboxlabel:hover::before,
        [type="radio"]:disabled + .form-field__checkboxlabel:focus::before,
        [type="checkbox"]:disabled + .form-field__radiolabel:hover::before,
        [type="checkbox"]:disabled + .form-field__radiolabel:focus::before,
        [type="checkbox"]:disabled + .form-field__checkboxlabel:hover::before,
        [type="checkbox"]:disabled + .form-field__checkboxlabel:focus::before {
          box-shadow: none;
          border-color: inherit; } }

.form-field__radiolabel,
.form-field__checkboxlabel {
  position: relative;
  padding: 2px 0 1px 34px; }
  .form-field__radiolabel::before,
  .form-field__checkboxlabel::before {
    position: absolute;
    top: -4px;
    left: 0;
    border-radius: 50%;
    display: inline-block;
    width: 1.25rem;
    min-width: 1.25rem;
    height: 1.25rem;
    min-height: 1.25em;
    background-color: #ffffff;
    border: 0.063rem solid #767676;
    transform: translateY(0.25rem); }
    @media screen {
      .form-field__radiolabel::before,
      .form-field__checkboxlabel::before {
        content: ''; } }
  .form-field__radiolabel.form-field__checkboxlabel::before,
  .form-field__checkboxlabel.form-field__checkboxlabel::before {
    border-radius: 0;
    border-color: #000000; }
  .form-field__radiolabel:hover::before,
  .form-field__checkboxlabel:hover::before {
    box-shadow: inset 0 0 .063rem .063rem #000;
    border: 0.063rem solid #000000; }
  .form-field__radiolabel:focus::before,
  .form-field__checkboxlabel:focus::before {
    box-shadow: inset 0 0 .063rem .063rem #000;
    border: 0.063rem solid #000000;
    outline: .063rem dotted #212121;
    outline: .313rem auto -webkit-focus-ring-color; }
  .section--form--control .form-field--step-required.form-field--empty .form-field__radiolabel::before, .section--form--control .form-field--step-required.form-field--empty
  .form-field__checkboxlabel::before {
    border-color: #ec0000; }

.form-field--checkboxinput input {
  opacity: 0;
  height: 0;
  float: left;
  width: 0;
  margin: 0; }
  .form-field--checkboxinput input:checked + label::before {
    border-radius: 0;
    box-shadow: none;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAeCAYAAACv1gdQAAAAAXNSR0IArs4c6QAAAhRJREFUWAnNl7FOAkEQhrkgCQUFDZWVHXaUWooltlJLDw+AD8ADSE+vhY3aGVpLSzsrKxsLTUyMgt8YFpZldziO82CSPzs3M/vPjxy7Yy63BTYej3fBvaxbIGcmAUEV8ATEZK3Mshv0EFIGj8A2eS5vUFYuh4ASeLBVWb7ESxsRSOMiGFpifO5d5uJQUQC3PjVW7Au/kak4GubBlSXC534TbGYtLKLpwKfGio3wW5kKk2Y07VsiQm5HFcauY7UgQRLOXkiNFe+q1BR2J8V6ocoyn4Tv3BIQcnvzu5wndrWdnW2nZOVH+DoOp+/xQiVmxxmQl9G2tV5OiFrA5bT5xR+AKCiO5CmQn6/PEv2sIWqCHx+hFbvEzweFSYKCa2uDz13pQITgBMgezW5IFlRhE3FxrpJPyI6WkVFTB1Kr2ZBkcRnXNE+xdgmbRu84B9NNjkPuEHyY4sCa7EKHzDe+uD3eCNQcXfJq1IDkNFtvFILZHvxCjV5JVI1A/H0gMc3SGSLpICPzs9aJ3AvYm0B8zYQrvfEbMmkcp2msD2H+yqmtiKuCZV8XJUGb+/pTE2aIaBvnRfep8/5wDG9qK53liJBjJK6pR05qwgwRquIcriJeDuC62ZfZStMG0K6lla651IUjTi5035CQaED4D4HuKDRCcPZzf+iTIcYeIvW5P0QSI74To2ahJIqiPgL//iMXf6EgpcAvXpvfk0q44kUAAAAASUVORK5CYII=);
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: 12px 9px;
    background-color: #000000;
    border-color: #000000; }
  .form-field--checkboxinput input:checked + .form-field__checkboxlabel::before {
    border-radius: 0;
    box-shadow: none;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAeCAYAAACv1gdQAAAAAXNSR0IArs4c6QAAAhRJREFUWAnNl7FOAkEQhrkgCQUFDZWVHXaUWooltlJLDw+AD8ADSE+vhY3aGVpLSzsrKxsLTUyMgt8YFpZldziO82CSPzs3M/vPjxy7Yy63BTYej3fBvaxbIGcmAUEV8ATEZK3Mshv0EFIGj8A2eS5vUFYuh4ASeLBVWb7ESxsRSOMiGFpifO5d5uJQUQC3PjVW7Au/kak4GubBlSXC534TbGYtLKLpwKfGio3wW5kKk2Y07VsiQm5HFcauY7UgQRLOXkiNFe+q1BR2J8V6ocoyn4Tv3BIQcnvzu5wndrWdnW2nZOVH+DoOp+/xQiVmxxmQl9G2tV5OiFrA5bT5xR+AKCiO5CmQn6/PEv2sIWqCHx+hFbvEzweFSYKCa2uDz13pQITgBMgezW5IFlRhE3FxrpJPyI6WkVFTB1Kr2ZBkcRnXNE+xdgmbRu84B9NNjkPuEHyY4sCa7EKHzDe+uD3eCNQcXfJq1IDkNFtvFILZHvxCjV5JVI1A/H0gMc3SGSLpICPzs9aJ3AvYm0B8zYQrvfEbMmkcp2msD2H+yqmtiKuCZV8XJUGb+/pTE2aIaBvnRfep8/5wDG9qK53liJBjJK6pR05qwgwRquIcriJeDuC62ZfZStMG0K6lla651IUjTi5035CQaED4D4HuKDRCcPZzf+iTIcYeIvW5P0QSI74To2ahJIqiPgL//iMXf6EgpcAvXpvfk0q44kUAAAAASUVORK5CYII=);
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: 12px 9px;
    background-color: #000000;
    border-color: #000000; }
  .form-field--checkboxinput input:checked:focus + label::before {
    border: 0.063rem solid #000000; }
  .form-field--checkboxinput input:disabled + label,
  .form-field--checkboxinput input:disabled + label {
    color: #b4b4b4; }
    .form-field--checkboxinput input:disabled + label::before,
    .form-field--checkboxinput input:disabled + label::before {
      border-color: #b4b4b4; }
    .form-field--checkboxinput input:disabled + label:hover::before, .form-field--checkboxinput input:disabled + label:focus::before,
    .form-field--checkboxinput input:disabled + label:hover::before,
    .form-field--checkboxinput input:disabled + label:focus::before {
      box-shadow: none;
      border-color: inherit; }

.form-field--checkboxinput label {
  position: relative;
  padding: 1px 0 2px 34px; }
  .form-field--checkboxinput label::before {
    display: inline-block;
    position: absolute;
    top: -4px;
    left: 0;
    width: 1.25rem;
    min-width: 1.25rem;
    height: 1.25rem;
    min-height: 1.25em;
    background-color: #ffffff;
    border: 0.063rem solid #767676;
    content: '';
    transform: translateY(0.25rem); }
  .form-field--checkboxinput label:hover::after {
    box-shadow: inset 0 0 .063rem .063rem #000;
    border: 0.063rem solid #000000; }
  .form-field--checkboxinput label:focus::after {
    box-shadow: inset 0 0 .063rem .063rem #000;
    border: 0.063rem solid #000000;
    outline: .063rem dotted #212121;
    outline: .313rem auto -webkit-focus-ring-color; }

li:focus-within .form-field__radiolabel::before,
li:focus-within .form-field__checkboxlabel::before {
  box-shadow: inset 0 0 .063rem .063rem #000;
  border: 0.063rem solid #000000;
  outline: .063rem dotted #212121;
  outline: .313rem auto -webkit-focus-ring-color; }

.form-field__checkboxgroup li {
  display: flex; }

select {
  width: 100%;
  height: 2.5rem;
  font-size: 1rem;
  background-color: white;
  background-image: url("/static/images/chevron-down.svg");
  background-size: .75rem;
  -webkit-appearance: none;
  cursor: pointer;
  box-shadow: #767676 0 0 0 0.063rem inset;
  padding: 0 .75rem;
  border-width: 0;
  border-style: initial;
  border-color: initial;
  border-image: initial;
  border-radius: 0;
  background-position: calc(100% - .75rem) 50%;
  background-repeat: no-repeat;
  text-transform: none;
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  /* IE11 (hide native arrow button) */
  /* IE11 (hide native focus state) */
  /* Firefox (hide native focus state) */ }
  select::-ms-expand {
    display: none; }
  select::-ms-value {
    color: black;
    background: transparent; }
  select:-moz-focusring {
    color: transparent; }
  select:hover {
    box-shadow: black 0 0 0 0.063rem inset; }
  select:disabled {
    pointer-events: none;
    opacity: .5;
    box-shadow: #b4b4b4 0 0 0 0.063rem inset; }
  select[multiple] {
    border-color: transparent;
    height: auto;
    background: none;
    overflow: visible;
    padding: 10px; }

@media all and (-ms-high-contrast: none) {
  select {
    background-size: .875rem 1.25rem; } }

.form-field-history-container .form-field-history {
  margin: -1.5rem 0 3rem;
  font-size: .9rem;
  color: #767676;
  min-width: 4.375rem;
  max-width: 38.75rem; }
  .form-field-history-container .form-field-history details > .content {
    border: 0; }
    .form-field-history-container .form-field-history details > .content .text-link {
      margin: 0; }
    .form-field-history-container .form-field-history details > .content > span {
      display: inline-block;
      max-width: calc(100% - 40px); }
    .form-field-history-container .form-field-history details > .content details {
      margin: 0 0 .5rem; }
      .form-field-history-container .form-field-history details > .content details .content {
        border: 1px solid #767676; }

.form-field--selectdatewidget select {
  display: inline-block;
  width: auto;
  padding-right: 2.5rem;
  margin-right: .625rem; }

.form-field--checkboxselectmultipledocument ul {
  list-style: none;
  margin: 0;
  padding: 0; }
  .form-field--checkboxselectmultipledocument ul label {
    margin-bottom: .475rem;
    font-weight: normal; }
    .form-field--checkboxselectmultipledocument ul label:before {
      top: 0; }
    .form-field--checkboxselectmultipledocument ul label:after {
      content: "";
      display: table;
      clear: both; }
    .form-field--checkboxselectmultipledocument ul label div {
      line-height: 1.3rem;
      margin-top: 5px;
      float: left;
      display: flex;
      width: calc(100% - 34px);
      align-items: baseline; }
      .form-field--checkboxselectmultipledocument ul label div span {
        width: 50%; }
      .form-field--checkboxselectmultipledocument ul label div small {
        width: 15%; }
        .form-field--checkboxselectmultipledocument ul label div small:last-child {
          width: 35%; }

.form-field--checkboxselectmultipledocument label + ul {
  margin-top: .475rem; }

.section--step-required-fields {
  border: 2px solid #ec0000;
  padding: 15px;
  margin: 2rem 0; }
  .section--step-required-fields * {
    color: inherit; }
  .section--step-required-fields *:first-child {
    margin-top: 0; }

.form-field-error-message {
  margin: -1.5rem 0 2.5rem;
  color: #ec0000;
  display: none; }

.section--form--control .form-field--step-required.form-field--empty:not(.hide-animated) + .form-field-error-message {
  display: block; }

.form-navigation {
  align-items: center;
  background-color: #f5f5f5;
  display: flex;
  height: 64px;
  justify-content: space-between;
  padding: 0 16px;
  margin-top: 28px; }

table {
  width: 100%;
  border-spacing: 0;
  border-collapse: collapse;
  margin-top: .6;
  margin-bottom: 1rem;
  border-top: 0.125rem solid #e6e6e6;
  border-bottom: 0.125rem solid #e6e6e6; }

@media all and (max-width: 33.75rem) {
  thead {
    display: none; } }

thead th {
  font-weight: bold;
  padding: .6rem 1rem;
  text-align: left;
  vertical-align: top; }

tbody th,
tbody td {
  text-align: left;
  vertical-align: top;
  padding: 1rem; }
  @media all and (max-width: 33.75rem) {
    tbody th,
    tbody td {
      display: block;
      width: 100%;
      padding: 1rem 0 0; } }

tr {
  position: relative; }

tr:nth-of-type(even) {
  background-color: #e6e6e6; }

.table--interactive tr:nth-of-type(even) {
  background-color: transparent; }

.table--interactive thead th,
.table--interactive thead td {
  border-bottom: 0.063rem solid #e6e6e6; }

.table--interactive tbody tr:hover {
  background-color: #e6e6e6; }

.table--interactive tbody th,
.table--interactive tbody td {
  padding: 0;
  border-bottom: 1px solid #e6e6e6; }
  .table--interactive tbody th a,
  .table--interactive tbody td a {
    color: #000000;
    display: block;
    text-decoration: none;
    padding: .6rem 1rem; }
    .table--interactive tbody th a:hover, .table--interactive tbody th a:focus, .table--interactive tbody th a:active,
    .table--interactive tbody td a:hover,
    .table--interactive tbody td a:focus,
    .table--interactive tbody td a:active {
      color: #000000; }

table table {
  margin-bottom: 0; }
  table table tr:nth-of-type(even) {
    background-color: transparent; }

.case-list td,
.moment-list td {
  position: relative; }
  .case-list td:last-child,
  .moment-list td:last-child {
    margin-bottom: 1rem; }
    @media all and (min-width: 33.75rem) and (max-width: 1023px) {
      .case-list td:last-child,
      .moment-list td:last-child {
        overflow-wrap: break-word;
        word-break: break-word;
        margin-bottom: 0; } }

.case-list thead {
  border-bottom: 0.125rem solid #e6e6e6; }

.case-list td {
  max-width: 200px; }

.moment-list {
  border-collapse: collapse;
  border-top: 0; }
  .moment-list tr {
    position: relative;
    background-color: #f5f5f5;
    padding: 1rem 1rem 1rem 0; }
    .moment-list tr:last-child td:before {
      content: none; }
  .moment-list td {
    padding: 1.1rem 1rem 0; }
    @media all and (min-width: 33.75rem) {
      .moment-list td {
        padding: 1.1rem 0; } }
    .moment-list td:first-of-type {
      padding-left: 55px; }
      @media all and (min-width: 33.75rem) {
        .moment-list td:first-of-type:before {
          content: '';
          position: absolute;
          z-index: 2;
          left: 1.75rem;
          top: 1.25rem;
          bottom: -1.5rem;
          width: 2px;
          margin-left: -1px;
          background-color: #767676;
          pointer-events: none; } }
  .moment-list thead tr {
    display: table-row;
    background-color: transparent; }
  .moment-list tbody tr {
    border-bottom: 0.25rem solid #ffffff; }
    @media print {
      .moment-list tbody tr {
        border-bottom: 1px solid #767676; } }
  .moment-list .dot {
    display: block;
    position: absolute;
    top: 2rem;
    left: 1rem;
    transform: translateY(-0.75rem);
    z-index: 2; }
    @media all and (min-width: 33.75rem) {
      .moment-list .dot {
        top: 1.6rem; } }
  .moment-list .button--new-form {
    position: relative;
    margin-top: 1rem; }
    @media all and (min-width: 33.75rem) {
      .moment-list .button--new-form {
        position: absolute;
        left: 55px;
        bottom: 1rem; } }

.table--double-row tr:nth-of-type(even) {
  background-color: transparent; }

.table--condensed tbody th,
.table--condensed tbody td {
  padding: .5rem; }

@media print {
  body {
    font-family: amsterdam sans, Arial, Helvetica, sans-serif;
    font-size: 11pt;
    line-height: 1.3; }
  img {
    max-width: 31.25rem; }
  p a {
    word-wrap: break-word; }
  p a[href^="http://"]:after, a[href^="https://"]::after {
    content: " (" attr(href) ")"; }
  p a[href^="#"]::after,
  .container-button--feedback,
  .sr-only,
  .show-on-mobile {
    display: none; }
  h2 {
    margin-top: 4cm;
    margin-bottom: .5cm; }
  body {
    background: transparent; }
  .site-container {
    padding: 0;
    max-width: 100%; }
  .site-main {
    padding: 0 1cm;
    margin: 0;
    max-width: 100%;
    border: 0; }
  .sub-section {
    border: 0;
    background: #f5f5f5;
    page-break-inside: avoid; }
  .form-field {
    page-break-inside: avoid; }
  .form-field--clearablefileinput {
    color: transparent;
    font-size: 0; }
    .form-field--clearablefileinput a {
      font-size: 1rem;
      color: #000000;
      text-decoration: none; }
    .form-field--clearablefileinput a:before {
      content: "Bijgevoegde bestanden: ";
      font-weight: bold;
      display: block;
      color: #000000;
      margin-right: 1rem;
      margin-bottom: 10px;
      font-size: 1rem; }
    .form-field--clearablefileinput input, .form-field--clearablefileinput label {
      display: none; }
  #form-field-document_list input {
    display: none; }
    #form-field-document_list input + label {
      display: none; }
    #form-field-document_list input:checked {
      display: block; }
      #form-field-document_list input:checked + label {
        display: block; }
  table {
    page-break-inside: auto;
    border-collapse: none;
    border: 0 !important;
    width: 100%; }
  tr {
    page-break-inside: avoid;
    page-break-after: auto; }
  td {
    page-break-inside: avoid;
    page-break-after: auto; }
  thead {
    display: table-header-group; }
  tfoot {
    display: table-footer-group; }
  tr {
    background-color: #ffffff !important;
    border-bottom: 0; }
  td:first-child,
  th:first-child {
    border: 0 !important;
    padding-bottom: 0;
    padding-left: 0; }
  th:last-child,
  td:last-child {
    padding-right: 0;
    padding-left: 0;
    border: 0 !important; }
  @page {
    padding-top: 6cm;
    padding-bottom: 3cm;
    size: A4; }
  .print-logo {
    height: 2cm;
    width: auto; }
  .print-header {
    width: 100%;
    height: 4cm;
    padding-top: 1cm; } }

.section--login {
  display: none; }

#login {
  position: fixed;
  left: 0;
  top: 0;
  opacity: 0;
  pointer-events: none; }

#login:target ~ .section--login {
  display: block;
  border-bottom: 0.063rem solid #f5f5f5;
  margin-bottom: 2rem;
  padding-bottom: 2.5rem; }

.downloads {
  margin: 0;
  padding-left: 0; }
  @media all and (min-width: 33.75rem) {
    .downloads {
      -ms-flex-line-pack: start;
      align-content: flex-start;
      display: -ms-grid;
      display: grid;
      grid-gap: 1.687rem;
      -ms-grid-columns: 1fr 1.687rem 1fr 1.687rem 1fr;
      grid-template-columns: repeat(3, 1fr);
      -ms-grid-columns: 1fr 1.687rem 1fr [auto];
      grid-template-rows: auto;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between; } }
  @media all and (min-width: 64rem) {
    .downloads {
      grid-template-columns: repeat(5, 1fr); } }

.document {
  height: 100%;
  position: relative;
  list-style-type: none;
  margin-bottom: 1.5rem;
  border-right: .125rem solid transparent;
  border-bottom: .125rem solid transparent; }
  @media all and (min-width: 33.75rem) {
    .document {
      margin-bottom: 0;
      justify-content: space-between;
      display: flex;
      flex-direction: column;
      border-right: 0;
      border-bottom: 0; } }
  .document:hover, .document:focus {
    text-decoration: none;
    color: #000000;
    border-right: 0.125rem solid #ec0000;
    border-bottom: 0.125rem solid #ec0000; }
    @media all and (min-width: 33.75rem) {
      .document:hover, .document:focus {
        border-right: 0;
        border-bottom: 0; } }

@media all and (-ms-high-contrast: none) {
  .document {
    -ms-grid-column-span: 1;
    -ms-grid-row-span: 1;
    padding-bottom: 1.875rem; } }

@media all and (-ms-high-contrast: none) and (min-width: 33.75rem) and (max-width: 64rem) {
  .downloads {
    -ms-grid-columns: 1fr 2rem 1fr 2rem 1fr; }
  .document:nth-child(3n + 1) {
    -ms-grid-column: 1; }
  .document:nth-child(3n + 2) {
    -ms-grid-column: 3; }
  .document:nth-child(3n + 3) {
    -ms-grid-column: 5; }
  .document:nth-child(n+4):nth-child(-n+6) {
    -ms-grid-row: 3; }
  .document:nth-child(n+7):nth-child(-n+9) {
    -ms-grid-row: 5; }
  .document:nth-child(n+10):nth-child(-n+12) {
    -ms-grid-row: 7; }
  .document:nth-child(n+13):nth-child(-n+15) {
    -ms-grid-row: 9; }
  .document:nth-child(n+16):nth-child(-n+18) {
    -ms-grid-row: 11; }
  .document:nth-child(n+19):nth-child(-n+21) {
    -ms-grid-row: 13; }
  .document:nth-child(n+22):nth-child(-n+24) {
    -ms-grid-row: 15; } }

@media all and (-ms-high-contrast: none) and (min-width: 64rem) {
  .downloads {
    -ms-grid-columns: 1fr 2rem 1fr 2rem 1fr 2rem 1fr 2rem 1fr; }
  .document {
    -ms-grid-column-span: 1;
    -ms-grid-row-span: 1;
    padding-bottom: 2rem; }
  .document:nth-child(5n + 1) {
    -ms-grid-column: 1; }
  .document:nth-child(5n + 2) {
    -ms-grid-column: 3; }
  .document:nth-child(5n + 3) {
    -ms-grid-column: 5; }
  .document:nth-child(5n + 4) {
    -ms-grid-column: 7; }
  .document:nth-child(5n + 5) {
    -ms-grid-column: 9; }
  .document:nth-child(n+6):nth-child(-n+10) {
    -ms-grid-row: 3; }
  .document:nth-child(n+11):nth-child(-n+15) {
    -ms-grid-row: 5; }
  .document:nth-child(n+16):nth-child(-n+20) {
    -ms-grid-row: 7; }
  .document:nth-child(n+21):nth-child(-n+25) {
    -ms-grid-row: 9; }
  .document:nth-child(n+26):nth-child(-n+30) {
    -ms-grid-row: 11; }
  .document:nth-child(n+31):nth-child(-n+35) {
    -ms-grid-row: 13; }
  .document:nth-child(n+36):nth-child(-n+40) {
    -ms-grid-row: 15; } }

.document__header {
  text-decoration: none;
  flex: 1 1 auto;
  flex-direction: column;
  justify-content: flex-start;
  display: flex;
  align-content: flex-start;
  text-align: left; }
  @media screen and (min-width: 33.75rem) {
    .document__header {
      flex: 1 1 6rem;
      text-align: center;
      justify-content: center;
      width: 100%; } }
  .document__header + time {
    flex: 1 0 auto; }

.document__name {
  color: #000000;
  margin-bottom: 0;
  white-space: normal;
  font-size: .875rem;
  line-height: 1.2;
  margin-top: 0;
  margin-bottom: .25rem; }
  @media screen and (min-width: 33.75rem) {
    .document__name {
      margin-top: 1rem;
      display: -webkit-box;
      -webkit-line-clamp: 4;
      -webkit-box-orient: vertical;
      overflow: hidden;
      -ms-text-overflow: ellipsis;
      text-overflow: ellipsis;
      word-break: break-word;
      -webkit-hyphens: auto;
      -ms-hyphens: auto;
      hyphens: auto; } }

[data-document-type]:before {
  content: attr(data-document-type) " ";
  opacity: .5;
  display: block; }

.document__icon {
  display: none; }
  @media all and (min-width: 33.75rem) {
    .document__icon {
      display: block;
      flex: 0 02.5rem; } }

.document__icon--hover {
  display: none; }

@media all and (min-width: 33.75rem) {
  .document__info-wrapper {
    position: absolute;
    left: 100%;
    margin-left: 1rem;
    background-color: #ffffff;
    top: 0;
    z-index: 4;
    visibility: hidden;
    pointer-events: none;
    transition: all 0s linear .2s; }
    .document__info-wrapper:before {
      content: '';
      position: absolute;
      z-index: -1;
      left: -1rem;
      top: -1rem;
      right: -1rem;
      bottom: -1rem;
      background-color: rgba(255, 255, 255, 0); }
    .document__info-wrapper:hover, .document__info-wrapper:focus {
      visibility: visible; } }

.document__info {
  background-color: #f5f5f5;
  color: #000000;
  text-align: left;
  padding: 1rem;
  width: 100%; }
  .document__info ul {
    list-style-type: none;
    padding: 0;
    margin: 0; }
  .document__info li {
    display: block;
    margin-bottom: .5rem; }
    @media all and (min-width: 33.75rem) {
      .document__info li {
        margin-bottom: 1rem; } }
    .document__info li:last-child {
      margin-bottom: 0; }
  .document__info p:last-child {
    margin-bottom: 0; }
  @media all and (min-width: 33.75rem) {
    .document__info {
      width: 18.75rem;
      background-color: #ffffff;
      box-shadow: 0 0 0.313rem 0.125rem #b4b4b4; }
      .document__info li {
        display: inline-block;
        margin-right: .313rem;
        margin-bottom: 0; } }
  @media all and (min-width: 33.75rem) {
    .document__info {
      width: 31.25rem; } }

.document__version,
.document__new {
  color: #000000;
  background-color: #f5f5f5;
  padding: .5rem .5rem 0rem .5rem;
  position: relative;
  display: block;
  height: 100%; }
  @media all and (min-width: 33.75rem) {
    .document__version,
    .document__new {
      display: flex;
      flex-direction: column;
      text-align: center;
      align-items: center;
      justify-content: flex-start;
      padding: 1rem .5rem .5rem .5rem; } }
  .document__version, .document__version:visited,
  .document__new,
  .document__new:visited {
    border-right: .125rem solid transparent;
    border-bottom: .125rem solid transparent;
    text-decoration: none; }
  .document__version:hover, .document__version:focus,
  .document__new:hover,
  .document__new:focus {
    text-decoration: none;
    color: #000000; }
    @media all and (min-width: 33.75rem) {
      .document__version:hover, .document__version:focus,
      .document__new:hover,
      .document__new:focus {
        border-right: 0.125rem solid #ec0000;
        border-bottom: 0.125rem solid #ec0000; } }
    .document__version:hover .document__name, .document__version:focus .document__name,
    .document__new:hover .document__name,
    .document__new:focus .document__name {
      text-decoration: underline; }
    .document__version:hover .document__icon--default, .document__version:focus .document__icon--default,
    .document__new:hover .document__icon--default,
    .document__new:focus .document__icon--default {
      display: none; }
    @media all and (min-width: 33.75rem) {
      .document__version:hover .document__icon--hover, .document__version:focus .document__icon--hover,
      .document__new:hover .document__icon--hover,
      .document__new:focus .document__icon--hover {
        display: flex; } }
  .document__version > :last-child,
  .document__new > :last-child {
    margin-bottom: 0; }

.document:hover,
.document:focus {
  z-index: 2; }
  .document:hover .document__info-wrapper,
  .document:focus .document__info-wrapper {
    pointer-events: auto;
    visibility: visible; }
  @media all and (min-width: 33.75rem) and (max-width: 64rem) {
    .document:hover:nth-child(3n + 3) .document__info-wrapper,
    .document:focus:nth-child(3n + 3) .document__info-wrapper {
      left: auto;
      right: 100%; } }
  @media all and (min-width: 64rem) {
    .document:hover:nth-child(5n + 3) .document__info-wrapper, .document:hover:nth-child(5n + 4) .document__info-wrapper, .document:hover:nth-child(5n + 5) .document__info-wrapper,
    .document:focus:nth-child(5n + 3) .document__info-wrapper,
    .document:focus:nth-child(5n + 4) .document__info-wrapper,
    .document:focus:nth-child(5n + 5) .document__info-wrapper {
      left: auto;
      right: 100%; } }

.document:focus-within .document__info-wrapper {
  visibility: visible;
  pointer-events: auto; }

@media all and (min-width: 33.75rem) and (max-width: 64rem) {
  .document:focus-within:nth-child(3n + 3) .document__info-wrapper {
    left: auto;
    right: 100%; } }

@media all and (min-width: 64rem) {
  .document:focus-within:nth-child(5n + 3) .document__info-wrapper, .document:focus-within:nth-child(5n + 4) .document__info-wrapper, .document:focus-within:nth-child(5n + 5) .document__info-wrapper {
    left: auto;
    right: 100%; } }

.document--add {
  background: transparent; }

.document__new {
  justify-content: space-between;
  height: 100%; }

.document__change {
  margin-top: .5rem;
  margin-bottom: 0; }

.details-list-wrapper {
  position: relative; }
  .details-list-wrapper .modal-bg {
    display: none;
    z-index: 1;
    position: fixed;
    left: 0;
    top: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5); }

.details-list-wrapper--edit .details-wrapper {
  pointer-events: none; }

.details-list-wrapper--edit .details-wrapper--edit {
  pointer-events: auto; }

.details-list-wrapper--edit .change-order {
  display: none; }

.details-list-wrapper--edit .modal-bg {
  display: block; }

.dot {
  content: ' ';
  border-radius: 50%;
  display: inline-block;
  text-align: center;
  color: #ffffff;
  pointer-events: none; }

.dot--large {
  background-color: #767676;
  width: 0.75rem;
  height: 0.75rem;
  left: 1rem;
  top: 1.25rem; }
  @media all and (min-width: 33.75rem) {
    .dot--large {
      width: 1.5rem;
      height: 1.5rem;
      line-height: 1.5rem;
      font-size: 1rem;
      left: 1rem;
      top: .9rem; } }

.dot--small {
  background-color: #767676;
  width: 1rem;
  height: 1rem;
  line-height: 1rem;
  font-size: .8rem;
  left: calc( 0.9375rem + 0.094rem + 0.25rem);
  top: calc( 0.75rem + 0.25rem); }

.dot--blue {
  background-color: #004699; }

.dot-wrapper {
  position: relative; }

.details-wrapper {
  position: relative;
  margin-bottom: .25rem; }
  .details-wrapper .dot {
    display: block;
    position: absolute;
    z-index: 2; }
  .details-wrapper:before {
    content: '';
    position: absolute;
    z-index: 2;
    left: 1.375rem;
    top: 1.25rem;
    bottom: -1.5rem;
    width: 2px;
    margin-left: -1px;
    background-color: #767676;
    pointer-events: none; }
    @media all and (min-width: 33.75rem) {
      .details-wrapper:before {
        left: 1.75rem; } }
  .details-wrapper:last-child:before {
    bottom: 1.5rem; }

.details {
  border-top: 0;
  border-bottom: 0;
  display: block; }
  .details:hover, .details:focus, .details:active {
    background-color: #f5f5f5;
    position: relative; }

.details__header-opened {
  display: none; }

.details[open] {
  background-color: #f5f5f5; }
  .details[open] .details__header {
    background-color: #f5f5f5;
    font-size: inherit; }
    .details[open] .details__header .tag-list {
      opacity: 1;
      pointer-events: auto; }
  .details[open] .details__header-closed {
    display: none; }
  .details[open] .details__header-opened {
    display: inline-block; }
  .details[open] .details__content {
    padding-top: 1rem;
    padding-bottom: 1rem;
    max-height: 2000px;
    opacity: 1; }

.details__header {
  font-weight: bold;
  border: 0;
  width: 100%;
  position: relative;
  -webkit-appearance: none;
  list-style-image: none; }
  .details__header::-webkit-details-marker {
    display: none;
    color: transparent;
    font-size: 0; }
  .details__header::marker {
    display: none;
    color: transparent;
    font-size: 0; }
  .details__header > p {
    margin: 0; }
  .details__header:hover, .details__header:active {
    background-color: #f5f5f5; }
    .details__header:hover + .details__content, .details__header:active + .details__content {
      background-color: #f5f5f5; }
  .details__header:focus {
    outline: none; }
  .details__header:active {
    background-color: #f5f5f5;
    outline: none; }
  .details__header .tag-list {
    display: none;
    font-size: 0;
    transition: all .4s; }
    @media all and (min-width: 33.75rem) {
      .details__header .tag-list {
        margin: 0;
        display: inline-block;
        position: absolute;
        right: .625rem;
        top: 1rem; } }

.details input {
  margin-top: 0; }

.details-admin {
  margin-bottom: 1rem; }
  @media all and (min-width: 33.75rem) {
    .details-admin {
      text-align: right; } }
  .details-admin a {
    margin-bottom: .5rem; }
    @media all and (min-width: 33.75rem) {
      .details-admin a {
        margin-bottom: 0; } }

.change-order {
  margin-left: auto;
  text-align: right;
  float: right; }
  .change-order .button {
    display: inline-block;
    color: #004699;
    margin-right: .5rem;
    padding-top: 0;
    padding-bottom: 0; }
    .change-order .button:hover, .change-order .button:active {
      color: #ec0000;
      box-shadow: none; }

.details__header:hover,
.details__title:hover,
.details__toggle-icon:hover {
  cursor: pointer; }

.details__title {
  display: inline;
  margin: 0;
  position: relative;
  font-size: 1rem;
  line-height: 1.15rem; }

@media all and (max-width: 33.75rem) {
  .details__title {
    display: block;
    padding-right: calc(20px + .5rem); }
  .details__toggle-icon {
    position: absolute;
    top: 1.375rem;
    right: 1rem;
    width: 20px;
    display: inline-block;
    vertical-align: top; } }

.details__title__link {
  color: #000000;
  text-decoration: none; }
  .details__title__link:hover {
    text-decoration: underline; }

.details__toggle-icon {
  display: inline-block;
  margin-left: .5rem;
  pointer-events: none; }

.details__header,
.details__content {
  padding: 1rem 1rem 1rem 2.875rem; }
  @media all and (min-width: 33.75rem) {
    .details__header,
    .details__content {
      padding: 1rem 1rem 1rem 3.875rem; } }

.details__header {
  font-size: 0; }

.details__content {
  background-color: #f5f5f5;
  max-height: 0;
  opacity: 0;
  padding: 0 1rem 0 2.875rem;
  transition: max-height .2s linear, opacity .2s linear .2s; }
  @media all and (min-width: 33.75rem) {
    .details__content {
      padding: 0 1rem 0 3.875rem; } }

.section--timeline .downloads {
  padding-bottom: 0; }

.section--timeline .document__version, .section--timeline .document__version:visited,
.section--timeline .document__new,
.section--timeline .document__new:visited {
  background-color: #ffffff; }

.section--timeline .document:only-child,
.section--timeline .document:last-of-type {
  margin-bottom: 0; }

.section--timeline .document__change {
  border-top: .5rem solid transparent;
  margin: 0; }

.section--timeline .document__info {
  background-color: #ffffff;
  border-bottom: 1px solid #b4b4b4;
  border-left: 1px solid #b4b4b4;
  border-right: 1px solid #b4b4b4; }
  @media all and (min-width: 33.75rem) {
    .section--timeline .document__info {
      border: 0; } }

.details-wrapper .alert-container {
  position: absolute;
  top: -2.75rem;
  height: 2.75rem;
  display: block;
  z-index: 100;
  width: 100%;
  left: 0;
  opacity: 0;
  pointer-events: none; }

.details-wrapper .alert {
  color: #ffffff;
  padding: .188rem .438rem;
  opacity: 0;
  transition: opacity .4s linear;
  height: 100%;
  position: absolute;
  top: 0;
  animation: none;
  padding-left: 1.875rem; }
  .details-wrapper .alert .alert__icon {
    transform: translateX(-50%); }

.details-wrapper .alert--saving,
.details-wrapper .alert--saved,
.details-wrapper .alert--error {
  opacity: 0;
  pointer-events: none; }

.details-wrapper.moment--saving .alert-container {
  opacity: 1;
  pointer-events: all; }

.details-wrapper.moment--saving .alert--saving {
  background-color: #004699;
  opacity: 1;
  pointer-events: all;
  transition: opacity .4s linear; }

.details-wrapper.moment--saved .alert-container {
  opacity: 1;
  pointer-events: all; }

.details-wrapper.moment--saved .alert--saved {
  background-color: #00a03c;
  opacity: 1;
  transition: opacity .4s linear; }

.details-wrapper.moment--error .alert-container {
  opacity: 1;
  pointer-events: all; }

.details-wrapper.moment--error .alert--error {
  background-color: #ec0000;
  opacity: 1;
  pointer-events: all;
  transition: opacity .4s linear; }

.details:hover + .new-moment__add .dot {
  display: block;
  background-color: #ffffff;
  border: 0.125rem #767676 solid; }

.details:hover + .new-moment__add .details__header-closed {
  color: #767676;
  fill: currentColor; }

.details:hover + .new-moment__add .new-moment__line {
  background-color: #767676; }

.details:hover + .new-moment__add .button {
  z-index: 5;
  visibility: visible;
  opacity: 1;
  box-shadow: none; }

.details-wrapper:nth-child(2) .change-order [data-handler="moment-up"] {
  display: none; }

.details-wrapper:last-child .change-order [data-handler="moment-down"] {
  display: none; }

.details-wrapper [data-handler="exit-new-moment"] {
  display: none; }

.details-wrapper [data-edit-mode] {
  display: none; }

.details-wrapper--edit {
  z-index: 1000;
  margin-bottom: 0; }
  .details-wrapper--edit [data-edit-mode] {
    display: block; }
  .details-wrapper--edit [data-static-mode] {
    display: none; }
  .details-wrapper--edit .details__toggle-icon {
    display: none; }
  .details-wrapper--edit .new-moment__add {
    pointer-events: none;
    opacity: 0;
    height: 0; }
  .details-wrapper--edit .details__header {
    padding-bottom: 0; }

.details-wrapper--new-moment {
  margin: 1rem 0; }
  .details-wrapper--new-moment fieldset {
    display: block; }
  .details-wrapper--new-moment [data-handler="exit-edit-moment"] {
    display: none; }
  .details-wrapper--new-moment [data-handler="exit-new-moment"] {
    display: inline-block; }
  .details-wrapper--new-moment .dot--large {
    background-color: #004699; }
  .details-wrapper--new-moment .details__toggle-icon {
    display: none; }
  .details-wrapper--new-moment [data-handler="exit-new-moment"] {
    display: inline-block; }

.new-moment__add {
  display: flex;
  align-items: center;
  height: 2.5rem;
  width: 100%;
  max-width: 100%;
  border-radius: 0;
  font-family: inherit;
  font-size: inherit;
  border: 0;
  box-sizing: content-box;
  cursor: pointer;
  font-weight: bold;
  margin: 0;
  padding: 0;
  text-decoration: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: none;
  position: relative;
  outline: none; }
  .new-moment__add .dot {
    top: .5rem;
    display: none; }
  .new-moment__add .details__header-closed {
    color: #ffffff;
    fill: currentColor;
    margin-top: .125rem; }
  .new-moment__add .new-moment__line {
    background-color: #e6e6e6;
    height: .125rem;
    width: 100%; }
  .new-moment__add .button {
    visibility: hidden;
    opacity: 0;
    background-color: #004699;
    width: 1.5rem;
    height: 1.5rem;
    min-width: auto;
    left: 1.063rem;
    top: 1.063rem;
    position: absolute;
    padding: 0;
    display: flex;
    align-items: center; }
  .new-moment__add:disabled {
    opacity: 0;
    pointer-events: none; }
    .new-moment__add:disabled .new-moment__line,
    .new-moment__add:disabled .button {
      background-color: #b4b4b4; }
    .new-moment__add:disabled .button {
      visibility: visible;
      opacity: 1;
      z-index: 5; }
      .new-moment__add:disabled .button:hover, .new-moment__add:disabled .button:active {
        box-shadow: none; }
  .new-moment__add:not(:disabled):hover .dot, .new-moment__add:not(:disabled):active .dot {
    display: block;
    background-color: #004699;
    border: none; }
  .new-moment__add:not(:disabled):hover .new-moment__line, .new-moment__add:not(:disabled):active .new-moment__line {
    background-color: #004699; }
  .new-moment__add:not(:disabled):hover .details__header-closed, .new-moment__add:not(:disabled):active .details__header-closed {
    color: #ffffff;
    fill: currentColor;
    margin-top: .25rem; }
  .new-moment__add:not(:disabled):hover .button, .new-moment__add:not(:disabled):active .button {
    z-index: 5;
    visibility: visible;
    opacity: 1;
    box-shadow: none; }

.no-js [disabled="disabled"] {
  display: none; }

.no-js .details__title,
.no-js .change-order,
.no-js .details__toggle-icon {
  display: none; }

.no-js .details-wrapper--new-moment {
  display: block !important; }

.organisation-list {
  width: 100%;
  border-spacing: 0;
  border-collapse: collapse;
  margin-top: 3rem;
  border-bottom: 0; }
  .organisation-list th {
    text-align: left; }
  .organisation-list td:last-of-type {
    width: 2.5rem;
    text-align: center; }
  .organisation-list [type="password"], .organisation-list [type="text"], .organisation-list [type="email"], .organisation-list [type="number"], .organisation-list select, .organisation-list textarea {
    margin-top: 0; }

.organisation {
  width: 100%; }
  .organisation .form-field label {
    display: none; }
  .organisation:last-of-type td {
    padding-top: 3rem;
    padding-bottom: 2rem; }
  .organisation .form-field--delete {
    vertical-align: middle; }
    .organisation .form-field--delete label {
      display: block; }

.section--client .section-details-client {
  margin-bottom: 3.75rem; }
  .section--client .section-details-client .downloads {
    display: block; }
  .section--client .section-details-client--vertical .downloads {
    max-width: 600px; }
  .section--client .section-details-client summary {
    font-size: .9rem; }
    .section--client .section-details-client summary svg {
      margin-left: 0.25rem !important; }

.section--client .details-client header > *:not(:first-child) {
  display: inline-block;
  margin-left: 1rem; }

.section--client .details-client h2 {
  display: inline-block; }
  .section--client .details-client h2 small {
    font-weight: normal; }

.section--client .details-client ul {
  list-style: none;
  margin-bottom: 1rem; }
  .section--client .details-client ul li {
    margin-bottom: .625rem; }

.section--client .details-client dl {
  margin-top: 0; }
  .section--client .details-client dl div {
    display: flex;
    padding: 0 .938rem .475rem;
    border-left: 1px solid #f5f5f5;
    border-right: 1px solid #f5f5f5;
    border-bottom: 1px solid #f5f5f5;
    margin-bottom: 0; }
    .section--client .details-client dl div:nth-of-type(odd) {
      background-color: #f5f5f5; }
    .section--client .details-client dl div dt, .section--client .details-client dl div dd {
      flex: 1;
      margin: 0; }
    .section--client .details-client dl div dt {
      font-weight: bold;
      flex-basis: 47%; }
    .section--client .details-client dl div dd {
      flex-basis: 53%; }
  .section--client .details-client dl + .h3 {
    margin-top: 0; }

.section--client .details-client--status svg {
  vertical-align: text-top; }

.section--client .details-client--status .status-container,
.section--client .details-client--status .status-history-container {
  z-index: 5; }
  .section--client .details-client--status .status-container .icon-circle,
  .section--client .details-client--status .status-history-container .icon-circle {
    margin-right: 3px; }
  .section--client .details-client--status .status-container .status,
  .section--client .details-client--status .status-history-container .status {
    vertical-align: text-top;
    font-weight: bold; }
  .section--client .details-client--status .status-container .facts:after,
  .section--client .details-client--status .status-history-container .facts:after {
    content: "";
    display: table;
    clear: both; }
  .section--client .details-client--status .status-container .facts p,
  .section--client .details-client--status .status-history-container .facts p {
    font-style: italic;
    font-size: smaller;
    margin: .25rem 0; }
  .section--client .details-client--status .status-container small:not(.label),
  .section--client .details-client--status .status-history-container small:not(.label) {
    color: #767676; }
  .section--client .details-client--status .status-container.form-field-history,
  .section--client .details-client--status .status-history-container.form-field-history {
    margin: 0;
    position: relative; }

.section--client .details-client--status .status--wrapper {
  border: 1px solid #b4b4b4;
  background-color: #ffffff;
  padding: 1rem; }
  .section--client .details-client--status .status--wrapper .h3 {
    font-weight: bold; }

.section--client .details-client--basic dl div {
  border: 0;
  background-color: transparent;
  padding-left: 0; }
  .section--client .details-client--basic dl div:nth-of-type(odd) {
    background-color: transparent; }

.section--client .details-client--appendix .downloads li {
  display: flex;
  justify-content: space-between; }
  .section--client .details-client--appendix .downloads li > div {
    display: flex;
    text-align: right; }
    .section--client .details-client--appendix .downloads li > div:first-of-type {
      width: 90%;
      text-align: left; }
      .section--client .details-client--appendix .downloads li > div:first-of-type a {
        width: 50%;
        padding-right: 10px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap; }
      .section--client .details-client--appendix .downloads li > div:first-of-type span {
        width: 20%; }
        .section--client .details-client--appendix .downloads li > div:first-of-type span:last-child {
          width: 30%; }

.section--client .details-client--address dl div {
  border: 0;
  padding-left: 0; }
  .section--client .details-client--address dl div:nth-of-type(odd) {
    background-color: transparent; }

.section--client .details-client .sub-section--readonly dl div {
  padding: 0 .938rem; }
  .section--client .details-client .sub-section--readonly dl div dt, .section--client .details-client .sub-section--readonly dl div dd {
    padding: .25rem 0; }
  .section--client .details-client .sub-section--readonly dl div dt {
    font-weight: 500; }

.section--client .section--forms .tab-container {
  border-bottom: 1px solid #f5f5f5; }
  .section--client .section--forms .tab-container .button--tertiary {
    background-color: transparent;
    border-color: #f5f5f5; }
    .section--client .section--forms .tab-container .button--tertiary.selected, .section--client .section--forms .tab-container .button--tertiary:hover {
      background-color: #f5f5f5; }
  .section--client .section--forms .tab-container + ul {
    margin-top: 0; }

.section--client .section--forms > ul {
  list-style: none;
  margin-top: 1rem;
  padding-left: 0; }
  .section--client .section--forms > ul li {
    position: relative;
    background-color: #f5f5f5;
    padding: 1rem 1rem 1rem 3.875rem;
    margin-bottom: .25rem; }
    .section--client .section--forms > ul li:after {
      content: "";
      display: table;
      clear: both; }
    .section--client .section--forms > ul li:not(:last-child):before {
      content: '';
      position: absolute;
      z-index: 2;
      left: 1.75rem;
      top: 1.25rem;
      bottom: -1.5rem;
      width: 2px;
      margin-left: -1px;
      background-color: #767676;
      pointer-events: none; }
    .section--client .section--forms > ul li .strong {
      margin-bottom: 1rem; }
    .section--client .section--forms > ul li .dot {
      display: block;
      position: absolute;
      top: 50%;
      left: 1rem;
      transform: translateY(-0.75rem);
      z-index: 2; }
    .section--client .section--forms > ul li .form-link {
      float: right;
      margin-left: 1rem; }
    .section--client .section--forms > ul li [role="button"] {
      text-decoration: none; }
    .section--client .section--forms > ul li .form-link--statuscontainer {
      display: inline; }
    .section--client .section--forms > ul li .form-link--added {
      display: inline-block;
      margin-right: 30px; }

.section--client .client-header details,
.section--client .form-field-history details,
.section--client .details-client--address details {
  margin: .25rem 0 0;
  position: relative;
  z-index: 10; }
  .section--client .client-header details .icon-details--open,
  .section--client .form-field-history details .icon-details--open,
  .section--client .details-client--address details .icon-details--open {
    display: none; }
  .section--client .client-header details .icon-details--closed,
  .section--client .form-field-history details .icon-details--closed,
  .section--client .details-client--address details .icon-details--closed {
    display: inline; }
  .section--client .client-header details[open] .icon-details--closed,
  .section--client .form-field-history details[open] .icon-details--closed,
  .section--client .details-client--address details[open] .icon-details--closed {
    display: none; }
  .section--client .client-header details[open] .icon-details--open,
  .section--client .form-field-history details[open] .icon-details--open,
  .section--client .details-client--address details[open] .icon-details--open {
    display: inline; }
  .section--client .client-header details > summary,
  .section--client .form-field-history details > summary,
  .section--client .details-client--address details > summary {
    list-style: none;
    text-align: right; }
    .section--client .client-header details > summary small,
    .section--client .form-field-history details > summary small,
    .section--client .details-client--address details > summary small {
      font-size: .8rem; }
    .section--client .client-header details > summary::-webkit-details-marker,
    .section--client .form-field-history details > summary::-webkit-details-marker,
    .section--client .details-client--address details > summary::-webkit-details-marker {
      display: none; }
  .section--client .client-header details > .content,
  .section--client .form-field-history details > .content,
  .section--client .details-client--address details > .content {
    margin: 3px 0 20px;
    padding: 8px 10px 10px;
    border: 1px solid #767676; }
    .section--client .client-header details > .content *:last-child,
    .section--client .form-field-history details > .content *:last-child,
    .section--client .details-client--address details > .content *:last-child {
      margin-bottom: 0; }
    .section--client .client-header details > .content .button--close,
    .section--client .form-field-history details > .content .button--close,
    .section--client .details-client--address details > .content .button--close {
      position: absolute;
      top: 0;
      right: 0;
      padding: .475rem;
      min-width: 0; }
      .section--client .client-header details > .content .button--close .close__icon,
      .section--client .form-field-history details > .content .button--close .close__icon,
      .section--client .details-client--address details > .content .button--close .close__icon {
        color: #000000; }
  .section--client .client-header details summary,
  .section--client .form-field-history details summary,
  .section--client .details-client--address details summary {
    outline: 0;
    color: #004699;
    text-decoration: underline;
    font-weight: bold;
    cursor: pointer; }
    .section--client .client-header details summary svg,
    .section--client .form-field-history details summary svg,
    .section--client .details-client--address details summary svg {
      vertical-align: baseline;
      margin-left: .5rem;
      color: #000000; }
  .section--client .client-header details[open] .content,
  .section--client .form-field-history details[open] .content,
  .section--client .details-client--address details[open] .content {
    position: absolute;
    top: 24px;
    left: -10px;
    width: calc(100% + 20px);
    background-color: #ffffff;
    border-color: #e6e6e6;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);
    padding: 1.5rem 0 0 0; }
  .section--client .client-header details[open].container--tool .content,
  .section--client .form-field-history details[open].container--tool .content,
  .section--client .details-client--address details[open].container--tool .content {
    top: 34px; }
  .section--client .client-header details ul,
  .section--client .form-field-history details ul,
  .section--client .details-client--address details ul {
    padding: 0; }
    .section--client .client-header details ul li,
    .section--client .form-field-history details ul li,
    .section--client .details-client--address details ul li {
      padding: .475rem;
      margin: 0;
      border-bottom: 1px solid #e6e6e6; }

.section--client .client-header {
  padding: .5rem 0;
  margin-bottom: .5rem;
  border-bottom: 2px solid #e6e6e6;
  border-top: 2px solid #e6e6e6; }
  .section--client .client-header h1 {
    line-height: 45px; }
  .section--client .client-header > *:last-child {
    text-align: right; }
  .section--client .client-header summary {
    margin-left: 1rem; }
  .section--client .client-header details {
    float: right;
    margin-top: 0.9rem; }
    .section--client .client-header details[open] .content {
      width: 300px;
      max-width: 90vw;
      left: auto;
      right: 0;
      text-align: left; }

@media all and (min-width: 33.75rem) {
  .section--client .section-details-client:not(.section-details-client--vertical) {
    display: flex; }
    .section--client .section-details-client:not(.section-details-client--vertical) .details-client {
      flex: 1; } }

.section--mijn-clienten .tab-list-container .tab-list,
.status-history-container .tab-list-container .tab-list {
  margin-bottom: -2px; }

.section--mijn-clienten .tab-list-container .list-label span,
.status-history-container .tab-list-container .list-label span {
  font-weight: bold;
  padding: .75rem .938rem .5rem 2rem;
  vertical-align: middle; }

.section--mijn-clienten .tab-list-container li,
.status-history-container .tab-list-container li {
  display: inline; }

.section--mijn-clienten .tab-list-container .button--tertiary,
.status-history-container .tab-list-container .button--tertiary {
  background-color: #f5f5f5;
  border: 2px solid #f5f5f5;
  border-bottom: 2px solid #e6e6e6;
  font-weight: normal; }
  .section--mijn-clienten .tab-list-container .button--tertiary:hover,
  .status-history-container .tab-list-container .button--tertiary:hover {
    background-color: #ffffff;
    text-shadow: 0 0 .65px #000, 0 0 .65px #000; }

.section--mijn-clienten .tab-list-container .tab,
.status-history-container .tab-list-container .tab {
  margin-right: 0.25rem; }
  .section--mijn-clienten .tab-list-container .tab.selected .button--tertiary,
  .status-history-container .tab-list-container .tab.selected .button--tertiary {
    background-color: #ffffff;
    border-bottom: 2px solid #ffffff;
    text-shadow: 0 0 .65px #000, 0 0 .65px #000; }

.section--mijn-clienten .label,
.status-history-container .label {
  display: inline-block;
  padding: 5px;
  margin: -5px;
  min-width: 125px;
  text-align: center;
  font-size: .9rem; }
  .section--mijn-clienten .label--status-approved,
  .status-history-container .label--status-approved {
    background-color: #00a03c;
    color: #ffffff; }
  .section--mijn-clienten .label--status-disapproved,
  .status-history-container .label--status-disapproved {
    background-color: #ec0000;
    color: #ffffff; }
  .section--mijn-clienten .label--status-pending,
  .status-history-container .label--status-pending {
    background-color: #ff9100;
    color: #000000; }

.section--mijn-clienten .client-inactive .label--status-approved, .section--mijn-clienten .client-inactive .label--status-disapproved, .section--mijn-clienten .client-inactive .label--status-pending,
.status-history-container .client-inactive .label--status-approved,
.status-history-container .client-inactive .label--status-disapproved,
.status-history-container .client-inactive .label--status-pending {
  background-color: #f5f5f5; }

.icon-circle {
  display: inline-block;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  color: #ffffff;
  text-align: center; }
  .icon-circle .icon {
    color: #ffffff;
    vertical-align: initial !important;
    margin-top: 4px;
    transform: scale(0.75); }
  .icon-circle--status-approved {
    background-color: #00a03c; }
  .icon-circle--status-disapproved {
    background-color: #ec0000; }
    .icon-circle--status-disapproved .icon {
      margin-top: 5px; }
  .icon-circle--status-pending {
    background-color: #ff9100; }

.client-inactive {
  color: #b4b4b4; }
  .client-inactive *:not(.show-active) {
    color: inherit; }

.case-number label {
  display: inline-block;
  margin-right: .5rem; }

.case-number input {
  width: 135px;
  margin-top: 0; }

.case-number button {
  vertical-align: baseline !important; }

.list-inline {
  list-style: none;
  padding: 0;
  margin: 0; }
  .list-inline li {
    display: inline-block;
    margin-right: 2rem;
    font-weight: bold; }
    .list-inline li a {
      color: #000000; }

.list--tools {
  margin-top: 2.6rem;
  font-size: .9rem; }
  .list--tools li {
    margin-bottom: .5rem;
    text-align: right; }
    .list--tools li > * {
      color: #004699;
      text-decoration: underline;
      font-weight: normal;
      cursor: pointer;
      padding-right: 30px;
      position: relative;
      text-align: right; }
      .list--tools li > *:hover {
        text-decoration: none; }
    .list--tools li svg {
      position: absolute;
      top: 0;
      right: 0;
      fill: currentColor; }
    .list--tools li .print__icon {
      transform: scale(0.7);
      right: -2px; }
    .list--tools li .text-link {
      padding: 0 30px 0 0;
      margin: 0;
      text-align: right; }

.tool--email {
  color: #004699;
  text-align: center; }
  .tool--email > * {
    display: block; }
  .client-header details summary .tool--email svg {
    color: currentColor; }

.js-spinner-container {
  display: none; }
  @media screen {
    .js-spinner-container {
      display: block;
      position: fixed;
      top: -1000px;
      left: 0;
      right: 0;
      z-index: 2000;
      padding: 4rem;
      background-color: rgba(255, 255, 255, 0.75); }
      .js-spinner-container .js-spinner {
        position: relative;
        color: #004699;
        font-size: 11px;
        text-indent: -99999em;
        margin: 0 auto;
        width: 4em;
        height: 4em;
        box-shadow: inset 0 0 0 .5em;
        transform: translateZ(0);
        z-index: 500;
        border-radius: 50%;
        transform: translateY(40vh); }
      .show-loading .js-spinner-container {
        top: 0;
        bottom: 0; }
        .show-loading .js-spinner-container .js-spinner:before, .show-loading .js-spinner-container .js-spinner:after {
          position: absolute;
          content: '';
          border-radius: 50%;
          width: 2.2em;
          height: 4.4em;
          background: #ffffff;
          top: -0.2em; }
        .show-loading .js-spinner-container .js-spinner:before {
          border-radius: 4.4em 0 0 4.4em;
          left: -0.1em;
          transform-origin: 2.2em 2.2em;
          animation: load2 2s infinite ease 1.5s; }
        .show-loading .js-spinner-container .js-spinner:after {
          border-radius: 0 4.4em 4.4em 0;
          left: 2em;
          transform-origin: 0.1em 2.2em;
          animation: load2 2s infinite ease; }
    @-webkit-keyframes load2 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg); }
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg); } }
    @keyframes load2 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg); }
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg); } } }

.js-spinner-container {
  position: fixed;
  top: -1000px;
  left: 0;
  right: 0;
  z-index: 2000;
  padding: 4rem;
  background-color: rgba(255, 255, 255, 0.75); }
  .js-spinner-container .js-spinner {
    position: relative;
    color: #004699;
    font-size: 11px;
    text-indent: -99999em;
    margin: 0 auto;
    width: 4em;
    height: 4em;
    box-shadow: inset 0 0 0 .5em;
    transform: translateZ(0);
    z-index: 500;
    border-radius: 50%;
    transform: translateY(40vh); }
  .show-loading .js-spinner-container {
    top: 0;
    bottom: 0; }
    .show-loading .js-spinner-container .js-spinner:before, .show-loading .js-spinner-container .js-spinner:after {
      position: absolute;
      content: '';
      border-radius: 50%;
      width: 2.2em;
      height: 4.4em;
      background: #ffffff;
      top: -0.2em; }
    .show-loading .js-spinner-container .js-spinner:before {
      border-radius: 4.4em 0 0 4.4em;
      left: -0.1em;
      transform-origin: 2.2em 2.2em;
      animation: load2 2s infinite ease 1.5s; }
    .show-loading .js-spinner-container .js-spinner:after {
      border-radius: 0 4.4em 4.4em 0;
      left: 2em;
      transform-origin: 0.1em 2.2em;
      animation: load2 2s infinite ease; }

@-webkit-keyframes load2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes load2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

.button-as-link {
  background: none;
  border: none;
  padding: 0;
  font: inherit;
  text-align: left;
  color: inherit;
  text-decoration: underline;
  cursor: pointer; }

[type="submit"] {
  margin: .625rem 0; }

.button,
[type="submit"]:not(.text-link):not(.button--next),
[type="cancel"] {
  border: .063rem solid transparent;
  border-radius: 0;
  font-family: inherit;
  font-size: .9rem;
  box-sizing: content-box;
  color: #ffffff;
  cursor: pointer;
  font-weight: bold;
  margin: 0;
  max-width: 38.75rem;
  min-width: 4.375rem;
  padding: .5rem .62rem;
  text-decoration: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: none;
  display: inline-block;
  vertical-align: middle;
  text-align: center;
  user-select: none;
  transition: all .2s ease-in-out; }
  @media all and (min-width: 33.75rem) {
    .button,
    [type="submit"]:not(.text-link):not(.button--next),
    [type="cancel"] {
      font-size: inherit;
      padding: .75rem .938rem; } }
  .button:hover, .button:focus, .button:active,
  [type="submit"]:not(.text-link):not(.button--next):hover,
  [type="submit"]:not(.text-link):not(.button--next):focus,
  [type="submit"]:not(.text-link):not(.button--next):active,
  [type="cancel"]:hover,
  [type="cancel"]:focus,
  [type="cancel"]:active {
    text-decoration: none; }
  .button[disabled], .button[disabled]:hover,
  [type="submit"]:not(.text-link):not(.button--next)[disabled],
  [type="submit"]:not(.text-link):not(.button--next)[disabled]:hover,
  [type="cancel"][disabled],
  [type="cancel"][disabled]:hover {
    background-color: #e6e6e6;
    color: #b4b4b4;
    border: 0.063rem solid #e6e6e6;
    cursor: default; }
  @media all and (min-width: 33.75rem) {
    .form-field--buttons > .button, .form-field--buttons >
    [type="submit"]:not(.text-link):not(.button--next), .form-field--buttons >
    [type="cancel"] {
      margin: 0; } }

.button__icon {
  display: inline-block;
  scale: .9; }
  @media all and (min-width: 33.75rem) {
    .button__icon {
      scale: 1; } }
  .button__icon:not(:only-child) {
    margin-right: .625rem;
    position: relative;
    top: .063rem; }

.button__label {
  display: inline-block; }
  .button__label:not(:only-child) {
    position: relative;
    top: -0.188rem; }

.button--primary,
[type="submit"]:not(.text-link):not(.button--next) {
  border: 0.063rem solid #004699;
  background-color: #004699;
  color: #ffffff; }
  .button--primary:hover, .button--primary:focus, .button--primary:active,
  [type="submit"]:not(.text-link):not(.button--next):hover,
  [type="submit"]:not(.text-link):not(.button--next):focus,
  [type="submit"]:not(.text-link):not(.button--next):active {
    background-color: #00387A;
    border-color: #00387A;
    color: #ffffff; }

.button--secondary {
  border: 0.063rem solid #004699;
  background-color: #ffffff;
  color: #004699; }
  .button--secondary:hover, .button--secondary:focus, .button--secondary:active {
    background-color: #00387A;
    color: #ffffff;
    border-color: #00387A; }

.button--tertiary {
  border: 0.063rem solid #e6e6e6;
  background-color: #e6e6e6;
  color: #000000; }
  .button--tertiary:hover, .button--tertiary:focus, .button--tertiary:active {
    color: #000000;
    border-color: #b4b4b4;
    background-color: #b4b4b4; }
  .button--tertiary:focus, .button--tertiary:active {
    outline: .063rem dotted #212121;
    outline: .313rem auto -webkit-focus-ring-color; }

.text-link {
  background-color: transparent;
  border: 0;
  text-decoration: underline;
  font-size: inherit;
  margin: .625rem 0;
  color: #b4b4b4;
  cursor: not-allowed; }
  .text-link svg {
    vertical-align: text-top; }

button.text-link {
  color: #004699;
  cursor: pointer; }
  button.text-link:hover {
    background-color: transparent;
    color: #004699; }
  button.text-link--small {
    font-size: .9rem;
    font-weight: normal; }

.button--icon {
  min-width: inherit; }

.button--readmore {
  display: inline-block; }
  @media screen and (min-width: 33.75rem) {
    .button--readmore {
      margin-top: 1.875rem;
      margin-bottom: 1.25rem; } }

.button--success svg,
.button--danger svg,
.button--warning svg {
  color: currentColor;
  vertical-align: text-top; }

.button--success {
  border: 0.063rem solid #00a03c;
  background-color: #00a03c;
  color: #ffffff; }
  .button--success.button--secondary {
    background-color: #ffffff;
    color: #00a03c; }
  .button--success:hover, .button--success:focus, .button--success:active {
    background-color: #006d29;
    border-color: #006d29;
    color: #ffffff; }

.button--danger {
  border: 0.063rem solid #ec0000;
  background-color: #ec0000;
  color: #ffffff; }
  .button--danger.button--secondary {
    background-color: #ffffff;
    color: #ec0000; }
  .button--danger:hover, .button--danger:focus, .button--danger:active {
    background-color: #b90000;
    border-color: #b90000;
    color: #ffffff; }

.button--warning {
  border: 0.063rem solid #ff9100;
  background-color: #ff9100;
  color: #000000; }
  .button--warning.button--secondary {
    background-color: #ffffff;
    color: #ff9100; }
  .button--warning:hover, .button--warning:focus, .button--warning:active {
    background-color: #cc7400;
    border-color: #cc7400;
    color: #ffffff; }

.button--previous {
  white-space: nowrap;
  display: inline-flex;
  -webkit-box-align: center;
  color: #004699;
  align-items: center;
  line-height: 1.25rem;
  position: relative;
  z-index: 0;
  text-decoration: none;
  border-width: initial;
  border-style: none;
  border-color: initial;
  border-image: initial;
  padding: .75rem .938rem; }
  .button--previous .button__icon:not(:only-child) {
    margin-right: 0;
    top: 0; }
  .button--previous:hover {
    border-color: transparent;
    color: #00387A;
    text-decoration: underline; }

.button--next {
  white-space: nowrap;
  display: inline-flex;
  -webkit-box-align: center;
  align-items: center;
  line-height: 1.25rem;
  background-color: #ec0000;
  color: white;
  font-family: inherit;
  font-size: .9rem;
  font-weight: bold;
  position: relative;
  z-index: 0;
  text-decoration: none;
  border-width: initial;
  border-style: none;
  border-color: initial;
  border-image: initial;
  padding: .75rem .938rem;
  transition: color .1s ease-in-out 0s, background-color .1s ease-in-out 0s;
  margin-right: 1.563rem;
  overflow: visible;
  cursor: pointer; }
  .button--next .arrow {
    position: absolute;
    top: 0;
    right: -2.313rem;
    width: 0;
    height: 0;
    border-width: 1.375rem 1.375rem 1.375rem .938rem;
    border-style: solid;
    border-color: rgba(255, 255, 255, 0) rgba(255, 255, 255, 0) rgba(255, 255, 255, 0) #ec0000;
    border-image: initial;
    border-left: 0.938rem solid #ec0000;
    transition: border-color 0s ease 0s, all .1s ease-in-out 0s; }
    .button--next .arrow::after {
      content: "";
      position: absolute;
      top: -1.625rem;
      right: -1.875rem;
      width: 0;
      height: 0;
      z-index: -1;
      opacity: 0;
      border-width: 1.625rem 1.625rem 1.625rem 1.063rem;
      border-style: solid;
      border-color: rgba(255, 255, 255, 0) rgba(255, 255, 255, 0) rgba(255, 255, 255, 0) -webkit-focus-ring-color;
      border-image: initial;
      border-left: 1.063rem solid -webkit-focus-ring-color; }
  .button--next:hover {
    background-color: #b90000; }
  .button--next:focus {
    outline: .063rem dotted #212121;
    outline: .188rem auto -webkit-focus-ring-color; }
    .button--next:focus .arrow::after {
      opacity: 1; }
  .button--next:not(:disabled):hover .arrow {
    border-left-color: #b90000; }
  .button--next:after {
    content: "";
    display: block;
    min-height: inherit;
    font-size: 0; }

.form-field-history details,
.section--forms details {
  margin-left: 1rem; }
  .form-field-history details > summary .icon-details--open,
  .section--forms details > summary .icon-details--open {
    display: none; }
  .form-field-history details > summary .icon-details--closed,
  .section--forms details > summary .icon-details--closed {
    display: inline; }
  .form-field-history details[open] > summary .icon-details--closed,
  .section--forms details[open] > summary .icon-details--closed {
    display: none; }
  .form-field-history details[open] > summary .icon-details--open,
  .section--forms details[open] > summary .icon-details--open {
    display: inline; }
  .form-field-history details > summary,
  .section--forms details > summary {
    list-style: none; }
    .form-field-history details > summary small,
    .section--forms details > summary small {
      font-size: .8rem; }
    .form-field-history details > summary::-webkit-details-marker,
    .section--forms details > summary::-webkit-details-marker {
      display: none; }
  .form-field-history details > .content,
  .section--forms details > .content {
    margin: 3px 0 20px;
    padding: 8px 10px 10px;
    border: 1px solid #767676; }
    .form-field-history details > .content *:last-child,
    .section--forms details > .content *:last-child {
      margin-bottom: 0; }
    .form-field-history details > .content .u-scroll-wrapper,
    .section--forms details > .content .u-scroll-wrapper {
      max-height: 15rem;
      overflow: scroll; }

.section--forms details {
  margin-left: 0; }
  .section--forms details > summary {
    padding-top: 1rem; }
    .section--forms details > summary h4 {
      display: inline-block;
      margin-right: .5rem; }

.check__icon {
  color: #00a03c; }

.close__icon {
  color: #ec0000; }

.pause__icon {
  color: #ff9100; }

.list--status-icons li {
  margin-bottom: 0.5rem; }
  .list--status-icons li .icon-circle {
    vertical-align: middle; }
  .list--status-icons li a:first-child {
    padding-left: 30px; }

.breadcrumb {
  margin-bottom: 2.813rem;
  margin-top: 0; }
  @media all and (min-width: 33.75rem) {
    .breadcrumb {
      margin-top: .938rem; } }

.breadcrumb-list {
  list-style-type: none;
  padding: 0;
  margin: 0; }

.breadcrumb-step {
  color: #000000;
  display: inline; }
  .breadcrumb-step:not(:nth-last-child(2))::after {
    content: ' >';
    background-image: url("/static/images/chevron-right.svg");
    background-position: center .438rem;
    background-repeat: no-repeat;
    background-size: auto .563rem;
    display: inline-block;
    margin: 0 .375rem 0 .625rem;
    width: .563rem;
    color: transparent; }
  .breadcrumb-step a {
    color: #767676;
    text-decoration: none; }
    .breadcrumb-step a:hover, .breadcrumb-step a:focus, .breadcrumb-step a:active {
      color: #ec0000;
      text-decoration: underline; }

.navigation-container {
  position: relative;
  list-style: none;
  padding: 0;
  height: 2.75rem;
  margin: 0 auto;
  max-width: 60rem;
  display: flex;
  font-size: 1.125rem;
  font-weight: 500; }
  .navigation-container a {
    display: inline-block;
    color: #000000;
    text-decoration: none; }
    .navigation-container a:hover {
      text-decoration: underline; }
  .navigation-container li a {
    padding: .75rem .938rem; }
  .navigation-container > li {
    display: flex;
    align-items: center; }
    .navigation-container > li:hover ul, .navigation-container > li:active ul {
      opacity: 1;
      visibility: visible;
      pointer-events: auto; }
  .navigation-container > li:first-child > a {
    padding-left: 0; }
  .navigation-container > li:last-child > a,
  .navigation-container > li:last-child > button {
    padding-right: 0; }
  .navigation-container li ul {
    position: absolute;
    background-color: #f5f5f5;
    font-size: 1rem;
    box-shadow: -12.812rem 0 0 0 #f5f5f5, 12.812rem 0 0 0 #f5f5f5;
    top: 100%;
    left: -.938rem;
    right: -.938rem;
    list-style-type: none;
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
    transition: visibility 0s linear .2s; }
    .navigation-container li ul li {
      margin-top: -.5rem; }
  .navigation-container li.admin-settings ul {
    text-align: right; }
  .navigation-container .admin-settings {
    margin-left: auto; }

.navigation__open {
  border: 0;
  border-radius: 0;
  font-family: inherit;
  font-size: inherit;
  box-sizing: content-box;
  cursor: pointer;
  margin: 0;
  padding: .75rem .938rem;
  text-decoration: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: none;
  display: inline-block;
  vertical-align: middle;
  text-decoration: underline;
  color: #004699; }
  .navigation__open:hover, .navigation__open:focus, .navigation__open:active {
    text-decoration: underline;
    color: #ec0000; }
    .navigation__open:hover + ul, .navigation__open:focus + ul, .navigation__open:active + ul {
      display: block; }
  .navigation__open:focus-within {
    display: block; }

.tag-list {
  margin-top: .625rem;
  margin-bottom: 1.25rem;
  padding: 0; }

.tag-list__item {
  display: inline-block; }
  .tag-list__item:not(:last-of-type) {
    margin-right: .625rem; }

.section--timeline--filtering .dot,
.section--timeline--filtering .details-wrapper:before {
  background-color: #e6e6e6; }

.section--timeline--filtering .details-wrapper--highlighted:before {
  background-color: #004699; }

.section--timeline--filtering .details__title,
.section--timeline--filtering .details__toggle-icon {
  color: #b4b4b4; }

.section--timeline--filtering .button--tinytag {
  background-color: transparent;
  color: #004699;
  border: 0.063rem solid #004699; }

.section--timeline--filtering .details__header:hover .button--tinytag:hover,
.section--timeline--filtering .details__header:hover .button--tinytag:focus,
.section--timeline--filtering .details__header:hover .button--tinytag:active,
.section--timeline--filtering .details__header:focus .button--tinytag:hover,
.section--timeline--filtering .details__header:focus .button--tinytag:focus,
.section--timeline--filtering .details__header:focus .button--tinytag:active,
.section--timeline--filtering .details__header:active .button--tinytag:hover,
.section--timeline--filtering .details__header:active .button--tinytag:focus,
.section--timeline--filtering .details__header:active .button--tinytag:active {
  background-color: #00387A;
  color: #ffffff; }

.details-wrapper--highlighted .dot {
  background-color: #004699; }

.details-wrapper--highlighted .details__title,
.details-wrapper--highlighted .details__toggle-icon {
  color: #000000; }

.details-wrapper--highlighted .button--tinytag {
  background-color: transparent;
  color: #004699;
  border: 0.063rem solid #004699; }

.details-wrapper--highlighted .button--tag--selected {
  background-color: #004699;
  color: #ffffff; }

.button--tag {
  background-color: #ffffff;
  color: #004699;
  border: 0.063rem solid #004699;
  pointer-events: auto; }
  .button--tag:hover, .button--tag:focus, .button--tag:active {
    border-color: #00387A;
    background-color: #00387A;
    color: #ffffff; }
    .button--tag:hover .button__icon-unchecked, .button--tag:focus .button__icon-unchecked, .button--tag:active .button__icon-unchecked {
      color: #ffffff; }
  .button--tag > * {
    pointer-events: none; }
  .button--tag .button__icon-checked,
  .button--tag .button__icon-close {
    display: none; }
  .button--tag .button__icon-unchecked {
    display: inline-block; }

.button--tag {
  margin-bottom: .625rem; }
  .button--tag .button__icon-checked,
  .button--tag .button__icon-close {
    display: none; }
  .button--tag .button__icon-unchecked {
    display: inline-block;
    color: #004699; }

.tinytag,
.button--tinytag {
  padding: .125rem .563rem;
  border-radius: .75rem;
  font-weight: bold;
  font-size: .8rem;
  text-transform: uppercase;
  min-width: auto;
  background-color: transparent;
  color: #004699;
  border: 0.063rem solid #004699;
  pointer-events: auto; }
  .tinytag:hover, .tinytag:focus, .tinytag:active,
  .button--tinytag:hover,
  .button--tinytag:focus,
  .button--tinytag:active {
    background-color: #00387A;
    color: #ffffff;
    cursor: pointer; }

.tinytag {
  pointer-events: none; }

.button--tag--selected {
  background-color: #004699;
  color: #ffffff; }
  .button--tag--selected .button__icon-checked {
    display: inline-block; }
  .button--tag--selected .button__icon-unchecked {
    display: none; }
  .button--tag--selected:hover:not(:active) {
    border-color: #00387A;
    color: #ffffff;
    background-color: #00387A; }
    .button--tag--selected:hover:not(:active) .button__icon-checked,
    .button--tag--selected:hover:not(:active) .button__icon-unchecked {
      display: none; }
    .button--tag--selected:hover:not(:active) .button__icon-close {
      display: inline-block; }

.navigation-container {
  position: relative;
  list-style: none;
  padding: 0;
  height: 2.75rem;
  margin: 0 auto;
  max-width: 60rem;
  display: flex;
  font-size: 1.125rem;
  font-weight: 500; }
  .navigation-container a {
    display: inline-block;
    color: #000000;
    text-decoration: none; }
    .navigation-container a:hover {
      text-decoration: underline; }
  .navigation-container li a {
    padding: .75rem .938rem; }
  .navigation-container > li {
    display: flex;
    align-items: center; }
    .navigation-container > li:hover ul, .navigation-container > li:active ul {
      opacity: 1;
      visibility: visible;
      pointer-events: auto; }
  .navigation-container > li:first-child > a {
    padding-left: 0; }
  .navigation-container > li:last-child > a,
  .navigation-container > li:last-child > button {
    padding-right: 0; }
  .navigation-container li ul {
    position: absolute;
    background-color: #f5f5f5;
    font-size: 1rem;
    box-shadow: -12.812rem 0 0 0 #f5f5f5, 12.812rem 0 0 0 #f5f5f5;
    top: 100%;
    left: -.938rem;
    right: -.938rem;
    list-style-type: none;
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
    transition: visibility 0s linear .2s; }
    .navigation-container li ul li {
      margin-top: -.5rem; }
  .navigation-container li.admin-settings ul {
    text-align: right; }
  .navigation-container .admin-settings {
    margin-left: auto; }

.navigation__open {
  border: 0;
  border-radius: 0;
  font-family: inherit;
  font-size: inherit;
  box-sizing: content-box;
  cursor: pointer;
  margin: 0;
  padding: .75rem .938rem;
  text-decoration: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: none;
  display: inline-block;
  vertical-align: middle;
  text-decoration: underline;
  color: #004699; }
  .navigation__open:hover, .navigation__open:focus, .navigation__open:active {
    text-decoration: underline;
    color: #ec0000; }
    .navigation__open:hover + ul, .navigation__open:focus + ul, .navigation__open:active + ul {
      display: block; }
  .navigation__open:focus-within {
    display: block; }

@keyframes fadeInAndOut {
  0% {
    opacity: 0; }
  10% {
    opacity: 1; }
  90% {
    opacity: 1; }
  100% {
    opacity: 0; } }

.alert-container {
  list-style: none;
  margin: 0;
  padding: 0;
  z-index: 10;
  width: 100%;
  pointer-events: none; }
  .site-navigation + .alert-container {
    height: 0;
    left: 0;
    top: 2.75rem;
    position: fixed;
    position: sticky;
    position: -webkit-sticky;
    transform: translate3d(0, -2.75rem, 0); }

.alert {
  padding: 0 0 0 1.25rem;
  background-color: #00a03c;
  opacity: 0;
  animation: 8s ease-out 0s 1 fadeInAndOut forwards;
  width: 100%;
  height: 2.75rem;
  color: #ffffff;
  margin: 0 auto;
  max-width: 60rem;
  display: flex;
  align-items: center; }
  .alert .alert__icon {
    margin-right: 1rem; }
  .alert .alert__message {
    margin-bottom: 0; }
  .alert .alert__close {
    color: #ffffff;
    margin-left: auto; }

.alert--inline {
  position: relative;
  display: block;
  margin: 0 auto;
  animation: none;
  opacity: 1;
  transform: none;
  left: auto;
  top: auto;
  max-width: 25rem;
  z-index: 90; }

.alert__title {
  margin: 0; }

.alert__message {
  margin-top: .125rem; }

.alert--busy {
  background-color: #009dec;
  animation: none;
  opacity: 1; }

.alert--info {
  background-color: #00a03c; }

.alert--error {
  background-color: #ec0000; }

.alert--warning {
  background-color: #ff9100; }

.alert--success {
  background-color: #00a03c; }

.alert:nth-child(1) {
  animation-delay: 0s; }

.alert:nth-child(2) {
  animation-delay: 3.5s; }

.alert:nth-child(3) {
  animation-delay: 7s; }

.alert:nth-child(4) {
  animation-delay: 10.5s; }

.alert:nth-child(5) {
  animation-delay: 14s; }

.alert:nth-child(6) {
  animation-delay: 17.5s; }

.alert:nth-child(7) {
  animation-delay: 21s; }

.alert:nth-child(8) {
  animation-delay: 24.5s; }

.alert:nth-child(9) {
  animation-delay: 28s; }

.alert:nth-child(10) {
  animation-delay: 31.5s; }

.alert-box {
  border: 2px solid #ec0000;
  padding: 1rem;
  margin-bottom: 1rem; }
  .alert-box > *:last-child {
    margin-bottom: 0; }
  .form-field .alert-box {
    max-width: 38.75rem; }
  .alert-box--with-icon {
    padding-left: 50px;
    position: relative; }
    .alert-box--with-icon .icon {
      position: absolute;
      top: 1rem;
      left: 1rem; }

.container-button--feedback {
  z-index: 100;
  right: 0;
  top: 50%;
  margin-top: -58.5px;
  width: 40px;
  height: 137px;
  position: fixed; }
  .container-button--feedback .button {
    white-space: nowrap;
    transform: rotate(-90deg);
    transform-origin: 50% 130%;
    transition: none; }
  .modal-active .container-button--feedback {
    pointer-events: none;
    opacity: 0; }
  @media screen and (max-width: 33.75rem) {
    .container-button--feedback {
      top: 85%; } }

body.isInIframe,
.container-modal--vue {
  background-color: #fff; }
  body.isInIframe main,
  .container-modal--vue main {
    padding-bottom: 0; }
  body.isInIframe .site-container,
  .container-modal--vue .site-container {
    min-height: auto; }
  body.isInIframe .page-footer,
  .container-modal--vue .page-footer {
    display: none; }
  body.isInIframe .content-container,
  .container-modal--vue .content-container {
    background-color: white;
    padding: 15px;
    margin: 0 -15px;
    position: relative; }
    body.isInIframe .content-container h2,
    .container-modal--vue .content-container h2 {
      margin: 0 35px 15px 0; }
    body.isInIframe .content-container hr,
    .container-modal--vue .content-container hr {
      margin: 15px -15px; }
    body.isInIframe .content-container label small,
    .container-modal--vue .content-container label small {
      font-weight: 400; }
    body.isInIframe .content-container.form-invite-container input[type="hidden"] + label,
    .container-modal--vue .content-container.form-invite-container input[type="hidden"] + label {
      font-size: 1.25rem;
      line-height: 1.75rem;
      font-weight: 500;
      margin-bottom: .5rem; }
    body.isInIframe .content-container.form-invite-container .button--previous,
    .container-modal--vue .content-container.form-invite-container .button--previous {
      min-width: 0;
      display: inline; }
      body.isInIframe .content-container.form-invite-container .button--previous:hover,
      .container-modal--vue .content-container.form-invite-container .button--previous:hover {
        background-color: transparent;
        border-color: transparent; }
    body.isInIframe .content-container.form-invite-container .button__icon,
    .container-modal--vue .content-container.form-invite-container .button__icon {
      margin-right: .3rem;
      vertical-align: text-top; }
    body.isInIframe .content-container.form-invite-container .content-wrapper,
    .container-modal--vue .content-container.form-invite-container .content-wrapper {
      position: relative; }
    body.isInIframe .content-container.form-invite-container .link-manage,
    .container-modal--vue .content-container.form-invite-container .link-manage {
      position: absolute;
      right: 0;
      top: 0; }
    @media screen and (max-width: 33.75rem) {
      body.isInIframe .content-container,
      .container-modal--vue .content-container {
        margin: -15px; } }
  body.isInIframe .button--close,
  .container-modal--vue .button--close {
    width: 20px;
    height: 20px;
    min-width: auto;
    padding: 15px;
    position: absolute;
    top: 0;
    right: 0;
    color: #000000; }

.modal-active {
  height: 100vh;
  overflow-y: hidden;
  padding-right: 15px;
  /* Avoid width reflow */ }

.no-js .modal,
.no-js .modal-inner {
  opacity: 0;
  display: none; }

.modal {
  display: flex;
  position: fixed;
  pointer-events: none;
  z-index: 3000;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  align-items: flex-start;
  justify-content: center;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  opacity: 0;
  transition: opacity 0.3s;
  background-color: rgba(0, 0, 0, 0.7); }
  .modal.active {
    pointer-events: all;
    opacity: 1;
    right: 0;
    bottom: 0; }

.modal-inner {
  position: absolute;
  display: block;
  opacity: 0;
  z-index: 300;
  top: 25%;
  left: 50%;
  transform: translatex(-50%);
  width: 95%;
  max-width: 700px;
  max-height: 100vh;
  transition: all .3s ease-in-out;
  overflow: scroll;
  background-color: #fff; }
  .modal-inner > *:last-child {
    margin-bottom: 0; }
  .modal-inner iframe {
    border: 0;
    width: 100%;
    transition: height .3s ease-in-out; }
  .active .modal-inner {
    opacity: 1; }

.modal-close--bg {
  z-index: 200;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0; }
  .container-modal--vue .modal-close--bg {
    background-color: rgba(0, 0, 0, 0.7); }

.pagination {
  margin: 3.75rem 0; }
  .pagination ul {
    display: flex;
    justify-content: center;
    list-style: none; }
    .pagination ul li {
      position: relative; }
      .pagination ul li a,
      .pagination ul li span {
        display: inline-block;
        padding: 0.2375rem 0.475rem;
        margin: 0 0.475rem;
        line-height: 1rem;
        font-weight: 300;
        color: #000000;
        text-transform: lowercase; }
      .pagination ul li span {
        background-color: #767676;
        color: #ffffff; }
      .pagination ul li span.pagination-ellipsis {
        background-color: transparent;
        color: #000000; }
      .pagination ul li a {
        text-decoration: none; }
        .pagination ul li a:hover {
          text-decoration: underline;
          color: #ec0000; }
      .pagination ul li.pagination-link--previous a, .pagination ul li.pagination-link--next a {
        font-weight: 700; }
      .pagination ul li.pagination-link--previous svg, .pagination ul li.pagination-link--next svg {
        vertical-align: middle;
        margin: 0 0.475rem; }

footer {
  padding-top: 4rem;
  visibility: hidden; }
  footer .section-wrapper--top {
    background: #004699;
    color: #ffffff;
    padding: 1rem; }
  footer .section-wrapper--bottom {
    background-color: #ffffff;
    color: #000000;
    padding: .5rem 1rem; }
  @media all and (min-width: 64rem) {
    footer .section-wrapper--top {
      padding: 1rem 0; }
    footer .section-wrapper--bottom {
      padding: .75rem 0; } }

.details-client--approve {
  padding-left: 2.6rem; }
  .details-client--approve p .check__icon,
  .details-client--approve p .close__icon,
  .details-client--approve p .pause__icon {
    display: inline-block;
    vertical-align: text-top; }

.prompt-container {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 15px 15px 30px;
  border: 1px solid #b4b4b4;
  background-color: #ffffff;
  z-index: 3000; }
  .prompt-container h2 {
    margin: 0 0 15px; }
  .prompt-container form > * {
    margin: 1rem 1rem 0 0; }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fast.fonts.net/t/1.css?apiType=css&amp;projectid=3680cf49-2b05-4b8a-af28-fa9e27d2bed0">

</head>
<body>

<div class="site-container">
    <svg xmlns="http://www.w3.org/2000/svg" class="svg-sprite">
    <defs>
        <symbol id="add-document" width="40" height="40" viewBox="0 0 40 40">
            <polygon fill="currentColor" fill-rule="evenodd" points="40 17.5 22.5 17.5 22.5 0 17.5 0 17.5 17.5 0 17.5 0 22.5 17.5 22.5 17.5 40 22.5 40 22.5 22.5 40 22.5"></polygon>
        </symbol>
        <symbol id="arrow-down" width="14px" height="9px" viewBox="0 0 14 9">
            <polygon fill="currentColor" fill-rule="evenodd" points="0 4 7 4 14 4 7 12.4686375" transform="translate(0 -4)"></polygon>
        </symbol>
        <symbol id="arrow-up">
            <polygon fill="currentColor" fill-rule="evenodd" points="0 4 7 4 14 4 7 12.4686375" transform="matrix(1 0 0 -1 0 12.5)"></polygon>
        </symbol>
        <symbol id="alert" viewBox="0 0 40 37" width="40" height="37">
            <path fill="currentColor" fill-rule="evenodd" d="M20 .9l20 35.7H0L20 .9zm0 10.4L8.7 31.4h22.6L20 11.4zm1.3 15V29h-2.6v-2.5h2.6zm0-7.5V25h-2.6v-6.3h2.6z"></path>
        </symbol>
        <symbol id="check" width="20" height="15" viewBox="0 0 20 15">
            <polygon fill="currentColor" fill-rule="evenodd" points="7.6348808 16.8851945 0 8.85508156 1.81932246 7.12358846 7.65997491 13.2716437 18.2057716 2.5 20 4.25031368" transform="translate(0 -2)"></polygon>
        </symbol>
        <symbol id="checklist" width="40" height="40" viewBox="0 0 40 40">
            <path fill="currentColor" fill-rule="evenodd" d="M20.6 5H40v35H11.2V22.5A11.3 11.3 0 1120.6 5zm-4.4 16.3V35H35V10H22.4a11.4 11.4 0 01-.2 3.8h10.3v2.4H21.3c-.4 1-1 1.8-1.7 2.6h12.9v2.4H18.7v-1.6c-.7.7-1.5 1.3-2.4 1.7zm2.6 2.4h13.7v2.6H18.7v-2.6zm0 5h13.7v2.6H18.7v-2.6zM11.2 20a8.7 8.7 0 100-17.5 8.7 8.7 0 000 17.5zM8.3 9.7l2.7 2.7L15.4 8l1.8 1.7L11 16l-4.4-4.4 1.7-1.8z"></path>
        </symbol>
        <symbol id="sjabloon" width="31" height="40" viewBox="0 0 31 40">
            <path fill="currentColor" fill-rule="evenodd" d="M20.5 0H.7v40h30V10.2L20.5 0zM5.7 35V5h12.5v7.5h7.5V35h-20z"></path>
        </symbol>
        <symbol id="chevron-up" width="14" height="9" viewBox="0 0 14 9">
            <polygon fill="currentColor" fill-rule="evenodd" points="12.7268638 11.2686375 7 5.54627249 1.27313625 11.2686375 0 10 7 3 14 10" transform="translate(0 -3)"></polygon>
        </symbol>
        <symbol id="chevron-down" width="14" height="9" viewBox="0 0 14 9">
            <polygon fill="currentColor" fill-rule="evenodd" points="7 11.2686375 0 4.26863753 1.27313625 3 7 8.72236504 12.7268638 3 14 4.26863753" transform="translate(0 -3)"></polygon>
        </symbol>
        <symbol id="chevron-left" width="9" height="14" viewBox="0 0 9 14">
            <path fill="currentColor" fill-rule="evenodd" d="M7 14L0 7l7-7 1.3 1.3L2.5 7l5.8 5.7z"></path>
        </symbol>
        <symbol id="chevron-right" width="9" height="14" viewBox="0 0 9 14">
            <path fill="currentColor" fill-rule="evenodd" d="M1.3 14L0 12.7 5.7 7 0 1.3 1.3 0l7 7z"></path>
        </symbol>
        <symbol id="close" width="16" height="16" viewBox="0 0 16 16">
            <polygon fill="currentColor" fill-rule="evenodd" points="18 3.68232662 16.3176734 2 10 8.31170768 3.68232662 2 2 3.68232662 8.31170768 10 2 16.3176734 3.68232662 18 10 11.6882923 16.3176734 18 18 16.3176734 11.6882923 10" transform="translate(-2 -2)"></polygon>
        </symbol>
        <symbol id="document" width="31" height="40" viewBox="0 0 31 40">
            <path fill="currentColor" fill-rule="evenodd" d="M20.5 0l10.2 10.2V40H.7V0h19.8zm-2 5H5.6v30h20V12.3L18.4 5zm4.7 22.5V30h-15v-2.5h15zm0-5V25h-15v-2.5h15zm0-5V20h-15v-2.5h15z"></path>
        </symbol>
        <symbol id="download" width="20" height="20" viewBox="0 0 32 32">
            <path fill="currentColor" fill-rule="evenodd" d="M32 28v4H0v-4h32zM18 0v18.4l4.4-4.4 2.8 2.8L16 26l-9.2-9.2L9.6 14l4.4 4.4V0h4z"></path>
        </symbol>
        <symbol id="edit-document" width="20" height="20" viewBox="0 0 20 20">
            <path fill="currentColor" d="M12.5 15l2.5-2.4V20H0V0h9.8l4.5 4.4-1.8 1.8H8.7V2.5H2.5v15h10v-2.4zM9 14.5l2.6-.7L20 4.9 18.1 3l-8.4 8.8-.7 2.6z"></path>
        </symbol>
        <symbol id="formulier" width="31" height="40" viewBox="0 0 31 40">
            <path fill="currentColor" fill-rule="evenodd" d="M20.5 0H.7v40h30V10.2L20.5 0zM5.7 35V5h12.5v7.5h7.5V35h-20z"></path>
        </symbol>
        <symbol id="info" width="36" height="36" viewBox="0 0 36 36">
            <path fill="currentColor" fill-rule="evenodd" d="M18 0A18 18 0 000 18a18 18 0 0018 18 18 18 0 0018-18A18 18 0 0018 0zm0 30.9C11 30.9 5.1 25 5.1 18 5.1 11 11 5.1 18 5.1c7 0 12.9 5.8 12.9 12.9 0 7-5.8 12.9-12.9 12.9zm-1.3-19.3h2.6V9h-2.6v2.6zm0 15.4h2.6V14.1h-2.6V27z"></path>
        </symbol>
        <symbol id="upload" width="40" height="40" viewBox="0 0 40 40">
            <path fill="currentColor" fill-rule="evenodd" d="M5 34.9h30v-15h5v20H0v-20h5M17.5 9.5v19.3h5V9.4L28 15l3.5-3.5L20 0 8.5 11.5 12 15l5.5-5.5z"></path>
        </symbol>
        <symbol id="unchecked" width="20" height="20" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-width="3" d="M2 2h17v17H2z" fill="transparent"></path>
        </symbol>
        <symbol id="trash" width="12" height="14" viewBox="0 0 12 14">
            <path fill="currentColor" fill-rule="evenodd" d="M7.9 0v1.8h3.5v1.7h-.9V14H.9V3.5H0V1.7h3.5V0h4.4zm.8 3.5h-6v8.8h6V3.4zM4.5 5.3v5.2h-.9V5.2h.9zm1.7 0v5.2h-.8V5.2H6zm1.8 0v5.2H7V5.2H8zM7 .8H4.4v.8H7V1z"></path>
        </symbol>
        <symbol id="pause" width="12px" height="16px" viewBox="0 0 12 16">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path fill="currentColor" d="M0 16.08 4 16.08 4 0 0 0z M8 16.08 12 16.08 12 0 8 0z"></path>
            </g>
        </symbol>
        <symbol id="email" width="21px" height="16px" viewBox="0 0 21 16">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-783.000000, -956.000000)" fill="currentColor">
                    <g transform="translate(783.740477, 954.000000)">
                        <path d="M0,2.85714286 L0,17.8571429 L20,17.8571429 L20,2.85714286 L0,2.85714286 Z M10.075,10.5633929 L3.75,5.35714286 L16.2875,5.35714286 L10.075,10.5633929 Z M7.08125,9.73214286 L2.5,13.9696429 L2.5,5.94464286 L7.08125,9.73214286 Z M8.05625,10.5321429 L10.08125,12.2008929 L12.00625,10.5883929 L17.15625,15.3571429 L2.84375,15.3571429 L8.05625,10.5321429 Z M12.975,9.78214286 L17.5,5.98214286 L17.5,13.9821429 L12.975,9.78214286 Z"></path>
                    </g>
                </g>
            </g>
        </symbol>
        <symbol id="print" width="32px" height="32px" viewBox="0 0 32 32">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path fill="currentColor" fill-rule="evenodd" d="M21.41,0 L27,5.59 L27,12 L32,12 L32,28 L27,28 L27,32 L5,32 L5,28 L0,28 L0,12 L5,12 L5,0 L21.41,0 Z M25,20 L7,20 L7,30 L25,30 L25,20 Z M23,26 L23,28 L9,28 L9,26 L23,26 Z M23,22 L23,24 L9,24 L9,22 L23,22 Z M20,2 L7,2 L7,12 L25,12 L25,7 L20,7 L20,2 Z"></path>
            </g>
        </symbol>
        <symbol id="bell" width="32px" height="32px" viewBox="0 0 32 32">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path fill="currentColor" fill-rule="nonzero" d="M12,28 L-1.77635684e-14,28 L-1.77635684e-14,24 L1,24 C3.209139,24 5,22.209139 5,20 L5,10 C5,5.581722 8.581722,2 13,2 L14,2 C14,0.8954305 14.8954305,1.27675648e-13 16,1.27675648e-13 C17.1045695,1.27675648e-13 18,0.8954305 18,2 L19,2 C23.418278,2 27,5.581722 27,10 L27,20 C27,22.209139 28.790861,24 31,24 L32,24 L32,28 L20,28 C20,30.209139 18.209139,32 16,32 C13.790861,32 12,30.209139 12,28 Z M14,28 C14,29.1045695 14.8954305,30 16,30 C17.1045695,30 18,29.1045695 18,28 L14,28 Z M9,10 L9,20 C9,21.4571486 8.61042286,22.8233065 7.92974244,24 L24.0702576,24 C23.3895771,22.8233065 23,21.4571486 23,20 L23,10 C23,7.790861 21.209139,6 19,6 L13,6 C10.790861,6 9,7.790861 9,10 Z"></path>
            </g>
        </symbol>
        <symbol id="recycle" width="32px" height="32px" viewBox="0 0 32 32">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(4.000000, 0.000000)" fill="#000000" fill-rule="nonzero">
                    <path fill="currentColor" d="M12.2324898,4.10742857 L12.2324898,0.483265306 C12.2324898,0.305632653 12.1342041,0.143020408 11.972898,0.0574693878 C11.813551,-0.0274285714 11.6238367,-0.0179591837 11.4762449,0.0813061224 L1.46383673,6.82057143 C1.32963265,6.91265306 1.25093878,7.06187755 1.25093878,7.22187755 C1.25093878,7.38220408 1.32865306,7.53436735 1.46383673,7.6235102 L11.4716735,14.3608163 C11.621551,14.4604082 11.8089796,14.4702041 11.9706122,14.3892245 C12.1270204,14.3033469 12.2279184,14.138449 12.2279184,13.9601633 L12.2279184,10.0643265 C13.8040816,10.0754286 15.1026939,10.1430204 16.1910204,10.2733061 C21.3982041,10.8933878 22.7908571,14.0173061 22.848,14.1502041 C22.9204898,14.3307755 23.1013878,14.4440816 23.2937143,14.4440816 C23.3214694,14.4440816 23.3560816,14.443102 23.3874286,14.4352653 C23.6120816,14.3905306 23.7763265,14.1926531 23.7763265,13.962449 C23.7763265,6.07053061 14.4052245,4.38987755 12.2324898,4.10742857 Z"></path>
                    <path fill="currentColor" d="M22.6086531,24.2844082 L12.5985306,17.5484082 C12.4532245,17.4478367 12.2635102,17.4364082 12.1018776,17.5180408 C11.9454694,17.605551 11.8471837,17.7684898 11.8471837,17.947102 L11.8471837,21.8435918 C10.2690612,21.8315102 8.97044898,21.7642449 7.88440816,21.6333061 C2.67493878,21.013551 1.28195918,17.8899592 1.22710204,17.7570612 C1.15167347,17.5758367 0.971755102,17.4631837 0.781714286,17.4631837 C0.751020408,17.4631837 0.717061224,17.4644898 0.685714286,17.4723265 C0.460408163,17.5170612 0.296816327,17.7146122 0.296816327,17.9457959 C0.296816327,25.8360816 9.66693878,27.5190204 11.8422857,27.803102 L11.8422857,31.4269388 C11.8422857,31.6022857 11.9382857,31.7668571 12.0995918,31.8527347 C12.2589388,31.9366531 12.4486531,31.9275102 12.5962449,31.8282449 L22.6086531,25.0899592 C22.7425306,24.9972245 22.8218786,24.8486531 22.8218786,24.688 C22.8222041,24.5257143 22.7438367,24.372898 22.6086531,24.2844082 Z"></path>
                </g>
            </g>
        </symbol>
        <symbol id="share" width="32px" height="32px" viewBox="0 0 32 32" >
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path fill="currentColor" d="M4,28 L28,28 L28,16 L32,16 L32,32 L0,32 L0,16 L4,16 M14,7.7 L14,23.1 L18,23.1 L18,7.7 L22.4,12.1 L25.2,9.3 L16,0.1 L6.8,9.3 L9.6,12.1 L14,7.7 Z"></path>
            </g>
        </symbol>
    </defs>
</svg>




        <header class="site-header screen-only">
            <div class="site-header-wrapper">
                <a href="/" title="Ga terug naar de homepage">
                
                    <svg width="151px" height="68px" viewBox="0 0 151 68" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="logo">
    <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
    <title>Logo1_Amsterdam_151x68</title>
    <desc>Created with Sketch.</desc>
    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Header-Amsterdam.nl" transform="translate(-201.000000, -20.000000)" fill="#EC0000">
            <g id="Logo1_Amsterdam_151x68" transform="translate(201.000000, 20.000000)">
                <g id="Group">
                    <g fill-rule="nonzero">
                        <g transform="translate(30.000000, 1.000000)" id="Shape">
                            <path d="M15.2,15.9 C13.2,16.9 11,17.5 8.5,17.5 C3.5,17.5 0,14.1 0,9.1 C0,3.9 3.6,0.6 8.5,0.6 C11,0.6 13.2,1.1 14.9,2.6 L12.8,4.7 C11.8,3.7 10.2,3.1 8.6,3.1 C5.3,3.1 3.1,5.7 3.1,8.9 C3.1,12.3 5.3,14.9 8.6,14.9 C10.1,14.9 11.4,14.6 12.4,14.1 L12.4,10.3 L9,10.3 L9,7.6 L15.2,7.6 L15.2,15.9 Z"></path>
                            <path d="M20.5,12.5 C20.7,14.1 21.9,15.1 23.4,15.1 C24.8,15.1 25.7,14.5 26.3,13.6 L28.3,15.1 C27,16.7 25.4,17.3 23.7,17.3 C20.4,17.3 17.8,15 17.8,11.6 C17.8,8.2 20.4,5.9 23.7,5.9 C26.8,5.9 28.8,8 28.8,11.8 L28.8,12.6 L20.5,12.6 L20.5,12.5 Z M26.1,10.5 C26.1,8.9 25,7.9 23.3,7.9 C21.7,7.9 20.7,8.9 20.5,10.5 L26.1,10.5 Z"></path>
                            <path d="M31.3,6.1 L33.9,6.1 L33.9,7.8 L33.9,7.8 C34.4,6.8 35.4,5.8 37.2,5.8 C38.9,5.8 40,6.5 40.6,7.8 C41.4,6.4 42.6,5.8 44.2,5.8 C47.1,5.8 48.1,7.9 48.1,10.5 L48.1,17 L45.4,17 L45.4,10.8 C45.4,9.4 45,8.2 43.4,8.2 C41.7,8.2 41.1,9.6 41.1,11 L41.1,16.9 L38.4,16.9 L38.4,10.4 C38.4,9.1 37.9,8.2 36.5,8.2 C34.7,8.2 34,9.5 34,11 L34,17 L31.3,17 L31.3,6.1 Z"></path>
                            <path d="M53.4,12.5 C53.6,14.1 54.8,15.1 56.3,15.1 C57.7,15.1 58.6,14.5 59.2,13.6 L61.2,15.1 C59.9,16.7 58.3,17.3 56.6,17.3 C53.3,17.3 50.7,15 50.7,11.6 C50.7,8.2 53.3,5.9 56.6,5.9 C59.7,5.9 61.7,8 61.7,11.8 L61.7,12.6 L53.4,12.6 L53.4,12.5 Z M59.1,10.5 C59.1,8.9 58,7.9 56.3,7.9 C54.7,7.9 53.7,8.9 53.5,10.5 L59.1,10.5 Z"></path>
                            <path d="M66.5,12.5 C66.7,14.1 67.9,15.1 69.4,15.1 C70.8,15.1 71.7,14.5 72.3,13.6 L74.3,15.1 C73,16.7 71.4,17.3 69.7,17.3 C66.4,17.3 63.8,15 63.8,11.6 C63.8,8.2 66.4,5.9 69.7,5.9 C72.8,5.9 74.8,8 74.8,11.8 L74.8,12.6 L66.5,12.6 L66.5,12.5 Z M72.1,10.5 C72.1,8.9 71,7.9 69.3,7.9 C67.7,7.9 66.7,8.9 66.5,10.5 L72.1,10.5 Z"></path>
                            <path d="M77.4,6.1 L80,6.1 L80,7.9 L80,7.9 C80.5,6.8 81.5,5.9 83.3,5.9 C86.2,5.9 87.3,8 87.3,10.2 L87.3,17.1 L84.6,17.1 L84.6,11.6 C84.6,10.4 84.5,8.4 82.6,8.4 C80.8,8.4 80.1,9.7 80.1,11.2 L80.1,17.2 L77.4,17.2 L77.4,6.1 L77.4,6.1 Z"></path>
                            <path d="M89.2,8.4 L89.2,6.1 L91.5,6.1 L91.5,2.9 L94.2,2.9 L94.2,6.1 L97.2,6.1 L97.2,8.4 L94.2,8.4 L94.2,13.2 C94.2,14.3 94.5,15 95.7,15 C96.2,15 96.8,14.9 97.2,14.7 L97.2,17 C96.6,17.3 95.7,17.4 95,17.4 C92.1,17.4 91.4,16.1 91.4,13.5 L91.4,8.5 L89.2,8.5 L89.2,8.4 Z"></path>
                            <path d="M101.5,12.5 C101.7,14.1 102.9,15.1 104.4,15.1 C105.8,15.1 106.7,14.5 107.3,13.6 L109.3,15.1 C108,16.7 106.4,17.3 104.7,17.3 C101.4,17.3 98.8,15 98.8,11.6 C98.8,8.2 101.4,5.9 104.7,5.9 C107.8,5.9 109.8,8 109.8,11.8 L109.8,12.6 L101.5,12.6 L101.5,12.5 Z M107.2,10.5 C107.2,8.9 106.1,7.9 104.4,7.9 C102.8,7.9 101.8,8.9 101.6,10.5 L107.2,10.5 Z"></path>
                        </g>
                        <g transform="translate(29.000000, 24.000000)" id="Shape">
                            <path d="M7.1,1.9 L9.6,1.9 L16.6,18 L13.3,18 L11.8,14.3 L4.8,14.3 L3.3,18 L0.1,18 L7.1,1.9 Z M10.7,11.9 L8.2,5.3 L5.7,11.9 L10.7,11.9 Z"></path>
                            <path d="M18,7.1 L20.6,7.1 L20.6,8.8 L20.6,8.8 C21.1,7.8 22.1,6.8 23.9,6.8 C25.6,6.8 26.7,7.5 27.3,8.8 C28.1,7.4 29.3,6.8 30.9,6.8 C33.8,6.8 34.8,8.9 34.8,11.5 L34.8,18 L32.1,18 L32.1,11.8 C32.1,10.4 31.7,9.2 30.1,9.2 C28.4,9.2 27.8,10.6 27.8,12 L27.8,18 L25.1,18 L25.1,11.5 C25.1,10.2 24.6,9.3 23.2,9.3 C21.4,9.3 20.7,10.6 20.7,12.1 L20.7,18.1 L18,18.1 L18,7.1 Z"></path>
                            <path d="M43.7,10.1 C43.2,9.4 42.5,9 41.6,9 C40.9,9 40,9.3 40,10.2 C40,12.2 45.9,10.6 45.9,14.8 C45.9,17.4 43.4,18.3 41.2,18.3 C39.5,18.3 38.1,17.9 36.9,16.6 L38.7,14.9 C39.4,15.7 40.1,16.2 41.3,16.2 C42.1,16.2 43.1,15.8 43.1,14.9 C43.1,12.6 37.2,14.4 37.2,10.3 C37.2,7.9 39.4,6.8 41.6,6.8 C43.1,6.8 44.6,7.3 45.5,8.5 L43.7,10.1 Z"></path>
                            <path d="M46.7,9.4 L46.7,7.1 L49,7.1 L49,3.9 L51.7,3.9 L51.7,7.1 L54.7,7.1 L54.7,9.4 L51.7,9.4 L51.7,14.2 C51.7,15.3 52,16 53.2,16 C53.7,16 54.3,15.9 54.7,15.7 L54.7,18 C54.1,18.3 53.2,18.4 52.5,18.4 C49.6,18.4 48.9,17.1 48.9,14.5 L48.9,9.5 L46.7,9.5 L46.7,9.4 Z"></path>
                            <path d="M59.1,13.5 C59.3,15.1 60.5,16.1 62,16.1 C63.4,16.1 64.3,15.5 64.9,14.6 L66.9,16.1 C65.6,17.7 64,18.3 62.3,18.3 C59,18.3 56.4,16 56.4,12.6 C56.4,9.2 59,6.9 62.3,6.9 C65.4,6.9 67.4,9 67.4,12.8 L67.4,13.6 L59.1,13.6 L59.1,13.5 Z M64.7,11.5 C64.7,9.9 63.6,8.9 61.9,8.9 C60.3,8.9 59.3,9.9 59.1,11.5 L64.7,11.5 Z"></path>
                            <path d="M70,7.1 L72.7,7.1 L72.7,8.8 L72.7,8.8 C73.3,7.5 74.5,6.8 75.9,6.8 C76.2,6.8 76.6,6.9 76.9,7 L76.9,9.6 C76.4,9.5 76,9.4 75.6,9.4 C73,9.4 72.7,11.6 72.7,12.2 L72.7,18 L70,18 L70,7.1 Z"></path>
                            <path d="M87.1,16.4 L87.1,16.4 C86.3,17.7 84.8,18.3 83.3,18.3 C79.9,18.3 77.9,15.8 77.9,12.6 C77.9,9.4 80.1,6.9 83.2,6.9 C85.3,6.9 86.3,7.9 86.9,8.6 L87,8.6 L87,0.9 L89.7,0.9 L89.7,18 L87.1,18 L87.1,16.4 Z M83.8,15.9 C85.8,15.9 87,14.3 87,12.6 C87,10.9 85.8,9.3 83.8,9.3 C81.8,9.3 80.6,10.9 80.6,12.6 C80.6,14.3 81.8,15.9 83.8,15.9 Z"></path>
                            <path d="M99.6,16.5 L99.6,16.5 C98.8,17.7 97.5,18.3 96,18.3 C94,18.3 92,17.2 92,15 C92,11.4 96.1,11.2 98.9,11.2 L99.6,11.2 L99.6,10.9 C99.6,9.6 98.6,8.8 97.1,8.8 C96,8.8 94.9,9.3 94.2,9.9 L92.8,8.5 C94,7.3 95.7,6.7 97.4,6.7 C102.1,6.7 102.1,10.1 102.1,11.6 L102.1,18 L99.6,18 L99.6,16.5 L99.6,16.5 Z M99.5,13.1 L98.9,13.1 C97.4,13.1 94.8,13.2 94.8,14.8 C94.8,15.8 95.8,16.2 96.7,16.2 C98.6,16.2 99.5,15.2 99.5,13.7 L99.5,13.1 L99.5,13.1 Z"></path>
                            <path d="M104.9,7.1 L107.5,7.1 L107.5,8.8 L107.5,8.8 C108,7.8 109,6.8 110.8,6.8 C112.5,6.8 113.6,7.5 114.2,8.8 C115,7.4 116.2,6.8 117.8,6.8 C120.7,6.8 121.7,8.9 121.7,11.5 L121.7,18 L119,18 L119,11.8 C119,10.4 118.6,9.2 117,9.2 C115.3,9.2 114.7,10.6 114.7,12 L114.7,18 L112,18 L112,11.5 C112,10.2 111.5,9.3 110.1,9.3 C108.3,9.3 107.6,10.6 107.6,12.1 L107.6,18.1 L104.9,18.1 L104.9,7.1 Z"></path>
                        </g>
                        <polygon id="Shape" points="0 64 6 58 0 52 4 48 10 54 16 48 20 52 14 58 20 64 16 68 10 62 4 68"></polygon>
                        <polygon id="Shape" points="0 16 6 10 0 4 4 0 10 6 16 0 20 4 14 10 20 16 16 20 10 14 4 20"></polygon>
                        <polygon id="Shape" points="0 40 6 34 0 28 4 24 10 30 16 24 20 28 14 34 20 40 16 44 10 38 4 44"></polygon>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg>
                    
                    
                </a>
                <h1 class="site-title">
                    <a href="/" title="Ga terug naar de homepage"> 
                    {{APPLICATIONNAME}} - Onderhoud
                    </a>
                </h1>
            </div>
        </header>

<div class="site-navigation screen-only"> </div>
    <main class="site-main">

        <div class="print-only print-header" aria-hidden="true">
            <img src="/static/images/logo.svg" class="print-logo" alt="Gemeente Amsterdam">
        </div>
       <h1 class="h2 u-margin-top-3x"> 
       {{APPLICATIONNAME}} - Onderhoud</h1>

        <section class="section section--tags">
            <h2 class="h3">Op dit moment is deze applicatie in onderhoud.</h3>
        </section>



    </main>
    <footer id="pageFooter" class="page-footer">
    </footer>
</div>


</body>
</html>

EOF;

            $event->setResponse(
                new Response(
                    str_replace('{{APPLICATIONNAME}}', $this->applicationName, $content),
                    Response::HTTP_SERVICE_UNAVAILABLE,
                )
            );
            $event->stopPropagation();
        }
    }
}
