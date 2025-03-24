<?php

namespace App\Controllers\Client;

use App\Helpers\AuthHelper;
use App\Helpers\NotificationHelper;
use App\Models\Comment;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Product\Category;
use App\Views\Client\Pages\Product\Detail;
use App\Views\Client\Pages\Product\Index;
use App\Views\Client\Pages\Product\Checkout;

class ProductController
{
    // hiển thị danh sách
    public static function index()
    {
        
        Header::render();

        Index::render();
        Footer::render();
    }
    public static function detail()
    {
       
        Header::render();

        Detail::render();
        Footer::render();
    }


    public static function category() {
        Header::render();

        category::render();
        Footer::render();
    }

    public static function checkout() {
        Header::render();

        Checkout::render();
        Footer::render();
    }
    
}
