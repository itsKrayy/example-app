<h1><?php echo $title ?> </h1>
<h2><?php echo $heading ?> </h2>

@foreach ($product as $list)
    <h3>{{  $list['flavor']  }} </h3>
    <p> {{ $list['desc'] }} </p>
@endforeach
