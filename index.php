<?php 

include("Flores.php");
include("Margarida.php");
include("Lirio.php");
include("Plumeria.php");
include("Girassol.php");
include("Tulipa.php");


$margarida = new Margarida("Margarida", "Chrysanthemum leucanthemum ","Suave e relaxante" , "50 - 80cm","Zonas ribeirinhas e relvados húmidos", "Branca");
$lirio = new Lirio("Mingau", "Vira-lata", 2, "Branco");
$plumeria = new Plumeria("Tartaruga", "Jabuti", 100, "Verde");
<<<<<<< HEAD
$girassol = new Girassol("Girassol", "Helianthus annuus", " suave e leve", "média", "ensolarado", "suvinil");
$tulipa = new Tulipa("Leticia", "Python", 5, "Preto");
=======
$girassol = new Girassol("Leticia", "Python", 5, "Preto");
$tulipa = new Tulipa ("Tulipa", "Monogynia", "Adocicado", "16,7 cm", "Climas frios");
>>>>>>> f8bf6dcfe147bfeb0ceaff59913ee61bbfa54916

echo "Nome: " . $margarida->getNome() . " <br>";
echo "Espécie: " . $margarida->getEspecie() . " <br>";
echo "Aroma: " . $margarida->getAroma() . " <br>";
echo "Tamanho: " . $margarida->getTamanho() . " <br>";
echo "Ambiente: " . $margarida->getAmbiente() . " <br>";

echo "<hr>";

echo "Nome: " . $lirio->getNome() . " <br>";
echo "Espécie: " . $lirio->getEspecie() . " <br>";
echo "Aroma: " . $lirio->getAroma() . " <br>";
echo "Tamanho: " . $lirio->getTamanho() . " <br>";
echo "Ambiente: " . $lirio->getAmbiente() . " <br>";

echo "<hr>";

echo "Nome: " . $plumeria->getNome() . " <br>";
echo "Espécie: " . $plumeria->getEspecie() . " <br>";
echo "Aroma: " . $plumeria->getAroma() . " <br>";
echo "Tamanho: " . $plumeria->getTamanho() . " <br>";
echo "Ambiente: " . $plumeria->getAmbiente() . " <br>";

echo "<hr>";

echo "Nome: " . $girassol->getNome() . " <br>";
echo "Espécie: " . $girassol->getEspecie() . " <br>";
echo "Aroma: " . $girassol->getAroma() . " <br>";
echo "Tamanho: " . $girassol->getTamanho() . " <br>";
echo "Ambiente: " . $girassol->getAmbiente() . " <br>";

echo "<hr>";

echo "Nome: " . $tulipa->getNome() . " <br>";
echo "Espécie: " . $tulipa->getEspecie() . " <br>";
echo "Aroma: " . $tulipa->getAroma() . " <br>";
echo "Tamanho: " . $tulipa->getTamanho() . " <br>";
echo "Ambiente: " . $tulipa->getAmbiente() . " <br>";