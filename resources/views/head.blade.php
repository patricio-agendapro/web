<!DOCTYPE html>
<html lang="{{ Config::get('country.'.$locale.'.lang_location') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{ seo()->render() }}
  <link rel="shortcut icon" href="/assets/img/favicon.ico">

  <link rel="preload" href="/assets/fonts/roboto/roboto-400.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="/assets/fonts/roboto/roboto-500.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="/assets/fonts/roboto/roboto-700.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="/assets/fonts/unicons/Unicons.woff2" as="font" crossorigin="anonymous" />

  <style>

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/assets/fonts/roboto/roboto-400.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(/assets/fonts/roboto/roboto-500.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(/assets/fonts/roboto/roboto-700.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Unicons';
    src: url('/assets/fonts/unicons/Unicons.woff2') format('woff2');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
  }
  </style>
  
  <link rel="stylesheet" href="/assets/css/style.css" rel="preload" as="style">

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F7NH5TV3ZY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F7NH5TV3ZY');
</script>

</head>



<body class="{{ $meta['bodyclass'] }}">
  <div class="content-wrapper">
