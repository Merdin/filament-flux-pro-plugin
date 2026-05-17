@php
    $avatarSchema = $getChildSchema($schemaComponent::AVATAR_SCHEMA_KEY);
@endphp
<x-flux::profile
    :name="$getName()"
    :avatar="$getAvatar()"
    :avatar:name="$getAvatarName()"
    :avatar:color="$getAvatarColor()"
    :circle="$getCircle() ?: null"
    :initials="$getInitials()"
    :chevron="$getChevron()"
    :icon:trailing="$getIconTrailing()"
    :icon:variant="$getIconVariant()"
>
    @if ($avatarSchema)<x-slot name="avatar">{{ $avatarSchema }}</x-slot>@endif
</x-flux::profile>
