# testsys
iz 53_cet_26_03_2020 

populacija vsebine uvodne strani (front-end) v skladu s spremembo v podaktovni bazi

predhodno smo v javni del aplikacije (front-end) že dodali možnost vnosa/spremembe/brisanja oddaje

sprememba modela
spremenjene vizualizacije v views/advert (index, _form, _view)
spremenjen kontroler : omogoča nalaganje slike
spremenjen winget za advert : sedaj omogoča prikaz slike


uporabite dolpoteg ali
```
git clone -b pog_05 https://github.com/serhio-w02/testsys.git
cd testsys
```
nato izvedite
```
> composer update
> php yii migrate
```
Za uvoz demo vsebine
```
mysql -u root -p < ./console/initdb/demo.sql
```
Uvožen uporabnik admin123/admin123 . 
če želite na začetni strani slike advert-a in ne naključne, dodajte 3 adverte

