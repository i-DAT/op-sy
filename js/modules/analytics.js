define(['jquery', 'ga'], function ($, _gaq) {
    var analytics = {
        id: 'UA-XXXXX-Y',
        init: function (Events) {
            this.Events = Events;
            if (config.env === 'production') {
                this.trackPageview();
            }
        },
        trackPageview: function () {
            _gaq.push(['_setAccount', this.id]);
            _gaq.push(['_trackPageview']);
        }
    };
    return analytics;
});