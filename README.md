# Laravel Cloud CMS Wrapper
Here is the [PhP agnostic SDK](https://github.com/idealley/cloudcms-sdk)

# Every thing is still very experimental and subject to CHANGE

## How to install:

`composer require idealley/cloudcms-laravel`

Publish the config with the command 

`php artisan vendor:publish`

This will let you change few settings in the `app/config` folder.

## How to use

CC is a Laravel Facade.

to use it add `use CC;` at the top of your file.

You can get a children of a node like this (think category or list of blogs)

        $catnode = 'o:9a8195e6286a4f7b40ae';
   
        $nodes = CC::nodes()
                ->listChildren($catnode)
                ->addParams(['full' => 'true'])
                ->get(); 

Or a single node (for now we are getting it from a special slug field) like this:

        $node = CC::nodes()
                    ->find($slug)
                    ->addParams(['full' => 'true'])   
                    ->get();

You can chain paramas

        $node = CC::nodes()
                    ->find($slug)
                    ->addParams(['full' => 'true']) 
                    ->addParams(['metadata' => 'true'])   
                    ->get();           

or pass them in a single array

                    ->addParams(['full' => 'true', 'metadata' => 'true']) 

You can get an image like this

        $path = 'Samples/Catalog/Products/';            
        $img = CC::nodes()
                    ->getImage($node['rows'][0]['_qname'])
                    ->addParams(['name' => $node['rows'][0]['_features']['f:filename']['filename']])
                    ->addParams(['size' => '400'])
                    ->set();

There are many more methods you can use, check 'Node' class in the `cloudcms-sdk` to find everything that is available. Each method is documented with working query examples.

You can chain any params as per [the documentation](https://www.cloudcms.com/documentation/application-server/services/node-urls.html)

Do not forget to add these values in your .env file

        CC_CLIENT_KEY=
        CC_CLIENT_SECRET=
        CC_USERNAME=
        CC_PASSWORD= 
        CC_CLIENT_KEY=
        CC_TOKEN_STORAGE_PATH=/storage/token
        CC_DEPLOYMENT_URL=                                       
