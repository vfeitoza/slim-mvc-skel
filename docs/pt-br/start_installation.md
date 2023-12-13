# Instalação

## Git 

Para instalar, basta clonar o repositório no [Github](https://github.com/scorninpc/slim-mvc-skel), ou baixar o ultimo [release](https://github.com/scorninpc/slim-mvc-skel/releases) estavel.

## Instalar o composer

Com os arquivos do esqueleto disponivel, agora é hora de baixar o Slim, o Smary, Eloquent, e outras dependencias. Para isso precisamos do [composer](https://getcomposer.org/download/).
Se preferir, você pode apenas baixar o `.phar`, e executar `php composer.phar` para usar o composer.

## Update

Para baixar as dependencias atualizadas, entre no diretório deste esqueleto, e execute:

```bash
php ~/composer.phar update
```

Isso baixar os arquivos necessários, criará o autoloader, e deixar tudo prontinho para exeutar

## Primeiro Run

Você irá precisar de um servidor web, como o Apache ou Nginx, ou qualquer outro que queira. Mas caso não tenha nenhum deles instalado, e queira fazer uns testes primeiro, sem problemas, você pode usar o php built-in, rodando o comando:

```bash
php -S localhost:8080 -t public_html/
```

Agora basta acessar o site [http://localhost:8080](http://localhost:8080), e pronto.

### Apache

ou então configure o htaccess

### Outros

entre em contato para fazermos juntos