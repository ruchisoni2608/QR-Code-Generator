<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Models\SocialMediaLink;
use App\Models\VCardSocialLink;

class QrGenerator extends Component
{
    public $name;
    public $website, $position, $company, $email, $workphone, $mobilephone, $privatephone, $fax, $country, $state, $street, $city, $zipcode, $additionalInfo, $image, $cover_image, $coverImagePath;
    public $selectedTemplate = 'profile-card-2';
    // public $socialMediaLinks;
    public $socialMediaLinks = [];
    public $social_media_links = [];
    public $selectedSocialMediaLinks = [];

    public $inputUrls = [];
    public $showUrl = [];
    use WithFileUploads;

    public function mount()
    {
        // Initialize $showUrl array with default values
        $this->socialMediaLinks = SocialMediaLink::all();
        foreach ($this->socialMediaLinks as $link) {
            $this->showUrl[$link->id] = false;
        }
    }
    public function render()
    {
        $this->socialMediaLinks = SocialMediaLink::all();
        return view('livewire.qr-generator', [
            'socialMediaLinks' => $this->socialMediaLinks,
        ]);
    }
    public function toggleUrlInput($linkId)
    {
        $this->showUrl[$linkId] = !$this->showUrl[$linkId];
    }

    public function generateQR()
    {
        $this->resetValidation();

        // Validate the form fields
        $validatedData = $this->validate([
            'name' => 'required',
            'website' => 'required',
            'email' => 'required|email|unique:profiles,email',
            'image' => 'required|image|max:1024',
            'cover_image' => 'nullable',
        ]);
        $slug = Str::slug(explode('@', $this->email)[0]);
        $imagePath = $this->image->store('public/profile_images');
        $coverImagePath = null;
        if ($this->cover_image) {
            $coverImagePath = $this->cover_image->store('public/cover_image');
        }

        $profile = Profile::create([
            'name' => $this->name,
            'website' => $this->website,
            'email' => $this->email,
            'slug' => $slug,
            'position' => $this->position,
            'company' => $this->company,
            'workphone' => $this->workphone,
            'mobilephone' => $this->mobilephone,
            'privatephone' => $this->privatephone,
            'fax' => $this->fax,
            'country' => $this->country,
            'state' => $this->state,
            'street' => $this->street,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'additionalInfo' => $this->additionalInfo,
            'image' => $imagePath,
            'selected_template' => $this->selectedTemplate,
            'cover_image' => $coverImagePath,
        ]);
        foreach ($this->socialMediaLinks as $link) {
            // Check if the URL for this social media link is set
            if (isset($this->inputUrls[$link->id])) {
                VCardSocialLink::create([
                    'social_media_link_id' => $link->id,
                    'profile_id' => $profile->id,
                    'url' => $this->inputUrls[$link->id],
                ]);
            }
        }

        return redirect()->to('/profile/' . $slug);
    }

    public function updatedName($value)
    {
        $this->name = $value;
        $this->dispatch('nameUpdated', $value);
    }

    public function updatedWebsite($value)
    {
        $this->website = $value;
        $this->dispatch('websiteUpdated', $value);
    }
    public function updatedSelectedTemplate($value)
    {
        $this->selectedTemplate = $value;
    }
}
