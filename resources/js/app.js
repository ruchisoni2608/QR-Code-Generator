// import './bootstrap';
import './jquery.min.js';
import '../plugins/bootstrap/js/bootstrap.bundle.min.js';
import '../plugins/bootstrap-select/bootstrap-select.min.js';
import '../plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js';
import '../plugins/magnific-popup/magnific-popup.js';
import '../plugins/counter/waypoints-min.js';
import '../plugins/counter/counterup.min.js';
import '../plugins/imagesloaded/imagesloaded.js';
import '../plugins/masonry/masonry-3.1.4.js';
import '../plugins/masonry/masonry.filter.js';
import '../plugins/owl-carousel/owl.carousel.js';
import '../js/dz.ajax.js';
import '../js/dz.carousel.js';
import '../js/custom.js';

// <!-- revolution JS FILES -->
import '../plugins/revolution/revolution/js/jquery.themepunch.tools.min.js';
import '../plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js';

// <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
import '../plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js';
import '../plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js';
import '../plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js';
import '../plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js';
import '../plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js';
import '../plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js';
import '../plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js';
import '../plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js';
import '../js/rev.slider.js';

import.meta.glob([
    '../images/**',
    // '../fonts/**',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
