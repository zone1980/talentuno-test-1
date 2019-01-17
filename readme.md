# Teszt feladat

Egy Manager -ből érkező adatokat kell átalakítani, majd a Connector -nak átadni.
A Manager nem kell, hogy adatbázishoz csatlakozzon, egyszerűen 
az interface -ben definiált findAll metódus adja vissza a tömböt az adatokkal.
Az adatok objektumokban vannak, ezeket kell majd transzformálni tömbbé,
hogy a Connector -al el lehessen küldeni. Minden adat típusnak (Objektumnak) van
még egy URL -je is, ahova kell majd küldeni. Nem kell kiküldeni semmilyen adatot, a Connector
írja ki a kimenetre, hogy mit és hova küldene.

Kérlek a két feladatot legalább 2 commitban készítsd el, a commit message -ben
legyen benne, hogy melyik feladatra ment a commit. Ha az első rész elkészült és belekezdtél
a másodikba, akkor az elsőre már ne legyen több commit.
Úgy kell elképzelni, hogy a két feladat között több idő is eltelik, amikor
az első feladatot csinálod, akkor csak annyit tudsz, hogy majd bővíteni kell
tudni a rendszert, de azt nem tudod mikor és mivel.

A feladathoz PHP 7 és Symfony használható, új package nem kell hozzá.

Kérlek forkold le a repository -t, majd a saját példányodba commitolj. 

## első rész
Meg kell valósítani a fent leírt feladatot 3 adattípussal, de úgy, hogy az bővíthető
legyen anélkül, hogy a már meglévő kódba bele kelljen nyúlni.
Ez a 3 adattípus:
* Product
    * productId
    * price
    * description
* User
    * email
    * firstName
    * lastName
* Cart
    * email
    * items[]
        * productId
        * quantity

Az url -ek a típusokhoz:
* Product: http://example.com/product
* User: http://example.com/customer
* Cart: http://example.com/cart

Bármilyen osztályokat és interface -eket csinálhatsz, kérlek
a futása a a TestOneCommand -ban legyen elindítva.

## második rész
Az alábbi két típust kell még definiálni úgy, hogy a meglévő osztályokba már nem
írhatsz bele, csak új osztályokat definiálhatsz és konfigurációt írhatsz.

A futása a a TestTwoCommand -ban legyen elindítva.
* Order
    * orderId
    * email
    * items[]
        * productId
        * quantity
* Invoice
    * email
    * orderId
    * description

Az url -ek a típusokhoz:
* Order: http://example.com/sales
* Invoice: http://example.com/finance
    
## a kiértékelés szempontjai
* sikerült e bővíthetőre elkészíteni a feladatot, a második részben tényleg nem kellett e belenyúlni az eredeti kódba
* mennyire tiszta a kód, olvasható, bővíthető
* be vannak e tartva az alapvető fejlesztői szabályok, irányelvek (SOLID, DRY, KISS...)
* mennyire van használva a PHP7 szintaktikája, nincs e benne típushiba
* vannak e nem lekezelt hibák, át nem gondolt esetek
* a performancia nem szempont ebben a feladatban.