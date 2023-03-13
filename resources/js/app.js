import jQuery from 'jquery';
window.jQuery = jQuery;
window.$ = jQuery;

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

/* Required vendors */
import 'bootstrap-select';
import 'chart.js';

import '../../public/js/custom.min';
import '../../public/js/deznav-init';
import '../../public/vendor/owl-carousel/owl.carousel';

/* Chart piety plugin files */
import '../../public/vendor/peity/jquery.peity.min';

/* Apex Chart */
import '../../public/vendor/apexchart/apexchart';

/* Dashboard */
import '../../public/js/dashboard/dashboard-1';

Alpine.start();
