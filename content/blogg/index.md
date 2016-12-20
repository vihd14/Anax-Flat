---
views:
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            meta:
                type: copy
                view: blog-list

...
Min fotoblogg
===========================
Välkomna till min fotoblogg! Här kan ni läsa om mina bilder som alla är tagna med
en Canon EOS 1200D och standardobjektivet. Kameran hade vid de olika tillfällena
en blanding mellan automatiska och manuella inställningar. På de manuellt tagna bilderna
ändrade jag endast ljusstyrkan beroende på väder (soligt/molnigt). Jag hoppas ni
gillar bilderna och önskar er en trevlig läsning!
