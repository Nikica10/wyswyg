require('bootstrap');
require('bootstrap/dist/css/bootstrap.css');

// any CSS you require will output into a single css file (app.scss in this case)
require('../css/app.scss');

const $ = require('jquery');
window.jQuery = $;
window.Popper = require('popper.js');
