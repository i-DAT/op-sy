module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        jshint: {
            files: ['js/*.js', '!js/*.min.js']
        },
        requirejs: {
            compile: {
                options: {
                    baseUrl: 'js',
                    mainConfigFile: 'js/main.js',
                    name: 'main',
                    include: ['../components/almond/almond.js'],
                    out: 'js/main.min.js'
                }
            }
        },
        compass: {
            compile: {}
        },
        watch: {
            compass: {
                files: 'sass/**/*.{sass,scss}',
                tasks: ['compass']
            }
        },
        strip: {
            main: {
                options: {
                    inline: true
                },
                src: 'js/main.min.js'
            }
        },
        modernizr: {
            devFile: 'components/modernizr/modernizr.js',
            outputFile: 'js/vendors/modernizr.min.js',
            extra: {
                load: false
            },
            files: [
                'js/main.min.js',
                'css/main.css'
            ]
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-requirejs');
    grunt.loadNpmTasks('grunt-strip');
    grunt.loadNpmTasks('grunt-modernizr');

    grunt.registerTask('build', ['compass', 'requirejs', 'strip', 'modernizr']);

};