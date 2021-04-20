var gulp = require("gulp"),
  sass = require("gulp-sass"),
  minifyCss = require("gulp-minify-css"),
  plumber = require("gulp-plumber"),
  uglify = require("gulp-uglify"),
  clearnHtml = require("gulp-cleanhtml"),
  imagemin = require("gulp-imagemin"),
  copy = require("gulp-contrib-copy"),
  browserSync = require("browser-sync").create(),
  fileinclude = require("gulp-file-include"),
  reload = browserSync.reload;

// 定义源代码的目录和编译压缩后的目录
const src = "./src";
const dist = "./dist";

//监听scss
gulp.task("scss", async () => {
  await gulp
    .src(src + "/**/*.scss")
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest(dist));
});

// 编译全部js 并压缩
gulp.task("js", async () => {
  await gulp
    .src(src + "/**/*.js")
    // .pipe(plumber())
    //.pipe(uglify())
    .pipe(gulp.dest(dist));
});
// 压缩全部html
gulp.task("html", async () => {
  await gulp
    .src(src + "/**/*.html")
    //.pipe(clearnHtml())
    .pipe(gulp.dest(dist));
});

// 启动本地服务
gulp.task("server", () => {
  browserSync.init({
    // proxy: "local.dev", // 指定代理url
    notify: false, // 刷新不弹出提示
    open: false, //停止自动打开浏览器
    server: dist,
  });

  gulp.watch(src + "/**/*.scss", gulp.series("scss")).on("change", reload);
  gulp.watch(src + "/**/*.js", gulp.series("js")).on("change", reload);
  gulp.watch(src + "/**/*.html", gulp.series("html")).on("change", reload);
});

// 监听事件
gulp.task("default", gulp.series("scss", "js", "html", "server"));
