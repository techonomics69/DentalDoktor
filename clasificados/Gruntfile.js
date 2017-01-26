module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),

        uglify: {
            options: {
                mangle: true
            },
            build: {
                src: "js/*.js",
                dest: "js/min/script.js"
            }
        }

    });

    grunt.loadNpmTasks("grunt-contrib-uglify");

    grunt.registerTask('default', [uglify]);

};