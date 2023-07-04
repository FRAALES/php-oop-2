<?php
// Classe per rappresentare un prodotto
class Prodotto {
    public $nome;
    public $prezzo;
    public $tipo;

    public function __construct($nome, $prezzo, $tipo) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->tipo = $tipo;
    }

    public function stampaCard() {
        echo '<div class="card">';
        echo '<h2>' . $this->nome . '</h2>';
        echo '<p>Prezzo: ' . $this->prezzo . ' Euro</p>';
        echo '<p>Tipo: ' . $this->tipo . '</p>';
        echo '</div>';
    }
}

// Classe per gestire il negozio online
class Negozio {
    public $prodotto1;
    public $prodotto2;
    public $prodotto3;
    public $prodotto4;
    public $prodotto5;
    public $prodotto6;

    public function __construct() {
        $this->prodotto1 = new Prodotto("Cibo per cani", 10.99, "Cibo");
        $this->prodotto2 = new Prodotto("Gioco per cani", 5.99, "Gioco");
        $this->prodotto3 = new Prodotto("Cuccia per cani", 49.99, "Cuccia");
        $this->prodotto4 = new Prodotto("Cibo per gatti", 8.99, "Cibo");
        $this->prodotto5 = new Prodotto("Gioco per gatti", 3.99, "Gioco");
        $this->prodotto6 = new Prodotto("Cuccia per gatti", 39.99, "Cuccia");
    }

    public function visualizzaProdotti($categoria) {
        echo '<h1>Prodotti per ' . $categoria . '</h1>';

        if ($categoria === 'Cani') {
            $this->prodotto1->stampaCard();
            $this->prodotto2->stampaCard();
            $this->prodotto3->stampaCard();
        } elseif ($categoria === 'Gatti') {
            $this->prodotto4->stampaCard();
            $this->prodotto5->stampaCard();
            $this->prodotto6->stampaCard();
        } else {
            echo 'Nessun prodotto disponibile per questa categoria.';
        }
    }
}

// Creazione del negozio
$negozio = new Negozio();

// Visualizzazione dei prodotti
$negozio->visualizzaProdotti("Cani");
$negozio->visualizzaProdotti("Gatti");
?>
