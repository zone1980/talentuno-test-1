# Teszt feladat

A feladatok:
* meg kell valósítani a ManagerInterface -t (App\TestOneBundle\Interfaces), úgy
hogy nem kell adatbázishoz kapcsolódjon, csak adjon vissza egy objektumok tömbjét
* a visszaadott tömbben több féle objektum is lehet (és legyen is), ezeknek az objektumoknak a leírása
az adott résznél található (Product, User, Cart, Order, Invoice)
* az objektumoknak protected változóik vannak, amik getter/setter -el legyenek kezelve
* az objektumokat át kell transzformálni tömbbé
* a kapott tömböt és a típushoz tartozó URL -t át kell adni a ConnectorInterface megvalósításának sendDate
metódusának
* a ConnectorInterface megvalósítása a szabványos kimenetre kiírja a kapott URL -t és az adatot  

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