//引入gulp
var gulp=require("gulp");

//引入第三方模块
var less=require("gulp-less");
var sass = require('gulp-sass');
var path=require("path");
var cleanCSS=require("gulp-clean-css");
var rename=require("gulp-rename");
var uglify=require("gulp-uglify");

//配置less编译任务
gulp.task("lessTask",function () {
	gulp.src("src/less/*.less") 
	.pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
	.pipe(gulp.dest("dist/css")); 
});

//配置sass编译任务
gulp.task("sassTask",function () {
	gulp.src("src/sass/*.scss") 
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest("dist/css")); 
});

//配置压缩css的任务
gulp.task("minCssTask",function () {
	gulp.src("dist/css/*.css") 
	.pipe(cleanCSS({compatibility: 'ie8'}))
	.pipe(rename({
		suffix:".min" 
	}))
	.pipe(gulp.dest("dist/css/min")); 
});

//配置js压缩的任务
gulp.task("minJsTask",function () {
	gulp.src("src/javascript/*.js") 
	.pipe(uglify()) 
	.pipe(rename({
		suffix: ".min" 
    })) 
	.pipe(gulp.dest("dist/js"));
});

//开启观察者watch
gulp.task("default",function () {
	gulp.watch("src/less/*.less",["lessTask"]); 
	gulp.watch("src/sass/*.scss",["sassTask"]); 
	gulp.watch("dist/css/*.css",["minCssTask"]);
	gulp.watch("src/javascript/*.js",["minJsTask"]); 
});
