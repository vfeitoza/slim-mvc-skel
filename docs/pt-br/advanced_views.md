# Views

Os views servem para exibir a tela para o usuário. Separa toda a regra com o visual. Qualquer condição que mude a forma de manipulação de dados deve ser feito no controller. Isso não quer dizer que não se pode fazer ifs e loops dentro do view, mas somente para manipulação de tela

usamos o smarty como template
colocar o link para o smarty e uso avançado com smarty template

## Caminhos

dependendo do modulo, controller e action chamado na rota, qual o caminho que ele vai buscar a classe, com e sem modulo

## Fluxo de chamada

como o view é chamado, em qual momento é criado

cria a classe https://github.com/scorninpc/slim-smarty-view, que é configurado no index.php

## Template e conteudo

como funciona o esquema de template e de conteudo, template é um fixo, conteudo é o que vem de dentro do action
falar da variavel $local_content, que é injetada dentro do template.tpl
falar onde ta o template.tpl

## Variaveis

como funciona a assinatura de variaveis, e como usa-la

## Variaveis Pré definidas

todas começam com __
`$__basePath`, que contem o caminho relativo do servidor

## A variavel $local_content

como funciona essa variavel, como ela precisa ser inclusa, e quais as limitações

## Desabilitando o template

porque e como desabilitar o template

## Setar um template manualmente

Como adicionar um template manualmente, que não pegue o template padrão conforme controler/action

## Customizações

Onde ele lê e cria os caminhos, a pra modificar algum padrão, ou alguma outra estrutura de diretórios
Como configurar o caminho dos diretórios de compilação e cache