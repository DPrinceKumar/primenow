<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class apiCall extends Controller
{
  // Deafult page
  function topHeadlines(){
    $topHeadlineIN ="https://newsapi.org/v2/top-headlines?country=in&category=general&apiKey=a2d0270761d144b88aedbe39b562fc20";
    $data= Http::get($topHeadlineIN)->json();
    return view("home",["collectionOfNews"=>$data["articles"]]);  
  } 

  // Custom Searching
  function countryCode(Request $req){
    $countryName=$req->input('countryName');
    $Category=$req->input('Category');
    
    if ($Category==NULL) {
      $Category="general";
    }

    $topHeadlineIN ="https://newsapi.org/v2/top-headlines?country=$countryName&category=$Category&apiKey=a2d0270761d144b88aedbe39b562fc20";
    $data= Http::get($topHeadlineIN)->json();

    return view("home",["collectionOfNews"=>$data["articles"]]); 
  }

  
  // Searching
  function search(Request $req,$generalTopic=NULL){

    if ($generalTopic==NULL) {
      $searchTxt=$req->input('searchInput');
      $searchApi= "https://newsapi.org/v2/everything?q=$searchTxt&sortBy=publishedAt&apiKey=a2d0270761d144b88aedbe39b562fc20";
    }

    else{
      $searchApi= "https://newsapi.org/v2/everything?q=$generalTopic&sortBy=publishedAt&apiKey=a2d0270761d144b88aedbe39b562fc20";
    }
    $data= Http::get($searchApi)->json();

    return view("home",["collectionOfNews"=>$data["articles"]]); 
  }
}
