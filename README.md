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
    

    
    