# Templora

Adds a template library with predefined pages and patterns to Gutenberg editor.

## Plugin Development

This plugin uses npm and webpack to build the production files. To build the files yourself, follow these steps:

### Requirements

Node.js >= 20.x

### Install

Clone the repository:

```bash
git clone https://github.com/wpflexify/templora.git
```

Navigate to the plugin directory: "cd templora"

Install dependencies:

```bash
npm install
```

or

```bash
npm install --force
```

## Development

Templora using @wordpress/scripts to handle compiling assets and watching for changes.

See the [Official Gutenberg Developer Documentation](https://developer.wordpress.org/block-editor/#develop-for-the-block-editor) for extensive tutorials, documentation, and API references.

### NPM Scripts

Use the following commands to get started:

Watch for changes:

```bash
npm start
```

Build a production version of Templora:

```bash
npm run build
```