Laddningstid och användbarhet
==============================
Under denna analys testas laddningstiden och användbarheten för fyra olika hemsidor. Testerna körs
med [Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/) som mäter hur pass
bra sidan laddas samt hur god användbarheten är. Detta mäts på en skala mellan 0 och 100. Mätningen
visas för både datorer och mobila enheter.

Laddningstiden som redovisas för varje sida här nedan visar hur lång tid det tar innan sidans
alla egna resurser laddat färdigt. Alltså när sidan är klar att användas fullt ut. *Observera att
laddningstiden kan variera beroende på t.ex. nätverkshastighet och hur pass kraftfull enheten som
används är.*

##1. YouTube
Majoriteten känner till YouTube där användare kan ladda upp videos som når ut globalt till allas nöje.

###1.1 Startsida
[https://www.youtube.com/](https://www.youtube.com/)

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>63/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>76/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>99/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>2.45 s</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>92</td>
</tr>
<tr>
<td>Total storlek</td>
<td>1.6 MB</td>
</tr>
</table>  


*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Prioritera synligt innehåll</li>
<li>Gör tryckytor tillräckligt stora</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Optimera bilder</li>
</ul>

###1.2 Trending
[https://www.youtube.com/feed/trending](https://www.youtube.com/feed/trending), sidan där de mest populära
videorna för tillfället visas.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>57/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>84/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>100/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>1.38 s</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>48</td>
</tr>
<tr>
<td>Total storlek</td>
<td>778 KB</td>
</tr>
</table>  


*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Undvik omdirigeringar från målsidan</li>
<li>Prioritera synligt innehåll</li>
<li>Minska svarstiden från servern</li>
</ul>

###1.3 About
[https://www.youtube.com/yt/about/en-GB/](https://www.youtube.com/yt/about/en-GB/), information om YouTube.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>75/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>89/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>63/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>303 ms</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>22</td>
</tr>
<tr>
<td>Total storlek</td>
<td>139 KB</td>
</tr>
</table>  


*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Använd läsbara teckensnittsstorlekar</li>
<li>Gör tryckytor tillräckligt stora</li>
<li>Konfigurera visningsområdet</li>
<li>Anpassa storleken på innehållet efter visningsområdet</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Prioritera synligt innehåll</li>
</ul>

**Utvärdering**  
Överlag verkar sidan ha en mycket bra användarupplevelse, speciellt i de två första exemplerna (det sista gick sådär). Enligt
korrigeringsförslagen bör sidan tänka på att prioritera det synliga innehållet och ta bort kod som blockerar renderingen.
Laddningstiden är relativt snabb på respektive sidor så där finns inget att klaga på.


##2. Bthstudent.se
Sidan för alla studenter på bth som är intresserade av kårlivet. Här finns information om hur man blir medlem i kåren
samt hur kårstyrelsen fungerar.

###2.1 Startsida
[https://www.bthstudent.se/](https://www.bthstudent.se/)

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>54/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>71/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>99/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>1.94 s</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>50</td>
</tr>
<tr>
<td>Total storlek</td>
<td>943 KB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Minska svarstiden från servern</li>
<li>Konfigurera visningsområdet</li>
<li>Förminska CSS, JavaScript och HTML</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Gör tryckytor tillräckligt stora</li>
</ul>

###2.2 Studentkåren
[https://www.bthstudent.se/studentkaren/](https://www.bthstudent.se/studentkaren/), information om studentkåren uppdelad i olika flikar.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>57/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>77/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>99/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>1.68 s</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>36</td>
</tr>
<tr>
<td>Total storlek</td>
<td>665 KB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Minska svarstiden från servern</li>
<li>Förminska CSS, JavaScript och HTML</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Gör tryckytor tillräckligt stora</li>
</ul>

###2.3 Bli medlem
[https://shop.bthstudent.se/member](https://shop.bthstudent.se/member), hur du blir medlem samt sidan där du köper medlemsskap.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>70/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>88/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>69/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>673 ms</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>7</td>
</tr>
<tr>
<td>Total storlek</td>
<td>66.2 KB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Använd läsbara teckensnittsstorlekar</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Gör tryckytor tillräckligt stora</li>
<li>Konfigurera visningsområdet</li>
</ul>

**Utvärdering**  
Användarupplevelsen är relativt bra på alla sidor som testades men hastigheten på både mobila enheter samt datorer är inte
speciellt optimerad. Förutom de fel som bör korrigeras enligt PageSpeed kom det även upp ett och annat error i konsolen som
bland annat visade att någon bild inte laddades som den skulle samt att vissa filer saknades. Inte så optimalt för en hemsida
som används av

##3. Karlskronahem.se
En hemsida för de som söker nytt boende i form av hyresrätter (lägenheter) i Karlskrona. Finns även specifika studentlägenheter
att söka, såsom delade rum till egna enrummare med pentry/kokvrå.

###3.1 Startsida
[http://www.karlskronahem.se/](http://www.karlskronahem.se/)

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>54/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>63/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>64/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>641 ms</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>34</td>
</tr>
<tr>
<td>Total storlek</td>
<td>794 KB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Minska svarstiden från servern</li>
<li>Använd läsbara teckensnittsstorlekar</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Gör tryckytor tillräckligt stora</li>
<li>Konfigurera visningsområdet</li>
</ul>

###3.2 Karlskronahem student
[http://www.karlskronahem.se/Student/](http://www.karlskronahem.se/Student/), specifika lägenheter för studenter.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>54/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>62/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>64/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>654 ms</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>30</td>
</tr>
<tr>
<td>Total storlek</td>
<td>823 KB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Använd läsbara teckensnittsstorlekar</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Gör tryckytor tillräckligt stora</li>
<li>Konfigurera visningsområdet</li>
</ul>

###3.3 Områden
[http://www.karlskronahem.se/omraaden/](http://www.karlskronahem.se/omraaden/), de områden där lägenheterna finns.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>66/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>80/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>62/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>661 ms</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>40</td>
</tr>
<tr>
<td>Total storlek</td>
<td>406 KB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Använd läsbara teckensnittsstorlekar</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Gör tryckytor tillräckligt stora</li>
<li>Konfigurera visningsområdet</li>
</ul>


**Utvärdering**  
Hemsidan laddas relativt snabbt på respektive sida jag testade men användarupplevelsen är inget vidare.
Jag har testat sidan både på datorn och min mobil. På datorn fungerar den helt okej men den är verkligen
inte anpassad för mobilt bruk. När man klickar runt på de olika flikarna "går sidan sönder" och delarna
hoppar runt. Det visas även på korrigeringslistan som PageSpeed skapade, att de bör tänka på att konfigurera
visningsområdena t.ex.

##4. Systembolaget.se
Sveriges återförsäljare för alkoholhaltiga drycker.

###4.1 Startsida
[https://www.systembolaget.se/](https://www.systembolaget.se/)

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>58/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>77/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>100/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>2.30 s</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>41</td>
</tr>
<tr>
<td>Total storlek</td>
<td>2.1 MB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Prioritera synligt innehåll</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Aktivera komprimering</li>
</ul>

###4.2 Dryckesfakta och nyheter
[https://www.systembolaget.se/fakta-och-nyheter/](https://www.systembolaget.se/fakta-och-nyheter/), fakta om olika drycker samt nyheter i sortimentet.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>59/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>82/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>100/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>1.48 s</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>34</td>
</tr>
<tr>
<td>Total storlek</td>
<td>2.2 MB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Prioritera synligt innehåll</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Aktivera komprimering</li>
</ul>

###4.3 Vårt uppdrag
[https://www.systembolaget.se/vart-uppdrag/](https://www.systembolaget.se/vart-uppdrag/), varför systembolaget existerar.

<table border="1" cellpadding="5">
<tr>
<td><b>MÄTPUNKT</b></td>
<td><b>MÄTVÄRDE</b></td>
</tr>
<tr>
<td>Mobilhastighet</td>
<td>58/100</td>
</tr>
<tr>
<td>Datorhastighet</td>
<td>79/100</td>
</tr>
<tr>
<td>Användarupplevelse</td>
<td>100/100</td>
</tr>
<tr>
<td>Laddningstid</td>
<td>1.73 s</td>
</tr>
<tr>
<td>Antal resurser</td>
<td>50</td>
</tr>
<tr>
<td>Total storlek</td>
<td>3.3 MB</td>
</tr>
</table>  

*Följande bör/kan enligt PageSpeed korrigeras:*
<ul>
<li>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</li>
<li>Optimera bilder</li>
<li>Prioritera synligt innehåll</li>
<li>Utnyttja cachelagring i webbläsare</li>
<li>Aktivera komprimering</li>
</ul>

**Utvärdering**  
Användarupplevelsen var 100/100 på alla sidor jag testade vilket är imponerande! Hastigheten visade sig vara snabbare
på datorer än mobila enheter. Laddningstiden låg i genomsnitt på ca 2 sekunder men det är ganska självklart
med tanke på den totala storleken som låg på över 2 MB på respektive sida. Så de behöver tänka på att optimera sina
bilder samt aktivera komprimering för att minska storleken på sidans innehåll och på så vis öka laddningstiden samt
hastigheten för mobila enheter och även för datorer. Annars var detta den webbplats med minst anmärkningar från PageSpeed.

##Sammanfattning
Enligt PageSpeed behöver respektive testade webbplatser tänka på att optimera sina bilder så att de inte tar upp
så mycket plats och gör hemsidan långsammare. Genom att komprimera bildernas storlek kan man minska laddnigstiden
avsevärt, utan att förlora allt för mycket av bildernas kvalitet. Sedan anmärks det på JavaScript- och CSS-kod som
blockerar renderingen från innehållet samt att webbplatserna behöver prioritera det synliga innehållet. Jag kan
bara anta att de lagt ned lite för mycket tid på det innehåll som inte syns istället för att optimera sidan för
användaren, med tanke på att PageSpeed gnäller på det synliga innehållet.

Många webbsidor behöver även tänka på att visst klickbart innehåll blir alldeles för litet på mobilskärmar jämfört med
på skrivbordet. Det gör det otroligt svårt att klicka på exempelvis länkar om man knappt ser vart den ena slutar och
en annan börjar. Det är inte optimalt att man alltid behöver zooma in skärmen för att klicka på någonting.

För att sammanfatta behöver respektive sidor i detta test tänka på användarvänligheten på mobila enheter samt komprimeringen
av bilder och annat innehåll som tar mycket plats (om detta är möjligt, såklart). Detta för att minska laddingstiden på sidan
så att användaren slipper vänta för länge för att sidans innehåll ska laddas klart.

**Jag skulle själv vilja rangordna sidorna så här:**
<ul>
<li>Systembolaget</li>
<li>YouTube</li>
<li>Bthstudent</li>
<li>Karlskronahem</li>
</ul>

Systembolaget hade helt klart den högsta användarbarheten, trots att den laddades långsammast av alla. Detta berodde antagligen
på det stora innehållet som deras sortiment av alkohol mäter samt det faktum att majoriteten av deras produkter har en egen sida
med en bild på hur produkten ser ut. De använder även flera bilder till sin startsida och de andra två sidorna jag testade. Med
tanke på det stora innehållet kan man inte klaga speciellt mycket på laddningstiden jämfört med t.ex. YouTube som hade liknande
laddningstid på flera av sina sidor men avsevärt mindre storlek på sitt innehåll. Därför knep systembolaget förstaplatsen.

Jag ville utöver mina egna upplevelser lägga Bthstudent längst ned på grund av de errors som kom upp i sidans konsoll men enligt
mätvärdena var Karlskronahem lite sämre. Sidornas hastighet på mobil samt dator var inget att hurra över och användarupplevelsen
låg på under 65/100 på respektive sida, vilket är ganska dåligt med tanke på sidans totala storlek, som inte var speciellt stor.
Jag gick in lite djupare på sidans problem i sammanfattningen här ovan.

##Laddningstid
Jag tycker att en sida bör ladda hela sitt innehåll på mindre än en sekund för att uppfattas som snabb. Om det tar över tre sekunder
tycker jag webbplatsen är långsam och borde se över hur innehållet kan komprimeras för att öka hastigheten. De flesta av mina
webbplatser laddas inom gränsen på tre sekunder och det kan man inte mer än att vara nöjd över!

*Jag gjorde analysen själv och har därför ingen gruppmedlem att skriva om.*
