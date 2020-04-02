# testsys
iz 55_cet_02_04_2020 

theming

podaja princip spreminjanja tem v Yii2

rezultat je dodanih par bootstrap 3 tem

opomba: ta kos se ukvarja zgolj z css/js/fonti ne pa tudi z definicijo in grupiranjem elementov; to je bilo
predhodno že obdelano




uporabite dolpoteg ali
```
git clone -b pog_06 https://github.com/serhio-w02/testsys.git
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

