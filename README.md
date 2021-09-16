<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistema para Nivelamento / LARAVEL

Esse sistema tem como objetivo colocar em prática estudos em Laravel e demonstrar conhecimentos em Banco de dados, estilização em SASS, lógica de programação e interpretação de requisitos.

## Instalação

Utilize [docker](https://docs.docker.com/) para instalação das dependências

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```
## Usuário Administrativo
Para fins de testes, seeds foram criados com o usuário ***adminlog*** e senha ***password***

## API
Rota para retornar todas as empresas
```bash
http://exemplo.com/api/v1/companies
```
Rota para retornar funcionários de uma determinada empresa
```bash
http://exemplo.com/api/v1/companies/{id-da-empresa}/employees
```
