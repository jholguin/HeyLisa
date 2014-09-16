module.exports = function(grunt) {
    
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        dirs: {
            source: 'library/'
        },              
        compass: {
            dev: {
                options: {
                    sassDir: '<%= dirs.source %>scss',
                    cssDir: 'css',
                    outputStyle: 'expanded',
                    environment: 'development'
                }
            }
        },
        autoprefixer:{
            multiple_files:{
                expand: true,
                flatten: true,
                src: 'css/*.css',
                dest: 'css/'
            }
        },
        watch:{
            css:{
                files: '<%= dirs.source %>scss/**/*.scss',
                tasks: ['compass', 'autoprefixer']
            }
        }        
    });

    grunt.registerTask('default', ['compass:dev', 'autoprefixer','watch']);
    
};