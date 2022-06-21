## Projeto sistema administrativo da plataforma e-diaristas

Desenvolvido no curso Multi-Stack na treinaweb

#### Instalando o projeto

#### Clonar o repositório

```
  git clone https://github.com/MarcosWAlmeida/sistema-adm-ediaristas-php.git

```

#### Instalar as dependências

```
  composer install

```

Ou em ambiente de desenvolvimento

```
  composer update

```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.exemple` para `.env` na raiz do projeto
configurar detalhes da aplicação e conexão com banco de dados.

#### Criar a estrutura do banco de dados.

```
php artisan migrate
```

#### Iniciar o servidor de desenvolvimento.

```
php artisan serve
```
