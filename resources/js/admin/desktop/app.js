require ('./bootstrap');

import { renderEditButton } from './edit-button.js';
import { renderMenuButton } from './menu-button.js';
import { renderEditTabs } from './edittabs.js';
import { renderEditTabsLocal } from './edittabs-local.js';
import { renderCheckBox} from './checkbox.js';
import { renderDeleteButton} from './delete-button.js';
import { renderNotification} from './notification';
import { renderForm } from './form.js';
import { renderImageUpload} from './imageupload.js';

renderEditButton();
renderMenuButton ();
renderEditTabs ();
renderEditTabsLocal ();
renderCheckBox ();
renderDeleteButton ();
renderNotification ();
renderForm ();
renderImageUpload ();

import { renderFilterButton } from './filter-button.js';
renderFilterButton ();