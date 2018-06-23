# FAQ

## Regarding the Parent - Child relationship of posts: how to we separate them on the blog page?


We use a custom function, designbriefs_no_parents(), in functions.php

We query only for parent pages by requesting: Parent=0 (a child-page would have the ID of the parent).

For more info, read: https://ms-studio.net/notes/wordpress-content-relationships/