# Periodic Explorer

O **Periodic Explorer** é uma aplicação web desenvolvida para consulta e exploração de elementos químicos da tabela periódica.

O projeto tem como objetivo praticar conceitos de **desenvolvimento web, Programação Orientada a Objetos, arquitetura em camadas e integração com APIs externas**, mantendo uma estrutura organizada, desacoplada e preparada para futuras expansões.

## Tecnologias

- PHP
- JavaScript
- jQuery
- HTML5
- CSS3
- Bootstrap
- API externa de dados da tabela periódica

## Arquitetura

O projeto utiliza uma **arquitetura em camadas**, separando as responsabilidades da aplicação e evitando que diferentes partes do sistema fiquem diretamente acopladas.

A aplicação também utiliza **Programação Orientada a Objetos (POO)** em PHP, buscando facilitar a manutenção, reutilização e evolução do código.

A comunicação com a API externa será centralizada na camada **Repository**, responsável pela busca e obtenção dos dados.

Estrutura conceitual:

```text
Entrada
   ↓
Tratamento
   ↓
Regra de negócio
   ↓
Repository
   ↓
API externa
```

Essa separação permite que alterações na fonte dos dados ou em uma determinada parte da aplicação tenham o menor impacto possível nas demais camadas.

## Funcionalidades

O projeto contará com funcionalidades como:

- Busca de elementos pelo nome ou símbolo;
- Consulta de informações dos elementos;
- Visualização do número atômico;
- Visualização da massa atômica;
- Configuração eletrônica;
- Grupo, período e bloco;
- Classificação do elemento;
- Exploração visual da tabela periódica;
- Tratamento de entradas inválidas;
- Tratamento de erros de comunicação com a API.

## Backend

O backend será desenvolvido em PHP utilizando Programação Orientada a Objetos.

A aplicação será responsável por receber e validar as entradas, processar as requisições e utilizar o Repository para obter os dados necessários através da API externa.

O código será estruturado buscando:

- Baixo acoplamento;
- Separação de responsabilidades;
- Validação de dados;
- Tratamento de exceções e erros;
- Reutilização de componentes;
- Facilidade de manutenção;
- Maior resistência a entradas inesperadas e falhas externas.

## Frontend

O frontend utilizará HTML, CSS, Bootstrap e jQuery.

A interface será responsável pela interação com o usuário e pela apresentação das informações obtidas pelo backend, mantendo a lógica de acesso à API concentrada no servidor.

## Objetivos do Projeto

O Periodic Explorer é, principalmente, um projeto de estudo e prática.

Os principais objetivos são:

- Praticar PHP com Programação Orientada a Objetos;
- Trabalhar com arquitetura em camadas;
- Aprender a estruturar um backend de forma organizada;
- Trabalhar com APIs externas;
- Desenvolver validações e tratamento de erros;
- Praticar integração entre frontend e backend;
- Aplicar princípios de baixo acoplamento e separação de responsabilidades.

## Status

Em desenvolvimento.

## Desenvolvedor

**joaohpr**
