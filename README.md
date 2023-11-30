# Sistema de Reserva de Mesas, Avaliações e Recompensas - RESERVANDO

Este repositório contém o sistema RESERVANDO, desenvolvido como projeto final do curso de Engenharia de Software na Universidade Católica de Joinville-SC. O sistema oferece uma experiência integrada para reservas de mesas, avaliações e um programa de recompensas para restaurantes.

## Visão Geral

O RESERVANDO é projetado para melhorar a experiência do cliente em restaurantes, facilitando reservas online, check-in, avaliações pós-visita e um programa de fidelidade. Para o restaurante, proporciona um gerenciamento eficiente de reservas e feedback dos clientes.

## Funcionalidades

- **Reservas Online**: Reserva de mesas com geração de códigos exclusivos.
- **Check-in na Mesa**: Confirmação fácil na mesa reservada.
- **Avaliações de Clientes**: Coleta de feedback após a visita.
- **Programa de Recompensas**: Benefícios para clientes regulares.
- **Gerenciamento de Reservas**: Facilita a gestão das reservas pelo restaurante.

## Tecnologias Utilizadas

- **Frontend**: HTML, CSS, SCSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL no AWS RDS
- **Servidor**: Arquivos no AWS EC2 em um servidor Ubuntu

## Pré-requisitos

- PHP, MySQL, Conta AWS (RDS e EC2)
- Conhecimentos em HTML, CSS, JavaScript e Ubuntu Server

## Instalação e Uso

1. Clone o repositório: `git clone https://github.com/Vitelovisk/Reservando.git`
2. Instale PHP, MySQL e ferramentas necessárias no servidor.
3. Configure o ambiente AWS conforme os passos abaixo.

## Configuração no AWS

### Passo 1: Banco de Dados no RDS

1. **Criação do Banco de Dados**: Acesse AWS RDS, crie uma instância MySQL.
2. **Configurações de Rede**: Assegure acesso público e configure as regras de segurança para MySQL.

### Passo 2: Servidor EC2

1. **Crie uma instância EC2**: Escolha Ubuntu Server.
2. **Configuração de Segurança**: Abra portas para HTTP, HTTPS e SSH.
3. **Conexão ao EC2**: Use SSH para acessar o servidor.
4. **Configuração do Ambiente**: Instale Apache, PHP e dependências.

### Passo 3: Hospedagem e Execução

1. **Envio de Arquivos**: Transfira os arquivos do projeto para EC2.
2. **Configuração do Apache**: Sirva os arquivos do projeto.
3. **Conexão com RDS**: Atualize o PHP com credenciais do RDS.
4. **Teste do Sistema**: Verifique se está tudo funcionando pelo site.

## Contribuições

Contribuições são bem-vindas! Faça um fork, crie um branch para sua feature e envie um pull request.

## Contato

- **Autor**: Vitor Tomasi - [vitortomasitomasi@gmail.com]
