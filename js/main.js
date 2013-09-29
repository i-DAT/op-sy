requirejs.config({
    paths: {
        jquery: '../components/jquery/jquery',
        ga: 'vendor/ga'
    },
    shim: {
        ga: {
            exports: '_gaq'
        }
    }
});

requirejs(['jquery', 'modules/analytics'], function ($, analytics) {

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
            console.log('Welcome to the op-sy WordPress theme.');
        }
    };

    // On document.ready run app.init with the `this` keyword being app itself 
    $(document).ready($.proxy(app.init, app));

});