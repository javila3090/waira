<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banner;
use App\BannerType;
use App\Section;
use App\CompanyInfo;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use Mapper;


class HomeController extends Controller
{
    public function index(){

        SEOMeta::setTitle('Inicio');
        SEOMeta::setDescription('Home page to waira site');

        OpenGraph::setDescription('Home page to waira site');
        OpenGraph::setTitle('Inicio');
        OpenGraph::setUrl('https://wairadev.cl');
        OpenGraph::addProperty('type', 'Home');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@jcesaravila');

        ## Or

        SEO::setTitle('Inicio');
        SEO::setDescription('Home page to waira site');
        SEO::opengraph()->setUrl('https://wairadev.cl');
        SEO::opengraph()->addProperty('type', 'Home');
        SEO::twitter()->setSite('@jcesaravila');

        $main = Section::where('section_type_id',6)->first();
        $homeBanners = Banner::where('banner_type_id',1)->get();
        $aboutUs = Section::where('section_type_id',1)->first();
        $servicesBanners = Banner::where('banner_type_id',2)->get();
        $services = Section::where('section_type_id',2)->first();
        $contact = Section::where('section_type_id',3)->first();
        $galleryBanners = Banner::where('banner_type_id',3)->get();
        $gallery = Section::where('section_type_id',4)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $bannerIntermedio1 = Banner::where('banner_type_id',4)->first();
        $bannerIntermedio2 = Banner::where('banner_type_id',5)->first();
        $clients = Section::where('section_type_id',5)->first();
        $clientBanners = Banner::where('banner_type_id',6)->get();
        $portfolioBanners = Banner::where('banner_type_id',7)->get();

        //Mapa
        /*$config = array();
        $config['center'] = '-33.43771,-70.69317949999999';
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';

        app('map')->initialize($config);

        $marker = array();
        app('map')->add_marker($marker);

        $map = app('map')->create_map();
        $map = array('map_js' => $map['js'], 'map_html' => $map['html']);*/

        Mapper::map(-33.43771, -70.69317949999999, ['zoom' => 16, 'markers' => ['title' => 'Waira Dev', 'animation' => 'DROP']]);
        
        return view('welcome',compact('homeBanners','main','aboutUs','servicesBanners','services','companyInfo','contact','gallery','galleryBanners','bannerIntermedio1','bannerIntermedio2','clients','clientBanners','portfolioBanners'));
    }
}
