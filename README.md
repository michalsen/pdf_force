PDF Force
v.1
Forcing PDF's to your visitors.

This is the first commit. So much more to go before is works smoothly.
Right now it is more a work in concept.

The idea of the plug is to load a js script that looks for the class wpdm-download-link
in an a href and trigger a click.

```
jQuery(document).ready(function(){
    jQuery("a.wpdm-download-link").trigger("click");
});
```

Works fine...kind of. The issue is that anywhere this link is, it'll force a
download, even in the admin page.

I'm not sold this is the right way to handle this, but posting as a WIP.

Any ideas of questions, hit me up on twitter @michalsen
