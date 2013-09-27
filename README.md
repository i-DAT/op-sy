# Op-sy Wordpress Theme

## Summary

WordPress Theme for the [iDAT](http://i-dat.org) [op-sy](http://op-sy.com) project, based on [Starkers](https://github.com/viewportindustries/starkers).

## Local Development

### Install WordPress

Either via [GitHub](https://github.com/WordPress/WordPress) (remember to checkout stable branch) or [manually](http://wordpress.org/download/).

### Install Theme

1. `cd wp-content/themes/`
2. `git clone git@github.com:saulhardman/op-sy.git`

### Install NPM and Bower Dependencies

1. `cd op-sy`
2. `npm install`

### Create a config.json file

1. Create a config.json file in the root of the theme
2. Add database configuration like so:-

`{
  "database": {
    "name": "wordpress",
    "user": "root"
  }
}`

### Grunt Commands

#### `grunt watch` (default)

The default grunt command is watch - it compiles SASS files on change.

#### `grunt build`

1. Compiles SASS.
2. Lints JavaScript files using [JSHint](http://www.jshint.com/).
3. Runs [RequireJS optimizer](http://requirejs.org/docs/optimization.html) including [almond](https://github.com/jrburke/almond) in the output.
4. Strips console logs from built JavaScript file.
5. Scans JavaScript and CSS files for [Modernizr](http://modernizr.com/) methods and classes and generates a custom Modernizr file accordingly.

### `grunt exportDatabase`

### `grunt importDatabase`

## Core Dependencies

- [Node.js](http://nodejs.org)
- [Yo](http://yeoman.io)
- [Ruby](https://www.ruby-lang.org/en/)
- [Compass](http://compass-style.org)

## Authors

- [Saul](http://github.com/saulhardman)
- [Ben](http://github.com/benashman)