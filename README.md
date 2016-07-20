#Instagram Plugin for Enact CMS
Plugin for [Enact CMS](https://enactcms.com).

Allows embedding [Instagram](https://instagram.com) posts by providing a custom Instagram field
which content authors can paste Instagram urls into. 

##Use
Create a Instagram field and add it to one of your section layouts, paste in a instagram post url and your good to go.

Embed the widget by calling the field:
```
{{ entry.yourInstagramField }}

{# or #}

{{ entry.yourInstagramField.getGramHtml }}
```

If you want to embed an Instagram post without using a field you can do so by accessing the plugin:
```
{{ enact.plugin.Instagram.embed('https://www.instagram.com/p/BEJzFU2qFyA/?taken-by=kookslams') }}
```

You can also access properties on the Instagram by using the `getGramProperty` function:
```
{{ enact.yourInstagramField.getGramProperty('title') }}
{{ enact.yourInstagramField.getGramProperty('author_name') }}

{# or #}

{% set url = 'https://www.instagram.com/p/BEJzFU2qFyA/?taken-by=kookslams';
{{ enact.plugin.Instagram.embed(url).getGramProperty('thumbnail_url') }}
{{ enact.plugin.Instagram.embed(url).getGramProperty('author_url') }}
```

[See the complete list of properties you have access to here](https://www.instagram.com/developer/embedding/#oembed).
