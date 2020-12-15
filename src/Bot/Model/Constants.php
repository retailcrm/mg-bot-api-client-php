<?php

/**
 * PHP version 7.1
 *
 * Constants
 *
 * @package  RetailCrm\Mg\Bot\Model
 */

namespace RetailCrm\Mg\Bot\Model;

/**
 * Constants class
 *
 * @package  RetailCrm\Mg\Bot\Model
 */
class Constants
{
    const CHANNEL_TYPE_TELEGRAM   = "telegram";
    const CHANNEL_TYPE_FACEBOOK   = "fbmessenger";
    const CHANNEL_TYPE_VIBER      = "viber";
    const CHANNEL_TYPE_WHATSAPP   = "whatsapp";
    const CHANNEL_TYPE_SKYPE      = "skype";
    const CHANNEL_TYPE_VK         = "vk";
    const CHANNEL_TYPE_INSTAGRAM  = "instagram";
    const CHANNEL_TYPE_CONSULTANT = "consultant";
    const CHANNEL_TYPE_CUSTOM     = "custom";

    const CHAT_MEMBER_STATE_ACTIVE = "active";
    const CHAT_MEMBER_STATE_KICKED = "kicked";
    const CHAT_MEMBER_STATE_LEAVED = "leaved";

    const CHANNEL_FEATURE_NONE    = "none";
    const CHANNEL_FEATURE_RECEIVE = "receive";
    const CHANNEL_FEATURE_SEND    = "send";
    const CHANNEL_FEATURE_BOTH    = "both";

    const BOT_ROLE_DISTRIBUTOR = "distributor";
    const BOT_ROLE_RESPONSIBLE = "responsible";

    const MESSAGE_SCOPE_PUBLIC  = "public";
    const MESSAGE_SCOPE_PRIVATE = "private";

    const MESSAGE_TYPE_TEXT    = "text";
    const MESSAGE_TYPE_SYSTEM  = "system";
    const MESSAGE_TYPE_COMMAND = "command";
    const MESSAGE_TYPE_ORDER   = "order";
    const MESSAGE_TYPE_PRODUCT = "product";
    const MESSAGE_TYPE_FILE    = "file";
    const MESSAGE_TYPE_IMAGE   = "image";

    const MESSAGE_ORDER_STATUS_CODE_NEW        = "new";
    const MESSAGE_ORDER_STATUS_CODE_APPROVAL   = "approval";
    const MESSAGE_ORDER_STATUS_CODE_ASSEMBLING = "assembling";
    const MESSAGE_ORDER_STATUS_CODE_DELIVERY   = "delivery";
    const MESSAGE_ORDER_STATUS_CODE_COMPLETE   = "complete";
    const MESSAGE_ORDER_STATUS_CODE_CANCEL     = "cancel";

    const WS_EVENT_MESSAGE_NEW         = "message_new";
    const WS_EVENT_MESSAGE_UPDATED     = "message_updated";
    const WS_EVENT_MESSAGE_DELETED     = "message_deleted";
    const WS_EVENT_DIALOG_OPENED       = "dialog_opened";
    const WS_EVENT_DIALOG_CLOSED       = "dialog_closed";
    const WS_EVENT_DIALOG_ASSIGN       = "dialog_assign";
    const WS_EVENT_CHAT_CREATED        = "chat_created";
    const WS_EVENT_CHAT_UPDATED        = "chat_updated";
    const WS_EVENT_CHAT_UNREAD_UPDATED = "chat_unread_updated";
    const WS_EVENT_USER_ONLINE_UPDATED = "user_online_updated";
    const WS_EVENT_USER_JOINED         = "user_joined_chat";
    const WS_EVENT_USER_LEAVE          = "user_left_chat";
    const WS_EVENT_USER_UPDATED        = "user_updated";
    const WS_EVENT_CUSTOMER_UPDATED    = "customer_updated";
    const WS_EVENT_BOT_UPDATED         = "bot_updated";
    const WS_EVENT_CHANNEL_UPDATED     = "channel_updated";
    const WS_EVENT_SETTINGS_UPDATED    = "settings_updated";
}
