<?php

namespace App\Broadcasting;

use App\Models\Chat;
use App\Models\User;

class ConversationChannel
{
    /**
     * Authenticate the user's access to the channel.
     *
     * @param User         $user
     * @param Conversation $conversation
     *
     * @return array|bool
     */
    public function join(User $user, Chat $chat)
    {
        return $chat->participantes->contains($user);
    }
}
