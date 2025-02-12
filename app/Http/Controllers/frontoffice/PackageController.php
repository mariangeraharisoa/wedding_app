<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function coordinationDay(){
        return view('frontoffice.packages.coordination');
    }

    public function partialOrganization(){
        return view('frontoffice.packages.partial_organization');
    }

    public function completeOrganization(){
        return view('frontoffice.packages.complete_organization');
    }
}
