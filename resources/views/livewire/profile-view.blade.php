<!-- resources/views/livewire/profile-view.blade.php -->

<div>
    <div class="container  mt-5">

    @if($profile->selected_template === 'profile-card-2')
        @include('livewire.profile-card-2', ['socialMediaLinks' => $socialMediaLinks])
    @elseif($profile->selected_template === 'profile-card-3')
        @include('livewire.profile-card-3', ['socialMediaLinks' => $socialMediaLinks])
    @endif
</div>

</div>
