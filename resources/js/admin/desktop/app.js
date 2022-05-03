require ('./bootstrap');

import { renderEditButton } from './edit-button.js';
import { renderMenuButton } from './menu-button.js';
import { renderEditTabs } from './edittabs.js';
import { renderEditTabsLocal } from './edittabs-local.js';
import { renderCheckBox} from './checkbox.js';
import { renderDeleteButton} from './delete-button.js';
import { renderNotificationSaveButton} from './notificationsavebutton';
import { renderForm } from './form.js';

renderEditButton();
renderMenuButton ();
renderEditTabs ();
renderEditTabsLocal ();
renderCheckBox ();
renderDeleteButton ();
renderNotificationSaveButton ();
renderForm ();

import { renderFilterButton } from './filter-button.js';
renderFilterButton ();