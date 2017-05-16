module.exports = function(grunt){
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),	
		
		/**
		 * Combine already minified JS from plugins folder
		 */
		concat: {
            options: {
            },
            dist: {
                src: [
                    'js/plugins/iframe-resizer.min.js',
					'js/plugins/jquery.hoverIntent.min.js',
					'js/plugins/js.cookie.min.js',
					'js/plugins/slick.min.js',
					'js/plugins/modernizr.min.js',
					'js/plugins/svg4everybody.min.js',
					'js/plugins/smartresize-debounce.js',
					'js/plugins/smooth-scrolling.js'
                ],
                dest: 'js/plugins.min.js'
            }
        },
		
		/**
		 * Minify and custom JS
		 */
		 uglify: {
            options: {
                banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */',
                sourceMap: true
            },
            dist: {
                files: {
                    'js/scripts.min.js': ['js/scripts.js'],
                    'js/customizer.min.js': ['js/customizer.js'],
                }
            }
        },
        
		/**
		 * Lint JS
		 */
        jshint: {
            all: ['Gruntfile.js', 'js/*.js', '!js/*.min.js'],
            options: {
                globals: {
                    jQuery: true
                }
            }
        },
		
		/**
		 * Sass tasks
		 */
		 sass: {
			dev: {
				options: {
					style: 'expanded',
					sourcemap: 'none'
				},
				files: {
					'css/style.expanded.css' : 'sass/style.scss',
					'css/editor-style.expanded.css' : 'sass/editor-style.scss'	
				}	
			},
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'./style.css' : 'sass/style.scss',
					'./editor-style.css' : 'sass/editor-style.scss'	
				}	
			}	 
		 },
		 
		 /**
		 * Autoprefixer
		 */
		 postcss: {
			options: {
				map: {
					inline: false	
				},
				processors: [
					require('autoprefixer')({browsers: ['last 2 versions']})
				]
			},
			// prefix all css files in the project root
			dist: {
				src: './*.css'
			}	 
		 },
		
		/**
		 * Watch task
		 */
		 watch: {
			css: {
				files: ['**/*.scss'],
				tasks: ['sass','postcss']	
			},
			js: {
				files: ['js/*.js'],
				tasks: ['concat', 'uglify', 'jshint']
			} 
		 }
	});
	
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.registerTask('default',['watch']);
};