Install Symfony:
   
    cd ~/projects
    symfony new web_shop 3.3
    cd web_shop
    
Clone repository:

    git clone git@github.com:miroslavribac/Webshop.git
    sudo mv Webshop repo
    ln -s ~/projects/web_shop/repo/WebshopBundle/ ~/projects/web_shop/src/
    
    
Activate Bundle in AppKernel:

    sudo vim app/AppKernel.php
    new WebshopBundle\WebshopBundle(),
    
Remove default base.html.twig template and symlink from repo:

    sudo rm app/Resources/views/base.html.twig
    ln -s ~/projects/web_shop/repo/base.html.twig ~/projects/web_shop/app/Resources/views/
    
Create parts dir for include templates in base.html.twig template and symlink to app/Resources/views/ :

    mkdir repo/WebshopBundle/Resources/views/parts
    sudo ln -s ~/projects/web_shop/repo/WebshopBundle/Resources/views/parts ~/projects/web_shop/app/Resources/views/
    
Symlink apache2.conf file;

    sudo ln -s ~/projects/web_shop/repo/apache2.conf /etc/apache2/sites-available/webshop.local.conf
    sudo a2ensite webshop.local.conf
    
Activate domain in hosts file:

    echo '127.0.0.1 webshop.local' | sudo tee --append /etc/hosts > /dev/null
    
Symlink project in /var/www:

    sudo ln -s ~/projects/web_shop /var/www 
    
Restart Apache server:

    sudo service apache2 restart
    
Remove default yml files from config:
    
    rm -rf app/config/config.yml
    rm -rf app/config/config_dev.yml
    rm -rf app/config/parameters.yml
    rm -rf app/config/routing.yml
    rm -rf app/config/services.yml
    rm -rf app/config/security.yml
    
Symlink config files from repo in app/config:

    ln -s ~/projects/web_shop/repo/config/* ~/projects/web_shop/app/config/
    
Set files permissions and privileges:

    HTTPDUSER=$(ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1)
    sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var
    sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var
    
Add WebshopBundle in composer.json:

    sudo vim composer.json 
    	"psr-4": {
                "AppBundle\\": "src/AppBundle",
    	        "WebshopBundle\\": "src/WebshopBundle"
            },
            
Update composer autoloader:

    composer dump-autoload
    
Create shortcut for assets:

    php bin/console assets:install --symlink
    
Clear cache:

    php bin/console cache:clear
    
Run project in browser:

<a href="http://webshop.local" target="_blank">webshop.local</a>
    
    
   

    
    

    
    