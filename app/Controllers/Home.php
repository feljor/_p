<?php namespace App\Controllers;


use App\Models\ScraperModel;
use Config\CustomConfig;

class Home extends BaseController
{
	public function index()
	{
        $scraper = new ScraperModel();
        $title = new CustomConfig();

        $data = [
            'title' => $title->pageTitle,
            'category' => $scraper->get_categories_list(),
            'banner' => $scraper->get_banner(),
            'popular_apps' => $scraper->top_free_apps(),
            'popular_games' => $scraper->top_free_games()
        ];

        echo view('part/header', $data);
        echo view('home', $data);
        echo view('part/footer', $data);
	}

	public function detail($appId){

	    $scraper = new ScraperModel();
	    $details = $scraper->app_detail($appId);
	    $dir = $this->replaceString($details->title);
	    $dev = esc($details->developer, 'url');
        $sourceURL="https://apkpure.com/$dir/$details->appId/download?from=details";

	    $data = [
	        'title' => $details->title.' '.$details->version.' APK Download',
	        'category' => $scraper->get_categories_list(),
            'popular_apps' => $scraper->top_free_apps(),
            'popular_games' => $scraper->top_free_games(),
	        'app_detail' => $details,
            'similar_apps' => $scraper->similar_apps($appId),
            'developer_apps' => $scraper->developer_apps($dev),
            'reviews' => $scraper->get_reviews($appId),
            'downloadLink' => $sourceURL
        ];

        echo view('part/header', $data);
        echo view('detail', $data);
        echo view('part/footer', $data);

    }

    public function categories($catId){

        $scraper = new ScraperModel();
        $categories = $scraper->get_categories_list();

        $data = [
            'title' => 'Download APK from '.$catId,
            'category' => $categories,
            'popular_apps' => $scraper->top_free_apps(),
            'popular_games' => $scraper->top_free_games(),
            'category_apps' => $scraper->category_apps($catId)
        ];

        echo view('part/header', $data);
        echo view('category', $data);
        echo view('part/footer', $data);

    }

    public function apps(){

        $scraper = new ScraperModel();

        $data = [
            'title' => 'Download Android APK from SmartPlay',
            'category' => $scraper->get_categories_list(),
            'popular_apps' => $scraper->top_free_apps(),
            'popular_games' => $scraper->top_free_games(),
            'applications' => $scraper->get_applications()
        ];

        echo view('part/header', $data);
        echo view('apps', $data);
        echo view('part/footer', $data);

    }

    public function games(){

        $scraper = new ScraperModel();

        $data = [
            'title' => 'Download Android APK from SmartPlay',
            'category' => $scraper->get_categories_list(),
            'popular_apps' => $scraper->top_free_apps(),
            'popular_games' => $scraper->top_free_games(),
            'games' => $scraper->get_games()
        ];

        echo view('part/header', $data);
        echo view('games', $data);
        echo view('part/footer', $data);

    }

    public function developers($developer){

        $scraper = new ScraperModel();
        $dev = esc($developer, 'url');

        $data = [
            'title' => 'Download APK from '.$developer,
            'category' => $scraper->get_categories_list(),
            'popular_apps' => $scraper->top_free_apps(),
            'popular_games' => $scraper->top_free_games(),
            'developer_apps' => $scraper->developer_apps($dev)
        ];

        echo view('part/header', $data);
        echo view('developer', $data);
        echo view('part/footer', $data);
    }

    public function search(){

	    $query = $_POST['q'];
	    $scraper = new ScraperModel();
	    $queries = str_replace(' ', '+', $query);
        $data = [
            'title' => 'Search results for '.$query,
            'category' => $scraper->get_categories_list(),
            'popular_apps' => $scraper->top_free_apps(),
            'popular_games' => $scraper->top_free_games(),
            'search_results' => $scraper->search_apps($queries),
            'query' => $query
        ];

        echo view('part/header', $data);
        echo view('search', $data);
        echo view('part/footer', $data);
    }

    public function url(){

	    $appId = "com.android.chrome";

	    $extractor = new LinkExtractor();

	    return $extractor->downloadLink($appId);

    }

    public function replaceString($phrase){
	    if($phrase){
	        $pace = str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $phrase))))))));

	        return strtolower(str_replace(' ', '-', $pace));
        }

	    return false;
    }

}
