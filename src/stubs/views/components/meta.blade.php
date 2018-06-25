<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:site_name" content="Influencer.BG">
<meta property="og:title" content="{{ $title }}">
<meta property="og:url" content="{{ $url }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ $image }}">
<meta property="og:image:width" content="1803"/>
<meta property="og:image:height" content="883"/>
<meta property="og:locale" content="{!! App::getLocale() !!}">
<meta property="og:description" content="{{ $description }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:url" content="{{ $url }}">
<meta name="twitter:card" content="summary">
<meta itemprop="url" content="{{ $url }}">
<meta itemprop="thumbnailUrl" content="{{ $image }}">
<meta itemprop="image" content="{{ $image }}">
<meta itemprop="name" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<title>{{ $title }}</title>
{{ $slot }}