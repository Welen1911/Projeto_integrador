
# Passo a passo
### Requisitos
Você precisa ter instalado o wsl2, o docker, o docker-compose, o composer do php e node js v18.17.1!

### Primeiro
Na pasta do projeto, rode o comando:
```sh
composer install
```
Na pasta do projeto, rode o comando:
```sh
./vendor/bin/sail up -d
```

Na pasta do projeto, rode o comando:
```sh
npm run dev
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

### Segundo
Veja se está funcionando no <a href="localhost">localhost</a>
