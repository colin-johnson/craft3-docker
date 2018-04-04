## About this Repo

This repository brings up a new Craft 3 project running in Docker.

### Getting started

1. Copy .env.example to .env

    These are made-up, one-off credentials — please, for the love of all that is good, change these before going live with a production application.

3. Start project:

    ```
    ./bin/start
    ```

3. The dev URL is whatever you set the SITE_URL to in .env file. The first time you run the project you will have to go to /admin to initialize the database (there are no default templates in Craft 3).

Please note: the dev URL must end with .dev as you will be running dnsmasq docker container locally.

If you haven't done so already, make sure you have the dev resolver file at /etc/resolver/dev with the following:

```
nameserver 127.0.0.1
port 53535
```

If you forget this, the start script will check and ask you to set this up.

<p align="center"><a href="https://craftcms.com/" target="_blank"><img width="312" height="90" src="https://craftcms.com/craftcms.svg" ></a></p>

## About Craft CMS

Craft is a content-first CMS that aims to make life enjoyable for developers and content managers alike. It is optimized for bespoke web and application development, offering developers a clean slate to build out exactly what they want, rather than wrestling with a theme.

Learn more about Craft at [craftcms.com](https://craftcms.com).

## How to Install Craft 3 Beta

Installation instructions can be found in the [Craft 3 documentation](https://github.com/craftcms/docs/blob/master/en/installation.md).

## Resources

#### Official Resources
- [Craft 3 Documentation](https://github.com/craftcms/docs)
- [Craft 3 Plugins](https://github.com/craftcms/plugins)
- [Demo site](https://demo.craftcms.com/)
- [Craft Slack](https://craftcms.com/community#slack)
- [Craft CMS Stack Exchange](http://craftcms.stackexchange.com/)

#### Community Resources
- [Mijingo](https://mijingo.com/craft) – Video courses and other learning resources
- [Envato Tuts+](https://webdesign.tutsplus.com/categories/craft-cms/courses) – Video courses
- [Straight Up Craft](http://straightupcraft.com/) – Articles, tutorials, and more
- [Craft Cookbook](https://craftcookbook.net/) – Quick answers for common tasks
- [pluginfactory.io](https://pluginfactory.io/) – Craft plugin scaffold generator
