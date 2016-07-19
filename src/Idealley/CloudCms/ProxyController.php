<?php namespace Idealley\CloudCms;

use App\Http\Requests;
use Illuminate\Http\Request;
use Idealley\CloudCmsSDK\Auth;
use App\Http\Controllers\Controller;
use Idealley\CloudCmsSDK\ClientBase;
use Intervention\Image\Facades\Image;
use League\OAuth2\Client\Provider\GenericProvider;

class ProxyController extends Controller
{
    
private $token;    
private $headers;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catnode = 'o:9a8195e6286a4f7b40ae';
   
        $nodes = CC::nodes()
                ->listChildren($catnode)
                ->get();           

        foreach ($nodes['rows'] as $key => $post) {
                $blog[$key]['title'] = $post['title'];
                //$blog[$key]['body'] = Markdown::parse($post['headline']);
                $blog[$key]['body'] = $post['headline'];
                $blog[$key]['slug'] = $post['slug'];  

                $img = 'https://5a0b7ae6-4372-406a-a293-88d22608dbc3-hosted.cloudcms.net/static/path/Samples/Catalog/Products/'.$post['_features']['f:filename']['filename'];

                $blog[$key]['image'] = Image::cache(function($image) use($img){
                     return $image->make($img)->resize(400, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->encode('data-url');
                  });
                

            }

    $posts = (object) $blog;
    $params['posts'] =  $posts;    

    return view('blog.category')->with($params);    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $node = CC::nodes()
                    ->find($slug)
                    ->put();


        $blog['title'] = $node['rows'][0]['title'];
        $blog['body'] = $node['rows'][0]['body'];
        $blog['slug'] = $node['rows'][0]['slug'];
        $img = 'https://5a0b7ae6-4372-406a-a293-88d22608dbc3-hosted.cloudcms.net/static/path/Samples/Catalog/Products/'.$node['rows'][0]['_features']['f:filename']['filename'];
        $blog['image'] = Image::cache(function($image) use($img) {
                          $image->make($img)->resize(300, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                })->encode('data-url');
                            },null,false);

        $params['blog'] = $blog;
        return view('blog.item')->with($params);    

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

 
}
