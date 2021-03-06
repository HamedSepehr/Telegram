<?php


class Api
{



    protected $token;
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function apiGetContent($params = null)
    {
        $url = "https://api.telegram.org/bot$this->token/".$this->callerFunction().$params;
        $data = @file_get_contents($url);
        return $data;
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setWebhook($webhook_url, $optional = null)
    {
        $params = "?url=$webhook_url $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteWebhook()
    {
        return $this->apiGetContent();
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getWebhookInfo()
    {
        return $this->apiGetContent();
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getUpdates()
    {
        $last_update_id = file_get_contents('update_id.txt');
        $last_update_id++;
        $params = "?offset=$last_update_id";
        $message = json_decode($this->apiGetContent($params));
        return $message->result;
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getMe()
    {
        return $this->apiGetContent();
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendMessage($chat_id, $text, $optional = null)
    {
        $params = "?chat_id=$chat_id&text=$text $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function forwardMessage($chat_id, $from_chat_id, $message_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&from_chat_id=$from_chat_id&message_id=$message_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendPhoto($chat_id, $photo, $optional = null)
    {
        $params = "?chat_id=$chat_id&photo=$photo $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendAudio($chat_id, $audio, $optional = null)
    {
        $params = "?chat_id=$chat_id&audio=$audio $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendDocument($chat_id, $document, $optional = null)
    {
        $params = "?chat_id=$chat_id&document=$document $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendVideo($chat_id, $video, $optional = null)
    {
        $params = "?chat_id=$chat_id&video=$video $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendAnimation($chat_id, $animation, $optional = null)
    {
        $params = "?chat_id=$chat_id&animation=$animation $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendVoice($chat_id, $voice, $optional = null)
    {
        $params = "?chat_id=$chat_id&voice=$voice $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendVideoNote($chat_id, $video_note, $optional = null)
    {
        $params = "?chat_id=$chat_id&video_note=$video_note $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendMediaGroup($chat_id, $media, $optional = null)
    {
        $params = "?chat_id=$chat_id&media=$media $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendLocation($chat_id, $latitude, $longitude , $optional = null)
    {
        $params = "?chat_id=$chat_id&latitude=$latitude&longitude=$longitude $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editMessageLiveLocation($chat_id, $latitude, $longitude, $optional = null)
    {
        $params = "?chat_id=$chat_id&latitude=$latitude&longitude=$longitude $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function stopMessageLiveLocation($chat_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&$optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendVenue($chat_id, $latitude, $longitude, $title, $address, $optional = null)
    {
        $params = "?chat_id=$chat_id&latitude=$latitude&longitude=$longitude&title=$title&address=$address $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendContact($chat_id, $phone_number, $first_name, $optional = null)
    {
        $params = "?chat_id=$chat_id&phone_number=$phone_number&first_name=$first_name $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendPoll($chat_id, $question, $options, $optional = null)
    {
        $params = "?chat_id=$chat_id&question=$question&options=options $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendDice($chat_id, $optional = null)
    {
        $params = "?chat_id=$chat_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendChatAction($chat_id, $action)
    {
        $params = "?chat_id=$chat_id&action=$action";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getUserProfilePhotos($user_id)
    {
        $params = "?user_id=$user_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getFile($file_id)
    {
        $params = "?file_id=$file_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function kickChatMember($chat_id, $user_id)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function unbanChatMember($chat_id, $user_id)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function restrictChatMember($chat_id, $user_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function promoteChatMember($chat_id, $user_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setChatAdministratorCustomTitle($chat_id, $user_id, $custom_title, $optional = null)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id&custom_title=$custom_title $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setChatPermissions($chat_id, $permissions)
    {
        $params = "?chat_id=$chat_id&permissions=$permissions";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function exportChatInviteLink($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setChatPhoto($chat_id, $photo)
    {
        $params = "?chat_id=$chat_id&photo=$photo";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteChatPhoto($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setChatTitle($chat_id, $title)
    {
        $params = "?chat_id=$chat_id&title=$title";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setChatDescription($chat_id, $description)
    {
        $params = "?chat_id=$chat_id&description=$description";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function pinChatMessage($chat_id, $message_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&message_id=$message_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function unpinChatMessage($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function leaveChat($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getChat($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getChatAdministrators($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getChatMembersCount($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getChatMember($chat_id, $user_id)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setChatStickerSet($chat_id, $sticker_set_name)
    {
        $params = "?chat_id=$chat_id&sticker_set_name=$sticker_set_name";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteChatStickerSet($chat_id)
    {
        $params = "?chat_id=$chat_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function answerCallbackQuery($callback_query_id, $optional = null)
    {
        $params = "?callback_query_id=$callback_query_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setMyCommands($commands)
    {
        $params = "?commands=$commands";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getMyCommands()
    {
        return $this->apiGetContent();
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editMessageText($chat_id, $message_id, $text, $optional = null)
    {
        $params = "?chat_id=$chat_id&message_id=$message_id&text=$text $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editMessageCaption($chat_id, $message_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&message_id=$message_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editMessageMedia($chat_id, $media, $optional = null)
    {
        $params = "?chat_id=$chat_id&media=$media $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editMessageReplyMarkup($chat_id, $message_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&message_id=$message_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function stopPoll($chat_id, $message_id)
    {
        $params = "?chat_id=$chat_id&message_id=$message_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteMessage($chat_id, $message_id)
    {
        $params = "?chat_id=$chat_id&message_id=$message_id";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendSticker($chat_id, $sticker, $optional = null)
    {
        $params = "?chat_id=$chat_id&sticker=$sticker $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getStickerSet($name)
    {
        $params = "?name=$name";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function uploadStickerFile($user_id, $png_sticker)
    {
        $params = "?user_id=$user_id&png_sticker=$png_sticker";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function createNewStickerSet($user_id, $name, $title, $png_sticker, $emojis, $optional = null)
    {
        $params = "?user_id=$user_id&name=$name&title=$title&png_sticker=$png_sticker&emojis=$emojis $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function addStickerToSet($user_id, $name, $png_sticker, $emojis, $optional = null)
    {
        $params = "?user_id=$user_id&name=$name&png_sticker=$png_sticker&emojis=$emojis $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setStickerPositionInSet($sticker, $position)
    {
        $params = "?sticker=$sticker&position=$position";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteStickerFromSet($sticker)
    {
        $params = "?sticker=$sticker";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setStickerSetThumb($name, $user_id, $optional = null)
    {
        $params = "?name=$name&user_id=$user_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function answerInlineQuery($inline_query_id, $results, $optional = null)
    {
        $params = "?inline_query_id=$inline_query_id&results=$results $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendInvoice($chat_id, $title, $description, $payload, $provider_token, $start_parameter, $currency, $prices, $optional = null)
    {
        $params = "?chat_id=$chat_id&title=$title&description=$description&payload=$payload&provider_token=$provider_token&start_parameter=$start_parameter&currency=$currency&prices=$prices $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function answerShippingQuery($shipping_query_id, $ok, $optional = null  )
    {
        $params = "?shipping_query_id=$shipping_query_id&ok=$ok $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function answerPreCheckoutQuery($pre_checkout_query_id, $ok, $optional = null  )
    {
        $params = "?pre_checkout_query_id=$pre_checkout_query_id&ok=$ok $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setPassportDataErrors($user_id, $errors)
    {
        $params = "?user_id=$user_id&errors=$errors";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendGame($chat_id, $game_short_name, $optional = null)
    {
        $params = "?chat_id=$chat_id&game_short_name=$game_short_name $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setGameScore($chat_id, $user_id, $score, $optional = null)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id&score=$score $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getGameHighScores($chat_id, $user_id, $optional = null)
    {
        $params = "?chat_id=$chat_id&user_id=$user_id $optional";
        return $this->apiGetContent($params);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



}