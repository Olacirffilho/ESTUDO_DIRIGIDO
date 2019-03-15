<?php
//Exercicio1
  
    print  "Digite um valor em metros para ser convertido:   ";
    $metros  = ( float ) fgets ( STDIN );

    $mil =  $metros * 1000 ;

    print  " Valor em milimetros: $mil  " ;

//Exercicio2
 
print  " Digite o número de dias: " ;
    $days  = ( int ) fgets ( STDIN );

    print  " Digite o número de horas: " ;
    $hours  = ( int ) fgets ( STDIN );

    print  " Digite o número de minutos: " ;
    $minutes = ( int ) fgets ( STDIN );

    print  " Digite o número de segundos: " ;
    $seconds = ( int ) fgets ( STDIN );

    $segundos_dias  =  $days  *  86400 ;
    $segundos_horas  =  $hours  *  3600 ;
    $segundos_minutos  =  $minutes  *  60 ;
    $total_segundos  =  $segundos_dias  +  $segundos_horas  +  $segundos_minutos  +  $seconds ;

    print  " O total de segundos perdidos foi: $total_segundos " ;

//Exercicio3

  print "Digite o valor de seu salário atual: ";
$sal = (float) fgets (STDIN);

print "Digite a porcentagem do aumento: ";
$porc = (float) fgets (STDIN);

$nova_porc = $porc/100;
$valor_aum = $sal*$nova_porc;
$novo_sal = $sal+$valor_aumento;

print "O salário atual reajustado é: $novo_sal e o valor do aumento é:$valor_aum";
print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

    #galao
    $galao_rend = 21.6; #3.6*6
    $galao_preco = 25;

    #a  compra apenas de galaoes de 3,6 litors

    $qtd_galao = ceil($area / $galao_rend);
    $galao_custo = $qtd_galao * $galao_preco;
     print "\nSerão necessárias $qtd_galao lata(s) no valor de R$$galao_custo\n";

//Exercicio4

print "Digite o preço do produto: ";
    $preco = (float) fgets (STDIN);

    print "Digite a porcentagem de desconto: ";
    $desconto = (float) fgets (STDIN);

    $novo_desconto = $desconto/100;
    $valor_real_porc = $preco*$novo_desconto;
    $novo_preco = $preco-$valor_real_porc;

    print "O preço do produto reajustado é: $novo_preco, o desonto foi de: $valor_real_porc ";

//Exercicio5

print "Digite a distância a percorrer em (km): ";
    $km = (float) fgets (STDIN);

    print "Digite qual fui a velocidade média: ";
    $vm = (float) fgets (STDIN);

    $tp = $km/$vm;

    print "o tempo de viagem é de $tp horas";

//Exercicio6

print "Temperatura em graus Celsius: ";
    $cel = (float) fgets (STDIN);

    $fah = (float)(9*$cel)/(5)+32;

    print "A temperatura em fahrenheit é de: $fah";

//Exercicio7

print "\nQuantos dias o carro ficou alugado?\n";
    $dias = (int) fgets (STDIN);

    print "Quantos quilômetros foram percorridos com o carro?\n";
    $km_percorridos = (float) fgets (STDIN);
    
    $custo_dias = 60 * $dias;
    $custo_km = 0.15 * $km_percorridos;
    $resultado = $custo_dias + $custo_km;

    print "\nO preço final ficou por: R$ $resultado\n";

//Exercicio8

print "\nHá quantos anos você fuma? R: ";
    $anos_fum = (int)fgets(STDIN);
    print "\nE quantos cigarros você fuma por dia? R: ";
    $cigarros_por_dias = (int)fgets(STDIN);

    $cigarros_fum = $cigarros_por_dias*365*$anos_fum;
    $minutos_perdidos = $cigarros_fum*11;
    $horas_perdidas = $minutos_perdidos/60;
    $dias_perdidos = round($horas_perdidas/24);

    print "\nVocê perdeu $dias_perdidos de vida fumando\n";

//Exercicio9a

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

    #lata
    $lata_rend = 108; #18*6
    $lata_preco = 80;

    #a  compra apenas de latas de 18 litros

    $qtd_latas = ceil($area / $lata_rend);
    $latas_custo = $qtd_latas * $lata_preco;
     print "\nSerão necessárias $qtd_latas lata(s) no valor de R$$latas_custprint "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

    #galao
    $galao_rend = 21.6; #3.6*6
    $galao_preco = 25;

    #a  compra apenas de galaoes de 3,6 litors

    $qtd_galao = ceil($area / $galao_rend);
    $galao_custo = $qtd_galao * $galao_preco;
     print "\nSerão necessárias $qtd_galao lata(s) no valor de R$$galao_custo\n";o\n";

//Exercicio9b

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

    #galao
    $galao_rend = 21.6; #3.6*6
    $galao_preco = 25;

    #a  compra apenas de galaoes de 3,6 litors

    $qtd_galao = ceil($area / $galao_rend);
    $galao_custo = $qtd_galao * $galao_preco;
     print "\nSerão necessárias $qtd_galao lata(s) no valor de R$$galao_custo\n";

//Exercicio9c

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

    #lata
    $lata_rend = 108; #18*6
    $lata_preco = 80;

    #galao
    $galao_rend = 21.6; #3.6*6
    $galao_preco = 25;

    #a  compra apenas de latas de 18 litros

    $qtd_latas = ceil($area / $lata_rend);
    $latas_custo = $qtd_latas * $lata_preco;
    
     print "\nSerão necessárias $qtd_latas lata(s) no valor de R$$latas_custo\n";

    $qtd_latas = 0;
    $qtd_galoes= 0;
    
    $qtd_latas = (int) ($area / $lata_rend);
    $faltou_latas = $area % $lata_rend;
    $qts_galoes = ceil($faltou_latas / $galao_rend);

    print "$faltou_latas - $qtd_latas\n";


