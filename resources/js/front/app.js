require('./bootstrap');

import { renderMenuButton } from "./menu-button.js";
import { renderTabs } from "./tabs.js";
import { renderCounter } from "./counter.js";
// import { renderNotification } from "./notificationaddcart.js";
import { renderFaqs } from "./faqs.js";
import { renderContactForm } from "./contactform.js";

renderMenuButton();
renderTabs();
renderCounter();
// renderNotification();
renderFaqs();
renderContactForm();