<?php
namespace App\Models;

use CodeIgniter\Model;

class ScraperModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_banner(){

        $parameters = [
            'fullDetail' => true,
            'num' => 5,
            'collection' => 'movers_shakers',
            'category' => 'APPLICATION'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function get_applications(){

        $parameters = [
            'fullDetail' => true,
            'num' => 36,
            'category' => 'APPLICATION'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function get_games(){

        $parameters = [
            'fullDetail' => true,
            'num' => 36,
            'category' => 'GAME'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function top_free_apps(){

        $parameters = [
            'fullDetail' => true,
            'num' => 36,
            'collection' => 'topselling_free'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function top_paid_apps(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topselling_paid'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function grossing_apps(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topgrossing'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function trending_apps(){

        $parameters = [
            'fullDetail' => true,
            'category' => 'APPLICATION',
            'collection' => 'movers_shakers'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function new_free_apps(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topselling_new_free'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function new_paid_apps(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topselling_new_paid'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function top_free_games(){

        $parameters = [
            'fullDetail' => true,
            'num' => 36,
            'category' => 'GAME'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function top_paid_games(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topselling_paid_games'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function top_grossing_games(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topselling_grossing_games'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function new_free_games(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topselling_new_free_games'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function new_paid_games(){

        $parameters = [
            'fullDetail' => true,
            'collection' => 'topselling_new_paid_games'
        ];

        if (isset($parameters)){

            $url = "https://mercipro-scraper.herokuapp.com/api/apps/";
            $final = $url . "?" . http_build_query($parameters);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,$final);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            $result = json_decode($response);
            curl_close($ch);

            return $result->results;
        }

    }

    function app_detail($appId){

        $url = "https://mercipro-scraper.herokuapp.com/api/apps/$appId/";
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($ch);
        $result = json_decode($response);
        curl_close($ch);

        return $result;

    }

    function developer_apps($developer){

        $url = "https://mercipro-scraper.herokuapp.com/api/developers/$developer/";
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($ch);
        $result = json_decode($response);
        curl_close($ch);

        return $result;

    }

    function similar_apps($appId){

        $url = "https://mercipro-scraper.herokuapp.com/api/apps/$appId/similar/?fullDetail=true";
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($ch);
        $result = json_decode($response);
        curl_close($ch);

        return $result->results;

    }

    function get_reviews($appId){

        $url = "https://mercipro-scraper.herokuapp.com/api/apps/$appId/reviews/";
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($ch);
        $result = json_decode($response);
        curl_close($ch);

        return $result->results->data;

    }

    function search_apps($query){

        $url = "https://mercipro-scraper.herokuapp.com/api/apps/?q=$query/";
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($ch);
        $result = json_decode($response);
        curl_close($ch);

        return $result->results;

    }

    function category_apps($category){

        $url = "https://mercipro-scraper.herokuapp.com/api/apps/?category=$category";
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($ch);
        $result = json_decode($response);
        curl_close($ch);

        return $result->results;

    }

    function get_categories_list(){

        $category = [
            ['slug' => 'GAME_ACTION', 'title' => 'Action', 'icon' => 'action', 'type' => 'games'],
            ['slug' => 'GAME_ADVENTURE', 'title' => 'Adventure', 'icon' => 'adventure', 'type' => 'games'],
            ['slug' => 'GAME_ARCADE', 'title' => 'Arcade', 'icon' => 'arcade', 'type' => 'games'],
            ['slug' => 'GAME_BOARD', 'title' => 'Board', 'icon' => 'board', 'type' => 'games'],
            ['slug' => 'GAME_CARD', 'title' => 'Card', 'icon' => 'card', 'type' => 'games'],
            ['slug' => 'GAME_CASINO', 'title' => 'Casino', 'icon' => 'casino', 'type' => 'games'],
            ['slug' => 'GAME_CASUAL', 'title' => 'Casual', 'icon' => 'casual', 'type' => 'games'],
            ['slug' => 'GAME_EDUCATIONAL', 'title' => 'Educational', 'icon' => 'educational', 'type' => 'games'],
            ['slug' => 'FAMILY', 'title' => 'Family', 'icon' => 'family', 'type' => 'games'],
            ['slug' => 'GAME_MUSIC', 'title' => 'Music', 'icon' => 'music', 'type' => 'games'],
            ['slug' => 'GAME_PUZZLE', 'title' => 'Puzzle', 'icon' => 'puzzle', 'type' => 'games'],
            ['slug' => 'GAME_RACING', 'title' => 'Racing', 'icon' => 'racing', 'type' => 'games'],
            ['slug' => 'GAME_ROLE_PLAYING', 'title' => 'Role Playing', 'icon' => 'role-playing', 'type' => 'games'],
            ['slug' => 'GAME_SIMULATION', 'title' => 'Simulation', 'icon' => 'simulation', 'type' => 'games'],
            ['slug' => 'GAME_SPORTS', 'title' => 'Sports', 'icon' => 'sports', 'type' => 'games'],
            ['slug' => 'GAME_STRATEGY', 'title' => 'Strategy', 'icon' => 'strategy', 'type' => 'games'],
            ['slug' => 'GAME_TRIVIA', 'title' => 'Trivia', 'icon' => 'trivia', 'type' => 'games'],
            ['slug' => 'GAME_WORD', 'title' => 'Word', 'icon' => 'word', 'type' => 'games'],
            ['slug' => 'AUTO_AND_VEHICLES', 'title' => 'Auto & Vehicle', 'icon' => 'auto-vehicle', 'type' => 'apps'],
            ['slug' => 'BOOKS_AND_REFERENCE', 'title' => 'Book & Reference', 'icon' => 'book-reference', 'type' => 'apps'],
            ['slug' => 'BUSINESS', 'title' => 'Business', 'icon' => 'business', 'type' => 'apps'],
            ['slug' => 'COMICS', 'title' => 'Comic', 'icon' => 'comic', 'type' => 'apps'],
            ['slug' => 'COMMUNICATION', 'title' => 'Communication', 'icon' => 'communication', 'type' => 'apps'],
            ['slug' => 'EDUCATION', 'title' => 'Education', 'icon' => 'education', 'type' => 'apps'],
            ['slug' => 'ENTERTAINMENT', 'title' => 'Entertainment', 'icon' => 'entertainment', 'type' => 'apps'],
            ['slug' => 'FINANCE', 'title' => 'Finance', 'icon' => 'finance', 'type' => 'apps'],
            ['slug' => 'HEALTH_AND_FITNESS', 'title' => 'Health & Fitness', 'icon' => 'health-fitness', 'type' => 'apps'],
            ['slug' => 'LIBRARIES_AND_DEMO', 'title' => 'Libraries & Demo', 'icon' => 'libraries-demo', 'type' => 'apps'],
            ['slug' => 'LIFESTYLE', 'title' => 'Lifestyle', 'icon' => 'lifestyle', 'type' => 'apps'],
            ['slug' => 'PERSONALIZATION', 'title' => 'Live & Wallpaper', 'icon' => 'live-wallpaper', 'type' => 'apps'],
            ['slug' => 'VIDEO_PLAYERS', 'title' => 'Media & Video', 'icon' => 'media-video', 'type' => 'apps'],
            ['slug' => 'MEDICAL', 'title' => 'Medical', 'icon' => 'medical', 'type' => 'apps'],
            ['slug' => 'MUSIC_AND_AUDIO', 'title' => 'Music & Audio', 'icon' => 'music-audio', 'type' => 'apps'],
            ['slug' => 'NEWS_AND_MAGAZINES', 'title' => 'News & Magazine', 'icon' => 'news-magazines', 'type' => 'apps'],
            ['slug' => 'PHOTOGRAPHY', 'title' => 'Photography', 'icon' => 'photography', 'type' => 'apps'],
            ['slug' => 'PRODUCTIVITY', 'title' => 'Productivity', 'icon' => 'productivity', 'type' => 'apps'],
            ['slug' => 'SHOPPING', 'title' => 'Shopping', 'icon' => 'shopping', 'type' => 'apps'],
            ['slug' => 'SOCIAL', 'title' => 'Social', 'icon' => 'social', 'type' => 'apps'],
            ['slug' => 'SPORTS', 'title' => 'Sports', 'icon' => 'sports', 'type' => 'apps'],
            ['slug' => 'TOOLS', 'title' => 'Tools', 'icon' => 'tools', 'type' => 'apps'],
            ['slug' => 'MAPS_AND_NAVIGATION', 'title' => 'Transportation', 'icon' => 'transportation', 'type' => 'apps'],
            ['slug' => 'TRAVEL_AND_LOCAL', 'title' => 'Travel & Local', 'icon' => 'travel-local', 'type' => 'apps'],
            ['slug' => 'WEATHER', 'title' => 'Weather', 'icon' => 'weather', 'type' => 'apps'],
            ['slug' => 'APPLICATION', 'title' => 'Widgets', 'icon' => 'widgets', 'type' => 'apps'],
        ];

        return $category;
    }

}