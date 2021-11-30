<?php 
 /**
  * Variáveis são espaços reservados na memória do computador para guardar informações que serão utilizadas durante a execução do programa.
  O PHP é uma linguagem de programação com tipagem fraca, ou sejá, não necessitando informar qual o tipo da variavel, da função ou retorno.
  Além disso, o PHP é case sensitive. Isso significa que ele faz diferença entre letras maiusculas e minusculas.

  */

  $nome = "Gabriel da Silva Inácio";
  $idade = 19;
  $altura = 1.80;

  echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura";

  //alterando dados
  $nome = "Felipe Cabral";
  $idade = 29;
  $altura = 1.91;
  
  echo "<br>";
  echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura";

  /**Nomes Válidos de variáveis
   * $nome
   * $_nome
   * $carro10
   * $meu_nome
   * $meuNome
   */

   /**Nomes Inválidos
    * $12nome
    $carro?
    $meu carro
    */