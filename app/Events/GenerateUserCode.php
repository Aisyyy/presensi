<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;
use Illuminate\Support\Str;
class GenerateUserCode
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function handle(User $user)
    {
        $user->code = Str::random(8); // Ganti 8 dengan panjang kode yang diinginkan
    }
}

    
