module.exports = function(grunt) {

    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		/**
		 * Sass
		 */
		sass: {
		  dev: {
		    options: {
		      style: 'compressed',
		      sourcemap: 'none',
		    },
		    files: {
		      'style.css': 'assets/style.scss'
		    }
		  },
		  dist: {
		    options: {
		      style: 'expanded',
		      sourcemap: 'none',
		    },
		    files: {
		      'style-human.css': 'assets/style.scss'
		    }
		  }
		},

		autoprefixer: {
			options: {
				browsers: ['last 2 versions']

			},
			multiple_files: {
				expand: true,
				flatten: true,
				src: '*.css',
				dest: ''

			}

		},

	  	/**
	  	 * Watch
	  	 */
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'autoprefixer']
			}
		},

		/**
		Ftp push
		*/

		ftp_push: {
		    your_target: {
		      options: {
		        authKey: "serverA",
		        host: "studiostripe.com",
		        dest: "/public_html/efficient/wp-content/themes/efficient/",
		        port: 21
		      },
		      files: [
		        {
		          expand: true,
		          cwd: '.',
		          src: [
		          	"*.*",
		          	"fav/**",
		          	"images/**",
		          	"fonts/**",
		          	"inc/**",
		          	"js/**",
		          	"template-parts/**"
		            //"**/*"
		          ]
		        }
		      ]
		    }
		  },


	});
	grunt.loadNpmTasks('grunt-ftp-push');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.registerTask('default',['watch']);
}