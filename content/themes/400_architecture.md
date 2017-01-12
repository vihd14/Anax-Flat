Temastrukturer
==============

##LESS-strukturer
Jag började med ett bastema (base.less) som utgör grunden för webbplatsen och alla andra teman
som gjorts är baserade på detta tema i grund och botten. Här görs en del positionering men
för att positionera block ändrar jag gridets uppbyggnad, som jag kommer till senare.

Modulerna är alla samlade i mappen "modules" för att inte blanda ihop de med resterande
LESS-kod och det är alltid lättare att samla saker på ett ställe om de hör ihop. På
så vis slipper man leta sig genom alla filer för att hitta något, om man inte använder
sig av olika mappar.

I base.less importeras alla moduler, vilket gör att de finns med i alla andra teman som
skapas utifrån bastemat. Det gör att man slipper importera modulerna en extra gång och slipper
därmed att göra om grunden för webbplatsen, som nu redan finns klar i base.less. Det är ändå
enkelt att designa ett unikt tema då bastemat är väldigt simpelt utan effekter och speciell
typografi samt färglöst. På så vis kan man skapa fler teman snabbare och utan större
svårighet.

##LESS-moduler
*Mitt vertikala och horisontella grid använder sig av flera olika moduler som delats upp, för
att undvika för långa filer med flera rader kod.*

**Figure.less** - Denna modul styr över webbplatsens bilder genom att samla olika effekter som
enkelt kan läggas till i Markdown till varje bild, såsom positionering och effekter som till exempel
skuggning. Detta är inte min viktigaste modul men den underlättar när man vill positionera sina
bilder.

**Grid-float.less och grid-helpers.less** - Här samlas alla mixins och funktioner som strukturerar upp webbplatsens gridsystem.
Gridet delar upp innehållet i columner, rader mm för att ge en symmetrisk webbplats där alla delar
hänger ihop som de ska. Funktionerna och alla mixins deklareras i grid-float.less som sedan används i grid-helpers.less
för att visualisera gridet med hjälp av en bild, som görs via html-elementet. Detta visuella grid kan sedan anropas på alla
sidor i webbplatsen för att se att gridet matchar sin struktur. Här positioneras även de flesta block, såsom sidebars och
footerkolumner.

**Layout.less** - Här delas webbplatsen upp i segmenten header, main, footer etc. och tilldelas de mixins som
skapades tidigare, för att lägga till strukturen på gridet till webbplatsen. Webbplatsen är nu uppdelad
via ett gridsystem.

**Media-queries.less** - För att göra webbplatsen responsiv till större och mindre skärmar har jag lagt alla media-queries
i en egen modul, som ser till att alla element skalas korrekt när de används på till exempel en mobil. Två olika
menyer används på hemsidan, en meny som syns på stora skärmar och en liten meny som visas som tre horionstella streck
som används på mindre skärmar. Denna modul ser till att dessa menyer dyker upp och försvinner vid en viss bredd.

**Normalize.less** - Denna modul ser till att alla olika webbläsare tolkar webbplatsens LESS-kod på samma sätt,
alltså neutraliserar. Det gör att alla marginaler och positioneringar ser likadana ut oavsätt webbläsare.

**Typography.less mfl.** - Jag har delat upp mitt horisontella grid i flera moduler för att slippa ha en modul
med flera hundra rader kod. En av dessa innehåller alla mixins för gridet, en annan har variabeln @magicnumber som
innehåller ett antal pixlar som positionerar griden rätt och matchar med text och block. En innehåller standardtypsnitt
som används i till exempel bastemat där inget typsnitt är tillagt. I typography.less läggs alla mixins till på .article
som gör att brödtexten matchar ett horisontellt grid. Detta grid kan även det visas visuellt via html-elementet.

###Gridmoduler
Jag har lagt ned extra mycket arbete för att få modulerna grid-float.less och grid-helpers.less att fungera
korrekt med webbplatsen. Det ska matchas med det visuella gridet samt se snyggt ut på hemsidan med marginaler.
Det blev en hel del finlir för att få till det som jag ville ha det. Mixinen .column och .row har jag arbetat med
för att dela in allt innehåll i rätt antal kolumner och för att raderna ska vara jämna. Vissa rader ville sticka
ut lite på sidan så det fick man fixa med i .row så att det löstes men inte påverkade någon annan del av
webbplatsen negativt. Kika gärna in på min [andra webbplats](http://www.student.bth.se/~vihd14/dbwebb-kurser/design/me/anax-flat/htdocs/grid)
för att se hur gridet kan se ut visuellt.

###Typografimoduler
Det horisontella gridet lade jag också ned mycket tid på för att få det att matcha alla texter. Det var främst
användingen av @magicnumber och marginaler som gjorde att detta grid passade in på alla sidor. För att se
visuellt hur gridet fungerar kan ni titta på min [andra webbplats](http://www.student.bth.se/~vihd14/dbwebb-kurser/design/me/anax-flat/htdocs/typography).

###Figuremodul
Jag arbetade även en del med figure.less för att lägga till klasser som kunde användas på
bilder. Det som används mest är positionering men jag har även lagt till en del effekter
om man vill ge bilderna något extra.
