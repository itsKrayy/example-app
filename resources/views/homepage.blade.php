<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="row full-width main">
        <div class="large-2 columns menu">
          <div class="info">
            <span>LJN &bull; Web maker</span>
          </div>
          <ul class="nav">
            <li class="active"><a href="#"><i class="fa fa-sliders"></i>Modules</a></li>
            <li><a href="#" id="generate" data-reveal-id="codemodal"><i class="fa fa-code"></i>Generate code</a>
          </ul>
        </div>
        {{-- <div class="large-2 columns modules">
          <ul class="modules-list">
            <li class="draggable" draggable="true"><img src="http://support.avathemes.com/wp-content/uploads/2013/07/Dreamer-Theme-Options-Pages-Blocks1.jpg" id="1"></li>
            <li class="draggable" draggable="true"><img src="http://www.anblik.com/wp-content/uploads/2015/11/header-online-website-builder-software-3.png" id="2"></li>
          </ul>
        </div> --}}
        <div class="large-8 columns selections">
          <div class="section" id="site">
            @foreach ($product as $list)
             <h3>{{  $list['musicgenre']  }} </h3>
             <p> {{ $list['desc'] }} </p>
            @endforeach
          </div>
        </div>
      </div>
      <div id="codemodal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Here's your code!.</h2>
        <textarea id="code"></textarea>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
      </div>
      <script src="js/"></script>
</body>
</html>