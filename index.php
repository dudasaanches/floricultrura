<?php 

include("Flores.php");
include("Margarida.php");
include("Lirio.php");
include("Plumeria.php");
include("Girassol.php");
include("Tulipa.php");

$margarida = new Margarida("Margarida", "Chrysanthemum leucanthemum ","Suave e relaxante" , "50 - 80cm","Zonas ribeirinhas e relvados húmidos");
$lirio = new Lirio("Mingau", "Vira-lata", 2, "Branco");
$margarida = new Margarida("Totó", "Vira-lata", 3, "Caramelo");
$lirio = new Lirio("Lírio", "", 2, "Branco");

$plumeria = new Plumeria("Tartaruga", "Jabuti", 100, "Verde");
$girassol = new Girassol("Leticia", "Python", 5, "Preto");
$lirio = new Lirio("Lírio", "Lírio Asíatico", "Inebriante", "1 - 2m", "Úmido");
$plumeria = new Plumeria("Pluméria", "Frangipani-gigante", "Doce e suave", "4.7 - 6.0 m", "Úmido e ensolarado");
$girassol = new Girassol("Girassol", "Helianthus annuus", " suave e leve", "2 a 3 metros", "ensolarado", "suvinil");
$tulipa = new Tulipa ("Tulipa", "Monogynia", "Adocicado", "16,7 cm", "Climas frios");

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