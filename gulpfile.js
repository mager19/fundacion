var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;

// Save a reference to the `reload` method

// Watch scss AND html files, doing different things with each.
gulp.task('serve', function () {

	//Variables para que sepa que archivos refrescar 
	 var files = [
    	'./style.css',
    	'./*.php'
    	];

    // Serve files from the root of this project
    browserSync.init(files, {
      
             proxy: "localhost/fundacion/",
       
    });

        
});


gulp.task('mensaje', function(){

	console.log("mensaje");
})


gulp.task('default', ['serve','mensaje']);




