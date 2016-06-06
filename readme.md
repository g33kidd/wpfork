## WPFork

Currently this is just a fork of WordPress, but I set out for it to be something extremely special.

## Plans

- Rewrite some of the code and restructure the files.
- Use composer for bringing in 3rd party packages with ease.
- Support sass/es6 out of the box.
- Use some laravel components like illuminate or find something similar.
- Use a template language and/or HTML w/ php for templates.

#### TODO

File Structure rewrite &mdash; New file system ideas

```
content
  - themes  // themes folder
  - plugins // plugins folder along with vendor plugins
  - storage // for uploads and stuff
  - ...     // all other content files

core
  - admin // all the code pertaining to the admin and admin api
  - ...   // all the helpers, utils, classes
```

## Some Info

This project uses code from both the official WordPress repository(it is a fork) and the Laravel/Laravel Framework projects.
