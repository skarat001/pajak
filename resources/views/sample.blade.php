@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel">
        <div class="panel-body">

            <br>
            <div class="row">

                <div class="col-md-3" id="leftCol">
   @if (Auth::guest())
                       @include('layouts.login-sidebar')
                    @else
                        <li class="dropdown">
                           @include('layouts.account-sidebar')
                        </li>
                    @endif
                 
             </div>  
             <div class="col-md-9">
              <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel odio velit. Morbi est nulla, aliquam nec tristique ac, lacinia eget nibh. Ut lacinia ipsum pretium, faucibus quam pulvinar, pellentesque neque. Curabitur ut felis ac elit sollicitudin pretium vitae auctor elit. Aliquam nulla nisl, sollicitudin at tempus sit amet, viverra et mi. Suspendisse bibendum diam ac ligula pellentesque, a egestas metus varius. Integer tellus tellus, cursus vitae felis ac, imperdiet maximus lectus. In ultricies aliquet magna.
</p>
<p>
In quis blandit orci, ut tincidunt nisi. Cras ac enim malesuada, tincidunt quam ac, consectetur leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra elementum imperdiet. Mauris ultricies sagittis eleifend. Curabitur lacinia neque ac justo congue, sed pellentesque tellus ornare. Donec euismod congue efficitur. Proin odio turpis, congue sit amet eros at, bibendum placerat velit. Maecenas sapien massa, ultricies non lacus sed, blandit ultricies ligula. Nulla id tellus sit amet tellus dictum varius. Aliquam fringilla tempor hendrerit.
</p>
<p>
Praesent ullamcorper elit et erat vehicula molestie. Donec nec mauris eu erat consectetur tincidunt. Suspendisse urna dui, iaculis et viverra sit amet, dapibus eget elit. Sed id efficitur velit. Quisque urna ex, porttitor in sagittis sit amet, mattis id eros. Praesent ut lacinia sem. Morbi vestibulum quis enim sed hendrerit. Nulla vel suscipit mi, sed tincidunt erat. Morbi eu magna dui. Suspendisse nunc nunc, tincidunt quis placerat at, viverra id justo.
</p>
<img src="http://image.shutterstock.com/z/stock-vector-vector-of-abstract-chart-and-info-graphic-116925163.jpg" width="80%"></img>
<p>Praesent dapibus sem sit amet nisl varius, in varius enim consequat. Nulla vitae est sed nulla tempus vehicula. Nullam facilisis mauris eu ullamcorper posuere. Donec iaculis nisi ac egestas imperdiet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam venenatis non ipsum in egestas. Curabitur ipsum nibh, tempor id tempor ut, iaculis eu ipsum. Suspendisse sit amet ipsum tempus, auctor augue sit amet, consequat lacus. Aliquam ut sapien a turpis hendrerit porta. Quisque ligula orci, tempus quis dolor nec, vulputate sodales ligula. Sed magna mauris, sollicitudin vel condimentum eleifend, condimentum quis lorem. Sed sed tempor nibh.
</p>
<img src="http://lh5.ggpht.com/_YOfW2oJRsso/TUM5RwaOq-I/AAAAAAAAAy0/UgtRNGug858/MoneyWell%20Jan%202011%20MAS.png?imgmax=800"></img>
</div>
</div>
</div>

</div>
</div>
<script >
$( document ).ready(function() {
      $(function () {
                $('#datetimepicker1').datetimepicker({
                     format: 'L'
                });
            });
      });
</script>

@stop
@section('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   
  <script type="text/javascript" src="{{ asset("/bower_components/moment/min/moment.min.js")}}"></script>

  <script type="text/javascript" src="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js")}}"></script>

  <script >
$( document ).ready(function() {
      $(function () {
                $('#datetimepicker1').datetimepicker({
                     format: 'L'
                });
            });
      });
</script>
@stop


@section('styles')
  <link rel="stylesheet" href="{{ asset("/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css")}}" />
  @show
