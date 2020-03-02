# Strona tytułowa.
Tutaj stworzymy klasyczny index.php, gdzie będziemy poruszać zagadnienia podstawowe takie jak:

## XAMPP

* intalacja
* uruchomienie i konfiguracja
* własny vhost

```
<VirtualHost *:8880>
    ServerName udemy.localhost
    DocumentRoot "H:/Html i pochodne/Moja praca/PhpstormProjects/udemy-course/"
    <Directory "H:/Html i pochodne/Moja praca/PhpstormProjects/udemy-course/">
        Require all granted
    </Directory>
</VirtualHost>
```
* Modyfikacja: C:\windows\system32\drivers\etc\hosts

## PHP

* struktura pliku php
  * tag otwierający
  * deklaracja trybu ścisłego
  * przestrzeń nazw
* komentarze liniowe i blokowe
* wypisywanie danych z poziomu PHP: 
  * echo
  * print_r
  * var_dump
