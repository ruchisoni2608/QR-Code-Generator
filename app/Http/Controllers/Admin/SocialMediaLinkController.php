<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\SocialMediaLink;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CreateSocialLinkRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use App\Helper\CommonHelper;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SocialMediaLinkController extends Controller
{
    public function index(): View
    {
        $socialMediaLink = SocialMediaLink::latest()->get();
        return view('admin.socialMediaLink.list', compact('socialMediaLink'));
    }
    public function create(): View
    {
        return view('admin.socialMediaLink.create');
    }

    public function store(CreateSocialLinkRequest $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $inputs = $request->validated();
            $slug = Str::slug($inputs['name'],'-'); // Assuming 'name' is the field from which you want to generate the slug
            $inputs['slug'] = $slug;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $destinationPath = 'social_images/';
                $oldImage = isset($inputs['image']) ? $inputs['image'] : ''; // Get old image name if exists

                // Upload new image and update input with new image path
                $inputs['image'] = CommonHelper::uploadFile($image, $destinationPath, $oldImage);
            }

            // Create the blog entry with the validated data
            SocialMediaLink::query()->create($inputs);
            DB::commit();
            return response()->json([
                'message' => 'SocialMediaLink created successfully',
                'redirectTo' => route('admin.social_media_links'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Error Exception: ' . $e->getMessage());
            return response()->json(['message' => 'Something went wrong', 'reload' => true], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(SocialMediaLink $socialMediaLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialMediaLink $socialMediaLink)
    {
        return view('admin.socialMediaLink.create', compact('socialMediaLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateSocialLinkRequest $request, SocialMediaLink $socialMediaLink)
    {
        try {
            DB::beginTransaction();

            $inputs = $request->validated();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $destinationPath = 'social_images/';
                $oldImage = isset($inputs['image']) ? $inputs['image'] : ''; // Get old image name if exists

                // Upload new image and update input with new image path
                $inputs['image'] = CommonHelper::uploadFile($image, $destinationPath, $oldImage);
            }
            $socialMediaLink->update($inputs);

            DB::commit();

            return response()->json([
                'message' => 'socialMediaLink updated successfully',
                'redirectTo' => route('admin.social_media_links'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Error Exception: ' . $e->getMessage());
            return response()->json(['message' => 'Something went wrong', 'reload' => true], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialMediaLink $socialMediaLink)
    {
        try {
            // Remove the old title image file
            $oldImage = $socialMediaLink->image;
            CommonHelper::removeOldFile('public/social_images/' .$oldImage);
            $socialMediaLink->delete();

            return response()->json(['message' => 'socialMediaLink deleted successfully!', 'reload' => true]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong', 'reload' => true], 500);
        }
    }
}
