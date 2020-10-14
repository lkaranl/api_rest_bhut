# API REST

<p align="center">
  <img width="700" height="300" src="https://raw.githubusercontent.com/lkaranl/api_rest_bhut/master/Img/logo.png">
</p>

1. [Apresentação](#Apresentação)
1. [Quais são as aplicações](#Quais-são-as-aplicações)
1. [Documentação](#Documentação)
1. [Pré-requisitos](#Pré-requisitos)
1. [Possíveis erros](#Possíveis-erros)

## Apresentação
Criacao de uma API REST usando PHP.<br/>
Contendo 3 endpoints e consumindo 2 endpoints.

## Quais são as aplicações?
* GET -> api/listCar (Retorna os dados da api externa;
* POST -> api/createCar (Cria um registro na api externa. Cria uma tabela log com os campos: id, data_hora e car_id. Salva na tabela o log efetuado.);
* GET -> api/logs (Consulta todos os registros salvos na tabela log).

## Documentação
Para usar a aplicação os arquivos devem estar no seu servidor web, e como o [PHP7](https://www.php.net/) devidamente instalado e configurado, porém nenhuma configuração adicional foi necessária. 

Para usar a aplicação os arquivos devem estar no seu servidor web, e como o PHP7 devidamente instalado e configurado, porém nenhuma configuração adicional foi necessária. Vide a  [documentação](https://www.php.net/docs.php) do PHP para mais informações.   

### Metodologia<br/>
A aplicação foi desenvolvida no sistema operacional Arch Linux, usando o [Apache](https://www.apache.org/) como servidor web. Todos os testes foram realizados em um testbed com 3 computadores, todos os computadores estavam com sistemas baseados em kernel Linux e  1 com sistema Microsoft Windows 7 utilizando uma [virtual machine](https://pt.wikipedia.org/wiki/M%C3%A1quina_virtual).

As técnicas de pesquisas utilizadas neste projeto foram a revisão bibliográfica, que teve como base referenciais teóricos que tratam de linguagem de programação [PHP](https://www.php.net/) e [REST](https://pt.wikipedia.org/wiki/REST). Outros software também foram utilizados no projetos, Ex: [Sublime](https://www.sublimetext.com/), [Apache](https://www.apache.org/), [Laravel](https://laravel.com/), entre outros. 


### Pré-requisitos
* Servidor Web;
* Linguagem interpretada PHP na versão 7.4.6-1.

### Como usar?
se você colocou os arquivos na pasta padrão do seu servidor web então basta acessar o seu [localhost](http://localhost/). 

Você iria visualizar as 3 opções disponíveis, bastando clicar sobre a opção desejada:
* Listar;
* Cadastrar;
* Logs.

Obs: Por ser uma versão de avaliação, algumas facilidades não foram desenvolvidas, tais como:
O cadastro deve ocorrer de maneira manual no arquivo ApiCreateCar.php, na linha 15.

![animacao](https://github.com/lkaranl/api_rest_bhut/raw/master/Img/alterar.png)

## Possíveis erros
Não foi possível conectar: Pode ocorrer devido a falta de rede ou o servidor web não está funcionando corretamente.

Obs: A função api/createCar pode apresentar instabilidade, pois depende da liberação de acesso do lado externo da aplicação. 



