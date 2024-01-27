<?php 

namespace App\Http\Controllers\Product;

use App\Services\Product\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller {
    
    public $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}