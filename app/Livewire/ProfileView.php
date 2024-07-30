<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\VCardSocialLink;

class ProfileView extends Component
{
    public $profile;
    public $socialMediaLinks = [];

    public function mount($slug)
    {
        $this->profile = Profile::where('slug', $slug)->firstOrFail();
        $this->socialMediaLinks = VCardSocialLink::where('profile_id', $this->profile->id)->get();
    }

    public function render()
    {
        return view('livewire.profile-view', [
            'socialMediaLinks' => $this->socialMediaLinks,
        ]);
    }

}
