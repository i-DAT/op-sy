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

```js
{
  "database": {
    "name": "wordpress",
    "user": "root"
  }
}
```

### Grunt Commands

#### `grunt watch` (default)

The default grunt command is watch - it compiles SASS files on change.

#### `grunt build`

1. Compiles SASS.
2. Lints JavaScript files using [JSHint](http://www.jshint.com/)
3. Runs [RequireJS optimizer](http://requirejs.org/docs/optimization.html) including [almond](https://github.com/jrburke/almond) in the output
4. Strips console logs from built JavaScript file
5. Scans JavaScript and CSS files for [Modernizr](http://modernizr.com/) methods and classes and generates a custom Modernizr file accordingly
6. Compresses the theme files (as well as minifiying images) into a package name and version labelled .zip file

#### `grunt exportDatabase` (requires [MAMP](http://www.mamp.info/en/index.html))

1. Edit the [config.json](#create-a-config-json-file) file to reflect your local MySQL database setup.
2. Run `grunt exportDatabase` to mysqldump contents of WordPress database (minus wp_users) into `database/wordpress.sql`.

#### `grunt importDatabase` (requires [MAMP](http://www.mamp.info/en/index.html))

***WARNING:*** KNOW WHAT THIS IS GOING TO DO BEFORE RUNNING IT!

1. Edit the [config.json](#create-a-config-json-file) file to reflect your local MySQL database setup.
2. Run `grunt importDatabase` to import contents of `database/wordpress.sql` into your WordPress database.

## Core Dependencies

- [Node.js](http://nodejs.org)
-- [Yo](http://yeoman.io)
- [Ruby](https://www.ruby-lang.org/en/)
-- [Compass](http://compass-style.org)

## Authors

- [Saul](http://github.com/saulhardman)
- [Ben](http://github.com/benashman)

## TODO

- OP-SY: Rename 'Home' to 'OP-SY'
- 'An OP-SY Project' footer link directs to beta.i-dat.org as Network Home. Might need to hard code this.
- 'Systems' to become 'System' on all OS sub-sites
- Remove 'feeds' page from all except Eco-OS & OP-SY
- Upload map image to contact page. @2x?
- Upload supporter logos to information page
- Add support for blurb as well as banner image on op-sy/projects
- Add support for groups of thumbnail images w/lightbox. (Similar in size to OS logos on OP-SY)


