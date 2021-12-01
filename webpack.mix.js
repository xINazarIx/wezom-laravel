let mix = require('laravel-mix');

let CopyWebpackPlugin = require('copy-webpack-plugin');
let  SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

mix
    .js(
        'resources/assets/js/main.js',
        'public/assets/js'
    )

    .sass(
        'resources/assets/scss/style.scss',
        'public/assets/css'
    )

    .webpackConfig({
        plugins: [
            new SVGSpritemapPlugin('resources/assets/images/svg/*.svg', {
                output: {
                    filename: 'assets/images/spritemap.svg',
                    svg: {
                        sizes: false
                    },
                    chunk: {
                        keep: true // Включаем чтобы при сборке проекта небыло ошибки из-за отсутствия spritemap.js 
                    }
                }
            }),

            new CopyWebpackPlugin({
                patterns: [
                    {
                        from: 'resources/assets/images',
                        to: 'assets/images',
                        globOptions: {
                            ignore: ['**/svg/**'] // Игнорируем каталог с иконками
                        }
                    }
                ]
            })
        ]
    })

    .version()
