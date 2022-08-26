// webpack.mix.js

let mix = require("laravel-mix");

mix.js("src/app.js", "dist").setPublicPath("dist");
mix.browserSync("http://127.0.0.1:8000");
