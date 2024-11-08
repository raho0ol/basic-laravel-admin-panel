import './bootstrap';

import { themeChange } from 'theme-change';
import Tagify from '@yaireo/tagify';

themeChange();
window.Tagify = Tagify;

var selectedTheme = localStorage.getItem("theme");
if(selectedTheme === 'dark') {
    document.getElementById("theme-change").checked = true;
}