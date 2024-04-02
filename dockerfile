# Use a imagem oficial do PHP
FROM php:7.4-apache

# Copie os arquivos do aplicativo para o diretório de trabalho do Apache
COPY app/ /var/www/html/

# Instale as extensões do PHP necessárias (se necessário)
RUN docker-php-ext-install pdo pdo_mysql

# Exponha a porta 80
EXPOSE 80

# Inicie o servidor Apache
CMD ["apache2-foreground"]
