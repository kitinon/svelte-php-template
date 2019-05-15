
# Svelte+PHP template

This is a project template modified from original [Svelte template](https://github.com/sveltejs/template) to work with PHP as a developemnt server.

To create a new project based on this template using [degit](https://github.com/Rich-Harris/degit):

```bash
npx degit kitinon/svelte-php-template my-app
cd my-app
```

*Note that you will need to have [Node.js](https://nodejs.org) and [PHP](https://php.net) installed.*


## Get started

Install the dependencies...

```bash
cd my-app
npm install
```

...then start [Rollup](https://rollupjs.org):

```bash
npm run dev
```

Navigate to [localhost:5000](http://localhost:5000). You should see your app running. Edit a component file in `src`, save it, and reload the page to see your changes.


## Production

The content of /public folder can be installed to a web server that support PHP i.e. [nginx](https://nginx.org/), [apache http server](https://httpd.apache.org/), etc.

## Notes
This template differs from the original one that it generates HTML Custom Elements.  To generate a 'normal' svelte component, you can remove 'customElement' parameter from svelte plugin in rollup.config.js file or simply set it to false.