requirejs.config({
    paths: {
        jquery: '../components/jquery/jquery'
    }
});

requirejs(['jquery', 'modules/example'], function ($, example) {

    var app = {
        Modules: {
            example: example
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