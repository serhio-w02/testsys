# testsys
kdo bi vedel - ...

v tem repozitoriju je izvedba iz prepisa   2020_03_11_yii2_trans_01_02.txt
vsebina zajema:
1) namestitev ogrodja in demo aplikacije (yii2-app-advanced)

    a) sledi navodilom za namestitev
2) vpogled v zgradbo (mvc) ogrodja:

    a) replikacija pogleda / About --> About1
    
    b) ažuriranje kontrolerja vsled dostopa do novega pogleda --> replikacija aktivnosti
    
    c) ažuriranje menija, ki omogoča dostop do skripte

 
# za prvič navodila z vse tiste, ki se jim ne da narediti replikacije ure:
- predpostavimo, da imamo nameščen git, ki je s konzole (ukaznega okna) dosegljiv s preprostim ukazom git
- naredimo test dosegljivosti : git --version
- če imate git4windows lahko git lupino (GitBASH) odprete iz kontekstualnega menija (desni miškin gumb + odpri GITBASH tule)
- v primeru, da git-a nimate, lahko iz github-a dolpotegnete zip in ga razpakirate nekaj pod korenski imenik strežnika in spustite točko 1
1) z git dolpotegnemo vejo, ki jo želimo; v našem primeru je to pog_01 (prvo poglavje):
```
git -b pog_01 https://github.com/serhio-w02/testsys.git ; -b parameter specificir vejo, ki jo želite
```
naredi se mapa testsys
2) prestavimo se v mapo testsys, ažuriramo composer, ažuriramo pakete composerja:
```
>cd testsys
>composer selfupdate
>composer update
```
brez slednjega ne bo nič delovalo !

3) inicializacija okolja aplikacije je bila že narejena /preveri, če so .php datoteke v common/config mapi in če je v main-local.php datoteki kot baza navedena 'baza'; ostane nam zgolj izvedba migracije oz. populacija tabel baze s podatki/; kreiramo podatkovno bazo in migriramo:
```
>mysql -u root -p  
mysql> create database baza character set utf8 collate utf8_slovenian_ci;
>yii migrate
```
4) ker smo pravkar ustvarili bazo in tabele, bo potrebno v aplikaciji registirati in omogočiti uporabnika (prvega uporabnika uporabimo kot administratorja, da preskočimo potrjevanje kreiranja uporabnika preko maila, popravite v tabeli user status uporabnika iz 9 v 10.

naslovite ../frontend/web in izvedete sign-in (registracijo)
nato popravite atribut v tabeli baze kot spodaj:
```
>mysql -uroot -p
mysql> use baza;
mysql> update user set status=10 
```

to je to:
če naslovite .../frontend/web in se prijavite, morate kot prijavljen uporabnik v meniju dobiti About-1
...

opomba ali dve  : če kdo uporablja katerikoli xNIX operacijski sistem:
yii je php skripta, če ni shell skripte, kot je yii.bat za winse, uporabite 
*php yii migrate*
s dovoljenji za dostop bo brez inicializacije problem; lahko uporabite init skripto ali pa izvedete *chmod -R 0777* na mapah:
*common/runtime, backend/runtime, backend/web/assests, frontend/runtime, frontend/web/assets*
