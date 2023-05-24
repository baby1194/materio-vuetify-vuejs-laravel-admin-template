<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="{{ asset('favicon.ico') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Materio - Vuetify Vuejs Admin Template</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('loader.css') }}" />
  @vite(['resources/ts/main.ts'])
</head>

<body>
  <div id="app">
    <div id="loading-bg">
      <div class="loading-logo">
        <!-- SVG Logo -->
        <svg width="86" height="48" viewBox="0 0 30 24" xmlns="http://www.w3.org/2000/svg">
          <g fill="none" fill-rule="evenodd">
            <path d="M30 21.392a2 2 0 0 1-3.027 1.716l-3.258-1.95a2 2 0 0 1-.973-1.716l-.001-6.7L15
              17.178l-7.742-4.434v6.7a2 2 0 0 1-.973 1.715l-3.258 1.95A2 2 0 0 1 0 21.392V3.585l.005-.15L0 3.572a2 2 0 0
              1 3.045-1.706L15 9.194l11.955-7.328A2 2 0 0 1 30 3.572Z" fill="var(--initial-loader-color)" />
            <path fill="var(--initial-loader-color)" opacity=".078" d="m0 8.589 7.258 4.162v4.08z" />
            <path fill="var(--initial-loader-color)" opacity=".078" d=" m0 8.589 7.258 4.056v2.492zm30 0-7.258
              4.153v4.212z" />
            <path fill="var(--initial-loader-color)" opacity=".078" d="m30 8.589-7.258 4.052v2.62z" />
            <path d="M3.045 1.866 15 9.194v7.983L0 8.587V3.571a2 2 0 0 1 3.045-1.706Z" fill-opacity=".15" fill="
              #FFF" />
            <path d="M26.955 1.866 15 9.194v7.983l15-8.59V3.571a2 2 0 0 0-3.045-1.706Z" fill-opacity=".35"
              fill="#FFF" />
          </g>
        </svg>
      </div>
      <div class="loading">
        <div class="effect-1 effects"></div>
        <div class="effect-2 effects"></div>
        <div class="effect-3 effects"></div>
      </div>
    </div>
  </div>
  
  <script>
    const loaderColor = localStorage.getItem('materio-initial-loader-bg') || '#FFFFFF'
    const primaryColor = localStorage.getItem('materio-initial-loader-color') || '#9155FD'

    if (loaderColor)
      document.documentElement.style.setProperty('--initial-loader-bg', loaderColor)

    if (primaryColor)
      document.documentElement.style.setProperty('--initial-loader-color', primaryColor)
  </script>
</body>

</html>
