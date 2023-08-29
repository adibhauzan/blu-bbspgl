<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('components/icon.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 
  <script type="text/javascript" src="{{ asset('turnjs4/docs/extras/jquery.min.1.7.js') }}"></script>
  <script type="text/javascript" src="{{ asset('turnjs4/docs/extras/jquery-ui-1.8.20.custom.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('turnjs4/docs/extras/jquery.mousewheel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('turnjs4/docs/extras/modernizr.2.5.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('turnjs4/docs/lib/hash.js') }}"></script>
  <style type="text/css">
      /* Chart.js */
      @keyframes chartjs-render-animation {
          from {
              opacity: .99
          }

          to {
              opacity: 1
          }
      }

      .chartjs-render-monitor {
          animation: chartjs-render-animation 1ms
      }

      .chartjs-size-monitor,
      .chartjs-size-monitor-expand,
      .chartjs-size-monitor-shrink {
          position: absolute;
          direction: ltr;
          left: 0;
          top: 0;
          right: 0;
          bottom: 0;
          overflow: hidden;
          pointer-events: none;
          visibility: hidden;
          z-index: -1
      }

      .chartjs-size-monitor-expand>div {
          position: absolute;
          width: 1000000px;
          height: 1000000px;
          left: 0;
          top: 0
      }

      .chartjs-size-monitor-shrink>div {
          position: absolute;
          width: 200%;
          height: 200%;
          left: 0;
          top: 0
      }
  </style>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('title')
</head>
