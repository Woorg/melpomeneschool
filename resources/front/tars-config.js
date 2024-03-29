module.exports = {
    "postcss": [
        {
            name: 'postcss-pxtorem',
            options: {
                rootValue: 16,
                unitPrecision: 5,
                propList: ['*'],
                selectorBlackList: [],
                replace: true,
                mediaQuery: false,
                minPixelValue: 0,
                exclude: '/node_modules/i'

            }
        },
    ],
    "svg": {
        "active": true,
        "workflow": "symbols",
        "symbolsConfig": {
            "loadingType": "separate-file-with-link",
            "usePolyfillForExternalSymbols": true,
            "pathToExternalSymbolsFile": ""
        }
    },
    "css": {
        "workflow": "manual"
    },
    "js": {
        "workflow": "modular",
        "bundler": "webpack",
        "lint": false,
        "useBabel": true,
        "removeConsoleLog": false,
        "webpack": {
            "useHMR": false,
            "providePlugin": {}
        },
        "jsPathsToConcatBeforeModulesJs": [],
        "lintJsCodeBeforeModules": false,
        "jsPathsToConcatAfterModulesJs": [],
        "lintJsCodeAfterModules": false
    },
    "sourcemaps": {
        "js": {
            "active": true,
            "inline": true
        },
        "css": {
            "active": true,
            "inline": true
        }
    },
    "notifyConfig": {
        "useNotify": false,
        "title": "TARS notification",
        "sounds": {},
        "taskFinishedText": "Task finished at: "
    },
    "minifyHtml": false,
    "generateStaticPath": true,
    "devPath": "./static/dev/",
    "buildPath": "./static/prod/",
    "useBuildVersioning": false,
    "useArchiver": true,
    "ulimit": 4096,
    "templater": "pug",
    "cssPreprocessor": "sass",
    "useImagesForDisplayWithDpi": [
        96,
        192,
        288
    ],
    "fs": {
        "staticFolderName": "assets",
        "imagesFolderName": "images",
        "componentsFolderName": "blocks"
    }
};
