# Strona tytułowa.

Tutaj stworzymy klasyczny index.php, gdzie będziemy poruszać zagadnienia podstawowe takie jak:

## Opis projektu

Omówić jaką aplikację będziemy tworzyć

## XAMPP

* instalacja
* uruchomienie i konfiguracja
* własny vhost

```bash
<VirtualHost *:8880>
    ServerName udemy.localhost
    DocumentRoot ".../udemy-course/"
    <Directory ".../udemy-course/">
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
