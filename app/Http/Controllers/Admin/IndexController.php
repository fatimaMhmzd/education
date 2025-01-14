<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use mohammadbay\sitemanager\Http\Repositories\ModuleRepository;

class IndexController extends Controller
{




    public function index()
    {
        $modules = resolve(ModuleRepository::class)->all(relations:['component']);
        foreach ($modules as $mIndex=>$module) {
            $moduleUrl = "admin_".Str::snake($module->name)."_";
            foreach ($module->components as $cIndex=>$component) {
                $componentUrl = $moduleUrl.Str::snake($component->name)."_index";
                $modules[$mIndex]['components'][$cIndex]['url'] = $componentUrl;
            }
        }
        return view('admin.index');
    }
}
