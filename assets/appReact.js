/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

import { registerReactControllerComponents } from '@symfony/ux-react';

// Any CSS you import will output into a single css file (appReact.css in this case)
import "@amsterdam/design-system-assets/font/index.css";
import "@amsterdam/design-system-css/dist/index.css";
import "@amsterdam/design-system-tokens/dist/index.css";
import "@amsterdam/design-system-tokens/dist/compact.css";
import './styles/appReact.css'

// Start the Stimulus application.
import './bootstrap.js';

registerReactControllerComponents(
  require.context('./react/pages', true, /\.[jt]sx?$/)
);
