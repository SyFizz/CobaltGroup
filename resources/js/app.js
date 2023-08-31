import './bootstrap';

import Alpine from 'alpinejs';

import {
    Chart,
    initTE,
} from "tw-elements";
initTE({ Chart });



window.Alpine = Alpine;

Alpine.start();
