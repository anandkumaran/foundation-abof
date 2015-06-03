module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'), 
        jshint: {
            all: ['js/scripts.js'],
        },
        sass: { 
          development: {
            files: {
              "css/custom-styles.css": "css/styles.scss"
            }
          },
        },
        concat: {
            css: {
                src: [
                    'css/foundation.css',
                    'css/foundation-icons.css',
                    'css/custom-styles.css'
                ],
                dest: 'css/dest/production.min.css'
            },
            js: {
                src: [
                    'js/jquery.min.js',
                    'js/foundation.min.js',
                    'js/custom.js'
                ],
                dest: 'js/dest/production.min.js'
            }
        },
        cssmin: {
            css: {
                src: 'css/dest/production.min.css',
                dest: 'css/dest/production.min.css'
            }
        },
        uglify: {
            js: {
                files: {
                    'js/custom.js': ['js/scripts.js']
                }
            }
        }, 
        watch: {
            files: ['js/scripts.js','*.php','css/styles.scss'],
            tasks: ['sass', 'concat', 'cssmin', 'jshint', 'uglify'],
            options: {
                livereload: true
            } 
        }
    }); 

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint'); 
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch','sass','concat:css', 'cssmin:css', 'concat:js', 'jshint','uglify:js']);
        
};