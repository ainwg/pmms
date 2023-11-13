import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
require('./bootstrap');
  
var moment = require('moment');
  
console.log(moment().format());
