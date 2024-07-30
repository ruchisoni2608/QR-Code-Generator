<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function __construct()
    {

    }

    public function getParentChildTree($category, $parent = NULL)
    {
        $mainCategory = array_filter($category, function($a)use($parent) {
            return $a['parent_id'] == $parent;
        });

        if ($mainCategory) {
            foreach ($mainCategory as $key => $value) {
                $mainCategory[$key]['child'] = $this->getParentChildTree($category, $value['id']);
            }
        }
        return $mainCategory;
    }

    public function getTreeHtml($categoryData)
    {
        $html = "";

        if ($categoryData) {
            $html .= "<ul class='sub-menu'>\n";

            foreach ($categoryData as $key => $category) {
                $html .= "<li class='menu-item'> \n";
                $html .= "<a href='" . route('client.products', $category['slug']) ."'>". $category['name'] . " <i class='fa fa-chevron-down'></i></a> \n";
                $html .= $this->getTreeHtml($category['child']);
                $html .= "</li> \n";
            }
            $html .= "</ul> \n";
        }
        return $html;
    }
}
