requirejs.config({
    paths: {
        jquery: '../components/jquery/jquery',
        ga: 'vendor/ga',
        popup: '../components/magnific-popup/dist/jquery.magnific-popup'
    },
    shim: {
        ga: {
            exports: '_gaq'
        },
        popup: {
            deps: ['jquery']
        }
    }
});

requirejs(['jquery', 'modules/analytics', 'popup'], function ($, analytics) {

    var app = {
        Modules: {
            analytics: analytics
        },
        // Implement the mediator pattern using an empty jQuery object 
        Events: $({}),
        init: function () {
            var i;
            for (i in this.Modules) {
                this.Modules[i].init(this.Events);
            }
            this.bindEvents();
            console.log('Welcome to the op-sy WordPress theme.');
        },
        bindEvents: function () {
            
            // Initialize lightbox
            $('.gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true,
                    preload: [0, 2],
                    navigateByImgClick: true
                }
            });
        }
    };

    // On document.ready run app.init with the `this` keyword being app itself 
    $(document).ready($.proxy(app.init, app));

});