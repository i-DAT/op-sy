define(['jquery'], function ($) {
    var example = {
        $el: $('#example'),
        init: function (Events) {
            this.Events = Events;
            this.bindEvents();
        },
        bindEvents: function () {
            // this.Events.on('event', this.doSomething);
        }
    };
    return example;
});