require('bootstrap');
require('bootstrap/dist/css/bootstrap.css');

require('trumbowyg');
require('trumbowyg/dist/ui/trumbowyg.min.css');


// any CSS you require will output into a single css file (app.scss in this case)
require('../css/app.scss');

const $ = require('jquery');
window.jQuery = $;
window.Popper = require('popper.js');

$('.mojID').trumbowyg({
    svgPath: false
});

$.trumbowyg.svgPath = '/icons.svg';