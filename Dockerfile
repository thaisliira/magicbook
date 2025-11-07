# 1. Imagem Base: Usamos a imagem oficial do PHP 8.1 com servidor Apache.
FROM php:8.1-apache

# 2. Instalar extensões PHP: Instalamos as extensões mais comuns
#    para se conectar ao MySQL (pdo_mysql e mysqli).
RUN docker-php-ext-install pdo_mysql mysqli

# 3. Habilitar 'mod_rewrite': Permite URLs amigáveis (ex: /login em vez de /login.php)
#    Muito útil para qualquer projeto PHP.
RUN a2enmod rewrite

# 4. Definir o diretório de trabalho (onde o Apache procura os arquivos)
WORKDIR /var/www/html
