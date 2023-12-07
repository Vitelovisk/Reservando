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
- **Análise de Código**: PHPStan para garantir a qualidade do código PHP
- **Monitoramento de Desempenho**: New Relic para observabilidade e monitoramento em tempo real
- **Integração (CI/CD)**: Este projeto utiliza o GitHub Actions para automatizar a Integração Contínua e a Implantação Contínua (CI/CD)
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

## Uso do New Relic

O New Relic é utilizado neste projeto para monitoramento e observabilidade em tempo real. Esta ferramenta ajuda a analisar o desempenho da aplicação, identificar gargalos, monitorar transações e entender a experiência do usuário. Com o New Relic, podemos garantir uma performance otimizada e rápida resolução de problemas.

# Instruções para Testar as Funcionalidades do Sistema RESERVANDO

Este guia fornece um passo a passo detalhado para testar as principais funcionalidades do sistema RESERVANDO, incluindo a realização de reservas como cliente e a administração dessas reservas como gerente.

## Testando como Cliente

1. **Acesso ao Sistema**: Visite o endereço [RESERVANDO](http://ec2-18-231-152-123.sa-east-1.compute.amazonaws.com/Reservando/index.php).
2. **Login do Cliente**: Faça login com as seguintes credenciais:
   - **Usuário**: cliente@gmail.com
   - **Senha**: 1234567
3. **Realizar Reservas**: Faça três reservas, cada uma para no mínimo três pessoas. Note que um brinde é concedido após completar três reservas.
4. **Verificar Reservas**: Após realizar as reservas, elas ainda não estarão finalizadas e o brinde não estará disponível imediatamente.

## Testando como Gerente

1. **Troca de Usuário**: Encerre a sessão ou abra uma guia anônima no navegador.
2. **Login do Gerente**: Acesse novamente o sistema e faça login com as credenciais de gerente:
   - **Usuário**: admin@gmail.com
   - **Senha**: 123456
3. **Gerenciar Reservas**: Acesse a aba de reservas e altere o status de todas as reservas recentes para "FINALIZADO".
4. **Resgate do Brinde**:
   - Volte ao login do cliente e acesse a área de "Minhas Reservas".
   - Você deverá ver um código de brinde disponível.
   - Copie esse código.
   - Retorne ao login do gerente.
   - Na aba "Clientes", insira o código de brinde resgatado e confirme o resgate.

## Replicando o Teste

Para testar novamente as funcionalidades, repita o processo acima. Isso ajudará a garantir que todos os aspectos do sistema estão funcionando como esperado.

Lembre-se de que essas instruções de teste são para verificar e garantir que o fluxo de reserva e recompensa esteja funcionando corretamente no ambiente de produção.

## Contribuições

Contribuições são bem-vindas! Faça um fork, crie um branch para sua feature e envie um pull request.

## Contato

- **Autor**: Vitor Tomasi - [vitortomasitomasi@gmail.com]
