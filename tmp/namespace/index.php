<?php

require_once "util.php";

/*
 W powyższym przykładzie definiujemy przestrzeń nazw o nazwie "MojaPrzestrzenNazw".
Wewnątrz tej przestrzeni nazw definiujemy klasę "MojaKlasa" oraz funkcję "mojaFunkcja".
Aby odwołać się do tych elementów poza przestrzenią nazw, musimy użyć pełnej ścieżki, na przykład:
 */

$obj = new MojaPrzestrzenNazw\MojaKlasa();
MojaPrzestrzenNazw\mojaFunkcja();

// Przestrzenie nazw można zagnieżdżać, tworząc hierarchię. Na przykład:

$obj = new MojaPrzestrzenNazw\Podprzestrzen\InnaKlasa();