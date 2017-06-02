module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        options: {
          sourcemap: 'none'
        },
        files: [{
          expand: true,
          cwd: 'wp-content/themes/mattmacneil/assets/css',
          src: ['**/*.scss'],
          dest: 'wp-content/themes/mattmacneil/',
          ext: '.css'
      }]
      }
    },

    postcss: {
      options: {

        map: {
            inline: false,
            annotation: 'wp-content/themes/mattmacneil/assets/css/maps'
        },

        processors: [
          require('pixrem')(),
          require('autoprefixer')({browsers: 'last 100 versions'}),
          require('cssnano')({ discardComments: false })
        ]
      },
      dist: {
        src: 'wp-content/themes/**/*.css'
      }
    },

    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass','postcss']
      }
    },

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);
};