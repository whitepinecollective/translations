<?php

return [
    'system_visibility' => [
        'public' => 'Publico',
        'friends' => 'Solo amigos',
        'private' => 'Privado',
    ],

    'system_import_status' => [
        'pending' => 'Pendiente',
        'processing' => 'Procesando',
        'completed' => 'Completado',
        'completed_with_errors' => 'Completado con errores',
        'failed' => 'Fallido',
    ],

    'system_user_role' => [
        'owner' => 'Propietario',
        'admin' => 'Administrador',
        'partner' => 'Pareja',
        'trusted' => 'Amigo cercano',
        'read_only' => 'Amigo',
    ],

    'custom_field_type' => [
        'text' => 'Texto',
        'number' => 'Numero',
        'date' => 'Fecha',
        'link' => 'Enlace',
        'color' => 'Color',
        'textarea' => 'Campo de texto',
        'markdown' => 'Markdown',
        'block_editor' => 'Block Editor',
    ],

    'custom_field_type_description' => [
        'text' => 'A simple text field for short inputs.',
        'number' => 'A field that accepts numeric input only.',
        'date' => 'A field for selecting a date.',
        'link' => 'A field for entering a URL.',
        'color' => 'A field for picking a color.',
        'textarea' => 'A larger text area for longer inputs.',
        'markdown' => 'A text field that supports Markdown formatting.',
        'block_editor' => 'An advanced editor for creating rich content with blocks.',
    ],

    'system_permission' => [
        'front.edit' => 'Update :front',
        'front.view' => 'View :front status',
        'journal.view' => 'View journal',
        'journal.edit' => 'Write journal',
        'members.view' => 'View :members',
        'members.map' => 'View :system map',
        'members.edit' => 'Manage :members',
        'custom-fields.view' => 'View custom fields',
        'chat.use' => 'Use chat',
        'polls.view' => 'View polls',
        'polls.edit' => 'Manage polls',
        'system.manage' => 'Manage :system',
        'device-tokens.manage' => 'Manage device tokens',

        'notes.view' => 'View notes',
        'notes.edit' => 'Manage notes',

        'front.edit_description' => 'Log and update who is currently :fronting',
        'front.view_description' => 'See who is currently :fronting',
        'journal.view_description' => 'Read journal entries up to their permitted tier',
        'journal.edit_description' => 'Create and edit journal entries',
        'members.view_description' => 'View :system :members and their profiles',
        'members.map_description' => 'View the :system map showing :member relationships',
        'members.edit_description' => 'Add, edit, and archive :system :members',
        'custom-fields.view_description' => 'View custom fields on :member profiles',
        'chat.use_description' => 'Send and receive messages in the :system chat',
        'polls.view_description' => 'View polls and vote on them',
        'polls.edit_description' => 'Create, edit, and delete polls',
        'notes.view_description' => 'View notes created by :system :members',
        'notes.edit_description' => 'Create, edit, and delete notes',
        'system.manage_description' => 'Change :system settings and privacy tiers',
        'device-tokens.manage_description' => 'Manage device push notification tokens',
    ],

    'activity_action' => [
        'created' => 'Created',
        'updated' => 'Updated',
        'deleted' => 'Deleted',
        'archived' => 'Archived',
        'restored' => 'Restored',
        'started' => 'Started',
        'ended' => 'Ended',
    ],

    'poll_status' => [
        'open' => 'Open',
        'closed' => 'Closed',
        'open_description' => 'Poll is accepting votes',
        'closed_description' => 'Poll is no longer accepting votes',
    ],

    'access_request_status' => [
        'pending' => 'Pending',
        'approved' => 'Approved',
        'denied' => 'Denied',
    ],

    'report_status' => [
        'pending' => 'Pending',
        'upheld' => 'Upheld',
        'dismissed' => 'Dismissed',
    ],

    'member_visibility' => [
        'public' => 'Everyone',
        'friend' => 'Friends & above',
        'trusted' => 'Trusted & above',
        'partner' => 'Partners & above',
        'admin' => 'Admins & above',
        'owner_only' => 'Owner only',
    ],

    'profile_visibility' => [
        'public' => 'Public',
        'friends' => 'Friends only',
        'private' => 'Private',
        'hidden' => 'Hidden',
    ],

    'layout_preset' => [
        'classic' => 'Classic',
        'card_grid' => 'Card Grid',
        'minimal' => 'Minimal',
        'bold' => 'Bold',
        'classic_description' => 'A traditional profile layout with a linear flow',
        'card_grid_description' => 'Members displayed in a card-based grid layout',
        'minimal_description' => 'A clean, distraction-free layout',
        'bold_description' => 'A striking layout with large typography and vibrant sections',
    ],

    'spacing_scale' => [
        'compact' => 'Compact',
        'default' => 'Default',
        'spacious' => 'Spacious',
    ],

    'border_radius' => [
        'none' => 'None',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
        'full' => 'Full',
    ],

    'data_export_format' => [
        'json' => 'JSON',
        'html' => 'HTML',
    ],

    'front_type' => [
        'front' => 'Front',
        'co_front' => 'Co-Front',
        'co_con' => 'Co-Con',
    ],

    'system_mood' => [
        'calm' => 'Calm',
        'energetic' => 'Energetic',
        'tired' => 'Tired',
        'anxious' => 'Anxious',
        'happy' => 'Happy',
        'foggy' => 'Foggy',
        'stressed' => 'Stressed',
        'cozy' => 'Cozy',
        'calm_tagline' => 'The headspace is calm and settled.',
        'energetic_tagline' => 'The headspace is buzzing with energy.',
        'tired_tagline' => 'The headspace is running low on spoons.',
        'anxious_tagline' => 'The headspace is a little uneasy right now.',
        'happy_tagline' => 'The headspace is feeling warm and bright.',
        'foggy_tagline' => 'The headspace is hazy — take it slow.',
        'stressed_tagline' => 'The headspace is under some pressure.',
        'cozy_tagline' => 'The headspace feels safe and cozy.',
    ],

    'notification_type' => [
        'front_changed' => 'Front Changed',
        'admin_announcement' => 'Admin Announcement',
        'data_export_completed' => 'Data Export Completed',
        'data_export_failed' => 'Data Export Failed',
        'user_invited' => 'User Invited',
        'user_joined' => 'User Joined',
        'user_removed' => 'User Removed',
        'role_changed' => 'Role Changed',
        'invitation_received' => 'Invitation Received',
    ],

    'notification_description' => [
        'front_changed' => 'Receive a notification when the front changes.',
        'admin_announcement' => 'Receive important announcements from system administrators.',
        'data_export_completed' => 'Get notified when your data export is ready to download.',
        'data_export_failed' => 'Get notified if there was an issue with your data export.',
        'user_invited' => 'Receive a notification when you are invited to join a system.',
        'user_joined' => 'Get notified when a new user joins the system.',
        'user_removed' => 'Receive a notification if you are removed from the system.',
        'role_changed' => 'Get notified if your role or permissions change within the system.',
        'invitation_received' => 'Get notified in-app when someone invites you to join their system.',
    ],
];
