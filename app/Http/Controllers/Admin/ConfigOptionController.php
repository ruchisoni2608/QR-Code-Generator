<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateConfigOptionRequest;
use App\Models\ConfigOption;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConfigOptionController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = ConfigOption::query()->get();
        return view('admin.config_option.list', compact('data'));
    }

    public function create($modal='no'): View
    {
        if ($modal == 'yes') {
            return view('admin.config_option.create_frm');
        }
        return view('admin.config_option.create');
    }

    public function save(CreateConfigOptionRequest $request)
    {
        $data = $request->validated();

        if ($request->file('file')) {
            $data['value'] = CommonHelper::uploadFile($request->file('file'), 'config');
        }
        unset($data['file']);

        ConfigOption::query()->create($data);

        return response()->json(['message' => 'ConfigOption created successfully', 'reload' => true], 200);
    }

    public function edit(ConfigOption $configOption, $modal='no')
    {
        if ($modal == 'yes') {
            return view('admin.config_option.create_frm', compact('configOption'));
        }
        return view('admin.config_option.create', compact('configOption'));
    }

    public function update(ConfigOption $configOption, CreateConfigOptionRequest $request)
    {
        $data = $request->validated();

        if ($request->file('file')) {
            $data['value'] = CommonHelper::uploadFile($request->file('file'), 'config', $configOption->value);
        }
        unset($data['file']);

        $configOption->update($data);

        return response()->json(['message' => 'ConfigOption updated successfully', 'reload' => true], 200);
    }

    public function delete(ConfigOption $configOption)
    {
        CommonHelper::removeOldFile('public/config/' . $configOption->value);
        $configOption->delete();
        return response()->json(['message' => 'ConfigOption deleted successfully!', 'reload' => true]);
    }

    public function getConfigOptionDropdown(Request $request)
    {
        $input = $request->all();

        $results = ConfigOption::selectRaw('id,name as text');

        if(isset($input['search'])){
            $results->where('name','like','%'.$input['search'].'%');
        }

        if(!empty($input['not_me'])){
            $results->where('id','!=', $input['not_me']);
        }

        if(!empty($input['not_my_child'])){
            $results->where('parent_id','!=', $input['not_my_child']);
        }

        $results = $results->latest()->simplePaginate(200);

        $data['more'] = $results->hasMorePages();
        $data['results'] = $results->toArray()['data'];

        return response()->json($data, 200);
    }
}
